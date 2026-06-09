<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script>
    if (sessionStorage.getItem('loaderShown')) {
        document.documentElement.classList.add('no-loader');
    }
    </script>
    <script src="https://unpkg.com/lucide@latest"></script>

    {{-- Dynamic SEO --}}
    <title>@yield('meta_title', $setting->site_title ?? config('app.name'))</title>
    <meta name="description" content="@yield('meta_description', $setting->meta_description ?? '')">
    <meta name="keywords" content="@yield('meta_keywords', $setting->meta_keywords ?? '')">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- Open Graph --}}
    <meta property="og:title" content="@yield('meta_title', $setting->site_title ?? config('app.name'))">
    <meta property="og:description" content="@yield('meta_description', $setting->meta_description ?? '')">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    @if(isset($setting) && $setting->og_image)
    <meta property="og:image" content="{{ asset('storage/' . $setting->og_image) }}">
    @endif

    {{-- Favicon --}}
    @if(isset($setting) && $setting->favicon)
    <link rel="icon" href="{{ asset('storage/' . $setting->favicon) }}" type="image/png">
    @else
    <link rel="icon" href="{{ asset('assets/images/logo2.png') }}" type="image/png">
    @endif

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}?v={{ time() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

    @stack('head')

    {{-- Google Analytics --}}
    @if(isset($setting) && $setting->google_analytics)
    {!! $setting->google_analytics !!}
    @endif
</head>

<body>

    {{-- Loader --}}
    <div class="loader" id="loader">
        @if(isset($setting) && $setting->logo)
        <img src="{{ asset('storage/' . $setting->logo) }}" alt="{{ $setting->site_name ?? 'Logo' }}"
            style="height:64px;border-radius:12px">
        @else
        <img src="{{ asset('assets/images/logo2.png') }}" alt="Accrosian" style="height:84px;border-radius:12px">
        @endif
        <div class="loader-logo">Loading</div>

        <!-- <div class="loader-dots">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div> -->

        <div class="wrapper">
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="shadow"></div>
            <div class="shadow"></div>
            <div class="shadow"></div>
        </div>
    </div>

    @include('partials.navbar')
    @include('partials.mobile-nav')

    <main>
        @if(session('success'))
        <div class="toast-success">
            {{ session('success') }}
        </div>
        @endif

        @if(session('error'))
        <div class="toast-error">
            {{ session('error') }}
        </div>
        @endif
        @yield('content')
    </main>

    @include('partials.footer')

    <script src="{{ asset('assets/js/script.js') }}?v={{ time() }}"></script>
    @stack('scripts')

    <script>
    setTimeout(() => {
        document.querySelectorAll('.toast-success, .toast-error').forEach(el => {
            el.style.opacity = '0';
            setTimeout(() => el.remove(), 500);
        });
    }, 3000);
    </script>

    @if(session('success'))
    <div id="toast-success" class="toast-success">
        ✅ {{ session('success') }}
    </div>
    @endif

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        const toast = document.getElementById("toast-success");

        if (toast) {
            setTimeout(() => toast.classList.add("show"), 100);

            setTimeout(() => {
                toast.classList.remove("show");
                setTimeout(() => toast.remove(), 400);
            }, 3000);
        }
    });
    </script>


    <script>
    document.querySelectorAll('.faq-question').forEach(btn => {
        btn.addEventListener('click', () => {
            const item = btn.parentElement;

            document.querySelectorAll('.faq-item').forEach(i => {
                if (i !== item) i.classList.remove('active');
            });

            item.classList.toggle('active');
        });
    });
    </script>

    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
    lucide.createIcons();
    </script>
    <script>
    (function() {
        const icons = {
            /* Web / Dev */
            'web-development': `<svg viewBox="0 0 40 40"><rect x="4" y="6" width="32" height="24" rx="3" class="ai-stroke ai-fill-none ai-w2"/><line x1="4" y1="14" x2="36" y2="14" class="ai-stroke ai-w2"/><circle cx="9" cy="10" r="1.5" class="ai-fill-orange"/><circle cx="14" cy="10" r="1.5" class="ai-fill-orange" style="animation-delay:.15s"/><circle cx="19" cy="10" r="1.5" class="ai-fill-dim"/><polyline points="12,20 16,24 12,28" class="ai-stroke ai-w2 ai-cap" style="animation:aiSlide .6s ease .2s both"/><line x1="18" y1="28" x2="28" y2="28" class="ai-stroke ai-w15 ai-cap" style="animation:aiGrow .5s ease .35s both"/><rect x="8" y="30" width="24" height="3" rx="1.5" class="ai-fill-dim" style="animation:aiGrow .5s ease .1s both"/></svg>`,

            'mobile-app-development': `<svg viewBox="0 0 40 40"><rect x="11" y="3" width="18" height="34" rx="4" class="ai-stroke ai-fill-none ai-w2"/><line x1="11" y1="9" x2="29" y2="9" class="ai-stroke ai-w15"/><line x1="11" y1="31" x2="29" y2="31" class="ai-stroke ai-w15"/><circle cx="20" cy="35" r="1.5" class="ai-fill-orange"/><rect x="15" y="13" width="10" height="7" rx="2" class="ai-fill-orange" style="opacity:.3;animation:aiPulse 2s ease infinite"/><line x1="15" y1="23" x2="25" y2="23" class="ai-stroke ai-w15" style="animation:aiGrow .5s ease .2s both"/><line x1="15" y1="26" x2="22" y2="26" class="ai-stroke ai-w15" style="animation:aiGrow .5s ease .3s both"/></svg>`,

            'ui-ux-design': `<svg viewBox="0 0 40 40"><circle cx="20" cy="20" r="14" class="ai-stroke ai-fill-none ai-w15"/><circle cx="20" cy="20" r="5" class="ai-fill-orange" style="opacity:.8;animation:aiPulse 2s ease infinite"/><line x1="20" y1="6" x2="20" y2="12" class="ai-stroke ai-w2"/><line x1="20" y1="28" x2="20" y2="34" class="ai-stroke ai-w2"/><line x1="6" y1="20" x2="12" y2="20" class="ai-stroke ai-w2"/><line x1="28" y1="20" x2="34" y2="20" class="ai-stroke ai-w2"/><circle cx="20" cy="20" r="9" class="ai-stroke ai-fill-none ai-w1" style="stroke-dasharray:4 3;animation:aiSpin 8s linear infinite"/></svg>`,

            'ai---machine-learning': `<svg viewBox="0 0 40 40"><circle cx="20" cy="20" r="4" class="ai-fill-orange" style="animation:aiPulse 1.5s ease infinite"/><circle cx="8" cy="12" r="3" class="ai-stroke ai-fill-none ai-w15"/><circle cx="32" cy="12" r="3" class="ai-stroke ai-fill-none ai-w15"/><circle cx="8" cy="28" r="3" class="ai-stroke ai-fill-none ai-w15"/><circle cx="32" cy="28" r="3" class="ai-stroke ai-fill-none ai-w15"/><circle cx="20" cy="5" r="3" class="ai-stroke ai-fill-none ai-w15"/><circle cx="20" cy="35" r="3" class="ai-stroke ai-fill-none ai-w15"/><line x1="11" y1="13" x2="17" y2="17" class="ai-stroke ai-w1" style="animation:aiFlash 2s ease infinite"/><line x1="29" y1="13" x2="23" y2="17" class="ai-stroke ai-w1" style="animation:aiFlash 2s ease .3s infinite"/><line x1="11" y1="27" x2="17" y2="23" class="ai-stroke ai-w1" style="animation:aiFlash 2s ease .6s infinite"/><line x1="29" y1="27" x2="23" y2="23" class="ai-stroke ai-w1" style="animation:aiFlash 2s ease .9s infinite"/><line x1="20" y1="8" x2="20" y2="16" class="ai-stroke ai-w1" style="animation:aiFlash 2s ease .45s infinite"/><line x1="20" y1="24" x2="20" y2="32" class="ai-stroke ai-w1" style="animation:aiFlash 2s ease 1.2s infinite"/></svg>`,

            'it-consulting': `<svg viewBox="0 0 40 40"><rect x="5" y="8" width="30" height="20" rx="3" class="ai-stroke ai-fill-none ai-w2"/><line x1="13" y1="28" x2="10" y2="34" class="ai-stroke ai-w2 ai-cap"/><line x1="27" y1="28" x2="30" y2="34" class="ai-stroke ai-w2 ai-cap"/><line x1="8" y1="34" x2="32" y2="34" class="ai-stroke ai-w2 ai-cap"/><polyline points="10,20 15,14 20,18 25,12 30,16" class="ai-stroke ai-w2 ai-cap ai-fill-none" style="stroke:var(--ac-orange);animation:aiDraw 1s ease .2s both"/></svg>`,

            'digital-marketing': `<svg viewBox="0 0 40 40"><polyline points="5,30 13,18 19,23 27,10 35,15" class="ai-stroke ai-w2 ai-cap ai-fill-none" style="stroke:var(--ac-orange);animation:aiDraw 1s ease both"/><circle cx="35" cy="15" r="3" class="ai-fill-orange" style="animation:aiPop .4s ease .9s both;transform-origin:35px 15px"/><line x1="5" y1="35" x2="35" y2="35" class="ai-stroke ai-w15"/><line x1="5" y1="35" x2="5" y2="10" class="ai-stroke ai-w15"/></svg>`,

            'seo': `<svg viewBox="0 0 40 40"><circle cx="17" cy="17" r="10" class="ai-stroke ai-fill-none ai-w2"/><line x1="24" y1="24" x2="34" y2="34" class="ai-stroke ai-w25 ai-cap"/><line x1="13" y1="17" x2="21" y2="17" class="ai-stroke ai-w2 ai-cap" style="animation:aiGrow .4s ease .3s both"/><line x1="17" y1="13" x2="17" y2="21" class="ai-stroke ai-w2 ai-cap" style="animation:aiGrow .4s ease .5s both"/></svg>`,

            'smm': `<svg viewBox="0 0 40 40"><circle cx="10" cy="20" r="4" class="ai-stroke ai-fill-none ai-w2"/><circle cx="30" cy="10" r="4" class="ai-stroke ai-fill-none ai-w2"/><circle cx="30" cy="30" r="4" class="ai-stroke ai-fill-none ai-w2"/><line x1="14" y1="18" x2="26" y2="12" class="ai-stroke ai-w15" style="animation:aiFlash 2s ease infinite"/><line x1="14" y1="22" x2="26" y2="28" class="ai-stroke ai-w15" style="animation:aiFlash 2s ease .5s infinite"/><circle cx="10" cy="20" r="2" class="ai-fill-orange" style="animation:aiPulse 2s ease infinite"/></svg>`,

            'social-media-marketing': `<svg viewBox="0 0 40 40"><circle cx="10" cy="20" r="4" class="ai-stroke ai-fill-none ai-w2"/><circle cx="30" cy="10" r="4" class="ai-stroke ai-fill-none ai-w2"/><circle cx="30" cy="30" r="4" class="ai-stroke ai-fill-none ai-w2"/><line x1="14" y1="18" x2="26" y2="12" class="ai-stroke ai-w15" style="animation:aiFlash 2s ease infinite"/><line x1="14" y1="22" x2="26" y2="28" class="ai-stroke ai-w15" style="animation:aiFlash 2s ease .5s infinite"/><circle cx="10" cy="20" r="2" class="ai-fill-orange" style="animation:aiPulse 2s ease infinite"/></svg>`,

            'google-ads': `<svg viewBox="0 0 40 40"><rect x="5" y="12" width="30" height="18" rx="3" class="ai-stroke ai-fill-none ai-w2"/><line x1="5" y1="19" x2="35" y2="19" class="ai-stroke ai-w15"/><circle cx="11" cy="15.5" r="1.5" class="ai-fill-orange" style="animation:aiPulse 1.5s ease infinite"/><rect x="9" y="22" width="8" height="5" rx="1" class="ai-fill-orange" style="opacity:.5;animation:aiGrow .4s ease .3s both"/><rect x="20" y="22" width="12" height="2" rx="1" class="ai-fill-dim" style="animation:aiGrow .4s ease .4s both"/><rect x="20" y="25" width="8" height="2" rx="1" class="ai-fill-dim" style="animation:aiGrow .4s ease .5s both"/></svg>`,

            'content-marketing': `<svg viewBox="0 0 40 40"><rect x="7" y="5" width="26" height="32" rx="3" class="ai-stroke ai-fill-none ai-w2"/><line x1="12" y1="13" x2="28" y2="13" class="ai-stroke ai-w2 ai-cap" style="animation:aiGrow .4s ease .1s both"/><line x1="12" y1="18" x2="28" y2="18" class="ai-stroke ai-w15 ai-cap" style="animation:aiGrow .4s ease .2s both"/><line x1="12" y1="23" x2="22" y2="23" class="ai-stroke ai-w15 ai-cap" style="animation:aiGrow .4s ease .3s both"/><circle cx="26" cy="28" r="5" class="ai-fill-orange" style="opacity:.9;animation:aiPop .4s ease .5s both;transform-origin:26px 28px"/><polyline points="23,28 25,30 29,26" class="ai-stroke-white ai-w2 ai-cap" style="animation:aiDraw .4s ease .8s both"/></svg>`,

            'cloud-services': `<svg viewBox="0 0 40 40"><path d="M10 28 Q6 28 6 23 Q6 18 11 18 Q11 12 17 12 Q21 12 23 15 Q25 13 28 13 Q33 13 33 18 Q36 18 36 23 Q36 28 32 28 Z" class="ai-stroke ai-fill-none ai-w2" style="animation:aiDraw 1s ease both"/><line x1="16" y1="28" x2="16" y2="34" class="ai-stroke ai-w15 ai-cap" style="animation:aiGrow .3s ease .8s both"/><line x1="24" y1="28" x2="24" y2="34" class="ai-stroke ai-w15 ai-cap" style="animation:aiGrow .3s ease .9s both"/><line x1="12" y1="34" x2="28" y2="34" class="ai-stroke ai-w2 ai-cap" style="animation:aiGrow .3s ease 1s both"/></svg>`,

            'e-commerce': `<svg viewBox="0 0 40 40"><path d="M5 8 L9 8 L13 26 L31 26 L35 13 L11 13" class="ai-stroke ai-fill-none ai-w2 ai-cap" style="animation:aiDraw .8s ease both"/><circle cx="15" cy="31" r="3" class="ai-stroke ai-fill-none ai-w2"/><circle cx="28" cy="31" r="3" class="ai-stroke ai-fill-none ai-w2"/><circle cx="15" cy="31" r="1.5" class="ai-fill-orange" style="animation:aiPop .3s ease .7s both;transform-origin:15px 31px"/><circle cx="28" cy="31" r="1.5" class="ai-fill-orange" style="animation:aiPop .3s ease .8s both;transform-origin:28px 31px"/></svg>`,

            'cybersecurity': `<svg viewBox="0 0 40 40"><path d="M20 5 L34 11 L34 22 Q34 31 20 37 Q6 31 6 22 L6 11 Z" class="ai-stroke ai-fill-none ai-w2" style="animation:aiDraw 1s ease both"/><polyline points="14,20 18,24 26,16" class="ai-stroke ai-w25 ai-cap ai-fill-none" style="stroke:var(--ac-orange);animation:aiDraw .5s ease .8s both"/></svg>`,

            'data-analytics': `<svg viewBox="0 0 40 40"><rect x="7" y="22" width="6" height="12" rx="1" class="ai-fill-orange" style="opacity:.6;animation:aiGrowUp .5s ease .1s both;transform-origin:bottom"/><rect x="17" y="14" width="6" height="20" rx="1" class="ai-fill-orange" style="animation:aiGrowUp .5s ease .2s both;transform-origin:bottom"/><rect x="27" y="18" width="6" height="16" rx="1" class="ai-fill-orange" style="opacity:.8;animation:aiGrowUp .5s ease .3s both;transform-origin:bottom"/><line x1="5" y1="34" x2="35" y2="34" class="ai-stroke ai-w15"/><line x1="5" y1="34" x2="5" y2="8" class="ai-stroke ai-w15"/></svg>`,

            'blockchain': `<svg viewBox="0 0 40 40"><rect x="14" y="3" width="12" height="9" rx="2" class="ai-stroke ai-fill-none ai-w15"/><rect x="3" y="28" width="12" height="9" rx="2" class="ai-stroke ai-fill-none ai-w15"/><rect x="25" y="28" width="12" height="9" rx="2" class="ai-stroke ai-fill-none ai-w15"/><line x1="20" y1="12" x2="20" y2="20" class="ai-stroke ai-w15" style="animation:aiFlash 2s ease infinite"/><line x1="20" y1="20" x2="9" y2="28" class="ai-stroke ai-w15" style="animation:aiFlash 2s ease .3s infinite"/><line x1="20" y1="20" x2="31" y2="28" class="ai-stroke ai-w15" style="animation:aiFlash 2s ease .6s infinite"/><circle cx="20" cy="20" r="3" class="ai-fill-orange" style="animation:aiPulse 2s ease infinite"/></svg>`,

            'erp-crm': `<svg viewBox="0 0 40 40"><rect x="5" y="5" width="14" height="14" rx="2" class="ai-stroke ai-fill-none ai-w15"/><rect x="21" y="5" width="14" height="14" rx="2" class="ai-stroke ai-fill-none ai-w15"/><rect x="5" y="21" width="14" height="14" rx="2" class="ai-stroke ai-fill-none ai-w15"/><rect x="21" y="21" width="14" height="14" rx="2" class="ai-stroke ai-fill-orange" style="opacity:.3;animation:aiPulse 2s ease infinite"/><line x1="19" y1="12" x2="21" y2="12" class="ai-stroke ai-w2"/><line x1="12" y1="19" x2="12" y2="21" class="ai-stroke ai-w2"/><line x1="19" y1="28" x2="21" y2="28" class="ai-stroke ai-w2"/></svg>`,

            'devops': `<svg viewBox="0 0 40 40"><path d="M20 8 Q30 8 32 18 Q36 18 36 24 Q36 30 28 30 L14 30 Q6 30 6 24 Q6 18 12 18 Q12 10 20 8Z" class="ai-stroke ai-fill-none ai-w15" style="animation:aiDraw 1s ease both"/><polyline points="15,24 18,21 21,24 24,19 27,22" class="ai-stroke ai-w2 ai-cap ai-fill-none" style="stroke:var(--ac-orange);animation:aiDraw .6s ease .8s both"/></svg>`,

            'default': `<svg viewBox="0 0 40 40"><circle cx="20" cy="20" r="14" class="ai-stroke ai-fill-none ai-w2"/><polyline points="14,20 18,24 26,16" class="ai-stroke ai-w25 ai-cap ai-fill-none" style="stroke:var(--ac-orange);animation:aiDraw .5s ease .3s both"/></svg>`
        };

        function getIcon(slug) {
            if (icons[slug]) return icons[slug];
            // fuzzy match
            for (const key of Object.keys(icons)) {
                if (slug.includes(key) || key.includes(slug)) return icons[key];
            }
            return icons['default'];
        }

        document.querySelectorAll('.ac-svg-icon').forEach(el => {
            const raw = el.dataset.service || '';
            const slug = raw.toLowerCase().replace(/[^a-z0-9]+/g, '-').replace(/^-|-$/g, '');
            el.innerHTML = getIcon(slug);
        });
    })();
    </script>
    <script>
    lucide.createIcons();
    </script>
    <script>
    (function() {

        /* ── Scroll Reveal ── */
        var els = document.querySelectorAll('.vr-rv, .vr-rl, .vr-rr');
        if ('IntersectionObserver' in window) {
            var obs = new IntersectionObserver(function(entries) {
                entries.forEach(function(e) {
                    if (e.isIntersecting) {
                        e.target.classList.add('on');
                        obs.unobserve(e.target);
                    }
                });
            }, {
                threshold: 0.1,
                rootMargin: '0px 0px -30px 0px'
            });
            els.forEach(function(el) {
                obs.observe(el);
            });
        } else {
            els.forEach(function(el) {
                el.classList.add('on');
            });
        }

        /* ── Stat Counters ── */
        var statEls = document.querySelectorAll('.vr-stat-n[data-target]');
        if ('IntersectionObserver' in window && statEls.length) {
            var sObs = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry) {
                    if (!entry.isIntersecting) return;
                    var el = entry.target;
                    var target = parseFloat(el.dataset.target);
                    var suffix = el.dataset.suffix || '';
                    var dur = 1800,
                        start = null;
                    (function tick(ts) {
                        if (!start) start = ts;
                        var p = Math.min((ts - start) / dur, 1);
                        var v = Math.floor((1 - Math.pow(1 - p, 3)) * target);
                        el.textContent = v + suffix;
                        if (p < 1) requestAnimationFrame(tick);
                        else el.textContent = target + suffix;
                    })(performance.now());
                    sObs.unobserve(el);
                });
            }, {
                threshold: 0.6
            });
            statEls.forEach(function(el) {
                sObs.observe(el);
            });
        }

        /* ── FAQ Accordion ── */
        document.querySelectorAll('.vr-acc-q').forEach(function(q) {
            q.addEventListener('click', function() {
                var item = q.closest('.vr-acc-item');
                var isOpen = item.classList.contains('open');
                document.querySelectorAll('.vr-acc-item').forEach(function(i) {
                    i.classList.remove('open');
                });
                if (!isOpen) item.classList.add('open');
            });
        });

    })();
    </script>

</body>

</html>