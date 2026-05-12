@extends('layouts.app')

@section('meta_title', isset($setting) ? $setting->site_title : 'Accrosian – Turning Ideas Into Reality')
@section('meta_description', isset($setting) ? $setting->meta_description : 'Accrosian is a premium software company
delivering innovative web, mobile, cloud, and AI solutions for modern businesses.')

@section('content')

{{-- HERO --}}
<section class="hero">
    <img src="{{ asset('assets/images/hero-img2.jpeg') }}" alt="Hero Background" class="hero-bg-img" />
    <div class="hero-bg-effects">
        <div class="hero-orb hero-orb-1"></div>
        <div class="hero-orb hero-orb-2"></div>
        <div class="hero-grid"></div>
    </div>
    <div class="hero-inner">
        <div class="hero-content">
            <!-- <div class="hero-badge">
                <span class="hero-badge-dot"></span>
                Award-Winning Software Company
            </div> -->
            <h1 class="hero-title">
                Innovative Software Solutions for
                <span class="text-gradient">Modern Businesses</span>
            </h1>
            <p class="hero-description">
                We craft cutting-edge digital experiences — from powerful web platforms to intelligent AI solutions —
                helping businesses accelerate growth and outpace competition.
            </p>
            <div class="hero-actions">
                <a href="{{ route('services') }}" class="btn btn-primary btn-arrow">Explore Services</a>
                <a href="{{ route('portfolio') }}" class="btn btn-outline">View Our Work</a>
            </div>
            <!-- <div class="hero-stats">
                <div class="hero-stat">
                    <div class="hero-stat-num" data-target="250" data-suffix="+"
                        style="font-family:var(--font-display);font-size:2rem;font-weight:800;color:var(--orange);">250+
                    </div>
                    <div class="hero-stat-label">Projects Delivered</div>
                </div>
                <div class="hero-stat">
                    <div class="hero-stat-num" data-target="98" data-suffix="%"
                        style="font-family:var(--font-display);font-size:2rem;font-weight:800;color:var(--orange);">98%
                    </div>
                    <div class="hero-stat-label">Client Satisfaction</div>
                </div>
                <div class="hero-stat">
                    <div class="hero-stat-num" data-target="8" data-suffix="+"
                        style="font-family:var(--font-display);font-size:2rem;font-weight:800;color:var(--orange);">8+
                    </div>
                    <div class="hero-stat-label">Years Experience</div>
                </div>
            </div> -->
        </div>
        <!-- <div class="hero-visual">
            <div class="hero-card-main">
                <div class="hero-card-header">
                    <div class="hero-card-icon">📊</div>
                    <div>
                        <div class="hero-card-title">Project Analytics</div>
                        <div class="hero-card-subtitle">Real-time performance metrics</div>
                    </div>
                </div>
                <div class="progress-list">
                    <div>
                        <div class="progress-item-label"><span>Web Development</span><span>96%</span></div>
                        <div class="progress-bar">
                            <div class="progress-fill" style="width:96%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="progress-item-label"><span>Mobile Apps</span><span>91%</span></div>
                        <div class="progress-bar">
                            <div class="progress-fill" style="width:91%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="progress-item-label"><span>AI Solutions</span><span>88%</span></div>
                        <div class="progress-bar">
                            <div class="progress-fill" style="width:88%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="progress-item-label"><span>Cloud Services</span><span>94%</span></div>
                        <div class="progress-bar">
                            <div class="progress-fill" style="width:94%"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-float-cards">
                <div class="float-card">
                    <div class="float-card-icon">🚀</div>
                    <div>
                        <div class="float-card-value">+127%</div>
                        <div class="float-card-text">Performance boost</div>
                    </div>
                </div>
                <div class="float-card">
                    <div class="float-card-icon">⭐</div>
                    <div>
                        <div class="float-card-value">4.9 / 5.0</div>
                        <div class="float-card-text">Client rating</div>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
</section>

{{-- CLIENTS --}}
<section class="clients-section">
    <div class="container">
        <p class="clients-label">Trusted by leading companies worldwide</p>
        <div class="clients-scroll-wrap">
            <div class="clients-track">
                @foreach(['TechCorp','InnovateLabs','DataStream','NexaGroup','CloudBase','FutureScale','DigitalWave','SmartEdge','ProVenture','BuildNext']
                as $client)
                <div class="client-logo">{{ $client }}</div>
                @endforeach
                @foreach(['TechCorp','InnovateLabs','DataStream','NexaGroup','CloudBase','FutureScale','DigitalWave','SmartEdge','ProVenture','BuildNext']
                as $client)
                <div class="client-logo">{{ $client }}</div>
                @endforeach
            </div>
        </div>
    </div>
</section>

{{-- SERVICES --}}
<section class="services-section" id="services">
    <div class="container">
        <div style="text-align:center;margin-bottom:60px" class="reveal">
            <span class="section-tag">What We Do</span>
            <h2 class="section-title">Services That Drive <span class="text-gradient">Real Results</span></h2>
            <p class="section-subtitle" style="margin:0 auto 0">We offer a comprehensive range of technology services to
                help your business thrive in the digital age.</p>
        </div>
        <div class="services-wrapper">
            <div class="services-track">
                @foreach($services as $i => $service)
                <div class="service-card reveal reveal-delay-{{ ($i % 3) + 1 }}">
                    @if($service->image && !str_starts_with($service->image, 'assets/'))
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
                @foreach($services as $service)
                <div class="service-card">
                    @if($service->image && !str_starts_with($service->image, 'assets/'))
                    <img src="{{ asset('storage/'.$service->image) }}" class="service-card-img" />
                    @elseif($service->image)
                    <img src="{{ asset($service->image) }}" class="service-card-img" />
                    @else
                    <img src="{{ asset('assets/images/web-dev-img.png') }}" class="service-card-img" />
                    @endif

                    <div class="service-card-overlay"></div>

                    <div class="service-card-content">
                        <h3 class="service-title">{{ $service->icon }} {{ $service->title }}</h3>
                        <a href="{{ route('services.show', $service->slug) }}" class="service-link">
                            Learn More
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
</section>

<section class="ac-dev-section">
    <div class="ac-dev-header reveal">
        <span class="section-tag">How We Work</span>
        <h2 class="section-title">Our <span class="text-gradient">Development Process</span></h2>
        <p class="section-subtitle" style="margin:0 auto">A streamlined workflow that delivers results on time, every
            time.</p>
    </div>

    <div class="ac-dev-steps-row" id="ac-dev-steps-row"></div>

    <div class="ac-dev-progress-bar">
        <div class="ac-dev-progress-fill" id="ac-dev-prog"></div>
    </div>

    <div class="ac-dev-detail" id="ac-dev-detail"></div>

    <div class="ac-dev-nav">
        <button onclick="acDevNav(-1)" class="btn btn-outline btn-sm">← Previous</button>
        <button onclick="acDevNav(1)" class="btn btn-primary btn-sm">Next →</button>
    </div>
</section>



{{-- WHY CHOOSE US --}}
<section class="process-section">
    <div class="container">
        <div style="text-align:center;margin-bottom:60px" class="reveal">
            <span class="section-tag">Why Accrosian</span>
            <h2 class="section-title">Built for <span class="text-gradient">Performance & Scale</span></h2>
            <p class="process-header-sub">“We deliver high-performance, secure, and scalable digital solutions with
                speed, reliability, and dedicated support to drive your business growth, leveraging cutting-edge
                technologies, industry best practices, and a results-driven approach to ensure seamless execution,
                enhanced efficiency, and long-term success</p>
        </div>
        <div class="features-grid">
            <div class="feature-card reveal reveal-delay-1">
                <div class="feature-icon">⚡</div>
                <h3 class="feature-title">Fast Delivery</h3>
                <p class="feature-text">Agile processes ensure rapid delivery without sacrificing quality or attention
                    to detail.</p>
            </div>
            <div class="feature-card reveal reveal-delay-2">
                <div class="feature-icon">🔒</div>
                <h3 class="feature-title">Enterprise Security</h3>
                <p class="feature-text">Bank-grade security practices baked into every layer of our solutions.</p>
            </div>
            <div class="feature-card reveal reveal-delay-3">
                <div class="feature-icon">📈</div>
                <h3 class="feature-title">Scalable Architecture</h3>
                <p class="feature-text">Systems designed to grow with your business from startup to enterprise scale.
                </p>
            </div>
            <div class="feature-card reveal reveal-delay-4">
                <div class="feature-icon">🤝</div>
                <h3 class="feature-title">Dedicated Support</h3>
                <p class="feature-text">24/7 dedicated support teams ensuring your systems run flawlessly around the
                    clock.</p>
            </div>
        </div>
    </div>
</section>

{{-- PROCESS --}}
<section class="process-section">
    <div class="container">
        <div class="process-header reveal">
            <span class="section-tag">Our Process</span>
            <h2 class="section-title">How We Build <span class="text-gradient">Extraordinary</span> Software Together
            </h2>
            <p class="process-header-sub">Our streamlined development workflow ensures high-quality, scalable, and
                reliable digital products — delivered on time, every time.</p>
        </div>
        <div class="process-grid">
            <div class="process-card reveal reveal-delay-1">
                <img src="{{ asset('assets/images/discover-img.png') }}" alt="Discovery" class="process-card-img" />
                <div class="process-overlay"></div>
                <div class="process-content">
                    <div class="process-step-num">01</div>
                    <h3 class="process-title">Discovery</h3>
                    <p class="process-desc">We analyze your goals, challenges, and vision to design the perfect
                        solution.</p>
                </div>
            </div>
            <div class="process-card reveal reveal-delay-2">
                <img src="{{ asset('assets/images/design-img.png') }}" alt="Design" class="process-card-img" />
                <div class="process-overlay"></div>
                <div class="process-content">
                    <div class="process-step-num">02</div>
                    <h3 class="process-title">Design</h3>
                    <p class="process-desc">Our designers craft intuitive, modern UI/UX experiences people love to use.
                    </p>
                </div>
            </div>
            <div class="process-card reveal reveal-delay-3">
                <img src="{{ asset('assets/images/dev-img-proccess.png') }}" alt="Development"
                    class="process-card-img" />
                <div class="process-overlay"></div>
                <div class="process-content">
                    <div class="process-step-num">03</div>
                    <h3 class="process-title">Development</h3>
                    <p class="process-desc">Our engineers build secure, scalable apps with the latest modern
                        technologies.</p>
                </div>
            </div>
            <div class="process-card reveal reveal-delay-4">
                <img src="{{ asset('assets/images/lunch-img.png') }}" alt="Launch" class="process-card-img" />
                <div class="process-overlay"></div>
                <div class="process-content">
                    <div class="process-step-num">04</div>
                    <h3 class="process-title">Launch</h3>
                    <p class="process-desc">We deploy your product and provide continuous support to ensure lasting
                        success.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- PORTFOLIO PREVIEW --}}
