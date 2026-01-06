@extends('layouts.app')

@section('title', 'Our Services - SurVail Protection & Investigation Services')
@section('description', 'Explore our wide range of professional security solutions.')

@section('content')
<div class="min-h-screen py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h1 class="text-4xl lg:text-6xl font-bold text-survail-brown mb-6">Our Comprehensive Security Services</h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Tailored security solutions to protect what matters most to you.
            </p>
        </div>

        {{-- Service Grid --}}
        <div class="grid md:grid-cols-2 gap-8">

            <!-- CCTV & Monitoring -->
            <div class="bg-white rounded-2xl shadow-lg p-8 flex items-start space-x-6">
                <div class="flex-shrink-0">
                    <img class="h-16 w-16" src="{{ asset('assets/images/cctv-smart-cctv-safety-protection-monitoring-camera-cctv-camera-svgrepo-com.png') }}" alt="CCTV">
                </div>
                <div>
                    <h3 class="text-2xl font-bold text-survail-brown mb-3">CCTV & Monitoring</h3>
                    <p class="text-gray-600">State-of-the-art surveillance and remote monitoring to keep a watchful eye on your assets 24/7.</p>
                </div>
            </div>

            <!-- Construction Site Security -->
            <div class="bg-white rounded-2xl shadow-lg p-8 flex items-start space-x-6">
                <div class="flex-shrink-0">
                    <img class="h-16 w-16" src="{{ asset('assets/images/construction-worker-svgrepo-com.png') }}" alt="Construction Security">
                </div>
                <div>
                    <h3 class="text-2xl font-bold text-survail-brown mb-3">Construction Site Security</h3>
                    <p class="text-gray-600">Robust security protocols to prevent theft, vandalism, and unauthorized access on construction sites.</p>
                </div>
            </div>

            <!-- Industrial Security -->
            <div class="bg-white rounded-2xl shadow-lg p-8 flex items-start space-x-6">
                <div class="flex-shrink-0">
                    <img class="h-16 w-16" src="{{ asset('assets/images/industrial-factory-svgrepo-com.png') }}" alt="Industrial Security">
                </div>
                <div>
                    <h3 class="text-2xl font-bold text-survail-brown mb-3">Industrial Security</h3>
                    <p class="text-gray-600">Specialized security for factories, plants, and industrial complexes to protect machinery, inventory, and personnel.</p>
                </div>
            </div>

            <!-- Corporate & Office Security -->
            <div class="bg-white rounded-2xl shadow-lg p-8 flex items-start space-x-6">
                <div class="flex-shrink-0">
                    <img class="h-16 w-16" src="{{ asset('assets/images/office-svgrepo-com.png') }}" alt="Office Security">
                </div>
                <div>
                    <h3 class="text-2xl font-bold text-survail-brown mb-3">Corporate & Office Security</h3>
                    <p class="text-gray-600">Access control, reception security, and professional concierge services to maintain a safe corporate environment.</p>
                </div>
            </div>

            <!-- Warehouse Security -->
            <div class="bg-white rounded-2xl shadow-lg p-8 flex items-start space-x-6">
                <div class="flex-shrink-0">
                    <img class="h-16 w-16" src="{{ asset('assets/images/warehouse-svgrepo-com.png') }}" alt="Warehouse Security">
                </div>
                <div>
                    <h3 class="text-2xl font-bold text-survail-brown mb-3">Warehouse Security</h3>
                    <p class="text-gray-600">Comprehensive security to protect your stored goods, prevent loss, and manage logistics safely.</p>
                </div>
            </div>

            <!-- Mobile Patrol -->
            <div class="bg-white rounded-2xl shadow-lg p-8 flex items-start space-x-6">
                <div class="flex-shrink-0">
                    <img class="h-16 w-16" src="{{ asset('assets/images/car-svgrepo-com.png') }}" alt="Mobile Patrol">
                </div>
                <div>
                    <h3 class="text-2xl font-bold text-survail-brown mb-3">Mobile Patrol</h3>
                    <p class="text-gray-600">Visible security patrols to deter criminal activity and provide rapid response across multiple locations.</p>
                </div>
            </div>
        </div>

        {{-- Feature Section --}}
        <div class="mt-16 grid md:grid-cols-3 gap-8 text-center">
            <div class="bg-white rounded-2xl shadow-lg p-8">
                <img class="h-20 w-20 mx-auto mb-4" src="{{ asset('assets/images/twenty-four-hours-clock-svgrepo-com.png') }}" alt="24/7 Service">
                <h3 class="text-xl font-bold text-survail-brown mb-2">24/7 Availability</h3>
                <p class="text-gray-600">Our team is available around the clock to ensure your safety and peace of mind.</p>
            </div>
            <div class="bg-white rounded-2xl shadow-lg p-8">
                <img class="h-20 w-20 mx-auto mb-4" src="{{ asset('assets/images/security-worker-svgrepo-com-2.png') }}" alt="Professional Staff">
                <h3 class="text-xl font-bold text-survail-brown mb-2">Professional Staff</h3>
                <p class="text-gray-600">Highly trained, licensed, and experienced security professionals at your service.</p>
            </div>
            <div class="bg-white rounded-2xl shadow-lg p-8">
                <img class="h-20 w-20 mx-auto mb-4" src="{{ asset('assets/images/cost-effective-productive-svgrepo-com.png') }}" alt="Cost-Effective">
                <h3 class="text-xl font-bold text-survail-brown mb-2">Cost-Effective Solutions</h3>
                <p class="text-gray-600">We provide top-tier security solutions that fit your budget and specific needs.</p>
            </div>
        </div>
    </div>
</div>
@endsection
