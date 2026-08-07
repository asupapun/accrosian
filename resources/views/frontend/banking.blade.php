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
    font-size: clamp(2.6rem, 5vw, 3.9rem);
    font-weight: 800;
    line-height: 1.08;
    letter-spacing: -.03em;
    color: var(--navy);
}

.bk-h2 {
    font-family: var(--ff-head);
    font-size: clamp(1.9rem, 3.5vw, 2.8rem);
    font-weight: 800;
    line-height: 1.1;
    letter-spacing: -.025em;
    color: var(--navy);
}

.bk-h2-white {
    color: #fff;
}

.bk-sub {
    font-size: 1.05rem;
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
    min-height: 70vh;
    display: flex;
    align-items: center;
    background:
        radial-gradient(ellipse 65% 55% at 65% 45%, rgba(26, 79, 214, .18) 0%, transparent 65%),
        radial-gradient(ellipse 40% 35% at 15% 80%, rgba(249, 115, 22, .1) 0%, transparent 60%),
        var(--navy);
    padding: 140px 0 90px;
    position: relative;
    overflow: hidden;
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
    display: grid;
    grid-template-columns: 1fr 1fr;
    max-width: 1300px;
    gap: 64px;
    align-items: center;
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
    max-width: 500px;
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

/* ═══════════════════════════════════════════════
   WHY US — alt bg
═══════════════════════════════════════════════ */
.bk-why-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 72px;
    align-items: center;
}

.bk-feature-list {
    display: flex;
    flex-direction: column;
    gap: 16px;
}

.bk-feat-item {
    display: flex;
    align-items: flex-start;
    gap: 16px;
    background: var(--navy-light);
    border: 1px solid var(--navy-2);
    border-radius: 14px;
    padding: 18px 20px;
    box-shadow: var(--shadow-sm);
    transition: all .28s;
}

.bk-feat-item:hover {
    border-color: var(--glass-border-hover);
    box-shadow: 0 8px 28px var(--navy-800);
    transform: translateY(-4px)
}

.bk-feat-ico {
    width: 42px;
    height: 42px;
    border-radius: 11px;
    flex-shrink: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    background: rgba(249, 115, 22, .08);
    border: 1px solid rgba(249, 115, 22, .15);
}

.bk-feat-ico svg {
    width: 20px;
    height: 20px;
    color: var(--orange);
}

.bk-feat-body strong {
    display: block;
    font-family: var(--ff-head);
    font-size: .93rem;
    font-weight: 700;
    color: #ffff;
    margin-bottom: 3px;
}

.bk-feat-body span {
    font-size: .82rem;
    color: #ffff;
    line-height: 1.6;
}

.bk-right-full-image {
    height: 100%;
    min-height: 780px;
    border-radius: 24px;
    overflow: hidden;
    position: relative;
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.25);
}

.bk-right-full-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    transition: transform .6s ease;
}

.bk-right-full-image:hover img {
    transform: scale(1.04);
}

.bk-why-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 72px;
    align-items: stretch;
}

/* compliance card — right side */
/* .bk-comp-card {
    background: var(--navy-3);
    border-radius: var(--r2);
    padding: 36px;
    box-shadow: var(--shadow-xl), 0 0 60px rgba(26, 79, 214, .2);
    position: relative;
    overflow: hidden;
}

.bk-comp-card::before {
    content: '';
    position: absolute;
    top: -60px;
    right: -60px;
    width: 200px;
    height: 200px;
    border-radius: 50%;
    background: radial-gradient(circle, rgba(46, 106, 255, .2), transparent 70%);
}

.bk-comp-head {
    display: flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 24px;
}

.bk-comp-head svg {
    color: #22d3ee;
    width: 20px;
    height: 20px;
    flex-shrink: 0;
}

.bk-comp-head span {
    font-family: var(--ff-head);
    font-size: 1.05rem;
    font-weight: 700;
    color: #fff;
}

.bk-comp-row {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 12px 0;
    border-bottom: 1px solid rgba(255, 255, 255, .06);
    font-size: .875rem;
    color: rgba(255, 255, 255, .8);
}

.bk-comp-row:last-child {
    border-bottom: none;
}

.bk-comp-tick {
    width: 22px;
    height: 22px;
    border-radius: 50%;
    flex-shrink: 0;
    background: rgba(34, 211, 238, .12);
    border: 1px solid rgba(34, 211, 238, .3);
    display: flex;
    align-items: center;
    justify-content: center;
}

.bk-comp-tick svg {
    width: 11px;
    height: 11px;
    color: #22d3ee;
}

.bk-badges-row {
    display: flex;
    gap: 8px;
    flex-wrap: wrap;
    margin-top: 24px;
}

.bk-badge-pill {
    display: inline-flex;
    align-items: center;
    gap: 5px;
    font-family: var(--ff-mono);
    font-size: .68rem;
    letter-spacing: .08em;
    text-transform: uppercase;
    color: rgba(255, 255, 255, .55);
    border: 1px solid rgba(255, 255, 255, .1);
    padding: 5px 11px;
    border-radius: 100px;
}

.bk-badge-pill svg {
    width: 11px;
    height: 11px;
    color: var(--gold);
} */

