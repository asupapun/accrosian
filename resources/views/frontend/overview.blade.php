<?php
// Accrosian Overview Landing Page
$company = [
    'name'     => 'Accrosian',
    'tagline'  => 'Turning Ideas Into Reality',
    'desc'     => 'A premium software company delivering innovative web, mobile, cloud, and AI solutions for modern businesses.',
    'email'    => 'hello@accrosian.com',
    'location' => 'Bangalore, India',
    'hours'    => 'Mon – Fri: 9:00 AM – 6:00 PM IST',
    'linkedin' => 'https://linkedin.com/company/accrosian',
    'twitter'  => 'https://twitter.com/accrosian',
    'instagram'=> 'https://instagram.com/accrosian',
    'facebook' => 'https://facebook.com/accrosian',
];

$stats = [
    ['value' => '200+', 'label' => 'Projects Delivered'],
    ['value' => '98%',  'label' => 'Client Satisfaction'],
    ['value' => '50+',  'label' => 'Expert Team Members'],
    ['value' => '8+',   'label' => 'Years of Excellence'],
];

$services = [
    [
        'icon'  => '🤖',
        'title' => 'AI Solutions',
        'desc'  => 'Generative AI, LLM Development, AI Agents, NLP, Chatbots, ML & Custom AI SaaS platforms.',
        'color' => '#6C5CE7',
        'link'  => 'https://accrosian.accrosian.com/services',
    ],
    [
        'icon'  => '🌐',
        'title' => 'Tech Solutions',
        'desc'  => 'Web Development, Mobile Apps, UI/UX Design and strategic IT Consulting services.',
        'color' => '#00B894',
        'link'  => 'https://accrosian.accrosian.com/services',
    ],
    [
        'icon'  => '📡',
        'title' => 'IoT Development',
        'desc'  => 'IoT App Development, Enterprise IoT, Smart Home Solutions and IoT Consulting.',
        'color' => '#0984E3',
        'link'  => 'https://accrosian.accrosian.com/services',
    ],
    [
        'icon'  => '📈',
        'title' => 'Growth Marketing',
        'desc'  => 'SEO, Google Ads, SMM, YouTube Management, GBM and Content Marketing.',
        'color' => '#E17055',
        'link'  => 'https://accrosian.accrosian.com/services',
    ],
    [
        'icon'  => '🥽',
        'title' => 'VR Solutions',
        'desc'  => 'Immersive VR Lab solutions for schools and educational institutions.',
        'color' => '#A29BFE',
        'link'  => 'https://accrosian.accrosian.com/services/vr-lab-for-school',
    ],
    [
        'icon'  => '☁️',
        'title' => 'Cloud & DevOps',
        'desc'  => 'Cloud migration, microservices architecture, CI/CD pipelines and infrastructure scaling.',
        'color' => '#FDCB6E',
        'link'  => 'https://accrosian.accrosian.com/services',
    ],
];

$process = [
    ['num' => '01', 'title' => 'Discovery',   'desc' => 'Analyze goals, challenges and vision to design the perfect solution.', 'icon' => '🔍'],
    ['num' => '02', 'title' => 'Design',      'desc' => 'Craft intuitive, modern UI/UX experiences people love to use.',        'icon' => '🎨'],
    ['num' => '03', 'title' => 'Development', 'desc' => 'Build secure, scalable apps with the latest modern technologies.',     'icon' => '⚙️'],
    ['num' => '04', 'title' => 'Launch',      'desc' => 'Deploy your product and provide continuous support for lasting success.', 'icon' => '🚀'],
];

$industries = [
    ['name' => 'Banking & FinTech',    'icon' => '🏦', 'link' => 'https://accrosian.accrosian.com/industries/banking'],
    ['name' => 'Healthcare',           'icon' => '🏥', 'link' => 'https://accrosian.accrosian.com/industries/healthcare'],
    ['name' => 'Education',            'icon' => '🎓', 'link' => 'https://accrosian.accrosian.com/industries/education'],
    ['name' => 'Media & Information',  'icon' => '📰', 'link' => 'https://accrosian.accrosian.com/industries/medinfo'],
    ['name' => 'Energy & Utilities',   'icon' => '⚡', 'link' => 'https://accrosian.accrosian.com/industries/energy'],
    ['name' => 'E-Commerce',           'icon' => '🛒', 'link' => 'https://accrosian.accrosian.com/services'],
];

$testimonials = [
    [
        'quote'   => 'Accrosian transformed our entire digital infrastructure. The platform they built handles 10x our previous traffic flawlessly.',
        'name'    => 'Rajesh Kumar',
        'role'    => 'CTO, TechVenture India',
        'initials'=> 'RK',
        'rating'  => 5,
    ],
    [
        'quote'   => 'The mobile app they developed exceeded all expectations. Our user engagement increased by 340% in the first quarter post-launch.',
        'name'    => 'Priya Desai',
        'role'    => 'Product Manager, NexaScale',
        'initials'=> 'PD',
        'rating'  => 5,
    ],
    [
        'quote'   => 'Their AI solution automated 70% of our data processing workflows, saving hundreds of hours monthly. ROI was evident within the first month.',
        'name'    => 'Arjun Mehta',
        'role'    => 'CEO, DataStream Analytics',
        'initials'=> 'AM',
        'rating'  => 5,
    ],
];

