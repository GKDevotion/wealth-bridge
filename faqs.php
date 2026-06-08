<?php include_once ('elements/header.php'); ?>

    <!-- Custom CSS -->
    <link href="<?php echo UrlHelper::asset('css/faqs.css'); ?>" rel="stylesheet">

    <!-- BREADCRUMB -->
<div class="breadcrumb-bar">
  <div class="container">
    <div class="breadcrumb">
      <a href="index"><i class="fas fa-home"></i> Home</a><span>›</span>
      <a href="#">Insights</a><span>›</span>
      <span class="current">FAQ</span>
    </div>
  </div>
</div>

<!-- ═══ HERO ═══ -->
<section class="fq-hero">
  <div class="fq-hero-bg"></div>
  <div class="fq-grid"></div>
  <div class="fq-line l1"></div>
  <div class="fq-line l2"></div>
  <div class="fq-deco">?</div>
  <div class="container">
    <div class="fq-hero-inner">
      <div>
        <div class="hero-label">Insights &nbsp;·&nbsp; FAQ</div>
        <h1 class="hero-title">Every Question<br><em>Answered Honestly</em>and Without Jargon</h1>
        <p class="hero-sub">Comprehensive answers to the most important questions about wealth management, tax planning, insurance, real estate, and retirement — from clients like you.</p>
        <div class="hero-actions">
          <a href="#faq-main" class="btn btn-primary">Browse Questions <i class="fas fa-arrow-right"></i></a>
          <a href="#contact" class="btn btn-ghost">Ask an Advisor <i class="fas fa-user-tie"></i></a>
        </div>
        <div class="hero-stats">
          <div class="hero-stat"><div class="hs-num" data-counter="180" data-suffix="+">180+</div><div class="hs-lbl">Questions Answered</div></div>
          <div class="hero-stat"><div class="hs-num" data-counter="6" data-suffix=" Topics">6</div><div class="hs-lbl">Topic Categories</div></div>
          <div class="hero-stat"><div class="hs-num" data-counter="98" data-suffix="%">98%</div><div class="hs-lbl">Found This Helpful</div></div>
        </div>
      </div>

      <div class="hero-visual">
        <div class="fq-float f1">
          <div class="ff-lbl">Most Asked</div>
          <div class="ff-val">Tax <span>Q&amp;A</span></div>
          <div class="ff-sub">62 questions answered</div>
        </div>
        <div class="fq-hero-card">
          <div class="fq-card-head">
            <span class="fq-card-eyebrow">FAQ Categories</span>
            <span class="fq-card-badge"><i class="fas fa-check" style="font-size:10px"></i> All Updated 2025</span>
          </div>
          <div class="fq-categories-mini">
            <div class="fqcm-row"><div class="fqcm-icon"><i class="fas fa-file-invoice-dollar"></i></div><span class="fqcm-name">Tax Planning</span><div class="fqcm-bar-bg"><div class="fqcm-bar" style="--w:95%"></div></div><span class="fqcm-count">62 Qs</span></div>
            <div class="fqcm-row"><div class="fqcm-icon"><i class="fas fa-chart-line"></i></div><span class="fqcm-name">Investing &amp; MF</span><div class="fqcm-bar-bg"><div class="fqcm-bar" style="--w:80%"></div></div><span class="fqcm-count">48 Qs</span></div>
            <div class="fqcm-row"><div class="fqcm-icon"><i class="fas fa-heartbeat"></i></div><span class="fqcm-name">Insurance</span><div class="fqcm-bar-bg"><div class="fqcm-bar" style="--w:60%"></div></div><span class="fqcm-count">36 Qs</span></div>
            <div class="fqcm-row"><div class="fqcm-icon"><i class="fas fa-building"></i></div><span class="fqcm-name">Real Estate</span><div class="fqcm-bar-bg"><div class="fqcm-bar" style="--w:45%"></div></div><span class="fqcm-count">28 Qs</span></div>
            <div class="fqcm-row"><div class="fqcm-icon"><i class="fas fa-umbrella-beach"></i></div><span class="fqcm-name">Retirement</span><div class="fqcm-bar-bg"><div class="fqcm-bar" style="--w:32%"></div></div><span class="fqcm-count">18 Qs</span></div>
          </div>
          <div class="fq-hero-footer">
            <div class="fq-metric"><div class="fqm-lbl">Total Q&amp;As</div><div class="fqm-val">180+</div></div>
            <div class="fq-metric"><div class="fqm-lbl">Avg. Read Time</div><div class="fqm-val">2 min</div></div>
          </div>
        </div>
        <div class="fq-float f2">
          <div class="ff-lbl">Updated</div>
          <div class="ff-val">FY 25–26 <span>✓</span></div>
          <div class="ff-sub">Budget &amp; tax law changes</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ SEARCH ═══ -->
<div class="fq-search-bar">
  <div class="container">
    <div class="search-inner">
      <div class="search-box">
        <i class="fas fa-search"></i>
        <input type="text" id="faqSearch" placeholder="Search questions — try 'ELSS', '80C', 'home loan', 'NPS'...">
      </div>
      <div class="search-popular">Popular: <span onclick="searchFaq('ELSS')">ELSS</span> &nbsp;·&nbsp; <span onclick="searchFaq('NPS')">NPS</span> &nbsp;·&nbsp; <span onclick="searchFaq('LTCG')">LTCG</span> &nbsp;·&nbsp; <span onclick="searchFaq('home loan')">Home Loan</span></div>
    </div>
  </div>
