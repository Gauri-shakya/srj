@extends('frontend.layouts.app')

@section('title', $brand->name . ' Replacement Parts | SRJ Heat Exchangers')
@section('meta_description', $brand->meta_description ?? $brand->description)

@section('content')
<div class="page-header bg-dark text-white text-center py-5" style="padding: 80px 0;">
    <div class="container">
        @if($brand->logo)
            <img src="{{ asset('storage/'.$brand->logo) }}" alt="{{ $brand->name }}" style="max-height: 80px; margin: 0 auto 20px; background: white; padding: 10px; border-radius: 4px;">
        @endif
        <h1 class="text-white" style="font-size: 3rem;">{{ $brand->name }} Replacement Parts</h1>
        <p class="text-gold" style="font-size: 1.2rem;">High Quality OEM Compatible Parts</p>
    </div>
</div>

<section class="section bg-light">
    <div class="container">
        @if($parts->count() > 0)
        <div class="grid grid-3">
            @foreach($parts as $part)
            <div class="card" style="padding: 0; overflow: hidden; display: flex; flex-direction: column;">
                <div style="height: 250px; background: #fff; display: flex; align-items: center; justify-content: center; padding: 20px; border-bottom: 1px solid var(--border);">
                    @if($part->image)
                        <img src="{{ asset('storage/'.$part->image) }}" alt="{{ $part->name }}" style="max-height: 100%;">
                    @else
                        <i class="fas fa-cog fa-5x text-gray"></i>
                    @endif
                </div>
                <div style="padding: 25px; flex-grow: 1;">
                    <span style="font-size: 12px; color: var(--accent); font-weight: bold; text-transform: uppercase;">{{ $brand->name }}</span>
                    <h3 style="margin: 10px 0;">{{ $part->name }}</h3>
                    <p class="text-gray" style="font-size: 14px; margin-bottom: 20px;">{{ Str::limit($part->short_description, 100) }}</p>
                    <a href="{{ route('contact') }}?subject=Inquiry for {{ $part->name }} ({{ $brand->name }})" class="btn-link">Inquire Now <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            @endforeach
        </div>
        <div style="margin-top: 40px; display: flex; justify-content: center;">
            {{ $parts->links() }}
        </div>
        @else
        <div class="text-center" style="padding: 50px;">
            <i class="fas fa-box-open fa-4x text-gray mb-3"></i>
            <h3>No parts found for this brand</h3>
            <p>Please contact us for specific requirements, we can manufacture customized replacement parts.</p>
            <a href="{{ route('contact') }}" class="btn btn-primary mt-4">Contact Us</a>
        </div>
        @endif
    </div>
</section>
@endsection
