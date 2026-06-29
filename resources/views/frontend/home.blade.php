@extends('frontend.layouts.app')

@section('content')
<!-- Hero Section -->
<section class="hero-section relative">
    <!-- Slider main container -->
    <div class="swiper heroSwiper w-full h-full">
        <div class="swiper-wrapper">
            @foreach($sliders as $slider)
            <div class="swiper-slide relative overflow-hidden">
                <div class="hero-slide-bg" style="background-image: url('{{ $slider->image === 'sliders/default.jpg' ? 'https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&q=80&w=2000' : ($slider->image === 'sliders/default2.jpg' ? 'https://images.unsplash.com/photo-1504917595217-d4dc5ebe6122?auto=format&fit=crop&q=80&w=2000' : asset('storage/'.$slider->image)) }}')">
                </div>
                
                <!-- Premium Gradient Overlay -->
                <div class="hero-overlay"></div>
                
                <!-- Slide Content -->
                <div class="container hero-content-wrapper absolute inset-0 flex items-center z-10 px-4 md:px-6 lg:px-12">
                    <div class="hero-content max-w-4xl mt-10 md:mt-16 w-full">
                        <div class="hero-badge inline-flex items-center gap-2 md:gap-3 glass text-white px-4 md:px-5 py-2 md:py-2.5 rounded-full text-[10px] md:text-xs tracking-[0.2em] font-bold uppercase shadow-xl mb-6 md:mb-8 border border-white/20">
                            <span class="relative flex h-3 w-3">
                              <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-400 opacity-75"></span>
                              <span class="relative inline-flex rounded-full h-3 w-3 bg-red-600"></span>
                            </span>
                            Welcome to SRJ Heat Exchangers
                        </div>
                        
                        <div class="hero-text-block border-l-4 border-red-600 pl-4 md:pl-8 mb-6 md:mb-10 bg-gradient-to-r from-[#0a1628]/90 to-transparent p-4 md:p-6 rounded-r-2xl backdrop-blur-sm border-y border-r border-white/5 w-[95%] md:w-full">
                            <h1 class="hero-title text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-black text-white leading-[1.1] mb-4 md:mb-6 drop-shadow-2xl font-['Rajdhani']">
                                {!! str_replace(['Thermal', 'Heat', 'Engineering'], ['<span class="text-transparent bg-clip-text bg-gradient-to-r from-red-500 to-red-600">Thermal</span>', '<span class="text-transparent bg-clip-text bg-gradient-to-r from-red-500 to-red-600">Heat</span>', '<span class="text-transparent bg-clip-text bg-gradient-to-r from-red-500 to-red-600">Engineering</span>'], $slider->title) !!}
                            </h1>
                            <p class="hero-subtitle text-base sm:text-lg md:text-xl text-slate-300 font-light max-w-2xl leading-relaxed drop-shadow-md border-l border-red-600/30 pl-3 md:pl-4">
                                {{ $slider->subtitle }}
                            </p>
                        </div>
                        
                        @if($slider->btn_text)
                        <div class="hero-btn flex flex-col sm:flex-row gap-4 items-stretch sm:items-center pl-4 md:pl-8 w-[95%] sm:w-full">
                            <a href="{{ $slider->btn_link }}" class="group relative inline-flex items-center justify-center px-8 md:px-10 py-3 md:py-4 text-sm tracking-wider font-bold text-white transition-all duration-500 bg-red-600 rounded-full overflow-hidden shadow-[0_0_20px_rgba(220,38,38,0.4)] hover:shadow-[0_0_30px_rgba(220,38,38,0.6)] hover:-translate-y-1">
                                <span class="absolute inset-0 w-full h-full -mt-1 rounded-lg opacity-30 bg-gradient-to-b from-transparent via-transparent to-black"></span>
                                <span class="relative flex items-center gap-3">
                                    {{ $slider->btn_text }}
                                    <svg class="w-4 h-4 transition-transform duration-500 group-hover:translate-x-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                                </span>
                            </a>
                            <a href="{{ route('about') }}" class="group inline-flex items-center justify-center px-8 py-3 md:py-4 text-sm tracking-wider font-bold text-white transition-all duration-300 border-2 border-white/30 hover:bg-white hover:text-[#0a1628] rounded-full">
                                Explore More
                            </a>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
        <!-- Navigation Buttons -->
        <div class="hero-nav-wrapper absolute right-4 lg:right-12 bottom-8 lg:bottom-12 z-20 flex gap-3">
            <div class="hero-nav-btn swiper-button-prev-custom w-14 h-14 rounded-full glass-dark text-white flex items-center justify-center cursor-pointer hover:bg-red-600 hover:border-red-600 transition-all duration-300 shadow-xl group">
                <i class="fas fa-arrow-left text-lg group-hover:-translate-x-1 transition-transform"></i>
            </div>
            <div class="hero-nav-btn swiper-button-next-custom w-14 h-14 rounded-full glass-dark text-white flex items-center justify-center cursor-pointer hover:bg-red-600 hover:border-red-600 transition-all duration-300 shadow-xl group">
                <i class="fas fa-arrow-right text-lg group-hover:translate-x-1 transition-transform"></i>
            </div>
        </div>
        
        <!-- Decorative Elements -->
        <div class="absolute left-0 bottom-0 w-full h-32 bg-gradient-to-t from-slate-50 to-transparent z-10 pointer-events-none"></div>
    </div>