@if($portfolio->isNotEmpty())
<section class="showcase-section">
    <div class="showcase-header reveal">
        <span class="section-tag">Our Work</span>
        <h2 class="section-title">Featured <span class="text-gradient">Projects</span></h2>
        <p class="process-header-sub">Explore our featured projects showcasing innovative solutions, real-world impact,
            and successful results delivered across diverse industries and client needs, highlighting our expertise in
            solving complex challenges, driving digital transformation, enhancing user experiences, and delivering
            scalable, high-performance solutions tailored to business goals</p>
    </div>

    <div class="showcase-track-wrap">
        <div class="showcase-track" id="showcaseTrack">
            @foreach($portfolio->take(6) as $i => $item)
            <div class="showcase-card" data-index="{{ $i }}">
                <div class="showcase-card-inner">
                    @if($item->image && !str_starts_with($item->image,'assets/'))
                    <img src="{{ asset('storage/'.$item->image) }}" alt="{{ $item->title }}" class="showcase-img" />
                    @else
                    <img src="{{ asset('assets/images/about-us.jpg') }}" alt="{{ $item->title }}"
                        class="showcase-img" />
                    @endif
                    <div class="showcase-overlay"></div>
                    <div class="showcase-content">
                        @if($item->category)
                        <span class="showcase-tag">{{ $item->category }}</span>
                        @endif
                        <h3 class="showcase-title">{{ $item->title }}</h3>
                        @if($item->description)
                        <p class="showcase-desc">{{ Str::limit($item->description, 90) }}</p>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        {{-- Navigation dots --}}
        <div class="showcase-dots" id="showcaseDots">
            @foreach($portfolio->take(6) as $i => $item)
            <button class="showcase-dot {{ $i === 0 ? 'active' : '' }}" data-index="{{ $i }}"></button>
            @endforeach
        </div>

        {{-- Arrow controls --}}
        <button class="showcase-arrow showcase-arrow-left" id="showcasePrev">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                <path d="M15 18l-6-6 6-6" />
            </svg>
        </button>
        <button class="showcase-arrow showcase-arrow-right" id="showcaseNext">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                <path d="M9 18l6-6-6-6" />
            </svg>
        </button>
    </div>

    <div style="text-align:center;margin-top:48px">
        <a href="{{ route('portfolio') }}" class="btn btn-primary btn-arrow">View All Projects</a>
    </div>
