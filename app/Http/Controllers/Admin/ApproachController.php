<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\StoreApproachRequest;
use App\Http\Requests\Admin\UpdateApproachRequest;
use App\Models\Approach;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ApproachController extends CrudController
{
    protected string $modelClass = Approach::class;
    protected string $routeName = 'admin.approach';
    protected string $viewPath = 'admin.approach';
    protected string $label = 'Approach';
    protected string $uploadDir = 'approach';
    protected array $imageFields = ['visionimage', 'missionimage', 'ourcompanyimage'];
    protected array $searchColumns = ['visiontitle', 'missiontitle', 'ourcompanytitle'];

    public function index(Request $request)
    {
        return $this->listing($request);
    }

    public function create()
    {
        return $this->createView();
    }

    public function store(StoreApproachRequest $request): RedirectResponse
    {
        return $this->storeRecord($request);
    }

    public function edit(Approach $approach)
    {
        return $this->editView($approach);
    }

    public function update(UpdateApproachRequest $request, Approach $approach): RedirectResponse
    {
        return $this->updateRecord($request, $approach);
    }

    public function destroy(Approach $approach): RedirectResponse
    {
        return $this->destroyRecord($approach);
    }
}
