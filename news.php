<?php include_once ('elements/header.php'); ?>

    <!-- Custom CSS -->
    <link href="<?php echo UrlHelper::asset('css/news.css'); ?>" rel="stylesheet">

    
<!-- BREADCRUMB -->
<div class="bc-bar">
  <div class="container">
    <div class="breadcrumb">
      <a href="index"><i class="fas fa-home"></i> Home</a><span>›</span>
      <a href="#">Insights</a><span>›</span>
      <span class="cur">News</span>
    </div>
  </div>
</div>

<!-- ═══ LIVE MARKET TICKER ═══ -->
<div class="ticker-bar">
  <div class="ticker-label">Live Markets</div>
  <div class="ticker-track" id="tickerTrack">
    <!-- populated by JS -->
  </div>
</div>

<!-- ═══ HERO ═══ -->
<section class="nw-hero">
  <div class="h-bg"></div>
  <div class="h-grid"></div>
  <div class="h-vline l1"></div>
  <div class="h-vline l2"></div>
  <div class="container">
    <div class="hero-inner">
      <div>
        <div class="h-label">Insights &nbsp;·&nbsp; News &amp; Market Intelligence</div>
        <h1 class="h-title">Markets Move.<br><em>Stay Ahead</em>with WealthBridge.</h1>
        <p class="h-sub">India's most impactful financial news — budget updates, RBI decisions, market moves, tax law changes — analysed through one lens: what does this mean for your wealth?</p>
        <div class="h-actions">
          <a href="#news-main" class="btn btn-primary">Read Latest News <i class="fas fa-arrow-right"></i></a>
          <a href="#newsletter" class="btn btn-ghost">Get Weekly Digest <i class="fas fa-envelope"></i></a>
        </div>
        <div class="h-stats">
          <div class="h-stat"><div class="hs-n" data-counter="240" data-suffix="+">240+</div><div class="hs-l">Articles Published</div></div>
          <div class="h-stat"><div class="hs-n" data-counter="52000" data-suffix="+">52K+</div><div class="hs-l">Monthly Readers</div></div>
          <div class="h-stat"><div class="hs-n" data-counter="14" data-suffix="K+ subs">14K</div><div class="hs-l">Newsletter Subscribers</div></div>
        </div>
      </div>

      <div class="hero-visual">
        <div class="h-float f1">
          <div class="hfl">Breaking</div>
          <div class="hfv">RBI Policy <span>Live</span></div>
          <div class="hfs">Rate decision today</div>
        </div>
        <div class="hv-card">
          <div class="hv-thumb">
            <div class="hv-thumb-glow"></div>
            <i class="fas fa-chart-line hv-thumb-icon"></i>
            <span class="hv-thumb-cat">Budget 2025</span>
            <span class="hv-thumb-badge"><span class="hv-bdot"></span> Breaking</span>
          </div>
          <div class="hv-body">
            <div class="hv-meta">
              <span class="hv-cat-tag">Tax Policy</span>
              <span>·</span><span>June 9, 2025</span>
              <span>·</span><span>5 min read</span>
            </div>
            <div class="hv-title">New Tax Regime Default: What Budget 2025 Means for Your FY26 Returns</div>
            <div class="hv-excerpt">The Finance Ministry's shift to new regime as default raises critical questions for investors who have built 80C and 80D portfolios. We break down the numbers.</div>
            <div class="hv-footer">
              <div class="hv-author">
                <div class="hv-author-av">RN</div>
                <span class="hv-author-name">Rajesh Nair · Chief Tax Advisor</span>
              </div>
              <a href="#" class="hv-read-link">Read <i class="fas fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <div class="h-float f2">
          <div class="hfl">Nifty 50</div>
          <div class="hfv">24,612 <span>▲</span></div>
          <div class="hfs">+0.84% today</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ FILTER BAR ═══ -->
