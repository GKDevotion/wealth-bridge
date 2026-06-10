<?php include_once ('elements/header.php'); ?>

    <!-- Custom CSS -->
    <link href="<?php echo UrlHelper::asset('css/blog.css'); ?>" rel="stylesheet">

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
            <span class="current">Blog</span>
        </div>
    </div>
</div>


<!-- ═══ HERO ═══ -->
<section class="bl-hero">
  <div class="h-bg"></div>
  <div class="h-grid"></div>
  <div class="h-vline l1"></div>
  <div class="h-vline l2"></div>
  <div class="h-rule"></div>

  <div class="container">
    <div class="hero-inner">
      <!-- Left -->
      <div>
        <div class="h-label">Insights &nbsp;·&nbsp; Blog</div>
        <h1 class="h-title">
          Ideas That Build<br>
          <em>Lasting Wealth —</em>
          Written by Advisors
        </h1>
        <p class="h-sub">
          No sponsored content. No product pushes. Just clear, actionable thinking on tax, investing,
          real estate, insurance, and retirement — written by the same advisors who manage
          ₹2,200Cr+ in client wealth.
        </p>
        <div class="h-actions">
          <a href="#posts" class="btn btn-primary">Browse All Posts <i class="fas fa-arrow-right"></i></a>
          <a href="#newsletter" class="btn btn-ghost">Get Weekly Digest <i class="fas fa-envelope"></i></a>
        </div>
        <div class="h-stats">
          <div class="h-stat"><div class="hs-n" data-counter="320" data-suffix="+">320+</div><div class="hs-l">Posts Published</div></div>
          <div class="h-stat"><div class="hs-n" data-counter="68000" data-suffix="+">68K+</div><div class="hs-l">Monthly Readers</div></div>
          <div class="h-stat"><div class="hs-n" data-counter="6" data-suffix=" authors">6</div><div class="hs-l">Expert Authors</div></div>
        </div>
      </div>

      <!-- Right — featured post card -->
      <div class="hero-visual">
        <div class="h-float f1">
          <div class="hfl">Latest Post</div>
          <div class="hfv">Tax Planning <span>·</span></div>
          <div class="hfs">Published Today</div>
        </div>
        <div class="hv-card">
          <div class="hv-thumb" style="background:linear-gradient(135deg,#1a0608,#2d0c10)">
            <div class="hv-thumb-glow"></div>
            <i class="fas fa-file-invoice-dollar hv-thumb-icon"></i>
            <span class="hv-cat-pill">Tax Planning</span>
            <span class="hv-read-time">8 min</span>
          </div>
          <div class="hv-body">
            <div class="hv-meta">
              <span class="hv-meta-tag">FY 2025-26</span>
              <span>·</span>
              <span class="hv-meta-date">June 9, 2025</span>
            </div>
            <div class="hv-title">The Complete FY26 Tax Planning Checklist: 14 Actions Before March 31</div>
            <div class="hv-excerpt">From NPS top-up to LTCG harvesting — a step-by-step checklist of every tax move to make before the financial year ends.</div>
            <div class="hv-footer">
              <div class="hv-author">
                <div class="hv-av">RN</div>
                <span class="hv-author-name">Rajesh Nair · Tax Head</span>
              </div>
              <a href="#" class="hv-read-link">Read <i class="fas fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <div class="h-float f2">
          <div class="hfl">Most Read This Month</div>
          <div class="hfv">24,800 <span>reads</span></div>
          <div class="hfs">LTCG Harvesting Guide</div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ═══ FILTER BAR ═══ -->
<div class="bl-filter">
  <div class="container">
    <div class="filter-inner">
      <div class="cat-tabs">
        <button class="cat-tab active" data-cat="all">All Posts</button>
        <button class="cat-tab" data-cat="tax">Tax Planning</button>
        <button class="cat-tab" data-cat="investing">Investing &amp; SIP</button>
        <button class="cat-tab" data-cat="realestate">Real Estate</button>
        <button class="cat-tab" data-cat="insurance">Insurance</button>
        <button class="cat-tab" data-cat="retirement">Retirement</button>
        <button class="cat-tab" data-cat="nri">NRI</button>
      </div>
      <div class="search-wrap">
        <i class="fas fa-search"></i>
        <input type="text" id="blogSearch" placeholder="Search posts…">
      </div>
    </div>
  </div>
</div>


