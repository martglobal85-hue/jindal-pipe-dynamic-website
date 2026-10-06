@extends('admin.layouts.app')

@section('title', 'Add Home About')

@section('content')
    <x-admin.page-heading title="Add Home About" :breadcrumbs="[['Dashboard', route('admin.dashboard')], ['Home About', route('admin.home-about.index')], ['Add Home About']]" />

    <form action="{{ route('admin.home-about.store') }}" method="POST" enctype="multipart/form-data" novalidate data-loading-form>
        @csrf
        <x-admin.form-errors />

        <div class="card admin-card">
            <div class="card-body">
                @include('admin.home-about._form')
            </div>
            <div class="card-footer d-flex flex-wrap gap-2">
                <button type="submit" class="btn btn-primary"><i class="bi bi-check-lg me-1"></i>Save</button>
                <a href="{{ route('admin.home-about.index') }}" class="btn btn-light border">Cancel</a>
            </div>
        </div>
    </form>
@endsection
