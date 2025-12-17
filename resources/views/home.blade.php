@extends('layouts.app')

@section('title', 'SurVail Protection & Investigation Services - Professional Security Solutions')
@section('description', 'Professional security and investigation services in Southern Ontario. Over 42 years of experience in protection, event security, and specialized consulting services.')

@section('content')
<!-- Hero Section -->
<section class="relative hero-mobile flex items-center bg-gradient-to-br from-gray-900 via-gray-800 to-survail-brown overflow-hidden">
    <!-- Background Video/Image Placeholder -->
    <div class="absolute inset-0 w-full h-full">
        <img src="{{ asset('assets/images/banner.png') }}" alt="Security Background" class="hero-bg-image absolute inset-0 w-full h-full object-cover object-center">
        <div class="absolute inset-0 bg-black opacity-45"></div>
    </div>

    <!-- Hero Content -->
    <div class="relative z-20 w-full px-4 sm:px-6 lg:px-8 py-8">
        <div class="max-w-6xl mx-auto text-center">
            <div class="animate-slide-up">
                <h2 class="text-3xl xs:text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold text-white mb-3 sm:mb-6 leading-tight">
                    We Keep You
                    <span class="text-yellow-400 animate-float inline-block">Safe</span>
                </h2>
                <p class="text-lg xs:text-xl sm:text-2xl lg:text-3xl text-gray-200 mb-5 sm:mb-8 max-w-4xl mx-auto leading-relaxed px-2">
                    Professional security solutions with over <strong class="text-yellow-400">42 years</strong> of experience in Southern Ontario
                </p>
            </div>

            <div class="animate-fade-in flex flex-col sm:flex-row gap-3 sm:gap-4 justify-center items-center mb-8 sm:mb-12 px-4">
                <a href="{{ route('services') }}" class="group bg-survail-green hover:bg-survail-green-dark text-white px-6 sm:px-8 py-3 sm:py-4 rounded-full font-semibold text-base sm:text-lg transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl w-full sm:w-auto text-center">
                    <span class="flex items-center justify-center">
                        Our Services
                        <svg class="ml-2 w-4 h-4 sm:w-5 sm:h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </span>
                </a>
                <a href="{{ route('contact') }}" class="group bg-transparent border-2 border-white hover:bg-white hover:text-gray-900 text-white px-6 sm:px-8 py-3 sm:py-4 rounded-full font-semibold text-base sm:text-lg transition-all duration-300 transform hover:scale-105 w-full sm:w-auto text-center">
                    <span class="flex items-center justify-center">
                        Get Free Quote
                        <svg class="ml-2 w-4 h-4 sm:w-5 sm:h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                        </svg>
                    </span>
                </a>
            </div>

            <!-- Trust Indicators -->
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 sm:gap-4 max-w-3xl mx-auto text-white text-center px-4">
                <div class="bg-white bg-opacity-10 backdrop-blur-sm rounded-lg p-4 sm:p-6 hover:bg-opacity-20 transition-all duration-300">
                    <div class="text-2xl sm:text-3xl font-bold text-yellow-400 mb-1 sm:mb-2">42+</div>
                    <div class="text-xs sm:text-sm opacity-90">Years Experience</div>
                </div>
                <div class="bg-white bg-opacity-10 backdrop-blur-sm rounded-lg p-4 sm:p-6 hover:bg-opacity-20 transition-all duration-300">
                    <div class="text-2xl sm:text-3xl font-bold text-yellow-400 mb-1 sm:mb-2">500+</div>
                    <div class="text-xs sm:text-sm opacity-90">Events Secured</div>
                </div>
                <div class="bg-white bg-opacity-10 backdrop-blur-sm rounded-lg p-4 sm:p-6 hover:bg-opacity-20 transition-all duration-300">
                    <div class="text-2xl sm:text-3xl font-bold text-yellow-400 mb-1 sm:mb-2">24/7</div>
                    <div class="text-xs sm:text-sm opacity-90">Available</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
        <div class="w-6 h-10 border-2 border-white rounded-full flex justify-center">
            <div class="w-1 h-3 bg-white rounded-full mt-2 animate-pulse"></div>
        </div>
    </div>
</section>

