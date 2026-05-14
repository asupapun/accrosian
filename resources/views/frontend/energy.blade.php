@extends('layouts.app')

@section('title', 'Energy & Sustainability Solutions | Accrosian')

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
    --navy: #050d1f;
    --navy-2: #071428;
    --navy-3: #0a1c38;
    --navy-4: #0d2248;
    --orange: #f97316;
    --orange-light: #fb923c;
    --black: #000000;
    --glass-border-hover: rgba(249, 115, 22, .38);
    --gradient-orange: linear-gradient(135deg, #e8750a, #f59332);
    --orange-glow: rgba(249, 115, 22, 0.25);
    --orange-dim: rgba(249, 115, 22, 0.12);
    --white: #ffffff;
    --text-muted: rgba(255, 255, 255, 0.55);
    --text-dim: rgba(255, 255, 255, 0.35);
    --glass: rgba(255, 255, 255, 0.04);
    --glass-border: rgba(255, 255, 255, 0.08);
    --radius-lg: 24px;
    --radius-xl: 32px;
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
    color: var(--navy);
    overflow-x: hidden;
    font-size: 16px;
    line-height: 1.6;
}

/* ---- UTILITY ---- */
.container {
    max-width: 1240px;
    margin: 0 auto;
    padding: 0 32px;
}

.section {
    padding: 60px 0;
}

.tag-label {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: var(--orange-dim);
    border: 1px solid rgba(249, 115, 22, 0.3);
    color: var(--orange-light);
    font-size: 11px;
    font-weight: 600;
    letter-spacing: 2.5px;
    text-transform: uppercase;
    padding: 6px 16px;
    border-radius: 100px;
}

.tag-label::before {
    content: '';
    width: 6px;
    height: 6px;
    border-radius: 50%;
    background: var(--orange);
    display: block;
}

.section-heading {
    font-family: var(--ff-head);
    font-size: clamp(2rem, 4vw, 3rem);
    font-weight: 800;
    line-height: 1.15;
}

