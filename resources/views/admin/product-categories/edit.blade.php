@extends('admin.layouts.app')

@section('title', 'Edit Product Category')

@section('content')
    <x-admin.page-heading title="Edit Product Category" :breadcrumbs="[['Dashboard', route('admin.dashboard')], ['Product Categories', route('admin.product-categories.index')], ['Edit Product Category']]" />

    <form action="{{ route('admin.product-categories.update', $record) }}" method="POST" enctype="multipart/form-data" novalidate data-loading-form>
        @csrf
        @method('PUT')
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
