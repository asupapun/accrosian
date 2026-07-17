@extends('layouts.app')

@section('title', 'CRM Software Development | Accrosian')

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
    position: relative;
    min-height: 450px;
    padding: 80px 0 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
    background: linear-gradient(rgba(4, 13, 26, .85), rgba(4, 13, 26, .90)),
    url("{{ asset('assets/images/hero_crm.jpg') }}");
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}

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
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    max-width: 1000px;
    margin: auto;
}

.bk-hero-title {
    color: #fff;
    font-size: 28px;
}

.bk-hero-sub {
    max-width: 760px;
    margin: 25px auto 0;
    text-align: center;
    color: rgba(255, 255, 255, .72);
    font-size: 14px;
    line-height: 1.9;
}

.bk-hero-btns {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 20px;
    margin-top: 45px;
    width: 100%;
}

.hero-content {
    width: 100%;
    max-width: 1000px;
    margin: auto;
    text-align: center;
    display: flex;
    flex-direction: column;
    align-items: center;

}

/* ═══════════════════════════════════════════════
   SERVICE / FEATURE CARDS
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
   WHY US
═══════════════════════════════════════════════ */
.bk-why-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 72px;
    align-items: stretch;
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

/* ═══════════════════════════════════════════════
   PROCESS
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
   FEATURES GRID
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
   TECH PILLS
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
   STATS BAR
═══════════════════════════════════════════════ */
.bk-stats {
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
}

/* ═══════════════════════════════════════════════
   TESTIMONIALS
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
   FAQ
═══════════════════════════════════════════════ */
.bk-faq {
    max-width: 860px;
    margin: 0 auto;
    display: flex;
    flex-direction: column;
    gap: 14px;
}

.bk-faq-item {
    background: var(--navy-light);
    border: 1px solid var(--navy-2);
    border-radius: 14px;
    padding: 6px 24px;
    transition: border-color .25s;
}

.bk-faq-item[open] {
    border-color: var(--glass-border-hover);
}

.bk-faq-item summary {
    list-style: none;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 18px 0;
    font-family: var(--ff-head);
    font-size: .95rem;
    font-weight: 700;
    color: #fff;
}

.bk-faq-item summary::-webkit-details-marker {
    display: none;
}

.bk-faq-plus {
    width: 26px;
    height: 26px;
    border-radius: 50%;
    border: 1px solid rgba(249, 115, 22, .35);
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    color: var(--orange);
    font-size: 1rem;
    transition: transform .25s;
}

.bk-faq-item[open] .bk-faq-plus {
    transform: rotate(45deg);
}

.bk-faq-item p {
    font-size: .85rem;
    color: rgba(255, 255, 255, .55);
    line-height: 1.7;
    padding-bottom: 20px;
}

/* ═══════════════════════════════════════════════
   CTA SECTION
═══════════════════════════════════════════════ */
.cta-section {
    padding: 90px 0;
    position: relative;
    overflow: hidden;
    text-align: center;
    background:
        linear-gradient(135deg, rgba(5, 10, 35, 0.88), rgba(10, 14, 46, 0.82), rgba(232, 117, 10, 0.18)),
        url('/assets/images/cta-img.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    border-top: 1px solid rgba(232, 117, 10, 0.15);
    border-bottom: 1px solid rgba(232, 117, 10, 0.15);
}

.cta-section::before {
    content: "";
    position: absolute;
    inset: 0;
    background: radial-gradient(circle at center, rgba(232, 117, 10, 0.18), transparent 60%);
    z-index: 1;
}

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
    font-family: var(--ff-head);
    font-size: clamp(2.8rem, 5vw, 5rem);
    font-weight: 800;
    line-height: 1.1;
    margin-bottom: 24px;
    color: #fff;
    text-shadow: 0 10px 30px rgba(0, 0, 0, 0.35);
}

