<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ChangePasswordRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Throwable;

class PasswordController extends Controller
{
    public function edit()
    {
        return view('admin.password.edit');
    }

    public function update(ChangePasswordRequest $request): RedirectResponse
    {
        try {
            $admin = Auth::guard('admin')->user();

            $admin->update([
                'password' => Hash::make($request->validated()['password']),
            ]);

            // Fresh session id after a credential change
            $request->session()->regenerate();

            // Never log passwords
            Log::info('Admin password changed', [
                'admin_id' => $admin->getKey(),
                'ip' => $request->ip(),
            ]);

            return redirect()->route('admin.password.edit')
                ->with('success', 'Password changed successfully.');
        } catch (Throwable $e) {
            Log::error('Admin password change failed', [
                'message' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
                'admin_id' => auth('admin')->id(),
            ]);

            return back()->with('error', 'Something went wrong. Please try again.');
        }
    }
}