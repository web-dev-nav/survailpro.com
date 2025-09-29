@extends('layouts.app')

@section('title', 'Contact Us - SurVail Protection & Investigation Services')
@section('description', 'Contact SurVail Protection & Investigation Services. Call 519-770-6634 or email don@survailpro.ca for professional security solutions.')

@section('content')
<div class="min-h-screen py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h1 class="text-4xl lg:text-6xl font-bold text-survail-brown mb-6">Contact Us</h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Ready to secure your property? Get in touch with our security professionals today.
            </p>
        </div>

        <div class="grid lg:grid-cols-2 gap-12">
            <!-- Contact Information -->
            <div>
                <h2 class="text-3xl font-bold text-survail-brown mb-8">Get In Touch</h2>

                <div class="space-y-6">
                    <div class="flex items-start">
                        <div class="w-12 h-12 bg-survail-blue bg-opacity-10 rounded-full flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-survail-blue" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-survail-brown mb-2">Phone</h3>
                            <a href="tel:519-770-6634" class="text-lg text-gray-600 hover:text-survail-blue transition-colors">519-770-6634</a>
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
                            <a href="mailto:don@survailpro.ca" class="text-lg text-gray-600 hover:text-survail-green transition-colors">don@survailpro.ca</a>
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
                            <p class="text-lg text-gray-600">148 Henry Street<br>Brantford ON N3S-5C7</p>
                        </div>
                    </div>
                </div>

                <!-- Service Areas -->
                <div class="mt-12">
                    <h3 class="text-2xl font-bold text-survail-brown mb-6">Service Areas</h3>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="bg-gradient-to-br from-survail-blue to-survail-blue-dark text-white rounded-lg p-4 text-center">
                            <div class="font-bold">Brantford</div>
                            <div class="text-sm opacity-90">& Brant County</div>
                        </div>
                        <div class="bg-gradient-to-br from-survail-green to-gray-700 text-white rounded-lg p-4 text-center">
                            <div class="font-bold">Hamilton</div>
                            <div class="text-sm opacity-90">Greater Area</div>
                        </div>
                        <div class="bg-gradient-to-br from-survail-red to-survail-red-dark text-white rounded-lg p-4 text-center">
                            <div class="font-bold">Waterloo</div>
                            <div class="text-sm opacity-90">Region</div>
                        </div>
                        <div class="bg-gradient-to-br from-survail-brown to-survail-brown-dark text-white rounded-lg p-4 text-center">
                            <div class="font-bold">Haldimand</div>
                            <div class="text-sm opacity-90">County</div>
                        </div>
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
                            <input type="text" id="name" name="name" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-survail-blue focus:border-transparent">
                        </div>
                        <div>
                            <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Phone</label>
                            <input type="tel" id="phone" name="phone" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-survail-blue focus:border-transparent">
                        </div>
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                        <input type="email" id="email" name="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-survail-blue focus:border-transparent">
                    </div>

                    <div>
                        <label for="service" class="block text-sm font-medium text-gray-700 mb-2">Service Needed</label>
                        <select id="service" name="service" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-survail-blue focus:border-transparent">
                            <option value="">Select a service</option>
                            <option value="physical-protection">Physical Protection</option>
                            <option value="event-security">Event Security</option>
                            <option value="consulting">Consulting & Training</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Message</label>
                        <textarea id="message" name="message" rows="4" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-survail-blue focus:border-transparent"></textarea>
                    </div>

                    <button type="submit" class="w-full bg-survail-blue hover:bg-survail-blue-dark text-white px-8 py-4 rounded-lg font-semibold text-lg transition-colors">
                        Send Message
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection