@extends('layouts.app')

@section('title', 'Banking & Fintech Solutions | Accrosian')

@section('content')

<style>
/* ─── TOKENS ─────────────────────────────────────────── */
:root {
    --navy: #040d1a;
    --navy-2: #071428;
    --navy-3: #0b1e3d;
    --navy-4: #0f2655;
    --blue: #1a4fd6;
    --blue-light: #2e6aff;
    --orange: #f97316;
    --orange-2: #fb923c;
    --cyan: #22d3ee;
    --gold: #fbbf24;
    --white: #ffffff;
    --gray-100: #f1f5f9;
    --gray-300: #cbd5e1;
    --gray-400: #94a3b8;
    --gray-500: #64748b;
    --glass: rgba(255, 255, 255, 0.04);
    --glass-b: rgba(255, 255, 255, 0.08);
    --glow-blue: 0 0 40px rgba(46, 106, 255, 0.35);
    --glow-orange: 0 0 40px rgba(249, 115, 22, 0.35);
    --r: 16px;
    --r2: 24px;
    --ff-head: 'Sora', sans-serif;
    --ff-body: 'DM Sans', sans-serif;
    --ff-mono: 'JetBrains Mono', monospace;
}

@import url('https://fonts.googleapis.com/css2?family=Sora:wght@300;400;600;700;800&family=DM+Sans:wght@300;400;500;600&family=JetBrains+Mono:wght@400;500&display=swap');

/* ─── RESET & BASE ──────────────────────────────────── */
.bank-page *,
.bank-page *::before,
.bank-page *::after {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

.bank-page {
    font-family: var(--ff-body);
    background: var(--white);
    color: var(--navy);
    overflow-x: hidden;
    line-height: 1.6;
}

/* ─── UTILITY ───────────────────────────────────────── */
.bk-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 24px;
}

.bk-section {
    padding: 100px 0;
    position: relative;
    background: var(--white);
}

.bk-tag {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    font-family: var(--ff-mono);
    font-size: 11px;
    letter-spacing: .12em;
    text-transform: uppercase;
    color: var(--orange);
    background: rgba(249, 115, 22, .1);
    border: 1px solid rgba(249, 115, 22, .25);
    padding: 6px 14px;
    border-radius: 100px;
}

.bk-tag svg {
    width: 12px;
    height: 12px;
}

.bk-heading {
    font-family: var(--ff-head);
    font-size: clamp(2rem, 4vw, 3rem);
    font-weight: 800;
    line-height: 1.15;
    letter-spacing: -.02em;
}

.text-grad {
    background: linear-gradient(135deg, var(--orange) 0%, var(--orange-2) 40%, var(--gold) 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.text-blue-grad {
    background: linear-gradient(135deg, var(--blue-light) 0%, var(--cyan) 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.bk-sub {
    font-size: 1.05rem;
    color: var(--gray-400);
    max-width: 580px;
    margin-top: 16px;
}

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
    transition: all .3s ease;
}

.bk-btn-primary {
    background: linear-gradient(135deg, var(--orange), var(--orange-2));
    color: #fff;
    box-shadow: 0 8px 30px rgba(249, 115, 22, .35);
}

.bk-btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 12px 40px rgba(249, 115, 22, .5);
    color: #fff;
    text-decoration: none;
}

.bk-btn-outline {
    background: transparent;
    color: var(--white);
    border: 1.5px solid rgba(255, 255, 255, .2);
}

.bk-btn-outline:hover {
    background: var(--glass-b);
    border-color: rgba(255, 255, 255, .4);
    transform: translateY(-2px);
    color: #fff;
    text-decoration: none;
}

/* ─── HERO ──────────────────────────────────────────── */
.bk-hero {
    min-height: 100vh;
    display: flex;
    align-items: center;
    background: radial-gradient(ellipse 70% 60% at 60% 40%, rgba(26, 79, 214, .25) 0%, transparent 70%),
        radial-gradient(ellipse 50% 40% at 20% 70%, rgba(249, 115, 22, .12) 0%, transparent 60%),
        var(--navy);
    padding: 130px 0 80px;
    overflow: hidden;
    position: relative;
}

.bk-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    pointer-events: none;
    background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%232e6aff' fill-opacity='0.04'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
}

.bk-hero-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 64px;
    align-items: center;
}

.bk-hero-content {
    position: relative;
    z-index: 2;
}

.bk-hero-eyebrow {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 24px;
}

.bk-secure-badge {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    font-family: var(--ff-mono);
    font-size: 10px;
    letter-spacing: .1em;
    text-transform: uppercase;
    color: var(--cyan);
    background: rgba(34, 211, 238, .08);
    border: 1px solid rgba(34, 211, 238, .2);
    padding: 5px 12px;
    border-radius: 100px;
}

.bk-secure-badge::before {
    content: '';
    width: 6px;
    height: 6px;
    border-radius: 50%;
    background: var(--cyan);
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
        transform: scale(.7)
    }
}

.bk-hero h1 {
    font-family: var(--ff-head);
    font-size: clamp(2.6rem, 5vw, 3.8rem);
    font-weight: 800;
    line-height: 1.1;
    letter-spacing: -.03em;
    margin-bottom: 20px;
    color: #ffffff;
}

.bk-hero-btns {
    display: flex;
    gap: 14px;
    flex-wrap: wrap;
    margin-top: 36px;
}

.bk-hero-trust {
    display: flex;
    align-items: center;
    gap: 20px;
    margin-top: 40px;
}

.bk-trust-item {
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: .8rem;
    color: var(--gray-400);
}

.bk-trust-item svg {
    color: var(--cyan);
    flex-shrink: 0;
}

/* Dashboard Mockup */
.bk-hero-visual {
    position: relative;
    z-index: 2;
}

.bk-dashboard {
    background: linear-gradient(135deg, rgba(15, 38, 85, .9), rgba(11, 30, 61, .95));
    border: 1px solid rgba(46, 106, 255, .2);
    border-radius: var(--r2);
    padding: 24px;
    box-shadow: var(--glow-blue), 0 40px 80px rgba(0, 0, 0, .5);
    backdrop-filter: blur(20px);
    animation: float-card 6s ease-in-out infinite;
}

@keyframes float-card {

    0%,
    100% {
        transform: translateY(0)
    }

    50% {
        transform: translateY(-12px)
    }
}

.bk-dash-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 20px;
}

.bk-dash-logo {
    font-family: var(--ff-mono);
    font-size: .7rem;
    color: var(--cyan);
    letter-spacing: .1em;
}

.bk-dash-dots {
    display: flex;
    gap: 5px;
}

.bk-dash-dot {
    width: 8px;
    height: 8px;
    border-radius: 50%;
}

.bk-dash-balance {
    margin-bottom: 20px;
}

.bk-dash-bal-label {
    font-size: .7rem;
    color: var(--gray-500);
    text-transform: uppercase;
    letter-spacing: .1em;
    font-family: var(--ff-mono);
}

