@extends('frontend.layouts.app')

@section('title', 'PHE Replacement Parts & Gaskets | SRJ')

@section('content')
<div class="page-header bg-dark text-white text-center py-5" style="padding: 80px 0; background: linear-gradient(rgba(10,22,40,0.9), rgba(10,22,40,0.9)), url('https://images.unsplash.com/photo-1581092580497-e0d23cbdf1dc?auto=format&fit=crop&q=80'); background-size: cover;">
    <div class="container">
        <h1 class="text-white" style="font-size: 3rem;">Replacement Parts & Gaskets</h1>
        <p class="text-gold" style="font-size: 1.2rem;">OEM Compatible Parts for Global Brands</p>
    </div>
</div>

<section class="section bg-light">
    <div class="container">
        <div class="section-header text-center">
            <h2 class="section-title">Select Manufacturer Brand</h2>
            <p>We supply high-quality, OEM-compatible replacement plates and gaskets for all major plate heat exchanger brands.</p>
        </div>

        <div class="grid grid-4">
            @foreach($brands as $brand)
            <div class="card text-center" style="padding: 30px 20px;">
                @if($brand->logo)
                    <img src="{{ asset('storage/'.$brand->logo) }}" alt="{{ $brand->name }}" style="max-height: 60px; margin: 0 auto 20px;">
                @else
                    <i class="fas fa-cogs fa-3x text-primary mb-3"></i>
                @endif
                <h3 style="font-size: 1.2rem; margin-bottom: 10px;">{{ $brand->name }}</h3>
                <p style="font-size: 0.9rem; color: var(--text-light); margin-bottom: 20px;">{{ $brand->parts_count }} Parts Available</p>
                <a href="{{ route('replacement-brand', $brand->slug) }}" class="btn btn-outline-primary" style="border: 2px solid var(--primary); padding: 8px 20px; font-weight: bold; border-radius: 4px; display: inline-block;">View Parts</a>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
