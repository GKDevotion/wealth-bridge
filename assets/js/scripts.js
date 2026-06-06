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

if ($("#calcSA").length > 0) {
    updateSALabel();
    updateTermLabel();
    calcPremium();
}

/* ── Process hover ── */
document.querySelectorAll('.wmp-step').forEach(s => {
    s.addEventListener('mouseenter', () => {
        document.querySelectorAll('.wmp-step').forEach(x => x.classList.remove('active'));
        s.classList.add('active');
    });
});

/* ── Asset Allocation Tool ── */
const profiles = {
    conservative: {
        allocs: [
            { name: 'Equity Funds', pct: 20, color: '#C8102E' },
            { name: 'Debt / Bonds', pct: 40, color: '#2563eb' },
            { name: 'Gold / SGBs', pct: 15, color: '#D4A017' },
            { name: 'Real Estate', pct: 15, color: '#15803d' },
            { name: 'Alternates', pct: 10, color: '#7c3aed' }
        ],
        xirr: '9–12%', risk: 'Low', dd: '~8%'
    },
    balanced: {
        allocs: [
            { name: 'Equity / PMS', pct: 40, color: '#C8102E' },
            { name: 'Debt / Bonds', pct: 25, color: '#2563eb' },
            { name: 'Alternates / AIF', pct: 20, color: '#D4A017' },
            { name: 'Real Estate', pct: 10, color: '#15803d' },
            { name: 'Gold / SGBs', pct: 5, color: '#7c3aed' }
        ],
        xirr: '14–17%', risk: 'Moderate', dd: '~15%'
    },
    growth: {
        allocs: [
            { name: 'Equity / PMS', pct: 55, color: '#C8102E' },
            { name: 'Alternates / AIF', pct: 25, color: '#D4A017' },
            { name: 'Debt / Bonds', pct: 10, color: '#2563eb' },
            { name: 'Real Estate', pct: 7, color: '#15803d' },
            { name: 'Gold', pct: 3, color: '#888' }
        ],
        xirr: '16–20%', risk: 'High', dd: '~22%'
    },
    aggressive: {
        allocs: [
            { name: 'Direct Equity / PMS', pct: 60, color: '#C8102E' },
            { name: 'AIF / PE', pct: 30, color: '#D4A017' },
            { name: 'Intl. Equity', pct: 7, color: '#7c3aed' },
            { name: 'Gold / Cash', pct: 3, color: '#888' }
        ],
        xirr: '18–25%', risk: 'Very High', dd: '~35%'
    }
};

function fmtAssets(cr) {
    if (cr >= 100) return '₹' + cr.toFixed(0) + ' Crore';
    if (cr >= 10) return '₹' + cr.toFixed(0) + ' Crore';
    if (cr >= 1) return '₹' + cr.toFixed(1) + ' Crore';
    return '₹' + Math.round(cr * 100) + ' Lakhs';
}

function calcAlloc() {
    const assets = +document.getElementById('at-assets').value;
    const horizon = +document.getElementById('at-horizon').value;
    const age = +document.getElementById('at-age').value;
    const risk = document.getElementById('at-risk').value;
    const income = document.getElementById('at-income').value;

    document.getElementById('lbl-assets').textContent = fmtAssets(assets);
    document.getElementById('lbl-horizon').textContent = horizon + ' years';
    document.getElementById('lbl-atage').textContent = age;
    document.getElementById('lbl-risk').textContent = document.getElementById('at-risk').options[document.getElementById('at-risk').selectedIndex].text.split(' — ')[0];
    document.getElementById('lbl-income').textContent = income === 'no' ? 'No' : income === 'partial' ? 'Partial' : 'Yes';

    const profile = profiles[risk];

    // Render allocation bars
    const allocEl = document.getElementById('atAlloc');
    allocEl.innerHTML = profile.allocs.map(a => `
    <div class="atra-row">
      <div class="atra-name"><div class="atra-dot" style="background:${a.color}"></div>${a.name}</div>
      <div class="atra-bar-bg"><div class="atra-bar" style="width:${a.pct}%;background:${a.color}"></div></div>
      <div class="atra-pct">${a.pct}%</div>
    </div>`).join('');

    // Projected corpus at midpoint of XIRR range
    const xirrs = profile.xirr.split('–');
    const midXirr = (parseFloat(xirrs[0]) + parseFloat(xirrs[1])) / 2 / 100;
    const projected = assets * Math.pow(1 + midXirr, horizon);
    let projStr;
    if (projected >= 100) projStr = '₹' + projected.toFixed(0) + ' Cr';
    else if (projected >= 10) projStr = '₹' + projected.toFixed(1) + ' Cr';
    else projStr = '₹' + projected.toFixed(2) + ' Cr';

    document.getElementById('atr-xirr').textContent = profile.xirr + '%';
    document.getElementById('atr-corpus').textContent = projStr;
    document.getElementById('atr-risk').textContent = profile.risk;
    document.getElementById('atr-dd').textContent = profile.dd;
}

if ($("#at-assets").length > 0) {
    ['at-assets', 'at-horizon', 'at-age'].forEach(id => document.getElementById(id).addEventListener('input', calcAlloc));
    ['at-risk', 'at-income'].forEach(id => document.getElementById(id).addEventListener('change', calcAlloc));
    calcAlloc();
}

if ($(".cb-fill").length > 0) {
    // ── Chart bar IntersectionObserver ──
    const chartWrap = document.getElementById('chartWrap');
    const chartBars = chartWrap.querySelectorAll('.cb-fill');
    const chartObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                chartBars.forEach((bar, i) => {
                    setTimeout(() => bar.classList.add('animate'), i * 150);
                });
                chartObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.3 });
    chartObserver.observe(chartWrap);
}

// ── Calculator ──
const savValues = [0, 1, 2, 3, 4, 5, 6, 7, 8, 10, 12, 15, 20];
const savLabels = ['₹0', '₹1L', '₹2L', '₹3L', '₹4L', '₹5L', '₹6L', '₹7L', '₹8L', '₹10L', '₹12L', '₹15L', '₹20L'];

function updateSavLabel() {
    const idx = parseInt(document.getElementById('ecSav').value);
    document.getElementById('ecSavLabel').textContent = savLabels[idx];
}

function calcEdu() {
    const age = parseInt(document.getElementById('ecAge').value);
    const baseGoal = parseInt(document.getElementById('ecCollege').value); // in lakhs today
    const savIdx = parseInt(document.getElementById('ecSav').value);
    const existSav = savValues[savIdx]; // lakhs
    const r = parseFloat(document.getElementById('ecReturn').value) / 100;
    const dur = parseInt(document.getElementById('ecDur').value);
    const eduInfl = 0.08;

    const n = 18 - age; // years to college
    if (n <= 0) {
        document.getElementById('ecResult').textContent = '₹—';
        return;
    }

    // Total future cost (inflation adjusted)
    let futureCost = 0;
    for (let y = 0; y < dur; y++) {
        futureCost += baseGoal * Math.pow(1 + eduInfl, n + y);
    }

    // Existing savings grow at return rate
    const grownSavings = existSav * Math.pow(1 + r, n);
    const shortfall = Math.max(0, futureCost - grownSavings);

    // SIP formula: shortfall = SIP * [(1+r/12)^(n*12) - 1] / (r/12)
    const rm = r / 12;
    const months = n * 12;
    const sip = shortfall / ((Math.pow(1 + rm, months) - 1) / rm);
    const totalContrib = sip * months / 100000;
    const returnsEarned = (shortfall / 100000) - totalContrib;

    document.getElementById('ecResult').textContent = '₹' + Math.ceil(sip).toLocaleString('en-IN');
    document.getElementById('ecFutureCost').textContent = '₹' + futureCost.toFixed(1) + 'L';
    document.getElementById('ecContrib').textContent = '₹' + totalContrib.toFixed(1) + 'L';
    document.getElementById('ecReturns').textContent = '₹' + Math.max(0, returnsEarned).toFixed(1) + 'L';
}

if ($("#ecAge").length > 0) {
    updateSavLabel();
    calcEdu();
}

// ── Number counter animation for stats bar ──
const counterChildEls = document.querySelectorAll('.hsb-val');
const counterChildObs = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.style.opacity = '1';
            entry.target.style.transform = 'translateY(0)';
            counterChildObs.unobserve(entry.target);
        }
    });
}, { threshold: 0.5 });
counterChildEls.forEach(el => {
    el.style.opacity = '0';
    el.style.transform = 'translateY(12px)';
    el.style.transition = 'all 0.6s ease';
    counterChildObs.observe(el);
});

(function () {

    /* Animated bar fills — all selectors */
    function observeFills(selector) {
        var fills = document.querySelectorAll(selector);
        if (!fills.length) return;
        var obs = new IntersectionObserver(function (entries) {
            entries.forEach(function (e) {
                if (e.isIntersecting) {
                    e.target.classList.add('animated');
                    obs.unobserve(e.target);
                }
            });
        }, { threshold: 0.25 });
        fills.forEach(function (f) { obs.observe(f); });
    }
    observeFills('.teiwc-fill');
    observeFills('.htb-fill');
    observeFills('.hiwc-fill');
    observeFills('.hcl-bar');
    observeFills('.reiwc-fill');
    observeFills('.risk-meter-fill');

    /* Counter animation */
    function animateCounter(el) {
        var raw = parseFloat(el.dataset.counter);
        var suffix = el.dataset.suffix || '';
        var duration = 1800;
        var start = null;
        function step(ts) {
            if (!start) start = ts;
            var p = Math.min((ts - start) / duration, 1);
            var e = 1 - Math.pow(1 - p, 3);
            var v = Math.round(raw * e);
            var d = raw >= 1000 ? v.toLocaleString('en-IN') : v;
            el.textContent = d + suffix;
            if (p < 1) requestAnimationFrame(step);
        }
        requestAnimationFrame(step);
    }
    var statEls = document.querySelectorAll('.hero__stat-num[data-counter]');
    if (statEls.length) {
        var sObs = new IntersectionObserver(function (entries) {
            entries.forEach(function (e) {
                if (e.isIntersecting && !e.target.dataset.done) {
                    e.target.dataset.done = '1';
                    animateCounter(e.target);
                    sObs.unobserve(e.target);
                }
            });
        }, { threshold: 0.5 });
        statEls.forEach(function (el) { sObs.observe(el); });
    }

})();


/* ── Destination tabs ── */
document.querySelectorAll('.dt-tab').forEach(tab => {
    tab.addEventListener('click', () => {
        const key = tab.dataset.dtab;
        document.querySelectorAll('.dt-tab').forEach(t => t.classList.remove('active'));
        tab.classList.add('active');
        document.querySelectorAll('.dt-panel').forEach(p => p.classList.remove('active'));
        const t = document.getElementById('dtab-' + key);
        if (t) { t.classList.add('active'); AOS.refresh() }
    });
});