</section>
@endif

{{-- TESTIMONIALS --}}
<section class="testimonials-section">
    <div class="container">
        <div style="text-align:center;margin-bottom:60px" class="reveal">
            <span class="section-tag">Client Love</span>
            <h2 class="section-title">What Our Clients <span class="text-gradient">Say About Us</span></h2>
            <p class="process-header-sub">Hear from our satisfied clients who trust us for delivering reliable,
                innovative solutions and exceptional results that exceed expectations, building long-term partnerships
                through consistent performance, transparent communication, industry expertise, and a commitment to
                delivering measurable business value and growth</p>
        </div>
        <div class="testimonials-slider">
            <div class="testimonials-track">
                <div class="testimonial-card">
                    <div class="testimonial-stars">★★★★★</div>
                    <p class="testimonial-text">"Accrosian transformed our entire digital infrastructure. Their team's
                        technical expertise and commitment to our vision was extraordinary. The platform they built
                        handles 10x our previous traffic flawlessly."</p>
                    <div class="testimonial-author">
                        <div class="testimonial-avatar">RK</div>
                        <div>
                            <div class="testimonial-name">Rajesh Kumar</div>
                            <div class="testimonial-role">CTO, TechVenture India</div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-stars">★★★★★</div>
                    <p class="testimonial-text">"The mobile app they developed for us exceeded all expectations. Our
                        user engagement increased by 340% in the first quarter post-launch. Truly world-class
                        development team."</p>
                    <div class="testimonial-author">
                        <div class="testimonial-avatar">PD</div>
                        <div>
                            <div class="testimonial-name">Priya Desai</div>
                            <div class="testimonial-role">Product Manager, NexaScale</div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-stars">★★★★★</div>
                    <p class="testimonial-text">"Their AI solution automated 70% of our data processing workflows,
                        saving us hundreds of hours monthly. The ROI was evident within the first month of deployment."
                    </p>
                    <div class="testimonial-author">
                        <div class="testimonial-avatar">AM</div>
                        <div>
                            <div class="testimonial-name">Arjun Mehta</div>
                            <div class="testimonial-role">CEO, DataStream Analytics</div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-stars">★★★★★</div>
                    <p class="testimonial-text">"Professional, innovative, and reliable. Accrosian delivered our
                        e-commerce platform 2 weeks ahead of schedule with zero critical bugs at launch. Our best tech
                        partnership yet."</p>
                    <div class="testimonial-author">
                        <div class="testimonial-avatar">SA</div>
                        <div>
                            <div class="testimonial-name">Sunita Agarwal</div>
                            <div class="testimonial-role">Founder, ShopEase</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-controls">
            <button class="slider-btn slider-prev">←</button>
            <div class="slider-dots">
                <div class="slider-dot active"></div>
                <div class="slider-dot"></div>
            </div>
            <button class="slider-btn slider-next">→</button>
        </div>
    </div>
