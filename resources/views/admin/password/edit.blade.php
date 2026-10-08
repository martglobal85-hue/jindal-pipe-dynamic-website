@extends('admin.layouts.app')

@section('title', 'Change Password')

@section('content')
    <x-admin.page-heading title="Change Password"
        :breadcrumbs="[['Dashboard', route('admin.dashboard')], ['Change Password']]" />

    <div class="row">
        <div class="col-lg-6 col-xl-5">
            <form action="{{ route('admin.password.update') }}" method="POST" novalidate data-loading-form>
                @csrf
                @method('PUT')
                <x-admin.form-errors />

                <div class="card admin-card">
                    <div class="card-body">
                        <x-admin.field name="current_password" label="Old Password" type="password" required />
                        <x-admin.field name="password" label="New Password" type="password" required
                            hint="Minimum 8 characters with upper and lower case letters and a number." />
                        <x-admin.field name="password_confirmation" label="Confirm Password" type="password" required />
                    </div>
                    <div class="card-footer d-flex gap-2">
                        <button type="submit" class="btn btn-primary"><i class="bi bi-key me-1"></i>Update Password</button>
                        <a href="{{ route('admin.dashboard') }}" class="btn btn-light border">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection