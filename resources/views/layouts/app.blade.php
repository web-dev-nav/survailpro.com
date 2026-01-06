<!DOCTYPE html>
<html lang="en-ca" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'SurVail Protection & Investigation Services - Professional Security Solutions')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="@yield('keywords', 'Investigation, Security, Protection, Brantford Ontario, Guard-Services, Police-Service, concierge, Safety, Control, certification')">
    <meta name="description" content="@yield('description', 'Professional security and investigation services in Southern Ontario. 42 years of combined management experience in protection, event security, and specialized consulting services.')">

    <!-- Security Headers -->
    <meta http-equiv="X-Content-Type-Options" content="nosniff">
    <meta http-equiv="X-Frame-Options" content="DENY">
    <meta http-equiv="X-XSS-Protection" content="1; mode=block">
    <meta http-equiv="Referrer-Policy" content="strict-origin-when-cross-origin">
    <!-- Temporarily disabled CSP for debugging -->
    <!-- <meta http-equiv="Content-Security-Policy" content="default-src 'self'; script-src 'self' 'unsafe-inline' 'unsafe-eval' https://cdn.tailwindcss.com https://code.jquery.com https://cdn.jsdelivr.net; style-src 'self' 'unsafe-inline' https://cdn.tailwindcss.com; img-src 'self' data: https:; font-src 'self' data:; connect-src 'self' https://cdn.jsdelivr.net;"> -->

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- SweetAlert2 CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Custom configuration for Tailwind -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'survail-brown': '#381400',
                        'survail-brown-light': '#6b3500',
                        'survail-brown-dark': '#581200',
                        'survail-green': '#213f37',
                        'survail-green-dark': '#1a2f29',
                        'survail-red': '#9e3000',
                        'survail-red-dark': '#b00000'
                    },
                    screens: {
                        'xs': '475px',
                    },
                    animation: {
                        'fade-in': 'fadeIn 0.5s ease-in-out',
                        'slide-up': 'slideUp 0.5s ease-out',
                        'float': 'float 3s ease-in-out infinite',
                        'pulse-slow': 'pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': { opacity: '0' },
                            '100%': { opacity: '1' },
                        },
                        slideUp: {
                            '0%': { transform: 'translateY(30px)', opacity: '0' },
                            '100%': { transform: 'translateY(0)', opacity: '1' },
                        },
                        float: {
                            '0%, 100%': { transform: 'translateY(0px)' },
                            '50%': { transform: 'translateY(-10px)' },
                        }
                    }
                }
            }
        }

    </script>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-RXWW7S01M1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-RXWW7S01M1');
    </script>
    <!-- Mobile viewport height fix -->
    <style>
        /* Fix for mobile viewport height issues */
        .hero-mobile {
            height: 100vh;
            min-height: 700px;
            position: relative;
        }

        .hero-bg-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
        }

        @media (max-width: 640px) {
            .hero-mobile {
                min-height: 100vh;
                height: 100vh;
            }

            .hero-bg-image {
                object-fit: cover !important;
                object-position: center !important;
            }

            .hero-mobile h2,
            .hero-mobile p {
                text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.9), 0 0 15px rgba(0, 0, 0, 0.7);
            }
        }

        /* Desktop hero image improvements */
        @media (min-width: 1024px) {
            .hero-mobile {
                min-height: 800px;
            }
        }

        @media (min-width: 1280px) {
            .hero-mobile {
                min-height: 850px;
            }
        }
    </style>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('assets/images/wp41039c21_06.png') }}">

    @stack('styles')
