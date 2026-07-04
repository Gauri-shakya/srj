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
        <img src="{{ $bannerImage }}" alt="Privacy Policy Background" class="w-full h-full object-cover opacity-70 mix-blend-overlay">
        <div class="absolute inset-0 bg-gradient-to-r from-[#0a1628]/90 via-[#0a1628]/60 to-transparent"></div>
    </div>
    <div class="container mx-auto px-4 lg:px-8 relative z-10">
        <div class="max-w-3xl">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-black text-white mb-6 leading-tight">
                Privacy <span class="text-red-600">Policy</span>
            </h1>
            <p class="text-lg md:text-xl text-slate-300 font-light leading-relaxed">
                Learn how SRJ Heat Exchangers collects, uses, processes, and protects your information when you interact with us.
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
            <span class="text-slate-800 font-semibold">Privacy Policy</span>
        </div>
    </div>
</div>

<!-- Privacy Policy Content -->
<section class="py-16 md:py-24 bg-slate-50">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="max-w-4xl mx-auto bg-white rounded-2xl shadow-sm border border-slate-200 p-8 md:p-12">
            
            <div class="prose prose-slate prose-lg max-w-none prose-headings:font-bold prose-headings:text-[#0a1628] prose-a:text-red-600 prose-a:no-underline hover:prose-a:underline">
                
                <p class="lead text-xl text-slate-600 mb-8 font-medium">
                    SRJ is committed to protecting the privacy and confidentiality of information shared by visitors, customers, and business partners. This Privacy Policy explains how personal and business-related information is collected, used, processed, stored, and protected when you access our website or interact with us through any communication channel.
                </p>

                <p>By using this website, you agree to the practices described in this Privacy Policy.</p>

                <hr class="my-10 border-slate-200">

                <h3 class="text-2xl mt-8 mb-4">1. Information We Collect</h3>
                <p>We may collect and process the following categories of information:</p>
                
                <h4 class="text-xl mt-6 mb-3 text-red-600">a. Personal and Business Information</h4>
                <ul class="list-disc pl-6 mb-6 space-y-2">
                    <li>Full name, company name, job title, and department</li>
                    <li>Email address, telephone number, and other contact details</li>
                    <li>Business inquiries, technical requirements, and commercial information submitted through forms or direct communication</li>
                </ul>

                <h4 class="text-xl mt-6 mb-3 text-red-600">b. Technical and Usage Information</h4>
                <ul class="list-disc pl-6 mb-6 space-y-2">
                    <li>IP address, browser type and version</li>
                    <li>Device information and operating system</li>
                    <li>Website interaction data, pages visited, and access times</li>
                </ul>

                <h4 class="text-xl mt-6 mb-3 text-red-600">c. Voluntarily Provided Information</h4>
                <ul class="list-disc pl-6 mb-6 space-y-2">
                    <li>Information shared via email, phone calls, meetings, or written correspondence</li>
                    <li>Documents or specifications provided for business evaluation or support</li>
                </ul>

                <h3 class="text-2xl mt-8 mb-4">2. Purpose of Information Collection</h3>
                <p>The information collected is used strictly for legitimate business purposes, including:</p>
                <ul class="list-disc pl-6 mb-6 space-y-2">
                    <li>Responding to inquiries and providing technical or commercial assistance</li>
                    <li>Preparing quotations, proposals, and related documentation</li>
                    <li>Managing business relationships and customer communication</li>
                    <li>Improving website functionality, performance, and content relevance</li>
                    <li>Fulfilling legal, regulatory, and internal compliance requirements</li>
                </ul>
                <p class="font-medium">SRJ does not sell, lease, or exchange personal or business information with third parties for marketing or promotional activities.</p>

                <h3 class="text-2xl mt-8 mb-4">3. Legal Basis for Processing</h3>
                <p>Information is processed based on one or more of the following legal grounds:</p>
                <ul class="list-disc pl-6 mb-6 space-y-2">
                    <li>User consent provided through website interaction or communication</li>
                    <li>Necessity for performance of business-related activities</li>
                    <li>Compliance with applicable legal and regulatory obligations</li>
                    <li>Legitimate business interests, provided such interests do not override user rights</li>
                </ul>

                <h3 class="text-2xl mt-8 mb-4">4. Data Security Measures</h3>
                <p>SRJ employs appropriate administrative, technical, and physical safeguards to protect information against unauthorized access, loss, misuse, alteration, or disclosure. Access to personal data is restricted to authorized personnel who require such information for official business purposes.</p>

                <h3 class="text-2xl mt-8 mb-4">5. Cookies and Tracking Technologies</h3>
                <p>The website may use cookies and similar technologies to enhance user experience, analyze website traffic, and improve service quality. Cookies do not collect personal information unless voluntarily provided. Users may manage or disable cookies through their browser settings.</p>

                <h3 class="text-2xl mt-8 mb-4">6. Information Sharing and Disclosure</h3>
                <p>Information may be shared only in the following circumstances:</p>
                <ul class="list-disc pl-6 mb-6 space-y-2">
                    <li>With authorized internal teams for operational and support purposes</li>
                    <li>When required to comply with legal obligations or government requests</li>
                    <li>To protect the rights, property, or safety of SRJ, its users, or others</li>
                </ul>
                <p class="font-medium text-red-600">No information is shared with unauthorized third parties for commercial exploitation.</p>

                <h3 class="text-2xl mt-8 mb-4">7. Data Retention</h3>
                <p>Personal and business information is retained only for the duration necessary to fulfill the purposes stated in this policy or to meet statutory, contractual, or regulatory requirements. Information no longer required is securely deleted or anonymized.</p>

                <h3 class="text-2xl mt-8 mb-4">8. User Rights and Choices</h3>
                <p>Users have the right to:</p>
                <ul class="list-disc pl-6 mb-6 space-y-2">
                    <li>Request access to personal or business information held by SRJ</li>
                    <li>Request correction or update of inaccurate information</li>
                    <li>Request deletion of information, subject to legal obligations</li>
                    <li>Withdraw consent for communication at any time</li>
                </ul>
                <p>Requests may be submitted using the contact details provided below.</p>

                <h3 class="text-2xl mt-8 mb-4">9. International Data Processing</h3>
                <p>Information collected may be processed and stored in India. By accessing this website, users located outside India consent to the transfer and processing of their information in accordance with this Privacy Policy and applicable data protection laws.</p>

                <h3 class="text-2xl mt-8 mb-4">10. Policy Updates</h3>
                <p>SRJ reserves the right to revise this Privacy Policy at any time. Updates will be published on this page, and continued use of the website constitutes acceptance of the revised policy.</p>

                <div class="mt-12 bg-[#0a1628] text-white p-8 rounded-xl">
                    <h3 class="text-2xl font-bold text-white mb-6">11. Contact Information</h3>
                    <p class="text-slate-300 mb-6">For any questions, concerns, or requests related to this Privacy Policy, please contact:</p>
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
