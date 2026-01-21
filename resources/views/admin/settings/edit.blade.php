@extends('layouts.app')

@section('title', 'Site Settings - SurVail')

@section('content')
<section class="py-16 bg-gray-100 min-h-[60vh]">
    <div class="w-full px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto">
            <a href="{{ route('admin.dashboard') }}" class="text-sm text-survail-green font-semibold inline-flex items-center gap-2 mb-6">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                Back to dashboard
            </a>

            <div class="bg-white rounded-3xl shadow-xl p-8 border border-gray-100">
                <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4 mb-6">
                    <div>
                        <p class="text-sm uppercase tracking-widest text-survail-green">Website Settings</p>
                        <h1 class="text-3xl font-bold text-gray-900">Site Settings</h1>
                        <p class="text-gray-600">Update tracking and other global settings.</p>
                    </div>
                </div>

                @if(session('status'))
                    <div class="mb-6 rounded-lg bg-green-50 border border-green-100 text-green-700 px-4 py-3">
                        {{ session('status') }}
                    </div>
                @endif

                <form action="{{ route('admin.settings.update') }}" method="POST" class="space-y-8">
                    @csrf
                    @method('PUT')

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2" for="google_analytics_id">Google Analytics Measurement ID</label>
                        <input type="text" name="google_analytics_id" id="google_analytics_id" value="{{ old('google_analytics_id', $settings->google_analytics_id) }}" placeholder="G-XXXXXXXXXX" class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:ring-2 focus:ring-survail-green focus:border-transparent @error('google_analytics_id') border-red-500 @enderror">
                        @error('google_analytics_id')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                        <p class="mt-2 text-sm text-gray-500">Paste the GA4 Measurement ID only (example: G-ABC1234567). Leave blank to disable tracking.</p>
                    </div>

                    <div class="flex justify-end gap-3 pt-6">
                        <a href="{{ route('admin.dashboard') }}" class="px-5 py-3 rounded-xl border border-gray-200 text-gray-600 hover:bg-gray-50 transition">Cancel</a>
                        <button type="submit" class="px-5 py-3 rounded-xl bg-survail-green text-white font-semibold hover:bg-survail-green-dark transition shadow-lg hover:shadow-xl">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