/* ═══════════════════════════════════════════════
   PROCESS — dark
═══════════════════════════════════════════════ */
.bk-steps {
    display: grid;
    grid-template-columns: repeat(6, 1fr);
    gap: 0;
    position: relative;
    margin-top: 64px;
}

.bk-steps::before {
    content: '';
    position: absolute;
    top: 27px;
    left: 8%;
    right: 8%;
    height: 1px;
    background: linear-gradient(90deg, transparent, rgba(46, 106, 255, .4) 25%, rgba(249, 115, 22, .4) 75%, transparent);
}

.bk-step {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    padding: 0 10px;
}

.bk-step-circle {
    width: 54px;
    height: 54px;
    border-radius: 50%;
    background: rgba(255, 255, 255, .05);
    border: 1px solid rgba(46, 106, 255, .3);
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    z-index: 1;
    margin-bottom: 18px;
    transition: all .3s;
    color: #7da8ff;
}

.bk-step-circle svg {
    width: 22px;
    height: 22px;
}

.bk-step:hover .bk-step-circle {
    background: rgba(46, 106, 255, .15);
    border-color: rgba(46, 106, 255, .5);
    box-shadow: 0 0 24px rgba(46, 106, 255, .3);
}

.bk-step-label {
    font-family: var(--ff-head);
    font-size: .78rem;
    font-weight: 700;
    color: rgba(255, 255, 255, .9);
    margin-bottom: 5px;
}

.bk-step-desc {
    font-size: .7rem;
    color: rgba(255, 255, 255, .38);
    line-height: 1.55;
}

/* ═══════════════════════════════════════════════
   FEATURES GRID — white bg
═══════════════════════════════════════════════ */
.bk-feat-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    border: 1px solid var(--gray-100);
    border-radius: var(--r2);
    overflow: hidden;
    box-shadow: var(--shadow-md);
}

.bk-feat-cell {
    display: flex;
    align-items: flex-start;
    gap: 16px;
    padding: 34px 28px;
    border-right: 1px solid var(--gray-100);
    border-bottom: 1px solid var(--gray-100);
    background: var(--navy-light);
    transition: background .25s;
}

.bk-feat-cell:nth-child(3n) {
    border-right: none;
}

.bk-feat-cell:nth-child(4),
.bk-feat-cell:nth-child(5),
.bk-feat-cell:nth-child(6) {
    border-bottom: none;
}

.bk-feat-cell:hover {
    background: var(--navy-2);
}

.bk-feat-cell-ico {
    width: 46px;
    height: 46px;
    border-radius: 12px;
    flex-shrink: 0;
    display: flex;
    align-items: center;
    justify-content: center;
}

.bk-feat-cell-ico svg {
    width: 22px;
    height: 22px;
}

.bk-feat-cell-txt strong {
    display: block;
    font-family: var(--ff-head);
    font-size: .93rem;
    font-weight: 700;
    color: #ffff;
    margin-bottom: 5px;
}

