<?php include_once ('elements/header.php'); ?>

<!-- Page CSS -->
<link href="<?php echo UrlHelper::asset('css/business-planning.css'); ?>" rel="stylesheet">


<!-- ══════════════════════════════════════════════════════════
     BREADCRUMB
══════════════════════════════════════════════════════════ -->
<div class="breadcrumb-bar">
    <div class="container">
        <div class="breadcrumb">
            <a href="index"><i class="fas fa-home"></i> Home</a>
            <span>›</span>
            <a href="#">Our Services</a>
            <span>›</span>
            <span class="current">Business Planning</span>
        </div>
    </div>
</div>


<!-- ══════════════════════════════════════════════════════════
     HERO — DARK
══════════════════════════════════════════════════════════ -->
<section class="service-hero">
    <div class="sh-bg"></div>
    <div class="sh-grid"></div>
    <div class="sh-line"></div>
    <div class="sh-line2"></div>
    <div class="sh-diagonal"></div>
    <div class="sh-dots" aria-hidden="true"></div>

    <div class="container">
        <div class="sh-content">

            <!-- LEFT -->
            <div class="sh-left">

                <div class="hero__label" data-aos="fade-right" data-aos-duration="700">
                    Our Services &nbsp;·&nbsp; Business Planning
                </div>

                <h1 class="hero__title" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                    Build a Business That
                    <em>Outlasts You &amp;</em>
                    Funds Your Freedom
                </h1>

                <p class="hero__subtitle" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                    Most business owners are so focused on running the business they never
                    plan for what it's worth, what it costs them in tax, or what happens
                    when they're ready to step away. WealthBridge changes that — completely.
                </p>

                <div class="hero__actions" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                    <a href="#contact" class="btn btn-primary">
                        Book Free Business Review
                        <i class="fas fa-arrow-right"></i>
                    </a>
                    <a href="#services" class="btn btn-ghost">
                        Explore Services
                        <i class="fas fa-chevron-down"></i>
                    </a>
                </div>

                <!-- Stats strip -->
                <div class="hero__stats" data-aos="fade-up" data-aos-duration="800" data-aos-delay="420">
                    <div>
                        <div class="hero__stat-num" data-counter="1200" data-suffix="+">1,200+</div>
                        <div class="hero__stat-label">Businesses Advised</div>
                    </div>
                    <div>
                        <div class="hero__stat-num" data-counter="340" data-suffix="Cr+">₹340Cr+</div>
                        <div class="hero__stat-label">Business Exits Planned</div>
                    </div>
                    <div>
                        <div class="hero__stat-num" data-counter="17" data-suffix=" Yrs">17 Yrs</div>
                        <div class="hero__stat-label">Advisory Expertise</div>
                    </div>
                </div>

            </div><!-- /sh-left -->


            <!-- RIGHT: Business Dashboard Card -->
            <div class="hero__visual" data-aos="fade-left" data-aos-duration="900" data-aos-delay="200">

                <!-- float top-right -->
                <div class="hero__float f1">
                    <div class="hero__float-label">Business Valuation</div>
                    <div class="hero__float-val">₹4.2Cr <span>▲</span></div>
                    <div class="hero__float-sub">+34% vs last year</div>
                </div>

                <!-- main card -->
                <div class="hero__card-main">
                    <div class="hero__card-header">
                        <span class="hero__card-title">Business Health Dashboard</span>
                        <span class="hero__card-badge">
                            <span class="hero__card-badge-dot"></span>
                            FY 2024–25
                        </span>
                    </div>

                    <!-- KPI grid 2×2 -->
                    <div class="hero__kpi-grid">
                        <div class="hero__kpi">
                            <div class="hero__kpi-label">Annual Revenue</div>
                            <div class="hero__kpi-val">₹2.8Cr <span class="up">▲12%</span></div>
                            <div class="hero__kpi-sub">vs ₹2.5Cr last FY</div>
                        </div>
                        <div class="hero__kpi">
                            <div class="hero__kpi-label">Net Profit Margin</div>
                            <div class="hero__kpi-val">22.4% <span class="up">▲</span></div>
                            <div class="hero__kpi-sub">Industry avg: 16%</div>
                        </div>
                        <div class="hero__kpi">
                            <div class="hero__kpi-label">Owner Salary Optimised</div>
                            <div class="hero__kpi-val">₹18L <span class="neu">p.a.</span></div>
                            <div class="hero__kpi-sub">Tax-efficient structure</div>
                        </div>
                        <div class="hero__kpi">
                            <div class="hero__kpi-label">Valuation Multiple</div>
                            <div class="hero__kpi-val">1.5× <span class="up">rev</span></div>
                            <div class="hero__kpi-sub">Target: 2× by FY27</div>
                        </div>
                    </div>

                    <!-- Revenue trend mini chart -->
                    <div class="hero__rev-chart">
                        <div class="hero__rev-label">Monthly Revenue Trend</div>
                        <div class="hero__rev-bars">
                            <div class="hrb-bar past" style="height:48%"></div>
                            <div class="hrb-bar past" style="height:55%"></div>
                            <div class="hrb-bar past" style="height:42%"></div>
                            <div class="hrb-bar past" style="height:60%"></div>
                            <div class="hrb-bar past" style="height:52%"></div>
                            <div class="hrb-bar hi"   style="height:70%"></div>
                            <div class="hrb-bar hi"   style="height:82%"></div>
                            <div class="hrb-bar hi"   style="height:100%"></div>
                        </div>
                        <div class="hero__rev-footer">
                            <span>Apr '24</span>
                            <span>Nov '24</span>
                            <span>+28% growth ▲</span>
                        </div>
                    </div>

                    <!-- Milestone strip -->
                    <div class="hero__milestones">
                        <div class="hms-row">
                            <span class="hms-dot done"></span>
                            <span class="hms-text">Business structure optimised (Pvt Ltd)</span>
                            <span class="hms-date">Apr 2024</span>
                        </div>
                        <div class="hms-row">
                            <span class="hms-dot done"></span>
                            <span class="hms-text">Keyman insurance policy activated</span>
                            <span class="hms-date">Jul 2024</span>
                        </div>
                        <div class="hms-row">
                            <span class="hms-dot active"></span>
                            <span class="hms-text">Exit strategy roadmap — in progress</span>
                            <span class="hms-date">Now</span>
                        </div>
                        <div class="hms-row">
                            <span class="hms-dot pending"></span>
                            <span class="hms-text">Target business valuation: ₹8Cr</span>
                            <span class="hms-date">FY 2027</span>
                        </div>
                    </div>
                </div><!-- /card -->

                <!-- float bottom-left -->
                <div class="hero__float f2">
                    <div class="hero__float-label">Tax Saved (Business)</div>
                    <div class="hero__float-val">₹3.8L <span>/ yr</span></div>
                    <div class="hero__float-sub">Via structure optimisation</div>
                </div>

            </div><!-- /hero__visual -->
        </div>
    </div>
