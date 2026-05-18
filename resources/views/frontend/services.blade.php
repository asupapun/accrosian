@extends('layouts.app')

@section('meta_title', $page->meta_title ?? 'Our Services – Web, Mobile, Cloud & AI')
@section('meta_description', $page->meta_description ?? 'Explore our full range of software development services.')

@section('content')

<section class="page-hero">
    @if($page && $page->banner_image)
    <img src="{{ asset('storage/'.$page->banner_image) }}" alt="Services" class="page-hero-image" />
    @else
    <img src="{{ asset('assets/images/hero-bg-img-2.png') }}" alt="Services" class="page-hero-image" />
    @endif
    <div class="hero-bg-effects">
        <div class="hero-orb hero-orb-1" style="opacity:0.08"></div>
        <div class="hero-grid"></div>
    </div>
    <div class="container page-hero-inner">
        <h1 class="page-hero-title">Our <span class="text-gradient">Services</span></h1>
        <p class="page-hero-sub">Comprehensive technology solutions designed to accelerate your business growth.</p>
        <a style="margin-top:30px" href="{{ route('contact') }}" class="btn btn-primary">Get a Quote</a>
    </div>
</section>

<section style="padding:100px 0">
    <div class="container">
        <div style="text-align:center;margin-bottom:60px" class="reveal">
            <span class="section-tag">What We Offer</span>
            <h2 class="section-title">Services That Drive <span class="text-gradient">Real Results</span></h2>
            <p class="section-subtitle" style="margin:0 auto">From concept to deployment, we cover the entire technology
                spectrum for your business.</p>
        </div>

        <div class="services-grid">
            @foreach($services as $i => $service)
            <div class="service-card reveal reveal-delay-{{ ($i%3)+1 }}">
                @if($service->image && !str_starts_with($service->image,'assets/'))
                <img src="{{ asset('storage/'.$service->image) }}" alt="{{ $service->title }}"
                    class="service-card-img" />
                @elseif($service->image)
                <img src="{{ asset($service->image) }}" alt="{{ $service->title }}" class="service-card-img" />
                @else
                <img src="{{ asset('assets/images/web-dev-img.png') }}" alt="{{ $service->title }}"
                    class="service-card-img" />
                @endif
                <div class="service-card-overlay"></div>
                <div class="service-card-content">
                    <h3 class="service-title">{{ $service->icon }} {{ $service->title }}</h3>
                    <!-- <p style="color:rgba(255,255,255,0.8);font-size:0.9rem;margin-bottom:16px;line-height:1.6">
                        {{ Str::limit($service->short_description, 100) }}</p> -->
                    <a href="{{ route('services.show', $service->slug) }}" class="service-link">
                        Learn More
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <path d="M5 12h14M12 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- WHY CHOOSE US --}}
<section class="features-section">
    <div class="container">
        <div style="text-align:center;margin-bottom:60px" class="reveal">
            <span class="section-tag">Why Accrosian</span>
            <h2 class="section-title">Built for <span class="text-gradient">Performance & Scale</span></h2>
        </div>
        <div class="features-grid">
            @foreach([['⚡','Fast Delivery','Agile processes ensure rapid delivery without sacrificing
            quality.'],['🔒','Enterprise Security','Bank-grade security practices baked into every
            layer.'],['📈','Scalable Architecture','Systems designed to grow from startup to
            enterprise.'],['🤝','Dedicated Support','24/7 support teams ensuring your systems run flawlessly.']] as $f)
            <div class="feature-card reveal">
                <div class="feature-icon">{{ $f[0] }}</div>
                <h3 class="feature-title">{{ $f[1] }}</h3>
                <p class="feature-text">{{ $f[2] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="cta-section">
    <div class="container cta-inner">
        <span class="section-tag" style="margin-bottom:24px">Get Started</span>
        <h2 class="cta-title">Not Sure Which Service <span class="text-gradient">You Need?</span></h2>
        <p class="cta-subtitle">Book a free consultation and our experts will guide you to the perfect solution.</p>
        <div class="cta-actions">
            <a href="{{ route('contact') }}" class="btn btn-primary btn-arrow">Free Consultation</a>
            <a href="{{ route('portfolio') }}" class="btn btn-outline">See Our Work</a>
        </div>
    </div>
</section>

@endsection