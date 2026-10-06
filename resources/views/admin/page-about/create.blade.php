@extends('admin.layouts.app')

@section('title', 'Add Page About')

@section('content')
    <x-admin.page-heading title="Add Page About" :breadcrumbs="[['Dashboard', route('admin.dashboard')], ['Page About', route('admin.page-about.index')], ['Add Page About']]" />

    <form action="{{ route('admin.page-about.store') }}" method="POST" enctype="multipart/form-data" novalidate data-loading-form>
        @csrf
        <x-admin.form-errors />

        <div class="card admin-card">
            <div class="card-body">
                @include('admin.page-about._form')
            </div>
            <div class="card-footer d-flex flex-wrap gap-2">
                <button type="submit" class="btn btn-primary"><i class="bi bi-check-lg me-1"></i>Save</button>
                <a href="{{ route('admin.page-about.index') }}" class="btn btn-light border">Cancel</a>
            </div>
        </div>
    </form>
@endsection