$portfolio = [
    ['title' => 'E-Commerce Platform',       'tag' => 'Web Development', 'desc' => 'Full-featured Laravel + Vue.js platform handling 10,000+ daily transactions.'],
    ['title' => 'Healthcare Mobile App',      'tag' => 'Mobile Apps',    'desc' => 'React Native telemedicine app connecting patients with doctors, serving 50,000+ users.'],
    ['title' => 'AI Analytics Dashboard',     'tag' => 'AI & ML',        'desc' => 'Real-time business analytics platform powered by machine learning and predictive models.'],
    ['title' => 'Cloud Migration Project',    'tag' => 'Cloud',          'desc' => 'Migrated legacy monolith to microservices on AWS, reducing infrastructure costs by 40%.'],
    ['title' => 'FinTech Banking App',        'tag' => 'Mobile Apps',    'desc' => 'Secure digital banking app with biometric auth, instant transfers and investment tracking.'],
    ['title' => 'SaaS Project Management',    'tag' => 'Web Development', 'desc' => 'End-to-end project management SaaS with real-time collaboration features.'],
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $company['name'] ?> – Company Overview</title>
    <meta name="description" content="<?= $company['desc'] ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Instrument+Serif:ital@0;1&family=DM+Sans:opsz,wght@9..40,300;400;500;600&family=DM+Mono:wght@400;500&display=swap"
        rel="stylesheet">
    <style>
    /* ── Reset & Base ─────────────────────────────────────────────────────────── */
    *,
    *::before,
    *::after {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    :root {
        --ink: #0B0A14;
        --ink-2: #2D2B45;
        --ink-3: #6B6890;
        --ink-4: #B0AECE;
        --surface: #FFFFFF;
        --ground: #F7F6FF;
        --border: #ECEAF8;
        --border-2: #DAD8F5;
        --accent: #6C5CE7;
        --accent-2: #8B7DF0;
        --accent-bg: #F0EEFF;
        --mint: #00B894;
        --mint-bg: #E8FBF6;
        --coral: #E17055;
        --gold: #FDCB6E;
        --serif: 'Instrument Serif', Georgia, serif;
        --sans: 'DM Sans', system-ui, sans-serif;
        --mono: 'DM Mono', monospace;
        --r-sm: 6px;
        --r-md: 12px;
        --r-lg: 20px;
        --r-xl: 28px;
        --shadow-sm: 0 1px 3px rgba(108, 92, 231, .06), 0 1px 2px rgba(0, 0, 0, .04);
        --shadow-md: 0 4px 16px rgba(108, 92, 231, .10), 0 2px 6px rgba(0, 0, 0, .04);
        --shadow-lg: 0 12px 40px rgba(108, 92, 231, .14), 0 4px 12px rgba(0, 0, 0, .06);
        --max: 1160px;
        --transition: .22s cubic-bezier(.4, 0, .2, 1);
    }

    html {
        scroll-behavior: smooth;
    }

    body {
        font-family: var(--sans);
        font-size: 16px;
        line-height: 1.65;
        color: var(--ink);
        background: var(--surface);
        -webkit-font-smoothing: antialiased;
    }

    a {
        color: inherit;
        text-decoration: none;
    }

    img {
        display: block;
        max-width: 100%;
    }

    /* ── Utility ──────────────────────────────────────────────────────────────── */
    .container {
        width: 100%;
        max-width: var(--max);
        margin: 0 auto;
        padding: 0 24px;
    }

    .section {
        padding: 88px 0;
    }

    .section-sm {
        padding: 60px 0;
    }

    .eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        font-family: var(--mono);
        font-size: 11px;
        font-weight: 500;
        letter-spacing: .12em;
        text-transform: uppercase;
        color: var(--accent);
        background: var(--accent-bg);
        padding: 5px 12px;
        border-radius: 20px;
        margin-bottom: 16px;
    }

    .section-title {
        font-family: var(--serif);
        font-size: clamp(30px, 4vw, 44px);
        font-weight: 400;
        line-height: 1.18;
        letter-spacing: -.02em;
        color: var(--ink);
        margin-bottom: 16px;
    }

    .section-title em {
        font-style: italic;
        color: var(--accent);
    }

    .section-sub {
        font-size: 16px;
        color: var(--ink-3);
        max-width: 520px;
        line-height: 1.7;
        margin-bottom: 48px;
    }

    .badge {
        display: inline-block;
        font-family: var(--mono);
        font-size: 10px;
        font-weight: 500;
        letter-spacing: .08em;
        text-transform: uppercase;
        padding: 3px 10px;
        border-radius: 4px;
    }

    /* ── Navigation ───────────────────────────────────────────────────────────── */
    .nav {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        z-index: 100;
        background: rgba(255, 255, 255, .82);
        backdrop-filter: blur(20px) saturate(180%);
        border-bottom: 1px solid var(--border);
        transition: box-shadow var(--transition);
    }

    .nav.scrolled {
        box-shadow: var(--shadow-sm);
    }

    .nav-inner {
        display: flex;
        align-items: center;
        justify-content: space-between;
        height: 64px;
        gap: 32px;
    }

    .nav-logo {
        display: flex;
        align-items: center;
        gap: 10px;
        font-family: var(--serif);
        font-size: 22px;
        letter-spacing: -.02em;
        color: var(--ink);
    }

    .nav-logo-dot {
        width: 8px;
        height: 8px;
        background: var(--accent);
        border-radius: 50%;
    }

    .nav-links {
        display: flex;
        align-items: center;
        gap: 28px;
    }

    .nav-links a {
        font-size: 14px;
        font-weight: 500;
        color: var(--ink-3);
        transition: color var(--transition);
    }

    .nav-links a:hover {
        color: var(--ink);
    }

    .btn {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        font-family: var(--sans);
        font-size: 14px;
        font-weight: 500;
        padding: 9px 20px;
        border-radius: var(--r-md);
        cursor: pointer;
        transition: all var(--transition);
        border: none;
    }

    .btn-primary {
        background: var(--accent);
        color: #fff;
    }

    .btn-primary:hover {
        background: var(--accent-2);
        box-shadow: 0 4px 20px rgba(108, 92, 231, .35);
        transform: translateY(-1px);
    }

    .btn-ghost {
        background: transparent;
        color: var(--ink);
        border: 1px solid var(--border-2);
    }

    .btn-ghost:hover {
        background: var(--ground);
    }

    .btn-lg {
        font-size: 15px;
        padding: 13px 28px;
        border-radius: var(--r-md);
    }

    .btn-xl {
        font-size: 16px;
        padding: 15px 34px;
        border-radius: var(--r-lg);
    }

    /* ── Hero ─────────────────────────────────────────────────────────────────── */
    .hero {
        padding: 140px 0 96px;
        background: var(--surface);
        position: relative;
        overflow: hidden;
    }

    .hero::before {
        content: '';
        position: absolute;
        inset: 0;
        background:
            radial-gradient(ellipse 60% 50% at 70% 20%, rgba(108, 92, 231, .08) 0%, transparent 60%),
            radial-gradient(ellipse 40% 40% at 20% 80%, rgba(0, 184, 148, .06) 0%, transparent 60%);
        pointer-events: none;
    }

    .hero-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 64px;
        align-items: center;
    }

    .hero-kicker {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        font-family: var(--mono);
        font-size: 11px;
        font-weight: 500;
        letter-spacing: .1em;
        color: var(--mint);
        background: var(--mint-bg);
        padding: 5px 12px;
        border-radius: 20px;
        margin-bottom: 24px;
    }

    .hero-kicker-dot {
        width: 6px;
        height: 6px;
        background: var(--mint);
        border-radius: 50%;
        animation: pulse 2s ease-in-out infinite;
    }

    @keyframes pulse {

        0%,
        100% {
            opacity: 1;
            transform: scale(1);
        }

        50% {
            opacity: .5;
            transform: scale(.8);
        }
    }

    .hero-h1 {
        font-family: var(--serif);
        font-size: clamp(36px, 5.5vw, 60px);
        font-weight: 400;
        line-height: 1.1;
        letter-spacing: -.03em;
        color: var(--ink);
        margin-bottom: 22px;
    }

    .hero-h1 em {
        font-style: italic;
        color: var(--accent);
    }

    .hero-p {
        font-size: 17px;
        line-height: 1.7;
        color: var(--ink-3);
        max-width: 460px;
        margin-bottom: 36px;
    }

    .hero-actions {
        display: flex;
        align-items: center;
        gap: 14px;
        flex-wrap: wrap;
    }

    .hero-trust {
        margin-top: 52px;
        padding-top: 36px;
        border-top: 1px solid var(--border);
    }

    .hero-trust-label {
        font-size: 12px;
        color: var(--ink-4);
        font-weight: 500;
        margin-bottom: 16px;
        letter-spacing: .04em;
    }

    .trust-logos {
        display: flex;
        align-items: center;
        gap: 20px;
        flex-wrap: wrap;
    }

    .trust-logo-item {
        font-family: var(--mono);
        font-size: 11px;
        font-weight: 500;
        color: var(--ink-4);
        letter-spacing: .05em;
        text-transform: uppercase;
        padding: 6px 14px;
        border: 1px solid var(--border);
        border-radius: var(--r-sm);
        transition: all var(--transition);
    }

    .trust-logo-item:hover {
        border-color: var(--accent);
        color: var(--accent);
    }

    /* Hero Visual */
    .hero-visual {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 14px;
        position: relative;
    }

    .hero-card {
        background: var(--surface);
        border: 1px solid var(--border);
        border-radius: var(--r-lg);
        padding: 24px;
        box-shadow: var(--shadow-md);
        transition: transform var(--transition), box-shadow var(--transition);
    }

    .hero-card:hover {
        transform: translateY(-4px);
        box-shadow: var(--shadow-lg);
    }

    .hero-card.accent-card {
        background: var(--accent);
        color: #fff;
        border-color: transparent;
        grid-column: 1 / -1;
    }

    .hero-card-icon {
        font-size: 28px;
        margin-bottom: 12px;
    }

    .hero-card-label {
        font-size: 11px;
        font-weight: 600;
        letter-spacing: .08em;
        text-transform: uppercase;
        opacity: .65;
        margin-bottom: 4px;
    }

    .hero-card-value {
        font-family: var(--serif);
        font-size: 28px;
        letter-spacing: -.02em;
    }

    .hero-card-sub {
        font-size: 13px;
        opacity: .65;
        margin-top: 4px;
    }

    /* ── Stats Strip ──────────────────────────────────────────────────────────── */
    .stats-strip {
        background: var(--ink);
        padding: 56px 0;
    }

    .stats-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 1px;
    }

    .stat-item {
        padding: 32px 24px;
        text-align: center;
        border-right: 1px solid rgba(255, 255, 255, .08);
    }

    .stat-item:last-child {
        border-right: none;
    }

    .stat-value {
        font-family: var(--serif);
        font-size: 44px;
        line-height: 1;
        letter-spacing: -.04em;
        color: #fff;
        margin-bottom: 8px;
    }

    .stat-value span {
        color: var(--accent-2);
    }

    .stat-label {
        font-size: 13px;
        color: rgba(255, 255, 255, .45);
        letter-spacing: .04em;
    }

    /* ── Services ─────────────────────────────────────────────────────────────── */
    .services-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
    }

    .service-card {
        background: var(--surface);
        border: 1px solid var(--border);
        border-radius: var(--r-lg);
        padding: 32px 28px;
        position: relative;
        overflow: hidden;
        transition: all var(--transition);
        cursor: pointer;
    }

    .service-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 3px;
        background: var(--card-color, var(--accent));
        transform: scaleX(0);
        transform-origin: left;
        transition: transform var(--transition);
    }

    .service-card:hover {
        border-color: var(--border-2);
        box-shadow: var(--shadow-md);
        transform: translateY(-3px);
    }

    .service-card:hover::before {
        transform: scaleX(1);
    }

    .service-icon-wrap {
        width: 52px;
        height: 52px;
        border-radius: var(--r-md);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
        margin-bottom: 20px;
        background: color-mix(in srgb, var(--card-color, var(--accent)) 12%, transparent);
    }

    .service-title {
        font-size: 17px;
        font-weight: 600;
        margin-bottom: 10px;
        color: var(--ink);
    }

    .service-desc {
        font-size: 14px;
        color: var(--ink-3);
        line-height: 1.65;
        margin-bottom: 20px;
    }

    .service-link {
        font-size: 13px;
        font-weight: 600;
        color: var(--card-color, var(--accent));
        display: flex;
        align-items: center;
        gap: 4px;
    }

    .service-link:hover {
        gap: 8px;
    }

    /* ── Process ──────────────────────────────────────────────────────────────── */
    .process-bg {
        background: var(--ground);
    }

    .process-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 2px;
    }

    .process-step {
        background: var(--surface);
        padding: 36px 28px;
        position: relative;
        overflow: hidden;
    }

    .process-step:first-child {
        border-radius: var(--r-lg) 0 0 var(--r-lg);
    }

    .process-step:last-child {
        border-radius: 0 var(--r-lg) var(--r-lg) 0;
    }

    .process-num {
        font-family: var(--mono);
        font-size: 11px;
        font-weight: 500;
        color: var(--accent);
        background: var(--accent-bg);
        width: 32px;
        height: 32px;
        border-radius: var(--r-sm);
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 20px;
    }

    .process-icon {
        font-size: 32px;
        margin-bottom: 14px;
    }

    .process-title {
        font-size: 17px;
        font-weight: 600;
        margin-bottom: 10px;
        color: var(--ink);
    }

    .process-desc {
        font-size: 14px;
        color: var(--ink-3);
        line-height: 1.65;
    }

    .process-connector {
        position: absolute;
        right: -1px;
        top: 50%;
        transform: translateY(-50%);
        width: 24px;
        height: 24px;
        background: var(--ground);
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 1;
        font-size: 14px;
        color: var(--ink-4);
    }

    /* ── Industries ───────────────────────────────────────────────────────────── */
    .industries-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 14px;
    }

    .industry-card {
        display: flex;
        align-items: center;
        gap: 14px;
        padding: 20px 22px;
        background: var(--surface);
        border: 1px solid var(--border);
        border-radius: var(--r-lg);
        cursor: pointer;
        transition: all var(--transition);
        text-decoration: none;
        color: var(--ink);
    }

    .industry-card:hover {
        border-color: var(--accent);
        background: var(--accent-bg);
        transform: translateX(4px);
    }

    .industry-icon {
        font-size: 26px;
        flex-shrink: 0;
    }

    .industry-name {
        font-size: 15px;
        font-weight: 600;
        color: var(--ink);
    }

    .industry-arrow {
        margin-left: auto;
        font-size: 18px;
        color: var(--ink-4);
        transition: color var(--transition);
    }

    .industry-card:hover .industry-arrow {
        color: var(--accent);
    }

    /* ── Portfolio ────────────────────────────────────────────────────────────── */
    .portfolio-bg {
        background: var(--ground);
    }

    .portfolio-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
    }

    .portfolio-card {
        background: var(--surface);
        border: 1px solid var(--border);
        border-radius: var(--r-lg);
        overflow: hidden;
        transition: all var(--transition);
    }

    .portfolio-card:hover {
        box-shadow: var(--shadow-md);
        transform: translateY(-4px);
    }

    .portfolio-thumb {
        height: 160px;
        background: var(--accent-bg);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 48px;
        position: relative;
        overflow: hidden;
    }

    .portfolio-thumb::after {
        content: '';
        position: absolute;
        inset: 0;
        background: linear-gradient(135deg, rgba(108, 92, 231, .15), rgba(0, 184, 148, .1));
    }

    .portfolio-body {
        padding: 22px 22px 24px;
    }

    .portfolio-tag {
        font-family: var(--mono);
        font-size: 10px;
        font-weight: 500;
        letter-spacing: .08em;
        text-transform: uppercase;
        color: var(--accent);
        margin-bottom: 8px;
    }

    .portfolio-title {
        font-size: 15px;
        font-weight: 600;
        color: var(--ink);
        margin-bottom: 8px;
    }

    .portfolio-desc {
        font-size: 13px;
        color: var(--ink-3);
        line-height: 1.6;
    }

    /* ── Testimonials ─────────────────────────────────────────────────────────── */
    .testimonials-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
    }

    .testi-card {
        background: var(--surface);
        border: 1px solid var(--border);
        border-radius: var(--r-lg);
        padding: 28px;
        transition: all var(--transition);
    }

    .testi-card:hover {
        box-shadow: var(--shadow-md);
    }

    .testi-stars {
        font-size: 14px;
        color: #F59E0B;
        margin-bottom: 16px;
        letter-spacing: 2px;
    }

    .testi-quote {
        font-family: var(--serif);
        font-size: 15px;
        font-style: italic;
        line-height: 1.7;
        color: var(--ink-2);
        margin-bottom: 22px;
    }

    .testi-author {
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .testi-avatar {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: var(--accent);
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 13px;
        font-weight: 600;
        flex-shrink: 0;
    }

    .testi-name {
        font-size: 14px;
        font-weight: 600;
        color: var(--ink);
    }

    .testi-role {
        font-size: 12px;
        color: var(--ink-3);
    }

    /* ── Why Accrosian ────────────────────────────────────────────────────────── */
    .why-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 48px;
        align-items: center;
    }

    .why-points {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .why-point {
        display: flex;
        gap: 16px;
        padding: 20px 22px;
        background: var(--ground);
        border: 1px solid var(--border);
        border-radius: var(--r-lg);
        transition: all var(--transition);
    }

    .why-point:hover {
        border-color: var(--accent);
        background: var(--accent-bg);
    }

    .why-point-icon {
        font-size: 24px;
        flex-shrink: 0;
        margin-top: 2px;
    }

    .why-point-title {
        font-size: 15px;
        font-weight: 600;
        color: var(--ink);
        margin-bottom: 4px;
    }

    .why-point-desc {
        font-size: 14px;
        color: var(--ink-3);
        line-height: 1.6;
    }

    .why-visual {
        background: var(--ink);
        border-radius: var(--r-xl);
        padding: 36px;
        color: #fff;
        position: relative;
        overflow: hidden;
    }

    .why-visual::before {
        content: '';
        position: absolute;
        inset: 0;
        background: radial-gradient(ellipse 80% 60% at 80% 20%, rgba(108, 92, 231, .35) 0%, transparent 60%);
        pointer-events: none;
    }

    .why-visual-title {
        font-family: var(--serif);
        font-size: 26px;
        line-height: 1.3;
        margin-bottom: 24px;
        position: relative;
        z-index: 1;
    }

    .why-metric-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 16px;
        position: relative;
        z-index: 1;
    }

    .why-metric {
        background: rgba(255, 255, 255, .07);
        border: 1px solid rgba(255, 255, 255, .1);
        border-radius: var(--r-md);
        padding: 20px 18px;
    }

    .why-metric-val {
        font-family: var(--serif);
        font-size: 32px;
        line-height: 1;
        letter-spacing: -.03em;
        color: #fff;
        margin-bottom: 6px;
    }

    .why-metric-val span {
        color: var(--accent-2);
    }

    .why-metric-lbl {
        font-size: 12px;
        color: rgba(255, 255, 255, .45);
    }

    /* ── CTA ──────────────────────────────────────────────────────────────────── */
    .cta-section {
        background: var(--accent);
        padding: 80px 0;
        position: relative;
        overflow: hidden;
    }

    .cta-section::before {
        content: '';
        position: absolute;
        inset: 0;
        background: radial-gradient(ellipse 70% 80% at 80% 50%, rgba(0, 184, 148, .2) 0%, transparent 60%);
        pointer-events: none;
    }

    .cta-inner {
        text-align: center;
        position: relative;
        z-index: 1;
        max-width: 640px;
        margin: 0 auto;
    }

    .cta-title {
        font-family: var(--serif);
        font-size: clamp(28px, 4vw, 42px);
        color: #fff;
        font-weight: 400;
        line-height: 1.2;
        margin-bottom: 16px;
    }

    .cta-sub {
        font-size: 16px;
        color: rgba(255, 255, 255, .72);
        margin-bottom: 36px;
    }

    .cta-actions {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 14px;
        flex-wrap: wrap;
    }

    .btn-white {
        background: #fff;
        color: var(--accent);
    }

    .btn-white:hover {
        background: var(--ground);
        transform: translateY(-1px);
        box-shadow: 0 6px 20px rgba(0, 0, 0, .12);
    }

    .btn-outline-white {
        background: transparent;
        color: #fff;
        border: 1.5px solid rgba(255, 255, 255, .5);
    }

    .btn-outline-white:hover {
        border-color: #fff;
        background: rgba(255, 255, 255, .08);
    }

    /* ── Footer ───────────────────────────────────────────────────────────────── */
    .footer {
        background: var(--ink);
        color: rgba(255, 255, 255, .55);
        padding: 64px 0 32px;
    }

    .footer-grid {
        display: grid;
        grid-template-columns: 2fr 1fr 1fr 1fr;
        gap: 48px;
        margin-bottom: 56px;
    }

    .footer-brand-name {
        font-family: var(--serif);
        font-size: 24px;
        color: #fff;
        display: flex;
        align-items: center;
        gap: 8px;
        margin-bottom: 14px;
    }

    .footer-brand-dot {
        width: 8px;
        height: 8px;
        background: var(--accent-2);
        border-radius: 50%;
    }

    .footer-brand-desc {
        font-size: 14px;
        line-height: 1.7;
        margin-bottom: 22px;
        max-width: 260px;
    }

    .footer-socials {
        display: flex;
        gap: 10px;
    }

    .social-link {
        width: 36px;
        height: 36px;
        border-radius: var(--r-sm);
        background: rgba(255, 255, 255, .06);
        border: 1px solid rgba(255, 255, 255, .1);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 14px;
        color: rgba(255, 255, 255, .5);
        transition: all var(--transition);
        text-decoration: none;
    }

    .social-link:hover {
        background: var(--accent);
        border-color: var(--accent);
        color: #fff;
    }

    .footer-col-title {
        font-size: 13px;
        font-weight: 600;
        color: #fff;
        letter-spacing: .04em;
        margin-bottom: 18px;
    }

    .footer-links {
        list-style: none;
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .footer-links li a {
        font-size: 14px;
        color: rgba(255, 255, 255, .45);
        transition: color var(--transition);
        text-decoration: none;
    }

    .footer-links li a:hover {
        color: rgba(255, 255, 255, .85);
    }

    .footer-contact {
        list-style: none;
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .footer-contact li {
        display: flex;
        align-items: flex-start;
        gap: 8px;
        font-size: 14px;
    }

    .footer-contact .icon {
        opacity: .5;
        flex-shrink: 0;
        margin-top: 2px;
    }

    .footer-bottom {
        border-top: 1px solid rgba(255, 255, 255, .08);
        padding-top: 28px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 12px;
    }

    .footer-bottom-text {
        font-size: 13px;
    }

    .footer-bottom-right {
        font-size: 13px;
        color: rgba(255, 255, 255, .3);
    }

    /* ── Responsive ───────────────────────────────────────────────────────────── */
    @media (max-width: 900px) {

        .hero-grid,
        .why-grid {
            grid-template-columns: 1fr;
        }

        .hero-visual {
            display: none;
        }

        .services-grid,
        .industries-grid,
        .portfolio-grid,
        .testimonials-grid {
            grid-template-columns: 1fr 1fr;
        }

        .stats-grid {
            grid-template-columns: 1fr 1fr;
        }

        .process-grid {
            grid-template-columns: 1fr 1fr;
        }

        .process-step:first-child {
            border-radius: var(--r-lg) var(--r-lg) 0 0;
        }

        .process-step:last-child {
            border-radius: 0 0 var(--r-lg) var(--r-lg);
        }

        .footer-grid {
            grid-template-columns: 1fr 1fr;
        }

        .nav-links {
            display: none;
        }
    }

    @media (max-width: 600px) {

        .services-grid,
        .industries-grid,
        .portfolio-grid,
        .testimonials-grid,
        .stats-grid,
        .process-grid {
            grid-template-columns: 1fr;
        }

        .footer-grid {
            grid-template-columns: 1fr;
        }

        .section {
            padding: 64px 0;
        }
    }

    /* ── Scroll Animation ─────────────────────────────────────────────────────── */
    .reveal {
        opacity: 0;
        transform: translateY(24px);
        transition: opacity .6s ease, transform .6s ease;
    }

    .reveal.visible {
        opacity: 1;
        transform: translateY(0);
    }
    </style>
</head>

<body>

    <!-- ── Navigation ──────────────────────────────────────────────────────────── -->
    <nav class="nav" id="nav">
        <div class="container">
            <div class="nav-inner">
                <a href="https://accrosian.accrosian.com" class="nav-logo">
                    <span class="nav-logo-dot"></span>
                    <?= $company['name'] ?>
                </a>
                <div class="nav-links">
                    <a href="#services">Services</a>
                    <a href="#process">Process</a>
                    <a href="#industries">Industries</a>
                    <a href="#portfolio">Work</a>
                    <a href="#about">About</a>
                    <a href="https://accrosian.accrosian.com/contact">Contact</a>
                </div>
                <a href="https://accrosian.accrosian.com/contact" class="btn btn-primary">
                    Start a Project →
                </a>
            </div>
        </div>
    </nav>

    <!-- ── Hero ────────────────────────────────────────────────────────────────── -->
    <section class="hero">
        <div class="container">
            <div class="hero-grid">
                <div class="hero-content reveal">
                    <div class="hero-kicker">
                        <span class="hero-kicker-dot"></span>
                        Premium Software Company · Est. Bangalore, India
                    </div>
                    <h1 class="hero-h1">
                        Turning Ideas<br>Into <em>Reality</em>
                    </h1>
                    <p class="hero-p">
                        <?= $company['desc'] ?>
                    </p>
                    <div class="hero-actions">
                        <a href="https://accrosian.accrosian.com/services" class="btn btn-primary btn-xl">Explore
                            Services →</a>
                        <a href="https://accrosian.accrosian.com/portfolio" class="btn btn-ghost btn-xl">View Our
                            Work</a>
                    </div>
                    <div class="hero-trust">
                        <p class="hero-trust-label">TRUSTED BY LEADING COMPANIES</p>
                        <div class="trust-logos">
                            <?php foreach (['TechCorp','InnovateLabs','DataStream','NexaGroup','CloudBase'] as $logo): ?>
                            <div class="trust-logo-item"><?= $logo ?></div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

                <div class="hero-visual reveal">
                    <div class="hero-card">
                        <div class="hero-card-icon">🤖</div>
                        <div class="hero-card-label">AI Solutions</div>
                        <div class="hero-card-value">10+</div>
                        <div class="hero-card-sub">AI Products Shipped</div>
                    </div>
                    <div class="hero-card">
                        <div class="hero-card-icon">📱</div>
                        <div class="hero-card-label">Mobile Apps</div>
                        <div class="hero-card-value">50K+</div>
                        <div class="hero-card-sub">Active Users</div>
                    </div>
                    <div class="hero-card accent-card">
                        <div class="hero-card-icon">⚡</div>
                        <div class="hero-card-label" style="color:rgba(255,255,255,.6)">Client Satisfaction</div>
                        <div class="hero-card-value" style="color:#fff">98%</div>
                        <div class="hero-card-sub" style="color:rgba(255,255,255,.6)">200+ Projects Delivered</div>
                    </div>
                    <div class="hero-card">
                        <div class="hero-card-icon">📡</div>
                        <div class="hero-card-label">IoT & Cloud</div>
                        <div class="hero-card-value">40%</div>
                        <div class="hero-card-sub">Avg. Cost Reduction</div>
                    </div>
                    <div class="hero-card">
                        <div class="hero-card-icon">🌍</div>
                        <div class="hero-card-label">Industries Served</div>
                        <div class="hero-card-value">5+</div>
                        <div class="hero-card-sub">Healthcare to FinTech</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ── Stats Strip ──────────────────────────────────────────────────────────── -->
    <section class="stats-strip">
        <div class="container">
            <div class="stats-grid">
                <?php foreach ($stats as $s): ?>
                <div class="stat-item reveal">
                    <div class="stat-value"><?= preg_replace('/[0-9]+/', '<span>$0</span>', $s['value']) ?></div>
                    <div class="stat-label"><?= $s['label'] ?></div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ── Services ──────────────────────────────────────────────────────────────── -->
    <section class="section" id="services">
        <div class="container">
            <div class="eyebrow">What We Offer</div>
            <h2 class="section-title">Services That Drive <em>Real Results</em></h2>
            <p class="section-sub">
                A comprehensive range of technology services helping your business thrive in the digital age.
            </p>
            <div class="services-grid">
                <?php foreach ($services as $svc): ?>
                <a href="<?= $svc['link'] ?>" class="service-card reveal" style="--card-color: <?= $svc['color'] ?>;">
                    <div class="service-icon-wrap">
                        <?= $svc['icon'] ?>
                    </div>
                    <div class="service-title"><?= $svc['title'] ?></div>
                    <div class="service-desc"><?= $svc['desc'] ?></div>
                    <div class="service-link">Learn more <span>→</span></div>
                </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ── Process ──────────────────────────────────────────────────────────────── -->
    <section class="section section-sm process-bg" id="process">
        <div class="container">
            <div class="eyebrow">How We Work</div>
            <h2 class="section-title" style="margin-bottom:40px">Our <em>Development</em> Process</h2>
            <div class="process-grid">
                <?php foreach ($process as $i => $step): ?>
                <div class="process-step reveal" style="transition-delay: <?= $i * 80 ?>ms">
                    <div class="process-num"><?= $step['num'] ?></div>
                    <div class="process-icon"><?= $step['icon'] ?></div>
                    <div class="process-title"><?= $step['title'] ?></div>
                    <div class="process-desc"><?= $step['desc'] ?></div>
                    <?php if ($i < count($process) - 1): ?>
                    <div class="process-connector">›</div>
                    <?php endif; ?>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ── Industries ───────────────────────────────────────────────────────────── -->
    <section class="section" id="industries">
        <div class="container">
            <div class="eyebrow">Who We Serve</div>
            <h2 class="section-title">Industries We <em>Specialise</em> In</h2>
            <p class="section-sub">
                Deep domain expertise across high-impact verticals — delivering solutions tailored to each sector's
                unique challenges.
            </p>
            <div class="industries-grid">
                <?php foreach ($industries as $ind): ?>
                <a href="<?= $ind['link'] ?>" class="industry-card reveal">
                    <span class="industry-icon"><?= $ind['icon'] ?></span>
                    <span class="industry-name"><?= $ind['name'] ?></span>
                    <span class="industry-arrow">›</span>
                </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ── Why Accrosian ─────────────────────────────────────────────────────────── -->
    <section class="section" id="about" style="background: var(--ground)">
        <div class="container">
            <div class="why-grid">
                <div>
                    <div class="eyebrow">Why Accrosian</div>
                    <h2 class="section-title">Built for <em>Performance</em> & Scale</h2>
                    <p class="section-sub">
                        High-performance, secure, and scalable digital solutions — delivered with speed, reliability and
                        dedicated support.
                    </p>
                    <div class="why-points">
                        <?php
          $points = [
            ['⚡','Fast Delivery',       'Agile processes ensure rapid delivery without sacrificing quality or attention to detail.'],
            ['🔒','Enterprise Security', 'Bank-grade security practices baked into every layer of our solutions.'],
            ['📈','Scalable Architecture','Systems designed to grow with your business from startup to enterprise.'],
            ['🤝','Dedicated Support',   '24/7 support teams ensuring your systems run flawlessly around the clock.'],
          ];
          foreach ($points as $p): ?>
                        <div class="why-point reveal">
                            <div class="why-point-icon"><?= $p[0] ?></div>
                            <div>
                                <div class="why-point-title"><?= $p[1] ?></div>
                                <div class="why-point-desc"><?= $p[2] ?></div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="why-visual reveal">
                    <div class="why-visual-title">
                        Trusted by businesses<br>across every scale
                    </div>
                    <div class="why-metric-grid">
                        <div class="why-metric">
                            <div class="why-metric-val">200<span>+</span></div>
                            <div class="why-metric-lbl">Projects</div>
                        </div>
                        <div class="why-metric">
                            <div class="why-metric-val">98<span>%</span></div>
                            <div class="why-metric-lbl">Satisfaction</div>
                        </div>
                        <div class="why-metric">
                            <div class="why-metric-val">50<span>+</span></div>
                            <div class="why-metric-lbl">Experts</div>
                        </div>
                        <div class="why-metric">
                            <div class="why-metric-val">8<span>+</span></div>
                            <div class="why-metric-lbl">Years</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ── Portfolio ──────────────────────────────────────────────────────────────── -->
    <section class="section portfolio-bg" id="portfolio">
        <div class="container">
            <div class="eyebrow">Our Work</div>
            <h2 class="section-title">Featured <em>Projects</em></h2>
            <p class="section-sub">
                Real-world impact across diverse industries — showcasing innovative solutions and measurable results.
            </p>
            <div class="portfolio-grid">
                <?php
      $thumbs = ['💼','🏥','🧠','☁️','💳','📊'];
      foreach ($portfolio as $i => $p): ?>
                <div class="portfolio-card reveal">
                    <div class="portfolio-thumb"><?= $thumbs[$i] ?></div>
                    <div class="portfolio-body">
                        <div class="portfolio-tag"><?= $p['tag'] ?></div>
                        <div class="portfolio-title"><?= $p['title'] ?></div>
                        <div class="portfolio-desc"><?= $p['desc'] ?></div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <div style="text-align:center; margin-top:40px">
                <a href="https://accrosian.accrosian.com/portfolio" class="btn btn-ghost btn-lg">View All Projects →</a>
            </div>
        </div>
    </section>

    <!-- ── Testimonials ─────────────────────────────────────────────────────────── -->
    <section class="section">
        <div class="container">
            <div class="eyebrow">Client Love</div>
            <h2 class="section-title">What Our Clients <em>Say</em></h2>
            <p class="section-sub">Hear from satisfied clients who trust us to deliver reliable, innovative solutions.
            </p>
            <div class="testimonials-grid">
                <?php foreach ($testimonials as $t): ?>
                <div class="testi-card reveal">
                    <div class="testi-stars"><?= str_repeat('★', $t['rating']) ?></div>
                    <p class="testi-quote">"<?= $t['quote'] ?>"</p>
                    <div class="testi-author">
                        <div class="testi-avatar"><?= $t['initials'] ?></div>
                        <div>
                            <div class="testi-name"><?= $t['name'] ?></div>
                            <div class="testi-role"><?= $t['role'] ?></div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ── CTA ────────────────────────────────────────────────────────────────────── -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-inner reveal">
                <h2 class="cta-title">Let's Build Something Extraordinary Together</h2>
                <p class="cta-sub">Tell us your vision and we'll turn it into reality. Free consultation, no commitment.
                </p>
                <div class="cta-actions">
                    <a href="https://accrosian.accrosian.com/contact" class="btn btn-white btn-xl">Start Your Project
                        →</a>
                    <a href="https://accrosian.accrosian.com/portfolio" class="btn btn-outline-white btn-xl">See Our
                        Work</a>
                </div>
            </div>
        </div>
    </section>

    <!-- ── Footer ─────────────────────────────────────────────────────────────────── -->
    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div>
                    <div class="footer-brand-name">
                        <span class="footer-brand-dot"></span>
                        <?= $company['name'] ?>
                    </div>
                    <p class="footer-brand-desc"><?= $company['desc'] ?></p>
                    <div class="footer-socials">
                        <a href="<?= $company['linkedin'] ?>" class="social-link" aria-label="LinkedIn">in</a>
                        <a href="<?= $company['twitter'] ?>" class="social-link" aria-label="Twitter">𝕏</a>
                        <a href="<?= $company['instagram'] ?>" class="social-link" aria-label="Instagram">ig</a>
                        <a href="<?= $company['facebook'] ?>" class="social-link" aria-label="Facebook">fb</a>
                    </div>
                </div>
                <div>
                    <div class="footer-col-title">Services</div>
                    <ul class="footer-links">
                        <li><a href="https://accrosian.accrosian.com/services/generative-ai">Generative AI</a></li>
                        <li><a href="https://accrosian.accrosian.com/services/ai-agent-development">AI Agents</a></li>
                        <li><a href="https://accrosian.accrosian.com/services/web-development">Web Development</a></li>
                        <li><a href="https://accrosian.accrosian.com/services/mobile-app-development">Mobile Apps</a>
                        </li>
                        <li><a href="https://accrosian.accrosian.com/services/iot-app-development">IoT Solutions</a>
                        </li>
                        <li><a href="https://accrosian.accrosian.com/services">All Services →</a></li>
                    </ul>
                </div>
                <div>
                    <div class="footer-col-title">Company</div>
                    <ul class="footer-links">
                        <li><a href="https://accrosian.accrosian.com/about">About Us</a></li>
                        <li><a href="https://accrosian.accrosian.com/portfolio">Portfolio</a></li>
                        <li><a href="https://accrosian.accrosian.com/blog">Blog</a></li>
                        <li><a href="https://accrosian.accrosian.com/airs">AIRS Program</a></li>
                        <li><a href="https://accrosian.accrosian.com/student-registration">Student Registration</a></li>
                        <li><a href="https://accrosian.accrosian.com/contact">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <div class="footer-col-title">Contact Us</div>
                    <ul class="footer-contact">
                        <li><span class="icon">📍</span> <?= $company['location'] ?></li>
                        <li><span class="icon">✉️</span> <a href="mailto:<?= $company['email'] ?>"
                                style="color:rgba(255,255,255,.45)"><?= $company['email'] ?></a></li>
                        <li><span class="icon">🕐</span> <?= $company['hours'] ?></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="footer-bottom-text">© <?= date('Y') ?> <?= $company['name'] ?>. All Rights Reserved.</div>
                <div class="footer-bottom-right">Made with ❤️ in India</div>
            </div>
        </div>
    </footer>

    <script>
    // Sticky nav shadow on scroll
    const nav = document.getElementById('nav');
    window.addEventListener('scroll', () => {
        nav.classList.toggle('scrolled', window.scrollY > 24);
    }, {
        passive: true
    });

    // Reveal on scroll
    const reveals = document.querySelectorAll('.reveal');
    const io = new IntersectionObserver((entries) => {
        entries.forEach(e => {
            if (e.isIntersecting) {
                e.target.classList.add('visible');
                io.unobserve(e.target);
            }
        });
    }, {
        threshold: 0.1,
        rootMargin: '0px 0px -40px 0px'
    });
    reveals.forEach(el => io.observe(el));

    // Smooth anchor scroll
    document.querySelectorAll('a[href^="#"]').forEach(a => {
        a.addEventListener('click', e => {
            const target = document.querySelector(a.getAttribute('href'));
            if (target) {
                e.preventDefault();
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
    </script>
</body>

</html>