<!-- Services Overview -->
<section class="py-16 lg:py-24 bg-white">
    <div class="w-full px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <h3 class="text-3xl lg:text-5xl font-bold text-survail-brown mb-6">Professional Security Services</h3>
                <p class="text-xl text-gray-600 max-w-4xl mx-auto">
                    SurVail Protection and Investigation Inc. provides comprehensive security solutions across Southern Ontario with unmatched expertise and reliability.
                </p>
            </div>

            <!-- Services Grid -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
                <!-- Service 1 -->
                <div class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 p-8 border border-gray-100 hover:border-survail-brown transform hover:-translate-y-2">
                    <div class="mb-6">
                        <div class="w-16 h-16 bg-survail-brown bg-opacity-10 rounded-full flex items-center justify-center mb-4 group-hover:bg-opacity-20 transition-colors">
                            <svg class="w-8 h-8 text-survail-brown" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 8a6 6 0 01-7.743 5.743L10 14l-4 4-4-4 4-4 .257.257A6 6 0 1118 8zm-6-2a1 1 0 11-2 0 1 1 0 012 0z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <h4 class="text-xl font-bold text-survail-brown mb-3">Physical Protection</h4>
                        <p class="text-gray-600 leading-relaxed">Professional security personnel for construction sites, retail locations, warehouses, and corporate facilities.</p>
                    </div>
                    <a href="{{ route('services') }}" class="text-survail-brown font-semibold hover:text-survail-brown-light transition-colors flex items-center">
                        Learn More
                        <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>

                <!-- Service 2 -->
                <div class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 p-8 border border-gray-100 hover:border-survail-green transform hover:-translate-y-2">
                    <div class="mb-6">
                        <div class="w-16 h-16 bg-survail-green bg-opacity-10 rounded-full flex items-center justify-center mb-4 group-hover:bg-opacity-20 transition-colors">
                            <svg class="w-8 h-8 text-survail-green" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h4 class="text-xl font-bold text-survail-brown mb-3">Event Security</h4>
                        <p class="text-gray-600 leading-relaxed">Specialized security management for concerts, festivals, sporting events, and special occasions with crowd control expertise.</p>
                    </div>
                    <a href="{{ route('services') }}#events" class="text-survail-green font-semibold hover:text-gray-700 transition-colors flex items-center">
                        Learn More
                        <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>

                <!-- Service 3 -->
                <div class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 p-8 border border-gray-100 hover:border-survail-brown-light transform hover:-translate-y-2">
                    <div class="mb-6">
                        <div class="w-16 h-16 bg-survail-brown-light bg-opacity-10 rounded-full flex items-center justify-center mb-4 group-hover:bg-opacity-20 transition-colors">
                            <svg class="w-8 h-8 text-survail-brown-light" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <h4 class="text-xl font-bold text-survail-brown mb-3">Consulting & Training</h4>
                        <p class="text-gray-600 leading-relaxed">Professional security consulting, emergency management training, and specialized security planning services.</p>
                    </div>
                    <a href="{{ route('services') }}#consulting" class="text-survail-brown-light font-semibold hover:text-survail-brown transition-colors flex items-center">
                        Learn More
                        <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Trust & Credentials Section -->
