<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow">
    <title>Admin Login | {{ config('app.name', 'Admin') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="{{ asset('admin/css/admin.css') }}" rel="stylesheet">
</head>
<body class="login-body">
<main class="login-wrap">
    <div class="login-card card admin-card">
        <div class="card-body p-4 p-md-5">
            <div class="text-center mb-4">
                <span class="brand-mark brand-mark-lg">{{ strtoupper(substr(config('app.name', 'A'), 0, 1)) }}</span>
                <h1 class="h4 fw-bold mt-3 mb-1">Welcome back</h1>
                <p class="text-muted mb-0">Sign in to the admin panel</p>
            </div>

            @include('admin.partials.alerts')

            <form method="POST" action="{{ route('admin.login.submit') }}" novalidate data-loading-form>
                @csrf

                <div class="mb-3">
                    <label for="email" class="form-label fw-semibold">Email address</label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}"
                           class="form-control form-control-lg @error('email') is-invalid @enderror"
                           autocomplete="username" required autofocus>
                    @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label fw-semibold">Password</label>
                    <div class="input-group input-group-lg has-validation">
                        <input type="password" name="password" id="password"
                               class="form-control @error('password') is-invalid @enderror"
                               autocomplete="current-password" required>
                        <button class="btn btn-outline-secondary" type="button" id="togglePassword" aria-label="Show password">
                            <i class="bi bi-eye"></i>
                        </button>
                        @error('password')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                </div>

                <div class="form-check mb-4">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" value="1" @checked(old('remember'))>
                    <label class="form-check-label" for="remember">Remember me</label>
                </div>

                <button type="submit" class="btn btn-primary btn-lg w-100">Sign in</button>
            </form>
        </div>
    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('admin/js/admin.js') }}"></script>
<script>
    document.getElementById('togglePassword').addEventListener('click', function () {
        var input = document.getElementById('password');
        var show = input.type === 'password';
        input.type = show ? 'text' : 'password';
        this.querySelector('i').className = show ? 'bi bi-eye-slash' : 'bi bi-eye';
        this.setAttribute('aria-label', show ? 'Hide password' : 'Show password');
    });
</script>
</body>
</html>