<div class="nw-filter">
  <div class="container">
    <div class="filter-inner">
      <div class="filter-tabs">
        <button class="filter-tab active" data-cat="all">All News</button>
        <button class="filter-tab" data-cat="budget">Budget &amp; Tax</button>
        <button class="filter-tab" data-cat="rbi">RBI &amp; Monetary</button>
        <button class="filter-tab" data-cat="markets">Markets</button>
        <button class="filter-tab" data-cat="realestate">Real Estate</button>
        <button class="filter-tab" data-cat="mutual">Mutual Funds</button>
        <button class="filter-tab" data-cat="insurance">Insurance</button>
      </div>
      <div class="filter-right">
        <div class="search-box">
          <i class="fas fa-search"></i>
          <input type="text" placeholder="Search news…">
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ═══ FEATURED STORY ═══ -->
<div class="nw-featured">
  <div class="container">
    <div class="feat-banner reveal">
      <div class="feat-bg"></div>
      <div class="feat-content">
        <div class="feat-eyebrow">Cover Story · Budget 2025</div>
        <h2 class="feat-title">Union Budget 2025-26: The Five Decisions That Reshape Every Indian Investor's Portfolio</h2>
        <p class="feat-excerpt">From the revised LTCG threshold to the NPS employer contribution ceiling removal — WealthBridge's senior advisors dissect each Budget announcement and its direct impact on your tax plan, SIPs, and real estate investments.</p>
        <div class="feat-meta">
          <div class="feat-meta-item"><i class="fas fa-user"></i><span>By <strong>Vikram Kapoor &amp; Rajesh Nair</strong></span></div>
          <div class="feat-meta-item"><i class="fas fa-calendar"></i><span><strong>June 7, 2025</strong></span></div>
          <div class="feat-meta-item"><i class="fas fa-clock"></i><span><strong>12 min read</strong></span></div>
          <div class="feat-meta-item"><i class="fas fa-eye"></i><span><strong>18,400 reads</strong></span></div>
        </div>
        <div class="feat-actions">
          <a href="#" class="btn btn-primary">Read Full Analysis <i class="fas fa-arrow-right"></i></a>
          <a href="#" class="btn btn-ghost">Listen as Podcast <i class="fas fa-headphones"></i></a>
        </div>
      </div>
      <div class="feat-visual">
        <i class="fas fa-landmark feat-visual-icon"></i>
        <div class="feat-stat-block">
          <div class="feat-stat-n">₹1.5L</div>
          <div class="feat-stat-l">80C limit — unchanged for FY26</div>
          <div class="feat-stat-badge"><i class="fas fa-arrow-up" style="font-size:9px"></i> NPS ceiling removed</div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ═══ MAIN NEWS + SIDEBAR ═══ -->
