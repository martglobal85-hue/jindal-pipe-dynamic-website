<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\StoreTeamRequest;
use App\Http\Requests\Admin\UpdateTeamRequest;
use App\Models\Team;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class TeamController extends CrudController
{
    protected string $modelClass = Team::class;
    protected string $routeName = 'admin.team';
    protected string $viewPath = 'admin.team';
    protected string $label = 'Team Member';
    protected string $uploadDir = 'team';
    protected array $imageFields = ['image'];
    protected array $searchColumns = ['title', 'text'];

    public function index(Request $request)
    {
        return $this->listing($request);
    }

    public function create()
    {
        return $this->createView();
    }

    public function store(StoreTeamRequest $request): RedirectResponse
    {
        return $this->storeRecord($request);
    }

    public function edit(Team $team)
    {
        return $this->editView($team);
    }

    public function update(UpdateTeamRequest $request, Team $team): RedirectResponse
    {
        return $this->updateRecord($request, $team);
    }

    public function destroy(Team $team): RedirectResponse
    {
        return $this->destroyRecord($team);
    }
}
