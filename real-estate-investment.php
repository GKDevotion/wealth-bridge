<?php include_once ('elements/header.php'); ?>

<!-- Page CSS -->
<link href="<?php echo UrlHelper::asset('css/real-estate-investment.css'); ?>" rel="stylesheet">


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
            <span class="current">Real Estate Investment</span>
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

    <!-- City skyline watermark -->
    <div class="sh-watermark" aria-hidden="true">
        <div class="sh-skyline">
            <div class="sh-skyline-bar" style="height:60px"></div>
            <div class="sh-skyline-bar" style="height:120px"></div>
            <div class="sh-skyline-bar" style="height:90px"></div>
            <div class="sh-skyline-bar" style="height:180px"></div>
            <div class="sh-skyline-bar" style="height:140px"></div>
            <div class="sh-skyline-bar" style="height:220px"></div>
            <div class="sh-skyline-bar" style="height:160px"></div>
            <div class="sh-skyline-bar" style="height:200px"></div>
            <div class="sh-skyline-bar" style="height:130px"></div>
            <div class="sh-skyline-bar" style="height:170px"></div>
            <div class="sh-skyline-bar" style="height:100px"></div>
            <div class="sh-skyline-bar" style="height:80px"></div>
            <div class="sh-skyline-bar" style="height:150px"></div>
            <div class="sh-skyline-bar" style="height:110px"></div>
        </div>
    </div>

    <div class="container">
        <div class="sh-content">

            <!-- LEFT -->
            <div class="sh-left">

                <div class="hero__label" data-aos="fade-right" data-aos-duration="700">
                    Our Services &nbsp;·&nbsp; Real Estate Investment
                </div>

                <h1 class="hero__title" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                    Build Wealth Through
                    <em>Bricks, REITs &amp;</em>
                    Smart Property Moves
                </h1>

                <p class="hero__subtitle" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                    Real estate is India's most trusted wealth creator — but buying the wrong
                    property at the wrong time can destroy years of savings. WealthBridge
                    guides you to the right asset, location, and structure for long-term returns.
                </p>

                <div class="hero__actions" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                    <a href="#contact" class="btn btn-primary">
                        Book Free Consultation
                        <i class="fas fa-arrow-right"></i>
                    </a>
                    <a href="#types" class="btn btn-ghost">
                        Explore Options
                        <i class="fas fa-chevron-down"></i>
                    </a>
                </div>

                <!-- Stats strip -->
                <div class="hero__stats" data-aos="fade-up" data-aos-duration="800" data-aos-delay="420">
                    <div>
                        <div class="hero__stat-num" data-counter="500" data-suffix="Cr+">₹500Cr+</div>
                        <div class="hero__stat-label">Properties Advised</div>
                    </div>
                    <div>
                        <div class="hero__stat-num" data-counter="2400" data-suffix="+">2,400+</div>
                        <div class="hero__stat-label">Clients Guided</div>
                    </div>
                    <div>
                        <div class="hero__stat-num" data-counter="14" data-suffix="%">14%</div>
                        <div class="hero__stat-label">Avg. Annual Return</div>
                    </div>
                </div>

            </div><!-- /sh-left -->


            <!-- RIGHT: Property Portfolio Card -->
            <div class="hero__visual" data-aos="fade-left" data-aos-duration="900" data-aos-delay="200">

                <!-- float top-right -->
                <div class="hero__float f1">
                    <div class="hero__float-label">Portfolio Value</div>
                    <div class="hero__float-val">₹2.8Cr <span>▲</span></div>
                    <div class="hero__float-sub">+22% since acquisition</div>
                </div>

                <!-- main card -->
                <div class="hero__card-main">
                    <div class="hero__card-header">
                        <span class="hero__card-title">Real Estate Portfolio</span>
                        <span class="hero__card-badge">
                            <span class="hero__card-badge-dot"></span>
                            Live Tracking
                        </span>
                    </div>

                    <!-- property listing rows -->
                    <div class="hero__property-list">
                        <div class="hpl-row">
                            <div class="hpl-icon"><i class="fas fa-home"></i></div>
                            <div class="hpl-info">
                                <div class="hpl-name">2BHK Flat — Baner, Pune</div>
                                <div class="hpl-loc"><i class="fas fa-map-marker-alt" style="font-size:9px"></i> Residential · Rented</div>
                            </div>
                            <div class="hpl-right">
                                <div class="hpl-price">₹85L</div>
                                <div class="hpl-yield">3.8% yield ▲</div>
                            </div>
                        </div>
                        <div class="hpl-row">
                            <div class="hpl-icon"><i class="fas fa-store"></i></div>
                            <div class="hpl-info">
                                <div class="hpl-name">Commercial Shop — MG Road</div>
                                <div class="hpl-loc"><i class="fas fa-map-marker-alt" style="font-size:9px"></i> Commercial · Leased</div>
                            </div>
                            <div class="hpl-right">
                                <div class="hpl-price">₹1.2Cr</div>
                                <div class="hpl-yield">6.4% yield ▲</div>
                            </div>
                        </div>
                        <div class="hpl-row">
                            <div class="hpl-icon"><i class="fas fa-chart-bar"></i></div>
                            <div class="hpl-info">
                                <div class="hpl-name">Nexus REIT Units — NSE</div>
                                <div class="hpl-loc"><i class="fas fa-map-marker-alt" style="font-size:9px"></i> REIT · Exchange Traded</div>
                            </div>
                            <div class="hpl-right">
                                <div class="hpl-price">₹45L</div>
                                <div class="hpl-yield">8.2% yield ▲</div>
                            </div>
                        </div>
                    </div>

                    <!-- portfolio total -->
                    <div class="hero__port-summary">
                        <span class="hps-label">Total Portfolio Value</span>
                        <span class="hps-value">₹2.8 Cr <span>▲ 22%</span></span>
                    </div>

                    <!-- metrics 2×2 -->
                    <div class="hero__metrics">
                        <div class="hero__metric">
                            <div class="hero__metric-label">Avg. Rental Yield</div>
                            <div class="hero__metric-val">5.4% <span class="up">▲</span></div>
                        </div>
                        <div class="hero__metric">
                            <div class="hero__metric-label">Capital Appreciation</div>
                            <div class="hero__metric-val">+22% <span class="up">3yr</span></div>
                        </div>
                        <div class="hero__metric">
                            <div class="hero__metric-label">Monthly Rental</div>
                            <div class="hero__metric-val">₹1.1L <span class="up">▲</span></div>
                        </div>
                        <div class="hero__metric">
                            <div class="hero__metric-label">Loan-to-Value</div>
                            <div class="hero__metric-val">52% <span class="neu">●</span></div>
                        </div>
                    </div>
                </div><!-- /card -->

                <!-- float bottom-left -->
                <div class="hero__float f2">
                    <div class="hero__float-label">Monthly Passive Income</div>
                    <div class="hero__float-val">₹1.1L <span>/ mo</span></div>
                    <div class="hero__float-sub">Combined rental income</div>
                </div>

            </div><!-- /hero__visual -->
        </div>
    </div>
</section>


<!-- ══════════════════════════════════════════════════════════
     WHY REAL ESTATE — WHITE
══════════════════════════════════════════════════════════ -->
<section class="section rei-why">
    <div class="container">
        <div class="rei-why-grid">

            <!-- LEFT -->
            <div class="rei-why-content">
                <span class="section-label" data-aos="fade-right">The Opportunity</span>
                <h2 class="section-title" data-aos="fade-up" data-aos-delay="80">
                    Why Real Estate Remains<br>India's <span>Strongest Wealth Builder</span>
                </h2>
                <div style="width:48px;height:3px;background:var(--red);border-radius:2px;margin-bottom:20px"
                     data-aos="fade-left" data-aos-delay="120"></div>
                <p class="section-sub" data-aos="fade-up" data-aos-delay="160">
                    Indian real estate has delivered 12–18% CAGR in top cities over the last
                    decade — combining capital appreciation with rental income. With the right
                    advisory, it becomes a tax-efficient, passive wealth engine.
                </p>

                <div class="rei-why-features" data-aos="fade-up" data-aos-delay="220">
                    <div class="reiwf-card">
                        <div class="reiwf-icon"><i class="fas fa-chart-line"></i></div>
                        <div class="reiwf-title">Capital Appreciation</div>
                        <div class="reiwf-desc">Strategic location selection in tier-1 growth corridors delivers 12–20% CAGR over 5–10 year horizons.</div>
                    </div>
                    <div class="reiwf-card">
                        <div class="reiwf-icon"><i class="fas fa-coins"></i></div>
                        <div class="reiwf-title">Rental Yield Income</div>
                        <div class="reiwf-desc">Residential yields of 2–4%, commercial 6–9%, and REITs 7–9%. Consistent monthly passive income stream.</div>
                    </div>
                    <div class="reiwf-card">
                        <div class="reiwf-icon"><i class="fas fa-shield-alt"></i></div>
                        <div class="reiwf-title">Inflation Hedge</div>
                        <div class="reiwf-desc">Property values and rents historically rise faster than inflation — protecting your real purchasing power.</div>
                    </div>
                    <div class="reiwf-card">
                        <div class="reiwf-icon"><i class="fas fa-percentage"></i></div>
                        <div class="reiwf-title">Leverage &amp; Tax Benefits</div>
                        <div class="reiwf-desc">Home loan interest deduction under 24(b), principal under 80C, and indexation on long-term capital gains.</div>
                    </div>
                </div>
            </div>

            <!-- RIGHT: dark chart card -->
            <div class="rei-why-visual" data-aos="fade-left" data-aos-delay="180">
                <div class="rei-why-bg-block"></div>

                <div class="rei-badge-float f2">
                    <div class="reibf-inner">
                        <div class="reibf-icon"><i class="fas fa-award"></i></div>
                        <div>
                            <div class="reibf-num">RERA</div>
                            <div class="reibf-label">Compliant Advisory</div>
                        </div>
                    </div>
                </div>

                <div class="rei-why-card">
                    <div class="reiwc-title">Real Estate vs Other Asset Classes (10yr avg CAGR)</div>

                    <div class="reiwc-row">
                        <div class="reiwc-row-top">
                            <span>Prime Residential (metro)</span>
                            <span>14.2% CAGR</span>
                        </div>
                        <div class="reiwc-track"><div class="reiwc-fill" style="--w:82%"></div></div>
                    </div>
                    <div class="reiwc-row">
                        <div class="reiwc-row-top">
                            <span>Commercial Real Estate</span>
                            <span>16.8% CAGR</span>
                        </div>
                        <div class="reiwc-track"><div class="reiwc-fill" style="--w:92%"></div></div>
                    </div>
                    <div class="reiwc-row">
                        <div class="reiwc-row-top">
                            <span>REITs (India avg)</span>
                            <span>11.4% CAGR</span>
                        </div>
                        <div class="reiwc-track"><div class="reiwc-fill" style="--w:68%"></div></div>
                    </div>
                    <div class="reiwc-row">
                        <div class="reiwc-row-top">
                            <span>Fixed Deposit (post-tax)</span>
                            <span>4.9% CAGR</span>
                        </div>
                        <div class="reiwc-track"><div class="reiwc-fill" style="--w:28%"></div></div>
                    </div>
                    <div class="reiwc-row">
                        <div class="reiwc-row-top">
                            <span>Gold</span>
                            <span>9.6% CAGR</span>
                        </div>
                        <div class="reiwc-track"><div class="reiwc-fill" style="--w:54%"></div></div>
                    </div>

                    <div class="reiwc-footer">
                        <div>
                            <div class="reiwc-stat-num">14%</div>
                            <div class="reiwc-stat-label">Avg. metro RE CAGR</div>
                        </div>
                        <div>
                            <div class="reiwc-stat-num">₹2.4Cr</div>
                            <div class="reiwc-stat-label">Avg. portfolio value</div>
                        </div>
                    </div>
                </div>

                <div class="rei-badge-float f1">
                    <div class="reibf-inner">
                        <div class="reibf-icon"><i class="fas fa-building"></i></div>
                        <div>
                            <div class="reibf-num">₹500Cr+</div>
                            <div class="reibf-label">Properties Advised</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- ══════════════════════════════════════════════════════════
     PROPERTY TYPES — GRAY-50
