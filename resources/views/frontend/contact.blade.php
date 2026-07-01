@extends('frontend.layouts.app')

@section('title', 'Contact Us | ' . App\Models\Setting::get('site_name', 'SRJ Heat Exchangers'))

@section('content')
<!-- Page Header -->
<div class="relative pt-24 pb-16 lg:pt-32 lg:pb-24 overflow-hidden bg-black">
    <!-- Background Image -->
    <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1581092160562-40aa08e78837?auto=format&fit=crop&q=80&w=2000')] bg-cover bg-center bg-fixed"></div>
    
    <!-- Dark Overlay so text is clear -->
    <div class="absolute inset-0 bg-black/60 z-0"></div>
    
    <div class="container mx-auto px-4 lg:px-8 relative z-10" data-aos="fade-up">
        <div class="flex flex-col items-start gap-3">
            <!-- Left Side: Title -->
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white drop-shadow-lg m-0">
                Contact Us
            </h1>
            
            <!-- Breadcrumbs -->
            <div class="flex items-center gap-3 text-xs md:text-sm font-bold uppercase tracking-widest text-white drop-shadow-md mt-2">
                <a href="{{ route('home') }}" class="hover:text-red-400 transition-colors border-b border-transparent hover:border-red-400 pb-0.5">HOME</a>
                <i class="fas fa-arrow-right text-red-500"></i>
                <a href="{{ route('contact') }}" class="hover:text-red-400 transition-colors border-b border-white pb-0.5">CONTACT US</a>
            </div>
        </div>
    </div>
</div>

