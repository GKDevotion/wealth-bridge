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

if ($("#r-age").length > 0) {
    ['r-age', 'r-ret', 'r-exp', 'r-inf', 'r-roi', 'r-life'].forEach(id => {
        document.getElementById(id).addEventListener('input', calcRetirement);
    });

    calcRetirement(); // init
}


/* ── NRI Type Tabs ── */
document.querySelectorAll('.nt-tab').forEach(tab => {
    tab.addEventListener('click', () => {
        const key = tab.dataset.ntab;
        document.querySelectorAll('.nt-tab').forEach(t => t.classList.remove('active'));
        tab.classList.add('active');
        document.querySelectorAll('.nt-panel').forEach(p => p.classList.remove('active'));
        const target = document.getElementById('ntab-' + key);
        if (target) { target.classList.add('active'); AOS.refresh() }
    });
});

/* ── Country Guide Sidebar ── */
document.querySelectorAll('.cg-sidebar-item').forEach(item => {
    item.addEventListener('click', () => {
        const key = item.dataset.country;
        document.querySelectorAll('.cg-sidebar-item').forEach(i => i.classList.remove('active'));
        item.classList.add('active');
        document.querySelectorAll('.cg-panel').forEach(p => p.classList.remove('active'));
        const target = document.getElementById('country-' + key);
        if (target) target.classList.add('active');
    });
});

/* ── Process hover ── */
document.querySelectorAll('.np-step').forEach(s => {
    s.addEventListener('mouseenter', () => {
        document.querySelectorAll('.np-step').forEach(x => x.classList.remove('active'));
        s.classList.add('active');
    });
});


/* ── Process hover ── */
document.querySelectorAll('.cp-step').forEach(s => {
    s.addEventListener('mouseenter', () => {
        document.querySelectorAll('.cp-step').forEach(x => x.classList.remove('active'));
        s.classList.add('active');
    });
});

/* ── FAQ accordion ── */
document.querySelectorAll('.faq-q').forEach(q => {
    q.addEventListener('click', () => {
        const item = q.parentElement, isOpen = item.classList.contains('open');
        document.querySelectorAll('.faq-item.open').forEach(i => i.classList.remove('open'));
        if (!isOpen) item.classList.add('open');
    });
});

