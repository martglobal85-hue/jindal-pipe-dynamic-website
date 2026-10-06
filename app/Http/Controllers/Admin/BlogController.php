<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\StoreBlogRequest;
use App\Http\Requests\Admin\UpdateBlogRequest;
use App\Models\Blog;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class BlogController extends CrudController
{
    protected string $modelClass = Blog::class;
    protected string $routeName = 'admin.blogs';
    protected string $viewPath = 'admin.blogs';
    protected string $label = 'Blog';
    protected string $uploadDir = 'blog';
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

    public function store(StoreBlogRequest $request): RedirectResponse
    {
        return $this->storeRecord($request);
    }

    public function edit(Blog $blog)
    {
        return $this->editView($blog);
    }

    public function update(UpdateBlogRequest $request, Blog $blog): RedirectResponse
    {
        return $this->updateRecord($request, $blog);
    }

    public function destroy(Blog $blog): RedirectResponse
    {
        return $this->destroyRecord($blog);
    }
}
