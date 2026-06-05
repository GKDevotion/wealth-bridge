<?php include_once ('elements/header.php'); ?>

<!-- Page CSS -->
<link href="<?php echo UrlHelper::asset('css/tax-efficient-investment.css'); ?>" rel="stylesheet">


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
            <span class="current">Tax-Efficient Investment</span>
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
    <div class="sh-watermark">80C</div>

    <div class="container">
        <div class="sh-content">

            <!-- LEFT -->
            <div class="sh-left">

                <div class="hero__label" data-aos="fade-right" data-aos-duration="700">
                    Our Services &nbsp;·&nbsp; Tax Planning
                </div>

                <h1 class="hero__title" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                    Stop Overpaying Tax.
                    <em>Start Growing</em>
                    Smarter Wealth.
                </h1>

                <p class="hero__subtitle" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                    Most Indians pay ₹1–3 lakhs more in tax than they legally need to.
                    WealthBridge engineers a tax-efficient investment strategy that legally
                    reduces your tax outflow — and redirects that money into wealth creation.
                </p>

                <div class="hero__actions" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                    <a href="#contact" class="btn btn-primary">
                        Get Free Tax Review
                        <i class="fas fa-arrow-right"></i>
                    </a>
                    <a href="#instruments" class="btn btn-ghost">
                        View Tax Instruments
                        <i class="fas fa-chevron-down"></i>
                    </a>
                </div>

                <!-- Stats strip -->
                <div class="hero__stats" data-aos="fade-up" data-aos-duration="800" data-aos-delay="420">
                    <div>
                        <div class="hero__stat-num" data-counter="150000" data-suffix="">₹1.5L+</div>
                        <div class="hero__stat-label">Avg. Tax Saved</div>
                    </div>
                    <div>
                        <div class="hero__stat-num" data-counter="8000" data-suffix="+">8,000+</div>
                        <div class="hero__stat-label">Returns Filed</div>
                    </div>
                    <div>
                        <div class="hero__stat-num" data-counter="100" data-suffix="%">100%</div>
                        <div class="hero__stat-label">Legal &amp; SEBI Compliant</div>
                    </div>
                </div>

            </div><!-- /sh-left -->


            <!-- RIGHT: Tax Savings Card -->
            <div class="hero__visual" data-aos="fade-left" data-aos-duration="900" data-aos-delay="200">

                <!-- float top-right -->
                <div class="hero__float f1">
                    <div class="hero__float-label">This FY Tax Saved</div>
                    <div class="hero__float-val">₹2.3L <span>✓</span></div>
                    <div class="hero__float-sub">Across 80C, 80D &amp; NPS</div>
                </div>

                <!-- main card -->
                <div class="hero__card-main">
                    <div class="hero__card-header">
                        <span class="hero__card-title">Tax Savings Breakdown</span>
                        <span class="hero__card-badge">
                            <span class="hero__card-badge-dot"></span>
                            FY 2024–25
                        </span>
                    </div>

                    <!-- stacked bar breakdown -->
                    <div class="hero__tax-breakdown">
                        <div class="htb-row">
                            <div class="htb-top">
                                <span class="htb-section">
                                    <span class="htb-dot" style="background:var(--red)"></span>
                                    Section 80C (ELSS + PPF)
                                </span>
                                <span class="htb-amount">₹1,50,000</span>
                            </div>
                            <div class="htb-track">
                                <div class="htb-fill c1" style="--w:100%"></div>
                            </div>
                        </div>
                        <div class="htb-row">
                            <div class="htb-top">
                                <span class="htb-section">
                                    <span class="htb-dot" style="background:#f97316"></span>
                                    Section 80D (Health Insurance)
                                </span>
                                <span class="htb-amount">₹75,000</span>
                            </div>
                            <div class="htb-track">
                                <div class="htb-fill c2" style="--w:50%"></div>
                            </div>
                        </div>
                        <div class="htb-row">
                            <div class="htb-top">
                                <span class="htb-section">
                                    <span class="htb-dot" style="background:#eab308"></span>
                                    NPS 80CCD(1B)
                                </span>
                                <span class="htb-amount">₹50,000</span>
                            </div>
                            <div class="htb-track">
                                <div class="htb-fill c3" style="--w:33%"></div>
                            </div>
                        </div>
                        <div class="htb-row">
                            <div class="htb-top">
                                <span class="htb-section">
                                    <span class="htb-dot" style="background:#22c55e"></span>
                                    HRA Exemption
                                </span>
                                <span class="htb-amount">₹1,80,000</span>
                            </div>
                            <div class="htb-track">
                                <div class="htb-fill c4" style="--w:80%"></div>
                            </div>
                        </div>
                        <div class="htb-row">
                            <div class="htb-top">
                                <span class="htb-section">
                                    <span class="htb-dot" style="background:#3b82f6"></span>
                                    Home Loan (24b + 80EEA)
                                </span>
                                <span class="htb-amount">₹3,50,000</span>
                            </div>
                            <div class="htb-track">
                                <div class="htb-fill c5" style="--w:70%"></div>
                            </div>
                        </div>
                    </div>

                    <!-- total saved highlight -->
                    <div class="hero__tax-total">
                        <span class="htt-label">Total Deductions</span>
                        <span class="htt-value">₹8,05,000 <span>saved</span></span>
                    </div>

                    <!-- metrics 2×2 -->
                    <div class="hero__metrics">
                        <div class="hero__metric">
                            <div class="hero__metric-label">Tax Saved (30% slab)</div>
                            <div class="hero__metric-val">₹2.4L <span class="up">▲</span></div>
                        </div>
                        <div class="hero__metric">
                            <div class="hero__metric-label">Effective Tax Rate</div>
                            <div class="hero__metric-val">12.4% <span class="up">↓</span></div>
                        </div>
                        <div class="hero__metric">
                            <div class="hero__metric-label">ELSS Returns (3yr)</div>
                            <div class="hero__metric-val">+22.1% <span class="up">▲</span></div>
                        </div>
                        <div class="hero__metric">
                            <div class="hero__metric-label">Lock-in Period</div>
                            <div class="hero__metric-val">3 Yrs <span class="neu">●</span></div>
                        </div>
                    </div>
                </div><!-- /hero__card-main -->

                <!-- float bottom-left -->
                <div class="hero__float f2">
                    <div class="hero__float-label">Tax Regime Saved</div>
                    <div class="hero__float-val">Old <span>vs</span> New</div>
                    <div class="hero__float-sub">Old regime saves ₹2.4L more</div>
                </div>

            </div><!-- /hero__visual -->
        </div>
    </div>
