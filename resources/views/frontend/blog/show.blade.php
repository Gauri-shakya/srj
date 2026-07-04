@extends('frontend.layouts.app')

@section('title', $blog->meta_title ?? $blog->title . ' | SRJ Heat Exchangers')
@section('meta_description', $blog->meta_description ?? $blog->excerpt)

@section('content')
<!-- Blog Header -->
<div class="page-header bg-dark text-white text-center py-5" style="padding: 100px 0; background: linear-gradient(rgba(10,22,40,0.9), rgba(10,22,40,0.9)), url('{{ $blog->image ? asset('storage/'.$blog->image) : 'https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?auto=format&fit=crop&q=80' }}'); background-size: cover; background-position: center;">
    <div class="container" style="max-width: 800px;">
        @if($blog->category)
        <span class="section-badge bg-accent text-white" style="background: var(--accent); color: #fff; border:none; margin-bottom: 20px;">{{ $blog->category->name }}</span>
        @endif
        <h1 class="text-white" style="font-size: 3rem; margin-bottom: 20px; line-height: 1.2;">{{ $blog->title }}</h1>
        <div style="display: flex; gap: 20px; justify-content: center; font-size: 0.9rem; color: rgba(255,255,255,0.8);">
            <span><i class="far fa-calendar-alt"></i> {{ $blog->published_at ? $blog->published_at->format('M d, Y') : '' }}</span>
            <span><i class="far fa-eye"></i> {{ $blog->views }} Views</span>
        </div>
    </div>
</div>

<section class="section">
    <div class="container" style="max-width: 900px;">
        <div class="blog-content card shadow-lg" style="padding: 50px; font-size: 1.1rem; line-height: 1.8; color: var(--text);">
            {!! $blog->content !!}
        </div>

        @if($relatedBlogs->count() > 0)
        <div style="margin-top: 60px;">
            <h3 style="margin-bottom: 30px; border-bottom: 2px solid var(--border); padding-bottom: 10px;">Related Articles</h3>
            <div class="grid grid-3">
                @foreach($relatedBlogs as $rblog)
                <div class="card" style="padding: 0; overflow: hidden;">
                    <div style="height: 180px; overflow: hidden;">
                        @if($rblog->image)
                            <img src="{{ asset('storage/'.$rblog->image) }}" alt="{{ $rblog->alt_text ?? $rblog->title }}" loading="lazy" style="width: 100%; height: 100%; object-fit: cover;">
                        @else
                            <div style="width: 100%; height: 100%; background: var(--primary); display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-newspaper fa-3x text-white"></i>
                            </div>
                        @endif
                    </div>
                    <div style="padding: 20px;">
                        <h4 style="font-size: 1.1rem; margin-bottom: 10px;">
                            <a href="{{ route('blog.show', $rblog->slug) }}">{{ Str::limit($rblog->title, 50) }}</a>
                        </h4>
                        <a href="{{ route('blog.show', $rblog->slug) }}" class="btn-link" style="font-size: 0.9rem;">Read More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endif
    </div>
</section>
@endsection