</div>

<!-- ═══ CATEGORY TABS ═══ -->
<div class="fq-cats">
  <div class="container">
    <div class="cats-inner">
      <button class="cat-tab active" data-cat="all"><i class="fas fa-th"></i> All <span class="cat-count">180+</span></button>
      <button class="cat-tab" data-cat="tax"><i class="fas fa-file-invoice-dollar"></i> Tax Planning <span class="cat-count">62</span></button>
      <button class="cat-tab" data-cat="investing"><i class="fas fa-chart-line"></i> Investing &amp; MF <span class="cat-count">48</span></button>
      <button class="cat-tab" data-cat="insurance"><i class="fas fa-heartbeat"></i> Insurance <span class="cat-count">36</span></button>
      <button class="cat-tab" data-cat="realestate"><i class="fas fa-building"></i> Real Estate <span class="cat-count">28</span></button>
      <button class="cat-tab" data-cat="retirement"><i class="fas fa-umbrella-beach"></i> Retirement <span class="cat-count">18</span></button>
    </div>
  </div>
</div>

<!-- ═══ MAIN FAQ CONTENT ═══ -->
<section class="section fq-main" id="faq-main">
  <div class="container">
    <div class="fq-layout">

      <!-- Sidebar -->
      <aside class="fq-sidebar">
        <div class="sidebar-title">Browse by Category</div>
        <nav class="sidebar-nav">
          <div class="snav-item active" data-cat="all"><div class="snav-icon"><i class="fas fa-th"></i></div>All Questions<span class="snav-count">180+</span></div>
          <div class="snav-item" data-cat="tax"><div class="snav-icon"><i class="fas fa-file-invoice-dollar"></i></div>Tax Planning<span class="snav-count">62</span></div>
          <div class="snav-item" data-cat="investing"><div class="snav-icon"><i class="fas fa-chart-line"></i></div>Investing &amp; MF<span class="snav-count">48</span></div>
          <div class="snav-item" data-cat="insurance"><div class="snav-icon"><i class="fas fa-heartbeat"></i></div>Insurance<span class="snav-count">36</span></div>
          <div class="snav-item" data-cat="realestate"><div class="snav-icon"><i class="fas fa-building"></i></div>Real Estate<span class="snav-count">28</span></div>
          <div class="snav-item" data-cat="retirement"><div class="snav-icon"><i class="fas fa-umbrella-beach"></i></div>Retirement<span class="snav-count">18</span></div>
        </nav>
        <div class="sidebar-cta">
          <div class="scta-icon"><i class="fas fa-user-tie"></i></div>
          <div class="scta-title">Can't find your answer?</div>
          <div class="scta-desc">Speak directly with a WealthBridge advisor — free, no commitment.</div>
          <a href="contact" class="btn btn-primary btn-sm" style="width:100%;justify-content:center">Book Free Call <i class="fas fa-arrow-right"></i></a>
        </div>
      </aside>

      <!-- FAQ Content -->
      <div id="faqContent">

        <!-- ── TAX PLANNING ── -->
        <div class="fq-section" data-section="tax">
          <div class="fqs-header">
            <div class="fqs-icon"><i class="fas fa-file-invoice-dollar"></i></div>
            <div class="fqs-title">Tax Planning</div>
            <div class="fqs-count">62 questions</div>
          </div>

          <div class="faq-item reveal" data-q="how much can i save section 80c elss ppf nps tax">
            <button class="faq-btn">
              <span class="faq-q-num">01</span>
              <span class="faq-q-text">How much can I save in taxes by investing in 80C, NPS, and 80D together?</span>
              <span class="faq-icon-wrap"><i class="fas fa-plus"></i></span>
            </button>
            <div class="faq-answer-wrap">
              <div class="faq-answer">
                <p>For a salaried professional in the 30% tax slab, a fully optimised plan can save <strong>₹1.5L–₹2.5L annually</strong>:</p>
                <ul>
                  <li><strong>Section 80C</strong> — ₹1.5L via ELSS, PPF, or home loan principal</li>
                  <li><strong>Section 80CCD(1B)</strong> — Additional ₹50,000 via NPS (over and above 80C)</li>
                  <li><strong>Section 80D</strong> — ₹25,000 for self/spouse/children + ₹25,000–₹50,000 for parents</li>
                  <li><strong>Section 24(b)</strong> — ₹2L interest deduction on home loan</li>
                </ul>
                <p>Total potential deduction: up to <strong>₹4.25L+</strong>, translating to ₹1.27L+ in actual tax saved at 30%.</p>
              </div>
              <div class="faq-answer-footer">
                <div class="faq-helpful"><div>Was this helpful?</div><div class="faq-helpful-btns"><button class="helpful-btn yes"><i class="fas fa-thumbs-up"></i> Yes</button><button class="helpful-btn no"><i class="fas fa-thumbs-down"></i> No</button></div></div>
                <a href="tax-efficient-investment" class="faq-read-more">Read Full Tax Guide <i class="fas fa-arrow-right"></i></a>
              </div>
            </div>
          </div>

          <div class="faq-item reveal rd1" data-q="old new tax regime which is better 2025">
            <button class="faq-btn">
              <span class="faq-q-num">02</span>
              <span class="faq-q-text">Old tax regime or new tax regime — which is better for me in FY2025-26?</span>
              <span class="faq-icon-wrap"><i class="fas fa-plus"></i></span>
            </button>
            <div class="faq-answer-wrap">
              <div class="faq-answer">
                <p>The answer depends on your <strong>total eligible deductions</strong>. As a rule of thumb:</p>
                <ul>
                  <li>If your total deductions (80C + HRA + NPS + 80D + home loan) exceed <strong>~₹3.75L</strong> for income above ₹15L, the old regime wins</li>
                  <li>If your deductions are low or your income is below ₹7L, the new regime's nil tax and lower slabs are better</li>
                  <li>The new regime allows employer NPS contribution under <strong>80CCD(2)</strong> — which has no upper cap — making it very attractive for salaried employees with NPS</li>
                </ul>
                <p>WealthBridge models the exact crossover point for every client during the free consultation.</p>
              </div>
              <div class="faq-answer-footer">
                <div class="faq-helpful"><div>Was this helpful?</div><div class="faq-helpful-btns"><button class="helpful-btn yes"><i class="fas fa-thumbs-up"></i> Yes</button><button class="helpful-btn no"><i class="fas fa-thumbs-down"></i> No</button></div></div>
                <a href="tax-efficient-investment" class="faq-read-more">Old vs New Regime Guide <i class="fas fa-arrow-right"></i></a>
              </div>
            </div>
          </div>

          <div class="faq-item reveal rd2" data-q="LTCG tax harvesting equity mutual fund 1.25 lakh">
            <button class="faq-btn">
              <span class="faq-q-num">03</span>
              <span class="faq-q-text">What is LTCG tax harvesting and how do I use the ₹1.25L exemption?</span>
              <span class="faq-icon-wrap"><i class="fas fa-plus"></i></span>
            </button>
            <div class="faq-answer-wrap">
              <div class="faq-answer">
                <p>Long-term capital gains up to <strong>₹1.25 lakh per year</strong> from equity investments are completely tax-free. Tax harvesting means:</p>
                <ul>
                  <li>Selling equity units each year to book exactly this much gain</li>
                  <li>Repurchasing the same units the next day — resetting your acquisition cost higher</li>
                  <li>Over 10–15 years, this eliminates a significant future LTCG tax liability</li>
                </ul>
                <p>Done consistently, this strategy can save <strong>₹12,500+ per year</strong> in tax, and hundreds of thousands over a full investment lifetime.</p>
              </div>
              <div class="faq-answer-footer">
                <div class="faq-helpful"><div>Was this helpful?</div><div class="faq-helpful-btns"><button class="helpful-btn yes"><i class="fas fa-thumbs-up"></i> Yes</button><button class="helpful-btn no"><i class="fas fa-thumbs-down"></i> No</button></div></div>
                <a href="tax-efficient-investment" class="faq-read-more">Full LTCG Guide <i class="fas fa-arrow-right"></i></a>
              </div>
            </div>
          </div>

          <div class="faq-item reveal" data-q="is ELSS better than PPF 80c lock in">
            <button class="faq-btn">
              <span class="faq-q-num">04</span>
              <span class="faq-q-text">Is ELSS better than PPF for Section 80C savings?</span>
              <span class="faq-icon-wrap"><i class="fas fa-plus"></i></span>
            </button>
            <div class="faq-answer-wrap">
              <div class="faq-answer">
                <p>They serve different purposes and work best together:</p>
                <ul>
                  <li><strong>ELSS</strong> — 3-year lock-in, market-linked returns (12–15% historically), 10% LTCG on gains above ₹1.25L. Best for long-term wealth creation.</li>
                  <li><strong>PPF</strong> — 15-year tenure, ~7.1% guaranteed, fully tax-free maturity (EEE). Best as a safe debt anchor.</li>
                </ul>
                <p>Most clients benefit from a <strong>split allocation</strong>: ELSS for growth (70%) + PPF for safety (30%), rather than going all-in on either.</p>
              </div>
              <div class="faq-answer-footer">
                <div class="faq-helpful"><div>Was this helpful?</div><div class="faq-helpful-btns"><button class="helpful-btn yes"><i class="fas fa-thumbs-up"></i> Yes</button><button class="helpful-btn no"><i class="fas fa-thumbs-down"></i> No</button></div></div>
                <a href="tax-efficient-investment" class="faq-read-more">Compare Instruments <i class="fas fa-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>

        <!-- ── INVESTING & MF ── -->
        <div class="fq-section" data-section="investing">
          <div class="fqs-header">
            <div class="fqs-icon"><i class="fas fa-chart-line"></i></div>
            <div class="fqs-title">Investing &amp; Mutual Funds</div>
            <div class="fqs-count">48 questions</div>
          </div>

          <div class="faq-item reveal" data-q="SIP vs lump sum investment which is better">
            <button class="faq-btn">
              <span class="faq-q-num">01</span>
              <span class="faq-q-text">SIP vs lump sum — which is the better way to invest?</span>
              <span class="faq-icon-wrap"><i class="fas fa-plus"></i></span>
            </button>
            <div class="faq-answer-wrap">
              <div class="faq-answer">
                <p><strong>SIP (Systematic Investment Plan)</strong> is better for most investors because:</p>
                <ul>
                  <li>Rupee cost averaging — you buy more units when markets fall, fewer when they rise</li>
                  <li>Removes timing risk — no need to "predict" the market bottom</li>
                  <li>Builds discipline — automated, regular investing regardless of market mood</li>
                </ul>
                <p><strong>Lump sum</strong> can outperform SIP in a consistently rising market, but requires correct timing. For most salaried investors with regular income, SIP is the default recommendation. For a windfall (bonus, sale proceeds), a <strong>Systematic Transfer Plan (STP)</strong> spreads the lump sum into the market over 6–12 months, combining benefits of both approaches.</p>
              </div>
              <div class="faq-answer-footer">
                <div class="faq-helpful"><div>Was this helpful?</div><div class="faq-helpful-btns"><button class="helpful-btn yes"><i class="fas fa-thumbs-up"></i> Yes</button><button class="helpful-btn no"><i class="fas fa-thumbs-down"></i> No</button></div></div>
              </div>
            </div>
          </div>

          <div class="faq-item reveal rd1" data-q="how many mutual funds should I have in portfolio">
            <button class="faq-btn">
              <span class="faq-q-num">02</span>
              <span class="faq-q-text">How many mutual funds should I hold in my portfolio?</span>
              <span class="faq-icon-wrap"><i class="fas fa-plus"></i></span>
            </button>
            <div class="faq-answer-wrap">
              <div class="faq-answer">
                <p>Most retail investors own too many funds, creating "overlap" without true diversification. The ideal structure for a typical investor:</p>
                <ul>
                  <li><strong>1 large-cap / flexi-cap fund</strong> — core equity exposure</li>
                  <li><strong>1 mid-cap fund</strong> — growth kicker</li>
                  <li><strong>1 ELSS fund</strong> — for 80C benefit (can overlap with above)</li>
                  <li><strong>1 debt/liquid fund</strong> — emergency corpus or short-term goals</li>
                </ul>
                <p>That's <strong>3–4 funds</strong> for most people. Beyond 5–6 funds, additional diversification is marginal and management becomes complex. Quality over quantity.</p>
              </div>
              <div class="faq-answer-footer">
                <div class="faq-helpful"><div>Was this helpful?</div><div class="faq-helpful-btns"><button class="helpful-btn yes"><i class="fas fa-thumbs-up"></i> Yes</button><button class="helpful-btn no"><i class="fas fa-thumbs-down"></i> No</button></div></div>
              </div>
            </div>
          </div>

          <div class="faq-item reveal rd2" data-q="what is glide path retirement equity debt shift">
            <button class="faq-btn">
              <span class="faq-q-num">03</span>
              <span class="faq-q-text">What is a "glide path" and when should I start shifting from equity to debt?</span>
              <span class="faq-icon-wrap"><i class="fas fa-plus"></i></span>
            </button>
            <div class="faq-answer-wrap">
              <div class="faq-answer">
                <p>A <strong>glide path</strong> is the planned, gradual reduction of equity allocation as a financial goal approaches — shifting from high-growth but volatile equity to stable, capital-preserving debt.</p>
                <p>Standard WealthBridge glide path rule:</p>
                <ul>
                  <li><strong>10+ years to goal:</strong> 80–90% equity, 10–20% debt</li>
                  <li><strong>5–10 years to goal:</strong> 60–70% equity, 30–40% debt</li>
                  <li><strong>2–5 years to goal:</strong> 40% equity, 60% debt</li>
                  <li><strong>0–2 years to goal:</strong> 20% equity, 80% in liquid/FD</li>
                </ul>
                <p>The reason: a market crash in the final 2 years before you need the money can wipe out years of gains. Start gliding <strong>5 years before any major goal.</strong></p>
              </div>
              <div class="faq-answer-footer">
                <div class="faq-helpful"><div>Was this helpful?</div><div class="faq-helpful-btns"><button class="helpful-btn yes"><i class="fas fa-thumbs-up"></i> Yes</button><button class="helpful-btn no"><i class="fas fa-thumbs-down"></i> No</button></div></div>
              </div>
            </div>
          </div>
        </div>

        <!-- ── INSURANCE ── -->
        <div class="fq-section" data-section="insurance">
          <div class="fqs-header">
            <div class="fqs-icon"><i class="fas fa-heartbeat"></i></div>
            <div class="fqs-title">Insurance</div>
            <div class="fqs-count">36 questions</div>
          </div>

          <div class="faq-item reveal" data-q="how much life insurance term cover do I need">
            <button class="faq-btn">
              <span class="faq-q-num">01</span>
              <span class="faq-q-text">How much life insurance cover do I actually need?</span>
              <span class="faq-icon-wrap"><i class="fas fa-plus"></i></span>
            </button>
            <div class="faq-answer-wrap">
              <div class="faq-answer">
                <p>The standard rule is <strong>10–15× your annual income</strong>, but the precise figure should account for:</p>
                <ul>
                  <li><strong>Outstanding liabilities</strong> — home loan, car loan, personal loan balances</li>
                  <li><strong>Future goals corpus</strong> — children's education and wedding</li>
                  <li><strong>Income replacement</strong> — 10–15 years of family living expenses</li>
                  <li><strong>Less existing cover</strong> — subtract employer group cover and existing policies</li>
                </ul>
                <p>Example: Annual income ₹15L, home loan ₹50L, education corpus needed ₹40L → <strong>₹2.25–3Cr term cover</strong> at a premium of ₹15,000–₹22,000/year. Pure term plans are always the recommendation over ULIPs for pure protection.</p>
              </div>
              <div class="faq-answer-footer">
                <div class="faq-helpful"><div>Was this helpful?</div><div class="faq-helpful-btns"><button class="helpful-btn yes"><i class="fas fa-thumbs-up"></i> Yes</button><button class="helpful-btn no"><i class="fas fa-thumbs-down"></i> No</button></div></div>
                <a href="life-insurance" class="faq-read-more">Life Insurance Guide <i class="fas fa-arrow-right"></i></a>
              </div>
            </div>
          </div>

          <div class="faq-item reveal rd1" data-q="is employer health insurance enough corporate group policy">
            <button class="faq-btn">
              <span class="faq-q-num">02</span>
              <span class="faq-q-text">Is the health insurance provided by my employer sufficient?</span>
              <span class="faq-icon-wrap"><i class="fas fa-plus"></i></span>
            </button>
            <div class="faq-answer-wrap">
              <div class="faq-answer">
                <p>For most people, <strong>no</strong>. Employer group policies have three critical limitations:</p>
                <ul>
                  <li><strong>Low sum insured</strong> — typically ₹3–5L, far below the ₹10–15L needed per person in metro cities given medical inflation</li>
                  <li><strong>Job dependency</strong> — cover ceases immediately if you resign, are laid off, or retire</li>
                  <li><strong>No parents or critical illness</strong> — group policies rarely include parents and often exclude CI cover</li>
                </ul>
                <p>Recommended strategy: keep employer cover as a secondary buffer, but buy a personal <strong>family floater of ₹25–50L</strong> + a critical illness rider. Your personal policy stays regardless of employment.</p>
              </div>
              <div class="faq-answer-footer">
                <div class="faq-helpful"><div>Was this helpful?</div><div class="faq-helpful-btns"><button class="helpful-btn yes"><i class="fas fa-thumbs-up"></i> Yes</button><button class="helpful-btn no"><i class="fas fa-thumbs-down"></i> No</button></div></div>
                <a href="health-insurance" class="faq-read-more">Health Insurance Guide <i class="fas fa-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>

        <!-- ── REAL ESTATE ── -->
        <div class="fq-section" data-section="realestate">
          <div class="fqs-header">
            <div class="fqs-icon"><i class="fas fa-building"></i></div>
            <div class="fqs-title">Real Estate</div>
            <div class="fqs-count">28 questions</div>
          </div>

          <div class="faq-item reveal" data-q="is now good time buy property India 2025">
            <button class="faq-btn">
              <span class="faq-q-num">01</span>
              <span class="faq-q-text">Is now a good time to buy property in India?</span>
              <span class="faq-icon-wrap"><i class="fas fa-plus"></i></span>
            </button>
            <div class="faq-answer-wrap">
              <div class="faq-answer">
                <p>Tier-1 cities have seen <strong>40–82% appreciation since 2020</strong>, but select micro-markets in Bengaluru, Hyderabad, and Pune still offer strong 15–20% IRR potential over a 5–7 year horizon, especially in IT corridor adjacencies and infrastructure-driven corridors.</p>
                <p>The answer depends on:</p>
                <ul>
                  <li>Your specific city and micro-market</li>
                  <li>Whether the goal is self-use or investment</li>
                  <li>Your loan eligibility and EMI-to-income ratio</li>
                  <li>Developer track record and RERA status</li>
                </ul>
                <p>WealthBridge recommends a <strong>free advisory call</strong> before any property decision — the quality of the micro-market and developer matters far more than the broad market timing.</p>
              </div>
              <div class="faq-answer-footer">
                <div class="faq-helpful"><div>Was this helpful?</div><div class="faq-helpful-btns"><button class="helpful-btn yes"><i class="fas fa-thumbs-up"></i> Yes</button><button class="helpful-btn no"><i class="fas fa-thumbs-down"></i> No</button></div></div>
                <a href="real-estate-investment" class="faq-read-more">RE Advisory Guide <i class="fas fa-arrow-right"></i></a>
              </div>
            </div>
          </div>

          <div class="faq-item reveal rd1" data-q="REIT vs direct property which is better investment">
            <button class="faq-btn">
              <span class="faq-q-num">02</span>
              <span class="faq-q-text">REITs vs direct property — which is the better real estate investment?</span>
              <span class="faq-icon-wrap"><i class="fas fa-plus"></i></span>
            </button>
            <div class="faq-answer-wrap">
              <div class="faq-answer">
                <p>They serve different investor profiles:</p>
                <ul>
                  <li><strong>REITs</strong> — start from ₹10,000, fully liquid (T+2), zero management, 8–10% dividend yield, SEBI regulated. Best for investors who want real estate exposure without large capital or hassle.</li>
                  <li><strong>Direct property</strong> — requires ₹30L–₹5Cr+, illiquid, management effort, but offers leverage, higher capital appreciation (15–25% in right markets), and Section 24/80C tax benefits.</li>
                </ul>
                <p>For most investors, <strong>REITs work as a liquid real estate allocation</strong> (10–15% of portfolio), while direct property is considered for self-use or when significant capital is available with a 5–10 year horizon.</p>
              </div>
              <div class="faq-answer-footer">
                <div class="faq-helpful"><div>Was this helpful?</div><div class="faq-helpful-btns"><button class="helpful-btn yes"><i class="fas fa-thumbs-up"></i> Yes</button><button class="helpful-btn no"><i class="fas fa-thumbs-down"></i> No</button></div></div>
                <a href="real-estate-investment" class="faq-read-more">Full RE Comparison <i class="fas fa-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>

        <!-- ── RETIREMENT ── -->
        <div class="fq-section" data-section="retirement">
          <div class="fqs-header">
            <div class="fqs-icon"><i class="fas fa-umbrella-beach"></i></div>
            <div class="fqs-title">Retirement Planning</div>
            <div class="fqs-count">18 questions</div>
          </div>

          <div class="faq-item reveal" data-q="how much corpus do I need to retire in India">
            <button class="faq-btn">
              <span class="faq-q-num">01</span>
              <span class="faq-q-text">How much retirement corpus do I actually need?</span>
              <span class="faq-icon-wrap"><i class="fas fa-plus"></i></span>
            </button>
            <div class="faq-answer-wrap">
              <div class="faq-answer">
                <p>The standard formula: <strong>Annual expenses × 25–30</strong> (the 4% withdrawal rule adjusted for Indian inflation at 6–7%).</p>
                <p>Example: Current annual expenses ₹10L → by retirement (say 25 years at 6% inflation) → ₹43L/year needed → <strong>₹4.3Cr – ₹5.2Cr corpus required</strong>.</p>
                <p>Key factors that change this number:</p>
                <ul>
                  <li>Age at retirement and expected lifespan (plan to 90+)</li>
                  <li>Healthcare costs (10–12% medical inflation)</li>
                  <li>Pension or rental income already available</li>
                  <li>Whether you have dependants in retirement</li>
                </ul>
                <p>WealthBridge models your exact number using a personalised retirement calculator during the advisory session.</p>
              </div>
              <div class="faq-answer-footer">
                <div class="faq-helpful"><div>Was this helpful?</div><div class="faq-helpful-btns"><button class="helpful-btn yes"><i class="fas fa-thumbs-up"></i> Yes</button><button class="helpful-btn no"><i class="fas fa-thumbs-down"></i> No</button></div></div>
                <a href="retirement-planning" class="faq-read-more">Retirement Guide <i class="fas fa-arrow-right"></i></a>
              </div>
            </div>
          </div>

          <div class="faq-item reveal rd1" data-q="NPS vs EPF vs mutual fund retirement which is best">
            <button class="faq-btn">
              <span class="faq-q-num">02</span>
              <span class="faq-q-text">NPS vs EPF vs Mutual Funds — which is best for retirement?</span>
              <span class="faq-icon-wrap"><i class="fas fa-plus"></i></span>
            </button>
            <div class="faq-answer-wrap">
              <div class="faq-answer">
                <p>Each plays a distinct role — they work best in combination:</p>
                <ul>
                  <li><strong>EPF</strong> — mandatory for salaried employees, ~8.25% guaranteed, fully tax-exempt at maturity. Non-negotiable base layer.</li>
                  <li><strong>NPS</strong> — market-linked (9–11% CAGR historically), extra ₹50K 80CCD(1B) deduction, 60% tax-free at retirement. Very low charges.</li>
                  <li><strong>Equity MF via SWP</strong> — highest returns potential (12–15%), fully flexible, no lock-in until age 60, systematic withdrawal plan for monthly income post-retirement.</li>
                </ul>
                <p>Recommended structure for most: <strong>EPF (mandatory) + NPS (for tax benefit) + Equity SIP (for real growth)</strong>. All three together creates a diversified, tax-optimised retirement machine.</p>
              </div>
              <div class="faq-answer-footer">
                <div class="faq-helpful"><div>Was this helpful?</div><div class="faq-helpful-btns"><button class="helpful-btn yes"><i class="fas fa-thumbs-up"></i> Yes</button><button class="helpful-btn no"><i class="fas fa-thumbs-down"></i> No</button></div></div>
                <a href="retirement-planning" class="faq-read-more">Retirement Planning Guide <i class="fas fa-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>

      </div><!-- /faqContent -->
    </div>
  </div>
