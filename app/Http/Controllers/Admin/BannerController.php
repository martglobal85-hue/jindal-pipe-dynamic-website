<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\StoreBannerRequest;
use App\Http\Requests\Admin\UpdateBannerRequest;
use App\Models\Banner;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class BannerController extends CrudController
{
    protected string $modelClass = Banner::class;
    protected string $routeName = 'admin.banners';
    protected string $viewPath = 'admin.banners';
    protected string $label = 'Banner';
    protected string $uploadDir = 'banner';
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

    public function store(StoreBannerRequest $request): RedirectResponse
    {
        return $this->storeRecord($request);
    }

    public function edit(Banner $banner)
    {
        return $this->editView($banner);
    }

    public function update(UpdateBannerRequest $request, Banner $banner): RedirectResponse
    {
        return $this->updateRecord($request, $banner);
    }

    public function destroy(Banner $banner): RedirectResponse
    {
        return $this->destroyRecord($banner);
    }
}
