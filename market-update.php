<?php include_once ('elements/header.php'); ?>

<!-- Page CSS -->
<link href="<?php echo UrlHelper::asset('css/market-update.css'); ?>" rel="stylesheet">


<!-- ══════════════════════════════════════════════════════════
     BREADCRUMB
══════════════════════════════════════════════════════════ -->
<div class="breadcrumb-bar">
    <div class="container">
        <div class="breadcrumb">
            <a href="index"><i class="fas fa-home"></i> Home</a>
            <span>›</span>
            <a href="#">Insights</a>
            <span>›</span>
            <span class="current">Market Update</span>
        </div>
    </div>
</div>


<!-- ══════════════════════════════════════════════════════════
     HERO — DARK
══════════════════════════════════════════════════════════ -->
<section class="mu-hero">
    <div class="muh-bg"></div>
    <div class="muh-grid"></div>
    <div class="muh-line"></div>
    <div class="muh-line2"></div>

    <div class="container">
        <div class="muh-content">

            <!-- LEFT -->
            <div class="muh-left">
                <div class="muh-label" data-aos="fade-right" data-aos-duration="700">
                    <span class="muh-label-dot"></span>
                    Insights &nbsp;·&nbsp; Live Market Update
                </div>

                <h1 class="muh-title" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                    Markets in Focus.
                    <em>Your Edge,</em>
                    Every Week.
                </h1>

                <p class="muh-subtitle" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                    WealthBridge's research desk tracks equity, debt, gold, currency, and global
                    macro signals — translated into plain-language insights that help you make
                    smarter investment decisions.
                </p>

                <div class="muh-meta" data-aos="fade-up" data-aos-duration="700" data-aos-delay="300">
                    <div class="muh-meta-item">
                        <i class="fas fa-calendar-alt"></i>
                        <span>Updated: <strong><?php echo date('d M Y'); ?></strong></span>
                    </div>
                    <div class="muh-meta-item">
                        <i class="fas fa-clock"></i>
                        <span>As of <strong>3:30 PM IST</strong> · Market Closed</span>
                    </div>
                    <div class="muh-meta-item">
                        <i class="fas fa-user-tie"></i>
                        <span>By <strong>WealthBridge Research Desk</strong></span>
                    </div>
                </div>
            </div><!-- /left -->

            <!-- RIGHT: live card -->
            <div class="muh-right" style="position:relative" data-aos="fade-left" data-aos-duration="900" data-aos-delay="200">

                <!-- float f1 -->
                <div class="muh-float f1">
                    <div class="muh-float-label">FII Net Buy/Sell</div>
                    <div class="muh-float-val">+₹2,840Cr <span>▲</span></div>
                    <div class="muh-float-sub">Today's provisional data</div>
                </div>

                <div class="muh-card">
                    <div class="muh-card-header">
                        <span class="muh-card-title">Indian Markets Snapshot</span>
                        <span class="muh-card-live">
                            <span class="muh-card-live-dot"></span>
                            Closed
                        </span>
                    </div>

                    <div class="muh-indices">
                        <!-- Nifty 50 -->
                        <div class="muh-idx">
                            <div class="muh-idx-icon" style="background:rgba(200,16,46,0.15);color:var(--red)">N50</div>
                            <div>
                                <div class="muh-idx-name">Nifty 50</div>
                                <div class="muh-idx-sub">NSE · India</div>
                            </div>
                            <div class="muh-spark">
                                <div class="muh-spark-bar up" style="height:60%" data-delay=".04s"></div>
                                <div class="muh-spark-bar dn" style="height:40%" data-delay=".08s"></div>
                                <div class="muh-spark-bar up" style="height:75%" data-delay=".12s"></div>
                                <div class="muh-spark-bar up" style="height:55%" data-delay=".16s"></div>
                                <div class="muh-spark-bar up" style="height:90%" data-delay=".20s"></div>
                                <div class="muh-spark-bar up" style="height:80%" data-delay=".24s"></div>
                            </div>
                            <div class="muh-idx-right">
                                <div class="muh-idx-val">24,768</div>
                                <div class="muh-idx-chg chg-up">▲ 184.6 (+0.75%)</div>
                            </div>
                        </div>

                        <!-- Sensex -->
                        <div class="muh-idx">
                            <div class="muh-idx-icon" style="background:rgba(59,130,246,0.15);color:#3b82f6">SNX</div>
                            <div>
                                <div class="muh-idx-name">BSE Sensex</div>
                                <div class="muh-idx-sub">BSE · India</div>
                            </div>
                            <div class="muh-spark">
                                <div class="muh-spark-bar up" style="height:55%" data-delay=".04s"></div>
                                <div class="muh-spark-bar dn" style="height:38%" data-delay=".08s"></div>
                                <div class="muh-spark-bar up" style="height:68%" data-delay=".12s"></div>
                                <div class="muh-spark-bar up" style="height:50%" data-delay=".16s"></div>
                                <div class="muh-spark-bar up" style="height:85%" data-delay=".20s"></div>
                                <div class="muh-spark-bar up" style="height:78%" data-delay=".24s"></div>
                            </div>
                            <div class="muh-idx-right">
                                <div class="muh-idx-val">81,224</div>
                                <div class="muh-idx-chg chg-up">▲ 612.4 (+0.76%)</div>
                            </div>
                        </div>

                        <!-- Nifty Bank -->
                        <div class="muh-idx">
                            <div class="muh-idx-icon" style="background:rgba(234,179,8,0.15);color:#b45309">BNK</div>
                            <div>
                                <div class="muh-idx-name">Nifty Bank</div>
                                <div class="muh-idx-sub">NSE · Banking</div>
                            </div>
                            <div class="muh-spark">
                                <div class="muh-spark-bar dn" style="height:45%" data-delay=".04s"></div>
                                <div class="muh-spark-bar dn" style="height:30%" data-delay=".08s"></div>
                                <div class="muh-spark-bar up" style="height:55%" data-delay=".12s"></div>
                                <div class="muh-spark-bar up" style="height:65%" data-delay=".16s"></div>
                                <div class="muh-spark-bar dn" style="height:48%" data-delay=".20s"></div>
                                <div class="muh-spark-bar up" style="height:72%" data-delay=".24s"></div>
                            </div>
                            <div class="muh-idx-right">
                                <div class="muh-idx-val">52,186</div>
                                <div class="muh-idx-chg chg-dn">▼ 124.8 (-0.24%)</div>
                            </div>
                        </div>

                        <!-- Gold -->
                        <div class="muh-idx">
                            <div class="muh-idx-icon" style="background:rgba(234,179,8,0.15);color:#eab308">AU</div>
                            <div>
                                <div class="muh-idx-name">Gold MCX</div>
                                <div class="muh-idx-sub">MCX · Spot</div>
                            </div>
                            <div class="muh-spark">
                                <div class="muh-spark-bar up" style="height:70%" data-delay=".04s"></div>
                                <div class="muh-spark-bar up" style="height:80%" data-delay=".08s"></div>
                                <div class="muh-spark-bar up" style="height:72%" data-delay=".12s"></div>
                                <div class="muh-spark-bar up" style="height:85%" data-delay=".16s"></div>
                                <div class="muh-spark-bar up" style="height:90%" data-delay=".20s"></div>
                                <div class="muh-spark-bar up" style="height:100%" data-delay=".24s"></div>
                            </div>
                            <div class="muh-idx-right">
                                <div class="muh-idx-val">₹96,240</div>
                                <div class="muh-idx-chg chg-up">▲ ₹380 (+0.40%)</div>
                            </div>
                        </div>
                    </div>

                    <!-- Market Sentiment -->
                    <div class="muh-sentiment">
                        <div>
                            <div class="muh-sent-label">Market Sentiment</div>
                            <div class="muh-sent-val">Cautiously Bullish</div>
                        </div>
                        <span class="muh-sent-tag bullish">Bullish</span>
                    </div>
                </div><!-- /card -->

                <!-- float f2 -->
                <div class="muh-float f2">
                    <div class="muh-float-label">10Y G-Sec Yield</div>
                    <div class="muh-float-val">6.84% <span>▼ 2bps</span></div>
                    <div class="muh-float-sub">RBI policy easing signal</div>
                </div>

            </div><!-- /right -->
        </div>
    </div>
