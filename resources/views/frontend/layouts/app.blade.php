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
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Rajdhani:wght@500;600;700&family=Bebas+Neue&display=swap" rel="stylesheet">
    
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}?v={{ time() }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
</head>
<body>

    <!-- Topbar -->
    <div class="topbar">
        <div class="container topbar-inner">
            <div class="topbar-left">
                <a href="mailto:{{ App\Models\Setting::get('email') }}"><i class="fas fa-envelope"></i> {{ App\Models\Setting::get('email') }}</a>
                <a href="tel:{{ App\Models\Setting::get('phone') }}"><i class="fas fa-phone"></i> {{ App\Models\Setting::get('phone') }}</a>
            </div>
            <div class="topbar-right">
                <a href="{{ App\Models\Setting::get('facebook') }}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a href="{{ App\Models\Setting::get('twitter') }}" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="{{ App\Models\Setting::get('instagram') }}" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="{{ App\Models\Setting::get('youtube') }}" target="_blank"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </div>

    <!-- Header -->
    <header class="header">
        <div class="container header-inner">
            <div class="logo">
                <a href="{{ route('home') }}">
                    <h2>SRJ <span class="text-accent">HEAT EXCHANGERS</span></h2>
                </a>
            </div>
            <nav class="nav">
                <ul class="nav-links">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('about') }}">About Us</a></li>
                    <li class="has-dropdown">
                        <a href="{{ route('products.index') }}">Our Products <i class="fas fa-caret-down text-accent" style="font-size: 0.9em; margin-left:3px;"></i></a>
                        <ul class="dropdown-menu">
                            @foreach(App\Models\ProductCategory::where('is_active', true)->orderBy('order')->get() as $cat)
                                <li><a href="{{ route('products.category', $cat->slug) }}">{{ $cat->name }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="has-dropdown">
                        <a href="{{ route('replacement-parts') }}">Replacement Parts <i class="fas fa-caret-down text-accent" style="font-size: 0.9em; margin-left:3px;"></i></a>
                        <ul class="dropdown-menu">
                            @foreach(App\Models\ReplacementBrand::where('is_active', true)->orderBy('order')->get() as $brand)
                                <li><a href="{{ route('replacement-brand', $brand->slug) }}">{{ $brand->name }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li><a href="{{ route('blog.index') }}">Blog</a></li>
                    <li><a href="{{ route('contact') }}">Contact Us</a></li>
                </ul>
            </nav>
            <div class="header-action">
                <a href="{{ route('contact') }}" class="btn btn-primary">Get a Quote</a>
                <button class="mobile-menu-btn"><i class="fas fa-bars"></i></button>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <h3>SRJ HEAT EXCHANGERS</h3>
                    <p>We deliver reliable plate heat exchangers and customized solutions for industrial applications worldwide.</p>
                </div>
                <div class="footer-col">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('about') }}">About Us</a></li>
                        <li><a href="{{ route('products.index') }}">Products</a></li>
                        <li><a href="{{ route('contact') }}">Contact Us</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Products</h4>
                    <ul>
                        <li><a href="#">Gasketed PHE</a></li>
                        <li><a href="#">Brazed PHE</a></li>
                        <li><a href="#">Welded PHE</a></li>
                        <li><a href="{{ route('replacement-parts') }}">Replacement Parts</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Contact Details</h4>
                    <p><i class="fas fa-map-marker-alt"></i> {{ App\Models\Setting::get('address') }}</p>
                    <p><i class="fas fa-phone"></i> {{ App\Models\Setting::get('phone') }}</p>
                    <p><i class="fas fa-envelope"></i> {{ App\Models\Setting::get('email') }}</p>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <p>{{ App\Models\Setting::get('footer_text', '© 2026 SRJ Heatt Exchangers. All Rights Reserved.') }}</p>
            </div>
        </div>
    </footer>

    <!-- WhatsApp Floating Button -->
    <a href="https://wa.me/{{ App\Models\Setting::get('whatsapp') }}" class="whatsapp-btn" target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        // Simple sticky header & mobile menu toggle
        window.addEventListener('scroll', () => {
            document.querySelector('.header').classList.toggle('scrolled', window.scrollY > 50);
        });
        document.querySelector('.mobile-menu-btn').addEventListener('click', () => {
            document.querySelector('.nav-links').classList.toggle('active');
        });
    </script>
    @stack('scripts')
</body>
</html>
