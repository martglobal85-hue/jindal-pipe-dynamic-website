@extends('admin.layouts.app')

@section('title', 'Edit Client')

@section('content')
    <x-admin.page-heading title="Edit Client" :breadcrumbs="[['Dashboard', route('admin.dashboard')], ['Clients', route('admin.clients.index')], ['Edit Client']]" />

    <form action="{{ route('admin.clients.update', $record) }}" method="POST" enctype="multipart/form-data" novalidate data-loading-form>
        @csrf
        @method('PUT')
        <x-admin.form-errors />

        <div class="card admin-card">
            <div class="card-body">
                @include('admin.clients._form')
            </div>
            <div class="card-footer d-flex flex-wrap gap-2">
                <button type="submit" class="btn btn-primary"><i class="bi bi-check-lg me-1"></i>Save</button>
                <a href="{{ route('admin.clients.index') }}" class="btn btn-light border">Cancel</a>
            </div>
        </div>
    </form>
@endsection