</section>

@push('scripts')
<script>
    const swiper = new Swiper('.heroSwiper', {
        direction: 'horizontal',
        loop: true,
        speed: 1200,
        autoplay: {
            delay: 7000,
            disableOnInteraction: false,
        },
        effect: 'fade',
        fadeEffect: {
            crossFade: true
        },
        navigation: {
            nextEl: '.swiper-button-next-custom',
            prevEl: '.swiper-button-prev-custom',
        },
    });
</script>
@endpush

<!-- Stats Section -->
<section class="py-12 my-6 bg-white relative z-20 -mt-16 mx-4 lg:mx-auto max-w-7xl rounded-2xl shadow-[0_20px_50px_rgba(10,22,40,0.06)] border border-slate-100">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 divide-x divide-slate-100">
            <div class="text-center px-4" data-aos="fade-up" data-aos-delay="100">
                <h3 class="text-4xl lg:text-5xl font-black text-[#0a1628] mb-2">17<span class="text-red-600">+</span></h3>
                <p class="text-xs font-bold text-slate-400 uppercase tracking-widest">Years Experience</p>
            </div>
            <div class="text-center px-4" data-aos="fade-up" data-aos-delay="200">
                <h3 class="text-4xl lg:text-5xl font-black text-[#0a1628] mb-2">2K<span class="text-red-600">+</span></h3>
                <p class="text-xs font-bold text-slate-400 uppercase tracking-widest">Happy Clients</p>
            </div>
            <div class="text-center px-4" data-aos="fade-up" data-aos-delay="300">
                <h3 class="text-4xl lg:text-5xl font-black text-[#0a1628] mb-2">50<span class="text-red-600">+</span></h3>
                <p class="text-xs font-bold text-slate-400 uppercase tracking-widest">Product Types</p>
            </div>
            <div class="text-center px-4" data-aos="fade-up" data-aos-delay="400">
                <h3 class="text-4xl lg:text-5xl font-black text-[#0a1628] mb-2">ISO</h3>
                <p class="text-xs font-bold text-slate-400 uppercase tracking-widest">9001:2015 Certified</p>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="py-24 relative overflow-hidden bg-slate-50">
    <!-- Abstract Shapes -->
    <div class="absolute top-0 right-0 w-[800px] h-[800px] bg-red-50 rounded-full blur-[100px] opacity-60 -translate-y-1/2 translate-x-1/3"></div>
    <div class="absolute bottom-0 left-0 w-[600px] h-[600px] bg-blue-50 rounded-full blur-[80px] opacity-60 translate-y-1/2 -translate-x-1/3"></div>

    <div class="container mx-auto px-4 lg:px-8 relative z-10">
        <div class="grid lg:grid-cols-2 gap-16 lg:gap-24 items-center">
            
            <!-- Left: Premium Image Showcase -->
            <div class="relative" data-aos="fade-right">
                <!-- Main Image -->
                <div class="relative rounded-3xl overflow-hidden shadow-2xl z-20 border-8 border-white group">
                    <div class="absolute inset-0 bg-[#0a1628]/20 group-hover:bg-transparent transition-colors duration-500 z-10 pointer-events-none"></div>
                    <img src="https://images.unsplash.com/photo-1581092160562-40aa08e78837?auto=format&fit=crop&w=1000&q=80" alt="Heat Exchangers Manufacturing Facility" class="w-full h-[500px] object-cover transform group-hover:scale-105 transition-transform duration-700">
                </div>
                
                <!-- Floating Small Image -->
                <div class="absolute -bottom-10 -right-10 w-2/3 rounded-2xl overflow-hidden shadow-2xl z-30 border-8 border-white group hidden sm:block" data-aos="fade-up" data-aos-delay="200">
                    <img src="https://images.unsplash.com/photo-1504917595217-d4dc5ebe6122?auto=format&fit=crop&q=80&w=800" alt="Precision Engineering" class="w-full h-64 object-cover transform group-hover:scale-110 transition-transform duration-700">
                </div>
                
                <!-- Floating Quality Badge -->
                <div class="absolute top-10 -left-8 z-30 bg-white p-5 rounded-2xl shadow-[0_15px_35px_rgba(0,0,0,0.1)] flex items-center gap-4 animate-[float_5s_ease-in-out_infinite]">
                    <div class="w-12 h-12 bg-red-600 rounded-full flex items-center justify-center text-white shadow-lg">
                        <i class="fas fa-award text-xl"></i>
                    </div>
                    <div>
                        <h4 class="text-[#0a1628] font-black text-lg">Premium Quality</h4>
                        <p class="text-slate-500 text-xs font-bold uppercase tracking-wider">Guaranteed</p>
                    </div>
                </div>
            </div>
            
            <!-- Right: Text Content -->
            <div class="space-y-8" data-aos="fade-left">
                <div>
                    <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-red-50 text-red-600 font-bold text-xs tracking-[0.2em] uppercase mb-4 border border-red-100">
                        <i class="fas fa-fire-alt"></i> About SRJ Heat Exchangers
                    </div>
                    <h2 class="text-4xl lg:text-5xl xl:text-6xl font-black text-[#0a1628] leading-[1.1]">
                        Pioneering <span class="text-transparent bg-clip-text bg-gradient-to-r from-red-600 to-red-400">Thermal</span> Engineering in India.
                    </h2>
                </div>
                
                <p class="text-lg text-slate-600 leading-relaxed text-justify">
                    SRJ Heatt Exchangers India Pvt. Ltd. stands as a premier manufacturer and supplier of industrial Plate Heat Exchangers. Backed by <strong class="text-[#0a1628]">17+ years of engineering excellence</strong>, we deliver high-performance PHE systems globally, tailored for rigorous industrial demands.
                </p>
                
                <ul class="space-y-4">
                    <li class="flex items-start gap-4">
                        <div class="mt-1 w-6 h-6 rounded-full bg-red-100 flex items-center justify-center text-red-600 shrink-0">
                            <i class="fas fa-check text-xs"></i>
                        </div>
                        <p class="text-slate-700 font-medium">In-house advanced manufacturing facility with modern CNC tooling.</p>
                    </li>
                    <li class="flex items-start gap-4">
                        <div class="mt-1 w-6 h-6 rounded-full bg-red-100 flex items-center justify-center text-red-600 shrink-0">
                            <i class="fas fa-check text-xs"></i>
                        </div>
                        <p class="text-slate-700 font-medium">OEM-compatible replacement parts for all major global brands.</p>
                    </li>
                    <li class="flex items-start gap-4">
                        <div class="mt-1 w-6 h-6 rounded-full bg-red-100 flex items-center justify-center text-red-600 shrink-0">
                            <i class="fas fa-check text-xs"></i>
                        </div>
                        <p class="text-slate-700 font-medium">Strict ISO 9001:2015 certified quality control and testing.</p>
                    </li>
                </ul>
                
                <div class="pt-6">
                    <a href="{{ route('about') }}" class="group relative inline-flex items-center justify-center px-8 py-4 text-sm font-bold tracking-widest uppercase text-white transition-all duration-300 bg-[#0a1628] rounded-full overflow-hidden shadow-lg hover:shadow-[0_0_20px_rgba(10,22,40,0.4)] hover:-translate-y-1">
                        <span class="absolute inset-0 w-full h-full transition-all duration-300 ease-out translate-x-full bg-red-600 group-hover:translate-x-0"></span>
                        <span class="relative flex items-center gap-3">
                            Discover Our Story
                            <i class="fas fa-arrow-right"></i>
                        </span>
                    </a>
                </div>
            </div>
            
        </div>
    </div>
</section>

<!-- Services / Features Section -->
<section class="py-24 bg-white relative">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
            <span class="text-red-600 font-bold tracking-[0.2em] uppercase text-xs">Our Expertise</span>
            <h2 class="text-4xl md:text-5xl font-black text-[#0a1628] mt-3 mb-6">Comprehensive Engineering Services</h2>
            <p class="text-slate-500 text-lg">Beyond manufacturing, we provide end-to-end support, maintenance, and replacement solutions for your thermal engineering needs.</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach($services as $index => $service)
            <div class="group bg-slate-50 rounded-2xl p-8 hover:bg-[#0a1628] transition-colors duration-500 border border-slate-100 hover:border-[#0a1628] relative overflow-hidden flex flex-col items-start h-full" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                <!-- Abstract Glow on Hover -->
                <div class="absolute -right-20 -top-20 w-40 h-40 bg-red-600 rounded-full blur-[50px] opacity-0 group-hover:opacity-40 transition-opacity duration-500"></div>
                
                <div class="w-16 h-16 bg-white group-hover:bg-red-600 rounded-xl flex items-center justify-center text-[#0a1628] group-hover:text-white text-2xl mb-8 shadow-sm group-hover:shadow-lg group-hover:shadow-red-600/40 transition-all duration-500 group-hover:-translate-y-2 group-hover:rotate-6">
                    <i class="{{ $service->icon }}"></i>
                </div>
                
                <h3 class="text-xl font-bold text-[#0a1628] mb-4 group-hover:text-white transition-colors duration-300">{{ $service->title }}</h3>
                <p class="text-slate-500 text-sm leading-relaxed mb-8 group-hover:text-slate-300 transition-colors duration-300 flex-grow">{{ $service->short_description }}</p>
                
                <div class="w-12 h-1 bg-red-100 group-hover:bg-red-600 rounded-full transition-all duration-500 mt-auto"></div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Why Choose Us / Dark Banner Section -->
