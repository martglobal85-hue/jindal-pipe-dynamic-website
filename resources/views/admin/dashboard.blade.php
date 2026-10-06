@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('content')
    <x-admin.page-heading :title="'Welcome back, ' . auth('admin')->user()->name"
        :breadcrumbs="[['Dashboard']]" />

    <div class="row g-3 mb-4">
        @foreach($stats as $stat)
            <div class="col-6 col-md-4 col-xl-2">
                <a href="{{ route($stat['route']) }}" class="stat-card stat-{{ $stat['color'] }} text-decoration-none">
                    <div class="stat-icon"><i class="bi {{ $stat['icon'] }}"></i></div>
                    <div>
                        <div class="stat-label">{{ $stat['label'] }}</div>
                        <div class="stat-value">{{ number_format($stat['count']) }}</div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>

    <div class="row g-3">
        <div class="col-12 col-xl-7">
            <div class="card admin-card h-100">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span class="fw-bold">Recent Products</span>
                    <a href="{{ route('admin.products.index') }}" class="btn btn-sm btn-outline-primary">View all</a>
                </div>
                <div class="table-responsive">
                    <table class="table align-middle admin-table mb-0">
                        <thead><tr><th>Product</th><th>Category</th><th>Status</th></tr></thead>
                        <tbody>
                        @forelse($recentProducts as $product)
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        @if($product->image)
                                            <img src="{{ asset($product->image) }}" alt="{{ $product->title }}" class="thumb" loading="lazy">
                                        @else
                                            <span class="thumb thumb-empty"><i class="bi bi-image"></i></span>
                                        @endif
                                        <a href="{{ route('admin.products.edit', $product) }}" class="fw-semibold text-decoration-none">{{ $product->title }}</a>
                                    </div>
                                </td>
                                <td>{{ $product->category?->title ?? '—' }}</td>
                                <td><x-admin.status-badge :status="$product->status" /></td>
                            </tr>
                        @empty
                            <tr><td colspan="3">
                                <x-admin.empty-state icon="bi-box-seam" title="No products yet" message="Create your first product to see it here.">
                                    <a href="{{ route('admin.products.create') }}" class="btn btn-primary btn-sm">Add Product</a>
                                </x-admin.empty-state>
                            </td></tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-12 col-xl-5">
            <div class="card admin-card h-100">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span class="fw-bold">Recent Blogs</span>
                    <a href="{{ route('admin.blogs.index') }}" class="btn btn-sm btn-outline-primary">View all</a>
                </div>
                <ul class="list-group list-group-flush">
                    @forelse($recentBlogs as $blog)
                        <li class="list-group-item d-flex justify-content-between align-items-center gap-2">
                            <div class="min-w-0">
                                <a href="{{ route('admin.blogs.edit', $blog) }}" class="fw-semibold text-decoration-none d-block text-truncate">{{ $blog->title }}</a>
                                <small class="text-muted">{{ $blog->created_at->format('d M Y') }}</small>
                            </div>
                            <x-admin.status-badge :status="$blog->status" />
                        </li>
                    @empty
                        <li class="list-group-item">
                            <x-admin.empty-state icon="bi-journal-text" title="No blog posts yet" message="Published posts will appear here." />
                        </li>
                    @endforelse
                </ul>
            </div>
        </div>
    </div>
@endsection
