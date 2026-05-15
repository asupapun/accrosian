@extends('layouts.app')

@section('title', 'Banking & Fintech Solutions | Accrosian')

@section('content')

<link rel="preconnect" href="https://fonts.googleapis.com">
<link
    href="https://fonts.googleapis.com/css2?family=Sora:wght@300;400;600;700;800&family=DM+Sans:ital,wght@0,300;0,400;0,500;0,600;1,400&family=JetBrains+Mono:wght@400;500&display=swap"
    rel="stylesheet">

<style>
:root {
    --navy: #050d1a;
    --navy-mid: #081425;
    --navy-800: #0d1530;
    --navy-700: #111d40;
    --navy-light: #0d2044;
    --black: #000000;
    --orange: #f97316;
    --orange-light: #fb923c;
    --orange-glow: rgba(249, 115, 22, 0.18);
    --orange-border: rgba(249, 115, 22, 0.28);
    --white: #ffffff;
    --white-60: rgba(255, 255, 255, 0.6);
    --white-20: rgba(255, 255, 255, 0.08);
    --white-10: rgba(255, 255, 255, 0.05);
    --glass: rgba(255, 255, 255, 0.06);
    --glass-border: rgba(255, 255, 255, 0.12);
    --glass-border-hover: rgba(249, 115, 22, .38);
    --gradient-orange: linear-gradient(135deg, #e8750a, #f59332);
    --blue-accent: #38bdf8;
    --green-accent: #34d399;
    --radius: 20px;
    --radius-lg: 32px;
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
    background: var(--white);
    color: var(--navy-mid);
    overflow-x: hidden;
    -webkit-font-smoothing: antialiased;
}

.container {
    width: 100%;
    max-width: 1300px;
    /* change this */
    margin: 0 auto;
    padding: 0 20px;
}

h1,
h2,
h3,
h4 {
    font-family: var(--ff-head);
}

/* ─── HERO ─── */
.hero {
    min-height: 100vh;
    padding: 140px 60px 80px;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 60px;
    align-items: center;
    position: relative;
    overflow: hidden;
}

.hero-bg {
    position: absolute;
    inset: 0;
    pointer-events: none;
    background:
        radial-gradient(ellipse 80% 60% at 70% 50%, rgba(249, 115, 22, 0.10) 0%, transparent 65%),
        radial-gradient(ellipse 60% 80% at 20% 20%, rgba(56, 189, 248, 0.06) 0%, transparent 60%),
        linear-gradient(180deg, var(--navy) 0%, #071530 100%);
}

.hero-grid {
    position: absolute;
    inset: 0;
    background-image:
        linear-gradient(rgba(255, 255, 255, 0.025) 1px, transparent 1px),
        linear-gradient(90deg, rgba(255, 255, 255, 0.025) 1px, transparent 1px);
    background-size: 60px 60px;
    mask-image: radial-gradient(ellipse 80% 80% at 50% 50%, black 30%, transparent 100%);
}

.hero-content {
    position: relative;
    z-index: 2;
}

/* .hero-badge {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 7px 16px;
    border-radius: 50px;
    background: var(--glass);
    border: 1px solid var(--orange-border);
    font-size: 0.78rem;
    font-weight: 600;
    color: var(--orange-light);
    letter-spacing: 0.08em;
    text-transform: uppercase;
    margin-bottom: 28px;
}

.hero-badge::before {
    content: '';
    width: 7px;
    height: 7px;
    border-radius: 50%;
    background: var(--orange);
    box-shadow: 0 0 10px var(--orange);
    animation: pulse 2s infinite;
} */

@keyframes pulse {

    0%,
    100% {
        opacity: 1;
        transform: scale(1)
    }

    50% {
        opacity: .5;
        transform: scale(1.4)
    }
}

.hero h1 {
    font-size: clamp(2.4rem, 4vw, 3.4rem);
    font-weight: 800;
    line-height: 1.15;
    letter-spacing: -0.02em;
    margin-bottom: 24px;
}

.hero h1 .grad {
    background: var(--gradient-orange);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.hero-sub {
    font-size: 1.05rem;
    color: var(--white);
    line-height: 1.75;
    max-width: 480px;
    margin-bottom: 40px;
    font-weight: 400;
}

.hero-btns {
    display: flex;
    gap: 16px;
    flex-wrap: wrap;
}

.btn-primary {
    padding: 14px 32px;
    border-radius: 50px;
    background: var(--gradient-orange);
    color: #fff;
    font-weight: 600;
    font-size: 0.95rem;
    text-decoration: none;
    box-shadow: 0 6px 30px rgba(249, 115, 22, 0.4);
    transition: all .25s;
    border: none;
    cursor: pointer;
}

.btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 40px rgba(249, 115, 22, 0.55);
}

.btn-outline {
    padding: 13px 32px;
    border-radius: 50px;
    border: 1px solid var(--glass-border);
    background: var(--glass);
    color: #fff;
    font-weight: 500;
    font-size: 0.95rem;
    text-decoration: none;
    backdrop-filter: blur(10px);
    transition: all .25s;
    cursor: pointer;
}

.btn-outline:hover {
    border-color: var(--orange-border);
    background: var(--orange-glow);
}

/* Hero right
.hero-visual {
    position: relative;
    z-index: 2;
}

.hero-dashboard {
    background: rgba(13, 32, 68, 0.8);
    border: 1px solid var(--glass-border);
    border-radius: var(--radius-lg);
    padding: 28px;
    backdrop-filter: blur(20px);
    box-shadow: 0 40px 100px rgba(0, 0, 0, 0.5), 0 0 60px rgba(249, 115, 22, 0.08);
    position: relative;
}

.hero-dashboard::before {
    content: '';
    position: absolute;
    inset: -1px;
    border-radius: var(--radius-lg);
    background: linear-gradient(135deg, rgba(249, 115, 22, 0.2), transparent 50%, rgba(56, 189, 248, 0.1));
    z-index: -1;
}

.dash-header {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 20px;
    padding-bottom: 16px;
    border-bottom: 1px solid var(--glass-border);
}

.dash-dot {
    width: 10px;
    height: 10px;
    border-radius: 50%;
}

.dash-dot:nth-child(1) {
    background: #ef4444;
}

.dash-dot:nth-child(2) {
    background: #eab308;
}

.dash-dot:nth-child(3) {
    background: #22c55e;
}

.dash-title {
    font-size: 0.78rem;
    color: var(--white-60);
    margin-left: 8px;
    font-weight: 500;
}

.dash-metrics {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 12px;
    margin-bottom: 20px;
}

.dash-metric {
    background: var(--white-10);
    border-radius: 14px;
    padding: 16px 14px;
    border: 1px solid var(--glass-border);
    text-align: center;
}

.dash-metric-val {
    font-family: 'Sora', sans-serif;
    font-weight: 700;
    font-size: 1.2rem;
    margin-bottom: 4px;
}

.dash-metric-val.orange {
    color: var(--orange-light);
}

.dash-metric-val.blue {
    color: var(--blue-accent);
}

.dash-metric-val.green {
    color: var(--green-accent);
}

.dash-metric-lbl {
    font-size: 0.7rem;
    color: var(--white-60);
}

.dash-chart {
    background: var(--white-10);
    border-radius: 14px;
    padding: 18px;
    margin-bottom: 16px;
    border: 1px solid var(--glass-border);
}

.dash-chart-title {
    font-size: 0.75rem;
    color: var(--white-60);
    margin-bottom: 14px;
}

.chart-bars {
    display: flex;
    align-items: flex-end;
    gap: 6px;
    height: 60px;
}

.chart-bar {
    flex: 1;
    border-radius: 4px 4px 0 0;
    background: linear-gradient(180deg, var(--orange), rgba(249, 115, 22, 0.3));
    animation: barGrow 1.5s ease-out forwards;
    transform-origin: bottom;
}

@keyframes barGrow {
    from {
        transform: scaleY(0)
    }

    to {
        transform: scaleY(1)
    }
}

.dash-vitals {
    display: flex;
    gap: 10px;
}

.vital-card {
    flex: 1;
    background: var(--white-10);
    border-radius: 12px;
    padding: 12px;
    border: 1px solid var(--glass-border);
    display: flex;
    align-items: center;
    gap: 10px;
}

.vital-icon {
    width: 32px;
    height: 32px;
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1rem;
    flex-shrink: 0;
}

.vital-icon.red {
    background: rgba(239, 68, 68, 0.2);
}

.vital-icon.blue {
    background: rgba(56, 189, 248, 0.2);
}

.vital-icon.green {
    background: rgba(52, 211, 153, 0.2);
}

.vital-val {
    font-family: 'Sora', sans-serif;
    font-weight: 700;
    font-size: 0.9rem;
}

.vital-lbl {
    font-size: 0.65rem;
    color: var(--white-60);
}
*/

/* Floating stat cards */
/* .float-card {
    position: absolute;
    background: rgba(13, 20, 37, 0.92);
    border: 1px solid var(--glass-border);
    border-radius: 16px;
    padding: 14px 18px;
    backdrop-filter: blur(20px);
    box-shadow: 0 20px 50px rgba(0, 0, 0, 0.4);
    display: flex;
    align-items: center;
    gap: 12px;
    white-space: nowrap;
    animation: floatCard 4s ease-in-out infinite;
}

.float-card:nth-child(2) {
    animation-delay: -1.5s;
}

.float-card:nth-child(3) {
    animation-delay: -3s;
}

@keyframes floatCard {

    0%,
    100% {
        transform: translateY(0)
    }

    50% {
        transform: translateY(-8px)
    }
}

.float-card-1 {
    top: -20px;
    right: -20px;
}

.float-card-2 {
    bottom: 60px;
    left: -30px;
}

.float-card-3 {
    top: 50%;
    right: -36px;
    transform: translateY(-50%);
}

.fc-icon {
    width: 36px;
    height: 36px;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.1rem;
}

.fc-icon.orange {
    background: rgba(249, 115, 22, 0.2);
}

.fc-icon.blue {
    background: rgba(56, 189, 248, 0.2);
}

.fc-icon.green {
    background: rgba(52, 211, 153, 0.2);
}

.fc-text-val {
    font-family: 'Sora', sans-serif;
    font-weight: 700;
    font-size: 1rem;
}

.fc-text-lbl {
    font-size: 0.68rem;
    color: var(--white-60);
} */



/* ─── SECTION COMMON ─── */
section {
    padding: 60px 0px;
}

.section-tag {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 6px 14px;
    border-radius: 50px;
    background: var(--navy-800);
    border: 1px solid var(--orange-border);
    font-size: 0.75rem;
    font-weight: 600;
    color: var(--orange-light);
    letter-spacing: 0.07em;
    text-transform: uppercase;
    margin-bottom: 20px;
}

.section-h2 {
    font-size: clamp(2rem, 3.5vw, 2.8rem);
    font-weight: 800;
    line-height: 1.2;
    letter-spacing: -0.02em;
    margin-bottom: 20px;
    color: var(--navy-mid);
}

.section-hexp {
    font-size: clamp(2rem, 3.5vw, 2.8rem);
    font-weight: 800;
    line-height: 1.2;
    letter-spacing: -0.02em;
    margin-bottom: 20px;
    color: var(--white);
}

.section-h2 .grad {
    background: var(--gradient-orange);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.section-hexp .grad {
    background: var(--gradient-orange);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.section-sub {
    font-size: 1rem;
    color: var(--black);
    line-height: 1.75;
    max-width: 560px;
}

.section-subexp {
    font-size: 1rem;
    color: var(--white);
    line-height: 1.75;
    max-width: 560px;
}

/* ─── CHALLENGES ─── */
.challenges-section {
    background: var(--white);
    position: relative;
    overflow: hidden;
}

.challenges-section::before {
    content: '';
    position: absolute;
    top: -200px;
    left: -200px;
    width: 600px;
    height: 600px;
    border-radius: 50%;
    background: radial-gradient(circle, rgba(249, 115, 22, 0.05), transparent 70%);
    pointer-events: none;
}

.challenges-grid {
    display: grid;
    grid-template-columns: 0.95fr 1.05fr;
    gap: 70px;
    align-items: stretch;
}

.challenges-sticky {
    position: sticky;
    top: 120px;

    height: 100vh;

    border-radius: 32px;
    overflow: hidden;

    padding: 60px;

    display: flex;
    flex-direction: column;
    justify-content: flex-end;

    background:
        linear-gradient(180deg,
            rgba(5, 13, 26, 0.05) 0%,
            rgba(5, 13, 26, 0.85) 70%,
            rgba(5, 13, 26, 0.98) 100%),
        url('/assets/images/health-img.jpg') center center/cover no-repeat;

    box-shadow:
        0 30px 80px rgba(0, 0, 0, 0.35),
        0 0 0 1px rgba(255, 255, 255, 0.06);

    isolation: isolate;
}

/* .challenges-img-wrap {
    margin-top: 40px;
    position: relative;
    width: 100%;
    max-width: 400px;
}

.challenges-img-wrap img {
    width: 100%;
    aspect-ratio: 4/3;
    object-fit: cover;
    border-radius: 40% 20% 40% 20% / 30% 40% 30% 40%;
    filter: brightness(0.8) saturate(1.2);
    box-shadow: 0 30px 70px rgba(0, 0, 0, 0.5);
}

.challenges-img-wrap::after {
    content: '';
    position: absolute;
    inset: -3px;
    border-radius: 40% 20% 40% 20% / 30% 40% 30% 40%;
    background: linear-gradient(135deg, var(--orange), var(--blue-accent));
    z-index: -1;
    opacity: 0.5;
} */


/* premium glass overlay */

.challenges-sticky::before {
    content: '';
    position: absolute;
    inset: 0;

    background:
        radial-gradient(circle at top right,
            rgba(249, 115, 22, 0.25),
            transparent 35%);

    z-index: -1;
}

/* content */

.challenges-sticky .section-tag {
    background: rgba(255, 255, 255, 0.08);
    backdrop-filter: blur(12px);
}

.challenges-sticky .section-h2 {
    color: #fff;
    font-size: clamp(2.4rem, 4vw, 4rem);
    line-height: 1.08;
    max-width: 520px;
}

.challenges-sticky .section-sub {
    color: rgba(255, 255, 255, 0.75);
    max-width: 520px;
    font-size: 1.05rem;
    line-height: 1.9;
    margin-top: 18px;
}

.challenge-cards {
    display: flex;
    flex-direction: column;
    gap: 16px;
}

.challenge-card {
    background: var(--navy-light);
    border: 1px solid var(--glass-border);
    border-radius: var(--radius);
    padding: 24px 28px;
    backdrop-filter: blur(10px);
    display: flex;
    align-items: flex-start;
    gap: 18px;
    transition: all .3s;
    cursor: default;
}

.challenge-card:hover {
    border-color: var(--glass-border-hover);
    box-shadow: 0 8px 28px var(--navy-800);
    transform: translateY(-4px)
}

.challenge-num {
    font-family: var(--ff-mono);
    font-weight: 800;
    font-size: 1.5rem;
    color: var(--gradient-orange);
    flex-shrink: 0;
    line-height: 1;
    min-width: 36px;
}

.challenge-card:hover .challenge-num {
    color: rgba(249, 115, 22, 0.6);
}

.challenge-title {
    font-family: var(--ff-head);
    font-weight: 600;
    font-size: 1rem;
    margin-bottom: 6px;
    color: var(--white);
}

.challenge-desc {
    font-size: 0.88rem;
    color: var(--white);
    line-height: 1.6;
}

@media(max-width:1100px) {

    .challenges-grid {
        grid-template-columns: 1fr;
    }

    .challenges-sticky {
        height: 650px;
        position: relative;
        top: 0;
    }

}

/* ─── SOLUTIONS ─── */
.solutions-section {
    position: relative;
}

.solutions-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 1px;
    height: 100%;
    background: var(--glass);
}

.solutions-header {
    text-align: center;
    margin-bottom: 64px;
}

.solutions-header .section-sub {
    margin: 0 auto;
}

.solutions-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 24px;
}

.sol-card {
    background: var(--navy-700);
    border: 1px solid var(--navy);
    border-radius: var(--radius);
    padding: 32px 28px;
    backdrop-filter: blur(10px);
    transition: all .35s;
    cursor: default;
    position: relative;
    overflow: hidden;
}

.sol-card::before {
    content: '';
    position: absolute;
    inset: 0;
    background: var(--orange-glow);
    opacity: 0;
    transition: opacity .35s;
}

.sol-card:hover {
    border-color: var(--glass-border-hover);
    box-shadow: 0 8px 28px var(--navy-mid);
    transform: translateY(-4px);
}

.sol-card:hover::before {
    opacity: 1;
}

.sol-icon {
    width: 52px;
    height: 52px;
    border-radius: 14px;
    background: linear-gradient(135deg, rgba(249, 115, 22, 0.2), rgba(249, 115, 22, 0.05));
    border: 1px solid var(--orange-border);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
    margin-bottom: 20px;
    transition: all .35s;
}

.sol-card:hover .sol-icon {
    background: linear-gradient(135deg, rgba(249, 115, 22, 0.35), rgba(249, 115, 22, 0.1));
    box-shadow: 0 6px 24px rgba(249, 115, 22, 0.3);
}

.sol-title {
    font-family: var(--ff-head);
    font-weight: 700;
    font-size: 1rem;
    color: var(--white);
    margin-bottom: 10px;
}

.sol-desc {
    font-size: 0.85rem;
    color: var(--white);
    line-height: 1.65;
}

/* ─── PATIENT EXPERIENCE ─── */
.patient-section {
    background: var(--navy-light);
}

.patient-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 80px;
    align-items: center;
}

.patient-img-wrap {
    position: relative;
}

.patient-img-blob {
    width: 100%;
    aspect-ratio: 1;
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
}

.patient-img-blob img {
    width: 85%;
    aspect-ratio: 4/3;
    object-fit: cover;
    border-radius: 30% 60% 70% 40% / 50% 30% 60% 40%;
    filter: brightness(0.85) saturate(1.1);
    box-shadow: 0 40px 80px rgba(0, 0, 0, 0.5);
}

.patient-img-blob::before {
    content: '';
    position: absolute;
    inset: 0;
    background: radial-gradient(circle at 60% 50%, rgba(249, 115, 22, 0.15), transparent 65%);
    border-radius: 50%;
}

.stat-orbit {
    position: absolute;
    right: 0;
    top: 50%;
    transform: translateY(-50%);
    display: flex;
    flex-direction: column;
    gap: 14px;
}

.stat-pill {
    background: var(--navy);
    border: 1px solid var(--glass-border);
    border-radius: 50px;
    padding: 12px 20px;
    display: flex;
    align-items: center;
    gap: 12px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.4);
    backdrop-filter: blur(20px);
}

