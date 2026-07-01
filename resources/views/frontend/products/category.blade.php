@extends('frontend.layouts.app')

@section('title', $category->name . ' | ' . App\Models\Setting::get('site_name', 'SRJ Heat Exchangers'))

@section('content')
<!-- Category Header -->
<div class="relative pt-32 pb-24 lg:pt-40 lg:pb-32 overflow-hidden bg-[#0a1628]">
    <!-- Background Image -->
    @if($category->image)
        <div class="absolute inset-0 bg-[url('{{ asset('storage/' . $category->image) }}')] bg-cover bg-center opacity-20 mix-blend-luminosity"></div>
    @else
        <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&q=80&w=2000')] bg-cover bg-center opacity-20 mix-blend-luminosity"></div>
    @endif
    <div class="absolute inset-0 bg-gradient-to-r from-[#0a1628] via-[#0a1628]/90 to-red-900/40"></div>
    
    <div class="absolute top-1/4 right-10 w-64 h-64 bg-red-600 rounded-full blur-[120px] opacity-40"></div>
    
    <div class="container mx-auto px-4 lg:px-8 relative z-10 text-center" data-aos="fade-up">
        <span class="inline-block px-4 py-1 bg-white/10 backdrop-blur-md rounded-full text-red-400 font-bold tracking-[0.2em] uppercase text-xs mb-6 border border-white/10">Our Products</span>
        <h1 class="text-5xl md:text-6xl lg:text-7xl font-black text-white mb-6 leading-tight font-['Rajdhani'] drop-shadow-2xl">
            {{ $category->name }}
        </h1>
        @if($category->description)
            <p class="text-slate-300 max-w-2xl mx-auto mb-8 font-light text-lg">{{ $category->description }}</p>
        @endif
        
        <div class="flex items-center justify-center gap-3 text-sm md:text-base font-bold uppercase tracking-widest text-slate-300">
            <a href="{{ route('home') }}" class="hover:text-red-400 transition-colors flex items-center gap-2"><i class="fas fa-home"></i> Home</a>
            <span class="text-slate-500">/</span>
            <span class="text-white">{{ $category->name }}</span>
        </div>
    </div>
    
    <!-- Wave separator -->
    <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none z-20">
        <svg class="relative block w-full h-[50px] md:h-[80px]" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V120H0V95.8C59.71,118.08,130.83,123.59,190.27,110.15,236.42,99.8,279.79,78.36,321.39,56.44Z" class="fill-white"></path>
        </svg>
    </div>
</div>

<!-- Products List -->
<section class="py-24 bg-white relative">
    <div class="container mx-auto px-4 lg:px-8">
        
        @forelse($products as $index => $product)
            <div class="mb-32 last:mb-0 group" data-aos="fade-up" data-aos-delay="100">
                <div class="grid lg:grid-cols-12 gap-12 lg:gap-20 items-center">
                    
                    <!-- Content (Alternating Order) -->
                    <div class="lg:col-span-7 {{ $index % 2 != 0 ? 'lg:order-2' : '' }}">
                        <h2 class="text-3xl lg:text-4xl font-black text-[#0a1628] mb-6 font-['Rajdhani'] leading-tight">
                            {{ $product->name }}
                        </h2>
                        
                        <!-- Filament RichText Output -->
                        <div class="prose prose-lg prose-slate max-w-none text-slate-600 font-light prose-headings:text-[#0a1628] prose-headings:font-bold prose-headings:font-['Rajdhani'] prose-a:text-red-600 prose-li:marker:text-red-600 prose-ul:list-image-[url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgaGVpZ2h0PSIxNiIgZmlsbD0iI2RjMjYyNiIgY2xhc3M9ImJpIGJpLWNoZWNrLWNpcmNsZS1maWxsIiB2aWV3Qm94PSIwIDAgMTYgMTYiPjxwYXRoIGQ9Ik0xNiA4QTE2IDE2IDAgMSAxIDAgOGE4IDggMCAwIDEgMTYgMHptLTMuOTctMy4wM2EtLjc1Ljc1IDAgMCAwLTEuMDgtdW0tLjIyLS4yMmwtMy40NyAzLjQ3LTEuNDQtMS40NGEuNzUuNzUgMCAwIDAtMS4wNiAxLjA2bDIgMmEuNzUuNzUgMCAwIDAgMS4wNiAwbDQtNGEuNzUuNzUgMCAwIDAgMC0xLjA2eiIvPjwvc3ZnPg==')]">
                            {!! $product->content !!}
                        </div>
                        
                        <div class="mt-8 pt-8 border-t border-slate-100">
                            <a href="{{ route('contact') }}" class="inline-flex items-center justify-center px-8 py-3.5 text-sm font-bold tracking-widest uppercase text-white transition-all duration-300 bg-red-600 rounded shadow-lg shadow-red-600/30 hover:bg-[#0a1628] hover:-translate-y-1">
                                Request Quote <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                        </div>
                    </div>
                    
                    <!-- Image -->
                    <div class="lg:col-span-5 relative {{ $index % 2 != 0 ? 'lg:order-1' : '' }}">
                        <div class="relative z-10 rounded-2xl overflow-hidden group-hover:shadow-[0_20px_50px_rgba(10,22,40,0.1)] transition-all duration-500 p-4 bg-white border border-slate-50">
                            @if($product->image)
                                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-full h-auto object-contain transform group-hover:scale-105 transition-transform duration-700">
                            @else
                                <div class="w-full h-[400px] bg-slate-100 rounded-xl flex items-center justify-center text-slate-400">
                                    <i class="fas fa-image text-5xl"></i>
                                </div>
                            @endif
                        </div>
                        
                        <!-- Decorative Blob behind image -->
                        <div class="absolute inset-0 bg-red-50 rounded-full blur-[80px] -z-10 transform scale-75 group-hover:scale-100 transition-transform duration-700"></div>
                    </div>
                </div>
            </div>
        @empty
            <div class="text-center py-20" data-aos="fade-up">
                <div class="w-24 h-24 bg-red-50 text-red-600 rounded-full flex items-center justify-center text-4xl mx-auto mb-6">
                    <i class="fas fa-box-open"></i>
                </div>
                <h3 class="text-2xl font-bold text-[#0a1628] mb-3">No Products Found</h3>
                <p class="text-slate-500">Products are currently being updated in this category. Please check back later.</p>
                <a href="{{ route('home') }}" class="inline-block mt-6 px-6 py-3 text-red-600 font-bold hover:bg-red-50 rounded-lg transition-colors">Return Home</a>
            </div>
        @endforelse
        
    </div>
