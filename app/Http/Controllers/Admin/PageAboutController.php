<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\StorePageAboutRequest;
use App\Http\Requests\Admin\UpdatePageAboutRequest;
use App\Models\PageAbout;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PageAboutController extends CrudController
{
    protected string $modelClass = PageAbout::class;
    protected string $routeName = 'admin.page-about';
    protected string $viewPath = 'admin.page-about';
    protected string $label = 'Page About';
    protected string $uploadDir = 'page-about';
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

    public function store(StorePageAboutRequest $request): RedirectResponse
    {
        return $this->storeRecord($request);
    }

    public function edit(PageAbout $pageAbout)
    {
        return $this->editView($pageAbout);
    }

    public function update(UpdatePageAboutRequest $request, PageAbout $pageAbout): RedirectResponse
    {
        return $this->updateRecord($request, $pageAbout);
    }

    public function destroy(PageAbout $pageAbout): RedirectResponse
    {
        return $this->destroyRecord($pageAbout);
    }
}
