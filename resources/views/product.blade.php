@extends('layouts.app')

@section('title', 'Video Monitoring in Brantford, Hamilton, Burlington, Cambridge, Waterloo, Kitchener | SurVail')
@section('description', 'AI-powered CCTV video monitoring with real-time alerts and 24/7 coverage for Brantford, Hamilton, Burlington, Cambridge, Waterloo, Kitchener, and nearby cities.')
@section('keywords', 'video monitoring Brantford, CCTV Hamilton, security cameras Burlington, video surveillance Cambridge, CCTV Waterloo, video monitoring Kitchener')

@push('styles')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap');
    
    body {
        font-family: 'Inter', sans-serif;
    }
    
    .gradient-green {
        background: linear-gradient(135deg, #1a4d3a 0%, #2d5f4a 100%);
    }
    
    .hover-lift {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .hover-lift:hover {
        transform: translateY(-4px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
    }
</style>
@endpush

@section('content')

    <!-- Hero Section -->
    <section class="relative gradient-green text-white">
        <div class="max-w-7xl mx-auto flex items-center min-h-[600px]">
            <!-- Left Content -->
            <div class="w-full md:w-1/2 px-6 py-16">
                <h1 class="text-4xl md:text-5xl font-extrabold leading-tight mb-5">
                    Professional <span class="text-yellow-400">Video Monitoring</span> for Total Security
                </h1>
                <p class="text-lg mb-8 text-gray-200 leading-relaxed">
                    Advanced CCTV video monitoring with <span class="font-bold">AI-powered detection</span>, real-time alerts, and expert response — Protect what matters most with crystal-clear surveillance 24/7.
                </p>
                <div class="flex flex-wrap gap-3">
                    <a href="{{ route('contact') }}" class="bg-yellow-400 text-gray-900 px-6 py-3 rounded-lg font-semibold hover:bg-yellow-500 transition flex items-center gap-2 text-sm">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                        </svg>
                        Get My Free Site Assessment
                    </a>
                </div>
            </div>
        </div>
        <!-- Right Background Image -->
        <div class="absolute top-0 right-0 w-1/2 h-full hidden md:block">
            <img src="{{ asset('assets/images/tasha-kostyuk-TtMKq3lJm-U-unsplash(1).jpg') }}" alt="Security monitoring dashboard" class="w-full h-full object-cover">
        </div>
    </section>

    <!-- Why Choose Section -->
    <section class="py-16 px-6 bg-gray-50">
        <div class="max-w-5xl mx-auto">
            <h2 class="text-4xl md:text-5xl font-bold mb-3">
                Why Choose <span class="text-yellow-500">SurVail Video Monitoring?</span>
            </h2>
            <p class="text-gray-600 text-base mb-10 max-w-3xl">
                Professional video surveillance with AI intelligence. Monitor your property 24/7 with crystal-clear footage, intelligent threat detection, and expert response capabilities.
            </p>

            <div class="grid md:grid-cols-2 gap-8 mb-8">
                <!-- Left Column - 3 Benefits -->
                <div class="space-y-6">
                    <!-- Benefit 1 -->
                    <div class="flex gap-4 items-start">
                        <div class="w-12 h-12 bg-yellow-400 rounded-full flex items-center justify-center flex-shrink-0">
                             <img src="{{ asset('assets/images/cost-effective-productive-svgrepo-com.png') }}" alt="Comprehensive Coverage" class="w-6 h-6">
                        </div>
                        <div>
                            <h3 class="font-bold text-lg mb-1">Comprehensive Coverage</h3>
                            <p class="text-gray-600 text-sm">
                                Monitor multiple areas simultaneously with high-definition cameras covering every blind spot on your property.
                            </p>
                        </div>
                    </div>

                    <!-- Benefit 2 -->
                    <div class="flex gap-4 items-start">
                        <div class="w-12 h-12 bg-yellow-400 rounded-full flex items-center justify-center flex-shrink-0">
                            <img src="{{ asset('assets/images/twenty-four-hours-clock-svgrepo-com.png') }}" alt="24/7 Recording" class="w-6 h-6">
                        </div>
                        <div>
                            <h3 class="font-bold text-lg mb-1">Continuous 24/7 Recording</h3>
                            <p class="text-gray-600 text-sm">
                                Never miss a moment with non-stop video recording and intelligent playback search for easy incident investigation.
                            </p>
                        </div>
                    </div>

                    <!-- Benefit 3 -->
                    <div class="flex gap-4 items-start">
                        <div class="w-12 h-12 bg-yellow-400 rounded-full flex items-center justify-center flex-shrink-0">
                            <img src="{{ asset('assets/images/cloud_16622281.png') }}" alt="Cloud & Local Storage" class="w-6 h-6">
                        </div>
                        <div>
                            <h3 class="font-bold text-lg mb-1">Secure Cloud & Local Storage</h3>
                            <p class="text-gray-600 text-sm">
                                Access your video from anywhere with encrypted cloud backup and local storage redundancy for maximum protection.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Right Column - 2 Image Placeholders -->
                <div class="space-y-4">
                    <img src="{{ asset('assets/images/jasper-garratt-BPHmP-2spVc-unsplash.jpg') }}" alt="Security monitor" class="rounded-lg h-64 w-full object-cover">
                    <img src="{{ asset('assets/images/thumbnail_security Industrial site pic.jpg') }}" alt="Security camera system" class="rounded-lg h-64 w-full object-cover">
                </div>
            </div>

            <!-- Feature Cards - 3 across bottom -->
            <div class="grid md:grid-cols-3 gap-4">
                <div class="bg-green-100 p-6 rounded-lg">
                    <h3 class="font-bold text-base mb-2">Smart Threat Detection</h3>
                    <p class="text-gray-700 text-sm">AI-powered detection identifies intrusions, trespassing, and suspicious behavior automatically.</p>
                </div>
                <div class="bg-green-200 p-6 rounded-lg">
                    <h3 class="font-bold text-base mb-2">Video Evidence Archive</h3>
                    <p class="text-gray-700 text-sm">Timestamped video records for investigations, insurance claims, and legal proceedings.</p>
                </div>
                <div class="bg-green-100 p-6 rounded-lg">
                    <h3 class="font-bold text-base mb-2">Mobile Access</h3>
                    <p class="text-gray-700 text-sm">View live feeds and recorded footage from anywhere using secure mobile or web apps.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Industries Section -->
    <section class="gradient-green text-white py-16 px-6">
        <div class="max-w-5xl mx-auto">
            <h2 class="text-4xl md:text-5xl font-bold text-center mb-3">
                Trusted Protection for <span class="text-yellow-400">Every Industry</span>
            </h2>
            <p class="text-center text-gray-200 text-base mb-12">
                From construction sites to car dealerships, our monitoring adapts to your unique security needs.
            </p>

            <div class="grid md:grid-cols-3 gap-6">
                <!-- Industry 1 -->
                <div class="bg-white/10 backdrop-blur-sm p-6 rounded-lg hover-lift">
                    <div class="w-14 h-14 bg-yellow-400 rounded-lg flex items-center justify-center mb-4">
                        <img src="{{ asset('assets/images/construction-worker-svgrepo-com.png') }}" alt="Construction Sites" class="w-7 h-7">
                    </div>
                    <h3 class="font-bold text-lg mb-2">Construction Sites</h3>
                    <p class="text-gray-200 text-sm">
                        Protect equipment, materials, and work areas from theft and vandalism during off-hours.
                    </p>
                </div>

                <!-- Industry 2 -->
                <div class="bg-white/10 backdrop-blur-sm p-6 rounded-lg hover-lift">
                    <div class="w-14 h-14 bg-yellow-400 rounded-lg flex items-center justify-center mb-4">
                        <img src="{{ asset('assets/images/car-svgrepo-com.png') }}" alt="Auto Dealerships" class="w-7 h-7">
                    </div>
                    <h3 class="font-bold text-lg mb-2">Auto Dealerships</h3>
                    <p class="text-gray-200 text-sm">
                        Monitor inventory lots 24/7 with instant response to suspicious activity around high-value vehicles.
                    </p>
                </div>

                <!-- Industry 3 -->
                <div class="bg-white/10 backdrop-blur-sm p-6 rounded-lg hover-lift">
                    <div class="w-14 h-14 bg-yellow-400 rounded-lg flex items-center justify-center mb-4">
                        <img src="{{ asset('assets/images/warehouse-svgrepo-com.png') }}" alt="Warehouses" class="w-7 h-7">
                    </div>
                    <h3 class="font-bold text-lg mb-2">Warehouses</h3>
                    <p class="text-gray-200 text-sm">
                        Safeguard inventory and prevent unauthorized access to loading docks and storage areas.
                    </p>
                </div>

                <!-- Industry 4 -->
                <div class="bg-white/10 backdrop-blur-sm p-6 rounded-lg hover-lift">
                    <div class="w-14 h-14 bg-yellow-400 rounded-lg flex items-center justify-center mb-4">
                        <img src="{{ asset('assets/images/industrial-factory-svgrepo-com.png') }}" alt="Storage Facilities" class="w-7 h-7">
                    </div>
                    <h3 class="font-bold text-lg mb-2">Storage Facilities</h3>
                    <p class="text-gray-200 text-sm">
                        Enhance tenant security with monitoring of entry points, hallways, and outdoor units.
                    </p>
                </div>

                <!-- Industry 5 -->
                <div class="bg-white/10 backdrop-blur-sm p-6 rounded-lg hover-lift">
                    <div class="w-14 h-14 bg-yellow-400 rounded-lg flex items-center justify-center mb-4">
                        <img src="{{ asset('assets/images/office-svgrepo-com.png') }}" alt="Commercial Buildings" class="w-7 h-7">
                    </div>
                    <h3 class="font-bold text-lg mb-2">Commercial Buildings</h3>
                    <p class="text-gray-200 text-sm">
                        Protect office buildings, parking structures, and common areas around the clock.
                    </p>
                </div>

                <!-- Industry 6 -->
                <div class="bg-white/10 backdrop-blur-sm p-6 rounded-lg hover-lift">
                     <div class="w-14 h-14 bg-yellow-400 rounded-lg flex items-center justify-center mb-4">
                        <img src="{{ asset('assets/images/industrial-factory-svgrepo-com.png') }}" alt="Industrial Yards" class="w-7 h-7">
                    </div>
                    <h3 class="font-bold text-lg mb-2">Industrial Yards</h3>
                    <p class="text-gray-200 text-sm">
                        Monitor large outdoor spaces, equipment yards, and perimeter areas with ease.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 px-6 bg-white">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-4xl md:text-5xl font-bold mb-4">
                Ready for Professional Video Monitoring?
            </h2>
            <p class="text-lg text-gray-600 mb-8">
                Get a free site assessment and discover how SurVail Video Monitoring can protect your property with intelligent surveillance.
            </p>
            <div class="flex flex-wrap gap-4 justify-center">
                <a href="{{ route('contact') }}" class="bg-gray-900 text-white px-8 py-3 rounded-lg font-semibold hover:bg-gray-800 transition">
                    GET A QUOTE
                </a>
                <a href="{{ route('contact') }}" class="bg-white border-2 border-gray-900 text-gray-900 px-8 py-3 rounded-lg font-semibold hover:bg-gray-50 transition">
                    REQUEST MORE INFO
                </a>
            </div>
        </div>
    </section>
@endsection