══════════════════════════════════════════════════════════ -->
<section class="section rei-types" id="types">
    <div class="container">
        <div class="section-header center">
            <span class="section-label" data-aos="fade-up">Investment Options</span>
            <h2 class="section-title" data-aos="fade-up" data-aos-delay="80">
                Every Way to <span>Invest in Real Estate</span> — Covered
            </h2>
            <p class="section-sub" style="margin:0 auto" data-aos="fade-up" data-aos-delay="140">
                From buying your first flat to investing in REITs without owning a single brick —
                WealthBridge maps the right vehicle to your capital, timeline, and goals.
            </p>
        </div>

        <div class="types-grid" data-aos="fade-up" data-aos-delay="180">

            <!-- Residential -->
            <div class="type-card">
                <div class="type-tag tag-resi"><i class="fas fa-home"></i> Residential</div>
                <div class="type-icon"><i class="fas fa-home"></i></div>
                <div class="type-title">Residential Property</div>
                <div class="type-subtitle">Apartments, villas, and builder floors in high-growth micro-markets.</div>
                <div class="type-returns">
                    <div class="type-ret-item">
                        <div class="type-ret-label">Rental Yield</div>
                        <div class="type-ret-val">2–4%</div>
                    </div>
                    <div class="type-ret-item">
                        <div class="type-ret-label">Capital Growth</div>
                        <div class="type-ret-val good">10–18% CAGR</div>
                    </div>
                    <div class="type-ret-item">
                        <div class="type-ret-label">Min. Capital</div>
                        <div class="type-ret-val">₹30L+</div>
                    </div>
                </div>
                <div class="type-items">
                    <div class="type-item"><i class="fas fa-check"></i> Home loan tax benefits (80C + 24b)</div>
                    <div class="type-item"><i class="fas fa-check"></i> Stable long-term appreciation</div>
                    <div class="type-item"><i class="fas fa-check"></i> Self-use or rental income</div>
                    <div class="type-item"><i class="fas fa-check"></i> RERA-protected investment</div>
                </div>
                <a href="contact" class="type-link">Explore <i class="fas fa-arrow-right"></i></a>
            </div>

            <!-- Commercial — featured -->
            <div class="type-card featured-type">
                <div class="type-tag tag-comm"><i class="fas fa-star"></i> Highest Yield</div>
                <div class="type-icon"><i class="fas fa-building"></i></div>
                <div class="type-title">Commercial Property</div>
                <div class="type-subtitle">Office spaces, retail shops, and warehouses with high rental returns.</div>
                <div class="type-returns">
                    <div class="type-ret-item">
                        <div class="type-ret-label">Rental Yield</div>
                        <div class="type-ret-val good">6–9%</div>
                    </div>
                    <div class="type-ret-item">
                        <div class="type-ret-label">Capital Growth</div>
                        <div class="type-ret-val good">12–20% CAGR</div>
                    </div>
                    <div class="type-ret-item">
                        <div class="type-ret-label">Min. Capital</div>
                        <div class="type-ret-val">₹50L+</div>
                    </div>
                </div>
                <div class="type-items">
                    <div class="type-item"><i class="fas fa-check"></i> Long-term lease agreements (5–9 yrs)</div>
                    <div class="type-item"><i class="fas fa-check"></i> Annual rent escalation clauses</div>
                    <div class="type-item"><i class="fas fa-check"></i> Triple-net lease structures</div>
                    <div class="type-item"><i class="fas fa-check"></i> Highest consistent yield class</div>
                </div>
                <a href="contact" class="type-link">Explore <i class="fas fa-arrow-right"></i></a>
            </div>

            <!-- REITs -->
            <div class="type-card">
                <div class="type-tag tag-reit"><i class="fas fa-exchange-alt"></i> Exchange Traded</div>
                <div class="type-icon"><i class="fas fa-chart-bar"></i></div>
                <div class="type-title">REITs &amp; InvITs</div>
                <div class="type-subtitle">Real Estate Investment Trusts — own Grade-A properties with just ₹300.</div>
                <div class="type-returns">
                    <div class="type-ret-item">
                        <div class="type-ret-label">Distribution Yield</div>
                        <div class="type-ret-val good">7–9%</div>
                    </div>
                    <div class="type-ret-item">
                        <div class="type-ret-label">Total Return</div>
                        <div class="type-ret-val">11–14% CAGR</div>
                    </div>
                    <div class="type-ret-item">
                        <div class="type-ret-label">Min. Capital</div>
                        <div class="type-ret-val">₹300+</div>
                    </div>
                </div>
                <div class="type-items">
                    <div class="type-item"><i class="fas fa-check"></i> Highly liquid — sell any day</div>
                    <div class="type-item"><i class="fas fa-check"></i> Quarterly dividend distributions</div>
                    <div class="type-item"><i class="fas fa-check"></i> Grade-A office, retail, warehouse</div>
                    <div class="type-item"><i class="fas fa-check"></i> No property management hassles</div>
                </div>
                <a href="contact" class="type-link">Explore <i class="fas fa-arrow-right"></i></a>
            </div>

            <!-- Plots -->
            <div class="type-card">
                <div class="type-tag tag-plot"><i class="fas fa-map"></i> Land</div>
                <div class="type-icon"><i class="fas fa-map-marked-alt"></i></div>
                <div class="type-title">Plot &amp; Land Investment</div>
                <div class="type-subtitle">Strategically located NA plots in upcoming corridors and tier-2 cities.</div>
                <div class="type-returns">
                    <div class="type-ret-item">
                        <div class="type-ret-label">Rental Yield</div>
                        <div class="type-ret-val warn">Nil</div>
                    </div>
                    <div class="type-ret-item">
                        <div class="type-ret-label">Capital Growth</div>
                        <div class="type-ret-val good">15–25% CAGR</div>
                    </div>
                    <div class="type-ret-item">
                        <div class="type-ret-label">Min. Capital</div>
                        <div class="type-ret-val">₹15L+</div>
                    </div>
                </div>
                <div class="type-items">
                    <div class="type-item"><i class="fas fa-check"></i> Highest appreciation potential</div>
                    <div class="type-item"><i class="fas fa-check"></i> Ideal for 7–10 year horizon</div>
                    <div class="type-item"><i class="fas fa-check"></i> Infrastructure corridor plays</div>
                    <div class="type-item"><i class="fas fa-check"></i> Lower entry cost than flats</div>
                </div>
                <a href="contact" class="type-link">Explore <i class="fas fa-arrow-right"></i></a>
            </div>

            <!-- NRI Property -->
            <div class="type-card">
                <div class="type-tag tag-nri"><i class="fas fa-globe-asia"></i> NRI</div>
                <div class="type-icon"><i class="fas fa-passport"></i></div>
                <div class="type-title">NRI Real Estate Advisory</div>
                <div class="type-subtitle">Invest in Indian property from abroad — legally, efficiently, without hassle.</div>
                <div class="type-returns">
                    <div class="type-ret-item">
                        <div class="type-ret-label">Currency Gain</div>
                        <div class="type-ret-val good">4–6% pa</div>
                    </div>
                    <div class="type-ret-item">
                        <div class="type-ret-label">Total Return</div>
                        <div class="type-ret-val good">18–24% (USD)</div>
                    </div>
                    <div class="type-ret-item">
                        <div class="type-ret-label">Min. Capital</div>
                        <div class="type-ret-val">$40K+</div>
                    </div>
                </div>
                <div class="type-items">
                    <div class="type-item"><i class="fas fa-check"></i> FEMA &amp; RBI compliance</div>
                    <div class="type-item"><i class="fas fa-check"></i> NRO / NRE account structuring</div>
                    <div class="type-item"><i class="fas fa-check"></i> Power of attorney setup</div>
                    <div class="type-item"><i class="fas fa-check"></i> Repatriation planning</div>
                </div>
                <a href="contact" class="type-link">Explore <i class="fas fa-arrow-right"></i></a>
            </div>

            <!-- Fractional Ownership -->
            <div class="type-card">
                <div class="type-tag tag-frac"><i class="fas fa-puzzle-piece"></i> Fractional</div>
                <div class="type-icon"><i class="fas fa-layer-group"></i></div>
                <div class="type-title">Fractional Ownership</div>
                <div class="type-subtitle">Co-own Grade-A commercial assets with ₹10L — previously only for HNIs.</div>
                <div class="type-returns">
                    <div class="type-ret-item">
                        <div class="type-ret-label">Distribution Yield</div>
                        <div class="type-ret-val good">8–10%</div>
                    </div>
                    <div class="type-ret-item">
                        <div class="type-ret-label">Total Return</div>
                        <div class="type-ret-val good">14–18% CAGR</div>
                    </div>
                    <div class="type-ret-item">
                        <div class="type-ret-label">Min. Capital</div>
                        <div class="type-ret-val">₹10L+</div>
                    </div>
                </div>
                <div class="type-items">
                    <div class="type-item"><i class="fas fa-check"></i> SEC-regulated SM-REIT structure</div>
                    <div class="type-item"><i class="fas fa-check"></i> Pre-leased Grade-A assets</div>
                    <div class="type-item"><i class="fas fa-check"></i> Monthly rental distributions</div>
                    <div class="type-item"><i class="fas fa-check"></i> Exit via secondary market</div>
                </div>
                <a href="contact" class="type-link">Explore <i class="fas fa-arrow-right"></i></a>
            </div>

        </div>
    </div>
