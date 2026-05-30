/* =============================================
   ACCROSIAN - Main JavaScript
   ============================================= */

// ============ LOADER ============
window.addEventListener("load", () => {
  const loader = document.querySelector(".loader");

  if (!loader) return;

  if (!sessionStorage.getItem("loaderShown")) {
    sessionStorage.setItem("loaderShown", "true");

    setTimeout(() => {
      loader.classList.add("hidden");
    }, 2000);
  }
});

// ============ NAVBAR SCROLL ============
const navbar = document.querySelector(".navbar");
window.addEventListener("scroll", () => {
  if (window.scrollY > 50) {
    navbar?.classList.add("scrolled");
  } else {
    navbar?.classList.remove("scrolled");
  }
  // Back to top
  const btn = document.querySelector(".back-to-top");
  if (btn) {
    if (window.scrollY > 400) btn.classList.add("visible");
    else btn.classList.remove("visible");
  }
});

// ============ MOBILE NAV ============
// ============ MOBILE NAV ============
const hamburger = document.querySelector(".hamburger");
const mobileNav = document.querySelector(".mobile-nav");
const mobileClose = document.querySelector(".mobile-close");
const mobileOverlay = document.querySelector(".mobile-overlay");

hamburger?.addEventListener("click", () => {
  mobileNav?.classList.add("open");
  document.body.classList.add("no-scroll");
});

mobileClose?.addEventListener("click", closeMobileNav);
mobileOverlay?.addEventListener("click", closeMobileNav);

mobileNav
  ?.querySelectorAll("a")
  .forEach((a) => a.addEventListener("click", closeMobileNav));

function closeMobileNav() {
  mobileNav?.classList.remove("open");
  document.body.classList.remove("no-scroll");
}

// ============ BACK TO TOP ============
document.querySelector(".back-to-top")?.addEventListener("click", () => {
  window.scrollTo({ top: 0, behavior: "smooth" });
});

// ============ SCROLL REVEAL ============
const reveals = document.querySelectorAll(".reveal");
const revealObserver = new IntersectionObserver(
  (entries) => {
    entries.forEach((e) => {
      if (e.isIntersecting) {
        e.target.classList.add("visible");
      }
    });
  },
  { threshold: 0.1, rootMargin: "0px 0px -50px 0px" },
);

reveals.forEach((el) => revealObserver.observe(el));

// ============ COUNTER ANIMATION ============
function animateCounter(el) {
  const target = parseFloat(el.dataset.target);
  const isDecimal = el.dataset.decimal === "true";
  const suffix = el.dataset.suffix || "";
  const duration = 2000;
  const start = performance.now();

  function update(now) {
    const elapsed = now - start;
    const progress = Math.min(elapsed / duration, 1);
    const eased = 1 - Math.pow(1 - progress, 3);
    const current = target * eased;
    el.textContent = isDecimal
      ? current.toFixed(1) + suffix
      : Math.floor(current) + suffix;
    if (progress < 1) requestAnimationFrame(update);
  }
  requestAnimationFrame(update);
}

const counterObserver = new IntersectionObserver(
  (entries) => {
    entries.forEach((e) => {
      if (e.isIntersecting && !e.target.dataset.animated) {
        e.target.dataset.animated = "true";
        animateCounter(e.target);
      }
    });
  },
  { threshold: 0.5 },
);

document
  .querySelectorAll("[data-target]")
  .forEach((el) => counterObserver.observe(el));

// ============ TESTIMONIALS SLIDER ============
const track = document.querySelector(".testimonials-track");
const dots = document.querySelectorAll(".slider-dot");
let currentSlide = 0;

function getVisibleCount() {
  return window.innerWidth < 768 ? 1 : 2;
}

function getTotalSlides() {
  const cards = document.querySelectorAll(".testimonial-card");
  return Math.ceil(cards.length / getVisibleCount());
}

