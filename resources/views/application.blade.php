@extends('layouts.app')

@section('title', 'Work Application - SurVail Protection & Investigation Services')
@section('description', 'Apply to join the SurVail Protection & Investigation Services team. Complete our online application form to be considered for security guard positions in Southern Ontario.')

@section('content')
<!-- Hero Section -->
<section class="relative min-h-[70vh] flex items-center bg-gradient-to-br from-gray-900 via-survail-green to-survail-brown overflow-hidden">
    <!-- Background -->
    <div class="absolute inset-0">
        <div class="absolute inset-0 bg-gradient-to-r from-black via-transparent to-black opacity-60"></div>
        <div class="w-full h-full bg-gradient-to-br from-survail-green to-survail-brown"></div>
    </div>

    <!-- Hero Content -->
    <div class="relative z-10 w-full px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto text-center">
            <div class="animate-slide-up">
                <h2 class="text-4xl sm:text-5xl lg:text-7xl font-bold text-white mb-6 leading-tight">
                    Work
                    <span class="text-yellow-400 animate-float inline-block">Application</span>
                </h2>
                <p class="text-xl sm:text-2xl lg:text-3xl text-gray-200 mb-8 max-w-3xl mx-auto leading-relaxed">
                    Complete the application form below to join our <strong class="text-yellow-400">professional security team</strong>
                </p>
            </div>

            <div class="animate-fade-in flex flex-col sm:flex-row gap-4 justify-center items-center mb-12">
                <a href="#application-form" class="group bg-survail-green hover:bg-survail-green-dark text-white px-8 py-4 rounded-full font-semibold text-lg transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                    <span class="flex items-center">
                        Start Application
                        <svg class="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m0 0l7-7m0 7H3"></path>
                        </svg>
                    </span>
                </a>
                <a href="tel:519-770-6634" class="group bg-transparent border-2 border-white hover:bg-white hover:text-gray-900 text-white px-8 py-4 rounded-full font-semibold text-lg transition-all duration-300 transform hover:scale-105">
                    <span class="flex items-center">
                        <svg class="mr-2 w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                        </svg>
                        Ask Questions First
                    </span>
                </a>
            </div>

            <!-- Benefits Reminder -->
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 max-w-2xl mx-auto text-white text-center">
                <div class="bg-white bg-opacity-10 backdrop-blur-sm rounded-lg p-4">
                    <div class="text-2xl font-bold text-yellow-400">Above</div>
                    <div class="text-sm">Average Pay</div>
                </div>
                <div class="bg-white bg-opacity-10 backdrop-blur-sm rounded-lg p-4">
                    <div class="text-2xl font-bold text-yellow-400">Flexible</div>
                    <div class="text-sm">Schedule</div>
                </div>
                <div class="bg-white bg-opacity-10 backdrop-blur-sm rounded-lg p-4">
                    <div class="text-2xl font-bold text-yellow-400">Professional</div>
                    <div class="text-sm">Team</div>
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

