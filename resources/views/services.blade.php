@extends('layouts.app')

@section('title', 'SurVail Services - Professional Security & Investigation Solutions')
@section('description', 'Comprehensive security services including video monitoring, physical protection, event security, investigation, consulting and training in Southern Ontario.')

@section('content')
<div class="min-h-screen">
    <!-- Hero Section -->
    <div class="bg-gradient-to-r from-survail-brown to-survail-brown-dark text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl lg:text-6xl font-bold mb-6">SurVail Services</h1>
                <p class="text-xl text-gray-200 max-w-3xl mx-auto">
                    Complete security and investigation solutions tailored to your specific needs. With 42 years of combined management experience, we deliver professional, reliable, and comprehensive security services.
                </p>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Services Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
            <!-- Video Monitoring -->
            <div class="bg-white rounded-2xl shadow-lg p-8 border border-gray-100 hover:shadow-xl transition-shadow">
                <div class="w-16 h-16 bg-yellow-400 bg-opacity-20 rounded-full flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-yellow-600" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M2 6a2 2 0 012-2h12a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zm4 2v4h8V8H6z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-survail-brown mb-4">Video Monitoring</h3>
                <p class="text-gray-600 mb-6">24/7 AI-powered video surveillance with real-time threat detection and professional response.</p>
                <ul class="text-gray-600 space-y-2">
                    <li>✓ HD CCTV systems</li>
                    <li>✓ AI threat detection</li>
                    <li>✓ Real-time alerts</li>
                    <li>✓ Cloud & local storage</li>
                    <li>✓ Mobile access</li>
                </ul>
            </div>

            <!-- Physical Protection -->
            <div class="bg-white rounded-2xl shadow-lg p-8 border border-gray-100 hover:shadow-xl transition-shadow">
                <div class="w-16 h-16 bg-survail-brown bg-opacity-10 rounded-full flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-survail-brown" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M4.5 2a2 2 0 00-2 2v11a1 1 0 110 2h12.75l1.06 3.18a1 1 0 001.97-.06L17.3 2a1 1 0 00-.98-1.18H4.5zm7 7a2 2 0 11-4 0 2 2 0 014 0z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-survail-brown mb-4">Physical Protection</h3>
                <p class="text-gray-600 mb-6">Professional security personnel for construction sites, retail, warehouses, and corporate facilities.</p>
                <ul class="text-gray-600 space-y-2">
                    <li>✓ Construction security</li>
                    <li>✓ Retail protection</li>
                    <li>✓ Warehouse security</li>
                    <li>✓ Corporate facility security</li>
                    <li>✓ FireWatch/Recovery security</li>
                </ul>
            </div>

            <!-- Event Security -->
            <div id="events" class="bg-white rounded-2xl shadow-lg p-8 border border-gray-100 hover:shadow-xl transition-shadow">
                <div class="w-16 h-16 bg-survail-green bg-opacity-10 rounded-full flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-survail-green" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M13 7H7v6h6V7z"></path>
                        <path fill-rule="evenodd" d="M7 2a1 1 0 012 0v1h2V2a1 1 0 112 0v1h2V2a1 1 0 112 0v1h2a2 2 0 012 2v2h1a1 1 0 110 2h-1v2h1a1 1 0 110 2h-1v2a2 2 0 01-2 2h-2v1a1 1 0 11-2 0v-1h-2v1a1 1 0 11-2 0v-1H7a2 2 0 01-2-2v-2H4a1 1 0 110-2h1V9H4a1 1 0 110-2h1V5a2 2 0 012-2h2V2zM9 5a1 1 0 11-2 0 1 1 0 012 0z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-survail-brown mb-4">Event Security</h3>
                <p class="text-gray-600 mb-6">Specialized security management for concerts, festivals, sporting events, and special occasions.</p>
                <ul class="text-gray-600 space-y-2">
                    <li>✓ Concert security</li>
                    <li>✓ Festival management</li>
                    <li>✓ Sporting events</li>
                    <li>✓ Crowd control</li>
                    <li>✓ Corporate & private events</li>
                </ul>
            </div>

            <!-- Investigation Services -->
            <div id="investigation" class="bg-white rounded-2xl shadow-lg p-8 border border-gray-100 hover:shadow-xl transition-shadow">
                <div class="w-16 h-16 bg-survail-red bg-opacity-10 rounded-full flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-survail-red" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-survail-brown mb-4">Investigation Services</h3>
                <p class="text-gray-600 mb-6">Professional investigation and evidence gathering for corporate and personal security matters.</p>
                <ul class="text-gray-600 space-y-2">
                    <li>✓ Background investigations</li>
                    <li>✓ Surveillance & monitoring</li>
                    <li>✓ Evidence collection</li>
                    <li>✓ Fraud investigation</li>
                    <li>✓ Corporate intelligence</li>
                </ul>
            </div>

            <!-- Consulting & Training -->
            <div id="consulting" class="bg-white rounded-2xl shadow-lg p-8 border border-gray-100 hover:shadow-xl transition-shadow">
                <div class="w-16 h-16 bg-blue-400 bg-opacity-20 rounded-full flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10.5 1.5H5.75A2.25 2.25 0 003.5 3.75v12.5A2.25 2.25 0 005.75 18.5h8.5a2.25 2.25 0 002.25-2.25V6.5m-9-3v3m3-3v3m-6 8h12M6 12.5h8"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-survail-brown mb-4">Consulting & Training</h3>
                <p class="text-gray-600 mb-6">Professional security consulting, emergency management training, and specialized security planning.</p>
                <ul class="text-gray-600 space-y-2">
                    <li>✓ Security consulting</li>
                    <li>✓ Emergency management</li>
                    <li>✓ Security planning</li>
                    <li>✓ Staff training programs</li>
                    <li>✓ Risk assessment</li>
                </ul>
            </div>

            <!-- Personal Protection -->
            <div class="bg-white rounded-2xl shadow-lg p-8 border border-gray-100 hover:shadow-xl transition-shadow">
                <div class="w-16 h-16 bg-purple-400 bg-opacity-20 rounded-full flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-survail-brown mb-4">Personal Protection</h3>
                <p class="text-gray-600 mb-6">Executive and personal security services with discreet, professional protection specialists.</p>
                <ul class="text-gray-600 space-y-2">
                    <li>✓ Executive protection</li>
                    <li>✓ Personal security</li>
                    <li>✓ VIP detail services</li>
                    <li>✓ Close protection</li>
                    <li>✓ Travel security</li>
                </ul>
            </div>
        </div>

        <!-- Why Choose SurVail Section -->
        <div class="bg-gray-50 rounded-2xl p-8 md:p-12 mb-12">
            <h2 class="text-3xl font-bold text-survail-brown mb-8 text-center">Why Choose SurVail Services</h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="text-center">
                    <h3 class="text-4xl font-bold text-yellow-500 mb-2">42+</h3>
                    <p class="text-gray-700">Years Combined Experience</p>
                </div>
                <div class="text-center">
                    <h3 class="text-4xl font-bold text-yellow-500 mb-2">24/7</h3>
                    <p class="text-gray-700">Around-the-Clock Support</p>
                </div>
                <div class="text-center">
                    <h3 class="text-4xl font-bold text-yellow-500 mb-2">500+</h3>
                    <p class="text-gray-700">Satisfied Clients</p>
                </div>
                <div class="text-center">
                    <h3 class="text-4xl font-bold text-yellow-500 mb-2">100%</h3>
                    <p class="text-gray-700">Professional Certified Staff</p>
                </div>
            </div>
        </div>

        <!-- Call to Action -->
        <div class="text-center">
            <div class="bg-survail-green rounded-2xl p-8 text-white">
                <h2 class="text-3xl font-bold mb-4">Ready for Professional Security?</h2>
                <p class="text-xl mb-6">Contact us today for a free consultation and customized security solution tailored to your needs.</p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('contact') }}" class="bg-white text-survail-green px-8 py-3 rounded-full font-bold text-lg hover:bg-gray-100 transition-colors">
                        Get Free Quote
                    </a>
                    <a href="tel:{{ preg_replace('/\\s+/', '', $globalContact->main_phone_number ?? '519-770-6634') }}" class="bg-yellow-400 hover:bg-yellow-300 text-gray-900 px-8 py-3 rounded-full font-bold text-lg transition-colors">
                        Call: {{ $globalContact->main_phone_number ?? '519-770-6634' }}
                    </a>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection
