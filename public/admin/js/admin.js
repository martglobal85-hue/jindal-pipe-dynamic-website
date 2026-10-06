(function () {
    'use strict';

    var wrapper = document.getElementById('adminWrapper');
    var toggle = document.getElementById('sidebarToggle');
    var closeBtn = document.getElementById('sidebarClose');
    var backdrop = document.getElementById('sidebarBackdrop');
    var KEY = 'admin.sidebar.collapsed';
    var isDesktop = function () { return window.matchMedia('(min-width: 992px)').matches; };

    function store(action, value) {
        try {
            return action === 'get' ? window.localStorage.getItem(KEY) : window.localStorage.setItem(KEY, value);
        } catch (e) { return null; }
    }

    if (wrapper && toggle) {
        if (isDesktop() && store('get') === '1') {
            wrapper.classList.add('sidebar-collapsed');
        }

        toggle.addEventListener('click', function () {
            if (isDesktop()) {
                var collapsed = wrapper.classList.toggle('sidebar-collapsed');
                store('set', collapsed ? '1' : '0');
            } else {
                var open = wrapper.classList.toggle('sidebar-open');
                toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
            }
        });

        var closeMobile = function () {
            wrapper.classList.remove('sidebar-open');
            toggle.setAttribute('aria-expanded', 'false');
        };
        if (backdrop) { backdrop.addEventListener('click', closeMobile); }
        if (closeBtn) { closeBtn.addEventListener('click', closeMobile); }
        document.addEventListener('keydown', function (e) { if (e.key === 'Escape') { closeMobile(); } });
        window.addEventListener('resize', function () { if (isDesktop()) { closeMobile(); } });
    }

    // Delete confirmation modal: fill the DELETE form action and record name
    var deleteModal = document.getElementById('deleteModal');
    if (deleteModal) {
        deleteModal.addEventListener('show.bs.modal', function (event) {
            var trigger = event.relatedTarget;
            if (!trigger) { return; }
            document.getElementById('deleteForm').setAttribute('action', trigger.getAttribute('data-action'));
            document.getElementById('deleteName').textContent = trigger.getAttribute('data-name') || '';
        });
    }

    // Loading state on submit (prevents double submits)
    document.querySelectorAll('form[data-loading-form]').forEach(function (form) {
        form.addEventListener('submit', function () {
            var btn = form.querySelector('button[type="submit"]');
            if (!btn || btn.classList.contains('is-loading')) { return; }
            btn.classList.add('is-loading');
            btn.insertAdjacentHTML('afterbegin', '<span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span>');
            setTimeout(function () { btn.setAttribute('disabled', 'disabled'); }, 0);
        });
    });

    // Live preview for newly chosen images
    document.querySelectorAll('[data-image-input]').forEach(function (input) {
        input.addEventListener('change', function () {
            var holder = input.parentElement.querySelector('[data-image-preview]');
            if (!holder) { return; }
            var file = input.files && input.files[0];
            if (!file || !file.type.startsWith('image/')) { holder.classList.add('d-none'); return; }
            var reader = new FileReader();
            reader.onload = function (e) {
                holder.querySelector('img').src = e.target.result;
                holder.classList.remove('d-none');
            };
            reader.readAsDataURL(file);
        });
    });
})();