</section>

<!-- ═══ POPULAR QUESTIONS ═══ -->
<div class="fq-popular">
  <div class="container">
    <div class="section-header">
      <div class="section-label reveal">Trending</div>
      <h2 class="section-title reveal rd1">Most Popular <span>Questions This Month</span></h2>
    </div>
    <div class="popular-grid">
      <div class="popular-card reveal"><div class="pc-cat">Tax Planning</div><div class="pc-q">Can I claim HRA and home loan deductions simultaneously?</div><a href="#" class="pc-link">Read Answer <i class="fas fa-arrow-right"></i></a></div>
      <div class="popular-card reveal rd1"><div class="pc-cat">Investing</div><div class="pc-q">What is the ideal SIP amount for building ₹1 Crore?</div><a href="#" class="pc-link">Read Answer <i class="fas fa-arrow-right"></i></a></div>
      <div class="popular-card reveal rd2"><div class="pc-cat">Insurance</div><div class="pc-q">Can I port my health insurance to a better policy mid-term?</div><a href="#" class="pc-link">Read Answer <i class="fas fa-arrow-right"></i></a></div>
      <div class="popular-card reveal"><div class="pc-cat">Real Estate</div><div class="pc-q">What is fractional ownership and is it SEBI regulated now?</div><a href="#" class="pc-link">Read Answer <i class="fas fa-arrow-right"></i></a></div>
      <div class="popular-card reveal rd1"><div class="pc-cat">Tax Planning</div><div class="pc-q">How does Sukanya Samriddhi Yojana work for my daughter?</div><a href="#" class="pc-link">Read Answer <i class="fas fa-arrow-right"></i></a></div>
      <div class="popular-card reveal rd2"><div class="pc-cat">Retirement</div><div class="pc-q">What is SWP and how does it generate monthly income from MFs?</div><a href="#" class="pc-link">Read Answer <i class="fas fa-arrow-right"></i></a></div>
    </div>
  </div>
