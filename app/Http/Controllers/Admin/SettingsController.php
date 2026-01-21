<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactSetting;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SettingsController extends Controller
{
    public function edit(): View
    {
        $settings = ContactSetting::first();

        if (!$settings) {
            $settings = ContactSetting::create([]);
        }

        return view('admin.settings.edit', compact('settings'));
    }

    public function update(Request $request): RedirectResponse
    {
        $request->merge([
            'google_analytics_id' => trim((string) $request->input('google_analytics_id')),
            'google_analytics_url' => trim((string) $request->input('google_analytics_url')),
        ]);

        $data = $request->validate([
            'google_analytics_id' => ['nullable', 'string', 'max:64', 'regex:/^G-[A-Z0-9]+$/'],
            'google_analytics_url' => ['nullable', 'url', 'max:255'],
        ]);

        if ($data['google_analytics_id'] === '') {
            $data['google_analytics_id'] = null;
        }
        if ($data['google_analytics_url'] === '') {
            $data['google_analytics_url'] = null;
        }

        $settings = ContactSetting::firstOrCreate([]);
        $settings->update($data);

        return redirect()->route('admin.settings.edit')->with('status', 'Settings updated.');
    }
}