</section>


<!-- ══════════════════════════════════════════════════════════
     WHY BUSINESS PLANNING — WHITE
══════════════════════════════════════════════════════════ -->
<section class="section bp-why">
    <div class="container">
        <div class="bp-why-grid">

            <!-- LEFT -->
            <div class="bp-why-content">
                <span class="section-label" data-aos="fade-right">The Problem</span>
                <h2 class="section-title" data-aos="fade-up" data-aos-delay="80">
                    Your Business Is Your<br>Biggest Asset. <span>Treat It Like One.</span>
                </h2>
                <div style="width:48px;height:3px;background:var(--red);border-radius:2px;margin-bottom:20px"
                     data-aos="fade-left" data-aos-delay="120"></div>
                <p class="section-sub" data-aos="fade-up" data-aos-delay="160">
                    Over 80% of Indian business owners have no formal succession plan, no
                    business valuation, and no separation between personal and business wealth.
                    When they exit — voluntarily or not — they leave enormous value on the table.
                    WealthBridge ensures that never happens to you.
                </p>

                <div class="bp-why-features" data-aos="fade-up" data-aos-delay="220">
                    <div class="bpwf-card">
                        <div class="bpwf-icon"><i class="fas fa-divide"></i></div>
                        <div class="bpwf-title">Separate Business &amp; Personal Wealth</div>
                        <div class="bpwf-desc">Mix the two and you risk everything. We build a clear firewall between business risk and personal wealth accumulation.</div>
                    </div>
                    <div class="bpwf-card">
                        <div class="bpwf-icon"><i class="fas fa-tags"></i></div>
                        <div class="bpwf-title">Know Your Business Value</div>
                        <div class="bpwf-desc">Most owners underestimate their business value by 40–60%. We calculate the real valuation and help you systematically increase it.</div>
                    </div>
                    <div class="bpwf-card">
                        <div class="bpwf-icon"><i class="fas fa-sitemap"></i></div>
                        <div class="bpwf-title">Optimal Entity Structure</div>
                        <div class="bpwf-desc">Proprietorship, LLP, Pvt Ltd, or HUF — the right structure can save you ₹3–10L in tax annually while protecting your assets.</div>
                    </div>
                    <div class="bpwf-card">
                        <div class="bpwf-icon"><i class="fas fa-door-open"></i></div>
                        <div class="bpwf-title">Plan Your Exit Before You Need It</div>
                        <div class="bpwf-desc">Whether it's a family handover, strategic sale, or IPO — an exit strategy built 5 years early is worth 3× more than one built in crisis.</div>
                    </div>
                </div>
            </div>

            <!-- RIGHT: dark stat card -->
            <div class="bp-why-visual" data-aos="fade-left" data-aos-delay="180">
                <div class="bp-why-bg-block"></div>

                <div class="bp-badge-float f2">
                    <div class="bpbf-inner">
                        <div class="bpbf-icon"><i class="fas fa-certificate"></i></div>
                        <div>
                            <div class="bpbf-num">SEBI</div>
                            <div class="bpbf-label">Registered RIA</div>
                        </div>
                    </div>
                </div>

                <div class="bp-why-card">
                    <div class="bpwc-title">Why Business Owners Need a Financial Plan</div>

                    <div class="bpwc-row">
                        <div class="bpwc-row-top">
                            <span>Owners with no succession plan</span>
                            <span>82% in India</span>
                        </div>
                        <div class="bpwc-track"><div class="bpwc-fill" style="--w:82%"></div></div>
                    </div>
                    <div class="bpwc-row">
                        <div class="bpwc-row-top">
                            <span>Owners who overpay business tax</span>
                            <span>67% avoidable</span>
                        </div>
                        <div class="bpwc-track"><div class="bpwc-fill" style="--w:67%"></div></div>
                    </div>
                    <div class="bpwc-row">
                        <div class="bpwc-row-top">
                            <span>Value left on table in unplanned exits</span>
                            <span>Up to 40%</span>
                        </div>
                        <div class="bpwc-track"><div class="bpwc-fill" style="--w:72%"></div></div>
                    </div>
                    <div class="bpwc-row">
                        <div class="bpwc-row-top">
                            <span>Businesses with personal-biz wealth mix</span>
                            <span>74% of SMEs</span>
                        </div>
                        <div class="bpwc-track"><div class="bpwc-fill" style="--w:74%"></div></div>
                    </div>
                    <div class="bpwc-row">
                        <div class="bpwc-row-top">
                            <span>Owners with documented valuation</span>
                            <span>Only 18%</span>
                        </div>
                        <div class="bpwc-track"><div class="bpwc-fill" style="--w:18%"></div></div>
                    </div>

                    <div class="bpwc-footer">
                        <div>
                            <div class="bpwc-stat-num">₹3.8L</div>
                            <div class="bpwc-stat-label">Avg. tax saved / year</div>
                        </div>
                        <div>
                            <div class="bpwc-stat-num">2.8×</div>
                            <div class="bpwc-stat-label">Valuation increase (5yr)</div>
                        </div>
                    </div>
                </div>

                <div class="bp-badge-float f1">
                    <div class="bpbf-inner">
                        <div class="bpbf-icon"><i class="fas fa-briefcase"></i></div>
                        <div>
                            <div class="bpbf-num">1,200+</div>
                            <div class="bpbf-label">Businesses Advised</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- ══════════════════════════════════════════════════════════
     SERVICES GRID — GRAY-50
