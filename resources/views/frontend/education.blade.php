@extends('layouts.app')

@section('title', 'Banking & Fintech Solutions | Accrosian')

@section('content')

<link rel="preconnect" href="https://fonts.googleapis.com">
<link
    href="https://fonts.googleapis.com/css2?family=Sora:wght@300;400;600;700;800&family=DM+Sans:ital,wght@0,300;0,400;0,500;0,600;1,400&family=JetBrains+Mono:wght@400;500&display=swap"
    rel="stylesheet">

<style>
/* ─────────────────────────────────────────
   TOKENS
───────────────────────────────────────── */
:root {
    --navy-950: #040814;
    --navy-900: #070d1f;
    --navy-800: #0d1530;
    --navy-700: #111d40;
    --navy-600: #1a2060;
    --orange-600: #ea6a00;
    --orange-500: #f97316;
    --orange-400: #fb923c;
    --orange-300: #fdba74;
    --black: #000000;
    --orange-glow: rgba(249, 115, 22, .18);
    --orange-glow-md: rgba(249, 115, 22, .28);
    --orange-glow-lg: rgba(249, 115, 22, .38);
    --glass-bg: rgba(13, 21, 48, .55);
    --glass-bg-2: rgba(13, 21, 48, .75);
    --glass-border: rgba(255, 255, 255, .07);
    --glass-border-hover: rgba(249, 115, 22, .38);
    --text-primary: #eef2ff;
    --text-secondary: #8fa0c0;
    --text-muted: #4f607e;
    --gradient-orange: linear-gradient(135deg, #e8750a, #f59332);
    --r: 16px;
    --r-sm: 10px;
    --ff-head: 'Sora', sans-serif;
    --ff-body: 'DM Sans', sans-serif;
    --ff-mono: 'JetBrains Mono', monospace;
}

*,
*::before,
*::after {
    box-sizing: border-box;
    margin: 0;
    padding: 0
}

html {
    scroll-behavior: smooth
}

body {
    font-family: var(--ff-body);
    background: #ffff;
    color: var(--text-primary);
    line-height: 1.65;
    overflow-x: hidden;
}

/* noise */
body::before {
    content: '';
    position: fixed;
    inset: 0;
    background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='.035'/%3E%3C/svg%3E");
    pointer-events: none;
    z-index: 0;
}

/* ─── UTILITY ─── */
section {
    position: relative;
    z-index: 1
}

.container {
    max-width: 1300px;
    margin: 0 auto;
    padding: 0 6%
}

.pill {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: rgba(249, 115, 22, .10);
    border: 1px solid rgba(249, 115, 22, .24);
    color: var(--orange-400);
    padding: 6px 16px;
    border-radius: 100px;
    font-size: .77rem;
    font-weight: 600;
    letter-spacing: .08em;
    text-transform: uppercase;
    margin-bottom: 20px;
}

.pill-dot {
    width: 6px;
    height: 6px;
    background: var(--orange-500);
    border-radius: 50%
}

h1,
h2,
h3,
h4 {
    font-family: var(--ff-head);
}

.sec-head {
    text-align: center;
    margin-bottom: 56px
}

.sec-head h2 {
    font-size: clamp(1.9rem, 3.5vw, 2.85rem);
    font-weight: 800;
    font-style: var(--ff-head);
    letter-spacing: -.025em;
    margin-bottom: 14px;
    color: var(--navy-800);
    line-height: 1.1;
}

.sec-head h2 em {
    font-style: var(--ff-head);
    background: var(--gradient-orange);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.sec-head p {
    color: var(--navy-900);
    font-size: 1rem;
    max-width: 560px;
    margin: 0 auto;
    font-weight: 300
}

/* ─── HERO ─── */
.hero {
    min-height: 100vh;
    display: flex;
    align-items: center;
    padding-top: 88px;
    overflow: hidden
}

.hero-bg {
    position: absolute;
    inset: 0;
    z-index: 0;
    background: radial-gradient(ellipse 75% 60% at 68% 38%, rgba(249, 115, 22, .11) 0%, transparent 62%),
        radial-gradient(ellipse 50% 50% at 10% 85%, rgba(11, 18, 40, .95) 0%, transparent 60%),
        linear-gradient(160deg, var(--navy-950) 0%, var(--navy-900) 100%);
}

.hero-bg::after {
    content: '';
    position: absolute;
    inset: 0;
    background-image: linear-gradient(rgba(255, 255, 255, .022) 1px, transparent 1px),
        linear-gradient(90deg, rgba(255, 255, 255, .022) 1px, transparent 1px);
    background-size: 58px 58px;
    mask-image: linear-gradient(to bottom, transparent, black 18%, black 68%, transparent);
}

.hero-inner {
    position: relative;
    z-index: 2;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 56px;
    max-width: 1300px;
    align-items: center;
    padding: 80px 0;
}

.hero-eyebrow {
    display: flex;
    align-items: center;
    gap: 10px;
    color: var(--text-muted);
    font-size: .8rem;
    letter-spacing: .07em;
    text-transform: uppercase;
    font-weight: 500;
    margin-bottom: 22px;
}

.hero-eyebrow::before {
    content: '';
    display: block;
    width: 26px;
    height: 1px;
    background: linear-gradient(to right, var(--orange-500), transparent);
}

.hero h1 {
    font-size: clamp(2.3rem, 4.2vw, 3.75rem);
    font-weight: 800;
    line-height: 1.07;
    letter-spacing: -.03em;
    margin-bottom: 22px;
    color: #ffff;
}

.hero h1 em {
    font-style: normal;
    background: var(--gradient-orange);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.hero-sub {
    color: var(--text-secondary);
    font-size: 1.05rem;
    font-weight: 300;
    max-width: 500px;
    margin-bottom: 38px;
    line-height: 1.78;
}

/* ─── HERO DASHBOARD ─── */
.hero-visual {
    position: relative
}

.dash {
    background: var(--glass-bg-2);
    border: 1px solid var(--glass-border);
    border-radius: var(--r);
    backdrop-filter: blur(22px);
    padding: 22px;
    box-shadow: 0 28px 90px rgba(0, 0, 0, .55), inset 0 1px 0 rgba(255, 255, 255, .05);
    animation: floatY 6s ease-in-out infinite;
}

@keyframes floatY {

    0%,
    100% {
        transform: translateY(0)
    }

    50% {
        transform: translateY(-9px)
    }
}

.dash-top {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 18px
}

.dash-title {
    font-family: 'Syne', sans-serif;
    font-size: .8rem;
    color: var(--text-secondary);
    font-weight: 600;
    letter-spacing: .06em
}

.live-dot {
    display: flex;
    align-items: center;
    gap: 6px;
    font-size: .72rem;
    color: #4ade80;
    font-weight: 600
}

.live-dot::before {
    content: '';
    width: 7px;
    height: 7px;
    border-radius: 50%;
    background: #4ade80;
    animation: pulse 2s ease-in-out infinite
}

@keyframes pulse {

    0%,
    100% {
        opacity: 1
    }

    50% {
        opacity: .4
    }
}

.dash-kpis {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 10px;
    margin-bottom: 18px
}

.kpi {
    background: rgba(255, 255, 255, .033);
    border: 1px solid var(--glass-border);
    border-radius: var(--r-sm);
    padding: 13px
}

.kpi-val {
    font-family: 'Syne', sans-serif;
    font-size: 1.55rem;
    font-weight: 700
}

.kpi-val span {
    color: var(--orange-400)
}

.kpi-label {
    font-size: .7rem;
    color: var(--text-muted);
    margin-top: 2px
}

.dash-chart {
    margin-bottom: 18px
}

.chart-label {
    font-size: .7rem;
    color: var(--text-muted);
    margin-bottom: 8px;
    display: flex;
    justify-content: space-between
}

.chart-bars {
    display: flex;
    align-items: flex-end;
    gap: 5px;
    height: 72px
}

.bar {
    flex: 1;
    border-radius: 4px 4px 0 0;
    background: linear-gradient(to top, var(--orange-500), var(--orange-300));
    animation: barUp 1s ease-out forwards;
}

@keyframes barUp {
    from {
        transform: scaleY(0);
        transform-origin: bottom
    }

    to {
        transform: scaleY(1)
    }
}

.bar:nth-child(1) {
    height: 42%;
    animation-delay: .08s;
    opacity: .6
}

.bar:nth-child(2) {
    height: 66%;
    animation-delay: .13s;
    opacity: .7
}

.bar:nth-child(3) {
    height: 50%;
    animation-delay: .18s;
    opacity: .65
}

.bar:nth-child(4) {
    height: 88%;
    animation-delay: .23s;
    opacity: 1
}

.bar:nth-child(5) {
    height: 62%;
    animation-delay: .28s;
    opacity: .75
}

.bar:nth-child(6) {
    height: 78%;
    animation-delay: .33s;
    opacity: .85
}

.bar:nth-child(7) {
    height: 70%;
    animation-delay: .38s;
    opacity: .8
}

.bar:nth-child(8) {
    height: 95%;
    animation-delay: .43s;
    opacity: 1
}

.dash-students {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 10px
}

.stu-row {
    background: rgba(255, 255, 255, .025);
    border: 1px solid var(--glass-border);
    border-radius: var(--r-sm);
    padding: 11px 14px;
    display: flex;
    align-items: center;
    gap: 10px
}

.stu-avatar {
    width: 30px;
    height: 30px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-family: 'Syne', sans-serif;
    font-size: .7rem;
    font-weight: 700;
    color: #fff;
    flex-shrink: 0
}

.stu-info {
    flex: 1;
    min-width: 0
}

.stu-name {
    font-size: .75rem;
    font-weight: 600;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis
}

.stu-prog-track {
    height: 4px;
    background: rgba(255, 255, 255, .06);
    border-radius: 2px;
    margin-top: 4px;
    overflow: hidden
}

.stu-prog-fill {
    height: 100%;
    border-radius: 2px;
    background: linear-gradient(to right, var(--orange-500), var(--orange-300))
}

.stu-pct {
    font-size: .68rem;
    color: var(--orange-400);
    font-weight: 600;
    flex-shrink: 0
}

.float-chip {
    position: absolute;
    right: -22px;
    top: 22px;
    background: var(--glass-bg-2);
    border: 1px solid var(--glass-border-hover);
    border-radius: var(--r-sm);
    padding: 12px 15px;
    backdrop-filter: blur(16px);
    display: flex;
    align-items: center;
    gap: 10px;
    animation: floatY 6s ease-in-out 1.2s infinite;
    white-space: nowrap;
}

.chip-icon {
    width: 34px;
    height: 34px;
    border-radius: 8px;
    background: rgba(249, 115, 22, .15);
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--orange-400)
}

.chip-val {
    font-family: 'Syne', sans-serif;
    font-size: 1.1rem;
    font-weight: 700;
    color: var(--orange-400)
}

.chip-text {
    font-size: .7rem;
    color: var(--text-muted)
}

.hero-btns {
    display: flex;
    gap: 16px;
    flex-wrap: wrap;
}

.btn-primary {
    background: var(--gradient-orange);
    color: var(--white);
    box-shadow: 0 4px 24px rgba(232, 117, 10, 0.35);
}

.btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 32px rgba(232, 117, 10, 0.5);
}

.btn-outline {
    background: var(--gradient-orange);
    color: var(--white);
    border: 1px solid rgba(255, 255, 255, 0.25);
}

.btn-outline:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 32px rgba(232, 117, 10, 0.5);
}