</section>


<!-- ══════════════════════════════════════════════════════════
     WHY TAX-EFFICIENT INVESTING — WHITE
══════════════════════════════════════════════════════════ -->
<section class="section tei-why">
    <div class="container">
        <div class="tei-why-grid">

            <!-- LEFT -->
            <div class="tei-why-content">
                <span class="section-label" data-aos="fade-right">The Opportunity</span>
                <h2 class="section-title" data-aos="fade-up" data-aos-delay="80">
                    Every Rupee Saved in Tax<br>is a Rupee <span>Invested for Free</span>
                </h2>
                <div style="width:48px;height:3px;background:var(--red);border-radius:2px;margin-bottom:20px"
                     data-aos="fade-left" data-aos-delay="120"></div>
                <p class="section-sub" data-aos="fade-up" data-aos-delay="160">
                    Tax planning isn't just about saving tax — it's about redirecting your
                    tax outflow into compounding assets. A ₹1.5L Section 80C investment that
                    saves ₹45,000 in tax delivers a 30% instant return before a single rupee
                    of market growth.
                </p>

                <div class="tei-why-features" data-aos="fade-up" data-aos-delay="220">
                    <div class="teif-card">
                        <div class="teif-icon"><i class="fas fa-percentage"></i></div>
                        <div class="teif-title">Reduce Taxable Income</div>
                        <div class="teif-desc">Deductions under 80C, 80D, 80CCD, HRA, and home loan systematically cut your gross taxable income.</div>
                    </div>
                    <div class="teif-card">
                        <div class="teif-icon"><i class="fas fa-chart-pie"></i></div>
                        <div class="teif-title">ELSS — Dual Benefit</div>
                        <div class="teif-desc">India's best tax-saving instrument: ₹1.5L deduction + equity-level returns with just 3-year lock-in.</div>
                    </div>
                    <div class="teif-card">
                        <div class="teif-icon"><i class="fas fa-balance-scale"></i></div>
                        <div class="teif-title">Old vs New Regime</div>
                        <div class="teif-desc">We calculate both regimes for your exact income and deduction profile — and recommend the one that saves you more.</div>
                    </div>
                    <div class="teif-card">
                        <div class="teif-icon"><i class="fas fa-seedling"></i></div>
                        <div class="teif-title">Long-Term Compounding</div>
                        <div class="teif-desc">Tax savings reinvested consistently compound into significant wealth over 10–20 year horizons.</div>
                    </div>
                </div>
            </div>

            <!-- RIGHT: dark chart card -->
            <div class="tei-why-visual" data-aos="fade-left" data-aos-delay="180">
                <div class="tei-why-bg-block"></div>

                <div class="tei-badge-float f2">
                    <div class="teibf-inner">
                        <div class="teibf-icon"><i class="fas fa-certificate"></i></div>
                        <div>
                            <div class="teibf-num">SEBI</div>
                            <div class="teibf-label">Registered RIA</div>
                        </div>
                    </div>
                </div>

                <div class="tei-why-card">
                    <div class="teiwc-title">Impact of Tax-Efficient Investing</div>

                    <div class="teiwc-row">
                        <div class="teiwc-row-top">
                            <span>Clients who optimise 80C fully</span>
                            <span>Only 34%</span>
                        </div>
                        <div class="teiwc-track"><div class="teiwc-fill" style="--w:34%"></div></div>
                    </div>
                    <div class="teiwc-row">
                        <div class="teiwc-row-top">
                            <span>Avg. tax saved per client (p.a.)</span>
                            <span>₹1.52L</span>
                        </div>
                        <div class="teiwc-track"><div class="teiwc-fill" style="--w:76%"></div></div>
                    </div>
                    <div class="teiwc-row">
                        <div class="teiwc-row-top">
                            <span>ELSS vs FD return gap (5yr avg)</span>
                            <span>+9.4% pa</span>
                        </div>
                        <div class="teiwc-track"><div class="teiwc-fill" style="--w:82%"></div></div>
                    </div>
                    <div class="teiwc-row">
                        <div class="teiwc-row-top">
                            <span>NPS tax benefit utilisers</span>
                            <span>Only 18%</span>
                        </div>
                        <div class="teiwc-track"><div class="teiwc-fill" style="--w:18%"></div></div>
                    </div>
                    <div class="teiwc-row">
                        <div class="teiwc-row-top">
                            <span>Clients choosing right tax regime</span>
                            <span>+62% savings</span>
                        </div>
                        <div class="teiwc-track"><div class="teiwc-fill" style="--w:88%"></div></div>
                    </div>

                    <div class="teiwc-footer">
                        <div>
                            <div class="teiwc-stat-num">₹1.5L</div>
                            <div class="teiwc-stat-label">Avg. annual tax saved</div>
                        </div>
                        <div>
                            <div class="teiwc-stat-num">30%</div>
                            <div class="teiwc-stat-label">Instant return on 80C</div>
                        </div>
                    </div>
                </div>

                <div class="tei-badge-float f1">
                    <div class="teibf-inner">
                        <div class="teibf-icon"><i class="fas fa-users"></i></div>
                        <div>
                            <div class="teibf-num">8,000+</div>
                            <div class="teibf-label">Returns Optimised</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- ══════════════════════════════════════════════════════════
     TAX INSTRUMENTS — GRAY-50
