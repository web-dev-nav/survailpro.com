<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactSetting;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ContactSettingsController extends Controller
{
    public function edit(): View
    {
        $settings = ContactSetting::first();

        if (!$settings) {
            $settings = ContactSetting::create([]);
        }

        return view('admin.contact-settings.edit', compact('settings'));
    }

    public function update(Request $request): RedirectResponse
    {
        $settings = ContactSetting::firstOrCreate([]);

        $data = $request->validate([
            'hero_title' => ['required', 'string', 'max:255'],
            'hero_description' => ['required', 'string'],
            'main_phone_label' => ['nullable', 'string', 'max:255'],
            'main_phone_number' => ['nullable', 'string', 'max:255'],
            'secondary_phone_label' => ['nullable', 'string', 'max:255'],
            'secondary_phone_number' => ['nullable', 'string', 'max:255'],
            'email' => ['nullable', 'email'],
            'address_line_one' => ['nullable', 'string', 'max:255'],
            'address_line_two' => ['nullable', 'string', 'max:255'],
            'service_areas' => ['nullable', 'array'],
            'service_areas.*.title' => ['nullable', 'string', 'max:255'],
            'service_areas.*.subtitle' => ['nullable', 'string', 'max:255'],
        ]);

        $serviceAreas = collect($data['service_areas'] ?? [])
            ->filter(fn ($area) => !empty($area['title']) || !empty($area['subtitle']))
            ->values()
            ->all();

        $settings->update(array_merge($data, [
            'service_areas' => $serviceAreas,
        ]));

        return redirect()->route('admin.contact.edit')->with('status', 'Contact information updated.');
    }
}