.stat-pill-val {
    font-family: 'Sora', sans-serif;
    font-weight: 800;
    font-size: 1.1rem;
    color: var(--orange-light);
}

.stat-pill-lbl {
    font-size: 0.72rem;
    color: var(--white);
}

.metrics-list {
    display: flex;
    flex-direction: column;
    gap: 20px;
    margin-top: 40px;
}

.metric-item {
    display: flex;
    flex-direction: column;
    gap: 8px;
}

.metric-header {
    display: flex;
    justify-content: space-between;
}

.metric-label {
    font-size: 0.88rem;
    font-weight: 500;
    color: var(--white);
}

.metric-pct {
    font-family: 'Sora', sans-serif;
    font-weight: 700;
    font-size: 0.88rem;
    color: var(--orange-light);
}

.metric-bar-bg {
    height: 5px;
    background: var(--white-10);
    border-radius: 50px;
    overflow: hidden;
}

.metric-bar-fill {
    height: 100%;
    border-radius: 50px;
    background: linear-gradient(90deg, var(--orange), var(--orange-light));
    transform: scaleX(0);
    transform-origin: left;
    transition: transform 1.2s cubic-bezier(.4, 0, .2, 1);
}

.metric-bar-fill.animated {
    transform: scaleX(1);
}

/* ─── TECH STACK ─── */
.tech-section {}

