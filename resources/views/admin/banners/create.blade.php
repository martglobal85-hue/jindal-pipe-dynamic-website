@extends('admin.layouts.app')

@section('title', 'Add Banner')

@section('content')
    <x-admin.page-heading title="Add Banner" :breadcrumbs="[['Dashboard', route('admin.dashboard')], ['Banners', route('admin.banners.index')], ['Add Banner']]" />

    <form action="{{ route('admin.banners.store') }}" method="POST" enctype="multipart/form-data" novalidate data-loading-form>
        @csrf
        <x-admin.form-errors />

        <div class="card admin-card">
            <div class="card-body">
                @include('admin.banners._form')
            </div>
            <div class="card-footer d-flex flex-wrap gap-2">
                <button type="submit" class="btn btn-primary"><i class="bi bi-check-lg me-1"></i>Save</button>
                <a href="{{ route('admin.banners.index') }}" class="btn btn-light border">Cancel</a>
            </div>
        </div>
    </form>
@endsection