<div class="nw-main" id="news-main">
  <div class="container">
    <div class="news-layout">

      <!-- ARTICLES -->
      <div>
        <div class="sec-hdr">
          <div class="label reveal">Latest Stories</div>
          <h2 class="sec-title reveal d1">This Week in <span>Financial India</span></h2>
        </div>
        <div class="articles-grid">

          <!-- Wide card -->
          <div class="art-card wide reveal">
            <div class="art-thumb">
              <div class="art-thumb-glow"></div>
              <i class="fas fa-university art-thumb-icon"></i>
              <span class="art-cat-pill">RBI Policy</span>
            </div>
            <div class="art-body">
              <div class="art-date">June 9, 2025 · 8 min read</div>
              <div class="art-title">RBI Holds Repo Rate at 6.25%: What Borrowers and Fixed-Income Investors Should Do Now</div>
              <div class="art-excerpt">The Monetary Policy Committee's unanimous hold decision signals continued caution on inflation. Our analysis covers the impact on home loan EMIs, FD rates, and debt fund allocations — and what to expect in August.</div>
              <div class="art-footer">
                <div class="art-author"><div class="art-av">AS</div><span class="art-author-name">Ananya Sharma · CIO</span></div>
                <a href="#" class="art-read-link">Read Analysis <i class="fas fa-arrow-right"></i></a>
              </div>
            </div>
          </div>

          <!-- Card 1 -->
          <div class="art-card reveal">
            <div class="art-thumb" style="background:linear-gradient(135deg,#0e1810,#1a2818)">
              <div class="art-thumb-glow"></div>
              <i class="fas fa-chart-bar art-thumb-icon"></i>
              <span class="art-cat-pill">Mutual Funds</span>
            </div>
            <div class="art-body">
              <div class="art-date">June 8, 2025 · 5 min read</div>
              <div class="art-title">Nifty Midcap 150 Up 34% in FY25: Is the Rally Sustainable or Stretched?</div>
              <div class="art-excerpt">Mid-cap valuations are now at 1.2× premium to large-caps — historically a warning sign. We look at what this means for existing mid-cap SIP investors and whether new allocations make sense.</div>
              <div class="art-footer">
                <div class="art-author"><div class="art-av">RN</div><span class="art-author-name">Rahul Nair · Portfolio Manager</span></div>
                <a href="#" class="art-read-link">Read <i class="fas fa-arrow-right"></i></a>
              </div>
            </div>
          </div>

          <!-- Card 2 -->
          <div class="art-card reveal d1">
            <div class="art-thumb" style="background:linear-gradient(135deg,#180a08,#28120e)">
              <div class="art-thumb-glow"></div>
              <i class="fas fa-home art-thumb-icon"></i>
              <span class="art-cat-pill">Real Estate</span>
            </div>
            <div class="art-body">
              <div class="art-date">June 7, 2025 · 6 min read</div>
              <div class="art-title">Mumbai Property Prices Up 14% YoY — and Three Micro-Markets Still Offer Value</div>
              <div class="art-excerpt">While Worli and Bandra have priced out most investors, specific corridors in Thane West, Navi Mumbai, and Panvel still offer 15–18% IRR potential over a 5-year hold. Here's the data.</div>
              <div class="art-footer">
                <div class="art-author"><div class="art-av">PM</div><span class="art-author-name">Priya Mehta · RE Head</span></div>
                <a href="#" class="art-read-link">Read <i class="fas fa-arrow-right"></i></a>
              </div>
            </div>
          </div>

          <!-- Card 3 -->
          <div class="art-card reveal">
            <div class="art-thumb" style="background:linear-gradient(135deg,#0a0a18,#12122a)">
              <div class="art-thumb-glow"></div>
              <i class="fas fa-file-invoice-dollar art-thumb-icon"></i>
              <span class="art-cat-pill">Tax</span>
            </div>
            <div class="art-body">
              <div class="art-date">June 6, 2025 · 7 min read</div>
              <div class="art-title">LTCG Tax Harvesting Window Opens: How to Reset ₹1.25L of Equity Gains Tax-Free Before June 30</div>
              <div class="art-excerpt">With financial year end approaching, this is the annual window to book long-term gains tax-free, repurchase the same units, and permanently reduce future LTCG liability. Step-by-step guide inside.</div>
              <div class="art-footer">
                <div class="art-author"><div class="art-av">RN</div><span class="art-author-name">Rajesh Nair · Tax Head</span></div>
                <a href="#" class="art-read-link">Read <i class="fas fa-arrow-right"></i></a>
              </div>
            </div>
          </div>

          <!-- Card 4 -->
          <div class="art-card reveal d1">
            <div class="art-thumb" style="background:linear-gradient(135deg,#0a180a,#12281a)">
              <div class="art-thumb-glow"></div>
              <i class="fas fa-heartbeat art-thumb-icon"></i>
              <span class="art-cat-pill">Insurance</span>
            </div>
            <div class="art-body">
              <div class="art-date">June 5, 2025 · 4 min read</div>
              <div class="art-title">IRDAI's New Premium Pricing Rules: Health Insurance Costs Set to Rise 8–12% from July 2025</div>
              <div class="art-excerpt">The new IRDAI risk-based pricing framework takes effect Q2 FY26. If you haven't renewed or upgraded your health plan, you have 6 weeks to lock in current rates.</div>
              <div class="art-footer">
                <div class="art-author"><div class="art-av">SK</div><span class="art-author-name">Suresh Kumar · Insurance Head</span></div>
                <a href="#" class="art-read-link">Read <i class="fas fa-arrow-right"></i></a>
              </div>
            </div>
          </div>

          <!-- Card 5 -->
          <div class="art-card reveal">
            <div class="art-thumb" style="background:linear-gradient(135deg,#12100a,#221e10)">
              <div class="art-thumb-glow"></div>
              <i class="fas fa-umbrella-beach art-thumb-icon"></i>
              <span class="art-cat-pill">Retirement</span>
            </div>
            <div class="art-body">
              <div class="art-date">June 4, 2025 · 5 min read</div>
              <div class="art-title">NPS Returns vs PPF in FY25: The Numbers That Finally Settle the Debate</div>
              <div class="art-excerpt">NPS Tier-1 Scheme E (equity) returned 12.8% in FY25 vs PPF's 7.1%. After factoring in the 80CCD(1B) deduction, NPS delivered 19.4% effective tax-adjusted return for a 30% slab investor.</div>
              <div class="art-footer">
                <div class="art-author"><div class="art-av">AT</div><span class="art-author-name">Arun Trivedi · Retirement Head</span></div>
                <a href="#" class="art-read-link">Read <i class="fas fa-arrow-right"></i></a>
              </div>
            </div>
          </div>

          <!-- Card 6 -->
          <div class="art-card reveal d1">
            <div class="art-thumb" style="background:linear-gradient(135deg,#0a1418,#122030)">
              <div class="art-thumb-glow"></div>
              <i class="fas fa-globe art-thumb-icon"></i>
              <span class="art-cat-pill">NRI</span>
            </div>
            <div class="art-body">
              <div class="art-date">June 3, 2025 · 6 min read</div>
              <div class="art-title">FEMA Update 2025: RBI's New NRI Investment Rules — What's Changed for Property and MF Purchases</div>
              <div class="art-excerpt">RBI's updated FEMA circular streamlines NRI investment in Indian mutual funds and relaxes repatriation limits. Here's what changed, what still requires advance approval, and what to tell your CA.</div>
              <div class="art-footer">
                <div class="art-author"><div class="art-av">DV</div><span class="art-author-name">Deepa Venkataraman · NRI Head</span></div>
                <a href="#" class="art-read-link">Read <i class="fas fa-arrow-right"></i></a>
              </div>
            </div>
          </div>

        </div>

        <!-- Load more -->
        <div style="text-align:center;margin-top:36px" class="reveal">
          <button class="btn btn-outline">Load More Stories <i class="fas fa-chevron-down"></i></button>
        </div>
      </div>

      <!-- SIDEBAR -->
      <aside class="news-sidebar">

        <!-- Trending -->
        <div class="sb-section reveal">
          <div class="sb-head">
            <span class="sb-head-title">Trending Now</span>
            <a href="#" class="sb-head-link">All <i class="fas fa-chevron-right" style="font-size:10px"></i></a>
          </div>
          <div class="trending-list">
            <div class="trending-item">
              <div class="trending-num">1</div>
              <div>
                <div class="trending-title">RBI Rate Hold: Impact on Home Loan EMIs</div>
                <div class="trending-meta">4,210 reads · 2 hrs ago</div>
              </div>
            </div>
            <div class="trending-item">
              <div class="trending-num">2</div>
              <div>
                <div class="trending-title">LTCG Harvesting: Step-by-Step Guide</div>
                <div class="trending-meta">3,880 reads · 1 day ago</div>
              </div>
            </div>
            <div class="trending-item">
              <div class="trending-num">3</div>
              <div>
                <div class="trending-title">Health Insurance Premium Hike — Act Now</div>
                <div class="trending-meta">3,105 reads · 2 days ago</div>
              </div>
            </div>
            <div class="trending-item">
              <div class="trending-num">4</div>
              <div>
                <div class="trending-title">Nifty Midcap Rally: Buy, Hold or Trim?</div>
                <div class="trending-meta">2,640 reads · 2 days ago</div>
              </div>
            </div>
            <div class="trending-item">
              <div class="trending-num">5</div>
              <div>
                <div class="trending-title">Budget 2025: 5 Changes to Your Portfolio</div>
                <div class="trending-meta">18,400 reads · 3 days ago</div>
              </div>
            </div>
          </div>
        </div>

        <!-- Markets -->
        <div class="sb-section reveal d1">
          <div class="sb-head">
            <span class="sb-head-title">Market Snapshot</span>
            <span style="font-size:11px;color:var(--gray-400);font-family:var(--font-mono)">As of 3:30 PM IST</span>
          </div>
          <div class="market-list">
            <div class="market-row">
              <div><div class="market-name">Nifty 50</div><div class="market-sub">NSE</div></div>
              <div class="market-right"><div class="market-price">24,612</div><div class="market-change up">▲ +204 (+0.84%)</div></div>
            </div>
            <div class="market-row">
              <div><div class="market-name">Sensex</div><div class="market-sub">BSE</div></div>
              <div class="market-right"><div class="market-price">81,148</div><div class="market-change up">▲ +648 (+0.80%)</div></div>
            </div>
            <div class="market-row">
              <div><div class="market-name">Nifty Bank</div><div class="market-sub">NSE</div></div>
              <div class="market-right"><div class="market-price">52,340</div><div class="market-change dn">▼ −118 (−0.22%)</div></div>
            </div>
            <div class="market-row">
              <div><div class="market-name">Gold</div><div class="market-sub">MCX · ₹/10g</div></div>
              <div class="market-right"><div class="market-price">73,840</div><div class="market-change up">▲ +420 (+0.57%)</div></div>
            </div>
            <div class="market-row">
              <div><div class="market-name">USD/INR</div><div class="market-sub">Forex</div></div>
              <div class="market-right"><div class="market-price">83.62</div><div class="market-change dn">▼ −0.14 (−0.17%)</div></div>
            </div>
            <div class="market-row">
              <div><div class="market-name">10Y G-Sec</div><div class="market-sub">Yield</div></div>
              <div class="market-right"><div class="market-price">6.96%</div><div class="market-change dn">▼ −2 bps</div></div>
            </div>
          </div>
        </div>

        <!-- Topics -->
        <div class="sb-section reveal d2">
          <div class="sb-head"><span class="sb-head-title">Browse by Topic</span></div>
          <div class="topics-inner">
            <span class="topic-tag active">All</span>
            <span class="topic-tag">Budget</span>
            <span class="topic-tag">RBI Policy</span>
            <span class="topic-tag">LTCG</span>
            <span class="topic-tag">NPS</span>
            <span class="topic-tag">SIP</span>
            <span class="topic-tag">Real Estate</span>
            <span class="topic-tag">Health Insurance</span>
            <span class="topic-tag">ELSS</span>
            <span class="topic-tag">NRI</span>
            <span class="topic-tag">PPF</span>
            <span class="topic-tag">80C</span>
            <span class="topic-tag">Retirement</span>
            <span class="topic-tag">Forex</span>
          </div>
        </div>

        <!-- Newsletter mini -->
        <div class="sb-section reveal d3" id="newsletter-mini">
          <div class="sb-head"><span class="sb-head-title">Weekly Digest</span></div>
          <div class="sb-newsletter">
            <div class="sb-nl-title">Every market move. Every tax change.</div>
            <div class="sb-nl-desc">Get our curated weekly brief — 5 minutes, every Sunday morning, no noise.</div>
            <input class="sb-nl-input" type="email" placeholder="Your email address">
            <button class="btn btn-primary" style="width:100%;justify-content:center">Subscribe <i class="fas fa-arrow-right"></i></button>
            <p style="font-size:11.5px;color:var(--gray-400);margin-top:8px;text-align:center"><i class="fas fa-lock" style="margin-right:4px"></i>14,000+ subscribers · No spam</p>
          </div>
        </div>

      </aside>
    </div>
  </div>