/* ── Money Personality Cards ── */
const personalityData = {
    guardian: {
        emoji: '🛡️', name: 'The Guardian',
        combos: {
            guardian: { title: 'Guardian × Guardian', sub: 'Both security-first — very aligned, but you may miss growth opportunities. Balance is critical.', emoji1: '🛡️', label1: 'Guardian', emoji2: '🛡️', label2: 'Guardian', score: 88, tips: ['Excellent financial alignment — minimal arguments about risk', 'Add a dedicated growth bucket (20–30%) managed by a fee-only advisor', 'Risk: may under-invest and lose to inflation over 20+ years', 'Annual portfolio review to ensure real returns beat inflation after tax'] },
            explorer: { title: 'Guardian × Explorer', sub: 'Opposites attract — classic. Guard security needs, fuel Explorer ambition. Powerful if structured right.', emoji1: '🛡️', label1: 'Guardian', emoji2: '🚀', label2: 'Explorer', score: 72, tips: ['Split portfolio: 55% stability (Guardian), 45% growth (Explorer)', 'Joint decision rule: no single investment over ₹1L without both agreeing', 'Guardian manages emergency fund & insurance; Explorer manages equity', 'Quarterly advisor review prevents portfolio drift and arguments'] },
            planner: { title: 'Guardian × Planner', sub: 'Highly complementary. Planner provides the strategy; Guardian ensures it is never over-risked.', emoji1: '🛡️', label1: 'Guardian', emoji2: '📋', label2: 'Planner', score: 90, tips: ['Near-perfect compatibility — shared love of security with room to grow', 'Planner builds the roadmap; Guardian enforces the conservative boundaries', 'Together you make evidence-based, emotion-free financial decisions', 'Risk: occasional conflict when Planner suggests equity; Guardian resists'] },
            spender: { title: 'Guardian × Spender', sub: 'High tension potential. Guardian saves fearfully; Spender lives freely. Structure is essential.', emoji1: '🛡️', label1: 'Guardian', emoji2: '🛍️', label2: 'Spender', score: 55, tips: ['Non-negotiable: both partners need personal spending budgets with no questions asked', 'Guardian focuses on shared goals; Spender manages lifestyle allocation', 'Monthly money check-in with advisor prevents resentment build-up', 'Career break corpus and emergency fund built first — Spender must agree'] }
        }
    },
    explorer: {
        emoji: '🚀', name: 'The Explorer',
        combos: {
            guardian: { title: 'Explorer × Guardian', sub: 'Your best balancer. Explorer\'s ambition + Guardian\'s safety creates a powerful balanced portfolio.', emoji1: '🚀', label1: 'Explorer', emoji2: '🛡️', label2: 'Guardian', score: 72, tips: ['Explorer handles equity portfolio; Guardian owns fixed income and insurance', 'Agree on a maximum equity allocation (e.g. 65%) that Guardian is comfortable with', 'Explorer must consult Guardian before any new investment over ₹50K', 'Regular reviews: Explorer prevents over-conservatism; Guardian prevents over-risk'] },
            explorer: { title: 'Explorer × Explorer', sub: 'Maximum growth potential but maximum risk. You need an external voice to prevent over-exposure.', emoji1: '🚀', label1: 'Explorer', emoji2: '🚀', label2: 'Explorer', score: 65, tips: ['Mandatory: minimum 30% in debt/gold regardless of market views', 'Advisor plays the Guardian role — someone to say "enough risk"', 'Build emergency fund and term insurance BEFORE any aggressive equity moves', 'Volatility in portfolio will be high — plan emotionally for 30-40% drawdowns'] },
            planner: { title: 'Explorer × Planner', sub: 'Excellent balance. Explorer generates ideas; Planner filters and structures them. High potential.', emoji1: '🚀', label1: 'Explorer', emoji2: '📋', label2: 'Planner', score: 84, tips: ['Explorer finds opportunities; Planner researches and validates before investing', 'Planner sets the budget and guardrails; Explorer picks assets within them', 'Together you can achieve 15-18% CAGR without reckless risk', 'Risk: Explorer may get impatient with Planner\'s thoroughness; schedule "opportunity weeks"'] },
            spender: { title: 'Explorer × Spender', sub: 'Fun and energetic — but dangerously few guardrails. External discipline is critical.', emoji1: '🚀', label1: 'Explorer', emoji2: '🛍️', label2: 'Spender', score: 48, tips: ['Automate all investments on salary day — before either can spend', 'Use separate accounts: neither can access joint savings without both agreeing', 'Mandatory quarterly advisor review to prevent lifestyle inflation', 'Build 12-month emergency fund (not 6) to buffer against joint impulsiveness'] }
        }
    },
    planner: {
        emoji: '📋', name: 'The Planner',
        combos: {
            guardian: { title: 'Planner × Guardian', sub: 'Near-perfect. Planner provides direction; Guardian ensures it\'s never reckless. Highly effective.', emoji1: '📋', label1: 'Planner', emoji2: '🛡️', label2: 'Guardian', score: 90, tips: ['Planner leads strategy sessions; Guardian provides the emotional safety checks', 'Excellent at long-term wealth building with minimal conflict', 'Guardian may slow Planner down occasionally — use it as a quality filter', 'Risk: too conservative as a unit; deliberately add a growth goal each year'] },
            explorer: { title: 'Planner × Explorer', sub: 'High potential combination. Planner structures; Explorer accelerates. Works brilliantly with clear rules.', emoji1: '📋', label1: 'Planner', emoji2: '🚀', label2: 'Explorer', score: 84, tips: ['Planner sets quarterly investment calendar; Explorer finds best instruments', 'Explorer cannot invest in "new ideas" beyond agreed allocation without Planner approval', 'Combine Planner\'s discipline with Explorer\'s market awareness for great results', 'Celebrate wins together — Explorer\'s enthusiasm + Planner\'s rigor = winning team'] },
            planner: { title: 'Planner × Planner', sub: 'Maximum alignment. Both structured, goal-focused, and rational. Almost zero money conflicts.', emoji1: '📋', label1: 'Planner', emoji2: '📋', label2: 'Planner', score: 92, tips: ['Highest financial compatibility — strong goal alignment and execution', 'Risk: joint over-analysis paralysis; set a "decide by date" for all investments', 'May miss tactical opportunities due to excessive research; trust your advisor', 'Allow each other a small "fun money" allocation to prevent life feeling too regimented'] },
            spender: { title: 'Planner × Spender', sub: 'Manageable tension. Planner frustrated by Spender\'s spontaneity. Structure + freedom is the solution.', emoji1: '📋', label1: 'Planner', emoji2: '🛍️', label2: 'Spender', score: 62, tips: ['Give Spender a non-negotiable personal budget — no questions asked for that amount', 'Planner automates all joint investments so Spender\'s spending never touches them', 'Frame goals as experiences not numbers — Spender is motivated by "Europe trip" not "SIP amount"', 'Monthly 15-min money check-in (not lecture) keeps Spender engaged and Planner calm'] }
        }
    },
    spender: {
        emoji: '🛍️', name: 'The Spender',
        combos: {
            guardian: { title: 'Spender × Guardian', sub: 'Complementary but tense. Guardian\'s security anchors Spender\'s lifestyle. Balance requires clear structure.', emoji1: '🛍️', label1: 'Spender', emoji2: '🛡️', label2: 'Guardian', score: 55, tips: ['Spender gets a fully guilt-free personal budget; Guardian manages joint savings', 'Automate all investments before Spender\'s salary hits their account', 'Frame financial goals as lifestyle enablers ("this SIP funds our Maldives trip")', 'Guardian should never criticize past Spender purchases — only shape future behaviour'] },
            explorer: { title: 'Spender × Explorer', sub: 'High energy but needs strong external guardrails. Fun together, financially risky without structure.', emoji1: '🛍️', label1: 'Spender', emoji2: '🚀', label2: 'Explorer', score: 48, tips: ['Full automation is non-negotiable: salary → SIP on Day 1, then spend what\'s left', 'Emergency corpus: 12 months (not 6) to absorb both personalities\' impulses', 'Quarterly advisor review is mandatory — not optional — for this combination', 'Celebrate milestones loudly; both personalities are motivated by celebration'] },
            planner: { title: 'Spender × Planner', sub: 'Planner can bring Spender along with the right framing. Structure + fun = workable balance.', emoji1: '🛍️', label1: 'Spender', emoji2: '📋', label2: 'Planner', score: 62, tips: ['Planner should frame goals in Spender\'s language: "₹5K/month buys us Bali in 2 years"', 'Give Spender visible, tangible goal tracking — progress bars they can see', 'Spender\'s enthusiasm for near-term goals is an asset; use it to fund short-term goals', 'Planner manages long-term investments; Spender handles near-term goal saving'] },
            spender: { title: 'Spender × Spender', sub: 'Caution: both live for today. You need maximum external structure and automation.', emoji1: '🛍️', label1: 'Spender', emoji2: '🛍️', label2: 'Spender', score: 40, tips: ['URGENT: automate 40%+ of combined income to investments on salary day', 'Use a separate savings account neither can access without 48-hour notice', 'Monthly advisor check-in with visible net worth tracker', 'Focus on "paying yourself first" — goals must be funded before lifestyle spend'] }
        }
    }
};

