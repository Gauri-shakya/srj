@extends('frontend.layouts.app')

@section('title', $product->meta_title ?? $product->name . ' | SRJ Heat Exchangers')
@section('meta_description', $product->meta_description ?? $product->short_description)

@section('content')
<div class="page-header bg-dark text-white text-center py-5" style="padding: 60px 0;">
    <div class="container">
        <h1 class="text-white" style="font-size: 2.5rem;">{{ $product->name }}</h1>
        <p class="text-gold"><a href="{{ route('products.index') }}" class="text-white">Products</a> / <a href="{{ route('products.category', $product->category->slug) }}" class="text-white">{{ $product->category->name }}</a></p>
    </div>
</div>

<section class="section">
    <div class="container">
        <div class="two-col" style="align-items: start;">
            <!-- Image Gallery -->
            <div class="product-gallery">
                <div class="main-image card" style="padding: 40px; text-align: center; border: 1px solid var(--border); margin-bottom: 20px;">
                    @if($product->image)
                        <img src="{{ asset('storage/'.$product->image) }}" alt="{{ $product->name }}" id="mainImage">
                    @else
                        <i class="fas fa-industry fa-10x text-gray"></i>
                    @endif
                </div>
                @if($product->gallery && count($product->gallery) > 0)
                <div class="thumb-grid" style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 10px;">
                    <div class="card thumb active" style="padding: 10px; cursor: pointer; border: 2px solid var(--accent);">
                        <img src="{{ asset('storage/'.$product->image) }}" alt="{{ $product->name }}">
                    </div>
                    @foreach($product->gallery as $img)
                    <div class="card thumb" style="padding: 10px; cursor: pointer; border: 1px solid var(--border);">
                        <img src="{{ asset('storage/'.$img) }}" alt="{{ $product->name }}">
                    </div>
                    @endforeach
                </div>
                @endif
            </div>

            <!-- Product Details -->
            <div>
                <span class="section-badge">{{ $product->category->name }}</span>
                <h2 style="font-size: 2rem; margin-bottom: 20px;">{{ $product->name }}</h2>
                <div class="description" style="margin-bottom: 30px; font-size: 1.1rem; color: var(--text-light);">
                    {!! $product->description !!}
                </div>

                @if($product->specifications && count($product->specifications) > 0)
                <div class="specs-table" style="margin-bottom: 40px;">
                    <h3 style="margin-bottom: 15px; border-bottom: 2px solid var(--accent); display: inline-block; padding-bottom: 5px;">Technical Specifications</h3>
                    <table style="width: 100%; border-collapse: collapse; margin-top: 10px;">
                        @foreach($product->specifications as $key => $value)
                        <tr>
                            <th style="padding: 12px; border: 1px solid var(--border); background: var(--light); width: 40%; text-align: left;">{{ $key }}</th>
                            <td style="padding: 12px; border: 1px solid var(--border);">{{ $value }}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
                @endif
                
                <div class="grid grid-2" style="gap: 20px;">
                    @if($product->features && count($product->features) > 0)
                    <div class="features-list card bg-light" style="padding: 20px;">
                        <h4 style="margin-bottom: 15px; color: var(--accent);">Key Features</h4>
                        <ul style="list-style: none;">
                            @foreach($product->features as $feature)
                            <li style="margin-bottom: 10px;"><i class="fas fa-check text-accent" style="margin-right: 10px;"></i> {{ $feature }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    @if($product->applications && count($product->applications) > 0)
                    <div class="applications-list card bg-light" style="padding: 20px;">
                        <h4 style="margin-bottom: 15px; color: var(--gold);">Applications</h4>
                        <ul style="list-style: none;">
                            @foreach($product->applications as $app)
                            <li style="margin-bottom: 10px;"><i class="fas fa-bullseye text-gold" style="margin-right: 10px;"></i> {{ $app }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                </div>

                <div style="margin-top: 40px;">
                    <a href="{{ route('contact') }}" class="btn btn-primary btn-lg">Request a Quote</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
