@extends('frontend.layouts.app')

@section('title', $product->name . ' | ' . App\Models\Setting::get('site_name', 'SRJ Heat Exchangers'))

@section('content')
<!-- Product Header -->
<div class="relative pt-24 pb-16 lg:pt-32 lg:pb-24 overflow-hidden bg-black">
    <!-- Background Image -->
    @if($product->image)
        <div class="absolute inset-0 bg-[url('{{ asset('storage/' . $product->image) }}')] bg-cover bg-center bg-fixed"></div>
    @else
        <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&q=80&w=2000')] bg-cover bg-center bg-fixed"></div>
    @endif
    
    <!-- Dark Overlay so text is clear -->
    <div class="absolute inset-0 bg-black/70 z-0"></div>
    
    <div class="container mx-auto px-4 lg:px-8 relative z-10" data-aos="fade-up">
        <div class="flex flex-col items-start gap-3">
            <!-- Left Side: Title -->
            <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white drop-shadow-lg m-0 leading-tight max-w-4xl">
                {{ $product->name }}
            </h1>
            
            <!-- Breadcrumbs -->
            <div class="flex items-center flex-wrap gap-2 md:gap-3 text-xs md:text-sm font-bold uppercase tracking-widest text-white drop-shadow-md mt-2">
                <a href="{{ route('home') }}" class="hover:text-red-400 transition-colors border-b border-transparent hover:border-red-400 pb-0.5 whitespace-nowrap">HOME</a>
                <i class="fas fa-arrow-right text-red-500 text-[10px] md:text-xs"></i>
                @if($product->category)
                    <span class="text-slate-300 border-b border-transparent pb-0.5 whitespace-nowrap">{{ $product->category->name }}</span>
                    <i class="fas fa-arrow-right text-red-500 text-[10px] md:text-xs"></i>
                @endif
                <span class="hover:text-red-400 transition-colors border-b border-white pb-0.5 whitespace-nowrap cursor-default">{{ $product->name }}</span>
            </div>
        </div>
    </div>
</div>