<!-- ═══ FEATURED POST BANNER ═══ -->
<div class="bl-featured">
  <div class="container">
    <div class="featured-post reveal">
      <div class="fp-bg"></div>
      <div class="fp-content">
        <div class="fp-eyebrow">Editor's Pick · Deep Dive</div>
        <h2 class="fp-title">The Complete Guide to LTCG Tax Harvesting: Save ₹12,500+ Every Year Without Selling Your Portfolio</h2>
        <p class="fp-excerpt">Most equity investors don't know that the government gives them ₹1.25 lakh in tax-free gains every year — and that you can strategically "use" this allowance annually to permanently reduce your future tax liability without disrupting your investment thesis. This is the most under-used wealth creation strategy available to Indian investors today.</p>
        <div class="fp-meta">
          <div class="fp-meta-item"><i class="fas fa-user"></i><span>By <strong>Rajesh Nair</strong></span></div>
          <div class="fp-meta-item"><i class="fas fa-calendar"></i><span><strong>May 28, 2025</strong></span></div>
          <div class="fp-meta-item"><i class="fas fa-clock"></i><span><strong>14 min read</strong></span></div>
          <div class="fp-meta-item"><i class="fas fa-eye"></i><span><strong>24,800 reads</strong></span></div>
        </div>
        <div class="fp-tags">
          <span class="fp-tag">LTCG</span>
          <span class="fp-tag">Tax Planning</span>
          <span class="fp-tag">Equity Investing</span>
          <span class="fp-tag">FY26 Strategy</span>
        </div>
        <div class="fp-actions">
          <a href="#" class="btn btn-primary">Read the Full Guide <i class="fas fa-arrow-right"></i></a>
          <a href="#" class="btn btn-ghost"><i class="fas fa-bookmark"></i> Save for Later</a>
        </div>
      </div>
      <div class="fp-visual">
        <div class="fp-visual-icon"><i class="fas fa-file-invoice-dollar"></i></div>
        <div class="fp-read-metric">
          <div class="fp-rm-n">14</div>
          <div class="fp-rm-l">minute read</div>
        </div>
        <div class="fp-series-badge"><i class="fas fa-star" style="font-size:9px"></i> Most Read · May 2025</div>
      </div>
    </div>
  </div>
</div>


