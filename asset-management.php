<?php include_once ('elements/header.php'); ?>

<!-- Page CSS -->
<link href="<?php echo UrlHelper::asset('css/asset-management.css'); ?>" rel="stylesheet">


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
            <span class="current">Asset Management</span>
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
    <div class="sh-circle c1" aria-hidden="true"></div>
    <div class="sh-circle c2" aria-hidden="true"></div>
    <div class="sh-circle c3" aria-hidden="true"></div>

    <div class="container">
        <div class="sh-content">

            <!-- LEFT -->
            <div class="sh-left">
                <div class="hero__label" data-aos="fade-right" data-aos-duration="700">
                    Our Services &nbsp;·&nbsp; Asset Management
                </div>

                <h1 class="hero__title" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                    Every Asset Working
                    <em>Harder, Smarter,</em>
                    Together for You
                </h1>

                <p class="hero__subtitle" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                    Most people own assets. Few people manage them. WealthBridge builds and
                    actively manages a diversified multi-asset portfolio — equity, debt, gold,
                    real estate, and alternatives — engineered to your exact life goals.
                </p>

                <div class="hero__actions" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                    <a href="#contact" class="btn btn-primary">
                        Start Portfolio Review
                        <i class="fas fa-arrow-right"></i>
                    </a>
                    <a href="#classes" class="btn btn-ghost">
                        Explore Asset Classes
                        <i class="fas fa-chevron-down"></i>
                    </a>
                </div>

                <div class="hero__stats" data-aos="fade-up" data-aos-duration="800" data-aos-delay="420">
                    <div>
                        <div class="hero__stat-num" data-counter="2400" data-suffix="Cr+">₹2,400Cr+</div>
                        <div class="hero__stat-label">Assets Under Advisory</div>
                    </div>
                    <div>
                        <div class="hero__stat-num" data-counter="6800" data-suffix="+">6,800+</div>
                        <div class="hero__stat-label">Portfolios Managed</div>
                    </div>
                    <div>
                        <div class="hero__stat-num" data-counter="19" data-suffix="%">19%</div>
                        <div class="hero__stat-label">Avg. 5-yr CAGR</div>
                    </div>
                </div>
            </div><!-- /sh-left -->


            <!-- RIGHT: Portfolio Card -->
            <div class="hero__visual" data-aos="fade-left" data-aos-duration="900" data-aos-delay="200">

                <!-- float top-right -->
                <div class="hero__float f1">
                    <div class="hero__float-label">Portfolio Value</div>
                    <div class="hero__float-val">₹1.84Cr <span>▲</span></div>
                    <div class="hero__float-sub">+19.2% since inception</div>
                </div>

                <!-- main card -->
                <div class="hero__card-main">
                    <div class="hero__card-header">
                        <span class="hero__card-title">Multi-Asset Portfolio</span>
                        <span class="hero__card-badge">
                            <span class="hero__card-badge-dot"></span>
                            Live
                        </span>
                    </div>

                    <!-- Circular allocation chart -->
                    <div class="hero__alloc">
                        <div class="hero__alloc-chart">
                            <svg viewBox="0 0 100 100" width="100" height="100">
                                <!-- Equity 55% -->
                                <circle class="alloc-ring" cx="50" cy="50" r="40"
                                    stroke="#ff0000"
                                    style="--da:137.5;--gap:113.5"
                                    stroke-dashoffset="0"/>
                                <!-- Debt 25% -->
                                <circle class="alloc-ring" cx="50" cy="50" r="40"
                                    stroke="#3b82f6"
                                    style="--da:62.8;--gap:188.2"
                                    stroke-dashoffset="-137.5"/>
                                <!-- Gold 10% -->
                                <circle class="alloc-ring" cx="50" cy="50" r="40"
                                    stroke="#eab308"
                                    style="--da:25.1;--gap:225.9"
                                    stroke-dashoffset="-200.3"/>
                                <!-- RE 10% -->
                                <circle class="alloc-ring" cx="50" cy="50" r="40"
                                    stroke="#8b5cf6"
                                    style="--da:25.1;--gap:225.9"
                                    stroke-dashoffset="-225.4"/>
                            </svg>
                            <div class="alloc-center">
                                <div class="alloc-center-val">₹1.84Cr</div>
                                <div class="alloc-center-sub">Total AUM</div>
                            </div>
                        </div>
                        <div class="hero__alloc-legend">
                            <div class="hal-row">
                                <span class="hal-left"><span class="hal-dot" style="background:#ff0000"></span>Equity</span>
                                <span class="hal-pct">55%</span>
                            </div>
                            <div class="hal-row">
                                <span class="hal-left"><span class="hal-dot" style="background:#3b82f6"></span>Debt</span>
                                <span class="hal-pct">25%</span>
                            </div>
                            <div class="hal-row">
                                <span class="hal-left"><span class="hal-dot" style="background:#eab308"></span>Gold</span>
                                <span class="hal-pct">10%</span>
                            </div>
                            <div class="hal-row">
                                <span class="hal-left"><span class="hal-dot" style="background:#8b5cf6"></span>Real Estate</span>
                                <span class="hal-pct">10%</span>
                            </div>
                        </div>
                    </div>

                    <!-- Top holdings performance -->
                    <div class="hero__perf">
                        <div class="hperf-row">
                            <div class="hperf-icon" style="background:rgba(255,0,0,0.12);color:var(--red)"><i class="fas fa-chart-line"></i></div>
                            <span class="hperf-name">Large Cap Equity</span>
                            <div class="hperf-bar-wrap"><div class="hperf-bar" style="--w:88%;background:var(--red)"></div></div>
                            <span class="hperf-ret ret-pos">+22.1%</span>
                        </div>
                        <div class="hperf-row">
                            <div class="hperf-icon" style="background:rgba(59,130,246,0.12);color:#3b82f6"><i class="fas fa-shield-alt"></i></div>
                            <span class="hperf-name">Corporate Bonds</span>
                            <div class="hperf-bar-wrap"><div class="hperf-bar" style="--w:44%;background:#3b82f6"></div></div>
                            <span class="hperf-ret ret-pos">+8.4%</span>
                        </div>
                        <div class="hperf-row">
                            <div class="hperf-icon" style="background:rgba(234,179,8,0.12);color:#eab308"><i class="fas fa-coins"></i></div>
                            <span class="hperf-name">Sovereign Gold Bond</span>
                            <div class="hperf-bar-wrap"><div class="hperf-bar" style="--w:56%;background:#eab308"></div></div>
                            <span class="hperf-ret ret-pos">+14.2%</span>
                        </div>
                        <div class="hperf-row">
                            <div class="hperf-icon" style="background:rgba(139,92,246,0.12);color:#8b5cf6"><i class="fas fa-building"></i></div>
                            <span class="hperf-name">REIT Units</span>
                            <div class="hperf-bar-wrap"><div class="hperf-bar" style="--w:38%;background:#8b5cf6"></div></div>
                            <span class="hperf-ret ret-pos">+11.8%</span>
                        </div>
                    </div>

                    <!-- 2×2 metrics -->
                    <div class="hero__metrics">
                        <div class="hero__metric">
                            <div class="hero__metric-label">Portfolio XIRR</div>
                            <div class="hero__metric-val">19.2% <span class="up">▲</span></div>
                        </div>
                        <div class="hero__metric">
                            <div class="hero__metric-label">Sharpe Ratio</div>
                            <div class="hero__metric-val">1.84 <span class="up">●</span></div>
                        </div>
                        <div class="hero__metric">
                            <div class="hero__metric-label">Max Drawdown</div>
                            <div class="hero__metric-val">-9.2% <span class="neu">▼</span></div>
                        </div>
                        <div class="hero__metric">
                            <div class="hero__metric-label">Benchmark Beat</div>
                            <div class="hero__metric-val">+4.8% <span class="up">▲</span></div>
                        </div>
                    </div>
                </div><!-- /card -->

                <!-- float bottom-left -->
                <div class="hero__float f2">
                    <div class="hero__float-label">Monthly SIP Running</div>
                    <div class="hero__float-val">₹85K <span>/ mo</span></div>
                    <div class="hero__float-sub">Across 6 asset classes</div>
                </div>

            </div><!-- /hero__visual -->
        </div>
    </div>
