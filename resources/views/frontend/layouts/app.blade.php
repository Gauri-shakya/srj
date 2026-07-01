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
    
    <!-- Tailwind CSS CDN (For instant updates without npm run build) -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio"></script>
    
    @stack('styles')
</head>
<body class="bg-slate-50 text-slate-800 antialiased selection:bg-red-600 selection:text-white">

    <!-- Topbar -->
    <div class="topbar">
        <div class="w-full px-[5%] topbar-inner mx-auto flex justify-between items-center gap-4">
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
        <div class="w-full px-[5%] header-inner mx-auto flex justify-between items-center gap-6 xl:gap-12">
            <div class="logo shrink-0">
                <a href="{{ route('home') }}" class="flex items-center gap-2 group">
                    <!-- Website Logo Image -->
                    <img src="{{ asset('logo.png') }}" alt="SRJ Heat Exchangers" class="h-8 md:h-12 object-contain">
                </a>
            </div>
            <nav class="nav">
                <ul class="nav-links">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('about') }}">About Us</a></li>
                    <li class="has-dropdown">
                        <a href="{{ route('products.index') }}" class="flex items-center justify-between lg:justify-start gap-1">Our Products <i class="fas fa-chevron-down text-[10px] text-red-600"></i></a>
                        <ul class="dropdown-menu">
                            @foreach(App\Models\Product::where('is_active', true)->get() as $product)
                                <li><a href="{{ route('products.show', $product->slug) }}">{{ $product->name }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li><a href="{{ route('home') }}">SRJ Heat Exchangers</a></li>
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
                    <li class="lg:hidden mt-4 mobile-btn">
                        <a href="{{ route('contact') }}" class="inline-flex items-center justify-center px-8 py-3 text-sm font-bold text-white bg-red-600 rounded-full shadow-lg w-full !border-none !justify-center hover:bg-[#0a1628] transition-colors">
                            Get Quote Now <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="header-action flex items-center justify-end gap-4 shrink-0">
                <a href="{{ route('contact') }}" class="hidden lg:inline-flex items-center justify-center px-5 py-2 text-sm font-bold text-white transition-all duration-300 bg-red-600 rounded-full hover:bg-[#0a1628] hover:shadow-lg hover:-translate-y-0.5">
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
    <footer class="footer border-t-[4px] border-red-600 bg-[#0a1628] relative pt-16">
        <!-- Dotted Map Background Effect -->
        <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1524661135-423995f22d0b?auto=format&fit=crop&q=80&w=2000')] bg-cover bg-center opacity-5 mix-blend-screen pointer-events-none"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-[#0a1628] via-[#0a1628]/95 to-transparent z-0"></div>
        
        <div class="container mx-auto px-4 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-10 lg:gap-8 pb-12">
                
                <!-- Col 1: About & Make In India (3 cols) -->
                <div class="lg:col-span-3">
                    <div class="mb-6">
                        <!-- Replace with real logo -->
                        <img src="{{ asset('logo.png') }}" alt="SRJ Plate Heat Exchangers" class="h-10 object-contain bg-white/10 p-2 rounded backdrop-blur-sm border border-white/10" onerror="this.src='https://via.placeholder.com/150x50/ffffff/000000?text=SRJ+LOGO'">
                    </div>
                    <p class="text-slate-400 text-sm leading-relaxed mb-6 font-light">
                        With 17+ years of experience, crafts high-quality PHE plates and gaskets in India. With our own factory and advanced software, we deliver reliable, efficient solutions for all industries.
                    </p>
                    <div class="inline-block mt-2">
                        <img src="https://upload.wikimedia.org/wikipedia/en/thumb/1/1b/Make_In_India.svg/256px-Make_In_India.svg.png" alt="Make in India" class="h-16 object-contain">
                    </div>
                </div>

                <!-- Col 2: Products (3 cols) -->
                <div class="lg:col-span-3">
                    <h4 class="text-xl font-bold text-white mb-2 font-['Rajdhani']">Products</h4>
                    <div class="w-12 h-[2px] bg-red-600 rounded mb-6"></div>
                    <ul class="text-slate-400 text-sm space-y-3">
                        <li><a href="#" class="hover:text-white transition-colors flex items-center gap-2 group"><i class="fas fa-chevron-right text-[10px] text-red-600 group-hover:translate-x-1 transition-transform"></i> Gasketed Plate Heat Exchangers</a></li>
                        <li><a href="#" class="hover:text-white transition-colors flex items-center gap-2 group"><i class="fas fa-chevron-right text-[10px] text-red-600 group-hover:translate-x-1 transition-transform"></i> Semi Welded Plate Heat Exchangers</a></li>
                        <li><a href="#" class="text-red-500 font-medium transition-colors flex items-center gap-2 group"><i class="fas fa-chevron-right text-[10px] text-red-600 group-hover:translate-x-1 transition-transform"></i> Welded Plate Heat Exchangers</a></li>
                        <li><a href="#" class="hover:text-white transition-colors flex items-center gap-2 group"><i class="fas fa-chevron-right text-[10px] text-red-600 group-hover:translate-x-1 transition-transform"></i> Wide Gap Plate Heat Exchangers</a></li>
                        <li><a href="#" class="hover:text-white transition-colors flex items-center gap-2 group"><i class="fas fa-chevron-right text-[10px] text-red-600 group-hover:translate-x-1 transition-transform"></i> Brazed Plate Heat Exchangers</a></li>
                        <li><a href="#" class="hover:text-white transition-colors flex items-center gap-2 group"><i class="fas fa-chevron-right text-[10px] text-red-600 group-hover:translate-x-1 transition-transform"></i> Spiral Heat Exchangers</a></li>
                    </ul>
                </div>

                <!-- Col 3: Quick Links (3 cols) -->
                <div class="lg:col-span-3">
                    <h4 class="text-xl font-bold text-white mb-2 font-['Rajdhani']">Quick Links</h4>
                    <div class="w-12 h-[2px] bg-red-600 rounded mb-6"></div>
                    <ul class="text-slate-400 text-sm space-y-3">
                        <li><a href="{{ route('home') }}" class="hover:text-white transition-colors flex items-center gap-2 group"><i class="fas fa-chevron-right text-[10px] text-red-600 group-hover:translate-x-1 transition-transform"></i> Home</a></li>
                        <li><a href="{{ route('about') }}" class="hover:text-white transition-colors flex items-center gap-2 group"><i class="fas fa-chevron-right text-[10px] text-red-600 group-hover:translate-x-1 transition-transform"></i> About Us</a></li>
                        <li><a href="{{ route('blog.index') }}" class="hover:text-white transition-colors flex items-center gap-2 group"><i class="fas fa-chevron-right text-[10px] text-red-600 group-hover:translate-x-1 transition-transform"></i> Blog</a></li>
                        <li><a href="{{ route('contact') }}" class="hover:text-white transition-colors flex items-center gap-2 group"><i class="fas fa-chevron-right text-[10px] text-red-600 group-hover:translate-x-1 transition-transform"></i> Contact Us</a></li>
                        <li><a href="#" class="hover:text-white transition-colors flex items-center gap-2 group"><i class="fas fa-chevron-right text-[10px] text-red-600 group-hover:translate-x-1 transition-transform"></i> Privacy Policy</a></li>
                        <li><a href="#" class="hover:text-white transition-colors flex items-center gap-2 group"><i class="fas fa-chevron-right text-[10px] text-red-600 group-hover:translate-x-1 transition-transform"></i> Cookies Policy</a></li>
                        <li><a href="#" class="hover:text-white transition-colors flex items-center gap-2 group"><i class="fas fa-chevron-right text-[10px] text-red-600 group-hover:translate-x-1 transition-transform"></i> Legal Terms and Conditions</a></li>
                    </ul>
                </div>

                <!-- Col 4: Contact Details (3 cols) -->
                <div class="lg:col-span-3">
                    <h4 class="text-xl font-bold text-white mb-2 font-['Rajdhani']">Contact Details</h4>
                    <div class="w-12 h-[2px] bg-red-600 rounded mb-6"></div>
                    <div class="space-y-4 text-slate-400 text-sm">
                        <p class="flex items-start gap-3">
                            <i class="fas fa-map-marker-alt text-slate-500 mt-1"></i> 
                            <span>{{ App\Models\Setting::get('address', 'A-1114, 11th Floor, I-Thum, A-40, Sector - 62, Noida - 201301') }}</span>
                        </p>
                        <p class="flex items-center gap-3">
                            <i class="fas fa-phone-alt text-slate-500"></i> 
                            <span>Phone: {{ App\Models\Setting::get('phone', '+(91)-9716115504') }}</span>
                        </p>
                        <p class="flex items-center gap-3">
                            <i class="fas fa-building text-slate-500"></i> 
                            <span>01204533028</span>
                        </p>
                        <p class="flex items-center gap-3">
                            <i class="fas fa-envelope text-slate-500"></i> 
                            <a href="mailto:{{ App\Models\Setting::get('email', 'info@srj.co.in') }}" class="hover:text-white transition-colors">{{ App\Models\Setting::get('email', 'info@srj.co.in') }}</a>
                        </p>
                    </div>
                    
                    <!-- Social Icons -->
                    <div class="flex flex-wrap gap-2 mt-8">
                        <a href="{{ App\Models\Setting::get('facebook') }}" class="w-8 h-8 rounded border border-white/20 flex items-center justify-center text-slate-400 hover:text-white hover:bg-red-600 hover:border-red-600 transition-all"><i class="fab fa-facebook-f text-xs"></i></a>
                        <a href="{{ App\Models\Setting::get('instagram') }}" class="w-8 h-8 rounded border border-white/20 flex items-center justify-center text-slate-400 hover:text-white hover:bg-red-600 hover:border-red-600 transition-all"><i class="fab fa-instagram text-xs"></i></a>
                        <a href="{{ App\Models\Setting::get('twitter') }}" class="w-8 h-8 rounded border border-white/20 flex items-center justify-center text-slate-400 hover:text-white hover:bg-red-600 hover:border-red-600 transition-all"><i class="fab fa-twitter text-xs"></i></a>
                        <a href="{{ App\Models\Setting::get('youtube') }}" class="w-8 h-8 rounded border border-white/20 flex items-center justify-center text-slate-400 hover:text-white hover:bg-red-600 hover:border-red-600 transition-all"><i class="fab fa-youtube text-xs"></i></a>
                        <a href="#" class="w-8 h-8 rounded border border-white/20 flex items-center justify-center text-slate-400 hover:text-white hover:bg-red-600 hover:border-red-600 transition-all"><i class="fab fa-pinterest-p text-xs"></i></a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Footer Bottom -->
        <div class="border-t border-white/10 relative z-10 bg-black/30">
            <div class="container mx-auto px-4 py-4 text-center text-slate-500 text-sm font-light">
                <p>{{ App\Models\Setting::get('footer_text', '© ' . date('Y') . ' SRJ Heat Exchangers. All Rights Reserved.') }}</p>
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

        // Mobile dropdown toggles
        document.querySelectorAll('.has-dropdown > a').forEach(item => {
            item.addEventListener('click', function(e) {
                if (window.innerWidth <= 1024) {
                    e.preventDefault();
                    this.parentElement.classList.toggle('active-dropdown');
                }
            });
        });
    </script>
    @stack('scripts')
</body>
</html>
