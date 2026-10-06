<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\StoreGalleryRequest;
use App\Http\Requests\Admin\UpdateGalleryRequest;
use App\Models\Gallery;
use App\Models\Product;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class GalleryController extends CrudController
{
    protected string $modelClass = Gallery::class;
    protected string $routeName = 'admin.gallery';
    protected string $viewPath = 'admin.gallery';
    protected string $label = 'Gallery Image';
    protected string $uploadDir = 'gallery';
    protected array $imageFields = ['image'];
    protected array $searchColumns = ['title'];

    public function index(Request $request)
    {
        return $this->listing($request);
    }

    public function create()
    {
        return $this->createView();
    }

    public function store(StoreGalleryRequest $request): RedirectResponse
    {
        return $this->storeRecord($request);
    }

    public function edit(Gallery $gallery)
    {
        return $this->editView($gallery);
    }

    public function update(UpdateGalleryRequest $request, Gallery $gallery): RedirectResponse
    {
        return $this->updateRecord($request, $gallery);
    }

    public function destroy(Gallery $gallery): RedirectResponse
    {
        return $this->destroyRecord($gallery);
    }

    protected array $with = ['product'];

    protected function formData(): array
    {
        $slug = request()->query('product');

        return [
            'products' => Product::orderBy('title')->get(['id', 'title']),
            'preselectProductId' => $slug ? Product::where('slug', $slug)->value('id') : null,
        ];
    }

    protected function applyFilters(Builder $query, Request $request): void
    {
        if ($slug = $request->query('product')) {
            $query->whereHas('product', fn ($q) => $q->where('slug', $slug));
        } elseif ($request->query('type') === 'general') {
            $query->whereNull('product_id');
        } elseif ($request->query('type') === 'product') {
            $query->whereNotNull('product_id');
        }
    }

    protected function indexData(Request $request): array
    {
        $slug = $request->query('product');

        return [
            'filterProduct' => $slug ? Product::where('slug', $slug)->first(['id', 'title', 'slug']) : null,
        ];
    }

    /** General gallery => product_id is forced to NULL; gallery_type is not a column. */
    protected function prepareData(array $data): array
    {
        $type = $data['gallery_type'] ?? 'general';
        unset($data['gallery_type']);

        if ($type === 'general') {
            $data['product_id'] = null;
        }

        return $data;
    }
}