/* ── Process hover ── */
document.querySelectorAll('.vp-step').forEach(s => {
    s.addEventListener('mouseenter', () => {
        document.querySelectorAll('.vp-step').forEach(x => x.classList.remove('active'));
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

if ($("#dotsAnim").length > 0) {
    /* ── Floating dots animation ── */
    const dotsEl = document.getElementById('dotsAnim');
    const destEmojis = ['✈️', '🌍', '🏖️', '🗺️', '🌏', '🏔️', '🌊', '🎡'];
    for (let i = 0; i < 8; i++) {
        const d = document.createElement('div');
        d.className = 'sh-dot-el';
        const size = 8 + Math.random() * 14;
        d.style.cssText = `width:${size}px;height:${size}px;background:rgba(200,16,46,${.06 + Math.random() * .12});left:${5 + Math.random() * 90}%;bottom:${10 + Math.random() * 60}%;animation-duration:${4 + Math.random() * 5}s;animation-delay:${Math.random() * 3}s`;
        dotsEl.appendChild(d);
    }
}

/* ── VACATION CALCULATOR ── */
function fmtVacation(n) {
    if (n >= 10000000) return '₹' + (n / 10000000).toFixed(1) + 'Cr';
    if (n >= 100000) return '₹' + (n / 100000).toFixed(1) + 'L';
    return '₹' + Math.round(n).toLocaleString('en-IN');
}
function fmtVacationMo(n) {
    if (n >= 100000) return '₹' + (n / 100000).toFixed(1) + 'L /mo';
    return '₹' + Math.round(n).toLocaleString('en-IN') + ' /mo';
}

function calcVacation() {
    const basePerPerson = +document.getElementById('vc-dest').value;
    const pax = +document.getElementById('vc-pax').value;
    const months = +document.getElementById('vc-months').value;
    const retPA = +document.getElementById('vc-ret').value / 100;
    const fxPct = +document.getElementById('vc-forex').value / 100;

    document.getElementById('lbl-pax').textContent = pax;
    document.getElementById('lbl-months').textContent = months;
    document.getElementById('lbl-ret').textContent = (retPA * 100).toFixed(1);
    document.getElementById('lbl-forex').textContent = (fxPct * 100).toFixed(0);

    const baseCost = basePerPerson * pax;
    const fxBuffer = baseCost * fxPct;
    const totalNeed = baseCost + fxBuffer;

    // SIP needed: FV = total, monthly rate = retPA/12, n = months
    const rMo = retPA / 12;
    let sip;
    if (Math.abs(rMo) < .0001) sip = totalNeed / months;
    else sip = totalNeed * rMo / (Math.pow(1 + rMo, months) - 1);

    const totalSaved = sip * months;
    const returnsEarned = totalSaved - totalNeed; // will be negative (returns reduce what we need to save)
    // Actually: total we put in = sip*months, total value = totalNeed (target), returns = totalNeed - sip*months
    const returnsGained = totalNeed - sip * months;

    // Update DOM
    document.getElementById('vc-monthly').innerHTML = '₹<span>' + Math.ceil(sip).toLocaleString('en-IN') + '</span> /mo';
    document.getElementById('vc-sub').textContent = 'For ' + fmtVacation(totalNeed) + ' trip in ' + months + ' months (' + pax + ' travellers)';
    document.getElementById('vc-base').textContent = fmtVacation(baseCost);
    document.getElementById('vc-fx').textContent = '+' + fmtVacation(fxBuffer);
    document.getElementById('vc-returns').textContent = '-' + fmtVacation(Math.max(0, returnsGained));
    document.getElementById('vc-total').textContent = fmtVacation(totalNeed);

    // Timeline visual — fill months
    const timeline = document.getElementById('vc-timeline');
    timeline.innerHTML = '';
    const maxShow = Math.min(months, 24);
    for (let i = 1; i <= maxShow; i++) {
        const m = document.createElement('div');
        m.className = 'vr-month';
        const accumulated = sip * (Math.pow(1 + rMo, i) - 1) / rMo;
        if (i === maxShow) m.classList.add('target');
        else if (accumulated >= totalNeed * 0.95) m.classList.add('filled');
        else if (accumulated / totalNeed > 0.1) m.classList.add('filled');
        m.textContent = i <= 6 || i % 3 === 0 ? i : '';
        timeline.appendChild(m);
    }
}

if ($("#vc-dest").length > 0) {
    document.getElementById('vc-dest').addEventListener('change', calcVacation);
    ['vc-pax', 'vc-months', 'vc-ret', 'vc-forex'].forEach(id => {
        document.getElementById(id).addEventListener('input', calcVacation);
    });
    calcVacation();
}

gsap.registerPlugin(ScrollTrigger);

/* ── HERO ENTRANCE ─────────────────────────────── */
// Script line reveal
setTimeout(() => document.getElementById('heroScript').classList.add('show'), 400);

const hl = gsap.timeline({ defaults: { ease: 'power4.out' } });
hl.from('.hero-crumb', { y: 20, opacity: 0, duration: .6, delay: .5 })
    .from('.hero-title .line-inner', { y: '110%', duration: 1, stagger: .14 }, '-=.4')
    .from('.hero-rule', { scaleX: 0, duration: .8, ease: 'power2.inOut' }, '-=.5')
    .from('.hero-desc', { y: 28, opacity: 0, duration: .7 }, '-=.5')
    .from('.hero-cta', { y: 24, opacity: 0, duration: .6 }, '-=.55')
    .from('.hero-trust-item', { y: 20, opacity: 0, stagger: .1, duration: .5 }, '-=.5')
    .from('.invite-card', { y: 60, opacity: 0, duration: 1.1, ease: 'back.out(1.3)' }, '-=1')
    .from('.corner', { scale: .5, opacity: 0, stagger: .12, duration: .6, ease: 'back.out(2)' }, '-=1.2');

/* Fund bar fill on load */
setTimeout(() => {
    document.getElementById('fundBarFill').style.width = '29%';
}, 1200);

/* ── SCROLL TRIGGERS ───────────────────────────── */
gsap.utils.toArray('.anim-up').forEach(el => {
    const d = parseFloat(getComputedStyle(el).getPropertyValue('--delay')) || 0;
    gsap.from(el, {
        y: 55, opacity: 0, duration: .9, delay: d, ease: 'power3.out',
        scrollTrigger: { trigger: el, start: 'top 88%', once: true }
    });
});
gsap.utils.toArray('.anim-left').forEach(el => {
    gsap.from(el, {
        x: -60, opacity: 0, duration: 1, ease: 'power3.out',
        scrollTrigger: { trigger: el, start: 'top 88%', once: true }
    });
});
gsap.utils.toArray('.anim-right').forEach(el => {
    const d = parseFloat(getComputedStyle(el).getPropertyValue('--delay')) || 0;
    gsap.from(el, {
        x: 60, opacity: 0, duration: 1, delay: d, ease: 'power3.out',
        scrollTrigger: { trigger: el, start: 'top 88%', once: true }
    });
});
gsap.utils.toArray('.anim-scale').forEach((el, i) => {
    const d = parseFloat(getComputedStyle(el).getPropertyValue('--delay')) || 0;
    gsap.from(el, {
        scale: .88, opacity: 0, duration: .85, delay: d, ease: 'power3.out',
        scrollTrigger: { trigger: el, start: 'top 90%', once: true }
    });
});
gsap.utils.toArray('.anim-fade').forEach(el => {
    gsap.from(el, {
        opacity: 0, duration: .8,
        scrollTrigger: { trigger: el, start: 'top 90%', once: true }
    });
});

/* ── WHY POINTS STAGGER ────────────────────────── */
ScrollTrigger.create({
    trigger: '.why-points', start: 'top 80%', once: true,
    onEnter: () => gsap.from('.why-pt', { x: 40, opacity: 0, duration: .7, stagger: .1, ease: 'power3.out' })
});

/* ── PLAN CARD 3D HOVER ────────────────────────── */
document.querySelectorAll('.plan-card').forEach(card => {
    card.addEventListener('mousemove', e => {
        const r = card.getBoundingClientRect();
        const x = (e.clientX - r.left) / r.width - .5, y = (e.clientY - r.top) / r.height - .5;
        gsap.to(card, { rotationY: x * 7, rotationX: -y * 5, duration: .35, ease: 'power2.out', transformPerspective: 900 });
    });
    card.addEventListener('mouseleave', () => {
        gsap.to(card, { rotationY: 0, rotationX: 0, duration: .55, ease: 'elastic.out(1,.4)' });
    });
});

/* ── TL CARDS STAGGER ──────────────────────────── */
ScrollTrigger.create({
    trigger: '.tl-grid', start: 'top 82%', once: true,
    onEnter: () => gsap.from('.tl-card', { y: 50, opacity: 0, duration: .7, stagger: .1, ease: 'power3.out' })
});

/* ── COST CARDS ────────────────────────────────── */
ScrollTrigger.create({
    trigger: '.why-cost-cards', start: 'top 85%', once: true,
    onEnter: () => gsap.from('.wcost-card', { scale: .85, opacity: 0, duration: .6, stagger: .1, ease: 'back.out(2)' })
});

/* ── TESTI CARDS ───────────────────────────────── */
ScrollTrigger.create({
    trigger: '.testi-grid', start: 'top 82%', once: true,
    onEnter: () => gsap.from('.testi-card', { y: 50, opacity: 0, duration: .7, stagger: .12, ease: 'power3.out' })
});

/* ── MAGNETIC BUTTONS ──────────────────────────── */
document.querySelectorAll('.btn-gold,.btn-cta-gold,.btn-plan-card.gold').forEach(btn => {
    btn.addEventListener('mousemove', e => {
        const r = btn.getBoundingClientRect();
        gsap.to(btn, { x: (e.clientX - r.left - r.width / 2) * .2, y: (e.clientY - r.top - r.height / 2) * .2, duration: .3, ease: 'power2.out' });
    });
    btn.addEventListener('mouseleave', () => {
        gsap.to(btn, { x: 0, y: 0, duration: .6, ease: 'elastic.out(1,.4)' });
    });
});

/* ── MARQUEE PAUSE ─────────────────────────────── */
const mt = document.getElementById('marqTrack');
mt.addEventListener('mouseenter', () => mt.style.animationPlayState = 'paused');
mt.addEventListener('mouseleave', () => mt.style.animationPlayState = 'running');

/* ── DONUT CHART ───────────────────────────────── */
const donutData = [
    { label: 'Venue & Decor', pct: 30, color: '#C9A84C' },
    { label: 'Catering & Food', pct: 25, color: '#9A7230' },
    { label: 'Photography/Video', pct: 10, color: '#6B1E3B' },
    { label: 'Bridal & Outfits', pct: 14, color: '#E8C97A' },
    { label: 'Music & Entertainment', pct: 7, color: '#8D2E52' },
    { label: 'Honeymoon', pct: 8, color: '#C8102E' },
    { label: 'Misc & Gifts', pct: 6, color: '#D4A853' },
];
const cx = 100, cy = 100, R = 70, strokeW = 28;
function buildDonut(totalL) {
    const svg = document.getElementById('donutSvg');
    svg.innerHTML = '';
    const circ = 2 * Math.PI * R;
    let offset = 0;
    const legend = document.getElementById('donutLegend');
    legend.innerHTML = '';
    donutData.forEach(d => {
        const dash = circ * d.pct / 100;
        const gap = circ - dash;
        const circle = document.createElementNS('http://www.w3.org/2000/svg', 'circle');
        circle.setAttribute('cx', cx); circle.setAttribute('cy', cy); circle.setAttribute('r', R);
        circle.setAttribute('fill', 'none');
        circle.setAttribute('stroke', d.color);
        circle.setAttribute('stroke-width', strokeW);
        circle.setAttribute('stroke-dasharray', `${dash} ${gap}`);
        circle.setAttribute('stroke-dashoffset', -offset);
        circle.setAttribute('stroke-linecap', 'round');
        circle.style.transition = 'stroke-dasharray .6s ease';
        svg.appendChild(circle);
        offset += dash;
        const amtL = Math.round(totalL * d.pct / 100);
        const li = document.createElement('div');
        li.className = 'dl-item';
        li.innerHTML = `<div class="dl-dot" style="background:${d.color}"></div><span class="dl-name">${d.label}</span><span class="dl-pct">${d.pct}%</span><span class="dl-amt">₹${amtL}L</span>`;
        legend.appendChild(li);
    });
    document.getElementById('donutCenter').textContent = '₹' + totalL + 'L';
    document.getElementById('budgetTotalLabel').textContent = '₹' + totalL + ' Lakh';
}
function updateBudget() {
    buildDonut(+document.getElementById('budgetRange').value);
}
// Init donut on scroll
ScrollTrigger.create({
    trigger: '.budget-sec', start: 'top 75%', once: true,
    onEnter: () => { buildDonut(50); gsap.from('#donutSvg', { rotationX: -30, opacity: 0, duration: 1, ease: 'power3.out' }); }
});

/* ── WEDDING CALCULATOR ────────────────────────── */
function fmtC(n) { return n >= 10000000 ? '₹' + (n / 10000000).toFixed(2) + 'Cr' : n >= 100000 ? '₹' + (n / 100000).toFixed(1) + 'L' : '₹' + Math.round(n).toLocaleString('en-IN'); }
function calcWedding() {
    const age = +document.getElementById('wc_age').value;
    const wed = +document.getElementById('wc_wedAge').value;
    const sip = +document.getElementById('wc_sip').value;
    const ret = +document.getElementById('wc_ret').value / 100 / 12;
    const inflR = 0.095;
    const yrs = Math.max(1, wed - age);
    const n = yrs * 12;
    document.getElementById('wcAge').textContent = age + ' years';
    document.getElementById('wcWedAge').textContent = wed + ' years';
    document.getElementById('wcSip').textContent = '₹' + sip.toLocaleString('en-IN');
    document.getElementById('wcReturn').textContent = document.getElementById('wc_ret').value + '%';
    const fv = sip * ((Math.pow(1 + ret, n) - 1) / ret) * (1 + ret);
    const inv = sip * n;
    const inflN = 3000000 * Math.pow(1 + inflR, yrs);
    document.getElementById('wc_total').textContent = fmtC(fv);
    document.getElementById('wc_invested').textContent = fmtC(inv);
    document.getElementById('wc_gain').textContent = fmtC(fv - inv);
    document.getElementById('wc_years').textContent = yrs + ' years';
    document.getElementById('wc_infl').textContent = fmtC(inflN);
    // Update range fill
    ['wc_age', 'wc_wedAge', 'wc_sip', 'wc_ret'].forEach(id => {
        const el = document.getElementById(id);
        const pct = ((el.value - el.min) / (el.max - el.min)) * 100;
        el.style.setProperty('--fill', pct + '%');
    });
}
calcWedding();

/* ── FAQ ───────────────────────────────────────── */
function toggleFaq(btn) {
    const ans = btn.nextElementSibling, open = btn.classList.contains('open');
    document.querySelectorAll('.faq-q.open').forEach(q => { q.classList.remove('open'); q.nextElementSibling.classList.remove('open'); });
    if (!open) {
        btn.classList.add('open'); ans.classList.add('open');
        gsap.from(ans.querySelector('p'), { y: 10, opacity: 0, duration: .4, ease: 'power2.out' });
    }
}

/* ── FORM SUBMIT ───────────────────────────────── */
function submitForm(btn) {
    btn.textContent = 'Sending...'; btn.disabled = true;
    setTimeout(() => {
        btn.textContent = '💍 Your Plan is Ready! Advisor Will Call You';
        btn.style.background = 'linear-gradient(135deg,#22c55e,#166534)';
        gsap.from(btn, { scale: .92, duration: .5, ease: 'back.out(2)' });
    }, 1400);
}
function submitCalc(btn) {
    btn.textContent = 'Preparing Your Fund Plan...'; btn.disabled = true;
    setTimeout(() => {
        btn.textContent = '✦ Plan Sent to Your WhatsApp';
        gsap.from(btn, { scale: .9, duration: .4, ease: 'back.out(2)' });
    }, 1400);
}

/* ── INVITE CARD MILESTONE LOOP ────────────────── */
const milestones = document.querySelectorAll('.inv-milestone');
let mIdx = 1;
setInterval(() => {
    milestones.forEach((m, i) => { if (i <= mIdx) m.classList.add('done'); else m.classList.remove('done'); });
    const pcts = [0, 29, 43, 100];
    document.getElementById('fundBarFill').style.width = (pcts[Math.min(mIdx, 3)]) + '%';
    const amounts = ['₹0L saved', '₹5L saved', '₹13L saved', '₹57L saved'];
    document.getElementById('fundPct').textContent = amounts[Math.min(mIdx, 3)];
    mIdx = (mIdx + 1) % (milestones.length + 1);
}, 2200);

/* ── PAGE FADE IN ──────────────────────────────── */
gsap.from('body', { opacity: 0, duration: .5 });

/* Wedding cost tabs */
document.querySelectorAll('.wc-tab').forEach(tab => {
    tab.addEventListener('click', () => {
        const key = tab.dataset.wctab;
        document.querySelectorAll('.wc-tab').forEach(t => t.classList.remove('active'));
        tab.classList.add('active');
        document.querySelectorAll('.wc-panel').forEach(p => p.classList.remove('active'));
        const t = document.getElementById('wctab-' + key);
        if (t) { t.classList.add('active'); AOS.refresh() }
    });
});

/* Process hover */
document.querySelectorAll('.wpp-step').forEach(s => {
    s.addEventListener('mouseenter', () => {
        document.querySelectorAll('.wpp-step').forEach(x => x.classList.remove('active'));
        s.classList.add('active');
    });
});

/* FAQ */
document.querySelectorAll('.faq-q').forEach(q => {
    q.addEventListener('click', () => {
        const item = q.parentElement, isOpen = item.classList.contains('open');
        document.querySelectorAll('.faq-item.open').forEach(i => i.classList.remove('open'));
        if (!isOpen) item.classList.add('open');
    });
});

/* Floating petals */
const petalsEl = document.getElementById('petalsEl');
['🌸', '🌺', '💐', '✿', '❀', '🏵️'].forEach((p, i) => {
    const el = document.createElement('span');
    el.className = 'petal';
    el.textContent = p;
    el.style.cssText = `left:${5 + Math.random() * 90}%;animation-duration:${6 + Math.random() * 6}s;animation-delay:${Math.random() * 4}s`;
    petalsEl.appendChild(el);
});

/* WEDDING FUND CALCULATOR */
function fmtChildWedding(n) {
    if (n >= 10000000) return '₹' + (n / 10000000).toFixed(2) + ' Cr';
    if (n >= 100000) return '₹' + (n / 100000).toFixed(1) + ' L';
    return '₹' + Math.round(n).toLocaleString('en-IN');
}
function fmtChildWeddingMo(n) {
    if (n >= 100000) return '₹' + (n / 100000).toFixed(1) + 'L /mo';
    return '₹' + Math.round(n).toLocaleString('en-IN') + ' /mo';
}

function calcWedding() {
    const childAge = +document.getElementById('wf-child-age').value;
    const wedAge = +document.getElementById('wf-wed-age').value;
    const todayBudget = +document.getElementById('wf-budget').value;
    const inf = +document.getElementById('wf-inf').value / 100;
    const roi = +document.getElementById('wf-roi').value / 100;
    const goldPct = +document.getElementById('wf-gold').value / 100;

    document.getElementById('lbl-child-age').textContent = childAge;
    document.getElementById('lbl-wed-age').textContent = wedAge;
    document.getElementById('lbl-budget').textContent = '₹' + todayBudget.toLocaleString('en-IN');
    document.getElementById('lbl-inf').textContent = (inf * 100).toFixed(1);
    document.getElementById('lbl-roi').textContent = (roi * 100).toFixed(1);
    document.getElementById('lbl-gold').textContent = (goldPct * 100).toFixed(0);

    const years = Math.max(wedAge - childAge, 1);
    // Inflation-adjusted future cost
    const futureCost = todayBudget * Math.pow(1 + inf, years);

    // Monthly SIP (FV=futureCost, r=monthly roi, n=months)
    const rMo = roi / 12;
    const nMo = years * 12;
    let totalSip;
    if (Math.abs(rMo) < .0001) totalSip = futureCost / nMo;
    else totalSip = futureCost * rMo / (Math.pow(1 + rMo, nMo) - 1);

    const equitySip = totalSip * (1 - goldPct);
    const goldSip = totalSip * goldPct;
    const totalInvested = totalSip * nMo;
    const returnsEarned = futureCost - totalInvested;

    // Delay impact: if started 5 years later
    const delayYears = years - 5;
    let sipIfDelayed;
    if (delayYears > 0) {
        const nMoDelay = delayYears * 12;
        if (Math.abs(rMo) < .0001) sipIfDelayed = futureCost / nMoDelay;
        else sipIfDelayed = futureCost * rMo / (Math.pow(1 + rMo, nMoDelay) - 1);
        const delayPct = Math.round((sipIfDelayed / totalSip - 1) * 100);
        document.getElementById('wf-delay-impact').textContent = '~' + delayPct + '%';
    } else {
        document.getElementById('wf-delay-impact').textContent = 'N/A (already close to wedding)';
    }

    // Update DOM
    document.getElementById('wf-monthly').innerHTML = '₹<span>' + Math.ceil(totalSip).toLocaleString('en-IN') + '</span> /mo';
    document.getElementById('wf-sub').textContent = 'To fund ' + fmtChildWedding(futureCost) + ' wedding in ' + years + ' years (child age ' + childAge + ' → ' + wedAge + ')';
    document.getElementById('wf-future-cost').innerHTML = fmtChildWedding(futureCost).replace('₹', '₹<span>') + ' </span>';
    document.getElementById('wf-future-cost').innerHTML = '<span>' + fmtChildWedding(futureCost) + '</span>';
    document.getElementById('wf-years').innerHTML = years + ' <span>Yrs</span>';
    document.getElementById('wf-equity-sip').textContent = fmtChildWeddingMo(equitySip);
    document.getElementById('wf-gold-sip').textContent = fmtChildWeddingMo(goldSip);
    document.getElementById('wf-returns').textContent = fmtChildWedding(Math.max(0, returnsEarned)) + ' growth on investment';
}

if( $("#wf-child-age").length > 0) {
    ['wf-child-age', 'wf-wed-age', 'wf-budget', 'wf-inf', 'wf-roi', 'wf-gold'].forEach(id => {
        document.getElementById(id).addEventListener('input', calcWedding);
    });
    calcWedding();
}