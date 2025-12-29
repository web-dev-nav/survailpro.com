<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PartnerController extends Controller
{
    public function index(): View
    {
        $partners = Partner::orderBy('display_order')->get();

        return view('admin.partners.index', compact('partners'));
    }

    public function create(): View
    {
        return view('admin.partners.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'website_url' => ['nullable', 'url'],
            'display_order' => ['nullable', 'integer', 'min:0'],
            'logo' => ['required', 'image', 'mimes:png,jpg,jpeg,svg,webp', 'max:2048'],
        ]);

        $fileName = time() . '_' . $request->file('logo')->getClientOriginalName();
        $request->file('logo')->move(public_path('partners'), $fileName);
        $path = 'partners/' . $fileName;

        Partner::create([
            'name' => $data['name'],
            'website_url' => $data['website_url'] ?? null,
            'display_order' => $data['display_order'] ?? 0,
            'logo_path' => $path,
        ]);

        return redirect()->route('admin.partners.index')->with('status', 'Partner added successfully.');
    }

    public function edit(Partner $partner): View
    {
        return view('admin.partners.edit', compact('partner'));
    }

    public function update(Request $request, Partner $partner): RedirectResponse
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'website_url' => ['nullable', 'url'],
            'display_order' => ['nullable', 'integer', 'min:0'],
            'logo' => ['nullable', 'image', 'mimes:png,jpg,jpeg,svg,webp', 'max:2048'],
        ]);

        if ($request->hasFile('logo')) {
            $this->deleteLogo($partner->logo_path);
            $fileName = time() . '_' . $request->file('logo')->getClientOriginalName();
            $request->file('logo')->move(public_path('partners'), $fileName);
            $partner->logo_path = 'partners/' . $fileName;
        }

        $partner->name = $data['name'];
        $partner->website_url = $data['website_url'] ?? null;
        $partner->display_order = $data['display_order'] ?? 0;
        $partner->save();

        return redirect()->route('admin.partners.index')->with('status', 'Partner updated successfully.');
    }

    public function destroy(Partner $partner): RedirectResponse
    {
        $this->deleteLogo($partner->logo_path);
        $partner->delete();

        return redirect()->route('admin.partners.index')->with('status', 'Partner removed.');
    }

    public function updateOrder(Request $request, Partner $partner): RedirectResponse
    {
        $data = $request->validate([
            'display_order' => ['required', 'integer', 'min:0'],
        ]);

        $partner->update([
            'display_order' => $data['display_order'],
        ]);

        return back()->with('status', 'Partner order updated.');
    }

    private function deleteLogo(?string $path): void
    {
        if (!$path) {
            return;
        }

        if (str_starts_with($path, 'partners/')) {
            $fullPath = public_path($path);
            if (file_exists($fullPath)) {
                unlink($fullPath);
            }
        }
    }
}