</section>


<!-- ══════════════════════════════════════════════════════════
     WHY ASSET MANAGEMENT — WHITE
══════════════════════════════════════════════════════════ -->
<section class="section am-why">
    <div class="container">
        <div class="am-why-grid">

            <div class="am-why-content">
                <span class="section-label" data-aos="fade-right">The Difference</span>
                <h2 class="section-title" data-aos="fade-up" data-aos-delay="80">
                    Owning Assets Is Not the<br>Same as <span>Managing Them</span>
                </h2>
                <div style="width:48px;height:3px;background:var(--red);border-radius:2px;margin-bottom:20px"
                     data-aos="fade-left" data-aos-delay="120"></div>
                <p class="section-sub" data-aos="fade-up" data-aos-delay="160">
                    The average Indian investor holds random mutual funds, idle FDs, old LIC
                    policies, and a flat — none of it coordinated. Active asset management
                    means every rupee has a purpose, every allocation is intentional, and
                    the entire portfolio adapts as markets and life change.
                </p>

                <div class="am-why-features" data-aos="fade-up" data-aos-delay="220">
                    <div class="amwf-card">
                        <div class="amwf-icon"><i class="fas fa-layer-group"></i></div>
                        <div class="amwf-title">Multi-Asset Diversification</div>
                        <div class="amwf-desc">Equity, debt, gold, real estate, and international assets working together — not independently.</div>
                    </div>
                    <div class="amwf-card">
                        <div class="amwf-icon"><i class="fas fa-balance-scale"></i></div>
                        <div class="amwf-title">Dynamic Rebalancing</div>
                        <div class="amwf-desc">When markets move, your allocation drifts. We rebalance quarterly to maintain the optimal risk-return profile.</div>
                    </div>
                    <div class="amwf-card">
                        <div class="amwf-icon"><i class="fas fa-crosshairs"></i></div>
                        <div class="amwf-title">Goal-Linked Allocation</div>
                        <div class="amwf-desc">Each goal — retirement, education, vacation — gets a dedicated portfolio bucket with the right time horizon.</div>
                    </div>
                    <div class="amwf-card">
                        <div class="amwf-icon"><i class="fas fa-chart-area"></i></div>
                        <div class="amwf-title">Risk-Adjusted Returns</div>
                        <div class="amwf-desc">Maximise return per unit of risk. We measure Sharpe ratio, max drawdown, and alpha — not just raw returns.</div>
                    </div>
                </div>
            </div>

            <!-- RIGHT: dark stat card -->
            <div class="am-why-visual" data-aos="fade-left" data-aos-delay="180">
                <div class="am-why-bg-block"></div>

                <div class="am-badge-float f2">
                    <div class="ambf-inner">
                        <div class="ambf-icon"><i class="fas fa-certificate"></i></div>
                        <div>
                            <div class="ambf-num">SEBI</div>
                            <div class="ambf-label">Registered RIA</div>
                        </div>
                    </div>
                </div>

                <div class="am-why-card">
                    <div class="amwc-title">Managed Portfolio vs Self-Managed (10yr avg)</div>
                    <div class="amwc-row">
                        <div class="amwc-row-top"><span>WealthBridge managed CAGR</span><span>19.2%</span></div>
                        <div class="amwc-track"><div class="amwc-fill" style="--w:92%"></div></div>
                    </div>
                    <div class="amwc-row">
                        <div class="amwc-row-top"><span>Nifty 50 benchmark</span><span>14.4%</span></div>
                        <div class="amwc-track"><div class="amwc-fill" style="--w:70%"></div></div>
                    </div>
                    <div class="amwc-row">
                        <div class="amwc-row-top"><span>Typical self-managed portfolio</span><span>9.8%</span></div>
                        <div class="amwc-track"><div class="amwc-fill" style="--w:48%"></div></div>
                    </div>
                    <div class="amwc-row">
                        <div class="amwc-row-top"><span>Fixed Deposit (post-tax)</span><span>4.9%</span></div>
                        <div class="amwc-track"><div class="amwc-fill" style="--w:24%"></div></div>
                    </div>
                    <div class="amwc-row">
                        <div class="amwc-row-top"><span>Clients beating Nifty 50</span><span>82%</span></div>
                        <div class="amwc-track"><div class="amwc-fill" style="--w:82%"></div></div>
                    </div>
                    <div class="amwc-footer">
                        <div>
                            <div class="amwc-stat-num">19.2%</div>
                            <div class="amwc-stat-label">Avg. 5-yr client CAGR</div>
                        </div>
                        <div>
                            <div class="amwc-stat-num">+4.8%</div>
                            <div class="amwc-stat-label">Alpha vs benchmark</div>
                        </div>
                    </div>
                </div>

                <div class="am-badge-float f1">
                    <div class="ambf-inner">
                        <div class="ambf-icon"><i class="fas fa-chart-pie"></i></div>
                        <div>
                            <div class="ambf-num">₹2,400Cr+</div>
                            <div class="ambf-label">Under Advisory</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- ══════════════════════════════════════════════════════════
     ASSET CLASSES — GRAY-50
