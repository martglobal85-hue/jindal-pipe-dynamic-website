@props(['icon' => 'bi-inbox', 'title' => 'Nothing here yet', 'message' => null])

<div class="empty-state text-center py-5">
    <div class="empty-icon mb-3"><i class="bi {{ $icon }}"></i></div>
    <h2 class="h6 fw-bold">{{ $title }}</h2>
    @if($message)
        <p class="text-muted mb-3">{{ $message }}</p>
    @endif
    {{ $slot }}
</div>