══════════════════════════════════════════════════════════ -->
<section class="section bp-services" id="services">
    <div class="container">
        <div class="section-header center">
            <span class="section-label" data-aos="fade-up">What We Do</span>
            <h2 class="section-title" data-aos="fade-up" data-aos-delay="80">
                Complete <span>Business Financial Advisory</span> — End to End
            </h2>
            <p class="section-sub" style="margin:0 auto" data-aos="fade-up" data-aos-delay="140">
                From the day you incorporate to the day you exit — WealthBridge is your
                financial co-founder, CFO, and succession planner, all in one.
            </p>
        </div>

        <div class="bp-svc-grid" data-aos="fade-up" data-aos-delay="180">

            <!-- Business Structure -->
            <div class="bp-svc-card">
                <div class="bp-svc-tag tag-startup"><i class="fas fa-seedling"></i> Foundation</div>
                <div class="bp-svc-icon"><i class="fas fa-sitemap"></i></div>
                <div class="bp-svc-title">Business Structure &amp; Setup</div>
                <div class="bp-svc-desc">Choose the right entity — Proprietorship, LLP, Pvt Ltd, or HUF — based on your liability, tax, and growth goals.</div>
                <div class="bp-svc-items">
                    <div class="bp-svc-item"><i class="fas fa-check"></i> Entity comparison &amp; recommendation</div>
                    <div class="bp-svc-item"><i class="fas fa-check"></i> Incorporation support</div>
                    <div class="bp-svc-item"><i class="fas fa-check"></i> Shareholding structure design</div>
                    <div class="bp-svc-item"><i class="fas fa-check"></i> Director / partner salary optimisation</div>
                </div>
                <a href="contact" class="bp-svc-link">Learn More <i class="fas fa-arrow-right"></i></a>
            </div>

            <!-- Business Tax Planning -->
            <div class="bp-svc-card">
                <div class="bp-svc-tag tag-tax"><i class="fas fa-percentage"></i> Tax</div>
                <div class="bp-svc-icon"><i class="fas fa-file-invoice-dollar"></i></div>
                <div class="bp-svc-title">Business Tax Planning</div>
                <div class="bp-svc-desc">Legal reduction of business tax liability through expense structuring, depreciation, and regime selection.</div>
                <div class="bp-svc-items">
                    <div class="bp-svc-item"><i class="fas fa-check"></i> Presumptive tax vs actual (44AD/44ADA)</div>
                    <div class="bp-svc-item"><i class="fas fa-check"></i> Business expense optimisation</div>
                    <div class="bp-svc-item"><i class="fas fa-check"></i> GST &amp; TDS compliance planning</div>
                    <div class="bp-svc-item"><i class="fas fa-check"></i> Advance tax &amp; ITR filing strategy</div>
                </div>
                <a href="contact" class="bp-svc-link">Learn More <i class="fas fa-arrow-right"></i></a>
            </div>

            <!-- Wealth Separation -->
            <div class="bp-svc-card">
                <div class="bp-svc-tag tag-protect"><i class="fas fa-shield-alt"></i> Protection</div>
                <div class="bp-svc-icon"><i class="fas fa-divide"></i></div>
                <div class="bp-svc-title">Personal Wealth Separation</div>
                <div class="bp-svc-desc">Keep business creditors away from personal assets. Build personal wealth independently of business cashflow.</div>
                <div class="bp-svc-items">
                    <div class="bp-svc-item"><i class="fas fa-check"></i> Business vs personal account firewall</div>
                    <div class="bp-svc-item"><i class="fas fa-check"></i> Keyman life insurance</div>
                    <div class="bp-svc-item"><i class="fas fa-check"></i> Personal investment plan (SIP + NPS)</div>
                    <div class="bp-svc-item"><i class="fas fa-check"></i> Family financial goal mapping</div>
                </div>
                <a href="contact" class="bp-svc-link">Learn More <i class="fas fa-arrow-right"></i></a>
            </div>

            <!-- Business Valuation -->
            <div class="bp-svc-card">
                <div class="bp-svc-tag tag-growth"><i class="fas fa-chart-line"></i> Growth</div>
                <div class="bp-svc-icon"><i class="fas fa-tags"></i></div>
                <div class="bp-svc-title">Business Valuation &amp; Growth</div>
                <div class="bp-svc-desc">Know your business worth, identify value drivers, and systematically build toward your target exit valuation.</div>
                <div class="bp-svc-items">
                    <div class="bp-svc-item"><i class="fas fa-check"></i> EBITDA / revenue multiple valuation</div>
                    <div class="bp-svc-item"><i class="fas fa-check"></i> Value driver identification</div>
                    <div class="bp-svc-item"><i class="fas fa-check"></i> Profitability improvement roadmap</div>
                    <div class="bp-svc-item"><i class="fas fa-check"></i> Annual valuation tracking</div>
                </div>
                <a href="contact" class="bp-svc-link">Learn More <i class="fas fa-arrow-right"></i></a>
            </div>

            <!-- Cash Flow Management -->
            <div class="bp-svc-card">
                <div class="bp-svc-tag tag-cash"><i class="fas fa-water"></i> Cash Flow</div>
                <div class="bp-svc-icon"><i class="fas fa-stream"></i></div>
                <div class="bp-svc-title">Cash Flow Management</div>
                <div class="bp-svc-desc">Manage working capital, eliminate cash crunches, and build a 12-month cash flow forecast that actually works.</div>
                <div class="bp-svc-items">
                    <div class="bp-svc-item"><i class="fas fa-check"></i> 12-month cash flow projection</div>
                    <div class="bp-svc-item"><i class="fas fa-check"></i> Working capital optimisation</div>
                    <div class="bp-svc-item"><i class="fas fa-check"></i> Excess cash investment strategy</div>
                    <div class="bp-svc-item"><i class="fas fa-check"></i> Emergency business fund planning</div>
                </div>
                <a href="contact" class="bp-svc-link">Learn More <i class="fas fa-arrow-right"></i></a>
            </div>

            <!-- Succession & Exit -->
            <div class="bp-svc-card">
                <div class="bp-svc-tag tag-exit"><i class="fas fa-door-open"></i> Exit</div>
                <div class="bp-svc-icon"><i class="fas fa-sign-out-alt"></i></div>
                <div class="bp-svc-title">Succession &amp; Exit Planning</div>
                <div class="bp-svc-desc">Whether handing to family, selling to a strategic buyer, or merging — plan the exit 5 years early to maximise value.</div>
                <div class="bp-svc-items">
                    <div class="bp-svc-item"><i class="fas fa-check"></i> Family succession roadmap</div>
                    <div class="bp-svc-item"><i class="fas fa-check"></i> Strategic sale preparation</div>
                    <div class="bp-svc-item"><i class="fas fa-check"></i> Buyout structuring &amp; negotiation</div>
                    <div class="bp-svc-item"><i class="fas fa-check"></i> Post-exit wealth reinvestment plan</div>
                </div>
                <a href="contact" class="bp-svc-link">Learn More <i class="fas fa-arrow-right"></i></a>
            </div>

        </div>
    </div>