</div>

<!-- ═══ MARKET DEEP-DIVE ═══ -->
<section class="section nw-market">
  <div class="container">
    <div class="sec-hdr center">
      <div class="label reveal">Data Intelligence</div>
      <h2 class="sec-title reveal d1">Market <span>Deep Dive</span></h2>
      <p class="sec-sub reveal d2" style="margin:0 auto">Numbers that matter for your portfolio — curated by WealthBridge's research team every week.</p>
    </div>
    <div class="market-deep-grid">

      <div class="mdd-card reveal">
        <div class="mdd-head">
          <div class="mdd-icon"><i class="fas fa-chart-line"></i></div>
          <div><div class="mdd-cat">Equity Markets</div><div class="mdd-card-title">Nifty 50 FY25 Scorecard</div></div>
        </div>
        <div class="mdd-stat-row"><span class="mdd-stat-label">FY25 Returns</span><span class="mdd-stat-val up">+28.4%</span></div>
        <div class="mdd-stat-row"><span class="mdd-stat-label">Current P/E (TTM)</span><span class="mdd-stat-val neu">22.6×</span></div>
        <div class="mdd-stat-row"><span class="mdd-stat-label">10yr Avg P/E</span><span class="mdd-stat-val neu">19.8×</span></div>
        <div class="mdd-stat-row"><span class="mdd-stat-label">FII Net Flows (May)</span><span class="mdd-stat-val up">+₹14,800Cr</span></div>
        <div class="mdd-stat-row"><span class="mdd-stat-label">DII Net Flows (May)</span><span class="mdd-stat-val up">+₹32,640Cr</span></div>
        <div class="mdd-footer"><a href="#" class="mdd-read-more">Full Market Report <i class="fas fa-arrow-right"></i></a></div>
      </div>

      <div class="mdd-card reveal d1">
        <div class="mdd-head">
          <div class="mdd-icon"><i class="fas fa-home"></i></div>
          <div><div class="mdd-cat">Real Estate</div><div class="mdd-card-title">Residential Price Tracker</div></div>
        </div>
        <div class="mdd-stat-row"><span class="mdd-stat-label">Bengaluru (avg. PSF)</span><span class="mdd-stat-val up">₹7,840 (+18%)</span></div>
        <div class="mdd-stat-row"><span class="mdd-stat-label">Mumbai MMR (avg. PSF)</span><span class="mdd-stat-val up">₹14,200 (+14%)</span></div>
        <div class="mdd-stat-row"><span class="mdd-stat-label">Hyderabad (avg. PSF)</span><span class="mdd-stat-val up">₹6,960 (+22%)</span></div>
        <div class="mdd-stat-row"><span class="mdd-stat-label">Pune (avg. PSF)</span><span class="mdd-stat-val up">₹7,120 (+12%)</span></div>
        <div class="mdd-stat-row"><span class="mdd-stat-label">Delhi NCR (avg. PSF)</span><span class="mdd-stat-val up">₹8,640 (+9%)</span></div>
        <div class="mdd-footer"><a href="#" class="mdd-read-more">City-by-City Report <i class="fas fa-arrow-right"></i></a></div>
      </div>

      <div class="mdd-card reveal d2">
        <div class="mdd-head">
          <div class="mdd-icon"><i class="fas fa-piggy-bank"></i></div>
          <div><div class="mdd-cat">Fixed Income</div><div class="mdd-card-title">Rates &amp; Yields Tracker</div></div>
        </div>
        <div class="mdd-stat-row"><span class="mdd-stat-label">RBI Repo Rate</span><span class="mdd-stat-val neu">6.25%</span></div>
        <div class="mdd-stat-row"><span class="mdd-stat-label">10-Year G-Sec Yield</span><span class="mdd-stat-val neu">6.96%</span></div>
        <div class="mdd-stat-row"><span class="mdd-stat-label">Best 3Y Bank FD Rate</span><span class="mdd-stat-val neu">7.50%</span></div>
        <div class="mdd-stat-row"><span class="mdd-stat-label">PPF Rate (FY26 Q1)</span><span class="mdd-stat-val neu">7.10%</span></div>
        <div class="mdd-stat-row"><span class="mdd-stat-label">SSY Rate (FY26 Q1)</span><span class="mdd-stat-val up">8.20%</span></div>
        <div class="mdd-footer"><a href="#" class="mdd-read-more">Debt Market Analysis <i class="fas fa-arrow-right"></i></a></div>
      </div>

    </div>
  </div>
