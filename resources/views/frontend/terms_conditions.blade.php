@extends('frontend.layouts.app')

@section('content')
@php
    $bannerImage = 'https://images.unsplash.com/photo-1451187580459-43490279c0fa?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80';
    $possibleExtensions = ['jpg', 'jpeg', 'png', 'webp'];
    foreach($possibleExtensions as $ext) {
        if(file_exists(public_path('images/term-condition.' . $ext))) {
            $bannerImage = asset('images/term-condition.' . $ext);
            break;
        }
    }
@endphp
<!-- Page Header -->
<div class="relative pt-32 pb-20 lg:pt-40 lg:pb-28 overflow-hidden bg-[#0a1628]">
    <div class="absolute inset-0 z-0">
        <img src="{{ $bannerImage }}" alt="Terms and Conditions Background" class="w-full h-full object-cover opacity-70 mix-blend-overlay">
        <div class="absolute inset-0 bg-gradient-to-r from-[#0a1628]/90 via-[#0a1628]/60 to-transparent"></div>
    </div>
    <div class="container mx-auto px-4 lg:px-8 relative z-10">
        <div class="max-w-3xl">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-black text-white mb-6 leading-tight">
                Legal <span class="text-red-600">Terms</span> and Conditions
            </h1>
            <p class="text-lg md:text-xl text-slate-300 font-light leading-relaxed">
                These Legal Terms and Conditions govern access to and use of the SRJ website.
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
            <span class="text-slate-800 font-semibold">Terms and Conditions</span>
        </div>
    </div>
</div>

<!-- Terms and Conditions Content -->
<section class="py-16 md:py-24 bg-slate-50">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="max-w-4xl mx-auto bg-white rounded-2xl shadow-sm border border-slate-200 p-8 md:p-12">
            
            <div class="prose prose-slate prose-lg max-w-none prose-headings:font-bold prose-headings:text-[#0a1628] prose-a:text-red-600 prose-a:no-underline hover:prose-a:underline">
                
                <p class="lead text-xl text-slate-600 mb-8 font-medium">
                    These Legal Terms and Conditions govern access to and use of the SRJ website. By accessing, browsing, or using this website, you agree to be bound by the terms set out below. If you do not agree with these terms, you should discontinue use of the website immediately.
                </p>

                <hr class="my-10 border-slate-200">

                <h3 class="text-2xl mt-8 mb-4">1. Website Purpose and Use – Legal Terms</h3>
                <p>The SRJ website is intended solely for informational and legitimate business purposes. Users agree to use the website in a lawful manner and not to engage in any activity that may disrupt, damage, or interfere with the website’s operation, security, or accessibility.</p>
                <p class="font-medium text-red-600">Unauthorized use of the website may result in legal action.</p>

                <h3 class="text-2xl mt-8 mb-4">2. Intellectual Property Rights</h3>
                <p>All content available on this website, including but not limited to text, images, graphics, logos, layouts, designs, and written material, is the intellectual property of SRJ unless otherwise stated. No content may be copied, reproduced, modified, distributed, or republished in any form without prior written consent from SRJ.</p>

                <h3 class="text-2xl mt-8 mb-4">3. Accuracy of Information</h3>
                <p>The information provided on this website is for general reference purposes only. While SRJ makes reasonable efforts to ensure accuracy, the content may contain errors, omissions, or outdated information. SRJ reserves the right to update or modify website content at any time without prior notice.</p>

                <h3 class="text-2xl mt-8 mb-4">4. Business Communication</h3>
                <p>Any inquiries, requests, or submissions made through the website do not constitute a binding agreement. Commercial terms, pricing, specifications, delivery schedules, and obligations are confirmed only through formal written communication issued by SRJ.</p>

                <h3 class="text-2xl mt-8 mb-4">5. Limitation of Liability</h3>
                <p>To the fullest extent permitted by law, SRJ shall not be liable for any direct, indirect, incidental, consequential, or business losses arising from:</p>
                <ul class="list-disc pl-6 mb-6 space-y-2">
                    <li>Access to or use of the website</li>
                    <li>Inability to access or use the website</li>
                    <li>Reliance on information published on the website</li>
                    <li>Technical issues, interruptions, or delays</li>
                </ul>

                <h3 class="text-2xl mt-8 mb-4">6. External Links</h3>
                <p>The website may contain links to third-party websites for reference or convenience. SRJ does not control and is not responsible for the content, availability, or policies of external websites. Accessing such websites is at the user’s own risk.</p>

                <h3 class="text-2xl mt-8 mb-4">7. User Responsibilities</h3>
                <p>Users agree not to:</p>
                <ul class="list-disc pl-6 mb-6 space-y-2">
                    <li>Attempt unauthorized access to website systems or data</li>
                    <li>Introduce malicious software, viruses, or harmful code</li>
                    <li>Use the website for unlawful or prohibited activities</li>
                    <li>Misrepresent identity or submit false information</li>
                </ul>

                <h3 class="text-2xl mt-8 mb-4">8. Privacy and Data Protection Policy</h3>
                <p>Use of the website is subject to SRJ’s Privacy Policy and Cookies Policy. By using the website, users consent to the collection and processing of information in accordance with those policies.</p>

                <h3 class="text-2xl mt-8 mb-4">9. Governing Law and Jurisdiction</h3>
                <p>These Legal Terms and Conditions are governed by and interpreted in accordance with the laws of India. Any disputes arising from website use shall be subject to the exclusive jurisdiction of the courts of India.</p>

                <h3 class="text-2xl mt-8 mb-4">10. Modifications to Terms</h3>
                <p>SRJ reserves the right to revise or update these Legal Terms and Conditions at any time without prior notice. Continued use of the website after changes are published constitutes acceptance of the revised terms.</p>

                <div class="mt-12 bg-[#0a1628] text-white p-8 rounded-xl">
                    <h3 class="text-2xl font-bold text-white mb-6">11. Contact Information</h3>
                    <p class="text-slate-300 mb-6">For any questions regarding these Legal Terms and Conditions, please contact:</p>
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