══════════════════════════════════════════════════════════ -->
<section class="section am-classes" id="classes">
    <div class="container">
        <div class="section-header center">
            <span class="section-label" data-aos="fade-up">The Building Blocks</span>
            <h2 class="section-title" data-aos="fade-up" data-aos-delay="80">
                Every Asset Class We <span>Master for You</span>
            </h2>
            <p class="section-sub" style="margin:0 auto" data-aos="fade-up" data-aos-delay="140">
                True wealth is built across multiple asset classes — no single one is
                always the best performer. Here's how we deploy each one strategically.
            </p>
        </div>

        <div class="classes-grid" data-aos="fade-up" data-aos-delay="180">

            <!-- Equity -->
            <div class="class-card">
                <div class="class-tag tag-equity"><i class="fas fa-chart-line"></i> Growth Engine</div>
                <div class="class-icon"><i class="fas fa-chart-line"></i></div>
                <div class="class-title">Equity</div>
                <div class="class-subtitle">Indian &amp; international stocks, mutual funds, ETFs, and SME investments for long-term capital growth.</div>
                <div class="class-metrics">
                    <div class="cm-item">
                        <div class="cm-label">10yr CAGR</div>
                        <div class="cm-val pos">14–22%</div>
                    </div>
                    <div class="cm-item">
                        <div class="cm-label">Liquidity</div>
                        <div class="cm-val neu">High</div>
                    </div>
                    <div class="cm-item">
                        <div class="cm-label">Min. Horizon</div>
                        <div class="cm-val neu">5 yrs</div>
                    </div>
                </div>
                <div class="class-items">
                    <div class="class-item"><i class="fas fa-check"></i> Large, mid &amp; small cap funds</div>
                    <div class="class-item"><i class="fas fa-check"></i> Factor ETFs (momentum, quality)</div>
                    <div class="class-item"><i class="fas fa-check"></i> International equity exposure</div>
                    <div class="class-item"><i class="fas fa-check"></i> Direct stock portfolios (PMS-style)</div>
                </div>
                <a href="contact" class="class-link">Explore <i class="fas fa-arrow-right"></i></a>
            </div>

            <!-- Debt -->
            <div class="class-card">
                <div class="class-tag tag-debt"><i class="fas fa-shield-alt"></i> Stability Anchor</div>
                <div class="class-icon"><i class="fas fa-shield-alt"></i></div>
                <div class="class-title">Debt &amp; Fixed Income</div>
                <div class="class-subtitle">Government bonds, corporate debt, RBI floating rate bonds, and liquid funds for capital protection.</div>
                <div class="class-metrics">
                    <div class="cm-item">
                        <div class="cm-label">Expected Yield</div>
                        <div class="cm-val pos">7–9%</div>
                    </div>
                    <div class="cm-item">
                        <div class="cm-label">Liquidity</div>
                        <div class="cm-val neu">Med–High</div>
                    </div>
                    <div class="cm-item">
                        <div class="cm-label">Min. Horizon</div>
                        <div class="cm-val neu">1–5 yrs</div>
                    </div>
                </div>
                <div class="class-items">
                    <div class="class-item"><i class="fas fa-check"></i> G-Sec &amp; SDL bonds</div>
                    <div class="class-item"><i class="fas fa-check"></i> Corporate bond funds</div>
                    <div class="class-item"><i class="fas fa-check"></i> RBI Floating Rate Savings Bonds</div>
                    <div class="class-item"><i class="fas fa-check"></i> Target maturity debt funds</div>
                </div>
                <a href="contact" class="class-link">Explore <i class="fas fa-arrow-right"></i></a>
            </div>

            <!-- Gold -->
            <div class="class-card">
                <div class="class-tag tag-gold"><i class="fas fa-star"></i> Safe Haven</div>
                <div class="class-icon"><i class="fas fa-coins"></i></div>
                <div class="class-title">Gold &amp; Commodities</div>
                <div class="class-subtitle">Sovereign Gold Bonds, Gold ETFs, and commodity funds for inflation protection and crisis hedging.</div>
                <div class="class-metrics">
                    <div class="cm-item">
                        <div class="cm-label">10yr CAGR</div>
                        <div class="cm-val pos">9–13%</div>
                    </div>
                    <div class="cm-item">
                        <div class="cm-label">Liquidity</div>
                        <div class="cm-val neu">Medium</div>
                    </div>
                    <div class="cm-item">
                        <div class="cm-label">Min. Horizon</div>
                        <div class="cm-val neu">3–8 yrs</div>
                    </div>
                </div>
                <div class="class-items">
                    <div class="class-item"><i class="fas fa-check"></i> Sovereign Gold Bonds (2.5% interest)</div>
                    <div class="class-item"><i class="fas fa-check"></i> Gold ETFs (high liquidity)</div>
                    <div class="class-item"><i class="fas fa-check"></i> Gold Savings Funds (SIP mode)</div>
                    <div class="class-item"><i class="fas fa-check"></i> Multi-commodity exposure</div>
                </div>
                <a href="contact" class="class-link">Explore <i class="fas fa-arrow-right"></i></a>
            </div>

            <!-- Real Estate -->
            <div class="class-card">
                <div class="class-tag tag-re"><i class="fas fa-building"></i> Income Asset</div>
                <div class="class-icon"><i class="fas fa-city"></i></div>
                <div class="class-title">Real Estate &amp; REITs</div>
                <div class="class-subtitle">Direct property, REITs, InvITs, and fractional ownership for rental yield and capital appreciation.</div>
                <div class="class-metrics">
                    <div class="cm-item">
                        <div class="cm-label">Total Return</div>
                        <div class="cm-val pos">12–18%</div>
                    </div>
                    <div class="cm-item">
                        <div class="cm-label">Liquidity</div>
                        <div class="cm-val neg">Low–Med</div>
                    </div>
                    <div class="cm-item">
                        <div class="cm-label">Min. Horizon</div>
                        <div class="cm-val neu">5–10 yrs</div>
                    </div>
                </div>
                <div class="class-items">
                    <div class="class-item"><i class="fas fa-check"></i> Listed REITs (7–9% yield)</div>
                    <div class="class-item"><i class="fas fa-check"></i> Fractional Grade-A offices</div>
                    <div class="class-item"><i class="fas fa-check"></i> Residential &amp; commercial advisory</div>
                    <div class="class-item"><i class="fas fa-check"></i> InvIT — infrastructure trusts</div>
                </div>
                <a href="contact" class="class-link">Explore <i class="fas fa-arrow-right"></i></a>
            </div>

            <!-- International -->
            <div class="class-card">
                <div class="class-tag tag-intl"><i class="fas fa-globe"></i> Global</div>
                <div class="class-icon"><i class="fas fa-globe-americas"></i></div>
                <div class="class-title">International &amp; Global Funds</div>
                <div class="class-subtitle">US, Europe, and emerging market exposure through FOFs and direct international ETFs.</div>
                <div class="class-metrics">
                    <div class="cm-item">
                        <div class="cm-label">5yr Return</div>
                        <div class="cm-val pos">12–18%</div>
                    </div>
                    <div class="cm-item">
                        <div class="cm-label">Currency Gain</div>
                        <div class="cm-val pos">+4–6%</div>
                    </div>
                    <div class="cm-item">
                        <div class="cm-label">Min. Horizon</div>
                        <div class="cm-val neu">5+ yrs</div>
                    </div>
                </div>
                <div class="class-items">
                    <div class="class-item"><i class="fas fa-check"></i> S&amp;P 500 index ETF exposure</div>
                    <div class="class-item"><i class="fas fa-check"></i> Nasdaq 100 tech funds</div>
                    <div class="class-item"><i class="fas fa-check"></i> EM Asia + Europe diversification</div>
                    <div class="class-item"><i class="fas fa-check"></i> Currency appreciation benefit</div>
                </div>
                <a href="contact" class="class-link">Explore <i class="fas fa-arrow-right"></i></a>
            </div>

            <!-- Alternatives -->
            <div class="class-card">
                <div class="class-tag tag-alt"><i class="fas fa-puzzle-piece"></i> Alternative</div>
                <div class="class-icon"><i class="fas fa-layer-group"></i></div>
                <div class="class-title">Alternative Investments</div>
                <div class="class-subtitle">Private credit, startup equity, AIFs, and structured products for high-net-worth portfolio enhancement.</div>
                <div class="class-metrics">
                    <div class="cm-item">
                        <div class="cm-label">Target Return</div>
                        <div class="cm-val pos">18–25%</div>
                    </div>
                    <div class="cm-item">
                        <div class="cm-label">Liquidity</div>
                        <div class="cm-val neg">Very Low</div>
                    </div>
                    <div class="cm-item">
                        <div class="cm-label">Min. Capital</div>
                        <div class="cm-val neu">₹1Cr+</div>
                    </div>
                </div>
                <div class="class-items">
                    <div class="class-item"><i class="fas fa-check"></i> Category II &amp; III AIFs</div>
                    <div class="class-item"><i class="fas fa-check"></i> Private credit opportunities</div>
                    <div class="class-item"><i class="fas fa-check"></i> Startup &amp; pre-IPO equity</div>
                    <div class="class-item"><i class="fas fa-check"></i> Structured products &amp; PMS</div>
                </div>
                <a href="contact" class="class-link">Explore <i class="fas fa-arrow-right"></i></a>
            </div>

        </div>
    </div>