</section>


<!-- ══════════════════════════════════════════════════════════
     BUSINESS LIFECYCLE — WHITE
══════════════════════════════════════════════════════════ -->
<section class="section bp-lifecycle">
    <div class="container">
        <div class="section-header center">
            <span class="section-label" data-aos="fade-up">Lifecycle Approach</span>
            <h2 class="section-title" data-aos="fade-up" data-aos-delay="80">
                Advisory for <span>Every Stage</span> of Your Business Journey
            </h2>
            <p class="section-sub" style="margin:0 auto" data-aos="fade-up" data-aos-delay="140">
                Financial needs evolve as your business grows. Our advisory adapts to
                wherever you are — from first invoice to final exit.
            </p>
        </div>

        <div class="lifecycle-grid">

            <div class="lc-card" data-aos="fade-up" data-aos-delay="0">
                <div class="lc-num">01</div>
                <div class="lc-phase">Startup · Year 0–2</div>
                <div class="lc-icon"><i class="fas fa-rocket"></i></div>
                <div class="lc-title">Launch &amp; Foundation</div>
                <div class="lc-desc">Get the structure right from day one — entity, accounts, tax registrations, and a personal financial plan that survives the lean years.</div>
                <div class="lc-items">
                    <div class="lc-item">Right entity selection</div>
                    <div class="lc-item">Founder salary structuring</div>
                    <div class="lc-item">GST &amp; TDS setup</div>
                    <div class="lc-item">Personal emergency fund</div>
                </div>
            </div>

            <div class="lc-card" data-aos="fade-up" data-aos-delay="100">
                <div class="lc-num">02</div>
                <div class="lc-phase">Growth · Year 2–7</div>
                <div class="lc-icon"><i class="fas fa-chart-line"></i></div>
                <div class="lc-title">Scale &amp; Optimise</div>
                <div class="lc-desc">Revenue is climbing — now manage cash flow, reduce tax leakage, separate personal wealth, and build your first serious investment portfolio.</div>
                <div class="lc-items">
                    <div class="lc-item">Business tax optimisation</div>
                    <div class="lc-item">Cash flow forecasting</div>
                    <div class="lc-item">Personal wealth SIP &amp; NPS</div>
                    <div class="lc-item">Keyman insurance</div>
                </div>
            </div>

            <div class="lc-card" data-aos="fade-up" data-aos-delay="200">
                <div class="lc-num">03</div>
                <div class="lc-phase">Maturity · Year 7–15</div>
                <div class="lc-icon"><i class="fas fa-industry"></i></div>
                <div class="lc-title">Consolidate &amp; Protect</div>
                <div class="lc-desc">Business is profitable — protect it, value it accurately, and build the personal wealth that will sustain you long after the business is gone.</div>
                <div class="lc-items">
                    <div class="lc-item">Business valuation review</div>
                    <div class="lc-item">Succession plan drafting</div>
                    <div class="lc-item">Real estate &amp; equity portfolio</div>
                    <div class="lc-item">Will &amp; estate planning</div>
                </div>
            </div>

            <div class="lc-card" data-aos="fade-up" data-aos-delay="300">
                <div class="lc-num">04</div>
                <div class="lc-phase">Exit · Year 10+</div>
                <div class="lc-icon"><i class="fas fa-flag-checkered"></i></div>
                <div class="lc-title">Harvest &amp; Transition</div>
                <div class="lc-desc">Exit on your terms — maximum valuation, minimum tax, and a reinvestment plan for the proceeds that sustains your lifestyle forever.</div>
                <div class="lc-items">
                    <div class="lc-item">Strategic buyer identification</div>
                    <div class="lc-item">Deal structuring &amp; tax plan</div>
                    <div class="lc-item">Post-exit investment blueprint</div>
                    <div class="lc-item">Retirement corpus activation</div>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- ══════════════════════════════════════════════════════════
     SUCCESSION & EXIT — DARK
