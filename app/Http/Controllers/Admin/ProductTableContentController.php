<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\StoreProductTableContentRequest;
use App\Http\Requests\Admin\UpdateProductTableContentRequest;
use App\Models\Product;
use App\Models\ProductTableContent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ProductTableContentController extends CrudController
{
    protected string $modelClass = ProductTableContent::class;
    protected string $routeName = 'admin.products.table-content';
    protected string $viewPath = 'admin.product-table-contents';
    protected string $label = 'Product Table Content';
    protected string $uploadDir = 'product-table-content';
    protected array $imageFields = [];
    protected array $searchColumns = ['title', 'text'];
    protected ?Product $product = null;

    public function index(Request $request, Product $product)
    {
        $this->product = $product;

        return $this->listing($request);
    }

    public function create(Product $product)
    {
        $this->product = $product;

        return $this->createView();
    }

    public function store(StoreProductTableContentRequest $request, Product $product): RedirectResponse
    {
        $this->product = $product;

        return $this->storeRecord($request, ['product_id' => $product->id]);
    }

    public function edit(Product $product, ProductTableContent $tableContent)
    {
        $this->product = $product;

        return $this->editView($tableContent);
    }

    public function update(UpdateProductTableContentRequest $request, Product $product, ProductTableContent $tableContent): RedirectResponse
    {
        $this->product = $product;

        return $this->updateRecord($request, $tableContent);
    }

    public function destroy(Product $product, ProductTableContent $tableContent): RedirectResponse
    {
        $this->product = $product;

        return $this->destroyRecord($tableContent);
    }

    protected function baseQuery(): Builder
    {
        return ProductTableContent::query()->where('product_id', $this->product->id);
    }

    protected function sharedViewData(): array
    {
        return ['product' => $this->product];
    }

    protected function indexUrl(): string
    {
        return route('admin.products.table-content.index', $this->product);
    }
}