function goToSlide(index) {
  if (!track) return;
  const cards = document.querySelectorAll(".testimonial-card");
  const visible = getVisibleCount();
  const total = Math.ceil(cards.length / visible);
  currentSlide = ((index % total) + total) % total;
  // ✅ MOVE BY PERCENT INSTEAD OF PX (BEST PRACTICE)
  const movePercent = 100 / visible;
  track.style.transform = `translateX(-${currentSlide * 100}%)`;
  dots.forEach((d, i) => d.classList.toggle("active", i === currentSlide));
}

document
  .querySelector(".slider-prev")
  ?.addEventListener("click", () => goToSlide(currentSlide - 1));
document
  .querySelector(".slider-next")
  ?.addEventListener("click", () => goToSlide(currentSlide + 1));
dots.forEach((dot, i) => dot.addEventListener("click", () => goToSlide(i)));

// Auto-slide
let autoSlide = setInterval(() => goToSlide(currentSlide + 1), 5000);
track?.addEventListener("mouseenter", () => clearInterval(autoSlide));
track?.addEventListener("mouseleave", () => {
  autoSlide = setInterval(() => goToSlide(currentSlide + 1), 5000);
});

// ============ PORTFOLIO FILTER ============
const filterBtns = document.querySelectorAll(".filter-btn");
const portfolioItems = document.querySelectorAll(".portfolio-card");

filterBtns.forEach((btn) => {
  btn.addEventListener("click", () => {
    filterBtns.forEach((b) => b.classList.remove("active"));
    btn.classList.add("active");
    const filter = btn.dataset.filter;

    portfolioItems.forEach((item) => {
      if (filter === "all" || item.dataset.category === filter) {
        item.style.opacity = "1";
        item.style.transform = "scale(1)";
        item.style.display = "block";
      } else {
        item.style.opacity = "0";
        item.style.transform = "scale(0.9)";
        setTimeout(() => {
          if (item.style.opacity === "0") item.style.display = "none";
        }, 300);
      }
    });
  });
});

// ============ CONTACT FORM ============
const contactForm = document.querySelector("#contact-form");
contactForm?.addEventListener("submit", (e) => {
  //e.preventDefault();
  const btn = contactForm.querySelector('[type="submit"]');
  const original = btn.innerHTML;
  btn.innerHTML = "✓ Message Sent!";
  btn.style.background = "linear-gradient(135deg, #22c55e, #16a34a)";
  btn.disabled = true;
  setTimeout(() => {
    btn.innerHTML = original;
    btn.style.background = "";
    btn.disabled = false;
    contactForm.reset();
  }, 3000);
});

// ============ SMOOTH SCROLL FOR ANCHOR LINKS ============
document.querySelectorAll('a[href^="#"]').forEach((a) => {
  a.addEventListener("click", (e) => {
    const target = document.querySelector(a.getAttribute("href"));
    if (target) {
      e.preventDefault();
      target.scrollIntoView({ behavior: "smooth", block: "start" });
    }
  });
});

// ============ ACTIVE NAV LINK ============
const currentPage = window.location.pathname.split("/").pop() || "index.html";
document.querySelectorAll(".nav-menu a").forEach((a) => {
  const href = a.getAttribute("href");
  if (href === currentPage || (currentPage === "" && href === "index.html")) {
    a.classList.add("active");
  }
});

// ============ RIPPLE EFFECT ON BUTTONS ============
document.querySelectorAll(".btn").forEach((btn) => {
  btn.addEventListener("click", function (e) {
    const rect = this.getBoundingClientRect();
    const ripple = document.createElement("span");
    ripple.style.cssText = `
      position:absolute; border-radius:50%; background:rgba(255,255,255,0.3);
      width:100px; height:100px;
      left:${e.clientX - rect.left - 50}px;
      top:${e.clientY - rect.top - 50}px;
      animation:rippleAnim 0.6s ease-out forwards;
      pointer-events:none;
    `;
    const style = document.createElement("style");
    style.textContent =
      "@keyframes rippleAnim{from{transform:scale(0);opacity:1}to{transform:scale(4);opacity:0}}";
    document.head.appendChild(style);
    this.appendChild(ripple);
    setTimeout(() => ripple.remove(), 600);
  });
});

console.log(
  "%c✨ Accrosian - Turning Ideas Into Reality",
  "color:#E8750A;font-size:16px;font-weight:bold;",
);