</section>


<!-- ══════════════════════════════════════════════════════════
     PORTFOLIO STRATEGIES — WHITE
══════════════════════════════════════════════════════════ -->
<section class="section am-strategies">
    <div class="container">
        <div class="section-header center">
            <span class="section-label" data-aos="fade-up">Investment Strategies</span>
            <h2 class="section-title" data-aos="fade-up" data-aos-delay="80">
                Model Portfolios Matched to <span>Your Risk Profile</span>
            </h2>
            <p class="section-sub" style="margin:0 auto" data-aos="fade-up" data-aos-delay="140">
                We don't sell one-size-fits-all portfolios. Each model is a starting point,
                customised to your age, income, goals, and emotional tolerance for volatility.
            </p>
        </div>

        <div class="strategies-layout">

            <!-- Strategy cards left -->
            <div class="strat-cards" data-aos="fade-right" data-aos-delay="100">

                <div class="strat-card">
                    <div class="strat-head">
                        <div class="strat-icon"><i class="fas fa-umbrella"></i></div>
                        <span class="strat-risk risk-low">Conservative</span>
                    </div>
                    <div class="strat-title">Capital Preservation Portfolio</div>
                    <div class="strat-desc">For investors within 3–5 years of a major goal or retirement. Stability-first with modest growth. Targets 9–11% CAGR.</div>
                    <div class="strat-allocations">
                        <span class="sa-tag">Debt 60%</span>
                        <span class="sa-tag">Equity 25%</span>
                        <span class="sa-tag">Gold 10%</span>
                        <span class="sa-tag">Cash 5%</span>
                    </div>
                </div>

                <div class="strat-card">
                    <div class="strat-head">
                        <div class="strat-icon"><i class="fas fa-balance-scale"></i></div>
                        <span class="strat-risk risk-mid">Balanced</span>
                    </div>
                    <div class="strat-title">Balanced Growth Portfolio</div>
                    <div class="strat-desc">The sweet spot for most investors aged 35–50. Strong equity core balanced by debt and gold. Targets 14–17% CAGR.</div>
                    <div class="strat-allocations">
                        <span class="sa-tag">Equity 50%</span>
                        <span class="sa-tag">Debt 30%</span>
                        <span class="sa-tag">Gold 10%</span>
                        <span class="sa-tag">RE 10%</span>
                    </div>
                </div>

                <div class="strat-card">
                    <div class="strat-head">
                        <div class="strat-icon"><i class="fas fa-rocket"></i></div>
                        <span class="strat-risk risk-high">Aggressive</span>
                    </div>
                    <div class="strat-title">High Growth Portfolio</div>
                    <div class="strat-desc">For investors with 10+ year horizon and high risk tolerance. Equity and alternatives dominant. Targets 18–24% CAGR.</div>
                    <div class="strat-allocations">
                        <span class="sa-tag">Equity 70%</span>
                        <span class="sa-tag">Intl 15%</span>
                        <span class="sa-tag">Alt. 10%</span>
                        <span class="sa-tag">Gold 5%</span>
                    </div>
                </div>

                <div class="strat-card">
                    <div class="strat-head">
                        <div class="strat-icon"><i class="fas fa-coins"></i></div>
                        <span class="strat-risk risk-low">Income</span>
                    </div>
                    <div class="strat-title">Regular Income Portfolio</div>
                    <div class="strat-desc">For retirees or investors needing monthly cash flow. High-yield debt, dividend equity, REITs, and SWP mutual funds.</div>
                    <div class="strat-allocations">
                        <span class="sa-tag">Debt 50%</span>
                        <span class="sa-tag">Div. Equity 25%</span>
                        <span class="sa-tag">REIT 15%</span>
                        <span class="sa-tag">Gold 10%</span>
                    </div>
                </div>

            </div>

            <!-- Returns panel right -->
            <div data-aos="fade-left" data-aos-delay="140">
                <div class="returns-panel">
                    <div class="rp-title">Portfolio Returns — 10 Year Track Record</div>

                    <div class="rp-chart">
                        <div class="rp-bar v1" style="height:38%"></div>
                        <div class="rp-bar v1" style="height:50%"></div>
                        <div class="rp-bar v1" style="height:44%"></div>
                        <div class="rp-bar v2" style="height:62%"></div>
                        <div class="rp-bar v2" style="height:55%"></div>
                        <div class="rp-bar v2" style="height:72%"></div>
                        <div class="rp-bar v2" style="height:80%"></div>
                        <div class="rp-bar v2" style="height:68%"></div>
                        <div class="rp-bar v2" style="height:90%"></div>
                        <div class="rp-bar v2" style="height:100%"></div>
                    </div>
                    <div class="rp-label">FY 2015–16 → FY 2024–25 · Balanced strategy</div>

                    <div class="rp-rows">
                        <div class="rp-row">
                            <span class="rp-row-name">Conservative Strategy (10yr)</span>
                            <span class="rp-row-val green">+10.8% CAGR</span>
                        </div>
                        <div class="rp-row">
                            <span class="rp-row-name">Balanced Strategy (10yr)</span>
                            <span class="rp-row-val green">+16.2% CAGR</span>
                        </div>
                        <div class="rp-row">
                            <span class="rp-row-name">High Growth Strategy (10yr)</span>
                            <span class="rp-row-val green">+21.4% CAGR</span>
                        </div>
                        <div class="rp-row">
                            <span class="rp-row-name">Income Strategy (10yr)</span>
                            <span class="rp-row-val green">+9.6% CAGR</span>
                        </div>
                        <div class="rp-row">
                            <span class="rp-row-name">Nifty 50 Benchmark (10yr)</span>
                            <span class="rp-row-val red">+14.4% CAGR</span>
                        </div>
                        <div class="rp-row">
                            <span class="rp-row-name">Average Alpha Generated</span>
                            <span class="rp-row-val green">+4.8% pa</span>
                        </div>
                        <div class="rp-row">
                            <span class="rp-row-name">Max Drawdown (worst case)</span>
                            <span class="rp-row-val red">-14.2% (2020)</span>
                        </div>
                    </div>
                    <div class="rp-source">Past returns not indicative of future performance. SEBI RIA advisory.</div>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- ══════════════════════════════════════════════════════════
     PERFORMANCE TRACK RECORD — DARK
