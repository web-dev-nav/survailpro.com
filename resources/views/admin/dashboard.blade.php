@extends('layouts.app')

@section('title', 'Admin Dashboard - SurVail')
@section('description', 'Internal dashboard for the SurVail team.')

@section('content')
<section class="py-16 bg-gray-100 min-h-[60vh]">
    <div class="w-full px-4 sm:px-6 lg:px-8">
        <div class="max-w-6xl mx-auto">
            <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4 mb-10">
                <div>
                    <p class="text-sm uppercase tracking-widest text-survail-green">Welcome back</p>
                    <h1 class="text-3xl font-bold text-gray-900">Admin Dashboard</h1>
                    <p class="text-gray-600 mt-2">Signed in as <span class="font-semibold">{{ session('admin_username') }}</span></p>
                </div>
                <form method="POST" action="{{ route('admin.logout') }}">
                    @csrf
                    <button type="submit" class="inline-flex items-center gap-2 px-5 py-3 bg-survail-red hover:bg-survail-red-dark text-white rounded-xl font-semibold transition-all duration-300 shadow-lg hover:shadow-xl">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a2 2 0 01-2 2H7a2 2 0 01-2-2V7a2 2 0 012-2h4a2 2 0 012 2v1" />
                        </svg>
                        Logout
                    </button>
                </form>
            </div>

            @if(session('status'))
                <div class="mb-6 rounded-lg bg-green-50 border border-green-100 text-green-700 px-4 py-3">
                    {{ session('status') }}
                </div>
            @endif

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
                <a href="{{ route('admin.partners.index') }}" class="bg-white rounded-2xl shadow-lg p-6 border border-gray-100 hover:-translate-y-1 hover:shadow-xl transition">
                    <p class="text-sm text-gray-500 mb-2">Partner Logos</p>
                    <p class="text-3xl font-bold text-gray-900">{{ $partnerCount }}</p>
                    <p class="text-xs text-survail-green mt-3 font-semibold flex items-center gap-2">
                        Manage logos
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </p>
                </a>
                <a href="{{ route('admin.contact.edit') }}" class="bg-white rounded-2xl shadow-lg p-6 border border-gray-100 hover:-translate-y-1 hover:shadow-xl transition">
                    <p class="text-sm text-gray-500 mb-2">Contact Details</p>
                    <p class="text-3xl font-bold text-gray-900">{{ $contactSettings ? 'Ready' : 'Set up' }}</p>
                    <p class="text-xs text-survail-green mt-3 font-semibold flex items-center gap-2">
                        Update info
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </p>
                </a>
                <div class="bg-white rounded-2xl shadow-lg p-6 border border-gray-100">
                    <p class="text-sm text-gray-500 mb-2">System Health</p>
                    <p class="text-3xl font-bold text-gray-900">OK</p>
                    <p class="text-xs text-gray-400 mt-1">Static placeholder — customize as needed.</p>
                </div>
            </div>

            <div class="bg-white rounded-3xl shadow-xl p-8 border border-gray-100">
                <h2 class="text-2xl font-semibold text-gray-900 mb-4">Quick Actions</h2>
                <div class="grid md:grid-cols-2 gap-6">
                    <a href="{{ route('admin.partners.create') }}" class="flex items-center gap-3 p-4 border border-dashed border-survail-green rounded-2xl hover:bg-survail-green hover:bg-opacity-5 transition">
                        <span class="w-10 h-10 rounded-full bg-survail-green bg-opacity-10 text-survail-green flex items-center justify-center text-xl font-bold">+</span>
                        <div>
                            <p class="font-semibold text-gray-900">Add New Partner Logo</p>
                            <p class="text-sm text-gray-500">Upload and publish instantly</p>
                        </div>
                    </a>
                    <a href="{{ route('admin.contact.edit') }}" class="flex items-center gap-3 p-4 border border-dashed border-survail-green rounded-2xl hover:bg-survail-green hover:bg-opacity-5 transition">
                        <span class="w-10 h-10 rounded-full bg-survail-green bg-opacity-10 text-survail-green flex items-center justify-center text-xl font-bold">✎</span>
                        <div>
                            <p class="font-semibold text-gray-900">Edit Contact Details</p>
                            <p class="text-sm text-gray-500">Update phone, email across entire site</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
