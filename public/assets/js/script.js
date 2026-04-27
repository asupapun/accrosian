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

(function(){
    const icons = {
        /* Web / Dev */
        'web-development': `<svg viewBox="0 0 40 40"><rect x="4" y="6" width="32" height="24" rx="3" class="ai-stroke ai-fill-none ai-w2"/><line x1="4" y1="14" x2="36" y2="14" class="ai-stroke ai-w2"/><circle cx="9" cy="10" r="1.5" class="ai-fill-orange"/><circle cx="14" cy="10" r="1.5" class="ai-fill-orange" style="animation-delay:.15s"/><circle cx="19" cy="10" r="1.5" class="ai-fill-dim"/><polyline points="12,20 16,24 12,28" class="ai-stroke ai-w2 ai-cap" style="animation:aiSlide .6s ease .2s both"/><line x1="18" y1="28" x2="28" y2="28" class="ai-stroke ai-w15 ai-cap" style="animation:aiGrow .5s ease .35s both"/><rect x="8" y="30" width="24" height="3" rx="1.5" class="ai-fill-dim" style="animation:aiGrow .5s ease .1s both"/></svg>`,

        'mobile-app-development': `<svg viewBox="0 0 40 40"><rect x="11" y="3" width="18" height="34" rx="4" class="ai-stroke ai-fill-none ai-w2"/><line x1="11" y1="9" x2="29" y2="9" class="ai-stroke ai-w15"/><line x1="11" y1="31" x2="29" y2="31" class="ai-stroke ai-w15"/><circle cx="20" cy="35" r="1.5" class="ai-fill-orange"/><rect x="15" y="13" width="10" height="7" rx="2" class="ai-fill-orange" style="opacity:.3;animation:aiPulse 2s ease infinite"/><line x1="15" y1="23" x2="25" y2="23" class="ai-stroke ai-w15" style="animation:aiGrow .5s ease .2s both"/><line x1="15" y1="26" x2="22" y2="26" class="ai-stroke ai-w15" style="animation:aiGrow .5s ease .3s both"/></svg>`,

        'ui-ux-design': `<svg viewBox="0 0 40 40"><circle cx="20" cy="20" r="14" class="ai-stroke ai-fill-none ai-w15"/><circle cx="20" cy="20" r="5" class="ai-fill-orange" style="opacity:.8;animation:aiPulse 2s ease infinite"/><line x1="20" y1="6" x2="20" y2="12" class="ai-stroke ai-w2"/><line x1="20" y1="28" x2="20" y2="34" class="ai-stroke ai-w2"/><line x1="6" y1="20" x2="12" y2="20" class="ai-stroke ai-w2"/><line x1="28" y1="20" x2="34" y2="20" class="ai-stroke ai-w2"/><circle cx="20" cy="20" r="9" class="ai-stroke ai-fill-none ai-w1" style="stroke-dasharray:4 3;animation:aiSpin 8s linear infinite"/></svg>`,

        'ai---machine-learning': `<svg viewBox="0 0 40 40"><circle cx="20" cy="20" r="4" class="ai-fill-orange" style="animation:aiPulse 1.5s ease infinite"/><circle cx="8" cy="12" r="3" class="ai-stroke ai-fill-none ai-w15"/><circle cx="32" cy="12" r="3" class="ai-stroke ai-fill-none ai-w15"/><circle cx="8" cy="28" r="3" class="ai-stroke ai-fill-none ai-w15"/><circle cx="32" cy="28" r="3" class="ai-stroke ai-fill-none ai-w15"/><circle cx="20" cy="5" r="3" class="ai-stroke ai-fill-none ai-w15"/><circle cx="20" cy="35" r="3" class="ai-stroke ai-fill-none ai-w15"/><line x1="11" y1="13" x2="17" y2="17" class="ai-stroke ai-w1" style="animation:aiFlash 2s ease infinite"/><line x1="29" y1="13" x2="23" y2="17" class="ai-stroke ai-w1" style="animation:aiFlash 2s ease .3s infinite"/><line x1="11" y1="27" x2="17" y2="23" class="ai-stroke ai-w1" style="animation:aiFlash 2s ease .6s infinite"/><line x1="29" y1="27" x2="23" y2="23" class="ai-stroke ai-w1" style="animation:aiFlash 2s ease .9s infinite"/><line x1="20" y1="8" x2="20" y2="16" class="ai-stroke ai-w1" style="animation:aiFlash 2s ease .45s infinite"/><line x1="20" y1="24" x2="20" y2="32" class="ai-stroke ai-w1" style="animation:aiFlash 2s ease 1.2s infinite"/></svg>`,

        'it-consulting': `<svg viewBox="0 0 40 40"><rect x="5" y="8" width="30" height="20" rx="3" class="ai-stroke ai-fill-none ai-w2"/><line x1="13" y1="28" x2="10" y2="34" class="ai-stroke ai-w2 ai-cap"/><line x1="27" y1="28" x2="30" y2="34" class="ai-stroke ai-w2 ai-cap"/><line x1="8" y1="34" x2="32" y2="34" class="ai-stroke ai-w2 ai-cap"/><polyline points="10,20 15,14 20,18 25,12 30,16" class="ai-stroke ai-w2 ai-cap ai-fill-none" style="stroke:var(--ac-orange);animation:aiDraw 1s ease .2s both"/></svg>`,

        'digital-marketing': `<svg viewBox="0 0 40 40"><polyline points="5,30 13,18 19,23 27,10 35,15" class="ai-stroke ai-w2 ai-cap ai-fill-none" style="stroke:var(--ac-orange);animation:aiDraw 1s ease both"/><circle cx="35" cy="15" r="3" class="ai-fill-orange" style="animation:aiPop .4s ease .9s both;transform-origin:35px 15px"/><line x1="5" y1="35" x2="35" y2="35" class="ai-stroke ai-w15"/><line x1="5" y1="35" x2="5" y2="10" class="ai-stroke ai-w15"/></svg>`,

        'seo': `<svg viewBox="0 0 40 40"><circle cx="17" cy="17" r="10" class="ai-stroke ai-fill-none ai-w2"/><line x1="24" y1="24" x2="34" y2="34" class="ai-stroke ai-w25 ai-cap"/><line x1="13" y1="17" x2="21" y2="17" class="ai-stroke ai-w2 ai-cap" style="animation:aiGrow .4s ease .3s both"/><line x1="17" y1="13" x2="17" y2="21" class="ai-stroke ai-w2 ai-cap" style="animation:aiGrow .4s ease .5s both"/></svg>`,

        'smm': `<svg viewBox="0 0 40 40"><circle cx="10" cy="20" r="4" class="ai-stroke ai-fill-none ai-w2"/><circle cx="30" cy="10" r="4" class="ai-stroke ai-fill-none ai-w2"/><circle cx="30" cy="30" r="4" class="ai-stroke ai-fill-none ai-w2"/><line x1="14" y1="18" x2="26" y2="12" class="ai-stroke ai-w15" style="animation:aiFlash 2s ease infinite"/><line x1="14" y1="22" x2="26" y2="28" class="ai-stroke ai-w15" style="animation:aiFlash 2s ease .5s infinite"/><circle cx="10" cy="20" r="2" class="ai-fill-orange" style="animation:aiPulse 2s ease infinite"/></svg>`,

        'social-media-marketing': `<svg viewBox="0 0 40 40"><circle cx="10" cy="20" r="4" class="ai-stroke ai-fill-none ai-w2"/><circle cx="30" cy="10" r="4" class="ai-stroke ai-fill-none ai-w2"/><circle cx="30" cy="30" r="4" class="ai-stroke ai-fill-none ai-w2"/><line x1="14" y1="18" x2="26" y2="12" class="ai-stroke ai-w15" style="animation:aiFlash 2s ease infinite"/><line x1="14" y1="22" x2="26" y2="28" class="ai-stroke ai-w15" style="animation:aiFlash 2s ease .5s infinite"/><circle cx="10" cy="20" r="2" class="ai-fill-orange" style="animation:aiPulse 2s ease infinite"/></svg>`,

        'google-ads': `<svg viewBox="0 0 40 40"><rect x="5" y="12" width="30" height="18" rx="3" class="ai-stroke ai-fill-none ai-w2"/><line x1="5" y1="19" x2="35" y2="19" class="ai-stroke ai-w15"/><circle cx="11" cy="15.5" r="1.5" class="ai-fill-orange" style="animation:aiPulse 1.5s ease infinite"/><rect x="9" y="22" width="8" height="5" rx="1" class="ai-fill-orange" style="opacity:.5;animation:aiGrow .4s ease .3s both"/><rect x="20" y="22" width="12" height="2" rx="1" class="ai-fill-dim" style="animation:aiGrow .4s ease .4s both"/><rect x="20" y="25" width="8" height="2" rx="1" class="ai-fill-dim" style="animation:aiGrow .4s ease .5s both"/></svg>`,

        'content-marketing': `<svg viewBox="0 0 40 40"><rect x="7" y="5" width="26" height="32" rx="3" class="ai-stroke ai-fill-none ai-w2"/><line x1="12" y1="13" x2="28" y2="13" class="ai-stroke ai-w2 ai-cap" style="animation:aiGrow .4s ease .1s both"/><line x1="12" y1="18" x2="28" y2="18" class="ai-stroke ai-w15 ai-cap" style="animation:aiGrow .4s ease .2s both"/><line x1="12" y1="23" x2="22" y2="23" class="ai-stroke ai-w15 ai-cap" style="animation:aiGrow .4s ease .3s both"/><circle cx="26" cy="28" r="5" class="ai-fill-orange" style="opacity:.9;animation:aiPop .4s ease .5s both;transform-origin:26px 28px"/><polyline points="23,28 25,30 29,26" class="ai-stroke-white ai-w2 ai-cap" style="animation:aiDraw .4s ease .8s both"/></svg>`,

        'cloud-services': `<svg viewBox="0 0 40 40"><path d="M10 28 Q6 28 6 23 Q6 18 11 18 Q11 12 17 12 Q21 12 23 15 Q25 13 28 13 Q33 13 33 18 Q36 18 36 23 Q36 28 32 28 Z" class="ai-stroke ai-fill-none ai-w2" style="animation:aiDraw 1s ease both"/><line x1="16" y1="28" x2="16" y2="34" class="ai-stroke ai-w15 ai-cap" style="animation:aiGrow .3s ease .8s both"/><line x1="24" y1="28" x2="24" y2="34" class="ai-stroke ai-w15 ai-cap" style="animation:aiGrow .3s ease .9s both"/><line x1="12" y1="34" x2="28" y2="34" class="ai-stroke ai-w2 ai-cap" style="animation:aiGrow .3s ease 1s both"/></svg>`,

        'e-commerce': `<svg viewBox="0 0 40 40"><path d="M5 8 L9 8 L13 26 L31 26 L35 13 L11 13" class="ai-stroke ai-fill-none ai-w2 ai-cap" style="animation:aiDraw .8s ease both"/><circle cx="15" cy="31" r="3" class="ai-stroke ai-fill-none ai-w2"/><circle cx="28" cy="31" r="3" class="ai-stroke ai-fill-none ai-w2"/><circle cx="15" cy="31" r="1.5" class="ai-fill-orange" style="animation:aiPop .3s ease .7s both;transform-origin:15px 31px"/><circle cx="28" cy="31" r="1.5" class="ai-fill-orange" style="animation:aiPop .3s ease .8s both;transform-origin:28px 31px"/></svg>`,

        'cybersecurity': `<svg viewBox="0 0 40 40"><path d="M20 5 L34 11 L34 22 Q34 31 20 37 Q6 31 6 22 L6 11 Z" class="ai-stroke ai-fill-none ai-w2" style="animation:aiDraw 1s ease both"/><polyline points="14,20 18,24 26,16" class="ai-stroke ai-w25 ai-cap ai-fill-none" style="stroke:var(--ac-orange);animation:aiDraw .5s ease .8s both"/></svg>`,

        'data-analytics': `<svg viewBox="0 0 40 40"><rect x="7" y="22" width="6" height="12" rx="1" class="ai-fill-orange" style="opacity:.6;animation:aiGrowUp .5s ease .1s both;transform-origin:bottom"/><rect x="17" y="14" width="6" height="20" rx="1" class="ai-fill-orange" style="animation:aiGrowUp .5s ease .2s both;transform-origin:bottom"/><rect x="27" y="18" width="6" height="16" rx="1" class="ai-fill-orange" style="opacity:.8;animation:aiGrowUp .5s ease .3s both;transform-origin:bottom"/><line x1="5" y1="34" x2="35" y2="34" class="ai-stroke ai-w15"/><line x1="5" y1="34" x2="5" y2="8" class="ai-stroke ai-w15"/></svg>`,

        'blockchain': `<svg viewBox="0 0 40 40"><rect x="14" y="3" width="12" height="9" rx="2" class="ai-stroke ai-fill-none ai-w15"/><rect x="3" y="28" width="12" height="9" rx="2" class="ai-stroke ai-fill-none ai-w15"/><rect x="25" y="28" width="12" height="9" rx="2" class="ai-stroke ai-fill-none ai-w15"/><line x1="20" y1="12" x2="20" y2="20" class="ai-stroke ai-w15" style="animation:aiFlash 2s ease infinite"/><line x1="20" y1="20" x2="9" y2="28" class="ai-stroke ai-w15" style="animation:aiFlash 2s ease .3s infinite"/><line x1="20" y1="20" x2="31" y2="28" class="ai-stroke ai-w15" style="animation:aiFlash 2s ease .6s infinite"/><circle cx="20" cy="20" r="3" class="ai-fill-orange" style="animation:aiPulse 2s ease infinite"/></svg>`,

        'erp-crm': `<svg viewBox="0 0 40 40"><rect x="5" y="5" width="14" height="14" rx="2" class="ai-stroke ai-fill-none ai-w15"/><rect x="21" y="5" width="14" height="14" rx="2" class="ai-stroke ai-fill-none ai-w15"/><rect x="5" y="21" width="14" height="14" rx="2" class="ai-stroke ai-fill-none ai-w15"/><rect x="21" y="21" width="14" height="14" rx="2" class="ai-stroke ai-fill-orange" style="opacity:.3;animation:aiPulse 2s ease infinite"/><line x1="19" y1="12" x2="21" y2="12" class="ai-stroke ai-w2"/><line x1="12" y1="19" x2="12" y2="21" class="ai-stroke ai-w2"/><line x1="19" y1="28" x2="21" y2="28" class="ai-stroke ai-w2"/></svg>`,

        'devops': `<svg viewBox="0 0 40 40"><path d="M20 8 Q30 8 32 18 Q36 18 36 24 Q36 30 28 30 L14 30 Q6 30 6 24 Q6 18 12 18 Q12 10 20 8Z" class="ai-stroke ai-fill-none ai-w15" style="animation:aiDraw 1s ease both"/><polyline points="15,24 18,21 21,24 24,19 27,22" class="ai-stroke ai-w2 ai-cap ai-fill-none" style="stroke:var(--ac-orange);animation:aiDraw .6s ease .8s both"/></svg>`,

        'default': `<svg viewBox="0 0 40 40"><circle cx="20" cy="20" r="14" class="ai-stroke ai-fill-none ai-w2"/><polyline points="14,20 18,24 26,16" class="ai-stroke ai-w25 ai-cap ai-fill-none" style="stroke:var(--ac-orange);animation:aiDraw .5s ease .3s both"/></svg>`
    };

    function getIcon(slug) {
        if (icons[slug]) return icons[slug];
        // fuzzy match
        for (const key of Object.keys(icons)) {
            if (slug.includes(key) || key.includes(slug)) return icons[key];
        }
        return icons['default'];
    }

    document.querySelectorAll('.ac-svg-icon').forEach(el => {
        const raw = el.dataset.service || '';
        const slug = raw.toLowerCase().replace(/[^a-z0-9]+/g, '-').replace(/^-|-$/g, '');
        el.innerHTML = getIcon(slug);
    });
})();