══════════════════════════════════════════════════════════ -->
<section class="section am-performance">
    <div class="container">
        <div class="section-header center">
            <span class="section-label" data-aos="fade-up">Track Record</span>
            <h2 class="section-title" data-aos="fade-up" data-aos-delay="80">
                Performance Across <span>Every Market Cycle</span>
            </h2>
            <p class="section-sub" style="margin:0 auto" data-aos="fade-up" data-aos-delay="140">
                Bull runs, corrections, COVID crash, rate cycles — our portfolios have
                navigated every environment. Here's the evidence.
            </p>
        </div>

        <div class="perf-grid">
            <div class="perf-card" data-aos="fade-up" data-aos-delay="0">
                <div class="perf-period">1 Year</div>
                <div class="perf-return">+<span>24</span>.6%</div>
                <div class="perf-bench">vs Nifty 50: +18.2%</div>
                <div class="perf-details">
                    <div class="pd-row"><span class="pd-label">Alpha</span><span class="pd-val green">+6.4%</span></div>
                    <div class="pd-row"><span class="pd-label">Sharpe Ratio</span><span class="pd-val">2.1</span></div>
                    <div class="pd-row"><span class="pd-label">Max Drawdown</span><span class="pd-val">-6.2%</span></div>
                    <div class="pd-row"><span class="pd-label">Positive Months</span><span class="pd-val">9/12</span></div>
                </div>
            </div>

            <div class="perf-card" data-aos="fade-up" data-aos-delay="100">
                <div class="perf-period">3 Years</div>
                <div class="perf-return">+<span>19</span>.8%</div>
                <div class="perf-bench">vs Nifty 50: +15.1%</div>
                <div class="perf-details">
                    <div class="pd-row"><span class="pd-label">Alpha</span><span class="pd-val green">+4.7%</span></div>
                    <div class="pd-row"><span class="pd-label">Sharpe Ratio</span><span class="pd-val">1.84</span></div>
                    <div class="pd-row"><span class="pd-label">Max Drawdown</span><span class="pd-val">-9.4%</span></div>
                    <div class="pd-row"><span class="pd-label">Volatility (σ)</span><span class="pd-val">11.2%</span></div>
                </div>
            </div>

            <div class="perf-card" data-aos="fade-up" data-aos-delay="200">
                <div class="perf-period">5 Years</div>
                <div class="perf-return">+<span>18</span>.4%</div>
                <div class="perf-bench">vs Nifty 50: +13.8%</div>
                <div class="perf-details">
                    <div class="pd-row"><span class="pd-label">Alpha</span><span class="pd-val green">+4.6%</span></div>
                    <div class="pd-row"><span class="pd-label">Sharpe Ratio</span><span class="pd-val">1.72</span></div>
                    <div class="pd-row"><span class="pd-label">Max Drawdown</span><span class="pd-val">-14.2%</span></div>
                    <div class="pd-row"><span class="pd-label">Recovery Time</span><span class="pd-val">7 months</span></div>
                </div>
            </div>

            <div class="perf-card" data-aos="fade-up" data-aos-delay="300">
                <div class="perf-period">10 Years</div>
                <div class="perf-return">+<span>16</span>.2%</div>
                <div class="perf-bench">vs Nifty 50: +14.4%</div>
                <div class="perf-details">
                    <div class="pd-row"><span class="pd-label">Alpha</span><span class="pd-val green">+1.8%</span></div>
                    <div class="pd-row"><span class="pd-label">Sharpe Ratio</span><span class="pd-val">1.61</span></div>
                    <div class="pd-row"><span class="pd-label">Wealth Multiplier</span><span class="pd-val green">4.6×</span></div>
                    <div class="pd-row"><span class="pd-label">Clients retained</span><span class="pd-val">96%</span></div>
                </div>
            </div>
        </div>

        <!-- Process -->
        <div style="margin-top:80px">
            <div class="section-header center">
                <span class="section-label" data-aos="fade-up">Our Process</span>
                <h2 class="section-title" data-aos="fade-up" data-aos-delay="80">
                    How We <span>Build &amp; Manage</span> Your Portfolio
                </h2>
            </div>
            <div class="process-steps">
                <div class="process-step" data-aos="fade-up" data-aos-delay="0">
                    <div class="process-num">1</div>
                    <h4>Risk Profiling</h4>
                    <p>Quantify your risk tolerance, time horizon, liquidity needs, and emotional response to volatility.</p>
                </div>
                <div class="process-step" data-aos="fade-up" data-aos-delay="100">
                    <div class="process-num">2</div>
                    <h4>Asset Allocation</h4>
                    <p>Design your strategic allocation across equity, debt, gold, real estate, and international assets.</p>
                </div>
                <div class="process-step" data-aos="fade-up" data-aos-delay="200">
                    <div class="process-num">3</div>
                    <h4>Instrument Selection</h4>
                    <p>Pick the best-in-class mutual funds, ETFs, bonds, and direct instruments within each allocation bucket.</p>
                </div>
                <div class="process-step" data-aos="fade-up" data-aos-delay="300">
                    <div class="process-num">4</div>
                    <h4>Implementation</h4>
                    <p>Execute the plan — SIP setup, lump-sum deployment, bond purchases, and SGB applications — seamlessly.</p>
                </div>
                <div class="process-step" data-aos="fade-up" data-aos-delay="400">
                    <div class="process-num">5</div>
                    <h4>Monitor &amp; Rebalance</h4>
                    <p>Quarterly reviews, drift correction, fund switches, and tax-loss harvesting to keep you on track.</p>
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
                <div class="calc-strip__title">What Will Your Portfolio Be Worth in 10 Years?</div>
                <p class="calc-strip__desc">
                    Enter your current savings, monthly SIP, and expected return — our free
                    investment calculator shows your wealth trajectory across 3 growth scenarios
                    with inflation-adjusted real returns.
                </p>
            </div>
            <a href="investment-calculator" class="btn btn-white">
                Try Investment Calculator
                <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </div>