<!-- ═══ MAIN BLOG GRID + SIDEBAR ═══ -->
<div class="bl-main" id="posts">
  <div class="container">
    <div class="blog-layout">

      <!-- POSTS GRID -->
      <div>
        <div class="sec-hdr" style="margin-bottom:32px">
          <div class="label reveal">Latest Posts</div>
          <h2 class="sec-title reveal d1">This Week on <span>WealthBridge Blog</span></h2>
        </div>

        <div class="blog-grid" id="blogGrid">

          <!-- Wide post 1 -->
          <div class="blog-card wide reveal" data-cat="tax">
            <div class="bc-thumb" style="background:linear-gradient(135deg,#111,#1e1e1e)">
              <div class="bc-thumb-glow"></div>
              <i class="fas fa-balance-scale bc-thumb-icon"></i>
              <span class="bc-cat-pill">Tax Planning</span>
              <span class="bc-read-pill">10 min</span>
            </div>
            <div class="bc-body">
              <div class="bc-date">June 8, 2025</div>
              <div class="bc-title">Old Regime vs New Regime FY26: The Exact Crossover Point for Every Income Slab</div>
              <div class="bc-excerpt">We ran the numbers for ₹8L, ₹12L, ₹15L, ₹20L, and ₹30L incomes. Here's the precise deduction threshold at which the old regime wins — and why most high-earners with home loans should stay put.</div>
              <div class="bc-footer">
                <div class="bc-author">
                  <div class="bc-av" style="background:linear-gradient(135deg,#065f46,#059669)">RN</div>
                  <span class="bc-author-name">Rajesh Nair</span>
                </div>
                <a href="#" class="bc-read-link">Read Article <i class="fas fa-arrow-right"></i></a>
              </div>
            </div>
          </div>

          <!-- Post 2 -->
          <div class="blog-card reveal" data-cat="investing">
            <div class="bc-thumb" style="background:linear-gradient(135deg,#0f3d8a,#1a5cbf)">
              <div class="bc-thumb-glow"></div>
              <i class="fas fa-chart-line bc-thumb-icon"></i>
              <span class="bc-cat-pill">Investing</span>
              <span class="bc-read-pill">7 min</span>
            </div>
            <div class="bc-body">
              <div class="bc-date">June 7, 2025</div>
              <div class="bc-title">Why I Tell Clients to Stop at 4 Mutual Funds — and Which 4</div>
              <div class="bc-excerpt">Portfolio overlap is one of the most common and silent wealth-destroyers. After reviewing 3,000+ client portfolios, here's the optimal fund structure — and the specific allocation rationale.</div>
              <div class="bc-footer">
                <div class="bc-author">
                  <div class="bc-av" style="background:linear-gradient(135deg,#0f3d8a,#1a5cbf)">AS</div>
                  <span class="bc-author-name">Ananya Sharma</span>
                </div>
                <a href="#" class="bc-read-link">Read <i class="fas fa-arrow-right"></i></a>
              </div>
            </div>
          </div>

          <!-- Post 3 -->
          <div class="blog-card reveal d1" data-cat="realestate">
            <div class="bc-thumb" style="background:linear-gradient(135deg,#431407,#9a3412)">
              <div class="bc-thumb-glow"></div>
              <i class="fas fa-building bc-thumb-icon"></i>
              <span class="bc-cat-pill">Real Estate</span>
              <span class="bc-read-pill">9 min</span>
            </div>
            <div class="bc-body">
              <div class="bc-date">June 6, 2025</div>
              <div class="bc-title">The 5 Questions to Ask Before Signing Any Builder-Buyer Agreement</div>
              <div class="bc-excerpt">In 12 years of real estate advisory, these are the five clauses that have either protected or destroyed clients' investments — and most buyers never ask about them.</div>
              <div class="bc-footer">
                <div class="bc-author">
                  <div class="bc-av" style="background:linear-gradient(135deg,#431407,#9a3412)">PM</div>
                  <span class="bc-author-name">Priya Mehta</span>
                </div>
                <a href="#" class="bc-read-link">Read <i class="fas fa-arrow-right"></i></a>
              </div>
            </div>
          </div>

          <!-- Post 4 -->
          <div class="blog-card reveal" data-cat="insurance">
            <div class="bc-thumb" style="background:linear-gradient(135deg,#4c1d95,#7c3aed)">
              <div class="bc-thumb-glow"></div>
              <i class="fas fa-heartbeat bc-thumb-icon"></i>
              <span class="bc-cat-pill">Insurance</span>
              <span class="bc-read-pill">6 min</span>
            </div>
            <div class="bc-body">
              <div class="bc-date">June 5, 2025</div>
              <div class="bc-title">The One Number That Tells You If Your Health Cover is Adequate</div>
              <div class="bc-excerpt">It's not the premium. It's the sum insured divided by the average ICU cost in your city. If the number is below 3, you're underinsured — no matter what your policy document says.</div>
              <div class="bc-footer">
                <div class="bc-author">
                  <div class="bc-av" style="background:linear-gradient(135deg,#4c1d95,#7c3aed)">SK</div>
                  <span class="bc-author-name">Suresh Kumar</span>
                </div>
                <a href="#" class="bc-read-link">Read <i class="fas fa-arrow-right"></i></a>
              </div>
            </div>
          </div>

          <!-- Post 5 -->
          <div class="blog-card reveal d1" data-cat="retirement">
            <div class="bc-thumb" style="background:linear-gradient(135deg,#7c2d12,#c2410c)">
              <div class="bc-thumb-glow"></div>
              <i class="fas fa-umbrella-beach bc-thumb-icon"></i>
              <span class="bc-cat-pill">Retirement</span>
              <span class="bc-read-pill">11 min</span>
            </div>
            <div class="bc-body">
              <div class="bc-date">June 4, 2025</div>
              <div class="bc-title">The ₹1 Crore Retirement Myth: Why It Falls Short — and What the Actual Number Is</div>
              <div class="bc-excerpt">A ₹1Cr corpus at 7% withdrawal in 1990 was generous. In 2025, with 6% inflation and 12% healthcare costs, it barely covers 12 years. Here's how to calculate what you actually need.</div>
              <div class="bc-footer">
                <div class="bc-author">
                  <div class="bc-av" style="background:linear-gradient(135deg,#7c2d12,#c2410c)">AT</div>
                  <span class="bc-author-name">Arun Trivedi</span>
                </div>
                <a href="#" class="bc-read-link">Read <i class="fas fa-arrow-right"></i></a>
              </div>
            </div>
          </div>

          <!-- Post 6 -->
          <div class="blog-card reveal" data-cat="nri">
            <div class="bc-thumb" style="background:linear-gradient(135deg,#0f3460,#1a6bbf)">
              <div class="bc-thumb-glow"></div>
              <i class="fas fa-globe bc-thumb-icon"></i>
              <span class="bc-cat-pill">NRI</span>
              <span class="bc-read-pill">8 min</span>
            </div>
            <div class="bc-body">
              <div class="bc-date">June 3, 2025</div>
              <div class="bc-title">NRI Returning to India: The 7-Step Financial Checklist for the Year Before You Come Back</div>
              <div class="bc-excerpt">Residential status change has massive tax implications — on your global income, Indian investments, and bank accounts. Most NRIs discover this too late. Here's how to prepare.</div>
              <div class="bc-footer">
                <div class="bc-author">
                  <div class="bc-av" style="background:linear-gradient(135deg,#0f3460,#1a6bbf)">DV</div>
                  <span class="bc-author-name">Deepa Venkataraman</span>
                </div>
                <a href="#" class="bc-read-link">Read <i class="fas fa-arrow-right"></i></a>
              </div>
            </div>
          </div>

          <!-- Post 7 -->
          <div class="blog-card reveal d1" data-cat="investing">
            <div class="bc-thumb" style="background:linear-gradient(135deg,#14532d,#166534)">
              <div class="bc-thumb-glow"></div>
              <i class="fas fa-seedling bc-thumb-icon"></i>
              <span class="bc-cat-pill">Investing</span>
              <span class="bc-read-pill">5 min</span>
            </div>
            <div class="bc-body">
              <div class="bc-date">June 2, 2025</div>
              <div class="bc-title">SIP Step-Up: The Single Habit That Turns ₹5,000/Month into ₹2.8 Crore</div>
              <div class="bc-excerpt">Increasing your SIP by just 10% every year doesn't feel like much. Over 25 years at 12% CAGR, it adds ₹1.2Cr to your final corpus compared to a flat SIP. Here's why — with the numbers.</div>
              <div class="bc-footer">
                <div class="bc-author">
                  <div class="bc-av" style="background:linear-gradient(135deg,#14532d,#166534)">AS</div>
                  <span class="bc-author-name">Ananya Sharma</span>
                </div>
                <a href="#" class="bc-read-link">Read <i class="fas fa-arrow-right"></i></a>
              </div>
            </div>
          </div>

          <!-- Post 8 -->
          <div class="blog-card reveal" data-cat="tax">
            <div class="bc-thumb" style="background:linear-gradient(135deg,#1e1b4b,#3730a3)">
              <div class="bc-thumb-glow"></div>
              <i class="fas fa-piggy-bank bc-thumb-icon"></i>
              <span class="bc-cat-pill">Tax Planning</span>
              <span class="bc-read-pill">6 min</span>
            </div>
            <div class="bc-body">
              <div class="bc-date">June 1, 2025</div>
              <div class="bc-title">NPS 80CCD(1B): The ₹50,000 Deduction 60% of Salaried Professionals Are Missing</div>
              <div class="bc-excerpt">It's the most underused tax benefit available to salaried Indians. Opens a ₹50,000 deduction window beyond the ₹1.5L 80C limit. Here's how to set it up in 48 hours.</div>
              <div class="bc-footer">
                <div class="bc-author">
                  <div class="bc-av" style="background:linear-gradient(135deg,#065f46,#059669)">RN</div>
                  <span class="bc-author-name">Rajesh Nair</span>
                </div>
                <a href="#" class="bc-read-link">Read <i class="fas fa-arrow-right"></i></a>
              </div>
            </div>
          </div>

        </div><!-- /blog-grid -->

        <div class="load-more-wrap reveal">
          <button class="btn btn-outline" id="loadMoreBtn">
            Load More Posts <i class="fas fa-chevron-down"></i>
          </button>
        </div>

        <!-- No results state (hidden) -->
        <div id="noResults" style="display:none;text-align:center;padding:48px 0">
          <i class="fas fa-search" style="font-size:2rem;color:var(--gray-300);margin-bottom:16px;display:block"></i>
          <div style="font-size:16px;font-weight:700;color:var(--black);margin-bottom:8px">No posts found</div>
          <div style="font-size:14px;color:var(--gray-500)">Try a different search term or browse all posts.</div>
        </div>

      </div><!-- /posts column -->

      <!-- SIDEBAR -->
      <aside class="blog-sidebar">

        <!-- Popular posts -->
        <div class="sb-block reveal">
          <div class="sb-head"><span class="sb-head-title">Most Read</span><a href="#" class="sb-link">All <i class="fas fa-chevron-right" style="font-size:9px"></i></a></div>
          <div class="popular-list">
            <div class="pop-item">
              <div class="pop-num">1</div>
              <div>
                <div class="pop-title">LTCG Tax Harvesting: The Complete Guide</div>
                <div class="pop-meta">24,800 reads · May 2025</div>
              </div>
            </div>
            <div class="pop-item">
              <div class="pop-num">2</div>
              <div>
                <div class="pop-title">Old vs New Regime: FY26 Crossover Calculator</div>
                <div class="pop-meta">18,400 reads · Jun 2025</div>
              </div>
            </div>
            <div class="pop-item">
              <div class="pop-num">3</div>
              <div>
                <div class="pop-title">The ₹1Cr Retirement Myth: The Real Number</div>
                <div class="pop-meta">14,200 reads · Jun 2025</div>
              </div>
            </div>
            <div class="pop-item">
              <div class="pop-num">4</div>
              <div>
                <div class="pop-title">Health Insurance: The One Number That Matters</div>
                <div class="pop-meta">11,600 reads · Jun 2025</div>
              </div>
            </div>
            <div class="pop-item">
              <div class="pop-num">5</div>
              <div>
                <div class="pop-title">SIP Step-Up: ₹5K/Month to ₹2.8 Crore</div>
                <div class="pop-meta">9,800 reads · Jun 2025</div>
              </div>
            </div>
          </div>
        </div>

        <!-- Author shortcuts -->
        <div class="sb-block reveal d1">
          <div class="sb-head"><span class="sb-head-title">Our Authors</span></div>
          <div class="author-list">
            <div class="author-row">
              <div class="author-av" style="background:linear-gradient(135deg,#065f46,#059669)">RN</div>
              <div><div class="author-name">Rajesh Nair</div><div class="author-role">Head of Tax Advisory</div></div>
              <span class="author-count">84 posts</span>
            </div>
            <div class="author-row">
              <div class="author-av" style="background:linear-gradient(135deg,#0f3d8a,#1a5cbf)">AS</div>
              <div><div class="author-name">Ananya Sharma</div><div class="author-role">Chief Investment Officer</div></div>
              <span class="author-count">72 posts</span>
            </div>
            <div class="author-row">
              <div class="author-av" style="background:linear-gradient(135deg,#431407,#9a3412)">PM</div>
              <div><div class="author-name">Priya Mehta</div><div class="author-role">Head of Real Estate</div></div>
              <span class="author-count">58 posts</span>
            </div>
            <div class="author-row">
              <div class="author-av" style="background:linear-gradient(135deg,#4c1d95,#7c3aed)">SK</div>
              <div><div class="author-name">Suresh Kumar</div><div class="author-role">Head of Insurance</div></div>
              <span class="author-count">44 posts</span>
            </div>
          </div>
        </div>

        <!-- Tags -->
        <div class="sb-block reveal d2">
          <div class="sb-head"><span class="sb-head-title">Browse by Topic</span></div>
          <div class="tags-cloud">
            <span class="t-tag active">All</span>
            <span class="t-tag">LTCG</span><span class="t-tag">NPS</span>
            <span class="t-tag">80C</span><span class="t-tag">SIP</span>
            <span class="t-tag">ELSS</span><span class="t-tag">PPF</span>
            <span class="t-tag">Real Estate</span><span class="t-tag">Health Insurance</span>
            <span class="t-tag">Term Life</span><span class="t-tag">NRI</span>
            <span class="t-tag">Budget 2025</span><span class="t-tag">Retirement</span>
            <span class="t-tag">Home Loan</span><span class="t-tag">REITs</span>
          </div>
        </div>

        <!-- Newsletter mini -->
        <div class="sb-block reveal d3" id="newsletter-mini">
          <div class="sb-head"><span class="sb-head-title">Weekly Digest</span></div>
          <div class="sb-nl">
            <div class="sb-nl-title">New posts every week.</div>
            <div class="sb-nl-desc">Get the top 3 WealthBridge posts delivered to your inbox every Sunday. Under 5 minutes, no noise.</div>
            <input class="sb-nl-input" type="email" placeholder="Your email address">
            <button class="btn btn-primary" style="width:100%;justify-content:center">Subscribe <i class="fas fa-arrow-right"></i></button>
            <p class="sb-nl-note"><i class="fas fa-lock" style="margin-right:4px"></i>14K+ subscribers · No spam</p>
          </div>
        </div>

      </aside>
    </div><!-- /blog-layout -->
  </div>
