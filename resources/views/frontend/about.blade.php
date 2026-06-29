@extends('frontend.layouts.app')

@section('title', 'About Us | ' . App\Models\Setting::get('site_name', 'SRJ Heat Exchangers'))

@section('content')
<!-- Page Header -->
<div class="relative pt-32 pb-24 lg:pt-40 lg:pb-32 overflow-hidden bg-[#0a1628]">
    <!-- Abstract Background -->
    <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&q=80&w=2000')] bg-cover bg-center opacity-20 mix-blend-luminosity"></div>
    <div class="absolute inset-0 bg-gradient-to-r from-[#0a1628] via-[#0a1628]/90 to-red-900/40"></div>
    
    <!-- Floating particles/shapes -->
    <div class="absolute top-1/4 right-10 w-64 h-64 bg-red-600 rounded-full blur-[120px] opacity-40 animate-[pulseGlow_4s_ease-in-out_infinite]"></div>
    
    <div class="container mx-auto px-4 lg:px-8 relative z-10 text-center" data-aos="fade-up">
        <span class="inline-block px-4 py-1 bg-white/10 backdrop-blur-md rounded-full text-red-400 font-bold tracking-[0.2em] uppercase text-xs mb-6 border border-white/10">Who We Are</span>
        <h1 class="text-5xl md:text-6xl lg:text-7xl font-black text-white mb-6 leading-tight font-['Rajdhani'] drop-shadow-2xl">
            Pioneering <span class="text-transparent bg-clip-text bg-gradient-to-r from-red-400 to-red-600">Thermal</span> <br/> Engineering
        </h1>
        
        <div class="flex items-center justify-center gap-3 text-sm md:text-base font-bold uppercase tracking-widest text-slate-300">
            <a href="{{ route('home') }}" class="hover:text-red-400 transition-colors flex items-center gap-2"><i class="fas fa-home"></i> Home</a>
            <span class="text-slate-500">/</span>
            <span class="text-white">About Us</span>
        </div>
    </div>
    
    <!-- Wave separator -->
    <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none z-20">
        <svg class="relative block w-full h-[50px] md:h-[80px]" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V120H0V95.8C59.71,118.08,130.83,123.59,190.27,110.15,236.42,99.8,279.79,78.36,321.39,56.44Z" class="fill-slate-50"></path>
        </svg>
    </div>
</div>

<!-- Main About Content -->
<section class="py-24 bg-slate-50 relative overflow-hidden">
    <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-red-100/50 rounded-full blur-[100px] pointer-events-none -translate-y-1/2 translate-x-1/3"></div>

    <div class="container mx-auto px-4 lg:px-8 relative z-10">
        <div class="grid lg:grid-cols-12 gap-16 items-center">
            
            <!-- Left: Premium Image Layout -->
            <div class="lg:col-span-5 relative" data-aos="fade-right">
                <div class="relative z-10 rounded-2xl overflow-hidden shadow-2xl border-8 border-white group">
                    <div class="absolute inset-0 bg-[#0a1628]/20 group-hover:bg-transparent transition-colors duration-500 z-10 pointer-events-none"></div>
                    <img src="https://images.unsplash.com/photo-1504917595217-d4dc5ebe6122?auto=format&fit=crop&q=80&w=1000" alt="SRJ Manufacturing Facility" class="w-full h-[500px] lg:h-[600px] object-cover transform group-hover:scale-105 transition-transform duration-700">
                </div>
                
                <!-- Floating Glassmorphism Badge -->
                <div class="absolute -bottom-6 -right-6 lg:-bottom-8 lg:-right-8 z-20 bg-white/90 backdrop-blur-xl p-6 lg:p-8 rounded-2xl shadow-[0_20px_50px_rgba(10,22,40,0.15)] border border-white flex items-center gap-4 lg:gap-5">
                    <div class="w-14 h-14 lg:w-16 lg:h-16 rounded-full bg-gradient-to-br from-red-500 to-red-700 flex items-center justify-center text-white shadow-lg shadow-red-600/30">
                        <i class="fas fa-industry text-xl lg:text-2xl"></i>
                    </div>
                    <div>
                        <h3 class="text-3xl lg:text-4xl font-black text-[#0a1628] leading-none mb-1">17<span class="text-red-600">+</span></h3>
                        <p class="text-[10px] lg:text-xs font-bold text-slate-400 uppercase tracking-widest leading-tight">Years of<br>Excellence</p>
                    </div>
                </div>
                
                <!-- Decorative dot pattern -->
                <div class="absolute -top-10 -left-10 z-0 opacity-20 hidden md:block">
                    <svg width="100" height="100" fill="none" viewBox="0 0 100 100"><pattern id="dots" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse"><circle fill="#dc2626" cx="2" cy="2" r="2"></circle></pattern><rect width="100" height="100" fill="url(#dots)"></rect></svg>
                </div>
            </div>
            
            <!-- Right: Content -->
            <div class="lg:col-span-7 space-y-8" data-aos="fade-left">
                <div>
                    <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-red-50 text-red-600 font-bold text-xs tracking-[0.2em] uppercase border border-red-100 mb-6 shadow-sm">
                        <i class="fas fa-building"></i> Company Overview
                    </div>
                    <h2 class="text-4xl lg:text-5xl xl:text-6xl font-black text-[#0a1628] leading-[1.1] font-['Rajdhani']">
                        {{ App\Models\Setting::get('about_title', 'Engineered for Performance. Built for Reliability.') }}
                    </h2>
                </div>
                
                <div class="prose prose-lg prose-slate max-w-none text-slate-600 leading-relaxed font-light text-justify">
                    {!! App\Models\Setting::get('about_content', '<p class="text-lg md:text-xl font-medium text-[#0a1628] leading-relaxed mb-6">SRJ Heatt Exchangers India Pvt. Ltd. (formerly known as SRJ Engineers Pvt. Ltd.) is an ISO 9001 certified company with over 17 years of experience as a trusted manufacturer of plate heat exchangers, plate and frame heat exchangers, and PHE heat exchanger components in India.</p><p>With advanced design software and an in-house manufacturing facility, we produce precision-engineered PHE plates and gaskets that meet consistent quality, performance, and durability standards across industrial applications.</p><p>We serve multiple industries and manufacture OEM-compatible replacement parts for plate heat exchangers, including high-quality PHE plates and gaskets designed for efficient heat transfer, reliable sealing, and long service life.</p>') !!}
                </div>
                
                <div class="flex flex-wrap gap-4 pt-4">
                    <div class="flex items-center gap-3 bg-white px-5 py-3 rounded-xl shadow-sm border border-slate-100 transition-all hover:shadow-md hover:-translate-y-1">
                        <i class="fas fa-check-circle text-red-600 text-xl"></i>
                        <span class="font-bold text-[#0a1628] text-sm md:text-base">ISO 9001 Certified</span>
                    </div>
                    <div class="flex items-center gap-3 bg-white px-5 py-3 rounded-xl shadow-sm border border-slate-100 transition-all hover:shadow-md hover:-translate-y-1">
                        <i class="fas fa-check-circle text-red-600 text-xl"></i>
                        <span class="font-bold text-[#0a1628] text-sm md:text-base">In-house Manufacturing</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section with Overlap Effect -->
<section class="bg-[#0a1628] relative mt-24 pt-32 pb-24">
    <!-- Decorative SVG pattern from screenshot -->
    <div class="absolute inset-0 opacity-10 overflow-hidden pointer-events-none">
        <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <pattern id="concentric-circles" x="0" y="0" width="400" height="400" patternUnits="userSpaceOnUse">
                    <circle cx="200" cy="200" r="180" stroke="white" stroke-width="1" fill="none" />
                    <circle cx="200" cy="200" r="140" stroke="white" stroke-width="1" fill="none" />
                    <circle cx="200" cy="200" r="100" stroke="white" stroke-width="1" fill="none" />
                    <circle cx="200" cy="200" r="60" stroke="white" stroke-width="1" fill="none" />
                </pattern>
            </defs>
            <rect x="0" y="0" width="100%" height="100%" fill="url(#concentric-circles)" />
        </svg>
    </div>
    
    <div class="container mx-auto px-4 lg:px-8 relative z-10">
        <!-- Stats Grid pulled UP to overlap the white/dark boundary -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 -mt-60">
            <!-- Stat 1 -->
            <div class="bg-white rounded-xl shadow-[0_30px_60px_rgba(0,0,0,0.15)] border-t-[6px] border-red-600 p-10 text-center transform transition-transform duration-500 hover:-translate-y-3" data-aos="fade-up" data-aos-delay="100">
                <h3 class="text-4xl md:text-5xl font-black text-[#0a1628] mb-3 font-['Rajdhani']">500<span class="text-red-600">K</span></h3>
                <p class="text-slate-600 font-bold text-sm tracking-wide">Completed Industrial Projects</p>
            </div>
            
            <!-- Stat 2 -->
            <div class="bg-white rounded-xl shadow-[0_30px_60px_rgba(0,0,0,0.15)] border-t-[6px] border-red-600 p-10 text-center transform transition-transform duration-500 hover:-translate-y-3" data-aos="fade-up" data-aos-delay="200">
                <h3 class="text-4xl md:text-5xl font-black text-[#0a1628] mb-3 font-['Rajdhani']">110<span class="text-red-600">+</span></h3>
                <p class="text-slate-600 font-bold text-sm tracking-wide">Expert Engineering Team</p>
            </div>
            
            <!-- Stat 3 -->
            <div class="bg-white rounded-xl shadow-[0_30px_60px_rgba(0,0,0,0.15)] border-t-[6px] border-red-600 p-10 text-center transform transition-transform duration-500 hover:-translate-y-3" data-aos="fade-up" data-aos-delay="300">
                <h3 class="text-4xl md:text-5xl font-black text-[#0a1628] mb-3 font-['Rajdhani']">2,000</h3>
                <p class="text-slate-600 font-bold text-sm tracking-wide">Running Industrial Projects</p>
            </div>
            
            <!-- Stat 4 -->
            <div class="bg-white rounded-xl shadow-[0_30px_60px_rgba(0,0,0,0.15)] border-t-[6px] border-red-600 p-10 text-center transform transition-transform duration-500 hover:-translate-y-3" data-aos="fade-up" data-aos-delay="400">
                <h3 class="text-4xl md:text-5xl font-black text-[#0a1628] mb-3 font-['Rajdhani']">50<span class="text-red-600">+</span></h3>
                <p class="text-slate-600 font-bold text-sm tracking-wide">Industry & Quality Awards</p>
            </div>
        </div>
    </div>
</section>

<!-- Values & Approach Section -->
<section class="py-24 bg-white relative">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="text-center max-w-4xl mx-auto mb-20" data-aos="fade-up">
            <span class="text-red-600 font-bold tracking-[0.2em] uppercase text-xs">Our Approach</span>
            <h2 class="text-4xl md:text-5xl font-black text-[#0a1628] mt-3 mb-6 font-['Rajdhani']">Engineering-Driven Manufacturing</h2>
            <p class="text-slate-500 text-lg leading-relaxed font-light">We follow a structured, engineering-first approach to deliver reliable plate heat exchanger solutions that meet industrial performance, quality, and operational requirements.</p>
        </div>
        
        <div class="grid md:grid-cols-3 gap-8">
            <!-- Card 1 -->
            <div class="group bg-slate-50 rounded-2xl p-8 lg:p-10 hover:bg-[#0a1628] transition-all duration-500 border border-slate-100 hover:border-[#0a1628] relative overflow-hidden flex flex-col h-full shadow-sm hover:shadow-[0_20px_50px_rgba(10,22,40,0.15)] hover:-translate-y-2" data-aos="fade-up" data-aos-delay="100">
                <div class="absolute -right-20 -top-20 w-40 h-40 bg-red-600 rounded-full blur-[50px] opacity-0 group-hover:opacity-40 transition-opacity duration-500 pointer-events-none"></div>
                <div class="w-16 h-16 lg:w-20 lg:h-20 bg-white group-hover:bg-red-600 rounded-2xl flex items-center justify-center text-red-600 group-hover:text-white text-2xl lg:text-3xl mb-8 shadow-sm group-hover:shadow-lg group-hover:shadow-red-600/40 transition-all duration-500 group-hover:-translate-y-2 group-hover:rotate-6 border border-slate-100 group-hover:border-red-500 relative z-10">
                    <i class="fas fa-eye"></i>
                </div>
                <h3 class="text-2xl font-bold text-[#0a1628] mb-4 group-hover:text-white transition-colors duration-300 font-['Rajdhani'] relative z-10">Our Vision</h3>
                <p class="text-slate-500 text-sm leading-relaxed group-hover:text-slate-300 transition-colors duration-300 font-light relative z-10">{!! App\Models\Setting::get('about_vision', 'To be the globally recognized leader in thermal engineering by consistently delivering innovative, efficient, and reliable plate heat exchanger solutions that empower industries to optimize their processes and reduce energy consumption.') !!}</p>
            </div>
            
            <!-- Card 2 -->
            <div class="group bg-slate-50 rounded-2xl p-8 lg:p-10 hover:bg-[#0a1628] transition-all duration-500 border border-slate-100 hover:border-[#0a1628] relative overflow-hidden flex flex-col h-full shadow-sm hover:shadow-[0_20px_50px_rgba(10,22,40,0.15)] hover:-translate-y-2" data-aos="fade-up" data-aos-delay="200">
                <div class="absolute -right-20 -top-20 w-40 h-40 bg-red-600 rounded-full blur-[50px] opacity-0 group-hover:opacity-40 transition-opacity duration-500 pointer-events-none"></div>
                <div class="w-16 h-16 lg:w-20 lg:h-20 bg-white group-hover:bg-red-600 rounded-2xl flex items-center justify-center text-red-600 group-hover:text-white text-2xl lg:text-3xl mb-8 shadow-sm group-hover:shadow-lg group-hover:shadow-red-600/40 transition-all duration-500 group-hover:-translate-y-2 group-hover:rotate-6 border border-slate-100 group-hover:border-red-500 relative z-10">
                    <i class="fas fa-cogs"></i>
                </div>
                <h3 class="text-2xl font-bold text-[#0a1628] mb-4 group-hover:text-white transition-colors duration-300 font-['Rajdhani'] relative z-10">Engineering & Planning</h3>
                <p class="text-slate-500 text-sm leading-relaxed group-hover:text-slate-300 transition-colors duration-300 font-light relative z-10">{!! App\Models\Setting::get('about_engineering', 'Our engineering team develops customized plate heat exchangers using advanced design analysis to deliver efficient heat transfer solutions. We meticulously plan every project from conceptualization to final deployment.') !!}</p>
            </div>
            
            <!-- Card 3 -->
            <div class="group bg-slate-50 rounded-2xl p-8 lg:p-10 hover:bg-[#0a1628] transition-all duration-500 border border-slate-100 hover:border-[#0a1628] relative overflow-hidden flex flex-col h-full shadow-sm hover:shadow-[0_20px_50px_rgba(10,22,40,0.15)] hover:-translate-y-2" data-aos="fade-up" data-aos-delay="300">
                <div class="absolute -right-20 -top-20 w-40 h-40 bg-red-600 rounded-full blur-[50px] opacity-0 group-hover:opacity-40 transition-opacity duration-500 pointer-events-none"></div>
                <div class="w-16 h-16 lg:w-20 lg:h-20 bg-white group-hover:bg-red-600 rounded-2xl flex items-center justify-center text-red-600 group-hover:text-white text-2xl lg:text-3xl mb-8 shadow-sm group-hover:shadow-lg group-hover:shadow-red-600/40 transition-all duration-500 group-hover:-translate-y-2 group-hover:rotate-6 border border-slate-100 group-hover:border-red-500 relative z-10">
                    <i class="fas fa-certificate"></i>
                </div>
                <h3 class="text-2xl font-bold text-[#0a1628] mb-4 group-hover:text-white transition-colors duration-300 font-['Rajdhani'] relative z-10">Quality & Manufacturing</h3>
                <p class="text-slate-500 text-sm leading-relaxed group-hover:text-slate-300 transition-colors duration-300 font-light relative z-10">{!! App\Models\Setting::get('about_quality', 'All industrial plate heat exchangers, PHE plates, and gasket components are manufactured under strict ISO 9001 quality standards. Each batch is rigorously tested ensuring reliable operation and long service life.') !!}</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-24 relative overflow-hidden bg-[#0a1628]" data-aos="fade-up">
    <div class="absolute inset-0 bg-gradient-to-r from-red-600/90 to-[#0a1628]/90 z-10 mix-blend-multiply"></div>
    <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1581092580497-e0d23cbdf1dc?auto=format&fit=crop&q=80&w=2000')] bg-cover bg-fixed bg-center opacity-30"></div>
    
    <div class="container mx-auto px-4 relative z-20 text-center">
        <div class="inline-block px-4 py-1.5 bg-white/10 backdrop-blur-md rounded-full text-white font-bold tracking-widest uppercase text-xs mb-6 border border-white/20">Let's Connect</div>
        <h2 class="text-4xl lg:text-6xl font-black text-white mb-6 font-['Rajdhani'] drop-shadow-lg">Get a Quotation for Your Industry</h2>
        <p class="text-xl text-slate-300 mb-10 max-w-2xl mx-auto font-light leading-relaxed">Speak with our technical team to discuss the right plate heat exchanger solution based on your industry, application, and operating requirements.</p>
        
        <a href="{{ route('contact') }}" class="group relative inline-flex items-center justify-center px-8 md:px-10 py-4 md:py-5 text-sm md:text-base font-bold tracking-widest uppercase text-[#0a1628] transition-all duration-300 bg-white rounded-full overflow-hidden shadow-2xl hover:shadow-[0_0_40px_rgba(255,255,255,0.4)] hover:-translate-y-1">
            <span class="absolute inset-0 w-full h-full transition-all duration-300 ease-out translate-x-full bg-red-600 group-hover:translate-x-0"></span>
            <span class="relative flex items-center gap-3 group-hover:text-white transition-colors duration-300">
                Contact Our Engineering Team
                <i class="fas fa-arrow-right"></i>
            </span>
        </a>
    </div>
</section>
@endsection