</section>


<!-- ══════════════════════════════════════════════════════════
     MARKET INSIGHTS — WHITE
══════════════════════════════════════════════════════════ -->
<section class="section rei-market">
    <div class="container">
        <div class="section-header center">
            <span class="section-label" data-aos="fade-up">Market Intelligence</span>
            <h2 class="section-title" data-aos="fade-up" data-aos-delay="80">
                Where to <span>Invest in India</span> Right Now
            </h2>
            <p class="section-sub" style="margin:0 auto" data-aos="fade-up" data-aos-delay="140">
                Location is everything in real estate. Our research team tracks pricing,
                yield trends, and infrastructure pipelines across India's top markets.
            </p>
        </div>

        <div class="market-layout">

            <!-- City Cards -->
            <div class="city-cards" data-aos="fade-right" data-aos-delay="100">

                <div class="city-card">
                    <div class="city-left">
                        <div class="city-icon"><i class="fas fa-city"></i></div>
                        <div>
                            <div class="city-name">Bengaluru — Whitefield / Sarjapur</div>
                            <div class="city-type">Residential + Commercial · Tech hub</div>
                        </div>
                    </div>
                    <div class="city-right">
                        <div class="city-price">₹7,500–12,000/sqft</div>
                        <div class="city-growth up">▲ 18.4% YoY</div>
                    </div>
                </div>

                <div class="city-card">
                    <div class="city-left">
                        <div class="city-icon"><i class="fas fa-city"></i></div>
                        <div>
                            <div class="city-name">Pune — Baner / Hinjewadi</div>
                            <div class="city-type">Residential · IT corridor</div>
                        </div>
                    </div>
                    <div class="city-right">
                        <div class="city-price">₹8,000–14,000/sqft</div>
                        <div class="city-growth up">▲ 21.2% YoY</div>
                    </div>
                </div>

                <div class="city-card">
                    <div class="city-left">
                        <div class="city-icon"><i class="fas fa-city"></i></div>
                        <div>
                            <div class="city-name">Hyderabad — Gachibowli / HiTech</div>
                            <div class="city-type">Commercial + Residential · HNI demand</div>
                        </div>
                    </div>
                    <div class="city-right">
                        <div class="city-price">₹6,500–11,000/sqft</div>
                        <div class="city-growth up">▲ 16.7% YoY</div>
                    </div>
                </div>

                <div class="city-card">
                    <div class="city-left">
                        <div class="city-icon"><i class="fas fa-city"></i></div>
                        <div>
                            <div class="city-name">Mumbai — Navi Mumbai / Thane</div>
                            <div class="city-type">Residential · Metro infrastructure play</div>
                        </div>
                    </div>
                    <div class="city-right">
                        <div class="city-price">₹9,000–18,000/sqft</div>
                        <div class="city-growth mid">▲ 11.4% YoY</div>
                    </div>
                </div>

                <div class="city-card">
                    <div class="city-left">
                        <div class="city-icon"><i class="fas fa-city"></i></div>
                        <div>
                            <div class="city-name">Delhi NCR — Gurugram / Noida Ext.</div>
                            <div class="city-type">Commercial + Luxury residential</div>
                        </div>
                    </div>
                    <div class="city-right">
                        <div class="city-price">₹7,000–22,000/sqft</div>
                        <div class="city-growth up">▲ 19.8% YoY</div>
                    </div>
                </div>

                <div class="city-card">
                    <div class="city-left">
                        <div class="city-icon"><i class="fas fa-map-pin"></i></div>
                        <div>
                            <div class="city-name">Tier-2 — Nashik / Coimbatore / Indore</div>
                            <div class="city-type">Emerging markets · Plot &amp; industrial</div>
                        </div>
                    </div>
                    <div class="city-right">
                        <div class="city-price">₹2,500–5,500/sqft</div>
                        <div class="city-growth up">▲ 24.6% YoY</div>
                    </div>
                </div>

            </div>

            <!-- Right: Insight Panel -->
            <div data-aos="fade-left" data-aos-delay="140">
                <div class="market-insight-panel">
                    <div class="mip-title">India RE Price Index — 5 Year Trend</div>

                    <!-- bar chart trend -->
                    <div class="mip-chart">
                        <div class="mip-bar" style="height:38%"></div>
                        <div class="mip-bar" style="height:48%"></div>
                        <div class="mip-bar" style="height:44%"></div>
                        <div class="mip-bar" style="height:55%"></div>
                        <div class="mip-bar" style="height:50%"></div>
                        <div class="mip-bar" style="height:62%"></div>
                        <div class="mip-bar hi" style="height:58%"></div>
                        <div class="mip-bar hi" style="height:72%"></div>
                        <div class="mip-bar hi" style="height:80%"></div>
                        <div class="mip-bar hi" style="height:100%"></div>
                    </div>
                    <div class="mip-label">FY 2019–20 → FY 2024–25 · Pan-India avg</div>

                    <div class="mip-stats">
                        <div class="mip-stat-row">
                            <span class="mip-stat-name">Pan-India price appreciation (5yr)</span>
                            <span class="mip-stat-value green">+64%</span>
                        </div>
                        <div class="mip-stat-row">
                            <span class="mip-stat-name">New residential launches (2024)</span>
                            <span class="mip-stat-value">4.82L units</span>
                        </div>
                        <div class="mip-stat-row">
                            <span class="mip-stat-name">Office space absorption (2024)</span>
                            <span class="mip-stat-value">68.1M sqft</span>
                        </div>
                        <div class="mip-stat-row">
                            <span class="mip-stat-name">REIT market cap (India)</span>
                            <span class="mip-stat-value green">₹1.4L Cr</span>
                        </div>
                        <div class="mip-stat-row">
                            <span class="mip-stat-name">Home loan rate (avg)</span>
                            <span class="mip-stat-value red">8.5–9.2%</span>
                        </div>
                        <div class="mip-stat-row">
                            <span class="mip-stat-name">Unsold inventory (metro, months)</span>
                            <span class="mip-stat-value">18 months</span>
                        </div>
                    </div>

                    <div class="mip-source">Source: Knight Frank, ANAROCK, SEBI · Q1 2025</div>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- ══════════════════════════════════════════════════════════
     INVESTMENT PROCESS — DARK