// ============ APPLE SHOWCASE ============
(function () {
    const track   = document.getElementById('showcaseTrack');
    const dots    = document.querySelectorAll('.showcase-dot');
    const cards   = document.querySelectorAll('.showcase-card');
    const btnPrev = document.getElementById('showcasePrev');
    const btnNext = document.getElementById('showcaseNext');

    if (!track || !cards.length) return;

    let current   = 0;
    let isDragging = false;
    let startX    = 0;
    let scrollStart = 0;

    // ── Scroll to card by index ──
    function goTo(index) {
        index = Math.max(0, Math.min(index, cards.length - 1));
        current = index;

        const card     = cards[index];
        const trackRect = track.getBoundingClientRect();
        const cardRect  = card.getBoundingClientRect();

        // center the card
        const offset = cardRect.left - trackRect.left
                     - (trackRect.width / 2)
                     + (cardRect.width / 2)
                     + track.scrollLeft;

        track.scrollTo({ left: offset, behavior: 'smooth' });
        updateState();
    }

    // ── Update active / adjacent states ──
    function updateState() {
        cards.forEach((c, i) => {
            c.classList.remove('active', 'adjacent');
            if (i === current)               c.classList.add('active');
            else if (Math.abs(i - current) === 1) c.classList.add('adjacent');
        });

        dots.forEach((d, i) => {
            d.classList.toggle('active', i === current);
        });
    }

    // ── Detect which card is centered after free scroll ──
    let scrollTimer;
    track.addEventListener('scroll', () => {
        clearTimeout(scrollTimer);
        scrollTimer = setTimeout(() => {
            const center = track.scrollLeft + track.clientWidth / 2;
            let closest = 0, minDist = Infinity;
            cards.forEach((c, i) => {
                const dist = Math.abs(
                    c.offsetLeft + c.offsetWidth / 2 - center
                );
                if (dist < minDist) { minDist = dist; closest = i; }
            });
            if (closest !== current) {
                current = closest;
                updateState();
            }
        }, 80);
    });

    // ── Arrow buttons ──
    btnPrev?.addEventListener('click', () => goTo(current - 1));
    btnNext?.addEventListener('click', () => goTo(current + 1));

    // ── Dot buttons ──
    dots.forEach((dot, i) => dot.addEventListener('click', () => goTo(i)));

    // ── Click on side cards to navigate ──
    cards.forEach((card, i) => {
        card.addEventListener('click', () => {
            if (i !== current) goTo(i);
        });
    });

    // ── Mouse drag ──
    track.addEventListener('mousedown', e => {
        isDragging = true;
        startX     = e.pageX;
        scrollStart = track.scrollLeft;
        track.classList.add('grabbing');
    });
    track.addEventListener('mousemove', e => {
        if (!isDragging) return;
        track.scrollLeft = scrollStart - (e.pageX - startX);
    });
    track.addEventListener('mouseup',   () => { isDragging = false; track.classList.remove('grabbing'); });
    track.addEventListener('mouseleave',() => { isDragging = false; track.classList.remove('grabbing'); });

    // ── Keyboard navigation ──
    document.addEventListener('keydown', e => {
        if (e.key === 'ArrowLeft')  goTo(current - 1);
        if (e.key === 'ArrowRight') goTo(current + 1);
    });

    // ── Init ──
    goTo(0);
})();

