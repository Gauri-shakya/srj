@extends('frontend.layouts.app')

@section('content')
<!-- Hero Section -->
<section class="hero-section relative">
    <!-- Slider main container -->
    <div class="swiper heroSwiper w-full h-full">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            @foreach($sliders as $slider)
            <div class="swiper-slide relative">
                <div class="hero-slide-bg" style="background-image: url('{{ $slider->image === 'sliders/default.jpg' ? 'https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&q=80&w=2000' : ($slider->image === 'sliders/default2.jpg' ? 'https://images.unsplash.com/photo-1504917595217-d4dc5ebe6122?auto=format&fit=crop&q=80&w=2000' : asset('storage/'.$slider->image)) }}')">
                </div>
                
                <!-- Premium Gradient Overlay -->
                <div class="hero-overlay"></div>
                
                <!-- Slide Content -->
                <div class="container hero-content-wrapper absolute inset-0 flex items-center z-10 px-6 lg:px-12">
                    <div class="hero-content max-w-3xl">
                        <div class="hero-badge inline-flex items-center gap-2 bg-white text-blue-900 px-5 py-2.5 rounded-full text-sm tracking-wider font-extrabold uppercase shadow-xl mb-6">
                            <span class="w-2.5 h-2.5 rounded-full bg-red-600 animate-pulse"></span>
                            Welcome to SRJ Heat Exchangers
                        </div>
                        
                        <div class="hero-text-block border-l-4 border-red-600 pl-6 mb-8">
                            <h1 class="hero-title text-5xl md:text-6xl lg:text-7xl font-black text-white leading-tight mb-4 drop-shadow-lg">
                                {{ $slider->title }}
                            </h1>
                            <p class="hero-subtitle text-lg md:text-xl text-blue-100 font-light max-w-2xl leading-relaxed drop-shadow-md">
                                {{ $slider->subtitle }}
                            </p>
                        </div>
                        
                        @if($slider->btn_text)
                        <div class="hero-btn mt-8">
                            <a href="{{ $slider->btn_link }}" class="group relative inline-flex items-center justify-center px-10 py-4 text-base font-bold text-white transition-all duration-500 bg-red-600 rounded-full overflow-hidden shadow-lg hover:shadow-red-600/50 hover:bg-blue-900 border-2 border-transparent hover:border-blue-900">
                                <span class="relative flex items-center gap-3">
                                    {{ $slider->btn_text }}
                                    <svg class="w-5 h-5 transition-transform duration-500 group-hover:translate-x-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                                </span>
                            </a>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
        <!-- Navigation Buttons -->
        <div class="hero-nav-wrapper absolute right-4 lg:right-10 bottom-8 lg:bottom-12 z-20 flex gap-4">
            <div class="hero-nav-btn swiper-button-prev-custom w-14 h-14 rounded-full bg-white/20 backdrop-blur-md border border-white/40 text-white flex items-center justify-center cursor-pointer hover:bg-red-600 hover:border-red-600 hover:text-white transition-all duration-300 shadow-xl">
                <i class="fas fa-chevron-left text-xl"></i>
            </div>
            <div class="hero-nav-btn swiper-button-next-custom w-14 h-14 rounded-full bg-white/20 backdrop-blur-md border border-white/40 text-white flex items-center justify-center cursor-pointer hover:bg-red-600 hover:border-red-600 hover:text-white transition-all duration-300 shadow-xl">
                <i class="fas fa-chevron-right text-xl"></i>
            </div>
        </div>
    </div>
</section>

