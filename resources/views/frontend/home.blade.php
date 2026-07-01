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
                        
                        <div class="hero-text-block border-l-4 border-red-600 pl-4 md:pl-8 mb-6 md:mb-8 bg-gradient-to-r from-[#0a1628]/90 to-transparent p-4 md:p-6 rounded-r-2xl backdrop-blur-md border-y border-r border-white/10 w-full max-w-3xl">
                            <h1 class="hero-title text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-black text-white leading-[1.1] mb-3 md:mb-5 drop-shadow-2xl font-['Rajdhani']">
                                {!! str_replace(['Thermal', 'Heat', 'Engineering'], ['<span class="text-transparent bg-clip-text bg-gradient-to-r from-red-500 to-red-600">Thermal</span>', '<span class="text-transparent bg-clip-text bg-gradient-to-r from-red-500 to-red-600">Heat</span>', '<span class="text-transparent bg-clip-text bg-gradient-to-r from-red-500 to-red-600">Engineering</span>'], $slider->title) !!}
                            </h1>
                            <p class="hero-subtitle text-base sm:text-lg md:text-xl text-slate-300 font-light max-w-2xl leading-relaxed drop-shadow-md border-l border-red-600/30 pl-3 md:pl-4">
                                {{ $slider->subtitle }}
                            </p>
                        </div>
                        
                        @if($slider->btn_text)
                        <div class="hero-btn flex flex-wrap gap-4 items-center pl-4 md:pl-8 mt-2 xl:mb-8 md:mt-4">
                            <a href="{{ $slider->btn_link }}" class="group relative inline-flex items-center justify-center px-6 md:px-8 py-2.5 md:py-3 text-xs md:text-sm tracking-widest uppercase font-bold text-white transition-all duration-300 bg-red-600 rounded-full overflow-hidden shadow-lg hover:shadow-red-600/50 hover:-translate-y-0.5 border border-red-500">
                                <span class="relative flex items-center gap-2">
                                    {{ $slider->btn_text }}
                                    <i class="fas fa-arrow-right text-xs transition-transform duration-300 group-hover:translate-x-1"></i>
                                </span>
                            </a>
                            <a href="{{ route('about') }}" class="group inline-flex items-center justify-center px-6 md:px-8 py-2.5 md:py-3 text-xs md:text-sm tracking-widest uppercase font-bold text-white transition-all duration-300 bg-white/10 backdrop-blur-md border border-white/30 hover:bg-white hover:text-[#0a1628] rounded-full shadow-lg">
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
        <div class="absolute inset-y-0 left-2 md:left-6 z-20 flex items-center pointer-events-none">
            <div class="swiper-button-prev-custom w-10 h-10 md:w-12 md:h-12 rounded-full bg-black/40 backdrop-blur-md text-white flex items-center justify-center cursor-pointer hover:bg-red-600 hover:scale-110 transition-all duration-300 shadow-lg border border-white/20 pointer-events-auto">
                <i class="fas fa-chevron-left text-sm md:text-base"></i>
            </div>
        </div>
        <div class="absolute inset-y-0 right-2 md:right-6 z-20 flex items-center pointer-events-none">
            <div class="swiper-button-next-custom w-10 h-10 md:w-12 md:h-12 rounded-full bg-black/40 backdrop-blur-md text-white flex items-center justify-center cursor-pointer hover:bg-red-600 hover:scale-110 transition-all duration-300 shadow-lg border border-white/20 pointer-events-auto">
                <i class="fas fa-chevron-right text-sm md:text-base"></i>
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
<section class="py-10 bg-white relative z-20 -mt-16 mb-8 mx-4 lg:mx-auto max-w-7xl rounded-2xl shadow-[0_20px_50px_rgba(10,22,40,0.06)] border border-slate-100">
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
<section class="py-16 relative overflow-hidden bg-slate-50">
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
            <div class="space-y-5" data-aos="fade-left">
                <div>
                    <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-red-50 text-red-600 font-bold text-[10px] sm:text-xs tracking-wider uppercase mb-3 border border-red-100">
                        <i class="fas fa-fire-alt"></i> 17+ Years Experience as a Plate Heat Exchanger Manufacturer in India
                    </div>
                    <h2 class="text-3xl lg:text-4xl font-black text-[#0a1628] leading-[1.2]">
                        Plate Heat Exchanger Manufacturers & <br class="hidden lg:block">Plate Heat Exchanger Supplier in India
                    </h2>
                </div>
                
                <div class="text-sm sm:text-base text-slate-600 leading-relaxed text-justify space-y-3 font-medium">
                    <p>
                        <strong class="text-[#0a1628]">SRJ Heatt Exchangers India Pvt. Ltd.</strong> is one of the leading plate heat exchanger manufacturers and plate heat exchanger supplier in India with more than 17 years of experience in designing and manufacturing industrial plate heat exchangers and plate heat exchanger PHE systems for multiple industries.
                    </p>
                    <p>
                        With advanced engineering design and in-house manufacturing facilities, we produce high-quality plate heat exchanger gasket, plate heat exchanger plates, and complete plate heat exchanger PHE solutions designed for HVAC systems, industrial cooling, and plate heat exchanger chiller applications. We produce precision-engineered PHE plates and gaskets that meet consistent quality, performance, and durability standards across industrial applications.
                    </p>
                    <p>
                        We manufacture OEM compatible replacement parts and supply industrial plate heat exchangers used in HVAC, food processing, dairy plants, and energy systems including plate heat exchanger for milk pasteurization and plate heat exchanger in milk processing industries. Our plate heat exchangers are designed for high thermal efficiency, competitive plate heat exchanger price, easy plate heat exchanger cleaning, and reliable operation across HVAC, power, chemical, pharmaceutical, and food processing industries.
                    </p>
                   
                </div>
                
                <div class="pt-4">
                    <a href="{{ route('about') }}" class="group relative inline-flex items-center justify-center px-6 py-3 text-sm font-bold tracking-widest uppercase text-white transition-all duration-300 bg-[#0a1628] rounded-full overflow-hidden shadow-lg hover:shadow-[0_0_20px_rgba(10,22,40,0.4)] hover:-translate-y-1">
                        <span class="absolute inset-0 w-full h-full transition-all duration-300 ease-out translate-x-full bg-red-600 group-hover:translate-x-0"></span>
                        <span class="relative flex items-center gap-2">
                            Discover Our Story
                            <i class="fas fa-arrow-right text-xs"></i>
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