</section>


<!-- ══════════════════════════════════════════════════════════
     LIVE TICKER
══════════════════════════════════════════════════════════ -->
<div class="mu-ticker" aria-hidden="true">
    <div class="mu-ticker-inner">
        <div class="mu-ticker-label">
            <span class="mu-ticker-label-dot"></span>
            LIVE
        </div>
        <div class="mu-ticker-track">
            <div class="mu-ticker-scroll">
                <!-- set 1 -->
                <div class="mu-tick-item"><span class="mu-tick-name">Nifty 50</span><span class="mu-tick-price">24,768</span><span class="mu-tick-chg chg-up">▲0.75%</span></div>
                <div class="mu-tick-item"><span class="mu-tick-name">Sensex</span><span class="mu-tick-price">81,224</span><span class="mu-tick-chg chg-up">▲0.76%</span></div>
                <div class="mu-tick-item"><span class="mu-tick-name">Nifty Bank</span><span class="mu-tick-price">52,186</span><span class="mu-tick-chg chg-dn">▼0.24%</span></div>
                <div class="mu-tick-item"><span class="mu-tick-name">Nifty IT</span><span class="mu-tick-price">40,214</span><span class="mu-tick-chg chg-up">▲1.42%</span></div>
                <div class="mu-tick-item"><span class="mu-tick-name">Gold MCX</span><span class="mu-tick-price">₹96,240</span><span class="mu-tick-chg chg-up">▲0.40%</span></div>
                <div class="mu-tick-item"><span class="mu-tick-name">Silver MCX</span><span class="mu-tick-price">₹94,820</span><span class="mu-tick-chg chg-dn">▼0.18%</span></div>
                <div class="mu-tick-item"><span class="mu-tick-name">USD/INR</span><span class="mu-tick-price">83.84</span><span class="mu-tick-chg chg-dn">▼0.12%</span></div>
                <div class="mu-tick-item"><span class="mu-tick-name">10Y G-Sec</span><span class="mu-tick-price">6.84%</span><span class="mu-tick-chg chg-dn">▼2bps</span></div>
                <div class="mu-tick-item"><span class="mu-tick-name">Crude WTI</span><span class="mu-tick-price">$78.42</span><span class="mu-tick-chg chg-up">▲0.82%</span></div>
                <div class="mu-tick-item"><span class="mu-tick-name">S&P 500</span><span class="mu-tick-price">5,308</span><span class="mu-tick-chg chg-up">▲0.55%</span></div>
                <div class="mu-tick-item"><span class="mu-tick-name">Nasdaq</span><span class="mu-tick-price">18,642</span><span class="mu-tick-chg chg-up">▲0.92%</span></div>
                <!-- set 2 (duplicate) -->
                <div class="mu-tick-item"><span class="mu-tick-name">Nifty 50</span><span class="mu-tick-price">24,768</span><span class="mu-tick-chg chg-up">▲0.75%</span></div>
                <div class="mu-tick-item"><span class="mu-tick-name">Sensex</span><span class="mu-tick-price">81,224</span><span class="mu-tick-chg chg-up">▲0.76%</span></div>
                <div class="mu-tick-item"><span class="mu-tick-name">Nifty Bank</span><span class="mu-tick-price">52,186</span><span class="mu-tick-chg chg-dn">▼0.24%</span></div>
                <div class="mu-tick-item"><span class="mu-tick-name">Nifty IT</span><span class="mu-tick-price">40,214</span><span class="mu-tick-chg chg-up">▲1.42%</span></div>
                <div class="mu-tick-item"><span class="mu-tick-name">Gold MCX</span><span class="mu-tick-price">₹96,240</span><span class="mu-tick-chg chg-up">▲0.40%</span></div>
                <div class="mu-tick-item"><span class="mu-tick-name">Silver MCX</span><span class="mu-tick-price">₹94,820</span><span class="mu-tick-chg chg-dn">▼0.18%</span></div>
                <div class="mu-tick-item"><span class="mu-tick-name">USD/INR</span><span class="mu-tick-price">83.84</span><span class="mu-tick-chg chg-dn">▼0.12%</span></div>
                <div class="mu-tick-item"><span class="mu-tick-name">10Y G-Sec</span><span class="mu-tick-price">6.84%</span><span class="mu-tick-chg chg-dn">▼2bps</span></div>
                <div class="mu-tick-item"><span class="mu-tick-name">Crude WTI</span><span class="mu-tick-price">$78.42</span><span class="mu-tick-chg chg-up">▲0.82%</span></div>
                <div class="mu-tick-item"><span class="mu-tick-name">S&P 500</span><span class="mu-tick-price">5,308</span><span class="mu-tick-chg chg-up">▲0.55%</span></div>
                <div class="mu-tick-item"><span class="mu-tick-name">Nasdaq</span><span class="mu-tick-price">18,642</span><span class="mu-tick-chg chg-up">▲0.92%</span></div>
            </div>
        </div>
    </div>
