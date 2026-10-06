@props(['action', 'name' => 'this record'])

<button type="button" class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteModal"
        data-action="{{ $action }}" data-name="{{ $name }}" title="Delete" aria-label="Delete {{ $name }}">
    <i class="bi bi-trash"></i><span class="d-none d-md-inline ms-1">Delete</span>
</button>
