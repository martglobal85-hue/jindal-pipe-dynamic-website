<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\StoreWhyUsRequest;
use App\Http\Requests\Admin\UpdateWhyUsRequest;
use App\Models\WhyUs;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class WhyUsController extends CrudController
{
    protected string $modelClass = WhyUs::class;
    protected string $routeName = 'admin.why-us';
    protected string $viewPath = 'admin.why-us';
    protected string $label = 'Why Us';
    protected string $uploadDir = 'why-us';
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

    public function store(StoreWhyUsRequest $request): RedirectResponse
    {
        return $this->storeRecord($request);
    }

    public function edit(WhyUs $whyUs)
    {
        return $this->editView($whyUs);
    }

    public function update(UpdateWhyUsRequest $request, WhyUs $whyUs): RedirectResponse
    {
        return $this->updateRecord($request, $whyUs);
    }

    public function destroy(WhyUs $whyUs): RedirectResponse
    {
        return $this->destroyRecord($whyUs);
    }
}