</div>


<!-- ══════════════════════════════════════════════════════════
     MARKET OVERVIEW — WHITE
══════════════════════════════════════════════════════════ -->
<section class="section mu-overview">
    <div class="container">
        <div class="section-header">
            <span class="section-label" data-aos="fade-right">At a Glance</span>
            <h2 class="section-title" data-aos="fade-up" data-aos-delay="80">
                Today's <span>Market Overview</span>
            </h2>
            <p class="section-sub" data-aos="fade-up" data-aos-delay="130">
                Key numbers across asset classes — equity, debt, gold, currency, and commodities.
            </p>
        </div>

        <div class="overview-grid">
            <div class="ov-card" data-aos="fade-up" data-aos-delay="0">
                <div class="ov-card-header">
                    <span class="ov-card-label">Equity</span>
                    <span class="ov-card-chg ov-up">▲ Positive</span>
                </div>
                <div class="ov-val">24,768</div>
                <div class="ov-sub">Nifty 50 · +0.75% today</div>
                <div class="ov-mini-chart">
                    <div class="ov-bar pos" style="height:55%;animation-delay:.04s"></div>
                    <div class="ov-bar neg" style="height:35%;animation-delay:.08s"></div>
                    <div class="ov-bar pos" style="height:70%;animation-delay:.12s"></div>
                    <div class="ov-bar pos" style="height:60%;animation-delay:.16s"></div>
                    <div class="ov-bar pos" style="height:82%;animation-delay:.20s"></div>
                    <div class="ov-bar pos" style="height:75%;animation-delay:.24s"></div>
                    <div class="ov-bar pos" style="height:100%;animation-delay:.28s"></div>
                </div>
            </div>

            <div class="ov-card" data-aos="fade-up" data-aos-delay="80">
                <div class="ov-card-header">
                    <span class="ov-card-label">Gold</span>
                    <span class="ov-card-chg ov-up">▲ Rising</span>
                </div>
                <div class="ov-val">₹96,240<span>/10g</span></div>
                <div class="ov-sub">MCX Gold · +0.40% today</div>
                <div class="ov-mini-chart">
                    <div class="ov-bar pos" style="height:62%;animation-delay:.04s"></div>
                    <div class="ov-bar pos" style="height:70%;animation-delay:.08s"></div>
                    <div class="ov-bar pos" style="height:75%;animation-delay:.12s"></div>
                    <div class="ov-bar pos" style="height:80%;animation-delay:.16s"></div>
                    <div class="ov-bar pos" style="height:88%;animation-delay:.20s"></div>
                    <div class="ov-bar pos" style="height:95%;animation-delay:.24s"></div>
                    <div class="ov-bar pos" style="height:100%;animation-delay:.28s"></div>
                </div>
            </div>

            <div class="ov-card" data-aos="fade-up" data-aos-delay="160">
                <div class="ov-card-header">
                    <span class="ov-card-label">USD / INR</span>
                    <span class="ov-card-chg ov-down">▼ Rupee Weak</span>
                </div>
                <div class="ov-val">83.84</div>
                <div class="ov-sub">Forex · ▼ 0.12% vs USD</div>
                <div class="ov-mini-chart">
                    <div class="ov-bar neg" style="height:40%;animation-delay:.04s"></div>
                    <div class="ov-bar neg" style="height:55%;animation-delay:.08s"></div>
                    <div class="ov-bar pos" style="height:45%;animation-delay:.12s"></div>
                    <div class="ov-bar neg" style="height:60%;animation-delay:.16s"></div>
                    <div class="ov-bar neg" style="height:72%;animation-delay:.20s"></div>
                    <div class="ov-bar neg" style="height:80%;animation-delay:.24s"></div>
                    <div class="ov-bar neg" style="height:90%;animation-delay:.28s"></div>
                </div>
            </div>

            <div class="ov-card" data-aos="fade-up" data-aos-delay="240">
                <div class="ov-card-header">
                    <span class="ov-card-label">10Y Bond</span>
                    <span class="ov-card-chg ov-down">▼ Yield Easing</span>
                </div>
                <div class="ov-val">6.84<span>%</span></div>
                <div class="ov-sub">G-Sec 10Y · ▼ 2bps today</div>
                <div class="ov-mini-chart">
                    <div class="ov-bar pos" style="height:90%;animation-delay:.04s"></div>
                    <div class="ov-bar neg" style="height:82%;animation-delay:.08s"></div>
                    <div class="ov-bar neg" style="height:75%;animation-delay:.12s"></div>
                    <div class="ov-bar neg" style="height:70%;animation-delay:.16s"></div>
                    <div class="ov-bar neg" style="height:68%;animation-delay:.20s"></div>
                    <div class="ov-bar neg" style="height:65%;animation-delay:.24s"></div>
                    <div class="ov-bar neg" style="height:62%;animation-delay:.28s"></div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ══════════════════════════════════════════════════════════
     FEATURED ANALYSIS — GRAY-50
