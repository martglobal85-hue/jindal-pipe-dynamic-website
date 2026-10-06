<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\StoreProductCategoryRequest;
use App\Http\Requests\Admin\UpdateProductCategoryRequest;
use App\Models\Gallery;
use App\Models\ProductCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ProductCategoryController extends CrudController
{
    protected string $modelClass = ProductCategory::class;
    protected string $routeName = 'admin.product-categories';
    protected string $viewPath = 'admin.product-categories';
    protected string $label = 'Product Category';
    protected string $uploadDir = 'product-category';
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

    public function store(StoreProductCategoryRequest $request): RedirectResponse
    {
        return $this->storeRecord($request);
    }

    public function edit(ProductCategory $productCategory)
    {
        return $this->editView($productCategory);
    }

    public function update(UpdateProductCategoryRequest $request, ProductCategory $productCategory): RedirectResponse
    {
        return $this->updateRecord($request, $productCategory);
    }

    public function destroy(ProductCategory $productCategory): RedirectResponse
    {
        return $this->destroyRecord($productCategory);
    }

    protected array $withCount = ['products'];

    protected function collectImagePaths(Model $record): array
    {
        $record->load('products.contents', 'products.galleries');

        $paths = parent::collectImagePaths($record);

        foreach ($record->products as $product) {
            $paths[] = $product->image;

            foreach ($product->contents as $content) {
                $paths[] = $content->image;
            }

            foreach ($product->galleries as $gallery) {
                $paths[] = $gallery->image;
            }
        }

        return array_values(array_filter($paths));
    }

    protected function deleteRecord(Model $record): void
    {
        // galleries use nullOnDelete, so remove product galleries explicitly
        Gallery::whereIn('product_id', $record->products()->pluck('id'))->delete();

        $record->delete();
    }
}