.gradient-text {
    background: var(--gradient-orange);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.btn-primary {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: var(--orange);
    color: #fff;
    font-family: 'DM Sans', sans-serif;
    font-weight: 600;
    font-size: 15px;
    padding: 14px 28px;
    border-radius: 12px;
    border: none;
    cursor: pointer;
    text-decoration: none;
    box-shadow: 0 0 30px rgba(249, 115, 22, 0.4), 0 4px 15px rgba(249, 115, 22, 0.25);
    transition: all .3s ease;
}

.btn-primary:hover {
    background: var(--orange-light);
    transform: translateY(-2px);
    box-shadow: 0 0 50px rgba(249, 115, 22, 0.55), 0 8px 25px rgba(249, 115, 22, 0.35);
}

.btn-ghost {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: transparent;
    color: var(--white);
    font-family: 'DM Sans', sans-serif;
    font-weight: 500;
    font-size: 15px;
    padding: 14px 28px;
    border-radius: 12px;
    border: 1px solid var(--glass-border);
    cursor: pointer;
    text-decoration: none;
    transition: all .3s ease;
}

.btn-ghost:hover {
    background: var(--glass);
    border-color: rgba(249, 115, 22, 0.4);
    color: var(--orange-light);
}

/* ---- GRID BG ---- */
.grid-bg {
    position: absolute;
    inset: 0;
    overflow: hidden;
    pointer-events: none;
    background-image:
        linear-gradient(rgba(249, 115, 22, 0.04) 1px, transparent 1px),
        linear-gradient(90deg, rgba(249, 115, 22, 0.04) 1px, transparent 1px);
    background-size: 60px 60px;
}

.grid-bg::after {
    content: '';
    position: absolute;
    inset: 0;
    background: radial-gradient(ellipse 80% 60% at 50% 0%, transparent 40%, var(--navy) 80%);
}


/* ---- HERO ---- */
.hero {
    position: relative;
    min-height: 100vh;
    display: flex;
    align-items: center;
    padding: 100px 0 80px;
    overflow: hidden;
    background: var(--navy-4);
}


.hero-inner {
    position: relative;
    z-index: 2;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 80px;
    align-items: center;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 24px;
}

.hero-content {
    position: relative;
    z-index: 2;
}

/* .hero-tag {
    margin-bottom: 28px;
} */

.hero-heading {
    font-family: var(--ff-head);
    font-size: clamp(2.5rem, 4.2vw, 4.2rem);
    font-weight: 800;
    line-height: 1.1;
    margin-top: 40px;
    margin-bottom: 24px;
    animation: fadeInUp 0.8s ease 0.2s both;
    color: var(--white);
}

.hero-sub {
    font-size: 17px;
    color: var(--white);
    line-height: 1.75;
    max-width: 500px;
    margin-bottom: 40px;
}

.hero-actions {
    display: flex;
    gap: 16px;
    flex-wrap: wrap;
    margin-bottom: 56px;
}

/* .hero-visual {
    position: relative;
    z-index: 2;
}

.hero-dashboard {
    position: relative;
    background: linear-gradient(135deg, rgba(255, 255, 255, 0.06) 0%, rgba(255, 255, 255, 0.02) 100%);
    border: 1px solid var(--glass-border);
    border-radius: var(--radius-xl);
    padding: 28px;
    overflow: hidden;
    box-shadow: 0 0 80px rgba(249, 115, 22, 0.1), 0 40px 80px rgba(0, 0, 0, 0.5);
}

.hero-dashboard::before {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(135deg, rgba(249, 115, 22, 0.05) 0%, transparent 60%);
    pointer-events: none;
}

.dash-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 20px;
}

.dash-title {
    font-family: 'Syne', sans-serif;
    font-size: 13px;
    font-weight: 700;
    color: var(--text-muted);
    letter-spacing: 1px;
    text-transform: uppercase;
}

.dash-status {
    display: flex;
    align-items: center;
    gap: 6px;
    font-size: 11px;
    color: #4ade80;
}

.dash-status::before {
    content: '';
    width: 6px;
    height: 6px;
    border-radius: 50%;
    background: #4ade80;
    display: block;
    animation: pulse 2s infinite;
}

@keyframes pulse {

    0%,
    100% {
        opacity: 1
    }

    50% {
        opacity: 0.4
    }
}

.dash-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 12px;
    margin-bottom: 14px;
}

.dash-card {
    background: rgba(255, 255, 255, 0.04);
    border: 1px solid rgba(255, 255, 255, 0.07);
    border-radius: 14px;
    padding: 16px;
    position: relative;
    overflow: hidden;
}

.dash-card-label {
    font-size: 11px;
    color: var(--text-dim);
    margin-bottom: 8px;
    letter-spacing: 0.5px;
}

.dash-card-value {
    font-family: 'Syne', sans-serif;
    font-size: 22px;
    font-weight: 800;
}

.dash-card-change {
    font-size: 11px;
    margin-top: 4px;
}

.up {
    color: #4ade80;
}

.down {
    color: var(--orange-light);
}

.mini-chart {
    margin-top: 10px;
    height: 32px;
    display: flex;
    align-items: flex-end;
    gap: 3px;
}

.bar {
    width: 8px;
    border-radius: 3px 3px 0 0;
    background: var(--orange-dim);
    transition: height .6s ease;
}

.bar.active {
    background: var(--orange);
}

.dash-map {
    background: rgba(255, 255, 255, 0.03);
    border: 1px solid rgba(255, 255, 255, 0.06);
    border-radius: 14px;
    padding: 16px;
    margin-bottom: 14px;
    position: relative;
    overflow: hidden;
}

.dash-map-title {
    font-size: 11px;
    color: var(--text-dim);
    margin-bottom: 12px;
}

.map-nodes {
    position: relative;
    height: 80px;
}

.map-node {
    position: absolute;
    width: 10px;
    height: 10px;
    border-radius: 50%;
    background: var(--orange);
    box-shadow: 0 0 12px var(--orange);
    animation: nodePulse 2s ease-in-out infinite;
}

.map-node::after {
    content: '';
    position: absolute;
    inset: -4px;
    border-radius: 50%;
    border: 1px solid rgba(249, 115, 22, 0.4);
    animation: ring 2s ease-out infinite;
}

@keyframes nodePulse {

    0%,
    100% {
        transform: scale(1)
    }

    50% {
        transform: scale(1.3)
    }
}

@keyframes ring {
    0% {
        transform: scale(1);
        opacity: 1
    }

    100% {
        transform: scale(2.5);
        opacity: 0
    }
}

.map-node:nth-child(1) {
    top: 20px;
    left: 15%
}

.map-node:nth-child(2) {
    top: 50px;
    left: 40%;
    animation-delay: .5s
}

.map-node:nth-child(3) {
    top: 10px;
    left: 65%;
    animation-delay: 1s
}

.map-node:nth-child(4) {
    top: 40px;
    left: 80%;
    animation-delay: 1.5s
}

.map-line {
    position: absolute;
    top: 50%;
    left: 0;
    right: 0;
    height: 1px;
    background: linear-gradient(90deg, transparent, rgba(249, 115, 22, 0.3), rgba(249, 115, 22, 0.3), transparent);
}

.dash-metrics {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 10px;
}

.metric-pill {
    background: rgba(249, 115, 22, 0.08);
    border: 1px solid rgba(249, 115, 22, 0.2);
    border-radius: 10px;
    padding: 10px 12px;
    text-align: center;
}

.metric-pill-val {
    font-family: 'Syne', sans-serif;
    font-size: 16px;
    font-weight: 800;
    color: var(--orange-light);
}

.metric-pill-lbl {
    font-size: 10px;
    color: var(--text-dim);
    margin-top: 2px;
} */

/* float cards */
/* .float-card {
    position: absolute;
    background: rgba(255, 255, 255, 0.08);
    backdrop-filter: blur(20px);
    -webkit-backdrop-filter: blur(20px);
    border: 1px solid rgba(255, 255, 255, 0.12);
    border-radius: 14px;
    padding: 14px 18px;
    font-size: 13px;
    font-weight: 600;
    color: var(--white);
    box-shadow: 0 8px 32px rgba(0, 0, 0, 0.4);
    white-space: nowrap;
    animation: floatAnim 4s ease-in-out infinite;
}

@keyframes floatAnim {

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
    left: -40px;
    animation-delay: 0s;
}

.float-card-2 {
    bottom: 20px;
    left: -50px;
    animation-delay: 1.5s;
}

.float-card .fc-val {
    color: var(--orange-light);
    font-family: 'Syne', sans-serif;
    font-size: 16px;
    font-weight: 800;
} */

/* ---- CHALLENGES ---- */
.challenges {
    background: var(--white);
    position: relative;
    overflow: hidden;
}

.challenges-inner {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 80px;
    align-items: start;
}

.challenges-left {
    position: sticky;
    align-self: start;
}

.challenges-sub {
    font-size: 16px;
    color: var(--black);
    line-height: 1.75;
    margin-top: 20px;
}

.challenges-right {
    display: flex;
    flex-direction: column;
    gap: 16px;
}

/* IMAGE WRAPPER */
.challenge-image-wrap {
    margin-top: 32px;
    position: relative;
    overflow: hidden;

    border-radius: 32px 80px 32px 80px;

    border: 1px solid rgba(249, 115, 22, 0.2);

    box-shadow:
        0 20px 60px rgba(0, 0, 0, 0.18),
        0 0 40px rgba(249, 115, 22, 0.12);

    transition: all .4s ease;
}

/* IMAGE */
.challenge-image-wrap img {
    width: 100%;
    height: 620px;
    object-fit: cover;
    display: block;

    transition: transform .6s ease;
}

/* HOVER EFFECT */
.challenge-image-wrap:hover img {
    transform: scale(1.05);
}

.challenge-image-wrap:hover {
    box-shadow:
        0 25px 70px rgba(0, 0, 0, 0.25),
        0 0 50px rgba(249, 115, 22, 0.22);
}

.challenge-card {
    background: var(--navy-4);
    border: 1px solid var(--navy-3);
    border-radius: 20px;
    padding: 24px 28px;
    display: flex;
    align-items: flex-start;
    gap: 18px;
    transition: all .35s ease;
    cursor: default;
    position: relative;
    overflow: hidden;
}

.challenge-card::before {
    content: '';
    position: absolute;
    inset: 0;
    border-radius: 20px;
    border: 1px solid transparent;
    transition: border-color .35s;
}

.challenge-card:hover {
    border-color: var(--glass-border-hover);
    box-shadow: 0 8px 28px var(--navy-2);
    transform: translateY(-4px)
}

.challenge-card:hover::before {
    border-color: rgba(249, 115, 22, 0.35);
}

.challenge-card:hover .ch-icon {
    box-shadow: 0 0 30px var(--orange-glow);
}

.ch-icon {
    width: 48px;
    height: 48px;
    border-radius: 14px;
    flex-shrink: 0;
    background: var(--orange-dim);
    border: 1px solid rgba(249, 115, 22, 0.25);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 22px;
    transition: box-shadow .35s;
}

.ch-title {
    font-family: var(--ff-head);
    font-size: 16px;
    font-weight: 700;
    margin-bottom: 6px;
    color: var(--white);
}

.ch-desc {
    font-size: 14px;
    color: var(--white);
    line-height: 1.6;
}

/* ---- SOLUTIONS ---- */
.solutions {
    position: relative;
    overflow: hidden;
}

.solutions::before {
    content: '';
    position: absolute;
    width: 600px;
    height: 600px;
    border-radius: 50%;
    background: radial-gradient(circle, rgba(249, 115, 22, 0.07) 0%, transparent 70%);
    top: -200px;
    right: -200px;
    pointer-events: none;
}

.solutions-header {
    text-align: center;
    margin-bottom: 64px;
}

.solutions-header p {
    font-size: 17px;
    color: var(--black);
    max-width: 600px;
    margin: 16px auto 0;
}

.solutions-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 24px;
}