</div>


<!-- ═══ BLOG SERIES ═══ -->
<section class="section bl-series">
  <div class="container">
    <div class="sec-hdr center">
      <div class="label reveal">Read in Order</div>
      <h2 class="sec-title reveal d1">Multi-Part <span>Series</span></h2>
      <p class="sec-sub reveal d2" style="margin:0 auto">Some topics deserve more than one post. These structured series walk you through complex subjects from first principles to advanced strategy.</p>
    </div>
    <div class="series-grid">

      <div class="series-card reveal">
        <div class="sc-head">
          <div class="sc-icon"><i class="fas fa-file-invoice-dollar"></i></div>
          <div><div class="sc-label">Series · 6 Parts</div><div class="sc-name">The Complete FY26 Tax Planning Series</div></div>
        </div>
        <div class="sc-posts">
          <div class="sc-post"><div class="sc-post-num">1</div><div class="sc-post-title">Old vs New Regime: Making the Right Choice</div><span class="sc-post-min">10 min</span></div>
          <div class="sc-post"><div class="sc-post-num">2</div><div class="sc-post-title">Maximising 80C: ELSS vs PPF vs Home Loan</div><span class="sc-post-min">8 min</span></div>
          <div class="sc-post"><div class="sc-post-num">3</div><div class="sc-post-title">The NPS 80CCD(1B) Deep Dive</div><span class="sc-post-min">7 min</span></div>
          <div class="sc-post"><div class="sc-post-num">4</div><div class="sc-post-title">LTCG Tax Harvesting: Step-by-Step</div><span class="sc-post-min">14 min</span></div>
          <div class="sc-post"><div class="sc-post-num">5</div><div class="sc-post-title">80D, HRA, and Home Loan Together</div><span class="sc-post-min">9 min</span></div>
          <div class="sc-post"><div class="sc-post-num">6</div><div class="sc-post-title">The FY26 End-of-Year Checklist</div><span class="sc-post-min">8 min</span></div>
        </div>
        <div class="sc-footer">
          <span class="sc-count">6 parts · 56 min total</span>
          <a href="#" class="sc-start">Start Series <i class="fas fa-arrow-right"></i></a>
        </div>
      </div>

      <div class="series-card reveal d1">
        <div class="sc-head">
          <div class="sc-icon"><i class="fas fa-chart-line"></i></div>
          <div><div class="sc-label">Series · 5 Parts</div><div class="sc-name">Building a Goal-Based SIP Portfolio from Scratch</div></div>
        </div>
        <div class="sc-posts">
          <div class="sc-post"><div class="sc-post-num">1</div><div class="sc-post-title">Goal-Based Investing: The Framework</div><span class="sc-post-min">8 min</span></div>
          <div class="sc-post"><div class="sc-post-num">2</div><div class="sc-post-title">Choosing the Right 4 Funds</div><span class="sc-post-min">10 min</span></div>
          <div class="sc-post"><div class="sc-post-num">3</div><div class="sc-post-title">SIP Amount, Step-Up, and Timing</div><span class="sc-post-min">7 min</span></div>
          <div class="sc-post"><div class="sc-post-num">4</div><div class="sc-post-title">Rebalancing: When and How</div><span class="sc-post-min">6 min</span></div>
          <div class="sc-post"><div class="sc-post-num">5</div><div class="sc-post-title">The Glide Path: Protecting What You Built</div><span class="sc-post-min">9 min</span></div>
        </div>
        <div class="sc-footer">
          <span class="sc-count">5 parts · 40 min total</span>
          <a href="#" class="sc-start">Start Series <i class="fas fa-arrow-right"></i></a>
        </div>
      </div>

      <div class="series-card reveal d2">
        <div class="sc-head">
          <div class="sc-icon"><i class="fas fa-globe"></i></div>
          <div><div class="sc-label">Series · 4 Parts</div><div class="sc-name">The Complete NRI Investment Guide for India</div></div>
        </div>
        <div class="sc-posts">
          <div class="sc-post"><div class="sc-post-num">1</div><div class="sc-post-title">NRE vs NRO vs FCNR: Which Account When</div><span class="sc-post-min">9 min</span></div>
          <div class="sc-post"><div class="sc-post-num">2</div><div class="sc-post-title">Investing in Indian Mutual Funds as an NRI</div><span class="sc-post-min">8 min</span></div>
          <div class="sc-post"><div class="sc-post-num">3</div><div class="sc-post-title">NRI Real Estate: FEMA, Tax, and Title</div><span class="sc-post-min">12 min</span></div>
          <div class="sc-post"><div class="sc-post-num">4</div><div class="sc-post-title">The Return-to-India Financial Checklist</div><span class="sc-post-min">10 min</span></div>
        </div>
        <div class="sc-footer">
          <span class="sc-count">4 parts · 39 min total</span>
          <a href="#" class="sc-start">Start Series <i class="fas fa-arrow-right"></i></a>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- ═══ AUTHOR SPOTLIGHT ═══ -->