</div>


<!-- ══════════════════════════════════════════════════════════
     PORTFOLIO CONSTRUCTION PRINCIPLES — GRAY-50
══════════════════════════════════════════════════════════ -->
<section class="section am-portfolio">
    <div class="container">
        <div class="section-header center">
            <span class="section-label" data-aos="fade-up">Our Philosophy</span>
            <h2 class="section-title" data-aos="fade-up" data-aos-delay="80">
                The <span>4 Principles</span> Behind Every Portfolio We Build
            </h2>
            <p class="section-sub" style="margin:0 auto" data-aos="fade-up" data-aos-delay="140">
                Great portfolios aren't built on tips or trends. They're built on
                timeless principles, applied consistently, reviewed relentlessly.
            </p>
        </div>

        <div class="portfolio-grid">

            <div class="port-card" data-aos="fade-up" data-aos-delay="0">
                <div class="port-num">01</div>
                <div class="port-icon"><i class="fas fa-layer-group"></i></div>
                <div class="port-title">Diversification Across Uncorrelated Assets</div>
                <div class="port-desc">Never put all eggs in one basket — but also ensure different baskets truly move independently. Equity-gold negative correlation is real and powerful.</div>
                <div class="port-items">
                    <div class="port-item">Cross-asset low correlation design</div>
                    <div class="port-item">Geography &amp; sector diversification</div>
                    <div class="port-item">Market cap spread (large/mid/small)</div>
                </div>
            </div>

            <div class="port-card" data-aos="fade-up" data-aos-delay="80">
                <div class="port-num">02</div>
                <div class="port-icon"><i class="fas fa-sync-alt"></i></div>
                <div class="port-title">Systematic Rebalancing — Not Emotional Reaction</div>
                <div class="port-desc">Markets create drift. When equity runs up to 70% of a 55% target, we sell equity and buy underperforming debt — buy low, sell high, systematically.</div>
                <div class="port-items">
                    <div class="port-item">Quarterly allocation review</div>
                    <div class="port-item">Rule-based drift correction</div>
                    <div class="port-item">Tax-efficient rebalancing</div>
                </div>
            </div>

            <div class="port-card" data-aos="fade-up" data-aos-delay="160">
                <div class="port-num">03</div>
                <div class="port-icon"><i class="fas fa-compress-arrows-alt"></i></div>
                <div class="port-title">Cost Minimisation — Every Basis Point Matters</div>
                <div class="port-desc">A 1% difference in expense ratio compounds massively over 20 years. We prefer direct plans, ETFs, and low-cost instruments across all categories.</div>
                <div class="port-items">
                    <div class="port-item">Direct mutual fund plans only</div>
                    <div class="port-item">ETF-first where available</div>
                    <div class="port-item">Zero commission advisory model</div>
                </div>
            </div>

            <div class="port-card" data-aos="fade-up" data-aos-delay="240">
                <div class="port-num">04</div>
                <div class="port-icon"><i class="fas fa-file-invoice-dollar"></i></div>
                <div class="port-title">Tax Efficiency at Every Decision Point</div>
                <div class="port-desc">From LTCG harvesting to debt fund indexation, SGB tax-free redemption, and ELSS allocation — every portfolio decision considers the post-tax return.</div>
                <div class="port-items">
                    <div class="port-item">Annual LTCG harvesting (₹1.25L free)</div>
                    <div class="port-item">Tax-loss offset strategy</div>
                    <div class="port-item">SGB for tax-free gold maturity</div>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- ══════════════════════════════════════════════════════════
     TESTIMONIALS — WHITE
