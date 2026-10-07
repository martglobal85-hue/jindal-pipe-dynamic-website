<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\StoreProductRequest;
use App\Http\Requests\Admin\UpdateProductRequest;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ProductController extends CrudController
{
    protected array $pdfFields = ['pdf'];
    protected string $pdfUploadDir = 'product-pdf';

    protected string $modelClass = Product::class;
    protected string $routeName = 'admin.products';
    protected string $viewPath = 'admin.products';
    protected string $label = 'Product';
    protected string $uploadDir = 'product';
    protected array $imageFields = ['image'];
    protected array $searchColumns = ['title', 'subtitle'];

    

    public function index(Request $request)
    {
        return $this->listing($request);
    }

    public function create()
    {
        return $this->createView();
    }

    public function store(StoreProductRequest $request): RedirectResponse
    {
        return $this->storeRecord($request);
    }

    public function edit(Product $product)
    {
        return $this->editView($product);
    }

    public function update(UpdateProductRequest $request, Product $product): RedirectResponse
    {
        return $this->updateRecord($request, $product);
    }

    public function destroy(Product $product): RedirectResponse
    {
        return $this->destroyRecord($product);
    }

    protected array $with = ['category'];
    protected array $withCount = ['contents', 'tableContents', 'galleries'];

    protected function formData(): array
    {
        return [
            'categories' => ProductCategory::orderBy('title')->get(['id', 'title']),
        ];
    }

    protected function applyFilters(Builder $query, Request $request): void
    {
        if ($slug = $request->query('category')) {
            $query->whereHas('category', fn ($q) => $q->where('slug', $slug));
        }
    }

    protected function indexData(Request $request): array
    {
        $slug = $request->query('category');

        return [
            'filterCategory' => $slug ? ProductCategory::where('slug', $slug)->first(['id', 'title', 'slug']) : null,
        ];
    }

    protected function collectImagePaths(Model $record): array
    {
        $paths = parent::collectImagePaths($record);

        foreach ($record->contents as $content) {
            $paths[] = $content->image;
        }

        foreach ($record->galleries as $gallery) {
            $paths[] = $gallery->image;
        }

        return array_values(array_filter($paths));
    }

    protected function deleteRecord(Model $record): void
    {
        // galleries use nullOnDelete, so remove product galleries explicitly
        $record->galleries()->delete();

        $record->delete();
    }
}