<section class="section bl-authors">
  <div class="container">
    <div class="sec-hdr center">
      <div class="label reveal">Written by Advisors</div>
      <h2 class="sec-title reveal d1">Meet the <span>Authors</span></h2>
      <p class="sec-sub reveal d2" style="margin:0 auto">Every post is written by the advisor who actually does this work for clients. No ghost writers, no content agencies, no sponsored opinions.</p>
    </div>
    <div class="authors-full-grid">

      <div class="author-card reveal">
        <div class="ac-av" style="background:linear-gradient(135deg,#065f46,#059669)">RN</div>
        <div class="ac-name">Rajesh Nair</div>
        <div class="ac-title">Head of Tax Advisory · CA, CFP</div>
        <div class="ac-bio">18 years in personal taxation. Has reviewed 8,000+ ITRs. Writes every post with one question: "what does this save you specifically?"</div>
        <div class="ac-stats">
          <div><div class="ac-stat-n">84</div><div class="ac-stat-l">Posts</div></div>
          <div><div class="ac-stat-n">18yr</div><div class="ac-stat-l">Exp.</div></div>
        </div>
      </div>

      <div class="author-card reveal d1">
        <div class="ac-av" style="background:linear-gradient(135deg,#0f3d8a,#1a5cbf)">AS</div>
        <div class="ac-name">Ananya Sharma</div>
        <div class="ac-title">Chief Investment Officer · CFA</div>
        <div class="ac-bio">Former Franklin Templeton fund manager. Writes about portfolio construction, fund selection, and long-term wealth creation with data-first rigour.</div>
        <div class="ac-stats">
          <div><div class="ac-stat-n">72</div><div class="ac-stat-l">Posts</div></div>
          <div><div class="ac-stat-n">16yr</div><div class="ac-stat-l">Exp.</div></div>
        </div>
      </div>

      <div class="author-card reveal d2">
        <div class="ac-av" style="background:linear-gradient(135deg,#431407,#9a3412)">PM</div>
        <div class="ac-name">Priya Mehta</div>
        <div class="ac-title">Head of Real Estate · RERA</div>
        <div class="ac-bio">Veteran of ₹500Cr+ in property transactions. Writes about micro-market analysis, NRI investing, and the legal pitfalls most buyers discover too late.</div>
        <div class="ac-stats">
          <div><div class="ac-stat-n">58</div><div class="ac-stat-l">Posts</div></div>
          <div><div class="ac-stat-n">14yr</div><div class="ac-stat-l">Exp.</div></div>
        </div>
      </div>

      <div class="author-card reveal d3">
        <div class="ac-av" style="background:linear-gradient(135deg,#4c1d95,#7c3aed)">SK</div>
        <div class="ac-name">Suresh Kumar</div>
        <div class="ac-title">Head of Insurance · IRDAI, CFP</div>
        <div class="ac-bio">12 years structuring health and life policies. Writes about insurance with the same clarity he uses when helping clients navigate claims at 11pm.</div>
        <div class="ac-stats">
          <div><div class="ac-stat-n">44</div><div class="ac-stat-l">Posts</div></div>
          <div><div class="ac-stat-n">12yr</div><div class="ac-stat-l">Exp.</div></div>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- ═══ NEWSLETTER STRIP ═══ -->