.bk-feat-cell-txt p {
    font-size: .82rem;
    color: #ffff;
    line-height: 1.65;
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

/* ═══════════════════════════════════════════════
   STATS BAR — navy
═══════════════════════════════════════════════ */
/* .bk-stats {
    background: var(--navy-light);
    border-top: 1px solid rgba(46, 106, 255, .12);
    border-bottom: 1px solid rgba(46, 106, 255, .12);
}

.bk-stats-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
}

.bk-stat-cell {
    text-align: center;
    padding: 64px 24px;
    border-right: 1px solid rgba(255, 255, 255, .06);
}

.bk-stat-cell:last-child {
    border-right: none;
}

.bk-stat-em {
    font-size: 1.6rem;
    margin-bottom: 10px;
}

.bk-stat-num {
    font-family: var(--ff-head);
    font-size: clamp(2rem, 3.5vw, 3rem);
    font-weight: 800;
    letter-spacing: -.03em;
}

.bk-stat-lbl {
    font-size: .82rem;
    color: rgba(255, 255, 255, .45);
    margin-top: 6px;
} */

/* ═══════════════════════════════════════════════
   TESTIMONIALS — white bg
═══════════════════════════════════════════════ */
.bk-testi-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 24px;
}

.bk-testi {
    background: var(--white);
    border: 1px solid var(--gray-100);
    border-radius: var(--r2);
    padding: 30px;
    box-shadow: var(--shadow-card);
    transition: all .3s;
    position: relative;
    overflow: hidden;
}

.bk-testi::after {
    content: '"';
    position: absolute;
    top: -10px;
    right: 20px;
    font-size: 6rem;
    line-height: 1;
    color: rgba(249, 115, 22, .07);
    font-family: Georgia, serif;
    pointer-events: none;
}

.bk-testi:hover {
    border-color: var(--glass-border-hover);
    box-shadow: 0 8px 28px var(--navy-2);
    transform: translateY(-4px)
}

.bk-stars {
    color: var(--gold);
    font-size: 1rem;
    letter-spacing: 2px;
    margin-bottom: 14px;
}

.bk-testi-q {
    font-size: .9rem;
    color: var(--black);
    line-height: 1.75;
    margin-bottom: 22px;
    font-style: italic;
}

.bk-testi-author {
    display: flex;
    align-items: center;
    gap: 12px;
}

.bk-testi-av {
    width: 42px;
    height: 42px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-family: var(--ff-head);
    font-size: .88rem;
    font-weight: 700;
    color: #fff;
    flex-shrink: 0;
}

.bk-testi-info strong {
    display: block;
    font-size: .875rem;
    font-weight: 700;
    color: var(--navy);
}