<!-- Product Details Section -->
<section class="py-20 bg-white relative">
    <div class="container mx-auto px-4 lg:px-8">
        
        <!-- Top Area: Intro & Image -->
        <div class="grid lg:grid-cols-2 gap-10 lg:gap-16 items-start mb-12">
            
            <!-- Left Side: Title, Desc, Buttons -->
            <div class="order-2 lg:order-1 flex flex-col justify-center h-full" data-aos="fade-right">
                <h2 class="text-3xl lg:text-4xl font-black text-[#0a1628] mb-6 font-['Rajdhani'] leading-tight">
                    {{ $product->name }}
                </h2>
                
                @if($product->description)
                    <p class="text-base text-slate-600 mb-8 font-medium leading-relaxed text-justify">
                        {{ $product->description }}
                    </p>
                @endif
                
                <div class="flex flex-wrap items-center gap-4">
                    <button onclick="openQuoteModal()" class="inline-flex items-center justify-center px-8 py-3.5 text-sm font-bold tracking-widest uppercase text-white transition-all duration-300 bg-red-600 rounded-full shadow-lg shadow-red-600/30 hover:bg-[#0a1628] hover:-translate-y-1">
                        Request a Quote <i class="fas fa-arrow-right ml-2"></i>
                    </button>
                    <a href="https://wa.me/919716115504?text={{ urlencode('Hello, I am interested in ' . $product->name . '. Can you provide more details?') }}" target="_blank" class="inline-flex items-center justify-center px-8 py-3.5 text-sm font-bold tracking-widest uppercase text-[#0a1628] transition-all duration-300 bg-slate-100 rounded-full hover:bg-green-500 hover:text-white hover:-translate-y-1 group">
                        <i class="fab fa-whatsapp text-lg mr-2 text-green-500 group-hover:text-white"></i> Chat on WhatsApp
                    </a>
                </div>
            </div>
            
            <!-- Right Side: Image -->
            <div class="order-1 lg:order-2 relative" data-aos="fade-left">
                <div class="relative z-10 rounded-3xl overflow-hidden shadow-[0_20px_50px_rgba(10,22,40,0.08)] bg-white border border-slate-100 group">
                    <div class="absolute inset-0 bg-[#0a1628]/5 group-hover:bg-transparent transition-colors duration-500 z-10 pointer-events-none"></div>
                    @if($product->image)
                        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-full h-auto min-h-[350px] object-cover transform group-hover:scale-110 transition-transform duration-700">
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
        
        <!-- Divider -->
        <hr class="border-t border-slate-200 mb-12">
        
        <!-- Full Width Content Area -->
        <div class="w-full max-w-5xl mx-auto" data-aos="fade-up">
            <!-- Filament RichText Output -->
            <div class="prose prose-base prose-slate max-w-none text-slate-600 font-normal text-justify prose-headings:text-[#0a1628] prose-headings:font-bold prose-headings:font-['Rajdhani'] prose-a:text-red-600 prose-li:marker:text-red-600 prose-ul:list-image-[url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgaGVpZ2h0PSIxNiIgZmlsbD0iI2RjMjYyNiIgY2xhc3M9ImJpIGJpLWNoZWNrLWNpcmNsZS1maWxsIiB2aWV3Qm94PSIwIDAgMTYgMTYiPjxwYXRoIGQ9Ik0xNiA4QTE2IDE2IDAgMSAxIDAgOGE4IDggMCAwIDEgMTYgMHptLTMuOTctMy4wM2EtLjc1Ljc1IDAgMCAwLTEuMDgtdW0tLjIyLS4yMmwtMy40NyAzLjQ3LTEuNDQtMS40NGEuNzUuNzUgMCAwIDAtMS4wNiAxLjA2bDIgMmEuNzUuNzUgMCAwIDAgMS4wNiAwbDQtNGEuNzUuNzUgMCAwIDAgMC0xLjA2eiIvPjwvc3ZnPg==')] space-y-4">
                {!! $product->content !!}
            </div>
        </div>
        
        <!-- Quote Modal -->
        <div id="quoteModal" class="fixed inset-0 z-[9999] hidden flex items-center justify-center p-4 sm:p-6">
            <!-- Modal Backdrop -->
            <div class="absolute inset-0 bg-[#0a1628]/80 backdrop-blur-sm" onclick="closeQuoteModal()"></div>
            
            <!-- Modal Content -->
            <div class="relative w-full max-w-lg max-h-full flex flex-col bg-white rounded-2xl shadow-2xl overflow-hidden animate-[fade-in-up_0.3s_ease-out]">
                <!-- Modal Header -->
                <div class="bg-[#0a1628] p-4 md:p-5 flex items-center justify-between shrink-0">
                    <h3 class="text-lg md:text-xl font-bold text-white font-['Rajdhani']">Request a Quote</h3>
                    <button onclick="closeQuoteModal()" class="text-slate-300 hover:text-white transition-colors w-8 h-8 flex items-center justify-center rounded-full hover:bg-white/10">
                        <i class="fas fa-times text-lg"></i>
                    </button>
                </div>
                
                <!-- Modal Body -->
                <div class="p-5 md:p-8 overflow-y-auto custom-scrollbar">
                    <form action="{{ route('quote.store') }}" method="POST" class="space-y-4">
                        @csrf
                        <input type="hidden" name="product_name" value="{{ $product->name }}">
                        
                        <div>
                            <label class="block text-sm font-bold text-[#0a1628] mb-1.5">Full Name <span class="text-red-600">*</span></label>
                            <input type="text" name="name" required class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-lg focus:ring-2 focus:ring-red-600/20 focus:border-red-600 outline-none text-sm transition-all" placeholder="Enter your name">
                        </div>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-bold text-[#0a1628] mb-1.5">Email Address <span class="text-red-600">*</span></label>
                                <input type="email" name="email" required class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-lg focus:ring-2 focus:ring-red-600/20 focus:border-red-600 outline-none text-sm transition-all" placeholder="Enter your email">
                            </div>
                            <div>
                                <label class="block text-sm font-bold text-[#0a1628] mb-1.5">Phone Number <span class="text-red-600">*</span></label>
                                <input type="tel" name="phone" required class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-lg focus:ring-2 focus:ring-red-600/20 focus:border-red-600 outline-none text-sm transition-all" placeholder="Enter your phone">
                            </div>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-bold text-[#0a1628] mb-1.5">Your Requirement <span class="text-red-600">*</span></label>
                            <textarea name="requirement" required rows="4" class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-lg focus:ring-2 focus:ring-red-600/20 focus:border-red-600 outline-none text-sm transition-all resize-none" placeholder="Tell us what you need..."></textarea>
                        </div>
                        
                        <button type="submit" class="w-full bg-red-600 hover:bg-[#0a1628] text-white font-bold py-3.5 mt-2 rounded-lg transition-colors shadow-lg shadow-red-600/30 uppercase tracking-widest text-sm flex items-center justify-center gap-2">
                            Submit Request <i class="fas fa-paper-plane"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
        
        <style>
            @keyframes fade-in-up {
                0% { opacity: 0; transform: translateY(20px); }
                100% { opacity: 1; transform: translateY(0); }
            }
        </style>
        
        <script>
            function openQuoteModal(productName = null) {
                const modal = document.getElementById('quoteModal');
                const productNameInput = modal.querySelector('input[name="product_name"]');
                if (productName) {
                    productNameInput.value = productName;
                } else {
                    productNameInput.value = "{{ addslashes($product->name) }}";
                }
                modal.classList.remove('hidden');
                document.body.style.overflow = 'hidden'; // Prevent background scrolling
            }
            
            function closeQuoteModal() {
                const modal = document.getElementById('quoteModal');
                modal.classList.add('hidden');
                document.body.style.overflow = 'auto'; // Restore scrolling
            }
        </script>
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
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($relatedProducts as $related)
                <div class="group bg-white rounded-2xl overflow-hidden shadow-[0_10px_30px_rgba(10,22,40,0.08)] hover:shadow-[0_20px_40px_rgba(10,22,40,0.12)] transition-all duration-300 border border-slate-200 flex flex-col h-full hover:-translate-y-2">
                    <a href="{{ route('products.show', $related->slug) }}" class="block">
                        <div class="h-64 bg-slate-50/50 relative p-3 flex items-center justify-center">
                            @if($related->image)
                                <img src="{{ asset('storage/' . $related->image) }}" alt="{{ $related->name }}" class="w-full h-full object-contain transform group-hover:scale-110 transition-transform duration-500 drop-shadow-md">
                            @else
                                <i class="fas fa-box text-5xl text-slate-200 group-hover:text-red-400 transition-colors duration-500"></i>
                            @endif
                            <!-- Hover Overlay -->
                            <div class="absolute inset-0 bg-[#0a1628]/5 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        </div>
                    </a>
                    
                    <div class="p-6 flex-1 flex flex-col">
                        <span class="text-[10px] font-bold uppercase tracking-widest text-red-600 mb-2 block">{{ $related->category ? $related->category->name : 'Product' }}</span>
                        <a href="{{ route('products.show', $related->slug) }}" class="block mb-2">
                            <h3 class="text-xl font-bold text-[#0a1628] font-['Rajdhani'] group-hover:text-red-600 transition-colors leading-tight">{{ $related->name }}</h3>
                        </a>
                        <p class="text-sm text-slate-500 line-clamp-2 mb-6 flex-1">{{ $related->description ?? 'Premium heat exchanger designed for optimum performance and industrial reliability.' }}</p>
                        
                        <div class="mt-auto pt-5 border-t border-slate-100 grid grid-cols-2 gap-3">
                            <button onclick="openQuoteModal('{{ addslashes($related->name) }}')" class="inline-flex items-center justify-center w-full px-2 py-2.5 text-[11px] lg:text-xs font-bold tracking-wider uppercase text-white transition-all duration-300 bg-red-600 rounded-lg shadow-md shadow-red-600/20 hover:bg-[#0a1628] hover:-translate-y-1 hover:shadow-lg">
                                Get Quote
                            </button>
                            <a href="https://wa.me/919716115504?text={{ urlencode('Hello, I want to know more about ' . $related->name) }}" target="_blank" class="whatsapp-card-btn inline-flex items-center justify-center w-full px-2 py-2.5 text-[11px] lg:text-xs font-bold tracking-wider uppercase text-[#0a1628] transition-all duration-300 bg-slate-100 rounded-lg hover:bg-green-500 hover:text-white hover:-translate-y-1 hover:shadow-lg group/wa">
                                <i class="fab fa-whatsapp text-sm mr-1.5 text-green-500 group-hover/wa:text-white transition-colors"></i> WhatsApp
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