<div class="bl-nl reveal" id="newsletter">
  <div class="container">
    <div class="nl-inner">
      <div>
        <div class="nl-title">Get the WealthBridge Weekly Blog Digest</div>
        <p class="nl-desc">The top 3 posts from the week — curated by our editors, delivered every Sunday morning. Practical, advisor-written content. No fluff, no sponsors.</p>
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
<section class="bl-cta" id="contact">
  <div class="container">
    <div class="cta-inner">
      <div class="label reveal" style="justify-content:center">From Reading to Acting</div>
      <h2 class="cta-title reveal d1">
        The Best Insights Are Useless<br>
        <span>Until Someone Applies Them to Your Life.</span>
      </h2>
      <p class="cta-desc reveal d2">
        Every post on this blog reflects a real decision facing your money. Our advisors turn these
        ideas into action — for your specific income, tax situation, and goals. Free, no commitment.
      </p>
      <div class="cta-actions reveal d2">
        <a href="contact" class="btn btn-primary">Book Free Advisory Call <i class="fas fa-arrow-right"></i></a>
        <a href="events-webinar" class="btn btn-ghost"><i class="fas fa-calendar"></i> Attend a Free Webinar</a>
      </div>
      <div class="cta-trust reveal d3">
        <div class="ct-item"><i class="fas fa-check-circle"></i> SEBI Registered</div>
        <div class="ct-item"><i class="fas fa-check-circle"></i> 320+ Posts Published</div>
        <div class="ct-item"><i class="fas fa-check-circle"></i> Zero Sponsored Content</div>
        <div class="ct-item"><i class="fas fa-check-circle"></i> Written by Working Advisors</div>
      </div>
    </div>
  </div>
