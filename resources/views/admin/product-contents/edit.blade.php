@extends('admin.layouts.app')

@section('title', 'Edit Product Content')

@section('content')
    <x-admin.page-heading title="Edit Product Content" :breadcrumbs="[['Dashboard', route('admin.dashboard')], ['Products', route('admin.products.index')], [$product->title, route('admin.products.edit', $product)], ['Product Content', route('admin.products.contents.index', $product)], ['Edit Product Content']]" />

    <form action="{{ route('admin.products.contents.update', [$product, $record]) }}" method="POST" enctype="multipart/form-data" novalidate data-loading-form>
        @csrf
        @method('PUT')
        <x-admin.form-errors />

        <div class="card admin-card">
            <div class="card-body">
                @include('admin.product-contents._form')
            </div>
            <div class="card-footer d-flex flex-wrap gap-2">
                <button type="submit" class="btn btn-primary"><i class="bi bi-check-lg me-1"></i>Save</button>
                <a href="{{ route('admin.products.contents.index', $product) }}" class="btn btn-light border">Cancel</a>
            </div>
        </div>
    </form>
@endsection
