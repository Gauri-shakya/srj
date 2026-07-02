@extends('frontend.layouts.app')

@section('title', 'SRJ Heat Exchangers | ' . App\Models\Setting::get('site_name', 'SRJ Heat Exchangers'))

@section('content')
<!-- Page Header -->
<div class="relative pt-24 pb-16 lg:pt-32 lg:pb-24 overflow-hidden bg-black">
    <!-- Background Image -->
    <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&q=80&w=2000')] bg-cover bg-center bg-fixed"></div>
    
    <!-- Dark Overlay so text is clear -->
    <div class="absolute inset-0 bg-black/60 z-0"></div>
    
    <div class="container mx-auto px-4 lg:px-8 relative z-10" data-aos="fade-up">
        <div class="flex flex-col items-start gap-3">
            <!-- Left Side: Title -->
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white drop-shadow-lg m-0">
                SRJ Heat Exchangers
            </h1>
            
            <!-- Breadcrumbs -->
            <div class="flex items-center gap-3 text-xs md:text-sm font-bold uppercase tracking-widest text-white drop-shadow-md mt-2">
                <a href="{{ route('home') }}" class="hover:text-red-400 transition-colors border-b border-transparent hover:border-red-400 pb-0.5">HOME</a>
                <i class="fas fa-arrow-right text-red-500"></i>
                <a href="{{ route('srj-heat-exchangers') }}" class="hover:text-red-400 transition-colors border-b border-white pb-0.5">SRJ HEAT EXCHANGERS</a>
            </div>
        </div>
    </div>
</div>

<!-- Alternating Content Section -->
<section class="py-12 bg-slate-50">
    <div class="container mx-auto px-4 lg:px-8">
        @if($sections->count() > 0)
            <div class="space-y-16">
                @foreach($sections as $index => $section)
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-center">
                        
                        <!-- Content Side -->
                        <div class="order-2 {{ $index % 2 == 0 ? 'lg:order-1' : 'lg:order-2' }}" data-aos="{{ $index % 2 == 0 ? 'fade-right' : 'fade-left' }}">
                            <div class="prose prose-md max-w-none prose-headings:text-[#0a1628] prose-headings:font-bold prose-p:text-slate-600 prose-p:text-justify prose-li:text-slate-600 prose-a:text-red-600">
                                <h2 class="text-3xl font-black text-[#0a1628] mb-4 leading-tight">{{ $section->title }}</h2>
                                
                                <div class="text-slate-600 leading-relaxed text-justify prose-p:my-2 prose-ul:my-2">
                                    {!! $section->content !!}
                                </div>
                            </div>
                        </div>

                        <!-- Image Side -->
                        <div class="order-1 {{ $index % 2 == 0 ? 'lg:order-2' : 'lg:order-1' }}" data-aos="{{ $index % 2 == 0 ? 'fade-left' : 'fade-right' }}">
                            <div class="relative group">
                                <!-- Decorative Box/Shadow -->
                                <div class="absolute -inset-4 bg-gradient-to-r from-red-600/10 to-transparent rounded-[2rem] transform {{ $index % 2 == 0 ? 'translate-x-4 translate-y-4' : '-translate-x-4 translate-y-4' }} transition-transform duration-500 group-hover:translate-x-0 group-hover:translate-y-0"></div>
                                
                                <div class="relative bg-white rounded-2xl overflow-hidden shadow-2xl border border-slate-100 p-4 sm:p-8">
                                    @if($section->image)
                                        <img src="{{ Storage::url($section->image) }}" alt="{{ $section->title }}" class="w-full h-auto object-contain max-h-[500px] transition-transform duration-700 group-hover:scale-105">
                                    @else
                                        <div class="w-full h-64 bg-slate-100 flex items-center justify-center text-slate-400">
                                            <i class="fas fa-image text-4xl"></i>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    
                    @if(!$loop->last)
                        <!-- Divider between sections -->
                        <div class="w-full flex justify-center py-4">
                            <div class="w-24 h-1 bg-gradient-to-r from-transparent via-red-200 to-transparent"></div>
                        </div>
                    @endif
                @endforeach
            </div>
        @else
            <div class="text-center py-20">
                <div class="inline-flex items-center justify-center w-20 h-20 rounded-full bg-slate-100 text-slate-400 mb-6">
                    <i class="fas fa-box-open text-3xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-[#0a1628] mb-2">Check Back Soon</h3>
                <p class="text-slate-500">We are currently updating our heat exchanger sections.</p>
            </div>
        @endif
    </div>
</section>

<!-- Call to Action -->
<section class="py-20 relative bg-[#0a1628] overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
            <path d="M0,100 L100,0 L100,100 Z" fill="white"></path>
        </svg>
    </div>
    <div class="container mx-auto px-4 text-center relative z-10">
        <h2 class="text-3xl md:text-5xl font-black text-white mb-6">Need a Custom Thermal Solution?</h2>
        <p class="text-slate-300 text-lg mb-10 max-w-2xl mx-auto">Get in touch with our engineering experts to find the perfect plate heat exchanger for your specific industrial requirements.</p>
        <a href="{{ route('contact') }}" class="inline-flex justify-center items-center px-8 py-4 bg-red-600 text-white text-lg font-bold rounded-full hover:bg-white hover:text-red-600 transition-all duration-300 shadow-lg shadow-red-600/30 transform hover:-translate-y-1">
            Contact Our Experts <i class="fas fa-arrow-right ml-3"></i>
        </a>
    </div>
</section>
@endsection
