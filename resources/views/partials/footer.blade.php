<footer class="footer">
    <div class="container">
        <div class="footer-grid">
            <div class="footer-brand">
                <a href="{{ route('home') }}" class="footer-logo">
                    @if(isset($setting) && $setting->footer_logo)
                    <img src="{{ asset('storage/'.$setting->footer_logo) }}"
                        alt="{{ $setting->site_name ?? 'Accrosian' }}" />
                    @elseif(isset($setting) && $setting->logo)
                    <img src="{{ asset('storage/'.$setting->logo) }}" alt="{{ $setting->site_name ?? 'Accrosian' }}" />
                    @else
                    <img src="{{ asset('assets/images/logo2.png') }}" alt="Accrosian" />
                    @endif
                    <!-- <span class="footer-logo-text">Accr<span>o</span>sian</span> -->
                </a>
                <p class="footer-tagline">
                    Turning ideas into reality through innovative software solutions
                    that drive growth and digital transformation.
                </p>
                <div class="social-links">
                    @if(isset($setting) && $setting->linkedin)
                    <a href="{{ $setting->linkedin }}" class="social-link" title="LinkedIn" target="_blank"
                        rel="noopener">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    @endif
                    @if(isset($setting) && $setting->twitter)
                    <a href="{{ $setting->twitter }}" class="social-link" title="Twitter" target="_blank"
                        rel="noopener">
                        <i class="fab fa-x-twitter"></i>
                    </a>
                    @endif
                    @if(isset($setting) && $setting->instagram)
                    <a href="{{ $setting->instagram }}" class="social-link" title="Instagram" target="_blank"
                        rel="noopener">
                        <i class="fab fa-instagram"></i>
                    </a>
                    @endif
                    @if(isset($setting) && $setting->facebook)
                    <a href="{{ $setting->facebook }}" class="social-link" title="Facebook" target="_blank"
                        rel="noopener">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    @endif
                </div>
            </div>

            <div class="footer-services">
                <h4 class="footer-col-title">Services</h4>

                @php
                $footerServices = \App\Models\Service::active()
                ->orderBy('sort_order')
                ->take(6)
                ->get();
                @endphp

                <ul class="footer-services-list">
                    @foreach($footerServices as $svc)
                    <li>
                        <a href="{{ route('services.show', $svc->slug) }}">
                            {{ $svc->title }}
                        </a>
                    </li>
                    @endforeach
                </ul>

                <a href="{{ route('services') }}" class="footer-view-all">
                    All Services →
                </a>
            </div>

            <div>
                <h4 class="footer-col-title">Company</h4>
                <ul class="footer-services-list">
                    <li><a href="{{ route('about') }}">About Us</a></li>
                    <li><a href="{{ route('portfolio') }}">Portfolio</a></li>
                    <li><a href="{{ route('blog') }}">Blog</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                    <li><a href="{{ route('ssmbbsr') }}">SSM BBSR</a></li>
                    <!-- <li><a href="{{ route('login') }}">Client Login</a></li> -->
                    <!-- <li><a href="{{ route('student.register') }}" style="color:var(--orange);font-weight:600">🎓
                            StudentRegistration</a></li> -->
                </ul>
            </div>

            <div>
                <h4 class="footer-col-title">Contact Us</h4>

                <!-- Email -->
                @if(isset($setting) && $setting->contact_email)
                <div class="footer-contact-item">
                    <div class="footer-contact-icon">✉️</div>
                    <div class="footer-contact-text">
                        <a href="mailto:{{ $setting->contact_email }}">
                            {{ $setting->contact_email }}
                        </a>
                    </div>
                </div>
                @endif
                <!-- Registered Office -->
                <div class="office-card">
                    <div class="office-header">
                        <div class="office-icon">🏢</div>
                        <h5 class="office-title">Regd. Office</h5>
                    </div>

                    <div class="office-address">
                        {!! $setting->address !!}
                    </div>

                    @if(isset($setting) && $setting->contact_phone)
                    <div class="office-phone">
                        <a href="tel:{{ $setting->contact_phone }}">
                            📞 {{ $setting->contact_phone }}
                        </a>
                    </div>
                    @endif
                </div>

                <!-- Branch Office -->
                <div class="office-card">
                    <div class="office-header">
                        <div class="office-icon">🌍</div>
                        <h5 class="office-title">Branch Office</h5>
                    </div>

                    <div class="office-address">
                        A/69, Kharvela Nagar, Bhubaneswar,<br>
                        Odisha, India
                    </div>

                    <div class="office-phone">
                        <a href="tel:0674-2533300">
                            📞 0674-2533300
                        </a>
                    </div>
                </div>
                <!-- <div class="footer-contact">
                    @if(isset($setting) && $setting->address)
                    <div class="footer-contact-item">
                        <div class="footer-contact-icon">📍</div>
                        <div class="footer-contact-text">{{ $setting->address }}</div>
                    </div>
                    @endif
                    @if(isset($setting) && $setting->contact_phone)
                    <div class="footer-contact-item">
                        <div class="footer-contact-icon">📞</div>
                        <div class="footer-contact-text">
                            <a href="tel:{{ $setting->contact_phone }}">{{ $setting->contact_phone }}</a>
                        </div>
                    </div>
                    @endif
                    @if(isset($setting) && $setting->contact_email)
                    <div class="footer-contact-item">
                        <div class="footer-contact-icon">✉️</div>
                        <div class="footer-contact-text">
                            <a href="mailto:{{ $setting->contact_email }}">{{ $setting->contact_email }}</a>
                        </div>
                    </div>
                    @endif
                    <div class="footer-contact-item">
                        <div class="footer-contact-icon">🕐</div>
                        <div class="footer-contact-text">Mon – Fri: 9:00 AM – 6:00 PM IST</div>
                    </div>
                </div> -->
            </div>
        </div>

        <div class="footer-bottom">
            <p class="footer-copy">
                {!! isset($setting) && $setting->footer_text ? $setting->footer_text : '© '.date('Y').'
                <span>Accrosian</span>. All rights reserved.' !!}
            </p>
            <!-- <p class="footer-copy">Made with ❤️ in <span>India</span></p> -->
        </div>
    </div>
</footer>