/* ─── STATS STRIP ─── */
.stats-strip {
    background: var(--navy-900);
    border-top: 1px solid var(--glass-border);
    border-bottom: 1px solid var(--glass-border);
    padding: 30px 0
}

.stats-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr)
}

.stat {
    text-align: center;
    position: relative
}

.stat:not(:last-child)::after {
    content: '';
    position: absolute;
    right: 0;
    top: 10%;
    bottom: 10%;
    width: 1px;
    background: var(--glass-border)
}

.stat-n {
    font-family: 'Syne', sans-serif;
    font-size: 2.1rem;
    font-weight: 800;
    background: linear-gradient(135deg, #fff 40%, var(--orange-400));
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent
}

.stat-l {
    color: var(--text-muted);
    font-size: .8rem;
    margin-top: 3px
}

/* ─── OVERVIEW ─── */
.overview {
    padding: 60px 0
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
    letter-spacing: -.02em;
    margin-bottom: 22px;
    line-height: 1.2;
    color: var(--navy-800);
}

.overview-text h2 em {
    font-style: normal;
    background: var(--gradient-orange);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent
}

.overview-text p {
    color: var(--navy-900);
    margin-bottom: 14px;
    font-weight: 300;
    line-height: 1.82
}

.ov-list {
    display: flex;
    flex-direction: column;
    gap: 11px;
    margin-top: 26px
}

.ov-item {
    display: flex;
    align-items: flex-start;
    gap: 13px;
    padding: 13px 17px;
    background: var(--navy-600);
    border: 1px solid var(--navy-700);
    border-radius: var(--r-sm);
    backdrop-filter: blur(10px);
    transition: border-color .3s;
}

.ov-item:hover {
    border-color: var(--navy-900);
}

.ov-icon {
    color: var(--orange-400);
    flex-shrink: 0;
    margin-top: 1px
}

.ov-text strong {
    display: block;
    font-size: .88rem;
    font-weight: 600;
    margin-bottom: 2px
}

.ov-text span {
    font-size: .8rem;
    color: #ffff;
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

/* ─── SERVICES ─── */
.services {
    padding: 60px 0;
}

.svc-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 18px
}

.svc-card {
    background: var(--navy-600);
    border: 1px solid var(--navy-800);
    border-radius: var(--r);
    padding: 26px 22px;
    backdrop-filter: blur(16px);
    transition: all .35s cubic-bezier(.4, 0, .2, 1);
    position: relative;
    overflow: hidden;
}

.svc-card::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    height: 2px;
    background: linear-gradient(to right, var(--orange-500), var(--orange-300));
    transform: scaleX(0);
    transform-origin: left;
    transition: transform .35s;
}

