@props(['status'])

@if($status)
    <span class="badge rounded-pill text-bg-success-soft">Active</span>
@else
    <span class="badge rounded-pill text-bg-secondary-soft">Inactive</span>
@endif
