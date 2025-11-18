@extends('layouts.app')

@section('title', 'Contact Us - SurVail Protection & Investigation Services')
@section('description', 'Contact SurVail Protection & Investigation Services. Call 519-770-6634 or email don@survailpro.ca for professional security solutions.')

@section('content')
@php
    $contact = $contactSettings ?? null;
    $heroTitle = $contact->hero_title ?? 'Contact Us';
    $heroDescription = $contact->hero_description ?? 'Ready to secure your property? Get in touch with our security professionals today.';
    $mainPhoneLabel = $contact->main_phone_label ?? 'Main';
    $mainPhoneNumber = $contact->main_phone_number ?? '519-770-6634';
    $secondaryPhoneLabel = $contact->secondary_phone_label ?? 'Hamilton Area';
    $secondaryPhoneNumber = $contact->secondary_phone_number ?? '905-928-9636';
    $email = $contact->email ?? 'don@survailpro.ca';
    $addressLineOne = $contact->address_line_one ?? '148 Henry Street';
    $addressLineTwo = $contact->address_line_two ?? 'Brantford ON N3S-5C7';
    $serviceAreas = collect($contact->service_areas ?? [
        ['title' => 'Brantford', 'subtitle' => '& Brant County'],
        ['title' => 'Hamilton', 'subtitle' => 'Greater Area'],
        ['title' => 'Waterloo', 'subtitle' => 'Region'],
        ['title' => 'Haldimand', 'subtitle' => 'County'],
    ]);
@endphp

<div class="min-h-screen py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h1 class="text-4xl lg:text-6xl font-bold text-survail-brown mb-6">{{ $heroTitle }}</h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                {{ $heroDescription }}
            </p>
        </div>

        <div class="grid lg:grid-cols-2 gap-12">
            <!-- Contact Information -->
            <div>
                <h2 class="text-3xl font-bold text-survail-brown mb-8">Get In Touch</h2>

                <div class="space-y-6">
                    <div class="flex items-start">
                        <div class="w-12 h-12 bg-survail-green bg-opacity-10 rounded-full flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-survail-green" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-survail-brown mb-2">Phone</h3>
                            <div class="space-y-3">
                                <div>
                                    <a href="tel:{{ preg_replace('/\\s+/', '', $mainPhoneNumber) }}" class="text-lg text-gray-600 hover:text-survail-green transition-colors">{{ $mainPhoneNumber }}</a>
                                    <span class="text-sm text-gray-500 ml-2">({{ $mainPhoneLabel }})</span>
                                </div>
                                @if($secondaryPhoneNumber)
                                    <div>
                                        <a href="tel:{{ preg_replace('/\\s+/', '', $secondaryPhoneNumber) }}" class="text-lg text-gray-600 hover:text-survail-green transition-colors">{{ $secondaryPhoneNumber }}</a>
                                        @if($secondaryPhoneLabel)
                                            <span class="text-sm text-gray-500 ml-2">({{ $secondaryPhoneLabel }})</span>
                                        @endif
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="w-12 h-12 bg-survail-green bg-opacity-10 rounded-full flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-survail-green" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-survail-brown mb-2">Email</h3>
                            <a href="mailto:{{ $email }}" class="text-lg text-gray-600 hover:text-survail-green transition-colors">{{ $email }}</a>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="w-12 h-12 bg-survail-red bg-opacity-10 rounded-full flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-survail-red" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-survail-brown mb-2">Address</h3>
                            <p class="text-lg text-gray-600">{{ $addressLineOne }}<br>{{ $addressLineTwo }}</p>
                        </div>
                    </div>
                </div>

                <!-- Service Areas -->
                <div class="mt-12">
                    <h3 class="text-2xl font-bold text-survail-brown mb-6">Service Areas</h3>
                    <div class="grid grid-cols-2 gap-4">
                        @foreach($serviceAreas as $index => $area)
                            @php
                                $colors = [
                                    'from-survail-brown to-survail-brown-dark',
                                    'from-survail-green to-gray-700',
                                    'from-survail-red to-survail-red-dark',
                                    'from-survail-brown to-survail-brown-dark',
                                ];
                                $color = $colors[$index % count($colors)];
                            @endphp
                            <div class="bg-gradient-to-br {{ $color }} text-white rounded-lg p-4 text-center">
                                <div class="font-bold">{{ $area['title'] ?? 'Service Area' }}</div>
                                @if(!empty($area['subtitle']))
                                    <div class="text-sm opacity-90">{{ $area['subtitle'] }}</div>
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="bg-white rounded-2xl shadow-lg p-8">
                <h3 class="text-2xl font-bold text-survail-brown mb-6">Send us a Message</h3>
                <form class="space-y-6">
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Name</label>
                            <input type="text" id="name" name="name" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-survail-green focus:border-transparent">
                        </div>
                        <div>
                            <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Phone</label>
                            <input type="tel" id="phone" name="phone" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-survail-green focus:border-transparent">
                        </div>
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                        <input type="email" id="email" name="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-survail-green focus:border-transparent">
                    </div>

                    <div>
                        <label for="service" class="block text-sm font-medium text-gray-700 mb-2">Service Needed</label>
                        <select id="service" name="service" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-survail-green focus:border-transparent">
                            <option value="">Select a service</option>
                            <option value="physical-protection">Physical Protection</option>
                            <option value="event-security">Event Security</option>
                            <option value="consulting">Consulting & Training</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Message</label>
                        <textarea id="message" name="message" rows="4" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-survail-green focus:border-transparent"></textarea>
                    </div>

                    <button type="submit" class="w-full bg-survail-green hover:bg-gray-700 text-white px-8 py-4 rounded-lg font-semibold text-lg transition-colors">
                        Send Message
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
