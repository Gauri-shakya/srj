@extends('frontend.layouts.app')

@section('title', 'Contact Us | SRJ Heat Exchangers')

@section('content')
<div class="page-header bg-dark text-white text-center py-5" style="padding: 100px 0; background: linear-gradient(rgba(10,22,40,0.9), rgba(10,22,40,0.9)), url('https://images.unsplash.com/photo-1516321497487-e288fb19713f?auto=format&fit=crop&q=80'); background-size: cover;">
    <div class="container">
        <h1 class="text-white" style="font-size: 3.5rem;">Contact Us</h1>
    </div>
</div>

<section class="section">
    <div class="container">
        <div class="two-col" style="align-items: start;">
            <!-- Contact Info -->
            <div>
                <span class="section-badge">GET IN TOUCH</span>
                <h2 class="section-title">We're Here to Help</h2>
                <p class="mb-4">Need technical support, a price quotation, or have questions about our products? Reach out to our engineering team.</p>
                
                <div class="contact-info-list mt-4">
                    <div class="d-flex align-items-center mb-4" style="display: flex; gap: 20px; align-items: center; margin-bottom: 25px;">
                        <div class="icon-box" style="width: 60px; height: 60px; background: rgba(232,93,47,0.1); color: var(--accent); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.5rem;">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div>
                            <h4 class="mb-1">Our Office</h4>
                            <p class="text-gray m-0">{{ App\Models\Setting::get('address') }}</p>
                        </div>
                    </div>
                    
                    <div class="d-flex align-items-center mb-4" style="display: flex; gap: 20px; align-items: center; margin-bottom: 25px;">
                        <div class="icon-box" style="width: 60px; height: 60px; background: rgba(232,93,47,0.1); color: var(--accent); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.5rem;">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div>
                            <h4 class="mb-1">Call Us</h4>
                            <p class="text-gray m-0">{{ App\Models\Setting::get('phone') }}</p>
                        </div>
                    </div>

                    <div class="d-flex align-items-center" style="display: flex; gap: 20px; align-items: center;">
                        <div class="icon-box" style="width: 60px; height: 60px; background: rgba(232,93,47,0.1); color: var(--accent); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.5rem;">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div>
                            <h4 class="mb-1">Email Us</h4>
                            <p class="text-gray m-0">{{ App\Models\Setting::get('email') }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Form -->
            <div class="card shadow-lg" style="padding: 40px;">
                <h3 class="mb-4">Send an Enquiry</h3>
                
                @if(session('success'))
                    <div style="padding: 15px; background: #d4edda; color: #155724; border-radius: 4px; margin-bottom: 20px;">
                        {{ session('success') }}
                    </div>
                @endif
                
                <form action="{{ route('contact.store') }}" method="POST">
                    @csrf
                    <div class="grid grid-2" style="gap: 20px; margin-bottom: 20px;">
                        <div>
                            <input type="text" name="name" placeholder="Your Name *" required style="width: 100%; padding: 12px; border: 1px solid var(--border); border-radius: 4px;" value="{{ old('name') }}">
                            @error('name')<span style="color:red; font-size:12px;">{{ $message }}</span>@enderror
                        </div>
                        <div>
                            <input type="email" name="email" placeholder="Your Email *" required style="width: 100%; padding: 12px; border: 1px solid var(--border); border-radius: 4px;" value="{{ old('email') }}">
                            @error('email')<span style="color:red; font-size:12px;">{{ $message }}</span>@enderror
                        </div>
                    </div>
                    
                    <div class="grid grid-2" style="gap: 20px; margin-bottom: 20px;">
                        <div>
                            <input type="text" name="phone" placeholder="Phone Number" style="width: 100%; padding: 12px; border: 1px solid var(--border); border-radius: 4px;" value="{{ old('phone') }}">
                        </div>
                        <div>
                            <input type="text" name="company" placeholder="Company Name" style="width: 100%; padding: 12px; border: 1px solid var(--border); border-radius: 4px;" value="{{ old('company') }}">
                        </div>
                    </div>
                    
                    <div style="margin-bottom: 20px;">
                        <input type="text" name="subject" placeholder="Subject" style="width: 100%; padding: 12px; border: 1px solid var(--border); border-radius: 4px;" value="{{ old('subject') }}">
                    </div>

                    <div style="margin-bottom: 20px;">
                        <textarea name="message" rows="5" placeholder="Your Message *" required style="width: 100%; padding: 12px; border: 1px solid var(--border); border-radius: 4px; resize: vertical;">{{ old('message') }}</textarea>
                        @error('message')<span style="color:red; font-size:12px;">{{ $message }}</span>@enderror
                    </div>
                    
                    <button type="submit" class="btn btn-accent" style="width: 100%;">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