</div>

<!-- ═══ STILL HAVE QUESTIONS ═══ -->
<section class="section fq-contact" id="contact">
  <div class="container">
    <div class="section-header center">
      <div class="section-label reveal">We're Here</div>
      <h2 class="section-title reveal rd1">Can't Find Your Answer? <span>We'll Help Directly.</span></h2>
      <p class="section-sub reveal rd2" style="margin:0 auto">Our advisors handle thousands of queries every month. Reach us in the way that works best for you.</p>
    </div>
    <div class="contact-cards">
      <div class="contact-card reveal">
        <div class="cc-icon"><i class="fas fa-user-tie"></i></div>
        <div class="cc-title">Book a Free Consultation</div>
        <div class="cc-desc">30-minute one-on-one call with a WealthBridge advisor. No fees, no commitment — just clear answers.</div>
        <a href="contact" class="cc-action">Book Now <i class="fas fa-arrow-right"></i></a>
      </div>
      <div class="contact-card reveal rd1">
        <div class="cc-icon"><i class="fas fa-comments"></i></div>
        <div class="cc-title">Live Chat</div>
        <div class="cc-desc">Chat with our team on WhatsApp or the website — typically answered within 15 minutes during business hours.</div>
        <a href="#" class="cc-action">Start Chat <i class="fas fa-arrow-right"></i></a>
      </div>
      <div class="contact-card reveal rd2">
        <div class="cc-icon"><i class="fas fa-envelope"></i></div>
        <div class="cc-title">Submit a Question</div>
        <div class="cc-desc">Send your question and we'll add a detailed answer to the FAQ — and email you a personalised response within 24 hours.</div>
        <a href="contact" class="cc-action">Submit Question <i class="fas fa-arrow-right"></i></a>
      </div>
    </div>
  </div>