<section class="py-16 lg:py-24 bg-gradient-to-br from-survail-green via-survail-green to-gray-800 text-white relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-0 left-0 w-96 h-96 bg-white rounded-full mix-blend-multiply filter blur-xl animate-pulse-slow"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-yellow-300 rounded-full mix-blend-multiply filter blur-xl animate-pulse-slow"></div>
    </div>

    <div class="relative w-full px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <h3 class="text-3xl lg:text-5xl font-bold mb-6">Trusted Security Professionals</h3>
                <p class="text-xl text-green-100 max-w-3xl mx-auto">
                    Your safety is our mission. Here's what sets us apart in the security industry.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Credential 1 -->
                <div class="text-center group">
                    <div class="w-20 h-20 bg-white bg-opacity-20 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-opacity-30 transition-all duration-300 group-hover:scale-110">
                        <svg class="w-10 h-10 text-yellow-300" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h4 class="text-xl font-bold mb-3">Fully Licensed</h4>
                    <p class="text-green-100 text-sm">Ministry of the Solicitor General Ontario licensed with comprehensive insurance coverage.</p>
                </div>

                <!-- Credential 2 -->
                <div class="text-center group">
                    <div class="w-20 h-20 bg-white bg-opacity-20 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-opacity-30 transition-all duration-300 group-hover:scale-110">
                        <svg class="w-10 h-10 text-yellow-300" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h4 class="text-xl font-bold mb-3">Proven Experience</h4>
                    <p class="text-green-100 text-sm">Over 42 years in justice, protection, and security sectors with 500+ successful events managed.</p>
                </div>

                <!-- Credential 3 -->
                <div class="text-center group">
                    <div class="w-20 h-20 bg-white bg-opacity-20 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-opacity-30 transition-all duration-300 group-hover:scale-110">
                        <svg class="w-10 h-10 text-yellow-300" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h4 class="text-xl font-bold mb-3">Competitive Rates</h4>
                    <p class="text-green-100 text-sm">Professional security services at competitive rates for long-term, temporary, or short-term assignments.</p>
                </div>

                <!-- Credential 4 -->
                <div class="text-center group">
                    <div class="w-20 h-20 bg-white bg-opacity-20 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-opacity-30 transition-all duration-300 group-hover:scale-110">
                        <svg class="w-10 h-10 text-yellow-300" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                        </svg>
                    </div>
                    <h4 class="text-xl font-bold mb-3">24/7 Response</h4>
                    <p class="text-green-100 text-sm">Round-the-clock availability for emergency situations and immediate security needs.</p>
                </div>
            </div>

            <!-- Call to Action Row -->
            <div class="mt-16 text-center">
                <div class="bg-white bg-opacity-10 backdrop-blur-sm rounded-2xl p-8 max-w-4xl mx-auto">
                    <h4 class="text-2xl font-bold mb-4">Ready to Experience Professional Security?</h4>
                    <p class="text-lg text-green-100 mb-6">Contact Don directly to discuss your specific security needs and get a customized solution.</p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="tel:{{ preg_replace('/\\s+/', '', $globalContact->main_phone_number ?? '519-770-6634') }}" class="bg-yellow-400 hover:bg-yellow-300 text-gray-900 px-8 py-3 rounded-full font-bold text-lg transition-all duration-300 transform hover:scale-105">
                            Call: {{ $globalContact->main_phone_number ?? '519-770-6634' }}
                        </a>
                        <a href="{{ route('contact') }}" class="bg-transparent border-2 border-white hover:bg-white hover:text-survail-green text-white px-8 py-3 rounded-full font-bold text-lg transition-all duration-300 transform hover:scale-105">
                            Contact Form
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Service Areas -->
<section class="py-16 lg:py-24 bg-white">
    <div class="w-full px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-12">
                <h3 class="text-3xl lg:text-4xl font-bold text-survail-brown mb-6">Service Areas</h3>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">Proudly serving communities across Southern Ontario</p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
                <div class="bg-gradient-to-br from-survail-green to-survail-green-dark text-white rounded-xl p-6 text-center hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
                    <h4 class="font-bold text-lg">Brantford</h4>
                    <p class="text-sm opacity-90">& Brant County</p>
                </div>
                <div class="bg-gradient-to-br from-survail-green to-gray-700 text-white rounded-xl p-6 text-center hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
                    <h4 class="font-bold text-lg">Hamilton</h4>
                    <p class="text-sm opacity-90">Greater Area</p>
                </div>
                <div class="bg-gradient-to-br from-survail-red to-survail-red-dark text-white rounded-xl p-6 text-center hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
                    <h4 class="font-bold text-lg">Waterloo</h4>
                    <p class="text-sm opacity-90">Region</p>
                </div>
                <div class="bg-gradient-to-br from-survail-brown to-survail-brown-dark text-white rounded-xl p-6 text-center hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
                    <h4 class="font-bold text-lg">Haldimand</h4>
                    <p class="text-sm opacity-90">County</p>
                </div>
                <div class="bg-gradient-to-br from-gray-600 to-gray-800 text-white rounded-xl p-6 text-center hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
                    <h4 class="font-bold text-lg">Norfolk</h4>
                    <p class="text-sm opacity-90">County</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Partners -->
