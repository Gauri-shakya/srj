<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', App\Models\Setting::get('site_name', 'SRJ Heat Exchangers'))</title>
    <meta name="description" content="@yield('meta_description', 'Leading Plate Heat Exchanger Manufacturer in India.')">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Rajdhani:wght@500;600;700;800;900&family=Bebas+Neue&display=swap" rel="stylesheet">
    
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    
    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}?v={{ time() }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
</head>
<body class="bg-slate-50 text-slate-800 antialiased selection:bg-red-600 selection:text-white">

    <!-- Topbar -->
    <div class="topbar">
        <div class="container topbar-inner">
            <div class="topbar-left flex items-center gap-6">
                <a href="mailto:{{ App\Models\Setting::get('email') }}" class="hover:text-red-400">
                    <i class="fas fa-envelope text-red-500"></i> {{ App\Models\Setting::get('email', 'info@srj.co.in') }}
                </a>
                <a href="tel:{{ App\Models\Setting::get('phone') }}" class="hover:text-red-400">
                    <i class="fas fa-phone-alt text-red-500"></i> {{ App\Models\Setting::get('phone', '+91-9716115504') }}
                </a>
            </div>
            <div class="topbar-right flex items-center gap-4">
                <span class="text-slate-400 text-xs uppercase tracking-widest mr-2">Follow Us</span>
                <a href="{{ App\Models\Setting::get('facebook') }}" target="_blank" class="hover:text-blue-500"><i class="fab fa-facebook-f"></i></a>
                <a href="{{ App\Models\Setting::get('twitter') }}" target="_blank" class="hover:text-sky-400"><i class="fab fa-twitter"></i></a>
                <a href="{{ App\Models\Setting::get('instagram') }}" target="_blank" class="hover:text-pink-500"><i class="fab fa-instagram"></i></a>
                <a href="{{ App\Models\Setting::get('youtube') }}" target="_blank" class="hover:text-red-500"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </div>

    <!-- Header -->
    <header class="header">
        <div class="container header-inner">
            <div class="logo">
                <a href="{{ route('home') }}" class="flex items-center gap-2 group">
                    <div class="w-10 h-10 bg-red-600 rounded-lg flex items-center justify-center text-white transform group-hover:rotate-12 transition-all duration-300 shadow-lg shadow-red-600/30">
                        <i class="fas fa-fire-alt text-xl"></i>
                    </div>
                    <h2 class="text-[#0a1628]">SRJ <span class="text-red-600">HEAT EXCHANGERS</span></h2>
                </a>
            </div>
            <nav class="nav">
                <ul class="nav-links">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('about') }}">About Us</a></li>
                    <li class="has-dropdown">
                        <a href="{{ route('products.index') }}" class="flex items-center justify-between lg:justify-start gap-1">Our Products <i class="fas fa-chevron-down text-[10px] text-red-600"></i></a>
                        <ul class="dropdown-menu">
                            @foreach(App\Models\ProductCategory::where('is_active', true)->orderBy('order')->get() as $cat)
                                <li><a href="{{ route('products.category', $cat->slug) }}">{{ $cat->name }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="has-dropdown">
                        <a href="{{ route('replacement-parts') }}" class="flex items-center justify-between lg:justify-start gap-1">Replacement Parts <i class="fas fa-chevron-down text-[10px] text-red-600"></i></a>
                        <ul class="dropdown-menu grid grid-cols-1 sm:grid-cols-2 gap-x-4 lg:min-w-[400px] p-2 lg:p-4">
                            @foreach(App\Models\ReplacementBrand::where('is_active', true)->orderBy('order')->get() as $brand)
                                <li><a href="{{ route('replacement-brand', $brand->slug) }}" class="whitespace-nowrap">{{ $brand->name }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li><a href="{{ route('blog.index') }}">Blog</a></li>
                    <li><a href="{{ route('contact') }}">Contact Us</a></li>
                    <li class="lg:hidden mt-4">
                        <a href="{{ route('contact') }}" class="inline-flex items-center justify-center px-8 py-3 text-sm font-bold text-white bg-red-600 rounded-full shadow-lg w-full">
                            Get Quote Now <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="header-action flex items-center gap-4">
                <a href="{{ route('contact') }}" class="hidden lg:inline-flex items-center justify-center px-6 py-2.5 text-sm font-bold text-white transition-all duration-300 bg-red-600 rounded-full hover:bg-[#0a1628] hover:shadow-lg hover:-translate-y-0.5">
                    Get a Quote <i class="fas fa-arrow-right ml-2 text-xs"></i>
                </a>
                <button class="mobile-menu-btn"><i class="fas fa-bars-staggered"></i></button>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer border-t-[6px] border-red-600">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col pr-8">
                    <div class="flex items-center gap-2 mb-6">
                        <div class="w-8 h-8 bg-red-600 rounded flex items-center justify-center text-white">
                            <i class="fas fa-fire-alt"></i>
                        </div>
                        <h3 class="!mb-0 text-2xl font-black text-white">SRJ <span class="text-red-500">INDIA</span></h3>
                    </div>
                    <p class="text-slate-400 leading-relaxed mb-6">We deliver highly reliable plate heat exchangers and customized thermal engineering solutions for industrial applications worldwide, backed by 17+ years of expertise.</p>
                    <div class="flex gap-4">
                        <a href="#" class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center text-white hover:bg-red-600 transition-colors"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center text-white hover:bg-red-600 transition-colors"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center text-white hover:bg-red-600 transition-colors"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
                <div class="footer-col">
                    <h4 class="text-lg font-bold text-white uppercase tracking-wider">Quick Links</h4>
                    <div class="w-12 h-1 bg-red-600 rounded mb-6"></div>
                    <ul class="text-slate-400">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('about') }}">About Us</a></li>
                        <li><a href="{{ route('products.index') }}">Products</a></li>
                        <li><a href="{{ route('blog.index') }}">Latest News</a></li>
                        <li><a href="{{ route('contact') }}">Contact Us</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4 class="text-lg font-bold text-white uppercase tracking-wider">Solutions</h4>
                    <div class="w-12 h-1 bg-red-600 rounded mb-6"></div>
                    <ul class="text-slate-400">
                        <li><a href="#">Gasketed PHE</a></li>
                        <li><a href="#">Brazed PHE</a></li>
                        <li><a href="#">Welded PHE</a></li>
                        <li><a href="#">PHE Gaskets</a></li>
                        <li><a href="{{ route('replacement-parts') }}">Replacement Parts</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4 class="text-lg font-bold text-white uppercase tracking-wider">Contact Details</h4>
                    <div class="w-12 h-1 bg-red-600 rounded mb-6"></div>
                    <div class="space-y-4 text-slate-400">
                        <p class="flex items-start gap-3">
                            <i class="fas fa-map-marker-alt text-red-500 mt-1"></i> 
                            <span>{{ App\Models\Setting::get('address', 'A-1114, 11th Floor, I-Thum, A-40, Sector-62, Noida-201301') }}</span>
                        </p>
                        <p class="flex items-center gap-3">
                            <i class="fas fa-phone text-red-500"></i> 
                            <span>{{ App\Models\Setting::get('phone', '+(91)-9716115504') }}</span>
                        </p>
                        <p class="flex items-center gap-3">
                            <i class="fas fa-envelope text-red-500"></i> 
                            <span>{{ App\Models\Setting::get('email', 'info@srj.co.in') }}</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom border-t border-slate-800">
            <div class="container flex flex-col md:flex-row justify-between items-center gap-4 text-slate-500">
                <p>{{ App\Models\Setting::get('footer_text', '© ' . date('Y') . ' SRJ Heatt Exchangers India Pvt. Ltd. All Rights Reserved.') }}</p>
                <div class="flex gap-6 text-sm">
                    <a href="#" class="hover:text-white transition-colors">Privacy Policy</a>
                    <a href="#" class="hover:text-white transition-colors">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- WhatsApp Floating Button -->
    <a href="https://wa.me/{{ App\Models\Setting::get('whatsapp', '919716115504') }}" class="whatsapp-btn" target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        // Initialize AOS
        AOS.init({
            duration: 800,
            easing: 'ease-out-cubic',
            once: true,
            offset: 50,
        });

        // Sticky Header & Mobile Menu
        window.addEventListener('scroll', () => {
            document.querySelector('.header').classList.toggle('scrolled', window.scrollY > 20);
        });
        
        document.querySelector('.mobile-menu-btn').addEventListener('click', function() {
            const navLinks = document.querySelector('.nav-links');
            navLinks.classList.toggle('active');
            
            // Toggle icon
            const icon = this.querySelector('i');
            if (navLinks.classList.contains('active')) {
                icon.classList.remove('fa-bars-staggered');
                icon.classList.add('fa-times');
            } else {
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars-staggered');
            }
        });
    </script>
    @stack('scripts')
</body>
</html>
