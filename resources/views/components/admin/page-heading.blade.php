@props(['title', 'breadcrumbs' => []])

<div class="page-heading d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4">
    <div>
        <h1 class="h4 fw-bold mb-1">{{ $title }}</h1>
        @include('admin.partials.breadcrumb', ['items' => $breadcrumbs])
    </div>
    @if(!$slot->isEmpty())
        <div class="d-flex flex-wrap gap-2">{{ $slot }}</div>
    @endif
</div>