let selectedType = 'guardian';
let partnerType = 'explorer';

function updateCompatibility() {
    const data = personalityData[selectedType];
    const combo = data.combos[partnerType];
    document.getElementById('compatTitle').textContent = combo.title;
    document.getElementById('compatSub').textContent = combo.sub;
    document.getElementById('compatEmoji1').textContent = combo.emoji1;
    document.getElementById('compatLabel1').textContent = combo.label1;
    document.getElementById('compatEmoji2').textContent = combo.emoji2;
    document.getElementById('compatLabel2').textContent = combo.label2;
    document.getElementById('compatScore').textContent = combo.score + '%';
    document.getElementById('compatBar').style.width = combo.score + '%';
    const tipsEl = document.getElementById('compatTips');
    tipsEl.innerHTML = combo.tips.map(t => `<div class="ct-tip"><i class="fas fa-${t.startsWith('URGENT') || t.startsWith('Caution') ? 'exclamation-circle' : t.startsWith('Risk') ? 'exclamation-triangle' : 'check-circle'}"></i> ${t}</div>`).join('');
}

document.querySelectorAll('.pc-card').forEach(card => {
    card.addEventListener('click', () => {
        document.querySelectorAll('.pc-card').forEach(c => c.classList.remove('selected'));
        card.classList.add('selected');
        selectedType = card.dataset.type;
        // Partner = opposite of selected for demo
        const types = ['guardian', 'explorer', 'planner', 'spender'];
        const idx = types.indexOf(selectedType);
        partnerType = types[(idx + 1) % 4];
        updateCompatibility();
    });
});

