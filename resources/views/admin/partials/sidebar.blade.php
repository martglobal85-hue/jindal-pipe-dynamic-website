@php
    $menu = [
        ['heading' => null, 'items' => [
            ['Dashboard', 'bi-speedometer2', 'admin.dashboard', 'admin.dashboard'],
        ]],
        ['heading' => 'Website', 'items' => [
            ['Banner', 'bi-card-image', 'admin.banners.index', 'admin.banners.*'],
            ['Home About', 'bi-house-heart', 'admin.home-about.index', 'admin.home-about.*'],
            ['Page About', 'bi-info-circle', 'admin.page-about.index', 'admin.page-about.*'],
            ['Why Us', 'bi-patch-check', 'admin.why-us.index', 'admin.why-us.*'],
            ['Approach', 'bi-bullseye', 'admin.approach.index', 'admin.approach.*'],
            ['Contact', 'bi-telephone', 'admin.contact.edit', 'admin.contact.*'],
        ]],
        ['heading' => 'Products', 'items' => [
            ['Product Categories', 'bi-tags', 'admin.product-categories.index', 'admin.product-categories.*'],
            ['Products', 'bi-box-seam', 'admin.products.index', 'admin.products.*'],
            ['Gallery', 'bi-images', 'admin.gallery.index', 'admin.gallery.*'],
        ]],
        ['heading' => 'Marketing', 'items' => [
            ['Testimonials', 'bi-chat-quote', 'admin.testimonials.index', 'admin.testimonials.*'],
            ['Clients', 'bi-people', 'admin.clients.index', 'admin.clients.*'],
            ['Blog', 'bi-journal-text', 'admin.blogs.index', 'admin.blogs.*'],
        ]],
    ];
@endphp

<aside class="admin-sidebar" id="adminSidebar" aria-label="Main navigation">
    <div class="sidebar-brand">
        <a href="{{ route('admin.dashboard') }}" class="d-flex align-items-center gap-2 text-decoration-none">
            <span class="brand-mark">{{ strtoupper(substr(config('app.name', 'A'), 0, 1)) }}</span>
            <span class="brand-text">{{ config('app.name', 'Admin') }}</span>
        </a>
        <button type="button" class="btn btn-sm sidebar-close d-lg-none" id="sidebarClose" aria-label="Close menu">
            <i class="bi bi-x-lg"></i>
        </button>
    </div>

    <nav class="sidebar-nav">
        @foreach($menu as $group)
            @if($group['heading'])
                <div class="nav-section">{{ $group['heading'] }}</div>
            @endif
            <ul class="nav flex-column">
                @foreach($group['items'] as [$label, $icon, $route, $pattern])
                    <li class="nav-item">
                        <a href="{{ route($route) }}"
                           class="nav-link {{ request()->routeIs($pattern) ? 'active' : '' }}"
                           title="{{ $label }}"
                           @if(request()->routeIs($pattern)) aria-current="page" @endif>
                            <i class="bi {{ $icon }}"></i>
                            <span class="nav-text">{{ $label }}</span>
                        </a>
                    </li>
                @endforeach
            </ul>
        @endforeach

        <div class="nav-section">Account</div>
        <ul class="nav flex-column">
            <li class="nav-item">
                <form method="POST" action="{{ route('admin.logout') }}">
                    @csrf
                    <button type="submit" class="nav-link w-100 text-start border-0 bg-transparent" title="Logout">
                        <i class="bi bi-box-arrow-right"></i>
                        <span class="nav-text">Logout</span>
                    </button>
                </form>
            </li>
        </ul>
    </nav>
</aside>