.bk-dash-bal-amount {
    font-family: var(--ff-head);
    font-size: 2.2rem;
    font-weight: 700;
    color: #fff;
    letter-spacing: -.02em;
}

.bk-dash-bal-change {
    font-size: .75rem;
    color: #22c55e;
    margin-top: 2px;
}

.bk-dash-chart {
    height: 80px;
    margin-bottom: 20px;
    display: flex;
    align-items: flex-end;
    gap: 4px;
}

.bk-bar {
    flex: 1;
    border-radius: 4px 4px 0 0;
    background: linear-gradient(180deg, rgba(46, 106, 255, .8), rgba(46, 106, 255, .2));
    transition: all .3s;
    position: relative;
    overflow: hidden;
}

.bk-bar::after {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(180deg, rgba(255, 255, 255, .15), transparent);
}

.bk-bar.hi {
    background: linear-gradient(180deg, rgba(249, 115, 22, .9), rgba(249, 115, 22, .2));
}

.bk-dash-stats {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 12px;
}

.bk-dash-stat {
    background: rgba(255, 255, 255, .04);
    border: 1px solid rgba(255, 255, 255, .08);
    border-radius: 10px;
    padding: 12px;
}

.bk-dash-stat-val {
    font-family: var(--ff-head);
    font-size: 1.1rem;
    font-weight: 700;
}

.bk-dash-stat-lbl {
    font-size: .65rem;
    color: var(--gray-500);
    text-transform: uppercase;
    letter-spacing: .08em;
    font-family: var(--ff-mono);
    margin-top: 2px;
}

.bk-floating-badge {
    position: absolute;
    background: rgba(11, 30, 61, .95);
    border: 1px solid rgba(34, 211, 238, .3);
    border-radius: 12px;
    padding: 10px 14px;
    display: flex;
    align-items: center;
    gap: 10px;
    backdrop-filter: blur(20px);
    box-shadow: 0 8px 30px rgba(0, 0, 0, .4);
}

.bk-floating-badge.badge-1 {
    bottom: -20px;
    left: -30px;
}

.bk-floating-badge.badge-2 {
    top: 30px;
    right: -30px;
}

.bk-fb-icon {
    width: 32px;
    height: 32px;
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.bk-fb-text {
    font-size: .7rem;
}

.bk-fb-text strong {
    display: block;
    font-size: .85rem;
    font-weight: 700;
    color: #fff;
}

.bk-fb-text span {
    color: var(--gray-400);
}

/* ─── SERVICES GRID ─────────────────────────────────── */
.bk-services {
    background: linear-gradient(180deg, var(--navy) 0%, var(--navy-2) 100%);
}

.bk-section-head {
    text-align: center;
    margin-bottom: 64px;
}

.bk-section-head .bk-tag {
    margin-bottom: 16px;
}

.bk-section-head .bk-sub {
    margin: 0 auto;
}

.bk-services-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 24px;
}

.bk-svc-card {
    background: var(--glass);
    border: 1px solid rgba(255, 255, 255, .07);
    border-radius: var(--r2);
    padding: 32px 28px;
    transition: all .4s cubic-bezier(.23, 1, .32, 1);
    cursor: default;
    position: relative;
    overflow: hidden;
}

.bk-svc-card::before {
    content: '';
    position: absolute;
    inset: 0;
    border-radius: inherit;
    background: radial-gradient(ellipse 60% 60% at 50% 0%, rgba(46, 106, 255, .12) 0%, transparent 70%);
    opacity: 0;
    transition: opacity .4s;
}

.bk-svc-card:hover {
    border-color: rgba(46, 106, 255, .3);
    transform: translateY(-6px);
    box-shadow: var(--glow-blue);
}

.bk-svc-card:hover::before {
    opacity: 1;
}

.bk-svc-icon {
    width: 54px;
    height: 54px;
    border-radius: 14px;
    margin-bottom: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, rgba(26, 79, 214, .25), rgba(46, 106, 255, .1));
    border: 1px solid rgba(46, 106, 255, .2);
    transition: all .4s;
}

.bk-svc-card:hover .bk-svc-icon {
    box-shadow: 0 0 20px rgba(46, 106, 255, .4);
}

.bk-svc-icon svg {
    width: 26px;
    height: 26px;
    color: var(--blue-light);
}

.bk-svc-card:nth-child(2) .bk-svc-icon svg {
    color: var(--cyan);
}

.bk-svc-card:nth-child(3) .bk-svc-icon svg {
    color: var(--orange);
}

.bk-svc-card:nth-child(4) .bk-svc-icon svg {
    color: var(--gold);
}

.bk-svc-card:nth-child(5) .bk-svc-icon svg {
    color: #f87171;
}

.bk-svc-card:nth-child(6) .bk-svc-icon svg {
    color: #a78bfa;
}

.bk-svc-title {
    font-family: var(--ff-head);
    font-size: 1.05rem;
    font-weight: 700;
    margin-bottom: 10px;
}

.bk-svc-desc {
    font-size: .875rem;
    color: var(--gray-400);
    line-height: 1.65;
}

.bk-svc-arrow {
    display: flex;
    align-items: center;
    gap: 6px;
    margin-top: 16px;
    font-size: .8rem;
    color: var(--blue-light);
    font-weight: 600;
    opacity: 0;
    transform: translateX(-8px);
    transition: all .3s;
}

.bk-svc-card:hover .bk-svc-arrow {
    opacity: 1;
    transform: translateX(0);
}

/* ─── WHY US ─────────────────────────────────────────── */
.bk-why {
    background: var(--navy-2);
}

.bk-why-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 80px;
    align-items: center;
}