@push('scripts')
<script>
    const swiper = new Swiper('.heroSwiper', {
        direction: 'horizontal',
        loop: true,
        speed: 1000,
        autoplay: {
            delay: 6000,
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

<!-- About Section -->
<section class="py-24 bg-white relative overflow-hidden">
    <div class="container mx-auto px-4 lg:px-8 relative z-10">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            
            <!-- Left: Text Content -->
            <div class="space-y-8">
                <div class="inline-flex items-center gap-3 px-5 py-2.5 rounded-full bg-blue-50 border border-blue-100 text-blue-900 font-bold text-sm tracking-widest uppercase shadow-sm">
                    <span class="flex h-3 w-3 relative">
                      <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-400 opacity-75"></span>
                      <span class="relative inline-flex rounded-full h-3 w-3 bg-red-600"></span>
                    </span>
                    About SRJ Heat Exchangers
                </div>
                
                <h2 class="text-4xl lg:text-5xl xl:text-6xl font-black text-blue-900 leading-tight">
                    Pioneering <span class="text-red-600">Thermal</span> Engineering.
                </h2>
                
                <p class="text-lg text-slate-600 leading-relaxed text-justify">
                    SRJ Heatt Exchangers India Pvt. Ltd. stands as a premier manufacturer and supplier of industrial Plate Heat Exchangers in India. Backed by <strong class="text-blue-900">17+ years of engineering excellence</strong>, we deliver high-performance PHE systems globally, tailored for rigorous industrial demands.
                </p>
                
                <!-- Premium Stats Grid -->
                <div class="grid grid-cols-3 gap-4 sm:gap-6 pt-6 border-t border-slate-100">
                    <div>
                        <h3 class="text-3xl sm:text-4xl font-black text-blue-900">17<span class="text-xl sm:text-2xl text-red-600">+</span></h3>
                        <p class="text-xs sm:text-sm font-bold text-slate-500 mt-2 uppercase tracking-wide">Years Exp.</p>
                    </div>
                    <div>
                        <h3 class="text-3xl sm:text-4xl font-black text-blue-900">2K<span class="text-xl sm:text-2xl text-red-600">+</span></h3>
                        <p class="text-xs sm:text-sm font-bold text-slate-500 mt-2 uppercase tracking-wide">Clients</p>
                    </div>
                    <div>
                        <h3 class="text-3xl sm:text-4xl font-black text-blue-900">ISO</h3>
                        <p class="text-xs sm:text-sm font-bold text-slate-500 mt-2 uppercase tracking-wide">9001:2015</p>
                    </div>
                </div>
                
                <div class="pt-6">
                    <a href="{{ route('about') }}" class="group relative inline-flex items-center justify-center px-8 py-4 font-bold text-white transition-all duration-300 bg-blue-900 rounded-full overflow-hidden hover:shadow-[0_0_40px_rgba(30,58,138,0.3)]">
                        <span class="absolute inset-0 w-full h-full transition-all duration-300 ease-out translate-x-full bg-red-600 group-hover:translate-x-0"></span>
                        <span class="relative flex items-center gap-2">
                            Explore Our Journey 
                            <svg class="w-5 h-5 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                        </span>
                    </a>
                </div>
            </div>
            
            <!-- Right: Premium Image Showcase -->
            <div class="relative mt-12 lg:mt-0">
                <!-- Abstract Glow -->
                <div class="absolute inset-0 bg-gradient-to-tr from-blue-900 to-red-600 rounded-full mix-blend-multiply filter blur-3xl opacity-10 animate-pulse hidden sm:block"></div>
                
                <div class="relative rounded-3xl overflow-hidden shadow-2xl border border-white/50 bg-white p-2 transform transition-transform duration-700 hover:scale-[1.02]">
                    <div class="absolute inset-0 bg-gradient-to-t from-blue-900/80 via-transparent to-transparent z-10 rounded-3xl pointer-events-none"></div>
                    <img src="https://images.unsplash.com/photo-1581092160562-40aa08e78837?auto=format&fit=crop&w=1000&q=80" alt="Heat Exchangers Manufacturing Facility" class="w-full h-[400px] sm:h-[500px] lg:h-[600px] object-cover rounded-2xl">
                    
                    <!-- Floating Quality Badge -->
                    <div class="absolute bottom-4 left-4 right-4 sm:bottom-8 sm:left-8 sm:right-8 z-20 bg-blue-900/40 backdrop-blur-md border border-white/20 p-4 sm:p-6 rounded-2xl shadow-xl flex items-center gap-4 sm:gap-5 transform sm:translate-y-4 sm:hover:translate-y-0 transition-transform duration-500">
                        <div class="w-12 h-12 sm:w-14 sm:h-14 bg-red-600 rounded-full flex items-center justify-center text-white shadow-lg shrink-0">
                            <svg class="w-6 h-6 sm:w-7 sm:h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.966 11.966 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                        </div>
                        <div>
                            <h4 class="text-white font-black text-lg sm:text-xl tracking-wide">100% Quality Assured</h4>
                            <p class="text-blue-100 text-xs sm:text-sm mt-1">Engineered to global standards.</p>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="py-24 bg-slate-50 relative">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-red-600 font-bold tracking-wider uppercase text-sm">Our Expertise</span>
            <h2 class="text-3xl md:text-5xl font-extrabold text-blue-900 mt-3 mb-6">Comprehensive Engineering Services</h2>
            <p class="text-slate-600 text-lg">Beyond manufacturing, we provide end-to-end support, maintenance, and replacement solutions for your thermal engineering needs.</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            @foreach($services as $service)
            <div class="group bg-white rounded-3xl p-8 shadow-sm hover:shadow-2xl transition-all duration-500 border border-slate-100 relative overflow-hidden transform hover:-translate-y-2">
                <div class="absolute top-0 right-0 w-32 h-32 bg-blue-50 rounded-full blur-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-500 -mr-10 -mt-10"></div>
                
                <div class="w-16 h-16 bg-blue-900 rounded-2xl flex items-center justify-center text-white text-2xl mb-6 shadow-lg group-hover:bg-red-600 group-hover:scale-110 transition-all duration-500">
                    <i class="{{ $service->icon }}"></i>
                </div>
                
                <h3 class="text-xl font-bold text-blue-900 mb-4 group-hover:text-red-600 transition-colors duration-300">{{ $service->title }}</h3>
                <p class="text-slate-600 text-sm leading-relaxed mb-6">{{ $service->short_description }}</p>
                
                <div class="w-10 h-1 bg-slate-200 rounded-full group-hover:w-full group-hover:bg-red-600 transition-all duration-500"></div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Why Choose Us Section (NEW) -->
<section class="py-24 bg-blue-900 text-white relative overflow-hidden">
    <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1581092580497-e0d23cbdf1dc?auto=format&fit=crop&q=80&w=2000')] bg-cover bg-center opacity-10 mix-blend-overlay"></div>
    <div class="absolute inset-0 bg-gradient-to-r from-blue-900 via-blue-900/90 to-transparent"></div>
    
    <div class="container mx-auto px-4 lg:px-8 relative z-10">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div>
                <span class="text-red-400 font-bold tracking-wider uppercase text-sm">Why Partner With Us</span>
                <h2 class="text-4xl md:text-5xl font-black mt-3 mb-8 leading-tight">Setting the Standard in Heat Transfer</h2>
                <p class="text-blue-100 text-lg mb-8 leading-relaxed">
                    We combine decades of technical expertise with state-of-the-art manufacturing to deliver heat exchangers that maximize efficiency and minimize downtime.
                </p>
                
                <div class="space-y-6">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 rounded-full bg-red-600 flex items-center justify-center shrink-0 shadow-lg">
                            <i class="fas fa-check text-white text-xl"></i>
                        </div>
                        <div>
                            <h4 class="text-xl font-bold mb-1">Precision Engineering</h4>
                            <p class="text-blue-200 text-sm">Custom-designed solutions optimized for your specific thermal requirements.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 rounded-full bg-red-600 flex items-center justify-center shrink-0 shadow-lg">
                            <i class="fas fa-shield-alt text-white text-xl"></i>
                        </div>
                        <div>
                            <h4 class="text-xl font-bold mb-1">Uncompromising Quality</h4>
                            <p class="text-blue-200 text-sm">Rigorous testing and ISO 9001:2015 certified manufacturing processes.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 rounded-full bg-red-600 flex items-center justify-center shrink-0 shadow-lg">
                            <i class="fas fa-globe text-white text-xl"></i>
                        </div>
                        <div>
                            <h4 class="text-xl font-bold mb-1">Global Support</h4>
                            <p class="text-blue-200 text-sm">Dedicated after-sales service and rapid supply of replacement parts worldwide.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="relative hidden lg:block">
                <div class="absolute inset-0 bg-blue-600 rounded-3xl transform rotate-6 opacity-50 blur-lg"></div>
                <img src="https://images.unsplash.com/photo-1565514020179-026b92b84bb6?auto=format&fit=crop&q=80&w=800" alt="Engineering Excellence" class="relative rounded-3xl border-4 border-blue-800 shadow-2xl">
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="py-24 bg-white relative">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-red-600 font-bold tracking-wider uppercase text-sm">Testimonials</span>
            <h2 class="text-3xl md:text-5xl font-extrabold text-blue-900 mt-3">Trusted by Industry Leaders</h2>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-6xl mx-auto">
            @foreach($testimonials as $testimonial)
            <div class="bg-slate-50 p-8 rounded-3xl border border-slate-100 relative group hover:shadow-2xl transition-all duration-300">
                <i class="fas fa-quote-right text-6xl text-blue-100 absolute top-8 right-8 group-hover:text-red-100 transition-colors duration-300"></i>
                <div class="flex text-amber-500 mb-6 text-sm">
                    @for($i=1; $i<=5; $i++)
                        <i class="fas fa-star {{ $i <= $testimonial->rating ? '' : 'text-slate-300' }}"></i>
                    @endfor
                </div>
                <p class="text-slate-700 text-lg italic mb-8 relative z-10 leading-relaxed">"{{ $testimonial->review }}"</p>
                <div class="flex items-center gap-5">
                    <div class="w-14 h-14 rounded-full bg-blue-900 text-white flex items-center justify-center font-bold text-2xl shadow-md">
                        {{ substr($testimonial->name, 0, 1) }}
                    </div>
                    <div>
                        <h4 class="font-bold text-blue-900 text-lg">{{ $testimonial->name }}</h4>
                        <p class="text-sm text-red-600 font-semibold">{{ $testimonial->company }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Lead Generation CTA Section -->
<section class="py-24 relative overflow-hidden bg-blue-900">
    <div class="absolute inset-0 bg-gradient-to-r from-blue-900 to-transparent z-10"></div>
    <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&q=80&w=2000')] bg-cover bg-center opacity-30"></div>
    
    <div class="container mx-auto px-4 relative z-20 text-center">
        <h2 class="text-4xl md:text-6xl font-black text-white mb-6">Need a Customized Heat Exchanger?</h2>
        <p class="text-xl text-blue-200 mb-10 max-w-2xl mx-auto font-light">Get expert technical support and the best pricing for your industrial requirements. Our engineering team is ready to help.</p>
        
        <a href="{{ route('contact') }}" class="group relative inline-flex items-center justify-center px-10 py-5 font-bold text-blue-900 transition-all duration-300 bg-white rounded-full overflow-hidden hover:shadow-[0_0_40px_rgba(220,38,38,0.5)]">
            <span class="absolute inset-0 w-full h-full transition-all duration-300 ease-out translate-x-full bg-red-600 group-hover:translate-x-0"></span>
            <span class="relative flex items-center gap-3 group-hover:text-white transition-colors duration-300">
                Request a Free Quote Now
                <svg class="w-6 h-6 animate-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
            </span>
        </a>
    </div>
</section>

@endsection