<section class="py-24 bg-[#0a1628] text-white relative overflow-hidden">
    <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1581092580497-e0d23cbdf1dc?auto=format&fit=crop&q=80&w=2000')] bg-cover bg-center opacity-5 mix-blend-screen"></div>
    <div class="absolute right-0 top-0 w-1/2 h-full bg-gradient-to-l from-red-600/20 to-transparent"></div>
    
    <div class="container mx-auto px-4 lg:px-8 relative z-10">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div data-aos="fade-right">
                <span class="inline-block px-3 py-1 bg-white/10 backdrop-blur-sm rounded-full text-red-400 font-bold tracking-widest uppercase text-xs mb-6 border border-white/10">Why Partner With Us</span>
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-black mt-2 mb-8 leading-[1.1] font-['Rajdhani']">Setting the Standard in <br/><span class="text-red-500">Heat Transfer.</span></h2>
                <p class="text-slate-300 text-lg mb-10 leading-relaxed font-light">
                    We combine decades of technical expertise with state-of-the-art manufacturing to deliver heat exchangers that maximize efficiency and minimize downtime.
                </p>
                
                <div class="space-y-6">
                    <div class="flex items-start gap-5 group">
                        <div class="w-14 h-14 rounded-xl bg-white/5 border border-white/10 flex items-center justify-center shrink-0 shadow-lg group-hover:bg-red-600 group-hover:border-red-600 transition-colors duration-300">
                            <i class="fas fa-cog text-red-500 text-xl group-hover:text-white transition-colors duration-300 group-hover:animate-spin-slow"></i>
                        </div>
                        <div>
                            <h4 class="text-xl font-bold mb-2">Precision Engineering</h4>
                            <p class="text-slate-400 text-sm leading-relaxed">Custom-designed solutions optimized for your specific thermal requirements using advanced software.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-5 group">
                        <div class="w-14 h-14 rounded-xl bg-white/5 border border-white/10 flex items-center justify-center shrink-0 shadow-lg group-hover:bg-red-600 group-hover:border-red-600 transition-colors duration-300">
                            <i class="fas fa-shield-alt text-red-500 text-xl group-hover:text-white transition-colors duration-300"></i>
                        </div>
                        <div>
                            <h4 class="text-xl font-bold mb-2">Uncompromising Quality</h4>
                            <p class="text-slate-400 text-sm leading-relaxed">Rigorous testing protocols and ISO 9001:2015 certified manufacturing processes for zero defects.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="relative hidden lg:block" data-aos="fade-left" data-aos-delay="200">
                <div class="absolute inset-0 bg-red-600 rounded-3xl transform rotate-3 opacity-20 blur-xl"></div>
                <div class="relative rounded-3xl overflow-hidden border border-white/10 shadow-2xl p-2 bg-white/5 backdrop-blur-sm">
                    <img src="https://images.unsplash.com/photo-1565514020179-026b92b84bb6?auto=format&fit=crop&q=80&w=800" alt="Engineering Excellence" class="rounded-2xl object-cover h-[500px] w-full">
                    
                    <!-- Floating stat -->
                    <div class="absolute bottom-6 left-6 right-6 glass p-6 rounded-xl flex items-center justify-between">
                        <div>
                            <div class="text-xs font-bold text-slate-800 uppercase tracking-widest mb-1">Success Rate</div>
                            <div class="text-3xl font-black text-red-600">99.8%</div>
                        </div>
                        <div class="w-12 h-12 rounded-full bg-[#0a1628] flex items-center justify-center text-white">
                            <i class="fas fa-chart-line"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="py-24 bg-slate-50 relative overflow-hidden">
    <!-- Decorative background elements -->
    <div class="absolute top-0 left-0 w-full h-1/2 bg-white z-0"></div>
    <div class="absolute right-0 bottom-0 opacity-5 w-64 h-64 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAiIGhlaWdodD0iMjAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGNpcmNsZSBjeD0iMiIgY3k9IjIiIHI9IjIiIGZpbGw9IiMwYTE2MjgiIGZpbGwtcnVsZT0iZXZlbm9kZCIvPjwvc3ZnPg==')] z-0"></div>

    <div class="container mx-auto px-4 lg:px-8 relative z-10">
        <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-6" data-aos="fade-up">
            <div class="max-w-2xl">
                <span class="text-red-600 font-bold tracking-[0.2em] uppercase text-xs">Testimonials</span>
                <h2 class="text-4xl md:text-5xl font-black text-[#0a1628] mt-3">Trusted by Industry Leaders</h2>
            </div>
            <div class="flex gap-2">
                <div class="testimonial-prev w-12 h-12 rounded-full bg-white shadow-md flex items-center justify-center text-[#0a1628] hover:bg-red-600 hover:text-white transition-colors cursor-pointer border border-slate-100"><i class="fas fa-arrow-left"></i></div>
                <div class="testimonial-next w-12 h-12 rounded-full bg-white shadow-md flex items-center justify-center text-[#0a1628] hover:bg-red-600 hover:text-white transition-colors cursor-pointer border border-slate-100"><i class="fas fa-arrow-right"></i></div>
            </div>
        </div>
        
        <div class="swiper testimonialSwiper !pb-12" data-aos="fade-up" data-aos-delay="200">
            <div class="swiper-wrapper">
                @foreach($testimonials as $testimonial)
                <div class="swiper-slide h-auto">
                    <div class="bg-white p-10 rounded-3xl shadow-[0_10px_40px_-10px_rgba(0,0,0,0.05)] border border-slate-100 relative group h-full flex flex-col transition-all duration-300 hover:shadow-[0_20px_50px_-10px_rgba(10,22,40,0.1)] hover:-translate-y-1">
                        <i class="fas fa-quote-right text-5xl text-slate-100 absolute top-10 right-10 group-hover:text-red-50 transition-colors duration-300"></i>
                        <div class="flex text-amber-400 mb-6 text-sm gap-1">
                            @for($i=1; $i<=5; $i++)
                                <i class="fas fa-star {{ $i <= $testimonial->rating ? '' : 'text-slate-200' }}"></i>
                            @endfor
                        </div>
                        <p class="text-slate-600 text-lg leading-relaxed flex-grow font-light">"{{ $testimonial->review }}"</p>
                        
                        <div class="flex items-center gap-4 mt-8 pt-6 border-t border-slate-100">
                            <div class="w-14 h-14 rounded-full bg-gradient-to-br from-[#0a1628] to-red-600 text-white flex items-center justify-center font-bold text-xl shadow-md shrink-0">
                                {{ substr($testimonial->name, 0, 1) }}
                            </div>
                            <div>
                                <h4 class="font-bold text-[#0a1628] text-lg leading-tight">{{ $testimonial->name }}</h4>
                                <p class="text-xs text-red-600 font-bold uppercase tracking-wider mt-1">{{ $testimonial->company }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

@push('scripts')
<script>
    const testSwiper = new Swiper('.testimonialSwiper', {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: '.testimonial-next',
            prevEl: '.testimonial-prev',
        },
        breakpoints: {
            768: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3,
            },
        }
    });
