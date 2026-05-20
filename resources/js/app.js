import { animate, stagger, onScroll } from 'animejs';

// ── Helper: trigger animation when element enters viewport ────────────────
function onInView(selector, callback, options = {}) {
    const elements = typeof selector === 'string'
        ? document.querySelectorAll(selector)
        : [selector];

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                callback(entry.target);
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.05, rootMargin: '0px 0px -3% 0px', ...options });

    elements.forEach(el => observer.observe(el));
}

// ── Navbar scroll shadow ──────────────────────────────────────────────────
const nav = document.querySelector('nav');
if (nav) {
    window.addEventListener('scroll', () => {
        nav.classList.toggle('shadow-md', window.scrollY > 20);
    }, { passive: true });
}

// ── Hero entrance animations ──────────────────────────────────────────────
if (document.querySelector('#hero-content')) {
    const heroItems = [
        { el: '#hero-badge',   delay: 0,   y: -20 },
        { el: '#hero-heading', delay: 150, y: 40  },
        { el: '#hero-tagline', delay: 300, y: 30  },
        { el: '#hero-bio',     delay: 450, y: 20  },
        { el: '#hero-cta',     delay: 600, y: 20  },
        { el: '#hero-socials', delay: 750, y: 10  },
    ];

    heroItems.forEach(({ el, delay, y }) => {
        if (document.querySelector(el)) {
            animate(el, {
                opacity: [0, 1],
                translateY: [y, 0],
                duration: 700,
                delay,
                easing: 'easeOutExpo',
            });
        }
    });

    if (document.querySelector('#hero-code-card')) {
        animate('#hero-code-card', {
            opacity: [0, 1],
            translateX: [60, 0],
            duration: 900,
            delay: 400,
            easing: 'easeOutExpo',
        });
    }
}

// ── Scroll-triggered: single fade-up elements ────────────────────────────
onInView('.anim-fade-up', (el) => {
    animate(el, {
        opacity: [0, 1],
        translateY: [40, 0],
        duration: 700,
        easing: 'easeOutExpo',
    });
});

// ── Scroll-triggered: slide in from left ─────────────────────────────────
onInView('.anim-slide-left', (el) => {
    animate(el, {
        opacity: [0, 1],
        translateX: [-50, 0],
        duration: 700,
        easing: 'easeOutExpo',
    });
});

// ── Scroll-triggered: slide in from right ────────────────────────────────
onInView('.anim-slide-right', (el) => {
    animate(el, {
        opacity: [0, 1],
        translateX: [50, 0],
        duration: 700,
        easing: 'easeOutExpo',
    });
});

// ── Scroll-triggered: stagger children ───────────────────────────────────
onInView('.anim-stagger-parent', (parent) => {
    const children = parent.querySelectorAll('.anim-stagger-child');
    if (children.length) {
        animate(children, {
            opacity: [0, 1],
            translateY: [30, 0],
            duration: 600,
            delay: stagger(80),
            easing: 'easeOutExpo',
        });
    }
});

// ── Scroll-triggered: timeline dots pop in ───────────────────────────────
onInView('.timeline-dot', (el) => {
    animate(el, {
        scale: [0, 1],
        duration: 400,
        easing: 'easeOutBack',
    });
});

// ── CTA section ──────────────────────────────────────────────────────────
onInView('.cta-section', (section) => {
    const h2 = section.querySelector('h2');
    const p  = section.querySelector('p');
    const as = section.querySelectorAll('a');

    if (h2) animate(h2, { opacity: [0, 1], translateY: [30, 0], duration: 700, easing: 'easeOutExpo' });
    if (p)  animate(p,  { opacity: [0, 1], translateY: [20, 0], duration: 700, delay: 150, easing: 'easeOutExpo' });
    if (as.length) {
        animate(as, {
            opacity: [0, 1],
            translateY: [15, 0],
            duration: 600,
            delay: stagger(100, { start: 300 }),
            easing: 'easeOutExpo',
        });
    }
});

// ── Skill card hover scale ────────────────────────────────────────────────
document.querySelectorAll('.skill-card').forEach(card => {
    card.addEventListener('mouseenter', () => animate(card, { scale: 1.07, duration: 180, easing: 'easeOutQuad' }));
    card.addEventListener('mouseleave', () => animate(card, { scale: 1,    duration: 180, easing: 'easeOutQuad' }));
});

// ── Project card hover lift ───────────────────────────────────────────────
document.querySelectorAll('.project-card').forEach(card => {
    card.addEventListener('mouseenter', () => animate(card, { translateY: -6, duration: 180, easing: 'easeOutQuad' }));
    card.addEventListener('mouseleave', () => animate(card, { translateY:  0, duration: 180, easing: 'easeOutQuad' }));
});

// ── Mobile menu animated toggle ───────────────────────────────────────────
const menuBtn    = document.getElementById('menu-btn');
const mobileMenu = document.getElementById('mobile-menu');
if (menuBtn && mobileMenu) {
    menuBtn.addEventListener('click', () => {
        if (mobileMenu.classList.contains('hidden')) {
            mobileMenu.classList.remove('hidden');
            animate(mobileMenu, { opacity: [0, 1], translateY: [-10, 0], duration: 250, easing: 'easeOutQuad' });
        } else {
            animate(mobileMenu, { opacity: [1, 0], translateY: [0, -10], duration: 200, easing: 'easeInQuad' })
                .then(() => mobileMenu.classList.add('hidden'));
        }
    });
}

// ── Back to top ───────────────────────────────────────────────────────────
const backToTop = document.getElementById('back-to-top');
if (backToTop) {
    window.addEventListener('scroll', () => {
        backToTop.classList.toggle('hidden', window.scrollY < 400);
    }, { passive: true });
    backToTop.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));
}
