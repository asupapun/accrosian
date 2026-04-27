@extends('layouts.app')

@section('meta_title', $service->meta_title ?? $service->title.' – Accrosian')
@section('meta_description', $service->meta_description ?? $service->short_description)
@section('meta_keywords', $service->meta_keywords ?? '')

@section('content')

<section class="page-hero">
    @if($service->hero_image)
    <img src="{{ asset('storage/'.$service->hero_image) }}" alt="{{ $service->title }}" class="page-hero-image" />
    @elseif($service->image && !str_starts_with($service->image,'assets/'))
    <img src="{{ asset('storage/'.$service->image) }}" alt="{{ $service->title }}" class="page-hero-image" />
    @elseif($service->image)
    <img src="{{ asset($service->image) }}" alt="{{ $service->title }}" class="page-hero-image" />
    @else
    <img src="{{ asset('assets/images/hero-bg-img-2.png') }}" alt="{{ $service->title }}" class="page-hero-image" />
    @endif
    <div class="hero-bg-effects">
        <div class="hero-orb hero-orb-1" style="opacity:0.1"></div>
        <div class="hero-grid"></div>
    </div>
    <div class="container page-hero-inner">
        <!-- <div style="font-size:4rem;margin-bottom:16px">{{ $service->icon }}</div> -->
        <h1 class="page-hero-title"><span class="text-gradient">{{ $service->title }}</span></h1>
        <p class="page-hero-sub">We deliver innovative, scalable, and secure solutions tailored to your business needs,
            ensuring performance, reliability, seamless user experience, and long-term growth through cutting-edge
            technologies</p>
        <a style="margin-top:30px" href="{{ route('contact') }}" class="btn btn-primary">Get a Quote</a>
    </div>

</section>

<section style="padding:60px 0">
    <div style="max-width:100%;padding:0 40px">

        {{-- Top: Image right, intro text left --}}
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:25px;align-items:start;" class="reveal">
            <div>
                <!-- <span class="section-tag">Overview</span> -->
                <!-- <h2 class="section-title">High-Performance Software <span class="text-gradient">& Digital
                        Solutions</span></h2> -->
                <p style="color:var(--black);line-height:1.8;font-size:1.05rem;font-weight:500">
                    {!! $service->short_description !!}
                </p>
            </div>
            <div class="reveal reveal-delay-2">
                @if($service->image && !str_starts_with($service->image,'assets/'))
                <img src="{{ asset('storage/'.$service->image) }}" alt="{{ $service->title }}"
                    style="width:100%;max-height:450px;border-radius:16px;object-fit:cover;object-position:center;" />
                @elseif($service->image)
                <img src="{{ asset($service->image) }}" alt="{{ $service->title }}"
                    style="width:100%;max-height:450px;border-radius:16px;object-fit:cover;object-position:center;" />
                @else
                <img src="{{ asset('assets/images/web-dev-img.png') }}" alt="{{ $service->title }}"
                    style="width:100%;max-height:450px;border-radius:16px;object-fit:cover;object-position:center;" />
                @endif
            </div>
        </div>

        {{-- Full width content below --}}
        <div style="margin-top:10px;color:var(--text-light);line-height:1.8;" class="service-full-desc reveal">
            {!! $service->full_description !!}
        </div>

        {{-- Buttons --}}
        <div style="margin-left:60px;display:flex;gap:16px;flex-wrap:wrap;" class="reveal">
            <a href="{{ route('contact') }}" class="btn btn-primary">Get a Quote</a>
            <a href="{{ route('services') }}" class="btn btn-outline">All Services</a>
        </div>

    </div>
</section>

@if($others->isNotEmpty())
<section class="ac-others-section">
    <div class="ac-others-bg-orb"></div>
    <div class="container">
        <div class="ac-others-header reveal">
            <span class="section-tag">Explore More</span>
            <h2 class="section-title">Other <span class="text-gradient">Services</span></h2>
        </div>
        <div class="ac-others-grid">
            @foreach($others as $i => $other)
            <a href="{{ route('services.show', $other->slug) }}" class="ac-others-card reveal"
                style="animation-delay:{{ $i * 0.08 }}s">
                <div class="ac-others-card-glow"></div>
                <div class="ac-others-card-border"></div>
                <div class="ac-others-card-inner">
                    <div class="ac-others-icon-wrap">
                        <div class="ac-svg-icon"
                            data-service="{{ strtolower(str_replace([' ','/','&'], '-', $other->title)) }}">
                        </div>
                    </div>
                    <h4 class="ac-others-title">{{ $other->title }}</h4>
                    <div class="ac-others-arrow">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2.5">
                            <path d="M5 12h14M12 5l7 7-7 7" />
                        </svg>
                    </div>
                </div>
                <div class="ac-others-shine"></div>
            </a>
            @endforeach
        </div>
    </div>
</section>
@endif

<section class="cta-section">
    <div class="container cta-inner">
        <span class="section-tag" style="margin-bottom:24px">Ready to Start?</span>
        <h2 class="cta-title">Let's Discuss Your <span class="text-gradient">{{ $service->title }}</span> Project</h2>
        <p class="cta-subtitle">Get a free consultation and detailed project proposal within 24 hours.</p>
        <div class="cta-actions">
            <a href="{{ route('contact') }}" class="btn btn-primary btn-arrow">Start Project</a>
            <a href="{{ route('portfolio') }}" class="btn btn-outline">View Our Work</a>
        </div>
    </div>
</section>

@endsection