══════════════════════════════════════════════════════════ -->
<section class="section rei-process">
    <div class="container">
        <div class="section-header center">
            <span class="section-label" data-aos="fade-up">Our Process</span>
            <h2 class="section-title" data-aos="fade-up" data-aos-delay="80">
                How We Find Your <span>Perfect Property Investment</span>
            </h2>
            <p class="section-sub" style="margin:0 auto" data-aos="fade-up" data-aos-delay="140">
                From understanding your goals to handing over the keys — end-to-end
                advisory with zero conflict of interest.
            </p>
        </div>

        <div class="process-steps">
            <div class="process-step" data-aos="fade-up" data-aos-delay="0">
                <div class="process-num">1</div>
                <h4>Goal &amp; Budget Assessment</h4>
                <p>Understand your investment horizon, capital available, income goals, and risk tolerance.</p>
            </div>
            <div class="process-step" data-aos="fade-up" data-aos-delay="100">
                <div class="process-num">2</div>
                <h4>Market Research</h4>
                <p>Shortlist cities, micro-markets, and asset classes based on growth data, yield trends, and infrastructure plans.</p>
            </div>
            <div class="process-step" data-aos="fade-up" data-aos-delay="200">
                <div class="process-num">3</div>
                <h4>Property Due Diligence</h4>
                <p>Legal title verification, RERA check, builder track record, and valuation assessment before you commit.</p>
            </div>
            <div class="process-step" data-aos="fade-up" data-aos-delay="300">
                <div class="process-num">4</div>
                <h4>Financing &amp; Tax Structure</h4>
                <p>Optimise the loan structure, down payment, EMI schedule, and tax deduction plan for maximum efficiency.</p>
            </div>
            <div class="process-step" data-aos="fade-up" data-aos-delay="400">
                <div class="process-num">5</div>
                <h4>Portfolio Management</h4>
                <p>Annual review of property value, rental rate benchmarking, and exit timing recommendation.</p>
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
                <div class="calc-strip__title">What's the Real Return on That Property?</div>
                <p class="calc-strip__desc">
                    Factor in purchase price, EMI, rental yield, maintenance, and appreciation.
                    Our property ROI calculator gives you the true post-tax, post-EMI return
                    before you sign anything.
                </p>
            </div>
            <a href="investment-calculator" class="btn btn-white">
                Try Property ROI Calculator
                <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </div>
