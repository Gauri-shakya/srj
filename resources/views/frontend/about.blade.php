@extends('frontend.layouts.app')

@section('title', 'About Us | ' . App\Models\Setting::get('site_name'))

@push('styles')
<style>
    .page-header { background: linear-gradient(rgba(10,22,40,0.8), rgba(10,22,40,0.9)), url('https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&q=80&w=2000') center/cover; padding: 100px 0; text-align: center; color: white; }
    .page-title { font-size: 3rem; margin-bottom: 15px; }
    .breadcrumb { display: flex; justify-content: center; gap: 10px; font-size: 1rem; color: rgba(255,255,255,0.7); }
    .breadcrumb a { color: var(--accent); }
    
    .about-section { padding: 80px 0; background: var(--white); }
    .about-image { border-radius: 8px; box-shadow: var(--shadow); position: relative; overflow: hidden; }
    .about-image::after { content: ''; position: absolute; inset: 0; border: 4px solid var(--accent); transform: translate(15px, 15px); border-radius: 8px; z-index: -1; transition: var(--transition); }
    .about-image:hover::after { transform: translate(0, 0); }
    .about-image img { width: 100%; border-radius: 8px; }
    
    .about-content h2 { font-size: 2.5rem; margin-bottom: 20px; line-height: 1.2; }
    .about-content p { font-size: 1.1rem; color: var(--text-light); margin-bottom: 20px; text-align: justify; }
    
    .values-section { padding: 80px 0; background: var(--light); }
    .value-card { background: var(--white); padding: 40px 30px; border-radius: 8px; box-shadow: var(--shadow); text-align: center; transition: var(--transition); height: 100%; border-bottom: 4px solid transparent; }
    .value-card:hover { transform: translateY(-10px); border-bottom-color: var(--accent); }
    .value-icon { font-size: 3rem; color: var(--accent); margin-bottom: 20px; }
    .value-card h3 { margin-bottom: 15px; font-size: 1.5rem; }
    .value-card p { color: var(--text-light); font-size: 0.95rem; }
    
    .cta-section { padding: 80px 0; background: var(--primary); color: white; text-align: center; }
    .cta-section h2 { color: white; font-size: 2.5rem; margin-bottom: 20px; }
    .cta-section p { font-size: 1.1rem; color: rgba(255,255,255,0.8); max-width: 700px; margin: 0 auto 30px; }
</style>
@endpush

@section('content')
<!-- Page Header -->
<div class="page-header">
    <div class="container">
        <h1 class="page-title">About SRJ Heat Exchangers</h1>
        <div class="breadcrumb">
            <a href="{{ route('home') }}">Home</a> <span>/</span> <span>About Us</span>
        </div>
    </div>
</div>

<!-- Main About Content -->
<section class="about-section">
    <div class="container">
        <div class="two-col" style="align-items: flex-start;">
            <div class="about-image">
                <img src="https://images.unsplash.com/photo-1504917595217-d4dc5ebe6122?auto=format&fit=crop&q=80&w=800" alt="SRJ Manufacturing Facility">
            </div>
            <div class="about-content">
                <span class="section-badge">ABOUT US</span>
                <h2>{{ App\Models\Setting::get('about_title', '17+ Years of Manufacturing Excellence') }}</h2>
                
                {!! App\Models\Setting::get('about_content', '<p><strong>SRJ Heatt Exchangers India Pvt. Ltd. (formerly known as SRJ Engineers Pvt. Ltd.) is an ISO 9001 certified company with over 17 years of experience as a trusted manufacturer of plate heat exchangers, plate and frame heat exchangers, and PHE heat exchanger components in India.</strong></p><p>With advanced design software and an in-house manufacturing facility, we produce precision-engineered PHE plates and gaskets that meet consistent quality, performance, and durability standards across industrial applications.</p><p>We serve multiple industries and manufacture OEM-compatible replacement parts for plate heat exchangers, including high-quality PHE plates and gaskets designed for efficient heat transfer, reliable sealing, and long service life. Our solutions are ideal for industrial plate heat exchangers, ensuring cost-effective maintenance, reduced downtime, and consistent performance across HVAC, power, chemical, pharmaceutical, food processing, and process industries.</p><p>Our continuous focus on innovation, tooling, and engineering accuracy ensures reliable performance and long-term customer satisfaction.</p>') !!}
            </div>
        </div>
    </div>
</section>

<!-- Values & Approach Section -->
<section class="values-section">
    <div class="container">
        <div class="text-center mb-4">
            <span class="section-badge">OUR APPROACH</span>
            <h2 class="section-title">Engineering-Driven Manufacturing</h2>
            <p style="max-width: 700px; margin: 0 auto; color: var(--text-light); font-size:1.1rem;">We follow a structured, engineering-first approach to deliver reliable plate heat exchanger solutions that meet industrial performance, quality, and operational requirements. Our focus remains on precision manufacturing, controlled processes, and long-term system reliability — not one-time delivery.</p>
        </div>
        
        <div class="grid grid-3 mt-4">
            <div class="value-card">
                <i class="fas fa-eye value-icon"></i>
                <h3>Our Vision</h3>
                <p>{!! App\Models\Setting::get('about_vision', 'To be the globally recognized leader in thermal engineering by consistently delivering innovative, efficient, and reliable plate heat exchanger solutions that empower industries to optimize their processes and reduce energy consumption.') !!}</p>
            </div>
            <div class="value-card">
                <i class="fas fa-cogs value-icon"></i>
                <h3>Engineering & Project Planning</h3>
                <p>{!! App\Models\Setting::get('about_engineering', 'Our engineering team develops customized plate heat exchangers using advanced design analysis to deliver efficient heat transfer solutions. We meticulously plan every project from conceptualization to final deployment.') !!}</p>
            </div>
            <div class="value-card">
                <i class="fas fa-certificate value-icon"></i>
                <h3>Quality & Manufacturing</h3>
                <p>{!! App\Models\Setting::get('about_quality', 'All industrial plate heat exchangers, PHE plates, and gasket components are manufactured under strict ISO 9001 quality standards. Each batch is rigorously tested ensuring reliable operation and long service life.') !!}</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <h2>Get a Quotation for Your Industry</h2>
        <p>Speak with our technical team to discuss the right plate heat exchanger solution based on your industry, application, and operating requirements.</p>
        <a href="{{ route('contact') }}" class="btn btn-accent">Get Quote Now</a>
    </div>
</section>
@endsection
