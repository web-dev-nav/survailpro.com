@extends('layouts.app')

@section('title', 'Edit Contact Details - SurVail')

@section('content')
<section class="py-16 bg-gray-100 min-h-[60vh]">
    <div class="w-full px-4 sm:px-6 lg:px-8">
        <div class="max-w-5xl mx-auto">
            <a href="{{ route('admin.dashboard') }}" class="text-sm text-survail-green font-semibold inline-flex items-center gap-2 mb-6">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                Back to dashboard
            </a>

            <div class="bg-white rounded-3xl shadow-xl p-8 border border-gray-100">
                <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4 mb-6">
                    <div>
                        <p class="text-sm uppercase tracking-widest text-survail-green">Website Contact Settings</p>
                        <h1 class="text-3xl font-bold text-gray-900">Update Contact Details</h1>
                        <p class="text-gray-600">Changes update across the <strong>entire website</strong> including header, footer, all pages, and email templates.</p>
                    </div>
                </div>

                @if(session('status'))
                    <div class="mb-6 rounded-lg bg-green-50 border border-green-100 text-green-700 px-4 py-3">
                        {{ session('status') }}
                    </div>
                @endif

                <form action="{{ route('admin.contact.update') }}" method="POST" class="space-y-8">
                    @csrf
                    @method('PUT')

                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2" for="hero_title">Hero Title</label>
                            <input type="text" name="hero_title" id="hero_title" value="{{ old('hero_title', $settings->hero_title) }}" class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:ring-2 focus:ring-survail-green focus:border-transparent @error('hero_title') border-red-500 @enderror" required>
                            @error('hero_title')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2" for="hero_description">Hero Subtitle</label>
                            <textarea name="hero_description" id="hero_description" rows="3" class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:ring-2 focus:ring-survail-green focus:border-transparent @error('hero_description') border-red-500 @enderror">{{ old('hero_description', $settings->hero_description) }}</textarea>
                            @error('hero_description')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="space-y-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2" for="main_phone_label">Primary Phone Label</label>
                                <input type="text" name="main_phone_label" id="main_phone_label" value="{{ old('main_phone_label', $settings->main_phone_label) }}" class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:ring-2 focus:ring-survail-green focus:border-transparent @error('main_phone_label') border-red-500 @enderror">
                                @error('main_phone_label')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2" for="main_phone_number">Primary Phone Number</label>
                                <input type="text" name="main_phone_number" id="main_phone_number" value="{{ old('main_phone_number', $settings->main_phone_number) }}" class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:ring-2 focus:ring-survail-green focus:border-transparent @error('main_phone_number') border-red-500 @enderror">
                                @error('main_phone_number')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="space-y-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2" for="secondary_phone_label">Secondary Phone Label</label>
                                <input type="text" name="secondary_phone_label" id="secondary_phone_label" value="{{ old('secondary_phone_label', $settings->secondary_phone_label) }}" class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:ring-2 focus:ring-survail-green focus:border-transparent @error('secondary_phone_label') border-red-500 @enderror">
                                @error('secondary_phone_label')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2" for="secondary_phone_number">Secondary Phone Number</label>
                                <input type="text" name="secondary_phone_number" id="secondary_phone_number" value="{{ old('secondary_phone_number', $settings->secondary_phone_number) }}" class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:ring-2 focus:ring-survail-green focus:border-transparent @error('secondary_phone_number') border-red-500 @enderror">
                                @error('secondary_phone_number')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2" for="email">Email</label>
                            <input type="email" name="email" id="email" value="{{ old('email', $settings->email) }}" class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:ring-2 focus:ring-survail-green focus:border-transparent @error('email') border-red-500 @enderror">
                            @error('email')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="space-y-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2" for="address_line_one">Address Line 1</label>
                                <input type="text" name="address_line_one" id="address_line_one" value="{{ old('address_line_one', $settings->address_line_one) }}" class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:ring-2 focus:ring-survail-green focus:border-transparent @error('address_line_one') border-red-500 @enderror">
                                @error('address_line_one')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2" for="address_line_two">Address Line 2</label>
                                <input type="text" name="address_line_two" id="address_line_two" value="{{ old('address_line_two', $settings->address_line_two) }}" class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:ring-2 focus:ring-survail-green focus:border-transparent @error('address_line_two') border-red-500 @enderror">
                                @error('address_line_two')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    @php
                        $serviceAreas = old('service_areas', $settings->service_areas ?? []);
                        $serviceAreas = is_array($serviceAreas) ? $serviceAreas : [];
                        $serviceAreas = array_values($serviceAreas);
                    @endphp

                    <div>
                        <div class="flex items-center justify-between mb-4">
                            <div>
                                <h2 class="text-xl font-semibold text-gray-900">Service Areas</h2>
                                <p class="text-sm text-gray-500">List as many as you need.</p>
                            </div>
                            <button type="button" id="addServiceArea" class="inline-flex items-center gap-2 px-4 py-2 rounded-xl border border-survail-green text-survail-green font-semibold hover:bg-survail-green hover:text-white transition">
                                <span class="text-lg leading-none">+</span>
                                Add Entry
                            </button>
                        </div>

                        <div id="serviceAreaList" class="space-y-4">
                            @forelse($serviceAreas as $index => $area)
                                <div class="grid md:grid-cols-2 gap-4 service-area-entry bg-gray-50 rounded-2xl p-4">
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Title</label>
                                        <input type="text" name="service_areas[{{ $index }}][title]" value="{{ $area['title'] ?? '' }}" class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:ring-2 focus:ring-survail-green focus:border-transparent">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Subtitle</label>
                                        <input type="text" name="service_areas[{{ $index }}][subtitle]" value="{{ $area['subtitle'] ?? '' }}" class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:ring-2 focus:ring-survail-green focus:border-transparent">
                                    </div>
                                </div>
                            @empty
                                <div class="grid md:grid-cols-2 gap-4 service-area-entry bg-gray-50 rounded-2xl p-4">
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Title</label>
                                        <input type="text" name="service_areas[0][title]" class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:ring-2 focus:ring-survail-green focus:border-transparent">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Subtitle</label>
                                        <input type="text" name="service_areas[0][subtitle]" class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:ring-2 focus:ring-survail-green focus:border-transparent">
                                    </div>
                                </div>
                            @endforelse
                        </div>
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

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const addBtn = document.getElementById('addServiceArea');
        const list = document.getElementById('serviceAreaList');
        let index = list.querySelectorAll('.service-area-entry').length;

        addBtn.addEventListener('click', () => {
            const wrapper = document.createElement('div');
            wrapper.className = 'grid md:grid-cols-2 gap-4 service-area-entry bg-gray-50 rounded-2xl p-4';
            wrapper.innerHTML = `
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Title</label>
                    <input type="text" name="service_areas[${index}][title]" class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:ring-2 focus:ring-survail-green focus:border-transparent">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Subtitle</label>
                    <input type="text" name="service_areas[${index}][subtitle]" class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:ring-2 focus:ring-survail-green focus:border-transparent">
                </div>
            `;
            list.appendChild(wrapper);
            index++;
        });
    });
</script>
@endpush
@endsection
