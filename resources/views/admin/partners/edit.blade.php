@extends('layouts.app')

@section('title', 'Edit Partner - SurVail')

@section('content')
<section class="py-16 bg-gray-100 min-h-[60vh]">
    <div class="w-full px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto">
            <a href="{{ route('admin.partners.index') }}" class="text-sm text-survail-green font-semibold inline-flex items-center gap-2 mb-6">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                Back to partners
            </a>

            <div class="bg-white rounded-3xl shadow-xl p-8 border border-gray-100">
                <h1 class="text-3xl font-bold text-gray-900 mb-6">Edit Partner</h1>

                <form action="{{ route('admin.partners.update', $partner) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                    @csrf
                    @method('PUT')

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2" for="name">Partner Name</label>
                        <input type="text" name="name" id="name" value="{{ old('name', $partner->name) }}" class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-survail-green focus:border-transparent @error('name') border-red-500 @enderror" required>
                        @error('name')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2" for="website_url">Website URL</label>
                        <input type="url" name="website_url" id="website_url" value="{{ old('website_url', $partner->website_url) }}" class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-survail-green focus:border-transparent @error('website_url') border-red-500 @enderror" placeholder="https://partner.com">
                        @error('website_url')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2" for="display_order">Display Order</label>
                        <input type="number" name="display_order" id="display_order" value="{{ old('display_order', $partner->display_order) }}" class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-survail-green focus:border-transparent @error('display_order') border-red-500 @enderror" min="0">
                        <p class="text-sm text-gray-500 mt-1">Lower numbers appear first.</p>
                        @error('display_order')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2" for="logo">Logo Image</label>
                        <input type="file" name="logo" id="logo" accept=".png,.jpg,.jpeg,.svg,.webp" class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-survail-green focus:border-transparent @error('logo') border-red-500 @enderror">
                        <p class="text-sm text-gray-500 mt-1">Leave empty to keep the current logo.</p>
                        @error('logo')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                        @if($partner->logo_url)
                            <div class="mt-4">
                                <p class="text-sm text-gray-500 mb-2">Current Logo</p>
                                <img src="{{ $partner->logo_url }}" alt="{{ $partner->name }}" class="h-16 object-contain bg-gray-50 rounded-xl p-3">
                            </div>
                        @endif
                    </div>

                    <div class="flex justify-end gap-3 pt-4">
                        <a href="{{ route('admin.partners.index') }}" class="px-5 py-3 rounded-xl border border-gray-200 text-gray-600 hover:bg-gray-50 transition">Cancel</a>
                        <button type="submit" class="px-5 py-3 rounded-xl bg-survail-green text-white font-semibold hover:bg-survail-green-dark transition shadow-lg hover:shadow-xl">Update Partner</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
