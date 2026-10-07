@extends('admin.layouts.app')

@section('title', 'Edit Product Quality')

@section('content')
    <x-admin.page-heading title="Edit Product Quality" :breadcrumbs="[['Dashboard', route('admin.dashboard')], ['Product Qualities', route('admin.product-qualities.index')], ['Edit Product Quality']]" />

    <form action="{{ route('admin.product-qualities.update', $record) }}" method="POST" enctype="multipart/form-data" novalidate data-loading-form>
        @csrf
        @method('PUT')
        <x-admin.form-errors />

        <div class="card admin-card">
            <div class="card-body">
                @include('admin.product-qualities._form')
            </div>
            <div class="card-footer d-flex flex-wrap gap-2">
                <button type="submit" class="btn btn-primary"><i class="bi bi-check-lg me-1"></i>Save</button>
                <a href="{{ route('admin.product-qualities.index') }}" class="btn btn-light border">Cancel</a>
            </div>
        </div>
    </form>
@endsection
