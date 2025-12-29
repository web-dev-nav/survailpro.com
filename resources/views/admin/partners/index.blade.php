@extends('layouts.app')

@section('title', 'Manage Partners - SurVail')

@section('content')
<section class="py-16 bg-gray-100 min-h-[60vh]">
    <div class="w-full px-4 sm:px-6 lg:px-8">
        <div class="max-w-6xl mx-auto">
            <div class="flex flex-col gap-4 lg:flex-row lg:items-center lg:justify-between mb-8">
                <div>
                    <p class="text-sm uppercase tracking-widest text-survail-green">Admin</p>
                    <h1 class="text-3xl font-bold text-gray-900">Partner Logos</h1>
                    <p class="text-gray-600">Upload, edit, or remove logos shown on the homepage partners grid.</p>
                </div>
                <a href="{{ route('admin.partners.create') }}" class="inline-flex items-center gap-2 px-5 py-3 bg-survail-green text-white rounded-xl font-semibold shadow-lg hover:bg-survail-green-dark transition">
                    <span class="text-xl leading-none">+</span>
                    Add Partner
                </a>
            </div>

            @if(session('status'))
                <div class="mb-6 rounded-lg bg-green-50 border border-green-100 text-green-700 px-4 py-3">
                    {{ session('status') }}
                </div>
            @endif

            <div class="bg-white rounded-3xl shadow-xl border border-gray-100 overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Logo</th>
                                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Name</th>
                                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Website</th>
                                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Order</th>
                                <th class="px-6 py-3 text-right text-xs font-semibold text-gray-500 uppercase tracking-wider">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @forelse($partners as $partner)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        @if($partner->logo_url)
                                            <img src="{{ $partner->logo_url }}" alt="{{ $partner->name }}" class="h-12 object-contain">
                                        @else
                                            <span class="text-gray-400 text-sm">No logo</span>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm font-semibold text-gray-900">{{ $partner->name }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        @if($partner->website_url)
                                            <a href="{{ $partner->website_url }}" target="_blank" class="text-survail-green text-sm underline break-all">{{ $partner->website_url }}</a>
                                        @else
                                            <span class="text-sm text-gray-400">—</span>
                                        @endif
                                    </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <form action="{{ route('admin.partners.order', $partner) }}" method="POST" class="flex items-center gap-2">
                                        @csrf
                                        @method('PATCH')
                                        <input type="number" name="display_order" value="{{ old('display_order', $partner->display_order) }}" min="0" class="w-20 rounded-lg border border-gray-300 px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-survail-green focus:border-transparent">
                                        <button type="submit" class="inline-flex items-center px-3 py-1.5 rounded-lg bg-survail-green text-white text-sm font-semibold hover:bg-survail-green-dark transition">
                                            Save
                                        </button>
                                    </form>
                                </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium space-x-2">
                                        <a href="{{ route('admin.partners.edit', $partner) }}" class="inline-flex items-center px-3 py-1.5 rounded-lg bg-gray-100 text-gray-700 hover:bg-gray-200 transition">
                                            Edit
                                        </a>
                                        <form action="{{ route('admin.partners.destroy', $partner) }}" method="POST" class="inline-block" onsubmit="return confirm('Remove this partner?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="inline-flex items-center px-3 py-1.5 rounded-lg bg-red-50 text-red-600 hover:bg-red-100 transition">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="px-6 py-8 text-center text-gray-500">
                                        No partners yet. Start by clicking “Add Partner”.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