.svc-card:hover {
    border-color: var(--glass-border-hover);
    box-shadow: 0 8px 28px var(--navy-800);
    transform: translateY(-4px)
}

.svc-card:hover::after {
    transform: scaleX(1)
}

/* .svc-icon {
    width: 46px;
    height: 46px;
    border-radius: 12px;
    background: rgba(249, 115, 22, .10);
    border: 1px solid rgba(249, 115, 22, .18);
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 16px;
    color: var(--orange-400);
    transition: all .3s;
} */

.svc-card:hover .svc-icon {
    background: rgba(249, 115, 22, .18);
    transform: scale(1.08)
}

.svc-card h3 {
    font-family: 'Syne', sans-serif;
    font-size: .92rem;
    font-weight: 700;
    margin-bottom: 8px;
    color: #ffff;
}

.svc-card p {
    font-size: .8rem;
    color: #ffff;
    line-height: 1.65
}

/* ─── WHY US ─── */
.why {
    padding: 60px 0
}

.why-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 56px;
    align-items: start
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

/* .why-list {
    display: flex;
    flex-direction: column;
    gap: 14px
}

.why-item {
    display: flex;
    align-items: center;
    gap: 18px;
    padding: 18px 22px;
    background: var(--navy-600);
    border: 1px solid var(--navy-700);
    border-radius: var(--r-sm);
    backdrop-filter: blur(16px);
    transition: all .3s;
    cursor: default;
}

.why-item:hover {
    border-color: var(--glass-border-hover);
    box-shadow: 0 8px 28px var(--navy-800);
    transform: translateY(-4px)
}

.why-num {
    font-family: var(--ff-mono);
    font-size: .68rem;
    font-weight: 800;
    color: var(--orange-500);
    min-width: 26px;
    letter-spacing: .06em
}

.why-content h4 {
    font-family: 'Syne', sans-serif;
    font-size: .92rem;
    font-weight: 700;
    margin-bottom: 3px
}

.why-content p {
    font-size: .8rem;
    color: #ffff;
}

.why-arr {
    margin-left: auto;
    color: var(--text-muted);
    transition: color .3s
}

.why-item:hover .why-arr {
    color: var(--orange-400)
} */

/* perf widget */
.perf-widget {
    background: var(--navy-600);
    border: 1px solid var(--navy-700);
    border-radius: var(--r);
    padding: 30px;
    margin-top: 160px;
    backdrop-filter: blur(20px);
    box-shadow: 0 20px 60px rgba(0, 0, 0, .3);
}

.pw-title {
    font-family: 'Syne', sans-serif;
    font-size: .8rem;
    color: #ffff;
    font-weight: 600;
    letter-spacing: .05em;
    margin-bottom: 18px
}

.pw-row {
    display: flex;
    align-items: center;
    gap: 11px;
    margin-bottom: 13px
}

.pw-lbl {
    font-size: .76rem;
    color: #ffff;
    min-width: 130px
}

.pw-track {
    flex: 1;
    height: 6px;
    background: rgba(255, 255, 255, .06);
    border-radius: 3px;
    overflow: hidden
}

.pw-fill {
    height: 100%;
    border-radius: 3px;
    background: linear-gradient(to right, var(--orange-500), var(--orange-300));
    animation: fillW 1.4s ease-out forwards
}

@keyframes fillW {
    from {
        width: 0
    }
}

.pw-val {
    font-size: .76rem;
    color: var(--orange-400);
    font-weight: 600;
    min-width: 34px;
    text-align: right
}

.pw-tags {
    display: flex;
    flex-wrap: wrap;
    color: #ffff;
    gap: 7px;
    margin-top: 22px;
    padding-top: 20px;
    border-top: 1px solid var(--glass-border)
}

.pw-tag {
    background: rgba(255, 255, 255, .03);
    border: 1px solid var(--glass-border);
    padding: 3px 11px;
    border-radius: 6px;
    font-size: .7rem;
    color: #ffff;
}

/* ─── PROCESS ─── */
.process {
    padding: 60px 0;
}

.proc-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 22px;
    margin-top: 56px
}

.proc-card {
    background: var(--navy-600);
    border: 1px solid var(--navy-700);
    border-radius: var(--r);
    padding: 26px;
    backdrop-filter: blur(16px);
    transition: all .3s;
    position: relative;
}

.proc-card:hover {
    border-color: var(--glass-border-hover);
    box-shadow: 0 8px 28px var(--navy-800);
    transform: translateY(-4px)
}

.proc-n {
    font-family: 'Syne', sans-serif;
    font-size: 2.4rem;
    font-weight: 800;
    color: rgba(249, 115, 22, .11);
    position: absolute;
    top: 14px;
    right: 18px;
    line-height: 1
}

.proc-icon {
    color: var(--orange-400);
    margin-bottom: 14px
}

.proc-card h3 {
    font-family: 'Syne', sans-serif;
    font-size: .95rem;
    font-weight: 700;
    margin-bottom: 7px
}

.proc-card p {
    font-size: .8rem;
    color: #ffff;
    line-height: 1.65
}

/* ─── USE CASES ─── */
.usecases {
    padding: 60px 0
}

.uc-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 22px
}

.uc-card {
    background: var(--navy-600);
    border: 1px solid var(--gradient-orange);
    border-radius: var(--r);
    padding: 34px;
    backdrop-filter: blur(16px);
    transition: all .35s;
    position: relative;
    overflow: hidden;
    z-index: 2;
}