.bk-testi-info span {
    font-size: .75rem;
    color: var(--black);
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

.section-tag {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: var(--navy-light);
    border: 1px solid rgba(232, 117, 10, 0.3);
    color: var(--white);
    font-family: var(--font-display);
    font-size: 0.78rem;
    font-weight: 600;
    letter-spacing: 0.1em;
    text-transform: uppercase;
    padding: 6px 16px;
    border-radius: 100px;
    margin-bottom: 20px;
}

.section-tag::before {
    content: "";
    width: 6px;
    height: 6px;
    background: var(--orange);
    border-radius: 50%;
}

/* ═══════════════════════════════════════════════
   CONTACT FORM — alt bg
═══════════════════════════════════════════════ */
/* .bk-contact-grid {
    display: grid;
    grid-template-columns: 1fr 1.5fr;
    gap: 64px;
    align-items: start;
}

.bk-contact-info h3 {
    font-family: var(--ff-head);
    font-size: 1.6rem;
    font-weight: 800;
    color: var(--navy);
    margin-bottom: 12px;
    line-height: 1.2;
}

.bk-contact-info p {
    font-size: .9rem;
    color: var(--gray-500);
    margin-bottom: 30px;
    line-height: 1.7;
}

.bk-contact-detail {
    display: flex;
    align-items: center;
    gap: 12px;
    font-size: .9rem;
    color: var(--gray-700);
    margin-bottom: 14px;
}

.bk-contact-detail svg {
    color: var(--orange);
    width: 18px;
    height: 18px;
    flex-shrink: 0;
}

.bk-form-card {
    background: var(--white);
    border: 1px solid var(--gray-100);
    border-radius: var(--r2);
    padding: 36px;
    box-shadow: var(--shadow-lg);
}

.bk-form {
    display: flex;
    flex-direction: column;
    gap: 16px;
}

.bk-row2 {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 14px;
}

.bk-input {
    background: var(--gray-50);
    border: 1.5px solid var(--gray-100);
    border-radius: 10px;
    padding: 13px 16px;
    color: var(--gray-900);
    font-family: var(--ff-body);
    font-size: .9rem;
    outline: none;
    transition: all .25s;
    width: 100%;
}

.bk-input::placeholder {
    color: var(--gray-400);
}

.bk-input:focus {
    border-color: rgba(46, 106, 255, .4);
    background: var(--white);
    box-shadow: 0 0 0 3px rgba(46, 106, 255, .08);
}

textarea.bk-input {
    resize: vertical;
    min-height: 105px;
} */

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
        <img src="{{ asset('assets/images/hero-banking.png') }}" alt="Hero Background" class="hero-bg-img" />
        <div class="bk-wrap">
            <div class="bk-hero-grid">

                {{-- LEFT --}}
                <div>
                    <h1 class="bk-h1 bk-hero-title">
                        Secure &amp; Scalable<br>
                        <span class="grad-orange">Banking Solutions</span>
                    </h1>
                    <p class="bk-hero-sub">Empowering financial institutions with modern, secure, and high-performance
                        digital solutions built for the future of finance.</p>

                    <div class="bk-hero-btns">
                        <a href="{{ route('contact') }}" class="bk-btn bk-btn-orange">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2.5" style="width:15px;height:15px">
                                <path
                                    d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.61 3.42 2 2 0 0 1 3.6 1.25h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.96a16 16 0 0 0 6 6l.91-.91a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 21.73 16.92z" />
                            </svg>
                            Get a Quote
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


    {{-- ══════════════ SERVICES ══════════════ --}}
    <section class="bk-sec">
        <div class="bk-wrap">
            <div class="bk-sec-head">
                <span class="bk-eyebrow">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2.5">
                        <rect x="2" y="3" width="20" height="14" rx="2" />
                        <line x1="8" y1="21" x2="16" y2="21" />
                        <line x1="12" y1="17" x2="12" y2="21" />
                    </svg>
                    Core Services
                </span>
                <h2 class="bk-h2" style="margin-top:16px;">Full-Spectrum <span class="grad-orange">Banking
                        Technology</span></h2>
                <div class="bk-divider"></div>
                <p class="bk-sub">End-to-end digital solutions built specifically for banks, fintechs, and financial
                    enterprises.</p>
            </div>

            <div class="bk-cards">
                <div class="bk-card">
                    <div class="bk-card-ico"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2">
                            <rect x="2" y="5" width="20" height="14" rx="2" />
                            <line x1="2" y1="10" x2="22" y2="10" />
                        </svg></div>
                    <div class="bk-card-title">Digital Banking Solutions</div>
                    <div class="bk-card-desc">Internet banking portals, dashboards, and customer-facing digital banking
                        experiences built for scale.</div>
                    <a href="{{ route('contact') }}" class="bk-card-link">Learn more <svg
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2.5">
                            <path d="M5 12h14M12 5l7 7-7 7" />
                        </svg></a>
                </div>
                <div class="bk-card">
                    <div class="bk-card-ico"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2">
                            <ellipse cx="12" cy="5" rx="9" ry="3" />
                            <path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5" />
                            <path d="M3 12c0 1.66 4 3 9 3s9-1.34 9-3" />
                        </svg></div>
                    <div class="bk-card-title">Core Banking System Development</div>
                    <div class="bk-card-desc">Robust, scalable core banking engines with real-time processing and
                        multi-currency support.</div>
                    <a href="{{ route('contact') }}" class="bk-card-link">Learn more <svg
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2.5">
                            <path d="M5 12h14M12 5l7 7-7 7" />
                        </svg></a>
                </div>
                <div class="bk-card">
                    <div class="bk-card-ico"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2">
                            <path d="M20 12V22H4V12" />
                            <path d="M22 7H2v5h20V7z" />
                            <path d="M12 22V7" />
                            <path d="M12 7H7.5a2.5 2.5 0 0 1 0-5C11 2 12 7 12 7z" />
                            <path d="M12 7h4.5a2.5 2.5 0 0 0 0-5C13 2 12 7 12 7z" />
                        </svg></div>
                    <div class="bk-card-title">Payment Gateway Integration</div>
                    <div class="bk-card-desc">Seamless multi-gateway integration supporting cards, UPI, NEFT, RTGS, and
                        global payment rails.</div>
                    <a href="{{ route('contact') }}" class="bk-card-link">Learn more <svg
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2.5">
                            <path d="M5 12h14M12 5l7 7-7 7" />
                        </svg></a>
                </div>
                <div class="bk-card">
                    <div class="bk-card-ico"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2">
                            <rect x="5" y="2" width="14" height="20" rx="2" />
                            <line x1="12" y1="18" x2="12.01" y2="18" />
                        </svg></div>
                    <div class="bk-card-title">Mobile Banking App Development</div>
                    <div class="bk-card-desc">Cross-platform iOS &amp; Android banking apps with biometric auth and
                        real-time push notifications.</div>
                    <a href="{{ route('contact') }}" class="bk-card-link">Learn more <svg
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2.5">
                            <path d="M5 12h14M12 5l7 7-7 7" />
                        </svg></a>
                </div>
                <div class="bk-card">
                    <div class="bk-card-ico"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2">
                            <path
                                d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z" />
                            <line x1="12" y1="9" x2="12" y2="13" />
                            <line x1="12" y1="17" x2="12.01" y2="17" />
                        </svg></div>
                    <div class="bk-card-title">Fraud Detection &amp; Security Systems</div>
                    <div class="bk-card-desc">AI-powered fraud detection with real-time transaction monitoring and smart
                        anomaly alerts.</div>
                    <a href="{{ route('contact') }}" class="bk-card-link">Learn more <svg
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2.5">
                            <path d="M5 12h14M12 5l7 7-7 7" />
                        </svg></a>
                </div>
                <div class="bk-card">
                    <div class="bk-card-ico"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2">
                            <polyline points="16 18 22 12 16 6" />
                            <polyline points="8 6 2 12 8 18" />
                        </svg></div>
                    <div class="bk-card-title">API &amp; Fintech Integration</div>
                    <div class="bk-card-desc">Open banking APIs, third-party fintech integrations, and microservices
                        architecture design.</div>
                    <a href="{{ route('contact') }}" class="bk-card-link">Learn more <svg
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2.5">
                            <path d="M5 12h14M12 5l7 7-7 7" />
                        </svg></a>
                </div>
            </div>
        </div>
    </section>


    {{-- ══════════════ WHY US ══════════════ --}}
    <section class="bk-sec bk-sec-alt">
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
                            <div class="bk-feat-body"><strong>Bank-Grade Security &amp; Compliance</strong><span>PCI
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
                </div>
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
            </div>
        </div>
    </section>


    {{-- ══════════════ PROCESS ══════════════ --}}
    <section class="bk-sec bk-sec-navy">
        <div class="bk-wrap">
            <div class="bk-sec-head">
                <span class="bk-eyebrow">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2.5">
                        <circle cx="12" cy="12" r="3" />
                        <path d="M19.07 4.93a10 10 0 0 0-14.14 0M4.93 19.07a10 10 0 0 0 14.14 0" />
                    </svg>
                    Our Process
                </span>
                <h2 class="bk-h2 bk-h2-white" style="margin-top:16px;">How We <span class="grad-blue">Build &amp;
                        Deliver</span></h2>
                <div class="bk-divider"></div>
                <p class="bk-sub bk-sub-white">A proven six-stage methodology ensuring security, compliance, and
                    performance at every milestone.</p>
            </div>

            <div class="bk-steps">
                <div class="bk-step">
                    <div class="bk-step-circle"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2">
                            <circle cx="11" cy="11" r="8" />
                            <line x1="21" y1="21" x2="16.65" y2="16.65" />
                        </svg></div>
                    <div class="bk-step-label">Research &amp; Analysis</div>
                    <div class="bk-step-desc">Deep-dive into requirements, workflows &amp; compliance needs.</div>
                </div>
                <div class="bk-step">
                    <div class="bk-step-circle"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2">
                            <rect x="3" y="3" width="18" height="18" rx="2" />
                            <path d="M3 9h18M9 21V9" />
                        </svg></div>
                    <div class="bk-step-label">Architecture &amp; Planning</div>
                    <div class="bk-step-desc">Compliance-first system design &amp; security architecture.</div>
                </div>
                <div class="bk-step">
                    <div class="bk-step-circle"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2">
                            <rect x="3" y="3" width="18" height="18" rx="2" />
                            <circle cx="8.5" cy="8.5" r="1.5" />
                            <polyline points="21 15 16 10 5 21" />
                        </svg></div>
                    <div class="bk-step-label">Secure UI/UX Design</div>
                    <div class="bk-step-desc">Intuitive interfaces crafted for trust &amp; clarity.</div>
                </div>
                <div class="bk-step">
                    <div class="bk-step-circle"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2">
                            <polyline points="16 18 22 12 16 6" />
                            <polyline points="8 6 2 12 8 18" />
                        </svg></div>
                    <div class="bk-step-label">Development &amp; Integration</div>
                    <div class="bk-step-desc">Agile dev with full API &amp; third-party integration.</div>
                </div>
                <div class="bk-step">
                    <div class="bk-step-circle"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                        </svg></div>
                    <div class="bk-step-label">Security Audit</div>
                    <div class="bk-step-desc">Pen-testing, vulnerability scans &amp; compliance sign-off.</div>
                </div>
                <div class="bk-step">
                    <div class="bk-step-circle"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />
                            <polyline points="22 4 12 14.01 9 11.01" />
                        </svg></div>
                    <div class="bk-step-label">Deploy &amp; Maintain</div>
                    <div class="bk-step-desc">Live deployment with 24/7 monitoring &amp; ongoing support.</div>
                </div>
            </div>
        </div>
    </section>


    {{-- ══════════════ FEATURES ══════════════ --}}
    <section class="bk-sec">
        <div class="bk-wrap">
            <div class="bk-sec-head">
                <span class="bk-eyebrow">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2.5">
                        <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2" />
                    </svg>
                    Platform Features
                </span>
                <h2 class="bk-h2" style="margin-top:16px;">Built for <span class="grad-orange">Modern Finance</span>
                </h2>
                <div class="bk-divider"></div>
                <p class="bk-sub">Every feature engineered with the precision that financial services demand.</p>
            </div>

            <div class="bk-feat-grid">
                <div class="bk-feat-cell">
                    <div class="bk-feat-cell-ico" style="background:#eff4ff;border:1px solid rgba(46,106,255,.15)"><svg
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#2e6aff"
                            stroke-width="2.5">
                            <polyline points="22 12 18 12 15 21 9 3 6 12 2 12" />
                        </svg></div>
                    <div class="bk-feat-cell-txt"><strong>Real-Time Transactions</strong>
                        <p>Sub-millisecond processing with live balance updates and reconciliation.</p>
                    </div>
                </div>
                <div class="bk-feat-cell">
                    <div class="bk-feat-cell-ico" style="background:#fff7ed;border:1px solid rgba(249,115,22,.15)"><svg
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#f97316"
                            stroke-width="2.5">
                            <rect x="3" y="11" width="18" height="11" rx="2" />
                            <path d="M7 11V7a5 5 0 0 1 10 0v4" />
                        </svg></div>
                    <div class="bk-feat-cell-txt"><strong>Multi-Layer Security</strong>
                        <p>MFA, biometrics, hardware tokens, and behavioral analytics in concert.</p>
                    </div>
                </div>
                <div class="bk-feat-cell">
                    <div class="bk-feat-cell-ico" style="background:#ecfeff;border:1px solid rgba(34,211,238,.2)"><svg
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#0891b2"
                            stroke-width="2.5">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2" />
                            <circle cx="12" cy="7" r="4" />
                        </svg></div>
                    <div class="bk-feat-cell-txt"><strong>KYC &amp; Verification Systems</strong>
                        <p>Automated identity verification with document scanning and liveness detection.</p>
                    </div>
                </div>
                <div class="bk-feat-cell">
                    <div class="bk-feat-cell-ico" style="background:#fefce8;border:1px solid rgba(245,158,11,.2)"><svg
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#d97706"
                            stroke-width="2.5">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                        </svg></div>
                    <div class="bk-feat-cell-txt"><strong>Data Encryption &amp; Privacy</strong>
                        <p>End-to-end AES-256 encryption with zero-knowledge architecture.</p>
                    </div>
                </div>
                <div class="bk-feat-cell">
                    <div class="bk-feat-cell-ico" style="background:#faf5ff;border:1px solid rgba(124,58,237,.15)"><svg
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#7c3aed"
                            stroke-width="2.5">
                            <rect x="5" y="2" width="14" height="20" rx="2" />
                            <line x1="12" y1="18" x2="12.01" y2="18" />
                        </svg></div>
                    <div class="bk-feat-cell-txt"><strong>Cross-Platform Accessibility</strong>
                        <p>Unified experience across web, iOS, Android, and wearable devices.</p>
                    </div>
                </div>
                <div class="bk-feat-cell">
                    <div class="bk-feat-cell-ico" style="background:#f0fdf4;border:1px solid rgba(34,197,94,.2)"><svg
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#16a34a"
                            stroke-width="2.5">
                            <line x1="18" y1="20" x2="18" y2="10" />
                            <line x1="12" y1="20" x2="12" y2="4" />
                            <line x1="6" y1="20" x2="6" y2="14" />
                        </svg></div>
                    <div class="bk-feat-cell-txt"><strong>Advanced Analytics</strong>
                        <p>Real-time dashboards, customer insights, and predictive fraud scoring.</p>
                    </div>
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


    {{-- ══════════════ STATS ══════════════ --}}
    <!-- <section class="bk-stats">
        <div class="bk-wrap">
            <div class="bk-stats-grid">
                <div class="bk-stat-cell">
                    <div class="bk-stat-em">🔒</div>
                    <div class="bk-stat-num grad-blue">99.9%</div>
                    <div class="bk-stat-lbl">Platform Uptime SLA</div>
                </div>
                <div class="bk-stat-cell">
                    <div class="bk-stat-em">⚡</div>
                    <div class="bk-stat-num grad-orange">10M+</div>
                    <div class="bk-stat-lbl">Transactions Processed</div>
                </div>
                <div class="bk-stat-cell">
                    <div class="bk-stat-em">🔗</div>
                    <div class="bk-stat-num" style="color:#22d3ee">50+</div>
                    <div class="bk-stat-lbl">Fintech Integrations</div>
                </div>
                <div class="bk-stat-cell">
                    <div class="bk-stat-em">🛡️</div>
                    <div class="bk-stat-num" style="color:#fbbf24">0</div>
                    <div class="bk-stat-lbl">Security Breaches</div>
                </div>
            </div>
        </div>
    </section> -->


    {{-- ══════════════ TESTIMONIALS ══════════════ --}}
    <section class="bk-sec">
        <div class="bk-wrap">
            <div class="bk-sec-head">
                <span class="bk-eyebrow">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2.5">
                        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z" />
                    </svg>
                    Client Stories
                </span>
                <h2 class="bk-h2" style="margin-top:16px;">Trusted by <span class="grad-orange">Financial Leaders</span>
                </h2>
                <div class="bk-divider"></div>
            </div>
            <div class="bk-testi-grid">
                <div class="bk-testi">
                    <div class="bk-stars">★★★★★</div>
                    <p class="bk-testi-q">"Accrosian delivered a core banking system that handles our entire transaction
                        load flawlessly. Their security implementation gave us confidence to go live in record time."
                    </p>
                    <div class="bk-testi-author">
                        <div class="bk-testi-av" style="background:linear-gradient(135deg,#1a4fd6,#22d3ee);">RK</div>
                        <div class="bk-testi-info"><strong>Rajesh Kumar</strong><span>CTO, NovaPay Fintech</span></div>
                    </div>
                </div>
                <div class="bk-testi">
                    <div class="bk-stars">★★★★★</div>
                    <p class="bk-testi-q">"The fraud detection module they built has saved us millions. Their AI-driven
                        approach and deep understanding of financial compliance standards is unmatched."</p>
                    <div class="bk-testi-author">
                        <div class="bk-testi-av" style="background:linear-gradient(135deg,#f97316,#fbbf24);">SP</div>
                        <div class="bk-testi-info"><strong>Sarah Patel</strong><span>VP Technology, SecureBank
                                Ltd</span></div>
                    </div>
                </div>
                <div class="bk-testi">
                    <div class="bk-stars">★★★★★</div>
                    <p class="bk-testi-q">"From architecture to deployment the team was professional and transparent.
                        Our mobile banking app now has a 4.9-star rating with 200K+ daily active users."</p>
                    <div class="bk-testi-author">
                        <div class="bk-testi-av" style="background:linear-gradient(135deg,#22d3ee,#4ade80);">AM</div>
                        <div class="bk-testi-info"><strong>Arjun Mehta</strong><span>Head of Digital, ClearLend
                                Capital</span></div>
                    </div>
                </div>
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


    {{-- ══════════════ CONTACT ══════════════ --}}
    <!-- <section class="bk-sec bk-sec-alt">
        <div class="bk-wrap">
            <div class="bk-contact-grid">
                {{-- Left --}}
                <div>
                    <span class="bk-eyebrow" style="margin-bottom:18px;display:inline-flex;">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2.5">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
                            <circle cx="12" cy="10" r="3" />
                        </svg>
                        Get In Touch
                    </span>
                    <h3 class="bk-h2" style="font-size:1.7rem;">Ready to Transform Your<br><span
                            class="grad-orange">Financial Platform?</span></h3>
                    <div class="bk-divider" style="margin:14px 0 20px;"></div>
                    <p>Fill in the form and our banking technology experts will reach out within 24 hours to discuss
                        your project.</p>
                    <div style="margin-top:28px;">
                        <div class="bk-contact-detail"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2.5">
                                <path
                                    d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.61 3.42 2 2 0 0 1 3.6 1.25h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.96a16 16 0 0 0 6 6l.91-.91a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 21.73 16.92z" />
                            </svg>+91 98765 43210</div>
                        <div class="bk-contact-detail"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2.5">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
                                <polyline points="22,6 12,13 2,6" />
                            </svg>banking@accrosian.com</div>
                        <div class="bk-contact-detail"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2.5">
                                <circle cx="12" cy="12" r="10" />
                                <polyline points="12 6 12 12 16 14" />
                            </svg>Response within 24 hours</div>
                    </div>
                </div>

                {{-- Right: Form --}}
                <div>
                    <div class="bk-form-card">
                        <form action="{{ route('contact.store') }}" method="POST" class="bk-form">
                            @csrf
                            <div class="bk-row2">
                                <input type="text" name="name" placeholder="Your Full Name" class="bk-input" required>
                                <input type="email" name="email" placeholder="Business Email" class="bk-input" required>
                            </div>
                            <div class="bk-row2">
                                <input type="tel" name="phone" placeholder="Phone Number" class="bk-input">
                                <input type="text" name="company" placeholder="Company / Institution" class="bk-input">
                            </div>
                            <select name="service" class="bk-input">
                                <option value="" disabled selected>Select Service</option>
                                <option>Digital Banking Solutions</option>
                                <option>Core Banking Development</option>
                                <option>Payment Gateway Integration</option>
                                <option>Mobile Banking App</option>
                                <option>Fraud Detection Systems</option>
                                <option>API &amp; Fintech Integration</option>
                            </select>
                            <textarea name="message" class="bk-input"
                                placeholder="Tell us about your project requirements..."></textarea>
                            <input type="hidden" name="subject" value="Banking Solutions Inquiry">
                            <button type="submit" class="bk-btn bk-btn-orange"
                                style="width:100%;justify-content:center;border-radius:10px;padding:16px;font-size:1rem;">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2.5" style="width:16px;height:16px">
                                    <line x1="22" y1="2" x2="11" y2="13" />
                                    <polygon points="22 2 15 22 11 13 2 9 22 2" />
                                </svg>
                                Send Enquiry
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

</div>
@endsection