.tech-header {
    text-align: center;
    margin-bottom: 60px;
}

.tech-header .section-sub {
    margin: 0 auto;
}

.tech-groups {
    display: flex;
    flex-direction: column;
    gap: 40px;
}

.tech-group-title {
    font-size: 0.75rem;
    font-weight: 800;
    color: var(--black);
    letter-spacing: 0.1em;
    text-transform: uppercase;
    margin-bottom: 16px;
}

.tech-pills {
    display: flex;
    flex-wrap: wrap;
    gap: 12px;
}

.tech-pill {
    padding: 10px 22px;
    border-radius: 50px;
    background: var(--navy-mid);
    border: 1px solid var(--gradient-orange);
    font-size: 0.88rem;
    font-weight: 500;
    color: var(--white);
    backdrop-filter: blur(10px);
    transition: all .25s;
    cursor: default;
    display: flex;
    align-items: center;
    gap: 8px;
}

.tech-pill:hover {
    border-color: var(--navy-700);
    color: #fff;
    background: var(--navy);
    box-shadow: 0 4px 20px rgba(33, 21, 78, 0.2);
    transform: translateY(-2px);
}

.tech-pill .dot {
    width: 7px;
    height: 7px;
    border-radius: 50%;
    background: var(--gradient-orange);
    opacity: 0.5;
    transition: opacity .25s;
}

.tech-pill:hover .dot {
    opacity: 1;
    box-shadow: 0 0 8px var(--orange);
}

/* ─── SECURITY ─── */
.security-section {
    background: linear-gradient(180deg, var(--navy-mid), var(--navy-light));
    position: relative;
    overflow: hidden;
}

.security-section::before {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 800px;
    height: 800px;
    border-radius: 50%;
    background: radial-gradient(circle, rgba(249, 115, 22, 0.04), transparent 70%);
}

.security-header {
    text-align: center;
    margin-bottom: 64px;
}

.security-header .section-sub {
    margin: 0 auto;
}

.shield-visual {
    display: flex;
    justify-content: center;
    margin-bottom: 60px;
    position: relative;
}

.shield-svg {
    width: 120px;
    filter: drop-shadow(0 0 30px rgba(249, 115, 22, 0.5));
    animation: shieldPulse 3s ease-in-out infinite;
}

@keyframes shieldPulse {

    0%,
    100% {
        filter: drop-shadow(0 0 20px rgba(249, 115, 22, 0.4))
    }

    50% {
        filter: drop-shadow(0 0 50px rgba(249, 115, 22, 0.8))
    }
}

.shield-ring {
    position: absolute;
    border-radius: 50%;
    border: 1px solid rgba(249, 115, 22, 0.15);
    animation: ringExpand 3s linear infinite;
}

@keyframes ringExpand {
    0% {
        opacity: 0.8;
        transform: scale(0.5)
    }

    100% {
        opacity: 0;
        transform: scale(2)
    }
}

.security-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
}

