<?php include_once ('elements/header.php'); ?>

    <!-- Custom CSS -->
    <link href="<?php echo UrlHelper::asset('css/wealth-management.css'); ?>" rel="stylesheet">

    <!-- ===================== BREADCRUMB ===================== -->
    <div class="breadcrumb-bar">
        <div class="container">
            <div class="breadcrumb">
                <a href="wealth-bridge.html"><i class="fas fa-home"></i> Home</a>
                <span>›</span><a href="#">Our Services</a>
                <span>›</span><span class="current">Wealth Management</span>
            </div>
        </div>
    </div>

    <!-- ===================== HERO ===================== -->
    <section class="service-hero" id="top">
        <div class="sh-bg"></div>
        <div class="sh-grid"></div>
        <div class="sh-line"></div>
        <div class="sh-line2"></div>
        <div class="sh-line3"></div>

        <div class="container">
            <div class="sh-content">
                <div class="sh-left">
                    <div class="sh-tag"><i class="fas fa-gem"></i> Wealth Management · HNI &amp; UHNI</div>
                    <h1 class="sh-title">
                        Preserve, Grow,
                        <em>&amp; Transfer</em>
                        Your Legacy
                    </h1>
                    <p class="sh-desc">India's most comprehensive wealth management service — combining sophisticated
                        multi-asset portfolio management, estate planning, tax optimisation, and family office services
                        for HNIs and UHNIs with ₹1 crore+ investable assets.</p>
                    <div class="sh-actions">
                        <a href="#cta" class="btn btn-gold">Schedule Private Consultation <i
                                class="fas fa-crown"></i></a>
                        <a href="#overview" class="btn btn-ghost">Explore Services <i
                                class="fas fa-chevron-down"></i></a>
                    </div>
                    <div class="sh-quick-stats">
                        <div class="sh-qs">
                            <div class="sh-qs-num">₹2400<span>Cr+</span></div>
                            <div class="sh-qs-label">Total AUM Managed</div>
                        </div>
                        <div class="sh-qs">
                            <div class="sh-qs-num">420<span>+</span></div>
                            <div class="sh-qs-label">HNI/UHNI Families</div>
                        </div>
                        <div class="sh-qs">
                            <div class="sh-qs-num">18.4<span>%</span></div>
                            <div class="sh-qs-label">Avg Portfolio CAGR</div>
                        </div>
                        <div class="sh-qs">
                            <div class="sh-qs-num">18<span>+ Yrs</span></div>
                            <div class="sh-qs-label">Proven Track Record</div>
                        </div>
                    </div>
                </div>

                <!-- HERO RIGHT — Portfolio Dashboard -->
                <div class="sh-right" data-aos="fade-left" data-aos-delay="200">
                    <div class="sh-float f1">
                        <div class="sf-label">Portfolio NAV</div>
                        <div class="sf-val">₹24.6<span>Cr</span></div>
                        <div class="sf-sub">+₹4.2Cr this year · +20.6%</div>
                    </div>

                    <div class="sh-card">
                        <div class="sh-card-header">
                            <div class="sh-card-label">Multi-Asset Portfolio Dashboard</div>
                            <div class="sh-card-badge"><span></span> Live Portfolio</div>
                        </div>

                        <!-- Portfolio donut -->
                        <div class="portfolio-donut-wrap">
                            <div class="pd-svg-wrap">
                                <svg viewBox="0 0 110 110" xmlns="http://www.w3.org/2000/svg">
                                    <!-- circumference for r=42 ≈ 263.9 -->
                                    <circle cx="55" cy="55" r="42" fill="none" stroke="#1a1a1a" stroke-width="16" />
                                    <!-- Equity 40% = 105.6 -->
                                    <circle cx="55" cy="55" r="42" fill="none" stroke="#C8102E" stroke-width="16"
                                        stroke-dasharray="105.6 158.3" stroke-dashoffset="66" stroke-linecap="butt"
                                        style="transform-origin:center;transform:rotate(-90deg)" />
                                    <!-- Debt 25% = 66 -->
                                    <circle cx="55" cy="55" r="42" fill="none" stroke="#D4A017" stroke-width="16"
                                        stroke-dasharray="66 198" stroke-dashoffset="-39.6" stroke-linecap="butt"
                                        style="transform-origin:center;transform:rotate(-90deg)" />
                                    <!-- Alternates 20% = 52.8 -->
                                    <circle cx="55" cy="55" r="42" fill="none" stroke="#2d6a9f" stroke-width="16"
                                        stroke-dasharray="52.8 211.1" stroke-dashoffset="-105.6" stroke-linecap="butt"
                                        style="transform-origin:center;transform:rotate(-90deg)" />
                                    <!-- Real Estate 10% = 26.4 -->
                                    <circle cx="55" cy="55" r="42" fill="none" stroke="#15803d" stroke-width="16"
                                        stroke-dasharray="26.4 237.5" stroke-dashoffset="-158.4" stroke-linecap="butt"
                                        style="transform-origin:center;transform:rotate(-90deg)" />
                                    <!-- Gold 5% = 13.2 -->
                                    <circle cx="55" cy="55" r="42" fill="none" stroke="#888" stroke-width="16"
                                        stroke-dasharray="13.2 250.7" stroke-dashoffset="-184.8" stroke-linecap="butt"
                                        style="transform-origin:center;transform:rotate(-90deg)" />
                                </svg>
                                <div class="pd-center">
                                    <div class="val">24.6Cr</div>
                                    <div class="lbl">Portfolio</div>
                                </div>
                            </div>
                            <div class="pd-legend">
                                <div class="pdl-row">
                                    <div class="pdl-dot" style="background:#C8102E"></div><span class="pdl-name">Equity
                                        &amp; PMS</span><span class="pdl-pct">40%</span>
                                </div>
                                <div class="pdl-row">
                                    <div class="pdl-dot" style="background:#D4A017"></div><span class="pdl-name">Debt
                                        &amp; Bonds</span><span class="pdl-pct">25%</span>
                                </div>
                                <div class="pdl-row">
                                    <div class="pdl-dot" style="background:#2d6a9f"></div><span
                                        class="pdl-name">Alternates / AIF</span><span class="pdl-pct">20%</span>
                                </div>
                                <div class="pdl-row">
                                    <div class="pdl-dot" style="background:#15803d"></div><span class="pdl-name">Real
                                        Estate</span><span class="pdl-pct">10%</span>
                                </div>
                                <div class="pdl-row">
                                    <div class="pdl-dot" style="background:#888"></div><span class="pdl-name">Gold /
                                        SGBs</span><span class="pdl-pct">5%</span>
                                </div>
                            </div>
                        </div>

                        <div class="sh-divider"></div>
                        <div class="sh-metrics">
                            <div class="sh-metric">
                                <div class="sh-metric-label">XIRR (5 Year)</div>
                                <div class="sh-metric-val">18.4%<span class="up"> ▲ vs 12% benchmark</span></div>
                            </div>
                            <div class="sh-metric">
                                <div class="sh-metric-label">Alpha Generated</div>
                                <div class="sh-metric-val">+6.4%<span class="gold"> annually</span></div>
                            </div>
                            <div class="sh-metric">
                                <div class="sh-metric-label">Max Drawdown</div>
                                <div class="sh-metric-val">-11.2%<span class="gold"> managed</span></div>
                            </div>
                            <div class="sh-metric">
                                <div class="sh-metric-label">Sharpe Ratio</div>
                                <div class="sh-metric-val">1.84<span class="up"> Excellent</span></div>
                            </div>
                        </div>
                    </div>

                    <div class="sh-float f2">
                        <div class="sf-label">Tax Saved FY 2025-26</div>
                        <div class="sf-val">₹38.4<span>L</span></div>
                        <div class="sf-sub">Legal tax optimisation strategies</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Market ticker -->
        <div class="ticker-strip">
            <div class="ticker-track">
                <span class="ticker-item"><span class="ticker-neu">NIFTY 50</span> <span class="ticker-up">▲ 24,284
                        (+0.82%)</span></span>
                <span class="ticker-item">·</span>
                <span class="ticker-item"><span class="ticker-neu">SENSEX</span> <span class="ticker-up">▲ 80,116
                        (+0.76%)</span></span>
                <span class="ticker-item">·</span>
                <span class="ticker-item"><span class="ticker-neu">GOLD</span> <span class="ticker-up">▲ ₹73,200/10g
                        (+0.4%)</span></span>
                <span class="ticker-item">·</span>
                <span class="ticker-item"><span class="ticker-neu">USD/INR</span> <span class="ticker-dn">▼
                        83.42</span></span>
                <span class="ticker-item">·</span>
                <span class="ticker-item"><span class="ticker-neu">10Y G-SEC</span> <span
                        class="ticker-neu">6.98%</span></span>
                <span class="ticker-item">·</span>
                <span class="ticker-item"><span class="ticker-neu">NIFTY MIDCAP</span> <span class="ticker-up">▲ 51,840
                        (+1.2%)</span></span>
                <span class="ticker-item">·</span>
                <span class="ticker-item"><span class="ticker-neu">NIFTY 50</span> <span class="ticker-up">▲ 24,284
                        (+0.82%)</span></span>
                <span class="ticker-item">·</span>
                <span class="ticker-item"><span class="ticker-neu">SENSEX</span> <span class="ticker-up">▲ 80,116
                        (+0.76%)</span></span>
                <span class="ticker-item">·</span>
                <span class="ticker-item"><span class="ticker-neu">GOLD</span> <span class="ticker-up">▲ ₹73,200/10g
                        (+0.4%)</span></span>
                <span class="ticker-item">·</span>
                <span class="ticker-item"><span class="ticker-neu">USD/INR</span> <span class="ticker-dn">▼
                        83.42</span></span>
                <span class="ticker-item">·</span>
                <span class="ticker-item"><span class="ticker-neu">10Y G-SEC</span> <span
                        class="ticker-neu">6.98%</span></span>
                <span class="ticker-item">·</span>
                <span class="ticker-item"><span class="ticker-neu">NIFTY MIDCAP</span> <span class="ticker-up">▲ 51,840
                        (+1.2%)</span></span>
                <span class="ticker-item">·</span>
            </div>
        </div>
    </section>

    <!-- ===================== WHAT IS WEALTH MANAGEMENT ===================== -->
    <section class="section wm-overview" id="overview">
        <div class="container">
            <div class="wmo-grid">
                <div class="wmo-sticky" data-aos="fade-right">
                    <span class="section-label gold">Beyond Investment Planning</span>
                    <h2 class="section-title">What <span>Wealth Management</span> Really Means</h2>
                    <div class="wmo-body">
                        <p>Wealth management is not simply investing money. It is the <strong>comprehensive
                                orchestration of your entire financial life</strong> — combining investment strategy,
                            tax planning, estate architecture, business succession, and risk management into one
                            cohesive strategy.</p>
                        <div class="wmo-highlight">"For HNIs and UHNIs, the greatest financial risk is not poor
                            investment returns — it is poor coordination between their investment advisor, tax
                            consultant, legal advisor, and insurance broker. Wealth management integrates all four into
                            one seamless strategy."</div>
                        <p>At Wealth Bridge, we serve as your <strong>single point of financial intelligence</strong> —
                            coordinating every aspect of your financial life, proactively managing risk, and ensuring
                            your wealth serves every purpose you intend: growth, income, protection, and legacy.</p>
                    </div>
                    <div style="margin-top:28px;display:flex;gap:12px;flex-wrap:wrap">
                        <a href="#cta" class="btn btn-gold">Start Wealth Management <i
                                class="fas fa-arrow-right"></i></a>
                        <a href="#tiers" class="btn btn-outline">View Plans <i class="fas fa-chevron-down"></i></a>
                    </div>
                </div>

                <div data-aos="fade-left">
                    <p
                        style="font-size:12px;font-weight:700;letter-spacing:2px;text-transform:uppercase;color:var(--gray-500);margin-bottom:14px">
                        INVESTMENT PLANNING vs WEALTH MANAGEMENT</p>
                    <div class="wm-vs">
                        <div class="wm-vs-col">
                            <div class="wm-vs-label">Investment Planning</div>
                            <div class="wm-vs-list">
                                <div class="wm-vs-item"><i class="fas fa-minus-circle"></i> Mutual funds &amp; stock
                                    recommendations</div>
                                <div class="wm-vs-item"><i class="fas fa-minus-circle"></i> Basic tax deduction guidance
                                </div>
                                <div class="wm-vs-item"><i class="fas fa-minus-circle"></i> Annual or quarterly
                                    portfolio review</div>
                                <div class="wm-vs-item"><i class="fas fa-minus-circle"></i> Single advisor, single
                                    domain</div>
                                <div class="wm-vs-item"><i class="fas fa-minus-circle"></i> Standard insurance
                                    recommendations</div>
                                <div class="wm-vs-item"><i class="fas fa-minus-circle"></i> Reactive — responds when you
                                    ask</div>
                                <div class="wm-vs-item"><i class="fas fa-minus-circle"></i> No estate or succession
                                    planning</div>
                                <div class="wm-vs-item"><i class="fas fa-minus-circle"></i> No family financial
                                    coordination</div>
                            </div>
                        </div>
                        <div class="wm-vs-col premium">
                            <div class="wm-vs-label">Wealth Management</div>
                            <div class="wm-vs-list">
                                <div class="wm-vs-item"><i class="fas fa-check-circle"></i> Multi-asset portfolio (PMS,
                                    AIF, REITs, bonds)</div>
                                <div class="wm-vs-item"><i class="fas fa-check-circle"></i> Advanced tax structuring
                                    &amp; optimisation</div>
                                <div class="wm-vs-item"><i class="fas fa-check-circle"></i> Monthly portfolio monitoring
                                    &amp; rebalancing</div>
                                <div class="wm-vs-item"><i class="fas fa-check-circle"></i> Integrated team: investments
                                    + tax + legal</div>
                                <div class="wm-vs-item"><i class="fas fa-check-circle"></i> Comprehensive risk &amp;
                                    liability management</div>
                                <div class="wm-vs-item"><i class="fas fa-check-circle"></i> Proactive — anticipates
                                    before you ask</div>
                                <div class="wm-vs-item"><i class="fas fa-check-circle"></i> Will, trust, succession
                                    &amp; estate planning</div>
                                <div class="wm-vs-item"><i class="fas fa-check-circle"></i> Whole-family financial
                                    coordination</div>
                            </div>
                        </div>
                    </div>
                    <!-- key pillars -->
                    <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:10px">
                        <div style="background:white;border:1px solid var(--gray-200);border-radius:8px;padding:14px;text-align:center;transition:var(--transition)"
                            onmouseover="this.style.borderColor='var(--gold)'"
                            onmouseout="this.style.borderColor='var(--gray-200)'">
                            <div style="font-size:24px;margin-bottom:6px">📊</div>
                            <div style="font-size:12px;font-weight:700;color:var(--black)">Portfolio</div>
                        </div>
                        <div style="background:white;border:1px solid var(--gray-200);border-radius:8px;padding:14px;text-align:center;transition:var(--transition)"
                            onmouseover="this.style.borderColor='var(--gold)'"
                            onmouseout="this.style.borderColor='var(--gray-200)'">
                            <div style="font-size:24px;margin-bottom:6px">📜</div>
                            <div style="font-size:12px;font-weight:700;color:var(--black)">Estate</div>
                        </div>
                        <div style="background:white;border:1px solid var(--gray-200);border-radius:8px;padding:14px;text-align:center;transition:var(--transition)"
                            onmouseover="this.style.borderColor='var(--gold)'"
                            onmouseout="this.style.borderColor='var(--gray-200)'">
                            <div style="font-size:24px;margin-bottom:6px">🧾</div>
                            <div style="font-size:12px;font-weight:700;color:var(--black)">Taxation</div>
                        </div>
                        <div style="background:white;border:1px solid var(--gray-200);border-radius:8px;padding:14px;text-align:center;transition:var(--transition)"
                            onmouseover="this.style.borderColor='var(--gold)'"
                            onmouseout="this.style.borderColor='var(--gray-200)'">
                            <div style="font-size:24px;margin-bottom:6px">🛡️</div>
                            <div style="font-size:12px;font-weight:700;color:var(--black)">Protection</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== SERVICE TIERS ===================== -->
    <section class="section wm-tiers" id="tiers">
        <div class="container">
            <div class="section-header center" data-aos="fade-up">
                <span class="section-label gold">Wealth Management Tiers</span>
                <h2 class="section-title">Choose Your <span>Level of Service</span></h2>
                <p class="section-sub">Three levels of comprehensive wealth management — each with progressively deeper
                    service, access, and personalisation.</p>
            </div>
            <div class="tiers-grid">
                <div class="tier-card" data-aos="fade-up" data-aos-delay="0">
                    <div class="tier-header" style="background:linear-gradient(135deg,#1a1a2e,#2d2d4e)">
                        <div class="tier-badge">Silver Tier</div>
                        <div class="tier-name">Wealth Essentials</div>
                        <div class="tier-min">Minimum: <span>₹1 Crore</span> investable assets</div>
                    </div>
                    <div class="tier-body">
                        <div class="tier-features">
                            <div class="tier-feature"><i class="fas fa-check-circle"></i> Comprehensive financial plan +
                                IPS</div>
                            <div class="tier-feature"><i class="fas fa-check-circle"></i> Multi-asset portfolio
                                construction</div>
                            <div class="tier-feature"><i class="fas fa-check-circle"></i> Quarterly portfolio review
                                &amp; rebalancing</div>
                            <div class="tier-feature"><i class="fas fa-check-circle"></i> Direct equity + MF + bond
                                advisory</div>
                            <div class="tier-feature"><i class="fas fa-check-circle"></i> Advanced tax planning (LTCG,
                                income split)</div>
                            <div class="tier-feature"><i class="fas fa-check-circle"></i> Term + health insurance
                                optimisation</div>
                            <div class="tier-feature"><i class="fas fa-check-circle"></i> Dedicated relationship manager
                            </div>
                            <div class="tier-feature"><i class="fas fa-check-circle"></i> Annual estate planning review
                            </div>
                        </div>
                        <a href="#cta" class="btn btn-outline tier-cta">Get Started <i
                                class="fas fa-arrow-right"></i></a>
                    </div>
                </div>

                <div class="tier-card featured" data-aos="fade-up" data-aos-delay="100">
                    <div class="tier-header" style="background:linear-gradient(135deg,var(--gold-dark),var(--gold))">
                        <div class="tier-badge" style="background:rgba(0,0,0,.2);color:var(--black)">Most Comprehensive
                        </div>
                        <div class="tier-name" style="color:var(--black)">Wealth Premier</div>
                        <div class="tier-min" style="color:rgba(0,0,0,.6)">Minimum: <span style="color:var(--black)">₹5
                                Crore</span> investable assets</div>
                    </div>
                    <div class="tier-body">
                        <div class="tier-features">
                            <div class="tier-feature gold"><i class="fas fa-crown"></i> Everything in Essentials, PLUS:
                            </div>
                            <div class="tier-feature"><i class="fas fa-check-circle"></i> PMS (Portfolio Management
                                Service) access</div>
                            <div class="tier-feature"><i class="fas fa-check-circle"></i> AIF (Alternative Investment
                                Fund) advisory</div>
                            <div class="tier-feature"><i class="fas fa-check-circle"></i> Monthly portfolio review &amp;
                                active rebalancing</div>
                            <div class="tier-feature"><i class="fas fa-check-circle"></i> Offshore investment guidance
                                (international)</div>
                            <div class="tier-feature"><i class="fas fa-check-circle"></i> Comprehensive estate +
                                succession planning</div>
                            <div class="tier-feature"><i class="fas fa-check-circle"></i> Family financial coordination
                                (spouse + children)</div>
                            <div class="tier-feature"><i class="fas fa-check-circle"></i> Dedicated Senior Wealth
                                Advisor + RM</div>
                            <div class="tier-feature"><i class="fas fa-check-circle"></i> Priority 4-hour response
                                guarantee</div>
                            <div class="tier-feature"><i class="fas fa-check-circle"></i> Complimentary family legal
                                will drafting</div>
                        </div>
                        <a href="#cta" class="btn btn-gold tier-cta">Schedule Consultation <i
                                class="fas fa-crown"></i></a>
                    </div>
                </div>

                <div class="tier-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="tier-header" style="background:linear-gradient(135deg,#1a0a0d,#2a0f15)">
                        <div class="tier-badge" style="background:rgba(200,16,46,.25);color:var(--red-light)">Ultra HNI
                        </div>
                        <div class="tier-name">Family Office</div>
                        <div class="tier-min">Minimum: <span>₹25 Crore</span> investable assets</div>
                    </div>
                    <div class="tier-body">
                        <div class="tier-features">
                            <div class="tier-feature gold"><i class="fas fa-gem"></i> Everything in Premier, PLUS:</div>
                            <div class="tier-feature"><i class="fas fa-check-circle"></i> Single-family office services
                            </div>
                            <div class="tier-feature"><i class="fas fa-check-circle"></i> Multi-generational wealth
                                planning</div>
                            <div class="tier-feature"><i class="fas fa-check-circle"></i> Business structuring &amp;
                                valuation advisory</div>
                            <div class="tier-feature"><i class="fas fa-check-circle"></i> Philanthropic planning &amp;
                                CSR structuring</div>
                            <div class="tier-feature"><i class="fas fa-check-circle"></i> Private equity &amp; pre-IPO
                                deal access</div>
                            <div class="tier-feature"><i class="fas fa-check-circle"></i> Full concierge financial
                                service</div>
                            <div class="tier-feature"><i class="fas fa-check-circle"></i> Dedicated advisory council (3
                                senior advisors)</div>
                            <div class="tier-feature"><i class="fas fa-check-circle"></i> Annual family wealth summit
                            </div>
                            <div class="tier-feature"><i class="fas fa-check-circle"></i> Trust &amp; HUF structuring
                            </div>
                        </div>
                        <a href="#cta" class="btn btn-primary tier-cta">Apply for Family Office <i
                                class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== PORTFOLIO CONSTRUCTION ===================== -->
    <section class="section portfolio-construction" id="portfolio">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <span class="section-label gold">Investment Philosophy</span>
                <h2 class="section-title">How We <span>Build and Manage</span> Your Portfolio</h2>
                <p class="section-sub">A disciplined, multi-asset approach engineered for superior risk-adjusted returns
                    — built individually for each client, never from a template.</p>
            </div>
            <div class="pc-grid">
                <div class="pc-visual" data-aos="fade-right">
                    <div class="pc-vis-title">Sample HNI Portfolio — ₹5 Crore (Balanced Growth)</div>
                    <div class="alloc-rows">
                        <div class="alloc-row">
                            <div class="alloc-label">Large Cap Equity</div>
                            <div class="alloc-bar-bg">
                                <div class="alloc-bar"
                                    style="width:25%;background:linear-gradient(90deg,#C8102E,#ff6b6b);animation-delay:.1s">
                                    ₹1.25Cr</div>
                            </div>
                            <div class="alloc-pct">25%</div>
                        </div>
                        <div class="alloc-row">
                            <div class="alloc-label">Mid/Small Cap</div>
                            <div class="alloc-bar-bg">
                                <div class="alloc-bar"
                                    style="width:15%;background:linear-gradient(90deg,#ff6b6b,#ff9999);animation-delay:.15s">
                                    ₹75L</div>
                            </div>
                            <div class="alloc-pct">15%</div>
                        </div>
                        <div class="alloc-row">
                            <div class="alloc-label">AIF / PMS</div>
                            <div class="alloc-bar-bg">
                                <div class="alloc-bar"
                                    style="width:20%;background:linear-gradient(90deg,#D4A017,#F0C842);animation-delay:.2s">
                                    ₹1Cr</div>
                            </div>
                            <div class="alloc-pct">20%</div>
                        </div>
                        <div class="alloc-row">
                            <div class="alloc-label">Corporate Bonds</div>
                            <div class="alloc-bar-bg">
                                <div class="alloc-bar"
                                    style="width:15%;background:linear-gradient(90deg,#2563eb,#60a5fa);animation-delay:.25s">
                                    ₹75L</div>
                            </div>
                            <div class="alloc-pct">15%</div>
                        </div>
                        <div class="alloc-row">
                            <div class="alloc-label">Real Estate / REITs</div>
                            <div class="alloc-bar-bg">
                                <div class="alloc-bar"
                                    style="width:12%;background:linear-gradient(90deg,#15803d,#4ade80);animation-delay:.3s">
                                    ₹60L</div>
                            </div>
                            <div class="alloc-pct">12%</div>
                        </div>
                        <div class="alloc-row">
                            <div class="alloc-label">Intl. Equity / ETFs</div>
                            <div class="alloc-bar-bg">
                                <div class="alloc-bar"
                                    style="width:8%;background:linear-gradient(90deg,#7c3aed,#a78bfa);animation-delay:.35s">
                                    ₹40L</div>
                            </div>
                            <div class="alloc-pct">8%</div>
                        </div>
                        <div class="alloc-row">
                            <div class="alloc-label">Gold / SGBs</div>
                            <div class="alloc-bar-bg">
                                <div class="alloc-bar"
                                    style="width:5%;background:linear-gradient(90deg,#8a6500,#D4A017);animation-delay:.4s">
                                    ₹25L</div>
                            </div>
                            <div class="alloc-pct">5%</div>
                        </div>
                    </div>
                    <div class="pc-divider"></div>
                    <div class="pc-stats">
                        <div class="pc-stat">
                            <div class="pc-stat-val gold">18.4%</div>
                            <div class="pc-stat-lbl">Expected XIRR</div>
                        </div>
                        <div class="pc-stat">
                            <div class="pc-stat-val green">+6.4%</div>
                            <div class="pc-stat-lbl">Alpha (vs benchmark)</div>
                        </div>
                        <div class="pc-stat">
                            <div class="pc-stat-val" style="color:white">1.84</div>
                            <div class="pc-stat-lbl">Sharpe Ratio</div>
                        </div>
                    </div>
                </div>

                <div class="pc-principles" data-aos="fade-left">
                    <div class="pcp-card">
                        <div class="pcp-icon" style="background:rgba(200,16,46,.08);color:var(--red)"><i
                                class="fas fa-layer-group"></i></div>
                        <div>
                            <h4>True Multi-Asset Diversification</h4>
                            <p>We allocate across 7+ asset classes — equity, debt, gold, real estate, alternatives,
                                international, and private equity — reducing correlation risk while maximising return
                                potential.</p>
                        </div>
                    </div>
                    <div class="pcp-card">
                        <div class="pcp-icon" style="background:rgba(212,160,23,.08);color:var(--gold-dark)"><i
                                class="fas fa-balance-scale"></i></div>
                        <div>
                            <h4>Risk-Adjusted Returns</h4>
                            <p>We target maximum Sharpe ratio, not maximum returns. Preserving capital in downturns is
                                as important as capturing upturns — our portfolios consistently outperform on
                                risk-adjusted basis.</p>
                        </div>
                    </div>
                    <div class="pcp-card">
                        <div class="pcp-icon" style="background:rgba(74,222,128,.08);color:#15803d"><i
                                class="fas fa-file-invoice-dollar"></i></div>
                        <div>
                            <h4>Tax-Efficient Portfolio Architecture</h4>
                            <p>Asset placement strategy — knowing which investments go in which account — can save ₹5–25
                                lakhs annually at HNI levels through LTCG harvesting, ELSS timing, and income splitting.
                            </p>
                        </div>
                    </div>
                    <div class="pcp-card">
                        <div class="pcp-icon" style="background:rgba(59,130,246,.08);color:#2563eb"><i
                                class="fas fa-sync-alt"></i></div>
                        <div>
                            <h4>Dynamic Rebalancing &amp; Tactical Allocation</h4>
                            <p>Monthly monitoring with systematic rebalancing. Tactical allocation shifts during market
                                extremes — adding equity on deep corrections, reducing on excessive valuations.</p>
                        </div>
                    </div>
                    <div class="pcp-card">
                        <div class="pcp-icon" style="background:rgba(139,92,246,.08);color:#7c3aed"><i
                                class="fas fa-shield-alt"></i></div>
                        <div>
                            <h4>Downside Protection Strategy</h4>
                            <p>Hedging strategies, defensive allocation buckets, and systematic drawdown management
                                ensure your portfolio weathers bear markets with minimal permanent capital loss.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== ASSET ALLOCATION TOOL ===================== -->
    <section class="section asset-tool" id="allocator">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <span class="section-label">Interactive Tool</span>
                <h2 class="section-title">Build Your Ideal <span>Asset Allocation</span></h2>
                <p class="section-sub">Adjust your investment profile and see how our wealth management team would
                    structure your portfolio for optimal risk-adjusted returns.</p>
            </div>
            <div class="at-grid" data-aos="fade-up">
                <div class="at-form">
                    <div class="at-title">Portfolio Allocation Builder</div>
                    <div class="at-sub">Set your profile and see your recommended allocation instantly.</div>

                    <div class="at-label">Total Investable Assets <span id="lbl-assets">₹5 Crore</span></div>
                    <input type="range" class="range-input" id="at-assets" min="1" max="50" step="0.5" value="5">

                    <div class="at-label">Investment Horizon <span id="lbl-horizon">10 years</span></div>
                    <input type="range" class="range-input" id="at-horizon" min="3" max="30" value="10">

                    <div class="at-label">Age <span id="lbl-atage">45</span></div>
                    <input type="range" class="range-input" id="at-age" min="25" max="70" value="45">

                    <div style="margin-bottom:6px">
                        <div class="at-label">Risk Appetite <span id="lbl-risk">Balanced</span></div>
                    </div>
                    <select class="at-select" id="at-risk">
                        <option value="conservative">Conservative — Protect capital first</option>
                        <option value="balanced" selected>Balanced — Growth with stability</option>
                        <option value="growth">Growth — Long-term wealth creation</option>
                        <option value="aggressive">Aggressive — Maximum growth</option>
                    </select>

                    <div style="margin-bottom:6px">
                        <div class="at-label">Income Need from Portfolio <span id="lbl-income">No</span></div>
                    </div>
                    <select class="at-select" id="at-income">
                        <option value="no" selected>No — Pure accumulation</option>
                        <option value="partial">Partial — 3–4% withdrawal</option>
                        <option value="full">Yes — Monthly income needed</option>
                    </select>

                    <div
                        style="background:rgba(212,160,23,.08);border:1px solid rgba(212,160,23,.2);border-radius:8px;padding:14px">
                        <p style="font-size:12.5px;color:var(--gray-700);line-height:1.7"><i class="fas fa-info-circle"
                                style="color:var(--gold-dark);margin-right:6px"></i>This is an indicative allocation.
                            Your actual portfolio will be customised in detail during your private consultation with our
                            senior wealth advisor.</p>
                    </div>
                </div>

                <div class="at-result">
                    <div class="atr-title">Recommended Allocation</div>
                    <div class="atr-alloc" id="atAlloc">
                        <!-- Filled by JS -->
                    </div>
                    <div class="atr-divider"></div>
                    <p
                        style="font-size:11px;color:rgba(255,255,255,.4);letter-spacing:1.5px;text-transform:uppercase;margin-bottom:12px">
                        Projected Outcomes</p>
                    <div class="atr-projections">
                        <div class="atrp-card">
                            <div class="atrp-label">Expected XIRR</div>
                            <div class="atrp-val gold" id="atr-xirr">14–17%</div>
                        </div>
                        <div class="atrp-card">
                            <div class="atrp-label">5-Year Corpus</div>
                            <div class="atrp-val green" id="atr-corpus">₹9.8 Cr</div>
                        </div>
                        <div class="atrp-card">
                            <div class="atrp-label">Risk Level</div>
                            <div class="atrp-val" id="atr-risk" style="color:rgba(255,255,255,.8)">Moderate</div>
                        </div>
                        <div class="atrp-card">
                            <div class="atrp-label">Max Drawdown</div>
                            <div class="atrp-val" id="atr-dd" style="color:#f87171">~15%</div>
                        </div>
                    </div>
                    <div style="margin-top:20px">
                        <a href="#cta" class="btn btn-gold" style="width:100%;justify-content:center">Get My Custom
                            Portfolio Plan <i class="fas fa-crown"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== ALTERNATIVE INVESTMENTS ===================== -->
    <section class="section alternatives" id="alternatives">
        <div class="container">
            <div class="section-header center" data-aos="fade-up">
                <span class="section-label gold">Beyond Mutual Funds</span>
                <h2 class="section-title">Alternative Investment <span>Opportunities</span></h2>
                <p class="section-sub">HNI portfolios access investment opportunities unavailable to retail investors —
                    offering superior returns, lower correlation, and meaningful portfolio diversification.</p>
            </div>
            <div class="alt-grid">
                <div class="alt-card" style="border-color:rgba(200,16,46,.15)" data-aos="fade-up" data-aos-delay="0">
                    <div style="position:absolute;bottom:0;left:0;right:0;height:3px;background:var(--red);transform:scaleX(0);transition:transform .3s"
                        class="alt-accent"></div>
                    <div class="alt-icon" style="background:rgba(200,16,46,.08);color:var(--red)"><i
                            class="fas fa-chart-line"></i></div>
                    <h3>PMS (Portfolio Management Service)</h3>
                    <p>Individually managed equity portfolios by SEBI-registered portfolio managers — customised stock
                        selection with direct stock ownership and full transparency.</p>
                    <div class="alt-stats">
                        <div class="alt-stat">
                            <div class="alt-stat-label">Min. Investment</div>
                            <div class="alt-stat-val">₹50 Lakhs</div>
                        </div>
                        <div class="alt-stat">
                            <div class="alt-stat-label">Avg Historical Return</div>
                            <div class="alt-stat-val green">18–24% CAGR</div>
                        </div>
                        <div class="alt-stat">
                            <div class="alt-stat-label">Risk Level</div>
                            <div class="alt-stat-val" style="color:var(--red)">High</div>
                        </div>
                        <div class="alt-stat">
                            <div class="alt-stat-label">Transparency</div>
                            <div class="alt-stat-val green">Full — direct hold</div>
                        </div>
                    </div>
                    <span class="alt-min"><i class="fas fa-gem"></i> Min ₹50L · SEBI Regulated</span>
                </div>

                <div class="alt-card" data-aos="fade-up" data-aos-delay="60">
                    <div class="alt-icon" style="background:rgba(212,160,23,.08);color:var(--gold-dark)"><i
                            class="fas fa-rocket"></i></div>
                    <h3>AIF (Alternative Investment Funds)</h3>
                    <p>Category I/II/III AIFs — venture capital, private equity, hedge funds, and structured credit —
                        generating uncorrelated returns for sophisticated investors.</p>
                    <div class="alt-stats">
                        <div class="alt-stat">
                            <div class="alt-stat-label">Min. Investment</div>
                            <div class="alt-stat-val">₹1 Crore</div>
                        </div>
                        <div class="alt-stat">
                            <div class="alt-stat-label">Avg Target Return</div>
                            <div class="alt-stat-val gold">20–28% IRR</div>
                        </div>
                        <div class="alt-stat">
                            <div class="alt-stat-label">Lock-in Period</div>
                            <div class="alt-stat-val">3–7 Years</div>
                        </div>
                        <div class="alt-stat">
                            <div class="alt-stat-label">Diversification</div>
                            <div class="alt-stat-val green">Uncorrelated</div>
                        </div>
                    </div>
                    <span class="alt-min"><i class="fas fa-lock"></i> Min ₹1Cr · SEBI Cat I/II/III</span>
                </div>

                <div class="alt-card" data-aos="fade-up" data-aos-delay="120">
                    <div class="alt-icon" style="background:rgba(59,130,246,.08);color:#2563eb"><i
                            class="fas fa-building"></i></div>
                    <h3>REITs &amp; InvITs</h3>
                    <p>Investment-grade commercial real estate and infrastructure trusts — generating stable quarterly
                        distributions with Grade-A asset exposure from ₹200 per unit.</p>
                    <div class="alt-stats">
                        <div class="alt-stat">
                            <div class="alt-stat-label">Min. Investment</div>
                            <div class="alt-stat-val">₹200/unit</div>
                        </div>
                        <div class="alt-stat">
                            <div class="alt-stat-label">Distribution Yield</div>
                            <div class="alt-stat-val green">7–10% p.a.</div>
                        </div>
                        <div class="alt-stat">
                            <div class="alt-stat-label">Total Return</div>
                            <div class="alt-stat-val green">12–16% CAGR</div>
                        </div>
                        <div class="alt-stat">
                            <div class="alt-stat-label">Liquidity</div>
                            <div class="alt-stat-val green">Exchange Listed</div>
                        </div>
                    </div>
                    <span class="alt-min"><i class="fas fa-exchange-alt"></i> Exchange Listed · Liquid</span>
                </div>

                <div class="alt-card" data-aos="fade-up" data-aos-delay="0">
                    <div class="alt-icon" style="background:rgba(139,92,246,.08);color:#7c3aed"><i
                            class="fas fa-globe"></i></div>
                    <h3>International Equity &amp; ETFs</h3>
                    <p>US markets, NASDAQ, European indices, and emerging market exposure — diversify beyond India's
                        business cycle using LRS (Liberalized Remittance Scheme) ≤ $250,000/year.</p>
                    <div class="alt-stats">
                        <div class="alt-stat">
                            <div class="alt-stat-label">LRS Limit</div>
                            <div class="alt-stat-val">$250,000/yr</div>
                        </div>
                        <div class="alt-stat">
                            <div class="alt-stat-label">Key Markets</div>
                            <div class="alt-stat-val">US, EU, Asia</div>
                        </div>
                        <div class="alt-stat">
                            <div class="alt-stat-label">Currency Hedge</div>
                            <div class="alt-stat-val green">INR depreciation</div>
                        </div>
                        <div class="alt-stat">
                            <div class="alt-stat-label">Tax (India)</div>
                            <div class="alt-stat-val">20% LTCG (24m+)</div>
                        </div>
                    </div>
                    <span class="alt-min"><i class="fas fa-globe"></i> Via LRS · FEMA Compliant</span>
                </div>

                <div class="alt-card" data-aos="fade-up" data-aos-delay="60">
                    <div class="alt-icon" style="background:rgba(212,160,23,.08);color:var(--gold-dark)"><i
                            class="fas fa-coins"></i></div>
                    <h3>Sovereign Gold Bonds (SGBs)</h3>
                    <p>Government-backed gold investment with 2.5% annual interest + gold price appreciation. Tax-free
                        on maturity. Best gold instrument for HNI portfolios as part of inflation hedge.</p>
                    <div class="alt-stats">
                        <div class="alt-stat">
                            <div class="alt-stat-label">Interest Rate</div>
                            <div class="alt-stat-val green">2.5% p.a.</div>
                        </div>
                        <div class="alt-stat">
                            <div class="alt-stat-label">Maturity Tax</div>
                            <div class="alt-stat-val green">Tax-Free</div>
                        </div>
                        <div class="alt-stat">
                            <div class="alt-stat-label">Tenure</div>
                            <div class="alt-stat-val">8 Years</div>
                        </div>
                        <div class="alt-stat">
                            <div class="alt-stat-label">Max per FY</div>
                            <div class="alt-stat-val">4 kg (individual)</div>
                        </div>
                    </div>
                    <span class="alt-min"><i class="fas fa-shield-alt"></i> Govt. Backed · Tax-Free</span>
                </div>

                <div class="alt-card" data-aos="fade-up" data-aos-delay="120">
                    <div class="alt-icon" style="background:rgba(200,16,46,.08);color:var(--red)"><i
                            class="fas fa-file-contract"></i></div>
                    <h3>Corporate Bonds &amp; NCDs</h3>
                    <p>Investment-grade AAA/AA rated corporate bonds, PSU bonds, and structured NCDs — generating 9–12%
                        fixed returns for the stable, income-generating portion of HNI portfolios.</p>
                    <div class="alt-stats">
                        <div class="alt-stat">
                            <div class="alt-stat-label">Return Range</div>
                            <div class="alt-stat-val green">9–12% p.a.</div>
                        </div>
                        <div class="alt-stat">
                            <div class="alt-stat-label">Safety Rating</div>
                            <div class="alt-stat-val green">AAA/AA only</div>
                        </div>
                        <div class="alt-stat">
                            <div class="alt-stat-label">Tenure</div>
                            <div class="alt-stat-val">2–10 Years</div>
                        </div>
                        <div class="alt-stat">
                            <div class="alt-stat-label">Min Investment</div>
                            <div class="alt-stat-val">₹10,000</div>
                        </div>
                    </div>
                    <span class="alt-min"><i class="fas fa-check-circle"></i> Fixed Income · AAA Rated</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== ESTATE PLANNING ===================== -->
    <section class="section estate-planning" id="estate">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <span class="section-label gold">Legacy Architecture</span>
                <h2 class="section-title">Estate Planning &amp; <span>Wealth Transfer</span></h2>
                <p class="section-sub">Building wealth is half the journey. Ensuring it passes to the right people, in
                    the right way, with minimal tax and zero disputes — is the other half. We handle both.</p>
            </div>
            <div class="ep-grid">
                <div class="ep-visual" data-aos="fade-right">
                    <div class="ep-title">Wealth Transfer Architecture</div>
                    <div class="ep-tree">
                        <div class="ep-node root">👑 Family Patriarch / Matriarch</div>
                        <div class="ep-connector"></div>
                        <div class="ep-branch">
                            <div class="ep-branch-line">
                                <div class="ep-node">📜 Will &amp; Testament</div>
                                <div class="ep-connector"></div>
                                <div class="ep-sub-nodes">
                                    <div class="ep-node" style="min-width:120px;font-size:11.5px">Cash &amp; FDs</div>
                                    <div class="ep-node" style="min-width:120px;font-size:11.5px">MF Portfolio</div>
                                </div>
                            </div>
                            <div class="ep-branch-line">
                                <div class="ep-node">🏛️ HUF Structure</div>
                                <div class="ep-connector"></div>
                                <div class="ep-sub-nodes">
                                    <div class="ep-node" style="min-width:120px;font-size:11.5px">Business Income</div>
                                    <div class="ep-node" style="min-width:120px;font-size:11.5px">Tax Benefits</div>
                                </div>
                            </div>
                            <div class="ep-branch-line">
                                <div class="ep-node">🏢 Trust</div>
                                <div class="ep-connector"></div>
                                <div class="ep-sub-nodes">
                                    <div class="ep-node" style="min-width:120px;font-size:11.5px">Real Estate</div>
                                    <div class="ep-node" style="min-width:120px;font-size:11.5px">Future Generations
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ep-connector" style="height:32px"></div>
                        <div style="display:flex;gap:10px;justify-content:center;flex-wrap:wrap">
                            <div class="ep-node"
                                style="font-size:12px;min-width:100px;border-color:rgba(212,160,23,.2);background:rgba(212,160,23,.08)">
                                👧 Daughter</div>
                            <div class="ep-node"
                                style="font-size:12px;min-width:100px;border-color:rgba(212,160,23,.2);background:rgba(212,160,23,.08)">
                                👦 Son</div>
                            <div class="ep-node"
                                style="font-size:12px;min-width:100px;border-color:rgba(212,160,23,.2);background:rgba(212,160,23,.08)">
                                👶 Grandchild</div>
                            <div class="ep-node"
                                style="font-size:12px;min-width:100px;border-color:rgba(212,160,23,.2);background:rgba(212,160,23,.08)">
                                💝 Charity</div>
                        </div>
                    </div>
                </div>

                <div class="ep-services" data-aos="fade-left">
                    <div class="eps-card">
                        <div class="eps-icon"><i class="fas fa-scroll"></i></div>
                        <div>
                            <h4>Will Drafting &amp; Registration</h4>
                            <p>A comprehensive, legally valid Will covering all assets — property, investments,
                                jewellery, and digital assets. We work with qualified legal counsel to draft, witness,
                                and optionally register your Will for maximum legal certainty.</p>
                        </div>
                    </div>
                    <div class="eps-card">
                        <div class="eps-icon"><i class="fas fa-home"></i></div>
                        <div>
                            <h4>HUF (Hindu Undivided Family) Structuring</h4>
                            <p>For Hindu families, an HUF is a powerful tax-saving and wealth-building structure. A
                                separate tax entity with its own PAN, 80C deductions, and income slabs — effectively
                                creating a second tax-free income bucket for the family.</p>
                        </div>
                    </div>
                    <div class="eps-card">
                        <div class="eps-icon"><i class="fas fa-landmark"></i></div>
                        <div>
                            <h4>Trust Formation &amp; Management</h4>
                            <p>Public or private trusts for UHNI families — protecting real estate and business assets
                                across generations, enabling controlled distribution to beneficiaries, and providing
                                significant tax and legal protections.</p>
                        </div>
                    </div>
                    <div class="eps-card">
                        <div class="eps-icon"><i class="fas fa-briefcase"></i></div>
                        <div>
                            <h4>Business Succession Planning</h4>
                            <p>For business-owning HNIs, we create a formal succession plan: ownership transfer,
                                management transition, business valuation, buy-sell agreements, and key-person insurance
                                — ensuring business continuity across generations.</p>
                        </div>
                    </div>
                    <div class="eps-card">
                        <div class="eps-icon"><i class="fas fa-align-left"></i></div>
                        <div>
                            <h4>Nomination &amp; Account Alignment</h4>
                            <p>A comprehensive audit of all accounts, folios, demat, insurance policies, and property
                                documents — ensuring nominations are correct, updated, and aligned with your estate
                                plan. Many families discover critical gaps here.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== PROCESS ===================== -->
    <section class="section wm-process" id="process">
        <div class="container">
            <div class="section-header center" data-aos="fade-up">
                <span class="section-label gold">Onboarding Process</span>
                <h2 class="section-title" style="color:white">From Consultation to <span>Managed Wealth</span> — 6 Steps
                </h2>
                <p class="section-sub" style="color:rgba(255,255,255,.45);margin:0 auto">A thorough, confidential
                    onboarding process that ensures your wealth management strategy is built on complete knowledge of
                    your financial life.</p>
            </div>
            <div class="wmp-steps">
                <div class="wmp-step active" data-aos="fade-up" data-aos-delay="0">
                    <div class="wmp-num">01</div>
                    <h4>Private Consultation</h4>
                    <p>Confidential 90-min meeting with our Senior Wealth Advisor. No forms, no pressure — just an
                        in-depth conversation about your financial situation and aspirations.</p>
                </div>
                <div class="wmp-step" data-aos="fade-up" data-aos-delay="60">
                    <div class="wmp-num">02</div>
                    <h4>Wealth Audit</h4>
                    <p>Complete inventory of all assets, liabilities, insurance, tax situation, and existing investments
                        — identifying gaps, risks, and opportunities across your entire financial life.</p>
                </div>
                <div class="wmp-step" data-aos="fade-up" data-aos-delay="120">
                    <div class="wmp-num">03</div>
                    <h4>IPS Preparation</h4>
                    <p>A written Investment Policy Statement — your personalised portfolio constitution defining
                        objectives, constraints, asset allocation, and rebalancing rules. Unique to you.</p>
                </div>
                <div class="wmp-step" data-aos="fade-up" data-aos-delay="180">
                    <div class="wmp-num">04</div>
                    <h4>Portfolio Construction</h4>
                    <p>Building your multi-asset portfolio from scratch — selecting specific instruments, opening
                        accounts, completing paperwork, and executing the first investments with full coordination.</p>
                </div>
                <div class="wmp-step" data-aos="fade-up" data-aos-delay="240">
                    <div class="wmp-num">05</div>
                    <h4>Estate &amp; Tax Setup</h4>
                    <p>Will drafting, nomination alignment, HUF evaluation, trust assessment, and tax optimisation
                        strategy — the full financial architecture beyond just investments.</p>
                </div>
                <div class="wmp-step" data-aos="fade-up" data-aos-delay="300">
                    <div class="wmp-num">06</div>
                    <h4>Ongoing Management</h4>
                    <p>Monthly portfolio monitoring, proactive rebalancing, quarterly deep-dive reviews, annual IPS
                        updates, and a dedicated advisory council always available for your evolving needs.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== HNI PROFILES ===================== -->
    <section class="section hni-profiles" id="who">
        <div class="container">
            <div class="section-header center" data-aos="fade-up">
                <span class="section-label gold">Who We Serve</span>
                <h2 class="section-title">Wealth Management for <span>Every Affluent Profile</span></h2>
                <p class="section-sub">We serve HNIs and UHNIs from diverse backgrounds — each with a strategy built
                    entirely around their unique situation, goals, and family needs.</p>
            </div>
            <div class="hp-grid">
                <div class="hp-card" data-aos="fade-up" data-aos-delay="0" style="border-top:4px solid var(--red)">
                    <div class="hp-emoji">💼</div>
                    <h3>Senior Corporate Executives</h3>
                    <p>ESOPs, RSUs, high salaries, and a complex tax situation. We manage equity concentration risk from
                        employer stock, optimise ESOP exercise strategy, and build a diversified portfolio beyond
                        company exposure.</p>
                    <div class="hp-wealth"><i class="fas fa-gem"></i> Typical AUM: ₹2–10 Crore</div>
                    <div class="hp-tags">
                        <span class="hp-tag" style="background:rgba(200,16,46,.08);color:var(--red)">ESOP
                            Planning</span>
                        <span class="hp-tag" style="background:rgba(200,16,46,.08);color:var(--red)">Salary
                            Optimisation</span>
                        <span class="hp-tag" style="background:rgba(200,16,46,.08);color:var(--red)">Deferred
                            Compensation</span>
                    </div>
                </div>
                <div class="hp-card" data-aos="fade-up" data-aos-delay="60" style="border-top:4px solid var(--gold)">
                    <div class="hp-emoji">🏢</div>
                    <h3>Business Owners &amp; Entrepreneurs</h3>
                    <p>Irregular income, business reinvestment decisions, personal-business finance separation, and
                        succession planning. We build personal wealth independent of business valuation and create a
                        succession plan that protects both.</p>
                    <div class="hp-wealth"><i class="fas fa-gem"></i> Typical AUM: ₹5–50 Crore</div>
                    <div class="hp-tags">
                        <span class="hp-tag" style="background:rgba(212,160,23,.10);color:var(--gold-dark)">Business
                            Succession</span>
                        <span class="hp-tag" style="background:rgba(212,160,23,.10);color:var(--gold-dark)">Personal-Biz
                            Split</span>
                        <span class="hp-tag" style="background:rgba(212,160,23,.10);color:var(--gold-dark)">HUF
                            Structure</span>
                    </div>
                </div>
                <div class="hp-card" data-aos="fade-up" data-aos-delay="120" style="border-top:4px solid #15803d">
                    <div class="hp-emoji">⚕️</div>
                    <h3>Medical Professionals &amp; Specialists</h3>
                    <p>High-income professionals with practice income, hospital shares, and limited time for financial
                        management. We handle everything — from clinic income tax optimisation to retirement planning —
                        so you focus on patients.</p>
                    <div class="hp-wealth"><i class="fas fa-gem"></i> Typical AUM: ₹3–15 Crore</div>
                    <div class="hp-tags">
                        <span class="hp-tag" style="background:rgba(21,128,61,.08);color:#15803d">Practice Income</span>
                        <span class="hp-tag" style="background:rgba(21,128,61,.08);color:#15803d">Professional
                            Cover</span>
                        <span class="hp-tag" style="background:rgba(21,128,61,.08);color:#15803d">Tax
                            Optimisation</span>
                    </div>
                </div>
                <div class="hp-card" data-aos="fade-up" data-aos-delay="0" style="border-top:4px solid #2563eb">
                    <div class="hp-emoji">🌏</div>
                    <h3>HNI NRIs &amp; Returning Indians</h3>
                    <p>Managing India wealth from abroad — NRE/NRO portfolios, FEMA compliance, DTAA planning, and
                        transition from NRI to RNOR/resident status. We handle all cross-border complexity with complete
                        compliance.</p>
                    <div class="hp-wealth"><i class="fas fa-gem"></i> Typical AUM: ₹2–20 Crore</div>
                    <div class="hp-tags">
                        <span class="hp-tag" style="background:rgba(37,99,235,.08);color:#2563eb">FEMA Compliance</span>
                        <span class="hp-tag" style="background:rgba(37,99,235,.08);color:#2563eb">RNOR Planning</span>
                        <span class="hp-tag" style="background:rgba(37,99,235,.08);color:#2563eb">Repatriation</span>
                    </div>
                </div>
                <div class="hp-card" data-aos="fade-up" data-aos-delay="60" style="border-top:4px solid #7c3aed">
                    <div class="hp-emoji">🏆</div>
                    <h3>Inherited Wealth Families</h3>
                    <p>Second and third generation wealth — often in suboptimal structures (FDs, land, gold). We
                        modernise, restructure, and professionalise inherited wealth portfolios while maintaining family
                        harmony and tax efficiency.</p>
                    <div class="hp-wealth"><i class="fas fa-gem"></i> Typical AUM: ₹5–100 Crore+</div>
                    <div class="hp-tags">
                        <span class="hp-tag" style="background:rgba(124,58,237,.08);color:#7c3aed">Trust
                            Structuring</span>
                        <span class="hp-tag" style="background:rgba(124,58,237,.08);color:#7c3aed">Family
                            Governance</span>
                        <span class="hp-tag" style="background:rgba(124,58,237,.08);color:#7c3aed">Portfolio
                            Modernisation</span>
                    </div>
                </div>
                <div class="hp-card" data-aos="fade-up" data-aos-delay="120"
                    style="border-top:4px solid var(--red-dark)">
                    <div class="hp-emoji">🚀</div>
                    <h3>Startup Founders &amp; Angel Investors</h3>
                    <p>Liquidity events, ESOP windfalls, angel portfolio management, and planning for the next venture.
                        We manage the full cycle — from pre-liquidity planning to post-exit wealth deployment into a
                        permanent portfolio.</p>
                    <div class="hp-wealth"><i class="fas fa-gem"></i> Typical AUM: ₹3–50 Crore</div>
                    <div class="hp-tags">
                        <span class="hp-tag" style="background:rgba(155,13,35,.08);color:var(--red-dark)">Pre-Liquidity
                            Plan</span>
                        <span class="hp-tag" style="background:rgba(155,13,35,.08);color:var(--red-dark)">Post-Exit
                            Deployment</span>
                        <span class="hp-tag" style="background:rgba(155,13,35,.08);color:var(--red-dark)">Angel
                            Portfolio</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== TESTIMONIALS ===================== -->
    <section class="section wm-testimonials" id="testimonials">
        <div class="container">
            <div class="section-header center" data-aos="fade-up">
                <span class="section-label gold">Client Voices</span>
                <h2 class="section-title">What Our <span>HNI Clients Say</span></h2>
                <p class="section-sub">The trust of India's most discerning investors — earned through consistent
                    performance, complete transparency, and exceptional service.</p>
            </div>
            <div class="wmt-grid">
                <div class="wmt-card" data-aos="fade-up" data-aos-delay="0">
                    <div class="wmt-top">
                        <div class="wmt-stars">★★★★★</div>
                        <div class="wmt-aum">AUM ₹18 Crore</div>
                    </div>
                    <p class="wmt-text">"After 15 years with a large bank's wealth management arm, I moved to Wealth
                        Bridge. The difference is night and day. My previous bank recommended their own products —
                        fee-loaded, opaque, and underperforming. Wealth Bridge has generated 21% CAGR over 6 years,
                        saved ₹48L in taxes, and created an estate plan my family actually understands. I only wish I'd
                        switched earlier."</p>
                    <div class="wmt-author">
                        <div class="wmt-avatar">RV</div>
                        <div>
                            <div class="wmt-name">Rajiv Verma</div>
                            <div class="wmt-role">MD, Manufacturing Company · Delhi NCR · 6 Years Client</div>
                        </div>
                    </div>
                </div>
                <div class="wmt-card" data-aos="fade-up" data-aos-delay="80">
                    <div class="wmt-top">
                        <div class="wmt-stars">★★★★★</div>
                        <div class="wmt-aum">AUM ₹42 Crore</div>
                    </div>
                    <p class="wmt-text">"When our family business was acquired for ₹38 crore, we had no idea how to
                        deploy that capital. Wealth Bridge managed the entire transition — from the escrow period, to
                        tax planning on the sale, to building a ₹42 crore diversified portfolio from scratch within 18
                        months. The estate planning and HUF structuring they recommended will save our family ₹3+ crore
                        in taxes over the next decade."</p>
                    <div class="wmt-author">
                        <div class="wmt-avatar">SP</div>
                        <div>
                            <div class="wmt-name">Suresh &amp; Pallavi Desai</div>
                            <div class="wmt-role">Business Exit · Ahmedabad · 4 Years Client</div>
                        </div>
                    </div>
                </div>
                <div class="wmt-card" data-aos="fade-up" data-aos-delay="160">
                    <div class="wmt-top">
                        <div class="wmt-stars">★★★★★</div>
                        <div class="wmt-aum">AUM ₹9 Crore</div>
                    </div>
                    <p class="wmt-text">"As a surgeon, I have zero time for financial management. Wealth Bridge is
                        genuinely like having a CFO — they handle everything proactively, alert me to opportunities
                        before I even know they exist, and have never once recommended something that benefitted them at
                        my expense. My ESOP exercise strategy alone saved ₹1.4 crore in tax this year. Completely
                        changed how I think about wealth management."</p>
                    <div class="wmt-author">
                        <div class="wmt-avatar">DM</div>
                        <div>
                            <div class="wmt-name">Dr. Deepak Mehta</div>
                            <div class="wmt-role">Cardiothoracic Surgeon · Mumbai · 5 Years Client</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== FAQ ===================== -->
    <section class="section faq-section" id="faq">
        <div class="container">
            <div class="faq-grid">
                <div class="faq-intro" data-aos="fade-right">
                    <span class="section-label gold">Common Questions</span>
                    <h2 class="section-title">Wealth Management <span>FAQs</span></h2>
                    <p class="section-sub" style="margin-bottom:28px">Questions we hear from HNIs who are evaluating
                        whether wealth management is right for them — answered honestly.</p>
                    <a href="#cta" class="btn btn-gold">Schedule Private Consultation <i class="fas fa-crown"></i></a>
                </div>
                <div class="faq-list" data-aos="fade-left">
                    <div class="faq-item open">
                        <div class="faq-q"><span>What's the difference between a wealth manager and my bank's
                                relationship manager?</span><i class="fas fa-plus"></i></div>
                        <div class="faq-a">Bank relationship managers earn commissions on the products they sell —
                            creating an inherent conflict of interest. They typically recommend the bank's own products
                            regardless of whether they're best for you. Wealth Bridge is a SEBI-registered fee-only
                            advisor — we charge you a transparent advisory fee and have zero incentive to recommend any
                            specific product. Our only objective is maximising your risk-adjusted after-tax returns.
                            Independent advisors consistently outperform bank-recommended portfolios by 3–5% annually
                            according to multiple studies.</div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-q"><span>How much do you charge for wealth management?</span><i
                                class="fas fa-plus"></i></div>
                        <div class="faq-a">Our fees are fully transparent and disclosed upfront — no hidden charges, no
                            commissions. We charge an annual advisory fee based on AUM: typically 0.5–1% per annum for
                            portfolios above ₹1 crore. This covers comprehensive portfolio management, tax planning,
                            estate planning reviews, and all advisory services. At the Premier and Family Office tier,
                            fees are structured individually based on the complexity of services. The value we typically
                            generate — through tax savings, alpha, and avoided mistakes — significantly exceeds the fee,
                            in virtually every case.</div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-q"><span>I have ₹2 crore. Is that enough for wealth management?</span><i
                                class="fas fa-plus"></i></div>
                        <div class="faq-a">Yes — our Wealth Essentials tier begins at ₹1 crore investable assets. At ₹2
                            crore, you have access to our full Essentials service including multi-asset portfolio,
                            comprehensive tax planning, estate planning review, and a dedicated relationship manager. As
                            your portfolio grows, you naturally move to higher service tiers with deeper
                            personalisation. Many of our longest-standing clients started at ₹1–2 crore and now manage
                            ₹10–50 crore with us.</div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-q"><span>Can you manage my portfolio if it includes a family business?</span><i
                                class="fas fa-plus"></i></div>
                        <div class="faq-a">Absolutely — and this is where our value is most significant. Business-owning
                            families need explicit separation between business capital (for reinvestment and operations)
                            and personal capital (for wealth, retirement, and legacy). We help you define this boundary
                            clearly, optimise the business structure for tax efficiency (HUF, family trust, etc.), and
                            build a personal portfolio that's completely independent of business fortunes. We also work
                            on succession planning to ensure the business and personal wealth transfer smoothly to the
                            next generation.</div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-q"><span>How is my portfolio performance measured and reported?</span><i
                                class="fas fa-plus"></i></div>
                        <div class="faq-a">You receive a comprehensive monthly performance report showing: absolute
                            returns, benchmark comparison (XIRR vs Nifty 50), individual asset performance, risk metrics
                            (Sharpe ratio, max drawdown, beta), tax impact of transactions, and goal progress. We use
                            XIRR (Extended Internal Rate of Return) — not simple returns — for accurate measurement of
                            cash flows in and out. Quarterly video review calls with your senior advisor provide deeper
                            context and forward planning.</div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-q"><span>Do you handle estate planning, or just investments?</span><i
                                class="fas fa-plus"></i></div>
                        <div class="faq-a">We handle both — and this integration is what differentiates true wealth
                            management from investment management. At the Premier and Family Office tiers, we coordinate
                            with qualified legal counsel to draft Wills, evaluate trust structures, assess HUF
                            opportunities, and align nominations across all accounts. For business owners, we build
                            formal succession plans. Estate planning is not an add-on — it's a core part of the wealth
                            management mandate for every HNI client.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== CTA BAND ===================== -->
    <section class="cta-band" id="cta">
        <div class="container">
            <div class="cta-content" data-aos="fade-up">
                <span class="section-label gold" style="display:block;text-align:center;letter-spacing:3px">EXCLUSIVE ·
                    CONFIDENTIAL · PERSONALISED</span>
                <h2 class="cta-title">Your Wealth Deserves<br>More Than <span>Generic Advice</span></h2>
                <p class="cta-desc">Schedule a private, 60-minute wealth management consultation with our Senior
                    Advisor. No obligations, complete confidentiality. We'll review your current situation and show you
                    exactly what a comprehensive wealth management strategy can do for you.</p>
                <div class="cta-actions">
                    <a href="wealth-bridge.html#contact" class="btn btn-gold"
                        style="padding:16px 36px;font-size:15px">Schedule Private Consultation <i
                            class="fas fa-crown"></i></a>
                    <a href="tel:+918000000000" class="btn btn-ghost" style="padding:16px 28px;font-size:15px"><i
                            class="fas fa-phone"></i> +91 8000 000 000</a>
                </div>
                <div class="cta-trust">
                    <div class="cta-trust-item"><i class="fas fa-shield-alt"></i> SEBI Registered RIA</div>
                    <div class="cta-trust-item"><i class="fas fa-lock"></i> Fully Confidential</div>
                    <div class="cta-trust-item"><i class="fas fa-gem"></i> ₹2,400 Crore AUM</div>
                    <div class="cta-trust-item"><i class="fas fa-users"></i> 420+ HNI Families</div>
                    <div class="cta-trust-item"><i class="fas fa-award"></i> 18+ Years Track Record</div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== RELATED SERVICES ===================== -->
    <section class="section related">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <span class="section-label">Explore More</span>
                <h2 class="section-title">Related <span>Advisory Services</span></h2>
            </div>
            <div class="related-grid">
                <div class="rel-card" data-aos="fade-up" data-aos-delay="0">
                    <div class="rc-icon"><i class="fas fa-chart-line"></i></div>
                    <h4>Investment Planning</h4>
                    <p>Systematic goal-based investing — the foundation of every wealth management journey.</p>
                    <a href="investment-planning.html" class="rc-link">Explore <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="rel-card" data-aos="fade-up" data-aos-delay="60">
                    <div class="rc-icon"><i class="fas fa-percent"></i></div>
                    <h4>Tax-Efficient Investment</h4>
                    <p>Advanced tax structuring to legally minimise your liability at every income level.</p>
                    <a href="#" class="rc-link">Explore <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="rel-card" data-aos="fade-up" data-aos-delay="120">
                    <div class="rc-icon"><i class="fas fa-globe"></i></div>
                    <h4>NRI Financial Advisory</h4>
                    <p>Cross-border wealth management for HNI NRIs with India and global assets.</p>
                    <a href="nri-financial-advisory.html" class="rc-link">Explore <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="rel-card" data-aos="fade-up" data-aos-delay="180">
                    <div class="rc-icon"><i class="fas fa-briefcase"></i></div>
                    <h4>Business Planning</h4>
                    <p>Financial structuring and succession planning for business-owning HNI families.</p>
                    <a href="#" class="rc-link">Explore <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

<?php include_once ('elements/footer.php'); ?>