══════════════════════════════════════════════════════════ -->
<section class="section bp-succession">
    <div class="container">
        <div class="section-header center">
            <span class="section-label" data-aos="fade-up">Exit Planning</span>
            <h2 class="section-title" data-aos="fade-up" data-aos-delay="80">
                Every Business Exit Has a <span>Price Tag — </span>
                Make Yours the Highest Possible
            </h2>
            <p class="section-sub" style="margin:0 auto" data-aos="fade-up" data-aos-delay="140">
                The exit you plan 5 years in advance always yields 2–3× more than the one
                forced by circumstances. Here's how WealthBridge structures yours.
            </p>
        </div>

        <div class="succession-layout">

            <!-- Exit Options -->
            <div data-aos="fade-right" data-aos-delay="100">
                <h3 style="font-size:14px;font-weight:700;color:rgba(255,255,255,0.5);letter-spacing:1.5px;text-transform:uppercase;margin-bottom:20px">Exit Pathways</h3>
                <div class="exit-options">
                    <div class="exit-card">
                        <div class="exit-card-head">
                            <div class="exit-card-title">Family Succession</div>
                            <div class="exit-card-mult">Planned</div>
                        </div>
                        <div class="exit-card-desc">Transfer ownership to the next generation with minimal tax, structured mentorship timelines, and clear governance frameworks to avoid family disputes.</div>
                        <div class="exit-card-tags">
                            <span class="exit-tag">Will &amp; Trust</span>
                            <span class="exit-tag">Gift Deed</span>
                            <span class="exit-tag">Shareholding Transfer</span>
                        </div>
                    </div>
                    <div class="exit-card">
                        <div class="exit-card-head">
                            <div class="exit-card-title">Strategic Sale</div>
                            <div class="exit-card-mult">2–4× Revenue</div>
                        </div>
                        <div class="exit-card-desc">Sell to a competitor, PE firm, or strategic acquirer at a premium valuation. Requires 3–5 years of preparation — clean books, documented processes, and consistent growth.</div>
                        <div class="exit-card-tags">
                            <span class="exit-tag">Valuation Report</span>
                            <span class="exit-tag">Due Diligence Prep</span>
                            <span class="exit-tag">Deal Structuring</span>
                        </div>
                    </div>
                    <div class="exit-card">
                        <div class="exit-card-head">
                            <div class="exit-card-title">Management Buyout</div>
                            <div class="exit-card-mult">1.5–2.5× EBITDA</div>
                        </div>
                        <div class="exit-card-desc">Sell to your existing management team. Enables a smooth transition, preserves culture, and often closes faster with less disruption than external sales.</div>
                        <div class="exit-card-tags">
                            <span class="exit-tag">MBO Structure</span>
                            <span class="exit-tag">Seller Financing</span>
                            <span class="exit-tag">Earn-out Plan</span>
                        </div>
                    </div>
                    <div class="exit-card">
                        <div class="exit-card-head">
                            <div class="exit-card-title">Merger / Acquisition</div>
                            <div class="exit-card-mult">3–6× EBITDA</div>
                        </div>
                        <div class="exit-card-desc">Merge with a complementary business for scale, then exit the combined entity at a higher multiple. Requires meticulous legal and financial structuring.</div>
                        <div class="exit-card-tags">
                            <span class="exit-tag">Share Swap</span>
                            <span class="exit-tag">Cash + Equity</span>
                            <span class="exit-tag">Capital Gains Plan</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Succession Checklist -->
            <div data-aos="fade-left" data-aos-delay="160">
                <div class="succession-checklist">
                    <div class="sc-title">Succession Readiness Checklist</div>
                    <div class="sc-items">
                        <div class="sc-item">
                            <div class="sc-icon"><i class="fas fa-balance-scale"></i></div>
                            <div>
                                <div class="sc-item-title">Business Valuation Report</div>
                                <div class="sc-item-desc">A formal EBITDA or revenue multiple valuation updated annually — essential for any sale or transfer.</div>
                            </div>
                        </div>
                        <div class="sc-item">
                            <div class="sc-icon"><i class="fas fa-file-alt"></i></div>
                            <div>
                                <div class="sc-item-title">Documented SOPs &amp; Processes</div>
                                <div class="sc-item-desc">Buyers pay more for businesses that don't depend entirely on the owner's presence.</div>
                            </div>
                        </div>
                        <div class="sc-item">
                            <div class="sc-icon"><i class="fas fa-book"></i></div>
                            <div>
                                <div class="sc-item-title">Clean Financial Records (3 years)</div>
                                <div class="sc-item-desc">Audited financials with consistent revenue recognition. No personal expenses through business accounts.</div>
                            </div>
                        </div>
                        <div class="sc-item">
                            <div class="sc-icon"><i class="fas fa-scroll"></i></div>
                            <div>
                                <div class="sc-item-title">Will, Trust &amp; Shareholder Agreement</div>
                                <div class="sc-item-desc">Legal documents defining ownership transfer, dispute resolution, and family succession protocol.</div>
                            </div>
                        </div>
                        <div class="sc-item">
                            <div class="sc-icon"><i class="fas fa-shield-alt"></i></div>
                            <div>
                                <div class="sc-item-title">Keyman &amp; Business Insurance</div>
                                <div class="sc-item-desc">Protect the business (and its value) against the loss of key personnel or owner incapacity.</div>
                            </div>
                        </div>
                        <div class="sc-item">
                            <div class="sc-icon"><i class="fas fa-piggy-bank"></i></div>
                            <div>
                                <div class="sc-item-title">Post-Exit Reinvestment Blueprint</div>
                                <div class="sc-item-desc">A detailed plan for deploying exit proceeds — to sustain lifestyle, fund retirement, and minimise capital gains tax.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- ══════════════════════════════════════════════════════════
     CALC STRIP — RED