</section>

<!-- ═══ ANALYSIS & OPINION ═══ -->
<section class="section nw-analysis">
  <div class="container">
    <div class="sec-hdr">
      <div class="label reveal">WealthBridge Analysis</div>
      <h2 class="sec-title reveal d1">Beyond the Headlines — <span>What It Means for You</span></h2>
      <p class="sec-sub reveal d2">Our advisors cut through the noise. Here's what this week's market news actually means for your wealth plan.</p>
    </div>
    <div class="analysis-grid">

      <div class="analysis-card reveal">
        <div class="ac-icon"><i class="fas fa-file-invoice-dollar"></i></div>
        <div class="ac-body">
          <div class="ac-cat">Tax Analysis</div>
          <div class="ac-title">After Budget 2025: Should You Switch to the New Tax Regime?</div>
          <div class="ac-excerpt">The break-even analysis has shifted. We model both regimes for five income brackets from ₹10L to ₹50L — and show exactly at what deduction level the old regime wins.</div>
          <div class="ac-meta">
            <div class="ac-author"><div class="ac-author-av">RN</div><span>Rajesh Nair</span></div>
            <span class="ac-date">June 7, 2025</span>
            <a href="#" class="ac-read">Read <i class="fas fa-arrow-right"></i></a>
          </div>
        </div>
      </div>

      <div class="analysis-card reveal d1">
        <div class="ac-icon"><i class="fas fa-chart-bar"></i></div>
        <div class="ac-body">
          <div class="ac-cat">Portfolio Strategy</div>
          <div class="ac-title">Mid-Cap Caution: When to Trim a Position That's Up 45%</div>
          <div class="ac-excerpt">Mid-cap funds delivered exceptional returns in FY25 — but valuation premium to large-caps is now at a 5-year high. We analyse rebalancing triggers and tax-efficient exit strategies.</div>
          <div class="ac-meta">
            <div class="ac-author"><div class="ac-author-av">AS</div><span>Ananya Sharma</span></div>
            <span class="ac-date">June 6, 2025</span>
            <a href="#" class="ac-read">Read <i class="fas fa-arrow-right"></i></a>
          </div>
        </div>
      </div>

      <div class="analysis-card reveal d2">
        <div class="ac-icon"><i class="fas fa-home"></i></div>
        <div class="ac-body">
          <div class="ac-cat">Real Estate</div>
          <div class="ac-title">The Real Estate Affordability Cliff: Which Cities Have Priced Out the Middle Class?</div>
          <div class="ac-excerpt">Price-to-income ratios across Tier-1 cities have hit multi-decade highs. We identify which markets still offer viable entry points and which have structurally moved beyond most buyers.</div>
          <div class="ac-meta">
            <div class="ac-author"><div class="ac-author-av">PM</div><span>Priya Mehta</span></div>
            <span class="ac-date">June 5, 2025</span>
            <a href="#" class="ac-read">Read <i class="fas fa-arrow-right"></i></a>
          </div>
        </div>
      </div>

      <div class="analysis-card reveal d3">
        <div class="ac-icon"><i class="fas fa-umbrella-beach"></i></div>
        <div class="ac-body">
          <div class="ac-cat">Retirement Planning</div>
          <div class="ac-title">India's Retirement Crisis: Why ₹1 Crore is No Longer Enough — and What Is</div>
          <div class="ac-excerpt">With healthcare inflation at 12% and urban living costs rising 7% annually, the conventional ₹1Cr retirement corpus falls short by 15 years for a 60-year-old retiring today. The new math.</div>
          <div class="ac-meta">
            <div class="ac-author"><div class="ac-author-av">AT</div><span>Arun Trivedi</span></div>
            <span class="ac-date">June 4, 2025</span>
            <a href="#" class="ac-read">Read <i class="fas fa-arrow-right"></i></a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ═══ NEWSLETTER STRIP ═══ -->