</section>


<!-- ═══ RELATED ═══ -->
<section class="section bl-related">
  <div class="container">
    <div class="sec-hdr reveal">
      <div class="label">Also in Insights</div>
      <h2 class="sec-title">More <span>Resources</span></h2>
    </div>
    <div class="related-grid">
      <a href="news" class="rel-card reveal">
        <div class="rc-icon"><i class="fas fa-newspaper"></i></div>
        <h4>News &amp; Market Intelligence</h4>
        <p>Market moves, RBI decisions, and budget updates — analysed for your portfolio.</p>
        <span class="rc-link">Read News <i class="fas fa-arrow-right"></i></span>
      </a>
      <a href="events-webinar" class="rel-card reveal d1">
        <div class="rc-icon"><i class="fas fa-calendar-alt"></i></div>
        <h4>Events &amp; Webinars</h4>
        <p>Get these ideas live — with interactive Q&amp;A from our advisors.</p>
        <span class="rc-link">Browse Events <i class="fas fa-arrow-right"></i></span>
      </a>
      <a href="faq" class="rel-card reveal d2">
        <div class="rc-icon"><i class="fas fa-question-circle"></i></div>
        <h4>FAQ</h4>
        <p>Quick, direct answers to the most common questions behind every blog topic.</p>
        <span class="rc-link">Read FAQ <i class="fas fa-arrow-right"></i></span>
      </a>
      <a href="contact" class="rel-card reveal d3">
        <div class="rc-icon"><i class="fas fa-user-tie"></i></div>
        <h4>Book Advisory Call</h4>
        <p>Apply these strategies to your specific situation — free, no commitment.</p>
        <span class="rc-link">Book Free Call <i class="fas fa-arrow-right"></i></span>
      </a>
    </div>
  </div>