══════════════════════════════════════════════════════════ -->
<div class="calc-strip" data-aos="fade-up">
    <div class="container">
        <div class="calc-strip-inner">
            <div>
                <div class="calc-strip__title">What Is Your Business Worth Right Now?</div>
                <p class="calc-strip__desc">
                    Enter your annual revenue, EBITDA, and industry — our quick business
                    valuation estimator gives you a realistic multiple range in under
                    2 minutes. Know your number before anyone else does.
                </p>
            </div>
            <a href="investment-calculator" class="btn btn-white">
                Try Business Valuation Tool
                <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </div>
</div>


<!-- ══════════════════════════════════════════════════════════
     ENTITY STRUCTURE COMPARISON — GRAY-50
══════════════════════════════════════════════════════════ -->
<section class="section bp-entity">
    <div class="container">
        <div class="section-header center">
            <span class="section-label" data-aos="fade-up">Choose Wisely</span>
            <h2 class="section-title" data-aos="fade-up" data-aos-delay="80">
                Which Business <span>Entity Structure</span> Is Right for You?
            </h2>
            <p class="section-sub" style="margin:0 auto" data-aos="fade-up" data-aos-delay="140">
                The wrong structure costs you lakhs in tax, leaves your personal assets
                exposed, and limits your fundraising options. Here's the complete picture.
            </p>
        </div>

        <div class="entity-table-wrap" data-aos="fade-up" data-aos-delay="180">
            <table class="entity-table">
                <thead>
                    <tr>
                        <th>Feature</th>
                        <th>Proprietorship</th>
                        <th class="th-red">Private Limited</th>
                        <th>LLP</th>
                        <th>HUF</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Personal Liability Protection</td>
                        <td><i class="fas fa-times et-no"></i></td>
                        <td><i class="fas fa-check et-yes"></i></td>
                        <td><i class="fas fa-check et-yes"></i></td>
                        <td><span class="et-warn">Partial</span></td>
                    </tr>
                    <tr>
                        <td>Corporate Tax Rate</td>
                        <td><span class="et-tag">Slab rate</span></td>
                        <td><span class="et-tag">22–25%</span></td>
                        <td><span class="et-tag">30% flat</span></td>
                        <td><span class="et-tag">Slab rate</span></td>
                    </tr>
                    <tr>
                        <td>Fundraising / Equity</td>
                        <td><i class="fas fa-times et-no"></i></td>
                        <td><i class="fas fa-check et-yes"></i></td>
                        <td><span class="et-warn">Limited</span></td>
                        <td><i class="fas fa-times et-no"></i></td>
                    </tr>
                    <tr>
                        <td>Ease of Setup &amp; Compliance</td>
                        <td><i class="fas fa-check et-yes"></i></td>
                        <td><span class="et-warn">Moderate</span></td>
                        <td><i class="fas fa-check et-yes"></i></td>
                        <td><i class="fas fa-check et-yes"></i></td>
                    </tr>
                    <tr>
                        <td>Separate Legal Identity</td>
                        <td><i class="fas fa-times et-no"></i></td>
                        <td><i class="fas fa-check et-yes"></i></td>
                        <td><i class="fas fa-check et-yes"></i></td>
                        <td><i class="fas fa-times et-no"></i></td>
                    </tr>
                    <tr>
                        <td>Salary to Owner (tax-deductible)</td>
                        <td><i class="fas fa-times et-no"></i></td>
                        <td><i class="fas fa-check et-yes"></i></td>
                        <td><i class="fas fa-check et-yes"></i></td>
                        <td><i class="fas fa-times et-no"></i></td>
                    </tr>
                    <tr>
                        <td>Dividend Distribution Tax</td>
                        <td><i class="fas fa-times et-no"></i></td>
                        <td><span class="et-tag">At owner slab</span></td>
                        <td><i class="fas fa-times et-no"></i></td>
                        <td><i class="fas fa-times et-no"></i></td>
                    </tr>
                    <tr>
                        <td>Perpetual Existence</td>
                        <td><i class="fas fa-times et-no"></i></td>
                        <td><i class="fas fa-check et-yes"></i></td>
                        <td><i class="fas fa-check et-yes"></i></td>
                        <td><i class="fas fa-times et-no"></i></td>
                    </tr>
                    <tr>
                        <td>Best For</td>
                        <td><span class="et-tag">Freelancers / Solo</span></td>
                        <td><span class="et-tag">Growth businesses</span></td>
                        <td><span class="et-tag">Professional firms</span></td>
                        <td><span class="et-tag">Family businesses</span></td>
                    </tr>
                    <tr>
                        <td>WealthBridge Recommendation</td>
                        <td>Low revenue only</td>
                        <td><i class="fas fa-star" style="color:var(--red)"></i> Most recommended</td>
                        <td>Services &amp; professionals</td>
                        <td>Tax-splitting families</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>


<!-- ══════════════════════════════════════════════════════════
     PROCESS — DARK
══════════════════════════════════════════════════════════ -->
<section class="section bp-process">
    <div class="container">
        <div class="section-header center">
            <span class="section-label" data-aos="fade-up">Our Process</span>
            <h2 class="section-title" data-aos="fade-up" data-aos-delay="80">
                How We Build Your <span>Business Financial Plan</span>
            </h2>
            <p class="section-sub" style="margin:0 auto" data-aos="fade-up" data-aos-delay="140">
                Five structured steps — from understanding your business to building
                a plan that works in the boardroom and at the dinner table.
            </p>
        </div>

        <div class="process-steps">
            <div class="process-step" data-aos="fade-up" data-aos-delay="0">
                <div class="process-num">1</div>
                <h4>Business Discovery</h4>
                <p>Deep-dive into revenue model, structure, team, goals, and personal financial picture of every founder.</p>
            </div>
            <div class="process-step" data-aos="fade-up" data-aos-delay="100">
                <div class="process-num">2</div>
                <h4>Financial Audit</h4>
                <p>Review P&amp;L, balance sheet, tax filings, existing insurance, and personal portfolio for gaps and overlaps.</p>
            </div>
            <div class="process-step" data-aos="fade-up" data-aos-delay="200">
                <div class="process-num">3</div>
                <h4>Strategy Blueprint</h4>
                <p>Written business financial plan — entity structure, tax strategy, valuation roadmap, and personal wealth plan.</p>
            </div>
            <div class="process-step" data-aos="fade-up" data-aos-delay="300">
                <div class="process-num">4</div>
                <h4>Implementation</h4>
                <p>We execute the plan — restructuring, SIP setup, insurance, tax filing, and legal documentation — with our partner network.</p>
            </div>
            <div class="process-step" data-aos="fade-up" data-aos-delay="400">
                <div class="process-num">5</div>
                <h4>Quarterly Reviews</h4>
                <p>Check-ins every quarter — adapting the plan to business growth, market changes, and evolving personal goals.</p>
            </div>
        </div>
    </div>