<div class="nw-nl-strip reveal" id="newsletter">
  <div class="container">
    <div class="nl-inner">
      <div>
        <div class="nl-title">Get the WealthBridge Weekly Digest</div>
        <p class="nl-desc">Every Sunday morning: the 5 financial events that matter most to Indian investors — tax changes, market moves, RBI decisions — with our advisor's take on each. Under 5 minutes.</p>
      </div>
      <div>
        <div class="nl-form">
          <input class="nl-inp" type="email" placeholder="Your email address">
          <button class="btn btn-white">Subscribe Free <i class="fas fa-arrow-right"></i></button>
        </div>
        <p style="font-size:11.5px;color:rgba(255,255,255,.5);margin-top:10px;text-align:right"><i class="fas fa-lock" style="margin-right:4px"></i>14,000+ subscribers · Unsubscribe anytime</p>
      </div>
    </div>
  </div>
</div>

<!-- ═══ CTA ═══ -->
<section class="nw-cta" id="contact">
  <div class="container">
    <div class="cta-inner">
      <div class="label reveal" style="justify-content:center">Knowledge → Action</div>
      <h2 class="cta-title reveal d1">
        Reading the News is the First Step.<br>
        <span>Acting on It Correctly is the Second.</span>
      </h2>
      <p class="cta-desc reveal d2">
        Every article on this page reflects a real decision your money faces. Our advisors turn
        news into action — for your specific portfolio, tax situation, and goals. Free consultation, no commitment.
      </p>
      <div class="cta-actions reveal d2">
        <a href="contact" class="btn btn-primary">Book Free Advisory Call <i class="fas fa-arrow-right"></i></a>
        <a href="events-webinar" class="btn btn-ghost"><i class="fas fa-calendar"></i> Attend a Free Webinar</a>
      </div>
      <div class="cta-trust reveal d3">
        <div class="ct-item"><i class="fas fa-check-circle"></i> SEBI Registered Advisor</div>
        <div class="ct-item"><i class="fas fa-check-circle"></i> 240+ Articles Published</div>
        <div class="ct-item"><i class="fas fa-check-circle"></i> 52,000+ Monthly Readers</div>
        <div class="ct-item"><i class="fas fa-check-circle"></i> Zero Sponsored Content</div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ RELATED ═══ -->
