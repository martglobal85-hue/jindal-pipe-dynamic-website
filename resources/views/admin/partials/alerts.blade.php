@foreach(['success' => 'check-circle-fill', 'error' => 'exclamation-triangle-fill', 'warning' => 'exclamation-circle-fill', 'info' => 'info-circle-fill'] as $type => $icon)
    @if(session($type))
        <div class="alert alert-{{ $type === 'error' ? 'danger' : $type }} alert-dismissible fade show d-flex align-items-start gap-2" role="alert">
            <i class="bi bi-{{ $icon }} mt-1"></i>
            <div class="flex-grow-1">{{ session($type) }}</div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
@endforeach
