@extends('frontend.layouts.app')

@section('title', 'Industrial Plate Heat Exchangers | SRJ')

@section('content')
<div class="page-header bg-dark text-white text-center py-5" style="padding: 80px 0; background: linear-gradient(rgba(10,22,40,0.9), rgba(10,22,40,0.9)), url('https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&q=80'); background-size: cover;">
    <div class="container">
        <h1 class="text-white" style="font-size: 3rem;">Our Products</h1>
    </div>
</div>

<section class="section bg-light">
    <div class="container">
        <!-- Categories Filter (Visual only for now, could be JS filtered or server side) -->
        <div class="text-center mb-5" style="margin-bottom: 40px;">
            <a href="{{ route('products.index') }}" class="btn btn-primary" style="margin: 5px;">All</a>
            @foreach($categories as $cat)
                <a href="{{ route('products.category', $cat->slug) }}" class="btn btn-dark" style="margin: 5px; background: #fff; border: 1px solid var(--border); color: var(--text);">{{ $cat->name }}</a>
            @endforeach
        </div>

        <div class="grid grid-3">
            @foreach($products as $product)
            <div class="card" style="padding: 0; overflow: hidden; display: flex; flex-direction: column;">
                <div style="height: 250px; background: #fff; display: flex; align-items: center; justify-content: center; padding: 20px; border-bottom: 1px solid var(--border);">
                    @if($product->image)
                        <img src="{{ asset('storage/'.$product->image) }}" alt="{{ $product->name }}" style="max-height: 100%;">
                    @else
                        <i class="fas fa-industry fa-5x text-gray"></i>
                    @endif
                </div>
                <div style="padding: 25px; flex-grow: 1;">
                    <span style="font-size: 12px; color: var(--accent); font-weight: bold; text-transform: uppercase;">{{ $product->category->name }}</span>
                    <h3 style="margin: 10px 0;">
                        <a href="{{ route('products.show', $product->slug) }}">{{ $product->name }}</a>
                    </h3>
                    <p class="text-gray" style="font-size: 14px; margin-bottom: 20px;">{{ Str::limit($product->short_description, 100) }}</p>
                    <a href="{{ route('products.show', $product->slug) }}" class="btn-link">View Details <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            @endforeach
        </div>
        
        <div style="margin-top: 40px; display: flex; justify-content: center;">
            {{ $products->links() }}
        </div>
    </div>
</section>
@endsection