</div>


<!-- ══════════════════════════════════════════════════════════
     RISK vs RETURN — GRAY-50
══════════════════════════════════════════════════════════ -->
<section class="section rei-risk">
    <div class="container">
        <div class="section-header center">
            <span class="section-label" data-aos="fade-up">Risk Profile</span>
            <h2 class="section-title" data-aos="fade-up" data-aos-delay="80">
                Match Your Risk Appetite to the <span>Right Asset</span>
            </h2>
            <p class="section-sub" style="margin:0 auto" data-aos="fade-up" data-aos-delay="140">
                Not all real estate is equal risk. Here's how each investment type
                measures up — so you invest with eyes wide open.
            </p>
        </div>

        <div class="risk-grid">

            <div class="risk-card" data-aos="fade-up" data-aos-delay="0">
                <div class="risk-type">Conservative</div>
                <div class="risk-icon"><i class="fas fa-chart-bar"></i></div>
                <div class="risk-title">REITs &amp; Fractional</div>
                <div class="risk-meter">
                    <div class="risk-meter-label">Risk Level</div>
                    <div class="risk-meter-track">
                        <div class="risk-meter-fill low" style="--w:28%"></div>
                    </div>
                </div>
                <div class="risk-desc">Exchange-listed, SEBI-regulated, highly liquid. Diversified across multiple Grade-A assets. Best for first-time real estate investors.</div>
                <div class="risk-returns">
                    <div class="risk-ret-item">
                        <div class="risk-ret-label">Expected Return</div>
                        <div class="risk-ret-val">9–14% CAGR</div>
                    </div>
                    <div class="risk-ret-item">
                        <div class="risk-ret-label">Liquidity</div>
                        <div class="risk-ret-val">High (T+2)</div>
                    </div>
                </div>
            </div>

            <div class="risk-card" data-aos="fade-up" data-aos-delay="100">
                <div class="risk-type">Moderate</div>
                <div class="risk-icon"><i class="fas fa-home"></i></div>
                <div class="risk-title">Residential Property</div>
                <div class="risk-meter">
                    <div class="risk-meter-label">Risk Level</div>
                    <div class="risk-meter-track">
                        <div class="risk-meter-fill mid" style="--w:50%"></div>
                    </div>
                </div>
                <div class="risk-desc">Stable demand, lower yield but reliable appreciation. Tenant risk and maintenance costs to manage. Ideal for long-term wealth builders.</div>
                <div class="risk-returns">
                    <div class="risk-ret-item">
                        <div class="risk-ret-label">Expected Return</div>
                        <div class="risk-ret-val">12–18% CAGR</div>
                    </div>
                    <div class="risk-ret-item">
                        <div class="risk-ret-label">Liquidity</div>
                        <div class="risk-ret-val">Low (3–6 mo)</div>
                    </div>
                </div>
            </div>

            <div class="risk-card" data-aos="fade-up" data-aos-delay="200">
                <div class="risk-type">Moderate–High</div>
                <div class="risk-icon"><i class="fas fa-building"></i></div>
                <div class="risk-title">Commercial Property</div>
                <div class="risk-meter">
                    <div class="risk-meter-label">Risk Level</div>
                    <div class="risk-meter-track">
                        <div class="risk-meter-fill mid" style="--w:62%"></div>
                    </div>
                </div>
                <div class="risk-desc">Higher yield but vacancy risk during economic cycles. Long lock-in leases reduce income risk. Best for HNI investors with ₹50L+ capital.</div>
                <div class="risk-returns">
                    <div class="risk-ret-item">
                        <div class="risk-ret-label">Expected Return</div>
                        <div class="risk-ret-val">14–22% CAGR</div>
                    </div>
                    <div class="risk-ret-item">
                        <div class="risk-ret-label">Liquidity</div>
                        <div class="risk-ret-val">Low (6–12 mo)</div>
                    </div>
                </div>
            </div>

            <div class="risk-card" data-aos="fade-up" data-aos-delay="300">
                <div class="risk-type">Aggressive</div>
                <div class="risk-icon"><i class="fas fa-map-marked-alt"></i></div>
                <div class="risk-title">Land &amp; Plots</div>
                <div class="risk-meter">
                    <div class="risk-meter-label">Risk Level</div>
                    <div class="risk-meter-track">
                        <div class="risk-meter-fill high" style="--w:85%"></div>
                    </div>
                </div>
                <div class="risk-desc">Highest appreciation potential but zero income, illiquid, and dependent on specific infrastructure developments. Requires 7–10 year patience.</div>
                <div class="risk-returns">
                    <div class="risk-ret-item">
                        <div class="risk-ret-label">Expected Return</div>
                        <div class="risk-ret-val">18–30% CAGR</div>
                    </div>
                    <div class="risk-ret-item">
                        <div class="risk-ret-label">Liquidity</div>
                        <div class="risk-ret-val">Very Low</div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- ══════════════════════════════════════════════════════════
     TESTIMONIALS — WHITE