</section>


<!-- ══════════════════════════════════════════════════════════
     TESTIMONIALS — WHITE
══════════════════════════════════════════════════════════ -->
<section class="section bp-testimonials">
    <div class="container">
        <div class="section-header center">
            <span class="section-label" data-aos="fade-up">Client Stories</span>
            <h2 class="section-title" data-aos="fade-up" data-aos-delay="80">
                Business Owners Who <span>Took Control</span>
            </h2>
        </div>

        <div class="testimonials-grid">
            <div class="testi-card" data-aos="fade-up" data-aos-delay="0">
                <div class="testi-stars">★★★★★</div>
                <div class="testi-quote">"</div>
                <p class="testi-text">
                    I had been running my manufacturing business as a proprietorship for 12 years
                    and paying 30% tax on everything. WealthBridge moved me to Pvt Ltd, optimised
                    my salary structure, and I saved ₹5.2L in tax in the first year alone.
                </p>
                <div class="testi-author">
                    <div class="testi-avatar">VS</div>
                    <div>
                        <div class="testi-name">Vijay Shetty</div>
                        <div class="testi-role">Manufacturing Owner, Pune · ₹3.2Cr annual revenue</div>
                    </div>
                </div>
            </div>

            <div class="testi-card" data-aos="fade-up" data-aos-delay="100">
                <div class="testi-stars">★★★★★</div>
                <div class="testi-quote">"</div>
                <p class="testi-text">
                    When a PE firm approached us for acquisition, we had no valuation, messy
                    books, and no succession plan. WealthBridge helped us get exit-ready in
                    18 months — we closed at 3.8× revenue, not the 1.8× they first offered.
                </p>
                <div class="testi-author">
                    <div class="testi-avatar">AB</div>
                    <div>
                        <div class="testi-name">Anand Bhatia</div>
                        <div class="testi-role">Tech Services Founder, Bengaluru · ₹8.4Cr exit</div>
                    </div>
                </div>
            </div>

            <div class="testi-card" data-aos="fade-up" data-aos-delay="200">
                <div class="testi-stars">★★★★★</div>
                <div class="testi-quote">"</div>
                <p class="testi-text">
                    As a doctor running a clinic, I had no separation between my personal and
                    professional finances. WealthBridge built an LLP structure, set up a proper
                    salary, and started a ₹25K monthly SIP — all from business surplus.
                </p>
                <div class="testi-author">
                    <div class="testi-avatar">DR</div>
                    <div>
                        <div class="testi-name">Dr. Deepa Rao</div>
                        <div class="testi-role">Orthopaedic Surgeon &amp; Clinic Owner, Chennai</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ══════════════════════════════════════════════════════════
     FAQ — GRAY-50
══════════════════════════════════════════════════════════ -->
<section class="section bp-faq">
    <div class="container">
        <div class="faq-layout">

            <div class="faq-intro" data-aos="fade-right">
                <span class="section-label">FAQ</span>
                <h2 class="section-title">
                    Business Planning <span>Questions</span>
                </h2>
                <p class="section-sub">
                    Straight answers about business financial advisory —
                    no jargon, no generic advice.
                </p>
                <div class="faq-intro-cta">
                    <a href="#contact" class="btn btn-primary btn-sm">
                        Ask an Advisor <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <div class="faq-list" data-aos="fade-left" data-aos-delay="120">

                <div class="faq-item">
                    <button class="faq-q">
                        <span class="faq-q-text">Should I convert my proprietorship to a Private Limited company?</span>
                        <span class="faq-icon"><i class="fas fa-plus"></i></span>
                    </button>
                    <div class="faq-a">
                        Generally yes — once your annual profit exceeds ₹15–20L. A Pvt Ltd pays 22–25%
                        corporate tax vs 30% personal slab rate on the same profit. You can also pay
                        yourself a tax-deductible salary, and the company's liabilities stay separate from
                        your personal assets. The annual compliance cost (₹30–60K) is almost always
                        recovered through tax savings within the first year.
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-q">
                        <span class="faq-q-text">How do I calculate what my business is worth?</span>
                        <span class="faq-icon"><i class="fas fa-plus"></i></span>
                    </button>
                    <div class="faq-a">
                        Business valuation depends on your industry and growth profile. Common methods: (1)
                        Revenue multiple — typically 0.5–3× annual revenue for SMEs; (2) EBITDA multiple —
                        typically 3–8× EBITDA for established businesses; (3) Asset value for asset-heavy
                        businesses. The multiple varies by industry, growth rate, client concentration, and
                        whether the business runs independently of the owner. WealthBridge provides formal
                        valuations updated annually.
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-q">
                        <span class="faq-q-text">What is keyman insurance and do I need it?</span>
                        <span class="faq-icon"><i class="fas fa-plus"></i></span>
                    </button>
                    <div class="faq-a">
                        Keyman insurance is a life/critical illness policy taken by a business on a key
                        person (typically the founder or senior leadership) where the company is the
                        beneficiary. If that person dies or becomes critically ill, the payout protects
                        the business from the financial shock of losing them. The premium is a
                        business expense (tax-deductible). For any business where one person drives
                        significant revenue, keyman insurance is essential — not optional.
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-q">
                        <span class="faq-q-text">When should I start planning my business exit?</span>
                        <span class="faq-icon"><i class="fas fa-plus"></i></span>
                    </button>
                    <div class="faq-a">
                        Ideally 5–7 years before you want to exit. This gives enough time to: clean up
                        financials, reduce owner-dependency, build documented processes, grow to the
                        right valuation threshold, and structure the deal for minimum capital gains tax.
                        Exits planned under pressure (health, market downturn, partner dispute) almost
                        always yield 30–50% less than strategically planned exits. Start early.
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-q">
                        <span class="faq-q-text">How do I separate my personal and business finances?</span>
                        <span class="faq-icon"><i class="fas fa-plus"></i></span>
                    </button>
                    <div class="faq-a">
                        Start with: (1) Dedicated business bank account — never mix personal transactions,
                        (2) Fixed monthly salary to yourself from the business — not ad-hoc withdrawals,
                        (3) All business expenses invoiced and documented properly, (4) Personal SIPs and
                        investments funded only from personal salary account. The cleaner the separation,
                        the lower your tax liability and the higher your business valuation.
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-q">
                        <span class="faq-q-text">Do you work with businesses outside major cities?</span>
                        <span class="faq-icon"><i class="fas fa-plus"></i></span>
                    </button>
                    <div class="faq-a">
                        Yes — 100% of our advisory work can be done remotely via video consultation,
                        secure document sharing, and digital signatures. We work with business owners
                        across India, including tier-2 and tier-3 cities, as well as NRI-owned businesses
                        operating in India. Geography is no barrier to getting the right financial advice.
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>


