@extends('layouts.app')

@section('meta_title', $page->meta_title ?? 'About Accrosian – Our Story & Team')
@section('meta_description', $page->meta_description ?? 'Learn about Accrosian, our mission, values, and the talented
team behind our innovative software solutions.')

@section('content')

{{-- PAGE HERO --}}
<section class="page-hero">
    @if($page && $page->banner_image)
    <img src="{{ asset('storage/'.$page->banner_image) }}" alt="About Accrosian Banner" class="page-hero-image" />
    @else
    <img src="{{ asset('assets/images/hero-bg-img-2.png') }}" alt="About Accrosian Banner" class="page-hero-image" />
    @endif
    <div class="hero-bg-effects">
        <div class="hero-orb hero-orb-1" style="opacity:0.08"></div>
        <div class="hero-grid"></div>
    </div>
    <div class="container page-hero-inner">
        <h1 class="page-hero-title">About <span class="text-gradient">Accrosian</span></h1>
        <p class="page-hero-sub">We are a team of passionate technologists turning ambitious ideas into world-class
            digital products since 2016.</p>
        <a style="margin-top:30px" href="{{ route('contact') }}" class="btn btn-primary">Get a Quote</a>
    </div>
</section>

{{-- ABOUT INTRO --}}
<section class="about-intro">
    <div class="container">
        <div class="about-grid">
            <div class="about-image-wrap reveal">
                <div class="about-image-main">
                    <img src="{{ asset('assets/images/about-us-img.png') }}" alt="About Accrosian"
                        class="page-hero-image" />
                    <div class="about-image-icon">🏢</div>
                    <h3 style="font-family:var(--font-display);font-size:1.5rem;font-weight:800;">Accrosian Technologies
                    </h3>
                    <p style="color:var(--text-light);margin-top:12px">Building the digital future, one project at a
                        time.</p>
                </div>
                <div class="about-badge-floating">
                    <div class="about-badge-num">8+</div>
                    <div class="about-badge-text">Years of Excellence</div>
                </div>
            </div>
            <div class="reveal reveal-delay-2">
                <span class="section-tag">Our Story</span>
                <h2 class="section-title">Who We <span class="text-gradient">Are</span></h2>
                <p style="color:var(--black);line-height:1.8;margin-bottom:24px;font-weight:500;">
                    Accrosian Soft Solution Pvt. Ltd. is a forward‑moving technology company delivering cutting‑edge,
                    customised IT solutions for businesses across multiple domains. We blend innovation, engineering
                    expertise, and AI‑driven capabilities to help organisations strengthen their digital presence and
                    accelerate growth

                </p>
                <p style="color:var(--black);line-height:1.8;margin-bottom:36px;font-weight:500;">
                    We specialise in custom software development, dynamic websites, mobile applications, AI chatbot
                    integration, digital & performance marketing, and AI integration across platforms. With years of
                    experience and a strong delivery record, we empower businesses to modernise operations, enhance
                    customer engagement, and scale with confidence.

                    At Accrosian, we don’t just build solutions — we build digital transformation.
                </p>
                <a href="{{ route('contact') }}" class="btn btn-primary">Work With Us</a>
            </div>
        </div>

        <div class="values-grid" style="margin-top:80px">
            <div class="value-item reveal">
                <div class="value-icon">💡</div>
                <h4 class="value-title">Innovation First</h4>
                <p class="value-text">We embrace emerging technologies and creative thinking to deliver solutions ahead
                    of their time.</p>
            </div>
            <div class="value-item reveal reveal-delay-1">
                <div class="value-icon">🎯</div>
                <h4 class="value-title">Results Driven</h4>
                <p class="value-text">Every decision is aligned with tangible business outcomes and measurable success
                    metrics.</p>
            </div>
            <div class="value-item reveal reveal-delay-2">
                <div class="value-icon">🤝</div>
                <h4 class="value-title">True Partnership</h4>
                <p class="value-text">We're not just vendors — we're long-term partners invested in your growth and
                    success.</p>
            </div>
            <div class="value-item reveal reveal-delay-3">
                <div class="value-icon">✨</div>
                <h4 class="value-title">Quality Obsessed</h4>
                <p class="value-text">Uncompromising standards at every stage, from architecture to final pixel-perfect
                    delivery.</p>
            </div>
        </div>
    </div>
</section>

{{-- MISSION & VISION --}}
<section class="mission-vision">
    <div class="container">
        <div style="text-align:center;margin-bottom:60px" class="reveal">
            <span class="section-tag">Purpose</span>
            <h2 class="section-title">Mission & <span class="text-gradient">Vision</span></h2>
        </div>
        <div class="mv-grid">
            <div class="mv-card reveal">
                <div class="mv-icon">🎯</div>
                <h3 class="mv-title">Our Mission</h3>
                <p class="mv-text">Our mission is to empower businesses with high-quality and scalable IT solutions in
                    Bhubaneswar that solve real problems and drive real growth.As a leading software company in
                    Bhubaneswar, we aim to deliver innovative software, web development, and digital marketing services
                    that help businesses succeed in the digital world.We are also committed to providing internship
                    programs in Bhubaneswar that give students real-time experience and industry-ready skills. </p>
                <ul style="margin-top:24px;list-style:none;display:flex;flex-direction:column;gap:10px">
                    <li style="display:flex;align-items:center;gap:10px;color:var(--white);font-size:0.9rem"><span
                            style="color:var(--orange)">✓</span> Deliver high-quality and reliable software solutions
                    </li>
                    <li style="display:flex;align-items:center;gap:10px;color:var(--white);font-size:0.9rem"><span
                            style="color:var(--orange)">✓</span> Build long-term partnerships with clients </li>
                    <li style="display:flex;align-items:center;gap:10px;color:var(--white);font-size:0.9rem"><span
                            style="color:var(--orange)">✓</span> Help businesses achieve measurable growth </li>
                    <li style="display:flex;align-items:center;gap:10px;color:var(--white);font-size:0.9rem"><span
                            style="color:var(--orange)">✓</span> Provide real-time internship opportunities for students
                    </li>
                </ul>
            </div>
            <div class="mv-card reveal reveal-delay-2">
                <div class="mv-icon">🔭</div>
                <h3 class="mv-title">Our Vision</h3>
                <p class="mv-text">Our vision is to become a leading software company in Bhubaneswar and a trusted IT
                    partner for businesses across India and beyond. We aim to deliver innovative and scalable IT
                    solutions in Bhubaneswar, helping businesses grow with the power of technology and digital
                    transformation.We also envision creating more opportunities through internship programs in
                    Bhubaneswar,helping students gain real-world experience and build successful careers in the IT
                    industry.</p>
                <ul style="margin-top:24px;list-style:none;display:flex;flex-direction:column;gap:10px">
                    <li style="display:flex;align-items:center;gap:10px;color:var(--white);font-size:0.9rem"><span
                            style="color:var(--orange)">✓</span> Lead innovation in software and digital technologies
                    </li>
                    <li style="display:flex;align-items:center;gap:10px;color:var(--white);font-size:0.9rem"><span
                            style="color:var(--orange)">✓</span> Expand our services across India and global markets
                    </li>
                    <li style="display:flex;align-items:center;gap:10px;color:var(--white);font-size:0.9rem"><span
                            style="color:var(--orange)">✓</span> Support businesses with modern and scalable IT
                        solutions</li>
                    <li style="display:flex;align-items:center;gap:10px;color:var(--white);font-size:0.9rem"><span
                            style="color:var(--orange)">✓</span> Empower students through real-time internship
                        opportunities </li>
                </ul>
            </div>
        </div>
    </div>
</section>

{{-- STATS --}}
<section style=" padding:60px 30px;background:var(--navy-light);margin-bottom:30px">
    <div class="container">
        <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(180px,1fr));gap:40px;text-align:center">
            @foreach([['250+','Projects Delivered'],['98%','Client Satisfaction'],['8+','Years Experience'],['50+','Team
            Members']] as $stat)
            <div class="reveal">
                <div style="font-family:var(--font-display);font-size:2.5rem;font-weight:800;color:var(--white)">
                    {{ $stat[0] }}</div>
                <div style="color:var(--white);margin-top:8px">{{ $stat[1] }}</div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="cta-section">
    <div class="container cta-inner">
        <span class="section-tag" style="margin-bottom:24px">Join Our Journey</span>
        <h2 class="cta-title">Ready to Build <span class="text-gradient">Something Amazing?</span></h2>
        <p class="cta-subtitle">Let's discuss your project and turn your vision into a world-class digital product.</p>
        <div class="cta-actions">
            <a href="{{ route('contact') }}" class="btn btn-primary btn-arrow">Get In Touch</a>
            <a href="{{ route('services') }}" class="btn btn-outline">Our Services</a>
        </div>
    </div>
</section>

{{-- FAQ SECTION --}}
<section class="faq-section">
    <div class="container">
        <div class="faq-header reveal">
            <span class="section-tag">FAQ</span>
            <h2 class="section-title">
                Frequently Asked <span class="text-gradient">Questions</span>
            </h2>
            <p class="faq-subtitle">
                Everything you need to know about our services and process.
            </p>
        </div>

        <div class="faq-container">

            @php
            $faqs = [
            [
            'q' => 'What makes Accrosian a trusted IT company in Hyderabad?',
            'a' => 'We focus on delivering high-quality software solutions, affordable pricing, and long-term
            support, making us a reliable IT company in Hyderabad.'
            ],
            [
            'q' => ' How many years of experience do you have?',
            'a' => 'We have several years of experience in delivering software, web, and digital marketing
            solutions for businesses and startups.'
            ],
            [
            'q' => 'Do you work with startups or only big companies?',
            'a' => 'We work with both startups and established businesses, providing scalable and cost-effective
            IT solutions.'
            ],
            [
            'q' => 'What type of internships do you provide?',
            'a' => 'We offer software internships in Bhubaneswar, web development, and digital marketing
            internships with real-time project experience.'
            ],
            [
            'q' => ' Do you provide certificates after an internship?',
            'a' => 'Yes, we provide internship certificates along with practical project experience.'
            ],
            [
            'q' => ' What is your mission as a company?',
            'a' => 'Our mission is to deliver high-quality IT solutions while helping students and businesses grow
            with real-world technology.'
            ],
            ];
            @endphp

            @foreach($faqs as $index => $faq)
            <div class="faq-item">
                <button class="faq-question">
                    <span>{{ $faq['q'] }}</span>
                    <span class="faq-icon">+</span>
                </button>

                <div class="faq-answer">
                    <p>{{ $faq['a'] }}</p>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>

@endsection