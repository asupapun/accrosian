@extends('layouts.app')

@section('title', 'Banking & Fintech Solutions | Accrosian')

@section('content')

<link rel="preconnect" href="https://fonts.googleapis.com">
<link
    href="https://fonts.googleapis.com/css2?family=Sora:wght@300;400;600;700;800&family=DM+Sans:ital,wght@0,300;0,400;0,500;0,600;1,400&family=JetBrains+Mono:wght@400;500&display=swap"
    rel="stylesheet">

<style>
/* ═══════════════════════════════════════════════
   TOKENS
═══════════════════════════════════════════════ */
:root {
    --navy-950: #040814;
    --navy-900: #070d1f;
    --navy-800: #0d1530;
    --navy-700: #111d40;
    --navy-600: #172251;
    --orange-500: #f97316;
    --orange-400: #fb923c;
    --orange-300: #fdba74;
    --orange-glow: rgba(249, 115, 22, 0.14);
    --orange-glow-strong: rgba(249, 115, 22, 0.28);
    --black: #000000;
    /* Light theme tokens */
    --bg-page: #ffffff;
    --bg-section-alt: #f7f8fc;
    --text-primary: #0d1530;
    --text-heading: #0d1530;
    --text-secondary: #4a5578;
    --text-muted: #7a89aa;
    --card-bg: #ffffff;
    --card-border: rgba(13, 21, 48, 0.10);
    --card-border-hover: rgba(249, 115, 22, 0.40);
    --card-shadow: 0 2px 16px rgba(13, 21, 48, 0.07);
    --card-shadow-hover: 0 10px 40px rgba(249, 115, 22, 0.16), 0 2px 12px rgba(13, 21, 48, 0.08);
    /* keep glass vars aliased for dashboard widget (stays dark) */
    --glass-bg: rgba(13, 21, 48, 0.6);
    --glass-border: rgba(255, 255, 255, 0.08);
    --glass-border-hover: rgba(249, 115, 22, 0.40);
    --gradient-orange: linear-gradient(135deg, #e8750a, #f59332);
    --radius: 16px;
    --radius-sm: 10px;
    --ff-head: 'Sora', sans-serif;
    --ff-body: 'DM Sans', sans-serif;
    --ff-mono: 'JetBrains Mono', monospace;
}

*,
*::before,
*::after {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

html {
    scroll-behavior: smooth;
}

body {
    font-family: var(--ff-body);
    background-color: var(--bg-page);
    color: var(--text-primary);
    line-height: 1.65;
    overflow-x: hidden;
}

/* ─── NOISE OVERLAY ─── */
body::before {
    content: '';
    position: fixed;
    inset: 0;
    background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.04'/%3E%3C/svg%3E");
    pointer-events: none;
    z-index: 0;
    opacity: 0.5;
}

/* ─── SECTION UTILITY ─── */
section {
    position: relative;
    z-index: 1;
}

.container {
    max-width: 1200px;
    padding: 0 clamp(16px, 4vw, 80px);
    margin: 0 auto;

}

.label-pill {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: rgba(249, 115, 22, 0.10);
    border: 1px solid rgba(249, 115, 22, 0.25);
    color: var(--orange-400);
    padding: 6px 16px;
    border-radius: 100px;
    font-size: 0.78rem;
    font-weight: 600;
    letter-spacing: 0.08em;
    text-transform: uppercase;
    margin-bottom: 20px;
}

.label-pill span {
    width: 6px;
    height: 6px;
    background: var(--orange-500);
    border-radius: 50%;
    display: block;
}

h1,
h2,
h3 {
    font-family: var(--ff-head);
}

/* ─── HERO ─── */
.hero {
    min-height: 100vh;
    display: flex;
    align-items: center;
    padding-top: 90px;
    overflow: hidden;
}

.hero-bg {
    position: absolute;
    inset: 0;
    z-index: 0;
    background:
        radial-gradient(ellipse 70% 55% at 72% 35%, rgba(249, 115, 22, 0.07) 0%, transparent 65%),
        radial-gradient(ellipse 55% 50% at 15% 75%, rgba(13, 21, 48, 0.04) 0%, transparent 60%),
        linear-gradient(160deg, #ffffff 0%, #f4f6fb 100%);
}

/* grid lines */
.hero-bg::after {
    content: '';
    position: absolute;
    inset: 0;
    background-image:
        linear-gradient(rgba(13, 21, 48, 0.04) 1px, transparent 1px),
        linear-gradient(90deg, rgba(13, 21, 48, 0.04) 1px, transparent 1px);
    background-size: 60px 60px;
    mask-image: linear-gradient(to bottom, transparent 0%, black 20%, black 70%, transparent 100%);
}

.hero-inner {
    position: relative;
    z-index: 2;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 60px;
    align-items: center;
    padding: 80px 0;
}

.hero h1 {
    font-size: clamp(2.4rem, 4.5vw, 3.8rem);
    font-weight: 800;
    line-height: 1.08;
    letter-spacing: -0.03em;
    color: #ffff;
    margin-bottom: 24px;
}

.hero h1 em {
    font-style: normal;
    background: var(--gradient-orange);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.hero-sub {
    color: #ffff;
    font-size: 1.05rem;
    font-weight: 300;
    max-width: 520px;
    margin-bottom: 40px;
    line-height: 1.75;
}

.hero-btns {
    display: flex;
    gap: 16px;
    flex-wrap: wrap;
}

.btn-primary {
    background: linear-gradient(135deg, var(--orange-500), #f05a17);
    color: #fff;
    padding: 14px 32px;
    border-radius: var(--radius-sm);
    font-size: 0.9rem;
    font-weight: 600;
    text-decoration: none;
    box-shadow: 0 4px 24px rgba(249, 115, 22, 0.35);
    transition: all 0.3s;
}

.btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 36px rgba(249, 115, 22, 0.50);
}

.btn-outline {
    background: transparent;
    border: 1px solid rgba(13, 21, 48, 0.22);
    color: var(--navy-800);
    padding: 14px 32px;
    border-radius: var(--radius-sm);
    font-size: 0.9rem;
    font-weight: 500;
    text-decoration: none;
    transition: all 0.3s;
}

.btn-outline:hover {
    background: rgba(249, 115, 22, 0.06);
    border-color: var(--orange-500);
    color: var(--orange-500);
}

/* ─── DASHBOARD VISUAL ─── */
.hero-visual {
    position: relative;
}

.dashboard-card {
    background: var(--glass-bg);
    border: 1px solid var(--glass-border);
    border-radius: var(--radius);
    backdrop-filter: blur(20px);
    padding: 24px;
    box-shadow: 0 24px 80px rgba(0, 0, 0, 0.5), inset 0 1px 0 rgba(255, 255, 255, 0.05);
    animation: float 6s ease-in-out infinite;
}

@keyframes float {

    0%,
    100% {
        transform: translateY(0);
    }

    50% {
        transform: translateY(-10px);
    }
}

.dash-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 20px;
}

.dash-title {
    font-family: 'Syne', sans-serif;
    font-size: 0.85rem;
    color: var(--text-secondary);
    font-weight: 600;
    letter-spacing: 0.05em;
}

.dash-badge {
    background: rgba(34, 197, 94, 0.15);
    border: 1px solid rgba(34, 197, 94, 0.3);
    color: #4ade80;
    padding: 3px 10px;
    border-radius: 100px;
    font-size: 0.72rem;
    font-weight: 600;
}

.dash-metrics {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 12px;
    margin-bottom: 20px;
}

.metric-box {
    background: rgba(255, 255, 255, 0.03);
    border: 1px solid var(--glass-border);
    border-radius: var(--radius-sm);
    padding: 14px;
}

.metric-val {
    font-family: 'Syne', sans-serif;
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--text-primary);
}

.metric-val span {
    color: var(--orange-400);
}

.metric-label {
    font-size: 0.72rem;
    color: var(--text-muted);
    margin-top: 2px;
}

.chart-bars {
    display: flex;
    align-items: flex-end;
    gap: 6px;
    height: 80px;
    margin-bottom: 16px;
}

.bar {
    flex: 1;
    border-radius: 4px 4px 0 0;
    background: linear-gradient(to top, var(--orange-500), var(--orange-300));
    opacity: 0.7;
    animation: barGrow 1.2s ease-out forwards;
}

@keyframes barGrow {
    from {
        transform: scaleY(0);
        transform-origin: bottom;
    }

    to {
        transform: scaleY(1);
    }
}

.bar:nth-child(1) {
    height: 45%;
    animation-delay: 0.1s;
}

.bar:nth-child(2) {
    height: 70%;
    animation-delay: 0.15s;
}

.bar:nth-child(3) {
    height: 55%;
    animation-delay: 0.2s;
}

.bar:nth-child(4) {
    height: 90%;
    animation-delay: 0.25s;
    opacity: 1;
}

.bar:nth-child(5) {
    height: 65%;
    animation-delay: 0.3s;
}

.bar:nth-child(6) {
    height: 80%;
    animation-delay: 0.35s;
}

.bar:nth-child(7) {
    height: 75%;
    animation-delay: 0.4s;
}

.bar:nth-child(8) {
    height: 95%;
    animation-delay: 0.45s;
    opacity: 1;
}

.dash-footer {
    display: flex;
    gap: 16px;
}

.dash-tag {
    font-size: 0.72rem;
    color: var(--text-muted);
    background: rgba(255, 255, 255, 0.03);
    border: 1px solid var(--glass-border);
    padding: 4px 10px;
    border-radius: 6px;
}

.floating-badge {
    position: absolute;
    right: -20px;
    top: 30px;
    background: var(--glass-bg);
    border: 1px solid var(--glass-border-hover);
    border-radius: var(--radius-sm);
    padding: 12px 16px;
    backdrop-filter: blur(16px);
    display: flex;
    align-items: center;
    gap: 10px;
    animation: float 6s ease-in-out 1s infinite;
}

.badge-dot {
    width: 36px;
    height: 36px;
    border-radius: 8px;
    background: rgba(249, 115, 22, 0.15);
    display: flex;
    align-items: center;
    justify-content: center;
}

.badge-info {}

.badge-num {
    font-family: 'Syne', sans-serif;
    font-size: 1.1rem;
    font-weight: 700;
    color: var(--orange-400);
}

.badge-text {
    font-size: 0.7rem;
    color: var(--text-muted);
}

/* ─── STATS BAR ─── */
.stats-bar {
    background: var(--navy-800);
    border-top: 1px solid rgba(13, 21, 48, 0.10);
    border-bottom: 1px solid rgba(13, 21, 48, 0.10);
    padding: 32px 0;
}

.stats-inner {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
}

.stat-item {
    text-align: center;
    position: relative;
}

.stat-item:not(:last-child)::after {
    content: '';
    position: absolute;
    right: 0;
    top: 10%;
    bottom: 10%;
    width: 1px;
    background: rgba(255, 255, 255, 0.12);
}

.stat-num {
    font-family: 'Syne', sans-serif;
    font-size: 2.2rem;
    font-weight: 800;
    background: linear-gradient(135deg, #fff 40%, var(--orange-400));
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.stat-label {
    color: rgba(255, 255, 255, 0.55);
    font-size: 0.82rem;
    margin-top: 4px;
}

/* ─── SECTION HEADERS ─── */
.section-header {
    text-align: center;
    margin-bottom: 60px;
}

.section-header h2 {
    font-size: clamp(1.8rem, 3.5vw, 2.8rem);
    font-weight: 800;
    letter-spacing: -0.02em;
    margin-bottom: 16px;
    color: var(--navy-800);
}

.section-header h2 em {
    font-style: normal;
    background: var(--gradient-orange);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.section-header p {
    color: var(--black);
    font-size: 1rem;
    max-width: 580px;
    margin: 0 auto;
    font-weight: 450;
}

/* ─── OVERVIEW ─── */
.overview {
    padding: 60px 0;
    background: var(--bg-section-alt);
}

.overview-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 80px;
    align-items: stretch;
}

.overview-text h2 {
    font-size: clamp(1.8rem, 3vw, 2.4rem);
    font-weight: 800;
    letter-spacing: -0.02em;
    margin-bottom: 24px;
    line-height: 1.2;
    color: var(--navy-800);
}

.overview-text h2 em {
    font-style: normal;
    background: linear-gradient(135deg, var(--orange-500), var(--orange-400));
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.overview-text p {
    color: var(--black);
    margin-bottom: 16px;
    font-weight: 300;
    line-height: 1.8;
}

.overview-points {
    margin-top: 28px;
    display: flex;
    flex-direction: column;
    gap: 12px;
}

.overview-point {
    display: flex;
    align-items: flex-start;
    gap: 14px;
    padding: 14px 18px;
    background: var(--navy-600);
    border: 1px solid var(--navy-700);
    border-radius: var(--radius-sm);
    box-shadow: var(--card-shadow);
    transition: border-color 0.3s, box-shadow 0.3s;
}

.overview-point:hover {
    border-color: var(--glass-border-hover);
    box-shadow: 0 8px 28px var(--navy-800);
    transform: translateY(-4px)
}

.point-icon {
    color: var(--orange-500);
    flex-shrink: 0;
    margin-top: 2px;
}

.point-text {
    font-size: 0.9rem;
    color: #ffff;
}

.point-text strong {
    color: #ffff;
    display: block;
    font-weight: 600;
    margin-bottom: 2px;
}

.overview-image-wrap {
    height: 100%;
    min-height: 720px;
    border-radius: 24px;
    overflow: hidden;
    position: relative;
    box-shadow: 0 25px 70px rgba(0, 0, 0, 0.18);
}

.overview-image-wrap img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    transition: transform .7s ease;
}

.overview-image-wrap:hover img {
    transform: scale(1.04);
}

/* .overview-visual {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 14px;
}

.ov-card {
    background: var(--navy-600);
    border: 1px solid var(--navy-900);
    border-radius: var(--radius);
    padding: 24px;
    box-shadow: var(--card-shadow);
    transition: all 0.3s;
}

.ov-card:hover {
    border-color: var(--glass-border-hover);
    box-shadow: 0 8px 28px var(--navy-800);
    transform: translateY(-4px)
}

.ov-card.span-2 {
    grid-column: span 2;
}

.ov-icon {
    margin-bottom: 12px;
    color: var(--orange-500);
}

.ov-card h4 {
    font-family: var(--ff-head);
    font-size: 1rem;
    font-weight: 700;
    margin-bottom: 6px;
    color: #ffff;
}

.ov-card p {
    font-size: 0.82rem;
    color: #ffff;
    line-height: 1.6;
} */

.solutions {
    padding: 100px 0;
    background: var(--bg-page);
}

.solutions-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
}

.sol-card {
    background: var(--navy-600);
    border: 1px solid var(--navy-700);
    border-radius: var(--radius);
    padding: 28px 24px;
    box-shadow: var(--card-shadow);
    transition: all 0.35s cubic-bezier(0.4, 0, 0.2, 1);
    position: relative;
    overflow: hidden;
}

.sol-card::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    height: 2px;
    background: linear-gradient(to right, var(--orange-500), var(--orange-400));
    transform: scaleX(0);
    transform-origin: left;
    transition: transform 0.35s;
}

.sol-card:hover {
    border-color: var(--glass-border-hover);
    box-shadow: 0 8px 28px var(--navy-800);
    transform: translateY(-4px)
}

.sol-card:hover::after {
    transform: scaleX(1);
}

.sol-icon {
    width: 48px;
    height: 48px;
    border-radius: 12px;
    background: rgba(249, 115, 22, 0.09);
    border: 1px solid rgba(249, 115, 22, 0.18);
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 18px;
    color: var(--orange-500);
    transition: background 0.3s;
}

.sol-card:hover .sol-icon {
    background: rgba(249, 115, 22, 0.16);
}

.sol-card h3 {
    font-family: 'Syne', sans-serif;
    font-size: 0.95rem;
    font-weight: 700;
    margin-bottom: 10px;
    color: #ffff;
}

.sol-card p {
    font-size: 0.82rem;
    color: #ffff;
    line-height: 1.65;
}

.capabilities {
    padding: 60px 0;
    background: var(--bg-section-alt);
}

.cap-grid {
    display: grid;
    grid-template-columns: 1.2fr 0.8fr;
    gap: 80px;
    align-items: start;
}

.cap-inline-image {
    margin: 32px 0 40px;
    position: relative;

    width: 100%;
    height: 340px;

    overflow: hidden;

    clip-path: polygon(0% 12%,
            12% 0%,
            88% 0%,
            100% 12%,
            100% 88%,
            88% 100%,
            12% 100%,
            0% 88%);

    border: 1px solid rgba(249, 115, 22, 0.18);

    box-shadow:
        0 25px 70px rgba(0, 0, 0, 0.22),
        0 0 40px rgba(249, 115, 22, 0.08);

    background: var(--navy-600);

    isolation: isolate;
}

.cap-inline-image::before {
    content: '';
    position: absolute;
    inset: 0;

    background:
        linear-gradient(135deg,
            rgba(249, 115, 22, 0.25),
            transparent 45%);

    z-index: 2;
}

.cap-inline-image::after {
    content: '';
    position: absolute;
    inset: 10px;

    border: 1px solid rgba(255, 255, 255, 0.06);

    clip-path: polygon(0% 12%,
            12% 0%,
            88% 0%,
            100% 12%,
            100% 88%,
            88% 100%,
            12% 100%,
            0% 88%);

    z-index: 3;
}

.cap-inline-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;

    transition:
        transform .8s ease,
        filter .6s ease;
}

.cap-inline-image:hover img {
    transform: scale(1.08);
    filter: brightness(1.08);
}

/* .cap-list {
    display: flex;
    flex-direction: column;
    gap: 16px;
}

.cap-item {
    display: flex;
    align-items: center;
    gap: 20px;
    padding: 20px 24px;
    background: var(--navy-600);
    border: 1px solid var(--navy-700);
    border-radius: var(--radius-sm);
    box-shadow: var(--card-shadow);
    transition: all 0.3s;
    cursor: default;
}

.cap-item:hover {
    border-color: var(--glass-border-hover);
    box-shadow: 0 8px 28px var(--navy-800);
    transform: translateY(-4px)
}

.cap-num {
    font-family: var(--ff-mono);
    font-size: 0.7rem;
    font-weight: 800;
    color: var(--orange-500);
    min-width: 28px;
    letter-spacing: 0.06em;
}

.cap-content h4 {
    font-family: var(--ff-head);
    font-size: 0.95rem;
    font-weight: 700;
    margin-bottom: 4px;
    color: #ffff;
}

.cap-content p {
    font-size: 0.82rem;
    color: #ffff;
}

.cap-icon {
    margin-left: auto;
    color: var(--text-muted);
}

.cap-item:hover .cap-icon {
    color: var(--orange-500);
} */

.cap-visual {
    height: fit-content;
    position: relative;
    background: var(--navy-600);
    border: 1px solid var(--navy-700);
    border-radius: var(--radius);
    padding: 32px;
    margin-top: 150px;
    box-shadow: 0 24px 60px rgba(13, 21, 48, 0.18);
}

.cap-visual h3 {
    font-family: var(--ff-head);
    font-size: 0.85rem;
    color: #ffff;
    font-weight: 600;
    margin-bottom: 20px;
    letter-spacing: 0.05em;
}

.perf-row {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 14px;
}

.perf-label {
    font-size: 0.78rem;
    color: #ffff;
    min-width: 120px;
}

.perf-bar-track {
    flex: 1;
    height: 6px;
    background: rgba(255, 255, 255, 0.08);
    border-radius: 3px;
    overflow: hidden;
}

.perf-bar-fill {
    height: 100%;
    border-radius: 3px;
    background: var(--gradient-orange);
    animation: fillBar 1.5s ease-out forwards;
}

@keyframes fillBar {
    from {
        width: 0;
    }
}

.perf-val {
    font-size: 0.78rem;
    color: var(--orange-400);
    font-weight: 600;
    min-width: 36px;
    text-align: right;
}

.process {
    padding: 60px 0;
    background: var(--bg-page);
}

.process-steps {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 24px;
    margin-top: 60px;
}

.step-card {
    background: var(--navy-600);
    border: 1px solid var(--navy-700);
    border-radius: var(--radius);
    padding: 28px;
    box-shadow: var(--card-shadow);
    transition: all 0.3s;
    position: relative;
}

.step-card:hover {
    border-color: var(--glass-border-hover);
    box-shadow: 0 8px 28px var(--navy-800);
    transform: translateY(-4px)
}

/* .step-num {
    font-family: 'Syne', sans-serif;
    font-size: 2.5rem;
    font-weight: 800;
    color: rgba(249, 115, 22, 0.10);
    position: absolute;
    top: 16px;
    right: 20px;
    line-height: 1;
} */

.step-icon {
    color: var(--orange-500);
    margin-bottom: 16px;
}

.step-card h3 {
    font-family: var(--ff-head);
    font-size: 1rem;
    font-weight: 700;
    margin-bottom: 8px;
    color: #ffff;
}

.step-card p {
    font-size: 0.82rem;
    color: #ffff;
    line-height: 1.65;
}

.use-cases {
    padding: 60px 0;
    background: var(--bg-section-alt);
}

.uc-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 24px;
}

