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

/* ── Process hover ── */
document.querySelectorAll('.rp-step').forEach(s => {
    s.addEventListener('mouseenter', () => {
        document.querySelectorAll('.rp-step').forEach(x => x.classList.remove('active'));
        s.classList.add('active');
    });
});

/* ── RETIREMENT CALCULATOR ── */
const fmt = (n) => {
    if (n >= 10000000) return '₹' + (n / 10000000).toFixed(1) + ' Cr';
    if (n >= 100000) return '₹' + (n / 100000).toFixed(1) + ' L';
    return '₹' + Math.round(n).toLocaleString('en-IN');
};
const fmtMo = (n) => {
    if (n >= 100000) return '₹' + (n / 100000).toFixed(1) + 'L /mo';
    return '₹' + Math.round(n).toLocaleString('en-IN') + ' /mo';
};

function calcRetirement() {
    const curAge = +document.getElementById('r-age').value;
    const retAge = +document.getElementById('r-ret').value;
    const exp = +document.getElementById('r-exp').value;
    const inf = +document.getElementById('r-inf').value / 100;
    const roi = +document.getElementById('r-roi').value / 100;
    const life = +document.getElementById('r-life').value;

    document.getElementById('lbl-age').textContent = curAge;
    document.getElementById('lbl-ret').textContent = retAge;
    document.getElementById('lbl-exp').textContent = '₹' + exp.toLocaleString('en-IN');
    document.getElementById('lbl-inf').textContent = (inf * 100).toFixed(1);
    document.getElementById('lbl-roi').textContent = (roi * 100).toFixed(1);
    document.getElementById('lbl-life').textContent = life;

    const years = retAge - curAge;          // accumulation years
    const retYrs = life - retAge;          // withdrawal years
    if (years <= 0 || retYrs <= 0) return;

    // Monthly expenses at retirement (inflated)
    const retExp = exp * Math.pow(1 + inf, years);
    const retExpAnnual = retExp * 12;

    // Corpus needed (PV of inflation-adjusted annuity)
    // Real rate approximation: r_real ≈ (1+roi)/(1+inf) - 1
    const rReal = (1 + roi) / (1 + inf) - 1;
    let corpus;
    if (Math.abs(rReal) < 0.0001) {
        corpus = retExpAnnual * retYrs;
    } else {
        corpus = retExpAnnual * (1 - Math.pow(1 + rReal, -retYrs)) / rReal;
    }

    // Monthly SIP needed (FV = corpus, n months, rate = monthly roi)
    const rMo = roi / 12;
    const nMo = years * 12;
    const sip = corpus * rMo / (Math.pow(1 + rMo, nMo) - 1);

    // Invested total & gain
    const invested = sip * nMo;
    const gain = corpus - invested;
    const growthPct = Math.round((gain / corpus) * 100);

    // Monthly post-retirement SWP income (using 4% SWP rule)
    const swpMonthly = (corpus * 0.04) / 12;

    // Update DOM
    if (corpus >= 10000000) document.getElementById('res-corpus').innerHTML =
        '₹<span>' + (corpus / 10000000).toFixed(1) + '</span> Crore';
    else document.getElementById('res-corpus').innerHTML =
        '₹<span>' + (corpus / 100000).toFixed(1) + '</span> Lakh';

    document.getElementById('res-sub').textContent =
        'To retire at ' + retAge + ' · ₹' + Math.round(exp / 1000) + 'K/month today · ' + retYrs + ' yrs income';

    document.getElementById('res-invested').textContent = fmt(invested);
    document.getElementById('res-gain').textContent = fmt(gain);
    document.getElementById('res-sip').textContent = fmtMo(sip);
    document.getElementById('res-income').textContent = fmtMo(swpMonthly);
    document.getElementById('res-growth-pct').textContent = growthPct + '%';

    // Update conic donut
    const investedPct = Math.round((invested / corpus) * 100);
    const gainPct = growthPct;
    document.getElementById('cr-donut').style.background =
        `conic-gradient(var(--red) 0% ${investedPct}%,var(--black) ${investedPct}% ${investedPct + gainPct}%,var(--gray-200) ${investedPct + gainPct}% 100%)`;
}

['r-age', 'r-ret', 'r-exp', 'r-inf', 'r-roi', 'r-life'].forEach(id => {
    document.getElementById(id).addEventListener('input', calcRetirement);
});

if( $(".r-age").length > 0 ){
    calcRetirement(); // init
}



(function () {
 
    /* ── Animated bar chart (IntersectionObserver) ── */
    var fills = document.querySelectorAll('.wcc-bar-fill');
    if (fills.length) {
        var barObs = new IntersectionObserver(function (entries) {
            entries.forEach(function (e) {
                if (e.isIntersecting) {
                    e.target.classList.add('animated');
                    barObs.unobserve(e.target);
                }
            });
        }, { threshold: 0.3 });
        fills.forEach(function (f) { barObs.observe(f); });
    }

    /* ── Counter animation ── */
    function animateNum(el, target, isDecimal) {
        var start     = 0;
        var duration  = 1800;
        var startTime = null;
        function step(ts) {
            if (!startTime) startTime = ts;
            var progress = Math.min((ts - startTime) / duration, 1);
            var ease     = 1 - Math.pow(1 - progress, 3);
            var current  = start + (target - start) * ease;
            el.textContent = (isDecimal ? '₹' + current.toFixed(1) + 'Cr+' :
                              current >= 1000 ? Math.floor(current).toLocaleString('en-IN') + '+' :
                              Math.floor(current) + ' Yrs');
            if (progress < 1) requestAnimationFrame(step);
        }
        requestAnimationFrame(step);
    }

    var statEls = document.querySelectorAll('.hero__stat-num[data-counter]');
    if (statEls.length) {
        var statObs = new IntersectionObserver(function (entries) {
            entries.forEach(function (e) {
                if (e.isIntersecting && !e.target.dataset.done) {
                    e.target.dataset.done = '1';
                    var target    = parseFloat(e.target.dataset.counter);
                    var isDecimal = e.target.dataset.suffix === 'Cr+';
                    animateNum(e.target, target, isDecimal);
                    statObs.unobserve(e.target);
                }
            });
        }, { threshold: 0.5 });
        statEls.forEach(function (el) { statObs.observe(el); });
    }
})();