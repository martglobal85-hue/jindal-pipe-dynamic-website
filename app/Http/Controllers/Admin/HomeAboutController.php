<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\StoreHomeAboutRequest;
use App\Http\Requests\Admin\UpdateHomeAboutRequest;
use App\Models\HomeAbout;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class HomeAboutController extends CrudController
{
    protected string $modelClass = HomeAbout::class;
    protected string $routeName = 'admin.home-about';
    protected string $viewPath = 'admin.home-about';
    protected string $label = 'Home About';
    protected string $uploadDir = 'home-about';
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

    public function store(StoreHomeAboutRequest $request): RedirectResponse
    {
        return $this->storeRecord($request);
    }

    public function edit(HomeAbout $homeAbout)
    {
        return $this->editView($homeAbout);
    }

    public function update(UpdateHomeAboutRequest $request, HomeAbout $homeAbout): RedirectResponse
    {
        return $this->updateRecord($request, $homeAbout);
    }

    public function destroy(HomeAbout $homeAbout): RedirectResponse
    {
        return $this->destroyRecord($homeAbout);
    }
}