/* ── Floating hearts animation ── */
function spawnHeart() {
    const hearts = document.getElementById('hearts');
    if (!hearts) return;
    const el = document.createElement('span');
    el.textContent = Math.random() > .5 ? '❤️' : '💕';
    el.style.cssText = `position:absolute;left:${Math.random() * 100}%;bottom:${Math.random() * 40}%;font-size:${10 + Math.random() * 16}px;animation:floatHeart ${4 + Math.random() * 4}s linear forwards;`;
    hearts.appendChild(el);
    setTimeout(() => el.remove(), 8000);
}
const hi = setInterval(spawnHeart, 1200);
setTimeout(() => clearInterval(hi), 12000); // stop after 10 hearts

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
        var start = 0;
        var duration = 1800;
        var startTime = null;
        function step(ts) {
            if (!startTime) startTime = ts;
            var progress = Math.min((ts - startTime) / duration, 1);
            var ease = 1 - Math.pow(1 - progress, 3);
            var current = start + (target - start) * ease;
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
                    var target = parseFloat(e.target.dataset.counter);
                    var isDecimal = e.target.dataset.suffix === 'Cr+';
                    animateNum(e.target, target, isDecimal);
                    statObs.unobserve(e.target);
                }
            });
        }, { threshold: 0.5 });
        statEls.forEach(function (el) { statObs.observe(el); });
    }
})();

/* ── Process hover ── */
document.querySelectorAll('.wp-step').forEach(s => {
    s.addEventListener('mouseenter', () => {
        document.querySelectorAll('.wp-step').forEach(x => x.classList.remove('active'));
        s.classList.add('active');
    });
});

/* ── FAQ accordion ── */
document.querySelectorAll('.faq-q').forEach(q => {
    q.addEventListener('click', () => {
        const item = q.parentElement, isOpen = item.classList.contains('open');
        document.querySelectorAll('.faq-item.open').forEach(i => i.classList.remove('open'));
        if (!isOpen) item.classList.add('open');
    });
});

function calcFI() {
    const curAge = +document.getElementById('fi-age').value;
    const fiAge = +document.getElementById('fi-target-age').value;
    const exp = +document.getElementById('fi-exp').value;
    const brk = +document.getElementById('fi-break').value;
    const roi = +document.getElementById('fi-roi').value / 100;
    const life = +document.getElementById('fi-life').value;

    document.getElementById('lbl-age').textContent = curAge;
    document.getElementById('lbl-fi-age').textContent = fiAge;
    document.getElementById('lbl-exp').textContent = '₹' + exp.toLocaleString('en-IN');
    document.getElementById('lbl-break').textContent = brk;
    document.getElementById('lbl-roi').textContent = (roi * 100).toFixed(1);
    document.getElementById('lbl-life').textContent = life;

    const yearsToFI = Math.max(fiAge - curAge, 1);
    const retYrs = Math.max(life - fiAge, 5);
    const inf = 0.06; // fixed 6% inflation
    const retExp = exp * Math.pow(1 + inf, yearsToFI) * 12; // annual at retirement
    const rReal = (1 + roi) / (1 + inf) - 1;

    // Base corpus (standard PV of annuity)
    let baseCorpus;
    if (Math.abs(rReal) < .0001) baseCorpus = retExp * retYrs;
    else baseCorpus = retExp * (1 - Math.pow(1 + rReal, -retYrs)) / rReal;

    // Women longevity premium: 2 extra years
    let longevityPremium;
    if (Math.abs(rReal) < .0001) longevityPremium = retExp * 2;
    else longevityPremium = retExp * (1 - Math.pow(1 + rReal, -2)) / rReal;

    // Healthcare corpus: 15% of base
    const healthCorpus = baseCorpus * 0.15;

    const totalCorpus = baseCorpus + longevityPremium + healthCorpus;

    // Active investing years (excluding break)
    const activeYears = yearsToFI - brk;
    const rMo = roi / 12;
    const nMo = Math.max(activeYears * 12, 1);
    const sip = totalCorpus * rMo / (Math.pow(1 + rMo, nMo) - 1);
    const invested = sip * nMo;
    const sipFundedPct = Math.min(Math.round((invested / totalCorpus) * 100), 99);

    // Update DOM
    if (totalCorpus >= 10000000) document.getElementById('fi-corpus').innerHTML = '₹<span>' + (totalCorpus / 10000000).toFixed(1) + '</span> Crore';
    else document.getElementById('fi-corpus').innerHTML = '₹<span>' + (totalCorpus / 100000).toFixed(1) + '</span> Lakh';

    document.getElementById('fi-sub').textContent = `To retire at ${fiAge} · ₹${Math.round(exp / 1000)}K/month today · ${retYrs + 2} years income`;
    document.getElementById('fi-base').textContent = fmt(baseCorpus);
    document.getElementById('fi-longevity').textContent = '+' + fmt(longevityPremium);
    document.getElementById('fi-health').textContent = '+' + fmt(healthCorpus);
    document.getElementById('fi-sip').textContent = fmtMo(sip);

    // Gauge
    document.getElementById('fi-gauge-pct').textContent = sipFundedPct + '%';
    const offset = 157 - (157 * sipFundedPct / 100);
    document.getElementById('gaugePath').style.strokeDashoffset = offset;
}