.uc-card {
    background: var(--navy-600);
    border: 1px solid var(--navy-700);
    border-radius: var(--radius);
    padding: 36px;
    box-shadow: var(--card-shadow);
    transition: all 0.35s;
    position: relative;
    overflow: hidden;
}

.uc-card::before {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(135deg, rgba(249, 115, 22, 0.04) 0%, transparent 60%);
    opacity: 0;
    transition: opacity 0.3s;
}

.uc-card:hover {
    border-color: var(--glass-border-hover);
    box-shadow: 0 8px 28px var(--navy-800);
    transform: translateY(-4px)
}

.uc-card:hover::before {
    opacity: 1;
}

.uc-tag {
    display: inline-block;
    background: rgba(249, 115, 22, 0.10);
    border: 1px solid rgba(249, 115, 22, 0.22);
    color: var(--orange-500);
    padding: 4px 12px;
    border-radius: 6px;
    font-size: 0.72rem;
    font-weight: 600;
    letter-spacing: 0.05em;
    text-transform: uppercase;
    margin-bottom: 16px;
}

.uc-icon {
    color: var(--orange-500);
    margin-bottom: 16px;
}

.uc-card h3 {
    font-family: var(--ff-head);
    font-size: 1.2rem;
    font-weight: 700;
    margin-bottom: 12px;
    color: #ffff;
}

