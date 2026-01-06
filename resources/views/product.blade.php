@extends('layouts.app')

@section('title', 'SurVail Remote Monitoring - Live Security Team')
@section('description', 'Turn your cameras into a live security team with 24/7 remote monitoring, AI detection, and licensed human operators.')

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
                    Turn Your Cameras Into a <span class="text-yellow-400">Live Security Team</span>
                </h1>
                <p class="text-lg mb-8 text-gray-200 leading-relaxed">
                    Real intervention. Real-time deterrence — Get <span class="font-bold">24/7</span> remote monitoring with AI detection and licensed human operators verification—without the cost of overnight guards.
                </p>
                <div class="flex flex-wrap gap-3">
                    <a href="{{ route('contact') }}" class="bg-yellow-400 text-gray-900 px-6 py-3 rounded-lg font-semibold hover:bg-yellow-500 transition flex items-center gap-2 text-sm">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                        </svg>
                        Get My Free Site Assessment
                    </a>
                    <a href="#how-it-works" class="bg-transparent border-2 border-white text-white px-6 py-3 rounded-lg font-semibold hover:bg-white hover:text-gray-900 transition flex items-center gap-2 text-sm">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        See How It Works
                    </a>
                </div>
            </div>
        </div>
        <!-- Right Background Image -->
        <div class="absolute top-0 right-0 w-1/2 h-full hidden md:block">
            <img src="{{ asset('assets/images/tasha-kostyuk-TtMKq3lJm-U-unsplash(1).jpg') }}" alt="Security monitoring dashboard" class="w-full h-full object-cover">
        </div>
    </section>

    <!-- How It Works Section -->
    <section id="how-it-works" class="py-16 px-6 bg-white">
        <div class="max-w-5xl mx-auto">
            <h2 class="text-4xl md:text-5xl font-bold text-center mb-3">
                How <span class="text-yellow-500">SurVail</span> Remote Monitoring Works
            </h2>
            <p class="text-center text-gray-600 text-base mb-12">
                Four simple steps keep your property protected around the clock—from detection to resolution.
            </p>
            
            <!-- Process Steps - Flex row -->
            <div class="flex flex-wrap items-stretch justify-center gap-6">

                <!-- Step 1 -->
                <div class="w-full md:flex-1 bg-white border border-gray-200 p-8 rounded-xl hover-lift text-center">
                    <div class="w-16 h-16 bg-yellow-400 rounded-full flex items-center justify-center mx-auto mb-4">
                        <img src="{{ asset('assets/images/cctv-smart-cctv-safety-protection-monitoring-camera-cctv-camera-svgrepo-com.png') }}" alt="AI Detection" class="w-8 h-8">
                    </div>
                    <div>
                        <h3 class="font-bold text-lg mb-2">
                            Advanced AI Detection
                        </h3>
                        <p class="text-gray-600 text-sm">
                            AI analyzes camera feeds 24/7, identifying people, vehicles, motion, intrusions, and suspicious activity.
                        </p>
                    </div>
                </div>

                <!-- Arrow -->
                <div class="hidden md:flex items-center">
                    <svg class="w-8 h-8 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                    </svg>
                </div>

                <!-- Step 2 -->
                <div class="w-full md:flex-1 bg-white border border-gray-200 p-8 rounded-xl hover-lift text-center">
                    <div class="w-16 h-16 bg-yellow-400 rounded-full flex items-center justify-center mx-auto mb-4">
                        <img src="{{ asset('assets/images/check-mark_5290982.png') }}" alt="Human Verification" class="w-8 h-8">
                    </div>
                    <div>
                        <h3 class="font-bold text-lg mb-2">
                            Human Verification
                        </h3>
                        <p class="text-gray-600 text-sm">
                            Trained operators review every AI alert instantly to verify genuine threats and eliminate false alarms.
                        </p>
                    </div>
                </div>

                <!-- Arrow -->
                <div class="hidden md:flex items-center">
                    <svg class="w-8 h-8 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                    </svg>
                </div>

                <!-- Step 3 -->
                <div class="w-full md:flex-1 bg-white border border-gray-200 p-8 rounded-xl hover-lift text-center">
                    <div class="w-16 h-16 bg-yellow-400 rounded-full flex items-center justify-center mx-auto mb-4">
                        <img src="{{ asset('assets/images/bullhorn_9954748.png') }}" alt="Active Deterrence" class="w-8 h-8">
                    </div>
                    <div>
                        <h3 class="font-bold text-lg mb-2">
                            Active Deterrence
                        </h3>
                        <p class="text-gray-600 text-sm">
                            Sirens, strobes, lights, and two-way audio warnings deter intruders before they cause damage.
                        </p>
                    </div>
                </div>

                <!-- Arrow -->
                <div class="hidden md:flex items-center">
                    <svg class="w-8 h-8 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                    </svg>
                </div>

                <!-- Step 4 -->
                <div class="w-full md:flex-1 bg-white border border-gray-200 p-8 rounded-xl hover-lift text-center">
                    <div class="w-16 h-16 bg-yellow-400 rounded-full flex items-center justify-center mx-auto mb-4">
                        <img src="{{ asset('assets/images/security-worker-svgrepo-com-2.png') }}" alt="Guard Dispatch" class="w-8 h-8">
                    </div>
                    <div>
                        <h3 class="font-bold text-lg mb-2">Guard/Police Dispatch</h3>
                        <p class="text-gray-600 text-sm">
                            If threats persist, police or security guards respond immediately with detailed incident reports.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Section -->
    <section class="py-16 px-6 bg-gray-50">
        <div class="max-w-5xl mx-auto">
            <h2 class="text-4xl md:text-5xl font-bold mb-3">
                Why Choose <span class="text-yellow-500">Remote Monitoring?</span>
            </h2>
            <p class="text-gray-600 text-base mb-10 max-w-3xl">
                Get enterprise-grade security without enterprise costs. Our AI-powered system works with your existing cameras to provide 24/7 protection at a fraction of the cost of traditional security guards.
            </p>

            <div class="grid md:grid-cols-2 gap-8 mb-8">
                <!-- Left Column - 3 Benefits -->
                <div class="space-y-6">
                    <!-- Benefit 1 -->
                    <div class="flex gap-4 items-start">
                        <div class="w-12 h-12 bg-yellow-400 rounded-full flex items-center justify-center flex-shrink-0">
                             <img src="{{ asset('assets/images/cost-effective-productive-svgrepo-com.png') }}" alt="Cost-Effective" class="w-6 h-6">
                        </div>
                        <div>
                            <h3 class="font-bold text-lg mb-1">Cost-Effective Security</h3>
                            <p class="text-gray-600 text-sm">
                                Save up to <span class="font-bold">70%</span> compared to traditional overnight guard services while maintaining superior coverage.
                            </p>
                        </div>
                    </div>

                    <!-- Benefit 2 -->
                    <div class="flex gap-4 items-start">
                        <div class="w-12 h-12 bg-yellow-400 rounded-full flex items-center justify-center flex-shrink-0">
                            <img src="{{ asset('assets/images/twenty-four-hours-clock-svgrepo-com.png') }}" alt="24/7 Protection" class="w-6 h-6">
                        </div>
                        <div>
                            <h3 class="font-bold text-lg mb-1">True 24/7 Protection</h3>
                            <p class="text-gray-600 text-sm">
                                Unlike guards who patrol periodically, our system monitors every camera feed continuously, every second.
                            </p>
                        </div>
                    </div>

                    <!-- Benefit 3 -->
                    <div class="flex gap-4 items-start">
                        <div class="w-12 h-12 bg-yellow-400 rounded-full flex items-center justify-center flex-shrink-0">
                            <img src="{{ asset('assets/images/cloud_16622281.png') }}" alt="Existing Cameras" class="w-6 h-6">
                        </div>
                        <div>
                            <h3 class="font-bold text-lg mb-1">Works With Your Existing Cameras</h3>
                            <p class="text-gray-600 text-sm">
                                Compatible with most existing camera systems—no need for expensive replacements or overhauls.
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
                    <h3 class="font-bold text-base mb-2">Instant Alerts</h3>
                    <p class="text-gray-700 text-sm">Real-time notifications when threats are detected and verified.</p>
                </div>
                <div class="bg-green-200 p-6 rounded-lg">
                    <h3 class="font-bold text-base mb-2">Detailed Reports</h3>
                    <p class="text-gray-700 text-sm">Comprehensive incident documentation with video evidence.</p>
                </div>
                <div class="bg-green-100 p-6 rounded-lg">
                    <h3 class="font-bold text-base mb-2">Rapid Response</h3>
                    <p class="text-gray-700 text-sm">Average verification time for to respond is under 30 seconds from detection.</p>
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
                Ready to Experience Security That Never Sleeps?
            </h2>
            <p class="text-lg text-gray-600 mb-8">
                Get a free site assessment and discover how SurVail Remote Monitoring can protect your property for less.
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