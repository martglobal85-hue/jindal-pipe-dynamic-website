<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="noindex, nofollow">
    <title>@yield('title', 'Dashboard') | {{ config('app.name', 'Admin') }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="{{ asset('admin/css/admin.css') }}" rel="stylesheet">
    @stack('styles')
</head>
<body class="admin-body">
<div class="admin-wrapper" id="adminWrapper">

    @include('admin.partials.sidebar')
    <div class="sidebar-backdrop" id="sidebarBackdrop"></div>

    <div class="admin-main">
        @include('admin.partials.header')

        <main class="admin-content" id="main-content">
            @include('admin.partials.alerts')
            @yield('content')
        </main>

        <footer class="admin-footer">
            &copy; {{ date('Y') }} {{ config('app.name', 'Admin') }}. All rights reserved.
        </footer>
    </div>
</div>

{{-- Shared delete confirmation modal (DELETE method) --}}
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <form method="POST" id="deleteForm" action="#" class="modal-content" data-loading-form>
            @csrf
            @method('DELETE')
            <div class="modal-header border-0 pb-0">
                <h5 class="modal-title" id="deleteModalLabel">Confirm deletion</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="d-flex gap-3">
                    <div class="delete-icon"><i class="bi bi-exclamation-triangle"></i></div>
                    <div>
                        <p class="mb-1">Are you sure you want to delete this record?</p>
                        <p class="mb-0 fw-semibold text-break" id="deleteName"></p>
                        <p class="small text-muted mt-2 mb-0">This action cannot be undone.</p>
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0 pt-0">
                <button type="button" class="btn btn-light border" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-danger"><i class="bi bi-trash me-1"></i>Delete</button>
            </div>
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('admin/js/admin.js') }}"></script>
@stack('scripts')
</body>
</html>