<section class="section nw-related">
  <div class="container">
    <div class="sec-hdr reveal">
      <div class="label">Also in Insights</div>
      <h2 class="sec-title">Related <span>Resources</span></h2>
    </div>
    <div class="related-grid">
      <a href="faq" class="rel-card reveal">
        <div class="rc-icon"><i class="fas fa-question-circle"></i></div>
        <h4>FAQ</h4>
        <p>In-depth answers to the questions behind every news story we cover.</p>
        <span class="rc-link">Read FAQ <i class="fas fa-arrow-right"></i></span>
      </a>
      <a href="events-webinar" class="rel-card reveal d1">
        <div class="rc-icon"><i class="fas fa-calendar-alt"></i></div>
        <h4>Events &amp; Webinars</h4>
        <p>Live sessions where our advisors unpack the news — with Q&amp;A.</p>
        <span class="rc-link">Browse Events <i class="fas fa-arrow-right"></i></span>
      </a>
      <a href="tax-efficient-investment" class="rel-card reveal d2">
        <div class="rc-icon"><i class="fas fa-file-invoice-dollar"></i></div>
        <h4>Tax-Efficient Investing</h4>
        <p>Turn this week's tax news into a plan that saves you money this FY.</p>
        <span class="rc-link">Explore <i class="fas fa-arrow-right"></i></span>
      </a>
      <a href="contact" class="rel-card reveal d3">
        <div class="rc-icon"><i class="fas fa-user-tie"></i></div>
        <h4>Book Advisory Call</h4>
        <p>Speak to a WealthBridge advisor about what this week's news means for your portfolio.</p>
        <span class="rc-link">Book Free Call <i class="fas fa-arrow-right"></i></span>
      </a>
    </div>
  </div>