══════════════════════════════════════════════════════════ -->
<section class="section tei-instruments" id="instruments">
    <div class="container">
        <div class="section-header center">
            <span class="section-label" data-aos="fade-up">Your Tax Toolkit</span>
            <h2 class="section-title" data-aos="fade-up" data-aos-delay="80">
                Every Legal <span>Tax-Saving Instrument</span>, Explained
            </h2>
            <p class="section-sub" style="margin:0 auto" data-aos="fade-up" data-aos-delay="140">
                India's Income Tax Act offers dozens of deduction sections. We identify which
                ones apply to your income profile and deploy them in the optimal order.
            </p>
        </div>

        <div class="instruments-grid" data-aos="fade-up" data-aos-delay="180">

            <!-- 80C -->
            <div class="instr-card">
                <div class="instr-tag tag-80c"><i class="fas fa-star"></i> Most Used</div>
                <div class="instr-icon"><i class="fas fa-piggy-bank"></i></div>
                <div class="instr-title">Section 80C</div>
                <div class="instr-section">ELSS · PPF · EPF · NSC · SCSS · Tax-Saver FD · Life Insurance</div>
                <div class="instr-desc">
                    The most powerful single deduction available. Deploy strategically —
                    ELSS for growth, PPF for guaranteed returns, and EPF as automatic savings.
                </div>
                <div class="instr-limit">
                    <span class="instr-limit-label">Maximum Deduction</span>
                    <span class="instr-limit-val">₹1,50,000 / year</span>
                </div>
                <a href="#contact" class="instr-link">Optimise Now <i class="fas fa-arrow-right"></i></a>
            </div>

            <!-- 80D -->
            <div class="instr-card">
                <div class="instr-tag tag-80d"><i class="fas fa-heartbeat"></i> Health</div>
                <div class="instr-icon"><i class="fas fa-shield-alt"></i></div>
                <div class="instr-title">Section 80D</div>
                <div class="instr-section">Health Insurance Premiums (Self + Family + Parents)</div>
                <div class="instr-desc">
                    Deduction for health insurance premiums paid for self, spouse, children,
                    and parents. Senior citizen parents unlock the highest limit.
                </div>
                <div class="instr-limit">
                    <span class="instr-limit-label">Maximum Deduction</span>
                    <span class="instr-limit-val">₹75,000 / year</span>
                </div>
                <a href="#contact" class="instr-link">Optimise Now <i class="fas fa-arrow-right"></i></a>
            </div>

            <!-- 80CCD(1B) NPS -->
            <div class="instr-card">
                <div class="instr-tag tag-80ccd"><i class="fas fa-plus-circle"></i> Extra</div>
                <div class="instr-icon"><i class="fas fa-umbrella"></i></div>
                <div class="instr-title">Section 80CCD(1B)</div>
                <div class="instr-section">NPS — National Pension System (additional contribution)</div>
                <div class="instr-desc">
                    An <em>additional</em> ₹50,000 deduction over and above the ₹1.5L 80C
                    limit — exclusively for NPS contributions. Often ignored; highly impactful.
                </div>
                <div class="instr-limit">
                    <span class="instr-limit-label">Maximum Deduction</span>
                    <span class="instr-limit-val">₹50,000 / year</span>
                </div>
                <a href="#contact" class="instr-link">Optimise Now <i class="fas fa-arrow-right"></i></a>
            </div>

            <!-- 24B Home Loan -->
            <div class="instr-card">
                <div class="instr-tag tag-ltcg"><i class="fas fa-home"></i> Property</div>
                <div class="instr-icon"><i class="fas fa-home"></i></div>
                <div class="instr-title">Section 24(b) + 80EEA</div>
                <div class="instr-section">Home Loan Interest + Affordable Housing Benefit</div>
                <div class="instr-desc">
                    Deduction on home loan interest up to ₹2L under Sec 24(b) + additional
                    ₹1.5L under 80EEA for first-time affordable housing buyers.
                </div>
                <div class="instr-limit">
                    <span class="instr-limit-label">Maximum Deduction</span>
                    <span class="instr-limit-val">Up to ₹3,50,000</span>
                </div>
                <a href="#contact" class="instr-link">Optimise Now <i class="fas fa-arrow-right"></i></a>
            </div>

            <!-- HRA -->
            <div class="instr-card">
                <div class="instr-tag tag-hra"><i class="fas fa-building"></i> Salaried</div>
                <div class="instr-icon"><i class="fas fa-city"></i></div>
                <div class="instr-title">HRA Exemption</div>
                <div class="instr-section">House Rent Allowance — Section 10(13A)</div>
                <div class="instr-desc">
                    One of the largest exemptions for salaried individuals paying rent.
                    Calculated based on actual HRA, rent paid, and city category.
                    Often unclaimed due to incorrect documentation.
                </div>
                <div class="instr-limit">
                    <span class="instr-limit-label">Typical Exemption</span>
                    <span class="instr-limit-val">₹1–3L+ / year</span>
                </div>
                <a href="#contact" class="instr-link">Optimise Now <i class="fas fa-arrow-right"></i></a>
            </div>

            <!-- LTCG / STCG -->
            <div class="instr-card">
                <div class="instr-tag tag-nri"><i class="fas fa-chart-line"></i> Capital Gains</div>
                <div class="instr-icon"><i class="fas fa-coins"></i></div>
                <div class="instr-title">LTCG / STCG Harvesting</div>
                <div class="instr-section">Long-Term Capital Gains · Tax Loss Harvesting · 54EC Bonds</div>
                <div class="instr-desc">
                    Strategically realise long-term gains up to ₹1.25L tax-free each year.
                    Tax-loss harvest losers to offset gains. Reinvest in 54EC bonds to
                    defer capital gains from property sales.
                </div>
                <div class="instr-limit">
                    <span class="instr-limit-label">LTCG Free Limit</span>
                    <span class="instr-limit-val">₹1,25,000 / year</span>
                </div>
                <a href="#contact" class="instr-link">Optimise Now <i class="fas fa-arrow-right"></i></a>
            </div>

        </div>
    </div>