.cta-title .text-gradient {
    background: linear-gradient(135deg, #ff8c1a, #ffb347);
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
    .bk-why-grid {
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

    .bk-stat-cell {
        border-right: none;
        border-bottom: 1px solid rgba(255, 255, 255, .06);
    }

    .bk-stat-cell:last-child {
        border-bottom: none;
    }
}
</style>

<div class="bk">

    {{-- ══════════════ HERO ══════════════ --}}
    <section class="bk-hero">
        <div class="bk-wrap">
            <div class="bk-hero-grid">

                {{-- LEFT --}}
                <div class="hero-content">
                    <h1 class="bk-h1 bk-hero-title">
                        Advanced CRM with<br>
                        <span class="grad-orange">Integrated Automation Technology</span>
                    </h1>
                    <p class="bk-hero-sub">Revolutionize Your Business with Smart Communication and Operations
                        Management Streamline your workflows and enhance your efficiency with our Highly Advanced CRM,
                        powered by Integrated Automation Technology. This cutting-edge solution bridges the gap between
                        internal departments, optimizes lead management, and handles operations intelligently, ensuring
                        a seamless business experience.</p>

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
                            Request a Demo
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ══════════════ CORE FEATURES ══════════════ --}}
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
                    Core Features
                </span>
                <h2 class="bk-h2" style="margin-top:16px;">Everything Your Team Needs to <span class="grad-orange">Sell
                        Smarter</span></h2>
                <div class="bk-divider"></div>
                <p class="bk-sub">A CRM engineered around real sales workflows, not generic templates.</p>
            </div>

            <div class="bk-cards">
                <div class="bk-card">
                    <div class="bk-card-ico"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="12" r="3" />
                            <path
                                d="M12 1v6M12 17v6M4.22 4.22l4.24 4.24M15.54 15.54l4.24 4.24M1 12h6M17 12h6M4.22 19.78l4.24-4.24M15.54 8.46l4.24-4.24" />
                        </svg></div>
                    <div class="bk-card-title">Intelligent Lead Management</div>
                    <div class="bk-card-desc">Capture leads from every channel, score them automatically, and route them
                        to the right rep in seconds.</div>
                    <a href="{{ route('contact') }}" class="bk-card-link">Learn more <svg
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2.5">
                            <path d="M5 12h14M12 5l7 7-7 7" />
                        </svg></a>
                </div>
                <div class="bk-card">
                    <div class="bk-card-ico"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                            <circle cx="9" cy="7" r="4" />
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                        </svg></div>
                    <div class="bk-card-title">Smart Internal Communication</div>
                    <div class="bk-card-desc">Keep sales, marketing, and support in sync with shared timelines, notes,
                        and real-time updates.</div>
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
                    <div class="bk-card-title">Automated Workflow Engine</div>
                    <div class="bk-card-desc">Build drag-and-drop workflows for approvals, follow-ups, and reminders so
                        nothing slips through.</div>
                    <a href="{{ route('contact') }}" class="bk-card-link">Learn more <svg
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2.5">
                            <path d="M5 12h14M12 5l7 7-7 7" />
                        </svg></a>
                </div>
                <div class="bk-card">
                    <div class="bk-card-ico"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2">
                            <path d="M18 10h-1.26A8 8 0 1 0 9 20h9a5 5 0 0 0 0-10z" />
                        </svg></div>
                    <div class="bk-card-title">Smart Operations Handling</div>
                    <div class="bk-card-desc">Coordinate sales, service, and delivery from a single platform with
                        predictive bottleneck alerts.</div>
                    <a href="{{ route('contact') }}" class="bk-card-link">Learn more <svg
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2.5">
                            <path d="M5 12h14M12 5l7 7-7 7" />
                        </svg></a>
                </div>
                <div class="bk-card">
                    <div class="bk-card-ico"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2">
                            <line x1="18" y1="20" x2="18" y2="10" />
                            <line x1="12" y1="20" x2="12" y2="4" />
                            <line x1="6" y1="20" x2="6" y2="14" />
                        </svg></div>
                    <div class="bk-card-title">Real-Time Reporting &amp; Insights</div>
                    <div class="bk-card-desc">Live dashboards on team performance, lead conversion, and revenue so
                        decisions are never a guess.</div>
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
                    <div class="bk-card-title">Mobile CRM Access</div>
                    <div class="bk-card-desc">Full CRM functionality on iOS and Android, so your field and sales teams
                        stay productive anywhere.</div>
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
                    <h2 class="bk-h2">Built for <span class="grad-orange">Collaboration &amp; Growth</span></h2>
                    <div class="bk-divider" style="margin:14px 0 20px;"></div>
                    <p class="bk-sub" style="margin-top:0;margin-bottom:32px;">We design CRMs that break down silos
                        between departments, so your teams work off one source of truth from first contact to closed
                        deal.</p>

                    <div class="bk-feature-list">
                        <div class="bk-feat-item">
                            <div class="bk-feat-ico"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2.5">
                                    <rect x="3" y="4" width="18" height="18" rx="2" />
                                    <path d="M16 2v4M8 2v4M3 10h18" />
                                </svg></div>
                            <div class="bk-feat-body"><strong>Centralized Contact Hub</strong><span>Every lead, client,
                                    and interaction organized in one searchable database.</span></div>
                        </div>
                        <div class="bk-feat-item">
                            <div class="bk-feat-ico"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2.5">
                                    <polyline points="22 12 18 12 15 21 9 3 6 12 2 12" />
                                </svg></div>
                            <div class="bk-feat-body"><strong>Automated Follow-Ups</strong><span>Never miss a touchpoint
                                    with rule-based reminders and sequenced outreach.</span></div>
                        </div>
                        <div class="bk-feat-item">
                            <div class="bk-feat-ico"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2.5">
                                    <circle cx="12" cy="12" r="10" />
                                    <path d="M12 6v6l4 2" />
                                </svg></div>
                            <div class="bk-feat-body"><strong>AI-Driven Insights</strong><span>Predictive scoring and
                                    trend detection to focus effort on deals that convert.</span></div>
                        </div>
                        <div class="bk-feat-item">
                            <div class="bk-feat-ico"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2.5">
                                    <polyline points="16 18 22 12 16 6" />
                                    <polyline points="8 6 2 12 8 18" />
                                </svg></div>
                            <div class="bk-feat-body"><strong>Seamless Integrations</strong><span>Connects with
                                    WhatsApp, Google, email, and the tools your team already uses.</span></div>
                        </div>
                        <div class="bk-feat-item">
                            <div class="bk-feat-ico"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2.5">
                                    <path
                                        d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.61 3.42 2 2 0 0 1 3.6 1.25h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.96a16 16 0 0 0 6 6l.91-.91a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 21.73 16.92z" />
                                </svg></div>
                            <div class="bk-feat-body"><strong>Built to Scale With You</strong><span>From a five-person
                                    sales floor to a multi-branch enterprise, the same system grows with you.</span>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Right: image --}}
                <div class="bk-right-full-image">
                    <img src="{{ asset('assets/images/crm-dashboard.jpg') }}" alt="CRM Software Solutions">
                </div>
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
                        Deliver Your CRM</span></h2>
                <div class="bk-divider"></div>
                <p class="bk-sub bk-sub-white">A proven six-stage methodology so your CRM launches on time and fits how
                    your team actually sells.</p>
            </div>

            <div class="bk-steps">
                <div class="bk-step">
                    <div class="bk-step-circle"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2">
                            <circle cx="11" cy="11" r="8" />
                            <line x1="21" y1="21" x2="16.65" y2="16.65" />
                        </svg></div>
                    <div class="bk-step-label">Discovery &amp; Mapping</div>
                    <div class="bk-step-desc">Understanding your sales cycle, teams, and data sources.</div>
                </div>
                <div class="bk-step">
                    <div class="bk-step-circle"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2">
                            <rect x="3" y="3" width="18" height="18" rx="2" />
                            <path d="M3 9h18M9 21V9" />
                        </svg></div>
                    <div class="bk-step-label">Architecture &amp; Planning</div>
                    <div class="bk-step-desc">Designing data models, modules, and integration points.</div>
                </div>
                <div class="bk-step">
                    <div class="bk-step-circle"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2">
                            <rect x="3" y="3" width="18" height="18" rx="2" />
                            <circle cx="8.5" cy="8.5" r="1.5" />
                            <polyline points="21 15 16 10 5 21" />
                        </svg></div>
                    <div class="bk-step-label">Workflow &amp; UI Design</div>
                    <div class="bk-step-desc">Interfaces and automations built around how reps actually work.</div>
                </div>
                <div class="bk-step">
                    <div class="bk-step-circle"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2">
                            <polyline points="16 18 22 12 16 6" />
                            <polyline points="8 6 2 12 8 18" />
                        </svg></div>
                    <div class="bk-step-label">Development &amp; Integration</div>
                    <div class="bk-step-desc">Agile builds with full API and third-party connections.</div>
                </div>
                <div class="bk-step">
                    <div class="bk-step-circle"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                        </svg></div>
                    <div class="bk-step-label">Testing &amp; QA</div>
                    <div class="bk-step-desc">Rigorous testing across roles, permissions, and edge cases.</div>
                </div>
                <div class="bk-step">
                    <div class="bk-step-circle"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />
                            <polyline points="22 4 12 14.01 9 11.01" />
                        </svg></div>
                    <div class="bk-step-label">Deploy &amp; Train</div>
                    <div class="bk-step-desc">Go-live support, team onboarding, and ongoing maintenance.</div>
                </div>
            </div>
        </div>
    </section>

    {{-- ══════════════ FEATURES GRID ══════════════ --}}
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
                <h2 class="bk-h2" style="margin-top:16px;">Notable <span class="grad-orange">CRM Capabilities</span>
                </h2>
                <div class="bk-divider"></div>
                <p class="bk-sub">Every module built with the precision that a modern sales team demands.</p>
            </div>

            <div class="bk-feat-grid">
                <div class="bk-feat-cell">
                    <div class="bk-feat-cell-ico" style="background:#eff4ff;border:1px solid rgba(46,106,255,.15)"><svg
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#2e6aff"
                            stroke-width="2.5">
                            <rect x="3" y="4" width="18" height="18" rx="2" />
                            <path d="M16 2v4M8 2v4M3 10h18" />
                        </svg></div>
                    <div class="bk-feat-cell-txt"><strong>Contact &amp; Lead Management</strong>
                        <p>Organize and manage every contact, lead, and client in a centralized hub.</p>
                    </div>
                </div>
                <div class="bk-feat-cell">
                    <div class="bk-feat-cell-ico" style="background:#fff7ed;border:1px solid rgba(249,115,22,.15)"><svg
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#f97316"
                            stroke-width="2.5">
                            <path d="M18 10h-1.26A8 8 0 1 0 9 20h9a5 5 0 0 0 0-10z" />
                        </svg></div>
                    <div class="bk-feat-cell-txt"><strong>Sales Pipeline Management</strong>
                        <p>Track opportunities through every stage to improve deal closure rates.</p>
                    </div>
                </div>
                <div class="bk-feat-cell">
                    <div class="bk-feat-cell-ico" style="background:#ecfeff;border:1px solid rgba(34,211,238,.2)"><svg
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#0891b2"
                            stroke-width="2.5">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
                            <polyline points="22 6 12 13 2 6" />
                        </svg></div>
                    <div class="bk-feat-cell-txt"><strong>Email Marketing Integration</strong>
                        <p>Create and send personalized campaigns directly from the CRM.</p>
                    </div>
                </div>
                <div class="bk-feat-cell">
                    <div class="bk-feat-cell-ico" style="background:#fefce8;border:1px solid rgba(245,158,11,.2)"><svg
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#d97706"
                            stroke-width="2.5">
                            <rect x="3" y="4" width="18" height="18" rx="2" />
                            <path d="M9 16l2 2 4-4" />
                        </svg></div>
                    <div class="bk-feat-cell-txt"><strong>Task &amp; Activity Tracking</strong>
                        <p>Assign tasks, set reminders, and log every customer interaction.</p>
                    </div>
                </div>
                <div class="bk-feat-cell">
                    <div class="bk-feat-cell-ico" style="background:#faf5ff;border:1px solid rgba(124,58,237,.15)"><svg
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#7c3aed"
                            stroke-width="2.5">
                            <line x1="18" y1="20" x2="18" y2="10" />
                            <line x1="12" y1="20" x2="12" y2="4" />
                            <line x1="6" y1="20" x2="6" y2="14" />
                        </svg></div>
                    <div class="bk-feat-cell-txt"><strong>Reporting &amp; Analytics</strong>
                        <p>Generate insightful reports to measure performance and guide decisions.</p>
                    </div>
                </div>
                <div class="bk-feat-cell">
                    <div class="bk-feat-cell-ico" style="background:#f0fdf4;border:1px solid rgba(34,197,94,.2)"><svg
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#16a34a"
                            stroke-width="2.5">
                            <rect x="5" y="2" width="14" height="20" rx="2" />
                            <line x1="12" y1="18" x2="12.01" y2="18" />
                        </svg></div>
                    <div class="bk-feat-cell-txt"><strong>Customization &amp; Scalability</strong>
                        <p>Custom fields, workflows, and roles that grow as your business grows.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ══════════════ TECH / INTEGRATIONS ══════════════ --}}
    <section class="bk-sec bk-sec-alt">
        <div class="bk-wrap">
            <div class="bk-sec-head">
                <span class="bk-eyebrow">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2.5">
                        <polyline points="16 18 22 12 16 6" />
                        <polyline points="8 6 2 12 8 18" />
                    </svg>
                    Integrations
                </span>
                <h2 class="bk-h2" style="margin-top:16px;">Connects With <span class="grad-blue">Your Favorite
                        Tools</span></h2>
                <div class="bk-divider"></div>
                <p class="bk-sub">Bring your existing stack in, no rip-and-replace required.</p>
            </div>
            <div class="bk-pills">
                <div class="bk-pill"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                        stroke="#16a34a" stroke-width="2">
                        <path d="M17 8c0-3.31-2.69-6-6-6S5 4.69 5 8c0 5 6 10 6 10s6-5 6-10z" />
                    </svg><span>WhatsApp Business API</span></div>
                <div class="bk-pill"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                        stroke="#2e6aff" stroke-width="2">
                        <circle cx="12" cy="12" r="10" />
                        <path
                            d="M2 12h20M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z" />
                    </svg><span>Google Workspace</span></div>
                <div class="bk-pill"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                        stroke="#7c3aed" stroke-width="2">
                        <rect x="4" y="4" width="16" height="16" rx="3" />
                        <path d="M8 12h8M12 8v8" />
                    </svg><span>Facebook &amp; Instagram</span></div>
                <div class="bk-pill"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                        stroke="#f97316" stroke-width="2">
                        <rect x="2" y="5" width="20" height="14" rx="2" />
                        <line x1="2" y1="10" x2="22" y2="10" />
                    </svg><span>Payment Gateways</span></div>
                <div class="bk-pill"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                        stroke="#0891b2" stroke-width="2">
                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
                        <polyline points="22 6 12 13 2 6" />
                    </svg><span>Email Marketing Tools</span></div>
                <div class="bk-pill"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                        stroke="#d97706" stroke-width="2">
                        <path d="M18 10h-1.26A8 8 0 1 0 9 20h9a5 5 0 0 0 0-10z" />
                    </svg><span>Zapier</span></div>
                <div class="bk-pill"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                        stroke="#22c55e" stroke-width="2">
                        <rect x="2" y="3" width="20" height="14" rx="2" />
                        <path d="M8 21h8M12 17v4" />
                    </svg><span>REST &amp; Webhook APIs</span></div>
                <div class="bk-pill"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                        stroke="#2e6aff" stroke-width="2">
                        <path
                            d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z" />
                    </svg><span>AI / ML Models</span></div>
            </div>
        </div>
    </section>

    {{-- ══════════════ STATS ══════════════ --}}
    <section class="bk-stats">
        <div class="bk-wrap">
            <div class="bk-stats-grid">
                <div class="bk-stat-cell">
                    <div class="bk-stat-em">⚡</div>
                    <div class="bk-stat-num grad-orange">99.9%</div>
                    <div class="bk-stat-lbl">Platform Uptime SLA</div>
                </div>
                <div class="bk-stat-cell">
                    <div class="bk-stat-em">📈</div>
                    <div class="bk-stat-num grad-blue">3x</div>
                    <div class="bk-stat-lbl">Avg. Lead Conversion Lift</div>
                </div>
                <div class="bk-stat-cell">
                    <div class="bk-stat-em">🔗</div>
                    <div class="bk-stat-num" style="color:#22d3ee">30+</div>
                    <div class="bk-stat-lbl">Native Integrations</div>
                </div>
                <div class="bk-stat-cell">
                    <div class="bk-stat-em">🕐</div>
                    <div class="bk-stat-num" style="color:#fbbf24">24/7</div>
                    <div class="bk-stat-lbl">Dedicated Support</div>
                </div>
            </div>
        </div>
    </section>

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
                <h2 class="bk-h2" style="margin-top:16px;">Trusted by <span class="grad-orange">Growing Sales
                        Teams</span></h2>
                <div class="bk-divider"></div>
            </div>
            <div class="bk-testi-grid">
                <div class="bk-testi">
                    <div class="bk-stars">★★★★★</div>
                    <p class="bk-testi-q">"Accrosian's CRM has transformed how we manage customer relationships. The
                        data-driven insights let us make smarter decisions, and our team's productivity has visibly
                        improved."</p>
                    <div class="bk-testi-author">
                        <div class="bk-testi-av" style="background:linear-gradient(135deg,#1a4fd6,#22d3ee);">AC</div>
                        <div class="bk-testi-info"><strong>Ashish Chopra</strong><span>Sales Director, NovaRetail</span>
                        </div>
                    </div>
                </div>
                <div class="bk-testi">
                    <div class="bk-stars">★★★★★</div>
                    <p class="bk-testi-q">"The automated lead routing and WhatsApp integration alone cut our response
                        time in half. Our conversion rate has never been higher."</p>
                    <div class="bk-testi-author">
                        <div class="bk-testi-av" style="background:linear-gradient(135deg,#f97316,#fbbf24);">PD</div>
                        <div class="bk-testi-info"><strong>Priya Desai</strong><span>Founder, ShopEase</span></div>
                    </div>
                </div>
                <div class="bk-testi">
                    <div class="bk-stars">★★★★★</div>
                    <p class="bk-testi-q">"From discovery to go-live, the team understood exactly how our sales floor
                        works. Onboarding took days, not months, and support has been outstanding since."</p>
                    <div class="bk-testi-author">
                        <div class="bk-testi-av" style="background:linear-gradient(135deg,#22d3ee,#4ade80);">RK</div>
                        <div class="bk-testi-info"><strong>Rajesh Kumar</strong><span>CTO, TechVenture India</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ══════════════ FAQ ══════════════ --}}
    <section class="bk-sec bk-sec-navy">
        <div class="bk-wrap">
            <div class="bk-sec-head">
                <span class="bk-eyebrow">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2.5">
                        <circle cx="12" cy="12" r="10" />
                        <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 2-3 4" />
                        <line x1="12" y1="17" x2="12.01" y2="17" />
                    </svg>
                    FAQs
                </span>
                <h2 class="bk-h2 bk-h2-white" style="margin-top:16px;">Frequently Asked <span
                        class="grad-blue">Questions</span></h2>
                <div class="bk-divider"></div>
            </div>

            <div class="bk-faq">
                <details class="bk-faq-item">
                    <summary>What is Accrosian's CRM? <span class="bk-faq-plus">+</span></summary>
                    <p>A custom-built CRM platform that centralizes leads, contacts, communication, and your sales
                        pipeline, designed around your specific sales process rather than a rigid template.</p>
                </details>
                <details class="bk-faq-item">
                    <summary>How do I get started? <span class="bk-faq-plus">+</span></summary>
                    <p>Request a free consultation and our team will map your workflows, propose an architecture, and
                        walk you through a demo before any commitment.</p>
                </details>
                <details class="bk-faq-item">
                    <summary>Can it integrate with tools we already use? <span class="bk-faq-plus">+</span></summary>
                    <p>Yes. The CRM connects with WhatsApp, Google Workspace, email marketing tools, payment gateways,
                        and any system with a REST API or webhook support.</p>
                </details>
                <details class="bk-faq-item">
                    <summary>Is our data secure? <span class="bk-faq-plus">+</span></summary>
                    <p>Every deployment uses 256-bit encryption, role-based access control, and regular security
                        audits to keep customer and business data protected.</p>
                </details>
                <details class="bk-faq-item">
                    <summary>Can the CRM scale as our team grows? <span class="bk-faq-plus">+</span></summary>
                    <p>Absolutely. The platform is built on a modular, cloud-native architecture so you can add users,
                        modules, and integrations without re-platforming.</p>
                </details>
                <details class="bk-faq-item">
                    <summary>Do you provide training and support? <span class="bk-faq-plus">+</span></summary>
                    <p>Yes, onboarding includes team training, and our support desk is available around the clock
                        after go-live.</p>
                </details>
            </div>
        </div>
    </section>

    {{-- ══════════════ CTA ══════════════ --}}
    <section class="cta-section">
        <div class="container cta-inner">
            <span class="section-tag" style="margin-bottom:24px">Ready to Start?</span>
            <h2 class="cta-title">Let's Build Your <span class="text-gradient">Smarter CRM</span> Together</h2>
            <p class="cta-subtitle">Tell us how your team sells and we'll turn it into a CRM that fits. Free
                consultation, no commitment.</p>
            <div class="cta-actions">
                <a href="{{ route('contact') }}" class="btn btn-primary btn-arrow">Get Started</a>
                <a href="{{ route('portfolio') }}" class="btn btn-outline">See Our Work</a>
            </div>
        </div>
    </section>

</div>
@endsection