@extends('admin.layouts.app')

@section('title', 'Edit Home About')

@section('content')
    <x-admin.page-heading title="Edit Home About" :breadcrumbs="[['Dashboard', route('admin.dashboard')], ['Home About', route('admin.home-about.index')], ['Edit Home About']]" />

    <form action="{{ route('admin.home-about.update', $record) }}" method="POST" enctype="multipart/form-data" novalidate data-loading-form>
        @csrf
        @method('PUT')
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
