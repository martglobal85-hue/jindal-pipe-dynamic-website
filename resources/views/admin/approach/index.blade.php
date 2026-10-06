@extends('admin.layouts.app')

@section('title', 'Approach')

@section('content')
    <x-admin.page-heading title="Approach" :breadcrumbs="[['Dashboard', route('admin.dashboard')], ['Approach']]">
        <a href="{{ route('admin.approach.create') }}" class="btn btn-primary"><i class="bi bi-plus-lg me-1"></i>Add Approach</a>
    </x-admin.page-heading>

    <div class="card admin-card">
        <div class="card-header">
            <form method="GET" action="{{ route('admin.approach.index') }}" class="row g-2 align-items-center" role="search">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="input-group">
                        <span class="input-group-text bg-white"><i class="bi bi-search"></i></span>
                        <input type="search" name="search" value="{{ $search }}" class="form-control" placeholder="Search approach…" aria-label="Search approach">
                    </div>
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-outline-primary">Search</button>
                    @if($search !== '')
                        <a href="{{ route('admin.approach.index') }}" class="btn btn-link">Clear</a>
                    @endif
                </div>
            </form>
        </div>

        <div class="table-responsive">
            <table class="table table-hover align-middle admin-table mb-0">
                <thead>
                    <tr>
                        <th scope="col">Vision</th>
                        <th scope="col">Mission</th>
                        <th scope="col">Our Company</th>
                        <th scope="col">Created</th>
                        <th scope="col" class="text-end">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($records as $record)
                        <tr>
                            <td class="fw-semibold">{{ $record->visiontitle }}</td>
                            <td class="text-muted">{{ \Illuminate\Support\Str::limit(strip_tags((string) $record->missiontitle), 60) }}</td>
                            <td class="text-muted">{{ \Illuminate\Support\Str::limit(strip_tags((string) $record->ourcompanytitle), 60) }}</td>
                            <td class="text-muted small text-nowrap">{{ $record->created_at->format('d M Y') }}</td>
                            <td class="text-end text-nowrap">
                                <a href="{{ route('admin.approach.edit', $record) }}" class="btn btn-sm btn-outline-primary" title="Edit" aria-label="Edit {{ $record->visiontitle ?? 'record' }}"><i class="bi bi-pencil-square"></i><span class="d-none d-md-inline ms-1">Edit</span></a>
                                <x-admin.delete-button :action="route('admin.approach.destroy', $record)" :name="$record->visiontitle ?? 'Approach'" />
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5">
                                <x-admin.empty-state icon="bi-inbox" title="No approach found"
                                    :message="$search !== '' ? 'No results match your search.' : 'Get started by adding your first record.'">
                                    @if($search === '')
                                        <a href="{{ route('admin.approach.create') }}" class="btn btn-primary btn-sm"><i class="bi bi-plus-lg me-1"></i>Add Approach</a>
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