</section>


<script>
(function () {

  /* ── Scroll Reveal ── */
  var ro = new IntersectionObserver(function (entries) {
    entries.forEach(function (e) {
      if (e.isIntersecting) { e.target.classList.add('visible'); ro.unobserve(e.target); }
    });
  }, { threshold: 0.12 });
  document.querySelectorAll('.reveal').forEach(function (el) { ro.observe(el); });

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
  var co = new IntersectionObserver(function (entries) {
    entries.forEach(function (e) {
      if (e.isIntersecting && !e.target.dataset.done) {
        e.target.dataset.done = '1'; animCounter(e.target); co.unobserve(e.target);
      }
    });
  }, { threshold: 0.5 });
  document.querySelectorAll('[data-counter]').forEach(function (el) { co.observe(el); });

  /* ── Category filter tabs ── */
  var allCards = Array.from(document.querySelectorAll('#blogGrid .blog-card'));
  function filterPosts(cat) {
    var visible = 0;
    allCards.forEach(function (card) {
      var match = cat === 'all' || card.dataset.cat === cat;
      card.style.display = match ? '' : 'none';
      if (match) visible++;
    });
    document.getElementById('noResults').style.display = visible === 0 ? 'block' : 'none';
    /* Reset wide class if single-column fallback */
  }
  document.querySelectorAll('.cat-tab').forEach(function (tab) {
    tab.addEventListener('click', function () {
      document.querySelectorAll('.cat-tab').forEach(function (t) { t.classList.remove('active'); });
      tab.classList.add('active');
      filterPosts(tab.dataset.cat);
    });
  });

  /* ── Search ── */
  var searchInput = document.getElementById('blogSearch');
  if (searchInput) {
    searchInput.addEventListener('input', function () {
      var q = this.value.toLowerCase().trim();
      var visible = 0;
      allCards.forEach(function (card) {
        var text = card.innerText.toLowerCase();
        var match = !q || text.includes(q);
        card.style.display = match ? '' : 'none';
        if (match) visible++;
      });
      document.getElementById('noResults').style.display = visible === 0 ? 'block' : 'none';
      /* reset tabs */
      if (q) document.querySelectorAll('.cat-tab').forEach(function(t){ t.classList.remove('active'); });
    });
  }

  /* ── Topic tags ── */
  document.querySelectorAll('.t-tag').forEach(function (tag) {
    tag.addEventListener('click', function () {
      document.querySelectorAll('.t-tag').forEach(function (t) { t.classList.remove('active'); });
      tag.classList.add('active');
    });
  });

  /* ── Load more (stub) ── */
  var loadMore = document.getElementById('loadMoreBtn');
  if (loadMore) {
    loadMore.addEventListener('click', function () {
      loadMore.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Loading…';
      setTimeout(function () {
        loadMore.innerHTML = 'No more posts <i class="fas fa-check"></i>';
        loadMore.disabled = true;
        loadMore.style.opacity = '.5';
        loadMore.style.cursor = 'default';
      }, 1200);
    });
  }

})();
</script>
<?php include_once ('elements/footer.php'); ?>