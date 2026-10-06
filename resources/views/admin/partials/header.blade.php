<header class="admin-topbar">
    <div class="d-flex align-items-center gap-2 min-w-0">
        <button type="button" class="btn btn-light border topbar-toggle" id="sidebarToggle"
                aria-label="Toggle navigation" aria-controls="adminSidebar" aria-expanded="false">
            <i class="bi bi-list fs-5"></i>
        </button>
        <span class="topbar-title text-truncate d-none d-sm-inline">@yield('title', 'Dashboard')</span>
    </div>

    <div class="d-flex align-items-center gap-2">
        <a href="{{ route('website.home') }}" target="_blank" rel="noopener" class="btn btn-light border btn-sm d-none d-md-inline-flex align-items-center gap-1">
            <i class="bi bi-box-arrow-up-right"></i> View site
        </a>

        <div class="dropdown">
            <button class="btn btn-light border d-flex align-items-center gap-2 user-menu" type="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                <span class="avatar">{{ strtoupper(substr(auth('admin')->user()->name ?? 'A', 0, 1)) }}</span>
                <span class="d-none d-sm-inline small fw-semibold">{{ auth('admin')->user()->name ?? 'Admin' }}</span>
                <i class="bi bi-chevron-down small"></i>
            </button>
            <ul class="dropdown-menu dropdown-menu-end shadow-sm">
                <li class="px-3 py-2 small text-muted">{{ auth('admin')->user()->email ?? '' }}</li>
                <li><hr class="dropdown-divider"></li>
                <li>
                    <form method="POST" action="{{ route('admin.logout') }}">
                        @csrf
                        <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right me-2"></i>Logout</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</header>