<!-- Main Content -->
<main class="w-full px-4 sm:px-6 lg:px-8 py-16 lg:py-24">

    <!-- Introduction Section -->
    <section class="mb-16 lg:mb-24 max-w-7xl mx-auto">
        <div class="bg-white rounded-2xl shadow-2xl p-8 lg:p-12 text-center border border-gray-100">
            <div class="bg-survail-brown bg-opacity-10 rounded-full p-4 inline-flex mb-6">
                <svg class="w-8 h-8 text-survail-brown" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M18 10c0 3.866-3.582 7-8 7a8.841 8.841 0 01-4.083-.98L2 17l1.338-3.123C2.493 12.767 2 11.434 2 10c0-3.866 3.582-7 8-7s8 3.134 8 7zM7 9H5v2h2V9zm8 0h-2v2h2V9zM9 9h2v2H9V9z" clip-rule="evenodd"></path>
                </svg>
            </div>
            <h3 class="text-3xl lg:text-4xl font-bold text-survail-brown mb-6">Ready to Join Our Team?</h3>
            <p class="text-xl text-gray-600 max-w-4xl mx-auto leading-relaxed">
                Thank you for your interest in working with SurVail Protection & Investigation Services.
                Please complete the application form below with accurate information. Once submitted,
                your application will be reviewed and you'll be contacted about available opportunities.
            </p>
        </div>
    </section>

    <!-- Eligibility Requirement -->
    <section class="mb-12 max-w-7xl mx-auto">
        <div class="bg-blue-50 border-l-4 border-blue-500 rounded-lg p-6 shadow-md">
            <div class="flex items-start">
                <svg class="h-6 w-6 text-blue-500 mr-3 flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                </svg>
                <div class="flex-1">
                    <h4 class="text-lg font-semibold text-blue-800 mb-2">Eligibility Requirement</h4>
                    <p class="text-blue-700">
                        To apply, you must be a <strong>Canadian citizen</strong> or hold a valid <strong>work permit</strong> or <strong>study permit</strong> that allows employment in Canada.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="mb-16 lg:mb-24 max-w-7xl mx-auto">
        <div class="grid md:grid-cols-3 gap-8">
            <div class="group bg-gradient-to-br from-survail-green to-green-600 rounded-2xl p-8 text-center text-white hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                <div class="mb-6">
                    <div class="bg-white bg-opacity-20 rounded-full p-4 inline-flex group-hover:bg-opacity-30 transition-colors">
                        <svg class="h-10 w-10 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z"></path>
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                </div>
                <h4 class="text-xl font-bold mb-3">Above Average Pay</h4>
                <p class="text-green-100">Competitive rates based on experience</p>
            </div>

            <div class="group bg-gradient-to-br from-survail-green to-gray-700 rounded-2xl p-8 text-center text-white hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                <div class="mb-6">
                    <div class="bg-white bg-opacity-20 rounded-full p-4 inline-flex group-hover:bg-opacity-30 transition-colors">
                        <svg class="h-10 w-10 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                </div>
                <h4 class="text-xl font-bold mb-3">Flexible Schedule</h4>
                <p class="text-green-100">Accept assignments that fit your schedule</p>
            </div>

            <div class="group bg-gradient-to-br from-survail-brown to-orange-600 rounded-2xl p-8 text-center text-white hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                <div class="mb-6">
                    <div class="bg-white bg-opacity-20 rounded-full p-4 inline-flex group-hover:bg-opacity-30 transition-colors">
                        <svg class="h-10 w-10 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                </div>
                <h4 class="text-xl font-bold mb-3">Professional Team</h4>
                <p class="text-orange-100">Work with experienced security professionals</p>
            </div>
        </div>
    </section>

    <!-- Application Form Section -->
    <section class="mb-16 lg:mb-24 max-w-7xl mx-auto">
        <div class="bg-white rounded-2xl shadow-2xl overflow-hidden border border-gray-100">
            <div class="bg-gradient-to-r from-survail-green to-green-600 text-white p-8 lg:p-12 text-center">
                <div class="bg-white bg-opacity-20 rounded-full p-4 inline-flex mb-6">
                    <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                        <path d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z"></path>
                    </svg>
                </div>
                <h3 class="text-3xl lg:text-4xl font-bold mb-4">Security Guard Application Form</h3>
                <p class="text-green-100 text-lg">Please fill out all required fields accurately and completely</p>
            </div>

            <!-- Application Form -->
            <div class="p-8 lg:p-12" id="application-form">
                <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4 mb-8">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <svg class="h-5 w-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm text-yellow-700">
                                <strong>Important:</strong> To apply, Canadian citizenship or a valid work permit is required.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Success/Error Messages -->
                @if(session('success'))
                    <div id="success-message" data-message="{{ session('success') }}" class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
                        <strong>Success!</strong> {{ session('success') }}
                    </div>
                @endif

                @if($errors->has('submission'))
                    <div id="error-message" data-message="{{ $errors->first('submission') }}" class="bg-red-50 border border-red-200 rounded-lg p-4 mb-8">
                        <div class="flex">
                            <svg class="h-5 w-5 text-red-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path>
                            </svg>
                            <div class="ml-3">
                                <p class="text-sm text-red-700">{{ $errors->first('submission') }}</p>
                            </div>
                        </div>
                    </div>

                    <script>
                        // Show SweetAlert for submission errors
                        document.addEventListener('DOMContentLoaded', function() {
                            const errorDiv = document.getElementById('error-message');
                            if (errorDiv) {
                                const errorMessage = errorDiv.getAttribute('data-message');

                                Swal.fire({
                                    title: '❌ Submission Error',
                                    html: `
                                        <div class="text-left">
                                            <p class="mb-4 text-gray-700">${errorMessage}</p>
                                            <div class="bg-red-50 rounded-lg p-4">
                                                <p class="text-sm text-red-700">Please try again or contact us for assistance:</p>
                                                <p class="text-sm mt-2"><a href="tel:519-770-6634" class="font-medium text-red-600 hover:text-red-500">📞 519-770-6634</a></p>
                                            </div>
                                        </div>
                                    `,
                                    icon: 'error',
                                    confirmButtonColor: '#dc2626',
                                    confirmButtonText: 'OK'
                                });
                            }
                        });
                    </script>
                @endif

                @if($errors->any() && !$errors->has('rate_limit') && !$errors->has('submission'))
                    <div class="bg-red-50 border-l-4 border-red-500 rounded-lg p-6 mb-8">
                        <div class="flex items-start">
                            <svg class="h-6 w-6 text-red-500 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path>
                            </svg>
                            <div class="flex-1">
                                <h3 class="text-lg font-semibold text-red-800 mb-2">Please correct the following errors:</h3>
                                <ul class="list-disc list-inside space-y-1 text-sm text-red-700">
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>

                    <script>
                        // Scroll to error message
                        document.addEventListener('DOMContentLoaded', function() {
                            const errorDiv = document.querySelector('.bg-red-50');
                            if (errorDiv) {
                                errorDiv.scrollIntoView({ behavior: 'smooth', block: 'center' });
                                // Also show SweetAlert
                                if (typeof Swal !== 'undefined') {
                                    Swal.fire({
                                        title: 'Validation Errors',
                                        html: '<div class="text-left">Please scroll down and correct the highlighted fields.</div>',
                                        icon: 'error',
                                        confirmButtonColor: '#dc2626',
                                        confirmButtonText: 'OK, I\'ll Fix Them'
                                    });
                                }
                            }
                        });
                    </script>
                @endif

                <form class="space-y-8" action="{{ route('application.submit') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <!-- Personal Information -->
                    <div class="bg-gray-50 rounded-xl p-6">
                        <h4 class="text-xl font-bold text-survail-brown mb-6">Personal Information</h4>
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label for="first_name" class="block text-sm font-medium text-gray-700 mb-2">First Name *</label>
                                <input type="text" id="first_name" name="first_name" required value="{{ old('first_name') }}" class="w-full px-4 py-3 border {{ $errors->has('first_name') ? 'border-red-300' : 'border-gray-300' }} rounded-lg focus:ring-2 focus:ring-survail-green focus:border-transparent">
                                @error('first_name')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="last_name" class="block text-sm font-medium text-gray-700 mb-2">Last Name *</label>
                                <input type="text" id="last_name" name="last_name" required value="{{ old('last_name') }}" class="w-full px-4 py-3 border {{ $errors->has('last_name') ? 'border-red-300' : 'border-gray-300' }} rounded-lg focus:ring-2 focus:ring-survail-green focus:border-transparent">
                                @error('last_name')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="md:col-span-2">
                                <label for="address" class="block text-sm font-medium text-gray-700 mb-2">Address (Optional)</label>
                                <input type="text" id="address" name="address" placeholder="Street Address" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-survail-green focus:border-transparent mb-3">
                                <input type="text" id="city" name="city" placeholder="City, Ontario only" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-survail-green focus:border-transparent">
                            </div>
                            <div>
                                <label for="gender" class="block text-sm font-medium text-gray-700 mb-2">Gender *</label>
                                <select id="gender" name="gender" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-survail-green focus:border-transparent">
                                    <option value="">Select...</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Other</option>
                                    <option value="prefer_not_to_say">Prefer not to say</option>
                                </select>
                            </div>
                            <div>
                                <label for="date_of_birth" class="block text-sm font-medium text-gray-700 mb-2">Date of Birth *</label>
                                <input type="date" id="date_of_birth" name="date_of_birth" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-survail-green focus:border-transparent">
                            </div>
                        </div>
                    </div>

                    <!-- License and Qualifications -->
                    <div class="bg-green-50 rounded-xl p-6">
                        <h4 class="text-xl font-bold text-survail-brown mb-6">License & Qualifications</h4>
                        <div class="space-y-6">
                            <div>
                                <label for="security_license" class="block text-sm font-medium text-gray-700 mb-2">Ontario Security Guard License Number *</label>
                                <input type="text" id="security_license" name="security_license" required value="{{ old('security_license') }}" class="w-full px-4 py-3 border {{ $errors->has('security_license') ? 'border-red-300 bg-red-50' : 'border-gray-300' }} rounded-lg focus:ring-2 focus:ring-survail-green focus:border-transparent">
                                @error('security_license')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="license_expiry" class="block text-sm font-medium text-gray-700 mb-2">License Expiry Date * <span class="text-xs text-gray-500">(must be valid/not expired)</span></label>
                                <input type="date" id="license_expiry" name="license_expiry" required value="{{ old('license_expiry') }}" min="{{ date('Y-m-d') }}" class="w-full px-4 py-3 border {{ $errors->has('license_expiry') ? 'border-red-300 bg-red-50' : 'border-gray-300' }} rounded-lg focus:ring-2 focus:ring-survail-green focus:border-transparent">
                                @error('license_expiry')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="has_vehicle" class="block text-sm font-medium text-gray-700 mb-2">Do you have a vehicle for commute? *</label>
                                <select id="has_vehicle" name="has_vehicle" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-survail-green focus:border-transparent">
                                    <option value="">Select...</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-3">Additional Certifications (Check all that apply)</label>
                                <div class="grid md:grid-cols-2 gap-3">
                                    <label class="flex items-center">
                                        <input type="checkbox" name="certifications[]" value="first_aid" class="mr-3 text-survail-green">
                                        <span>First Aid/CPR</span>
                                    </label>
                                    <label class="flex items-center">
                                        <input type="checkbox" name="certifications[]" value="use_of_force" class="mr-3 text-survail-green">
                                        <span>Use of Force</span>
                                    </label>
                                    <label class="flex items-center">
                                        <input type="checkbox" name="certifications[]" value="baton" class="mr-3 text-survail-green">
                                        <span>Baton Training</span>
                                    </label>
                                    <label class="flex items-center">
                                        <input type="checkbox" name="certifications[]" value="emergency_response" class="mr-3 text-survail-green">
                                        <span>Emergency Response</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Work Preference & Wages -->
                    <div class="bg-green-50 rounded-xl p-6">
                        <h4 class="text-xl font-bold text-survail-brown mb-6">Work Preference & Expected Wages</h4>
                        <div class="space-y-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-3">Work Preference * (Check all that apply)</label>
                                <div class="space-y-3">
                                    <label class="flex items-center">
                                        <input type="checkbox" name="work_preference[]" value="Any time" class="mr-3 text-survail-green">
                                        <span>Any time</span>
                                    </label>
                                    <label class="flex items-center">
                                        <input type="checkbox" name="work_preference[]" value="Part time" class="mr-3 text-survail-green">
                                        <span>Part time</span>
                                    </label>
                                    <label class="flex items-center">
                                        <input type="checkbox" name="work_preference[]" value="Full time" class="mr-3 text-survail-green">
                                        <span>Full time</span>
                                    </label>
                                    <label class="flex items-center">
                                        <input type="checkbox" name="work_preference[]" value="Nights only" class="mr-3 text-survail-green">
                                        <span>Nights only</span>
                                    </label>
                                    <label class="flex items-center">
                                        <input type="checkbox" name="work_preference[]" value="Days only" class="mr-3 text-survail-green">
                                        <span>Days only</span>
                                    </label>
                                </div>
                            </div>
                            <div>
                                <label for="expected_wages" class="block text-sm font-medium text-gray-700 mb-2">Expected Wages *</label>
                                <input type="text" id="expected_wages" name="expected_wages" required value="{{ old('expected_wages') }}" class="w-full px-4 py-3 border {{ $errors->has('expected_wages') ? 'border-red-300' : 'border-gray-300' }} rounded-lg focus:ring-2 focus:ring-survail-green focus:border-transparent" placeholder="e.g. $18.20/hour, Negotiable, etc.">
                                @error('expected_wages')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <!-- Contact Information -->
                    <div class="bg-purple-50 rounded-xl p-6">
                        <h4 class="text-xl font-bold text-survail-brown mb-6">Contact Information</h4>
                        <div class="space-y-6">
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address *</label>
                                <input type="email" id="email" name="email" required value="{{ old('email') }}" class="w-full px-4 py-3 border {{ $errors->has('email') ? 'border-red-300 bg-red-50' : 'border-gray-300' }} rounded-lg focus:ring-2 focus:ring-survail-green focus:border-transparent">
                                @error('email')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Phone Number *</label>
                                <input type="tel" id="phone" name="phone" required value="{{ old('phone', '+1 (287) 482-2687') }}" class="w-full px-4 py-3 border {{ $errors->has('phone') ? 'border-red-300' : 'border-gray-300' }} rounded-lg focus:ring-2 focus:ring-survail-green focus:border-transparent" placeholder="+1 (XXX) XXX-XXXX">
                                @error('phone')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="best_time_to_contact" class="block text-sm font-medium text-gray-700 mb-2">Best Time to Contact (if specific time needed)</label>
                                <input type="text" id="best_time_to_contact" name="best_time_to_contact" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-survail-green focus:border-transparent" placeholder="e.g. Weekdays 9am-5pm, Evenings after 6pm, etc.">
                            </div>
                        </div>
                    </div>

                    <!-- Criminal Record -->
                    <div class="bg-red-50 rounded-xl p-6">
                        <h4 class="text-xl font-bold text-survail-brown mb-6">Background Information</h4>
                        <div class="space-y-6">
                            <div>
                                <label for="criminal_record" class="block text-sm font-medium text-gray-700 mb-2">Do you have a criminal record? *</label>
                                <select id="criminal_record" name="criminal_record" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-survail-green focus:border-transparent">
                                    <option value="">Select...</option>
                                    <option value="no">No</option>
                                    <option value="yes">Yes</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Work History and Training -->
                    <div class="bg-yellow-50 rounded-xl p-6">
                        <h4 class="text-xl font-bold text-survail-brown mb-6">Work History and Training</h4>
                        <div class="space-y-6">
                            <div>
                                <label for="work_history" class="block text-sm font-medium text-gray-700 mb-2">Work History and Training *</label>
                                <textarea id="work_history" name="work_history" rows="5" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-survail-green focus:border-transparent" placeholder="Please describe your work history, relevant training, certifications, security experience, military/law enforcement background, etc."></textarea>
                            </div>
                            <div>
                                <label for="resume" class="block text-sm font-medium text-gray-700 mb-2">
                                    Upload Resume (Optional)
                                    <span class="text-xs font-normal text-red-600">- PDF or Word only</span>
                                </label>
                                <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-lg hover:border-survail-green transition-colors">
                                    <div class="space-y-1 text-center">
                                        <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48">
                                            <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                        <div class="flex text-sm text-gray-600">
                                            <label for="resume" class="relative cursor-pointer bg-white rounded-md font-medium text-survail-green hover:text-survail-green-dark focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-survail-green">
                                                <span>Upload a file</span>
                                                <input id="resume" name="resume" type="file" class="sr-only" accept=".pdf,.docx,.doc">
                                            </label>
                                            <p class="pl-1">or drag and drop</p>
                                        </div>
                                        <p class="text-xs text-gray-500">
                                            <strong class="text-red-600">Only PDF or Word documents</strong><br>
                                            (.pdf, .docx, .doc) - Max 10MB
                                        </p>
                                    </div>
                                </div>
                                <div id="file-name" class="mt-2 text-sm text-gray-600 hidden"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Agreement -->
                    <div class="bg-gray-50 rounded-xl p-6">
                        <h4 class="text-xl font-bold text-survail-brown mb-6">Agreement</h4>
                        <div class="space-y-4">
                            <label class="flex items-start">
                                <input type="checkbox" name="agree_terms" required class="mr-3 mt-1 text-survail-green">
                                <span class="text-sm text-gray-700">I understand that hiring depends on the information provided. I confirm that all information provided is correct and factual. *</span>
                            </label>
                            <div class="mt-4 p-4 bg-green-50 border border-green-200 rounded-lg">
                                <p class="text-sm text-green-800">
                                    <strong>Confidentiality Notice:</strong> Information provided will be kept confidential and secure, it will never be shared.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="text-center pt-6">
                        <button type="submit" class="bg-gradient-to-r from-survail-green to-survail-green-dark hover:from-survail-green-dark hover:to-survail-green text-white px-12 py-4 rounded-full font-bold text-lg transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                            Submit Application
                        </button>
                        <p class="text-sm text-gray-500 mt-4">* Required fields</p>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- What Happens Next -->
    <section class="mb-16 lg:mb-24 max-w-7xl mx-auto">
        <div class="bg-white rounded-2xl shadow-2xl p-8 lg:p-12 border border-gray-100">
            <div class="text-center mb-12">
                <div class="bg-survail-green bg-opacity-10 rounded-full p-4 inline-flex mb-6">
                    <svg class="w-8 h-8 text-survail-green" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                <h3 class="text-3xl lg:text-4xl font-bold text-survail-brown mb-4">What Happens Next?</h3>
                <p class="text-xl text-gray-600">Our simple 3-step process after you submit your application</p>
            </div>

            <div class="max-w-5xl mx-auto">
                <div class="grid md:grid-cols-3 gap-8">
                    <!-- Step 1 -->
                    <div class="text-center group">
                        <div class="bg-gradient-to-br from-survail-green to-gray-700 text-white rounded-full w-20 h-20 flex items-center justify-center text-2xl font-bold mx-auto mb-6 transform group-hover:scale-110 transition-transform duration-300 shadow-lg">
                            1
                        </div>
                        <h4 class="text-xl font-bold text-survail-brown mb-4">Application Review</h4>
                        <p class="text-gray-600 leading-relaxed">
                            We review your application, verify your qualifications, and check your references and background thoroughly.
                        </p>
                    </div>

                    <!-- Step 2 -->
                    <div class="text-center group">
                        <div class="bg-gradient-to-br from-survail-green to-green-600 text-white rounded-full w-20 h-20 flex items-center justify-center text-2xl font-bold mx-auto mb-6 transform group-hover:scale-110 transition-transform duration-300 shadow-lg">
                            2
                        </div>
                        <h4 class="text-xl font-bold text-survail-brown mb-4">Candidate Enrollment</h4>
                        <p class="text-gray-600 leading-relaxed">
                            If approved, you'll be enrolled in our candidate database and notified of your acceptance via email.
                        </p>
                    </div>

                    <!-- Step 3 -->
                    <div class="text-center group">
                        <div class="bg-gradient-to-br from-survail-brown to-orange-600 text-white rounded-full w-20 h-20 flex items-center justify-center text-2xl font-bold mx-auto mb-6 transform group-hover:scale-110 transition-transform duration-300 shadow-lg">
                            3
                        </div>
                        <h4 class="text-xl font-bold text-survail-brown mb-4">Assignment Offers</h4>
                        <p class="text-gray-600 leading-relaxed">
                            You'll receive email notifications about available assignments that match your profile and availability preferences.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Important Information -->
    <section class="mb-16 lg:mb-24 max-w-7xl mx-auto">
        <div class="bg-yellow-50 border-2 border-yellow-200 rounded-2xl p-8 lg:p-12">
            <div class="flex items-center justify-center mb-6">
                <div class="bg-yellow-200 rounded-full p-3">
                    <svg class="w-8 h-8 text-yellow-800" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                    </svg>
                </div>
            </div>
            <h3 class="text-2xl lg:text-3xl font-bold text-yellow-800 mb-6 text-center">Important Information</h3>
            <div class="space-y-4 text-yellow-700">
                <div class="flex items-start">
                    <svg class="w-6 h-6 text-yellow-600 mt-0.5 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                    </svg>
                    <p><strong>Assignment Flexibility:</strong> You can accept or decline any assignment offered to you. There's no obligation to accept every opportunity.</p>
                </div>
                <div class="flex items-start">
                    <svg class="w-6 h-6 text-yellow-600 mt-0.5 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                    </svg>
                    <p><strong>Withdrawal Option:</strong> You can request removal from our candidate list at any time if you no longer wish to receive assignment offers.</p>
                </div>
                <div class="flex items-start">
                    <svg class="w-6 h-6 text-yellow-600 mt-0.5 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                    </svg>
                    <p><strong>License Required:</strong> You must have a valid Ontario Security Guard License to be considered for employment.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Need Help? -->
    <section class="text-center max-w-7xl mx-auto">
        <div class="bg-survail-green rounded-2xl p-8 lg:p-12 text-white">
            <div class="bg-white bg-opacity-20 rounded-full p-4 inline-flex mb-6">
                <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M18 10c0 3.866-3.582 7-8 7a8.841 8.841 0 01-4.083-.98L2 17l1.338-3.123C2.493 12.767 2 11.434 2 10c0-3.866 3.582-7 8-7s8 3.134 8 7zM7 9H5v2h2V9zm8 0h-2v2h2V9zM9 9h2v2H9V9z" clip-rule="evenodd"></path>
                </svg>
            </div>
            <h3 class="text-3xl font-bold mb-4">Need Help with Your Application?</h3>
            <p class="text-xl text-green-100 mb-8 max-w-2xl mx-auto leading-relaxed">
                If you have questions about the application process or requirements, don't hesitate to contact Don directly. We're here to help!
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="tel:519-770-6634" class="group bg-white text-survail-green px-8 py-4 rounded-full font-bold text-lg hover:bg-gray-100 transition-all duration-300 transform hover:scale-105 shadow-lg">
                    <span class="flex items-center justify-center">
                        <svg class="mr-2 w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                        </svg>
                        Call: 519-770-6634
                    </span>
                </a>
                <a href="mailto:don@survailpro.ca" class="group bg-transparent border-2 border-white text-white px-8 py-4 rounded-full font-bold text-lg hover:bg-white hover:text-survail-green transition-all duration-300 transform hover:scale-105">
                    <span class="flex items-center justify-center">
                        <svg class="mr-2 w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                        </svg>
                        Email: don@survailpro.ca
                    </span>
                </a>
            </div>
        </div>
    </section>