.uc-card p {
    font-size: 0.875rem;
    color: #ffff;
    line-height: 1.75;
    margin-bottom: 20px;
}

.uc-features {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
}

.uc-feat {
    background: var(--navy-800);
    border: 1px solid var(--navy-700);
    padding: 4px 12px;
    border-radius: 6px;
    font-size: 0.75rem;
    color: #ffff;
}

.features {
    padding: 60px 0;
    background: var(--bg-page);
}

.feat-grid {
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    gap: 16px;
}

.feat-card {
    background: var(--navy-600);
    border: 1px solid var(--navy-700);
    border-radius: var(--radius);
    padding: 24px 18px;
    text-align: center;
    box-shadow: var(--card-shadow);
    transition: all 0.3s;
}

.feat-card:hover {
    border-color: var(--glass-border-hover);
    box-shadow: 0 8px 28px var(--navy-800);
    transform: translateY(-4px)
}

.feat-icon {
    width: 52px;
    height: 52px;
    border-radius: 12px;
    background: rgba(249, 115, 22, 0.08);
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 16px;
    color: var(--orange-500);
    transition: background 0.3s;
}

.feat-card:hover .feat-icon {
    background: rgba(249, 115, 22, 0.16);
}

.feat-card h3 {
    font-family: var(--ff-head);
    font-size: 0.88rem;
    font-weight: 700;
    margin-bottom: 8px;
    color: #ffff;
}

.feat-card p {
    font-size: 0.78rem;
    color: #ffff;
    line-height: 1.6;
}

.results {
    padding: 60px 0;
    background: var(--bg-section-alt);
}

.results-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
}

.result-card {
    background: var(--navy-600);
    border: 1px solid var(--card-border);
    border-radius: var(--radius);
    padding: 32px 24px;
    text-align: center;
    box-shadow: var(--card-shadow);
    transition: all 0.3s;
    position: relative;
    overflow: hidden;
}

.result-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 2px;
    background: linear-gradient(to right, transparent, var(--orange-500), transparent);
    opacity: 0;
    transition: opacity 0.3s;
}

.result-card:hover {
    border-color: var(--card-border-hover);
    box-shadow: var(--card-shadow-hover);
}

.result-card:hover::before {
    opacity: 1;
}

.result-num {
    font-family: var(--ff-mono);
    font-size: 2.8rem;
    font-weight: 800;
    background: var(--gradient-orange);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    line-height: 1;
    margin-bottom: 8px;
}

.result-label {
    font-family: var(--ff-body);
    font-size: 0.9rem;
    font-weight: 700;
    margin-bottom: 8px;
    color: #ffff;
}

.result-desc {
    font-size: 0.78rem;
    color: #ffff;
    line-height: 1.6;
}

/* ═══════════════════════════════════════════════
   CTA — navy gradient
═══════════════════════════════════════════════ */
/* ============ CTA SECTION ============ */

.cta-section {
    padding: 90px 0;
    position: relative;
    overflow: hidden;
    text-align: center;

    background:
        linear-gradient(135deg,
            rgba(5, 10, 35, 0.88),
            rgba(10, 14, 46, 0.82),
            rgba(232, 117, 10, 0.18)),
        url('/assets/images/cta-img.jpg');

    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed;

    border-top: 1px solid rgba(232, 117, 10, 0.15);
    border-bottom: 1px solid rgba(232, 117, 10, 0.15);
}

/* Premium dark overlay */
.cta-section::before {
    content: "";
    position: absolute;
    inset: 0;

    background:
        radial-gradient(circle at center,
            rgba(232, 117, 10, 0.18),
            transparent 60%);

    z-index: 1;
}