.uc-card::before {
    content: '';
    position: absolute;
    inset: 0;
    background: var(--navy-600);
    opacity: 0;
    transition: opacity .3s;
    z-index: 0;
    pointer-events: none;
}

.uc-card:hover {
    border-color: var(--glass-border-hover);
    box-shadow: 0 8px 28px var(--navy-800);
    transform: translateY(-4px)
}

.uc-card:hover::before {
    opacity: 0.15;
}

.uc-badge {
    display: inline-block;
    background: rgba(249, 115, 22, .12);
    border: 1px solid rgba(249, 115, 22, .22);
    color: var(--orange-400);
    padding: 4px 12px;
    border-radius: 6px;
    font-size: .7rem;
    font-weight: 600;
    letter-spacing: .05em;
    text-transform: uppercase;
    margin-bottom: 14px;
}

.uc-icon {
    color: var(--orange-400);
    margin-bottom: 14px
}

.uc-card h3 {
    font-family: 'Syne', sans-serif;
    font-size: 1.15rem;
    font-weight: 700;
    margin-bottom: 10px
}

.uc-card p {
    font-size: .85rem;
    color: var(--text-secondary);
    line-height: 1.75;
    margin-bottom: 18px
}

.uc-tags {
    display: flex;
    flex-wrap: wrap;
    gap: 7px
}

.uc-tag {
    background: var(--navy-800);
    border: 1px solid var(--glass-border);
    padding: 3px 11px;
    border-radius: 6px;
    font-size: .72rem;
    color: #ffff;
}

/* ─── FEATURES ─── */
.features {
    padding: 60px 0;
    background: #ffff;
}

.feat-grid {
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    gap: 15px
}

.feat-card {
    background: var(--navy-600);
    border: 1px solid var(--navy-900);
    border-radius: var(--r);
    padding: 22px 16px;
    text-align: center;
    backdrop-filter: blur(16px);
    transition: all .3s;
}

.feat-card:hover {
    border-color: var(--glass-border-hover);
    box-shadow: 0 8px 28px var(--navy-800);
    transform: translateY(-4px)
}

.feat-icon-wrap {
    width: 50px;
    height: 50px;
    border-radius: 12px;
    background: rgba(249, 115, 22, .10);
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 14px;
    color: var(--orange-400);
    transition: background .3s;
}

.feat-card:hover .feat-icon-wrap {
    background: rgba(249, 115, 22, .20)
}

.feat-card h3 {
    font-family: var(--ff-head);
    font-size: .86rem;
    font-weight: 700;
    margin-bottom: 7px
}

.feat-card p {
    font-size: .76rem;
    color: #ffff;
    line-height: 1.6
}

/* ─── TECH ─── */
.tech {
    padding: 60px 0
}

.tech-cats {
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    gap: 16px
}

.tech-cat {
    background: var(--navy-600);
    border: 1px solid var(--navy-900);
    border-radius: var(--r);
    padding: 24px 18px;
    text-align: center;
    backdrop-filter: blur(16px);
    transition: all .3s;
}

.tech-cat:hover {
    border-color: var(--glass-border-hover);
    box-shadow: 0 8px 28px var(--navy-800);
    transform: translateY(-4px)
}

.tech-cat-icon {
    color: var(--orange-400);
    margin-bottom: 12px;
    display: flex;
    justify-content: center
}

.tech-cat h4 {
    font-family: var(--ff-head);
    font-size: .86rem;
    font-weight: 700;
    margin-bottom: 10px
}

.tech-items {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 5px
}

.tech-item {
    background: var(--navy-800);
    border: 1px solid rgba(249, 115, 22, .15);
    color: #ffff;
    padding: 3px 9px;
    border-radius: 5px;
    font-size: .67rem;
    font-weight: 600
}

/* ─── RESULTS ─── */
.results {
    padding: 60px 0;
}

.res-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 18px
}

.res-card {
    background: var(--navy-600);
    border: 1px solid var(--navy-900);
    border-radius: var(--r);
    padding: 30px 22px;
    text-align: center;
    backdrop-filter: blur(16px);
    transition: all .3s;
    position: relative;
    overflow: hidden;
}

.res-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 1px;
    background: linear-gradient(to right, transparent, var(--orange-500), transparent);
    opacity: 0;
    transition: opacity .3s;
}

.res-card:hover {
    border-color: var(--glass-border-hover);
    box-shadow: 0 12px 40px var(--navy-800)
}

.res-card:hover::before {
    opacity: 1
}

.res-n {
    font-family: var(--ff-mono);
    font-size: 2.7rem;
    font-weight: 800;
    background: var(--gradient-orange);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    line-height: 1;
    margin-bottom: 7px;
}

.res-label {
    font-family: 'Syne', sans-serif;
    font-size: .88rem;
    font-weight: 700;
    margin-bottom: 7px
}

.res-desc {
    font-size: .76rem;
    color: #ffff;
    line-height: 1.6
}

/* ─── CTA ─── */
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
        transform: translateY(28px)
    }

    to {
        opacity: 1;
        transform: translateY(0)
    }
}

.fu {
    animation: fadeUp .8s ease-out forwards
}

.fu1 {
    animation-delay: .1s;
    opacity: 0
}

.fu2 {
    animation-delay: .2s;
    opacity: 0
}

.fu3 {
    animation-delay: .3s;
    opacity: 0
}

.fu4 {
    animation-delay: .4s;
    opacity: 0
}

/* ─── RESPONSIVE ─── */
@media(max-width:1024px) {
    .hero-inner {
        grid-template-columns: 1fr;
        gap: 44px
    }

    .hero-visual {
        max-width: 540px;
        margin: 0 auto
    }

    .svc-grid {
        grid-template-columns: repeat(2, 1fr)
    }

    .feat-grid {
        grid-template-columns: repeat(3, 1fr)
    }

    .tech-cats {
        grid-template-columns: repeat(3, 1fr)
    }

    .res-grid {
        grid-template-columns: repeat(2, 1fr)
    }

    .overview-grid,
    .why-grid {
        grid-template-columns: 1fr
    }

    .proc-grid {
        grid-template-columns: repeat(2, 1fr)
    }
}

