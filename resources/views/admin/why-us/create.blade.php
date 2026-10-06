@extends('admin.layouts.app')

@section('title', 'Add Why Us')

@section('content')
    <x-admin.page-heading title="Add Why Us" :breadcrumbs="[['Dashboard', route('admin.dashboard')], ['Why Us', route('admin.why-us.index')], ['Add Why Us']]" />

    <form action="{{ route('admin.why-us.store') }}" method="POST" enctype="multipart/form-data" novalidate data-loading-form>
        @csrf
        <x-admin.form-errors />

        <div class="card admin-card">
            <div class="card-body">
                @include('admin.why-us._form')
            </div>
            <div class="card-footer d-flex flex-wrap gap-2">
                <button type="submit" class="btn btn-primary"><i class="bi bi-check-lg me-1"></i>Save</button>
                <a href="{{ route('admin.why-us.index') }}" class="btn btn-light border">Cancel</a>
            </div>
        </div>
    </form>
@endsection
