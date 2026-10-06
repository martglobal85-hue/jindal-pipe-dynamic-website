@extends('admin.layouts.app')

@section('title', 'Edit Approach')

@section('content')
    <x-admin.page-heading title="Edit Approach" :breadcrumbs="[['Dashboard', route('admin.dashboard')], ['Approach', route('admin.approach.index')], ['Edit Approach']]" />

    <form action="{{ route('admin.approach.update', $record) }}" method="POST" enctype="multipart/form-data" novalidate data-loading-form>
        @csrf
        @method('PUT')
        <x-admin.form-errors />

        <div class="card admin-card">
            <div class="card-body">
                @include('admin.approach._form')
            </div>
            <div class="card-footer d-flex flex-wrap gap-2">
                <button type="submit" class="btn btn-primary"><i class="bi bi-check-lg me-1"></i>Save</button>
                <a href="{{ route('admin.approach.index') }}" class="btn btn-light border">Cancel</a>
            </div>
        </div>
    </form>
@endsection
