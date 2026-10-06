@extends('admin.layouts.app')

@section('title', 'Products')

@section('content')
    <x-admin.page-heading title="Products" :breadcrumbs="[['Dashboard', route('admin.dashboard')], ['Products']]">
        <a href="{{ route('admin.products.create') }}" class="btn btn-primary"><i class="bi bi-plus-lg me-1"></i>Add Product</a>
    </x-admin.page-heading>

    @if(!empty($filterCategory))
        <div class="alert alert-info d-flex flex-wrap justify-content-between align-items-center gap-2 py-2">
            <span>Showing products in <strong>{{ $filterCategory->title }}</strong></span>
            <a href="{{ route('admin.products.index') }}" class="btn btn-sm btn-outline-secondary">Clear filter</a>
        </div>
    @endif
    <div class="card admin-card">
        <div class="card-header">
            <form method="GET" action="{{ route('admin.products.index') }}" class="row g-2 align-items-center" role="search">
                @if(request('category'))<input type="hidden" name="category" value="{{ request('category') }}">@endif
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="input-group">
                        <span class="input-group-text bg-white"><i class="bi bi-search"></i></span>
                        <input type="search" name="search" value="{{ $search }}" class="form-control" placeholder="Search products…" aria-label="Search products">
                    </div>
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-outline-primary">Search</button>
                    @if($search !== '')
                        <a href="{{ route('admin.products.index') }}" class="btn btn-link">Clear</a>
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
                        <th scope="col">Category</th>
                        <th scope="col">Status</th>
                        <th scope="col" class="text-end">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($records as $record)
                        <tr>
                            <td>@if($record->image)<img src="{{ asset($record->image) }}" alt="{{ $record->title ?? 'Image' }}" class="thumb" loading="lazy">@else<span class="thumb thumb-empty"><i class="bi bi-image"></i></span>@endif</td>
                            <td><div class="fw-semibold">{{ $record->title }}</div>@if($record->subtitle)<div class="small text-muted">{{ \Illuminate\Support\Str::limit($record->subtitle, 50) }}</div>@endif</td>
                            <td>{{ $record->category?->title ?? '—' }}</td>
                            <td><x-admin.status-badge :status="$record->status" /></td>
                            <td class="text-end text-nowrap">
                                <a href="{{ route('admin.products.contents.index', $record) }}" class="btn btn-sm btn-outline-secondary" title="Content"><i class="bi bi-card-text"></i><span class="d-none d-xxl-inline ms-1">Content</span> <span class="badge text-bg-light border">{{ $record->contents_count }}</span></a>
                                <a href="{{ route('admin.products.table-content.index', $record) }}" class="btn btn-sm btn-outline-secondary" title="Table Content"><i class="bi bi-table"></i><span class="d-none d-xxl-inline ms-1">Table</span> <span class="badge text-bg-light border">{{ $record->table_contents_count }}</span></a>
                                <a href="{{ route('admin.gallery.index', ['product' => $record->slug]) }}" class="btn btn-sm btn-outline-secondary" title="Gallery"><i class="bi bi-images"></i><span class="d-none d-xxl-inline ms-1">Gallery</span> <span class="badge text-bg-light border">{{ $record->galleries_count }}</span></a>
                                <a href="{{ route('admin.products.edit', $record) }}" class="btn btn-sm btn-outline-primary" title="Edit" aria-label="Edit {{ $record->title ?? 'record' }}"><i class="bi bi-pencil-square"></i><span class="d-none d-md-inline ms-1">Edit</span></a>
                                <x-admin.delete-button :action="route('admin.products.destroy', $record)" :name="$record->title ?? 'Product'" />
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5">
                                <x-admin.empty-state icon="bi-inbox" title="No products found"
                                    :message="$search !== '' ? 'No results match your search.' : 'Get started by adding your first record.'">
                                    @if($search === '')
                                        <a href="{{ route('admin.products.create') }}" class="btn btn-primary btn-sm"><i class="bi bi-plus-lg me-1"></i>Add Product</a>
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