══════════════════════════════════════════════════════════ -->
<section class="section mu-featured">
    <div class="container">
        <div class="section-header">
            <span class="section-label" data-aos="fade-right">This Week's Deep Dive</span>
            <h2 class="section-title" data-aos="fade-up" data-aos-delay="80">
                Featured <span>Market Analysis</span>
            </h2>
        </div>

        <div class="featured-analysis-layout">

            <!-- Main Feature -->
            <div class="fa-main" data-aos="fade-right" data-aos-delay="100">
                <div class="fa-main-top">
                    <!-- Monthly returns bar chart -->
                    <div>
                        <div class="fa-chart">
                            <div class="fa-bar neg" style="height:28%"></div>
                            <div class="fa-bar pos" style="height:44%"></div>
                            <div class="fa-bar pos" style="height:62%"></div>
                            <div class="fa-bar neg" style="height:35%"></div>
                            <div class="fa-bar pos" style="height:78%"></div>
                            <div class="fa-bar pos" style="height:54%"></div>
                            <div class="fa-bar pos" style="height:88%"></div>
                            <div class="fa-bar neg" style="height:42%"></div>
                            <div class="fa-bar pos" style="height:70%"></div>
                            <div class="fa-bar hi"  style="height:100%"></div>
                            <div class="fa-bar pos" style="height:82%"></div>
                            <div class="fa-bar pos" style="height:92%"></div>
                        </div>
                        <div class="fa-chart-label">Nifty 50 Monthly Returns — Jan to Dec 2024</div>
                    </div>
                </div>
                <div class="fa-main-body">
                    <div class="fa-tag"><i class="fas fa-star"></i> Featured Analysis</div>
                    <div class="fa-title">Nifty at 25,000: What the Next 12 Months Could Look Like for Indian Equity Investors</div>
                    <div class="fa-excerpt">
                        India's benchmark crossed a historic milestone. Our research desk examines the valuation picture,
                        earnings trajectory, FII positioning, and three macro scenarios that could shape returns through
                        FY 2025–26. Here's what long-term investors need to watch.
                    </div>
                    <div class="fa-meta">
                        <span class="fa-meta-item"><i class="fas fa-user-tie"></i> Priya Kapoor, CIO</span>
                        <span class="fa-meta-item"><i class="fas fa-calendar"></i> June 09, 2025</span>
                        <span class="fa-meta-item"><i class="fas fa-clock"></i> 8 min read</span>
                        <span class="fa-meta-item"><i class="fas fa-eye"></i> 12,480 views</span>
                    </div>
                    <a href="market-update-detail" class="fa-read-link">
                        Read Full Analysis <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Side Cards -->
            <div class="fa-side" data-aos="fade-left" data-aos-delay="140">

                <div class="fa-side-card">
                    <div class="fa-side-tag"><i class="fas fa-landmark"></i> RBI Policy</div>
                    <div class="fa-side-title">RBI Holds Rates at 6.5% — What Does It Mean for Debt Funds and Your EMIs?</div>
                    <div class="fa-side-meta">June 07, 2025 · 5 min read</div>
                    <span class="fa-side-chg ov-up" style="font-size:12px;font-weight:700;color:#16a34a;background:rgba(34,197,94,0.1);padding:2px 8px;border-radius:4px;display:inline-block;margin-top:8px">Neutral Impact on Markets</span>
                </div>

                <div class="fa-side-card">
                    <div class="fa-side-tag"><i class="fas fa-globe"></i> Global Macro</div>
                    <div class="fa-side-title">Fed Rate Cut Watch: How US Monetary Policy Shapes India's FII Flows</div>
                    <div class="fa-side-meta">June 05, 2025 · 6 min read</div>
                    <span class="fa-side-chg ov-up" style="font-size:12px;font-weight:700;color:#16a34a;background:rgba(34,197,94,0.1);padding:2px 8px;border-radius:4px;display:inline-block;margin-top:8px">Bullish for Emerging Markets</span>
                </div>

                <div class="fa-side-card">
                    <div class="fa-side-tag"><i class="fas fa-coins"></i> Gold</div>
                    <div class="fa-side-title">Gold at ₹96,000: Overbought or Just Getting Started?</div>
                    <div class="fa-side-meta">June 03, 2025 · 4 min read</div>
                    <span class="fa-side-chg ov-neu" style="font-size:12px;font-weight:700;color:#b45309;background:rgba(234,179,8,0.1);padding:2px 8px;border-radius:4px;display:inline-block;margin-top:8px">Watch Central Bank Demand</span>
                </div>

                <div class="fa-side-card">
                    <div class="fa-side-tag"><i class="fas fa-city"></i> Real Estate</div>
                    <div class="fa-side-title">REITs Q1 FY26 Results: Distributions Rise 12% YoY — Is Now the Right Entry?</div>
                    <div class="fa-side-meta">June 01, 2025 · 5 min read</div>
                    <span class="fa-side-chg ov-up" style="font-size:12px;font-weight:700;color:#16a34a;background:rgba(34,197,94,0.1);padding:2px 8px;border-radius:4px;display:inline-block;margin-top:8px">Accumulate on Dips</span>
                </div>

            </div>
        </div>
    </div>
</section>


<!-- ══════════════════════════════════════════════════════════
     ASSET CLASS PERFORMANCE TABLE — DARK
