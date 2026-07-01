@extends('frontend.layouts.app')

@section('title', $product->name . ' | ' . App\Models\Setting::get('site_name', 'SRJ Heat Exchangers'))

@section('content')
<!-- Product Header -->
<div class="relative pt-32 pb-24 lg:pt-40 lg:pb-32 overflow-hidden bg-[#0a1628]">
    <!-- Background Image -->
    @if($product->image)
        <div class="absolute inset-0 bg-[url('{{ asset('storage/' . $product->image) }}')] bg-cover bg-center opacity-10 mix-blend-luminosity blur-sm"></div>
    @else
        <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&q=80&w=2000')] bg-cover bg-center opacity-20 mix-blend-luminosity"></div>
    @endif
    <div class="absolute inset-0 bg-gradient-to-r from-[#0a1628] via-[#0a1628]/90 to-red-900/40"></div>
    
    <div class="absolute top-1/4 right-10 w-64 h-64 bg-red-600 rounded-full blur-[120px] opacity-40"></div>
    
    <div class="container mx-auto px-4 lg:px-8 relative z-10 text-center" data-aos="fade-up">
        <span class="inline-block px-4 py-1 bg-white/10 backdrop-blur-md rounded-full text-red-400 font-bold tracking-[0.2em] uppercase text-xs mb-6 border border-white/10">{{ $product->category ? $product->category->name : 'Our Products' }}</span>
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-black text-white mb-6 leading-tight font-['Rajdhani'] drop-shadow-2xl">
            {{ $product->name }}
        </h1>
        
        <div class="flex items-center justify-center gap-3 text-sm md:text-base font-bold uppercase tracking-widest text-slate-300">
            <a href="{{ route('home') }}" class="hover:text-red-400 transition-colors flex items-center gap-2"><i class="fas fa-home"></i> Home</a>
            <span class="text-slate-500">/</span>
            <span class="text-white">{{ $product->name }}</span>
        </div>
    </div>
    
    <!-- Wave separator -->
    <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none z-20">
        <svg class="relative block w-full h-[50px] md:h-[80px]" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V120H0V95.8C59.71,118.08,130.83,123.59,190.27,110.15,236.42,99.8,279.79,78.36,321.39,56.44Z" class="fill-white"></path>
        </svg>
    </div>
</div>

<!-- Product Details Section -->
<section class="py-20 bg-white relative">
    <div class="container mx-auto px-4 lg:px-8">
        
        <div class="grid lg:grid-cols-12 gap-12 lg:gap-20 items-start">
            
            <!-- Content -->
            <div class="lg:col-span-7" data-aos="fade-right">
                <h2 class="text-3xl lg:text-4xl font-black text-[#0a1628] mb-8 font-['Rajdhani'] leading-tight">
                    {{ $product->name }}
                </h2>
                
                @if($product->description)
                    <p class="text-lg text-slate-600 mb-8 font-light leading-relaxed">
                        {{ $product->description }}
                    </p>
                @endif
                
                <!-- Filament RichText Output -->
                <div class="prose prose-lg prose-slate max-w-none text-slate-600 font-light prose-headings:text-[#0a1628] prose-headings:font-bold prose-headings:font-['Rajdhani'] prose-a:text-red-600 prose-li:marker:text-red-600 prose-ul:list-image-[url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgaGVpZ2h0PSIxNiIgZmlsbD0iI2RjMjYyNiIgY2xhc3M9ImJpIGJpLWNoZWNrLWNpcmNsZS1maWxsIiB2aWV3Qm94PSIwIDAgMTYgMTYiPjxwYXRoIGQ9Ik0xNiA4QTE2IDE2IDAgMSAxIDAgOGE4IDggMCAwIDEgMTYgMHptLTMuOTctMy4wM2EtLjc1Ljc1IDAgMCAwLTEuMDgtdW0tLjIyLS4yMmwtMy40NyAzLjQ3LTEuNDQtMS40NGEuNzUuNzUgMCAwIDAtMS4wNiAxLjA2bDIgMmEuNzUuNzUgMCAwIDAgMS4wNiAwbDQtNGEuNzUuNzUgMCAwIDAgMC0xLjA2eiIvPjwvc3ZnPg==')]">
                    {!! $product->content !!}
                </div>
                
                <div class="mt-10 pt-10 border-t border-slate-100 flex flex-wrap gap-4">
                    <a href="{{ route('contact') }}" class="inline-flex items-center justify-center px-8 py-4 text-sm font-bold tracking-widest uppercase text-white transition-all duration-300 bg-red-600 rounded shadow-lg shadow-red-600/30 hover:bg-[#0a1628] hover:-translate-y-1">
                        Request a Quote <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                    <a href="https://wa.me/{{ App\Models\Setting::get('whatsapp', '919716115504') }}?text={{ urlencode('I am interested in ' . $product->name) }}" target="_blank" class="inline-flex items-center justify-center px-8 py-4 text-sm font-bold tracking-widest uppercase text-[#0a1628] transition-all duration-300 bg-slate-100 rounded hover:bg-green-500 hover:text-white hover:-translate-y-1 group">
                        <i class="fab fa-whatsapp text-lg mr-2 text-green-500 group-hover:text-white"></i> Chat on WhatsApp
                    </a>
                </div>
            </div>
            
            <!-- Image -->
            <div class="lg:col-span-5 relative" data-aos="fade-left">
                <div class="sticky top-32">
                    <div class="relative z-10 rounded-2xl overflow-hidden shadow-[0_20px_50px_rgba(10,22,40,0.08)] p-6 bg-white border border-slate-50">
                        @if($product->image)
                            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-full h-auto object-contain">
                        @else
                            <div class="w-full h-[400px] bg-slate-50 flex items-center justify-center text-slate-300 rounded-xl">
                                <i class="fas fa-image text-5xl"></i>
                            </div>
                        @endif
                    </div>
                    
                    <!-- Decorative elements -->
                    <div class="absolute -top-6 -right-6 w-32 h-32 bg-[radial-gradient(#e2e8f0_2px,transparent_2px)] [background-size:16px_16px] -z-10"></div>
                    <div class="absolute -bottom-6 -left-6 w-32 h-32 bg-[radial-gradient(#e2e8f0_2px,transparent_2px)] [background-size:16px_16px] -z-10"></div>
                </div>
            </div>
            
        </div>
    </div>