</section>


{{-- CTA --}}
<section class="cta-section">
    <div class="container cta-inner">
        <span class="section-tag" style="margin-bottom:24px">Ready to Start?</span>
        <h2 class="cta-title">Let's Build Something <span class="text-gradient">Extraordinary</span> Together</h2>
        <p class="cta-subtitle">Tell us your vision and we'll turn it into reality. Free consultation, no commitment.
        </p>
        <div class="cta-actions">
            <a href="{{ route('contact') }}" class="btn btn-primary btn-arrow">Start Your Project</a>
            <a href="{{ route('portfolio') }}" class="btn btn-outline">See Our Work</a>
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
            'q' => 'What services do you offer?',
            'a' => 'We provide custom software development, web development, mobile apps, digital marketing, and
            AI-based solutions.'
            ],
            [
            'q' => ' Do you provide an internship in Hyderabad?',
            'a' => 'es, we offer internship programs in Hyderabad with live projects in web development,
            software development, and digital marketing.'
            ],
            [
            'q' => 'Who can apply for internships?',
            'a' => 'Students, freshers, and graduates who want practical industry experience can apply.'
            ],
            [
            'q' => 'Do you provide custom solutions?',
            'a' => 'Yes, we build tailored software solutions based on your business requirements.'
            ],
            [
            'q' => 'How can I contact your team?',
            'a' => 'You can contact us through our website or fill out the inquiry form.'
            ],
            [
            'q' => 'Do you offer digital marketing?',
            'a' => 'Yes, including SEO, Google Ads, and social media marketing.'
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