══════════════════════════════════════════════════════════ -->
<section class="section mu-performance">
    <div class="container">
        <div class="section-header center">
            <span class="section-label" data-aos="fade-up">Returns Tracker</span>
            <h2 class="section-title" data-aos="fade-up" data-aos-delay="80">
                Asset Class <span>Performance Dashboard</span>
            </h2>
            <p class="section-sub" style="margin:0 auto" data-aos="fade-up" data-aos-delay="130">
                YTD, 1-year, 3-year, and 5-year returns across all major investable asset classes in India.
            </p>
        </div>

        <div class="perf-table-wrap" data-aos="fade-up" data-aos-delay="160">
            <table class="perf-table">
                <thead>
                    <tr>
                        <th>Asset Class / Index</th>
                        <th>YTD 2025</th>
                        <th>1 Year</th>
                        <th>3 Year CAGR</th>
                        <th>5 Year CAGR</th>
                        <th>Outlook</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><i class="fas fa-chart-line" style="color:var(--red);margin-right:8px"></i> Nifty 50</td>
                        <td><span class="pt-up">+8.4%</span> <div class="pt-bar-wrap"><div class="pt-bar pos" style="--w:56%"></div></div></td>
                        <td><span class="pt-up">+22.1%</span></td>
                        <td><span class="pt-up">+18.6%</span></td>
                        <td><span class="pt-up">+14.4%</span></td>
                        <td><span class="pt-tag">Cautiously Bullish</span></td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-chart-bar" style="color:#3b82f6;margin-right:8px"></i> Nifty Midcap 150</td>
                        <td><span class="pt-up">+11.2%</span> <div class="pt-bar-wrap"><div class="pt-bar pos" style="--w:72%"></div></div></td>
                        <td><span class="pt-up">+38.4%</span></td>
                        <td><span class="pt-up">+28.2%</span></td>
                        <td><span class="pt-up">+22.4%</span></td>
                        <td><span class="pt-tag">Selective Buy</span></td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-chart-bar" style="color:#8b5cf6;margin-right:8px"></i> Nifty Smallcap 250</td>
                        <td><span class="pt-dn">-2.8%</span> <div class="pt-bar-wrap"><div class="pt-bar neg" style="--w:20%"></div></div></td>
                        <td><span class="pt-up">+24.6%</span></td>
                        <td><span class="pt-up">+26.8%</span></td>
                        <td><span class="pt-up">+20.1%</span></td>
                        <td><span class="pt-tag">Neutral — Volatile</span></td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-shield-alt" style="color:#eab308;margin-right:8px"></i> Nifty IT Index</td>
                        <td><span class="pt-up">+14.8%</span> <div class="pt-bar-wrap"><div class="pt-bar pos" style="--w:84%"></div></div></td>
                        <td><span class="pt-up">+28.4%</span></td>
                        <td><span class="pt-up">+12.2%</span></td>
                        <td><span class="pt-up">+18.6%</span></td>
                        <td><span class="pt-tag">Overweight</span></td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-coins" style="color:#f59e0b;margin-right:8px"></i> Gold (MCX)</td>
                        <td><span class="pt-up">+18.6%</span> <div class="pt-bar-wrap"><div class="pt-bar pos" style="--w:92%"></div></div></td>
                        <td><span class="pt-up">+24.2%</span></td>
                        <td><span class="pt-up">+14.8%</span></td>
                        <td><span class="pt-up">+13.4%</span></td>
                        <td><span class="pt-tag">Hold / Accumulate</span></td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-building" style="color:#22c55e;margin-right:8px"></i> India REIT Index</td>
                        <td><span class="pt-up">+6.2%</span> <div class="pt-bar-wrap"><div class="pt-bar pos" style="--w:40%"></div></div></td>
                        <td><span class="pt-up">+11.4%</span></td>
                        <td><span class="pt-up">+9.8%</span></td>
                        <td><span class="pt-neu">+7.2%</span></td>
                        <td><span class="pt-tag">Accumulate on Dips</span></td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-lock" style="color:#94a3b8;margin-right:8px"></i> Debt — Short Term</td>
                        <td><span class="pt-up">+3.8%</span> <div class="pt-bar-wrap"><div class="pt-bar pos" style="--w:24%"></div></div></td>
                        <td><span class="pt-up">+7.4%</span></td>
                        <td><span class="pt-up">+6.8%</span></td>
                        <td><span class="pt-up">+6.2%</span></td>
                        <td><span class="pt-tag">Reduce Duration Risk</span></td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-globe" style="color:#60a5fa;margin-right:8px"></i> S&amp;P 500 (INR terms)</td>
                        <td><span class="pt-up">+12.4%</span> <div class="pt-bar-wrap"><div class="pt-bar pos" style="--w:76%"></div></div></td>
                        <td><span class="pt-up">+18.8%</span></td>
                        <td><span class="pt-up">+16.2%</span></td>
                        <td><span class="pt-up">+18.4%</span></td>
                        <td><span class="pt-tag">Maintain Allocation</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p style="font-size:11px;color:rgba(255,255,255,0.3);margin-top:12px;text-align:right">
            Past returns are not indicative of future performance. Data as of <?php echo date('d M Y'); ?>. Sources: NSE, MCX, AMFI.
        </p>
    </div>
</section>


<!-- ══════════════════════════════════════════════════════════
     MACRO INDICATORS — GRAY-50
══════════════════════════════════════════════════════════ -->
<section class="section mu-macro">
    <div class="container">
        <div class="section-header center">
            <span class="section-label" data-aos="fade-up">Economic Pulse</span>
            <h2 class="section-title" data-aos="fade-up" data-aos-delay="80">
                Key <span>Macro Indicators</span> — India &amp; Global
            </h2>
            <p class="section-sub" style="margin:0 auto" data-aos="fade-up" data-aos-delay="130">
                The economic backdrop that drives market direction — from GDP to inflation, FII flows to crude oil.
            </p>
        </div>

        <div class="macro-grid">
            <!-- GDP -->
            <div class="macro-card" data-aos="fade-up" data-aos-delay="0">
                <div class="macro-card-head">
                    <div class="macro-icon"><i class="fas fa-landmark"></i></div>
                    <span class="macro-trend ov-up">▲ Strong</span>
                </div>
                <div class="macro-name">India GDP Growth</div>
                <div class="macro-val">7.8<span>%</span></div>
                <div class="macro-desc">FY25 GDP growth — above consensus estimate of 7.2%. Private consumption and capex remain the twin engines driving outperformance.</div>
                <div class="macro-bar-wrap">
                    <div class="macro-bar-label"><span>India</span><span>World avg: 3.2%</span></div>
                    <div class="macro-track"><div class="macro-fill" style="--w:78%"></div></div>
                </div>
            </div>

            <!-- CPI Inflation -->
            <div class="macro-card" data-aos="fade-up" data-aos-delay="80">
                <div class="macro-card-head">
                    <div class="macro-icon"><i class="fas fa-shopping-basket"></i></div>
                    <span class="macro-trend ov-down" style="background:rgba(34,197,94,0.1);color:#16a34a">▼ Cooling</span>
                </div>
                <div class="macro-name">CPI Inflation (India)</div>
                <div class="macro-val">4.2<span>%</span></div>
                <div class="macro-desc">May 2025 CPI print — within RBI's 4±2% comfort band. Food inflation easing on a good rabi harvest creates room for potential rate cuts in H2 FY26.</div>
                <div class="macro-bar-wrap">
                    <div class="macro-bar-label"><span>Current</span><span>RBI Target: 4%</span></div>
                    <div class="macro-track"><div class="macro-fill" style="--w:42%"></div></div>
                </div>
            </div>

            <!-- FII Flows -->
            <div class="macro-card" data-aos="fade-up" data-aos-delay="160">
                <div class="macro-card-head">
                    <div class="macro-icon"><i class="fas fa-globe-asia"></i></div>
                    <span class="macro-trend ov-up">▲ Net Buying</span>
                </div>
                <div class="macro-name">FII Net Flows (YTD)</div>
                <div class="macro-val">₹<span>42,680</span>Cr</div>
                <div class="macro-desc">Foreign institutional investors have turned net buyers in 2025 after a volatile 2024. Improving India-US trade sentiment and dollar weakness are driving inflows.</div>
                <div class="macro-bar-wrap">
                    <div class="macro-bar-label"><span>YTD net buy</span><span>FY24: Net sell ₹28,000Cr</span></div>
                    <div class="macro-track"><div class="macro-fill" style="--w:68%"></div></div>
                </div>
            </div>

            <!-- Crude Oil -->
            <div class="macro-card" data-aos="fade-up" data-aos-delay="0">
                <div class="macro-card-head">
                    <div class="macro-icon"><i class="fas fa-oil-can"></i></div>
                    <span class="macro-trend ov-neu">→ Stable</span>
                </div>
                <div class="macro-name">Brent Crude</div>
                <div class="macro-val">$<span>80.4</span></div>
                <div class="macro-desc">Crude at $80–82/bbl is manageable for India. OPEC+ supply discipline and soft US demand have kept a ceiling. Key watch: Iran sanctions and Middle East tensions.</div>
                <div class="macro-bar-wrap">
                    <div class="macro-bar-label"><span>India comfort zone: &lt;$85</span><span>Current</span></div>
                    <div class="macro-track"><div class="macro-fill" style="--w:56%"></div></div>
                </div>
            </div>

            <!-- US Fed Rate -->
            <div class="macro-card" data-aos="fade-up" data-aos-delay="80">
                <div class="macro-card-head">
                    <div class="macro-icon"><i class="fas fa-university"></i></div>
                    <span class="macro-trend ov-down" style="background:rgba(34,197,94,0.1);color:#16a34a">▼ Expected Cut</span>
                </div>
                <div class="macro-name">US Fed Funds Rate</div>
                <div class="macro-val">5.25<span>–5.5%</span></div>
                <div class="macro-desc">Fed held rates at FOMC June meeting. Market pricing in 2 cuts of 25bps each by Dec 2025. Softer US labour data and cooling CPI are supporting the dovish pivot case.</div>
                <div class="macro-bar-wrap">
                    <div class="macro-bar-label"><span>Current</span><span>Market expects: 4.75% by Dec 25</span></div>
                    <div class="macro-track"><div class="macro-fill" style="--w:88%"></div></div>
                </div>
            </div>

            <!-- USD/INR -->
            <div class="macro-card" data-aos="fade-up" data-aos-delay="160">
                <div class="macro-card-head">
                    <div class="macro-icon"><i class="fas fa-exchange-alt"></i></div>
                    <span class="macro-trend ov-down" style="background:rgba(248,113,113,0.1);color:#dc2626">▲ INR Weak</span>
                </div>
                <div class="macro-name">USD / INR Exchange Rate</div>
                <div class="macro-val">83<span>.84</span></div>
                <div class="macro-desc">Rupee marginally weaker vs dollar on global risk-off and oil import demand. RBI intervention likely at 84.50 levels. Structural support from India's forex reserve at $640Bn.</div>
                <div class="macro-bar-wrap">
                    <div class="macro-bar-label"><span>1yr range: 82.6–84.5</span><span>Current</span></div>
                    <div class="macro-track"><div class="macro-fill" style="--w:72%"></div></div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ══════════════════════════════════════════════════════════
     EXPERT COMMENTARY — DARK