@media(max-width:768px) {
    .nav-links {
        display: none
    }

    .stats-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 22px
    }

    .stat::after {
        display: none
    }

    .svc-grid,
    .uc-grid,
    .feat-grid,
    .tech-cats {
        grid-template-columns: 1fr
    }

    .proc-grid {
        grid-template-columns: 1fr
    }

    .res-grid {
        grid-template-columns: repeat(2, 1fr)
    }

    .cta-box {
        padding: 48px 24px
    }

    .float-chip {
        display: none
    }

    .ov-cards {
        grid-template-columns: 1fr
    }

    .ovc.span2 {
        grid-column: auto
    }
}
</style>
</head>

<body>

    <!-- HERO -->
    <section class="hero">
        <img src="{{ asset('assets/images/hero-edu.png') }}" alt="Hero Background" class="hero-bg-img" />
        <div class="hero-bg"></div>
        <div class="container">
            <div class="hero-inner">

                <div class="hero-content">
                    <h1 class="fu fu1">Smart Digital Solutions for <em>Modern Education</em></h1>
                    <p class="hero-sub fu fu2">Transform learning experiences with scalable, interactive, and
                        data-driven education platforms built for institutions, startups, and enterprises.</p>
                    <div class="hero-btns fu fu3">
                        <a href="#" class="btn btn-primary btn-arrow">Get a Quote</a>
                        <a href="#" class="btn btn-outline">Consult Now →</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- OVERVIEW -->
    <section class="overview">
        <div class="container">
            <div class="overview-grid">
                <div class="overview-text">
                    <div class="pill"><span class="pill-dot"></span>Industry Overview</div>
                    <h2>The EdTech Boom Demands <em>Scalable Platforms</em></h2>
                    <p>Digital learning has permanently reshaped education. Institutions, startups, and enterprises now
                        compete to deliver the most engaging, personalized, and accessible learning experiences.</p>
                    <p>Success in this space requires real-time collaboration tools, intelligent analytics, and
                        platforms that scale from 100 to 100,000 learners without friction.</p>
                    <div class="ov-list">
                        <div class="ov-item">
                            <svg class="ov-icon" width="18" height="18" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M22 10v6M2 10l10-5 10 5-10 5z" />
                                <path d="M6 12v5c3 3 9 3 12 0v-5" />
                            </svg>
                            <div class="ov-text"><strong>Digital Learning Growth</strong><span>EdTech market projected
                                    to surpass $400B by 2026, driven by mobile-first learners.</span></div>
                        </div>
                        <div class="ov-item">
                            <svg class="ov-icon" width="18" height="18" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="18" y1="20" x2="18" y2="10" />
                                <line x1="12" y1="20" x2="12" y2="4" />
                                <line x1="6" y1="20" x2="6" y2="14" />
                            </svg>
                            <div class="ov-text"><strong>Analytics & Personalization</strong><span>AI-driven learning
                                    paths improve retention by up to 60% over static curricula.</span></div>
                        </div>
                        <div class="ov-item">
                            <svg class="ov-icon" width="18" height="18" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="2" y="3" width="20" height="14" rx="2" />
                                <line x1="8" y1="21" x2="16" y2="21" />
                                <line x1="12" y1="17" x2="12" y2="21" />
                            </svg>
                            <div class="ov-text"><strong>Multi-Platform Delivery</strong><span>Consistent learning
                                    across web, mobile, and offline — keeping students engaged anywhere.</span></div>
                        </div>
                    </div>
                </div>
                <div class="overview-image-wrap">
                    <img src="{{ asset('assets/images/educ-img2.jpg') }}" alt="Media & Information Services">
                </div>
                <!-- <div class="ov-cards">
                    <div class="ovc">
                        <div class="ovc-icon"><svg width="26" height="26" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                                <circle cx="9" cy="7" r="4" />
                                <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                                <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                            </svg></div>
                        <h4>Learner Management</h4>
                        <p>Track every student's journey with cohort dashboards and smart alerts.</p>
                    </div>
                    <div class="ovc">
                        <div class="ovc-icon"><svg width="26" height="26" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="22 12 18 12 15 21 9 3 6 12 2 12" />
                            </svg></div>
                        <h4>Live Engagement</h4>
                        <p>Real-time virtual classrooms with interactive whiteboards and Q&A.</p>
                    </div>
                    <div class="ovc span2">
                        <div class="ovc-icon"><svg width="26" height="26" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="3" y="3" width="18" height="18" rx="2" />
                                <path d="M3 9h18M9 21V9" />
                            </svg></div>
                        <h4>Unified Learning Intelligence</h4>
                        <p>Consolidate learner data, course performance, and instructor metrics into one command center
                            — built for decision makers who need clarity at scale.</p>
                    </div>
                </div> -->
            </div>
        </div>
    </section>

    <!-- SERVICES -->
    <section class="services">
        <div class="container">
            <div class="sec-head">
                <div class="pill"><span class="pill-dot"></span>Core Services</div>
                <h2>Everything You Need to <em>Launch & Scale</em></h2>
                <p>End-to-end EdTech capabilities — from LMS architecture to AI-driven personalization.</p>
            </div>
            <div class="svc-grid">

                <div class="svc-card">
                    <div class="svc-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="2" y="3" width="20" height="14" rx="2" />
                            <line x1="8" y1="21" x2="16" y2="21" />
                            <line x1="12" y1="17" x2="12" y2="21" />
                        </svg></div>
                    <h3>E-Learning Platform Development</h3>
                    <p>Custom-built platforms architected for scale — from solo instructors to millions of concurrent
                        learners.</p>
                </div>

                <div class="svc-card">
                    <div class="svc-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 10v6M2 10l10-5 10 5-10 5z" />
                            <path d="M6 12v5c3 3 9 3 12 0v-5" />
                        </svg></div>
                    <h3>Learning Management Systems</h3>
                    <p>Feature-rich LMS with course authoring, progress tracking, certifications, and SCORM compliance.
                    </p>
                </div>

                <div class="svc-card">
                    <div class="svc-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="5" y="2" width="14" height="20" rx="2" />
                            <line x1="12" y1="18" x2="12.01" y2="18" />
                        </svg></div>
                    <h3>Mobile Learning Apps</h3>
                    <p>Native iOS & Android apps with offline mode, push notifications, and gamified learning flows.</p>
                </div>

                <div class="svc-card">
                    <div class="svc-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polygon points="23 7 16 12 23 17 23 7" />
                            <rect x="1" y="5" width="15" height="14" rx="2" />
                        </svg></div>
                    <h3>Virtual Classrooms & Live Streaming</h3>
                    <p>Low-latency live classes with breakout rooms, polls, whiteboards, and session recordings.</p>
                </div>

                <div class="svc-card">
                    <div class="svc-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="18" y1="20" x2="18" y2="10" />
                            <line x1="12" y1="20" x2="12" y2="4" />
                            <line x1="6" y1="20" x2="6" y2="14" />
                        </svg></div>
                    <h3>Student Analytics & Performance Tracking</h3>
                    <p>Real-time dashboards surfacing dropout risks, mastery levels, and engagement patterns.</p>
                </div>

                <div class="svc-card">
                    <div class="svc-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M14.5 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.5L14.5 2z" />
                            <polyline points="14 2 14 8 20 8" />
                        </svg></div>
                    <h3>Content Management Systems</h3>
                    <p>Headless CMS for multi-format content: video, SCORM, quizzes, PDFs, and interactive modules.</p>
                </div>

                <div class="svc-card">
                    <div class="svc-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="1" />
                            <circle cx="3" cy="6" r="1" />
                            <circle cx="21" cy="6" r="1" />
                            <circle cx="3" cy="18" r="1" />
                            <circle cx="21" cy="18" r="1" />
                            <line x1="3" y1="7" x2="12" y2="11" />
                            <line x1="21" y1="7" x2="12" y2="11" />
                            <line x1="3" y1="17" x2="12" y2="13" />
                            <line x1="21" y1="17" x2="12" y2="13" />
                        </svg></div>
                    <h3>API & Third-Party Integrations</h3>
                    <p>Seamless connections with Zoom, Google Classroom, Stripe, Salesforce, and 50+ EdTech tools.</p>
                </div>

                <div class="svc-card">
                    <div class="svc-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 2a10 10 0 1 0 10 10" />
                            <path d="M12 6v6l4 2" />
                            <circle cx="18" cy="6" r="3" fill="currentColor" stroke="none" opacity=".3" />
                            <circle cx="18" cy="6" r="1.5" />
                        </svg></div>
                    <h3>AI-Based Learning Solutions</h3>
                    <p>Adaptive assessments, AI tutors, and recommendation engines that personalize every learner's
                        path.</p>
                </div>

            </div>
        </div>
    </section>

    <!-- WHY US -->
    <section class="why">
        <div class="container">
            <div class="why-grid">
                <div>
                    <div class="pill"><span class="pill-dot"></span>Why Choose Accrosian</div>
                    <h2
                        style="font-style:var(--ff-head);color:var(--navy-900);font-size:clamp(1.8rem,3vw,2.4rem);font-weight:800;letter-spacing:-.02em;margin-bottom:14px;line-height:1.2">
                        Built for Platforms That <em
                            style="font-style:var(--ff-head);background:var(--gradient-orange);-webkit-background-clip:text;-webkit-text-fill-color:transparent">Cannot
                            Fail</em></h2>
                    <p style="color:var(--navy-900);margin-bottom:32px;font-weight:300;line-height:1.8">Every
                        system we build is production-tested for high concurrency, security, and reliability — because
                        learners can't afford downtime.</p>
                    <div class="cap-inline-image">
                        <img src="{{ asset('assets/images/education-img.jpg') }}" alt="Media Technology">
                    </div>
                    <!-- <div class="why-list">
                        <div class="why-item">
                            <span class="why-num">01</span>
                            <div class="why-content">
                                <h4>Scalable & Secure Platforms</h4>
                                <p>SOC 2-aligned architecture built for 10× growth without re-platforming.</p>
                            </div>
                            <svg class="why-arr" width="16" height="16" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="9 18 15 12 9 6" />
                            </svg>
                        </div>
                        <div class="why-item">
                            <span class="why-num">02</span>
                            <div class="why-content">
                                <h4>Interactive Learning Experiences</h4>
                                <p>Gamification, live collaboration, and adaptive content that keeps learners hooked.
                                </p>
                            </div>
                            <svg class="why-arr" width="16" height="16" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="9 18 15 12 9 6" />
                            </svg>
                        </div>
                        <div class="why-item">
                            <span class="why-num">03</span>
                            <div class="why-content">
                                <h4>Real-Time Analytics & Insights</h4>
                                <p>Predictive dashboards that flag at-risk students before they churn.</p>
                            </div>
                            <svg class="why-arr" width="16" height="16" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="9 18 15 12 9 6" />
                            </svg>
                        </div>
                        <div class="why-item">
                            <span class="why-num">04</span>
                            <div class="why-content">
                                <h4>Seamless Tool Integration</h4>
                                <p>Works with your existing ERP, HRMS, SIS, payment, and communication stack.</p>
                            </div>
                            <svg class="why-arr" width="16" height="16" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="9 18 15 12 9 6" />
                            </svg>
                        </div>
                        <div class="why-item">
                            <span class="why-num">05</span>
                            <div class="why-content">
                                <h4>Reliable High-Performance Systems</h4>
                                <p>99.9% uptime SLA with global CDN, auto-scaling, and 24/7 monitoring.</p>
                            </div>
                            <svg class="why-arr" width="16" height="16" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="9 18 15 12 9 6" />
                            </svg>
                        </div>
                    </div> -->
                </div>

                <div class="perf-widget">
                    <div class="pw-title">PLATFORM PERFORMANCE BENCHMARK</div>
                    <div class="pw-row">
                        <span class="pw-lbl">Learner Engagement</span>
                        <div class="pw-track">
                            <div class="pw-fill" style="width:91%"></div>
                        </div>
                        <span class="pw-val">91%</span>
                    </div>
                    <div class="pw-row">
                        <span class="pw-lbl">Course Completion Rate</span>
                        <div class="pw-track">
                            <div class="pw-fill" style="width:87%"></div>
                        </div>
                        <span class="pw-val">87%</span>
                    </div>
                    <div class="pw-row">
                        <span class="pw-lbl">API Response Speed</span>
                        <div class="pw-track">
                            <div class="pw-fill" style="width:97%"></div>
                        </div>
                        <span class="pw-val">97%</span>
                    </div>
                    <div class="pw-row">
                        <span class="pw-lbl">Uptime Reliability</span>
                        <div class="pw-track">
                            <div class="pw-fill" style="width:99%"></div>
                        </div>
                        <span class="pw-val">99%</span>
                    </div>
                    <div class="pw-row">
                        <span class="pw-lbl">Security Compliance</span>
                        <div class="pw-track">
                            <div class="pw-fill" style="width:100%"></div>
                        </div>
                        <span class="pw-val">100%</span>
                    </div>
                    <div class="pw-tags">
                        <span class="pw-tag">SCORM 2004</span>
                        <span class="pw-tag">xAPI / Tin Can</span>
                        <span class="pw-tag">LTI 1.3</span>
                        <span class="pw-tag">GDPR Ready</span>
                        <span class="pw-tag">WCAG 2.1 AA</span>
                        <span class="pw-tag">SOC 2 Aligned</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PROCESS -->
    <section class="process">
        <div class="container">
            <div class="sec-head">
                <div class="pill"><span class="pill-dot"></span>Our Process</div>
                <h2>From Concept to <em>Classroom</em> — Engineered</h2>
                <p>A battle-tested delivery model that minimises risk and ships enterprise EdTech platforms on time.</p>
            </div>
            <div class="proc-grid">
                <div class="proc-card">
                    <div class="proc-n">01</div>
                    <div class="proc-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="11" cy="11" r="8" />
                            <line x1="21" y1="21" x2="16.65" y2="16.65" />
                        </svg></div>
                    <h3>Requirement Analysis & Research</h3>
                    <p>Deep discovery into your learner personas, curriculum structure, compliance needs, and technical
                        constraints — before a single line of code.</p>
                </div>
                <div class="proc-card">
                    <div class="proc-n">02</div>
                    <div class="proc-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <polygon points="12 2 2 7 12 12 22 7 12 2" />
                            <polyline points="2 17 12 22 22 17" />
                            <polyline points="2 12 12 17 22 12" />
                        </svg></div>
                    <h3>Strategy & Architecture Planning</h3>
                    <p>System blueprint covering LMS structure, data models, microservices, and cloud infrastructure
                        sized for your peak load.</p>
                </div>
                <div class="proc-card">
                    <div class="proc-n">03</div>
                    <div class="proc-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="3" width="18" height="18" rx="2" />
                            <circle cx="8.5" cy="8.5" r="1.5" />
                            <polyline points="21 15 16 10 5 21" />
                        </svg></div>
                    <h3>UI/UX Design for Learning Platforms</h3>
                    <p>Learner-centric interfaces, instructor dashboards, and admin panels — designed for clarity,
                        accessibility, and cross-device parity.</p>
                </div>
                <div class="proc-card">
                    <div class="proc-n">04</div>
                    <div class="proc-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="16 18 22 12 16 6" />
                            <polyline points="8 6 2 12 8 18" />
                        </svg></div>
                    <h3>Development & Integration</h3>
                    <p>Agile sprints with weekly demos. Full-stack EdTech development integrated with Zoom, payment
                        gateways, SIS, and analytics tools.</p>
                </div>
                <div class="proc-card">
                    <div class="proc-n">05</div>
                    <div class="proc-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                        </svg></div>
                    <h3>Testing & Performance Optimization</h3>
                    <p>Load testing at 3× expected concurrency, accessibility audits, and security penetration testing
                        before every launch gate.</p>
                </div>
                <div class="proc-card">
                    <div class="proc-n">06</div>
                    <div class="proc-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="22 12 18 12 15 21 9 3 6 12 2 12" />
                        </svg></div>
                    <h3>Deployment & Continuous Support</h3>
                    <p>Zero-downtime CI/CD deployments, 24/7 monitoring, and a dedicated SRE team for ongoing feature
                        evolution and scaling.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- USE CASES -->
    <section class="usecases">
        <div class="container">
            <div class="sec-head">
                <div class="pill"><span class="pill-dot"></span>Use Cases</div>
                <h2>Solutions for <em>Every Education Vertical</em></h2>
                <p>Proven platforms across the full spectrum of modern learning and knowledge businesses.</p>
            </div>
            <div class="uc-grid">

                <div class="uc-card">
                    <div class="uc-badge">Online Learning</div>
                    <div class="uc-icon"><svg width="30" height="30" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 10v6M2 10l10-5 10 5-10 5z" />
                            <path d="M6 12v5c3 3 9 3 12 0v-5" />
                        </svg></div>
                    <h3>Online Learning Platforms</h3>
                    <p>End-to-end platforms for course creation, enrollment, live sessions, assessments, and
                        certification — designed to compete with the world's top EdTech brands.</p>
                    <div class="uc-tags">
                        <span class="uc-tag">Course Marketplace</span>
                        <span class="uc-tag">Subscription Billing</span>
                        <span class="uc-tag">Live & On-Demand</span>
                        <span class="uc-tag">Certificate Engine</span>
                    </div>
                </div>

                <div class="uc-card">
                    <div class="uc-badge">Institutions</div>
                    <div class="uc-icon"><svg width="30" height="30" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="2" y="7" width="20" height="14" rx="2" />
                            <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16" />
                        </svg></div>
                    <h3>School & College Management Systems</h3>
                    <p>Unified ERP for admissions, attendance, fee management, timetabling, and parent communication —
                        built for K-12 schools through universities.</p>
                    <div class="uc-tags">
                        <span class="uc-tag">Admissions Portal</span>
                        <span class="uc-tag">Fee Management</span>
                        <span class="uc-tag">Attendance Tracking</span>
                        <span class="uc-tag">Parent App</span>
                    </div>
                </div>

                <div class="uc-card">
                    <div class="uc-badge">EdTech Startups</div>
                    <div class="uc-icon"><svg width="30" height="30" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                            <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2" />
                        </svg></div>
                    <h3>EdTech Startup Platforms</h3>
                    <p>MVP to enterprise — rapid product iteration for EdTech founders who need a tech partner that
                        understands product-market fit, growth loops, and investor metrics.</p>
                    <div class="uc-tags">
                        <span class="uc-tag">MVP Development</span>
                        <span class="uc-tag">Product Analytics</span>
                        <span class="uc-tag">Growth Tooling</span>
                        <span class="uc-tag">Rapid Iteration</span>
                    </div>
                </div>

                <div class="uc-card">
                    <div class="uc-badge">Enterprise L&D</div>
                    <div class="uc-icon"><svg width="30" height="30" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                            <circle cx="9" cy="7" r="4" />
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                        </svg></div>
                    <h3>Corporate Training Platforms</h3>
                    <p>Learning & Development systems for enterprises — onboarding automation, compliance training,
                        skills gap analysis, and team performance reporting at scale.</p>
                    <div class="uc-tags">
                        <span class="uc-tag">Onboarding Flows</span>
                        <span class="uc-tag">Compliance Training</span>
                        <span class="uc-tag">Skills Mapping</span>
                        <span class="uc-tag">L&D Analytics</span>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- FEATURES -->
    <section class="features">
        <div class="container">
            <div class="sec-head">
                <div class="pill"><span class="pill-dot"></span>Platform Features</div>
                <h2>Built for <em>Engagement</em>, by Design</h2>
                <p>Core features included in every Accrosian EdTech platform engagement.</p>
            </div>
            <div class="feat-grid">
                <div class="feat-card">
                    <div class="feat-icon-wrap"><svg width="22" height="22" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polygon points="23 7 16 12 23 17 23 7" />
                            <rect x="1" y="5" width="15" height="14" rx="2" />
                        </svg></div>
                    <h3>Real-Time Classes & Collaboration</h3>
                    <p>Low-latency live sessions with screen share, whiteboard, breakout rooms, and polls.</p>
                </div>
                <div class="feat-card">
                    <div class="feat-icon-wrap"><svg width="22" height="22" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="5" y="2" width="14" height="20" rx="2" />
                            <line x1="12" y1="18" x2="12.01" y2="18" />
                        </svg></div>
                    <h3>Multi-Device Accessibility</h3>
                    <p>Native apps plus PWA — seamless learning on mobile, tablet, and desktop with offline sync.</p>
                </div>
                <div class="feat-card">
                    <div class="feat-icon-wrap"><svg width="22" height="22" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                            <circle cx="9" cy="7" r="4" />
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                        </svg></div>
                    <h3>Personalized Learning Paths</h3>
                    <p>AI-driven adaptive curricula that evolve based on each learner's pace, performance, and
                        preference.</p>
                </div>
                <div class="feat-card">
                    <div class="feat-icon-wrap"><svg width="22" height="22" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                        </svg></div>
                    <h3>Secure Student Data Management</h3>
                    <p>FERPA and GDPR compliant data handling with end-to-end encryption and role-based access.</p>
                </div>
                <div class="feat-card">
                    <div class="feat-icon-wrap"><svg width="22" height="22" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2" />
                        </svg></div>
                    <h3>High-Performance & Scalability</h3>
                    <p>Auto-scaling Kubernetes clusters that handle traffic spikes during exam seasons and live events.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- TECH -->
    <section class="tech">
        <div class="container">
            <div class="sec-head">
                <div class="pill"><span class="pill-dot"></span>Tools & Technologies</div>
                <h2>Powered by <em>Best-in-Class</em> Technology</h2>
                <p>We select the right technology for your use case — not the trendy one.</p>
            </div>
            <div class="tech-cats">
                <div class="tech-cat">
                    <div class="tech-cat-icon"><svg width="26" height="26" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 10v6M2 10l10-5 10 5-10 5z" />
                            <path d="M6 12v5c3 3 9 3 12 0v-5" />
                        </svg></div>
                    <h4>LMS Platforms</h4>
                    <div class="tech-items">
                        <span class="tech-item">Moodle</span>
                        <span class="tech-item">Canvas</span>
                        <span class="tech-item">Custom LMS</span>
                        <span class="tech-item">Open edX</span>
                    </div>
                </div>
                <div class="tech-cat">
                    <div class="tech-cat-icon"><svg width="26" height="26" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="22 12 16 12 14 15 10 9 8 12 2 12" />
                            <path
                                d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z" />
                        </svg></div>
                    <h4>Cloud Infrastructure</h4>
                    <div class="tech-items">
                        <span class="tech-item">AWS</span>
                        <span class="tech-item">GCP</span>
                        <span class="tech-item">Azure</span>
                        <span class="tech-item">K8s</span>
                    </div>
                </div>
                <div class="tech-cat">
                    <div class="tech-cat-icon"><svg width="26" height="26" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <polygon points="23 7 16 12 23 17 23 7" />
                            <rect x="1" y="5" width="15" height="14" rx="2" />
                        </svg></div>
                    <h4>Video Streaming</h4>
                    <div class="tech-items">
                        <span class="tech-item">Agora</span>
                        <span class="tech-item">Mux</span>
                        <span class="tech-item">Daily.co</span>
                        <span class="tech-item">Twilio</span>
                    </div>
                </div>
                <div class="tech-cat">
                    <div class="tech-cat-icon"><svg width="26" height="26" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="18" y1="20" x2="18" y2="10" />
                            <line x1="12" y1="20" x2="12" y2="4" />
                            <line x1="6" y1="20" x2="6" y2="14" />
                        </svg></div>
                    <h4>Analytics Tools</h4>
                    <div class="tech-items">
                        <span class="tech-item">Mixpanel</span>
                        <span class="tech-item">Amplitude</span>
                        <span class="tech-item">BigQuery</span>
                        <span class="tech-item">Metabase</span>
                    </div>
                </div>
                <div class="tech-cat">
                    <div class="tech-cat-icon"><svg width="26" height="26" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="1" />
                            <circle cx="3" cy="6" r="1" />
                            <circle cx="21" cy="6" r="1" />
                            <circle cx="3" cy="18" r="1" />
                            <circle cx="21" cy="18" r="1" />
                            <line x1="3" y1="7" x2="12" y2="11" />
                            <line x1="21" y1="7" x2="12" y2="11" />
                            <line x1="3" y1="17" x2="12" y2="13" />
                            <line x1="21" y1="17" x2="12" y2="13" />
                        </svg></div>
                    <h4>API Integrations</h4>
                    <div class="tech-items">
                        <span class="tech-item">Stripe</span>
                        <span class="tech-item">Zoom</span>
                        <span class="tech-item">Salesforce</span>
                        <span class="tech-item">Zapier</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- RESULTS -->
    <section class="results">
        <div class="container">
            <div class="sec-head">
                <div class="pill"><span class="pill-dot"></span>Proven Impact</div>
                <h2>Results That <em>Move the Needle</em></h2>
                <p>Measurable outcomes from EdTech platforms built and scaled by Accrosian.</p>
            </div>
            <div class="res-grid">
                <div class="res-card">
                    <div class="res-n">99.9%</div>
                    <div class="res-label">Platform Uptime</div>
                    <div class="res-desc">SLA-backed reliability with proactive monitoring and zero single points of
                        failure.</div>
                </div>
                <div class="res-card">
                    <div class="res-n">+41%</div>
                    <div class="res-label">Student Engagement</div>
                    <div class="res-desc">Median uplift in session length and return visit rate after personalization
                        deployment.</div>
                </div>
                <div class="res-card">
                    <div class="res-n">500K+</div>
                    <div class="res-label">Concurrent Learners</div>
                    <div class="res-desc">Proven capacity to serve peak traffic without performance degradation during
                        live events.</div>
                </div>
                <div class="res-card">
                    <div class="res-n">3×</div>
                    <div class="res-label">Faster Delivery</div>
                    <div class="res-desc">Average reduction in content load time through edge caching and CDN
                        optimization.</div>
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