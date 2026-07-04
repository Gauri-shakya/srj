@extends('frontend.layouts.app')

@section('meta_title', $blog->meta_title ?? $blog->title . ' | SRJ Heat Exchangers')
@section('meta_description', $blog->meta_description ?? Str::limit(strip_tags($blog->short_description), 160))

@section('content')
<!-- Page Banner -->
<section class="page-banner relative bg-[#0a1628] py-20 md:py-32">
    <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&q=80&w=2000');"></div>
    <div class="absolute inset-0 bg-[#0a1628] bg-opacity-75"></div>
    <div class="container relative z-10 text-center">
        <h1 class="text-3xl md:text-4xl font-black text-white mb-4 tracking-tight">Blog Detail</h1>
        <div class="text-brand-red flex items-center justify-center gap-2 text-sm font-medium">
            <a href="{{ route('home') }}" class="text-gray-300 hover:text-white transition-colors">Home</a>
            <span class="text-gray-500">/</span>
            <a href="{{ route('blog.index') }}" class="text-gray-300 hover:text-white transition-colors">Blog</a>
            <span class="text-gray-500">/</span>
            <span class="text-white">{{ Str::limit($blog->title, 40) }}</span>
        </div>
    </div>
</section>

<!-- Blog Content -->
<section class="blog-detail py-12 md:py-20 bg-gray-50">
    <div class="container">
        <div class="flex flex-col lg:flex-row gap-10">
            
            <!-- Main Content Area -->
            <div class="lg:w-2/3">
                <article class="bg-white rounded-lg shadow-sm overflow-hidden p-6 md:p-8">
                    
                    <!-- Blog Image -->
                    <div class="rounded-lg overflow-hidden mb-8 relative">
                        <img src="{{ $blog->image ? asset('storage/'.$blog->image) : 'https://images.unsplash.com/photo-1537462715879-360eeb61a0ad?auto=format&fit=crop&q=80&w=1200' }}" alt="{{ $blog->alt_text ?? $blog->title }}" loading="lazy" class="w-full h-auto object-cover max-h-[500px]">
                        <div class="absolute top-4 left-4 bg-brand-red text-white text-xs font-bold px-3 py-1 rounded shadow flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            {{ $blog->created_at->format('F d, Y') }}
                        </div>
                    </div>
                    
                    <!-- Heading -->
                    <h1 class="text-2xl md:text-3xl lg:text-4xl font-bold text-brand-dark mb-6 leading-tight">
                        {{ $blog->title }}
                    </h1>
                    
                    <!-- Short Description -->
                    @if($blog->short_description)
                    <div class="text-xl text-gray-600 font-medium leading-relaxed mb-8 border-l-4 border-brand-red pl-4 italic">
                        {{ $blog->short_description }}
                    </div>
                    @endif
                    
                    <!-- Long Description (Rich Text) -->
                    <div class="prose max-w-none text-gray-700 leading-loose prose-headings:text-brand-dark prose-a:text-brand-red hover:prose-a:text-red-700 prose-img:rounded-lg">
                        {!! $blog->long_description !!}
                    </div>
                    
                </article>
            </div>
            
            <!-- Sidebar -->
            <div class="lg:w-1/3">
                <div class="sticky top-24">
                    
                    <!-- Recent Posts Widget -->
                    <div class="bg-white rounded-lg shadow-sm p-6 mb-8">
                        <h3 class="text-xl font-bold text-brand-dark mb-6 relative pb-3 border-b border-gray-100">
                            Recent Posts
                            <span class="absolute bottom-0 left-0 w-12 h-0.5 bg-brand-red"></span>
                        </h3>
                        
                        @if($recentBlogs->count() > 0)
                            <div class="flex flex-col gap-5">
                                @foreach($recentBlogs as $recent)
                                <div class="flex gap-4 group">
                                    <div class="w-20 h-20 flex-shrink-0 rounded overflow-hidden">
                                        <a href="{{ route('blog.show', $recent->slug) }}">
                                            <img src="{{ $recent->image ? asset('storage/'.$recent->image) : 'https://images.unsplash.com/photo-1581092160562-40aa08e78837?auto=format&fit=crop&q=80&w=300' }}" alt="{{ $recent->title }}" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110">
                                        </a>
                                    </div>
                                    <div class="flex flex-col justify-center">
                                        <h4 class="font-bold text-brand-dark text-sm leading-tight mb-2 line-clamp-2">
                                            <a href="{{ route('blog.show', $recent->slug) }}" class="hover:text-brand-red transition-colors">
                                                {{ $recent->title }}
                                            </a>
                                        </h4>
                                        <span class="text-xs text-gray-500 flex items-center gap-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            {{ $recent->created_at->format('M d, Y') }}
                                        </span>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        @else
                            <p class="text-gray-500 text-sm">No recent posts available.</p>
                        @endif
                    </div>
                    
                    <!-- Need Help Widget -->
                    <div class="bg-brand-dark text-white rounded-lg shadow-sm p-6 text-center">
                        <h3 class="text-xl font-bold mb-4">Need Heat Exchangers?</h3>
                        <p class="text-sm text-gray-300 mb-6">Contact our experts for customized thermal solutions for your industry.</p>
                        <a href="{{ route('contact') }}" class="inline-block bg-brand-red text-white font-bold py-3 px-6 rounded hover:bg-red-700 transition-colors w-full">
                            Contact Us Today
                        </a>
                    </div>
                    
                </div>
            </div>
            
        </div>
    </div>
</section>
@endsection