(function(){
  const acDevSteps=[
    {icon:'🎯',title:'Discovery',label:'Discovery',desc:'We deep-dive into your business goals, target users, and competitive landscape to build a solid foundation.',tags:['Stakeholder interviews','Market research','Requirements mapping','Goal alignment']},
    {icon:'📋',title:'Planning',label:'Planning',desc:'Strategy, architecture, and roadmap defined. We break scope into milestones with clear deliverables and timelines.',tags:['System architecture','Sprint planning','Tech stack selection','Risk assessment']},
    {icon:'🎨',title:'Design',label:'Design',desc:'High-fidelity wireframes and interactive prototypes that feel native, polished, and purpose-built for your audience.',tags:['UI/UX wireframes','Design system','Prototype testing','Brand alignment']},
    {icon:'💻',title:'Development',label:'Development',desc:'Clean, scalable code built with modern frameworks. Every feature is peer-reviewed and performance-tested from day one.',tags:['Agile sprints','Code reviews','API integration','CI/CD pipelines']},
    {icon:'🧪',title:'Testing',label:'Testing',desc:'Rigorous QA across devices, browsers, and edge cases — performance, security, and accessibility before launch.',tags:['Unit & E2E tests','Performance audits','Security checks','Accessibility']},
    {icon:'🚀',title:'Launch',label:'Launch & Support',desc:'Smooth deployment with zero-downtime strategies, followed by dedicated monitoring and iterative improvements.',tags:['Zero-downtime deploy','Monitoring','Documentation','Ongoing support']},
  ];

  let acDevCurrent=0;
  const acDevStepsEl=document.getElementById('ac-dev-steps-row');
  const acDevDetailEl=document.getElementById('ac-dev-detail');
  const acDevProg=document.getElementById('ac-dev-prog');

  acDevSteps.forEach((s,i)=>{
    if(i>0){
      const c=document.createElement('div');
      c.className='ac-dev-connector';
      c.id='ac-dev-conn-'+(i-1);
      c.innerHTML='<div class="ac-dev-cline" id="ac-dev-cline-'+(i-1)+'"></div><div class="ac-dev-cdot"></div>';
      acDevStepsEl.appendChild(c);
    }
    const w=document.createElement('div');
    w.className='ac-dev-node';
    w.id='ac-dev-node-'+i;
    w.innerHTML=`<div class="ac-dev-circle" id="ac-dev-circle-${i}">
      <div class="ac-dev-ring"></div>
      <span style="font-size:22px">${s.icon}</span>
      <div class="ac-dev-stepnum">${String(i+1).padStart(2,'0')}</div>
    </div>
    <div class="ac-dev-label">${s.label}</div>`;
    w.onclick=()=>acDevGo(i);
    acDevStepsEl.appendChild(w);
    setTimeout(()=>{
      const c=document.getElementById('ac-dev-circle-'+i);
      if(c) c.classList.add('ac-dev-popped');
    },200+i*120);
  });

  window.acDevGo=function(idx){
    acDevCurrent=idx;
    document.querySelectorAll('.ac-dev-node').forEach((el,i)=>el.classList.toggle('ac-dev-active',i===acDevCurrent));
    for(let i=0;i<acDevSteps.length-1;i++){
      const l=document.getElementById('ac-dev-cline-'+i);
      const c=document.getElementById('ac-dev-conn-'+i);
      if(l) l.style.width=i<acDevCurrent?'100%':'0';
      if(c) c.classList.toggle('ac-dev-done',i<acDevCurrent);
    }
    acDevProg.style.width=(acDevCurrent/(acDevSteps.length-1)*100)+'%';
    const s=acDevSteps[acDevCurrent];
    acDevDetailEl.innerHTML=`<div class="ac-dev-card">
      <h3><span>${s.icon}</span>${s.title}</h3>
      <p>${s.desc}</p>
      <div class="ac-dev-tags">${s.tags.map(t=>'<span class="ac-dev-tag">'+t+'</span>').join('')}</div>
    </div>`;
  };

  window.acDevNav=function(dir){
    acDevGo(Math.max(0,Math.min(acDevSteps.length-1,acDevCurrent+dir)));
  };

  setTimeout(()=>acDevGo(0),900);
})();

/* ══════════════════════════════════════════
   ACCROSIAN — GENERATIVE AI SECTIONS JS
   Paste before closing </body> tag or
   link as external script
══════════════════════════════════════════ */

