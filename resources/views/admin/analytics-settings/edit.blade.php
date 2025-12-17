@extends('layouts.app')

@section('title', 'Analytics Setup - Admin')
@section('description', 'Connect Google Analytics 4 to show charts in the admin dashboard.')

@section('content')
<section class="py-16 bg-gray-100 min-h-[60vh]">
    <div class="w-full px-4 sm:px-6 lg:px-8">
        <div class="max-w-5xl mx-auto">
            <div class="flex items-center justify-between mb-8">
                <div>
                    <p class="text-sm uppercase tracking-widest text-survail-green">Setup</p>
                    <h1 class="text-3xl font-bold text-gray-900">Analytics Settings</h1>
                    <p class="text-gray-600 mt-2">Paste your GA4 details below. Takes 2–3 minutes.</p>
                </div>
                <a href="{{ route('admin.dashboard') }}" class="text-survail-brown hover:underline font-semibold">← Back to dashboard</a>
            </div>

            @if(session('status'))
                <div class="mb-6 rounded-lg bg-green-50 border border-green-100 text-green-700 px-4 py-3">
                    {{ session('status') }}
                </div>
            @endif

            <div class="grid lg:grid-cols-2 gap-8">
                <div class="bg-white rounded-2xl shadow-lg p-6 border border-gray-100">
                    <form method="POST" action="{{ route('admin.analytics.update') }}">
                        @csrf
                        <div class="mb-5">
                            <label class="block text-sm font-semibold text-gray-800 mb-2">GA4 Property ID</label>
                            <input type="text" name="property_id" value="{{ old('property_id', $settings['property_id']) }}"
                                   class="w-full rounded-xl border-gray-200 focus:ring-survail-green focus:border-survail-green"
                                   placeholder="e.g. 123456789">
                            @error('property_id')
                                <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-5">
                            <label class="block text-sm font-semibold text-gray-800 mb-2">Service account JSON</label>
                            <textarea name="credentials_json" rows="6"
                                      class="w-full rounded-xl border-gray-200 focus:ring-survail-green focus:border-survail-green font-mono text-xs"
                                      placeholder='Paste the full JSON here'>{{ old('credentials_json', $settings['credentials_json']) }}</textarea>
                            @error('credentials_json')
                                <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                            @enderror
                            <p class="text-xs text-gray-500 mt-2">Keep this secret. It saves to a private file on the server (not to Git).</p>
                        </div>

                        <button type="submit" class="inline-flex items-center gap-2 px-5 py-3 bg-survail-brown hover:bg-survail-brown-dark text-white rounded-xl font-semibold transition">
                            Save settings
                        </button>
                    </form>
                </div>

                <div class="bg-white rounded-2xl shadow-lg p-6 border border-gray-100">
                    <h2 class="text-xl font-semibold text-gray-900 mb-4">Step-by-step (non‑technical)</h2>
                    <ol class="list-decimal list-inside space-y-3 text-sm text-gray-700">
                        <li><strong>Create/identify GA4:</strong> In Google Analytics, make sure you have a GA4 property for survailpro.ca.</li>
                        <li><strong>Get Property ID:</strong> GA Admin → Property Settings → copy the numeric Property ID (not the G‑ tag).</li>
                        <li><strong>Create service account:</strong> Google Cloud Console → APIs & Services → Credentials → Create Service Account → add a JSON key.</li>
                        <li><strong>Give GA access:</strong> In GA Admin → Property Access Management → add the service account email as Viewer (or Analyst).</li>
                        <li><strong>Paste here:</strong> Enter the Property ID and paste the full JSON from the downloaded key above, then click Save.</li>
                        <li><strong>See charts:</strong> Go back to the admin dashboard; traffic charts will load automatically. If not, recheck the ID and permissions.</li>
                    </ol>
                    <div class="mt-4 text-xs text-gray-500">
                        Need more detail? See <a class="text-survail-brown underline" href="{{ asset('GA4_SETUP.md') }}" target="_blank">GA4_SETUP.md</a>.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