══════════════════════════════════════════════════════════ -->
<section class="section am-testimonials">
    <div class="container">
        <div class="section-header center">
            <span class="section-label" data-aos="fade-up">Client Results</span>
            <h2 class="section-title" data-aos="fade-up" data-aos-delay="80">
                Portfolios That <span>Performed When It Mattered</span>
            </h2>
        </div>

        <div class="testimonials-grid">
            <div class="testi-card" data-aos="fade-up" data-aos-delay="0">
                <div class="testi-stars">★★★★★</div>
                <div class="testi-quote">"</div>
                <p class="testi-text">
                    I had ₹40L scattered across 18 random mutual funds, 2 LIC policies, and a
                    savings account. WealthBridge consolidated everything into 6 purposeful
                    instruments. My XIRR went from 9% to 21.4% in 3 years.
                </p>
                <div class="testi-author">
                    <div class="testi-avatar">KM</div>
                    <div>
                        <div class="testi-name">Karthik Menon</div>
                        <div class="testi-role">Senior Analyst, Bengaluru · ₹40L portfolio consolidated</div>
                    </div>
                </div>
            </div>

            <div class="testi-card" data-aos="fade-up" data-aos-delay="100">
                <div class="testi-stars">★★★★★</div>
                <div class="testi-quote">"</div>
                <p class="testi-text">
                    During the 2022 interest rate crash, most portfolios dropped 20–25%.
                    WealthBridge had rebalanced us into gold and short-duration debt 6 months
                    earlier. Our drawdown was just 8.4%. I've never felt more confident.
                </p>
                <div class="testi-author">
                    <div class="testi-avatar">SN</div>
                    <div>
                        <div class="testi-name">Shalini Nair</div>
                        <div class="testi-role">CFO, Mumbai · Balanced Growth Portfolio</div>
                    </div>
                </div>
            </div>

            <div class="testi-card" data-aos="fade-up" data-aos-delay="200">
                <div class="testi-stars">★★★★★</div>
                <div class="testi-quote">"</div>
                <p class="testi-text">
                    As an NRI in Singapore, managing Indian investments felt impossible.
                    WealthBridge handles everything — NPS, ELSS, REITs, and Sovereign Gold
                    Bonds — with quarterly reports in my timezone. Truly seamless.
                </p>
                <div class="testi-author">
                    <div class="testi-avatar">VR</div>
                    <div>
                        <div class="testi-name">Vikram Rao</div>
                        <div class="testi-role">Data Scientist, Singapore · NRI Multi-Asset Portfolio</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ══════════════════════════════════════════════════════════
     FAQ — GRAY-50
