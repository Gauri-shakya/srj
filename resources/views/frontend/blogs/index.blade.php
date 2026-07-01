@extends('frontend.layouts.app')

@section('meta_title', 'Our Blog | SRJ Heat Exchangers')
@section('meta_description', 'Read the latest insights and updates about heat exchangers and thermal systems from SRJ Heat Exchangers.')

@section('content')
<!-- Page Banner -->
<section class="page-banner relative bg-brand-dark py-16 md:py-24">
    <div class="absolute inset-0 opacity-20 bg-cover bg-center" style="background-image: url('{{ asset('images/pattern.png') }}');"></div>
    <div class="container relative z-10 text-center">
        <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Our Blog</h1>
        <p class="text-gray-300 max-w-2xl mx-auto text-lg">Industry insights, news, and technical guides from SRJ Heat Exchangers.</p>
    </div>
</section>

<!-- Blog Listing -->
<section class="blog-listing py-16 md:py-20 bg-gray-50">
    <div class="container">
        @if($blogs->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($blogs as $blog)
                <div class="blog-card bg-white rounded-lg overflow-hidden shadow-[0_4px_20px_rgba(0,0,0,0.05)] transition-all duration-300 hover:shadow-[0_10px_30px_rgba(0,0,0,0.1)] hover:-translate-y-1 flex flex-col h-full">
                    
                    <!-- Image -->
                    <div class="relative h-60 overflow-hidden group">
                        <a href="{{ route('blog.show', $blog->slug) }}" class="block w-full h-full">
                            <img src="{{ $blog->image ? asset('storage/'.$blog->image) : 'https://placehold.co/800x600?text=Blog+Image' }}" alt="{{ $blog->title }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                        </a>
                        <div class="absolute top-4 right-4 bg-brand-red text-white text-xs font-bold px-3 py-1 rounded shadow">
                            BLOG
                        </div>
                    </div>
                    
                    <!-- Content -->
                    <div class="p-6 flex flex-col flex-grow">
                        <h2 class="text-xl font-bold text-brand-dark mb-4 leading-snug line-clamp-3">
                            <a href="{{ route('blog.show', $blog->slug) }}" class="hover:text-brand-red transition-colors">
                                {{ $blog->title }}
                            </a>
                        </h2>
                        
                        <div class="mt-auto">
                            <a href="{{ route('blog.show', $blog->slug) }}" class="text-brand-red font-bold text-sm tracking-wider hover:text-red-700 transition-colors uppercase inline-flex items-center gap-1">
                                READ MORE 
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    
                    <!-- Footer with Date -->
                    <div class="px-6 py-4 border-t border-gray-100 mt-auto">
                        <span class="text-gray-500 text-sm flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            {{ $blog->created_at->format('F d, Y') }}
                        </span>
                    </div>
                </div>
                @endforeach
            </div>
            
            <!-- Pagination -->
            <div class="mt-12 flex justify-center">
                {{ $blogs->links() }}
            </div>
        @else
            <div class="text-center py-20">
                <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-gray-100 mb-4 text-gray-400">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9.5a2.5 2.5 0 00-2.5-2.5H14" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-700 mb-2">No blogs found</h3>
                <p class="text-gray-500">Check back later for new articles and updates.</p>
            </div>
        @endif
    </div>
</section>
@endsection