</main>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const fileInput = document.getElementById('resume');
    const fileNameDisplay = document.getElementById('file-name');
    const form = document.querySelector('form');
    const submitButton = document.querySelector('button[type="submit"]');

    // Prevent multiple submissions
    let isSubmitting = false;

    // Phone number auto-formatting
    const phoneInput = document.getElementById('phone');

    function formatPhoneNumber(value) {
        // Remove all non-numeric characters
        const phoneNumber = value.replace(/\D/g, '');

        // Handle different lengths
        if (phoneNumber.length === 0) {
            return '';
        }

        // If it starts with 1, it's already formatted for US/Canada
        let cleaned = phoneNumber;
        if (phoneNumber.length === 11 && phoneNumber[0] === '1') {
            cleaned = phoneNumber.substring(1);
        } else if (phoneNumber.length === 10) {
            cleaned = phoneNumber;
        } else if (phoneNumber.length === 11 && phoneNumber[0] === '1') {
            cleaned = phoneNumber.substring(1);
        }

        // Format as +1 (XXX) XXX-XXXX
        if (cleaned.length <= 3) {
            return `+1 (${cleaned}`;
        } else if (cleaned.length <= 6) {
            return `+1 (${cleaned.slice(0, 3)}) ${cleaned.slice(3)}`;
        } else if (cleaned.length <= 10) {
            return `+1 (${cleaned.slice(0, 3)}) ${cleaned.slice(3, 6)}-${cleaned.slice(6, 10)}`;
        }

        // If more than 10 digits, truncate
        return `+1 (${cleaned.slice(0, 3)}) ${cleaned.slice(3, 6)}-${cleaned.slice(6, 10)}`;
    }

    phoneInput.addEventListener('input', function(e) {
        const cursorPosition = e.target.selectionStart;
        const oldValue = e.target.value;
        const formatted = formatPhoneNumber(e.target.value);
        e.target.value = formatted;

        // Try to maintain cursor position
        if (formatted.length >= cursorPosition) {
            e.target.setSelectionRange(cursorPosition, cursorPosition);
        }
    });

    // Format on page load if there's already a value
    if (phoneInput.value) {
        phoneInput.value = formatPhoneNumber(phoneInput.value);
    }

    form.addEventListener('submit', function(e) {
        if (isSubmitting) {
            e.preventDefault();
            return false;
        }

        isSubmitting = true;
        submitButton.disabled = true;
        submitButton.textContent = 'Submitting...';

        // Re-enable after 10 seconds as fallback
        setTimeout(() => {
            isSubmitting = false;
            submitButton.disabled = false;
            submitButton.textContent = 'Submit Application';
        }, 10000);
    });

    // Input sanitization and validation
    const textInputs = document.querySelectorAll('input[type="text"], textarea');
    textInputs.forEach(input => {
        input.addEventListener('input', function() {
            // Remove potentially dangerous characters
            this.value = this.value.replace(/<script[^>]*>.*?<\/script>/gi, '');
            this.value = this.value.replace(/<[^>]*>/g, '');
            this.value = this.value.replace(/javascript:/gi, '');
            this.value = this.value.replace(/on\w+\s*=/gi, '');
        });
    });

    // Phone number formatting and validation
    const phoneInput = document.getElementById('phone');
    if (phoneInput) {
        phoneInput.addEventListener('input', function() {
            // Remove non-numeric characters except + and -
            this.value = this.value.replace(/[^\d\+\-\s\(\)]/g, '');
        });
    }

    // File upload security
    fileInput.addEventListener('change', function(e) {
        const file = e.target.files[0];
        if (file) {
            // Check file size (10MB limit)
            if (file.size > 10 * 1024 * 1024) {
                Swal.fire({
                    title: 'File Too Large',
                    text: 'File size must be less than 10MB',
                    icon: 'error',
                    confirmButtonColor: '#0026c0',
                    confirmButtonText: 'OK'
                });
                e.target.value = '';
                fileNameDisplay.classList.add('hidden');
                return;
            }

            // Check file type by extension and MIME type
            const allowedExtensions = ['pdf', 'docx', 'doc'];
            const allowedMimeTypes = [
                'application/pdf',
                'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
                'application/msword'
            ];

            const extension = file.name.split('.').pop().toLowerCase();

            if (!allowedExtensions.includes(extension) || !allowedMimeTypes.includes(file.type)) {
                Swal.fire({
                    title: 'Invalid File Type',
                    html: '<p class="mb-2">Only PDF or Word documents are accepted.</p><p class="text-sm text-gray-600">Allowed formats: .pdf, .docx, .doc</p>',
                    icon: 'error',
                    confirmButtonColor: '#dc2626',
                    confirmButtonText: 'OK, Got It'
                });
                e.target.value = '';
                fileNameDisplay.classList.add('hidden');
                return;
            }

            // Check for suspicious filenames
            const suspiciousPatterns = ['.exe', '.bat', '.cmd', '.scr', '.pif', '.js', '.vbs', '.php', '.sh', '.com'];
            const filename = file.name.toLowerCase();

            for (let pattern of suspiciousPatterns) {
                if (filename.includes(pattern)) {
                    Swal.fire({
                        title: 'Security Alert',
                        html: '<p class="mb-2">This file type is not allowed for security reasons.</p><p class="text-sm text-gray-600">Only PDF or Word documents (.pdf, .docx, .doc) are accepted.</p>',
                        icon: 'error',
                        confirmButtonColor: '#dc2626',
                        confirmButtonText: 'OK'
                    });
                    e.target.value = '';
                    fileNameDisplay.classList.add('hidden');
                    return;
                }
            }

            // Show selected file name
            fileNameDisplay.textContent = `Selected: ${file.name}`;
            fileNameDisplay.classList.remove('hidden');
        } else {
            fileNameDisplay.classList.add('hidden');
        }
    });

    // Form validation on submit
    form.addEventListener('submit', function(e) {
        // Check required work preferences
        const workPreferences = document.querySelectorAll('input[name="work_preference[]"]:checked');
        if (workPreferences.length === 0) {
            e.preventDefault();
            Swal.fire({
                title: 'Work Preference Required',
                text: 'Please select at least one work preference.',
                icon: 'warning',
                confirmButtonColor: '#0026c0',
                confirmButtonText: 'OK'
            });
            isSubmitting = false;
            submitButton.disabled = false;
            submitButton.textContent = 'Submit Application';
            return false;
        }

        // Validate email format
        const email = document.getElementById('email').value;
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            e.preventDefault();
            Swal.fire({
                title: 'Invalid Email',
                text: 'Please enter a valid email address.',
                icon: 'error',
                confirmButtonColor: '#0026c0',
                confirmButtonText: 'OK'
            });
            isSubmitting = false;
            submitButton.disabled = false;
            submitButton.textContent = 'Submit Application';
            return false;
        }

        // Ensure expected wages is not empty
        const expectedWages = document.getElementById('expected_wages').value;
        if (!expectedWages.trim()) {
            e.preventDefault();
            Swal.fire({
                title: 'Expected Wages Required',
                text: 'Please enter your expected wages (e.g., $20/hour, Negotiable).',
                icon: 'warning',
                confirmButtonColor: '#0026c0',
                confirmButtonText: 'OK'
            });
            isSubmitting = false;
            submitButton.disabled = false;
            submitButton.textContent = 'Submit Application';
            return false;
        }
    });

    // Security: Disable right-click on form (basic deterrent)
    form.addEventListener('contextmenu', function(e) {
        e.preventDefault();
    });

    // Security: Disable drag and drop except for file input
    document.addEventListener('dragover', function(e) {
        if (e.target !== fileInput) {
            e.preventDefault();
        }
    });

    document.addEventListener('drop', function(e) {
        if (e.target !== fileInput) {
            e.preventDefault();
        }
    });

    // Handle success message display with SweetAlert2
    const successMessage = document.getElementById('success-message');
    if (successMessage) {
        const message = successMessage.getAttribute('data-message');

        Swal.fire({
            title: '🎉 Application Submitted Successfully!',
            html: `
                <div class="text-left">
                    <p class="mb-4 text-gray-700">${message}</p>
                    <div class="bg-green-50 rounded-lg p-4">
                        <h4 class="font-semibold text-green-800 mb-3">What Happens Next?</h4>
                        <ul class="text-sm text-green-700 space-y-2">
                            <li>📧 Your application has been sent to our HR team</li>
                            <li>🔍 We will review your qualifications and experience</li>
                            <li>📞 If selected, we'll contact you within 3-5 business days</li>
                            <li>❓ For questions, call us at <a href="tel:519-770-6634" class="font-medium text-green-600 hover:text-green-500">519-770-6634</a></li>
                        </ul>
                    </div>
                </div>
            `,
            icon: 'success',
            confirmButtonText: 'Perfect! Thank You',
            confirmButtonColor: '#0026c0',
            width: '600px',
            showClass: {
                popup: 'animate__animated animate__fadeInDown'
            },
            hideClass: {
                popup: 'animate__animated animate__fadeOutUp'
            }
        }).then((result) => {
            if (result.isConfirmed) {
                // Ask if they want to submit another application
                Swal.fire({
                    title: 'Submit Another Application?',
                    text: 'Would you like to submit another application?',
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonColor: '#0026c0',
                    cancelButtonColor: '#6b7280',
                    confirmButtonText: 'Yes, Submit Another',
                    cancelButtonText: 'No, I\'m Done'
                }).then((result) => {
                    if (result.isConfirmed) {
                        location.reload();
                    }
                });
            }
        });
    }
});
</script>
@endpush
@endsection