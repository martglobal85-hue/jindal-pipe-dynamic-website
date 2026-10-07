<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\StoreProductQualityRequest;
use App\Http\Requests\Admin\UpdateProductQualityRequest;
use App\Models\ProductQuality;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ProductQualityController extends CrudController
{
    protected string $modelClass = ProductQuality::class;
    protected string $routeName = 'admin.product-qualities';
    protected string $viewPath = 'admin.product-qualities';
    protected string $label = 'Product Quality';
    protected string $uploadDir = 'product-quality';
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

    public function store(StoreProductQualityRequest $request): RedirectResponse
    {
        return $this->storeRecord($request);
    }

    public function edit(ProductQuality $productQuality)
    {
        return $this->editView($productQuality);
    }

    public function update(UpdateProductQualityRequest $request, ProductQuality $productQuality): RedirectResponse
    {
        return $this->updateRecord($request, $productQuality);
    }

    public function destroy(ProductQuality $productQuality): RedirectResponse
    {
        return $this->destroyRecord($productQuality);
    }
}