<section class="py-16 lg:py-24 bg-gray-50">
    <div class="w-full px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-12">
                <h3 class="text-3xl lg:text-5xl font-bold text-survail-brown mb-4">Our Valued client links</h3>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    We collaborate with leading organizations to deliver exceptional security solutions
                </p>
            </div>

            @php
                $partnersList = isset($partners) && $partners->count() ? $partners : collect([
                    (object) ['name' => 'Partner Company', 'website_url' => '#', 'logo_url' => asset('assets/images/partners/logoipsum-391.png')],
                    (object) ['name' => 'Partner Company', 'website_url' => '#', 'logo_url' => asset('assets/images/partners/logoipsum-395.png')],
                    (object) ['name' => 'Partner Company', 'website_url' => '#', 'logo_url' => asset('assets/images/partners/logoipsum-406.png')],
                    (object) ['name' => 'Partner Company', 'website_url' => '#', 'logo_url' => asset('assets/images/partners/logoipsum-408.png')],
                ]);
            @endphp

            <!-- Partners Slider -->
            <div class="relative overflow-hidden">
                <div class="partners-slider-container">
                    <div class="partners-slider flex gap-8 items-center" id="partnersSlider">
                        @foreach($partnersList as $partner)
                            <div class="partner-slide flex-shrink-0">
                                <a href="{{ $partner->website_url ?? '#' }}" target="_blank" class="partner-card block bg-white rounded-xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                                    <img src="{{ $partner->logo_url ?? $partner->logo_path ?? asset('assets/images/partners/logoipsum-391.png') }}"
                                         alt="{{ $partner->name ?? 'Partner Company' }}"
                                         class="partner-logo w-auto mx-auto object-contain transition-transform duration-300 hover:scale-105">
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Navigation Arrows -->
                <button id="partnersPrev" class="absolute left-0 top-1/2 -translate-y-1/2 -ml-4 bg-white hover:bg-survail-brown text-survail-brown hover:text-white w-12 h-12 rounded-full shadow-lg flex items-center justify-center transition-all duration-300 z-10">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                </button>
                <button id="partnersNext" class="absolute right-0 top-1/2 -translate-y-1/2 -mr-4 bg-white hover:bg-survail-brown text-survail-brown hover:text-white w-12 h-12 rounded-full shadow-lg flex items-center justify-center transition-all duration-300 z-10">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </button>

                <!-- Dots Indicator -->
                <div class="flex justify-center gap-2 mt-8" id="partnersDots"></div>
            </div>
        </div>
    </div>
</section>