.sec-card {
    background: var(--glass);
    border: 1px solid var(--glass-border);
    border-radius: var(--radius);
    padding: 28px 24px;
    backdrop-filter: blur(10px);
    transition: all .35s;
    cursor: default;
    text-align: center;
}

.sec-card:hover {
    border-color: var(--orange-border);
    background: rgba(249, 115, 22, 0.08);
    transform: translateY(-4px);
    box-shadow: 0 15px 50px rgba(0, 0, 0, 0.4), 0 0 30px rgba(249, 115, 22, 0.12);
}

.sec-icon {
    font-size: 2rem;
    margin-bottom: 14px;
}

.sec-title {
    font-family: 'Sora', sans-serif;
    font-weight: 700;
    font-size: 0.95rem;
    margin-bottom: 8px;
}

.sec-desc {
    font-size: 0.8rem;
    color: var(--white-60);
    line-height: 1.6;
}

/* ─── USE CASES ─── */
.usecases-section {
    background: var(--navy);
}

.usecases-header {
    text-align: center;
    margin-bottom: 60px;
}

.usecases-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
}

.uc-card {
    background: var(--glass);
    border: 1px solid var(--glass-border);
    border-radius: var(--radius);
    padding: 30px 24px;
    backdrop-filter: blur(10px);
    transition: all .3s;
    cursor: default;
    position: relative;
    overflow: hidden;
}

.uc-card::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    height: 2px;
    background: linear-gradient(90deg, transparent, var(--orange), transparent);
    opacity: 0;
    transition: opacity .3s;
}

.uc-card:hover {
    transform: translateY(-5px);
    border-color: var(--orange-border);
    box-shadow: 0 20px 50px rgba(0, 0, 0, 0.4);
}

.uc-card:hover::after {
    opacity: 1;
}

.uc-emoji {
    font-size: 2.2rem;
    margin-bottom: 16px;
    display: block;
}

.uc-title {
    font-family: 'Sora', sans-serif;
    font-weight: 700;
    font-size: 0.95rem;
    margin-bottom: 8px;
}

.uc-desc {
    font-size: 0.82rem;
    color: var(--white-60);
    line-height: 1.6;
}

/* ─── WHY ACCROSIAN ─── */
.why-section {
    background: var(--navy-mid);
}

.why-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 80px;
    align-items: center;
}

