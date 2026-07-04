@extends('frontend.layouts.app')

@section('content')
<!-- Hero Section -->
<section class="hero-section relative">
    <!-- Slider main container -->
    <div class="swiper heroSwiper w-full h-full">
        <div class="swiper-wrapper">
            @foreach($sliders as $slider)
            <div class="swiper-slide relative overflow-hidden">
                <img src="{{ $slider->image === 'sliders/default.jpg' ? 'https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&q=80&w=2000' : ($slider->image === 'sliders/default2.jpg' ? 'https://images.unsplash.com/photo-1504917595217-d4dc5ebe6122?auto=format&fit=crop&q=80&w=2000' : asset('storage/'.$slider->image)) }}"
                     alt="{{ $slider->alt_text ?? $slider->title }}"
                     loading="{{ $loop->first ? 'eager' : 'lazy' }}"
                     class="hero-slide-bg absolute inset-0 w-full h-full object-cover">
                
                <!-- Premium Gradient Overlay -->
                <div class="hero-overlay"></div>
                
                <!-- Slide Content -->
                <div class="container hero-content-wrapper absolute inset-0 flex items-center z-10 px-4 md:px-6 lg:px-12 pb-24 md:pb-32">
                    <div class="hero-content max-w-4xl mt-10 md:mt-12 w-full">
                        <div class="hero-badge inline-flex items-center gap-2 md:gap-3 glass text-red-600 px-4 md:px-5 py-2 md:py-2.5 rounded-full text-[10px] md:text-xs tracking-[0.2em] font-bold uppercase shadow-xl mb-6 md:mb-8 border border-white/20">
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
                        
                        <div class="hero-btn flex flex-wrap gap-4 items-center pl-4 md:pl-8 mt-2 xl:mb-8 md:mt-4">
                            <a href="{{ route('contact') }}" class="group relative inline-flex items-center justify-center px-6 md:px-8 py-2.5 md:py-3 text-xs md:text-sm tracking-widest uppercase font-bold text-white transition-all duration-300 bg-red-600 rounded-full overflow-hidden shadow-lg hover:shadow-red-600/50 hover:-translate-y-0.5 border border-red-500">
                                <span class="relative flex items-center gap-2">
                                    Contact Us
                                    <i class="fas fa-arrow-right text-xs transition-transform duration-300 group-hover:translate-x-1"></i>
                                </span>
                            </a>
                            <a href="{{ route('about') }}" class="group inline-flex items-center justify-center px-6 md:px-8 py-2.5 md:py-3 text-xs md:text-sm tracking-widest uppercase font-bold text-white transition-all duration-300 bg-white/10 backdrop-blur-md border border-white/30 hover:bg-white hover:text-[#0a1628] rounded-full shadow-lg">
                                Explore More
                            </a>
                        </div>
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
<section class="py-24 bg-slate-50 relative">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
            <span class="text-red-600 font-bold tracking-[0.2em] uppercase text-xs">Our Expertise</span>
            <h2 class="text-4xl md:text-5xl font-black text-[#0a1628] mt-3 mb-6">Comprehensive Engineering Services</h2>
            <p class="text-slate-500 text-lg">Beyond manufacturing, we provide end-to-end support, maintenance, and replacement solutions for your thermal engineering needs.</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach($services as $index => $service)
            <div class="group bg-white rounded-2xl p-8 transition-all duration-500 border border-slate-100 shadow-[0_4px_20px_rgba(0,0,0,0.04)] hover:shadow-[0_20px_40px_rgba(220,38,38,0.08)] hover:border-red-100 hover:-translate-y-2 relative overflow-hidden flex flex-col items-start h-full" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                <!-- Top accent line -->
                <div class="absolute top-0 left-0 w-0 h-1 bg-red-600 transition-all duration-500 group-hover:w-full"></div>
                
                <div class="w-16 h-16 bg-slate-50 group-hover:bg-red-600 rounded-2xl flex items-center justify-center text-[#0a1628] group-hover:text-white text-2xl mb-8 shadow-sm group-hover:shadow-lg group-hover:shadow-red-600/40 transition-all duration-500 group-hover:scale-110">
                    <i class="{{ $service->icon }}"></i>
                </div>
                
                <h3 class="text-xl font-bold text-[#0a1628] mb-4 transition-colors duration-300 group-hover:text-red-600">{{ $service->title }}</h3>
                <p class="text-slate-500 text-sm leading-relaxed mb-8 transition-colors duration-300 flex-grow">{{ $service->short_description }}</p>
                
                <div class="w-12 h-1 bg-red-100 group-hover:bg-red-600 group-hover:w-20 rounded-full transition-all duration-500 mt-auto"></div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Why Partner With Us / Leading Manufacturers Section -->