══════════════════════════════════════════════════════════ -->
<section class="section rei-testimonials">
    <div class="container">
        <div class="section-header center">
            <span class="section-label" data-aos="fade-up">Client Stories</span>
            <h2 class="section-title" data-aos="fade-up" data-aos-delay="80">
                Investors Who Made <span>the Right Move</span>
            </h2>
        </div>

        <div class="testimonials-grid">
            <div class="testi-card" data-aos="fade-up" data-aos-delay="0">
                <div class="testi-stars">★★★★★</div>
                <div class="testi-quote">"</div>
                <p class="testi-text">
                    I was about to buy a flat in the wrong micro-market with a poor rental yield.
                    WealthBridge redirected me to a commercial shop on MG Road — same budget,
                    6.8% yield, and the value has gone up 38% in 3 years.
                </p>
                <div class="testi-author">
                    <div class="testi-avatar">SK</div>
                    <div>
                        <div class="testi-name">Suresh Krishnamurthy</div>
                        <div class="testi-role">Retired Engineer, Bengaluru · Commercial investor</div>
                    </div>
                </div>
            </div>

            <div class="testi-card" data-aos="fade-up" data-aos-delay="100">
                <div class="testi-stars">★★★★★</div>
                <div class="testi-quote">"</div>
                <p class="testi-text">
                    As an NRI in the US, I always wanted to invest in Indian property but
                    was scared of legal complications. WealthBridge handled everything —
                    FEMA compliance, NRO account, power of attorney. Seamless.
                </p>
                <div class="testi-author">
                    <div class="testi-avatar">RP</div>
                    <div>
                        <div class="testi-name">Rajiv Pillai</div>
                        <div class="testi-role">Software Engineer, San Jose · NRI Property Investor</div>
                    </div>
                </div>
            </div>

            <div class="testi-card" data-aos="fade-up" data-aos-delay="200">
                <div class="testi-stars">★★★★★</div>
                <div class="testi-quote">"</div>
                <p class="testi-text">
                    REITs were completely new to me. WealthBridge explained how I could earn
                    8% rental yield from Grade-A offices with ₹2L — no tenants, no maintenance.
                    I now get quarterly distributions every single quarter.
                </p>
                <div class="testi-author">
                    <div class="testi-avatar">MM</div>
                    <div>
                        <div class="testi-name">Meera Malhotra</div>
                        <div class="testi-role">HR Director, Mumbai · REIT + Fractional investor</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ══════════════════════════════════════════════════════════
     FAQ — GRAY-50