<style>
    .partners-slider-container {
        overflow: hidden;
        padding: 20px 0;
    }

    .partners-slider {
        transition: transform 0.5s ease-in-out;
    }

    .partner-card {
        height: 100%;
    }

    .partner-logo {
        height: 6rem;
    }

    .partner-slide {
        width: clamp(220px, 22vw, 260px);
        flex: 0 0 auto;
    }

    @media (min-width: 1280px) {
        .partner-slide {
            width: clamp(240px, 18vw, 300px);
        }
    }

    @media (max-width: 1024px) {
        .partner-slide {
            width: clamp(220px, 28vw, 250px);
        }
    }

    @media (max-width: 768px) {
        .partner-slide {
            width: clamp(200px, 65vw, 240px);
        }
    }

    @media (max-width: 640px) {
        .partner-slide {
            width: min(85vw, 280px);
        }

        .partner-card {
            padding: 1.5rem;
        }

        .partner-logo {
            height: 4.5rem;
        }
    }

    .partner-dot {
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background-color: #d1d5db;
        cursor: pointer;
        transition: all 0.3s;
    }

    .partner-dot.active {
        background-color: #0026c0;
        width: 32px;
        border-radius: 6px;
    }

    .partner-dot:hover {
        background-color: #9ca3af;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const slider = document.getElementById('partnersSlider');
        if (!slider) return;

        const slides = slider.querySelectorAll('.partner-slide');
        if (!slides.length) return;

        const prevBtn = document.getElementById('partnersPrev');
        const nextBtn = document.getElementById('partnersNext');
        const dotsContainer = document.getElementById('partnersDots');

        let currentIndex = 0;
        const totalSlides = slides.length;
        let slidesToShow = getSlidesToShow();
        let maxIndex = calculateMaxIndex();
        let autoplayInterval = null;

        function getDesiredSlides() {
            if (window.innerWidth >= 1280) return 4;
            if (window.innerWidth >= 1024) return 3;
            if (window.innerWidth >= 768) return 2;
            if (window.innerWidth >= 640) return 2;
            return 1;
        }

        function getSlidesToShow() {
            const desired = getDesiredSlides();
            if (totalSlides <= desired) {
                if (totalSlides > 2) {
                    return totalSlides - 1;
                }
                return totalSlides || 1;
            }
            return desired;
        }

        function calculateMaxIndex() {
            const visibleSlides = Math.min(slidesToShow, totalSlides);
            return Math.max(0, totalSlides - visibleSlides);
        }

        function createDots() {
            if (!dotsContainer) return;
            dotsContainer.innerHTML = '';
            if (maxIndex === 0) return;

            for (let i = 0; i <= maxIndex; i++) {
                const dot = document.createElement('div');
                dot.classList.add('partner-dot');
                if (i === currentIndex) dot.classList.add('active');
                dot.addEventListener('click', () => goToSlide(i));
                dotsContainer.appendChild(dot);
            }
        }

        function updateDots() {
            if (!dotsContainer) return;
            const dots = dotsContainer.querySelectorAll('.partner-dot');
            dots.forEach((dot, index) => {
                dot.classList.toggle('active', index === currentIndex);
            });
        }

        function updateSlider() {
            const slideWidth = slides[0].offsetWidth;
            const gap = 32; // gap-8 = 2rem = 32px
            const offset = -(currentIndex * (slideWidth + gap));
            slider.style.transform = `translateX(${offset}px)`;
            updateDots();
        }

        function goToSlide(index) {
            currentIndex = Math.max(0, Math.min(index, maxIndex));
            updateSlider();
        }

        function nextSlide() {
            if (maxIndex === 0) return;
            currentIndex = currentIndex < maxIndex ? currentIndex + 1 : 0;
            updateSlider();
        }

        function prevSlide() {
            if (maxIndex === 0) return;
            currentIndex = currentIndex > 0 ? currentIndex - 1 : maxIndex;
            updateSlider();
        }

        function toggleNavigationState() {
            const disabled = maxIndex === 0;
            [prevBtn, nextBtn].forEach((btn) => {
                if (!btn) return;
                btn.disabled = disabled;
                btn.classList.toggle('opacity-40', disabled);
                btn.classList.toggle('pointer-events-none', disabled);
            });

            if (dotsContainer) {
                dotsContainer.classList.toggle('hidden', disabled);
            }
        }

        function startAutoplay() {
            if (autoplayInterval || maxIndex === 0) return;
            autoplayInterval = setInterval(nextSlide, 4000);
        }

        function stopAutoplay() {
            if (!autoplayInterval) return;
            clearInterval(autoplayInterval);
            autoplayInterval = null;
        }

        nextBtn && nextBtn.addEventListener('click', nextSlide);
        prevBtn && prevBtn.addEventListener('click', prevSlide);

        slider.addEventListener('mouseenter', stopAutoplay);
        slider.addEventListener('mouseleave', startAutoplay);

        window.addEventListener('resize', () => {
            slidesToShow = getSlidesToShow();
            maxIndex = calculateMaxIndex();
            currentIndex = Math.min(currentIndex, maxIndex);
            createDots();
            toggleNavigationState();
            updateSlider();
            if (maxIndex === 0) {
                stopAutoplay();
            } else {
                startAutoplay();
            }
        });

        createDots();
        toggleNavigationState();
        updateSlider();
        startAutoplay();
    });
</script>

<!-- Call to Action -->
<section class="py-16 lg:py-24 bg-survail-green">
    <div class="w-full px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="bg-survail-green rounded-3xl p-8 lg:p-16 text-center text-white relative overflow-hidden">
                <!-- Background decoration -->
                <div class="absolute top-0 right-0 w-64 h-64 bg-white opacity-5 rounded-full transform translate-x-32 -translate-y-32"></div>
                <div class="absolute bottom-0 left-0 w-64 h-64 bg-white opacity-5 rounded-full transform -translate-x-32 translate-y-32"></div>

                <div class="relative z-10">
                    <h3 class="text-3xl lg:text-5xl font-bold mb-6">Ready to Secure Your Property?</h3>
                    <p class="text-xl lg:text-2xl mb-8 max-w-4xl mx-auto opacity-90">Get professional security solutions tailored to your needs. Contact us today for a free consultation.</p>

                    <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                        <a href="{{ route('contact') }}" class="group bg-white text-survail-green px-8 py-4 rounded-full font-bold text-lg hover:bg-gray-100 transition-all duration-300 transform hover:scale-105 shadow-lg">
                            <span class="flex items-center">
                                Get Free Quote
                                <svg class="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                                </svg>
                            </span>
                        </a>
                        <a href="tel:{{ preg_replace('/\\s+/', '', $globalContact->main_phone_number ?? '519-770-6634') }}" class="group bg-survail-red hover:bg-survail-red-dark text-white px-8 py-4 rounded-full font-bold text-lg transition-all duration-300 transform hover:scale-105 shadow-lg">
                            <span class="flex items-center">
                                <svg class="mr-2 w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                                </svg>
                                Call Now: {{ $globalContact->main_phone_number ?? '519-770-6634' }}
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
