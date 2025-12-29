@extends('layouts.app')

@section('title', 'About Us - SurVail Protection & Investigation Services')
@section('description', 'Learn about SurVail Protection & Investigation Services. 42 years of combined management experience in Southern Ontario.')

@section('content')
<div class="min-h-screen py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h1 class="text-4xl lg:text-6xl font-bold text-survail-brown mb-6">About Us</h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Professional security and investigation services with 42 years of combined management experience serving Southern Ontario.
            </p>
        </div>

        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-3xl font-bold text-survail-brown mb-6">Our Story</h2>
                <p class="text-gray-600 mb-6">
                    SurVail Protection & Investigation Services has been providing professional security solutions across Southern Ontario for over four decades. Founded with a commitment to excellence and client safety, we have built a reputation as a trusted partner in the security industry.
                </p>
                <p class="text-gray-600 mb-6">
                    Our team brings extensive experience from law enforcement, military, and private security sectors, ensuring that we deliver comprehensive solutions tailored to each client's unique needs.
                </p>
            </div>

            <div class="bg-gradient-to-br from-survail-green to-gray-700 text-white rounded-2xl p-8">
                <h3 class="text-2xl font-bold mb-6">Why Choose SurVail?</h3>
                <ul class="space-y-4">
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-yellow-300 mr-3 mt-1" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span>42 years of combined management experience</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-yellow-300 mr-3 mt-1" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Fully licensed and insured</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-yellow-300 mr-3 mt-1" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span>24/7 availability for emergency response</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-yellow-300 mr-3 mt-1" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Competitive rates and flexible service plans</span>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Awards Section -->
        <div class="mt-20">
            <div class="text-center mb-12">
                <h2 class="text-3xl lg:text-4xl font-bold text-survail-brown mb-4">Awards & Recognition</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Proud Platinum Winner of the Community Vote Brantford 2025 - recognized by our community for excellence in security services.
                </p>
            </div>
            <div class="flex justify-center">
                <div class="bg-white rounded-2xl shadow-xl p-8 max-w-4xl">
                    <img src="/assets/images/certificate.png"
                         alt="Community Vote Brantford 2025 Platinum Winner - SurVail Protection & Investigation Services"
                         class="w-full h-auto rounded-lg shadow-lg">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