.why-features {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.why-feature {
    display: flex;
    gap: 20px;
    align-items: flex-start;
    padding: 24px;
    border-radius: var(--radius);
    border: 1px solid transparent;
    transition: all .3s;
    background: transparent;
}

.why-feature:hover {
    background: var(--glass);
    border-color: var(--glass-border);
    transform: translateX(8px);
}

.why-feat-icon {
    width: 44px;
    height: 44px;
    border-radius: 12px;
    background: linear-gradient(135deg, rgba(249, 115, 22, 0.2), rgba(249, 115, 22, 0.05));
    border: 1px solid var(--orange-border);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.2rem;
    flex-shrink: 0;
}

.why-feat-title {
    font-family: 'Sora', sans-serif;
    font-weight: 700;
    font-size: 0.95rem;
    margin-bottom: 6px;
}

.why-feat-desc {
    font-size: 0.85rem;
    color: var(--white-60);
    line-height: 1.6;
}

.why-visual {
    background: var(--glass);
    border: 1px solid var(--glass-border);
    border-radius: var(--radius-lg);
    padding: 40px;
    backdrop-filter: blur(10px);
    text-align: center;
}

.why-big-num {
    font-family: 'Sora', sans-serif;
    font-weight: 800;
    font-size: 4rem;
    background: linear-gradient(135deg, var(--orange-light), #fcd34d);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    line-height: 1;
}

.why-big-lbl {
    font-size: 0.85rem;
    color: var(--white-60);
    margin-top: 8px;
    margin-bottom: 32px;
}

.why-stats-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 16px;
}

.why-stat {
    background: var(--white-10);
    border-radius: 14px;
    padding: 20px;
    border: 1px solid var(--glass-border);
}

.why-stat-val {
    font-family: 'Sora', sans-serif;
    font-weight: 800;
    font-size: 1.6rem;
    color: var(--orange-light);
    margin-bottom: 4px;
}

.why-stat-lbl {
    font-size: 0.75rem;
    color: var(--white-60);
}

/* ─── CTA ─── */
.cta-section {
    padding: 120px 60px;
    position: relative;
    overflow: hidden;
    background: var(--navy-light);
}

.cta-section::before {
    content: '';
    position: absolute;
    inset: 0;
    background: radial-gradient(ellipse 80% 60% at 30% 50%, rgba(249, 115, 22, 0.15), transparent 65%),
        radial-gradient(ellipse 60% 80% at 80% 30%, rgba(56, 189, 248, 0.06), transparent 60%);
}

.cta-section .hero-grid {
    position: absolute;
    inset: 0;
    opacity: 0.5;
}

.cta-inner {
    position: relative;
    z-index: 2;
    text-align: center;
    max-width: 700px;
    margin: 0 auto;
}

.cta-inner h2 {
    font-size: clamp(2rem, 4vw, 3rem);
    font-weight: 800;
    line-height: 1.2;
    letter-spacing: -0.02em;
    margin-bottom: 20px;
}

.cta-inner p {
    font-size: 1.05rem;
    color: var(--white-60);
    line-height: 1.75;
    margin-bottom: 44px;
}

.cta-btns {
    display: flex;
    gap: 16px;
    justify-content: center;
    flex-wrap: wrap;
}

.cta-glow {
    position: absolute;
    bottom: -100px;
    left: 50%;
    transform: translateX(-50%);
    width: 500px;
    height: 200px;
    background: radial-gradient(ellipse, rgba(249, 115, 22, 0.3), transparent 70%);
    filter: blur(30px);
    pointer-events: none;
}

/* ─── SCROLL REVEAL ─── */
.reveal {
    opacity: 0;
    transform: translateY(30px);
    transition: opacity .7s, transform .7s;
}

.reveal.visible {
    opacity: 1;
    transform: none;
}

.reveal-left {
    opacity: 0;
    transform: translateX(-30px);
    transition: opacity .7s, transform .7s;
}

.reveal-left.visible {
    opacity: 1;
    transform: none;
}

.reveal-right {
    opacity: 0;
    transform: translateX(30px);
    transition: opacity .7s, transform .7s;
}

.reveal-right.visible {
    opacity: 1;
    transform: none;
}

/* Stagger children */
.stagger>* {
    opacity: 0;
    transform: translateY(24px);
    transition: opacity .6s, transform .6s;
}

.stagger.visible>*:nth-child(1) {
    opacity: 1;
    transform: none;
    transition-delay: .05s
}

.stagger.visible>*:nth-child(2) {
    opacity: 1;
    transform: none;
    transition-delay: .1s
}

.stagger.visible>*:nth-child(3) {
    opacity: 1;
    transform: none;
    transition-delay: .15s
}

.stagger.visible>*:nth-child(4) {
    opacity: 1;
    transform: none;
    transition-delay: .2s
}

.stagger.visible>*:nth-child(5) {
    opacity: 1;
    transform: none;
    transition-delay: .25s
}

.stagger.visible>*:nth-child(6) {
    opacity: 1;
    transform: none;
    transition-delay: .3s
}

.stagger.visible>*:nth-child(7) {
    opacity: 1;
    transform: none;
    transition-delay: .35s
}

.stagger.visible>*:nth-child(8) {
    opacity: 1;
    transform: none;
    transition-delay: .4s
}

.stagger.visible>*:nth-child(9) {
    opacity: 1;
    transform: none;
    transition-delay: .45s
}

.stagger.visible>*:nth-child(10) {
    opacity: 1;
    transform: none;
    transition-delay: .5s
}

/* ─── RESPONSIVE ─── */
@media(max-width:1100px) {
    nav {
        padding: 16px 30px;
    }

    .nav-links {
        display: none;
    }

    section {
        padding: 80px 30px;
    }

    .hero {
        padding: 120px 30px 60px;
        grid-template-columns: 1fr;
    }

    .hero-visual {
        display: none;
    }

    .challenges-grid,
    .patient-grid,
    .why-grid {
        grid-template-columns: 1fr;
        gap: 40px;
    }

    .challenges-sticky {
        position: static;
    }

    .solutions-grid {
        grid-template-columns: repeat(2, 1fr);
    }

    .security-grid {
        grid-template-columns: repeat(2, 1fr);
    }

    .usecases-grid {
        grid-template-columns: repeat(2, 1fr);
    }

    footer {
        padding: 30px;
        flex-direction: column;
        text-align: center;
    }
}

@media(max-width:640px) {

    .solutions-grid,
    .security-grid,
    .usecases-grid {
        grid-template-columns: 1fr;
    }

    .dash-metrics {
        grid-template-columns: 1fr 1fr;
    }
}
</style>
<!-- HERO -->
<section class="hero">
    <img src="{{ asset('assets/images/hero-health.jpg') }}" alt="Hero Background" class="hero-bg-img" />
    <div class="container">
        <div class="hero-bg"></div>
        <div class="hero-grid"></div>

        <div class="hero-content">
            <!-- <div class="hero-badge">Healthcare Industry</div> -->
            <h1>Transforming Healthcare Through <span class="grad">Intelligent Digital</span> Innovation</h1>
            <p class="hero-sub">We engineer next-generation healthcare technology solutions — from AI-powered
                diagnostics to enterprise EHR platforms — built for security, scalability, and seamless patient
                experiences.</p>
            <div class="hero-btns">
                <a href="#solutions" class="btn-primary">Explore Solutions →</a>
                <a href="#contact" class="btn-outline">Talk to an Expert</a>
            </div>
        </div>

        <!-- <div class="hero-visual">
        <div class="hero-dashboard" style="position:relative"> -->
        <!-- Floating cards -->
        <!-- <div class="float-card float-card-1">
        <div class="fc-icon orange">🛡️</div>
        <div>
            <div class="fc-text-val">HIPAA</div>
            <div class="fc-text-lbl">Compliant Ready</div>
        </div>
    </div>
    <div class="float-card float-card-2">
        <div class="fc-icon green">🤖</div>
        <div>
            <div class="fc-text-val">AI Diagnostics</div>
            <div class="fc-text-lbl">Powered by ML</div>
        </div>
    </div>
    <div class="float-card float-card-3">
        <div class="fc-icon blue">📡</div>
        <div>
            <div class="fc-text-val">99.9%</div>
            <div class="fc-text-lbl">System Uptime</div>
        </div>
    </div>

    <div class="dash-header">
        <div class="dash-dot"></div>
        <div class="dash-dot"></div>
        <div class="dash-dot"></div>
        <span class="dash-title">Accrosian Health Dashboard — Live Overview</span>
    </div>

    <div class="dash-metrics">
        <div class="dash-metric">
            <div class="dash-metric-val orange">1,284</div>
            <div class="dash-metric-lbl">Active Patients</div>
        </div>
        <div class="dash-metric">
            <div class="dash-metric-val blue">98.6%</div>
            <div class="dash-metric-lbl">Record Accuracy</div>
        </div>
        <div class="dash-metric">
            <div class="dash-metric-val green">142ms</div>
            <div class="dash-metric-lbl">Avg Response</div>
        </div>
    </div>

    <div class="dash-chart">
        <div class="dash-chart-title">Patient Admissions — Last 12 Months</div>
        <div class="chart-bars">
            <div class="chart-bar" style="height:42%;animation-delay:.05s"></div>
            <div class="chart-bar" style="height:60%;animation-delay:.1s"></div>
            <div class="chart-bar" style="height:55%;animation-delay:.15s"></div>
            <div class="chart-bar" style="height:75%;animation-delay:.2s"></div>
            <div class="chart-bar" style="height:65%;animation-delay:.25s"></div>
            <div class="chart-bar" style="height:80%;animation-delay:.3s"></div>
            <div class="chart-bar" style="height:70%;animation-delay:.35s"></div>
            <div class="chart-bar"
                style="height:90%;animation-delay:.4s;background:linear-gradient(180deg,#fcd34d,rgba(249,115,22,0.4))">
            </div>
            <div class="chart-bar" style="height:85%;animation-delay:.45s"></div>
            <div class="chart-bar"
                style="height:95%;animation-delay:.5s;background:linear-gradient(180deg,var(--orange),rgba(249,115,22,0.4))">
            </div>
            <div class="chart-bar" style="height:88%;animation-delay:.55s"></div>
            <div class="chart-bar"
                style="height:100%;animation-delay:.6s;background:linear-gradient(180deg,var(--orange-light),rgba(249,115,22,0.5))">
            </div>
        </div>
    </div>

    <div class="dash-vitals">
        <div class="vital-card">
            <div class="vital-icon red">❤️</div>
            <div>
                <div class="vital-val">72 bpm</div>
                <div class="vital-lbl">Heart Rate</div>
            </div>
        </div>
        <div class="vital-card">
            <div class="vital-icon blue">🫁</div>
            <div>
                <div class="vital-val">98%</div>
                <div class="vital-lbl">SpO₂</div>
            </div>
        </div>
        <div class="vital-card">
            <div class="vital-icon green">🌡️</div>
            <div>
                <div class="vital-val">36.8°C</div>
                <div class="vital-lbl">Temp</div>
            </div>
        </div>
    </div>
    </div>
    </div> -->
    </div>
</section>

<!-- CHALLENGES -->
<section class="challenges-section" id="challenges">
    <div class="container">
        <div class="challenges-grid">
            <div class="challenges-sticky reveal-left">
                <div class="section-tag">Industry Challenges</div>
                <h2 class="section-h2">Navigating a <span class="grad">Complex Healthcare</span> Landscape</h2>
                <p class="section-sub">The healthcare sector faces unprecedented transformation pressure — legacy
                    infrastructure, fragmented data, regulatory demands, and rising patient expectations converge into a
                    perfect storm of operational complexity.</p>

                <!-- <div class="challenges-img-wrap" style="margin-top:40px">
                    <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?w=800&q=80"
                        alt="Healthcare Technology" />
                </div> -->
            </div>

            <div class="challenge-cards stagger">
                <div class="challenge-card">
                    <div class="challenge-num">01</div>
                    <div>
                        <div class="challenge-title">Legacy Hospital Systems</div>
                        <div class="challenge-desc">Outdated, siloed infrastructure that hinders interoperability,
                            increases operational costs, and blocks digital transformation initiatives.</div>
                    </div>
                </div>
                <div class="challenge-card">
                    <div class="challenge-num">02</div>
                    <div>
                        <div class="challenge-title">Data Interoperability</div>
                        <div class="challenge-desc">Disconnected EHR systems, incompatible data formats, and lack of
                            HL7/FHIR standardization creating critical information gaps.</div>
                    </div>
                </div>
                <div class="challenge-card">
                    <div class="challenge-num">03</div>
                    <div>
                        <div class="challenge-title">Patient Experience Gaps</div>
                        <div class="challenge-desc">Fragmented patient journeys, long wait times, and lack of digital
                            touchpoints leading to poor satisfaction and care outcomes.</div>
                    </div>
                </div>
                <div class="challenge-card">
                    <div class="challenge-num">04</div>
                    <div>
                        <div class="challenge-title">Telemedicine Scalability</div>
                        <div class="challenge-desc">Demand for remote care has skyrocketed, but infrastructure,
                            security, and regulatory frameworks struggle to keep pace.</div>
                    </div>
                </div>
                <div class="challenge-card">
                    <div class="challenge-num">05</div>
                    <div>
                        <div class="challenge-title">Healthcare Compliance</div>
                        <div class="challenge-desc">HIPAA, GDPR, and regional regulations require sophisticated data
                            governance frameworks across every layer of the stack.</div>
                    </div>
                </div>
                <div class="challenge-card">
                    <div class="challenge-num">06</div>
                    <div>
                        <div class="challenge-title">AI-Driven Diagnostics</div>
                        <div class="challenge-desc">Integrating AI/ML tools into clinical workflows demands robust data
                            pipelines, model governance, and clinician trust.</div>
                    </div>
                </div>
                <div class="challenge-card">
                    <div class="challenge-num">07</div>
                    <div>
                        <div class="challenge-title">Medical Data Security</div>
                        <div class="challenge-desc">Healthcare is the #1 target for cyber attacks. PHI protection
                            requires zero-trust architectures and continuous threat monitoring.</div>
                    </div>
                </div>
                <div class="challenge-card">
                    <div class="challenge-num">08</div>
                    <div>
                        <div class="challenge-title">Real-Time Monitoring</div>
                        <div class="challenge-desc">IoT-connected devices and remote patient monitoring require
                            low-latency, fault-tolerant data streams at massive scale.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SOLUTIONS -->
<section class="solutions-section" id="solutions">
    <div class="container">
        <div class="solutions-header reveal">
            <div class="section-tag">Our Solutions</div>
            <h2 class="section-h2">End-to-End <span class="grad">Healthcare Technology</span> Solutions</h2>
            <p class="section-sub">Purpose-built platforms and services designed to address every dimension of modern
                healthcare operations, care delivery, and patient engagement.</p>
        </div>

        <div class="solutions-grid stagger">
            <div class="sol-card">
                <div class="sol-icon">🏥</div>
                <div class="sol-title">Hospital Management Systems</div>
                <div class="sol-desc">Comprehensive HMS platforms integrating OPD, IPD, ICU, pharmacy, labs, and billing
                    into a single enterprise-grade system.</div>
            </div>
            <div class="sol-card">
                <div class="sol-icon">📋</div>
                <div class="sol-title">Electronic Health Records</div>
                <div class="sol-desc">FHIR-compliant EHR/EMR solutions enabling seamless data exchange, clinical
                    decision support, and longitudinal patient records.</div>
            </div>
            <div class="sol-card">
                <div class="sol-icon">📡</div>
                <div class="sol-title">Telemedicine Platforms</div>
                <div class="sol-desc">Secure, HIPAA-compliant video consultation, e-prescription, and remote care
                    platforms built for scale.</div>
            </div>
            <div class="sol-card">
                <div class="sol-icon">🤖</div>
                <div class="sol-title">AI Diagnostic Systems</div>
                <div class="sol-desc">Machine learning models for medical imaging analysis, predictive diagnostics, and
                    clinical decision augmentation.</div>
            </div>
            <div class="sol-card">
                <div class="sol-icon">👤</div>
                <div class="sol-title">Patient Portals</div>
                <div class="sol-desc">Self-service patient engagement portals with appointment booking, health records
                    access, and secure messaging.</div>
            </div>
            <div class="sol-card">
                <div class="sol-icon">💼</div>
                <div class="sol-title">Healthcare CRM</div>
                <div class="sol-desc">Specialized CRM platforms for patient relationship management, outreach
                    automation, and care coordination.</div>
            </div>
            <div class="sol-card">
                <div class="sol-icon">💰</div>
                <div class="sol-title">Medical Billing Automation</div>
                <div class="sol-desc">Intelligent RCM solutions automating claims processing, denial management, and
                    revenue cycle optimization.</div>
            </div>
            <div class="sol-card">
                <div class="sol-icon">🔬</div>
                <div class="sol-title">IoT Patient Monitoring</div>
                <div class="sol-desc">Real-time remote patient monitoring platforms integrating wearables, biosensors,
                    and edge computing.</div>
            </div>
            <div class="sol-card">
                <div class="sol-icon">💊</div>
                <div class="sol-title">Pharmacy Management</div>
                <div class="sol-desc">End-to-end pharmacy operations platforms with inventory, dispensing, drug
                    interaction checks, and insurance integration.</div>
            </div>
            <div class="sol-card" style="grid-column: span 1;">
                <div class="sol-icon">📱</div>
                <div class="sol-title">Healthcare Mobile Apps</div>
                <div class="sol-desc">Intuitive iOS and Android applications for patients, clinicians, and healthcare
                    administrators on every device.</div>
            </div>
        </div>
    </div>
</section>

<!-- PATIENT EXPERIENCE -->
<section class="patient-section" id="experience">
    <div class="container">
        <div class="patient-grid">
            <div class="patient-img-wrap reveal-left">
                <div class="patient-img-blob">
                    <img src="https://images.unsplash.com/photo-1631217868264-e5b90bb7e133?w=800&q=80"
                        alt="Patient Experience" />
                    <div class="stat-orbit">
                        <div class="stat-pill">
                            <div class="stat-pill-val">3×</div>
                            <div class="stat-pill-lbl">Faster Booking</div>
                        </div>
                        <div class="stat-pill">
                            <div class="stat-pill-val">68%</div>
                            <div class="stat-pill-lbl">Less Wait Time</div>
                        </div>
                        <div class="stat-pill">
                            <div class="stat-pill-val">24/7</div>
                            <div class="stat-pill-lbl">Accessibility</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="reveal-right">
                <div class="section-tag">Patient Experience</div>
                <h2 class="section-hexp">Care That Puts <span class="grad">Patients First</span></h2>
                <p class="section-subexp" style="margin-bottom:36px">Digital transformation should start and end with
                    the
                    patient. Our platforms are designed to eliminate friction, reduce wait times, and deliver continuity
                    of care across every channel.</p>

                <div class="metrics-list">
                    <div class="metric-item">
                        <div class="metric-header">
                            <span class="metric-label">Faster Appointment Booking</span>
                            <span class="metric-pct">92%</span>
                        </div>
                        <div class="metric-bar-bg">
                            <div class="metric-bar-fill" data-width="92"></div>
                        </div>
                    </div>
                    <div class="metric-item">
                        <div class="metric-header">
                            <span class="metric-label">Reduced Patient Wait Time</span>
                            <span class="metric-pct">68%</span>
                        </div>
                        <div class="metric-bar-bg">
                            <div class="metric-bar-fill" data-width="68"></div>
                        </div>
                    </div>
                    <div class="metric-item">
                        <div class="metric-header">
                            <span class="metric-label">Improved Patient Engagement</span>
                            <span class="metric-pct">85%</span>
                        </div>
                        <div class="metric-bar-bg">
                            <div class="metric-bar-fill" data-width="85"></div>
                        </div>
                    </div>
                    <div class="metric-item">
                        <div class="metric-header">
                            <span class="metric-label">Multi-Device Access Rate</span>
                            <span class="metric-pct">97%</span>
                        </div>
                        <div class="metric-bar-bg">
                            <div class="metric-bar-fill" data-width="97"></div>
                        </div>
                    </div>
                    <div class="metric-item">
                        <div class="metric-header">
                            <span class="metric-label">Telemedicine Adoption</span>
                            <span class="metric-pct">79%</span>
                        </div>
                        <div class="metric-bar-bg">
                            <div class="metric-bar-fill" data-width="79"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- TECH STACK -->
<section class="tech-section" id="tech">
    <div class="container">
        <div class="tech-header reveal">
            <div class="section-tag">Technology Stack</div>
            <h2 class="section-h2">Built on a <span class="grad">Future-Ready</span> Foundation</h2>
            <p class="section-sub">We leverage battle-tested, enterprise-grade technologies and healthcare-specific
                standards to deliver scalable, compliant, and high-performance systems.</p>
        </div>

        <div class="tech-groups">
            <div class="reveal">
                <div class="tech-group-title">Frontend & Backend</div>
                <div class="tech-pills">
                    <div class="tech-pill"><span class="dot"></span>Laravel</div>
                    <div class="tech-pill"><span class="dot"></span>React</div>
                    <div class="tech-pill"><span class="dot"></span>Node.js</div>
                    <div class="tech-pill"><span class="dot"></span>TypeScript</div>
                    <div class="tech-pill"><span class="dot"></span>GraphQL</div>
                    <div class="tech-pill"><span class="dot"></span>REST APIs</div>
                </div>
            </div>
            <div class="reveal">
                <div class="tech-group-title">Cloud & Infrastructure</div>
                <div class="tech-pills">
                    <div class="tech-pill"><span class="dot"></span>AWS</div>
                    <div class="tech-pill"><span class="dot"></span>Microsoft Azure</div>
                    <div class="tech-pill"><span class="dot"></span>Cloud Infrastructure</div>
                    <div class="tech-pill"><span class="dot"></span>Docker</div>
                    <div class="tech-pill"><span class="dot"></span>Kubernetes</div>
                    <div class="tech-pill"><span class="dot"></span>Terraform</div>
                </div>
            </div>
            <div class="reveal">
                <div class="tech-group-title">AI & Data</div>
                <div class="tech-pills">
                    <div class="tech-pill"><span class="dot"></span>AI & Machine Learning</div>
                    <div class="tech-pill"><span class="dot"></span>TensorFlow</div>
                    <div class="tech-pill"><span class="dot"></span>PostgreSQL</div>
                    <div class="tech-pill"><span class="dot"></span>Redis</div>
                    <div class="tech-pill"><span class="dot"></span>Elasticsearch</div>
                </div>
            </div>
            <div class="reveal">
                <div class="tech-group-title">Healthcare Standards & IoT</div>
                <div class="tech-pills">
                    <div class="tech-pill"><span class="dot"></span>HL7 FHIR APIs</div>
                    <div class="tech-pill"><span class="dot"></span>DICOM</div>
                    <div class="tech-pill"><span class="dot"></span>IoT Integration</div>
                    <div class="tech-pill"><span class="dot"></span>MQTT</div>
                    <div class="tech-pill"><span class="dot"></span>Edge Computing</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECURITY -->
<section class="security-section" id="security">
    <div class="container">
        <div class="security-header reveal">
            <div class="section-tag">Security & Compliance</div>
            <h2 class="section-h2">Enterprise-Grade <span class="grad">Security</span> at Every Layer</h2>
            <p class="section-sub">Healthcare data is among the most sensitive in the world. Our security-first
                engineering philosophy ensures compliance, protection, and peace of mind at every level of the stack.
            </p>
        </div>

        <div class="shield-visual">
            <div style="position:relative; display:flex; align-items:center; justify-content:center;">
                <div class="shield-ring" style="width:200px;height:200px;animation-duration:3s;animation-delay:0s">
                </div>
                <div class="shield-ring" style="width:200px;height:200px;animation-duration:3s;animation-delay:1s">
                </div>
                <div class="shield-ring" style="width:200px;height:200px;animation-duration:3s;animation-delay:2s">
                </div>
                <svg class="shield-svg" viewBox="0 0 100 120" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M50 5L10 22V55C10 78 28 99 50 107C72 99 90 78 90 55V22L50 5Z" fill="url(#sg)"
                        stroke="rgba(249,115,22,0.4)" stroke-width="1.5" />
                    <path d="M38 60L46 68L64 48" stroke="white" stroke-width="4" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <defs>
                        <linearGradient id="sg" x1="10" y1="5" x2="90" y2="107" gradientUnits="userSpaceOnUse">
                            <stop offset="0%" stop-color="rgba(249,115,22,0.35)" />
                            <stop offset="100%" stop-color="rgba(249,115,22,0.1)" />
                        </linearGradient>
                    </defs>
                </svg>
            </div>
        </div>

        <div class="security-grid stagger">
            <div class="sec-card">
                <div class="sec-icon">🏥</div>
                <div class="sec-title">HIPAA Compliance</div>
                <div class="sec-desc">Full HIPAA Technical Safeguard implementation with BAA-ready architecture and
                    audit logging.</div>
            </div>
            <div class="sec-card">
                <div class="sec-icon">🇪🇺</div>
                <div class="sec-title">GDPR Framework</div>
                <div class="sec-desc">Data minimization, right to erasure, consent management, and cross-border data
                    transfer controls.</div>
            </div>
            <div class="sec-card">
                <div class="sec-icon">🏅</div>
                <div class="sec-title">ISO 27001</div>
                <div class="sec-desc">Information security management systems aligned with ISO 27001 standards across
                    all engagements.</div>
            </div>
            <div class="sec-card">
                <div class="sec-icon">🔐</div>
                <div class="sec-title">Secure APIs</div>
                <div class="sec-desc">OAuth 2.0, JWT, mutual TLS, and rate limiting across all API surfaces and
                    integration endpoints.</div>
            </div>
            <div class="sec-card">
                <div class="sec-icon">🔒</div>
                <div class="sec-title">End-to-End Encryption</div>
                <div class="sec-desc">AES-256 encryption at rest, TLS 1.3 in transit, and zero-knowledge key management
                    architectures.</div>
            </div>
            <div class="sec-card">
                <div class="sec-icon">👥</div>
                <div class="sec-title">Role-Based Access</div>
                <div class="sec-desc">Granular RBAC and ABAC models ensuring least-privilege access across all clinical
                    and admin roles.</div>
            </div>
            <div class="sec-card">
                <div class="sec-icon">🛡️</div>
                <div class="sec-title">Zero Trust Architecture</div>
                <div class="sec-desc">Never trust, always verify — continuous authentication and micro-segmentation
                    across all network zones.</div>
            </div>
            <div class="sec-card">
                <div class="sec-icon">🔍</div>
                <div class="sec-title">Threat Monitoring</div>
                <div class="sec-desc">24/7 SIEM, anomaly detection, and incident response workflows with automated
                    threat containment.</div>
            </div>
        </div>
    </div>
</section>

<!-- USE CASES -->
<section class="usecases-section" id="usecases">
    <div class="container">
        <div class="usecases-header reveal">
            <div class="section-tag">Who We Serve</div>
            <h2 class="section-h2">Built for Every <span class="grad">Healthcare Vertical</span></h2>
            <p class="section-sub" style="margin:0 auto">From large hospital networks to emerging health-tech startups,
                our solutions are engineered to scale across the entire healthcare ecosystem.</p>
        </div>

        <div class="usecases-grid stagger">
            <div class="uc-card">
                <span class="uc-emoji">🏥</span>
                <div class="uc-title">Hospitals & Health Systems</div>
                <div class="uc-desc">Enterprise HMS, EHR integration, and operational efficiency platforms for
                    multi-specialty hospital networks.</div>
            </div>
            <div class="uc-card">
                <span class="uc-emoji">🩺</span>
                <div class="uc-title">Clinics & Practices</div>
                <div class="uc-desc">Streamlined practice management, patient scheduling, and clinical workflows for
                    outpatient care settings.</div>
            </div>
            <div class="uc-card">
                <span class="uc-emoji">🔬</span>
                <div class="uc-title">Diagnostic Laboratories</div>
                <div class="uc-desc">LIMS integration, result reporting automation, and AI-assisted anomaly detection
                    for diagnostic labs.</div>
            </div>
            <div class="uc-card">
                <span class="uc-emoji">💻</span>
                <div class="uc-title">Telemedicine Startups</div>
                <div class="uc-desc">Scalable, compliant telehealth platforms with video, e-prescriptions, and async
                    care capabilities.</div>
            </div>
            <div class="uc-card">
                <span class="uc-emoji">💊</span>
                <div class="uc-title">Pharmaceutical Companies</div>
                <div class="uc-desc">Clinical trial management, pharmacovigilance, and digital engagement platforms for
                    pharma enterprises.</div>
            </div>
            <div class="uc-card">
                <span class="uc-emoji">☁️</span>
                <div class="uc-title">Healthcare SaaS</div>
                <div class="uc-desc">Multi-tenant SaaS architecture, compliance frameworks, and integration APIs for
                    health-tech product companies.</div>
            </div>
            <div class="uc-card">
                <span class="uc-emoji">🩻</span>
                <div class="uc-title">Medical Device Platforms</div>
                <div class="uc-desc">IoT data pipelines, device connectivity, and FDA-compliant software for connected
                    medical device ecosystems.</div>
            </div>
            <div class="uc-card">
                <span class="uc-emoji">📄</span>
                <div class="uc-title">Insurance & Claims</div>
                <div class="uc-desc">Intelligent claims processing, fraud detection, and payer-provider integration for
                    health insurance operations.</div>
            </div>
        </div>
    </div>
</section>

<!-- WHY ACCROSIAN -->
<section class="why-section" id="why">
    <div class="container">
        <div class="why-grid">
            <div class="reveal-left">
                <div class="section-tag">Why Accrosian</div>
                <h2 class="section-h2">Your Strategic <span class="grad">Digital Health</span> Partner</h2>
                <p class="section-sub" style="margin-bottom:40px">We don't just build software. We embed ourselves into
                    your healthcare operations to deliver solutions that are clinically informed, technically excellent,
                    and built for the long term.</p>

                <div class="why-features">
                    <div class="why-feature">
                        <div class="why-feat-icon">🏥</div>
                        <div>
                            <div class="why-feat-title">Healthcare Domain Expertise</div>
                            <div class="why-feat-desc">Deep clinical knowledge across hospital operations, diagnostics,
                                and patient care workflows.</div>
                        </div>
                    </div>
                    <div class="why-feature">
                        <div class="why-feat-icon">☁️</div>
                        <div>
                            <div class="why-feat-title">Scalable Cloud Architecture</div>
                            <div class="why-feat-desc">Microservices, containerized infrastructure built to handle
                                millions of patient records reliably.</div>
                        </div>
                    </div>
                    <div class="why-feature">
                        <div class="why-feat-icon">🔒</div>
                        <div>
                            <div class="why-feat-title">Security-First Engineering</div>
                            <div class="why-feat-desc">HIPAA, GDPR, ISO 27001 compliance baked in from day one — not
                                bolted on at the end.</div>
                        </div>
                    </div>
                    <div class="why-feature">
                        <div class="why-feat-icon">🤖</div>
                        <div>
                            <div class="why-feat-title">AI Integration Specialists</div>
                            <div class="why-feat-desc">Practical ML deployment in clinical settings — from model
                                selection to production monitoring.</div>
                        </div>
                    </div>
                    <div class="why-feature">
                        <div class="why-feat-icon">🎯</div>
                        <div>
                            <div class="why-feat-title">Dedicated Support Teams</div>
                            <div class="why-feat-desc">24/7 technical support, SLA-backed commitments, and dedicated
                                customer success managers.</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="why-visual reveal-right">
                <div class="why-big-num">200+</div>
                <div class="why-big-lbl">Healthcare Projects Delivered</div>
                <div class="why-stats-grid">
                    <div class="why-stat">
                        <div class="why-stat-val">15+</div>
                        <div class="why-stat-lbl">Years in Healthcare Tech</div>
                    </div>
                    <div class="why-stat">
                        <div class="why-stat-val">99.9%</div>
                        <div class="why-stat-lbl">Platform Uptime SLA</div>
                    </div>
                    <div class="why-stat">
                        <div class="why-stat-val">50+</div>
                        <div class="why-stat-lbl">Countries Served</div>
                    </div>
                    <div class="why-stat">
                        <div class="why-stat-val">4.9★</div>
                        <div class="why-stat-lbl">Client Satisfaction</div>
                    </div>
                </div>

                <div
                    style="margin-top:28px; padding:20px; background:var(--white-10); border-radius:14px; border:1px solid var(--glass-border); text-align:left">
                    <div
                        style="font-size:0.75rem;color:var(--white-60);margin-bottom:10px;font-weight:600;text-transform:uppercase;letter-spacing:0.07em">
                        Certifications & Recognition</div>
                    <div style="display:flex;flex-wrap:wrap;gap:8px">
                        <span
                            style="padding:5px 14px;border-radius:50px;background:var(--glass);border:1px solid var(--glass-border);font-size:0.75rem;font-weight:500">HIPAA
                            Certified</span>
                        <span
                            style="padding:5px 14px;border-radius:50px;background:var(--glass);border:1px solid var(--glass-border);font-size:0.75rem;font-weight:500">ISO
                            27001</span>
                        <span
                            style="padding:5px 14px;border-radius:50px;background:var(--glass);border:1px solid var(--glass-border);font-size:0.75rem;font-weight:500">AWS
                            Partner</span>
                        <span
                            style="padding:5px 14px;border-radius:50px;background:var(--glass);border:1px solid var(--glass-border);font-size:0.75rem;font-weight:500">Azure
                            Partner</span>
                        <span
                            style="padding:5px 14px;border-radius:50px;background:var(--glass);border:1px solid var(--glass-border);font-size:0.75rem;font-weight:500">GDPR
                            Ready</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="cta-section" id="contact">
    <div class="hero-grid"></div>
    <div class="cta-glow"></div>
    <div class="cta-inner reveal">
        <div class="section-tag" style="margin:0 auto 24px">Start Your Journey</div>
        <h2>Let's Build the <span class="grad">Future of Digital</span> Healthcare</h2>
        <p>Whether you're modernizing a legacy hospital system, launching a telemedicine platform, or building the
            next generation of health-tech — Accrosian has the expertise, technology, and commitment to make it
            happen.</p>
        <div class="cta-btns">
            <a href="#" class="btn-primary">Schedule a Consultation →</a>
            <a href="#" class="btn-outline">View Case Studies</a>
        </div>
    </div>
</section>

<script>
// Scroll reveal
const observer = new IntersectionObserver((entries) => {
    entries.forEach(e => {
        if (e.isIntersecting) {
            e.target.classList.add('visible');
            // Animate metric bars
            e.target.querySelectorAll('.metric-bar-fill').forEach(bar => {
                const w = bar.dataset.width;
                bar.style.transform = `scaleX(${w/100})`;
                bar.classList.add('animated');
            });
        }
    });
}, {
    threshold: 0.12,
    rootMargin: '0px 0px -40px 0px'
});

document.querySelectorAll('.reveal, .reveal-left, .reveal-right, .stagger').forEach(el => observer.observe(el));

// Metric bars on parent section visible
const metricsSection = document.querySelector('.patient-section');
if (metricsSection) {
    const mObs = new IntersectionObserver((entries) => {
        entries.forEach(e => {
            if (e.isIntersecting) {
                e.target.querySelectorAll('.metric-bar-fill').forEach(bar => {
                    const w = bar.dataset.width;
                    setTimeout(() => {
                        bar.style.transform = `scaleX(${w/100})`;
                    }, 400);
                });
            }
        });
    }, {
        threshold: 0.3
    });
    mObs.observe(metricsSection);
}

// Smooth nav active states
document.querySelectorAll('a[href^="#"]').forEach(a => {
    a.addEventListener('click', e => {
        const target = document.querySelector(a.getAttribute('href'));
        if (target) {
            e.preventDefault();
            target.scrollIntoView({
                behavior: 'smooth'
            });
        }
    });
});
</script>
@endsection