<section class="py-24 relative overflow-hidden bg-slate-50">
    <!-- Background Image with Light Overlay -->
    <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&q=80&w=2000" alt="Industrial Background" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-slate-50/90 backdrop-blur-sm"></div>
    </div>
    
    <div class="container mx-auto px-4 lg:px-8 relative z-10">
        <div class="grid lg:grid-cols-12 gap-12 lg:gap-8 items-start">
            
            <!-- Left: Text Content (5 cols) -->
            <div class="lg:col-span-5 space-y-6 lg:sticky lg:top-32" data-aos="fade-right">
                <span class="inline-block px-4 py-1.5 bg-white text-[#0a1628] font-bold tracking-[0.2em] uppercase text-xs rounded-full shadow-sm border border-slate-200">
                    Why Choose Us
                </span>
                
                <h2 class="text-4xl md:text-5xl font-black text-[#0a1628] leading-[1.1] font-['Rajdhani']">
                    Why We Are the Leading <br/>
                    <span class="text-red-600">Plate Heat Exchanger</span> Manufacturers in India
                </h2>
                
                <p class="text-slate-600 text-lg leading-relaxed font-medium">
                    We are a trusted plate heat exchanger supplier providing high quality plate heat exchangers, plate heat exchanger gasket solutions, and precision engineered PHE components for industrial applications in India.
                </p>
                
                <div class="pt-4">
                    <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 font-bold text-red-600 hover:text-[#0a1628] transition-colors uppercase tracking-wider text-sm">
                        Partner With Us <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            
            <!-- Right: Grid of Cards (7 cols) -->
            <div class="lg:col-span-7" data-aos="fade-left">
                <div class="grid sm:grid-cols-2 gap-4 lg:gap-6">
                    
                    <!-- Card 1 -->
                    <div class="bg-white/80 backdrop-blur-md p-6 rounded-2xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border border-white hover:border-red-100 hover:shadow-[0_8px_30px_rgb(220,38,38,0.08)] transition-all duration-300 group">
                        <div class="w-12 h-12 bg-[#0a1628] rounded-xl flex items-center justify-center text-white text-xl mb-5 group-hover:bg-red-600 transition-colors">
                            <i class="fas fa-ruler-combined"></i>
                        </div>
                        <h4 class="text-xl font-bold text-[#0a1628] mb-3">Precision Thickness</h4>
                        <p class="text-slate-600 text-sm leading-relaxed">
                            Our industrial plate heat exchangers use precision plate thickness from 0.4mm to 1.0mm ensuring reliable heat transfer and long term performance.
                        </p>
                    </div>

                    <!-- Card 2 -->
                    <div class="bg-white/80 backdrop-blur-md p-6 rounded-2xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border border-white hover:border-red-100 hover:shadow-[0_8px_30px_rgb(220,38,38,0.08)] transition-all duration-300 group">
                        <div class="w-12 h-12 bg-[#0a1628] rounded-xl flex items-center justify-center text-white text-xl mb-5 group-hover:bg-red-600 transition-colors">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h4 class="text-xl font-bold text-[#0a1628] mb-3">Strict Quality Control</h4>
                        <p class="text-slate-600 text-sm leading-relaxed">
                            Strict quality control ensures smooth plate heat exchanger gasket surfaces for reliable sealing and efficient thermal performance.
                        </p>
                    </div>

                    <!-- Card 3 -->
                    <div class="bg-white/80 backdrop-blur-md p-6 rounded-2xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border border-white hover:border-red-100 hover:shadow-[0_8px_30px_rgb(220,38,38,0.08)] transition-all duration-300 group">
                        <div class="w-12 h-12 bg-[#0a1628] rounded-xl flex items-center justify-center text-white text-xl mb-5 group-hover:bg-red-600 transition-colors">
                            <i class="fas fa-laptop-code"></i>
                        </div>
                        <h4 class="text-xl font-bold text-[#0a1628] mb-3">Advanced Engineering</h4>
                        <p class="text-slate-600 text-sm leading-relaxed">
                            Advanced engineering software supports accurate plate heat exchanger drawing and customized design for industrial applications.
                        </p>
                    </div>

                    <!-- Card 4 -->
                    <div class="bg-white/80 backdrop-blur-md p-6 rounded-2xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border border-white hover:border-red-100 hover:shadow-[0_8px_30px_rgb(220,38,38,0.08)] transition-all duration-300 group">
                        <div class="w-12 h-12 bg-[#0a1628] rounded-xl flex items-center justify-center text-white text-xl mb-5 group-hover:bg-red-600 transition-colors">
                            <i class="fas fa-industry"></i>
                        </div>
                        <h4 class="text-xl font-bold text-[#0a1628] mb-3">In-House Manufacturing</h4>
                        <p class="text-slate-600 text-sm leading-relaxed">
                            Our in-house manufacturing facility produces durable plate heat exchangers designed for HVAC systems and plate heat exchanger chiller applications.
                        </p>
                    </div>

                    <!-- Card 5 (Full Width) -->
                    <div class="sm:col-span-2 bg-white/80 backdrop-blur-md p-6 sm:p-8 rounded-2xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border border-white hover:border-red-100 hover:shadow-[0_8px_30px_rgb(220,38,38,0.08)] transition-all duration-300 group flex flex-col sm:flex-row gap-6 items-start sm:items-center">
                        <div class="w-14 h-14 bg-[#0a1628] rounded-xl flex items-center justify-center text-white text-2xl shrink-0 group-hover:bg-red-600 transition-colors">
                            <i class="fas fa-clipboard-check"></i>
                        </div>
                        <div>
                            <h4 class="text-xl font-bold text-[#0a1628] mb-2">Thorough Testing & Reliability</h4>
                            <p class="text-slate-600 text-sm leading-relaxed">
                                Each batch is tested for quality and easy plate heat exchanger cleaning ensuring reliable operation and long service life.
                            </p>
                        </div>
                    </div>
                    
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
                
                <div class="space-y-3" id="faq-container">
                    @forelse($homeFaqs as $index => $faq)
                        <details class="group border border-slate-200 rounded-xl bg-slate-50 overflow-hidden [&_summary::-webkit-details-marker]:hidden shadow-sm hover:shadow-md transition-shadow {{ $index >= 6 ? 'hidden extra-faq' : '' }}">
                            <summary class="flex items-center justify-between cursor-pointer p-5 font-bold text-slate-700 hover:text-red-600 transition-colors">
                                <span class="text-sm md:text-base">{{ $index + 1 }}. {{ $faq->question }}</span>
                                <span class="transition-transform duration-300 group-open:-rotate-180 text-slate-400 group-hover:text-red-600">
                                    <i class="fas fa-chevron-down text-sm"></i>
                                </span>
                            </summary>
                            <div class="p-5 pt-0 text-slate-500 text-sm leading-relaxed border-t border-slate-100 bg-white prose-p:my-0 prose-ul:my-0">
                                {!! $faq->answer !!}
                            </div>
                        </details>
                    @empty
                        <p class="text-slate-500">No FAQs available yet.</p>
                    @endforelse
                </div>

                @if(isset($homeFaqs) && $homeFaqs->count() > 6)
                    <div class="mt-6 text-center">
                        <button id="load-more-faqs" class="inline-flex items-center justify-center w-12 h-12 bg-red-600 text-white rounded-full shadow-lg hover:bg-[#0a1628] hover:-translate-y-1 transition-all duration-300" title="Show More FAQs">
                            <i class="fas fa-plus text-xl"></i>
                        </button>
                    </div>

                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            const loadMoreBtn = document.getElementById('load-more-faqs');
                            const extraFaqs = document.querySelectorAll('.extra-faq');
                            let isExpanded = false;

                            if(loadMoreBtn) {
                                loadMoreBtn.addEventListener('click', function() {
                                    isExpanded = !isExpanded;
                                    extraFaqs.forEach(faq => {
                                        if(isExpanded) {
                                            faq.classList.remove('hidden');
                                        } else {
                                            faq.classList.add('hidden');
                                        }
                                    });
                                    
                                    if(isExpanded) {
                                        loadMoreBtn.innerHTML = '<i class="fas fa-minus text-xl"></i>';
                                        loadMoreBtn.setAttribute('title', 'Show Less FAQs');
                                    } else {
                                        loadMoreBtn.innerHTML = '<i class="fas fa-plus text-xl"></i>';
                                        loadMoreBtn.setAttribute('title', 'Show More FAQs');
                                    }
                                });
                            }
                        });
                    </script>
                @endif
            </div>
            
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="py-24 bg-slate-50 relative overflow-hidden">
    <!-- Decorative background elements -->
    <div class="absolute right-0 bottom-0 opacity-5 w-64 h-64 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAiIGhlaWdodD0iMjAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGNpcmNsZSBjeD0iMiIgY3k9IjIiIHI9IjIiIGZpbGw9IiMwYTE2MjgiIGZpbGwtcnVsZT0iZXZlbm9kZCIvPjwvc3ZnPg==')] z-0"></div>

    <div class="container mx-auto px-4 lg:px-8 relative z-10">
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="text-red-600 font-bold tracking-[0.2em] uppercase text-xs">Testimonials</span>
            <h2 class="text-4xl md:text-5xl font-black text-[#0a1628] mt-3">Customer Feedback</h2>
            <p class="text-slate-500 text-lg mt-4 max-w-2xl mx-auto">
                Our customers inspire us every day! Here's what they're saying about their experience and the difference our products make.
            </p>
        </div>
        
        <div class="relative lg:px-12">
            <!-- Swiper Navigation Arrows -->
            <div class="swiper-button-prev !hidden lg:!flex !left-0 !w-12 !h-12 bg-white border border-slate-200 rounded-full shadow-lg !text-slate-800 after:!content-[''] hover:bg-slate-50 hover:!text-red-600 transition-colors flex items-center justify-center">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"></path></svg>
            </div>
            <div class="swiper-button-next !hidden lg:!flex !right-0 !w-12 !h-12 bg-white border border-slate-200 rounded-full shadow-lg !text-slate-800 after:!content-[''] hover:bg-slate-50 hover:!text-red-600 transition-colors flex items-center justify-center">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"></path></svg>
            </div>
            
            <div class="swiper testimonialSwiper !pb-14" data-aos="fade-up" data-aos-delay="200">
                <div class="swiper-wrapper">
                    @foreach($testimonials as $testimonial)
                    @php
                        // Generate a color based on first letter for initials
                        $colors = ['bg-red-600', 'bg-blue-600', 'bg-emerald-600', 'bg-amber-500', 'bg-purple-600', 'bg-pink-600'];
                        $initial = strtoupper(substr($testimonial->name, 0, 1));
                        $colorIndex = ord($initial) % count($colors);
                        $avatarBg = $colors[$colorIndex];
                    @endphp
                    <div class="swiper-slide h-auto">
                        <div class="bg-white p-6 rounded-xl shadow-[0_10px_20px_rgba(0,0,0,0.15)] flex flex-col h-[280px]">
                            
                            <!-- Header: Avatar, Name, Time, Google Logo -->
                            <div class="flex items-start justify-between mb-4">
                                <div class="flex gap-3 items-center">
                                    @if($testimonial->image)
                                        <img src="{{ Storage::url($testimonial->image) }}" alt="{{ $testimonial->name }}" class="w-12 h-12 rounded-full object-cover">
                                    @else
                                        <div class="w-12 h-12 rounded-full {{ $avatarBg }} text-white flex items-center justify-center font-bold text-xl shrink-0">
                                            {{ $initial }}
                                        </div>
                                    @endif
                                    <div>
                                        <h4 class="font-bold text-blue-600 text-[15px] leading-tight">{{ $testimonial->name }}</h4>
                                        <p class="text-[13px] text-slate-500 mt-0.5">{{ $testimonial->time_ago ?? 'A few days ago' }}</p>
                                    </div>
                                </div>
                                <div class="shrink-0 mt-1">
                                    <!-- Simple Google G Logo SVG -->
                                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/>
                                        <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/>
                                        <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/>
                                        <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/>
                                    </svg>
                                </div>
                            </div>

                            <!-- Stars -->
                            <div class="flex text-amber-500 mb-3 gap-0.5 text-sm">
                                @for($i=1; $i<=5; $i++)
                                    <i class="fas fa-star {{ $i <= $testimonial->rating ? '' : 'text-slate-200' }}"></i>
                                @endfor
                            </div>

                            <!-- Review Text with Custom Scrollbar -->
                            <div class="flex-grow overflow-y-auto pr-3 custom-scrollbar text-[14px] text-slate-700 leading-relaxed font-normal">
                                {{ $testimonial->review }}
                            </div>

                        </div>
                    </div>
                    @endforeach
                </div>
                
                <!-- Swiper Pagination -->
                <div class="swiper-pagination !-bottom-1"></div>
            </div>
        </div>
    </div>
</section>

<!-- Custom Scrollbar CSS -->
<style>
    .custom-scrollbar::-webkit-scrollbar {
        width: 4px;
    }
    .custom-scrollbar::-webkit-scrollbar-track {
        background: #f1f1f1; 
        border-radius: 10px;
    }
    .custom-scrollbar::-webkit-scrollbar-thumb {
        background: #cbd5e1; 
        border-radius: 10px;
    }
    .custom-scrollbar::-webkit-scrollbar-thumb:hover {
        background: #94a3b8; 
    }
    
    /* Pagination colors to match image */
    .testimonialSwiper .swiper-pagination-bullet {
        background: #94a3b8;
        opacity: 0.5;
    }
    .testimonialSwiper .swiper-pagination-bullet-active {
        background: #f97316; /* orange */
        opacity: 1;
    }
</style>

@push('scripts')
<script>
    const testSwiper = new Swiper('.testimonialSwiper', {
        slidesPerView: 1,
        spaceBetween: 20,
        loop: true,
        autoplay: {
            delay: 3500,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        breakpoints: {
            640: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3,
            },
            1280: {
                slidesPerView: 4,
            }
        }
    });

    const certSwiper = new Swiper('.certSwiper', {
        slidesPerView: 2,
        spaceBetween: 20,
        loop: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.cert-pagination',
            clickable: true,
            bulletClass: 'swiper-pagination-bullet !bg-slate-300 !w-2.5 !h-2.5 !opacity-100',
            bulletActiveClass: 'swiper-pagination-bullet-active !bg-red-600 !w-3 !h-3',
        },
        navigation: {
            nextEl: '.cert-next',
            prevEl: '.cert-prev',
        },
        breakpoints: {
            640: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 4,
                spaceBetween: 30,
            },
            1024: {
                slidesPerView: 5,
                spaceBetween: 30,
            },
        }
    });
    const clientSwiper = new Swiper('.clientSwiper', {
        slidesPerView: 2,
        spaceBetween: 20,
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.client-pagination',
            clickable: true,
            bulletClass: 'swiper-pagination-bullet !bg-slate-300 !w-2.5 !h-2.5 !opacity-100',
            bulletActiveClass: 'swiper-pagination-bullet-active !bg-red-600 !w-3 !h-3',
        },
        navigation: {
            nextEl: '.client-next',
            prevEl: '.client-prev',
        },
        breakpoints: {
            640: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 4,
                spaceBetween: 30,
            },
            1024: {
                slidesPerView: 5,
                spaceBetween: 30,
            },
        }
    });
</script>
@endpush

<!-- Certifications & Awards Section -->
<section class="py-20 bg-white relative overflow-hidden">
    <div class="container mx-auto px-4 lg:px-8 relative z-10">
        <div class="text-center mb-12" data-aos="fade-up">
            <h2 class="text-3xl md:text-5xl font-black text-[#0a1628]">
                Our <span class="text-red-600">Certifications</span> & Awards
            </h2>
        </div>
        
        <div class="relative px-2 sm:px-12 max-w-7xl mx-auto">
            <div class="swiper certSwiper !pb-14" data-aos="fade-up" data-aos-delay="200">
                <div class="swiper-wrapper items-center">
                    @if(isset($certificates) && $certificates->count() > 0)
                        @foreach($certificates as $cert)
                        <div class="swiper-slide">
                            <a href="{{ Storage::url($cert->image) }}" data-fancybox="certificates" data-caption="{{ $cert->title }}" class="block bg-white p-2 md:p-4 rounded-xl shadow-[0_4px_20px_rgba(0,0,0,0.04)] border border-slate-100 hover:shadow-[0_10px_30px_rgba(220,38,38,0.1)] hover:border-red-100 transition-all duration-300 flex items-center justify-center group cursor-zoom-in aspect-[4/5]">
                                <img src="{{ Storage::url($cert->image) }}" alt="{{ $cert->title }}" class="w-full h-full object-contain group-hover:scale-105 transition-transform duration-500 opacity-90 group-hover:opacity-100">
                            </a>
                        </div>
                        @endforeach
                    @else
                        @php
                            $placeholderCertificates = [
                                ['title' => 'Dairy Industry Award', 'img' => 'https://placehold.co/800x1000/ffffff/333333?text=Dairy+Industry\nCertificate'],
                                ['title' => 'Trophy 1', 'img' => 'https://placehold.co/800x1000/ffffff/333333?text=Excellence\nTrophy'],
                                ['title' => 'ISO 9001:2015', 'img' => 'https://placehold.co/800x1000/ffffff/333333?text=ISO+9001:2015\nCertificate'],
                                ['title' => 'IndiaMart Trust Seal', 'img' => 'https://placehold.co/800x1000/ffffff/333333?text=IndiaMart\nTrust+Seal'],
                                ['title' => 'Trophy 2', 'img' => 'https://placehold.co/800x1000/ffffff/333333?text=Quality\nTrophy'],
                                ['title' => 'Award 3', 'img' => 'https://placehold.co/800x1000/ffffff/333333?text=Best\nManufacturer'],
                            ];
                        @endphp
                        @foreach($placeholderCertificates as $cert)
                        <div class="swiper-slide">
                            <a href="{{ $cert['img'] }}" data-fancybox="certificates" data-caption="{{ $cert['title'] }}" class="block bg-white p-2 md:p-4 rounded-xl shadow-[0_4px_20px_rgba(0,0,0,0.04)] border border-slate-100 hover:shadow-[0_10px_30px_rgba(220,38,38,0.1)] hover:border-red-100 transition-all duration-300 flex items-center justify-center group cursor-zoom-in aspect-[4/5]">
                                <img src="{{ $cert['img'] }}" alt="{{ $cert['title'] }}" class="w-full h-full object-contain group-hover:scale-105 transition-transform duration-500 opacity-90 group-hover:opacity-100">
                            </a>
                        </div>
                        @endforeach
                    @endif
                </div>
                <!-- Pagination -->
                <div class="swiper-pagination cert-pagination flex items-center justify-center gap-1.5"></div>
            </div>
            
            <!-- Navigation -->
            <div class="swiper-button-prev cert-prev !text-[#0a1628] hover:!text-red-600 after:!text-xl hidden sm:flex -left-4 font-black transition-colors"></div>
            <div class="swiper-button-next cert-next !text-[#0a1628] hover:!text-red-600 after:!text-xl hidden sm:flex -right-4 font-black transition-colors"></div>
        </div>
    </div>
</section>

<!-- Clients Section -->
<section class="py-20 bg-slate-50 relative overflow-hidden border-t border-slate-200">
    <div class="container mx-auto px-4 lg:px-8 relative z-10">
        <div class="text-center mb-12" data-aos="fade-up">
            <h2 class="text-3xl md:text-5xl font-black text-[#0a1628] mb-4">
                Our Plate Heat Exchanger <span class="text-red-600">Clients</span>
            </h2>
            <p class="text-slate-600 max-w-3xl mx-auto">At SRJ Heat Exchangers India Pvt. Ltd., we work with leading industrial brands as trusted plate heat exchanger manufacturers and plate heat exchanger supplier in India delivering reliable plate heat exchangers, plate heat exchanger gasket solutions, and efficient heat transfer systems for industrial applications.</p>
        </div>
        
        <div class="relative px-2 sm:px-12 max-w-7xl mx-auto">
            <div class="swiper clientSwiper !pb-14" data-aos="fade-up" data-aos-delay="200">
                <div class="swiper-wrapper items-center">
                    @if(isset($clients) && $clients->count() > 0)
                        @foreach($clients as $client)
                        <div class="swiper-slide">
                            <div class="bg-white p-4 rounded-xl shadow-[0_4px_20px_rgba(0,0,0,0.04)] border border-slate-100 transition-all duration-300 flex items-center justify-center h-32 hover:shadow-[0_10px_30px_rgba(220,38,38,0.1)] hover:border-red-100 group">
                                <img src="{{ asset('storage/' . $client->image) }}" alt="{{ $client->alt_text ?? $client->name }}" class="max-w-full max-h-full object-contain group-hover:scale-105 transition-all duration-500">
                            </div>
                        </div>
                        @endforeach
                    @else
                        @php
                            $placeholderClients = [
                                ['name' => 'Mother Dairy', 'img' => 'https://upload.wikimedia.org/wikipedia/en/thumb/8/87/Mother_Dairy_logo.svg/220px-Mother_Dairy_logo.svg.png'],
                                ['name' => 'Pepsico', 'img' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/a6/PepsiCo_logo.svg/200px-PepsiCo_logo.svg.png'],
                                ['name' => 'Coca Cola', 'img' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/c/ce/Coca-Cola_logo.svg/200px-Coca-Cola_logo.svg.png'],
                                ['name' => 'Tata Chemicals', 'img' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/8f/Tata_logo.svg/200px-Tata_logo.svg.png'],
                                ['name' => 'Aditya Birla', 'img' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/4e/Aditya_Birla_Group_Logo.svg/200px-Aditya_Birla_Group_Logo.svg.png'],
                                ['name' => 'Nestle', 'img' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b5/Nestl%C3%A9_logo.svg/200px-Nestl%C3%A9_logo.svg.png'],
                            ];
                        @endphp
                        @foreach($placeholderClients as $client)
                        <div class="swiper-slide">
                            <div class="bg-white p-4 rounded-xl shadow-[0_4px_20px_rgba(0,0,0,0.04)] border border-slate-100 transition-all duration-300 flex items-center justify-center h-32 hover:shadow-[0_10px_30px_rgba(220,38,38,0.1)] hover:border-red-100 group">
                                <img src="{{ $client['img'] }}" alt="{{ $client['name'] }}" class="max-w-full max-h-full object-contain group-hover:scale-105 transition-all duration-500">
                            </div>
                        </div>
                        @endforeach
                    @endif
                </div>
                <!-- Pagination -->
                <div class="swiper-pagination client-pagination flex items-center justify-center gap-1.5"></div>
            </div>
            
            <!-- Navigation -->
            <div class="swiper-button-prev client-prev !text-[#0a1628] hover:!text-red-600 after:!text-xl hidden sm:flex -left-4 font-black transition-colors"></div>
            <div class="swiper-button-next client-next !text-[#0a1628] hover:!text-red-600 after:!text-xl hidden sm:flex -right-4 font-black transition-colors"></div>
        </div>
    </div>
</section>

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