</section>


<!-- ══════════════════════════════════════════════════════════
     SECTION 80 DEEP DIVE — WHITE
══════════════════════════════════════════════════════════ -->
<section class="section tei-80">
    <div class="container">
        <div class="section-header center">
            <span class="section-label" data-aos="fade-up">Section 80 Deep Dive</span>
            <h2 class="section-title" data-aos="fade-up" data-aos-delay="80">
                Maximise Every <span>Deduction</span> Available to You
            </h2>
            <p class="section-sub" style="margin:0 auto" data-aos="fade-up" data-aos-delay="140">
                The difference between a good and great tax plan is how deeply every applicable
                sub-section is utilised. Here's how we structure both key pillars.
            </p>
        </div>

        <div class="tei-80-grid">

            <!-- 80C Column -->
            <div class="tei-80-col" data-aos="fade-right" data-aos-delay="100">
                <div class="tei-80-col-head">
                    <div class="tei-80-col-icon"><i class="fas fa-piggy-bank"></i></div>
                    <div>
                        <div class="tei-80-col-title">Section 80C — Investment Deductions</div>
                        <div class="tei-80-col-limit">Combined limit: ₹1,50,000 per year</div>
                    </div>
                </div>
                <div class="tei-deduction-list">
                    <div class="tei-ded-item">
                        <div class="tei-ded-left">
                            <div class="tei-ded-name">ELSS Mutual Funds</div>
                            <div class="tei-ded-desc">Equity Linked Savings Scheme — 3-yr lock-in, highest returns among 80C options</div>
                        </div>
                        <div class="tei-ded-right">
                            <div class="tei-ded-amount">₹1,50,000</div>
                            <div class="tei-ded-tag">Best Pick</div>
                        </div>
                    </div>
                    <div class="tei-ded-item">
                        <div class="tei-ded-left">
                            <div class="tei-ded-name">PPF (Public Provident Fund)</div>
                            <div class="tei-ded-desc">7.1% guaranteed, EEE status, 15-yr tenure. Zero risk, tax-free maturity</div>
                        </div>
                        <div class="tei-ded-right">
                            <div class="tei-ded-amount">₹1,50,000</div>
                            <div class="tei-ded-tag">Safe Option</div>
                        </div>
                    </div>
                    <div class="tei-ded-item">
                        <div class="tei-ded-left">
                            <div class="tei-ded-name">EPF Contribution</div>
                            <div class="tei-ded-desc">Employee provident fund — auto-deducted from salary, included in 80C limit</div>
                        </div>
                        <div class="tei-ded-right">
                            <div class="tei-ded-amount">₹1,50,000</div>
                            <div class="tei-ded-tag">Auto</div>
                        </div>
                    </div>
                    <div class="tei-ded-item">
                        <div class="tei-ded-left">
                            <div class="tei-ded-name">Tax-Saver FD (5-yr)</div>
                            <div class="tei-ded-desc">6.5–7.5% returns, 5-year lock-in. Interest is taxable — least efficient 80C option</div>
                        </div>
                        <div class="tei-ded-right">
                            <div class="tei-ded-amount">₹1,50,000</div>
                            <div class="tei-ded-tag">Low Priority</div>
                        </div>
                    </div>
                    <div class="tei-ded-item">
                        <div class="tei-ded-left">
                            <div class="tei-ded-name">Life Insurance Premium</div>
                            <div class="tei-ded-desc">Term plan premiums qualify. ULIPs and endowment plans — only where premium ≤10% of sum assured</div>
                        </div>
                        <div class="tei-ded-right">
                            <div class="tei-ded-amount">₹1,50,000</div>
                            <div class="tei-ded-tag">Term Only</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Other Sections Column -->
            <div class="tei-80-col" data-aos="fade-left" data-aos-delay="160">
                <div class="tei-80-col-head">
                    <div class="tei-80-col-icon"><i class="fas fa-plus-square"></i></div>
                    <div>
                        <div class="tei-80-col-title">Beyond 80C — Additional Deductions</div>
                        <div class="tei-80-col-limit">Stack multiple sections for maximum benefit</div>
                    </div>
                </div>
                <div class="tei-deduction-list">
                    <div class="tei-ded-item">
                        <div class="tei-ded-left">
                            <div class="tei-ded-name">NPS — 80CCD(1B)</div>
                            <div class="tei-ded-desc">Additional deduction OVER the ₹1.5L limit. Most underutilised benefit in India</div>
                        </div>
                        <div class="tei-ded-right">
                            <div class="tei-ded-amount">₹50,000</div>
                            <div class="tei-ded-tag">Extra Limit</div>
                        </div>
                    </div>
                    <div class="tei-ded-item">
                        <div class="tei-ded-left">
                            <div class="tei-ded-name">Health Insurance — 80D</div>
                            <div class="tei-ded-desc">Self/family ₹25K + parents ₹25K; senior citizen parents increase limit to ₹50K</div>
                        </div>
                        <div class="tei-ded-right">
                            <div class="tei-ded-amount">₹75,000</div>
                            <div class="tei-ded-tag">w/ Sr. Parents</div>
                        </div>
                    </div>
                    <div class="tei-ded-item">
                        <div class="tei-ded-left">
                            <div class="tei-ded-name">Home Loan Interest — 24(b)</div>
                            <div class="tei-ded-desc">Interest on self-occupied property. Let-out property has no upper cap</div>
                        </div>
                        <div class="tei-ded-right">
                            <div class="tei-ded-amount">₹2,00,000</div>
                            <div class="tei-ded-tag">Self-Occ.</div>
                        </div>
                    </div>
                    <div class="tei-ded-item">
                        <div class="tei-ded-left">
                            <div class="tei-ded-name">Education Loan — 80E</div>
                            <div class="tei-ded-desc">Full interest deduction (no upper limit) for 8 assessment years from repayment start</div>
                        </div>
                        <div class="tei-ded-right">
                            <div class="tei-ded-amount">No Limit</div>
                            <div class="tei-ded-tag">Interest Only</div>
                        </div>
                    </div>
                    <div class="tei-ded-item">
                        <div class="tei-ded-left">
                            <div class="tei-ded-name">Donations — 80G / 80GGA</div>
                            <div class="tei-ded-desc">50%–100% deduction on eligible charity donations. Depends on recipient organisation</div>
                        </div>
                        <div class="tei-ded-right">
                            <div class="tei-ded-amount">50–100%</div>
                            <div class="tei-ded-tag">Varies</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- ══════════════════════════════════════════════════════════
     TAX CALENDAR — DARK
