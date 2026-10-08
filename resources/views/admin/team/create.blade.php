@extends('admin.layouts.app')

@section('title', 'Add Team Member')

@section('content')
    <x-admin.page-heading title="Add Team Member" :breadcrumbs="[['Dashboard', route('admin.dashboard')], ['Team', route('admin.team.index')], ['Add Team Member']]" />

    <form action="{{ route('admin.team.store') }}" method="POST" enctype="multipart/form-data" novalidate data-loading-form>
        @csrf
        <x-admin.form-errors />

        <div class="card admin-card">
            <div class="card-body">
                @include('admin.team._form')
            </div>
            <div class="card-footer d-flex flex-wrap gap-2">
                <button type="submit" class="btn btn-primary"><i class="bi bi-check-lg me-1"></i>Save</button>
                <a href="{{ route('admin.team.index') }}" class="btn btn-light border">Cancel</a>
            </div>
        </div>
    </form>
@endsection
