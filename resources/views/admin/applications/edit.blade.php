@extends('admin.layouts.app')

@section('title', 'Edit Application')

@section('content')
    <x-admin.page-heading title="Edit Application" :breadcrumbs="[['Dashboard', route('admin.dashboard')], ['Applications', route('admin.applications.index')], ['Edit Application']]" />

    <form action="{{ route('admin.applications.update', $record) }}" method="POST" enctype="multipart/form-data" novalidate data-loading-form>
        @csrf
        @method('PUT')
        <x-admin.form-errors />

        <div class="card admin-card">
            <div class="card-body">
                @include('admin.applications._form')
            </div>
            <div class="card-footer d-flex flex-wrap gap-2">
                <button type="submit" class="btn btn-primary"><i class="bi bi-check-lg me-1"></i>Save</button>
                <a href="{{ route('admin.applications.index') }}" class="btn btn-light border">Cancel</a>
            </div>
        </div>
    </form>
@endsection