══════════════════════════════════════════════════════════ -->
<section class="section am-faq">
    <div class="container">
        <div class="faq-layout">

            <div class="faq-intro" data-aos="fade-right">
                <span class="section-label">FAQ</span>
                <h2 class="section-title">
                    Asset Management <span>Questions</span>
                </h2>
                <p class="section-sub">
                    Straight answers about managing your money across multiple
                    asset classes — no jargon, no conflict of interest.
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
                        <span class="faq-q-text">What is the minimum portfolio size to work with WealthBridge?</span>
                        <span class="faq-icon"><i class="fas fa-plus"></i></span>
                    </button>
                    <div class="faq-a">
                        We work with investors across different wealth stages. You can start with as little as
                        ₹10,000/month in SIPs for ongoing portfolio building. For comprehensive multi-asset
                        management (including REITs, SGBs, and debt allocation), we recommend a minimum
                        starting portfolio of ₹15–20 lakhs for optimal diversification benefit.
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-q">
                        <span class="faq-q-text">How is WealthBridge different from a regular mutual fund distributor?</span>
                        <span class="faq-icon"><i class="fas fa-plus"></i></span>
                    </button>
                    <div class="faq-a">
                        Mutual fund distributors earn commissions from the funds they recommend — creating
                        an inherent conflict of interest. WealthBridge is a SEBI Registered Investment Adviser
                        (RIA) that charges a flat advisory fee. We only recommend direct plans (no commission
                        to anyone), and our advice is legally fiduciary — meaning your interest comes first,
                        always. We also manage across ALL asset classes, not just mutual funds.
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-q">
                        <span class="faq-q-text">How often is my portfolio reviewed and rebalanced?</span>
                        <span class="faq-icon"><i class="fas fa-plus"></i></span>
                    </button>
                    <div class="faq-a">
                        Every portfolio is reviewed quarterly — we check allocation drift, fund performance
                        relative to peers, and whether your goals have changed. Rebalancing is executed when
                        any asset class drifts more than 5% from target. Additionally, we conduct event-driven
                        reviews when market conditions change significantly (rate hikes, corrections, etc.).
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-q">
                        <span class="faq-q-text">What is XIRR and why is it better than absolute return?</span>
                        <span class="faq-icon"><i class="fas fa-plus"></i></span>
                    </button>
                    <div class="faq-a">
                        XIRR (Extended Internal Rate of Return) accounts for the timing and size of every
                        investment and withdrawal — making it the most accurate measure of real portfolio
                        performance for SIP investors. Absolute returns (e.g. "my portfolio grew 50%") ignore
                        when money was invested. A portfolio that grew 50% over 10 years has a very different
                        XIRR than one that grew 50% in 3 years. We always report XIRR.
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-q">
                        <span class="faq-q-text">Should I invest in international funds?</span>
                        <span class="faq-icon"><i class="fas fa-plus"></i></span>
                    </button>
                    <div class="faq-a">
                        Yes — for most investors with a 7+ year horizon, 10–15% international allocation
                        improves risk-adjusted returns. The S&amp;P 500 and Indian markets are not perfectly
                        correlated, so international exposure provides genuine diversification. You also benefit
                        from currency appreciation (INR has historically depreciated ~3–4% pa vs USD). Note:
                        RBI's LRS limit of $250,000/year applies to direct international investments.
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-q">
                        <span class="faq-q-text">How do you handle market crashes and volatility?</span>
                        <span class="faq-icon"><i class="fas fa-plus"></i></span>
                    </button>
                    <div class="faq-a">
                        Our approach to volatility is systematic, not reactive. We don't time markets — instead,
                        we rebalance when allocation drifts. During crashes (like COVID-2020 or 2008), our
                        gold and debt allocations cushion the fall, and we opportunistically rebalance into
                        equity at lower prices. Historical analysis shows our balanced portfolios recovered
                        an average of 3 months faster than pure equity portfolios after every correction.
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>


<!-- ══════════════════════════════════════════════════════════
     CTA BAND — DARK
══════════════════════════════════════════════════════════ -->
<section class="am-cta" id="contact">
    <div class="container">
        <div class="am-cta-inner">
            <span class="section-label" style="justify-content:center;display:flex" data-aos="fade-up">
                Start Today
            </span>
            <h2 class="cta-title" data-aos="fade-up" data-aos-delay="80">
                Your Money Should Work<br>
                <span>As Hard As You Do.</span>
            </h2>
            <p class="cta-desc" data-aos="fade-up" data-aos-delay="140">
                Stop leaving returns on the table with scattered, unmanaged assets. Get a free
                portfolio review — we'll show you exactly what's working, what's not, and
                what your wealth could look like with active management.
            </p>
            <div class="cta-actions" data-aos="fade-up" data-aos-delay="200">
                <a href="contact" class="btn btn-primary">
                    Get Free Portfolio Review
                    <i class="fas fa-arrow-right"></i>
                </a>
                <a href="tel:+911800000000" class="btn btn-ghost">
                    <i class="fas fa-phone"></i>
                    Call 1800-000-000
                </a>
            </div>

            <div class="cta-trust" data-aos="fade-up" data-aos-delay="280">
                <div class="ct-item"><i class="fas fa-check-circle"></i> SEBI Registered RIA</div>
                <div class="ct-item"><i class="fas fa-check-circle"></i> Zero Commission — Fee Only</div>
                <div class="ct-item"><i class="fas fa-check-circle"></i> ₹2,400Cr+ Under Advisory</div>
                <div class="ct-item"><i class="fas fa-check-circle"></i> First Review Free</div>
            </div>
        </div>
    </div>
</section>


<!-- ══════════════════════════════════════════════════════════
     RELATED SERVICES — WHITE
══════════════════════════════════════════════════════════ -->
<section class="section am-related">
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
                <p>Goal-mapped investment strategy — from first SIP to complete financial plan.</p>
                <span class="rc-link">Explore <i class="fas fa-arrow-right"></i></span>
            </a>
            <a href="wealth-management" class="rel-card" data-aos="fade-up" data-aos-delay="80">
                <div class="rc-icon"><i class="fas fa-gem"></i></div>
                <h4>Wealth Management</h4>
                <p>Comprehensive HNI wealth strategy — portfolios above ₹1Cr with private market access.</p>
                <span class="rc-link">Explore <i class="fas fa-arrow-right"></i></span>
            </a>
            <a href="tax-efficient-investment" class="rel-card" data-aos="fade-up" data-aos-delay="160">
                <div class="rc-icon"><i class="fas fa-file-invoice-dollar"></i></div>
                <h4>Tax-Efficient Investment</h4>
                <p>ELSS, LTCG harvesting, and tax-loss strategies integrated into your portfolio.</p>
                <span class="rc-link">Explore <i class="fas fa-arrow-right"></i></span>
            </a>
            <a href="real-estate-investment" class="rel-card" data-aos="fade-up" data-aos-delay="240">
                <div class="rc-icon"><i class="fas fa-city"></i></div>
                <h4>Real Estate Investment</h4>
                <p>Strategic property advisory — REITs, fractional, and physical real estate.</p>
                <span class="rc-link">Explore <i class="fas fa-arrow-right"></i></span>
            </a>
        </div>
    </div>
</section>

<?php include_once ('elements/footer.php'); ?>