if ($("#fi-age").length > 0) {
    ['fi-age', 'fi-target-age', 'fi-exp', 'fi-break', 'fi-roi', 'fi-life'].forEach(id => {
        document.getElementById(id).addEventListener('input', calcFI);
    });
    calcFI();
}

// ── Coverage Tabs ──
function switchTab(btn, panelId) {
    document.querySelectorAll('.cov-tab').forEach(t => t.classList.remove('active'));
    document.querySelectorAll('.coverage-panel').forEach(p => p.classList.remove('active'));
    btn.classList.add('active');
    const panel = document.getElementById(panelId);
    panel.classList.add('active');
    panel.setAttribute('data-aos', 'fade-up');
    AOS.refreshHard();
}

// ── Calculator ──
const saValues = [25, 50, 75, 100, 150, 200, 300, 500, 750, 1000];
const saLabels = ['₹25L', '₹50L', '₹75L', '₹1 Cr', '₹1.5 Cr', '₹2 Cr', '₹3 Cr', '₹5 Cr', '₹7.5 Cr', '₹10 Cr'];
const termValues = [10, 15, 20, 25, 30, 40];

function updateSALabel() {
    const idx = parseInt(document.getElementById('calcSA').value) - 1;
    document.getElementById('saLabel').textContent = saLabels[idx];
}
function updateTermLabel() {
    const idx = parseInt(document.getElementById('calcTerm').value) - 1;
    document.getElementById('termLabel').textContent = termValues[idx] + ' Years';
}

function calcPremium() {
    const saIdx = parseInt(document.getElementById('calcSA').value) - 1;
    const termIdx = parseInt(document.getElementById('calcTerm').value) - 1;
    const sa = saValues[saIdx];
    const term = termValues[termIdx];
    const gender = document.getElementById('calcGender').value;
    const smoke = document.getElementById('calcSmoke').value;
    const plan = document.getElementById('calcPlan').value;
    const dob = document.getElementById('calcDob').value;

    let age = 30;
    if (dob) {
        const d = new Date(dob);
        age = new Date().getFullYear() - d.getFullYear();
    }
    age = Math.max(18, Math.min(65, age));

    // base rate per lakh per year
    let baseRate = 0.6; // ₹/lakh/month
    if (plan === 'Whole Life') baseRate = 1.6;
    if (plan === 'Endowment') baseRate = 2.2;
    if (plan === 'ULIP') baseRate = 1.8;

    let premium = sa * baseRate;
    if (age > 40) premium *= 1.3;
    if (age > 50) premium *= 1.6;
    if (gender === 'Male') premium *= 1.05;
    if (smoke === 'Yes') premium *= 1.4;
    premium *= (1 + (term - 20) * 0.008);
    premium = Math.max(300, Math.round(premium / 10) * 10);

    document.getElementById('calcResult').textContent = '₹' + premium.toLocaleString('en-IN');
}

if( $("#calcSA").length > 0 ) {
    updateSALabel(); 
    updateTermLabel(); 
    calcPremium();
}