══════════════════════════════════════════════════════════ -->
<section class="section tei-calendar">
    <div class="container">
        <div class="section-header center">
            <span class="section-label" data-aos="fade-up">Stay Ahead</span>
            <h2 class="section-title" data-aos="fade-up" data-aos-delay="80">
                Your <span>Tax Planning Calendar</span> — Never Miss a Deadline
            </h2>
            <p class="section-sub" style="margin:0 auto" data-aos="fade-up" data-aos-delay="140">
                Tax planning is a year-round discipline, not a March rush. Here's what to do
                every quarter to stay optimised and compliant.
            </p>
        </div>

        <div class="calendar-grid">

            <!-- Q1 -->
            <div class="cal-card" data-aos="fade-up" data-aos-delay="0">
                <div class="cal-quarter">Q1 — April to June</div>
                <div class="cal-months">Apr · May · Jun</div>
                <div class="cal-tasks">
                    <div class="cal-task">Choose Old or New tax regime for the year</div>
                    <div class="cal-task">Start SIP in ELSS — spread across the year</div>
                    <div class="cal-task">Declare investments to employer (Form 12BB)</div>
                    <div class="cal-task">Review health insurance renewals</div>
                </div>
                <div class="cal-deadline">
                    Key date: <strong>15 June</strong> — Advance Tax Q1
                </div>
            </div>

            <!-- Q2 -->
            <div class="cal-card" data-aos="fade-up" data-aos-delay="100">
                <div class="cal-quarter">Q2 — July to September</div>
                <div class="cal-months">Jul · Aug · Sep</div>
                <div class="cal-tasks">
                    <div class="cal-task">File ITR for previous FY (deadline: 31 Jul)</div>
                    <div class="cal-task">Review ELSS portfolio performance</div>
                    <div class="cal-task">NPS contribution — mid-year top-up</div>
                    <div class="cal-task">Capital gains review — harvest losses</div>
                </div>
                <div class="cal-deadline">
                    Key date: <strong>31 July</strong> — ITR Filing Deadline
                </div>
            </div>

            <!-- Q3 -->
            <div class="cal-card" data-aos="fade-up" data-aos-delay="200">
                <div class="cal-quarter">Q3 — October to December</div>
                <div class="cal-months">Oct · Nov · Dec</div>
                <div class="cal-tasks">
                    <div class="cal-task">Submit actual investment proofs to employer</div>
                    <div class="cal-task">Review and top up PPF (before FY end)</div>
                    <div class="cal-task">Check advance tax — avoid shortfall</div>
                    <div class="cal-task">Home loan certificate from bank</div>
                </div>
                <div class="cal-deadline">
                    Key date: <strong>15 Dec</strong> — Advance Tax Q3
                </div>
            </div>

            <!-- Q4 (urgent) -->
            <div class="cal-card urgent" data-aos="fade-up" data-aos-delay="300">
                <div class="cal-quarter">Q4 — January to March 🔥</div>
                <div class="cal-months">Jan · Feb · Mar</div>
                <div class="cal-tasks">
                    <div class="cal-task">Complete all 80C investments before 31 Mar</div>
                    <div class="cal-task">Final NPS contribution for 80CCD(1B)</div>
                    <div class="cal-task">LTCG harvesting — book ₹1.25L gain tax-free</div>
                    <div class="cal-task">HRA documentation — collect rent receipts</div>
                </div>
                <div class="cal-deadline">
                    Key date: <strong>31 March</strong> — Financial Year Close
                </div>
            </div>

        </div>
    </div>
</section>


<!-- ══════════════════════════════════════════════════════════
     CALCULATOR STRIP — RED
══════════════════════════════════════════════════════════ -->
<div class="calc-strip" data-aos="fade-up">
    <div class="container">
        <div class="calc-strip-inner">
            <div>
                <div class="calc-strip__title">How Much Tax Can You Save This Year?</div>
                <p class="calc-strip__desc">
                    Enter your income, existing investments, and deductions. Our free calculator
                    compares Old vs New regime and shows your exact tax savings opportunity in seconds.
                </p>
            </div>
            <a href="tax-calculator" class="btn btn-white">
                Try Tax Calculator
                <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </div>
</div>


<!-- ══════════════════════════════════════════════════════════
     INVESTMENT STRATEGIES — GRAY-50
══════════════════════════════════════════════════════════ -->
<section class="section tei-strategies">
    <div class="container">
        <div class="section-header center">
            <span class="section-label" data-aos="fade-up">Smart Approaches</span>
            <h2 class="section-title" data-aos="fade-up" data-aos-delay="80">
                Tax-Efficient <span>Investment Strategies</span> We Deploy
            </h2>
            <p class="section-sub" style="margin:0 auto" data-aos="fade-up" data-aos-delay="140">
                Beyond standard deductions — these are the advanced strategies that separate
                a good tax plan from an exceptional one.
            </p>
        </div>

        <div class="strategies-grid">

            <div class="strat-card" data-aos="fade-up" data-aos-delay="0">
                <div class="strat-num">01</div>
                <div class="strat-icon"><i class="fas fa-layer-group"></i></div>
                <div class="strat-title">ELSS SIP Strategy</div>
                <div class="strat-desc">Spread ₹1.5L ELSS across 12 SIPs instead of lump-sum March investment — better rupee-cost averaging and no lock-in panic.</div>
                <div class="strat-items">
                    <div class="strat-item">₹12,500/month SIP cadence</div>
                    <div class="strat-item">Avoid March rush valuations</div>
                    <div class="strat-item">Staggered lock-in expiry</div>
                </div>
            </div>

            <div class="strat-card" data-aos="fade-up" data-aos-delay="80">
                <div class="strat-num">02</div>
                <div class="strat-icon"><i class="fas fa-sync-alt"></i></div>
                <div class="strat-title">LTCG Harvesting</div>
                <div class="strat-desc">Systematically book up to ₹1.25L in long-term gains each year — completely tax-free under current rules. Immediately reinvest.</div>
                <div class="strat-items">
                    <div class="strat-item">₹1.25L annual free limit</div>
                    <div class="strat-item">Book + immediately rebuy</div>
                    <div class="strat-item">Reset cost basis upward</div>
                </div>
            </div>

            <div class="strat-card" data-aos="fade-up" data-aos-delay="160">
                <div class="strat-num">03</div>
                <div class="strat-icon"><i class="fas fa-compress-arrows-alt"></i></div>
                <div class="strat-title">Debt Fund Indexation</div>
                <div class="strat-desc">For debt investments held 3+ years, indexation significantly reduces the taxable LTCG — especially powerful in high-inflation years.</div>
                <div class="strat-items">
                    <div class="strat-item">3-year holding period</div>
                    <div class="strat-item">20% LTCG with indexation</div>
                    <div class="strat-item">Beats FD post-tax returns</div>
                </div>
            </div>

            <div class="strat-card" data-aos="fade-up" data-aos-delay="240">
                <div class="strat-num">04</div>
                <div class="strat-icon"><i class="fas fa-user-tie"></i></div>
                <div class="strat-title">Regime Optimisation</div>
                <div class="strat-desc">We model both Old and New tax regimes for your exact income and deduction mix — then recommend the regime that maximises your post-tax wealth.</div>
                <div class="strat-items">
                    <div class="strat-item">Income slab analysis</div>
                    <div class="strat-item">Deduction stack comparison</div>
                    <div class="strat-item">Annual regime review</div>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- ══════════════════════════════════════════════════════════
     HOW WE BUILD YOUR TAX PLAN — DARK
══════════════════════════════════════════════════════════ -->
<section class="section tei-process">
    <div class="container">
        <div class="section-header center">
            <span class="section-label" data-aos="fade-up">Our Process</span>
            <h2 class="section-title" data-aos="fade-up" data-aos-delay="80">
                How We Build Your <span>Tax-Efficient Plan</span>
            </h2>
            <p class="section-sub" style="margin:0 auto" data-aos="fade-up" data-aos-delay="140">
                Five steps — from your income statement to a fully optimised, compliant, and
                compounding tax strategy.
            </p>
        </div>

        <div class="process-steps">
            <div class="process-step" data-aos="fade-up" data-aos-delay="0">
                <div class="process-num">1</div>
                <h4>Income Analysis</h4>
                <p>We map your total income — salary, business, rental, capital gains — to identify all applicable sections.</p>
            </div>
            <div class="process-step" data-aos="fade-up" data-aos-delay="100">
                <div class="process-num">2</div>
                <h4>Deduction Audit</h4>
                <p>Review all existing investments and proofs. Identify gaps, overlaps, and missed deductions from prior years.</p>
            </div>
            <div class="process-step" data-aos="fade-up" data-aos-delay="200">
                <div class="process-num">3</div>
                <h4>Regime Modelling</h4>
                <p>Run Old vs New regime projections with your exact numbers. Recommend the regime that saves you more.</p>
            </div>
            <div class="process-step" data-aos="fade-up" data-aos-delay="300">
                <div class="process-num">4</div>
                <h4>Investment Blueprint</h4>
                <p>A written plan: exact amounts per section, instruments, deadlines, and integration with your broader wealth strategy.</p>
            </div>
            <div class="process-step" data-aos="fade-up" data-aos-delay="400">
                <div class="process-num">5</div>
                <h4>Year-Round Review</h4>
                <p>Quarterly check-ins, advance tax estimates, proofs submission support, and ITR filing guidance.</p>
            </div>
        </div>
    </div>
