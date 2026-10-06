<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Traits\HandlesFileUpload;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Throwable;

/**
 * Shared plumbing for the admin CRUD controllers. Validation lives in Form
 * Requests (never here); each concrete controller only declares its config and
 * delegates to these helpers.
 */
abstract class CrudController extends Controller
{
    use HandlesFileUpload;

    /** @var class-string<Model> */
    protected string $modelClass;
    protected string $routeName;
    protected string $viewPath;
    protected string $label;
    protected string $uploadDir;
    protected array $imageFields = ['image'];
    protected array $searchColumns = ['title'];
    protected array $with = [];
    protected array $withCount = [];
    protected int $perPage = 10;

    /* -------------------- hooks (override when needed) -------------------- */

    protected function baseQuery(): Builder
    {
        return $this->modelClass::query();
    }

    protected function applyFilters(Builder $query, Request $request): void
    {
    }

    protected function indexData(Request $request): array
    {
        return [];
    }

    protected function sharedViewData(): array
    {
        return [];
    }

    protected function formData(): array
    {
        return [];
    }

    protected function prepareData(array $data): array
    {
        return $data;
    }

    protected function indexUrl(): string
    {
        return route($this->routeName . '.index');
    }

    protected function collectImagePaths(Model $record): array
    {
        $paths = [];

        foreach ($this->imageFields as $field) {
            $paths[] = $record->getAttribute($field);
        }

        return array_values(array_filter($paths));
    }

    protected function deleteRecord(Model $record): void
    {
        $record->delete();
    }

    /* ------------------------------ views ------------------------------ */

    protected function listing(Request $request)
    {
        $search = trim((string) $request->query('search', ''));

        $query = $this->baseQuery()
            ->with($this->with)
            ->withCount($this->withCount);

        if ($search !== '') {
            $query->where(function (Builder $q) use ($search) {
                foreach ($this->searchColumns as $index => $column) {
                    $method = $index === 0 ? 'where' : 'orWhere';
                    $q->{$method}($column, 'like', '%' . $search . '%');
                }
            });
        }

        $this->applyFilters($query, $request);

        $records = $query->latest()->paginate($this->perPage)->withQueryString();

        return view(
            $this->viewPath . '.index',
            array_merge($this->sharedViewData(), $this->indexData($request), compact('records', 'search'))
        );
    }

    protected function createView()
    {
        return view(
            $this->viewPath . '.create',
            array_merge($this->sharedViewData(), $this->formData())
        );
    }

    protected function editView(Model $record)
    {
        return view(
            $this->viewPath . '.edit',
            array_merge($this->sharedViewData(), $this->formData(), compact('record'))
        );
    }

    /* ------------------------------ actions ------------------------------ */

    protected function storeRecord(FormRequest $request, array $extra = []): RedirectResponse
    {
        $uploaded = [];

        try {
            $data = $this->prepareData($request->safe()->except($this->imageFields));

            foreach ($this->imageFields as $field) {
                if ($request->hasFile($field)) {
                    $path = self::uploadImage($request->file($field), $this->uploadDir);
                    $data[$field] = $path;
                    $uploaded[] = $path;
                }
            }

            $record = $this->modelClass::create(array_merge($data, $extra));

            Log::info($this->label . ' created', $this->logContext($record));

            return redirect($this->indexUrl())->with('success', 'Record created successfully.');
        } catch (Throwable $e) {
            foreach ($uploaded as $path) {
                self::deleteImage($path);
            }

            return $this->failure('create', $e);
        }
    }

    protected function updateRecord(FormRequest $request, Model $record): RedirectResponse
    {
        $uploaded = [];
        $replaced = [];

        try {
            $data = $this->prepareData($request->safe()->except($this->imageFields));

            foreach ($this->imageFields as $field) {
                if ($request->hasFile($field)) {
                    $replaced[] = $record->getAttribute($field);
                    $path = self::uploadImage($request->file($field), $this->uploadDir);
                    $data[$field] = $path;
                    $uploaded[] = $path;
                }
            }

            $record->update($data);

            // New files are saved - the old ones can go.
            foreach ($replaced as $oldPath) {
                self::deleteImage($oldPath);
            }

            Log::info($this->label . ' updated', $this->logContext($record));

            return redirect($this->indexUrl())->with('success', 'Record updated successfully.');
        } catch (Throwable $e) {
            foreach ($uploaded as $path) {
                self::deleteImage($path);
            }

            return $this->failure('update', $e);
        }
    }

    protected function destroyRecord(Model $record): RedirectResponse
    {
        try {
            $paths = $this->collectImagePaths($record);
            $context = $this->logContext($record);

            DB::transaction(fn () => $this->deleteRecord($record));

            foreach ($paths as $path) {
                self::deleteImage($path);
            }

            Log::info($this->label . ' deleted', $context);

            return redirect($this->indexUrl())->with('success', 'Record deleted successfully.');
        } catch (Throwable $e) {
            return $this->failure('delete', $e, false);
        }
    }

    /* ------------------------------ helpers ------------------------------ */

    protected function logContext(Model $record): array
    {
        return [
            'id' => $record->getKey(),
            'slug' => $record->getAttribute('slug'),
            'admin_id' => auth('admin')->id(),
        ];
    }

    protected function failure(string $action, Throwable $e, bool $withInput = true): RedirectResponse
    {
        Log::error($this->label . ' ' . $action . ' failed', [
            'message' => $e->getMessage(),
            'trace' => $e->getTraceAsString(),
            'admin_id' => auth('admin')->id(),
        ]);

        $redirect = back();

        if ($withInput) {
            $redirect = $redirect->withInput();
        }

        return $redirect->with('error', 'Something went wrong. Please try again.');
    }
}