══════════════════════════════════════════════════════════ -->
<section class="section mu-commentary">
    <div class="container">
        <div class="section-header center">
            <span class="section-label" data-aos="fade-up">Advisor Perspectives</span>
            <h2 class="section-title" data-aos="fade-up" data-aos-delay="80">
                What Our Experts <span>Are Watching</span> This Week
            </h2>
            <p class="section-sub" style="margin:0 auto" data-aos="fade-up" data-aos-delay="130">
                Unfiltered views from WealthBridge's investment committee — the signals they're tracking and how it affects your portfolio.
            </p>
        </div>

        <div class="commentary-grid">
            <div class="comment-card" data-aos="fade-up" data-aos-delay="0">
                <div class="comment-topic"><i class="fas fa-chart-line"></i> Equity Strategy</div>
                <div class="comment-quote">"</div>
                <div class="comment-text">
                    The Nifty's valuation at 21× forward earnings is not cheap — but it's not
                    stretched either, given 15%+ earnings growth expectations for FY26. Mid-caps
                    are seeing earnings upgrades after Q4 results. We're adding quality mid-cap
                    exposure on every meaningful dip below 200 DMA.
                </div>
                <div class="comment-author">
                    <div class="comment-avatar">PK</div>
                    <div>
                        <div class="comment-name">Priya Kapoor</div>
                        <div class="comment-role">Chief Investment Officer · WealthBridge</div>
                    </div>
                </div>
            </div>

            <div class="comment-card" data-aos="fade-up" data-aos-delay="100">
                <div class="comment-topic"><i class="fas fa-shield-alt"></i> Debt Strategy</div>
                <div class="comment-quote">"</div>
                <div class="comment-text">
                    With CPI at 4.2% and RBI holding rates, the real rate in India is turning
                    attractive. 10Y G-Sec at 6.84% with a 2–3 cut cycle ahead means significant
                    mark-to-market gains for long-duration bond funds. We're gradually extending
                    duration in client debt portfolios — cautiously.
                </div>
                <div class="comment-author">
                    <div class="comment-avatar">RS</div>
                    <div>
                        <div class="comment-name">Ravi Sharma</div>
                        <div class="comment-role">Chief Advisory Officer · WealthBridge</div>
                    </div>
                </div>
            </div>

            <div class="comment-card" data-aos="fade-up" data-aos-delay="200">
                <div class="comment-topic"><i class="fas fa-coins"></i> Gold &amp; Commodities</div>
                <div class="comment-quote">"</div>
                <div class="comment-text">
                    Gold's rally to ₹96,000 is being driven by central bank buying, USD weakness,
                    and geopolitical uncertainty — all structural tailwinds. We recommend maintaining
                    8–12% gold allocation via Sovereign Gold Bonds for investors who want the
                    2.5% interest plus tax-free maturity benefit.
                </div>
                <div class="comment-author">
                    <div class="comment-avatar">AM</div>
                    <div>
                        <div class="comment-name">Arjun Mehta</div>
                        <div class="comment-role">Co-Founder &amp; CEO · WealthBridge</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ══════════════════════════════════════════════════════════
     NEWSLETTER STRIP — RED
══════════════════════════════════════════════════════════ -->
<div class="mu-newsletter" data-aos="fade-up">
    <div class="container">
        <div class="mu-nl-inner">
            <div>
                <div class="mu-nl-title">Get the Market Update Every Monday Morning</div>
                <p class="mu-nl-desc">
                    Join 45,000+ investors who start their week with WealthBridge's free market
                    briefing — key indices, macro signals, fund recommendations, and one actionable insight.
                </p>
            </div>
            <div class="mu-nl-form">
                <input type="email" class="mu-nl-input" placeholder="Enter your email address">
                <button class="btn btn-white" type="button">
                    Subscribe Free <i class="fas fa-arrow-right"></i>
                </button>
            </div>
        </div>
    </div>
</div>