</section>

<!-- ═══ CTA ═══ -->
<section class="fq-cta">
  <div class="container">
    <div class="cta-inner">
      <div class="section-label reveal" style="justify-content:center">Your Questions. Our Expertise.</div>
      <h2 class="cta-title reveal rd1">Knowledge is the First Step.<br><span>Let Us Handle the Rest.</span></h2>
      <p class="cta-desc reveal rd2">Reading the FAQ is a great start. The next step is a free personalised consultation that applies these answers specifically to your income, goals, and life situation.</p>
      <div class="cta-actions reveal rd2">
        <a href="contact" class="btn btn-primary">Get Free Consultation <i class="fas fa-arrow-right"></i></a>
        <a href="events-webinar" class="btn btn-ghost"><i class="fas fa-calendar"></i> Attend a Free Webinar</a>
      </div>
      <div class="cta-trust reveal rd3">
        <div class="ct-item"><i class="fas fa-check-circle"></i> SEBI Registered Advisor</div>
        <div class="ct-item"><i class="fas fa-check-circle"></i> 180+ Questions Answered</div>
        <div class="ct-item"><i class="fas fa-check-circle"></i> Updated for FY2025-26</div>
        <div class="ct-item"><i class="fas fa-check-circle"></i> Zero Jargon Policy</div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ RELATED ═══ -->
