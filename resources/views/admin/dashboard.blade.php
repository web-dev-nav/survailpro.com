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
                <a href="{{ route('admin.analytics.edit') }}" class="inline-flex items-center gap-2 px-4 py-2 text-survail-brown hover:underline font-semibold">
                    Analytics settings
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
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

            <div class="bg-white rounded-3xl shadow-xl p-8 border border-gray-100 mb-8">
                <div class="flex items-center justify-between mb-6">
                    <div>
                        <p class="text-sm uppercase tracking-widest text-survail-green">Website Performance</p>
                        <h2 class="text-2xl font-semibold text-gray-900">Google Analytics</h2>
                        <p class="text-sm text-gray-500 mt-1">Last 14 days</p>
                    </div>
                </div>

                @if(!$analytics['enabled'])
                    <div class="rounded-2xl border border-dashed border-gray-300 p-6 bg-gray-50">
                        <p class="font-semibold text-gray-800 mb-2">Connect Google Analytics 4</p>
                        <p class="text-sm text-gray-600 mb-4">Add a GA4 property and service account key to show traffic charts here.</p>
                        <a href="{{ asset('GA4_SETUP.md') }}" target="_blank" class="inline-flex items-center gap-2 px-4 py-2 bg-survail-brown text-white rounded-lg hover:bg-survail-brown-dark transition">
                            View setup steps
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                @elseif($analytics['error'])
                    <div class="rounded-2xl border border-red-200 bg-red-50 text-red-700 p-4">
                        {{ $analytics['error'] }}
                    </div>
                @else
                    @php
                        $overview = $analytics['overview'];
                    @endphp
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                        <div class="p-5 rounded-2xl border border-gray-100 bg-gradient-to-br from-survail-green/10 to-white">
                            <p class="text-sm text-gray-500 mb-2">Unique visitors</p>
                            <p class="text-3xl font-bold text-gray-900">{{ number_format($overview['totals']['users']) }}</p>
                        </div>
                        <div class="p-5 rounded-2xl border border-gray-100 bg-gradient-to-br from-survail-brown/10 to-white">
                            <p class="text-sm text-gray-500 mb-2">Sessions</p>
                            <p class="text-3xl font-bold text-gray-900">{{ number_format($overview['totals']['sessions']) }}</p>
                        </div>
                        <div class="p-5 rounded-2xl border border-gray-100 bg-gradient-to-br from-survail-red/10 to-white">
                            <p class="text-sm text-gray-500 mb-2">Page views</p>
                            <p class="text-3xl font-bold text-gray-900">{{ number_format($overview['totals']['pageviews']) }}</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                        <div class="lg:col-span-2">
                            <canvas id="trafficChart" class="w-full h-64"></canvas>
                        </div>
                        <div class="border border-gray-100 rounded-2xl p-4 bg-gray-50">
                            <h3 class="font-semibold text-gray-900 mb-3">Top pages</h3>
                            <div class="space-y-3">
                                @forelse($overview['top_pages'] as $page)
                                    <div class="p-3 rounded-xl bg-white border border-gray-100">
                                        <p class="text-sm font-semibold text-gray-900">{{ $page['title'] }}</p>
                                        <p class="text-xs text-gray-500 truncate">{{ $page['path'] }}</p>
                                        <p class="text-xs text-gray-600 mt-1">{{ number_format($page['views']) }} views</p>
                                    </div>
                                @empty
                                    <p class="text-sm text-gray-500">No page data yet.</p>
                                @endforelse
                            </div>
                        </div>
                    </div>
                @endif
            </div>

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

@if(($analytics['enabled'] ?? false) && empty($analytics['error']) && !empty($analytics['overview']))
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const analytics = @json($analytics['overview']);
        const ctx = document.getElementById('trafficChart');
        if (ctx && analytics) {
            new Chart(ctx, {
                type: 'line',
                data: {
                    labels: analytics.timeseries.labels,
                    datasets: [
                        {
                            label: 'Unique visitors',
                            data: analytics.timeseries.users,
                            borderColor: '#0d9488',
                            backgroundColor: 'rgba(13, 148, 136, 0.1)',
                            tension: 0.3,
                            fill: true,
                        },
                        {
                            label: 'Sessions',
                            data: analytics.timeseries.sessions,
                            borderColor: '#8b5a2b',
                            backgroundColor: 'rgba(139, 90, 43, 0.08)',
                            tension: 0.3,
                            fill: true,
                        },
                        {
                            label: 'Page views',
                            data: analytics.timeseries.pageviews,
                            borderColor: '#e11d48',
                            backgroundColor: 'rgba(225, 29, 72, 0.08)',
                            tension: 0.3,
                            fill: true,
                        },
                    ],
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: { display: true },
                        tooltip: { mode: 'index', intersect: false },
                    },
                    interaction: { mode: 'index', intersect: false },
                    scales: {
                        y: { beginAtZero: true, ticks: { precision: 0 } },
                    },
                },
            });
        }
    </script>
@endif
@endsection