</head>
<body class="bg-gray-50 font-sans antialiased">

    <!-- Mobile Menu Overlay -->
    <div id="mobile-menu-overlay" class="fixed inset-0 bg-black bg-opacity-50 z-40 hidden lg:hidden"></div>

    <!-- Header -->
    <header class="bg-white shadow-xl relative z-50">
        <div class="w-full px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20 lg:h-24 max-w-7xl mx-auto">
                <!-- Logo and Company Info -->
                <a href="{{ route('home') }}" class="flex items-center space-x-3 lg:space-x-4 group focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-survail-green rounded-md">
                    <img src="{{ asset('assets/images/wp41039c21_06.png') }}" alt="SurVail Logo" class="h-12 w-auto lg:h-16 transition-transform duration-200 group-hover:scale-105">
                    <div class="hidden sm:block">
                        <h1 class="text-lg lg:text-2xl font-bold text-survail-brown leading-tight group-hover:text-survail-brown-light transition-colors">SurVail Protection &<br class="hidden lg:block"> Investigation Services</h1>
                    </div>
                </a>

                <!-- Desktop Contact Info -->
                <div class="hidden lg:block text-right">
                    <div class="flex items-center space-x-6">
                        <div>
                            <p class="text-sm text-gray-600">Call or Text</p>
                            <a href="tel:{{ preg_replace('/\\s+/', '', $globalContact->main_phone_number ?? '519-770-6634') }}" class="text-2xl font-bold text-survail-green hover:text-survail-green-dark transition-colors">{{ $globalContact->main_phone_number ?? '519-770-6634' }}</a>
                        </div>
                        <div class="h-12 w-px bg-gray-300"></div>
                        <div>
                            <p class="text-sm text-gray-600">Email</p>
                            <a href="mailto:{{ $globalContact->email ?? 'don@survailpro.ca' }}" class="text-lg text-survail-brown hover:text-survail-brown-light transition-colors">{{ $globalContact->email ?? 'don@survailpro.ca' }}</a>
                        </div>
                    </div>
                </div>

                <!-- Mobile Menu Button -->
                <button id="mobile-menu-btn" class="lg:hidden relative z-50 p-2">
                    <div class="w-6 h-6 relative">
                        <span class="hamburger-line absolute h-0.5 w-full bg-survail-brown transform transition duration-300 ease-in-out"></span>
                        <span class="hamburger-line absolute h-0.5 w-full bg-survail-brown transform transition duration-300 ease-in-out mt-2"></span>
                        <span class="hamburger-line absolute h-0.5 w-full bg-survail-brown transform transition duration-300 ease-in-out mt-4"></span>
                    </div>
                </button>
            </div>
        </div>
    </header>

    <!-- Navigation -->
    <nav class="bg-survail-green shadow-lg sticky top-0 z-40">
        <div class="w-full px-4 sm:px-6 lg:px-8">
            <div class="max-w-7xl mx-auto">
                <!-- Desktop Navigation -->
                <div class="hidden lg:flex justify-center space-x-1">
                    <a href="{{ route('home') }}" class="px-6 py-4 text-white font-semibold {{ Route::currentRouteName() == 'home' ? 'bg-survail-brown bg-opacity-30 border-b-3 border-yellow-400' : 'hover:bg-white hover:bg-opacity-15 hover:text-yellow-200' }} transition-all duration-300">Home</a>
                    <a href="{{ route('about') }}" class="px-6 py-4 text-white font-semibold {{ Route::currentRouteName() == 'about' ? 'bg-survail-brown bg-opacity-30 border-b-3 border-yellow-400' : 'hover:bg-white hover:bg-opacity-15 hover:text-yellow-200' }} transition-all duration-300">About Us</a>
                    <a href="{{ route('services') }}" class="px-6 py-4 text-white font-semibold {{ Route::currentRouteName() == 'services' ? 'bg-survail-brown bg-opacity-30 border-b-3 border-yellow-400' : 'hover:bg-white hover:bg-opacity-15 hover:text-yellow-200' }} transition-all duration-300">Services</a>
                    <a href="{{ route('product') }}" class="px-6 py-4 text-white font-semibold {{ Route::currentRouteName() == 'product' ? 'bg-survail-brown bg-opacity-30 border-b-3 border-yellow-400' : 'hover:bg-white hover:bg-opacity-15 hover:text-yellow-200' }} transition-all duration-300">Product</a>
                    <a href="{{ route('contact') }}" class="px-6 py-4 text-white font-semibold {{ Route::currentRouteName() == 'contact' ? 'bg-survail-brown bg-opacity-30 border-b-3 border-yellow-400' : 'hover:bg-white hover:bg-opacity-15 hover:text-yellow-200' }} transition-all duration-300">Contact</a>
                    <a href="{{ route('application') }}" class="px-6 py-4 text-white font-semibold {{ in_array(Route::currentRouteName(), ['application', 'apply']) ? 'bg-survail-brown bg-opacity-30 border-b-3 border-yellow-400' : 'hover:bg-white hover:bg-opacity-15 hover:text-yellow-200' }} transition-all duration-300">Apply Now</a>
                </div>

                <!-- Mobile Navigation -->
                <div id="mobile-menu" class="lg:hidden fixed top-20 left-0 right-0 bg-survail-green transform -translate-y-full transition-transform duration-300 ease-in-out z-30">
                    <div class="px-4 py-2 space-y-1">
                        <a href="{{ route('home') }}" class="block px-4 py-3 text-white font-semibold {{ Route::currentRouteName() == 'home' ? 'bg-survail-brown bg-opacity-30' : 'hover:bg-white hover:bg-opacity-15' }} rounded-lg transition-colors">Home</a>
                        <a href="{{ route('about') }}" class="block px-4 py-3 text-white font-semibold {{ Route::currentRouteName() == 'about' ? 'bg-survail-brown bg-opacity-30' : 'hover:bg-white hover:bg-opacity-15' }} rounded-lg transition-colors">About Us</a>
                        <a href="{{ route('services') }}" class="block px-4 py-3 text-white font-semibold {{ Route::currentRouteName() == 'services' ? 'bg-survail-brown bg-opacity-30' : 'hover:bg-white hover:bg-opacity-15' }} rounded-lg transition-colors">Services</a>
                        <a href="{{ route('product') }}" class="block px-4 py-3 text-white font-semibold {{ Route::currentRouteName() == 'product' ? 'bg-survail-brown bg-opacity-30' : 'hover:bg-white hover:bg-opacity-15' }} rounded-lg transition-colors">Product</a>
                        <a href="{{ route('contact') }}" class="block px-4 py-3 text-white font-semibold {{ Route::currentRouteName() == 'contact' ? 'bg-survail-brown bg-opacity-30' : 'hover:bg-white hover:bg-opacity-15' }} rounded-lg transition-colors">Contact</a>
                        <a href="{{ route('application') }}" class="block px-4 py-3 text-white font-semibold {{ in_array(Route::currentRouteName(), ['application', 'apply']) ? 'bg-survail-brown bg-opacity-30' : 'hover:bg-white hover:bg-opacity-15' }} rounded-lg transition-colors">Apply Now</a>

                        <!-- Mobile Contact Info -->
                        <div class="border-t border-white border-opacity-20 mt-4 pt-4">
                            <div class="text-center space-y-2">
                                <a href="tel:{{ preg_replace('/\\s+/', '', $globalContact->main_phone_number ?? '519-770-6634') }}" class="block text-yellow-300 font-bold text-xl">{{ $globalContact->main_phone_number ?? '519-770-6634' }}</a>
                                <a href="mailto:{{ $globalContact->email ?? 'don@survailpro.ca' }}" class="block text-yellow-200">{{ $globalContact->email ?? 'don@survailpro.ca' }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Company Info -->
                <div class="lg:col-span-2">
                    <div class="flex items-center space-x-3 mb-4">
                        <img src="{{ asset('assets/images/wp41039c21_06.png') }}" alt="SurVail Logo" class="h-12 w-auto">
                        <h3 class="text-xl font-bold">SurVail Protection & Investigation Services</h3>
                    </div>
                    <p class="text-gray-300 mb-4 leading-relaxed">
                        Professional security and investigation services in Southern Ontario. 42 years of combined management experience in protection, event security, and specialized consulting services.
                    </p>
                    <div class="flex space-x-4">
                        <div>
                            <h4 class="font-semibold text-yellow-400 mb-1">Phone</h4>
                            <a href="tel:{{ preg_replace('/\\s+/', '', $globalContact->main_phone_number ?? '519-770-6634') }}" class="text-gray-300 hover:text-white transition-colors">{{ $globalContact->main_phone_number ?? '519-770-6634' }}</a>
                        </div>
                        <div>
                            <h4 class="font-semibold text-yellow-400 mb-1">Email</h4>
                            <a href="mailto:{{ $globalContact->email ?? 'don@survailpro.ca' }}" class="text-gray-300 hover:text-white transition-colors">{{ $globalContact->email ?? 'don@survailpro.ca' }}</a>
                        </div>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h4 class="font-semibold text-yellow-400 mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="{{ route('home') }}" class="text-gray-300 hover:text-white transition-colors">Home</a></li>
                        <li><a href="{{ route('about') }}" class="text-gray-300 hover:text-white transition-colors">About Us</a></li>
                        <li><a href="{{ route('services') }}" class="text-gray-300 hover:text-white transition-colors">Services</a></li>
                        <li><a href="{{ route('contact') }}" class="text-gray-300 hover:text-white transition-colors">Contact</a></li>
                        <li><a href="{{ route('application') }}" class="text-gray-300 hover:text-white transition-colors">Apply Now</a></li>
                    </ul>
                </div>

                <!-- Services -->
                <div>
                    <h4 class="font-semibold text-yellow-400 mb-4">Our Services</h4>
                    <ul class="space-y-2 text-gray-300">
                        <li>Personal Protection</li>
                        <li>Event Security</li>
                        <li>Corporate Security</li>
                        <li>Consulting</li>
                    </ul>
                </div>
            </div>

            <!-- Bottom Bar -->
            <div class="border-t border-gray-800 mt-8 pt-8 text-center">
                <p class="text-gray-400">
                    &copy; {{ date('Y') }} SurVail Protection & Investigation Services. All rights reserved.
                </p>
                <p class="text-gray-500 text-sm mt-2">
                    Built by <a href="https://brainandbolt.com/" target="_blank" rel="noopener noreferrer" class="text-survail-green hover:text-yellow-400 transition-colors">brainandbolt</a>
                </p>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <button id="backToTop" class="fixed bottom-8 right-8 bg-survail-green hover:bg-survail-green-dark text-white p-3 rounded-full shadow-lg transition-all duration-300 opacity-0 invisible scale-95 z-50">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
        </svg>
    </button>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/jsMenu.js') }}"></script>

    <!-- Custom Scripts -->
    <script>
        $(document).ready(function() {
            const mobileMenuBtn = $('#mobile-menu-btn');
            const mobileMenu = $('#mobile-menu');
            const mobileMenuOverlay = $('#mobile-menu-overlay');

            // Mobile menu toggle
            mobileMenuBtn.on('click', function() {
                mobileMenu.toggleClass('-translate-y-full translate-y-0');
                mobileMenuOverlay.toggleClass('hidden');
                $(this).toggleClass('active');

                // Animate hamburger
                const lines = $(this).find('.hamburger-line');
                if ($(this).hasClass('active')) {
                    lines.eq(0).css('transform', 'rotate(45deg) translate(5px, 5px)');
                    lines.eq(1).css('opacity', '0');
                    lines.eq(2).css('transform', 'rotate(-45deg) translate(7px, -6px)');
                } else {
                    lines.css('transform', 'none').css('opacity', '1');
                }
            });

            // Close mobile menu when clicking overlay
            mobileMenuOverlay.on('click', function() {
                mobileMenu.addClass('-translate-y-full').removeClass('translate-y-0');
                $(this).addClass('hidden');
                mobileMenuBtn.removeClass('active');
                mobileMenuBtn.find('.hamburger-line').css('transform', 'none').css('opacity', '1');
            });

            // Back to top button functionality
            $(window).scroll(function() {
                if ($(this).scrollTop() > 300) {
                    $('#backToTop').removeClass('opacity-0 invisible scale-95').addClass('opacity-100 visible scale-100');
                } else {
                    $('#backToTop').removeClass('opacity-100 visible scale-100').addClass('opacity-0 invisible scale-95');
                }
            });

            $('#backToTop').click(function() {
                $('html, body').animate({scrollTop: 0}, 800);
                return false;
            });

            // Smooth scrolling for anchor links
            $('a[href^="#"]').on('click', function(event) {
                var target = $(this.getAttribute('href'));
                if(target.length) {
                    event.preventDefault();
                    $('html, body').stop().animate({
                        scrollTop: target.offset().top - 100
                    }, 1000);
                }
            });
        });
    </script>

    @stack('scripts')
</body>
</html>