</section>

<!-- Related Products Section -->
@php
    $relatedProducts = \App\Models\Product::where('is_active', true)
        ->where('id', '!=', $product->id)
        ->when($product->product_category_id, function($query) use ($product) {
            return $query->where('product_category_id', $product->product_category_id);
        })
        ->inRandomOrder()
        ->take(3)
        ->get();
        
    // Fallback if no related products in same category
    if($relatedProducts->isEmpty()) {
        $relatedProducts = \App\Models\Product::where('is_active', true)
            ->where('id', '!=', $product->id)
            ->inRandomOrder()
            ->take(3)
            ->get();
    }
@endphp

@if($relatedProducts->isNotEmpty())
<section class="py-20 bg-slate-50 border-t border-slate-200">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="flex flex-wrap items-end justify-between mb-12 gap-4">
            <div>
                <h2 class="text-3xl lg:text-4xl font-black text-[#0a1628] font-['Rajdhani']">Related <span class="text-red-600">Products</span></h2>
                <div class="w-16 h-1 bg-red-600 mt-4 rounded-full"></div>
            </div>
            <a href="{{ route('products.index') }}" class="text-slate-500 hover:text-red-600 font-bold transition-colors">
                View All Products <i class="fas fa-arrow-right ml-1"></i>
            </a>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($relatedProducts as $related)
                <div class="group bg-white rounded-xl overflow-hidden shadow-lg shadow-slate-200/50 hover:shadow-xl hover:shadow-slate-300/60 transition-all duration-300 border border-slate-100 flex flex-col h-full hover:-translate-y-1">
                    <a href="{{ route('products.show', $related->slug) }}" class="block">
                        <div class="h-56 bg-white relative p-6 flex items-center justify-center">
                            @if($related->image)
                                <img src="{{ asset('storage/' . $related->image) }}" alt="{{ $related->name }}" class="w-full h-full object-contain transform group-hover:scale-110 transition-transform duration-500">
                            @else
                                <i class="fas fa-box text-5xl text-slate-200 group-hover:text-red-400 transition-colors duration-500"></i>
                            @endif
                            <!-- Hover Overlay -->
                            <div class="absolute inset-0 bg-[#0a1628]/5 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        </div>
                    </a>
                    
                    <div class="p-6 border-t border-slate-50 flex-1 flex flex-col">
                        <span class="text-xs font-bold uppercase tracking-widest text-red-600 mb-2 block">{{ $related->category ? $related->category->name : 'Product' }}</span>
                        <a href="{{ route('products.show', $related->slug) }}" class="block">
                            <h3 class="text-xl font-bold text-[#0a1628] mb-2 font-['Rajdhani'] group-hover:text-red-600 transition-colors">{{ $related->name }}</h3>
                        </a>
                        <p class="text-sm text-slate-500 line-clamp-2 mb-6 flex-1">{{ $related->description ?? 'Premium heat exchanger designed for optimum performance.' }}</p>
                        
                        <div class="mt-auto pt-4 border-t border-slate-100">
                            <a href="{{ route('contact') }}" class="inline-flex items-center justify-between w-full px-4 py-2.5 text-sm font-bold tracking-widest uppercase text-red-600 transition-all duration-300 bg-red-50 rounded hover:bg-red-600 hover:text-white group/btn">
                                <span>Get Quote</span>
                                <i class="fas fa-arrow-right transform group-hover/btn:translate-x-1 transition-transform"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endif

<!-- Call to Action Banner -->
<section class="py-16 bg-[#0a1628] relative overflow-hidden">
    <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1581092160562-40aa08e78837?auto=format&fit=crop&q=80&w=2000')] bg-cover bg-center opacity-10 mix-blend-screen"></div>
    <div class="absolute inset-0 bg-gradient-to-r from-red-600/90 to-red-800/90 mix-blend-multiply"></div>
    <div class="container mx-auto px-4 relative z-10 text-center">
        <h2 class="text-3xl md:text-4xl font-black text-white mb-6 font-['Rajdhani']">Need a Custom Heat Exchanger Solution?</h2>
        <p class="text-slate-200 mb-8 max-w-2xl mx-auto">Our engineering team can design and manufacture custom plate heat exchangers tailored to your specific industrial requirements.</p>
        <a href="{{ route('contact') }}" class="inline-flex items-center justify-center px-10 py-4 text-sm font-bold tracking-widest uppercase text-[#0a1628] bg-white rounded shadow-xl hover:shadow-[0_0_30px_rgba(255,255,255,0.4)] transition-all hover:-translate-y-1">
            Talk to an Expert <i class="fas fa-arrow-right ml-3 text-red-600"></i>
        </a>
    </div>
</section>
@endsection