<section class="section fq-related">
  <div class="container">
    <div class="section-header reveal">
      <div class="section-label">Also Explore</div>
      <h2 class="section-title">Related <span>Insights</span></h2>
    </div>
    <div class="related-grid">
      <a href="events-webinar" class="rel-card reveal">
        <div class="rc-icon"><i class="fas fa-calendar-alt"></i></div>
        <h4>Events &amp; Webinars</h4>
        <p>Get answers live — join our free webinars and interact directly with advisors.</p>
        <span class="rc-link">Explore <i class="fas fa-arrow-right"></i></span>
      </a>
      <a href="tax-efficient-investment" class="rel-card reveal rd1">
        <div class="rc-icon"><i class="fas fa-file-invoice-dollar"></i></div>
        <h4>Tax-Efficient Investing</h4>
        <p>Dive deeper into the tax strategies that answer the most popular FAQ questions.</p>
        <span class="rc-link">Explore <i class="fas fa-arrow-right"></i></span>
      </a>
      <a href="health-insurance" class="rel-card reveal rd2">
        <div class="rc-icon"><i class="fas fa-heartbeat"></i></div>
        <h4>Health Insurance</h4>
        <p>Full advisory guide covering every insurance question answered in our FAQ.</p>
        <span class="rc-link">Explore <i class="fas fa-arrow-right"></i></span>
      </a>
      <a href="contact" class="rel-card reveal rd3">
        <div class="rc-icon"><i class="fas fa-user-tie"></i></div>
        <h4>Free Advisory Call</h4>
        <p>Skip the reading — speak directly with an advisor about your specific situation.</p>
        <span class="rc-link">Book Now <i class="fas fa-arrow-right"></i></span>
      </a>
    </div>
  </div>