<!-- ══════════════════════════════════════════════════════════
     CTA BAND — DARK
══════════════════════════════════════════════════════════ -->
<section class="bp-cta" id="contact">
    <div class="container">
        <div class="bp-cta-inner">
            <span class="section-label" style="justify-content:center;display:flex" data-aos="fade-up">
                Your Business. Your Legacy.
            </span>
            <h2 class="cta-title" data-aos="fade-up" data-aos-delay="80">
                Your Business Deserves a<br>
                <span>Financial Plan as Ambitious as You Are.</span>
            </h2>
            <p class="cta-desc" data-aos="fade-up" data-aos-delay="140">
                Stop leaving money in the wrong structure, paying avoidable tax, and running
                without an exit plan. Book a free business financial review with WealthBridge
                — and see exactly what's possible.
            </p>
            <div class="cta-actions" data-aos="fade-up" data-aos-delay="200">
                <a href="contact" class="btn btn-primary">
                    Book Free Business Review
                    <i class="fas fa-arrow-right"></i>
                </a>
                <a href="tel:+911800000000" class="btn btn-ghost">
                    <i class="fas fa-phone"></i>
                    Call 1800-000-000
                </a>
            </div>

            <div class="cta-trust" data-aos="fade-up" data-aos-delay="280">
                <div class="ct-item"><i class="fas fa-check-circle"></i> SEBI Registered Adviser</div>
                <div class="ct-item"><i class="fas fa-check-circle"></i> 1,200+ Businesses Served</div>
                <div class="ct-item"><i class="fas fa-check-circle"></i> 100% Confidential</div>
                <div class="ct-item"><i class="fas fa-check-circle"></i> First Session Free</div>
            </div>
        </div>
    </div>
</section>


<!-- ══════════════════════════════════════════════════════════
     RELATED SERVICES — WHITE
══════════════════════════════════════════════════════════ -->
<section class="section bp-related">
    <div class="container">
        <div class="section-header">
            <span class="section-label" data-aos="fade-right">Also Explore</span>
            <h2 class="section-title" data-aos="fade-up" data-aos-delay="80">
                Related <span>Advisory Services</span>
            </h2>
        </div>

        <div class="related-grid">
            <a href="tax-efficient-investment" class="rel-card" data-aos="fade-up" data-aos-delay="0">
                <div class="rc-icon"><i class="fas fa-file-invoice-dollar"></i></div>
                <h4>Tax-Efficient Investment</h4>
                <p>Maximise business expense deductions, salary structuring, and owner tax savings.</p>
                <span class="rc-link">Explore <i class="fas fa-arrow-right"></i></span>
            </a>
            <a href="investment-planning" class="rel-card" data-aos="fade-up" data-aos-delay="80">
                <div class="rc-icon"><i class="fas fa-briefcase"></i></div>
                <h4>Investment Planning</h4>
                <p>Deploy business surplus and personal salary into a growing wealth portfolio.</p>
                <span class="rc-link">Explore <i class="fas fa-arrow-right"></i></span>
            </a>
            <a href="life-insurance" class="rel-card" data-aos="fade-up" data-aos-delay="160">
                <div class="rc-icon"><i class="fas fa-shield-alt"></i></div>
                <h4>Life Insurance</h4>
                <p>Keyman insurance, term plans, and business continuity coverage for founders.</p>
                <span class="rc-link">Explore <i class="fas fa-arrow-right"></i></span>
            </a>
            <a href="wealth-management" class="rel-card" data-aos="fade-up" data-aos-delay="240">
                <div class="rc-icon"><i class="fas fa-gem"></i></div>
                <h4>Wealth Management</h4>
                <p>Post-exit wealth strategy — deploying your liquidity event into lasting wealth.</p>
                <span class="rc-link">Explore <i class="fas fa-arrow-right"></i></span>
            </a>
        </div>
    </div>
</section>


<!-- Page JS -->
<script>
(function () {

 

    /* Animated bar fills */
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
    observeFills('.bpwc-fill');

 
 

})();
</script>

<?php include_once ('elements/footer.php'); ?>