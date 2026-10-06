@extends('admin.layouts.app')

@section('title', 'Contact Settings')

@section('content')
    <x-admin.page-heading title="Contact Settings" :breadcrumbs="[['Dashboard', route('admin.dashboard')], ['Contact']]" />

    <form action="{{ route('admin.contact.update') }}" method="POST" enctype="multipart/form-data" novalidate data-loading-form>
        @csrf
        @method('PUT')
        <x-admin.form-errors />

        <div class="card admin-card">
            <div class="card-body">
                @php $record = $record ?? null; @endphp

                <div class="row">
                    <div class="col-md-6"><x-admin.field name="email" label="Email" type="email" :value="$record?->email" required /></div>
                    <div class="col-md-6"><x-admin.field name="mobile" label="Mobile" type="text" :value="$record?->mobile" required /></div>
                </div>

                <x-admin.field name="address" label="Address" type="textarea" :rows="3" :value="$record?->address" required />
                <x-admin.field name="map" label="Map" type="textarea" :rows="3" :value="$record?->map" required
                    hint="Paste a Google Maps embed URL or the embed code." />

                <h6 class="form-section-title">Social / Other Links</h6>
                <div class="row">
                    <div class="col-md-6"><x-admin.field name="link1" label="Link 1" type="url" :value="$record?->link1" /></div>
                    <div class="col-md-6"><x-admin.field name="link2" label="Link 2" type="url" :value="$record?->link2" /></div>
                    <div class="col-md-6"><x-admin.field name="link3" label="Link 3" type="url" :value="$record?->link3" /></div>
                    <div class="col-md-6"><x-admin.field name="link4" label="Link 4" type="url" :value="$record?->link4" /></div>
                </div>

                <x-admin.field name="image" label="Image / Logo" type="image" :value="$record?->image" hint="JPG, PNG, WEBP or GIF, max 2 MB." />
                <x-admin.field name="footertext" label="Footer Text" type="textarea" :rows="2" :value="$record?->footertext" />
            </div>
            <div class="card-footer d-flex gap-2">
                <button type="submit" class="btn btn-primary"><i class="bi bi-check-lg me-1"></i>Save</button>
                <a href="{{ route('admin.dashboard') }}" class="btn btn-light border">Cancel</a>
            </div>
        </div>
    </form>
@endsection
