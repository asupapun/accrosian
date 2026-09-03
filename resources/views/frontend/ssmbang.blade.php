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
    --navy: #040d1a;
    --navy-2: #071428;
    --navy-3: #0b1e3d;
    --navy-light: #1a2060;
    --navy-soft: #1e3a5f;
    --blue: #1a4fd6;
    --blue-light: #2e6aff;
    --blue-pale: #eff4ff;
    --orange: #f97316;
    --orange-2: #fb923c;
    --gold: #f59e0b;
    --white: #ffffff;
    --off-white: #f8fafc;
    --gray-50: #f1f5f9;
    --gray-100: #e2e8f0;
    --gray-200: #cbd5e1;
    --gray-400: #94a3b8;
    --gray-500: #64748b;
    --gray-700: #334155;
    --gray-900: #0f172a;
    --black: #000000;
    --glass-border-hover: rgba(249, 115, 22, .38);
    --shadow-sm: 0 1px 3px rgba(0, 0, 0, .08), 0 1px 2px rgba(0, 0, 0, .05);
    --shadow-md: 0 4px 16px rgba(0, 0, 0, .08), 0 2px 6px rgba(0, 0, 0, .05);
    --shadow-lg: 0 12px 40px rgba(0, 0, 0, .1), 0 4px 12px rgba(0, 0, 0, .06);
    --shadow-xl: 0 24px 60px rgba(0, 0, 0, .12);
    --shadow-card: 0 2px 8px rgba(4, 13, 26, .06), 0 0 0 1px rgba(4, 13, 26, .06);
    --shadow-hover: 0 16px 48px rgba(26, 79, 214, .14), 0 4px 16px rgba(26, 79, 214, .08);
    --shadow-orange: 0 8px 30px rgba(249, 115, 22, .3);
    --gradient-orange: linear-gradient(135deg, #e8750a, #f59332);
    --r: 12px;
    --r2: 20px;
    --r3: 28px;
    --ff-head: 'Sora', sans-serif;
    --ff-body: 'DM Sans', sans-serif;
    --ff-mono: 'JetBrains Mono', monospace;
}

/* ═══════════════════════════════════════════════
   RESET
═══════════════════════════════════════════════ */
.bk *,
.bk *::before,
.bk *::after {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

.bk {
    font-family: var(--ff-body);
    background: var(--white);
    color: var(--gray-900);
    overflow-x: hidden;
    line-height: 1.65;
}

/* ═══════════════════════════════════════════════
   LAYOUT
═══════════════════════════════════════════════ */
.bk-wrap {
    max-width: 1300px;
    margin: 0 auto;
    padding: 0 28px;
}

.bk-sec {
    padding: 60px 0;
}

.bk-sec-alt {
    background: var(--off-white);
}

.bk-sec-navy {
    background: var(--navy-light);
}

.bk-sec-navy-2 {
    background: var(--navy-2);
}

/* ═══════════════════════════════════════════════
   TYPE
═══════════════════════════════════════════════ */
.bk-eyebrow {
    display: inline-flex;
    align-items: center;
    gap: 7px;
    font-family: var(--ff-mono);
    font-size: 10.5px;
    font-weight: 500;
    letter-spacing: .13em;
    text-transform: uppercase;
    color: var(--orange);
    background: rgba(249, 115, 22, .08);
    border: 1px solid rgba(249, 115, 22, .22);
    padding: 5px 13px;
    border-radius: 100px;
}

.bk-eyebrow svg {
    width: 11px;
    height: 11px;
}

.bk-h1 {
    font-family: var(--ff-head);
    font-size: clamp(2.6rem, 3.2vw, 3.9rem);
    font-weight: 800;
    line-height: 1.08;
    letter-spacing: -.03em;
    color: var(--navy);
}

.bk-h2 {
    font-family: var(--ff-head);
    font-size: clamp(1.9rem, 3vw, 2.8rem);
    font-weight: 800;
    line-height: 1.1;
    letter-spacing: -.025em;
    color: var(--navy);
}

.bk-h2-white {
    color: #fff;
}

.bk-sub {
    font-size: 1rem;
    color: var(--black);
    max-width: 580px;
    margin-top: 16px;
    line-height: 1.7;
}

.bk-sub-white {
    color: rgba(255, 255, 255, .65);
}

/* Gradient text */
.grad-orange {
    background: var(--gradient-orange);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.grad-blue {
    background: var(--gradient-orange);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

/* ═══════════════════════════════════════════════
   BUTTONS
═══════════════════════════════════════════════ */
.bk-btn {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    font-family: var(--ff-body);
    font-size: .95rem;
    font-weight: 600;
    padding: 14px 28px;
    border-radius: 50px;
    border: none;
    cursor: pointer;
    text-decoration: none;
    transition: all .28s ease;
    letter-spacing: -.01em;
}

.bk-btn-orange {
    background: var(--gradient-orange);
    color: var(--white);
    box-shadow: 0 4px 24px rgba(232, 117, 10, 0.35);
}

.bk-btn-orange:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 32px rgba(232, 117, 10, 0.5);
}

.bk-btn-navy {
    background: var(--navy);
    color: #fff;
    box-shadow: 0 6px 24px rgba(4, 13, 26, .25);
}

.bk-btn-navy:hover {
    background: var(--navy-3);
    transform: translateY(-2px);
    color: #fff;
    text-decoration: none;
}

.bk-btn-outline-white {
    background: var(--gradient-orange);
    color: var(--white);
    border: 1px solid rgba(255, 255, 255, 0.25);
}

.bk-btn-outline-white:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 32px rgba(232, 117, 10, 0.5);
}

.bk-btn-outline-navy {
    background: transparent;
    border: 1.5px solid rgba(4, 13, 26, .18);
    color: var(--navy);
}

.bk-btn-outline-navy:hover {
    background: var(--blue-pale);
    border-color: var(--blue-light);
    color: var(--blue-light);
    text-decoration: none;
}


/* ═══════════════════════════════════════════════
   SECTION HEADER
═══════════════════════════════════════════════ */
.bk-sec-head {
    text-align: center;
    margin-bottom: 60px;
}

.bk-sec-head .bk-eyebrow {
    margin-bottom: 16px;
}

.bk-sec-head .bk-sub {
    margin: 16px auto 0;
}

.bk-divider {
    width: 48px;
    height: 3px;
    border-radius: 3px;
    margin: 16px auto 0;
    background: linear-gradient(90deg, var(--orange), var(--gold));
}

/* ═══════════════════════════════════════════════
   HERO
═══════════════════════════════════════════════ */
.bk-hero {
    min-height: 75vh;
    padding: 140px 0 60px 0;
}

/* subtle grid pattern */
.bk-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    pointer-events: none;
    opacity: .5;
    background-image:
        linear-gradient(rgba(46, 106, 255, .06) 1px, transparent 1px),
        linear-gradient(90deg, rgba(46, 106, 255, .06) 1px, transparent 1px);
    background-size: 48px 48px;
}

.bk-hero::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    height: 1px;
    background: linear-gradient(90deg, transparent, rgba(46, 106, 255, .3) 40%, rgba(249, 115, 22, .3) 60%, transparent);
}

.bk-hero-grid {
    max-width: 950px;
    /* adjust as needed */
    position: relative;
    z-index: 2;
}

/* Hero left */
.bk-hero-eyebrow {
    display: flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 28px;
    flex-wrap: wrap;
}

.bk-live-badge {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    font-family: var(--ff-mono);
    font-size: 10px;
    letter-spacing: .1em;
    text-transform: uppercase;
    color: #22d3ee;
    background: rgba(34, 211, 238, .08);
    border: 1px solid rgba(34, 211, 238, .2);
    padding: 5px 12px;
    border-radius: 100px;
}

.bk-live-dot {
    width: 6px;
    height: 6px;
    border-radius: 50%;
    background: #22d3ee;
    animation: pulse-dot 2s infinite;
}

@keyframes pulse-dot {

    0%,
    100% {
        opacity: 1;
        transform: scale(1)
    }

    50% {
        opacity: .4;
        transform: scale(.6)
    }
}

.bk-hero-title {
    color: #fff;
    margin-bottom: 20px;
}

.bk-hero-sub {
    color: rgba(255, 255, 255, .6);
    max-width: 700px;
    font-size: 1.05rem;
    line-height: 1.75;
}

.bk-hero-btns {
    display: flex;
    gap: 12px;
    flex-wrap: wrap;
    margin-top: 36px;
}

.bk-trust-row {
    display: flex;
    align-items: center;
    gap: 22px;
    margin-top: 44px;
    flex-wrap: wrap;
}