<!-- Why Partner With Us / Leading Manufacturers Section -->
<section class="py-20 bg-[#405063] text-white relative overflow-hidden">
    <!-- Abstract circular background lines (simulated with CSS/SVG) -->
    <div class="absolute inset-0 opacity-10 pointer-events-none">
        <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
            <circle cx="0" cy="50" r="40" fill="none" stroke="white" stroke-width="0.2" />
            <circle cx="0" cy="50" r="60" fill="none" stroke="white" stroke-width="0.2" />
            <circle cx="0" cy="50" r="80" fill="none" stroke="white" stroke-width="0.2" />
            <circle cx="0" cy="50" r="100" fill="none" stroke="white" stroke-width="0.2" />
            <circle cx="0" cy="50" r="120" fill="none" stroke="white" stroke-width="0.2" />
        </svg>
    </div>
    
    <div class="container mx-auto px-4 lg:px-8 relative z-10">
        <div class="mb-12" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-bold mb-4 leading-tight font-['Rajdhani']">
                Why We Are the Leading <br/>
                <span class="text-red-500">Plate Heat Exchanger</span> Manufacturers <span class="text-red-500">in India</span>
            </h2>
            <p class="text-slate-200 text-sm md:text-base max-w-3xl leading-relaxed font-light">
                We are a trusted plate heat exchanger supplier providing high quality plate heat exchangers, plate heat exchanger gasket solutions, and precision engineered PHE components for industrial applications in India.
            </p>
        </div>

        <div class="grid lg:grid-cols-12 gap-10 items-center">
            <!-- Left: List Items (Takes up 7 cols) -->
            <div class="lg:col-span-7 space-y-4" data-aos="fade-right">
                
                <!-- Item 1 -->
                <div class="flex items-center gap-4 py-2 border-b border-white/10 group">
                    <div class="w-12 h-12 rounded bg-white/20 flex items-center justify-center text-white text-xl font-bold shrink-0">
                        01
                    </div>
                    <p class="text-slate-200 text-xs md:text-sm leading-relaxed">
                        Our industrial plate heat exchangers use precision plate thickness from 0.4mm to 1.0mm ensuring reliable heat transfer and long term performance.
                    </p>
                </div>
                
                <!-- Item 2 -->
                <div class="flex items-center gap-4 py-2 border-b border-white/10 group">
                    <div class="w-12 h-12 rounded bg-white/20 flex items-center justify-center text-white text-xl font-bold shrink-0">
                        02
                    </div>
                    <p class="text-slate-200 text-xs md:text-sm leading-relaxed">
                        Strict quality control ensures smooth plate heat exchanger gasket surfaces for reliable sealing and efficient thermal performance.
                    </p>
                </div>

                <!-- Item 3 -->
                <div class="flex items-center gap-4 py-2 border-b border-white/10 group">
                    <div class="w-12 h-12 rounded bg-white/20 flex items-center justify-center text-white text-xl font-bold shrink-0">
                        03
                    </div>
                    <p class="text-slate-200 text-xs md:text-sm leading-relaxed">
                        Advanced engineering software supports accurate plate heat exchanger drawing and customized design for industrial applications.
                    </p>
                </div>

                <!-- Item 4 -->
                <div class="flex items-center gap-4 py-2 border-b border-white/10 group">
                    <div class="w-12 h-12 rounded bg-white/20 flex items-center justify-center text-white text-xl font-bold shrink-0">
                        04
                    </div>
                    <p class="text-slate-200 text-xs md:text-sm leading-relaxed">
                        Our in-house manufacturing facility produces durable plate heat exchangers designed for HVAC systems and plate heat exchanger chiller applications.
                    </p>
                </div>

                <!-- Item 5 -->
                <div class="flex items-center gap-4 py-2 border-b border-white/10 group">
                    <div class="w-12 h-12 rounded bg-white/20 flex items-center justify-center text-white text-xl font-bold shrink-0">
                        05
                    </div>
                    <p class="text-slate-200 text-xs md:text-sm leading-relaxed">
                        Each batch is tested for quality and easy plate heat exchanger cleaning ensuring reliable operation and long service life.
                    </p>
                </div>

            </div>
            
            <!-- Right: Image (Takes up 5 cols) -->
            <div class="lg:col-span-5 relative" data-aos="fade-left" data-aos-delay="200">
                <div class="rounded-xl overflow-hidden shadow-2xl bg-white/10 p-1">
                    <img src="https://images.unsplash.com/photo-1504328345606-18bbc8c9d7d1?auto=format&fit=crop&q=80&w=800" alt="Warehouse Engineering" class="rounded-lg object-cover w-full h-[300px] md:h-[400px]">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-24 bg-white border-t border-slate-100">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="grid lg:grid-cols-12 gap-12 items-start">
            
            <!-- Left Image (5 cols) -->
            <div class="lg:col-span-5" data-aos="fade-right">
                <div class="rounded-2xl overflow-hidden shadow-2xl relative bg-gradient-to-br from-[#0a1628] to-red-700 border-8 border-slate-50 group">
                    <!-- Simulated question mark -->
                    <div class="absolute top-12 left-1/2 -translate-x-1/2 text-white/90 text-[10rem] font-black z-10 drop-shadow-[0_10px_20px_rgba(0,0,0,0.5)] leading-none group-hover:scale-110 transition-transform duration-500">?</div>
                    <!-- Industrial Machine image -->
                    <img src="https://images.unsplash.com/photo-1581092160562-40aa08e78837?auto=format&fit=crop&w=800&q=80" alt="Heat Exchanger FAQ" class="w-full h-[550px] object-cover opacity-50 mix-blend-overlay group-hover:mix-blend-normal group-hover:opacity-90 transition-all duration-700">
                </div>
            </div>
            
            <!-- Right Content (7 cols) -->
            <div class="lg:col-span-7" data-aos="fade-left">
                <h2 class="text-3xl md:text-4xl font-bold text-[#0a1628] mb-10 leading-tight">
                    Plate Heat Exchanger Frequently Asked <br>
                    <span class="text-red-600">Questions</span>
                </h2>
                
                <div class="space-y-3">
                    <!-- FAQ Item 1 -->
                    <details class="group border border-slate-200 rounded-xl bg-slate-50 overflow-hidden [&_summary::-webkit-details-marker]:hidden shadow-sm hover:shadow-md transition-shadow">
                        <summary class="flex items-center justify-between cursor-pointer p-5 font-bold text-slate-700 hover:text-red-600 transition-colors">
                            <span class="text-sm md:text-base">1. What is a plate heat exchanger?</span>
                            <span class="transition-transform duration-300 group-open:-rotate-180 text-slate-400 group-hover:text-red-600">
                                <i class="fas fa-chevron-down text-sm"></i>
                            </span>
                        </summary>
                        <div class="p-5 pt-0 text-slate-500 text-sm leading-relaxed border-t border-slate-100 bg-white">
                            A plate heat exchanger is a type of heat exchanger that uses metal plates to transfer heat between two fluids. This has a major advantage over a conventional heat exchanger in that the fluids are exposed to a much larger surface area because the fluids spread out over the plates.
                        </div>
                    </details>
                    
                    <!-- FAQ Item 2 -->
                    <details class="group border border-slate-200 rounded-xl bg-slate-50 overflow-hidden [&_summary::-webkit-details-marker]:hidden shadow-sm hover:shadow-md transition-shadow">
                        <summary class="flex items-center justify-between cursor-pointer p-5 font-bold text-slate-700 hover:text-red-600 transition-colors">
                            <span class="text-sm md:text-base">2. What is the plate heat exchanger working principle?</span>
                            <span class="transition-transform duration-300 group-open:-rotate-180 text-slate-400 group-hover:text-red-600">
                                <i class="fas fa-chevron-down text-sm"></i>
                            </span>
                        </summary>
                        <div class="p-5 pt-0 text-slate-500 text-sm leading-relaxed border-t border-slate-100 bg-white">
                            The working principle involves two fluids passing through alternating channels formed by corrugated plates. Heat is transferred from the hot fluid to the cold fluid through the thin metal plates without the fluids ever mixing.
                        </div>
                    </details>

                    <!-- FAQ Item 3 -->
                    <details class="group border border-slate-200 rounded-xl bg-slate-50 overflow-hidden [&_summary::-webkit-details-marker]:hidden shadow-sm hover:shadow-md transition-shadow">
                        <summary class="flex items-center justify-between cursor-pointer p-5 font-bold text-slate-700 hover:text-red-600 transition-colors">
                            <span class="text-sm md:text-base">3. Which Industries use plate heat exchangers?</span>
                            <span class="transition-transform duration-300 group-open:-rotate-180 text-slate-400 group-hover:text-red-600">
                                <i class="fas fa-chevron-down text-sm"></i>
                            </span>
                        </summary>
                        <div class="p-5 pt-0 text-slate-500 text-sm leading-relaxed border-t border-slate-100 bg-white">
                            They are widely used in HVAC, chemical processing, food and beverage, dairy, marine, power generation, and pharmaceutical industries due to their high efficiency and compact size.
                        </div>
                    </details>

                    <!-- FAQ Item 4 -->
                    <details class="group border border-slate-200 rounded-xl bg-slate-50 overflow-hidden [&_summary::-webkit-details-marker]:hidden shadow-sm hover:shadow-md transition-shadow">
                        <summary class="flex items-center justify-between cursor-pointer p-5 font-bold text-slate-700 hover:text-red-600 transition-colors">
                            <span class="text-sm md:text-base">4. Are you plate heat exchanger manufacturers in India?</span>
                            <span class="transition-transform duration-300 group-open:-rotate-180 text-slate-400 group-hover:text-red-600">
                                <i class="fas fa-chevron-down text-sm"></i>
                            </span>
                        </summary>
                        <div class="p-5 pt-0 text-slate-500 text-sm leading-relaxed border-t border-slate-100 bg-white">
                            Yes, SRJ Heat Exchangers is a leading manufacturer of premium quality plate heat exchangers and replacement parts based in India with our own advanced manufacturing facility.
                        </div>
                    </details>

                    <!-- FAQ Item 5 -->
                    <details class="group border border-slate-200 rounded-xl bg-slate-50 overflow-hidden [&_summary::-webkit-details-marker]:hidden shadow-sm hover:shadow-md transition-shadow">
                        <summary class="flex items-center justify-between cursor-pointer p-5 font-bold text-slate-700 hover:text-red-600 transition-colors">
                            <span class="text-sm md:text-base">5. Do you supply plate heat exchanger gasket and replacement plates?</span>
                            <span class="transition-transform duration-300 group-open:-rotate-180 text-slate-400 group-hover:text-red-600">
                                <i class="fas fa-chevron-down text-sm"></i>
                            </span>
                        </summary>
                        <div class="p-5 pt-0 text-slate-500 text-sm leading-relaxed border-t border-slate-100 bg-white">
                            Yes, we manufacture and supply OEM-quality replacement gaskets and plates compatible with all major global brands like Alfa Laval, GEA, Tranter, and more.
                        </div>
                    </details>

                    <!-- FAQ Item 6 -->
                    <details class="group border border-slate-200 rounded-xl bg-slate-50 overflow-hidden [&_summary::-webkit-details-marker]:hidden shadow-sm hover:shadow-md transition-shadow">
                        <summary class="flex items-center justify-between cursor-pointer p-5 font-bold text-slate-700 hover:text-red-600 transition-colors">
                            <span class="text-sm md:text-base">6. How can I get plate heat exchanger price and quotation?</span>
                            <span class="transition-transform duration-300 group-open:-rotate-180 text-slate-400 group-hover:text-red-600">
                                <i class="fas fa-chevron-down text-sm"></i>
                            </span>
                        </summary>
                        <div class="p-5 pt-0 text-slate-500 text-sm leading-relaxed border-t border-slate-100 bg-white">
                            You can easily request a quote by clicking the "Get a Quote" button on our website, filling out the contact form, or directly calling our sales team with your specific requirements.
                        </div>
                    </details>

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
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="text-red-600 font-bold tracking-[0.2em] uppercase text-xs">Testimonials</span>
            <h2 class="text-4xl md:text-5xl font-black text-[#0a1628] mt-3">Trusted by Industry Leaders</h2>
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
            delay: 3000,
            disableOnInteraction: false,
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
