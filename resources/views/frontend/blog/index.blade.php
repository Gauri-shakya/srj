@extends('frontend.layouts.app')

@section('title', 'Blog & News | SRJ Heat Exchangers')

@section('content')
<div class="page-header bg-dark text-white text-center py-5" style="padding: 80px 0;">
    <div class="container">
        <h1 class="text-white" style="font-size: 3rem;">Industry News & Guides</h1>
    </div>
</div>

<section class="section bg-light">
    <div class="container">
        <div class="grid" style="grid-template-columns: 3fr 1fr; gap: 40px;">
            <!-- Blog List -->
            <div>
                <div class="grid grid-2">
                    @foreach($blogs as $blog)
                    <div class="card" style="padding: 0; overflow: hidden;">
                        <div style="height: 220px; overflow: hidden;">
                            @if($blog->image)
                                <img src="{{ asset('storage/'.$blog->image) }}" alt="{{ $blog->title }}" style="width: 100%; height: 100%; object-fit: cover;">
                            @else
                                <div style="width: 100%; height: 100%; background: var(--primary); display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-newspaper fa-4x text-white"></i>
                                </div>
                            @endif
                        </div>
                        <div style="padding: 25px;">
                            <div style="display: flex; gap: 15px; font-size: 0.85rem; color: var(--text-light); margin-bottom: 15px;">
                                <span><i class="far fa-calendar-alt text-accent"></i> {{ $blog->published_at ? $blog->published_at->format('M d, Y') : '' }}</span>
                                @if($blog->category)
                                <span><i class="far fa-folder text-accent"></i> {{ $blog->category->name }}</span>
                                @endif
                            </div>
                            <h3 style="font-size: 1.4rem; margin-bottom: 15px;">
                                <a href="{{ route('blog.show', $blog->slug) }}">{{ $blog->title }}</a>
                            </h3>
                            <p style="color: var(--text-light); margin-bottom: 20px;">{{ Str::limit(strip_tags($blog->content), 120) }}</p>
                            <a href="{{ route('blog.show', $blog->slug) }}" class="btn-link">Read More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    @endforeach
                </div>
                
                <div style="margin-top: 40px; display: flex; justify-content: center;">
                    {{ $blogs->links() }}
                </div>
            </div>

            <!-- Sidebar -->
            <div class="sidebar">
                <div class="card mb-4">
                    <h3 style="margin-bottom: 20px; border-bottom: 2px solid var(--border); padding-bottom: 10px;">Categories</h3>
                    <ul style="list-style: none; padding: 0;">
                        @foreach($categories as $cat)
                        <li style="margin-bottom: 10px; border-bottom: 1px dashed var(--border); padding-bottom: 10px;">
                            <a href="{{ route('blog.category', $cat->slug) }}" style="display: flex; justify-content: space-between;">
                                <span>{{ $cat->name }}</span>
                                <span style="background: var(--light); padding: 2px 8px; border-radius: 20px; font-size: 0.8rem;">{{ $cat->blogs_count }}</span>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>

                <div class="card">
                    <h3 style="margin-bottom: 20px; border-bottom: 2px solid var(--border); padding-bottom: 10px;">Featured Posts</h3>
                    <ul style="list-style: none; padding: 0;">
                        @foreach($featuredBlogs as $fblog)
                        <li style="margin-bottom: 15px; display: flex; gap: 15px; align-items: center;">
                            @if($fblog->image)
                                <img src="{{ asset('storage/'.$fblog->image) }}" style="width: 60px; height: 60px; object-fit: cover; border-radius: 4px;">
                            @else
                                <div style="width: 60px; height: 60px; background: var(--primary); border-radius: 4px; display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-newspaper text-white"></i>
                                </div>
                            @endif
                            <div>
                                <h4 style="font-size: 1rem; margin: 0; line-height: 1.3;">
                                    <a href="{{ route('blog.show', $fblog->slug) }}">{{ Str::limit($fblog->title, 40) }}</a>
                                </h4>
                                <span style="font-size: 0.8rem; color: var(--text-light);">{{ $fblog->published_at ? $fblog->published_at->format('M d, Y') : '' }}</span>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