.bk-trust-pill {
    display: flex;
    align-items: center;
    gap: 7px;
    font-size: .78rem;
    color: rgba(255, 255, 255, .5);
    font-family: var(--ff-mono);
    letter-spacing: .06em;
}

.bk-trust-pill svg {
    width: 14px;
    height: 14px;
    color: #22d3ee;
    flex-shrink: 0;
}

.bk-trust-sep {
    width: 1px;
    height: 14px;
    background: rgba(255, 255, 255, .12);
}

/* Hero right — Dashboard */
.bk-hero-right {
    position: relative;
}

.bk-dash-wrap {
    padding: 24px 32px 40px;
    position: relative;
}

.bk-dashboard {
    background: linear-gradient(145deg, rgba(15, 38, 85, .96), rgba(7, 20, 40, .98));
    border: 1px solid rgba(46, 106, 255, .22);
    border-radius: var(--r3);
    padding: 26px;
    box-shadow: 0 0 0 1px rgba(46, 106, 255, .08), 0 32px 80px rgba(0, 0, 0, .55), 0 0 60px rgba(46, 106, 255, .15);
    backdrop-filter: blur(24px);
    animation: floatY 6s ease-in-out infinite;
}

@keyframes floatY {

    0%,
    100% {
        transform: translateY(0)
    }

    50% {
        transform: translateY(-10px)
    }
}

.bk-dh {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 22px;
}

.bk-dh-brand {
    font-family: var(--ff-mono);
    font-size: .68rem;
    color: #22d3ee;
    letter-spacing: .12em;
}

.bk-dh-dots {
    display: flex;
    gap: 5px;
}

.bk-dh-dot {
    width: 9px;
    height: 9px;
    border-radius: 50%;
}

.bk-dbal {
    margin-bottom: 22px;
}

.bk-dbal-lbl {
    font-family: var(--ff-mono);
    font-size: .65rem;
    color: rgba(255, 255, 255, .35);
    letter-spacing: .12em;
    text-transform: uppercase;
    margin-bottom: 4px;
}

.bk-dbal-amt {
    font-family: var(--ff-head);
    font-size: 2.4rem;
    font-weight: 800;
    color: #fff;
    letter-spacing: -.03em;
    line-height: 1;
}

.bk-dbal-chg {
    font-size: .73rem;
    color: #4ade80;
    margin-top: 4px;
    font-weight: 600;
}

.bk-chart {
    height: 72px;
    display: flex;
    align-items: flex-end;
    gap: 5px;
    margin-bottom: 22px;
}

.bk-cb {
    flex: 1;
    border-radius: 4px 4px 0 0;
    position: relative;
    overflow: hidden;
}

.bk-cb-b {
    background: linear-gradient(180deg, rgba(46, 106, 255, .85), rgba(46, 106, 255, .18));
}

.bk-cb-o {
    background: linear-gradient(180deg, rgba(249, 115, 22, .9), rgba(249, 115, 22, .18));
}

.bk-cb::after {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(180deg, rgba(255, 255, 255, .12), transparent);
}

.bk-dstats {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 10px;
}

.bk-ds {
    background: rgba(255, 255, 255, .04);
    border: 1px solid rgba(255, 255, 255, .07);
    border-radius: 10px;
    padding: 11px 10px;
    text-align: center;
}

.bk-ds-val {
    font-family: var(--ff-head);
    font-size: 1rem;
    font-weight: 700;
}

.bk-ds-lbl {
    font-family: var(--ff-mono);
    font-size: .56rem;
    color: rgba(255, 255, 255, .3);
    letter-spacing: .08em;
    text-transform: uppercase;
    margin-top: 2px;
}

/* floating badges */
.bk-badge {
    position: absolute;
    background: rgba(7, 20, 40, .95);
    border: 1px solid rgba(34, 211, 238, .28);
    border-radius: 14px;
    padding: 11px 15px;
    display: flex;
    align-items: center;
    gap: 10px;
    backdrop-filter: blur(20px);
    box-shadow: 0 12px 36px rgba(0, 0, 0, .4);
}

.bk-badge-1 {
    bottom: 10px;
    left: -10px;
}

.bk-badge-2 {
    top: 30px;
    right: -10px;
}

