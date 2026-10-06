@extends('admin.layouts.app')

@section('title', 'Blogs')

@section('content')
    <x-admin.page-heading title="Blogs" :breadcrumbs="[['Dashboard', route('admin.dashboard')], ['Blogs']]">
        <a href="{{ route('admin.blogs.create') }}" class="btn btn-primary"><i class="bi bi-plus-lg me-1"></i>Add Blog</a>
    </x-admin.page-heading>

    <div class="card admin-card">
        <div class="card-header">
            <form method="GET" action="{{ route('admin.blogs.index') }}" class="row g-2 align-items-center" role="search">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="input-group">
                        <span class="input-group-text bg-white"><i class="bi bi-search"></i></span>
                        <input type="search" name="search" value="{{ $search }}" class="form-control" placeholder="Search blogs…" aria-label="Search blogs">
                    </div>
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-outline-primary">Search</button>
                    @if($search !== '')
                        <a href="{{ route('admin.blogs.index') }}" class="btn btn-link">Clear</a>
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
                        <th scope="col">Excerpt</th>
                        <th scope="col">Status</th>
                        <th scope="col">Created</th>
                        <th scope="col" class="text-end">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($records as $record)
                        <tr>
                            <td>@if($record->image)<img src="{{ asset($record->image) }}" alt="{{ $record->title ?? 'Image' }}" class="thumb" loading="lazy">@else<span class="thumb thumb-empty"><i class="bi bi-image"></i></span>@endif</td>
                            <td class="fw-semibold">{{ $record->title }}</td>
                            <td class="text-muted">{{ \Illuminate\Support\Str::limit(strip_tags((string) $record->text), 60) }}</td>
                            <td><x-admin.status-badge :status="$record->status" /></td>
                            <td class="text-muted small text-nowrap">{{ $record->created_at->format('d M Y') }}</td>
                            <td class="text-end text-nowrap">
                                <a href="{{ route('admin.blogs.edit', $record) }}" class="btn btn-sm btn-outline-primary" title="Edit" aria-label="Edit {{ $record->title ?? 'record' }}"><i class="bi bi-pencil-square"></i><span class="d-none d-md-inline ms-1">Edit</span></a>
                                <x-admin.delete-button :action="route('admin.blogs.destroy', $record)" :name="$record->title ?? 'Blog'" />
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6">
                                <x-admin.empty-state icon="bi-inbox" title="No blogs found"
                                    :message="$search !== '' ? 'No results match your search.' : 'Get started by adding your first record.'">
                                    @if($search === '')
                                        <a href="{{ route('admin.blogs.create') }}" class="btn btn-primary btn-sm"><i class="bi bi-plus-lg me-1"></i>Add Blog</a>
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
