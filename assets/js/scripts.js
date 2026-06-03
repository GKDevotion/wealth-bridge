// Init AOS
AOS.init({
    duration: 700,
    easing: 'cubic-bezier(0.4, 0, 0.2, 1)',
    once: true,
    offset: 60
});

// Navbar scroll
const navbar = document.getElementById('navbar');
window.addEventListener('scroll', () => {
    navbar.classList.toggle('scrolled', window.scrollY > 60);
    document.getElementById('backToTop').classList.toggle('visible', window.scrollY > 400);
});

// Back to top
document.getElementById('backToTop').addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));

// Mobile menu
const hamburger = document.getElementById('hamburger');
const mobileMenu = document.getElementById('mobileMenu');
const mobileOverlay = document.getElementById('mobileOverlay');
const mobileClose = document.getElementById('mobileClose');

function openMenu() {
    hamburger.classList.add('open');
    mobileMenu.classList.add('open');
    mobileOverlay.classList.add('open');
    document.body.style.overflow = 'hidden';
}
function closeMenu() {
    hamburger.classList.remove('open');
    mobileMenu.classList.remove('open');
    mobileOverlay.classList.remove('open');
    document.body.style.overflow = '';
}

hamburger.addEventListener('click', openMenu);
mobileClose.addEventListener('click', closeMenu);
mobileOverlay.addEventListener('click', closeMenu);

// Mobile accordion
document.querySelectorAll('[data-toggle]').forEach(btn => {
    btn.addEventListener('click', () => {
        const item = btn.parentElement;
        const isOpen = item.classList.contains('open');
        document.querySelectorAll('.mobile-nav-item.open').forEach(i => {
            i.classList.remove('open');
            i.querySelector('.mobile-sub')?.classList.remove('open');
        });
        if (!isOpen) {
            item.classList.add('open');
            item.querySelector('.mobile-sub')?.classList.add('open');
        }
    });
});

document.querySelectorAll('.mob-sub a, .mob-footer a').forEach(a => a.addEventListener('click', closeMenu));

// Close mobile menu on link click
document.querySelectorAll('.mobile-sub a, .mobile-nav-footer a').forEach(a => {
    a.addEventListener('click', closeMenu);
});

// Process step hover
document.querySelectorAll('.process-step').forEach(step => {
    step.addEventListener('mouseenter', () => {
        document.querySelectorAll('.process-step').forEach(s => s.classList.remove('active'));
        step.classList.add('active');
    });
});

// Counter animation
function animateCounter(el) {
    const text = el.textContent;
    const match = text.match(/[\d,]+/);
    if (!match) return;
    const target = parseInt(match[0].replace(',', ''));
    let start = 0;
    const duration = 1800;
    const step = timestamp => {
        if (!start) start = timestamp;
        const progress = Math.min((timestamp - start) / duration, 1);
        const eased = 1 - Math.pow(1 - progress, 3);
        el.textContent = text.replace(match[0], Math.floor(eased * target).toLocaleString());
        if (progress < 1) requestAnimationFrame(step);
    };
    requestAnimationFrame(step);
}

// Intersection Observer for counters
const counterEls = document.querySelectorAll('.why-stat-num, .hero-stat-num');
const counterObs = new IntersectionObserver(entries => {
    entries.forEach(e => {
        if (e.isIntersecting) { animateCounter(e.target); counterObs.unobserve(e.target); }
    });
}, { threshold: 0.5 });
counterEls.forEach(el => counterObs.observe(el));


// Investment type tabs
const tabs = document.querySelectorAll('.inv-tab');
tabs.forEach(tab => {
    tab.addEventListener('click', () => {
        const key = tab.dataset.tab;
        tabs.forEach(t => t.classList.remove('active'));
        tab.classList.add('active');
        document.querySelectorAll('.inv-panel').forEach(p => p.classList.remove('active'));
        const target = document.getElementById('tab-' + key);
        if (target) {
            target.classList.add('active');
            AOS.refresh();
        }
    });
});

// FAQ accordion
document.querySelectorAll('.faq-q').forEach(q => {
    q.addEventListener('click', () => {
        const item = q.parentElement;
        const isOpen = item.classList.contains('open');
        document.querySelectorAll('.faq-item.open').forEach(i => i.classList.remove('open'));
        if (!isOpen) item.classList.add('open');
    });
});

// Process step hover
document.querySelectorAll('.ip-step').forEach(step => {
    step.addEventListener('mouseenter', () => {
        document.querySelectorAll('.ip-step').forEach(s => s.classList.remove('active'));
        step.classList.add('active');
    });
});