</section>

<script>
(function(){
  /* Scroll reveal */
  var obs=new IntersectionObserver(function(entries){entries.forEach(function(e){if(e.isIntersecting){e.target.classList.add('visible');obs.unobserve(e.target)}})},{threshold:.12});
  document.querySelectorAll('.reveal').forEach(function(el){obs.observe(el)});

  /* Counter */
  function animCounter(el){var raw=parseFloat(el.dataset.counter),suffix=el.dataset.suffix||'',start=null,dur=1800;
    function step(ts){if(!start)start=ts;var p=Math.min((ts-start)/dur,1),e=1-Math.pow(1-p,3),cur=Math.round(raw*e);
      el.textContent=(cur>=1000?cur.toLocaleString('en-IN'):cur)+suffix;if(p<1)requestAnimationFrame(step)}
    requestAnimationFrame(step)}
  var co=new IntersectionObserver(function(entries){entries.forEach(function(e){if(e.isIntersecting&&!e.target.dataset.done){e.target.dataset.done='1';animCounter(e.target);co.unobserve(e.target)}})},{threshold:.5});
  document.querySelectorAll('[data-counter]').forEach(function(el){co.observe(el)});

  /* Bar fills */
  var bo=new IntersectionObserver(function(entries){entries.forEach(function(e){if(e.isIntersecting){e.target.classList.add('anim');bo.unobserve(e.target)}})},{threshold:.3});
  document.querySelectorAll('.fqcm-bar').forEach(function(el){bo.observe(el)});

  /* FAQ accordion */
  document.querySelectorAll('.faq-btn').forEach(function(btn){
    btn.addEventListener('click',function(){
      var item=btn.closest('.faq-item'),isOpen=item.classList.contains('open');
      document.querySelectorAll('.faq-item').forEach(function(i){i.classList.remove('open')});
      if(!isOpen)item.classList.add('open');
      // scroll sidebar nav
      var sec=item.closest('.fq-section');
      if(sec){var cat=sec.dataset.section;document.querySelectorAll('.snav-item').forEach(function(n){n.classList.toggle('active',n.dataset.cat===cat||cat===undefined)})}
    });
  });

  /* Category tabs + sidebar nav */
  function setActiveCategory(cat){
    document.querySelectorAll('.cat-tab').forEach(function(t){t.classList.toggle('active',t.dataset.cat===cat)});
    document.querySelectorAll('.snav-item').forEach(function(n){n.classList.toggle('active',n.dataset.cat===cat)});
    document.querySelectorAll('.fq-section').forEach(function(s){
      if(cat==='all'){s.style.display='';return}
      s.style.display=(s.dataset.section===cat)?'':'none';
    });
  }
  document.querySelectorAll('.cat-tab').forEach(function(t){t.addEventListener('click',function(){setActiveCategory(t.dataset.cat)})});
  document.querySelectorAll('.snav-item').forEach(function(n){n.addEventListener('click',function(){setActiveCategory(n.dataset.cat);document.getElementById('faq-main').scrollIntoView({behavior:'smooth'})})});

  /* Search */
  var searchInput=document.getElementById('faqSearch');
  if(searchInput){
    searchInput.addEventListener('input',function(){
      var q=this.value.toLowerCase().trim();
      document.querySelectorAll('.faq-section').forEach(function(s){s.style.display=''});
      document.querySelectorAll('.cat-tab,.snav-item').forEach(function(t){t.classList.toggle('active',t.dataset.cat==='all')});
      if(!q)return;
      document.querySelectorAll('.faq-item').forEach(function(item){
        var text=(item.dataset.q||'')+(item.querySelector('.faq-q-text')||{textContent:''}).textContent.toLowerCase();
        item.style.display=text.includes(q)?'':'none';
      });
    });
  }
  window.searchFaq=function(term){if(searchInput){searchInput.value=term;searchInput.dispatchEvent(new Event('input'))}};

  /* Helpful buttons */
  document.querySelectorAll('.helpful-btn').forEach(function(btn){
    btn.addEventListener('click',function(){
      var wrap=btn.closest('.faq-helpful-btns');
      wrap.innerHTML='<span style="font-size:12px;color:#16a34a"><i class="fas fa-check"></i> Thanks for your feedback!</span>';
    });
  });
})();
</script>

<?php include_once ('elements/footer.php'); ?>