══════════════════════════════════════════════════════════ -->
<section class="section rei-faq">
    <div class="container">
        <div class="faq-layout">

            <div class="faq-intro" data-aos="fade-right">
                <span class="section-label">FAQ</span>
                <h2 class="section-title">
                    Real Estate <span>Questions</span>
                </h2>
                <p class="section-sub">
                    Honest answers about real estate investment — from first-time
                    buyers to seasoned property investors.
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
                        <span class="faq-q-text">Is buying property still a good investment in 2025?</span>
                        <span class="faq-icon"><i class="fas fa-plus"></i></span>
                    </button>
                    <div class="faq-a">
                        Yes — but location selectivity matters more than ever. Pan-India residential prices rose
                        18% in FY 2024–25 in top markets. However, suburban and tier-3 locations with poor
                        connectivity remain stagnant. The right micro-market selection, driven by infrastructure
                        pipeline analysis, is what separates wealth-creating investments from dead capital.
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-q">
                        <span class="faq-q-text">Should I buy property or invest in REITs?</span>
                        <span class="faq-icon"><i class="fas fa-plus"></i></span>
                    </button>
                    <div class="faq-a">
                        Both have a place — but they serve different purposes. Physical property offers leverage
                        (home loan), tangible ownership, and personal utility. REITs offer liquidity, diversification,
                        and 7–9% yields without management hassles. For most investors with under ₹50L in
                        real estate allocation, a mix of REITs + one well-chosen physical property is optimal.
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-q">
                        <span class="faq-q-text">How do I avoid the wrong property or builder?</span>
                        <span class="faq-icon"><i class="fas fa-plus"></i></span>
                    </button>
                    <div class="faq-a">
                        Always verify: (1) RERA registration and quarterly progress updates, (2) builder's track record
                        of past project deliveries, (3) clear land title and no encumbrances, (4) no pending court
                        cases. WealthBridge conducts full legal and financial due diligence before any recommendation —
                        we have no referral relationships with builders, so our advice is unbiased.
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-q">
                        <span class="faq-q-text">What are the tax implications of selling property?</span>
                        <span class="faq-icon"><i class="fas fa-plus"></i></span>
                    </button>
                    <div class="faq-a">
                        Short-term capital gains (held &lt;24 months) are taxed at your income slab rate. Long-term
                        (held 24+ months) are taxed at 12.5% LTCG without indexation (post-July 2024 Budget).
                        You can reinvest gains in another residential property (Section 54), NHAI/REC bonds
                        (Section 54EC, up to ₹50L), or a capital gains account to defer the tax liability.
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-q">
                        <span class="faq-q-text">How much rental yield should I expect?</span>
                        <span class="faq-icon"><i class="fas fa-plus"></i></span>
                    </button>
                    <div class="faq-a">
                        Gross rental yields in India: residential 2–4%, commercial 6–9%, REITs 7–9%, fractional
                        ownership 8–10%. Post-expense yield (maintenance, property tax, vacancy) is typically
                        0.5–1.5% lower. Commercial properties with NNN lease structures have the most predictable
                        net yield. We calculate net yield for every property recommendation.
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-q">
                        <span class="faq-q-text">Can I invest in Indian real estate as an NRI?</span>
                        <span class="faq-icon"><i class="fas fa-plus"></i></span>
                    </button>
                    <div class="faq-a">
                        Yes — NRIs can purchase residential and commercial property in India (but not agricultural
                        land or farmhouses). Funds must route via NRE/NRO accounts. Rental income is taxable in India
                        at 30% (with DTAA relief available). Capital gains on sale have specific repatriation rules.
                        WealthBridge structures the entire NRI property investment journey for full compliance.
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>


<!-- ══════════════════════════════════════════════════════════
     CTA BAND — DARK
══════════════════════════════════════════════════════════ -->
<section class="rei-cta" id="contact">
    <div class="container">
        <div class="rei-cta-inner">
            <span class="section-label" style="justify-content:center;display:flex" data-aos="fade-up">
                Your Next Move
            </span>
            <h2 class="cta-title" data-aos="fade-up" data-aos-delay="80">
                Don't Buy Blind.<br>
                <span>Invest in Property with a Strategy.</span>
            </h2>
            <p class="cta-desc" data-aos="fade-up" data-aos-delay="140">
                The right property in the right location at the right time creates generational
                wealth. The wrong one destroys it. Talk to WealthBridge — your first consultation
                is completely free.
            </p>
            <div class="cta-actions" data-aos="fade-up" data-aos-delay="200">
                <a href="contact" class="btn btn-primary">
                    Book Free Consultation
                    <i class="fas fa-arrow-right"></i>
                </a>
                <a href="tel:+911800000000" class="btn btn-ghost">
                    <i class="fas fa-phone"></i>
                    Call 1800-000-000
                </a>
            </div>

            <div class="cta-trust" data-aos="fade-up" data-aos-delay="280">
                <div class="ct-item"><i class="fas fa-check-circle"></i> SEBI Registered Adviser</div>
                <div class="ct-item"><i class="fas fa-check-circle"></i> No Builder Referral Commissions</div>
                <div class="ct-item"><i class="fas fa-check-circle"></i> RERA-Compliant Advisory</div>
                <div class="ct-item"><i class="fas fa-check-circle"></i> End-to-End Support</div>
            </div>
        </div>
    </div>
</section>


<!-- ══════════════════════════════════════════════════════════
     RELATED SERVICES — WHITE
══════════════════════════════════════════════════════════ -->
<section class="section rei-related">
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
                <p>Balance your real estate with equity, debt, and gold for a complete portfolio.</p>
                <span class="rc-link">Explore <i class="fas fa-arrow-right"></i></span>
            </a>
            <a href="tax-efficient-investment" class="rel-card" data-aos="fade-up" data-aos-delay="80">
                <div class="rc-icon"><i class="fas fa-file-invoice-dollar"></i></div>
                <h4>Tax-Efficient Investment</h4>
                <p>Maximise home loan deductions, LTCG exemptions, and 54EC bond benefits.</p>
                <span class="rc-link">Explore <i class="fas fa-arrow-right"></i></span>
            </a>
            <a href="nri-financial-advisory" class="rel-card" data-aos="fade-up" data-aos-delay="160">
                <div class="rc-icon"><i class="fas fa-globe-asia"></i></div>
                <h4>NRI Financial Advisory</h4>
                <p>FEMA-compliant property investment, NRO/NRE structuring, and repatriation planning.</p>
                <span class="rc-link">Explore <i class="fas fa-arrow-right"></i></span>
            </a>
            <a href="wealth-management" class="rel-card" data-aos="fade-up" data-aos-delay="240">
                <div class="rc-icon"><i class="fas fa-gem"></i></div>
                <h4>Wealth Management</h4>
                <p>Integrate real estate into your complete HNI wealth and estate plan.</p>
                <span class="rc-link">Explore <i class="fas fa-arrow-right"></i></span>
            </a>
        </div>
    </div>
</section>


 

<?php include_once ('elements/footer.php'); ?>