.bk-why-features {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.bk-why-item {
    display: flex;
    align-items: flex-start;
    gap: 16px;
    background: var(--glass);
    border: 1px solid rgba(255, 255, 255, .07);
    border-radius: 14px;
    padding: 20px;
    transition: all .3s;
}

.bk-why-item:hover {
    border-color: rgba(249, 115, 22, .25);
    background: rgba(249, 115, 22, .04);
}

.bk-why-icon {
    width: 40px;
    height: 40px;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    background: rgba(249, 115, 22, .12);
    border: 1px solid rgba(249, 115, 22, .2);
}

.bk-why-icon svg {
    width: 20px;
    height: 20px;
    color: var(--orange);
}

.bk-why-text strong {
    display: block;
    font-family: var(--ff-head);
    font-size: .95rem;
    font-weight: 700;
    margin-bottom: 4px;
}

.bk-why-text span {
    font-size: .83rem;
    color: var(--gray-400);
}

.bk-why-visual {
    position: relative;
}

.bk-compliance-card {
    background: linear-gradient(135deg, var(--navy-3), var(--navy-4));
    border: 1px solid rgba(46, 106, 255, .2);
    border-radius: var(--r2);
    padding: 32px;
    box-shadow: var(--glow-blue);
}

.bk-compliance-title {
    font-family: var(--ff-head);
    font-size: 1.1rem;
    font-weight: 700;
    margin-bottom: 20px;
    display: flex;
    align-items: center;
    gap: 10px;
}

.bk-compliance-title svg {
    color: var(--cyan);
    width: 20px;
    height: 20px;
}

.bk-compliance-list {
    display: flex;
    flex-direction: column;
    gap: 12px;
}

.bk-comp-item {
    display: flex;
    align-items: center;
    gap: 12px;
    font-size: .875rem;
}

.bk-comp-check {
    width: 20px;
    height: 20px;
    border-radius: 50%;
    background: rgba(34, 211, 238, .1);
    border: 1px solid rgba(34, 211, 238, .3);
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.bk-comp-check svg {
    width: 10px;
    height: 10px;
    color: var(--cyan);
}

.bk-trust-badges {
    display: flex;
    gap: 10px;
    flex-wrap: wrap;
    margin-top: 24px;
}

.bk-tb {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    font-size: .7rem;
    font-family: var(--ff-mono);
    letter-spacing: .08em;
    text-transform: uppercase;
    padding: 6px 12px;
    border-radius: 100px;
    border: 1px solid rgba(255, 255, 255, .1);
    color: var(--gray-300);
}

.bk-tb svg {
    width: 12px;
    height: 12px;
    color: var(--gold);
}

/* ─── PROCESS ────────────────────────────────────────── */
.bk-process {
    background: var(--navy);
}

.bk-process-steps {
    display: grid;
    grid-template-columns: repeat(6, 1fr);
    gap: 0;
    position: relative;
    margin-top: 60px;
}

.bk-process-steps::before {
    content: '';
    position: absolute;
    top: 28px;
    left: 10%;
    right: 10%;
    height: 1px;
    background: linear-gradient(90deg, transparent, rgba(46, 106, 255, .4) 20%, rgba(249, 115, 22, .4) 80%, transparent);
}

.bk-step {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    padding: 0 8px;
}

.bk-step-num {
    width: 56px;
    height: 56px;
    border-radius: 50%;
    border: 1px solid rgba(46, 106, 255, .3);
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 16px;
    background: var(--navy-3);
    position: relative;
    z-index: 1;
    font-family: var(--ff-mono);
    font-size: .8rem;
    font-weight: 500;
    color: var(--blue-light);
    transition: all .3s;
}

.bk-step:hover .bk-step-num {
    background: rgba(46, 106, 255, .15);
    box-shadow: 0 0 20px rgba(46, 106, 255, .3);
}

.bk-step-num svg {
    width: 22px;
    height: 22px;
}

.bk-step-title {
    font-family: var(--ff-head);
    font-size: .8rem;
    font-weight: 700;
    margin-bottom: 6px;
}

.bk-step-desc {
    font-size: .7rem;
    color: var(--gray-500);
    line-height: 1.5;
}

/* ─── FEATURES ───────────────────────────────────────── */
.bk-features {
    background: var(--navy-2);
}

.bk-features-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 1px;
    background: rgba(255, 255, 255, .06);
    border-radius: var(--r2);
    overflow: hidden;
}

.bk-feat {
    padding: 36px 28px;
    background: var(--navy-2);
    transition: background .3s;
    display: flex;
    align-items: flex-start;
    gap: 16px;
}

.bk-feat:hover {
    background: var(--navy-3);
}

.bk-feat-icon {
    width: 44px;
    height: 44px;
    border-radius: 12px;
    flex-shrink: 0;
    display: flex;
    align-items: center;
    justify-content: center;
}

.bk-feat-icon svg {
    width: 22px;
    height: 22px;
}

.bk-feat-text strong {
    display: block;
    font-family: var(--ff-head);
    font-size: .95rem;
    font-weight: 700;
    margin-bottom: 6px;
}

.bk-feat-text p {
    font-size: .82rem;
    color: var(--gray-400);
    line-height: 1.6;
}

/* ─── TECH STACK ─────────────────────────────────────── */
.bk-tech {
    background: var(--navy);
}

.bk-tech-grid {
    display: flex;
    flex-wrap: wrap;
    gap: 16px;
    justify-content: center;
    margin-top: 48px;
}

.bk-tech-pill {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    background: var(--glass);
    border: 1px solid rgba(255, 255, 255, .08);
    padding: 14px 22px;
    border-radius: 100px;
    transition: all .3s;
}

.bk-tech-pill:hover {
    border-color: rgba(46, 106, 255, .3);
    background: rgba(46, 106, 255, .06);
    transform: translateY(-3px);
    box-shadow: var(--glow-blue);
}

.bk-tech-pill svg {
    width: 20px;
    height: 20px;
}

.bk-tech-pill span {
    font-size: .875rem;
    font-weight: 600;
    color: var(--gray-300);
}

/* ─── STATS ──────────────────────────────────────────── */
.bk-stats {
    background: linear-gradient(135deg, var(--navy-3), var(--navy-4));
    border-top: 1px solid rgba(46, 106, 255, .15);
    border-bottom: 1px solid rgba(46, 106, 255, .15);
}

.bk-stats-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 0;
}

.bk-stat-item {
    text-align: center;
    padding: 60px 24px;
    border-right: 1px solid rgba(255, 255, 255, .06);
}

.bk-stat-item:last-child {
    border-right: none;
}

.bk-stat-num {
    font-family: var(--ff-head);
    font-size: clamp(2rem, 4vw, 3rem);
    font-weight: 800;
    letter-spacing: -.03em;
}

.bk-stat-lbl {
    font-size: .85rem;
    color: var(--gray-400);
    margin-top: 8px;
}

.bk-stat-icon {
    font-size: 1.5rem;
    margin-bottom: 12px;
}

/* ─── TESTIMONIALS ───────────────────────────────────── */
.bk-testi {
    background: var(--navy);
}

.bk-testi-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 24px;
}

.bk-testi-card {
    background: var(--glass);
    border: 1px solid rgba(255, 255, 255, .07);
    border-radius: var(--r2);
    padding: 28px;
    transition: all .3s;
}

.bk-testi-card:hover {
    border-color: rgba(249, 115, 22, .2);
    transform: translateY(-4px);
}

.bk-stars {
    display: flex;
    gap: 3px;
    margin-bottom: 16px;
}

.bk-star {
    color: var(--gold);
    font-size: 1rem;
}

.bk-testi-quote {
    font-size: .9rem;
    color: var(--gray-300);
    line-height: 1.7;
    margin-bottom: 20px;
    font-style: italic;
}

.bk-testi-author {
    display: flex;
    align-items: center;
    gap: 12px;
}

.bk-testi-avatar {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-family: var(--ff-head);
    font-size: .9rem;
    font-weight: 700;
    color: #fff;
    flex-shrink: 0;
}

.bk-testi-info strong {
    display: block;
    font-size: .875rem;
    font-weight: 600;
}

.bk-testi-info span {
    font-size: .75rem;
    color: var(--gray-500);
}

/* ─── CTA ────────────────────────────────────────────── */
.bk-cta-section {
    background: radial-gradient(ellipse 80% 60% at 50% 50%, rgba(26, 79, 214, .3) 0%, transparent 70%), var(--navy-2);
    text-align: center;
    padding: 120px 0;
}

