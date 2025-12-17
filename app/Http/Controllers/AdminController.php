<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Partner;
use App\Models\ContactSetting;
use App\Services\AnalyticsService;

class AdminController extends Controller
{
    public function showLoginForm()
    {
        if (session('admin_authenticated')) {
            return redirect()->route('admin.dashboard');
        }

        return view('admin.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);

        $storedUsername = env('ADMIN_USERNAME');
        $storedPassword = env('ADMIN_PASSWORD');

        if (!$storedUsername || !$storedPassword) {
            return back()->withErrors([
                'username' => 'Admin credentials are not configured.',
            ])->withInput($request->except('password'));
        }

        if ($this->credentialsMatch($credentials['username'], $credentials['password'], $storedUsername, $storedPassword)) {
            $request->session()->regenerate();
            $request->session()->put('admin_authenticated', true);
            $request->session()->put('admin_username', $storedUsername);

            return redirect()->route('admin.dashboard')->with('status', 'You are now signed in.');
        }

        return back()->withErrors([
            'username' => 'Invalid username or password.',
        ])->withInput($request->except('password'));
    }

    public function dashboard(AnalyticsService $analyticsService)
    {
        $partnerCount = Partner::count();
        $contactSettings = ContactSetting::first();
        $analytics = [
            'enabled' => $analyticsService->isConfigured(),
            'overview' => null,
            'error' => null,
        ];

        if ($analytics['enabled']) {
            try {
                $analytics['overview'] = $analyticsService->getOverview();
            } catch (\Throwable $e) {
                $analytics['error'] = 'Analytics data is not available right now.';
            }
        }

        return view('admin.dashboard', compact('partnerCount', 'contactSettings', 'analytics'));
    }

    public function logout(Request $request)
    {
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login')->with('status', 'You have been signed out.');
    }

    private function credentialsMatch(string $inputUser, string $inputPass, string $storedUser, string $storedPass): bool
    {
        if (!hash_equals($storedUser, $inputUser)) {
            return false;
        }

        if ($this->looksHashed($storedPass)) {
            return Hash::check($inputPass, $storedPass);
        }

        return hash_equals($storedPass, $inputPass);
    }

    private function looksHashed(string $value): bool
    {
        return Str::startsWith($value, ['$2y$', '$argon2id$', '$argon2i$']);
    }
}
