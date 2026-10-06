@extends('admin.layouts.app')

@section('title', 'Add Product Category')

@section('content')
    <x-admin.page-heading title="Add Product Category" :breadcrumbs="[['Dashboard', route('admin.dashboard')], ['Product Categories', route('admin.product-categories.index')], ['Add Product Category']]" />

    <form action="{{ route('admin.product-categories.store') }}" method="POST" enctype="multipart/form-data" novalidate data-loading-form>
        @csrf
        <x-admin.form-errors />

        <div class="card admin-card">
            <div class="card-body">
                @include('admin.product-categories._form')
            </div>
            <div class="card-footer d-flex flex-wrap gap-2">
                <button type="submit" class="btn btn-primary"><i class="bi bi-check-lg me-1"></i>Save</button>
                <a href="{{ route('admin.product-categories.index') }}" class="btn btn-light border">Cancel</a>
            </div>
        </div>
    </form>
@endsection