.bk-badge-ico {
    width: 34px;
    height: 34px;
    border-radius: 9px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.bk-badge-ico svg {
    width: 17px;
    height: 17px;
}

.bk-badge-txt {
    font-size: .7rem;
}

.bk-badge-txt strong {
    display: block;
    font-size: .83rem;
    font-weight: 700;
    color: #fff;
    line-height: 1.2;
}

.bk-badge-txt span {
    color: rgba(255, 255, 255, .4);
    font-size: .68rem;
}

/* ═══════════════════════════════════════════════
   SERVICES — WHITE BG
═══════════════════════════════════════════════ */
.bk-cards {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 24px;
}

.bk-card {
    background: var(--navy-light);
    border: 1px solid var(--navy-2);
    border-radius: var(--r2);
    padding: 34px 28px 28px;
    box-shadow: var(--shadow-card);
    transition: all .35s cubic-bezier(.23, 1, .32, 1);
    position: relative;
    overflow: hidden;
    cursor: default;
}

/* top accent line */
.bk-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 3px;
    background: linear-gradient(90deg, var(--blue-light), #22d3ee);
    opacity: 0;
    transition: opacity .35s;
    border-radius: var(--r2) var(--r2) 0 0;
}

.bk-card:hover {
    border-color: var(--glass-border-hover);
    box-shadow: 0 8px 28px var(--navy-2);
    transform: translateY(-4px)
}

.bk-card:hover::before {
    opacity: 1;
}

.bk-card-ico {
    width: 56px;
    height: 56px;
    border-radius: 14px;
    margin-bottom: 22px;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all .35s;
}

.bk-card:hover .bk-card-ico {
    transform: scale(1.08);
}

.bk-card-ico svg {
    width: 26px;
    height: 26px;
}

.bk-card-title {
    font-family: var(--ff-head);
    font-size: 1.05rem;
    font-weight: 700;
    color: #ffff;
    margin-bottom: 10px;
    letter-spacing: -.01em;
}

.bk-card-desc {
    font-size: .875rem;
    color: #ffff;
    line-height: 1.7;
}

.bk-card-link {
    display: inline-flex;
    align-items: center;
    gap: 5px;
    margin-top: 18px;
    font-size: .8rem;
    font-weight: 700;
    color: var(--blue-light);
    opacity: 0;
    transform: translateX(-6px);
    transition: all .3s;
    text-decoration: none;
}

.bk-card:hover .bk-card-link {
    opacity: 1;
    transform: translateX(0);
}

.bk-card-link svg {
    width: 14px;
    height: 14px;
}

/* icon colour per card */
.bk-card:nth-child(1) .bk-card-ico {
    background: #eff4ff;
}

.bk-card:nth-child(1) .bk-card-ico svg {
    color: var(--blue-light);
}

.bk-card:nth-child(2) .bk-card-ico {
    background: #ecfeff;
}

.bk-card:nth-child(2) .bk-card-ico svg {
    color: #0891b2;
}

.bk-card:nth-child(3) .bk-card-ico {
    background: #fff7ed;
}

.bk-card:nth-child(3) .bk-card-ico svg {
    color: var(--orange);
}

.bk-card:nth-child(4) .bk-card-ico {
    background: #fefce8;
}

.bk-card:nth-child(4) .bk-card-ico svg {
    color: #d97706;
}

.bk-card:nth-child(5) .bk-card-ico {
    background: #fff1f2;
}

.bk-card:nth-child(5) .bk-card-ico svg {
    color: #e11d48;
}

.bk-card:nth-child(6) .bk-card-ico {
    background: #faf5ff;
}

.bk-card:nth-child(6) .bk-card-ico svg {
    color: #7c3aed;
}

/* =====================================================
   SOCIAL MEDIA — WHY ACCROSIAN
   Premium Editorial Growth Section
===================================================== */

.smm-why {
    position: relative;
    padding: 110px 0;
    background: #f8fafc;
    overflow: hidden;
}

.smm-why::before {
    content: "";
    position: absolute;
    width: 500px;
    height: 500px;
    top: -250px;
    right: -180px;
    background: radial-gradient(circle,
            rgba(249, 115, 22, .10),
            transparent 68%);
    pointer-events: none;
}

.smm-why::after {
    content: "";
    position: absolute;
    width: 450px;
    height: 450px;
    bottom: -250px;
    left: -200px;
    background: radial-gradient(circle,
            rgba(26, 79, 214, .08),
            transparent 70%);
    pointer-events: none;
}

.smm-why-wrap {
    max-width: 1250px;
    margin: auto;
    padding: 0 30px;
    position: relative;
    z-index: 2;
}

/* ---------- HEADER ---------- */

.smm-why-header {
    max-width: 850px;
    margin-bottom: 80px;
}

.smm-why-label {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    font-family: var(--ff-mono);
    font-size: 11px;
    text-transform: uppercase;
    letter-spacing: .16em;
    color: var(--orange);
    margin-bottom: 22px;
}

.smm-why-label::before {
    content: "";
    width: 34px;
    height: 2px;
    background: linear-gradient(90deg,
            var(--orange),
            var(--gold));
}

.smm-why-title {
    font-family: var(--ff-head);
    font-size: clamp(2.5rem, 5vw, 4.7rem);
    line-height: 1.04;
    font-weight: 800;
    letter-spacing: -.045em;
    color: var(--navy);
    margin: 0;
}

.smm-why-title span {
    background: linear-gradient(135deg,
            #f97316,
            #f59e0b);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.smm-why-intro {
    max-width: 690px;
    margin-top: 24px;
    font-size: 17px;
    line-height: 1.8;
    color: #64748b;
}

/* ---------- MAIN CONTENT ---------- */

.smm-growth {
    display: grid;
    grid-template-columns: 150px 1fr;
    gap: 55px;
    position: relative;
}

/* ---------- BIG NUMBER ---------- */

.smm-growth-number {
    position: relative;
    font-family: var(--ff-head);
    font-size: clamp(4rem, 8vw, 7rem);
    font-weight: 800;
    line-height: .85;
    letter-spacing: -.08em;
    color: transparent;
    -webkit-text-stroke: 1px rgba(4, 13, 26, .14);
}

.smm-growth-number span {
    display: block;
    margin-top: 15px;
    font-family: var(--ff-mono);
    font-size: 11px;
    letter-spacing: .12em;
    text-transform: uppercase;
    color: var(--orange);
    -webkit-text-stroke: 0;
}

/* ---------- VERTICAL GROWTH LINE ---------- */

.smm-growth-content {
    position: relative;
    padding-left: 55px;
}

.smm-growth-content::before {
    content: "";
    position: absolute;
    left: 0;
    top: 5px;
    bottom: 0;
    width: 1px;
    background: linear-gradient(180deg,
            var(--orange),
            rgba(249, 115, 22, .15),
            transparent);
}

.smm-point {
    position: relative;
    padding-bottom: 55px;
}

.smm-point:last-child {
    padding-bottom: 0;
}

/* timeline dot */

.smm-point::before {
    content: "";
    position: absolute;
    left: -59px;
    top: 4px;
    width: 9px;
    height: 9px;
    border-radius: 50%;
    background: var(--orange);
    box-shadow:
        0 0 0 6px rgba(249, 115, 22, .08),
        0 0 22px rgba(249, 115, 22, .35);
}

/* ---------- POINT CONTENT ---------- */

.smm-point-top {
    display: flex;
    align-items: baseline;
    gap: 18px;
    margin-bottom: 9px;
}

.smm-point-no {
    font-family: var(--ff-mono);
    font-size: 11px;
    color: var(--orange);
    letter-spacing: .1em;
}

.smm-point h3 {
    font-family: var(--ff-head);
    font-size: 23px;
    font-weight: 700;
    color: var(--navy);
    margin: 0;
    letter-spacing: -.02em;
}

.smm-point p {
    max-width: 700px;
    margin: 0;
    color: #64748b;
    font-size: 15px;
    line-height: 1.8;
}

/* ---------- KEYWORD STRIP ---------- */

.smm-keywords {
    margin-top: 80px;
    padding-top: 28px;
    border-top: 1px solid #e2e8f0;

    display: flex;
    flex-wrap: wrap;
    gap: 12px 30px;
}

.smm-keywords span {
    font-family: var(--ff-mono);
    font-size: 11px;
    letter-spacing: .08em;
    text-transform: uppercase;
    color: #94a3b8;
    position: relative;
}

.smm-keywords span:not(:last-child)::after {
    content: "•";
    position: absolute;
    right: -18px;
    color: var(--orange);
}

/* ---------- SMALL STATEMENT ---------- */

.smm-why-statement {
    margin-top: 75px;
    padding-left: 205px;
    max-width: 1050px;
}

.smm-why-statement p {
    font-family: var(--ff-head);
    font-size: clamp(1.35rem, 2.5vw, 2.15rem);
    line-height: 1.45;
    font-weight: 600;
    letter-spacing: -.025em;
    color: var(--navy);
}

.smm-why-statement strong {
    color: var(--orange);
}

/* ---------- RESPONSIVE ---------- */

@media(max-width: 768px) {

    .smm-why {
        padding: 75px 0;
    }

    .smm-why-header {
        margin-bottom: 55px;
    }

    .smm-why-title {
        font-size: 2.7rem;
    }

    .smm-growth {
        grid-template-columns: 1fr;
        gap: 35px;
    }

    .smm-growth-number {
        font-size: 4.5rem;
    }

    .smm-growth-content {
        padding-left: 35px;
    }

    .smm-point::before {
        left: -39px;
    }

    .smm-point h3 {
        font-size: 19px;
    }

    .smm-point p {
        font-size: 14px;
    }

    .smm-keywords {
        margin-top: 55px;
        gap: 12px 25px;
    }

    .smm-why-statement {
        padding-left: 0;
        margin-top: 55px;
    }

    .smm-why-statement p {
        font-size: 1.45rem;
    }
}

/* =====================================================
   SOCIAL MEDIA MARKETING — OUR PROCESS
   Premium Creative Journey
===================================================== */

.smm-process {
    position: relative;
    padding: 115px 0 125px;
    background: #10164a;
    overflow: hidden;
}

/* Large background typography */
.smm-process::before {
    content: "SOCIAL";
    position: absolute;
    right: -40px;
    top: 35px;

    font-family: var(--ff-head);
    font-size: clamp(7rem, 17vw, 16rem);
    font-weight: 800;
    line-height: 1;

    color: rgba(255, 255, 255, .025);
    letter-spacing: -.08em;

    pointer-events: none;
}

/* Orange glow */
.smm-process::after {
    content: "";
    position: absolute;
    width: 500px;
    height: 500px;
    left: -250px;
    bottom: -300px;

    background: radial-gradient(circle,
            rgba(249, 115, 22, .15),
            transparent 70%);

    pointer-events: none;
}

.smm-process-wrap {
    max-width: 1250px;
    margin: auto;
    padding: 0 30px;
    position: relative;
    z-index: 2;
}

/* =====================================================
   HEADER
===================================================== */

.smm-process-head {
    max-width: 800px;
    margin-bottom: 90px;
}

.smm-process-label {
    display: inline-flex;
    align-items: center;
    gap: 10px;

    font-family: var(--ff-mono);
    font-size: 11px;
    letter-spacing: .16em;
    text-transform: uppercase;

    color: #ff9b45;
    margin-bottom: 22px;
}

.smm-process-label::before {
    content: "";
    width: 34px;
    height: 2px;

    background: linear-gradient(90deg,
            #f97316,
            #f59e0b);
}

.smm-process-title {
    font-family: var(--ff-head);
    font-size: clamp(2.5rem, 5vw, 4.8rem);
    font-weight: 800;
    line-height: 1.04;

    color: #fff;
    letter-spacing: -.045em;

    margin: 0;
}

.smm-process-title span {
    background: linear-gradient(135deg,
            #f97316,
            #ffb347);

    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.smm-process-intro {
    max-width: 700px;

    margin-top: 24px;

    font-size: 16px;
    line-height: 1.8;

    color: rgba(255, 255, 255, .62);
}

/* =====================================================
   PROCESS JOURNEY
===================================================== */

.smm-process-track {
    position: relative;
    display: grid;
    grid-template-columns: repeat(6, 1fr);
    gap: 0;
}

/* Main horizontal line */

.smm-process-track::before {
    content: "";

    position: absolute;
    top: 31px;
    left: 0;
    right: 0;

    height: 1px;

    background: linear-gradient(90deg,
            rgba(249, 115, 22, .05),
            rgba(249, 115, 22, .8),
            rgba(255, 179, 71, .8),
            rgba(249, 115, 22, .05));
}

/* =====================================================
   INDIVIDUAL STEP
===================================================== */

.smm-process-step {
    position: relative;
    padding-right: 28px;
}

.smm-process-step:last-child {
    padding-right: 0;
}

/* Number */

.smm-process-number {
    width: 62px;
    height: 62px;

    display: flex;
    align-items: center;
    justify-content: center;

    position: relative;
    z-index: 2;

    border-radius: 50%;

    background: #10164a;

    border: 1px solid rgba(249, 115, 22, .45);

    font-family: var(--ff-mono);
    font-size: 12px;
    font-weight: 500;

    color: #ff9b45;

    transition: .4s ease;
}

/* Inner dot */

.smm-process-number::after {
    content: "";

    position: absolute;

    width: 8px;
    height: 8px;

    border-radius: 50%;

    background: #f97316;

    box-shadow:
        0 0 0 6px rgba(249, 115, 22, .08),
        0 0 25px rgba(249, 115, 22, .5);

    opacity: 0;

    transition: .4s ease;
}

/* Hover */

.smm-process-step:hover .smm-process-number {
    border-color: #f97316;

    transform: scale(1.08);

    box-shadow:
        0 0 30px rgba(249, 115, 22, .18);
}

.smm-process-step:hover .smm-process-number::after {
    opacity: 1;
}

/* =====================================================
   STEP CONTENT
===================================================== */

.smm-process-content {
    margin-top: 30px;
}

.smm-process-content h3 {
    font-family: var(--ff-head);

    font-size: 17px;
    font-weight: 700;

    line-height: 1.35;

    color: #fff;

    margin: 0 0 10px;

    letter-spacing: -.015em;
}

.smm-process-content p {
    font-size: 13px;
    line-height: 1.7;

    color: rgba(255, 255, 255, .48);

    margin: 0;

    max-width: 175px;
}

/* =====================================================
   STEP KEYWORD
===================================================== */

.smm-process-tag {
    display: block;

    margin-top: 18px;

    font-family: var(--ff-mono);

    font-size: 9px;
    letter-spacing: .12em;

    text-transform: uppercase;

    color: #f97316;
}

/* =====================================================
   BOTTOM STATEMENT
===================================================== */

.smm-process-bottom {
    margin-top: 95px;

    padding-top: 30px;

    border-top: 1px solid rgba(255, 255, 255, .08);

    display: flex;
    align-items: center;
    justify-content: space-between;

    gap: 30px;
}

.smm-process-bottom p {
    margin: 0;

    font-family: var(--ff-head);

    font-size: clamp(1.2rem, 2vw, 1.7rem);

    line-height: 1.45;

    color: rgba(255, 255, 255, .75);

    max-width: 650px;
}

.smm-process-bottom strong {
    color: #fff;
}

.smm-process-arrow {
    width: 55px;
    height: 55px;

    border-radius: 50%;

    border: 1px solid rgba(249, 115, 22, .4);

    display: flex;
    align-items: center;
    justify-content: center;

    color: #f97316;

    font-size: 22px;

    transition: .35s ease;
}

.smm-process-bottom:hover .smm-process-arrow {
    transform: translateX(8px);

    background: #f97316;

    color: #fff;

    box-shadow:
        0 10px 30px rgba(249, 115, 22, .3);
}


/* =====================================================
   TABLET
===================================================== */

@media(max-width:1024px) {

    .smm-process-track {
        grid-template-columns: repeat(3, 1fr);
        row-gap: 65px;
    }

    .smm-process-track::before {
        display: none;
    }

    .smm-process-step {
        padding-right: 35px;
    }
}


/* =====================================================
   MOBILE
===================================================== */

@media(max-width:768px) {

    .smm-process {
        padding: 80px 0 90px;
    }

    .smm-process-head {
        margin-bottom: 60px;
    }

    .smm-process-title {
        font-size: 2.7rem;
    }

    .smm-process-track {
        grid-template-columns: 1fr;
        gap: 0;
    }

    .smm-process-step {
        display: grid;
        grid-template-columns: 62px 1fr;
        column-gap: 25px;

        padding: 0 0 45px;
    }

    .smm-process-step:not(:last-child)::after {
        content: "";

        position: absolute;

        left: 30px;
        top: 62px;
        bottom: 0;

        width: 1px;

        background: linear-gradient(180deg,
                rgba(249, 115, 22, .5),
                rgba(249, 115, 22, .05));
    }

    .smm-process-content {
        margin-top: 4px;
    }

    .smm-process-content p {
        max-width: 100%;
    }

    .smm-process-bottom {
        margin-top: 45px;
        align-items: flex-start;
    }

    .smm-process-arrow {
        flex-shrink: 0;
    }
}

/* ═══════════════════════════════════════════════
   FEATURES GRID — white bg
═══════════════════════════════════════════════ */
/* =====================================================
   SOCIAL MEDIA MARKETING
   WHAT WE BUILD FOR YOUR BRAND
===================================================== */

.smm-services {
    position: relative;
    padding: 120px 0 125px;
    background: #ffffff;
    overflow: hidden;
}

.smm-services-wrap {
    max-width: 1250px;
    margin: 0 auto;
    padding: 0 30px;
    position: relative;
    z-index: 2;
}


/* =====================================================
   BACKGROUND TYPOGRAPHY
===================================================== */

.smm-services::before {
    content: "CONTENT";

    position: absolute;
    top: 20px;
    right: -30px;

    font-family: var(--ff-head);
    font-size: clamp(7rem, 17vw, 15rem);
    font-weight: 800;

    line-height: 1;

    letter-spacing: -.08em;

    color: rgba(15, 23, 42, .025);

    pointer-events: none;
}


/* =====================================================
   HEADER
===================================================== */

.smm-services-head {
    max-width: 850px;
    margin-bottom: 85px;
}

.smm-services-label {
    display: inline-flex;
    align-items: center;
    gap: 10px;

    font-family: var(--ff-mono);

    font-size: 11px;
    letter-spacing: .16em;

    text-transform: uppercase;

    color: var(--orange);

    margin-bottom: 22px;
}

.smm-services-label::before {
    content: "";

    width: 34px;
    height: 2px;

    background: linear-gradient(90deg,
            var(--orange),
            #f59e0b);
}

.smm-services-title {
    margin: 0;

    font-family: var(--ff-head);

    font-size: clamp(2.5rem, 5vw, 4.8rem);

    line-height: 1.04;

    font-weight: 800;

    letter-spacing: -.045em;

    color: var(--navy);
}

.smm-services-title span {
    background: linear-gradient(135deg,
            #f97316,
            #f59e0b);

    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.smm-services-intro {
    max-width: 700px;

    margin-top: 24px;

    font-size: 16px;

    line-height: 1.8;

    color: #64748b;
}


/* =====================================================
   SERVICE LIST
===================================================== */

.smm-service-list {
    position: relative;
}


/* horizontal separator */

.smm-service-item {
    position: relative;

    display: grid;

    grid-template-columns: 90px 1fr 310px;

    align-items: center;

    gap: 35px;

    padding: 34px 0;

    border-top: 1px solid #e5e7eb;

    transition: .35s ease;
}

.smm-service-item:last-child {
    border-bottom: 1px solid #e5e7eb;
}


/* =====================================================
   NUMBER
===================================================== */

.smm-service-number {
    font-family: var(--ff-mono);

    font-size: 12px;

    letter-spacing: .12em;

    color: var(--orange);

    transition: .3s ease;
}


/* =====================================================
   TITLE
===================================================== */

.smm-service-name {
    position: relative;

    font-family: var(--ff-head);

    font-size: clamp(1.35rem, 2.5vw, 2rem);

    font-weight: 700;

    letter-spacing: -.025em;

    color: var(--navy);

    margin: 0;

    transition: .35s ease;
}


/* Orange line appearing underneath */

.smm-service-name::after {
    content: "";

    position: absolute;

    left: 0;
    bottom: -7px;

    width: 0;
    height: 2px;

    background: var(--orange);

    transition: width .4s ease;
}


/* =====================================================
   DESCRIPTION
===================================================== */

.smm-service-description {
    font-size: 13px;

    line-height: 1.7;

    color: #64748b;

    margin: 0;

    max-width: 300px;
}


/* =====================================================
   HOVER
===================================================== */

.smm-service-item:hover {
    padding-left: 15px;
    padding-right: 15px;
}

.smm-service-item:hover .smm-service-number {
    transform: translateX(5px);
}

.smm-service-item:hover .smm-service-name {
    color: var(--orange);
}

.smm-service-item:hover .smm-service-name::after {
    width: 70px;
}


/* =====================================================
   MINI VISUAL BAR
===================================================== */

.smm-service-progress {
    position: absolute;

    left: 90px;
    bottom: -1px;

    height: 2px;

    width: 0;

    background: linear-gradient(90deg,
            var(--orange),
            #f59e0b);

    transition: width .7s cubic-bezier(.22, 1, .36, 1);
}

.smm-service-item:hover .smm-service-progress {
    width: calc(100% - 400px);
}


/* =====================================================
   RIGHT LABEL
===================================================== */

.smm-service-type {
    display: flex;

    justify-content: flex-end;

    font-family: var(--ff-mono);

    font-size: 10px;

    text-transform: uppercase;

    letter-spacing: .12em;

    color: #94a3b8;
}


/* =====================================================
   BOTTOM STATEMENT
===================================================== */

.smm-services-bottom {
    margin-top: 80px;

    display: flex;

    justify-content: space-between;

    align-items: flex-end;

    gap: 40px;
}

.smm-services-bottom-text {
    max-width: 720px;
}

.smm-services-bottom-text p {
    margin: 0;

    font-family: var(--ff-head);

    font-size: clamp(1.4rem, 2.8vw, 2.25rem);

    line-height: 1.4;

    letter-spacing: -.025em;

    color: var(--navy);
}

.smm-services-bottom-text strong {
    color: var(--orange);
}

.smm-services-bottom-small {
    margin-top: 18px;

    font-family: var(--ff-mono);

    font-size: 10px;

    text-transform: uppercase;

    letter-spacing: .13em;

    color: #94a3b8;
}


/* =====================================================
   RIGHT MARK
===================================================== */

.smm-services-mark {
    width: 85px;
    height: 85px;

    flex-shrink: 0;

    border: 1px solid rgba(249, 115, 22, .35);

    border-radius: 50%;

    display: flex;

    align-items: center;

    justify-content: center;

    color: var(--orange);

    font-family: var(--ff-mono);

    font-size: 24px;

    position: relative;
}

.smm-services-mark::before {
    content: "";

    position: absolute;

    inset: 8px;

    border: 1px dashed rgba(249, 115, 22, .25);

    border-radius: 50%;

    animation: smmRotate 12s linear infinite;
}

@keyframes smmRotate {
    from {
        transform: rotate(0deg);
    }

    to {
        transform: rotate(360deg);
    }
}


/* =====================================================
   TABLET
===================================================== */

@media(max-width:1024px) {

    .smm-service-item {
        grid-template-columns: 70px 1fr 230px;
        gap: 25px;
    }

    .smm-service-progress {
        left: 70px;
    }

    .smm-service-item:hover .smm-service-progress {
        width: calc(100% - 300px);
    }
}


/* =====================================================
   MOBILE
===================================================== */

@media(max-width:768px) {

    .smm-services {
        padding: 80px 0 90px;
    }

    .smm-services-head {
        margin-bottom: 55px;
    }

    .smm-services-title {
        font-size: 2.7rem;
    }

    .smm-service-item {
        grid-template-columns: 45px 1fr;

        gap: 15px;

        padding: 25px 0;
    }

    .smm-service-number {
        padding-top: 3px;
    }

    .smm-service-name {
        font-size: 1.25rem;
    }

    .smm-service-description {
        grid-column: 2;

        max-width: 100%;

        margin-top: -5px;
    }

    .smm-service-type {
        display: none;
    }

    .smm-service-progress {
        left: 45px;
    }

    .smm-service-item:hover {
        padding-left: 5px;
        padding-right: 5px;
    }

    .smm-service-item:hover .smm-service-progress {
        width: calc(100% - 50px);
    }

    .smm-services-bottom {
        margin-top: 55px;
    }

    .smm-services-mark {
        display: none;
    }
}

/* ═══════════════════════════════════════════════
   TECH PILLS — alt bg
═══════════════════════════════════════════════ */
.bk-pills {
    display: flex;
    flex-wrap: wrap;
    gap: 14px;
    justify-content: center;
    margin-top: 48px;
}

.bk-pill {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    background: var(--navy-2);
    border: 1px solid var(--gray-100);
    padding: 13px 22px;
    border-radius: 100px;
    box-shadow: var(--shadow-sm);
    transition: all .28s;
}

.bk-pill:hover {
    border-color: var(--glass-border-hover);
    box-shadow: 0 8px 28px var(--navy-2);
    transform: translateY(-4px)
}

.bk-pill svg {
    width: 20px;
    height: 20px;
}

.bk-pill span {
    font-size: .875rem;
    font-weight: 600;
    color: #ffff;
}

/* ============ CTA SECTION ============ */

.cta-section {
    padding: 50px 0;
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

.sm-services {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 30px 45px;
    margin-top: 60px;
}

.sm-item {
    display: flex;
    align-items: flex-start;
    gap: 20px;
    padding: 24px;
    position: relative;
    border: 1px solid #e8edf5;
    border-radius: 18px;
    background: #fff;
    overflow: hidden;

    transition: .45s cubic-bezier(.2, .8, .2, 1);
}

/* Orange line animation */
.sm-item::before {
    content: "";
    position: absolute;
    left: 0;
    top: 0;
    width: 4px;
    height: 0;
    background: linear-gradient(180deg, #ff8c1a, #ffb347);
    transition: .45s;
}

/* Gradient glow */
.sm-item::after {
    content: "";
    position: absolute;
    inset: 0;
    background: linear-gradient(135deg,
            rgba(255, 140, 26, .08),
            rgba(255, 255, 255, 0));
    opacity: 0;
    transition: .45s;
    pointer-events: none;
}

.sm-item:hover {
    transform: translateY(-8px);
    border-color: #ffb15e;
    box-shadow:
        0 18px 45px rgba(0, 0, 0, .08),
        0 8px 20px rgba(255, 140, 26, .18);
}

.sm-item:hover::before {
    height: 100%;
}

.sm-item:hover::after {
    opacity: 1;
}

.sm-icon {
    width: 64px;
    height: 64px;
    min-width: 64px;

    display: flex;
    align-items: center;
    justify-content: center;

    border-radius: 16px;
    background: linear-gradient(135deg, #fff6ec, #fff);

    font-size: 30px;

    transition: .45s;
    box-shadow: 0 8px 20px rgba(255, 140, 26, .08);
}

.sm-item:hover .sm-icon {
    transform: rotate(-8deg) scale(1.12);
    background: linear-gradient(135deg, #ff8c1a, #ffb347);
    color: #fff;
    box-shadow: 0 12px 30px rgba(255, 140, 26, .35);
}

.sm-item h3 {
    font-family: var(--ff-head);
    font-size: 21px;
    color: var(--navy);
    margin-bottom: 10px;
    transition: .35s;
}

.sm-item:hover h3 {
    color: #f57c00;
}

.sm-item p {
    color: #64748b;
    font-size: 15px;
    line-height: 1.8;
    margin: 0;
}

/* Arrow animation */
.sm-item .arrow {
    position: absolute;
    right: 25px;
    top: 50%;
    transform: translateY(-50%) translateX(15px);

    opacity: 0;
    font-size: 20px;
    color: #ff8c1a;
    transition: .35s;
}

.sm-item:hover .arrow {
    opacity: 1;
    transform: translateY(-50%) translateX(0);
}

@media(max-width:768px) {

    .sm-services {
        grid-template-columns: 1fr;
        gap: 22px;
    }

    .sm-item {
        padding: 22px;
    }

}

/* ═══════════════════════════════════════════════
   RESPONSIVE
═══════════════════════════════════════════════ */
@media(max-width:1024px) {
    .bk-cards {
        grid-template-columns: repeat(2, 1fr);
    }

    .bk-steps {
        grid-template-columns: repeat(3, 1fr);
        gap: 28px;
    }

    .bk-steps::before {
        display: none;
    }

    .bk-stats-grid {
        grid-template-columns: repeat(2, 1fr);
    }

    .bk-testi-grid {
        grid-template-columns: 1fr 1fr;
    }

    .bk-feat-grid {
        grid-template-columns: 1fr 1fr;
    }

    .bk-feat-cell:nth-child(3n) {
        border-right: 1px solid var(--gray-100);
    }

    .bk-feat-cell:nth-child(2n) {
        border-right: none;
    }

    .bk-feat-cell:nth-child(4),
    .bk-feat-cell:nth-child(5),
    .bk-feat-cell:nth-child(6) {
        border-bottom: 1px solid var(--gray-100);
    }

    .bk-feat-cell:nth-child(5),
    .bk-feat-cell:nth-child(6) {
        border-bottom: none;
    }
}

@media(max-width:768px) {
    .bk-sec {
        padding: 64px 0;
    }

    .bk-hero {
        padding: 120px 0 70px;
    }

    .bk-hero-grid,
    .bk-why-grid,
    .bk-contact-grid {
        grid-template-columns: 1fr;
    }

    .bk-hero-right {
        display: none;
    }

    .bk-cards {
        grid-template-columns: 1fr;
    }

    .bk-feat-grid {
        grid-template-columns: 1fr;
    }

    .bk-feat-cell {
        border-right: none !important;
        border-bottom: 1px solid var(--gray-100) !important;
    }

    .bk-feat-cell:last-child {
        border-bottom: none !important;
    }

    .bk-steps {
        grid-template-columns: repeat(2, 1fr);
    }

    .bk-stats-grid {
        grid-template-columns: 1fr 1fr;
    }

    .bk-testi-grid {
        grid-template-columns: 1fr;
    }

    .bk-row2 {
        grid-template-columns: 1fr;
    }

    .bk-stat-cell {
        border-right: none;
        border-bottom: 1px solid rgba(255, 255, 255, .06);
    }

    .bk-stat-cell:last-child {
        border-bottom: none;
    }

    .bk-form-card {
        padding: 24px;
    }
}
</style>

<div class="bk">

    {{-- ══════════════ HERO ══════════════ --}}
    <section class="bk-hero">
        <img src="{{ asset('assets/images/smm.jpg') }}" alt="Hero Background" class="hero-bg-img" />
        <div class="bk-wrap">
            <div class="bk-hero-grid">

                {{-- LEFT --}}
                <div>
                    <h1 class="bk-h1 bk-hero-title">
                        Social Media Marketing<span class="grad-orange"> Banglore</span>
                    </h1>
                    <p class="bk-hero-sub">Grow your brand with professional social media management services designed
                        to increase engagement, generate quality leads, and build lasting customer relationships across
                        today's most popular social platforms</p>

                    <div class="bk-hero-btns">
                        <a href="{{ route('contact') }}" class="bk-btn bk-btn-orange">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2.5" style="width:15px;height:15px">
                                <path
                                    d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.61 3.42 2 2 0 0 1 3.6 1.25h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.96a16 16 0 0 0 6 6l.91-.91a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 21.73 16.92z" />
                            </svg>
                            Get Free Audit →
                        </a>
                        <a href="{{ route('contact') }}" class="bk-btn bk-btn-outline-white">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2.5" style="width:15px;height:15px">
                                <circle cx="12" cy="12" r="10" />
                                <polyline points="12 8 12 12 14 14" />
                            </svg>
                            Consult Now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- ══════════════ SOCIAL MEDIA SERVICES ══════════════ --}}
    <section class="bk-sec">
        <div class="bk-wrap">

            <div class="bk-sec-head">

                <h2 class="bk-h2" style="margin-top:16px;">
                    Social Media Management
                    <span class="grad-orange">Service in Banglore</span>
                </h2>

                <div class="bk-divider"></div>

                <p class="bk-sub">
                    Build your brand, engage your audience, and generate more
                    leads with our professional Social Media Management
                    Services in Banglore. We manage your social media so
                    you can focus on growing your business.
                </p>

            </div>


            <div class="sm-services">

                <div class="sm-item">
                    <div class="sm-icon">📸</div>
                    <div>
                        <h3>Instagram Management</h3>
                        <p>Create engaging posts, reels, stories, profile optimization and audience growth strategies.
                        </p>
                    </div>
                    <span class="arrow">
                        <i class="fas fa-arrow-right"></i>
                    </span>
                </div>

                <div class="sm-item">
                    <div class="sm-icon">📘</div>
                    <div>
                        <h3>Facebook Management</h3>
                        <p>Professional Facebook page management with consistent content, engagement and lead
                            generation.</p>
                    </div>
                    <span class="arrow">
                        <i class="fas fa-arrow-right"></i>
                    </span>
                </div>

                <div class="sm-item">
                    <div class="sm-icon">💼</div>
                    <div>
                        <h3>LinkedIn Marketing</h3>
                        <p>Build authority through professional content and B2B social media marketing.</p>
                    </div>
                    <span class="arrow">
                        <i class="fas fa-arrow-right"></i>
                    </span>
                </div>

                <div class="sm-item">
                    <div class="sm-icon">🎨</div>
                    <div>
                        <h3>Creative Content Design</h3>
                        <p>Premium graphics, carousels, banners and branded social media creatives.</p>
                    </div>
                    <span class="arrow">
                        <i class="fas fa-arrow-right"></i>
                    </span>
                </div>

                <div class="sm-item">
                    <div class="sm-icon">🎥</div>
                    <div>
                        <h3>Reels & Short Videos</h3>
                        <p>High-performing short videos designed to increase reach and engagement.</p>
                    </div>
                    <span class="arrow">
                        <i class="fas fa-arrow-right"></i>
                    </span>
                </div>

                <div class="sm-item">
                    <div class="sm-icon">📢</div>
                    <div>
                        <h3>Meta Ads Management</h3>
                        <p>Facebook & Instagram advertising campaigns focused on quality leads and ROI.</p>
                    </div>
                    <span class="arrow">
                        <i class="fas fa-arrow-right"></i>
                    </span>
                </div>

                <div class="sm-item">
                    <div class="sm-icon">💬</div>
                    <div>
                        <h3>Community Management</h3>
                        <p>Reply to comments, messages and reviews to build customer trust.</p>
                    </div>
                    <span class="arrow">
                        <i class="fas fa-arrow-right"></i>
                    </span>
                </div>

                <div class="sm-item">
                    <div class="sm-icon">📅</div>
                    <div>
                        <h3>Content Planning</h3>
                        <p>Monthly content calendars with consistent posting schedules for your business.</p>
                    </div>
                    <span class="arrow">
                        <i class="fas fa-arrow-right"></i>
                    </span>
                </div>

                <div class="sm-item">
                    <div class="sm-icon">📊</div>
                    <div>
                        <h3>Performance Reports</h3>
                        <p>Detailed monthly analytics, audience insights and growth recommendations.</p>
                    </div>
                    <span class="arrow">
                        <i class="fas fa-arrow-right"></i>
                    </span>
                </div>

                <div class="sm-item">
                    <div class="sm-icon">🚀</div>
                    <div>
                        <h3>Growth Strategy</h3>
                        <p>Customized social media strategies designed for businesses in Banglore.</p>
                    </div>
                    <span class="arrow">
                        <i class="fas fa-arrow-right"></i>
                    </span>
                </div>

            </div>

        </div>
    </section>


    {{-- ══════════════ WHY US ══════════════ --}}

    {{-- =====================================================
     WHY ACCROSIAN — SOCIAL MEDIA MARKETING BANGLORE
===================================================== --}}

    <section class="smm-why">

        <div class="smm-why-wrap">

            {{-- HEADER --}}
            <div class="smm-why-header">

                <div class="smm-why-label">
                    Why Accrosian
                </div>

                <h2 class="smm-why-title">
                    Your brand deserves more
                    than just <span>social media posts.</span>
                </h2>

                <p class="smm-why-intro">
                    We combine creative content, audience psychology,
                    local market understanding and performance marketing
                    to turn your social presence into a real growth channel
                    for your business in Banglore.
                </p>

            </div>


            {{-- GROWTH JOURNEY --}}
            <div class="smm-growth">

                {{-- BIG NUMBER --}}
                <div class="smm-growth-number">
                    04
                    <span>Growth Pillars</span>
                </div>


                {{-- TIMELINE --}}
                <div class="smm-growth-content">

                    {{-- POINT 01 --}}
                    <div class="smm-point">

                        <div class="smm-point-top">
                            <span class="smm-point-no">01</span>

                            <h3>Local Strategy. Global Quality.</h3>
                        </div>

                        <p>
                            Your audience is not the same as everyone else's.
                            We create social media strategies around Banglore's
                            audience, culture, trends and business landscape while
                            maintaining a premium brand identity.
                        </p>

                    </div>


                    {{-- POINT 02 --}}
                    <div class="smm-point">

                        <div class="smm-point-top">
                            <span class="smm-point-no">02</span>

                            <h3>Content That Gives People a Reason to Stop</h3>
                        </div>

                        <p>
                            From scroll-stopping creatives and reels to educational
                            and storytelling content, every piece is designed with
                            one purpose — capture attention and make your brand
                            memorable.
                        </p>

                    </div>


                    {{-- POINT 03 --}}
                    <div class="smm-point">

                        <div class="smm-point-top">
                            <span class="smm-point-no">03</span>

                            <h3>Creativity Backed by Data</h3>
                        </div>

                        <p>
                            We don't rely only on likes and followers. We study
                            reach, engagement, audience behaviour, content
                            performance and conversions to continuously improve
                            your social media strategy.
                        </p>

                    </div>


                    {{-- POINT 04 --}}
                    <div class="smm-point">

                        <div class="smm-point-top">
                            <span class="smm-point-no">04</span>

                            <h3>Built for Real Business Growth</h3>
                        </div>

                        <p>
                            Your social media should support your business goals.
                            Whether you want stronger brand awareness, more enquiries,
                            qualified leads or a powerful online presence, we build
                            campaigns around measurable outcomes.
                        </p>

                    </div>

                </div>

            </div>


            {{-- KEYWORDS --}}
            <div class="smm-keywords">
                <span>Strategy</span>
                <span>Content</span>
                <span>Reels</span>
                <span>Branding</span>
                <span>Engagement</span>
                <span>Performance</span>
                <span>Leads</span>
                <span>Banglore</span>
            </div>


            {{-- FINAL STATEMENT --}}
            <div class="smm-why-statement">

                <p>
                    We don't just manage your social media.
                    We build a digital presence that makes people
                    <strong>notice, remember and choose your brand.</strong>
                </p>

            </div>

        </div>

    </section>
    <!-- <section class="bk-sec bk-sec-alt">
        <div class="bk-wrap">
            <div class="bk-why-grid">
                {{-- Left --}}
                <div>
                    <span class="bk-eyebrow" style="margin-bottom:18px;display:inline-flex;">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2.5">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                        </svg>
                        Why Accrosian
                    </span>
                    <h2 class="bk-h2">Built on <span class="grad-orange">Trust &amp; Compliance</span></h2>
                    <div class="bk-divider" style="margin:14px 0 20px;"></div>
                    <p class="bk-sub" style="margin-top:0;margin-bottom:32px;">We engineer solutions with security-first
                        architecture so your institution meets every regulatory standard without compromise.</p>

                    <div class="bk-feature-list">
                        <div class="bk-feat-item">
                            <div class="bk-feat-ico"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2.5">
                                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                                </svg></div>
                            <div class="bk-feat-body"><strong>Bank Grade Security &amp; Compliance</strong><span>PCI
                                    DSS, ISO 27001, RBI and GDPR compliant architecture out of the box.</span></div>
                        </div>
                        <div class="bk-feat-item">
                            <div class="bk-feat-ico"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2.5">
                                    <polyline points="22 12 18 12 15 21 9 3 6 12 2 12" />
                                </svg></div>
                            <div class="bk-feat-body"><strong>Scalable Infrastructure</strong><span>Cloud-native
                                    architecture designed to handle millions of transactions with zero downtime.</span>
                            </div>
                        </div>
                        <div class="bk-feat-item">
                            <div class="bk-feat-ico"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2.5">
                                    <circle cx="12" cy="12" r="10" />
                                    <polyline points="12 6 12 12 16 14" />
                                </svg></div>
                            <div class="bk-feat-body"><strong>Real-Time Transaction Systems</strong><span>Sub-second
                                    processing with live reconciliation and full audit trails.</span></div>
                        </div>
                        <div class="bk-feat-item">
                            <div class="bk-feat-ico"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2.5">
                                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                                    <circle cx="9" cy="7" r="4" />
                                    <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                </svg></div>
                            <div class="bk-feat-body"><strong>Seamless User Experience</strong><span>Intuitive
                                    interfaces that make complex banking operations feel effortless.</span></div>
                        </div>
                        <div class="bk-feat-item">
                            <div class="bk-feat-ico"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2.5">
                                    <path
                                        d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.61 3.42 2 2 0 0 1 3.6 1.25h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.96a16 16 0 0 0 6 6l.91-.91a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 21.73 16.92z" />
                                </svg></div>
                            <div class="bk-feat-body"><strong>24/7 Dedicated Support</strong><span>Round-the-clock
                                    technical support with SLA-guaranteed response times.</span></div>
                        </div>
                    </div>
                </div>

                {{-- Right: compliance card --}}
                <div class="bk-right-full-image">
                    <img src="{{ asset('assets/images/banks.jpg') }}" alt="Banking Solutions">
                </div> -->
    <!-- <div>
                    <div class="bk-comp-card">
                        <div class="bk-comp-head">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2.5">
                                <path d="M9 11l3 3L22 4" />
                                <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11" />
                            </svg>
                            <span>Compliance Certifications</span>
                        </div>
                        <div>
                            <div class="bk-comp-row">
                                <div class="bk-comp-tick"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="3">
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg></div>PCI DSS Level 1 Compliant
                            </div>
                            <div class="bk-comp-row">
                                <div class="bk-comp-tick"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="3">
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg></div>ISO/IEC 27001:2013 Certified
                            </div>
                            <div class="bk-comp-row">
                                <div class="bk-comp-tick"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="3">
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg></div>GDPR &amp; Data Privacy Ready
                            </div>
                            <div class="bk-comp-row">
                                <div class="bk-comp-tick"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="3">
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg></div>RBI / SEBI Regulatory Aligned
                            </div>
                            <div class="bk-comp-row">
                                <div class="bk-comp-tick"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="3">
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg></div>SOC 2 Type II Audited
                            </div>
                            <div class="bk-comp-row">
                                <div class="bk-comp-tick"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="3">
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg></div>AML / KYC Framework Integrated
                            </div>
                        </div>
                        <div class="bk-badges-row">
                            <span class="bk-badge-pill"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2.5">
                                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                                </svg>Secure</span>
                            <span class="bk-badge-pill"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2.5">
                                    <rect x="3" y="11" width="18" height="11" rx="2" />
                                    <path d="M7 11V7a5 5 0 0 1 10 0v4" />
                                </svg>Encrypted</span>
                            <span class="bk-badge-pill"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2.5">
                                    <polyline points="9 11 12 14 22 4" />
                                    <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11" />
                                </svg>Compliant</span>
                            <span class="bk-badge-pill"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2.5">
                                    <circle cx="12" cy="12" r="10" />
                                    <polyline points="12 6 12 12 16 14" />
                                </svg>24/7</span>
                        </div>
                    </div>
                </div> -->
    <!-- </div>
</div>
</section> -->


    {{-- ══════════════ PROCESS ══════════════ --}}
    {{-- =====================================================
     OUR PROCESS — SOCIAL MEDIA MARKETING BANGLORE   
===================================================== --}}

    <section class="smm-process">

        <div class="smm-process-wrap">

            {{-- HEADER --}}
            <div class="smm-process-head">

                <div class="smm-process-label">
                    Our Process
                </div>

                <h2 class="smm-process-title">
                    From an idea to
                    <span>real growth.</span>
                </h2>

                <p class="smm-process-intro">
                    We don't randomly post content and hope it works.
                    Every campaign follows a strategic creative process —
                    from understanding your brand and audience to creating,
                    publishing and continuously improving what performs.
                </p>

            </div>


            {{-- PROCESS JOURNEY --}}
            <div class="smm-process-track">

                {{-- 01 --}}
                <div class="smm-process-step">

                    <div class="smm-process-number">
                        01
                    </div>

                    <div class="smm-process-content">

                        <h3>
                            Discover
                        </h3>

                        <p>
                            We understand your business, audience,
                            competitors and current social presence.
                        </p>

                        <span class="smm-process-tag">
                            Understand
                        </span>

                    </div>

                </div>


                {{-- 02 --}}
                <div class="smm-process-step">

                    <div class="smm-process-number">
                        02
                    </div>

                    <div class="smm-process-content">

                        <h3>
                            Strategize
                        </h3>

                        <p>
                            We build a content and growth strategy
                            designed around your business goals.
                        </p>

                        <span class="smm-process-tag">
                            Plan
                        </span>

                    </div>

                </div>


                {{-- 03 --}}
                <div class="smm-process-step">

                    <div class="smm-process-number">
                        03
                    </div>

                    <div class="smm-process-content">

                        <h3>
                            Create
                        </h3>

                        <p>
                            Reels, creatives, captions and campaigns
                            are crafted to capture attention.
                        </p>

                        <span class="smm-process-tag">
                            Create
                        </span>

                    </div>

                </div>


                {{-- 04 --}}
                <div class="smm-process-step">

                    <div class="smm-process-number">
                        04
                    </div>

                    <div class="smm-process-content">

                        <h3>
                            Publish
                        </h3>

                        <p>
                            Content goes live with the right platform,
                            format, timing and audience in mind.
                        </p>

                        <span class="smm-process-tag">
                            Launch
                        </span>

                    </div>

                </div>


                {{-- 05 --}}
                <div class="smm-process-step">

                    <div class="smm-process-number">
                        05
                    </div>

                    <div class="smm-process-content">

                        <h3>
                            Optimize
                        </h3>

                        <p>
                            We study reach, engagement and audience
                            behaviour to understand what performs.
                        </p>

                        <span class="smm-process-tag">
                            Improve
                        </span>

                    </div>

                </div>


                {{-- 06 --}}
                <div class="smm-process-step">

                    <div class="smm-process-number">
                        06
                    </div>

                    <div class="smm-process-content">

                        <h3>
                            Grow
                        </h3>

                        <p>
                            Winning ideas become stronger campaigns,
                            better reach and sustainable brand growth.
                        </p>

                        <span class="smm-process-tag">
                            Scale
                        </span>

                    </div>

                </div>

            </div>


            {{-- BOTTOM STATEMENT --}}
            <div class="smm-process-bottom">

                <p>
                    <strong>Every post has a purpose.</strong>
                    Every campaign has a direction.
                    Every result teaches us what to do next.
                </p>

                <div class="smm-process-arrow">
                    →
                </div>

            </div>

        </div>

    </section>


    {{-- ══════════════ FEATURES ══════════════ --}}
    {{-- =====================================================
     WHAT WE BUILD — SOCIAL MEDIA MARKETING Banglore
===================================================== --}}

    <section class="smm-services">

        <div class="smm-services-wrap">

            {{-- HEADER --}}
            <div class="smm-services-head">

                <div class="smm-services-label">
                    What We Build
                </div>

                <h2 class="smm-services-title">
                    Everything your brand needs
                    to <span>win attention.</span>
                </h2>

                <p class="smm-services-intro">
                    Social media is more than posting every day.
                    We bring strategy, creativity and performance together
                    to build a digital presence that actually moves your
                    business forward in Banglore.
                </p>

            </div>


            {{-- SERVICE LIST --}}
            <div class="smm-service-list">


                {{-- 01 --}}
                <div class="smm-service-item">

                    <div class="smm-service-number">
                        01
                    </div>

                    <h3 class="smm-service-name">
                        Social Media Strategy
                    </h3>

                    <p class="smm-service-description">
                        Audience research, competitor analysis,
                        content pillars and a clear monthly growth direction.
                    </p>

                    <div class="smm-service-type">
                        Strategy
                    </div>

                    <div class="smm-service-progress" style="--progress: 88%;">
                    </div>

                </div>


                {{-- 02 --}}
                <div class="smm-service-item">

                    <div class="smm-service-number">
                        02
                    </div>

                    <h3 class="smm-service-name">
                        Reels & Short-Form Content
                    </h3>

                    <p class="smm-service-description">
                        Scroll-stopping short videos designed around
                        trends, storytelling and audience behaviour.
                    </p>

                    <div class="smm-service-type">
                        Video
                    </div>

                    <div class="smm-service-progress"></div>

                </div>


                {{-- 03 --}}
                <div class="smm-service-item">

                    <div class="smm-service-number">
                        03
                    </div>

                    <h3 class="smm-service-name">
                        Creative Content
                    </h3>

                    <p class="smm-service-description">
                        Premium social creatives, carousels and visual
                        content that keep your brand recognisable.
                    </p>

                    <div class="smm-service-type">
                        Creative
                    </div>

                    <div class="smm-service-progress"></div>

                </div>


                {{-- 04 --}}
                <div class="smm-service-item">

                    <div class="smm-service-number">
                        04
                    </div>

                    <h3 class="smm-service-name">
                        Brand Storytelling
                    </h3>

                    <p class="smm-service-description">
                        Turning your products, services and ideas into
                        stories people can understand and remember.
                    </p>

                    <div class="smm-service-type">
                        Branding
                    </div>

                    <div class="smm-service-progress"></div>

                </div>


                {{-- 05 --}}
                <div class="smm-service-item">

                    <div class="smm-service-number">
                        05
                    </div>

                    <h3 class="smm-service-name">
                        Community & Engagement
                    </h3>

                    <p class="smm-service-description">
                        Building meaningful conversations, responding
                        to your audience and strengthening brand trust.
                    </p>

                    <div class="smm-service-type">
                        Engagement
                    </div>

                    <div class="smm-service-progress"></div>

                </div>


                {{-- 06 --}}
                <div class="smm-service-item">

                    <div class="smm-service-number">
                        06
                    </div>

                    <h3 class="smm-service-name">
                        Performance Marketing
                    </h3>

                    <p class="smm-service-description">
                        Paid campaigns focused on reach, enquiries,
                        leads and measurable business outcomes.
                    </p>

                    <div class="smm-service-type">
                        Growth
                    </div>

                    <div class="smm-service-progress"></div>

                </div>


                {{-- 07 --}}
                <div class="smm-service-item">

                    <div class="smm-service-number">
                        07
                    </div>

                    <h3 class="smm-service-name">
                        Analytics & Optimization
                    </h3>

                    <p class="smm-service-description">
                        We track what people respond to and continuously
                        improve your content and campaign performance.
                    </p>

                    <div class="smm-service-type">
                        Analytics
                    </div>

                    <div class="smm-service-progress"></div>

                </div>


            </div>


            {{-- BOTTOM STATEMENT --}}
            <div class="smm-services-bottom">

                <div class="smm-services-bottom-text">

                    <p>
                        We don't create content just to
                        <strong>fill your feed.</strong>
                        We create content with a reason to exist.
                    </p>

                    <div class="smm-services-bottom-small">
                        Strategy · Creativity · Performance · Growth
                    </div>

                </div>


                <div class="smm-services-mark">
                    ↗
                </div>

            </div>

        </div>

    </section>


    {{-- ══════════════ TECH STACK ══════════════ --}}
    <section class="bk-sec bk-sec-alt">
        <div class="bk-wrap">
            <div class="bk-sec-head">
                <span class="bk-eyebrow">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2.5">
                        <polyline points="16 18 22 12 16 6" />
                        <polyline points="8 6 2 12 8 18" />
                    </svg>
                    Tech Stack
                </span>
                <h2 class="bk-h2" style="margin-top:16px;">Tools &amp; <span class="grad-blue">Technologies</span></h2>
                <div class="bk-divider"></div>
                <p class="bk-sub">Best-in-class technologies to build solutions you can rely on.</p>
            </div>
            <div class="bk-pills">
                <div class="bk-pill"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                        stroke="#2e6aff" stroke-width="2">
                        <polyline points="16 18 22 12 16 6" />
                        <polyline points="8 6 2 12 8 18" />
                    </svg><span>Open Banking APIs</span></div>
                <div class="bk-pill"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                        stroke="#d97706" stroke-width="2">
                        <rect x="2" y="5" width="20" height="14" rx="2" />
                        <line x1="2" y1="10" x2="22" y2="10" />
                    </svg><span>Payment Gateways</span></div>
                <div class="bk-pill"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                        stroke="#0891b2" stroke-width="2">
                        <path d="M18 10h-1.26A8 8 0 1 0 9 20h9a5 5 0 0 0 0-10z" />
                    </svg><span>Cloud Infrastructure</span></div>
                <div class="bk-pill"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                        stroke="#f97316" stroke-width="2">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                    </svg><span>Security Protocols</span></div>
                <div class="bk-pill"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                        stroke="#7c3aed" stroke-width="2">
                        <ellipse cx="12" cy="5" rx="9" ry="3" />
                        <path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5" />
                        <path d="M3 12c0 1.66 4 3 9 3s9-1.34 9-3" />
                    </svg><span>Data Analytics</span></div>
                <div class="bk-pill"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                        stroke="#16a34a" stroke-width="2">
                        <rect x="2" y="3" width="20" height="14" rx="2" />
                        <path d="M8 21h8M12 17v4" />
                    </svg><span>Microservices</span></div>
                <div class="bk-pill"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                        stroke="#2e6aff" stroke-width="2">
                        <circle cx="12" cy="12" r="10" />
                        <line x1="2" y1="12" x2="22" y2="12" />
                        <path
                            d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z" />
                    </svg><span>Blockchain Ledger</span></div>
                <div class="bk-pill"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                        stroke="#0891b2" stroke-width="2">
                        <path
                            d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z" />
                    </svg><span>AI / ML Models</span></div>
            </div>
        </div>
    </section>

    {{-- ══════════════ CTA ══════════════ --}}
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