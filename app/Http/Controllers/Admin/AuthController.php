<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AdminLoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Throwable;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.auth.login');
    }

    public function login(AdminLoginRequest $request): RedirectResponse
    {
        $credentials = $request->only('email', 'password');

        try {
            if (Auth::guard('admin')->attempt($credentials, $request->boolean('remember'))) {
                $request->session()->regenerate();

                Log::info('Admin login successful', [
                    'admin_id' => Auth::guard('admin')->id(),
                    'email' => $request->input('email'),
                    'ip' => $request->ip(),
                ]);

                return redirect()->intended(route('admin.dashboard'));
            }
        } catch (Throwable $e) {
            Log::error('Admin login error', [
                'message' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
            ]);

            return back()
                ->withInput($request->only('email', 'remember'))
                ->with('error', 'Something went wrong. Please try again.');
        }

        Log::warning('Admin login failed', [
            'email' => $request->input('email'),
            'ip' => $request->ip(),
        ]);

        return back()
            ->withInput($request->only('email', 'remember'))
            ->withErrors(['email' => 'These credentials do not match our records.']);
    }

    public function logout(Request $request): RedirectResponse
    {
        $adminId = Auth::guard('admin')->id();

        Auth::guard('admin')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        Log::info('Admin logout', [
            'admin_id' => $adminId,
            'ip' => $request->ip(),
        ]);

        return redirect()->route('admin.login')->with('success', 'You have been logged out.');
    }
}