.bk-cta-section .bk-heading {
    margin-bottom: 20px;
}

.bk-cta-section .bk-sub {
    margin: 0 auto 36px;
}

.bk-cta-section .bk-hero-btns {
    justify-content: center;
}

/* ─── CONTACT FOOTER ─────────────────────────────────── */
.bk-contact {
    background: var(--navy-3);
    padding: 80px 0;
}

.bk-contact-grid {
    display: grid;
    grid-template-columns: 1fr 1.4fr;
    gap: 64px;
    align-items: start;
}

.bk-contact-info h3 {
    font-family: var(--ff-head);
    font-size: 1.4rem;
    font-weight: 700;
    margin-bottom: 16px;
}

.bk-contact-info p {
    font-size: .9rem;
    color: var(--gray-400);
    margin-bottom: 28px;
}

.bk-contact-detail {
    display: flex;
    align-items: center;
    gap: 12px;
    font-size: .9rem;
    margin-bottom: 14px;
    color: var(--gray-300);
}

.bk-contact-detail svg {
    color: var(--orange);
    width: 18px;
    height: 18px;
    flex-shrink: 0;
}

.bk-form {
    display: flex;
    flex-direction: column;
    gap: 16px;
}

.bk-input {
    background: rgba(255, 255, 255, .05);
    border: 1px solid rgba(255, 255, 255, .1);
    border-radius: 10px;
    padding: 14px 16px;
    color: #fff;
    font-family: var(--ff-body);
    font-size: .9rem;
    outline: none;
    transition: border .3s;
}

.bk-input::placeholder {
    color: var(--gray-500);
}

.bk-input:focus {
    border-color: rgba(46, 106, 255, .4);
    background: rgba(46, 106, 255, .05);
}

.bk-input-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 16px;
}

textarea.bk-input {
    resize: vertical;
    min-height: 100px;
}

/* ─── RESPONSIVE ─────────────────────────────────────── */
@media(max-width:1024px) {
    .bk-services-grid {
        grid-template-columns: repeat(2, 1fr);
    }

    .bk-process-steps {
        grid-template-columns: repeat(3, 1fr);
        gap: 32px;
    }

    .bk-process-steps::before {
        display: none;
    }

    .bk-stats-grid {
        grid-template-columns: repeat(2, 1fr);
    }

    .bk-testi-grid {
        grid-template-columns: 1fr 1fr;
    }
}

@media(max-width:768px) {
    .bk-section {
        padding: 64px 0;
    }

    .bk-hero-grid,
    .bk-why-grid,
    .bk-contact-grid {
        grid-template-columns: 1fr;
    }

    .bk-hero-visual {
        display: none;
    }

    .bk-services-grid {
        grid-template-columns: 1fr;
    }

    .bk-features-grid {
        grid-template-columns: 1fr;
    }

    .bk-process-steps {
        grid-template-columns: repeat(2, 1fr);
    }

    .bk-stats-grid {
        grid-template-columns: 1fr 1fr;
    }

    .bk-testi-grid {
        grid-template-columns: 1fr;
    }

    .bk-input-row {
        grid-template-columns: 1fr;
    }

    .bk-stat-item {
        border-right: none;
        border-bottom: 1px solid rgba(255, 255, 255, .06);
    }
}
</style>

