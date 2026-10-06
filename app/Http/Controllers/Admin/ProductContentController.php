<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\StoreProductContentRequest;
use App\Http\Requests\Admin\UpdateProductContentRequest;
use App\Models\Product;
use App\Models\ProductContent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ProductContentController extends CrudController
{
    protected string $modelClass = ProductContent::class;
    protected string $routeName = 'admin.products.contents';
    protected string $viewPath = 'admin.product-contents';
    protected string $label = 'Product Content';
    protected string $uploadDir = 'product-content';
    protected array $imageFields = ['image'];
    protected array $searchColumns = ['title'];
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

    public function store(StoreProductContentRequest $request, Product $product): RedirectResponse
    {
        $this->product = $product;

        return $this->storeRecord($request, ['product_id' => $product->id]);
    }

    public function edit(Product $product, ProductContent $content)
    {
        $this->product = $product;

        return $this->editView($content);
    }

    public function update(UpdateProductContentRequest $request, Product $product, ProductContent $content): RedirectResponse
    {
        $this->product = $product;

        return $this->updateRecord($request, $content);
    }

    public function destroy(Product $product, ProductContent $content): RedirectResponse
    {
        $this->product = $product;

        return $this->destroyRecord($content);
    }

    protected function baseQuery(): Builder
    {
        return ProductContent::query()->where('product_id', $this->product->id);
    }

    protected function sharedViewData(): array
    {
        return ['product' => $this->product];
    }

    protected function indexUrl(): string
    {
        return route('admin.products.contents.index', $this->product);
    }
}
