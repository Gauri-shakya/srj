@extends('frontend.layouts.app')

@section('content')
@php
    $bannerImage = 'https://images.unsplash.com/photo-1451187580459-43490279c0fa?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80';
    $possibleExtensions = ['jpg', 'jpeg', 'png', 'webp'];
    foreach($possibleExtensions as $ext) {
        if(file_exists(public_path('images/privacy-banner.' . $ext))) {
            $bannerImage = asset('images/privacy-banner.' . $ext);
            break;
        }
    }
@endphp
<!-- Page Header -->
<div class="relative pt-32 pb-20 lg:pt-40 lg:pb-28 overflow-hidden bg-[#0a1628]">
    <div class="absolute inset-0 z-0">
        <img src="{{ $bannerImage }}" alt="Cookies Policy Background" class="w-full h-full object-cover opacity-70 mix-blend-overlay">
        <div class="absolute inset-0 bg-gradient-to-r from-[#0a1628]/90 via-[#0a1628]/60 to-transparent"></div>
    </div>
    <div class="container mx-auto px-4 lg:px-8 relative z-10">
        <div class="max-w-3xl">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-black text-white mb-6 leading-tight">
                Cookies <span class="text-red-600">Policy</span>
            </h1>
            <p class="text-lg md:text-xl text-slate-300 font-light leading-relaxed">
                Learn how SRJ Heat Exchangers uses cookies and similar technologies to enhance your experience.
            </p>
        </div>
    </div>
</div>

<!-- Breadcrumb -->
<div class="bg-white border-b border-slate-200 sticky top-[72px] lg:top-[90px] z-30 shadow-sm">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="flex items-center py-3 text-sm">
            <a href="{{ route('home') }}" class="text-slate-500 hover:text-red-600 transition-colors font-medium">Home</a>
            <span class="mx-3 text-slate-400">/</span>
            <span class="text-slate-800 font-semibold">Cookies Policy</span>
        </div>
    </div>
</div>

<!-- Cookies Policy Content -->
<section class="py-16 md:py-24 bg-slate-50">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="max-w-4xl mx-auto bg-white rounded-2xl shadow-sm border border-slate-200 p-8 md:p-12">
            
            <div class="prose prose-slate prose-lg max-w-none prose-headings:font-bold prose-headings:text-[#0a1628] prose-a:text-red-600 prose-a:no-underline hover:prose-a:underline">
                
                <p class="lead text-xl text-slate-600 mb-8 font-medium">
                    This Cookies Policy explains how SRJ uses cookies and similar technologies on its website to ensure proper functionality, enhance user experience, and analyze website performance.
                </p>

                <p>By continuing to use this website, you consent to the use of cookies as described in this policy.</p>

                <hr class="my-10 border-slate-200">

                <h3 class="text-2xl mt-8 mb-4">1. What Are Cookies</h3>
                <p>Cookies are small text files placed on your device when you visit a website. They help the website recognize your device, remember preferences, and improve overall functionality. Cookies do not contain viruses or access personal files on your device.</p>

                <h3 class="text-2xl mt-8 mb-4">2. Types of Cookies We Use</h3>
                
                <h4 class="text-xl mt-6 mb-3 text-red-600">a. Strictly Necessary Cookies</h4>
                <p>These cookies are essential for the operation of the website. They enable core functions such as page navigation, form submissions, and secure access. The website cannot function properly without these cookies.</p>

                <h4 class="text-xl mt-6 mb-3 text-red-600">b. Performance and Analytics Cookies</h4>
                <p>These cookies collect information about how visitors use the website, such as pages visited and time spent on the site. This data is used to analyze website performance and improve content, usability, and user experience.</p>

                <h4 class="text-xl mt-6 mb-3 text-red-600">c. Functional Cookies</h4>
                <p>Functional cookies allow the website to remember user preferences such as language selection or region, providing a more personalized experience.</p>

                <h3 class="text-2xl mt-8 mb-4">3. Purpose of Using Cookies</h3>
                <p>Cookies are used to:</p>
                <ul class="list-disc pl-6 mb-6 space-y-2">
                    <li>Ensure smooth and secure website operation</li>
                    <li>Understand user behavior and improve website structure</li>
                    <li>Enhance functionality and user experience</li>
                    <li>Identify and resolve technical issues</li>
                </ul>
                <p class="font-medium">Cookies are not used to collect sensitive personal information or for unauthorized marketing purposes.</p>

                <h3 class="text-2xl mt-8 mb-4">4. Third-Party Cookies</h3>
                <p>In some cases, third-party service providers may place cookies on your device to support analytics or website performance. SRJ does not control these cookies and recommends reviewing the privacy policies of the respective third parties.</p>

                <h3 class="text-2xl mt-8 mb-4">5. Managing Cookies</h3>
                <p>Users can manage or disable cookies through their browser settings. Please note that disabling certain cookies may affect website functionality and user experience.</p>

                <h3 class="text-2xl mt-8 mb-4">6. Data Protection and Privacy</h3>
                <p>Information collected through cookies is processed in accordance with SRJ’s Privacy Policy. Cookie data is used only for legitimate business and operational purposes.</p>

                <h3 class="text-2xl mt-8 mb-4">7. Updates to This Policy</h3>
                <p>SRJ reserves the right to update this Cookies Policy at any time. Any changes will be posted on this page, and continued use of the website constitutes acceptance of the revised policy.</p>

                <div class="mt-12 bg-[#0a1628] text-white p-8 rounded-xl">
                    <h3 class="text-2xl font-bold text-white mb-6">8. Contact Information</h3>
                    <p class="text-slate-300 mb-6">For questions regarding this Cookies Policy, please contact:</p>
                    <div class="space-y-4">
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 rounded-full bg-red-600/20 flex items-center justify-center text-red-500">
                                <i class="fas fa-building"></i>
                            </div>
                            <div>
                                <p class="font-bold text-lg">SRJ</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 rounded-full bg-red-600/20 flex items-center justify-center text-red-500">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div>
                                <a href="mailto:info@srj.co.in" class="hover:text-red-400 transition-colors">info@srj.co.in</a>
                            </div>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 rounded-full bg-red-600/20 flex items-center justify-center text-red-500">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div>
                                <a href="tel:+919716115504" class="hover:text-red-400 transition-colors">+91-9716115504</a>
                            </div>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 rounded-full bg-red-600/20 flex items-center justify-center text-red-500">
                                <i class="fas fa-globe"></i>
                            </div>
                            <div>
                                <a href="https://www.srj.co.in" target="_blank" class="hover:text-red-400 transition-colors">www.srj.co.in</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection
