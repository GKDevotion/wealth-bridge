<?php include_once ('elements/header.php'); ?>

    <!-- Custom CSS -->
    <link href="<?php echo UrlHelper::asset('css/child-wedding-planning.css'); ?>" rel="stylesheet">

    <!-- BREADCRUMB -->
    <div class="breadcrumb-bar">
        <div class="container">
            <div class="breadcrumb">
                <a href="wealth-bridge.html"><i class="fas fa-home"></i> Home</a>
                <span>›</span><a href="#">Our Services</a>
                <span>›</span><span class="current">Child Wedding Planning</span>
            </div>
        </div>
    </div>

    <!-- ===================== HERO ===================== -->
    <section class="service-hero" id="top">
        <div class="sh-bg"></div>
        <div class="sh-grid"></div>
        <div class="sh-line"></div>
        <div class="sh-line2"></div>
        <div class="sh-shimmer"></div>
        <div class="sh-petals" id="petalsEl"></div>

        <div class="container">
            <div class="sh-content">
                <div class="sh-left">
                    <div class="sh-tag"><i class="fas fa-ring"></i> Child Wedding Planning</div>
                    <h1 class="sh-title">
                        Your Child's
                        <em>Dream Wedding,</em>
                        Financially Secured.
                    </h1>
                    <p class="sh-desc">An Indian wedding today costs ₹15–50 lakhs and rising at 12% annually. The same
                        wedding in 15 years could cost ₹80 lakhs to ₹2 crore. We build a dedicated, growing wedding fund
                        — starting today — so you give your child the wedding they deserve, without debt or compromise.
                    </p>
                    <div class="sh-actions">
                        <a href="#calculator" class="btn btn-gold">Calculate My Wedding Fund <i
                                class="fas fa-arrow-right"></i></a>
                        <a href="#why" class="btn btn-ghost">Why Plan Early? <i class="fas fa-chevron-down"></i></a>
                    </div>
                    <div class="sh-quick-stats">
                        <div class="sh-qs">
                            <div class="sh-qs-num">2800<span>+</span></div>
                            <div class="sh-qs-label">Weddings Funded</div>
                        </div>
                        <div class="sh-qs">
                            <div class="sh-qs-num">₹0</div>
                            <div class="sh-qs-label">Loans Required</div>
                        </div>
                        <div class="sh-qs">
                            <div class="sh-qs-num">12<span>%</span></div>
                            <div class="sh-qs-label">Wedding Inflation pa</div>
                        </div>
                        <div class="sh-qs">
                            <div class="sh-qs-num">18<span>+ Yrs</span></div>
                            <div class="sh-qs-label">Track Record</div>
                        </div>
                    </div>
                </div>

                <!-- HERO CARD — Wedding Fund Dashboard -->
                <div class="sh-right" data-aos="fade-left" data-aos-delay="200">
                    <div class="sh-float f1">
                        <div class="sf-label">Wedding Fund Ready</div>
                        <div class="sf-val">₹48.6<span>L</span></div>
                        <div class="sf-sub">Gupta Family · Daughter's Wedding 2028</div>
                    </div>

                    <div class="sh-card">
                        <div class="sh-card-header">
                            <div class="sh-card-label">Wedding Fund Dashboard</div>
                            <div class="sh-card-badge"><span></span> 2 Funds Active</div>
                        </div>

                        <div class="wf-child-row">
                            <div class="wfc-avatar"
                                style="background:linear-gradient(135deg,var(--red),var(--red-dark))">👧</div>
                            <div class="wfc-info">
                                <div class="wfc-name">Priya (Daughter)</div>
                                <div class="wfc-age">Age 22 · Wedding 2028</div>
                            </div>
                            <div class="wfc-bar-wrap">
                                <div class="wfc-bar-bg">
                                    <div class="wfc-bar-fill"
                                        style="width:81%;background:linear-gradient(90deg,var(--red),#ff6b6b);animation-delay:.1s">
                                    </div>
                                </div>
                                <div class="wfc-pct">81%</div>
                            </div>
                            <div class="wfc-target">₹48.6L</div>
                        </div>

                        <div class="wf-child-row">
                            <div class="wfc-avatar" style="background:linear-gradient(135deg,#2563eb,#1d4ed8)">👦</div>
                            <div class="wfc-info">
                                <div class="wfc-name">Rohan (Son)</div>
                                <div class="wfc-age">Age 18 · Wedding 2032</div>
                            </div>
                            <div class="wfc-bar-wrap">
                                <div class="wfc-bar-bg">
                                    <div class="wfc-bar-fill"
                                        style="width:44%;background:linear-gradient(90deg,#2563eb,#60a5fa);animation-delay:.2s">
                                    </div>
                                </div>
                                <div class="wfc-pct">44%</div>
                            </div>
                            <div class="wfc-target">₹22.4L</div>
                        </div>

                        <div class="sh-divider"></div>
                        <div class="sh-metrics">
                            <div class="sh-metric">
                                <div class="sh-metric-label">Combined Monthly SIP</div>
                                <div class="sh-metric-val">₹32K<span class="gold">/month</span></div>
                            </div>
                            <div class="sh-metric">
                                <div class="sh-metric-label">Total Corpus</div>
                                <div class="sh-metric-val">₹71L<span class="up"> ▲ 17%</span></div>
                            </div>
                            <div class="sh-metric">
                                <div class="sh-metric-label">Gold Holding (SGBs)</div>
                                <div class="sh-metric-val">₹8.4L<span class="gold"> allocated</span></div>
                            </div>
                            <div class="sh-metric">
                                <div class="sh-metric-label">Personal Loan Needed</div>
                                <div class="sh-metric-val">₹0<span class="up"> ✓ None</span></div>
                            </div>
                        </div>
                    </div>

                    <div class="sh-float f2">
                        <div class="sf-label">Inflation-Adjusted Target</div>
                        <div class="sf-val">₹60<span>L in 2028</span></div>
                        <div class="sf-sub">Today's ₹25L wedding → 2028 projection</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== WHY PLAN EARLY ===================== -->
    <section class="section why-early" id="why">
        <div class="container">
            <div class="we-grid">
                <div data-aos="fade-right">
                    <span class="section-label">The Wedding Cost Reality</span>
                    <h2 class="section-title">Indian Wedding Costs Are <span>Rising 12% Every Year</span></h2>
                    <div class="we-body">
                        <p>A middle-class Indian wedding that cost ₹10 lakhs in 2010 costs ₹30–40 lakhs today. At 12%
                            annual wedding inflation, that <strong>₹25 lakh wedding you're imagining for your daughter
                                today could cost ₹96 lakhs in 15 years</strong> — nearly 4× more.</p>
                        <div class="we-highlight">"Most Indian parents fund their child's wedding from retirement
                            savings, fixed deposits, or personal loans — destroying decades of hard work in a single
                            month. Planning for just ₹8,000/month starting when your child is 8 years old fully funds a
                            ₹50L wedding at 23."</div>
                        <p>The compounding advantage of starting early is dramatic. <strong>A 10-year head
                                start</strong> means you need to save 60% less every month to reach the same target —
                            because your money has more time to grow. Every year you delay increases the monthly burden
                            significantly.</p>
                        <p>We build a dedicated, inflation-adjusted wedding fund that ensures your child's wedding
                            happens beautifully — debt-free, without touching your retirement savings or other goals.
                        </p>
                    </div>
                    <div style="margin-top:28px;display:flex;gap:12px;flex-wrap:wrap">
                        <a href="#calculator" class="btn btn-primary">Start My Wedding Fund <i
                                class="fas fa-arrow-right"></i></a>
                        <a href="#costs" class="btn btn-outline">See Cost Breakdown</a>
                    </div>
                </div>

                <div data-aos="fade-left">
                    <p
                        style="font-size:12px;font-weight:700;letter-spacing:2px;text-transform:uppercase;color:var(--gray-500);margin-bottom:18px">
                        WEDDING COST ESCALATION — ₹25L TODAY</p>
                    <div class="inflation-cards">
                        <div class="inf-card">
                            <div class="inf-header">
                                <div class="inf-year">Today (2026) — Equivalent Wedding</div>
                                <div class="inf-badge ok">Start Now</div>
                            </div>
                            <div class="inf-body">
                                <div class="inf-row"><span class="inf-label">Today's cost</span><span class="inf-val"
                                        style="color:var(--black)">₹25 Lakhs</span></div>
                                <div class="inf-bar-bg">
                                    <div class="inf-bar-fill" style="width:26%;background:#15803d"></div>
                                </div>
                            </div>
                        </div>
                        <div class="inf-card">
                            <div class="inf-header">
                                <div class="inf-year">2031 — 5 Years Later</div>
                                <div class="inf-badge warn">@12% Inflation</div>
                            </div>
                            <div class="inf-body">
                                <div class="inf-row"><span class="inf-label">Same wedding will cost</span><span
                                        class="inf-val" style="color:#b45309">₹44 Lakhs</span></div>
                                <div class="inf-bar-bg">
                                    <div class="inf-bar-fill" style="width:46%;background:#eab308"></div>
                                </div>
                            </div>
                        </div>
                        <div class="inf-card">
                            <div class="inf-header">
                                <div class="inf-year">2036 — 10 Years Later</div>
                                <div class="inf-badge danger">@12% Inflation</div>
                            </div>
                            <div class="inf-body">
                                <div class="inf-row"><span class="inf-label">Same wedding will cost</span><span
                                        class="inf-val" style="color:var(--red)">₹78 Lakhs</span></div>
                                <div class="inf-bar-bg">
                                    <div class="inf-bar-fill" style="width:82%;background:var(--red)"></div>
                                </div>
                            </div>
                        </div>
                        <div class="inf-card">
                            <div class="inf-header">
                                <div class="inf-year">2041 — 15 Years Later</div>
                                <div class="inf-badge danger">Critical Planning Needed</div>
                            </div>
                            <div class="inf-body">
                                <div class="inf-row"><span class="inf-label">Same wedding could cost</span><span
                                        class="inf-val" style="color:var(--red)">₹1.37 Crore</span></div>
                                <div class="inf-bar-bg">
                                    <div class="inf-bar-fill"
                                        style="width:100%;background:linear-gradient(90deg,var(--red-dark),var(--red))">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            style="background:var(--black);border-radius:8px;padding:16px 20px;display:flex;gap:12px;align-items:flex-start">
                            <div style="color:var(--gold-light);font-size:18px;flex-shrink:0">💡</div>
                            <p style="font-size:13px;color:rgba(255,255,255,.6);line-height:1.7"><strong
                                    style="color:white">The Power of Starting Early:</strong> ₹6,500/month started when
                                your child is 8 → ₹1.37 Crore at their wedding at age 26. Start at 18 → you'd need
                                ₹38,000/month for the same result.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== WEDDING COST BREAKDOWN TABS ===================== -->
    <section class="section wedding-costs" id="costs">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <span class="section-label">Wedding Cost Guide</span>
                <h2 class="section-title">What Goes Into an <span>Indian Wedding Budget?</span></h2>
                <p class="section-sub">A detailed cost breakdown across different wedding scales — so you can plan the
                    right fund for the right wedding.</p>
            </div>

            <div class="wc-tabs" data-aos="fade-up">
                <div class="wc-tab active" data-wctab="simple"><span class="tab-emoji">🌸</span> Simple (₹15–25L)</div>
                <div class="wc-tab" data-wctab="medium"><span class="tab-emoji">💍</span> Standard (₹25–50L)</div>
                <div class="wc-tab" data-wctab="grand"><span class="tab-emoji">👑</span> Grand (₹50–1Cr)</div>
                <div class="wc-tab" data-wctab="destination"><span class="tab-emoji">✈️</span> Destination (₹75L–2Cr)
                </div>
            </div>

            <div class="wc-panels">

                <!-- SIMPLE WEDDING -->
                <div class="wc-panel active" id="wctab-simple">
                    <div class="wcp-chart" data-aos="fade-right">
                        <div class="wcp-title">Simple Wedding — ₹20L Budget</div>
                        <div class="donut-wrap">
                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="100" cy="100" r="80" fill="none" stroke="#1a1a1a" stroke-width="32" />
                                <circle cx="100" cy="100" r="80" fill="none" stroke="#C8102E" stroke-width="32"
                                    stroke-dasharray="140.7 361.7" stroke-dashoffset="125.6"
                                    style="transform-origin:center;transform:rotate(-90deg)" />
                                <circle cx="100" cy="100" r="80" fill="none" stroke="#D4A017" stroke-width="32"
                                    stroke-dasharray="80.4 421.9" stroke-dashoffset="-15.1"
                                    style="transform-origin:center;transform:rotate(-90deg)" />
                                <circle cx="100" cy="100" r="80" fill="none" stroke="#2563eb" stroke-width="32"
                                    stroke-dasharray="60.3 442.1" stroke-dashoffset="-95.5"
                                    style="transform-origin:center;transform:rotate(-90deg)" />
                                <circle cx="100" cy="100" r="80" fill="none" stroke="#8b5cf6" stroke-width="32"
                                    stroke-dasharray="50.2 452.1" stroke-dashoffset="-155.8"
                                    style="transform-origin:center;transform:rotate(-90deg)" />
                                <circle cx="100" cy="100" r="80" fill="none" stroke="#15803d" stroke-width="32"
                                    stroke-dasharray="40.2 462.2" stroke-dashoffset="-206"
                                    style="transform-origin:center;transform:rotate(-90deg)" />
                                <circle cx="100" cy="100" r="80" fill="none" stroke="#888" stroke-width="32"
                                    stroke-dasharray="30.2 472.2" stroke-dashoffset="-246.2"
                                    style="transform-origin:center;transform:rotate(-90deg)" />
                            </svg>
                            <div class="donut-center">
                                <div class="dc-num">₹20L</div>
                                <div class="dc-label">Total Budget</div>
                            </div>
                        </div>
                        <div class="cost-legend">
                            <div class="cl-item">
                                <div class="cl-left">
                                    <div class="cl-dot" style="background:var(--red)"></div>
                                    <div class="cl-name">Venue & Food</div>
                                </div>
                                <div class="cl-right">
                                    <div class="cl-pct">28%</div>
                                    <div class="cl-amt">₹5.6L</div>
                                </div>
                            </div>
                            <div class="cl-item">
                                <div class="cl-left">
                                    <div class="cl-dot" style="background:var(--gold)"></div>
                                    <div class="cl-name">Jewellery</div>
                                </div>
                                <div class="cl-right">
                                    <div class="cl-pct">16%</div>
                                    <div class="cl-amt">₹3.2L</div>
                                </div>
                            </div>
                            <div class="cl-item">
                                <div class="cl-left">
                                    <div class="cl-dot" style="background:#2563eb"></div>
                                    <div class="cl-name">Decor & Flowers</div>
                                </div>
                                <div class="cl-right">
                                    <div class="cl-pct">12%</div>
                                    <div class="cl-amt">₹2.4L</div>
                                </div>
                            </div>
                            <div class="cl-item">
                                <div class="cl-left">
                                    <div class="cl-dot" style="background:#8b5cf6"></div>
                                    <div class="cl-name">Photography</div>
                                </div>
                                <div class="cl-right">
                                    <div class="cl-pct">10%</div>
                                    <div class="cl-amt">₹2L</div>
                                </div>
                            </div>
                            <div class="cl-item">
                                <div class="cl-left">
                                    <div class="cl-dot" style="background:#15803d"></div>
                                    <div class="cl-name">Clothes & Makeup</div>
                                </div>
                                <div class="cl-right">
                                    <div class="cl-pct">8%</div>
                                    <div class="cl-amt">₹1.6L</div>
                                </div>
                            </div>
                            <div class="cl-item">
                                <div class="cl-left">
                                    <div class="cl-dot" style="background:#888"></div>
                                    <div class="cl-name">Others</div>
                                </div>
                                <div class="cl-right">
                                    <div class="cl-pct">26%</div>
                                    <div class="cl-amt">₹5.2L</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-aos="fade-left">
                        <h3 class="section-title" style="font-size:1.6rem">Simple <span>Wedding</span> — ₹15–25 Lakhs
                        </h3>
                        <p style="color:var(--gray-500);font-size:14px;line-height:1.8;margin-bottom:24px">A dignified,
                            beautiful wedding with 300–500 guests — covers all essentials without extravagance. Perfect
                            for families who value meaningful celebration over showmanship.</p>
                        <div class="wcb-list">
                            <div class="wcb-item">
                                <div class="wcb-icon" style="background:rgba(200,16,46,.08);color:var(--red)">🏛️</div>
                                <div>
                                    <h4>Venue & Catering</h4>
                                    <p>Banquet hall or community hall with catering for 300–500 guests. Standard menu
                                        with 2–3 ceremonies.</p><span class="wcb-range">₹4–7L</span>
                                </div>
                            </div>
                            <div class="wcb-item">
                                <div class="wcb-icon" style="background:rgba(212,160,23,.10);color:#8a6500">💍</div>
                                <div>
                                    <h4>Jewellery</h4>
                                    <p>Gold & silver jewellery as per family tradition. Trousseau items and basic bridal
                                        set.</p><span class="wcb-range">₹2–4L</span>
                                </div>
                            </div>
                            <div class="wcb-item">
                                <div class="wcb-icon" style="background:rgba(59,130,246,.08);color:#2563eb">📸</div>
                                <div>
                                    <h4>Photography & Videography</h4>
                                    <p>Professional photographer + basic video coverage of main ceremony days.</p><span
                                        class="wcb-range">₹1–2L</span>
                                </div>
                            </div>
                            <div class="wcb-item">
                                <div class="wcb-icon" style="background:rgba(139,92,246,.08);color:#7c3aed">🌸</div>
                                <div>
                                    <h4>Decor & Flowers</h4>
                                    <p>Floral decor for main ceremonies, mandap decoration, and venue lighting.</p><span
                                        class="wcb-range">₹1.5–3L</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- STANDARD WEDDING -->
                <div class="wc-panel" id="wctab-medium">
                    <div class="wcp-chart" data-aos="fade-right">
                        <div class="wcp-title">Standard Wedding — ₹35L Budget</div>
                        <div class="donut-wrap">
                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="100" cy="100" r="80" fill="none" stroke="#1a1a1a" stroke-width="32" />
                                <circle cx="100" cy="100" r="80" fill="none" stroke="#C8102E" stroke-width="32"
                                    stroke-dasharray="150.7 351.7" stroke-dashoffset="125.6"
                                    style="transform-origin:center;transform:rotate(-90deg)" />
                                <circle cx="100" cy="100" r="80" fill="none" stroke="#D4A017" stroke-width="32"
                                    stroke-dasharray="100.5 401.9" stroke-dashoffset="-25.1"
                                    style="transform-origin:center;transform:rotate(-90deg)" />
                                <circle cx="100" cy="100" r="80" fill="none" stroke="#2563eb" stroke-width="32"
                                    stroke-dasharray="70.3 432.1" stroke-dashoffset="-125.6"
                                    style="transform-origin:center;transform:rotate(-90deg)" />
                                <circle cx="100" cy="100" r="80" fill="none" stroke="#8b5cf6" stroke-width="32"
                                    stroke-dasharray="60.3 442.1" stroke-dashoffset="-195.9"
                                    style="transform-origin:center;transform:rotate(-90deg)" />
                                <circle cx="100" cy="100" r="80" fill="none" stroke="#15803d" stroke-width="32"
                                    stroke-dasharray="50.2 452.1" stroke-dashoffset="-256.2"
                                    style="transform-origin:center;transform:rotate(-90deg)" />
                                <circle cx="100" cy="100" r="80" fill="none" stroke="#888" stroke-width="32"
                                    stroke-dasharray="70.4 431.9" stroke-dashoffset="-306.4"
                                    style="transform-origin:center;transform:rotate(-90deg)" />
                            </svg>
                            <div class="donut-center">
                                <div class="dc-num">₹35L</div>
                                <div class="dc-label">Total Budget</div>
                            </div>
                        </div>
                        <div class="cost-legend">
                            <div class="cl-item">
                                <div class="cl-left">
                                    <div class="cl-dot" style="background:var(--red)"></div>
                                    <div class="cl-name">Venue & Food</div>
                                </div>
                                <div class="cl-right">
                                    <div class="cl-pct">30%</div>
                                    <div class="cl-amt">₹10.5L</div>
                                </div>
                            </div>
                            <div class="cl-item">
                                <div class="cl-left">
                                    <div class="cl-dot" style="background:var(--gold)"></div>
                                    <div class="cl-name">Jewellery</div>
                                </div>
                                <div class="cl-right">
                                    <div class="cl-pct">20%</div>
                                    <div class="cl-amt">₹7L</div>
                                </div>
                            </div>
                            <div class="cl-item">
                                <div class="cl-left">
                                    <div class="cl-dot" style="background:#2563eb"></div>
                                    <div class="cl-name">Decor</div>
                                </div>
                                <div class="cl-right">
                                    <div class="cl-pct">14%</div>
                                    <div class="cl-amt">₹4.9L</div>
                                </div>
                            </div>
                            <div class="cl-item">
                                <div class="cl-left">
                                    <div class="cl-dot" style="background:#8b5cf6"></div>
                                    <div class="cl-name">Photography</div>
                                </div>
                                <div class="cl-right">
                                    <div class="cl-pct">12%</div>
                                    <div class="cl-amt">₹4.2L</div>
                                </div>
                            </div>
                            <div class="cl-item">
                                <div class="cl-left">
                                    <div class="cl-dot" style="background:#15803d"></div>
                                    <div class="cl-name">Outfits</div>
                                </div>
                                <div class="cl-right">
                                    <div class="cl-pct">10%</div>
                                    <div class="cl-amt">₹3.5L</div>
                                </div>
                            </div>
                            <div class="cl-item">
                                <div class="cl-left">
                                    <div class="cl-dot" style="background:#888"></div>
                                    <div class="cl-name">Others</div>
                                </div>
                                <div class="cl-right">
                                    <div class="cl-pct">14%</div>
                                    <div class="cl-amt">₹4.9L</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-aos="fade-left">
                        <h3 class="section-title" style="font-size:1.6rem">Standard <span>Wedding</span> — ₹25–50 Lakhs
                        </h3>
                        <p style="color:var(--gray-500);font-size:14px;line-height:1.8;margin-bottom:24px">The most
                            common mid-segment Indian wedding — 500–800 guests, multi-day celebrations, professional
                            decor and photography. Represents the average aspiration of most Indian families today.</p>
                        <div class="wcb-list">
                            <div class="wcb-item">
                                <div class="wcb-icon" style="background:rgba(200,16,46,.08);color:var(--red)">🏰</div>
                                <div>
                                    <h4>Premium Venue + Multi-day Catering</h4>
                                    <p>5-star banquet or premium marriage hall. 3–5 day celebration with 600–800 guests.
                                        Premium buffet.</p><span class="wcb-range">₹8–14L</span>
                                </div>
                            </div>
                            <div class="wcb-item">
                                <div class="wcb-icon" style="background:rgba(212,160,23,.10);color:#8a6500">💎</div>
                                <div>
                                    <h4>Gold, Diamond & Trousseau</h4>
                                    <p>Complete jewellery sets — gold bangles, diamond engagement ring, necklaces, and
                                        full trousseau.</p><span class="wcb-range">₹5–10L</span>
                                </div>
                            </div>
                            <div class="wcb-item">
                                <div class="wcb-icon" style="background:rgba(59,130,246,.08);color:#2563eb">🎬</div>
                                <div>
                                    <h4>Premium Photography + Pre-wedding</h4>
                                    <p>Cinematic videography, pre-wedding shoot, drone coverage, and same-day edit.</p>
                                    <span class="wcb-range">₹3–5L</span>
                                </div>
                            </div>
                            <div class="wcb-item">
                                <div class="wcb-icon" style="background:rgba(139,92,246,.08);color:#7c3aed">🎨</div>
                                <div>
                                    <h4>Designer Decor + Theme</h4>
                                    <p>Themed decor, floral walls, LED installations, premium mandap, and entry walkway.
                                    </p><span class="wcb-range">₹3–7L</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- GRAND WEDDING -->
                <div class="wc-panel" id="wctab-grand">
                    <div class="wcp-chart" data-aos="fade-right">
                        <div class="wcp-title">Grand Wedding — ₹75L Budget</div>
                        <div class="donut-wrap">
                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="100" cy="100" r="80" fill="none" stroke="#1a1a1a" stroke-width="32" />
                                <circle cx="100" cy="100" r="80" fill="none" stroke="#C8102E" stroke-width="32"
                                    stroke-dasharray="175.8 326.6" stroke-dashoffset="125.6"
                                    style="transform-origin:center;transform:rotate(-90deg)" />
                                <circle cx="100" cy="100" r="80" fill="none" stroke="#D4A017" stroke-width="32"
                                    stroke-dasharray="125.6 376.8" stroke-dashoffset="-50.2"
                                    style="transform-origin:center;transform:rotate(-90deg)" />
                                <circle cx="100" cy="100" r="80" fill="none" stroke="#2563eb" stroke-width="32"
                                    stroke-dasharray="75.4 426.9" stroke-dashoffset="-175.8"
                                    style="transform-origin:center;transform:rotate(-90deg)" />
                                <circle cx="100" cy="100" r="80" fill="none" stroke="#8b5cf6" stroke-width="32"
                                    stroke-dasharray="50.2 452.1" stroke-dashoffset="-251.2"
                                    style="transform-origin:center;transform:rotate(-90deg)" />
                                <circle cx="100" cy="100" r="80" fill="none" stroke="#888" stroke-width="32"
                                    stroke-dasharray="75.4 426.9" stroke-dashoffset="-301.4"
                                    style="transform-origin:center;transform:rotate(-90deg)" />
                            </svg>
                            <div class="donut-center">
                                <div class="dc-num">₹75L</div>
                                <div class="dc-label">Total Budget</div>
                            </div>
                        </div>
                        <div class="cost-legend">
                            <div class="cl-item">
                                <div class="cl-left">
                                    <div class="cl-dot" style="background:var(--red)"></div>
                                    <div class="cl-name">Venue & 5-Star Catering</div>
                                </div>
                                <div class="cl-right">
                                    <div class="cl-pct">35%</div>
                                    <div class="cl-amt">₹26.25L</div>
                                </div>
                            </div>
                            <div class="cl-item">
                                <div class="cl-left">
                                    <div class="cl-dot" style="background:var(--gold)"></div>
                                    <div class="cl-name">Gold & Diamond Jewellery</div>
                                </div>
                                <div class="cl-right">
                                    <div class="cl-pct">25%</div>
                                    <div class="cl-amt">₹18.75L</div>
                                </div>
                            </div>
                            <div class="cl-item">
                                <div class="cl-left">
                                    <div class="cl-dot" style="background:#2563eb"></div>
                                    <div class="cl-name">Luxury Decor</div>
                                </div>
                                <div class="cl-right">
                                    <div class="cl-pct">15%</div>
                                    <div class="cl-amt">₹11.25L</div>
                                </div>
                            </div>
                            <div class="cl-item">
                                <div class="cl-left">
                                    <div class="cl-dot" style="background:#8b5cf6"></div>
                                    <div class="cl-name">Photography + Entertainment</div>
                                </div>
                                <div class="cl-right">
                                    <div class="cl-pct">10%</div>
                                    <div class="cl-amt">₹7.5L</div>
                                </div>
                            </div>
                            <div class="cl-item">
                                <div class="cl-left">
                                    <div class="cl-dot" style="background:#888"></div>
                                    <div class="cl-name">Outfits, Travel, Others</div>
                                </div>
                                <div class="cl-right">
                                    <div class="cl-pct">15%</div>
                                    <div class="cl-amt">₹11.25L</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-aos="fade-left">
                        <h3 class="section-title" style="font-size:1.6rem">Grand <span>Wedding</span> — ₹50L – ₹1 Crore
                        </h3>
                        <p style="color:var(--gray-500);font-size:14px;line-height:1.8;margin-bottom:24px">A premium
                            Indian wedding — 5-star hotel, 800–1500 guests, celebrity entertainers, designer outfits,
                            and bespoke decor. The aspiration of many upper-middle-class families.</p>
                        <div class="wcb-list">
                            <div class="wcb-item">
                                <div class="wcb-icon" style="background:rgba(200,16,46,.08);color:var(--red)">🏨</div>
                                <div>
                                    <h4>5-Star Hotel or Heritage Property</h4>
                                    <p>Marriott, Taj, ITC — full hotel buy-out for 3–5 days, premium F&B, accommodation
                                        for guests.</p><span class="wcb-range">₹25–40L</span>
                                </div>
                            </div>
                            <div class="wcb-item">
                                <div class="wcb-icon" style="background:rgba(212,160,23,.10);color:#8a6500">👑</div>
                                <div>
                                    <h4>Designer Jewellery + Trousseau</h4>
                                    <p>High-end gold, diamond, and polki sets. Designer lehenga and sherwani. Complete
                                        trousseau.</p><span class="wcb-range">₹12–25L</span>
                                </div>
                            </div>
                            <div class="wcb-item">
                                <div class="wcb-icon" style="background:rgba(59,130,246,.08);color:#2563eb">🎪</div>
                                <div>
                                    <h4>Celebrity Entertainment + DJ</h4>
                                    <p>Sangeet night with celebrity performer, anchor, and top DJ. Premium sound and
                                        lighting.</p><span class="wcb-range">₹5–15L</span>
                                </div>
                            </div>
                            <div class="wcb-item">
                                <div class="wcb-icon" style="background:rgba(139,92,246,.08);color:#7c3aed">🎭</div>
                                <div>
                                    <h4>Bespoke Theme Decor</h4>
                                    <p>Internationally inspired themes, imported flowers, LED installations, and luxury
                                        floral walls.</p><span class="wcb-range">₹8–18L</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- DESTINATION WEDDING -->
                <div class="wc-panel" id="wctab-destination">
                    <div class="wcp-chart" data-aos="fade-right">
                        <div class="wcp-title">Destination Wedding — ₹1.2Cr Budget</div>
                        <div class="donut-wrap">
                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="100" cy="100" r="80" fill="none" stroke="#1a1a1a" stroke-width="32" />
                                <circle cx="100" cy="100" r="80" fill="none" stroke="#C8102E" stroke-width="32"
                                    stroke-dasharray="175.8 326.6" stroke-dashoffset="125.6"
                                    style="transform-origin:center;transform:rotate(-90deg)" />
                                <circle cx="100" cy="100" r="80" fill="none" stroke="#D4A017" stroke-width="32"
                                    stroke-dasharray="100.5 401.9" stroke-dashoffset="-50.2"
                                    style="transform-origin:center;transform:rotate(-90deg)" />
                                <circle cx="100" cy="100" r="80" fill="none" stroke="#0ea5e9" stroke-width="32"
                                    stroke-dasharray="100.5 401.9" stroke-dashoffset="-150.7"
                                    style="transform-origin:center;transform:rotate(-90deg)" />
                                <circle cx="100" cy="100" r="80" fill="none" stroke="#8b5cf6" stroke-width="32"
                                    stroke-dasharray="75.4 426.9" stroke-dashoffset="-251.2"
                                    style="transform-origin:center;transform:rotate(-90deg)" />
                                <circle cx="100" cy="100" r="80" fill="none" stroke="#888" stroke-width="32"
                                    stroke-dasharray="50.2 452.1" stroke-dashoffset="-326.6"
                                    style="transform-origin:center;transform:rotate(-90deg)" />
                            </svg>
                            <div class="donut-center">
                                <div class="dc-num">₹1.2Cr</div>
                                <div class="dc-label">Total Budget</div>
                            </div>
                        </div>
                        <div class="cost-legend">
                            <div class="cl-item">
                                <div class="cl-left">
                                    <div class="cl-dot" style="background:var(--red)"></div>
                                    <div class="cl-name">Venue + Accommodation</div>
                                </div>
                                <div class="cl-right">
                                    <div class="cl-pct">35%</div>
                                    <div class="cl-amt">₹42L</div>
                                </div>
                            </div>
                            <div class="cl-item">
                                <div class="cl-left">
                                    <div class="cl-dot" style="background:var(--gold)"></div>
                                    <div class="cl-name">Jewellery</div>
                                </div>
                                <div class="cl-right">
                                    <div class="cl-pct">20%</div>
                                    <div class="cl-amt">₹24L</div>
                                </div>
                            </div>
                            <div class="cl-item">
                                <div class="cl-left">
                                    <div class="cl-dot" style="background:#0ea5e9"></div>
                                    <div class="cl-name">Travel (Flights + Local)</div>
                                </div>
                                <div class="cl-right">
                                    <div class="cl-pct">20%</div>
                                    <div class="cl-amt">₹24L</div>
                                </div>
                            </div>
                            <div class="cl-item">
                                <div class="cl-left">
                                    <div class="cl-dot" style="background:#8b5cf6"></div>
                                    <div class="cl-name">Decor + Photography</div>
                                </div>
                                <div class="cl-right">
                                    <div class="cl-pct">15%</div>
                                    <div class="cl-amt">₹18L</div>
                                </div>
                            </div>
                            <div class="cl-item">
                                <div class="cl-left">
                                    <div class="cl-dot" style="background:#888"></div>
                                    <div class="cl-name">Others</div>
                                </div>
                                <div class="cl-right">
                                    <div class="cl-pct">10%</div>
                                    <div class="cl-amt">₹12L</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-aos="fade-left">
                        <h3 class="section-title" style="font-size:1.6rem">Destination <span>Wedding</span> — ₹75L – ₹2
                            Crore</h3>
                        <p style="color:var(--gray-500);font-size:14px;line-height:1.8;margin-bottom:24px">The ultimate
                            dream — Udaipur Palace, Goa Beach, Bali, or European castle. Includes flights, accommodation
                            for close family, and world-class settings. Requires 15–20 year advance planning.</p>
                        <div class="wcb-list">
                            <div class="wcb-item">
                                <div class="wcb-icon" style="background:rgba(200,16,46,.08);color:var(--red)">🏰</div>
                                <div>
                                    <h4>Heritage Palace or Beach Resort Buyout</h4>
                                    <p>Umaid Bhawan, Rajmahal, Taj Lake Palace — full property buyout for 3–5 days,
                                        all-inclusive.</p><span class="wcb-range">₹30–60L</span>
                                </div>
                            </div>
                            <div class="wcb-item">
                                <div class="wcb-icon" style="background:rgba(14,165,233,.08);color:#0ea5e9">✈️</div>
                                <div>
                                    <h4>Guest Travel & Accommodation</h4>
                                    <p>Flights and hotel for 100–200 close family/friends. Often includes 3–5 nights
                                        package.</p><span class="wcb-range">₹15–30L</span>
                                </div>
                            </div>
                            <div class="wcb-item">
                                <div class="wcb-icon" style="background:rgba(212,160,23,.10);color:#8a6500">💍</div>
                                <div>
                                    <h4>Couture Jewellery & Outfits</h4>
                                    <p>Sabyasachi/Manish Malhotra lehenga, custom diamond jewellery, and complete
                                        trousseau.</p><span class="wcb-range">₹15–40L</span>
                                </div>
                            </div>
                            <div class="wcb-item">
                                <div class="wcb-icon" style="background:rgba(139,92,246,.08);color:#7c3aed">🎥</div>
                                <div>
                                    <h4>Cinematic Production</h4>
                                    <p>International-level photography team, aerial shots, pre-wedding abroad, and
                                        wedding film.</p><span class="wcb-range">₹8–18L</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== WEDDING FUND CALCULATOR ===================== -->
    <section class="section wf-calculator" id="calculator">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <span class="section-label">Wedding Fund Calculator</span>
                <h2 class="section-title">How Much Do You Need to <span>Save Every Month?</span></h2>
                <p class="section-sub">Our inflation-adjusted wedding fund calculator tells you exactly what to save —
                    based on your child's current age and your target wedding scale.</p>
            </div>
            <div class="wfc-grid" data-aos="fade-up">
                <div class="wfc-form">
                    <div class="wfc-form-title">Wedding Fund Planner</div>
                    <div class="wfc-form-sub">Includes 12% annual wedding inflation adjustment — so your fund keeps pace
                        with real costs.</div>

                    <div class="wfc-field">
                        <div class="wfc-label">Child's Current Age <span id="lbl-child-age">5</span> years</div>
                        <input type="range" class="range-input" id="wf-child-age" min="0" max="18" value="5">
                    </div>
                    <div class="wfc-field">
                        <div class="wfc-label">Target Wedding Age <span id="lbl-wed-age">25</span> years</div>
                        <input type="range" class="range-input" id="wf-wed-age" min="20" max="35" value="25">
                    </div>
                    <div class="wfc-field">
                        <div class="wfc-label">Target Wedding Budget Today <span id="lbl-budget">₹30,00,000</span></div>
                        <input type="range" class="range-input" id="wf-budget" min="500000" max="20000000" step="500000"
                            value="3000000">
                    </div>
                    <div class="wfc-field">
                        <div class="wfc-label">Annual Wedding Inflation <span id="lbl-inf">12</span>%</div>
                        <input type="range" class="range-input" id="wf-inf" min="8" max="15" step="0.5" value="12">
                    </div>
                    <div class="wfc-field">
                        <div class="wfc-label">Expected Return on Investment <span id="lbl-roi">14</span>% p.a.</div>
                        <input type="range" class="range-input" id="wf-roi" min="8" max="18" step="0.5" value="14">
                    </div>
                    <div class="wfc-field">
                        <div class="wfc-label">Gold Allocation <span id="lbl-gold">20</span>% of fund</div>
                        <input type="range" class="range-input" id="wf-gold" min="0" max="40" step="5" value="20">
                    </div>

                    <div
                        style="background:rgba(212,160,23,.08);border:1px solid rgba(212,160,23,.2);border-radius:8px;padding:14px;margin-top:6px">
                        <p style="font-size:12.5px;color:var(--gray-700);line-height:1.7"><i class="fas fa-star"
                                style="color:var(--gold);margin-right:6px"></i> <strong>Gold Allocation:</strong> We
                            recommend 20–30% in Sovereign Gold Bonds for wedding funds — gold price tracks wedding cost
                            inflation very closely, providing a natural hedge.</p>
                    </div>
                </div>

                <div class="wfc-result">
                    <div class="wfr-label">Monthly SIP Required</div>
                    <div class="wfr-big" id="wf-monthly">₹<span>12,400</span> /mo</div>
                    <div class="wfr-sub" id="wf-sub">To fund a ₹30L wedding in 20 years (child age 5 → 25)</div>

                    <div class="wfr-gauge-row" style="margin-top:20px">
                        <div class="wfr-gauge-item">
                            <div class="wfg-num" id="wf-future-cost">₹<span>2.9 Cr</span></div>
                            <div class="wfg-label">Inflation-Adjusted Wedding Cost</div>
                        </div>
                        <div class="wfr-gauge-item">
                            <div class="wfg-num" id="wf-years">20 <span>Yrs</span></div>
                            <div class="wfg-label">Years to Wedding</div>
                        </div>
                    </div>

                    <div class="wfr-breakdown">
                        <div class="wfrb-row">
                            <div class="wfrb-label">
                                <div class="wfrb-dot" style="background:var(--red)"></div>Equity/Hybrid Funds SIP
                            </div>
                            <div class="wfrb-val" id="wf-equity-sip">₹9,920 /mo</div>
                        </div>
                        <div class="wfrb-row">
                            <div class="wfrb-label">
                                <div class="wfrb-dot" style="background:var(--gold)"></div>Gold (SGB) SIP
                            </div>
                            <div class="wfrb-val" id="wf-gold-sip">₹2,480 /mo</div>
                        </div>
                        <div class="wfrb-row">
                            <div class="wfrb-label">
                                <div class="wfrb-dot" style="background:#15803d"></div>Returns Earned
                            </div>
                            <div class="wfrb-val" id="wf-returns" style="color:#15803d">₹XX saved</div>
                        </div>
                        <div class="wfrb-row" style="border-color:var(--red)">
                            <div class="wfrb-label">
                                <div class="wfrb-dot" style="background:var(--gray-300)"></div>Total Personal Loan
                                Needed
                            </div>
                            <div class="wfrb-val" style="color:#15803d">₹0 — Fully Funded ✓</div>
                        </div>
                    </div>

                    <div
                        style="background:var(--gray-50);border-radius:8px;padding:14px;margin-bottom:20px;border:1px solid var(--gray-100)">
                        <p style="font-size:12.5px;color:var(--gray-700);line-height:1.7"><i class="fas fa-lightbulb"
                                style="color:var(--red);margin-right:6px"></i> <strong>Starting today vs 5 years
                                later:</strong> Every 5-year delay increases your required monthly SIP by <span
                                id="wf-delay-impact" style="color:var(--red);font-weight:700">~60%</span>. Start early —
                            compounding does the heavy lifting.</p>
                    </div>

                    <a href="wealth-bridge.html#contact" class="btn btn-primary"
                        style="width:100%;justify-content:center">Start My Child's Wedding Fund <i
                            class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== INVESTMENT INSTRUMENTS ===================== -->
    <section class="section wedding-instruments" id="instruments">
        <div class="container">
            <div class="section-header center" data-aos="fade-up">
                <span class="section-label">Recommended Instruments</span>
                <h2 class="section-title">Best Investments for <span>Wedding Fund Building</span></h2>
                <p class="section-sub">A multi-instrument approach that combines growth, safety, and inflation hedging —
                    tailored to how many years you have until the wedding.</p>
            </div>
            <div class="wi-grid">
                <div class="wi-card" data-aos="fade-up" data-aos-delay="0">
                    <div class="wi-header" style="background:linear-gradient(135deg,var(--red),var(--red-dark))">
                        <div class="wi-icon">📈</div>
                        <div class="wi-name">Equity Mutual Funds</div>
                        <div class="wi-tag-sm">15+ Years Away</div>
                    </div>
                    <div class="wi-body">
                        <div class="wi-desc">For long-horizon wedding funds (15+ years), equity mutual funds provide the
                            highest returns — outpacing wedding inflation and building maximum corpus through
                            compounding.</div>
                        <div class="wi-rows">
                            <div class="wi-row"><span class="wi-row-label">Expected Returns</span><span
                                    class="wi-row-val green">14–18% CAGR</span></div>
                            <div class="wi-row"><span class="wi-row-label">Wedding Inflation</span><span
                                    class="wi-row-val">~12% pa</span></div>
                            <div class="wi-row"><span class="wi-row-label">Real Return</span><span
                                    class="wi-row-val green">+2–6% above inflation</span></div>
                            <div class="wi-row"><span class="wi-row-label">Tax (after 12m)</span><span
                                    class="wi-row-val">10% LTCG on >₹1.25L</span></div>
                        </div>
                    </div>
                    <div class="wi-footer"><i class="fas fa-lightbulb"></i> Best for child aged 0–10 — maximum time for
                        compounding</div>
                </div>

                <div class="wi-card" data-aos="fade-up" data-aos-delay="80">
                    <div class="wi-header" style="background:linear-gradient(135deg,#8a6500,#4a3500)">
                        <div class="wi-icon">🥇</div>
                        <div class="wi-name">Sovereign Gold Bonds (SGBs)</div>
                        <div class="wi-tag-sm">Natural Wedding Inflation Hedge</div>
                    </div>
                    <div class="wi-body">
                        <div class="wi-desc">Gold price tracks Indian wedding cost inflation remarkably closely — making
                            SGBs the perfect natural hedge. Additionally, they pay 2.5% annual interest. And maturity is
                            tax-free!</div>
                        <div class="wi-rows">
                            <div class="wi-row"><span class="wi-row-label">Annual Interest</span><span
                                    class="wi-row-val green">2.5% (paid semi-annually)</span></div>
                            <div class="wi-row"><span class="wi-row-label">Gold Appreciation</span><span
                                    class="wi-row-val green">Historical ~11–13% pa</span></div>
                            <div class="wi-row"><span class="wi-row-label">Maturity Tax</span><span
                                    class="wi-row-val green">Nil (Tax-Free)</span></div>
                            <div class="wi-row"><span class="wi-row-label">Wedding Hedge</span><span
                                    class="wi-row-val green">Excellent Natural Hedge</span></div>
                        </div>
                    </div>
                    <div class="wi-footer"><i class="fas fa-lightbulb"></i> Allocate 20–30% of wedding fund to SGBs —
                        optimal hedge</div>
                </div>

                <div class="wi-card" data-aos="fade-up" data-aos-delay="160">
                    <div class="wi-header" style="background:linear-gradient(135deg,#1a3a5f,#2d6a9f)">
                        <div class="wi-icon">⚖️</div>
                        <div class="wi-name">Balanced Advantage Funds</div>
                        <div class="wi-tag-sm">5–15 Years Away — De-Risking Phase</div>
                    </div>
                    <div class="wi-body">
                        <div class="wi-desc">As the wedding date approaches (5–15 years out), shift from pure equity to
                            balanced advantage or hybrid funds — maintaining growth while reducing volatility risk
                            closer to the big day.</div>
                        <div class="wi-rows">
                            <div class="wi-row"><span class="wi-row-label">Expected Returns</span><span
                                    class="wi-row-val green">12–15% CAGR</span></div>
                            <div class="wi-row"><span class="wi-row-label">Risk Level</span><span
                                    class="wi-row-val">Moderate</span></div>
                            <div class="wi-row"><span class="wi-row-label">Equity Allocation</span><span
                                    class="wi-row-val">40–80% Dynamic</span></div>
                            <div class="wi-row"><span class="wi-row-label">Tax</span><span class="wi-row-val">Equity tax
                                    treatment</span></div>
                        </div>
                    </div>
                    <div class="wi-footer"><i class="fas fa-lightbulb"></i> Begin gradual shift to BAF when child
                        reaches age 12–15</div>
                </div>

                <div class="wi-card" data-aos="fade-up" data-aos-delay="0">
                    <div class="wi-header" style="background:linear-gradient(135deg,#15803d,#166534)">
                        <div class="wi-icon">💵</div>
                        <div class="wi-name">Debt Funds (Short-Duration)</div>
                        <div class="wi-tag-sm">2–5 Years Before Wedding</div>
                    </div>
                    <div class="wi-body">
                        <div class="wi-desc">When the wedding is 2–5 years away, shift bulk of corpus to short-duration
                            debt funds — protecting accumulated wealth while maintaining liquidity and modest growth.
                        </div>
                        <div class="wi-rows">
                            <div class="wi-row"><span class="wi-row-label">Expected Returns</span><span
                                    class="wi-row-val">7–9% pa</span></div>
                            <div class="wi-row"><span class="wi-row-label">Risk Level</span><span
                                    class="wi-row-val green">Low</span></div>
                            <div class="wi-row"><span class="wi-row-label">Liquidity</span><span
                                    class="wi-row-val green">T+1 to T+3</span></div>
                            <div class="wi-row"><span class="wi-row-label">Capital Safety</span><span
                                    class="wi-row-val green">High</span></div>
                        </div>
                    </div>
                    <div class="wi-footer"><i class="fas fa-lightbulb"></i> Critical de-risking move — preserve corpus
                        before wedding year</div>
                </div>

                <div class="wi-card" data-aos="fade-up" data-aos-delay="80">
                    <div class="wi-header" style="background:linear-gradient(135deg,#4a1a2e,#7c2d4a)">
                        <div class="wi-icon">🏦</div>
                        <div class="wi-name">Fixed Deposits (Final Year)</div>
                        <div class="wi-tag-sm">6–12 Months Before Wedding</div>
                    </div>
                    <div class="wi-body">
                        <div class="wi-desc">In the final 6–12 months before the wedding, move the corpus to scheduled
                            bank FDs for guaranteed safety. Lock in with a staggered maturity laddering to match payment
                            timelines.</div>
                        <div class="wi-rows">
                            <div class="wi-row"><span class="wi-row-label">Interest Rate</span><span
                                    class="wi-row-val">7.5–8.5% pa</span></div>
                            <div class="wi-row"><span class="wi-row-label">Risk Level</span><span
                                    class="wi-row-val green">Zero (up to ₹5L insured)</span></div>
                            <div class="wi-row"><span class="wi-row-label">Tenure</span><span class="wi-row-val">3–12
                                    months</span></div>
                            <div class="wi-row"><span class="wi-row-label">Liquidity</span><span
                                    class="wi-row-val">Premature at 1% penalty</span></div>
                        </div>
                    </div>
                    <div class="wi-footer"><i class="fas fa-lightbulb"></i> Stagger FD maturities: venue advance, decor,
                        caterer payments</div>
                </div>

                <div class="wi-card" data-aos="fade-up" data-aos-delay="160">
                    <div class="wi-header" style="background:linear-gradient(135deg,#1a1a3a,#2d2d5a)">
                        <div class="wi-icon">📊</div>
                        <div class="wi-name">ELSS (Tax-Saving + Growth)</div>
                        <div class="wi-tag-sm">Bonus: 80C Tax Benefit + Wedding Fund</div>
                    </div>
                    <div class="wi-body">
                        <div class="wi-desc">For long-horizon wedding funds, ELSS provides the dual benefit of Section
                            80C tax deduction AND high equity returns. Invest up to ₹1.5L/year — save tax while building
                            the wedding corpus.</div>
                        <div class="wi-rows">
                            <div class="wi-row"><span class="wi-row-label">Tax Deduction</span><span
                                    class="wi-row-val green">₹1.5L under 80C</span></div>
                            <div class="wi-row"><span class="wi-row-label">Historical Returns</span><span
                                    class="wi-row-val green">14–18% CAGR</span></div>
                            <div class="wi-row"><span class="wi-row-label">Lock-in</span><span class="wi-row-val">3
                                    Years only</span></div>
                            <div class="wi-row"><span class="wi-row-label">Tax Saving (30% bracket)</span><span
                                    class="wi-row-val green">₹45,000/year</span></div>
                        </div>
                    </div>
                    <div class="wi-footer"><i class="fas fa-lightbulb"></i> Start ELSS SIP today — save ₹45K+ tax AND
                        build wedding corpus</div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== GOLD STRATEGY ===================== -->
    <section class="section gold-strategy" id="gold">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <span class="section-label">Gold Strategy for Indian Weddings</span>
                <h2 class="section-title">Smart Way to <span>Accumulate Wedding Gold</span></h2>
                <p class="section-sub">Indian weddings and gold are inseparable. But buying gold jewellery last-minute
                    at peak prices is expensive. Here's how to build your gold allocation strategically.</p>
            </div>
            <div class="gs-grid">
                <div data-aos="fade-right">
                    <div class="gs-body">
                        <p>Gold jewellery for an Indian wedding typically accounts for <strong>15–30% of total wedding
                                cost</strong>. For a ₹30 lakh wedding, that's ₹4.5–9 lakhs of gold. Buying this in one
                            go — at whatever price gold is at the time — is both expensive and risky.</p>
                        <div class="gs-highlight">"Buying gold through SGBs over 10 years delivers the same physical
                            gold at 25–35% lower effective cost than last-minute jewellery purchases — because you earn
                            2.5% annual interest AND benefit from gold price appreciation on the way up."</div>
                        <p>Our gold strategy for wedding planning uses a <strong>combination of Sovereign Gold Bonds
                                (SGBs), Gold ETFs, and Gold Mutual Funds</strong> — accumulated systematically over
                            years. When the wedding approaches, we advise on converting the optimal portion to physical
                            jewellery at the right price point.</p>
                        <p>This approach effectively means you are <strong>continuously buying gold at different price
                                points</strong> (rupee cost averaging) — dramatically reducing the risk of buying all
                            your gold at a market peak.</p>
                    </div>
                    <div style="margin-top:24px"><a href="#cta" class="btn btn-gold"><i class="fas fa-coins"></i> Plan
                            My Wedding Gold Strategy</a></div>
                </div>

                <div data-aos="fade-left">
                    <div class="gold-instruments">
                        <div class="gi-card">
                            <div class="gi-icon" style="background:rgba(212,160,23,.1);color:#8a6500"><i
                                    class="fas fa-certificate"></i></div>
                            <div>
                                <h4>Sovereign Gold Bonds (SGBs) — BEST OPTION</h4>
                                <p>Government bonds denominated in grams of gold. Earn 2.5% annual interest PLUS gold
                                    price appreciation. Maturity proceeds completely tax-free after 8 years.</p>
                                <span class="gi-advantage"><i class="fas fa-star"></i> Tax-free maturity + 2.5% interest
                                    — own gold without storage risk</span>
                            </div>
                        </div>
                        <div class="gi-card">
                            <div class="gi-icon" style="background:rgba(234,179,8,.1);color:#8a6500"><i
                                    class="fas fa-chart-line"></i></div>
                            <div>
                                <h4>Gold ETFs (Exchange Traded Funds)</h4>
                                <p>Electronic gold with 99.5% purity, real-time tradability, and no storage charges.
                                    Ideal for SIP-style gold accumulation in smaller amounts.</p>
                                <span class="gi-advantage"><i class="fas fa-check-circle"></i> Highly liquid — can sell
                                    partial amounts, trade on exchange anytime</span>
                            </div>
                        </div>
                        <div class="gi-card">
                            <div class="gi-icon" style="background:rgba(200,16,46,.08);color:var(--red)"><i
                                    class="fas fa-layer-group"></i></div>
                            <div>
                                <h4>Gold Mutual Funds</h4>
                                <p>SIP-friendly — invest as little as ₹500/month. These funds invest in Gold ETFs.
                                    Perfect for regular monthly gold accumulation without exchange trading knowledge.
                                </p>
                                <span class="gi-advantage"><i class="fas fa-check-circle"></i> Easiest entry point —
                                    start with ₹1,000/month gold SIP today</span>
                            </div>
                        </div>
                        <div class="gi-card">
                            <div class="gi-icon" style="background:rgba(74,222,128,.1);color:#15803d"><i
                                    class="fas fa-calendar-check"></i></div>
                            <div>
                                <h4>When to Convert to Physical Jewellery</h4>
                                <p>12–18 months before the wedding, we advise on the optimal price point to convert your
                                    gold corpus to physical jewellery — monitoring gold rates and booking orders with
                                    jewellers in advance.</p>
                                <span class="gi-advantage"><i class="fas fa-check-circle"></i> Pre-booking jewellery
                                    6–12 months ahead typically saves 5–8%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== PHASE-WISE PLANNING TIMELINE ===================== -->
    <section class="section phase-timeline" id="phases">
        <div class="container">
            <div class="section-header center" data-aos="fade-up">
                <span class="section-label">Phase-Wise Planning</span>
                <h2 class="section-title">Wedding Fund Strategy <span>Through Every Phase</span></h2>
                <p class="section-sub">Your investment strategy evolves as the wedding date approaches — from aggressive
                    growth to careful preservation.</p>
            </div>
            <div class="pt-grid">
                <div class="pt-card" data-aos="fade-up" data-aos-delay="0">
                    <div class="pt-dot">🌱</div>
                    <span class="pt-label">15+ Years Away</span>
                    <h4>Aggressive Growth Phase</h4>
                    <p>Maximum equity exposure — let compounding work hardest when you have maximum time. Small monthly
                        amounts grow dramatically.</p>
                    <div class="pt-actions">
                        <div class="pt-action"><i class="fas fa-check-circle"></i> 70–80% Equity MF</div>
                        <div class="pt-action"><i class="fas fa-check-circle"></i> 20–30% Gold (SGBs)</div>
                        <div class="pt-action"><i class="fas fa-check-circle"></i> ELSS for 80C benefit</div>
                    </div>
                </div>
                <div class="pt-card" data-aos="fade-up" data-aos-delay="80">
                    <div class="pt-dot">🚀</div>
                    <span class="pt-label">8–15 Years Away</span>
                    <h4>Continued Accumulation</h4>
                    <p>Maintain equity dominance. Step up SIPs annually. Review and rebalance yearly. Gold SGB
                        allocation continues building.</p>
                    <div class="pt-actions">
                        <div class="pt-action"><i class="fas fa-check-circle"></i> 65–75% Equity MF</div>
                        <div class="pt-action"><i class="fas fa-check-circle"></i> Annual SIP step-up 10%</div>
                        <div class="pt-action"><i class="fas fa-check-circle"></i> Review gold allocation</div>
                    </div>
                </div>
                <div class="pt-card" data-aos="fade-up" data-aos-delay="160">
                    <div class="pt-dot">⚖️</div>
                    <span class="pt-label">5–8 Years Away</span>
                    <h4>Gradual De-risking</h4>
                    <p>Begin shifting equity to balanced/hybrid funds. Preserve gains. Start researching venues and
                        getting early estimates.</p>
                    <div class="pt-actions">
                        <div class="pt-action"><i class="fas fa-check-circle"></i> 50–60% Balanced Funds</div>
                        <div class="pt-action"><i class="fas fa-check-circle"></i> 20% Short-term Debt</div>
                        <div class="pt-action"><i class="fas fa-check-circle"></i> Venue research begins</div>
                    </div>
                </div>
                <div class="pt-card" data-aos="fade-up" data-aos-delay="240">
                    <div class="pt-dot">🏦</div>
                    <span class="pt-label">1–5 Years Away</span>
                    <h4>Conservative Preservation</h4>
                    <p>Move majority to debt funds and FDs. Begin advance bookings. Convert SGB gold to physical as
                        needed. Zero equity risk.</p>
                    <div class="pt-actions">
                        <div class="pt-action"><i class="fas fa-check-circle"></i> 60–80% Debt/FD</div>
                        <div class="pt-action"><i class="fas fa-check-circle"></i> Advance venue booking</div>
                        <div class="pt-action"><i class="fas fa-check-circle"></i> Jewellery gold conversion</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== PROCESS ===================== -->
    <section class="section wp-process" id="process">
        <div class="container">
            <div class="section-header center" data-aos="fade-up">
                <span class="section-label">How We Help</span>
                <h2 class="section-title" style="color:white">From First SIP to <span>Beautiful Wedding</span> — 5 Steps
                </h2>
                <p class="section-sub" style="color:rgba(255,255,255,.45);margin:0 auto">Our structured wedding fund
                    advisory process ensures you're never underprepared for your child's biggest day.</p>
            </div>
            <div class="wpp-steps">
                <div class="wpp-step active" data-aos="fade-up" data-aos-delay="0">
                    <div class="wpp-num">💍</div>
                    <h4>Dream & Estimate</h4>
                    <p>Define the wedding scale you envision, child's current age, and our inflation-adjusted projector
                        shows the real future cost.</p>
                </div>
                <div class="wpp-step" data-aos="fade-up" data-aos-delay="80">
                    <div class="wpp-num">📊</div>
                    <h4>Fund Design</h4>
                    <p>Custom SIP plan: equity + gold allocation split, monthly amounts, annual step-up schedule, and
                        phase transition roadmap.</p>
                </div>
                <div class="wpp-step" data-aos="fade-up" data-aos-delay="160">
                    <div class="wpp-num">🤖</div>
                    <h4>Automate</h4>
                    <p>SIP mandates and SGB subscription set up on autopilot. Runs month after month with zero
                        intervention needed.</p>
                </div>
                <div class="wpp-step" data-aos="fade-up" data-aos-delay="240">
                    <div class="wpp-num">🔄</div>
                    <h4>Annual Reviews</h4>
                    <p>Yearly review of corpus, step-up SIP amounts, portfolio rebalancing, and phase transitions as
                        wedding date approaches.</p>
                </div>
                <div class="wpp-step" data-aos="fade-up" data-aos-delay="320">
                    <div class="wpp-num">💒</div>
                    <h4>Wedding-Ready</h4>
                    <p>Fund fully deployed: venue booked, jewellery purchased, catering advance paid — all from the
                        dedicated corpus. Zero loans.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== CASE STUDY ===================== -->
    <section class="section case-study" id="casestudy">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <span class="section-label">Real Client Story</span>
                <h2 class="section-title">₹8,000/Month Started at Age 5 — <span>₹68 Lakh at Her Wedding</span></h2>
                <p class="section-sub">How the Patel family planned their daughter's wedding without touching their
                    retirement savings or taking a single loan.</p>
            </div>
            <div class="cs-grid">
                <div class="cs-card" data-aos="fade-right">
                    <div class="cs-header">
                        <div class="cs-avatar">P</div>
                        <div>
                            <div class="cs-name">The Patel Family</div>
                            <div class="cs-role">Business Owner · Surat · Started when daughter was 5 years old</div>
                        </div>
                    </div>
                    <div class="cs-body">
                        <div class="cs-row">
                            <div class="cs-stat">
                                <div class="cs-stat-label">Monthly SIP Started</div>
                                <div class="cs-stat-val">₹8,000/mo</div>
                            </div>
                            <div class="cs-stat">
                                <div class="cs-stat-label">Duration</div>
                                <div class="cs-stat-val">18 Years</div>
                            </div>
                            <div class="cs-stat">
                                <div class="cs-stat-label">Total Invested</div>
                                <div class="cs-stat-val">₹17.3 Lakhs</div>
                            </div>
                            <div class="cs-stat">
                                <div class="cs-stat-label">Corpus at Wedding</div>
                                <div class="cs-stat-val gold">₹68.4 Lakhs</div>
                            </div>
                        </div>
                        <p class="cs-quote">"Our daughter was 5 when we started. ₹8,000 a month felt like a lot then.
                            But 18 years later, we had ₹68 lakhs ready for her wedding — funded beautifully in a 5-star
                            venue without borrowing a rupee or touching our retirement savings. We actually had ₹4 lakhs
                            left over after the wedding. Planning makes all the difference."</p>
                    </div>
                </div>
                <div data-aos="fade-left">
                    <p
                        style="font-size:12px;font-weight:700;letter-spacing:2px;text-transform:uppercase;color:var(--gray-500);margin-bottom:10px">
                        Their 18-Year Journey</p>
                    <div class="cs-timeline">
                        <div class="cst-item">
                            <div class="cst-dot-col">
                                <div class="cst-dot"></div>
                                <div class="cst-line"></div>
                            </div>
                            <div>
                                <div class="cst-year">2006 · Daughter Age 5</div>
                                <div class="cst-title">Fund Started — ₹8K/Month</div>
                                <div class="cst-desc">Equity MF SIP ₹6,400 + SGB equivalent ₹1,600/month. ELSS for 80C
                                    benefit. Total annual investment: ₹96,000.</div>
                            </div>
                        </div>
                        <div class="cst-item">
                            <div class="cst-dot-col">
                                <div class="cst-dot"></div>
                                <div class="cst-line"></div>
                            </div>
                            <div>
                                <div class="cst-year">2011 · Age 10 · 5-Year Review</div>
                                <div class="cst-title">First Milestone — ₹6.8 Lakhs</div>
                                <div class="cst-desc">SIP stepped up to ₹10,000/month (10% annual step-up). Portfolio
                                    performing at 15.2% CAGR. Gold portion: ₹1.4L.</div>
                            </div>
                        </div>
                        <div class="cst-item">
                            <div class="cst-dot-col">
                                <div class="cst-dot"></div>
                                <div class="cst-line"></div>
                            </div>
                            <div>
                                <div class="cst-year">2016 · Age 15</div>
                                <div class="cst-title">De-Risking Begins — ₹24 Lakhs</div>
                                <div class="cst-desc">Shifted 30% of equity to balanced funds. SIP now ₹14,000/month.
                                    Started tracking wedding venue options. Gold: ₹5.2L.</div>
                            </div>
                        </div>
                        <div class="cst-item">
                            <div class="cst-dot-col">
                                <div class="cst-dot"></div>
                                <div class="cst-line"></div>
                            </div>
                            <div>
                                <div class="cst-year">2022 · Age 21</div>
                                <div class="cst-title">Final Countdown — ₹52 Lakhs</div>
                                <div class="cst-desc">80% shifted to short-term debt and FDs. Venue advance paid from
                                    liquid funds. Jewellery SGBs converted: ₹11.8L gold.</div>
                            </div>
                        </div>
                        <div class="cst-item">
                            <div class="cst-dot-col">
                                <div class="cst-dot"
                                    style="background:#4ade80;box-shadow:0 0 0 4px rgba(74,222,128,.2)"></div>
                                <div class="cst-line"></div>
                            </div>
                            <div>
                                <div class="cst-year" style="color:#15803d">2024 · Age 23 — WEDDING DAY 💒</div>
                                <div class="cst-title">₹68.4 Lakh Corpus — Grand Wedding</div>
                                <div class="cst-desc">5-star venue in Surat, 800 guests, designer decor, best
                                    photographers. Total spent: ₹64.2L. Surplus ₹4.2L given to daughter as gift. Zero
                                    loans taken.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== WHO IS IT FOR ===================== -->
    <section class="section for-whom" id="who">
        <div class="container">
            <div class="section-header center" data-aos="fade-up">
                <span class="section-label">Who We Help</span>
                <h2 class="section-title">Wedding Planning for <span>Every Family</span></h2>
            </div>
            <div class="fw-grid">
                <div class="fw-card" data-aos="fade-up" data-aos-delay="0">
                    <div class="fw-emoji">👶</div>
                    <h3>Parents of Young Children (0–10)</h3>
                    <p>The absolute best time to start. With 15–25 years of compounding ahead, even ₹5,000–₹8,000/month
                        builds a substantial wedding corpus. Start now — costs are lowest, compounding is highest.</p>
                    <div class="fw-tags"><span class="fw-tag">Maximum Compounding</span><span class="fw-tag">Low Monthly
                            Amount</span></div>
                </div>
                <div class="fw-card" data-aos="fade-up" data-aos-delay="60">
                    <div class="fw-emoji">🧒</div>
                    <h3>Parents of Teens (11–17)</h3>
                    <p>Still excellent time to build a meaningful fund. 8–14 years of savings. We use a more aggressive
                        equity allocation to compensate for the shorter timeline. Monthly SIP higher but very
                        achievable.</p>
                    <div class="fw-tags"><span class="fw-tag">Aggressive Equity</span><span class="fw-tag">Catch-up
                            Strategy</span></div>
                </div>
                <div class="fw-card" data-aos="fade-up" data-aos-delay="120">
                    <div class="fw-emoji">🎓</div>
                    <h3>Parents of Young Adults (18–24)</h3>
                    <p>Wedding in 3–8 years. Focus shifts to preserving existing savings, accelerating final
                        contributions, and strategically timing gold, venue, and jewellery purchases.</p>
                    <div class="fw-tags"><span class="fw-tag">Final Accumulation</span><span class="fw-tag">Advance
                            Booking</span></div>
                </div>
                <div class="fw-card" data-aos="fade-up" data-aos-delay="0">
                    <div class="fw-emoji">💑</div>
                    <h3>Two Children — Different Timelines</h3>
                    <p>Most common scenario — boy and girl with 3–5 year gap. We run parallel wedding funds with
                        different allocations, timelines, and amounts. Coordinated review each year for the whole
                        family.</p>
                    <div class="fw-tags"><span class="fw-tag">Multiple Funds</span><span class="fw-tag">Coordinated
                            Planning</span></div>
                </div>
                <div class="fw-card" data-aos="fade-up" data-aos-delay="60">
                    <div class="fw-emoji">🌏</div>
                    <h3>NRI Parents with India Wedding</h3>
                    <p>Planning an India-based wedding for your child while living abroad. We manage India-side funds
                        and coordinate jewellery purchases, forex strategy, and advance vendor payments remotely.</p>
                    <div class="fw-tags"><span class="fw-tag">NRI India Wedding</span><span class="fw-tag">Remote
                            Management</span></div>
                </div>
                <div class="fw-card" data-aos="fade-up" data-aos-delay="120">
                    <div class="fw-emoji">💎</div>
                    <h3>HNI — Grand or Destination Wedding</h3>
                    <p>Planning a ₹1–2 crore destination wedding or grand event. We build a dedicated multi-crore
                        wedding fund using equity, gold, real estate, and structured products — fully inflation-indexed.
                    </p>
                    <div class="fw-tags"><span class="fw-tag">Destination Wedding</span><span class="fw-tag">₹1Cr+
                            Fund</span></div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== TESTIMONIALS ===================== -->
    <section class="section testimonials" id="testimonials">
        <div class="container">
            <div class="section-header center" data-aos="fade-up">
                <span class="section-label">Happy Families</span>
                <h2 class="section-title">Weddings Celebrated, <span>Loans Avoided</span></h2>
            </div>
            <div class="t-grid">
                <div class="t-card" data-aos="fade-up" data-aos-delay="0">
                    <div class="t-top">
                        <div class="t-emoji">💍</div>
                        <div class="t-stars">★★★★★</div>
                    </div>
                    <p class="t-text">"We started when our daughter was 7. Wealth Bridge set up a ₹10,000/month SIP that
                        we increased 10% every year. At her wedding last year — she was 25 — we had ₹74 lakhs. We hosted
                        700 guests at a 5-star venue in Ahmedabad. Not a single rupee of debt. The satisfaction of
                        watching her wedding knowing every bill was pre-paid — indescribable."</p>
                    <div class="t-author">
                        <div class="t-avatar">R</div>
                        <div>
                            <div class="t-name">Ramesh & Kavita Shah</div>
                            <div class="t-role">Businessman · Ahmedabad · 18-Year Client</div>
                        </div>
                    </div>
                </div>
                <div class="t-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="t-top">
                        <div class="t-emoji">👑</div>
                        <div class="t-stars">★★★★★</div>
                    </div>
                    <p class="t-text">"My son's wedding was a destination event in Udaipur. Budget ₹90 lakhs. When I
                        told my friends, they assumed I took a massive loan. But Wealth Bridge had built a ₹95L wedding
                        fund over 16 years through our ₹14K/month SIP — starting when our son was just 4 years old. I
                        paid everything upfront — cash. My friends were stunned."</p>
                    <div class="t-author">
                        <div class="t-avatar">S</div>
                        <div>
                            <div class="t-name">Suresh Mehta</div>
                            <div class="t-role">Factory Owner · Surat · 16-Year Client</div>
                        </div>
                    </div>
                </div>
                <div class="t-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="t-top">
                        <div class="t-emoji">🥂</div>
                        <div class="t-stars">★★★★★</div>
                    </div>
                    <p class="t-text">"We started our daughter's wedding fund when she was 12 — late by ideal standards
                        but still meaningful. WB used an aggressive equity strategy and we put in ₹18,000/month. In 11
                        years, we had ₹55 lakhs — enough for a beautiful wedding. Our friends who started at 20 with a
                        personal loan paid ₹4 lakhs in interest alone. Starting even late saved us massively."</p>
                    <div class="t-author">
                        <div class="t-avatar">A</div>
                        <div>
                            <div class="t-name">Arun & Priya Joshi</div>
                            <div class="t-role">IT Professionals · Pune · 11-Year Client</div>
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
                    <span class="section-label">Common Questions</span>
                    <h2 class="section-title">Wedding Planning <span>FAQs</span></h2>
                    <p class="section-sub" style="margin-bottom:28px">Honest answers to what Indian parents ask most
                        about planning their child's wedding financially.</p>
                    <a href="#cta" class="btn btn-primary">Start My Wedding Fund <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="faq-list" data-aos="fade-left">
                    <div class="faq-item open">
                        <div class="faq-q"><span>How early should I start a wedding fund for my child?</span><i
                                class="fas fa-plus"></i></div>
                        <div class="faq-a">The ideal answer: the day your child is born. Practically, starting before
                            age 10 gives you the most powerful compounding advantage. To illustrate: ₹8,000/month
                            started at age 5 (20 years) → ₹2.5+ crore at 14% CAGR. The same ₹8,000/month started at age
                            15 (10 years) → only ₹20 lakhs. That's a 12× difference from the same monthly investment —
                            purely from starting 10 years earlier. Every year you delay costs you exponentially more in
                            required monthly savings.</div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-q"><span>What if my child doesn't want an expensive wedding?</span><i
                                class="fas fa-plus"></i></div>
                        <div class="faq-a">That's perfectly fine — and actually a wonderful scenario. If your child
                            chooses a simple wedding and the fund has grown beyond the wedding need, you have several
                            excellent options: (1) Gift the surplus to the couple as a down payment on their first home;
                            (2) Transfer it to their individual investment account as a financial start to their life
                            together; (3) Keep it as a family wealth asset. A wedding fund that "overshoots" is a far
                            better problem than one that falls short. The fund itself is always yours and your child's —
                            it never expires.</div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-q"><span>How is 12% wedding inflation calculated?</span><i
                                class="fas fa-plus"></i></div>
                        <div class="faq-a">Wedding inflation in India is driven by multiple compounding factors: venue
                            rental costs (8–10% pa), gold prices (10–12% pa), food costs/catering (7–9% pa), photography
                            (10–15% pa), designer clothing (12–15% pa), and aspirational escalation — what was
                            considered luxurious in 2010 is now considered standard. Combined, wedding costs in India
                            have historically inflated at 10–14% annually — well above general CPI inflation of 6%. We
                            use 12% as a conservative middle estimate.</div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-q"><span>Can the wedding fund also be used for the dowry/dahej?</span><i
                                class="fas fa-plus"></i></div>
                        <div class="faq-a">Giving or taking dowry is illegal under the Dowry Prohibition Act, 1961.
                            However, gifting assets and valuables to your daughter as part of her trousseau (her
                            personal belongings and stridhan) at the time of marriage is a common and legal practice. We
                            build the wedding fund as a comprehensive fund covering all wedding expenses, jewellery, and
                            gifts/trousseau for the bride — all of which are legitimate and legal. We do not advise on
                            or facilitate any transactions that constitute dowry as defined under the Act.</div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-q"><span>Should I invest in gold jewellery directly or via SGBs?</span><i
                                class="fas fa-plus"></i></div>
                        <div class="faq-a">For long-term accumulation (5+ years away), SGBs are dramatically superior:
                            (1) You earn 2.5% annual interest on the invested amount — physical gold earns nothing; (2)
                            Maturity proceeds are tax-free; (3) No storage, insurance, or making charges; (4) No purity
                            risk. When the wedding is 1–2 years away, we advise on the optimal time to convert your
                            SGB/Gold ETF corpus into physical jewellery — buying systematically and pre-booking with
                            jewellers for the best prices. The "making charges" you pay on physical jewellery (10–25%)
                            are a sunk cost that SGBs completely avoid during the accumulation phase.</div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-q"><span>What if the wedding date shifts by 2–3 years?</span><i
                                class="fas fa-plus"></i></div>
                        <div class="faq-a">No problem whatsoever. A shift in wedding date is very common — career,
                            relationships, preferences — and our fund structure handles this gracefully. If the wedding
                            is delayed: the corpus simply continues growing (more money!), we shift to more conservative
                            instruments only when you actually know the wedding is approaching, and you end up with a
                            larger fund. If the wedding is moved earlier: we immediately shift to conservative,
                            capital-protection instruments, adjust the monthly SIP upward if needed, and plan
                            deployment. Annual reviews ensure the fund is always positioned appropriately relative to
                            the actual wedding timeline.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== CTA BAND ===================== -->
    <section class="cta-band" id="cta">
        <div class="cta-band-bg"></div>
        <div class="cta-band-glow"></div>
        <div class="container">
            <div class="cta-content" data-aos="fade-up">
                <span class="section-label" style="display:block;text-align:center">Start Planning Today</span>
                <h2 class="cta-title">Give Your Child the Wedding<br>They Deserve — <span>Without the Debt</span></h2>
                <p class="cta-desc">Every month you wait increases the required monthly savings. Start your child's
                    wedding fund today — even ₹5,000/month started now can fund a magnificent wedding 20 years from now.
                </p>
                <div class="cta-actions">
                    <a href="wealth-bridge.html#contact" class="btn btn-gold"
                        style="padding:16px 36px;font-size:15px"><i class="fas fa-ring"></i> Start My Wedding Fund</a>
                    <a href="tel:+918000000000" class="btn btn-ghost" style="padding:16px 28px;font-size:15px"><i
                            class="fas fa-phone"></i> +91 8000 000 000</a>
                </div>
                <div class="cta-trust">
                    <div class="cta-trust-item"><i class="fas fa-shield-alt"></i> SEBI Registered Advisor</div>
                    <div class="cta-trust-item"><i class="fas fa-ring"></i> 2,800+ Weddings Funded</div>
                    <div class="cta-trust-item"><i class="fas fa-rupee-sign"></i> ₹0 Loans Needed</div>
                    <div class="cta-trust-item"><i class="fas fa-lock"></i> 100% Transparent</div>
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
                    <div class="rc-icon"><i class="fas fa-graduation-cap"></i></div>
                    <h4>Child Education Planning</h4>
                    <p>Fund your child's education and wedding simultaneously — both goals planned together.</p>
                    <a href="#" class="rc-link">Explore <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="rel-card" data-aos="fade-up" data-aos-delay="60">
                    <div class="rc-icon"><i class="fas fa-chart-line"></i></div>
                    <h4>Investment Planning</h4>
                    <p>A goal-based investment strategy covering all your family's financial milestones.</p>
                    <a href="investment-planning.html" class="rc-link">Explore <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="rel-card" data-aos="fade-up" data-aos-delay="120">
                    <div class="rc-icon"><i class="fas fa-plane"></i></div>
                    <h4>Vacation Planning</h4>
                    <p>Fund your family vacations alongside your child's wedding — both stress-free.</p>
                    <a href="vacation-planning.html" class="rc-link">Explore <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="rel-card" data-aos="fade-up" data-aos-delay="180">
                    <div class="rc-icon"><i class="fas fa-umbrella"></i></div>
                    <h4>Retirement Planning</h4>
                    <p>Ensure your retirement is not compromised by wedding expenses — plan both together.</p>
                    <a href="retirement-planning.html" class="rc-link">Explore <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

<?php include_once ('elements/footer.php'); ?>