.sol-card {
    position: relative;
    border-radius: 20px;
    overflow: hidden;
    padding: 32px 28px;
    background: var(--navy-4);
    border: 2px solid var(--navy-3);
    transition: all .35s ease;
    display: flex;
    flex-direction: column;
}

.sol-card::after {
    content: '';
    position: absolute;
    inset: 0;
    border-radius: var(--radius-lg);
    border: 1px solid transparent;
    transition: border-color .35s;
}

.sol-card:hover {
    border-color: var(--glass-border-hover);
    box-shadow: 0 8px 28px var(--navy-2);
    transform: translateY(-4px)
}

.sol-card:hover::after {
    border-color: rgba(249, 115, 22, 0.4);
}

.sol-card:hover .sol-icon {
    box-shadow: 0 0 40px var(--orange-glow);
}

.sol-icon {
    width: 56px;
    height: 56px;
    border-radius: 16px;
    background: linear-gradient(135deg, rgba(249, 115, 22, 0.2), rgba(249, 115, 22, 0.08));
    border: 1px solid rgba(249, 115, 22, 0.3);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 26px;
    margin-bottom: 20px;
    transition: box-shadow .35s;
}

.sol-title {
    font-family: var(--ff-head);
    font-size: 18px;
    font-weight: 700;
    margin-bottom: 10px;
    color: var(--white);
}

.sol-desc {
    font-size: 14px;
    color: var(--white);
    line-height: 1.65;
    flex: 1;
}

.sol-arrow {
    margin-top: 20px;
    color: var(--orange);
    font-size: 20px;
    transition: transform .3s;
}

.sol-card:hover .sol-arrow {
    transform: translateX(6px);
}

/* ---- RELIABILITY ---- */
.reliability {
    background: var(--navy-4);
    position: relative;
    overflow: hidden;
}

.reliability-inner {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 80px;
    align-items: center;
}

.reliability-visual {
    position: relative;
}

.blob-container {
    position: relative;
    width: 100%;
    aspect-ratio: 1;
    max-width: 480px;
}

.blob-img {
    width: 100%;
    height: 100%;
    border-radius: 60% 40% 55% 45% / 45% 55% 45% 55%;
    overflow: hidden;
    position: relative;
    border: 2px solid rgba(249, 115, 22, 0.25);
    box-shadow: 0 0 80px rgba(249, 115, 22, 0.15), 0 40px 80px rgba(0, 0, 0, 0.5);
    animation: morphBlob 8s ease-in-out infinite;
}

@keyframes morphBlob {

    0%,
    100% {
        border-radius: 60% 40% 55% 45% / 45% 55% 45% 55%;
    }

    33% {
        border-radius: 55% 45% 40% 60% / 60% 40% 55% 45%;
    }

    66% {
        border-radius: 45% 55% 60% 40% / 50% 50% 40% 60%;
    }
}

.blob-img-inner {
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, #0a1c38 0%, #071428 50%, #050d1f 100%);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 80px;
    position: relative;
}

.blob-img-inner::before {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(135deg, rgba(249, 115, 22, 0.15) 0%, transparent 60%);
}

.rel-metric-cards {
    position: absolute;
    display: flex;
    flex-direction: column;
    gap: 12px;
    right: -20px;
    top: 50%;
    transform: translateY(-50%);
}

.rel-metric {
    background: rgba(5, 13, 31, 0.9);
    backdrop-filter: blur(20px);
    border: 1px solid rgba(249, 115, 22, 0.25);
    border-radius: 14px;
    padding: 14px 18px;
    min-width: 160px;
    box-shadow: 0 8px 32px rgba(0, 0, 0, 0.4);
    animation: floatAnim 4s ease-in-out infinite;
}

.rel-metric:nth-child(2) {
    animation-delay: 1s;
}

.rel-metric:nth-child(3) {
    animation-delay: 2s;
}

.rel-metric:nth-child(4) {
    animation-delay: 3s;
}

.rel-metric-val {
    font-family: var(--ff-mono);
    font-size: 20px;
    font-weight: 800;
    color: var(--orange-light);
}

.rel-metric-lbl {
    font-size: 11px;
    color: var(--white);
    margin-top: 3px;
}

.reliability-content {}

.reliability-content p {
    font-size: 16px;
    color: var(--white);
    line-height: 1.8;
    margin-top: 20px;
    margin-bottom: 32px;
}

.rel-features {
    display: flex;
    flex-direction: column;
    gap: 16px;
}

.rel-feature {
    display: flex;
    align-items: center;
    gap: 14px;
}

.rel-feature-dot {
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background: var(--orange);
    flex-shrink: 0;
    box-shadow: 0 0 8px var(--orange);
}

.rel-feature-text {
    font-size: 15px;
    font-weight: 500;
    color: var(--white);
}

/* ---- USE CASES ---- */
.usecases {
    position: relative;
    overflow: hidden;
}

.usecases-header {
    text-align: center;
    margin-bottom: 64px;
}

.usecases-header p {
    font-size: 17px;
    color: var(--black);
    max-width: 560px;
    margin: 16px auto 0;
}

.usecases-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
}

.uc-card {
    position: relative;
    border-radius: var(--radius-lg);
    overflow: hidden;
    padding: 36px 28px;
    background: var(--navy-4);
    border: 1px solid var(--navy-3);
    transition: all .35s ease;
    cursor: default;
}

.uc-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 3px;
    background: var(--gradient-orange);
    opacity: 0;
    transition: opacity .35s;
}

.uc-card:hover {
    border-color: var(--glass-border-hover);
    box-shadow: 0 8px 28px var(--navy-2);
    transform: translateY(-4px)
}

.uc-card:hover::before {
    opacity: 1;
}

.uc-num {
    font-family: var(--ff-mono);
    font-size: 48px;
    font-weight: 800;
    color: rgba(249, 115, 22, 0.12);
    position: absolute;
    top: 16px;
    right: 20px;
}