</section>

<script>
(function () {

  /* ── Ticker ── */
  var tickers = [
    { name:'NIFTY 50', price:'24,612', chg:'+0.84%', dir:'up' },
    { name:'SENSEX',   price:'81,148', chg:'+0.80%', dir:'up' },
    { name:'NIFTY BANK', price:'52,340', chg:'-0.22%', dir:'dn' },
    { name:'NIFTY MIDCAP150', price:'18,240', chg:'+1.14%', dir:'up' },
    { name:'NIFTY IT',  price:'38,910', chg:'+1.42%', dir:'up' },
    { name:'GOLD MCX',  price:'73,840', chg:'+0.57%', dir:'up' },
    { name:'SILVER MCX', price:'91,240', chg:'+0.32%', dir:'up' },
    { name:'USD/INR',   price:'83.62',  chg:'-0.17%', dir:'dn' },
    { name:'BRENT CRUDE', price:'$77.8', chg:'+0.44%', dir:'up' },
    { name:'10Y G-SEC', price:'6.96%',  chg:'-2bps',  dir:'dn' },
    { name:'RELIANCE',  price:'2,948',  chg:'+0.92%', dir:'up' },
    { name:'HDFC BANK', price:'1,662',  chg:'-0.34%', dir:'dn' },
    { name:'INFOSYS',   price:'1,890',  chg:'+1.18%', dir:'up' },
    { name:'TCS',       price:'4,082',  chg:'+0.76%', dir:'up' },
  ];
  // Duplicate for seamless loop
  var all = tickers.concat(tickers);
  var html = all.map(function(t){
    return '<div class="ticker-item">'
      + '<span class="ti-name">' + t.name + '</span>'
      + '<span class="ti-price">' + t.price + '</span>'
      + '<span class="ti-change ' + t.dir + '">' + (t.dir==='up'?'▲ ':'▼ ') + t.chg + '</span>'
      + '</div>';
  }).join('');
  document.getElementById('tickerTrack').innerHTML = html;

  /* ── Scroll Reveal ── */
  var obs = new IntersectionObserver(function(entries) {
    entries.forEach(function(e) {
      if (e.isIntersecting) { e.target.classList.add('visible'); obs.unobserve(e.target); }
    });
  }, { threshold: 0.12 });
  document.querySelectorAll('.reveal').forEach(function(el) { obs.observe(el); });

  /* ── Counter ── */
  function animCounter(el) {
    var raw = parseFloat(el.dataset.counter), suffix = el.dataset.suffix || '', start = null, dur = 1800;
    (function step(ts) {
      if (!start) start = ts;
      var p = Math.min((ts - start) / dur, 1), ease = 1 - Math.pow(1 - p, 3), cur = Math.round(raw * ease);
      el.textContent = (cur >= 1000 ? cur.toLocaleString('en-IN') : cur) + suffix;
      if (p < 1) requestAnimationFrame(step);
    })(0);
  }
  var co = new IntersectionObserver(function(entries) {
    entries.forEach(function(e) {
      if (e.isIntersecting && !e.target.dataset.done) {
        e.target.dataset.done = '1'; animCounter(e.target); co.unobserve(e.target);
      }
    });
  }, { threshold: 0.5 });
  document.querySelectorAll('[data-counter]').forEach(function(el) { co.observe(el); });

  /* ── Filter tabs ── */
  document.querySelectorAll('.filter-tab').forEach(function(tab) {
    tab.addEventListener('click', function() {
      document.querySelectorAll('.filter-tab').forEach(function(t) { t.classList.remove('active'); });
      tab.classList.add('active');
    });
  });

  /* ── Topic tags ── */
  document.querySelectorAll('.topic-tag').forEach(function(tag) {
    tag.addEventListener('click', function() {
      document.querySelectorAll('.topic-tag').forEach(function(t) { t.classList.remove('active'); });
      tag.classList.add('active');
    });
  });

})();
</script>
<?php include_once ('elements/footer.php'); ?>