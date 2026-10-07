<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\StoreQualityRequest;
use App\Http\Requests\Admin\UpdateQualityRequest;
use App\Models\Quality;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class QualityController extends CrudController
{
    protected string $modelClass = Quality::class;
    protected string $routeName = 'admin.quality';
    protected string $viewPath = 'admin.quality';
    protected string $label = 'Quality';
    protected string $uploadDir = 'quality';
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

    public function store(StoreQualityRequest $request): RedirectResponse
    {
        return $this->storeRecord($request);
    }

    public function edit(Quality $quality)
    {
        return $this->editView($quality);
    }

    public function update(UpdateQualityRequest $request, Quality $quality): RedirectResponse
    {
        return $this->updateRecord($request, $quality);
    }

    public function destroy(Quality $quality): RedirectResponse
    {
        return $this->destroyRecord($quality);
    }
}