</section>


<!-- ══════════════════════════════════════════════════════════
     TESTIMONIALS — WHITE
══════════════════════════════════════════════════════════ -->
<section class="section tei-testimonials">
    <div class="container">
        <div class="section-header center">
            <span class="section-label" data-aos="fade-up">Real Results</span>
            <h2 class="section-title" data-aos="fade-up" data-aos-delay="80">
                Clients Who Stopped <span>Overpaying Tax</span>
            </h2>
        </div>

        <div class="testimonials-grid">
            <div class="testi-card" data-aos="fade-up" data-aos-delay="0">
                <div class="testi-stars">★★★★★</div>
                <div class="testi-quote">"</div>
                <p class="testi-text">
                    I was in the 30% bracket and had no 80C investments beyond my EPF. WealthBridge
                    set up ELSS SIPs, NPS contributions, and restructured my salary — I saved
                    ₹2.1L in tax last year. That's now invested in ELSS itself.
                </p>
                <div class="testi-author">
                    <div class="testi-avatar">AS</div>
                    <div>
                        <div class="testi-name">Amit Sharma</div>
                        <div class="testi-role">Senior Manager, MNC · Mumbai · ₹28L income</div>
                    </div>
                </div>
            </div>

            <div class="testi-card" data-aos="fade-up" data-aos-delay="100">
                <div class="testi-stars">★★★★★</div>
                <div class="testi-quote">"</div>
                <p class="testi-text">
                    As a freelancer, I had no idea about advance tax or business expense deductions.
                    WealthBridge structured my entire tax plan — I'm now legally showing ₹4.8L in
                    deductible expenses I was completely ignoring.
                </p>
                <div class="testi-author">
                    <div class="testi-avatar">RG</div>
                    <div>
                        <div class="testi-name">Rohan Gupta</div>
                        <div class="testi-role">Freelance Designer, Bengaluru · Self-employed</div>
                    </div>
                </div>
            </div>

            <div class="testi-card" data-aos="fade-up" data-aos-delay="200">
                <div class="testi-stars">★★★★★</div>
                <div class="testi-quote">"</div>
                <p class="testi-text">
                    I sold my flat and was worried about a massive capital gains tax. WealthBridge
                    showed me how to reinvest proceeds in 54EC bonds and a new residential property
                    — resulting in near-zero tax on a ₹40L gain.
                </p>
                <div class="testi-author">
                    <div class="testi-avatar">PM</div>
                    <div>
                        <div class="testi-name">Preeti Menon</div>
                        <div class="testi-role">Business Owner, Chennai · Property sale</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ══════════════════════════════════════════════════════════
     FAQ — GRAY-50
══════════════════════════════════════════════════════════ -->
<section class="section tei-faq">
    <div class="container">
        <div class="faq-layout">

            <div class="faq-intro" data-aos="fade-right">
                <span class="section-label">FAQ</span>
                <h2 class="section-title">
                    Tax Planning <span>Questions</span>
                </h2>
                <p class="section-sub">
                    Honest answers about tax-efficient investing — without jargon or
                    generic advice.
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
                        <span class="faq-q-text">Should I choose the Old or New tax regime?</span>
                        <span class="faq-icon"><i class="fas fa-plus"></i></span>
                    </button>
                    <div class="faq-a">
                        It depends entirely on your total deductions. If your combined 80C + 80D + HRA +
                        home loan interest exceeds approximately ₹3.75L, the Old Regime typically saves
                        more for 30% bracket individuals. Below that threshold, the New Regime often
                        wins. We model both with your exact numbers before recommending.
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-q">
                        <span class="faq-q-text">Is ELSS really the best 80C option?</span>
                        <span class="faq-icon"><i class="fas fa-plus"></i></span>
                    </button>
                    <div class="faq-a">
                        For most investors, yes. ELSS has the shortest lock-in (3 years vs 15 for PPF
                        or 5 for tax-saver FD), the highest potential returns (equity-linked), and the
                        same ₹1.5L deduction. The LTCG on ELSS beyond ₹1.25L is taxed at just 10% —
                        still more efficient than FD interest taxed at your full slab rate.
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-q">
                        <span class="faq-q-text">What is NPS 80CCD(1B) and why does everyone miss it?</span>
                        <span class="faq-icon"><i class="fas fa-plus"></i></span>
                    </button>
                    <div class="faq-a">
                        Section 80CCD(1B) allows an additional ₹50,000 deduction for NPS contributions
                        — completely separate from and on top of the ₹1.5L 80C limit. For someone in the
                        30% bracket, this alone saves ₹15,000 in tax. It's underused because most people
                        don't know it's a separate section from 80C.
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-q">
                        <span class="faq-q-text">How does tax-loss harvesting work for mutual funds?</span>
                        <span class="faq-icon"><i class="fas fa-plus"></i></span>
                    </button>
                    <div class="faq-a">
                        Tax-loss harvesting means selling funds that are currently at a loss to realise
                        those losses, which can then be used to offset capital gains elsewhere in your
                        portfolio — reducing your taxable gains. You immediately reinvest the proceeds
                        (after the 30-day wash-sale window) to maintain your portfolio exposure. It's
                        a legal, powerful strategy for active investors.
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-q">
                        <span class="faq-q-text">I'm a freelancer / self-employed. What deductions apply to me?</span>
                        <span class="faq-icon"><i class="fas fa-plus"></i></span>
                    </button>
                    <div class="faq-a">
                        Self-employed individuals under Section 44ADA (presumptive taxation for professionals)
                        or 44AD (business) can deduct legitimate business expenses: home office, internet,
                        equipment depreciation, professional subscriptions, and travel. On top of standard
                        80C/80D deductions, many freelancers with ₹20–50L income can reduce taxable income
                        by ₹8–12L legitimately.
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-q">
                        <span class="faq-q-text">Can I save tax on capital gains from property sale?</span>
                        <span class="faq-icon"><i class="fas fa-plus"></i></span>
                    </button>
                    <div class="faq-a">
                        Yes — via Section 54 (reinvest in another residential property), Section 54EC
                        (invest up to ₹50L in NHAI/REC bonds within 6 months), or Section 54F (for other
                        long-term assets). Proper planning before the sale is critical — these exemptions
                        require specific timelines and documentation to be valid.
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>


