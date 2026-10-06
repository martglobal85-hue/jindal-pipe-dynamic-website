@extends('admin.layouts.app')

@section('title', 'Add Gallery Image')

@section('content')
    <x-admin.page-heading title="Add Gallery Image" :breadcrumbs="[['Dashboard', route('admin.dashboard')], ['Gallery', route('admin.gallery.index')], ['Add Gallery Image']]" />

    <form action="{{ route('admin.gallery.store') }}" method="POST" enctype="multipart/form-data" novalidate data-loading-form>
        @csrf
        <x-admin.form-errors />

        <div class="card admin-card">
            <div class="card-body">
                @include('admin.gallery._form')
            </div>
            <div class="card-footer d-flex flex-wrap gap-2">
                <button type="submit" class="btn btn-primary"><i class="bi bi-check-lg me-1"></i>Save</button>
                <a href="{{ route('admin.gallery.index') }}" class="btn btn-light border">Cancel</a>
            </div>
        </div>
    </form>
@endsection
