<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\StoreApplicationRequest;
use App\Http\Requests\Admin\UpdateApplicationRequest;
use App\Models\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ApplicationController extends CrudController
{
    protected string $modelClass = Application::class;
    protected string $routeName = 'admin.applications';
    protected string $viewPath = 'admin.applications';
    protected string $label = 'Application';
    protected string $uploadDir = 'application';
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

    public function store(StoreApplicationRequest $request): RedirectResponse
    {
        return $this->storeRecord($request);
    }

    public function edit(Application $application)
    {
        return $this->editView($application);
    }

    public function update(UpdateApplicationRequest $request, Application $application): RedirectResponse
    {
        return $this->updateRecord($request, $application);
    }

    public function destroy(Application $application): RedirectResponse
    {
        return $this->destroyRecord($application);
    }
}