<!-- ══════════════════════════════════════════════════════════
     CTA BAND — DARK
══════════════════════════════════════════════════════════ -->
<section class="tei-cta" id="contact">
    <div class="container">
        <div class="tei-cta-inner">
            <span class="section-label" style="justify-content:center;display:flex" data-aos="fade-up">
                Don't Wait for March
            </span>
            <h2 class="cta-title" data-aos="fade-up" data-aos-delay="80">
                Start Your Tax Plan Today.<br>
                <span>Pay Less. Invest More. Grow Faster.</span>
            </h2>
            <p class="cta-desc" data-aos="fade-up" data-aos-delay="140">
                Every month you delay tax planning costs you compounding returns. Get a free
                tax review — we'll show you exactly how much you can save this financial year.
            </p>
            <div class="cta-actions" data-aos="fade-up" data-aos-delay="200">
                <a href="contact" class="btn btn-primary">
                    Get Free Tax Review
                    <i class="fas fa-arrow-right"></i>
                </a>
                <a href="tel:+911800000000" class="btn btn-ghost">
                    <i class="fas fa-phone"></i>
                    Call 1800-000-000
                </a>
            </div>

            <div class="cta-trust" data-aos="fade-up" data-aos-delay="280">
                <div class="ct-item"><i class="fas fa-check-circle"></i> SEBI Registered Adviser</div>
                <div class="ct-item"><i class="fas fa-check-circle"></i> 100% Legal Strategies</div>
                <div class="ct-item"><i class="fas fa-check-circle"></i> Old &amp; New Regime Analysis</div>
                <div class="ct-item"><i class="fas fa-check-circle"></i> Year-Round Support</div>
            </div>
        </div>
    </div>
</section>


<!-- ══════════════════════════════════════════════════════════
     RELATED SERVICES — WHITE
══════════════════════════════════════════════════════════ -->
<section class="section tei-related">
    <div class="container">
        <div class="section-header">
            <span class="section-label" data-aos="fade-right">Also Explore</span>
            <h2 class="section-title" data-aos="fade-up" data-aos-delay="80">
                Related <span>Advisory Services</span>
            </h2>
        </div>

        <div class="related-grid">
            <a href="investment-planning" class="rel-card" data-aos="fade-up" data-aos-delay="0">
                <div class="rc-icon"><i class="fas fa-briefcase"></i></div>
                <h4>Investment Planning</h4>
                <p>Build a market-beating portfolio that grows your post-tax wealth systematically.</p>
                <span class="rc-link">Explore <i class="fas fa-arrow-right"></i></span>
            </a>
            <a href="retirement-planning" class="rel-card" data-aos="fade-up" data-aos-delay="80">
                <div class="rc-icon"><i class="fas fa-umbrella-beach"></i></div>
                <h4>Retirement Planning</h4>
                <p>Use NPS, EPF, and ELSS together to build a tax-efficient retirement corpus.</p>
                <span class="rc-link">Explore <i class="fas fa-arrow-right"></i></span>
            </a>
            <a href="health-insurance" class="rel-card" data-aos="fade-up" data-aos-delay="160">
                <div class="rc-icon"><i class="fas fa-shield-alt"></i></div>
                <h4>Health Insurance</h4>
                <p>Claim your full ₹75,000 Section 80D deduction with the right health cover.</p>
                <span class="rc-link">Explore <i class="fas fa-arrow-right"></i></span>
            </a>
            <a href="wealth-management" class="rel-card" data-aos="fade-up" data-aos-delay="240">
                <div class="rc-icon"><i class="fas fa-gem"></i></div>
                <h4>Wealth Management</h4>
                <p>Comprehensive high-net-worth strategy integrating tax, growth, and estate planning.</p>
                <span class="rc-link">Explore <i class="fas fa-arrow-right"></i></span>
            </a>
        </div>
    </div>
</section>

 

<?php include_once ('elements/footer.php'); ?>