</section>

<!-- Related Categories / Products Section -->
<section class="py-20 bg-slate-100 border-t border-slate-200">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl lg:text-4xl font-black text-[#0a1628] font-['Rajdhani']">Explore <span class="text-red-600">Other Categories</span></h2>
            <div class="w-16 h-1 bg-red-600 mx-auto mt-4 rounded-full"></div>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach(\App\Models\ProductCategory::where('is_active', true)->where('id', '!=', $category->id)->inRandomOrder()->take(3)->get() as $relatedCat)
                <a href="{{ route('products.category', $relatedCat->slug) }}" class="group block bg-white rounded-xl overflow-hidden shadow-[0_10px_30px_rgba(0,0,0,0.05)] hover:shadow-[0_20px_40px_rgba(220,38,38,0.1)] transition-all duration-300 hover:-translate-y-2 border border-slate-100">
                    <div class="h-48 bg-slate-50 relative overflow-hidden flex items-center justify-center p-6">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 z-10"></div>
                        @if($relatedCat->image)
                            <img src="{{ asset('storage/' . $relatedCat->image) }}" alt="{{ $relatedCat->name }}" class="w-full h-full object-contain transform group-hover:scale-110 transition-transform duration-500">
                        @else
                            <i class="fas fa-industry text-5xl text-slate-300 group-hover:text-red-400 transition-colors duration-500"></i>
                        @endif
                        <div class="absolute bottom-4 right-4 z-20 translate-x-10 opacity-0 group-hover:translate-x-0 group-hover:opacity-100 transition-all duration-300">
                            <div class="w-10 h-10 bg-red-600 rounded-full flex items-center justify-center text-white shadow-lg">
                                <i class="fas fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                    <div class="p-6 border-t border-slate-100 relative">
                        <div class="absolute top-0 left-0 w-0 h-0.5 bg-red-600 group-hover:w-full transition-all duration-500"></div>
                        <h3 class="text-xl font-bold text-[#0a1628] mb-2 font-['Rajdhani'] group-hover:text-red-600 transition-colors">{{ $relatedCat->name }}</h3>
                        <p class="text-sm text-slate-500 line-clamp-2">{{ $relatedCat->description ?? 'Explore our wide range of ' . strtolower($relatedCat->name) . ' designed for maximum efficiency.' }}</p>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</section>

<!-- Call to Action Banner -->
<section class="py-16 bg-[#0a1628] relative overflow-hidden">
    <div class="absolute inset-0 bg-red-600 opacity-90 mix-blend-multiply"></div>
    <div class="container mx-auto px-4 relative z-10 text-center">
        <h2 class="text-3xl md:text-4xl font-black text-white mb-6 font-['Rajdhani']">Need a Custom Heat Exchanger Solution?</h2>
        <p class="text-slate-200 mb-8 max-w-2xl mx-auto">Our engineering team can design and manufacture custom plate heat exchangers tailored to your specific industrial requirements.</p>
        <a href="{{ route('contact') }}" class="inline-flex items-center justify-center px-10 py-4 text-sm font-bold tracking-widest uppercase text-[#0a1628] bg-white rounded-full shadow-xl hover:shadow-[0_0_30px_rgba(255,255,255,0.4)] transition-all hover:-translate-y-1">
            Talk to an Expert <i class="fas fa-arrow-right ml-3 text-red-600"></i>
        </a>
    </div>
</section>
@endsection