(function () {
  'use strict';

  /* ─────────────────────────────────────────
     SECTION 1 — PARTICLE CANVAS
  ───────────────────────────────────────── */
  function initS1Canvas() {
    var c = document.getElementById('gen-s1-canvas');
    if (!c) return;
    var ctx = c.getContext('2d');
    var W, H, particles = [];

    function resize() {
      var sec = c.parentElement;
      W = c.width  = sec ? sec.offsetWidth  : window.innerWidth;
      H = c.height = sec ? sec.offsetHeight : 600;
    }
    resize();
    window.addEventListener('resize', resize);

    function mkParticle() {
      var fromLeft = Math.random() > 0.5;
      return {
        x:      fromLeft ? W * 0.18 : W * 0.82,
        y:      H * 0.3 + Math.random() * H * 0.4,
        tx:     W * 0.5,
        ty:     H * 0.5,
        prog:   Math.random(),
        speed:  0.003 + Math.random() * 0.004,
        size:   2 + Math.random() * 2,
        color:  fromLeft ? 'rgba(239,68,68,' : 'rgba(34,197,94,'
      };
    }

    for (var i = 0; i < 35; i++) particles.push(mkParticle());

    function draw() {
      ctx.clearRect(0, 0, W, H);
      for (var j = 0; j < particles.length; j++) {
        var p = particles[j];
        p.prog += p.speed;
        if (p.prog >= 1) { particles[j] = mkParticle(); particles[j].prog = 0; continue; }
        var t   = p.prog;
        var ex  = p.x + (p.tx - p.x) * t;
        var ey  = p.y + (p.ty - p.y) * t;
        var alpha = t < 0.5 ? t * 2 : (1 - t) * 2;

        /* main dot */
        ctx.beginPath();
        ctx.arc(ex, ey, p.size, 0, Math.PI * 2);
        ctx.fillStyle = p.color + (alpha * 0.85) + ')';
        ctx.fill();

        /* trail */
        var pt = Math.max(0, t - 0.05);
        ctx.beginPath();
        ctx.arc(
          p.x + (p.tx - p.x) * pt,
          p.y + (p.ty - p.y) * pt,
          p.size * 0.45, 0, Math.PI * 2
        );
        ctx.fillStyle = p.color + (alpha * 0.25) + ')';
        ctx.fill();
      }
      requestAnimationFrame(draw);
    }
    draw();
  }

  /* ─────────────────────────────────────────
     SECTION 5 — BACKGROUND PARTICLE CANVAS
  ───────────────────────────────────────── */
  function initS5Canvas() {
    var c = document.getElementById('gen-s5-canvas');
    if (!c) return;
    var ctx = c.getContext('2d');
    var W, H, dots = [];

    function resize() {
      var sec = c.parentElement;
      W = c.width  = sec ? sec.offsetWidth  : window.innerWidth;
      H = c.height = sec ? sec.offsetHeight : 700;
    }
    resize();
    window.addEventListener('resize', resize);

    for (var i = 0; i < 90; i++) {
      dots.push({
        x:  Math.random() * 1600,
        y:  Math.random() * 900,
        vx: (Math.random() - 0.5) * 0.3,
        vy: (Math.random() - 0.5) * 0.3,
        r:  Math.random() * 1.8,
        o:  0.08 + Math.random() * 0.25
      });
    }

    function draw() {
      ctx.clearRect(0, 0, W, H);
      dots.forEach(function (d) {
        d.x += d.vx; d.y += d.vy;
        if (d.x < 0) d.x = W; if (d.x > W) d.x = 0;
        if (d.y < 0) d.y = H; if (d.y > H) d.y = 0;
        ctx.beginPath();
        ctx.arc(d.x, d.y, d.r, 0, Math.PI * 2);
        ctx.fillStyle = 'rgba(232,117,10,' + d.o + ')';
        ctx.fill();
      });
      requestAnimationFrame(draw);
    }
    draw();
  }

  /* ─────────────────────────────────────────
     SCROLL REVEAL — fade-up on viewport enter
  ───────────────────────────────────────── */
  function initReveal() {
    var selectors = [
      '.gen-s2-card',
      '.gen-s5-card',
      '.gen-s4-metric',
      '.gen-s3-agent-card',
      '.gen-s1-item',
      '.gen-s5-step',
      '.gen-s3-info-item',
      '.gen-s4-row'
    ];

    var els = document.querySelectorAll(selectors.join(','));
    if (!els.length) return;

    /* Set initial hidden state */
    els.forEach(function (el) {
      el.style.opacity   = '0';
      el.style.transform = 'translateY(22px)';
      el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
    });

    /* Use IntersectionObserver if available */
    if ('IntersectionObserver' in window) {
      var obs = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry, i) {
          if (entry.isIntersecting) {
            var el = entry.target;
            /* stagger siblings */
            var siblings = el.parentElement
              ? Array.prototype.slice.call(el.parentElement.children)
              : [];
            var idx = siblings.indexOf(el);
            setTimeout(function () {
              el.style.opacity   = '1';
              el.style.transform = 'translateY(0)';
            }, idx * 70);
            obs.unobserve(el);
          }
        });
      }, { threshold: 0.12 });

      els.forEach(function (el) { obs.observe(el); });
    } else {
      /* Fallback: show all immediately */
      els.forEach(function (el) {
        el.style.opacity   = '1';
        el.style.transform = 'translateY(0)';
      });
    }
  }

  /* ─────────────────────────────────────────
     SECTION 2 — CARD TILT (subtle 3-D on hover)
  ───────────────────────────────────────── */
  function initCardTilt() {
    var cards = document.querySelectorAll('.gen-s2-card');
    cards.forEach(function (card) {
      card.addEventListener('mousemove', function (e) {
        var rect   = card.getBoundingClientRect();
        var cx     = rect.left + rect.width  / 2;
        var cy     = rect.top  + rect.height / 2;
        var dx     = (e.clientX - cx) / (rect.width  / 2);
        var dy     = (e.clientY - cy) / (rect.height / 2);
        var rotX   = -dy * 6;
        var rotY   =  dx * 6;
        card.style.transform =
          'translateY(-10px) scale(1.02) rotateX(' + rotX + 'deg) rotateY(' + rotY + 'deg)';
      });
      card.addEventListener('mouseleave', function () {
        card.style.transform = '';
        card.style.transition = 'all 0.45s cubic-bezier(0.4,0,0.2,1)';
      });
    });
  }

  /* ─────────────────────────────────────────
     SECTION 4 — ANIMATED COUNTER (metrics strip)
  ───────────────────────────────────────── */
  function initCounters() {
    var nums = document.querySelectorAll('.gen-s4-metric-num');
    if (!nums.length) return;

    function animateCounter(el) {
      var raw    = el.textContent.trim();          /* e.g. "90%", "5×", "24/7" */
      var match  = raw.match(/^(\d+)(.*)/);
      if (!match) return;                          /* "24/7" won't match — skip */
      var target = parseInt(match[1], 10);
      var suffix = match[2];
      var start  = 0;
      var duration = 1400;
      var startTime = null;

      function step(timestamp) {
        if (!startTime) startTime = timestamp;
        var progress = Math.min((timestamp - startTime) / duration, 1);
        /* easeOutExpo */
        var eased = progress === 1
          ? 1
          : 1 - Math.pow(2, -10 * progress);
        el.textContent = Math.floor(eased * target) + suffix;
        if (progress < 1) requestAnimationFrame(step);
      }
      requestAnimationFrame(step);
    }

    if ('IntersectionObserver' in window) {
      var obs = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            animateCounter(entry.target);
            obs.unobserve(entry.target);
          }
        });
      }, { threshold: 0.5 });
      nums.forEach(function (el) { obs.observe(el); });
    }
  }

  /* ─────────────────────────────────────────
     SECTION 3 — AGENT CARD ACTIVE PULSE
     Cycles through agents to draw attention
  ───────────────────────────────────────── */
  function initAgentCycle() {
    var agents = document.querySelectorAll('.gen-s3-agent-card');
    if (!agents.length) return;
    var current = 0;

    function highlight() {
      agents.forEach(function (a) {
        a.style.borderColor  = '';
        a.style.boxShadow    = '';
        a.style.transform    = '';
      });
      var active = agents[current];
      active.style.borderColor = 'rgba(232,117,10,0.55)';
      active.style.boxShadow   = '0 0 28px rgba(232,117,10,0.25)';
      active.style.transform   = 'scale(1.05)';
      active.style.transition  = 'all 0.5s ease';
      current = (current + 1) % agents.length;
    }
    highlight();
    setInterval(highlight, 1800);
  }

  /* ─────────────────────────────────────────
     SECTION 5 — STEP NODE SEQUENTIAL GLOW
  ───────────────────────────────────────── */
  function initStepGlow() {
    var steps = document.querySelectorAll('.gen-s5-step-node');
    if (!steps.length) return;
    var current = 0;

    function pulse() {
      steps.forEach(function (s) {
        s.style.borderColor  = 'rgba(255,255,255,0.08)';
        s.style.background   = 'rgba(26,32,96,0.9)';
        s.style.boxShadow    = 'none';
      });
      var active = steps[current];
      active.style.borderColor = 'rgba(232,117,10,0.6)';
      active.style.background  = 'rgba(232,117,10,0.14)';
      active.style.boxShadow   = '0 0 28px rgba(232,117,10,0.3)';
      active.style.transition  = 'all 0.5s ease';
      current = (current + 1) % steps.length;
    }
    pulse();
    setInterval(pulse, 900);
  }

  /* ─────────────────────────────────────────
     SECTION 1 — PROBLEM / SOLUTION STAGGER
     Animates items in left-col then right-col
  ───────────────────────────────────────── */
  function initS1Stagger() {
    var sections = [
      document.querySelectorAll('.gen-s1-col-left  .gen-s1-item'),
      document.querySelectorAll('.gen-s1-col-right .gen-s1-item')
    ];

    sections.forEach(function (group) {
      group.forEach(function (el, i) {
        el.style.opacity   = '0';
        el.style.transform = 'translateX(' + (i % 2 === 0 ? '-20px' : '20px') + ')';
        el.style.transition = 'opacity 0.55s ease ' + (i * 0.12) + 's, transform 0.55s ease ' + (i * 0.12) + 's';
      });
    });

    if ('IntersectionObserver' in window) {
      var obs = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            var items = entry.target.querySelectorAll('.gen-s1-item');
            items.forEach(function (el) {
              el.style.opacity   = '1';
              el.style.transform = 'translateX(0)';
            });
            obs.unobserve(entry.target);
          }
        });
      }, { threshold: 0.2 });

      var cols = document.querySelectorAll('.gen-s1-col');
      cols.forEach(function (col) { obs.observe(col); });
    } else {
      sections.forEach(function (group) {
        group.forEach(function (el) {
          el.style.opacity   = '1';
          el.style.transform = 'translateX(0)';
        });
      });
    }
  }

  /* ─────────────────────────────────────────
     SECTION 4 — COMPARISON ROW HIGHLIGHT
     Highlights matching before/after rows on hover
  ───────────────────────────────────────── */
  function initRowSync() {
    var beforeRows = document.querySelectorAll('.gen-s4-before .gen-s4-row');
    var afterRows  = document.querySelectorAll('.gen-s4-after  .gen-s4-row');

    function syncHover(idx, on) {
      [beforeRows[idx], afterRows[idx]].forEach(function (r) {
        if (!r) return;
        r.style.background  = on ? 'rgba(232,117,10,0.06)' : '';
        r.style.paddingLeft = on ? '8px'                   : '';
        r.style.transition  = 'all 0.25s ease';
      });
    }

    beforeRows.forEach(function (row, i) {
      row.addEventListener('mouseenter', function () { syncHover(i, true);  });
      row.addEventListener('mouseleave', function () { syncHover(i, false); });
    });
    afterRows.forEach(function (row, i) {
      row.addEventListener('mouseenter', function () { syncHover(i, true);  });
      row.addEventListener('mouseleave', function () { syncHover(i, false); });
    });
  }

  /* ─────────────────────────────────────────
     BOOT — run all initialisers on DOM ready
  ───────────────────────────────────────── */
  function boot() {
    initS1Canvas();
    initS5Canvas();
    initReveal();
    initCardTilt();
    initCounters();
    initAgentCycle();
    initStepGlow();
    initS1Stagger();
    initRipple();
    initRowSync();
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', boot);
  } else {
    boot();
  }

})();