.uc-icon {
    font-size: 32px;
    margin-bottom: 16px;
}

.uc-title {
    font-family: var(--ff-head);
    font-size: 18px;
    font-weight: 700;
    margin-bottom: 10px;
    color: var(--white);
}

.uc-desc {
    font-size: 14px;
    color: var(--white);
    line-height: 1.65;
}

/* ---- TECH STACK ---- */
.techstack {
    position: relative;
    overflow: hidden;
}

.techstack-header {
    text-align: center;
    margin-bottom: 56px;
}

.techstack-header p {
    font-size: 17px;
    color: var(--black);
    max-width: 500px;
    margin: 16px auto 0;
}

.tech-orbit {
    position: relative;
    min-height: 300px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.tech-pills {
    display: flex;
    flex-wrap: wrap;
    gap: 14px;
    justify-content: center;
    max-width: 900px;
    margin: 0 auto;
}

.tech-pill {
    background: var(--navy-3);
    border: 1px solid var(--navy-2);
    border-radius: 100px;
    padding: 10px 22px;
    font-size: 14px;
    font-weight: 600;
    color: var(--white);
    transition: all .3s ease;
    cursor: default;
    position: relative;
    overflow: hidden;
}

.tech-pill::before {
    content: '';
    position: absolute;
    inset: 0;
    border-radius: 100px;
    background: var(--gradient-orange);
    transform: translateX(-100%);
    transition: transform .5s ease;
}

.tech-pill:hover {
    border-color: rgba(249, 115, 22, 0.4);
    color: var(--navy-2);
    background: rgba(249, 115, 22, 0.08);
    box-shadow: 0 0 20px rgba(249, 115, 22, 0.15);
    transform: translateY(-3px);
}

.tech-pill:hover::before {
    transform: translateX(100%);
}

/* ---- WHY ACCROSIAN ---- */
/* .why {
    position: relative;
    overflow: hidden;
}

.why::before {
    content: '';
    position: absolute;
    width: 700px;
    height: 700px;
    border-radius: 50%;
    background: radial-gradient(circle, rgba(249, 115, 22, 0.06) 0%, transparent 70%);
    bottom: -200px;
    left: -200px;
    pointer-events: none;
}

.why-header {
    text-align: center;
    margin-bottom: 64px;
}

.why-header p {
    font-size: 17px;
    color: var(--text-muted);
    max-width: 500px;
    margin: 16px auto 0;
}

.why-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 24px;
}

.why-card {
    background: var(--glass);
    border: 1px solid var(--glass-border);
    border-radius: var(--radius-xl);
    padding: 40px 36px;
    transition: all .35s ease;
    position: relative;
    overflow: hidden;
}

.why-card::after {
    content: '';
    position: absolute;
    inset: 0;
    border-radius: var(--radius-xl);
    border: 1px solid transparent;
    transition: border-color .35s;
    pointer-events: none;
}

.why-card:hover {
    background: rgba(249, 115, 22, 0.06);
    transform: translateY(-6px);
}

.why-card:hover::after {
    border-color: rgba(249, 115, 22, 0.35);
}

.why-icon {
    font-size: 40px;
    margin-bottom: 20px;
}

.why-title {
    font-family: 'Syne', sans-serif;
    font-size: 22px;
    font-weight: 800;
    margin-bottom: 12px;
}

.why-desc {
    font-size: 15px;
    color: var(--text-muted);
    line-height: 1.7;
}

.why-card:nth-child(odd) {
    margin-top: 0;
}

.why-card:nth-child(even) {
    margin-top: 32px;
} */

/* ---- STATS ---- */
/* .stats {
    background: linear-gradient(135deg, #060e20 0%, #0a1829 60%, #050d1f 100%);
    position: relative;
    overflow: hidden;
    border-top: 1px solid var(--glass-border);
    border-bottom: 1px solid var(--glass-border);
}

.stats::before {
    content: '';
    position: absolute;
    inset: 0;
    background-image: linear-gradient(rgba(249, 115, 22, 0.03) 1px, transparent 1px),
        linear-gradient(90deg, rgba(249, 115, 22, 0.03) 1px, transparent 1px);
    background-size: 40px 40px;
}

.stats-header {
    text-align: center;
    margin-bottom: 64px;
}

.stats-header p {
    font-size: 17px;
    color: var(--text-muted);
    max-width: 500px;
    margin: 16px auto 0;
}

.stats-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 24px;
}

.stat-card {
    background: var(--glass);
    border: 1px solid rgba(249, 115, 22, 0.15);
    border-radius: var(--radius-lg);
    padding: 36px 28px;
    text-align: center;
    position: relative;
    overflow: hidden;
    transition: all .35s;
}

.stat-card::before {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    height: 3px;
    background: linear-gradient(90deg, transparent, var(--orange), transparent);
}

.stat-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4), 0 0 40px rgba(249, 115, 22, 0.08);
}

.stat-num {
    font-family: 'Syne', sans-serif;
    font-size: 48px;
    font-weight: 800;
    color: var(--orange-light);
    line-height: 1;
    margin-bottom: 10px;
}

.stat-label {
    font-size: 14px;
    color: var(--text-muted);
    font-weight: 500;
}

.stat-icon {
    font-size: 28px;
    margin-bottom: 14px;
}

.sparkline {
    height: 40px;
    display: flex;
    align-items: flex-end;
    gap: 3px;
    justify-content: center;
    margin-top: 14px;
}

.spark {
    width: 6px;
    border-radius: 2px;
    background: rgba(249, 115, 22, 0.3);
}

.spark.lit {
    background: var(--orange);
} */

/* ---- CTA ---- */
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


/* ---- DIVIDERS ---- */
.section-divider {
    width: 60px;
    height: 3px;
    background: linear-gradient(90deg, var(--orange), transparent);
    border-radius: 2px;
    margin: 20px 0;
}

.section-divider.center {
    margin: 20px auto;
}

/* ---- RESPONSIVE ---- */
@media (max-width: 1024px) {

    .hero-inner,
    .challenges-inner,
    .reliability-inner {
        grid-template-columns: 1fr;
        gap: 60px;
    }

    .hero-visual {
        order: -1;
    }

    .blob-container {
        max-width: 380px;
        margin: 0 auto;
    }

    .rel-metric-cards {
        right: 0;
    }

    .solutions-grid,
    .usecases-grid {
        grid-template-columns: repeat(2, 1fr);
    }

    .stats-grid {
        grid-template-columns: repeat(2, 1fr);
    }

    .why-grid {
        grid-template-columns: 1fr;
    }

    .why-card:nth-child(even) {
        margin-top: 0;
    }
}

@media (max-width: 768px) {
    .container {
        padding: 0 20px;
    }

    .section {
        padding: 80px 0;
    }

    .solutions-grid,
    .usecases-grid {
        grid-template-columns: 1fr;
    }

    .stats-grid {
        grid-template-columns: 1fr 1fr;
    }

    .footer-inner {
        grid-template-columns: 1fr 1fr;
        gap: 32px;
    }

    .nav-links,
    .nav-cta .btn-ghost {
        display: none;
    }

    .hero-stats {
        flex-wrap: wrap;
        gap: 24px;
    }

    .rel-metric-cards {
        position: static;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: center;
        margin-top: 20px;
        transform: none;
    }
}
</style>
</head>

<body>

    <!-- HERO -->
    <section class="hero" id="hero">
        <img src="{{ asset('assets/images/hero-energy.jpeg') }}" alt="Hero Background" class="hero-bg-img" />
        <div class="grid-bg"></div>
        <div class="container">
            <div class="hero-inner">
                <div class="hero-content reveal">
                    <!-- <div class="hero-tag"><span class="tag-label">Energy &bull; Resources &bull; Utilities</span></div> -->
                    <h1 class="hero-heading">
                        Powering the Future with <span class="gradient-text">Intelligent Energy Solutions</span>
                    </h1>
                    <p class="hero-sub">Build scalable, secure, and data-driven platforms for modern energy providers,
                        utility operators, and resource management enterprises.</p>
                    <div class="hero-actions">
                        <a href="#" class="btn-primary">⚡ Consult Now</a>
                        <a href="#" class="btn-ghost">Explore Solutions →</a>
                    </div>
                </div>
                <!-- <div class="hero-visual reveal">
                    <div style="position:relative;">
                        <div class="float-card float-card-1">
                            <div class="fc-val">98.7%</div>
                            <div style="font-size:11px;color:var(--text-muted);margin-top:2px;">Grid Efficiency</div>
                        </div>
                        <div class="float-card float-card-2">
                            <div style="display:flex;align-items:center;gap:8px;">
                                <span style="color:#4ade80;">●</span>
                                <span style="font-size:12px;">AI Monitoring Active</span>
                            </div>
                        </div>
                        <div class="hero-dashboard">
                            <div class="dash-header">
                                <span class="dash-title">Energy Control Center</span>
                                <span class="dash-status">System Live</span>
                            </div>
                            <div class="dash-grid">
                                <div class="dash-card">
                                    <div class="dash-card-label">Power Output</div>
                                    <div class="dash-card-value" style="color:var(--orange-light);">4.2 GW</div>
                                    <div class="dash-card-change up">↑ 12.4%</div>
                                    <div class="mini-chart">
                                        <div class="bar" style="height:40%"></div>
                                        <div class="bar" style="height:55%"></div>
                                        <div class="bar" style="height:45%"></div>
                                        <div class="bar active" style="height:70%"></div>
                                        <div class="bar" style="height:60%"></div>
                                        <div class="bar active" style="height:80%"></div>
                                        <div class="bar active" style="height:100%"></div>
                                    </div>
                                </div>
                                <div class="dash-card">
                                    <div class="dash-card-label">Renewable Mix</div>
                                    <div class="dash-card-value" style="color:#4ade80;">68%</div>
                                    <div class="dash-card-change up">↑ 8.1%</div>
                                    <div class="mini-chart">
                                        <div class="bar" style="height:50%;background:rgba(74,222,128,0.25)"></div>
                                        <div class="bar" style="height:60%;background:rgba(74,222,128,0.25)"></div>
                                        <div class="bar" style="height:55%;background:rgba(74,222,128,0.5)"></div>
                                        <div class="bar" style="height:70%;background:rgba(74,222,128,0.5)"></div>
                                        <div class="bar" style="height:75%;background:rgba(74,222,128,0.75)"></div>
                                        <div class="bar" style="height:80%;background:#4ade80"></div>
                                        <div class="bar" style="height:100%;background:#4ade80"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="dash-map">
                                <div class="dash-map-title">GRID NETWORK COVERAGE</div>
                                <div class="map-nodes">
                                    <div class="map-line"></div>
                                    <div class="map-node"></div>
                                    <div class="map-node"></div>
                                    <div class="map-node"></div>
                                    <div class="map-node"></div>
                                </div>
                            </div>
                            <div class="dash-metrics">
                                <div class="metric-pill">
                                    <div class="metric-pill-val">99.9%</div>
                                    <div class="metric-pill-lbl">Uptime</div>
                                </div>
                                <div class="metric-pill">
                                    <div class="metric-pill-val">3.8ms</div>
                                    <div class="metric-pill-lbl">Latency</div>
                                </div>
                                <div class="metric-pill">
                                    <div class="metric-pill-val">1.2M</div>
                                    <div class="metric-pill-lbl">Endpoints</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>

    <!-- CHALLENGES -->
    <section class="challenges section" id="challenges">
        <div class="container">
            <div class="challenges-inner">
                <div class="challenges-left reveal">
                    <span class="tag-label">Industry Challenges</span>
                    <div class="section-divider" style="margin-top:20px;"></div>
                    <h2 class="section-heading" style="margin-top:8px;">The Industry is <span
                            class="gradient-text">Rapidly Evolving</span></h2>
                    <p class="challenges-sub">Rising energy demands, regulatory pressures, and the global push toward
                        net-zero are forcing utilities to rethink their infrastructure. Modern energy enterprises must
                        navigate smart grid modernization, seamless renewable integration, real-time monitoring, and
                        ever-stricter sustainability compliance—all while maintaining operational continuity and cost
                        efficiency.</p>
                    <!-- IMAGE -->
                    <div class="challenge-image-wrap">
                        <img src="{{ asset('assets/images/energy-img.jpg') }}" alt="Energy Infrastructure">
                    </div>
                </div>
                <div class="challenges-right">
                    <div class="challenge-card reveal">
                        <div class="ch-icon">⚡</div>
                        <div>
                            <div class="ch-title">Grid Modernization</div>
                            <div class="ch-desc">Aging infrastructure struggles to handle distributed renewable inputs
                                and dynamic demand patterns across interconnected networks.</div>
                        </div>
                    </div>
                    <div class="challenge-card reveal">
                        <div class="ch-icon">📡</div>
                        <div>
                            <div class="ch-title">Real-Time Monitoring</div>
                            <div class="ch-desc">Critical need for millisecond-level visibility across thousands of
                                distributed sensors, substations, and IoT endpoints simultaneously.</div>
                        </div>
                    </div>
                    <div class="challenge-card reveal">
                        <div class="ch-icon">🔋</div>
                        <div>
                            <div class="ch-title">Energy Optimization</div>
                            <div class="ch-desc">Balancing supply and demand in real time while minimizing waste and
                                maximizing utilization of renewable energy sources.</div>
                        </div>
                    </div>
                    <div class="challenge-card reveal">
                        <div class="ch-icon">🏗️</div>
                        <div>
                            <div class="ch-title">Infrastructure Scalability</div>
                            <div class="ch-desc">Legacy platforms cannot scale to accommodate microgrids, EV charging
                                networks, and next-generation smart city integrations.</div>
                        </div>
                    </div>
                    <div class="challenge-card reveal">
                        <div class="ch-icon">🔧</div>
                        <div>
                            <div class="ch-title">Predictive Maintenance</div>
                            <div class="ch-desc">Unexpected equipment failures cause costly outages. Moving from
                                reactive to AI-driven predictive maintenance is now critical.</div>
                        </div>
                    </div>
                    <div class="challenge-card reveal">
                        <div class="ch-icon">🌱</div>
                        <div>
                            <div class="ch-title">Sustainability Compliance</div>
                            <div class="ch-desc">Meeting ESG targets, carbon reporting mandates, and evolving regulatory
                                frameworks across multiple jurisdictions simultaneously.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SOLUTIONS -->
    <section class="solutions section" id="solutions">
        <div class="container">
            <div class="solutions-header reveal">
                <span class="tag-label">Our Solutions</span>
                <div class="section-divider center"></div>
                <h2 class="section-heading">Enterprise Solutions for <span class="gradient-text">Modern Utilities</span>
                </h2>
                <p>Purpose-built digital platforms that help energy enterprises operate smarter, scale faster, and
                    deliver more reliable services.</p>
            </div>
            <div class="solutions-grid">
                <div class="sol-card reveal">
                    <div class="sol-icon">🔌</div>
                    <div class="sol-title">Smart Grid Platforms</div>
                    <div class="sol-desc">End-to-end digital grid management with SCADA integration, real-time
                        telemetry, and automated load balancing powered by AI-driven decision engines.</div>
                    <div class="sol-arrow">→</div>
                </div>
                <div class="sol-card reveal">
                    <div class="sol-icon">📊</div>
                    <div class="sol-title">Energy Analytics Dashboards</div>
                    <div class="sol-desc">Unified visibility across generation, transmission, and consumption with
                        executive-level KPI dashboards, anomaly detection, and predictive forecasting.</div>
                    <div class="sol-arrow">→</div>
                </div>
                <div class="sol-card reveal">
                    <div class="sol-icon">🌐</div>
                    <div class="sol-title">IoT Monitoring Systems</div>
                    <div class="sol-desc">Scalable edge-to-cloud IoT architectures connecting millions of sensors,
                        meters, and field devices with sub-second data ingestion and alerting.</div>
                    <div class="sol-arrow">→</div>
                </div>
                <div class="sol-card reveal">
                    <div class="sol-icon">☀️</div>
                    <div class="sol-title">Renewable Energy Management</div>
                    <div class="sol-desc">Integrated platforms for solar, wind, and battery storage management with grid
                        interconnection, production forecasting, and regulatory reporting.</div>
                    <div class="sol-arrow">→</div>
                </div>
                <div class="sol-card reveal">
                    <div class="sol-icon">🤖</div>
                    <div class="sol-title">Predictive Maintenance Systems</div>
                    <div class="sol-desc">ML-powered failure prediction for transformers, turbines, and critical
                        assets—reducing unplanned downtime and extending equipment lifecycle.</div>
                    <div class="sol-arrow">→</div>
                </div>
                <div class="sol-card reveal">
                    <div class="sol-icon">👤</div>
                    <div class="sol-title">Utility Customer Portals</div>
                    <div class="sol-desc">Self-service digital portals enabling customers to track usage, pay bills,
                        report outages, and access consumption insights from any device.</div>
                    <div class="sol-arrow">→</div>
                </div>
            </div>
        </div>
    </section>

    <!-- RELIABILITY -->
    <section class="reliability section" id="reliability">
        <div class="container">
            <div class="reliability-inner">
                <div class="reliability-visual reveal">
                    <div class="blob-container">
                        <div class="blob-img">
                            <div class="blob-img-inner">
                                <svg width="160" height="160" viewBox="0 0 160 160" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <!-- Energy tower -->
                                    <rect x="74" y="40" width="12" height="80" fill="rgba(249,115,22,0.6)" rx="2" />
                                    <polygon points="80,20 60,55 100,55" fill="rgba(249,115,22,0.5)"
                                        stroke="rgba(249,115,22,0.8)" stroke-width="1" />
                                    <polygon points="80,20 55,65 105,65" fill="none" stroke="rgba(249,115,22,0.3)"
                                        stroke-width="1" />
                                    <!-- Power lines -->
                                    <path d="M20 70 Q80 60 140 70" stroke="rgba(249,115,22,0.4)" stroke-width="1.5"
                                        fill="none" />
                                    <path d="M20 80 Q80 70 140 80" stroke="rgba(249,115,22,0.3)" stroke-width="1"
                                        fill="none" />
                                    <!-- Nodes -->
                                    <circle cx="20" cy="70" r="5" fill="rgba(249,115,22,0.8)" />
                                    <circle cx="140" cy="70" r="5" fill="rgba(249,115,22,0.8)" />
                                    <circle cx="80" cy="60" r="4" fill="var(--orange)" />
                                    <!-- Solar -->
                                    <rect x="25" y="110" width="30" height="20" fill="rgba(249,115,22,0.3)" rx="2" />
                                    <rect x="60" y="110" width="30" height="20" fill="rgba(249,115,22,0.3)" rx="2" />
                                    <rect x="95" y="110" width="30" height="20" fill="rgba(249,115,22,0.3)" rx="2" />
                                    <line x1="28" y1="115" x2="52" y2="125" stroke="rgba(249,115,22,0.5)"
                                        stroke-width="1" />
                                    <line x1="63" y1="115" x2="87" y2="125" stroke="rgba(249,115,22,0.5)"
                                        stroke-width="1" />
                                    <line x1="98" y1="115" x2="122" y2="125" stroke="rgba(249,115,22,0.5)"
                                        stroke-width="1" />
                                    <!-- Glow -->
                                    <circle cx="80" cy="60" r="30" fill="rgba(249,115,22,0.05)" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="rel-metric-cards">
                        <div class="rel-metric">
                            <div class="rel-metric-val">99.99%</div>
                            <div class="rel-metric-lbl">System Uptime</div>
                        </div>
                        <div class="rel-metric">
                            <div class="rel-metric-val">&lt;5ms</div>
                            <div class="rel-metric-lbl">Response Time</div>
                        </div>
                        <div class="rel-metric">
                            <div class="rel-metric-val">AI</div>
                            <div class="rel-metric-lbl">24/7 Monitoring</div>
                        </div>
                        <div class="rel-metric">
                            <div class="rel-metric-val">Multi</div>
                            <div class="rel-metric-lbl">Region Deploy</div>
                        </div>
                    </div>
                </div>
                <div class="reliability-content reveal">
                    <span class="tag-label">Architecture & Scale</span>
                    <div class="section-divider" style="margin-top:20px;"></div>
                    <h2 class="gradient-text" style="margin-top:8px;">Built for <span class="gradient-text">Reliability
                            & Scale</span></h2>
                    <p>Our cloud-native architectures are engineered from the ground up for the uncompromising
                        reliability demands of energy infrastructure—where downtime is measured in millions, not just
                        inconvenience.</p>
                    <div class="rel-features">
                        <div class="rel-feature">
                            <div class="rel-feature-dot"></div>
                            <div class="rel-feature-text">Cloud-native microservices with active-active redundancy</div>
                        </div>
                        <div class="rel-feature">
                            <div class="rel-feature-dot"></div>
                            <div class="rel-feature-text">Real-time energy insights with sub-second data streaming</div>
                        </div>
                        <div class="rel-feature">
                            <div class="rel-feature-dot"></div>
                            <div class="rel-feature-text">Security-first design with ISO 27001 & IEC 62443 compliance
                            </div>
                        </div>
                        <div class="rel-feature">
                            <div class="rel-feature-dot"></div>
                            <div class="rel-feature-text">Horizontal auto-scaling to millions of connected endpoints
                            </div>
                        </div>
                        <div class="rel-feature">
                            <div class="rel-feature-dot"></div>
                            <div class="rel-feature-text">Multi-region deployment with automated disaster recovery</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- USE CASES -->
    <section class="usecases section" id="usecases">
        <div class="container">
            <div class="usecases-header reveal">
                <span class="tag-label">Use Cases</span>
                <div class="section-divider center"></div>
                <h2 class="section-heading">Proven Across Every <span class="gradient-text">Energy Domain</span></h2>
                <p>From smart metering to carbon analytics—Accrosian delivers mission-critical solutions across the full
                    energy value chain.</p>
            </div>
            <div class="usecases-grid">
                <div class="uc-card reveal">
                    <div class="uc-num">01</div>
                    <div class="uc-icon">🔮</div>
                    <div class="uc-title">Smart Metering</div>
                    <div class="uc-desc">AMI infrastructure with two-way communication, tamper detection, real-time
                        usage analytics, and automated billing reconciliation at utility scale.</div>
                </div>
                <div class="uc-card reveal">
                    <div class="uc-num">02</div>
                    <div class="uc-icon">🌬️</div>
                    <div class="uc-title">Renewable Energy Tracking</div>
                    <div class="uc-desc">End-to-end production monitoring for solar farms and wind parks with
                        forecasting, curtailment management, and regulatory certification reporting.</div>
                </div>
                <div class="uc-card reveal">
                    <div class="uc-num">03</div>
                    <div class="uc-icon">💳</div>
                    <div class="uc-title">Utility Billing Automation</div>
                    <div class="uc-desc">Intelligent billing engines supporting tiered rates, TOU pricing, demand
                        charges, and prepaid plans with automated dispute resolution workflows.</div>
                </div>
                <div class="uc-card reveal">
                    <div class="uc-num">04</div>
                    <div class="uc-icon">🛢️</div>
                    <div class="uc-title">Oil & Gas Monitoring</div>
                    <div class="uc-desc">Pipeline integrity management, wellhead telemetry, production optimization, and
                        HSE compliance monitoring across distributed field operations.</div>
                </div>
                <div class="uc-card reveal">
                    <div class="uc-num">05</div>
                    <div class="uc-icon">💧</div>
                    <div class="uc-title">Water Resource Management</div>
                    <div class="uc-desc">Smart water networks with leak detection, pressure zone management, quality
                        monitoring, and demand forecasting for municipal utilities.</div>
                </div>
                <div class="uc-card reveal">
                    <div class="uc-num">06</div>
                    <div class="uc-icon">🌍</div>
                    <div class="uc-title">Carbon Emission Analytics</div>
                    <div class="uc-desc">Scope 1, 2 & 3 emissions tracking with real-time dashboards, decarbonization
                        scenario modeling, and automated ESG report generation.</div>
                </div>
            </div>
        </div>
    </section>

    <!-- TECH STACK -->
    <section class="techstack section" id="tech">
        <div class="container">
            <div class="techstack-header reveal">
                <span class="tag-label">Technology Stack</span>
                <div class="section-divider center"></div>
                <h2 class="section-heading">Powered by <span class="gradient-text">Cutting-Edge Technology</span></h2>
                <p>We leverage best-in-class tools and platforms to build resilient, scalable energy systems.</p>
            </div>
            <div class="tech-pills reveal">
                <div class="tech-pill">🧠 AI & Machine Learning</div>
                <div class="tech-pill">📡 IoT</div>
                <div class="tech-pill">☁️ Cloud Computing</div>
                <div class="tech-pill">🔷 Microsoft Azure</div>
                <div class="tech-pill">🟠 Amazon AWS</div>
                <div class="tech-pill">📈 Power BI</div>
                <div class="tech-pill">🏭 SCADA Integrations</div>
                <div class="tech-pill">⚙️ Edge Computing</div>
                <div class="tech-pill">📦 Big Data Analytics</div>
                <div class="tech-pill">⚛️ React</div>
                <div class="tech-pill">🐘 Laravel</div>
                <div class="tech-pill">🐍 Python</div>
                <div class="tech-pill">🔒 Zero Trust Security</div>
                <div class="tech-pill">🌊 Apache Kafka</div>
                <div class="tech-pill">🗄️ PostgreSQL</div>
                <div class="tech-pill">🐳 Docker & Kubernetes</div>
            </div>
        </div>
    </section>

    <!-- WHY ACCROSIAN -->
    <!-- <section class="why section" id="why">
        <div class="container">
            <div class="why-header reveal">
                <span class="tag-label">Why Accrosian</span>
                <div class="section-divider center"></div>
                <h2 class="section-heading">Your Trusted <span class="gradient-text">Technology Partner</span></h2>
                <p>We combine deep domain expertise with engineering excellence to deliver energy solutions that
                    actually work at scale.</p>
            </div>
            <div class="why-grid">
                <div class="why-card reveal">
                    <div class="why-icon">🏭</div>
                    <div class="why-title">Deep Industry Expertise</div>
                    <div class="why-desc">15+ years building enterprise software for utilities, oil & gas, and renewable
                        energy companies across three continents. We speak your language—from SCADA to regulatory
                        compliance.</div>
                </div>
                <div class="why-card reveal">
                    <div class="why-icon">🛡️</div>
                    <div class="why-title">Enterprise-Grade Security</div>
                    <div class="why-desc">Security-first architecture with end-to-end encryption, role-based access
                        control, and compliance with IEC 62443, NERC CIP, ISO 27001, and regional data protection
                        regulations.</div>
                </div>
                <div class="why-card reveal">
                    <div class="why-icon">🚀</div>
                    <div class="why-title">Scalable Architecture</div>
                    <div class="why-desc">Cloud-native designs built to handle 100x growth without re-architecture. From
                        a single facility to a national grid—our platforms scale seamlessly with your ambitions.</div>
                </div>
                <div class="why-card reveal">
                    <div class="why-icon">🤝</div>
                    <div class="why-title">Dedicated Support</div>
                    <div class="why-desc">A dedicated engagement team, 24/7 SLA-backed support, and ongoing
                        optimization. We don't just deliver projects—we build long-term technology partnerships.</div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- STATS -->
    <!-- <section class="stats section" id="results">
        <div class="container">
            <div class="stats-header reveal">
                <span class="tag-label">Proven Results</span>
                <div class="section-divider center"></div>
                <h2 class="section-heading">Numbers That <span class="gradient-text">Speak for Themselves</span></h2>
                <p>Real outcomes delivered for real energy enterprises operating at global scale.</p>
            </div>
            <div class="stats-grid">
                <div class="stat-card reveal">
                    <div class="stat-icon">📈</div>
                    <div class="stat-num" data-target="40">0%</div>
                    <div class="stat-label">Operational Efficiency Increase</div>
                    <div class="sparkline">
                        <div class="spark" style="height:20%"></div>
                        <div class="spark" style="height:30%"></div>
                        <div class="spark" style="height:35%"></div>
                        <div class="spark lit" style="height:50%"></div>
                        <div class="spark lit" style="height:60%"></div>
                        <div class="spark lit" style="height:75%"></div>
                        <div class="spark lit" style="height:90%"></div>
                        <div class="spark lit" style="height:100%"></div>
                    </div>
                </div>
                <div class="stat-card reveal">
                    <div class="stat-icon">⚡</div>
                    <div class="stat-num" data-target="60">0%</div>
                    <div class="stat-label">Faster Incident Monitoring</div>
                    <div class="sparkline">
                        <div class="spark" style="height:15%"></div>
                        <div class="spark" style="height:25%"></div>
                        <div class="spark lit" style="height:45%"></div>
                        <div class="spark lit" style="height:55%"></div>
                        <div class="spark lit" style="height:70%"></div>
                        <div class="spark lit" style="height:85%"></div>
                        <div class="spark lit" style="height:95%"></div>
                        <div class="spark lit" style="height:100%"></div>
                    </div>
                </div>
                <div class="stat-card reveal">
                    <div class="stat-icon">🔒</div>
                    <div class="stat-num">99.9%</div>
                    <div class="stat-label">System Availability SLA</div>
                    <div class="sparkline">
                        <div class="spark lit" style="height:95%"></div>
                        <div class="spark lit" style="height:98%"></div>
                        <div class="spark lit" style="height:97%"></div>
                        <div class="spark lit" style="height:99%"></div>
                        <div class="spark lit" style="height:98%"></div>
                        <div class="spark lit" style="height:99%"></div>
                        <div class="spark lit" style="height:100%"></div>
                        <div class="spark lit" style="height:99%"></div>
                    </div>
                </div>
                <div class="stat-card reveal">
                    <div class="stat-icon">👁️</div>
                    <div class="stat-num">24/7</div>
                    <div class="stat-label">Infrastructure Visibility</div>
                    <div class="sparkline">
                        <div class="spark lit" style="height:80%"></div>
                        <div class="spark lit" style="height:85%"></div>
                        <div class="spark lit" style="height:90%"></div>
                        <div class="spark lit" style="height:88%"></div>
                        <div class="spark lit" style="height:92%"></div>
                        <div class="spark lit" style="height:95%"></div>
                        <div class="spark lit" style="height:98%"></div>
                        <div class="spark lit" style="height:100%"></div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- CTA -->
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

    <script>
    // ---- SCROLL REVEAL ----
    const reveals = document.querySelectorAll('.reveal');
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry, i) => {
            if (entry.isIntersecting) {
                setTimeout(() => entry.target.classList.add('visible'), 80 * (entry.target.dataset
                    .delay || 0));
                entry.target.classList.add('visible');
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.12
    });
    reveals.forEach(el => observer.observe(el));

    // ---- STAGGER CHILDREN ----
    document.querySelectorAll('.challenges-right, .solutions-grid, .usecases-grid, .why-grid, .stats-grid').forEach(
        parent => {
            [...parent.children].forEach((child, i) => {
                child.style.transitionDelay = (i * 80) + 'ms';
            });
        });


    // ---- COUNTER ANIMATION ----
    // const counters = document.querySelectorAll('.stat-num[data-target]');
    // const counterObserver = new IntersectionObserver((entries) => {
    //     entries.forEach(entry => {
    //         if (entry.isIntersecting) {
    //             const el = entry.target;
    //             const target = parseInt(el.dataset.target);
    //             let current = 0;
    //             const step = target / 60;
    //             const timer = setInterval(() => {
    //                 current += step;
    //                 if (current >= target) {
    //                     current = target;
    //                     clearInterval(timer);
    //                 }
    //                 el.textContent = Math.floor(current) + '%';
    //             }, 25);
    //             counterObserver.unobserve(el);
    //         }
    //     });
    // }, {
    //     threshold: 0.5
    // });
    // counters.forEach(el => counterObserver.observe(el));

    // ---- TECH PILL STAGGER ----
    document.querySelectorAll('.tech-pill').forEach((pill, i) => {
        pill.style.animationDelay = (i * 60) + 'ms';
        pill.style.opacity = '0';
        pill.style.transform = 'translateY(20px)';
        pill.style.transition = `opacity .5s ease ${i * 40}ms, transform .5s ease ${i * 40}ms`;
    });
    const techObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                document.querySelectorAll('.tech-pill').forEach(pill => {
                    pill.style.opacity = '1';
                    pill.style.transform = 'translateY(0)';
                });
                techObserver.disconnect();
            }
        });
    }, {
        threshold: 0.2
    });
    const techSection = document.querySelector('.tech-pills');
    if (techSection) techObserver.observe(techSection);
    </script>

    </div>
    @endsection