</script>
@endpush

<!-- Lead Generation CTA Section -->
<section class="py-24 relative overflow-hidden bg-[#0a1628] mt-10" data-aos="fade-up">
    <div class="absolute inset-0 bg-gradient-to-r from-red-600/90 to-[#0a1628]/90 z-10 mix-blend-multiply"></div>
    <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&q=80&w=2000')] bg-cover bg-fixed bg-center opacity-40"></div>
    
    <div class="container mx-auto px-4 relative z-20">
        <div class="max-w-4xl mx-auto text-center glass-dark p-12 lg:p-16 rounded-3xl border border-white/10 shadow-[0_20px_50px_rgba(0,0,0,0.5)]">
            <span class="inline-block px-4 py-1.5 bg-red-600 text-white font-bold tracking-widest uppercase text-xs rounded-full mb-6">Let's Work Together</span>
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-black text-white mb-6 leading-tight font-['Rajdhani']">Need a Customized <br/><span class="text-transparent bg-clip-text bg-gradient-to-r from-red-400 to-red-600">Heat Exchanger?</span></h2>
            <p class="text-xl text-slate-300 mb-10 max-w-2xl mx-auto font-light leading-relaxed">Get expert technical support and the best pricing for your industrial requirements. Our engineering team is ready to help you optimize.</p>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center w-full">
                <a href="{{ route('contact') }}" class="w-full sm:w-auto group relative inline-flex items-center justify-center px-8 py-4 text-sm font-bold tracking-widest uppercase text-white transition-all duration-300 bg-red-600 rounded-full overflow-hidden hover:shadow-[0_0_30px_rgba(220,38,38,0.5)] hover:-translate-y-1">
                    <span class="absolute inset-0 w-full h-full transition-all duration-300 ease-out translate-x-full bg-white group-hover:translate-x-0"></span>
                    <span class="relative flex items-center gap-3 group-hover:text-red-600 transition-colors duration-300">
                        Request a Free Quote
                        <i class="fas fa-paper-plane group-hover:animate-bounce"></i>
                    </span>
                </a>
                <a href="tel:{{ App\Models\Setting::get('phone', '9716115504') }}" class="w-full sm:w-auto group relative inline-flex items-center justify-center px-8 py-4 text-sm font-bold tracking-widest uppercase text-white transition-all duration-300 border-2 border-white/20 rounded-full hover:bg-white hover:text-[#0a1628] hover:-translate-y-1">
                    <span class="relative flex items-center gap-3">
                        <i class="fas fa-phone-alt"></i> Call Us Now
                    </span>
                </a>
            </div>
        </div>
    </div>
</section>

@endsection