/* Glass blur layer */
.cta-section::after {
    content: "";
    position: absolute;
    inset: 0;

    backdrop-filter: blur(3px);
    background: rgba(0, 0, 0, 0.18);

    z-index: 1;
}

.cta-inner {
    position: relative;
    z-index: 2;
    max-width: 1000px;
    margin: auto;
}

.cta-title {
    font-family: var(--font-display);
    font-size: clamp(2.8rem, 5vw, 5rem);
    font-weight: 800;
    line-height: 1.1;
    margin-bottom: 24px;

    color: #fff;
    text-shadow: 0 10px 30px rgba(0, 0, 0, 0.35);
}

.cta-title .text-gradient {
    background: linear-gradient(135deg,
            #ff8c1a,
            #ffb347);

    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.cta-subtitle {
    font-size: 1.15rem;
    line-height: 1.8;
    color: rgba(255, 255, 255, 0.82);

    max-width: 760px;
    margin: 0 auto 42px;
}

.cta-actions {
    display: flex;
    justify-content: center;
    gap: 18px;
    flex-wrap: wrap;
}

/* Optional premium buttons */
.cta-actions .btn-primary {
    box-shadow: 0 10px 30px rgba(232, 117, 10, 0.35);
}

.cta-actions .btn-outline {
    border: 1px solid rgba(255, 255, 255, 0.25);
    background: rgba(255, 255, 255, 0.05);
    backdrop-filter: blur(12px);
    color: #fff;
}

.cta-actions .btn-outline:hover {
    background: rgba(255, 255, 255, 0.12);
}


/* ─── ANIMATIONS ─── */
@keyframes fadeUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }

    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.fade-up {
    animation: fadeUp 0.8s ease-out forwards;
}

.fade-up-1 {
    animation-delay: 0.1s;
    opacity: 0;
}

.fade-up-2 {
    animation-delay: 0.2s;
    opacity: 0;
}

.fade-up-3 {
    animation-delay: 0.3s;
    opacity: 0;
}

.fade-up-4 {
    animation-delay: 0.4s;
    opacity: 0;
}

/* ─── RESPONSIVE ─── */
@media (max-width: 1024px) {
    .hero-inner {
        grid-template-columns: 1fr;
        gap: 50px;
    }

    .hero-visual {
        max-width: 560px;
        margin: 0 auto;
    }

    .solutions-grid {
        grid-template-columns: repeat(2, 1fr);
    }

    .feat-grid {
        grid-template-columns: repeat(3, 1fr);
    }

    .results-grid {
        grid-template-columns: repeat(2, 1fr);
    }

    .overview-grid {
        grid-template-columns: 1fr;
    }

    .cap-grid {
        grid-template-columns: 1fr;
    }

    .process-steps {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 768px) {
    .nav-links {
        display: none;
    }

    .stats-inner {
        grid-template-columns: repeat(2, 1fr);
        gap: 24px;
    }

    .stat-item::after {
        display: none;
    }

    .solutions-grid {
        grid-template-columns: 1fr;
    }

    .uc-grid {
        grid-template-columns: 1fr;
    }

    .feat-grid {
        grid-template-columns: repeat(2, 1fr);
    }

    .process-steps {
        grid-template-columns: 1fr;
    }

    .results-grid {
        grid-template-columns: repeat(2, 1fr);
    }

    .cta-inner {
        padding: 50px 28px;
    }

    .floating-badge {
        display: none;
    }
}
</style>
</head>

<body>

    <!-- HERO -->
    <section class="hero">
        <img src="{{ asset('assets/images/hero-medinfo.jpeg') }}" alt="Hero Background" class="hero-bg-img" />
        <div class="hero-bg">
        </div>
        <div class="container">
            <div class="hero-inner">
                <div class="hero-content">
                    <h1 class="fade-up fade-up-1">
                        Scalable Platforms for the <em>Digital Media Era</em>
                    </h1>
                    <p class="hero-sub fade-up fade-up-2">
                        Build data-driven media platforms that deliver seamless content experiences across every channel
                        — from publishing to streaming to real-time analytics.
                    </p>
                    <div class="hero-btns fade-up fade-up-3">
                        <a href="#" class="btn-primary">Get a Quote</a>
                        <a href="#" class="btn-outline">Consult Now →</a>
                    </div>
                </div>
                <div>
                </div>
    </section>


    <!-- OVERVIEW -->
    <section class="overview">
        <div class="container">
            <div class="overview-grid">
                <div class="overview-text">
                    <div class="label-pill"><span></span>Industry Overview</div>
                    <h2>The Media Landscape Demands <em>Real-Time Intelligence</em></h2>
                    <p>Digital media consumption has fundamentally shifted. Audiences expect instant, personalized
                        experiences across every touchpoint — and businesses that fail to deliver lose both attention
                        and revenue.</p>
                    <p>Modern media enterprises require real-time data processing, scalable content delivery
                        infrastructure, and AI-powered personalization — all operating in concert.</p>
                    <div class="overview-points">
                        <div class="overview-point">
                            <svg class="point-icon" width="18" height="18" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10" />
                                <polyline points="12 6 12 12 16 14" />
                            </svg>
                            <div class="point-text">
                                <strong>Real-Time Processing</strong>
                                Handle millions of concurrent content requests with sub-50ms response times.
                            </div>
                        </div>
                        <div class="overview-point">
                            <svg class="point-icon" width="18" height="18" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="2" y="3" width="20" height="14" rx="2" />
                                <line x1="8" y1="21" x2="16" y2="21" />
                                <line x1="12" y1="17" x2="12" y2="21" />
                            </svg>
                            <div class="point-text">
                                <strong>Cross-Platform Delivery</strong>
                                Consistent experiences across web, mobile, OTT, and connected TV.
                            </div>
                        </div>
                        <div class="overview-point">
                            <svg class="point-icon" width="18" height="18" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                                <circle cx="9" cy="7" r="4" />
                                <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                                <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                            </svg>
                            <div class="point-text">
                                <strong>Audience Personalization</strong>
                                AI-driven recommendations that increase retention and engagement by design.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="overview-image-wrap">
                    <img src="{{ asset('assets/images/medinfo-img2.jpg') }}" alt="Media & Information Services">
                </div>
            </div>
        </div>
    </section>

    <!-- CORE SOLUTIONS -->
    <section class="solutions">
        <div class="container">
            <div class="section-header">
                <div class="label-pill"><span></span>Core Solutions</div>
                <h2>What We <em>Build</em> for Media Leaders</h2>
                <p>End-to-end capabilities engineered for performance, scale, and measurable audience impact.</p>
            </div>
            <div class="solutions-grid">

                <div class="sol-card">
                    <div class="sol-icon">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="2" y="3" width="20" height="14" rx="2" />
                            <line x1="8" y1="21" x2="16" y2="21" />
                            <line x1="12" y1="17" x2="12" y2="21" />
                        </svg>
                    </div>
                    <h3>Media Platform Development</h3>
                    <p>Custom-built platforms architected for high-traffic media workloads — from editorial to
                        distribution at enterprise scale.</p>
                </div>

                <div class="sol-card">
                    <div class="sol-icon">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M14.5 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.5L14.5 2z" />
                            <polyline points="14 2 14 8 20 8" />
                            <line x1="16" y1="13" x2="8" y2="13" />
                            <line x1="16" y1="17" x2="8" y2="17" />
                            <line x1="10" y1="9" x2="8" y2="9" />
                        </svg>
                    </div>
                    <h3>Content Management Systems</h3>
                    <p>Headless CMS solutions enabling multi-channel publishing with structured workflows and real-time
                        collaboration.</p>
                </div>

                <div class="sol-card">
                    <div class="sol-icon">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 22h16a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v2" />
                            <path d="M4 11.5V22a2 2 0 0 0 2 2h0a2 2 0 0 0 2-2V4" />
                        </svg>
                    </div>
                    <h3>Digital Publishing Solutions</h3>
                    <p>Automated publishing pipelines with SEO-native architecture, subscriber management, and
                        monetization modules.</p>
                </div>

                <div class="sol-card">
                    <div class="sol-icon">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="18" y1="20" x2="18" y2="10" />
                            <line x1="12" y1="20" x2="12" y2="4" />
                            <line x1="6" y1="20" x2="6" y2="14" />
                        </svg>
                    </div>
                    <h3>Data & Analytics Integration</h3>
                    <p>Real-time dashboards and audience intelligence pipelines that transform raw signals into
                        actionable media strategy.</p>
                </div>

                <div class="sol-card">
                    <div class="sol-icon">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="1" />
                            <circle cx="3" cy="6" r="1" />
                            <circle cx="21" cy="6" r="1" />
                            <circle cx="3" cy="18" r="1" />
                            <circle cx="21" cy="18" r="1" />
                            <line x1="3" y1="7" x2="12" y2="11" />
                            <line x1="21" y1="7" x2="12" y2="11" />
                            <line x1="3" y1="17" x2="12" y2="13" />
                            <line x1="21" y1="17" x2="12" y2="13" />
                        </svg>
                    </div>
                    <h3>API & Content Distribution</h3>
                    <p>RESTful and GraphQL APIs enabling seamless syndication across partner networks, aggregators, and
                        third-party surfaces.</p>
                </div>

                <div class="sol-card">
                    <div class="sol-icon">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                            <circle cx="9" cy="7" r="4" />
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                        </svg>
                    </div>
                    <h3>Audience Personalization</h3>
                    <p>Machine learning recommendation engines that dynamically surface the right content to the right
                        user at the right moment.</p>
                </div>

                <div class="sol-card">
                    <div class="sol-icon">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="22 12 16 12 14 15 10 9 8 12 2 12" />
                            <path
                                d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z" />
                        </svg>
                    </div>
                    <h3>Cloud-Based Media Solutions</h3>
                    <p>Elastic cloud infrastructure on AWS, GCP, and Azure — designed for burst traffic, global
                        redundancy, and cost efficiency.</p>
                </div>

                <div class="sol-card">
                    <div class="sol-icon">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2" />
                        </svg>
                    </div>
                    <h3>Performance Optimization</h3>
                    <p>Core Web Vitals tuning, CDN strategy, and edge caching that deliver sub-second load times for
                        content-heavy properties.</p>
                </div>

            </div>
        </div>
    </section>

    <!-- CAPABILITIES -->
    <section class="capabilities">
        <div class="container">
            <div class="cap-grid">
                <div>
                    <div class="label-pill"><span></span>Capabilities</div>
                    <h2
                        style="font-family:var(--ff-head);font-size:clamp(1.8rem,3vw,2.4rem);font-weight:800;letter-spacing:-0.02em;margin-bottom:16px;line-height:1.2;color:var(--navy-800);">
                        What We Deliver at <em
                            style="font-style:var(--ff-head);background:var(--gradient-orange);-webkit-background-clip:text;-webkit-text-fill-color:transparent;">Enterprise
                            Scale</em></h2>
                    <p style="color:var(--black);margin-bottom:36px;font-weight:450;line-height:1.8;">Every
                        capability is built for production environments where performance, reliability, and security are
                        non-negotiable.</p>
                    <div class="cap-inline-image">
                        <img src="{{ asset('assets/images/medinfo-img.jpg') }}" alt="Media Technology">
                    </div>
                    <!-- <div class="cap-list">
                        <div class="cap-item">
                            <span class="cap-num">01</span>
                            <div class="cap-content">
                                <h4>Real-Time Data Processing</h4>
                                <p>Stream millions of content events per second using Apache Kafka and Flink pipelines.
                                </p>
                            </div>
                        </div>
                        <div class="cap-item">
                            <span class="cap-num">02</span>
                            <div class="cap-content">
                                <h4>Cross-Channel Content Delivery</h4>
                                <p>Unified content APIs serving web, mobile, OTT, and broadcast from a single source of
                                    truth.</p>
                            </div>
                        </div>
                        <div class="cap-item">
                            <span class="cap-num">03</span>
                            <div class="cap-content">
                                <h4>AI-Driven Recommendations</h4>
                                <p>Collaborative filtering and deep learning models trained on your audience's
                                    behavioral data.</p>
                            </div>
                        </div>
                        <div class="cap-item">
                            <span class="cap-num">04</span>
                            <div class="cap-content">
                                <h4>Scalable Cloud Infrastructure</h4>
                                <p>Auto-scaling architectures that absorb 10× traffic spikes without degradation.</p>
                            </div>
                        </div>
                        <div class="cap-item">
                            <span class="cap-num">05</span>
                            <div class="cap-content">
                                <h4>Secure High-Performance Systems</h4>
                                <p>SOC 2 compliant architecture with end-to-end encryption, DDoS mitigation, and
                                    zero-trust access.</p>
                            </div>
                        </div>
                    </div> -->
                </div>

                <div class="cap-visual">
                    <h3>SYSTEM PERFORMANCE BENCHMARK</h3>
                    <div class="perf-row">
                        <span class="perf-label">Content Throughput</span>
                        <div class="perf-bar-track">
                            <div class="perf-bar-fill" style="width:94%"></div>
                        </div>
                        <span class="perf-val">94%</span>
                    </div>
                    <div class="perf-row">
                        <span class="perf-label">API Response Speed</span>
                        <div class="perf-bar-track">
                            <div class="perf-bar-fill" style="width:98%"></div>
                        </div>
                        <span class="perf-val">98%</span>
                    </div>
                    <div class="perf-row">
                        <span class="perf-label">Audience Retention</span>
                        <div class="perf-bar-track">
                            <div class="perf-bar-fill" style="width:78%"></div>
                        </div>
                        <span class="perf-val">78%</span>
                    </div>
                    <div class="perf-row">
                        <span class="perf-label">CDN Cache Hit Rate</span>
                        <div class="perf-bar-track">
                            <div class="perf-bar-fill" style="width:96%"></div>
                        </div>
                        <span class="perf-val">96%</span>
                    </div>
                    <div class="perf-row">
                        <span class="perf-label">Uptime Reliability</span>
                        <div class="perf-bar-track">
                            <div class="perf-bar-fill" style="width:99%"></div>
                        </div>
                        <span class="perf-val">99%</span>
                    </div>

                    <div style="margin-top:28px;padding-top:24px;border-top:1px solid var(--glass-border);">
                        <div
                            style="font-size:0.75rem;color:#ffff;margin-bottom:12px;text-transform:uppercase;letter-spacing:0.06em;">
                            Tech Stack</div>
                        <div style="display:flex;flex-wrap:wrap;gap:8px;">
                            <span
                                style="background:var(--navy-800);border:1px solid var(--glass-border);padding:4px 12px;border-radius:6px;font-size:0.72rem;color:#ffff;">Kafka</span>
                            <span
                                style="background:var(--navy-800);border:1px solid var(--glass-border);padding:4px 12px;border-radius:6px;font-size:0.72rem;color:#ffff;">Kubernetes</span>
                            <span
                                style="background:var(--navy-800);border:1px solid var(--glass-border);padding:4px 12px;border-radius:6px;font-size:0.72rem;color:#ffff;">GraphQL</span>
                            <span
                                style="background:var(--navy-800);border:1px solid var(--glass-border);padding:4px 12px;border-radius:6px;font-size:0.72rem;color:#ffff;">ElasticSearch</span>
                            <span
                                style="background:var(--navy-800);border:1px solid var(--glass-border);padding:4px 12px;border-radius:6px;font-size:0.72rem;color:#ffff;">Redis</span>
                            <span
                                style="background:var(--navy-800);border:1px solid var(--glass-border);padding:4px 12px;border-radius:6px;font-size:0.72rem;color:#ffff;">Cloudflare</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PROCESS -->
    <section class="process">
        <div class="container">
            <div class="section-header">
                <div class="label-pill"><span></span>Our Process</div>
                <h2>From Brief to <em>Production</em> — Engineered</h2>
                <p>A structured engagement model that eliminates risk and accelerates time-to-market for complex media
                    systems.</p>
            </div>
            <div class="process-steps">
                <div class="step-card">
                    <div class="step-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="11" cy="11" r="8" />
                            <line x1="21" y1="21" x2="16.65" y2="16.65" />
                        </svg>
                    </div>
                    <h3>Requirement Analysis & Research</h3>
                    <p>Deep-dive discovery into your content workflows, audience segments, and technical constraints. We
                        map the full system before a line of code is written.</p>
                </div>
                <div class="step-card">
                    <div class="step-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <polygon points="12 2 2 7 12 12 22 7 12 2" />
                            <polyline points="2 17 12 22 22 17" />
                            <polyline points="2 12 12 17 22 12" />
                        </svg>
                    </div>
                    <h3>Architecture & Platform Strategy</h3>
                    <p>System design for scalability, redundancy, and performance — selecting the right microservices,
                        data pipelines, and cloud infrastructure for your load profile.</p>
                </div>
                <div class="step-card">
                    <div class="step-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="3" width="18" height="18" rx="2" />
                            <circle cx="8.5" cy="8.5" r="1.5" />
                            <polyline points="21 15 16 10 5 21" />
                        </svg>
                    </div>
                    <h3>UI/UX Design for Media Systems</h3>
                    <p>Consumer-facing interfaces, editorial dashboards, and analytics views designed for clarity,
                        speed, and cross-device parity.</p>
                </div>
                <div class="step-card">
                    <div class="step-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="16 18 22 12 16 6" />
                            <polyline points="8 6 2 12 8 18" />
                        </svg>
                    </div>
                    <h3>Development & Integration</h3>
                    <p>Agile sprints with weekly demos. Full-stack development integrated with your existing tech stack,
                        CRM, ad platforms, and data warehouses.</p>
                </div>
                <div class="step-card">
                    <div class="step-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                        </svg>
                    </div>
                    <h3>Testing & Performance Optimization</h3>
                    <p>Load testing at 2× expected peak, security penetration testing, and Core Web Vitals validation
                        before any launch gate.</p>
                </div>
                <div class="step-card">
                    <div class="step-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="22 12 18 12 15 21 9 3 6 12 2 12" />
                        </svg>
                    </div>
                    <h3>Deployment & Continuous Scaling</h3>
                    <p>Zero-downtime deployments with CI/CD pipelines, 24/7 monitoring, and a dedicated SRE team for
                        ongoing platform evolution.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- USE CASES -->
    <section class="use-cases">
        <div class="container">
            <div class="section-header">
                <div class="label-pill"><span></span>Use Cases</div>
                <h2>Built for <em>Every Media Vertical</em></h2>
                <p>Solutions validated across the full spectrum of modern media and information businesses.</p>
            </div>
            <div class="uc-grid">

                <div class="uc-card">
                    <div class="uc-tag">Publishing</div>
                    <div class="uc-icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 22h16a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v2" />
                            <path d="M4 11.5V22a2 2 0 0 0 2 2h0a2 2 0 0 0 2-2V4" />
                        </svg>
                    </div>
                    <h3>News & Publishing Platforms</h3>
                    <p>Real-time editorial systems with automated publishing workflows, subscriber paywalls, and
                        SEO-native architecture that scales for breaking news traffic surges.</p>
                    <div class="uc-features">
                        <span class="uc-feat">Paywall Management</span>
                        <span class="uc-feat">Editorial Workflow</span>
                        <span class="uc-feat">Subscriber Analytics</span>
                        <span class="uc-feat">SEO Automation</span>
                    </div>
                </div>

                <div class="uc-card">
                    <div class="uc-tag">Streaming</div>
                    <div class="uc-icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                            <polygon points="23 7 16 12 23 17 23 7" />
                            <rect x="1" y="5" width="15" height="14" rx="2" />
                        </svg>
                    </div>
                    <h3>OTT & Video Streaming Solutions</h3>
                    <p>End-to-end video platforms with adaptive bitrate streaming, DRM content protection, multi-CDN
                        failover, and viewer analytics dashboards for content teams.</p>
                    <div class="uc-features">
                        <span class="uc-feat">Adaptive Bitrate</span>
                        <span class="uc-feat">DRM Protection</span>
                        <span class="uc-feat">Multi-CDN</span>
                        <span class="uc-feat">Live Streaming</span>
                    </div>
                </div>

                <div class="uc-card">
                    <div class="uc-tag">AdTech</div>
                    <div class="uc-icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="18" y1="20" x2="18" y2="10" />
                            <line x1="12" y1="20" x2="12" y2="4" />
                            <line x1="6" y1="20" x2="6" y2="14" />
                        </svg>
                    </div>
                    <h3>AdTech & Media Analytics Platforms</h3>
                    <p>Programmatic advertising infrastructure, first-party data platforms, and revenue attribution
                        systems that connect audience intelligence to monetization outcomes.</p>
                    <div class="uc-features">
                        <span class="uc-feat">Programmatic Ads</span>
                        <span class="uc-feat">First-Party Data</span>
                        <span class="uc-feat">Revenue Attribution</span>
                        <span class="uc-feat">Audience Segments</span>
                    </div>
                </div>

                <div class="uc-card">
                    <div class="uc-tag">Aggregation</div>
                    <div class="uc-icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="1" />
                            <circle cx="3" cy="6" r="1" />
                            <circle cx="21" cy="6" r="1" />
                            <circle cx="3" cy="18" r="1" />
                            <circle cx="21" cy="18" r="1" />
                            <line x1="3" y1="7" x2="12" y2="11" />
                            <line x1="21" y1="7" x2="12" y2="11" />
                            <line x1="3" y1="17" x2="12" y2="13" />
                            <line x1="21" y1="17" x2="12" y2="13" />
                        </svg>
                    </div>
                    <h3>Content Aggregation Systems</h3>
                    <p>Multi-source ingestion pipelines that normalize, tag, and surface content from hundreds of feeds
                        — powering intelligent content hubs and discovery platforms.</p>
                    <div class="uc-features">
                        <span class="uc-feat">Multi-Source Ingestion</span>
                        <span class="uc-feat">Auto-Tagging</span>
                        <span class="uc-feat">Content Discovery</span>
                        <span class="uc-feat">Feed Management</span>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- FEATURES -->
    <section class="features">
        <div class="container">
            <div class="section-header">
                <div class="label-pill"><span></span>Platform Features</div>
                <h2>Built for <em>Performance</em>, by Design</h2>
                <p>Core features that come standard in every Accrosian media platform engagement.</p>
            </div>
            <div class="feat-grid">

                <div class="feat-card">
                    <div class="feat-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="22 12 18 12 15 21 9 3 6 12 2 12" />
                        </svg>
                    </div>
                    <h3>Real-Time Content Updates</h3>
                    <p>WebSocket-powered live publishing with instant cache invalidation across all edge nodes.</p>
                </div>

                <div class="feat-card">
                    <div class="feat-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="5" y="2" width="14" height="20" rx="2" />
                            <line x1="12" y1="18" x2="12.01" y2="18" />
                        </svg>
                    </div>
                    <h3>Multi-Device Compatibility</h3>
                    <p>Responsive interfaces and native SDKs for web, iOS, Android, and Smart TV ecosystems.</p>
                </div>

                <div class="feat-card">
                    <div class="feat-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="3" width="18" height="18" rx="2" />
                            <path d="M3 9h18M9 21V9" />
                        </svg>
                    </div>
                    <h3>Audience Analytics Dashboards</h3>
                    <p>Configurable analytics views with cohort analysis, funnel tracking, and content attribution
                        reporting.</p>
                </div>

                <div class="feat-card">
                    <div class="feat-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2z" />
                            <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3" />
                            <line x1="12" y1="17" x2="12.01" y2="17" />
                        </svg>
                    </div>
                    <h3>Personalization Engines</h3>
                    <p>On-device and server-side personalization delivering individualized content feeds at scale.</p>
                </div>

                <div class="feat-card">
                    <div class="feat-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2" />
                        </svg>
                    </div>
                    <h3>High-Speed Performance</h3>
                    <p>Edge-first architecture with Lighthouse scores above 95 and Time to First Byte under 200ms.</p>
                </div>

            </div>
        </div>
    </section>

    <!-- RESULTS -->
    <section class="results">
        <div class="container">
            <div class="section-header">
                <div class="label-pill"><span></span>Proven Impact</div>
                <h2>Results That <em>Speak for Themselves</em></h2>
                <p>Measurable outcomes from media platforms built and scaled by Accrosian.</p>
            </div>
            <div class="results-grid">
                <div class="result-card">
                    <div class="result-num">99.9%</div>
                    <div class="result-label">Platform Uptime</div>
                    <div class="result-desc">SLA-backed reliability with proactive incident response and zero single
                        points of failure.</div>
                </div>
                <div class="result-card">
                    <div class="result-num">50M+</div>
                    <div class="result-label">Concurrent Users</div>
                    <div class="result-desc">Proven capacity to serve massive simultaneous audiences without performance
                        degradation.</div>
                </div>
                <div class="result-card">
                    <div class="result-num">3×</div>
                    <div class="result-label">Faster Delivery</div>
                    <div class="result-desc">Average content load time reduction through edge caching, CDN optimization,
                        and code splitting.</div>
                </div>
                <div class="result-card">
                    <div class="result-num">+41%</div>
                    <div class="result-label">Engagement Uplift</div>
                    <div class="result-desc">Median increase in session depth and return visit rate following
                        personalization engine deployment.</div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    {{-- CTA --}}
    <section class="cta-section">
        <div class="container cta-inner">
            <span class="section-tag" style="margin-bottom:24px">Ready to Start?</span>
            <h2 class="cta-title">Let's Build Something <span class="text-gradient">Extraordinary</span> Together</h2>
            <p class="cta-subtitle">Tell us your vision and we'll turn it into reality. Free consultation, no
                commitment.
            </p>
            <div class="cta-actions">
                <a href="{{ route('contact') }}" class="btn btn-primary btn-arrow">Start Your Project</a>
                <a href="{{ route('portfolio') }}" class="btn btn-outline">See Our Work</a>
            </div>
        </div>
    </section>

    </div>
    @endsection