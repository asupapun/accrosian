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

const revealEls = document.querySelectorAll('.rv,.rl,.rr');

function revealOnScroll(){

    const trigger = window.innerHeight * .9;

    revealEls.forEach(el=>{

        const top = el.getBoundingClientRect().top;

        if(top < trigger){
            el.classList.add('vis');
        }

    });

}

window.addEventListener('scroll', revealOnScroll);

revealOnScroll();


const counters = document.querySelectorAll('.stat-n');

const vrcounterObserver = new IntersectionObserver(entries=>{

    entries.forEach(entry=>{

        if(entry.isIntersecting){

            const el = entry.target;
            const target = +el.dataset.target;

            let count = 0;

            const speed = target / 100;

            const update = ()=>{

                count += speed;

                if(count < target){

                    el.innerText = Math.floor(count).toLocaleString();

                    requestAnimationFrame(update);

                } else {

                    el.innerText = target.toLocaleString();

                }

            };

            update();

            counterObserver.unobserve(el);

        }

    });

});

counters.forEach(counter=>counterObserver.observe(counter));