<!-- Contact Section -->
<section class="py-24 bg-slate-50 relative overflow-hidden">
    <div class="container mx-auto px-4 lg:px-8 relative z-10">
        <div class="grid lg:grid-cols-2 gap-16 lg:gap-24 items-start">
            
            <!-- Left: Contact Form Card -->
            <div class="bg-white rounded-xl shadow-[0_20px_50px_rgba(0,0,0,0.08)] p-8 lg:p-12 border border-slate-100 relative group hover:shadow-[0_20px_60px_rgba(0,0,0,0.12)] transition-shadow duration-500" data-aos="fade-right">
                <!-- Subtle top red bar -->
                <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-red-600 to-red-400 rounded-t-xl group-hover:h-2 transition-all duration-300"></div>
                
                <h3 class="text-2xl font-bold text-[#0a1628] mb-8 text-center uppercase tracking-widest font-['Rajdhani']">Get In Touch</h3>
                
                @if(session('success'))
                    <div class="bg-green-50 text-green-700 p-4 rounded-lg mb-6 border border-green-200">
                        {{ session('success') }}
                    </div>
                @endif
                
                <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
                    @csrf
                    <!-- Name -->
                    <div>
                        <label class="block text-sm font-bold text-[#0a1628] mb-2">Name <span class="text-red-600">*</span></label>
                        <input type="text" name="name" required class="w-full px-4 py-3.5 bg-slate-50 border border-slate-200 rounded focus:ring-2 focus:ring-red-600/20 focus:border-red-600 outline-none transition-all text-sm shadow-inner" value="{{ old('name') }}">
                    </div>
                    
                    <!-- Email and Phone -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-bold text-[#0a1628] mb-2">Email Id <span class="text-red-600">*</span></label>
                            <input type="email" name="email" required class="w-full px-4 py-3.5 bg-slate-50 border border-slate-200 rounded focus:ring-2 focus:ring-red-600/20 focus:border-red-600 outline-none transition-all text-sm shadow-inner" value="{{ old('email') }}">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-[#0a1628] mb-2">Phone Number <span class="text-red-600">*</span></label>
                            <input type="tel" name="phone" required class="w-full px-4 py-3.5 bg-slate-50 border border-slate-200 rounded focus:ring-2 focus:ring-red-600/20 focus:border-red-600 outline-none transition-all text-sm shadow-inner" value="{{ old('phone') }}">
                        </div>
                    </div>

                    <!-- Subject -->
                    <div>
                        <label class="block text-sm font-bold text-[#0a1628] mb-2">Subject <span class="text-red-600">*</span></label>
                        <input type="text" name="subject" required class="w-full px-4 py-3.5 bg-slate-50 border border-slate-200 rounded focus:ring-2 focus:ring-red-600/20 focus:border-red-600 outline-none transition-all text-sm shadow-inner" value="{{ old('subject') }}">
                    </div>
                    
                    <!-- Message -->
                    <div>
                        <label class="block text-sm font-bold text-[#0a1628] mb-2">Message</label>
                        <textarea name="message" rows="5" class="w-full px-4 py-3.5 bg-slate-50 border border-slate-200 rounded focus:ring-2 focus:ring-red-600/20 focus:border-red-600 outline-none transition-all text-sm resize-none shadow-inner">{{ old('message') }}</textarea>
                    </div>
                    
                    <button type="submit" class="w-full bg-[#bd3232] hover:bg-[#9a2727] text-white font-bold py-4 mt-2 flex items-center justify-center gap-2 transition-colors shadow-lg shadow-[#bd3232]/30 uppercase tracking-widest text-sm">
                        Submit Now <i class="fas fa-paper-plane text-xs"></i>
                    </button>
                </form>
            </div>
            
            <!-- Right: Contact Information -->
            <div class="pt-4 lg:pt-8" data-aos="fade-left">
                <!-- Abstract arrow graphic behind title -->
                <div class="absolute -z-10 -ml-16 mt-2 opacity-10 hidden md:block">
                    <svg width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="#0a1628" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="5 3 19 12 5 21 5 3"></polygon></svg>
                </div>
                
                <h2 class="text-4xl lg:text-5xl font-black text-[#0a1628] mb-4 font-['Rajdhani']">
                    Needs More <span class="text-[#bd3232]">Help?</span>
                </h2>
                <p class="text-slate-500 mb-12 text-lg font-light leading-relaxed max-w-md">
                    Get expert support for heat exchangers, spare parts, and technical assistance.
                </p>
                
                <div class="space-y-8">
                    <!-- Corporate Office -->
                    <div class="flex items-start gap-6 group cursor-pointer">
                        <div class="w-[52px] h-[52px] shrink-0 bg-[#3b4c68] flex items-center justify-center text-white text-lg shadow-md group-hover:bg-[#bd3232] group-hover:-translate-y-1 transition-all duration-300">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div>
                            <h4 class="text-[17px] font-bold text-[#0a1628] mb-1.5 group-hover:text-[#bd3232] transition-colors">Corporate Office Address</h4>
                            <p class="text-slate-500 font-light text-[15px] leading-relaxed max-w-sm">{{ App\Models\Setting::get('address', 'A-1114, 11th Floor, I-Thum, A-40, Sector - 62, Noida - 201301') }}</p>
                        </div>
                    </div>
                    
                    <!-- Factory Address -->
                    <div class="flex items-start gap-6 group cursor-pointer">
                        <div class="w-[52px] h-[52px] shrink-0 bg-[#3b4c68] flex items-center justify-center text-white text-lg shadow-md group-hover:bg-[#bd3232] group-hover:-translate-y-1 transition-all duration-300">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div>
                            <h4 class="text-[17px] font-bold text-[#0a1628] mb-1.5 group-hover:text-[#bd3232] transition-colors">Factory Address</h4>
                            <p class="text-slate-500 font-light text-[15px] leading-relaxed max-w-sm">{{ App\Models\Setting::get('factory_address', 'Plot No 139, Udhyog Vihar Ext, Ecotech-II, Greater Noida - 201305') }}</p>
                        </div>
                    </div>
                    
                    <!-- Contact Number -->
                    <div class="flex items-start gap-6 group cursor-pointer">
                        <div class="w-[52px] h-[52px] shrink-0 bg-[#3b4c68] flex items-center justify-center text-white text-lg shadow-md group-hover:bg-[#bd3232] group-hover:-translate-y-1 transition-all duration-300">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div>
                            <h4 class="text-[17px] font-bold text-[#0a1628] mb-1.5 group-hover:text-[#bd3232] transition-colors">Contact Number</h4>
                            <p class="text-slate-500 font-light text-[15px] leading-relaxed">{{ App\Models\Setting::get('phone', '+91- 9716115504 / 05') }}</p>
                        </div>
                    </div>
                    
                    <!-- Landline -->
                    <div class="flex items-start gap-6 group cursor-pointer">
                        <div class="w-[52px] h-[52px] shrink-0 bg-[#3b4c68] flex items-center justify-center text-white text-lg shadow-md group-hover:bg-[#bd3232] group-hover:-translate-y-1 transition-all duration-300">
                            <i class="fas fa-tty"></i>
                        </div>
                        <div>
                            <h4 class="text-[17px] font-bold text-[#0a1628] mb-1.5 group-hover:text-[#bd3232] transition-colors">Landline No</h4>
                            <p class="text-slate-500 font-light text-[15px] leading-relaxed">01204533028</p>
                        </div>
                    </div>
                    
                    <!-- Email -->
                    <div class="flex items-start gap-6 group cursor-pointer">
                        <div class="w-[52px] h-[52px] shrink-0 bg-[#3b4c68] flex items-center justify-center text-white text-lg shadow-md group-hover:bg-[#bd3232] group-hover:-translate-y-1 transition-all duration-300">
                            <i class="fas fa-envelope-open-text"></i>
                        </div>
                        <div>
                            <h4 class="text-[17px] font-bold text-[#0a1628] mb-1.5 group-hover:text-[#bd3232] transition-colors">Email:</h4>
                            <a href="mailto:{{ App\Models\Setting::get('email', 'info@srj.co.in') }}" class="text-slate-500 hover:text-[#bd3232] font-light text-[15px] leading-relaxed transition-colors">{{ App\Models\Setting::get('email', 'info@srj.co.in') }}</a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

<!-- Full Width Map Section -->
<section class="h-[500px] w-full relative z-10 bg-slate-200">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.1386450650965!2d77.369796014407!3d28.625611191146747!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce5449fb0dbbb%3A0x86bd71358b5b5972!2sI-Thum!5e0!3m2!1sen!2sin!4v1683883733989!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="filter grayscale opacity-90 hover:grayscale-0 hover:opacity-100 transition-all duration-700"></iframe>
</section>
@endsection
