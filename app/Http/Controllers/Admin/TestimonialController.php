<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\StoreTestimonialRequest;
use App\Http\Requests\Admin\UpdateTestimonialRequest;
use App\Models\Testimonial;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class TestimonialController extends CrudController
{
    protected string $modelClass = Testimonial::class;
    protected string $routeName = 'admin.testimonials';
    protected string $viewPath = 'admin.testimonials';
    protected string $label = 'Testimonial';
    protected string $uploadDir = 'testimonial';
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

    public function store(StoreTestimonialRequest $request): RedirectResponse
    {
        return $this->storeRecord($request);
    }

    public function edit(Testimonial $testimonial)
    {
        return $this->editView($testimonial);
    }

    public function update(UpdateTestimonialRequest $request, Testimonial $testimonial): RedirectResponse
    {
        return $this->updateRecord($request, $testimonial);
    }

    public function destroy(Testimonial $testimonial): RedirectResponse
    {
        return $this->destroyRecord($testimonial);
    }
}