<!-- ══════════════════════════════════════════════════════════
     LATEST MARKET UPDATES GRID — WHITE
══════════════════════════════════════════════════════════ -->
<section class="section mu-latest">
    <div class="container">
        <div class="section-header">
            <span class="section-label" data-aos="fade-right">Recent Coverage</span>
            <h2 class="section-title" data-aos="fade-up" data-aos-delay="80">
                Latest <span>Market Updates</span>
            </h2>
        </div>

        <div class="latest-grid">

            <div class="lu-card" data-aos="fade-up" data-aos-delay="0">
                <div class="lu-card-top">
                    <div class="lu-chart-mini">
                        <div class="lu-chart-bar up" style="height:55%;animation-delay:.04s"></div>
                        <div class="lu-chart-bar dn" style="height:35%;animation-delay:.08s"></div>
                        <div class="lu-chart-bar up" style="height:70%;animation-delay:.12s"></div>
                        <div class="lu-chart-bar up" style="height:85%;animation-delay:.16s"></div>
                        <div class="lu-chart-bar up" style="height:100%;animation-delay:.20s"></div>
                        <div class="lu-chart-bar up" style="height:90%;animation-delay:.24s"></div>
                        <div class="lu-chart-bar up" style="height:95%;animation-delay:.28s"></div>
                    </div>
                </div>
                <div class="lu-card-body">
                    <div class="lu-tag"><i class="fas fa-chart-line"></i> Equity</div>
                    <div class="lu-title">Nifty Closes at 3-Month High as IT Stocks Lead Rally</div>
                    <div class="lu-excerpt">Technology stocks surged on strong TCS and Infosys Q4 commentary, pulling the broader index to its highest closing level since March 2025.</div>
                    <div class="lu-footer">
                        <span class="lu-author">Research Desk</span>
                        <span class="lu-date">Jun 9, 2025</span>
                    </div>
                    <a href="#" class="lu-read-link">Read More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="lu-card" data-aos="fade-up" data-aos-delay="100">
                <div class="lu-card-top">
                    <div class="lu-chart-mini">
                        <div class="lu-chart-bar up" style="height:60%;animation-delay:.04s"></div>
                        <div class="lu-chart-bar up" style="height:72%;animation-delay:.08s"></div>
                        <div class="lu-chart-bar up" style="height:78%;animation-delay:.12s"></div>
                        <div class="lu-chart-bar up" style="height:88%;animation-delay:.16s"></div>
                        <div class="lu-chart-bar up" style="height:94%;animation-delay:.20s"></div>
                        <div class="lu-chart-bar up" style="height:100%;animation-delay:.24s"></div>
                        <div class="lu-chart-bar up" style="height:96%;animation-delay:.28s"></div>
                    </div>
                </div>
                <div class="lu-card-body">
                    <div class="lu-tag"><i class="fas fa-coins"></i> Gold</div>
                    <div class="lu-title">Gold Breaks ₹96,000 — Sovereign Gold Bonds Now vs Open Market?</div>
                    <div class="lu-excerpt">With gold at an all-time high in rupee terms, we analyse whether to buy MCX gold, SGBs, Gold ETFs, or Gold Savings Funds — and which wins on post-tax returns.</div>
                    <div class="lu-footer">
                        <span class="lu-author">Priya Kapoor, CIO</span>
                        <span class="lu-date">Jun 8, 2025</span>
                    </div>
                    <a href="#" class="lu-read-link">Read More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="lu-card" data-aos="fade-up" data-aos-delay="200">
                <div class="lu-card-top">
                    <div class="lu-chart-mini">
                        <div class="lu-chart-bar neu" style="height:50%;animation-delay:.04s"></div>
                        <div class="lu-chart-bar dn" style="height:40%;animation-delay:.08s"></div>
                        <div class="lu-chart-bar up" style="height:55%;animation-delay:.12s"></div>
                        <div class="lu-chart-bar neu" style="height:50%;animation-delay:.16s"></div>
                        <div class="lu-chart-bar up" style="height:60%;animation-delay:.20s"></div>
                        <div class="lu-chart-bar up" style="height:58%;animation-delay:.24s"></div>
                        <div class="lu-chart-bar up" style="height:65%;animation-delay:.28s"></div>
                    </div>
                </div>
                <div class="lu-card-body">
                    <div class="lu-tag"><i class="fas fa-landmark"></i> Debt / RBI</div>
                    <div class="lu-title">RBI June Policy: Pause With Dovish Tilt — What It Means for Bond Fund Investors</div>
                    <div class="lu-excerpt">RBI held rates but shifted stance to "neutral" — signalling rate cuts could come in Q2 FY26. Here's how to position your debt portfolio for the easing cycle.</div>
                    <div class="lu-footer">
                        <span class="lu-author">Ravi Sharma</span>
                        <span class="lu-date">Jun 7, 2025</span>
                    </div>
                    <a href="#" class="lu-read-link">Read More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="lu-card" data-aos="fade-up" data-aos-delay="0">
                <div class="lu-card-top">
                    <div class="lu-chart-mini">
                        <div class="lu-chart-bar up" style="height:45%;animation-delay:.04s"></div>
                        <div class="lu-chart-bar up" style="height:58%;animation-delay:.08s"></div>
                        <div class="lu-chart-bar up" style="height:66%;animation-delay:.12s"></div>
                        <div class="lu-chart-bar up" style="height:72%;animation-delay:.16s"></div>
                        <div class="lu-chart-bar up" style="height:80%;animation-delay:.20s"></div>
                        <div class="lu-chart-bar dn" style="height:68%;animation-delay:.24s"></div>
                        <div class="lu-chart-bar up" style="height:76%;animation-delay:.28s"></div>
                    </div>
                </div>
                <div class="lu-card-body">
                    <div class="lu-tag"><i class="fas fa-globe"></i> Global</div>
                    <div class="lu-title">Fed Signals: How US Rate Cut Expectations Are Reshaping Emerging Market Flows</div>
                    <div class="lu-excerpt">Two Fed cuts priced in for 2025 are softening the dollar and improving EM fund flows. India stands to be a primary beneficiary given its macro fundamentals.</div>
                    <div class="lu-footer">
                        <span class="lu-author">Research Desk</span>
                        <span class="lu-date">Jun 6, 2025</span>
                    </div>
                    <a href="#" class="lu-read-link">Read More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="lu-card" data-aos="fade-up" data-aos-delay="100">
                <div class="lu-card-top">
                    <div class="lu-chart-mini">
                        <div class="lu-chart-bar up" style="height:50%;animation-delay:.04s"></div>
                        <div class="lu-chart-bar up" style="height:62%;animation-delay:.08s"></div>
                        <div class="lu-chart-bar up" style="height:74%;animation-delay:.12s"></div>
                        <div class="lu-chart-bar up" style="height:70%;animation-delay:.16s"></div>
                        <div class="lu-chart-bar up" style="height:84%;animation-delay:.20s"></div>
                        <div class="lu-chart-bar up" style="height:90%;animation-delay:.24s"></div>
                        <div class="lu-chart-bar up" style="height:100%;animation-delay:.28s"></div>
                    </div>
                </div>
                <div class="lu-card-body">
                    <div class="lu-tag"><i class="fas fa-city"></i> Real Estate</div>
                    <div class="lu-title">India REIT Q4 FY25 Results: Distributions Up 12% — Is the Sector Back on Track?</div>
                    <div class="lu-excerpt">Nexus, Mindspace, and Embassy REITs all delivered distribution growth above 10% in Q4. Office absorption remains healthy at 68M sqft. Valuations look attractive post correction.</div>
                    <div class="lu-footer">
                        <span class="lu-author">Deepa Goswami</span>
                        <span class="lu-date">Jun 5, 2025</span>
                    </div>
                    <a href="#" class="lu-read-link">Read More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="lu-card" data-aos="fade-up" data-aos-delay="200">
                <div class="lu-card-top">
                    <div class="lu-chart-mini">
                        <div class="lu-chart-bar dn" style="height:60%;animation-delay:.04s"></div>
                        <div class="lu-chart-bar dn" style="height:50%;animation-delay:.08s"></div>
                        <div class="lu-chart-bar dn" style="height:42%;animation-delay:.12s"></div>
                        <div class="lu-chart-bar up" style="height:52%;animation-delay:.16s"></div>
                        <div class="lu-chart-bar dn" style="height:44%;animation-delay:.20s"></div>
                        <div class="lu-chart-bar up" style="height:58%;animation-delay:.24s"></div>
                        <div class="lu-chart-bar up" style="height:64%;animation-delay:.28s"></div>
                    </div>
                </div>
                <div class="lu-card-body">
                    <div class="lu-tag"><i class="fas fa-oil-can"></i> Commodities</div>
                    <div class="lu-title">Crude at $80: OPEC+ Discipline Meets Weak US Demand — What's the Range for FY26?</div>
                    <div class="lu-excerpt">With OPEC maintaining cuts but US shale ramping up, $75–$85 appears to be the stable range. Below $80 is bullish for India inflation and current account. Above $90 is the risk scenario.</div>
                    <div class="lu-footer">
                        <span class="lu-author">Research Desk</span>
                        <span class="lu-date">Jun 4, 2025</span>
                    </div>
                    <a href="#" class="lu-read-link">Read More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

        </div>

        <!-- View All -->
        <div style="text-align:center;margin-top:36px" data-aos="fade-up">
            <a href="blog" class="btn btn-outline" style="border-color:var(--gray-200);color:var(--dark)">
                View All Market Updates <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </div>
