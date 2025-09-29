@extends('layouts.app')

@section('title', 'Careers - SurVail Protection & Investigation Services')
@section('description', 'Join the SurVail team. Career opportunities in security and investigation services across Southern Ontario.')

@section('content')
<div class="min-h-screen py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h1 class="text-4xl lg:text-6xl font-bold text-survail-brown mb-6">Join Our Team</h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Build a rewarding career in security and protection services with SurVail. We're always looking for dedicated professionals.
            </p>
        </div>

        <div class="grid lg:grid-cols-2 gap-12 mb-16">
            <div>
                <h2 class="text-3xl font-bold text-survail-brown mb-6">Why Work With Us?</h2>
                <div class="space-y-6">
                    <div class="flex items-start">
                        <svg class="w-6 h-6 text-survail-blue mr-4 mt-1" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <div>
                            <h3 class="text-xl font-semibold text-survail-brown mb-2">Competitive Compensation</h3>
                            <p class="text-gray-600">Fair wages and benefits package for all team members.</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <svg class="w-6 h-6 text-survail-green mr-4 mt-1" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <div>
                            <h3 class="text-xl font-semibold text-survail-brown mb-2">Professional Training</h3>
                            <p class="text-gray-600">Ongoing training and development opportunities to advance your career.</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <svg class="w-6 h-6 text-survail-red mr-4 mt-1" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <div>
                            <h3 class="text-xl font-semibold text-survail-brown mb-2">Flexible Scheduling</h3>
                            <p class="text-gray-600">Various shift options to accommodate your lifestyle and needs.</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <svg class="w-6 h-6 text-survail-brown mr-4 mt-1" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <div>
                            <h3 class="text-xl font-semibold text-survail-brown mb-2">Career Growth</h3>
                            <p class="text-gray-600">Opportunities for advancement within our growing organization.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-gradient-to-br from-survail-blue to-survail-blue-dark text-white rounded-2xl p-8">
                <h3 class="text-2xl font-bold mb-6">Current Opportunities</h3>
                <div class="space-y-6">
                    <div class="bg-white bg-opacity-10 rounded-lg p-4">
                        <h4 class="text-xl font-semibold mb-2">Security Officers</h4>
                        <p class="text-blue-100">Full-time and part-time positions available for licensed security professionals.</p>
                    </div>

                    <div class="bg-white bg-opacity-10 rounded-lg p-4">
                        <h4 class="text-xl font-semibold mb-2">Event Security Staff</h4>
                        <p class="text-blue-100">Seasonal and contract positions for special events and festivals.</p>
                    </div>

                    <div class="bg-white bg-opacity-10 rounded-lg p-4">
                        <h4 class="text-xl font-semibold mb-2">Security Supervisors</h4>
                        <p class="text-blue-100">Leadership roles for experienced security professionals.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Requirements -->
        <div class="bg-white rounded-2xl shadow-lg p-8 mb-16">
            <h2 class="text-3xl font-bold text-survail-brown mb-8 text-center">Requirements</h2>
            <div class="grid md:grid-cols-2 gap-8">
                <div>
                    <h3 class="text-xl font-semibold text-survail-brown mb-4">Basic Requirements</h3>
                    <ul class="space-y-2 text-gray-600">
                        <li>• Valid Ontario Security Guard License</li>
                        <li>• Clean criminal background check</li>
                        <li>• Professional appearance and attitude</li>
                        <li>• Reliable transportation</li>
                        <li>• Strong communication skills</li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-xl font-semibold text-survail-brown mb-4">Preferred Qualifications</h3>
                    <ul class="space-y-2 text-gray-600">
                        <li>• Previous security experience</li>
                        <li>• Law enforcement or military background</li>
                        <li>• First aid/CPR certification</li>
                        <li>• Additional security certifications</li>
                        <li>• Bilingual capabilities (English/French)</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Apply Section -->
        <div class="bg-gradient-to-r from-survail-green to-gray-800 rounded-3xl p-8 lg:p-16 text-center text-white">
            <h2 class="text-3xl lg:text-4xl font-bold mb-6">Ready to Join Our Team?</h2>
            <p class="text-xl mb-8 max-w-3xl mx-auto opacity-90">
                Complete our online application form or contact us directly to discuss available opportunities.
            </p>

            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                <a href="{{ route('application') }}" class="bg-yellow-400 hover:bg-yellow-300 text-gray-900 px-8 py-4 rounded-full font-bold text-lg transition-all duration-300 transform hover:scale-105 shadow-lg">
                    <span class="flex items-center justify-center">
                        <svg class="mr-2 w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                            <path d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z"></path>
                        </svg>
                        Apply Now Online
                    </span>
                </a>
                <a href="mailto:don@survailpro.ca" class="bg-white text-survail-green px-8 py-4 rounded-full font-bold text-lg hover:bg-gray-100 transition-all duration-300 transform hover:scale-105 shadow-lg">
                    <span class="flex items-center justify-center">
                        <svg class="mr-2 w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                        </svg>
                        Email Resume
                    </span>
                </a>
                <a href="tel:519-770-6634" class="bg-transparent border-2 border-white hover:bg-white hover:text-survail-green text-white px-8 py-4 rounded-full font-bold text-lg transition-all duration-300 transform hover:scale-105">
                    <span class="flex items-center justify-center">
                        <svg class="mr-2 w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                        </svg>
                        Call: 519-770-6634
                    </span>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection