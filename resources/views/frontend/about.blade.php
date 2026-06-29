@extends('frontend.layouts.app')

@section('title', 'About Us | ' . App\Models\Setting::get('site_name'))

@push('styles')
<style>
    .page-header { background: linear-gradient(rgba(10,22,40,0.85), rgba(10,22,40,0.95)), url('https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&q=80&w=2000') center/cover; padding: 120px 0 80px; text-align: center; color: white; position: relative; overflow: hidden;}
    .page-header::after { content: ''; position: absolute; bottom: 0; left: 0; width: 100%; height: 50px; background: linear-gradient(to top, var(--light), transparent); }
    .page-title { font-size: 3.5rem; margin-bottom: 20px; font-weight: 900; letter-spacing: -1px; text-shadow: 0 5px 15px rgba(0,0,0,0.3); font-family: var(--font-heading); }
    .breadcrumb { display: flex; justify-content: center; gap: 12px; font-size: 0.95rem; color: rgba(255,255,255,0.7); font-weight: 500; text-transform: uppercase; letter-spacing: 1px;}
    .breadcrumb a { color: var(--accent); transition: var(--transition); }
    .breadcrumb a:hover { color: white; }
    
    .about-image-wrapper { position: relative; padding-right: 30px; padding-bottom: 30px; }
    .about-image { border-radius: 20px; box-shadow: var(--shadow-float); position: relative; overflow: hidden; z-index: 2; border: 8px solid white;}
    .about-image img { width: 100%; border-radius: 12px; transition: var(--transition); }
    .about-image-wrapper:hover img { transform: scale(1.05); }
    .about-image-bg { position: absolute; top: 30px; right: 0; bottom: 0; left: 30px; background: var(--accent); border-radius: 20px; z-index: 1; transition: var(--transition); opacity: 0.1; }
    .about-image-wrapper:hover .about-image-bg { transform: translate(10px, 10px); opacity: 0.2; }
    
    .value-card { 
        background: var(--white); padding: 50px 40px; border-radius: 20px; 
        box-shadow: 0 10px 40px -10px rgba(10,22,40,0.05); text-align: left; 
        transition: var(--transition); height: 100%; border: 1px solid var(--border);
        position: relative; overflow: hidden;
    }
    .value-card:hover { transform: translateY(-10px); box-shadow: var(--shadow-float); border-color: rgba(220,38,38,0.2); }
    .value-icon-wrapper { 
        width: 80px; height: 80px; background: rgba(220,38,38,0.05); border-radius: 20px; 
        display: flex; align-items: center; justify-content: center; margin-bottom: 30px;
        transition: var(--transition);
    }
    .value-card:hover .value-icon-wrapper { background: var(--accent); transform: scale(1.1) rotate(-5deg); }
    .value-icon { font-size: 2.5rem; color: var(--accent); transition: var(--transition); }
    .value-card:hover .value-icon { color: white; }
</style>
@endpush

@section('content')
<!-- Page Header -->
<div class="page-header">
    <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAiIGhlaWdodD0iMjAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGNpcmNsZSBjeD0iMiIgY3k9IjIiIHI9IjIiIGZpbGw9IiNmZmZmZmYiIGZpbGwtcnVsZT0iZXZlbm9kZCIgb3BhY2l0eT0iMC4xIi8+PC9zdmc+')] z-0"></div>
    <div class="container relative z-10" data-aos="fade-up">
        <h1 class="page-title">About Our Company</h1>
        <div class="breadcrumb">
            <a href="{{ route('home') }}">Home</a> <span>/</span> <span class="text-white">About Us</span>
        </div>
    </div>
</div>

<!-- Main About Content -->
<section class="py-24 bg-slate-50 relative overflow-hidden">
    <div class="absolute top-0 right-0 w-96 h-96 bg-red-100 rounded-full blur-[100px] opacity-50 pointer-events-none"></div>

    <div class="container mx-auto px-4 lg:px-8 relative z-10">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div class="about-image-wrapper" data-aos="fade-right">
                <div class="about-image-bg"></div>
                <div class="about-image">
                    <img src="https://images.unsplash.com/photo-1504917595217-d4dc5ebe6122?auto=format&fit=crop&q=80&w=1000" alt="SRJ Manufacturing Facility" class="h-[600px] object-cover">
                </div>
                
                <!-- Floating Badge -->
                <div class="absolute bottom-10 -left-6 z-20 bg-white p-6 rounded-2xl shadow-xl flex items-center gap-5 border border-slate-100 animate-[float_4s_ease-in-out_infinite]">
                    <h3 class="text-5xl font-black text-[#0a1628]">17<span class="text-red-600">+</span></h3>
                    <div class="leading-tight">
                        <p class="text-sm font-bold text-slate-400 uppercase tracking-widest">Years of</p>
                        <p class="text-lg font-black text-[#0a1628]">Excellence</p>
                    </div>
                </div>
            </div>
            
            <div class="space-y-6" data-aos="fade-left">
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-red-50 text-red-600 font-bold text-xs tracking-[0.2em] uppercase border border-red-100">
                    <i class="fas fa-building"></i> Company Overview
                </div>
                <h2 class="text-4xl lg:text-5xl font-black text-[#0a1628] leading-[1.1] font-['Rajdhani']">
                    {{ App\Models\Setting::get('about_title', 'Engineered for Performance. Built for Reliability.') }}
                </h2>
                
                <div class="prose prose-lg prose-slate max-w-none text-slate-600">
                    {!! App\Models\Setting::get('about_content', '<p class="text-xl font-medium text-[#0a1628] leading-relaxed mb-6">SRJ Heatt Exchangers India Pvt. Ltd. (formerly known as SRJ Engineers Pvt. Ltd.) is an ISO 9001 certified company with over 17 years of experience as a trusted manufacturer of plate heat exchangers, plate and frame heat exchangers, and PHE heat exchanger components in India.</p><p>With advanced design software and an in-house manufacturing facility, we produce precision-engineered PHE plates and gaskets that meet consistent quality, performance, and durability standards across industrial applications.</p><p>We serve multiple industries and manufacture OEM-compatible replacement parts for plate heat exchangers, including high-quality PHE plates and gaskets designed for efficient heat transfer, reliable sealing, and long service life. Our solutions are ideal for industrial plate heat exchangers, ensuring cost-effective maintenance, reduced downtime, and consistent performance across HVAC, power, chemical, pharmaceutical, food processing, and process industries.</p><p>Our continuous focus on innovation, tooling, and engineering accuracy ensures reliable performance and long-term customer satisfaction.</p>') !!}
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Values & Approach Section -->
<section class="py-24 bg-white relative">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="text-center max-w-4xl mx-auto mb-16" data-aos="fade-up">
            <span class="text-red-600 font-bold tracking-[0.2em] uppercase text-xs">Our Approach</span>
            <h2 class="text-4xl md:text-5xl font-black text-[#0a1628] mt-3 mb-6 font-['Rajdhani']">Engineering-Driven Manufacturing</h2>
            <p class="text-slate-500 text-lg leading-relaxed">We follow a structured, engineering-first approach to deliver reliable plate heat exchanger solutions that meet industrial performance, quality, and operational requirements. Our focus remains on precision manufacturing, controlled processes, and long-term system reliability — not one-time delivery.</p>
        </div>
        
        <div class="grid md:grid-cols-3 gap-8 mt-12">
            <div class="value-card group" data-aos="fade-up" data-aos-delay="100">
                <div class="absolute -right-10 -top-10 w-32 h-32 bg-slate-50 rounded-full blur-2xl group-hover:bg-red-50 transition-colors duration-500"></div>
                <div class="value-icon-wrapper relative z-10">
                    <i class="fas fa-eye value-icon"></i>
                </div>
                <h3 class="text-2xl font-bold text-[#0a1628] mb-4 relative z-10">Our Vision</h3>
                <p class="text-slate-500 leading-relaxed relative z-10">{!! App\Models\Setting::get('about_vision', 'To be the globally recognized leader in thermal engineering by consistently delivering innovative, efficient, and reliable plate heat exchanger solutions that empower industries to optimize their processes and reduce energy consumption.') !!}</p>
            </div>
            
            <div class="value-card group" data-aos="fade-up" data-aos-delay="200">
                <div class="absolute -right-10 -top-10 w-32 h-32 bg-slate-50 rounded-full blur-2xl group-hover:bg-red-50 transition-colors duration-500"></div>
                <div class="value-icon-wrapper relative z-10">
                    <i class="fas fa-cogs value-icon"></i>
                </div>
                <h3 class="text-2xl font-bold text-[#0a1628] mb-4 relative z-10">Engineering & Planning</h3>
                <p class="text-slate-500 leading-relaxed relative z-10">{!! App\Models\Setting::get('about_engineering', 'Our engineering team develops customized plate heat exchangers using advanced design analysis to deliver efficient heat transfer solutions. We meticulously plan every project from conceptualization to final deployment.') !!}</p>
            </div>
            
            <div class="value-card group" data-aos="fade-up" data-aos-delay="300">
                <div class="absolute -right-10 -top-10 w-32 h-32 bg-slate-50 rounded-full blur-2xl group-hover:bg-red-50 transition-colors duration-500"></div>
                <div class="value-icon-wrapper relative z-10">
                    <i class="fas fa-certificate value-icon"></i>
                </div>
                <h3 class="text-2xl font-bold text-[#0a1628] mb-4 relative z-10">Quality & Manufacturing</h3>
                <p class="text-slate-500 leading-relaxed relative z-10">{!! App\Models\Setting::get('about_quality', 'All industrial plate heat exchangers, PHE plates, and gasket components are manufactured under strict ISO 9001 quality standards. Each batch is rigorously tested ensuring reliable operation and long service life.') !!}</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 relative overflow-hidden bg-[#0a1628]" data-aos="fade-up">
    <div class="absolute inset-0 bg-gradient-to-r from-red-600/90 to-[#0a1628]/90 z-10 mix-blend-multiply"></div>
    <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1581092580497-e0d23cbdf1dc?auto=format&fit=crop&q=80&w=2000')] bg-cover bg-fixed bg-center opacity-30"></div>
    
    <div class="container mx-auto px-4 relative z-20 text-center">
        <h2 class="text-4xl lg:text-5xl font-black text-white mb-6 font-['Rajdhani']">Get a Quotation for Your Industry</h2>
        <p class="text-xl text-slate-300 mb-10 max-w-2xl mx-auto font-light">Speak with our technical team to discuss the right plate heat exchanger solution based on your industry, application, and operating requirements.</p>
        
        <a href="{{ route('contact') }}" class="group relative inline-flex items-center justify-center px-10 py-4 text-sm font-bold tracking-widest uppercase text-[#0a1628] transition-all duration-300 bg-white rounded-full overflow-hidden hover:shadow-[0_0_30px_rgba(255,255,255,0.3)] hover:-translate-y-1">
            <span class="absolute inset-0 w-full h-full transition-all duration-300 ease-out translate-x-full bg-red-600 group-hover:translate-x-0"></span>
            <span class="relative flex items-center gap-3 group-hover:text-white transition-colors duration-300">
                Contact Our Team
                <i class="fas fa-arrow-right"></i>
            </span>
        </a>
    </div>
</section>
@endsection
