<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Applied through the "guest" alias (guest:admin on the login routes).
     * Already-authenticated admins are bounced to the dashboard.
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                return $guard === 'admin'
                    ? redirect()->route('admin.dashboard')
                    : redirect(RouteServiceProvider::HOME);
            }
        }

        return $next($request);
    }
}
