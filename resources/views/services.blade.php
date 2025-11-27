@extends('layouts.app')

@section('title', 'Services - SurVail Protection & Investigation Services')
@section('description', 'Professional security services including physical protection, event security, consulting and training in Southern Ontario.')

@section('content')
<div class="min-h-screen py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h1 class="text-4xl lg:text-6xl font-bold text-survail-brown mb-6">Our Services</h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Comprehensive security solutions tailored to your specific needs with over 42 years of experience.
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Physical Protection -->
            <div class="bg-white rounded-2xl shadow-lg p-8 border border-gray-100">
                <div class="w-16 h-16 bg-survail-brown bg-opacity-10 rounded-full flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-survail-brown" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M18 8a6 6 0 01-7.743 5.743L10 14l-4 4-4-4 4-4 .257.257A6 6 0 1118 8zm-6-2a1 1 0 11-2 0 1 1 0 012 0z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-survail-brown mb-4">Physical Protection</h3>
                <p class="text-gray-600 mb-6">Professional security personnel for construction sites, retail locations, warehouses, and corporate facilities.</p>
                <ul class="text-gray-600 space-y-2">
                    <li>• Construction site security</li>
                    <li>• Retail location protection</li>
                    <li>• Warehouse security</li>
                    <li>• Corporate facility security</li>
                    <li>• FireWatch/Recovery Security</li>
                </ul>
            </div>

            <!-- Event Security -->
            <div id="events" class="bg-white rounded-2xl shadow-lg p-8 border border-gray-100">
                <div class="w-16 h-16 bg-survail-green bg-opacity-10 rounded-full flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-survail-green" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-survail-brown mb-4">Event Security</h3>
                <p class="text-gray-600 mb-6">Specialized security management for concerts, festivals, sporting events, and special occasions.</p>
                <ul class="text-gray-600 space-y-2">
                    <li>• Concert security</li>
                    <li>• Festival management</li>
                    <li>• Sporting events</li>
                    <li>• Crowd control</li>
                    <li>• Corporate Events</li>
                    <li>• Weddings</li>
                    <li>• Funerals</li>
                </ul>
            </div>

            <!-- Consulting & Training -->
            <div id="consulting" class="bg-white rounded-2xl shadow-lg p-8 border border-gray-100">
                <div class="w-16 h-16 bg-survail-red bg-opacity-10 rounded-full flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-survail-red" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-survail-brown mb-4">Consulting & Training</h3>
                <p class="text-gray-600 mb-6">Professional security consulting, emergency management training, and specialized security planning.</p>
                <ul class="text-gray-600 space-y-2">
                    <li>• Security consulting</li>
                    <li>• Emergency management</li>
                    <li>• Security planning</li>
                    <li>• Staff training</li>
                </ul>
            </div>
        </div>

        <!-- Call to Action -->
        <div class="mt-16 text-center">
            <div class="bg-survail-green rounded-2xl p-8 text-white">
                <h2 class="text-3xl font-bold mb-4">Ready to Get Started?</h2>
                <p class="text-xl mb-6">Contact us today for a free consultation and customized security solution.</p>
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
@endsection