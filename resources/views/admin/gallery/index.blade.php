@extends('admin.layouts.app')

@section('title', 'Gallery')

@section('content')
    <x-admin.page-heading title="Gallery" :breadcrumbs="[['Dashboard', route('admin.dashboard')], ['Gallery']]">
        <a href="{{ route('admin.gallery.create') }}" class="btn btn-primary"><i class="bi bi-plus-lg me-1"></i>Add Gallery Image</a>
    </x-admin.page-heading>

    <ul class="nav nav-pills mb-3 gap-1">
        <li class="nav-item"><a class="nav-link {{ !request('type') && !request('product') ? 'active' : '' }}" href="{{ route('admin.gallery.index') }}">All</a></li>
        <li class="nav-item"><a class="nav-link {{ request('type') === 'general' ? 'active' : '' }}" href="{{ route('admin.gallery.index', ['type' => 'general']) }}">General Gallery</a></li>
        <li class="nav-item"><a class="nav-link {{ request('type') === 'product' ? 'active' : '' }}" href="{{ route('admin.gallery.index', ['type' => 'product']) }}">Product Gallery</a></li>
    </ul>
    @if(!empty($filterProduct))
        <div class="alert alert-info d-flex flex-wrap justify-content-between align-items-center gap-2 py-2">
            <span>Showing gallery images for <strong>{{ $filterProduct->title }}</strong></span>
            <span class="d-flex gap-2">
                <a href="{{ route('admin.gallery.create', ['product' => $filterProduct->slug]) }}" class="btn btn-sm btn-primary">Add image to this product</a>
                <a href="{{ route('admin.gallery.index') }}" class="btn btn-sm btn-outline-secondary">Clear filter</a>
            </span>
        </div>
    @endif
    <div class="card admin-card">
        <div class="card-header">
            <form method="GET" action="{{ route('admin.gallery.index') }}" class="row g-2 align-items-center" role="search">
                @if(request('product'))<input type="hidden" name="product" value="{{ request('product') }}">@endif
                @if(request('type'))<input type="hidden" name="type" value="{{ request('type') }}">@endif
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="input-group">
                        <span class="input-group-text bg-white"><i class="bi bi-search"></i></span>
                        <input type="search" name="search" value="{{ $search }}" class="form-control" placeholder="Search gallery…" aria-label="Search gallery">
                    </div>
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-outline-primary">Search</button>
                    @if($search !== '')
                        <a href="{{ route('admin.gallery.index') }}" class="btn btn-link">Clear</a>
                    @endif
                </div>
            </form>
        </div>

        <div class="table-responsive">
            <table class="table table-hover align-middle admin-table mb-0">
                <thead>
                    <tr>
                        <th scope="col">Image</th>
                        <th scope="col">Title</th>
                        <th scope="col">Product</th>
                        <th scope="col">Status</th>
                        <th scope="col" class="text-end">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($records as $record)
                        <tr>
                            <td>@if($record->image)<img src="{{ asset($record->image) }}" alt="{{ $record->title ?? 'Image' }}" class="thumb" loading="lazy">@else<span class="thumb thumb-empty"><i class="bi bi-image"></i></span>@endif</td>
                            <td class="fw-semibold">{{ $record->title }}</td>
                            <td>@if($record->product)<a href="{{ route('admin.gallery.index', ['product' => $record->product->slug]) }}" class="text-decoration-none">{{ $record->product->title }}</a>@else<span class="badge text-bg-secondary">General</span>@endif</td>
                            <td><x-admin.status-badge :status="$record->status" /></td>
                            <td class="text-end text-nowrap">
                                <a href="{{ route('admin.gallery.edit', $record) }}" class="btn btn-sm btn-outline-primary" title="Edit" aria-label="Edit {{ $record->title ?? 'record' }}"><i class="bi bi-pencil-square"></i><span class="d-none d-md-inline ms-1">Edit</span></a>
                                <x-admin.delete-button :action="route('admin.gallery.destroy', $record)" :name="$record->title ?? 'Gallery Image'" />
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5">
                                <x-admin.empty-state icon="bi-inbox" title="No gallery found"
                                    :message="$search !== '' ? 'No results match your search.' : 'Get started by adding your first record.'">
                                    @if($search === '')
                                        <a href="{{ route('admin.gallery.create') }}" class="btn btn-primary btn-sm"><i class="bi bi-plus-lg me-1"></i>Add Gallery Image</a>
                                    @endif
                                </x-admin.empty-state>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @if($records->hasPages())
            <div class="card-footer d-flex flex-wrap justify-content-between align-items-center gap-2">
                <small class="text-muted">Showing {{ $records->firstItem() }}–{{ $records->lastItem() }} of {{ $records->total() }}</small>
                {{ $records->links() }}
            </div>
        @endif
    </div>
@endsection
