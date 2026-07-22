<nav class="navbar" id="navbar">
    <div class="nav-inner">
        <a href="{{ route('home') }}" class="nav-logo">
            @if(isset($setting) && $setting->logo)
            <img src="{{ asset('storage/' . $setting->logo) }}" alt="{{ $setting->site_name ?? 'Accrosian' }} Logo" />
            @else
            <img src="{{ asset('assets/images/logo2.png') }}" alt="Accrosian Logo" />
            @endif
            <!-- <span class="nav-logo-text">Accr<span>o</span>sian</span> -->
        </a>
        <ul class="nav-menu">
            <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
            {{-- What We Do — Mega Grouped Dropdown --}}
            <li class="nav-dropdown mega">
                <a href="{{ route('services') }}"
                    class="{{ request()->routeIs('services*') ? 'active' : '' }}">Services</a>
                <div class="mega-menu">
                    <div class="mega-inner">

                        {{-- Left Panel --}}
                        <div class="mega-category">
                            <div class="mega-cat-label">What We Offer</div>
                            <div class="mega-cat-title">Our Services</div>
                            <div class="mega-cat-desc">Explore the full range of solutions we deliver for growing
                                businesses.</div>
                            <a href="{{ route('services') }}" class="mega-cat-cta">View All Services →</a>
                        </div>

                        {{-- Right Columns grouped by category --}}
                        @php
                        $navServices = \App\Models\Service::active()
                        ->orderBy('category')
                        ->orderBy('sort_order')
                        ->get()
                        ->groupBy('category');
                        @endphp

                        <div class="mega-cols">
                            @foreach($navServices as $category => $services)
                            <div class="mega-col">
                                <div class="mega-col-title">{{ $category }}</div>
                                @foreach($services as $svc)
                                <a href="{{ route('services.show', $svc->slug) }}">
                                    <span class="svc-icon">{{ $svc->icon }}</span>
                                    {{ $svc->title }}
                                </a>
                                @endforeach
                            </div>
                            @endforeach
                        </div>

                    </div>
                </div>
            </li>

            {{-- Our Products Dropdown --}}
            <li class="nav-dropdown">
                <a href="#">Products</a>
                <div class="simple-dropdown">
                    <a href="{{ route('Products.crm') }}">CRM (Lead Management)</a>
                </div>
            </li>

            {{-- Our Company Dropdown --}}
            <li class="nav-dropdown">
                <a href="#">Our Company</a>
                <div class="simple-dropdown">
                    <a href="{{ route('about') }}">About Us</a>
                    <a href="{{ route('portfolio') }}">Portfolio</a>
                    <a href="{{ route('blog') }}" class="{{ request()->routeIs('blog*') ? 'active' : '' }}">Blog</a>
                    <a href="{{ route('contact') }}">Contact</a>
                    <a href="{{ route('student.register') }}">Student Registration</a>
                    <a href="{{ route('airs') }}">AIRS Program</a>
                </div>
            </li>

            <li class="nav-dropdown">
                <a href="#">Industries</a>
                <div class="simple-dropdown">
                    <a href="{{ route('industries.banking') }}">Banking</a>
                    <a href="{{ route('industries.medinfo') }}">Media & Information</a>
                    <a href="{{ route('industries.education') }}">Education</a>
                    <a href="{{ route('industries.energy') }}">Energy Resources and Utilities</a>
                    <a href="{{ route('industries.healthcare') }}">Healthcare</a>
                </div>
            </li>
        </ul>
        @auth
        <div style="display:flex;align-items:center;gap:8px;margin-left:8px;">
            @if(auth()->user()->role === 'admin')
            <a href="{{ route('admin.dashboard') }}" class="btn btn-primary btn-sm nav-cta">Admin</a>
            @endif
            <form action="{{ route('logout') }}" method="POST" style="margin:0;">
                @csrf
                <button type="submit" class="btn btn-primary btn-sm nav-cta">Logout</button>
            </form>
        </div>
        @endauth
        <div class="hamburger" id="hamburger"><span></span><span></span><span></span></div>
    </div>
</nav>