</section>


<!-- ══════════════════════════════════════════════════════════
     RELATED — GRAY-50
══════════════════════════════════════════════════════════ -->
<section class="section mu-related">
    <div class="container">
        <div class="section-header">
            <span class="section-label" data-aos="fade-right">Also Explore</span>
            <h2 class="section-title" data-aos="fade-up" data-aos-delay="80">
                More from <span>WealthBridge Insights</span>
            </h2>
        </div>

        <div class="related-grid">
            <a href="blog" class="rel-card" data-aos="fade-up" data-aos-delay="0">
                <div class="rc-icon"><i class="fas fa-pen-nib"></i></div>
                <h4>Blog</h4>
                <p>In-depth personal finance articles — investment principles, tax strategies, goal planning.</p>
                <span class="rc-link">Explore <i class="fas fa-arrow-right"></i></span>
            </a>
            <a href="news" class="rel-card" data-aos="fade-up" data-aos-delay="80">
                <div class="rc-icon"><i class="fas fa-newspaper"></i></div>
                <h4>News</h4>
                <p>Breaking financial news and regulatory updates affecting your investments.</p>
                <span class="rc-link">Explore <i class="fas fa-arrow-right"></i></span>
            </a>
            <a href="events-webinars" class="rel-card" data-aos="fade-up" data-aos-delay="160">
                <div class="rc-icon"><i class="fas fa-calendar-alt"></i></div>
                <h4>Events &amp; Webinars</h4>
                <p>Free investor education sessions, portfolio reviews, and expert panel discussions.</p>
                <span class="rc-link">Explore <i class="fas fa-arrow-right"></i></span>
            </a>
            <a href="investment-calculator" class="rel-card" data-aos="fade-up" data-aos-delay="240">
                <div class="rc-icon"><i class="fas fa-calculator"></i></div>
                <h4>Investment Calculator</h4>
                <p>SIP planner, goal calculator, retirement estimator — all free and instant.</p>
                <span class="rc-link">Explore <i class="fas fa-arrow-right"></i></span>
            </a>
        </div>
    </div>
</section>


<!-- Page JS -->
<script>
(function () {

    /* Animate performance table bars */
    function observeFills(sel) {
        var els = document.querySelectorAll(sel);
        if (!els.length) return;
        var obs = new IntersectionObserver(function (entries) {
            entries.forEach(function (e) {
                if (e.isIntersecting) { e.target.classList.add('animated'); obs.unobserve(e.target); }
            });
        }, { threshold: 0.2 });
        els.forEach(function (el) { obs.observe(el); });
    }
    observeFills('.pt-bar');
    observeFills('.macro-fill');

    /* Animate sparkline bars on scroll */
    var sparkBars = document.querySelectorAll('.muh-spark-bar');
    sparkBars.forEach(function (bar, i) {
        bar.style.animationDelay = (i * 0.06) + 's';
    });

    /* Newsletter form */
    var nlBtn = document.querySelector('.mu-nl-form .btn');
    if (nlBtn) {
        nlBtn.addEventListener('click', function () {
            var input = document.querySelector('.mu-nl-input');
            if (input && input.value) {
                nlBtn.textContent = 'Subscribed ✓';
                nlBtn.style.background = '#16a34a';
                nlBtn.style.color = 'white';
                input.value = '';
            }
        });
    }

})();
</script>

<?php include_once ('elements/footer.php'); ?>