<div class="bank-page">

    <!-- ═══ HERO ═══════════════════════════════════════════ -->
    <section class="bk-hero">
        <div class="bk-container">
            <div class="bk-hero-grid">

                <!-- Content -->
                <div class="bk-hero-content">
                    <div class="bk-hero-eyebrow">
                        <span class="bk-tag">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2.5">
                                <rect x="3" y="11" width="18" height="11" rx="2" />
                                <path d="M7 11V7a5 5 0 0 1 10 0v4" />
                            </svg>
                            Banking Solutions
                        </span>
                        <span class="bk-secure-badge">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2.5" style="width:10px;height:10px">
                                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                            </svg>
                            Bank-Grade Secure
                        </span>
                    </div>

                    <h1>
                        Secure &amp; Scalable<br>
                        <span class="text-grad">Banking Solutions</span>
                    </h1>

                    <p class="bk-sub">Empowering financial institutions with modern, secure, and high-performance
                        digital solutions built for the future of finance.</p>

                    <div class="bk-hero-btns">
                        <a href="{{ route('contact') }}" class="bk-btn bk-btn-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2.5" style="width:16px;height:16px">
                                <path
                                    d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.61 3.42 2 2 0 0 1 3.6 1.25h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.96a16 16 0 0 0 6 6l.91-.91a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 21.73 16.92z" />
                            </svg>
                            Get a Quote
                        </a>
                        <a href="{{ route('contact') }}" class="bk-btn bk-btn-outline">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2.5" style="width:16px;height:16px">
                                <circle cx="12" cy="12" r="10" />
                                <polyline points="12 8 12 12 14 14" />
                            </svg>
                            Consult Now
                        </a>
                    </div>

                    <div class="bk-hero-trust">
                        <div class="bk-trust-item">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2.5" style="width:15px;height:15px">
                                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                            </svg>
                            256-bit Encryption
                        </div>
                        <div class="bk-trust-item">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2.5" style="width:15px;height:15px">
                                <polyline points="20 6 9 17 4 12" />
                            </svg>
                            ISO 27001 Compliant
                        </div>
                        <div class="bk-trust-item">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2.5" style="width:15px;height:15px">
                                <circle cx="12" cy="12" r="10" />
                                <path d="M12 8v4l3 3" />
                            </svg>
                            99.9% Uptime SLA
                        </div>
                    </div>
                </div>

                <!-- Dashboard Mockup -->
                <div class="bk-hero-visual">
                    <div style="position:relative;padding:24px 36px 36px;">
                        <div class="bk-dashboard">
                            <div class="bk-dash-header">
                                <span class="bk-dash-logo">ACCROSIAN · FINTECH</span>
                                <div class="bk-dash-dots">
                                    <div class="bk-dash-dot" style="background:#f87171;"></div>
                                    <div class="bk-dash-dot" style="background:#fbbf24;"></div>
                                    <div class="bk-dash-dot" style="background:#4ade80;"></div>
                                </div>
                            </div>
                            <div class="bk-dash-balance">
                                <div class="bk-dash-bal-label">Total Portfolio Value</div>
                                <div class="bk-dash-bal-amount">$2,847,293</div>
                                <div class="bk-dash-bal-change">▲ +12.4% this quarter</div>
                            </div>
                            <div class="bk-dash-chart">
                                <div class="bk-bar" style="height:40%"></div>
                                <div class="bk-bar" style="height:60%"></div>
                                <div class="bk-bar" style="height:45%"></div>
                                <div class="bk-bar hi" style="height:80%"></div>
                                <div class="bk-bar" style="height:55%"></div>
                                <div class="bk-bar" style="height:70%"></div>
                                <div class="bk-bar hi" style="height:90%"></div>
                                <div class="bk-bar" style="height:65%"></div>
                                <div class="bk-bar" style="height:75%"></div>
                                <div class="bk-bar hi" style="height:100%"></div>
                            </div>
                            <div class="bk-dash-stats">
                                <div class="bk-dash-stat">
                                    <div class="bk-dash-stat-val text-blue-grad">10M+</div>
                                    <div class="bk-dash-stat-lbl">Transactions</div>
                                </div>
                                <div class="bk-dash-stat">
                                    <div class="bk-dash-stat-val text-grad">50+</div>
                                    <div class="bk-dash-stat-lbl">Integrations</div>
                                </div>
                                <div class="bk-dash-stat">
                                    <div class="bk-dash-stat-val" style="color:#4ade80">99.9%</div>
                                    <div class="bk-dash-stat-lbl">Uptime</div>
                                </div>
                                <div class="bk-dash-stat">
                                    <div class="bk-dash-stat-val" style="color:var(--gold)">256-bit</div>
                                    <div class="bk-dash-stat-lbl">Encryption</div>
                                </div>
                            </div>
                        </div>

                        <!-- Floating badges -->
                        <div class="bk-floating-badge badge-1">
                            <div class="bk-fb-icon"
                                style="background:rgba(34,197,94,.12);border:1px solid rgba(34,197,94,.3);">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#4ade80"
                                    stroke-width="2.5" style="width:16px;height:16px">
                                    <polyline points="20 6 9 17 4 12" />
                                </svg>
                            </div>
                            <div class="bk-fb-text">
                                <strong>Payment Processed</strong>
                                <span>$48,200 · just now</span>
                            </div>
                        </div>

                        <div class="bk-floating-badge badge-2">
                            <div class="bk-fb-icon"
                                style="background:rgba(249,115,22,.12);border:1px solid rgba(249,115,22,.3);">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="var(--orange)" stroke-width="2.5" style="width:16px;height:16px">
                                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                                </svg>
                            </div>
                            <div class="bk-fb-text">
                                <strong>Fraud Blocked</strong>
                                <span>AI detection active</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ═══ SERVICES ════════════════════════════════════════ -->
    <section class="bk-section bk-services">
        <div class="bk-container">
            <div class="bk-section-head">
                <div class="bk-tag">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2.5">
                        <rect x="2" y="3" width="20" height="14" rx="2" />
                        <line x1="8" y1="21" x2="16" y2="21" />
                        <line x1="12" y1="17" x2="12" y2="21" />
                    </svg>
                    Core Services
                </div>
                <h2 class="bk-heading" style="margin-top:16px;">
                    Full-Spectrum <span class="text-blue-grad">Banking Technology</span>
                </h2>
                <p class="bk-sub">End-to-end digital solutions built specifically for banks, fintechs, and financial
                    enterprises.</p>
            </div>

            <div class="bk-services-grid">

                <!-- Card 1 -->
                <div class="bk-svc-card">
                    <div class="bk-svc-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <rect x="2" y="5" width="20" height="14" rx="2" />
                            <line x1="2" y1="10" x2="22" y2="10" />
                        </svg>
                    </div>
                    <div class="bk-svc-title">Digital Banking Solutions</div>
                    <div class="bk-svc-desc">Internet banking portals, dashboards, and customer-facing digital banking
                        experiences.</div>
                    <div class="bk-svc-arrow">Learn more <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2.5" style="width:14px;height:14px">
                            <path d="M5 12h14M12 5l7 7-7 7" />
                        </svg></div>
                </div>

                <!-- Card 2 -->
                <div class="bk-svc-card">
                    <div class="bk-svc-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <ellipse cx="12" cy="5" rx="9" ry="3" />
                            <path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5" />
                            <path d="M3 12c0 1.66 4 3 9 3s9-1.34 9-3" />
                        </svg>
                    </div>
                    <div class="bk-svc-title">Core Banking System Development</div>
                    <div class="bk-svc-desc">Robust, scalable core banking engines with real-time processing and
                        multi-currency support.</div>
                    <div class="bk-svc-arrow">Learn more <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2.5" style="width:14px;height:14px">
                            <path d="M5 12h14M12 5l7 7-7 7" />
                        </svg></div>
                </div>

                <!-- Card 3 -->
                <div class="bk-svc-card">
                    <div class="bk-svc-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <path d="M20 12V22H4V12" />
                            <path d="M22 7H2v5h20V7z" />
                            <path d="M12 22V7" />
                            <path d="M12 7H7.5a2.5 2.5 0 0 1 0-5C11 2 12 7 12 7z" />
                            <path d="M12 7h4.5a2.5 2.5 0 0 0 0-5C13 2 12 7 12 7z" />
                        </svg>
                    </div>
                    <div class="bk-svc-title">Payment Gateway Integration</div>
                    <div class="bk-svc-desc">Seamless multi-gateway integration supporting cards, UPI, NEFT, RTGS, and
                        global payment rails.</div>
                    <div class="bk-svc-arrow">Learn more <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2.5" style="width:14px;height:14px">
                            <path d="M5 12h14M12 5l7 7-7 7" />
                        </svg></div>
                </div>

                <!-- Card 4 -->
                <div class="bk-svc-card">
                    <div class="bk-svc-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <rect x="5" y="2" width="14" height="20" rx="2" ry="2" />
                            <line x1="12" y1="18" x2="12.01" y2="18" />
                        </svg>
                    </div>
                    <div class="bk-svc-title">Mobile Banking App Development</div>
                    <div class="bk-svc-desc">Cross-platform iOS &amp; Android banking apps with biometric auth and
                        real-time notifications.</div>
                    <div class="bk-svc-arrow">Learn more <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2.5" style="width:14px;height:14px">
                            <path d="M5 12h14M12 5l7 7-7 7" />
                        </svg></div>
                </div>

                <!-- Card 5 -->
                <div class="bk-svc-card">
                    <div class="bk-svc-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <path
                                d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z" />
                            <line x1="12" y1="9" x2="12" y2="13" />
                            <line x1="12" y1="17" x2="12.01" y2="17" />
                        </svg>
                    </div>
                    <div class="bk-svc-title">Fraud Detection &amp; Security Systems</div>
                    <div class="bk-svc-desc">AI-powered fraud detection with real-time transaction monitoring and
                        anomaly alerts.</div>
                    <div class="bk-svc-arrow">Learn more <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2.5" style="width:14px;height:14px">
                            <path d="M5 12h14M12 5l7 7-7 7" />
                        </svg></div>
                </div>

                <!-- Card 6 -->
                <div class="bk-svc-card">
                    <div class="bk-svc-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <polyline points="16 18 22 12 16 6" />
                            <polyline points="8 6 2 12 8 18" />
                        </svg>
                    </div>
                    <div class="bk-svc-title">API &amp; Fintech Integration</div>
                    <div class="bk-svc-desc">Open banking APIs, third-party fintech integrations, and microservices
                        architecture design.</div>
                    <div class="bk-svc-arrow">Learn more <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2.5" style="width:14px;height:14px">
                            <path d="M5 12h14M12 5l7 7-7 7" />
                        </svg></div>
                </div>

            </div>
        </div>
    </section>

    <!-- ═══ WHY US ══════════════════════════════════════════ -->
    <section class="bk-section bk-why">
        <div class="bk-container">
            <div class="bk-why-grid">

                <div>
                    <div class="bk-tag" style="margin-bottom:16px;">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2.5">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                        </svg>
                        Why Accrosian
                    </div>
                    <h2 class="bk-heading" style="margin-bottom:12px;">Built on <span class="text-grad">Trust &amp;
                            Compliance</span></h2>
                    <p class="bk-sub" style="margin-bottom:36px;">We engineer solutions with security-first architecture
                        so your institution meets every regulatory standard without compromise.</p>

                    <div class="bk-why-features">
                        <div class="bk-why-item">
                            <div class="bk-why-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2.5">
                                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                                </svg></div>
                            <div class="bk-why-text"><strong>Bank-Grade Security &amp; Compliance</strong><span>PCI DSS,
                                    ISO 27001, RBI and GDPR compliant architecture out of the box.</span></div>
                        </div>
                        <div class="bk-why-item">
                            <div class="bk-why-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2.5">
                                    <polyline points="22 12 18 12 15 21 9 3 6 12 2 12" />
                                </svg></div>
                            <div class="bk-why-text"><strong>Scalable Infrastructure</strong><span>Cloud-native
                                    architecture designed to handle millions of transactions with zero downtime.</span>
                            </div>
                        </div>
                        <div class="bk-why-item">
                            <div class="bk-why-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2.5">
                                    <circle cx="12" cy="12" r="10" />
                                    <polyline points="12 6 12 12 16 14" />
                                </svg></div>
                            <div class="bk-why-text"><strong>Real-Time Transaction Systems</strong><span>Sub-second
                                    transaction processing with live reconciliation and audit trails.</span></div>
                        </div>
                        <div class="bk-why-item">
                            <div class="bk-why-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2.5">
                                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                                    <circle cx="9" cy="7" r="4" />
                                    <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                </svg></div>
                            <div class="bk-why-text"><strong>Seamless User Experience</strong><span>Intuitive interfaces
                                    that make complex banking operations feel effortless.</span></div>
                        </div>
                        <div class="bk-why-item">
                            <div class="bk-why-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2.5">
                                    <path
                                        d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.61 3.42 2 2 0 0 1 3.6 1.25h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.96a16 16 0 0 0 6 6l.91-.91a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 21.73 16.92z" />
                                </svg></div>
                            <div class="bk-why-text"><strong>24/7 Dedicated Support</strong><span>Round-the-clock
                                    technical support with SLA-guaranteed response times.</span></div>
                        </div>
                    </div>
                </div>

                <div class="bk-why-visual">
                    <div class="bk-compliance-card">
                        <div class="bk-compliance-title">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2.5">
                                <path d="M9 11l3 3L22 4" />
                                <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11" />
                            </svg>
                            Compliance Certifications
                        </div>
                        <div class="bk-compliance-list">
                            <div class="bk-comp-item">
                                <div class="bk-comp-check"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="3">
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg></div> PCI DSS Level 1 Compliant
                            </div>
                            <div class="bk-comp-item">
                                <div class="bk-comp-check"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="3">
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg></div> ISO/IEC 27001:2013 Certified
                            </div>
                            <div class="bk-comp-item">
                                <div class="bk-comp-check"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="3">
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg></div> GDPR &amp; Data Privacy Ready
                            </div>
                            <div class="bk-comp-item">
                                <div class="bk-comp-check"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="3">
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg></div> RBI / SEBI Regulatory Aligned
                            </div>
                            <div class="bk-comp-item">
                                <div class="bk-comp-check"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="3">
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg></div> SOC 2 Type II Audited
                            </div>
                            <div class="bk-comp-item">
                                <div class="bk-comp-check"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="3">
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg></div> AML / KYC Framework Integrated
                            </div>
                        </div>
                        <div class="bk-trust-badges">
                            <span class="bk-tb"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2.5">
                                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                                </svg> Secure</span>
                            <span class="bk-tb"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2.5">
                                    <rect x="3" y="11" width="18" height="11" rx="2" />
                                    <path d="M7 11V7a5 5 0 0 1 10 0v4" />
                                </svg> Encrypted</span>
                            <span class="bk-tb"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2.5">
                                    <polyline points="9 11 12 14 22 4" />
                                    <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11" />
                                </svg> Compliant</span>
                            <span class="bk-tb"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2.5">
                                    <circle cx="12" cy="12" r="10" />
                                    <polyline points="12 6 12 12 16 14" />
                                </svg> 24/7</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ═══ PROCESS ════════════════════════════════════════ -->
    <section class="bk-section bk-process">
        <div class="bk-container">
            <div class="bk-section-head">
                <div class="bk-tag">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2.5">
                        <circle cx="12" cy="12" r="3" />
                        <path d="M19.07 4.93a10 10 0 0 0-14.14 0M4.93 19.07a10 10 0 0 0 14.14 0" />
                    </svg>
                    Our Process
                </div>
                <h2 class="bk-heading" style="margin-top:16px;">How We <span class="text-blue-grad">Build &amp;
                        Deliver</span></h2>
                <p class="bk-sub">A proven six-stage methodology that ensures security, compliance, and performance at
                    every milestone.</p>
            </div>

            <div class="bk-process-steps">
                <div class="bk-step">
                    <div class="bk-step-num">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <circle cx="11" cy="11" r="8" />
                            <line x1="21" y1="21" x2="16.65" y2="16.65" />
                        </svg>
                    </div>
                    <div class="bk-step-title">Research &amp; Analysis</div>
                    <div class="bk-step-desc">Deep-dive into your requirements, workflows, and compliance needs.</div>
                </div>
                <div class="bk-step">
                    <div class="bk-step-num">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <rect x="3" y="3" width="18" height="18" rx="2" />
                            <path d="M3 9h18M9 21V9" />
                        </svg>
                    </div>
                    <div class="bk-step-title">Architecture &amp; Planning</div>
                    <div class="bk-step-desc">System design with compliance-first security architecture.</div>
                </div>
                <div class="bk-step">
                    <div class="bk-step-num">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <rect x="3" y="3" width="18" height="18" rx="2" ry="2" />
                            <circle cx="8.5" cy="8.5" r="1.5" />
                            <polyline points="21 15 16 10 5 21" />
                        </svg>
                    </div>
                    <div class="bk-step-title">Secure UI/UX Design</div>
                    <div class="bk-step-desc">Intuitive interfaces crafted for trust and simplicity.</div>
                </div>
                <div class="bk-step">
                    <div class="bk-step-num">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <polyline points="16 18 22 12 16 6" />
                            <polyline points="8 6 2 12 8 18" />
                        </svg>
                    </div>
                    <div class="bk-step-title">Development &amp; Integration</div>
                    <div class="bk-step-desc">Agile development with full API and third-party integration.</div>
                </div>
                <div class="bk-step">
                    <div class="bk-step-num">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                        </svg>
                    </div>
                    <div class="bk-step-title">Security Audit</div>
                    <div class="bk-step-desc">Penetration testing, vulnerability scans, and compliance sign-off.</div>
                </div>
                <div class="bk-step">
                    <div class="bk-step-num">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />
                            <polyline points="22 4 12 14.01 9 11.01" />
                        </svg>
                    </div>
                    <div class="bk-step-title">Deploy &amp; Maintain</div>
                    <div class="bk-step-desc">Live deployment with 24/7 monitoring and ongoing support.</div>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══ FEATURES ═══════════════════════════════════════ -->
    <section class="bk-section bk-features">
        <div class="bk-container">
            <div class="bk-section-head">
                <div class="bk-tag">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2.5">
                        <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2" />
                    </svg>
                    Platform Features
                </div>
                <h2 class="bk-heading" style="margin-top:16px;">Built for <span class="text-grad">Modern Finance</span>
                </h2>
                <p class="bk-sub">Every feature engineered with the precision that financial services demand.</p>
            </div>

            <div class="bk-features-grid">
                <div class="bk-feat">
                    <div class="bk-feat-icon"
                        style="background:rgba(46,106,255,.12);border:1px solid rgba(46,106,255,.2);">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#2e6aff"
                            stroke-width="2.5">
                            <polyline points="22 12 18 12 15 21 9 3 6 12 2 12" />
                        </svg>
                    </div>
                    <div class="bk-feat-text"><strong>Real-Time Transactions</strong>
                        <p>Sub-millisecond transaction processing with live balance updates and reconciliation.</p>
                    </div>
                </div>
                <div class="bk-feat">
                    <div class="bk-feat-icon"
                        style="background:rgba(249,115,22,.1);border:1px solid rgba(249,115,22,.2);">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="var(--orange)"
                            stroke-width="2.5">
                            <rect x="3" y="11" width="18" height="11" rx="2" />
                            <path d="M7 11V7a5 5 0 0 1 10 0v4" />
                        </svg>
                    </div>
                    <div class="bk-feat-text"><strong>Multi-Layer Security</strong>
                        <p>MFA, biometrics, hardware tokens, and behavioral analytics working in concert.</p>
                    </div>
                </div>
                <div class="bk-feat">
                    <div class="bk-feat-icon"
                        style="background:rgba(34,211,238,.1);border:1px solid rgba(34,211,238,.2);">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="var(--cyan)"
                            stroke-width="2.5">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2" />
                            <circle cx="12" cy="7" r="4" />
                        </svg>
                    </div>
                    <div class="bk-feat-text"><strong>KYC &amp; Verification Systems</strong>
                        <p>Automated identity verification with document scanning and liveness detection.</p>
                    </div>
                </div>
                <div class="bk-feat">
                    <div class="bk-feat-icon"
                        style="background:rgba(251,191,36,.1);border:1px solid rgba(251,191,36,.2);">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="var(--gold)"
                            stroke-width="2.5">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                        </svg>
                    </div>
                    <div class="bk-feat-text"><strong>Data Encryption &amp; Privacy</strong>
                        <p>End-to-end AES-256 encryption with zero-knowledge architecture for sensitive data.</p>
                    </div>
                </div>
                <div class="bk-feat">
                    <div class="bk-feat-icon"
                        style="background:rgba(167,139,250,.1);border:1px solid rgba(167,139,250,.2);">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#a78bfa"
                            stroke-width="2.5">
                            <rect x="5" y="2" width="14" height="20" rx="2" />
                            <line x1="12" y1="18" x2="12.01" y2="18" />
                        </svg>
                    </div>
                    <div class="bk-feat-text"><strong>Cross-Platform Accessibility</strong>
                        <p>Unified experience across web, iOS, Android, and wearable devices.</p>
                    </div>
                </div>
                <div class="bk-feat">
                    <div class="bk-feat-icon"
                        style="background:rgba(74,222,128,.1);border:1px solid rgba(74,222,128,.2);">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#4ade80"
                            stroke-width="2.5">
                            <line x1="18" y1="20" x2="18" y2="10" />
                            <line x1="12" y1="20" x2="12" y2="4" />
                            <line x1="6" y1="20" x2="6" y2="14" />
                        </svg>
                    </div>
                    <div class="bk-feat-text"><strong>Advanced Analytics</strong>
                        <p>Real-time dashboards, customer insights, and predictive fraud scoring.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══ TECH STACK ══════════════════════════════════════ -->
    <section class="bk-section bk-tech">
        <div class="bk-container">
            <div class="bk-section-head">
                <div class="bk-tag">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2.5">
                        <polyline points="16 18 22 12 16 6" />
                        <polyline points="8 6 2 12 8 18" />
                    </svg>
                    Tech Stack
                </div>
                <h2 class="bk-heading" style="margin-top:16px;">Tools &amp; <span
                        class="text-blue-grad">Technologies</span></h2>
                <p class="bk-sub">We leverage best-in-class technologies to build solutions you can rely on.</p>
            </div>

            <div class="bk-tech-grid">
                <div class="bk-tech-pill">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="var(--blue-light)"
                        stroke-width="2">
                        <polyline points="16 18 22 12 16 6" />
                        <polyline points="8 6 2 12 8 18" />
                    </svg>
                    <span>Open Banking APIs</span>
                </div>
                <div class="bk-tech-pill">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="var(--gold)"
                        stroke-width="2">
                        <rect x="2" y="5" width="20" height="14" rx="2" />
                        <line x1="2" y1="10" x2="22" y2="10" />
                    </svg>
                    <span>Payment Gateways</span>
                </div>
                <div class="bk-tech-pill">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="var(--cyan)"
                        stroke-width="2">
                        <path d="M18 10h-1.26A8 8 0 1 0 9 20h9a5 5 0 0 0 0-10z" />
                    </svg>
                    <span>Cloud Infrastructure</span>
                </div>
                <div class="bk-tech-pill">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="var(--orange)"
                        stroke-width="2">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                    </svg>
                    <span>Security Protocols</span>
                </div>
                <div class="bk-tech-pill">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#a78bfa"
                        stroke-width="2">
                        <ellipse cx="12" cy="5" rx="9" ry="3" />
                        <path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5" />
                        <path d="M3 12c0 1.66 4 3 9 3s9-1.34 9-3" />
                    </svg>
                    <span>Data Analytics</span>
                </div>
                <div class="bk-tech-pill">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#4ade80"
                        stroke-width="2">
                        <rect x="2" y="3" width="20" height="14" rx="2" />
                        <path d="M8 21h8M12 17v4" />
                    </svg>
                    <span>Microservices</span>
                </div>
                <div class="bk-tech-pill">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="var(--blue-light)"
                        stroke-width="2">
                        <circle cx="12" cy="12" r="10" />
                        <line x1="2" y1="12" x2="22" y2="12" />
                        <path
                            d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z" />
                    </svg>
                    <span>Blockchain Ledger</span>
                </div>
                <div class="bk-tech-pill">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="var(--cyan)"
                        stroke-width="2">
                        <path
                            d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z" />
                    </svg>
                    <span>AI / ML Models</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══ STATS ════════════════════════════════════════════ -->
    <section class="bk-stats">
        <div class="bk-container">
            <div class="bk-stats-grid">
                <div class="bk-stat-item">
                    <div class="bk-stat-icon">🔒</div>
                    <div class="bk-stat-num text-blue-grad">99.9%</div>
                    <div class="bk-stat-lbl">Platform Uptime SLA</div>
                </div>
                <div class="bk-stat-item">
                    <div class="bk-stat-icon">⚡</div>
                    <div class="bk-stat-num text-grad">10M+</div>
                    <div class="bk-stat-lbl">Transactions Processed</div>
                </div>
                <div class="bk-stat-item">
                    <div class="bk-stat-icon">🔗</div>
                    <div class="bk-stat-num" style="color:var(--cyan)">50+</div>
                    <div class="bk-stat-lbl">Fintech Integrations</div>
                </div>
                <div class="bk-stat-item">
                    <div class="bk-stat-icon">🛡️</div>
                    <div class="bk-stat-num" style="color:var(--gold)">0</div>
                    <div class="bk-stat-lbl">Security Breaches</div>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══ TESTIMONIALS ════════════════════════════════════ -->
    <section class="bk-section bk-testi">
        <div class="bk-container">
            <div class="bk-section-head">
                <div class="bk-tag">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2.5">
                        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z" />
                    </svg>
                    Client Stories
                </div>
                <h2 class="bk-heading" style="margin-top:16px;">Trusted by <span class="text-grad">Financial
                        Leaders</span></h2>
            </div>

            <div class="bk-testi-grid">
                <div class="bk-testi-card">
                    <div class="bk-stars">★★★★★</div>
                    <p class="bk-testi-quote">"Accrosian delivered a core banking system that handles our entire
                        transaction load flawlessly. Their security implementation gave us the confidence to go live in
                        record time."</p>
                    <div class="bk-testi-author">
                        <div class="bk-testi-avatar" style="background:linear-gradient(135deg,#1a4fd6,#22d3ee);">RK
                        </div>
                        <div class="bk-testi-info"><strong>Rajesh Kumar</strong><span>CTO, NovaPay Fintech</span></div>
                    </div>
                </div>
                <div class="bk-testi-card">
                    <div class="bk-stars">★★★★★</div>
                    <p class="bk-testi-quote">"The fraud detection module they built has saved us millions. Their
                        AI-driven approach and deep understanding of financial compliance standards is unmatched."</p>
                    <div class="bk-testi-author">
                        <div class="bk-testi-avatar" style="background:linear-gradient(135deg,#f97316,#fbbf24);">SP
                        </div>
                        <div class="bk-testi-info"><strong>Sarah Patel</strong><span>VP Technology, SecureBank
                                Ltd</span></div>
                    </div>
                </div>
                <div class="bk-testi-card">
                    <div class="bk-stars">★★★★★</div>
                    <p class="bk-testi-quote">"From architecture to deployment, the team was professional and
                        transparent. Our mobile banking app now has a 4.9 star rating with 200K+ daily active users."
                    </p>
                    <div class="bk-testi-author">
                        <div class="bk-testi-avatar" style="background:linear-gradient(135deg,#22d3ee,#4ade80);">AM
                        </div>
                        <div class="bk-testi-info"><strong>Arjun Mehta</strong><span>Head of Digital, ClearLend
                                Capital</span></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══ CTA ══════════════════════════════════════════════ -->
    <section class="bk-cta-section">
        <div class="bk-container">
            <div class="bk-tag" style="margin:0 auto 20px; display:table;">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2.5">
                    <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2" />
                </svg>
                Start Building
            </div>
            <h2 class="bk-heading">Build <span class="text-grad">Secure Banking Solutions</span> With Us</h2>
            <p class="bk-sub">Let's architect a future-proof, compliant, and scalable fintech platform tailored exactly
                to your institution's needs.</p>
            <div class="bk-hero-btns">
                <a href="{{ route('contact') }}" class="bk-btn bk-btn-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2.5" style="width:16px;height:16px">
                        <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2" />
                    </svg>
                    Start Your Project
                </a>
                <a href="{{ route('portfolio') }}" class="bk-btn bk-btn-outline">
                    View Case Studies →
                </a>
            </div>
        </div>
    </section>

    <!-- ═══ CONTACT ══════════════════════════════════════════ -->
    <section class="bk-contact">
        <div class="bk-container">
            <div class="bk-contact-grid">
                <div class="bk-contact-info">
                    <div class="bk-tag" style="margin-bottom:16px;">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2.5">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
                            <circle cx="12" cy="10" r="3" />
                        </svg>
                        Get In Touch
                    </div>
                    <h3>Ready to Transform Your<br><span class="text-grad">Financial Platform?</span></h3>
                    <p>Fill in the form and our banking technology experts will reach out within 24 hours to discuss
                        your project.</p>

                    <div class="bk-contact-detail">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2.5">
                            <path
                                d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.61 3.42 2 2 0 0 1 3.6 1.25h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.96a16 16 0 0 0 6 6l.91-.91a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 21.73 16.92z" />
                        </svg>
                        +91 98765 43210
                    </div>
                    <div class="bk-contact-detail">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2.5">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
                            <polyline points="22,6 12,13 2,6" />
                        </svg>
                        banking@accrosian.com
                    </div>
                    <div class="bk-contact-detail">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2.5">
                            <circle cx="12" cy="12" r="10" />
                            <polyline points="12 6 12 12 16 14" />
                        </svg>
                        Response within 24 hours
                    </div>
                </div>

                <div>
                    <form action="{{ route('contact.store') }}" method="POST" class="bk-form">
                        @csrf
                        <div class="bk-input-row">
                            <input type="text" name="name" placeholder="Your Full Name" class="bk-input" required>
                            <input type="email" name="email" placeholder="Business Email" class="bk-input" required>
                        </div>
                        <div class="bk-input-row">
                            <input type="tel" name="phone" placeholder="Phone Number" class="bk-input">
                            <input type="text" name="company" placeholder="Company / Institution" class="bk-input">
                        </div>
                        <select class="bk-input" name="service">
                            <option value="" disabled selected>Select Service</option>
                            <option>Digital Banking Solutions</option>
                            <option>Core Banking Development</option>
                            <option>Payment Gateway Integration</option>
                            <option>Mobile Banking App</option>
                            <option>Fraud Detection Systems</option>
                            <option>API & Fintech Integration</option>
                        </select>
                        <textarea name="message" class="bk-input"
                            placeholder="Tell us about your project requirements..."></textarea>
                        <input type="hidden" name="subject" value="Banking Solutions Inquiry">
                        <button type="submit" class="bk-btn bk-btn-primary"
                            style="width:100%; justify-content:center; border-radius:10px; padding:16px;">
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
    </section>

</div>
@endsection