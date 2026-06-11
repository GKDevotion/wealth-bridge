<?php include_once ('elements/header.php'); ?>

    <!-- Custom CSS -->
    <link href="<?php echo UrlHelper::asset('css/investment-calculator.css'); ?>" rel="stylesheet">

<div class="breadcrumb-bar">
    <div class="container">
        <div class="breadcrumb">
            <a href="index"><i class="fas fa-home"></i> Home</a>
            <span>›</span>
            <a href="#">Resources</a>
            <span>›</span>
            <span class="current">Investment Calculator</span>
        </div>
    </div>
</div>


<!-- ═══ HERO ═══ -->
<section class="ic-hero">
  <div class="h-bg"></div><div class="h-grid"></div>
  <div class="h-vline l1"></div><div class="h-vline l2"></div>
  <div class="container">
    <div class="hero-inner">
      <div>
        <div class="h-pill">Resources &nbsp;·&nbsp; Investment Calculators</div>
        <h1 class="h-title">See Your Money<br><em>Grow Before</em>You Invest a Rupee</h1>
        <p class="h-sub">Six free, advisor-calibrated calculators for SIP returns, retirement corpus, tax savings, goal planning, and more. Move a slider — see the outcome instantly.</p>
        <div class="h-actions">
          <a href="#calculators" class="btn btn-primary">Open Calculators <i class="fas fa-calculator"></i></a>
          <a href="#contact" class="btn btn-ghost">Get Personalised Plan <i class="fas fa-arrow-right"></i></a>
        </div>
        <div class="h-stats">
          <div class="h-stat"><div class="hs-n" data-counter="6" data-suffix=" tools">6</div><div class="hs-l">Calculators</div></div>
          <div class="h-stat"><div class="hs-n" data-counter="280000" data-suffix="+">2.8L+</div><div class="hs-l">Monthly Uses</div></div>
          <div class="h-stat"><div class="hs-n" data-counter="100" data-suffix="% free">100%</div><div class="hs-l">Always Free</div></div>
        </div>
      </div>

      <!-- hero right: live mini SIP calc -->
      <div class="hero-visual">
        <div class="h-float f1">
          <div class="hfl">Try changing the slider</div>
          <div class="hfv">₹10K SIP <span>→ ₹1Cr</span></div>
          <div class="hfs">In just 22 years at 12%</div>
        </div>
        <div class="hv-card">
          <div class="hv-head">
            <span class="hv-eyebrow">Quick SIP Calculator</span>
            <span class="hv-badge"><span class="hv-bdot"></span> Live</span>
          </div>
          <div class="mini-calc-row">
            <div class="mini-calc-label">Monthly SIP Amount <span id="miniSipVal">₹10,000</span></div>
            <input type="range" class="mini-range" id="miniSip" min="1000" max="100000" step="500" value="10000">
          </div>
          <div class="mini-calc-row">
            <div class="mini-calc-label">Investment Duration <span id="miniYrsVal">15 years</span></div>
            <input type="range" class="mini-range" id="miniYrs" min="1" max="40" step="1" value="15">
          </div>
          <div class="mini-calc-row">
            <div class="mini-calc-label">Expected Return (p.a.) <span id="miniRetVal">12%</span></div>
            <input type="range" class="mini-range" id="miniRet" min="6" max="20" step="0.5" value="12">
          </div>
          <div class="hv-result-box">
            <div><div class="hrb-val" id="miniTotal">₹50.46L</div><div class="hrb-lbl">Corpus</div></div>
            <div><div class="hrb-val" id="miniInvested">₹18L</div><div class="hrb-lbl">Invested</div></div>
            <div><div class="hrb-val" id="miniGains">₹32.46L</div><div class="hrb-lbl">Returns</div></div>
          </div>
        </div>
        <div class="h-float f2">
          <div class="hfl">Education Inflation</div>
          <div class="hfv">10–12% <span>p.a.</span></div>
          <div class="hfs">Factor our calculators use</div>
        </div>
      </div>
    </div>
  </div>
</section>


 
<!-- CALC NAV (added after body for correct DOM order) -->
<div class="calc-nav" style=" " id="calcNavBar">
  <div class="container">
    <div class="calc-nav-inner">
      <button class="cnav-tab active" data-tab="sip" onclick="openCalc('sip',null);this.classList.add('active')"><i class="fas fa-chart-line"></i> SIP Returns</button>
      <button class="cnav-tab" data-tab="lumpsum"    onclick="openCalc('lumpsum',null)"><i class="fas fa-coins"></i> Lump Sum</button>
      <button class="cnav-tab" data-tab="goal"       onclick="openCalc('goal',null)"><i class="fas fa-bullseye"></i> Goal Planner</button>
      <button class="cnav-tab" data-tab="tax"        onclick="openCalc('tax',null)"><i class="fas fa-file-invoice-dollar"></i> Tax Savings</button>
      <button class="cnav-tab" data-tab="retirement" onclick="openCalc('retirement',null)"><i class="fas fa-umbrella-beach"></i> Retirement</button>
      <button class="cnav-tab" data-tab="swp"        onclick="openCalc('swp',null)"><i class="fas fa-hand-holding-usd"></i> SWP</button>
    </div>
  </div>
</div>

<!-- ═══ CALCULATOR PANELS ═══ -->
<div class="calc-section" id="calc-area">
  <div class="container">

    <!-- ─── SIP CALCULATOR ─── -->
    <div class="calc-panel active" id="panel-sip">
      <div class="calc-layout">
        <div class="calc-inputs">
          <div class="ci-title">SIP Returns Calculator</div>
          <div class="ci-desc">Adjust the sliders to see how your monthly SIP grows over time. Results update instantly.</div>

          <div class="field-group">
            <div class="field-label">Monthly SIP Amount <span class="field-val" id="sipAmtLbl">₹10,000</span></div>
            <input type="range" class="range-input" id="sipAmt" min="500" max="200000" step="500" value="10000"
                   oninput="calcSIP()">
            <div class="range-ticks"><span>₹500</span><span>₹50K</span><span>₹1L</span><span>₹2L</span></div>
          </div>

          <div class="field-group">
            <div class="field-label">Duration (Years) <span class="field-val" id="sipYrsLbl">15 yrs</span></div>
            <input type="range" class="range-input" id="sipYrs" min="1" max="40" step="1" value="15"
                   oninput="calcSIP()">
            <div class="range-ticks"><span>1 yr</span><span>10 yrs</span><span>20 yrs</span><span>40 yrs</span></div>
          </div>

          <div class="field-group">
            <div class="field-label">Expected Return (% p.a.) <span class="field-val" id="sipRetLbl">12%</span></div>
            <input type="range" class="range-input" id="sipRet" min="4" max="24" step="0.5" value="12"
                   oninput="calcSIP()">
            <div class="range-ticks"><span>4%</span><span>10%</span><span>16%</span><span>24%</span></div>
          </div>

          <div class="field-group">
            <div class="field-label">Annual Step-Up (%) <span class="field-val" id="sipStepLbl">0%</span></div>
            <input type="range" class="range-input" id="sipStep" min="0" max="20" step="1" value="0"
                   oninput="calcSIP()">
            <div class="range-ticks"><span>0%</span><span>5%</span><span>10%</span><span>20%</span></div>
          </div>

          <button class="btn btn-calc" onclick="calcSIP()"><i class="fas fa-calculator"></i> Calculate Returns</button>
        </div>

        <div class="calc-results">
          <div class="result-hero">
            <div class="rh-label">Total Corpus</div>
            <div class="rh-value" id="sipCorpus">₹50.46 L</div>
            <div class="rh-sub" id="sipSubLine">After 15 years at 12% p.a.</div>
          </div>
          <div class="result-breakdown">
            <div class="rb-box"><div class="rb-val" id="sipInvested">₹18 L</div><div class="rb-lbl">Invested</div></div>
            <div class="rb-box"><div class="rb-val" id="sipGains">₹32.46 L</div><div class="rb-lbl">Returns</div></div>
            <div class="rb-box"><div class="rb-val" id="sipMultiple">2.8×</div><div class="rb-lbl">Multiplier</div></div>
          </div>
          <div class="result-donut">
            <div class="donut-svg-wrap">
              <svg class="donut-svg" viewBox="0 0 100 100" width="90" height="90">
                <circle class="donut-bg" cx="50" cy="50" r="40"></circle>
                <circle class="donut-invested" cx="50" cy="50" r="40" id="sipDonutInv"
                        stroke-dasharray="251" stroke-dashoffset="0"></circle>
                <circle class="donut-returns" cx="50" cy="50" r="40" id="sipDonutRet"
                        stroke-dasharray="251" stroke-dashoffset="155"></circle>
              </svg>
              <div class="donut-center-text">
                <div class="dct-pct" id="sipRetPct">64%</div>
                <div class="dct-lbl">returns</div>
              </div>
            </div>
            <div class="donut-legend">
              <div class="dl-row"><div class="dl-dot" style="background:rgba(200,16,46,.3)"></div>Amount Invested<div class="dl-val" id="sipDLInv">₹18 L</div></div>
              <div class="dl-row"><div class="dl-dot" style="background:var(--red)"></div>Returns Earned<div class="dl-val" id="sipDLRet">₹32.46 L</div></div>
            </div>
          </div>

          <button class="yoy-toggle-btn" id="sipYoyBtn" onclick="toggleYOY('sip')">
            <i class="fas fa-table"></i> Show Year-by-Year Breakdown
          </button>
          <div id="sipYoyTable" style="display:none;margin-top:12px;max-height:260px;overflow-y:auto;border-radius:var(--r-md);border:1px solid var(--gray-200)">
            <table class="yoy-table" id="sipTable"></table>
          </div>

          <div class="result-actions">
            <button class="btn btn-outline btn-sm" onclick="window.print()"><i class="fas fa-download"></i> Save Results</button>
            <a href="contact" class="btn btn-primary btn-sm">Get Personalised Plan <i class="fas fa-arrow-right"></i></a>
          </div>
          <div class="advisor-nudge">
            <div class="an-icon"><i class="fas fa-user-tie"></i></div>
            <div>
              <div class="an-title">Want this optimised for your goals?</div>
              <div class="an-desc">A WealthBridge advisor models this with your actual tax slab and LTCG impact.</div>
            </div>
            <a href="contact" class="an-link">Book Call <i class="fas fa-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </div>

    <!-- ─── LUMP SUM CALCULATOR ─── -->
    <div class="calc-panel" id="panel-lumpsum">
      <div class="calc-layout">
        <div class="calc-inputs">
          <div class="ci-title">Lump Sum Calculator</div>
          <div class="ci-desc">Calculate how a one-time investment grows over time with compounding returns.</div>

          <div class="field-group">
            <div class="field-label">Investment Amount <span class="field-val" id="lsAmtLbl">₹5,00,000</span></div>
            <input type="range" class="range-input" id="lsAmt" min="10000" max="10000000" step="10000" value="500000"
                   oninput="calcLS()">
            <div class="range-ticks"><span>₹10K</span><span>₹10L</span><span>₹50L</span><span>₹1Cr</span></div>
          </div>

          <div class="field-group">
            <div class="field-label">Duration (Years) <span class="field-val" id="lsYrsLbl">10 yrs</span></div>
            <input type="range" class="range-input" id="lsYrs" min="1" max="40" step="1" value="10"
                   oninput="calcLS()">
            <div class="range-ticks"><span>1 yr</span><span>10 yrs</span><span>20 yrs</span><span>40 yrs</span></div>
          </div>

          <div class="field-group">
            <div class="field-label">Expected Return (% p.a.) <span class="field-val" id="lsRetLbl">12%</span></div>
            <input type="range" class="range-input" id="lsRet" min="4" max="24" step="0.5" value="12"
                   oninput="calcLS()">
            <div class="range-ticks"><span>4%</span><span>10%</span><span>16%</span><span>24%</span></div>
          </div>

          <div class="field-group">
            <div class="field-label">Inflation Rate (% p.a.) <span class="field-val" id="lsInflLbl">6%</span></div>
            <input type="range" class="range-input" id="lsInfl" min="0" max="12" step="0.5" value="6"
                   oninput="calcLS()">
            <div class="range-ticks"><span>0%</span><span>4%</span><span>8%</span><span>12%</span></div>
          </div>

          <button class="btn btn-calc" onclick="calcLS()"><i class="fas fa-calculator"></i> Calculate Future Value</button>
        </div>

        <div class="calc-results">
          <div class="result-hero">
            <div class="rh-label">Future Value</div>
            <div class="rh-value" id="lsCorpus">₹1.55 Cr</div>
            <div class="rh-sub" id="lsSubLine">After 10 years at 12% p.a.</div>
          </div>
          <div class="result-breakdown">
            <div class="rb-box"><div class="rb-val" id="lsInvested">₹5 L</div><div class="rb-lbl">Invested</div></div>
            <div class="rb-box"><div class="rb-val" id="lsGains">₹1.05 Cr</div><div class="rb-lbl">Returns</div></div>
            <div class="rb-box"><div class="rb-val" id="lsRealVal">₹86.5 L</div><div class="rb-lbl">Real Value</div></div>
          </div>
          <div class="result-donut">
            <div class="donut-svg-wrap">
              <svg class="donut-svg" viewBox="0 0 100 100" width="90" height="90">
                <circle class="donut-bg" cx="50" cy="50" r="40"></circle>
                <circle class="donut-invested" cx="50" cy="50" r="40" id="lsDonutInv" stroke-dasharray="251" stroke-dashoffset="0"></circle>
                <circle class="donut-returns" cx="50" cy="50" r="40" id="lsDonutRet" stroke-dasharray="251" stroke-dashoffset="219"></circle>
              </svg>
              <div class="donut-center-text">
                <div class="dct-pct" id="lsRetPct">68%</div>
                <div class="dct-lbl">returns</div>
              </div>
            </div>
            <div class="donut-legend">
              <div class="dl-row"><div class="dl-dot" style="background:rgba(200,16,46,.3)"></div>Amount Invested<div class="dl-val" id="lsDLInv">₹5 L</div></div>
              <div class="dl-row"><div class="dl-dot" style="background:var(--red)"></div>Returns Earned<div class="dl-val" id="lsDLRet">₹1.05 Cr</div></div>
            </div>
          </div>
          <div class="result-actions">
            <button class="btn btn-outline btn-sm" onclick="window.print()"><i class="fas fa-download"></i> Save Results</button>
            <a href="contact" class="btn btn-primary btn-sm">Get Personalised Plan <i class="fas fa-arrow-right"></i></a>
          </div>
          <div class="advisor-nudge">
            <div class="an-icon"><i class="fas fa-user-tie"></i></div>
            <div>
              <div class="an-title">LTCG impact on lump sum investments?</div>
              <div class="an-desc">Our advisors calculate post-tax returns with LTCG and indexation factored in.</div>
            </div>
            <a href="contact" class="an-link">Book Call <i class="fas fa-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </div>

    <!-- ─── GOAL SIP PLANNER ─── -->
    <div class="calc-panel" id="panel-goal">
      <div class="calc-layout">
        <div class="calc-inputs">
          <div class="ci-title">Goal SIP Planner</div>
          <div class="ci-desc">Know your target corpus? Work backwards to find the exact monthly SIP you need to reach it.</div>

          <div class="field-group">
            <div class="field-label">Target Corpus <span class="field-val" id="goalTargetLbl">₹50,00,000</span></div>
            <input type="range" class="range-input" id="goalTarget" min="100000" max="50000000" step="100000" value="5000000"
                   oninput="calcGoal()">
            <div class="range-ticks"><span>₹1L</span><span>₹25L</span><span>₹1Cr</span><span>₹5Cr</span></div>
          </div>

          <div class="field-group">
            <div class="field-label">Time to Goal (Years) <span class="field-val" id="goalYrsLbl">15 yrs</span></div>
            <input type="range" class="range-input" id="goalYrs" min="1" max="40" step="1" value="15"
                   oninput="calcGoal()">
            <div class="range-ticks"><span>1 yr</span><span>10 yrs</span><span>20 yrs</span><span>40 yrs</span></div>
          </div>

          <div class="field-group">
            <div class="field-label">Expected Return (% p.a.) <span class="field-val" id="goalRetLbl">12%</span></div>
            <input type="range" class="range-input" id="goalRet" min="4" max="20" step="0.5" value="12"
                   oninput="calcGoal()">
            <div class="range-ticks"><span>4%</span><span>10%</span><span>15%</span><span>20%</span></div>
          </div>

          <div class="field-group">
            <div class="field-label">Inflation on Goal (% p.a.) <span class="field-val" id="goalInflLbl">6%</span></div>
            <input type="range" class="range-input" id="goalInfl" min="0" max="15" step="0.5" value="6"
                   oninput="calcGoal()">
            <div class="range-ticks"><span>0%</span><span>5%</span><span>10%</span><span>15%</span></div>
          </div>

          <button class="btn btn-calc" onclick="calcGoal()"><i class="fas fa-bullseye"></i> Calculate Required SIP</button>
        </div>

        <div class="calc-results">
          <div class="result-hero">
            <div class="rh-label">Monthly SIP Required</div>
            <div class="rh-value" id="goalSIP">₹12,500</div>
            <div class="rh-sub" id="goalSubLine">To reach ₹50L in 15 years at 12%</div>
          </div>
          <div class="result-breakdown">
            <div class="rb-box"><div class="rb-val" id="goalInflatedTarget">₹1.20 Cr</div><div class="rb-lbl">Inflation-Adj. Target</div></div>
            <div class="rb-box"><div class="rb-val" id="goalTotalInvested">₹22.5 L</div><div class="rb-lbl">Total Invested</div></div>
            <div class="rb-box"><div class="rb-val" id="goalCorpusBuilt">₹1.20 Cr</div><div class="rb-lbl">Corpus Built</div></div>
          </div>
          <div style="background:var(--green-bg);border:1px solid rgba(22,163,74,.2);border-radius:var(--r-md);padding:14px 16px;margin-bottom:16px">
            <div style="font-size:12px;font-weight:700;color:var(--green);margin-bottom:4px"><i class="fas fa-lightbulb" style="margin-right:6px"></i>Advisor Tip</div>
            <div style="font-size:12.5px;color:var(--gray-600);line-height:1.65">Adding a 10% annual step-up to this SIP reduces the <em>effective monthly burden today</em> — while building significantly more corpus over time.</div>
          </div>
          <div class="result-actions">
            <button class="btn btn-outline btn-sm" onclick="window.print()"><i class="fas fa-download"></i> Save Results</button>
            <a href="contact" class="btn btn-primary btn-sm">Build Your Goal Plan <i class="fas fa-arrow-right"></i></a>
          </div>
          <div class="advisor-nudge">
            <div class="an-icon"><i class="fas fa-graduation-cap"></i></div>
            <div>
              <div class="an-title">Planning for a child's education?</div>
              <div class="an-desc">We factor in institution-specific inflation and LTCG strategy for education corpus planning.</div>
            </div>
            <a href="child-wedding-plan" class="an-link">Explore <i class="fas fa-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </div>

    <!-- ─── TAX SAVINGS CALCULATOR ─── -->
    <div class="calc-panel" id="panel-tax">
      <div class="calc-layout">
        <div class="calc-inputs">
          <div class="ci-title">Tax Savings Calculator</div>
          <div class="ci-desc">Enter your annual income and existing investments to see how much tax you can save this FY.</div>

          <div class="field-group">
            <div class="field-label">Annual Income (₹) <span class="field-val" id="taxIncLbl">₹15,00,000</span></div>
            <input type="range" class="range-input" id="taxInc" min="500000" max="10000000" step="50000" value="1500000"
                   oninput="calcTax()">
            <div class="range-ticks"><span>₹5L</span><span>₹20L</span><span>₹50L</span><span>₹1Cr</span></div>
          </div>

          <div class="field-group">
            <div class="field-label">80C Investments Used <span class="field-val" id="tax80cLbl">₹1,50,000</span></div>
            <input type="range" class="range-input" id="tax80c" min="0" max="150000" step="5000" value="150000"
                   oninput="calcTax()">
            <div class="range-ticks"><span>₹0</span><span>₹50K</span><span>₹1L</span><span>₹1.5L</span></div>
          </div>

          <div class="field-group">
            <div class="field-label">80D (Health Insurance) <span class="field-val" id="tax80dLbl">₹25,000</span></div>
            <input type="range" class="range-input" id="tax80d" min="0" max="75000" step="5000" value="25000"
                   oninput="calcTax()">
            <div class="range-ticks"><span>₹0</span><span>₹25K</span><span>₹50K</span><span>₹75K</span></div>
          </div>

          <div class="field-group">
            <div class="field-label">NPS 80CCD(1B) <span class="field-val" id="taxNpsLbl">₹50,000</span></div>
            <input type="range" class="range-input" id="taxNps" min="0" max="50000" step="5000" value="50000"
                   oninput="calcTax()">
            <div class="range-ticks"><span>₹0</span><span>₹25K</span><span>₹50K Max</span></div>
          </div>

          <div class="field-group">
            <div class="field-label">Tax Regime</div>
            <div class="toggle-group">
              <div class="toggle-btn active" id="taxOldBtn" onclick="setTaxRegime('old')">Old Regime</div>
              <div class="toggle-btn" id="taxNewBtn" onclick="setTaxRegime('new')">New Regime</div>
            </div>
          </div>

          <button class="btn btn-calc" onclick="calcTax()"><i class="fas fa-calculator"></i> Calculate Tax Savings</button>
        </div>

        <div class="calc-results">
          <div class="result-hero">
            <div class="rh-label">Total Tax Saved</div>
            <div class="rh-value" id="taxSaved">₹2,24,250</div>
            <div class="rh-sub" id="taxSubLine">Under Old Regime with all deductions</div>
          </div>
          <div class="result-breakdown">
            <div class="rb-box"><div class="rb-val" id="taxGross">₹15 L</div><div class="rb-lbl">Gross Income</div></div>
            <div class="rb-box"><div class="rb-val" id="taxTaxable">₹12.75 L</div><div class="rb-lbl">Taxable Income</div></div>
            <div class="rb-box"><div class="rb-val" id="taxEffRate">14.9%</div><div class="rb-lbl">Effective Rate</div></div>
          </div>

          <div style="background:var(--gray-50);border:1px solid var(--gray-200);border-radius:var(--r-md);padding:16px 18px;margin-bottom:16px">
            <div style="font-size:11px;font-weight:700;letter-spacing:1px;text-transform:uppercase;color:var(--gray-400);margin-bottom:12px">Deduction Breakdown</div>
            <div style="display:flex;flex-direction:column;gap:8px" id="taxBreakdown">
              <!-- populated by JS -->
            </div>
          </div>

          <div class="result-actions">
            <button class="btn btn-outline btn-sm" onclick="window.print()"><i class="fas fa-download"></i> Save Results</button>
            <a href="tax-efficient-investment" class="btn btn-primary btn-sm">See Tax Strategy <i class="fas fa-arrow-right"></i></a>
          </div>
          <div class="advisor-nudge">
            <div class="an-icon"><i class="fas fa-file-invoice-dollar"></i></div>
            <div>
              <div class="an-title">Is old or new regime better for you?</div>
              <div class="an-desc">We model both regimes with your actual deductions and show the winner.</div>
            </div>
            <a href="contact" class="an-link">Get Analysis <i class="fas fa-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </div>

    <!-- ─── RETIREMENT CALCULATOR ─── -->
    <div class="calc-panel" id="panel-retirement">
      <div class="calc-layout">
        <div class="calc-inputs">
          <div class="ci-title">Retirement Corpus Calculator</div>
          <div class="ci-desc">How much do you need to retire comfortably? Calculate your inflation-adjusted retirement corpus and the monthly SIP to build it.</div>

          <div class="field-group">
            <div class="field-label">Current Age <span class="field-val" id="retAgeLbl">32 years</span></div>
            <input type="range" class="range-input" id="retAge" min="22" max="55" step="1" value="32"
                   oninput="calcRetirement()">
            <div class="range-ticks"><span>22</span><span>35</span><span>45</span><span>55</span></div>
          </div>

          <div class="field-group">
            <div class="field-label">Retirement Age <span class="field-val" id="retRetireLbl">60 years</span></div>
            <input type="range" class="range-input" id="retRetire" min="45" max="70" step="1" value="60"
                   oninput="calcRetirement()">
            <div class="range-ticks"><span>45</span><span>55</span><span>60</span><span>70</span></div>
          </div>

          <div class="field-group">
            <div class="field-label">Monthly Expenses Today (₹) <span class="field-val" id="retExpLbl">₹80,000</span></div>
            <input type="range" class="range-input" id="retExp" min="20000" max="500000" step="5000" value="80000"
                   oninput="calcRetirement()">
            <div class="range-ticks"><span>₹20K</span><span>₹1L</span><span>₹2L</span><span>₹5L</span></div>
          </div>

          <div class="field-group">
            <div class="field-label">Life Expectancy <span class="field-val" id="retLifeLbl">85 years</span></div>
            <input type="range" class="range-input" id="retLife" min="70" max="100" step="1" value="85"
                   oninput="calcRetirement()">
            <div class="range-ticks"><span>70</span><span>80</span><span>90</span><span>100</span></div>
          </div>

          <div class="field-group">
            <div class="field-label">Expected Return Pre-Retirement (%) <span class="field-val" id="retPreRetLbl">12%</span></div>
            <input type="range" class="range-input" id="retPreRet" min="6" max="18" step="0.5" value="12"
                   oninput="calcRetirement()">
            <div class="range-ticks"><span>6%</span><span>10%</span><span>14%</span><span>18%</span></div>
          </div>

          <button class="btn btn-calc" onclick="calcRetirement()"><i class="fas fa-umbrella-beach"></i> Calculate Corpus</button>
        </div>

        <div class="calc-results">
          <div class="result-hero">
            <div class="rh-label">Retirement Corpus Needed</div>
            <div class="rh-value" id="retCorpus">₹6.2 Cr</div>
            <div class="rh-sub" id="retSubLine">To retire at 60 with ₹80K/month in today's value</div>
          </div>
          <div class="result-breakdown">
            <div class="rb-box"><div class="rb-val" id="retMonthlySIP">₹18,400</div><div class="rb-lbl">Monthly SIP</div></div>
            <div class="rb-box"><div class="rb-val" id="retYrsToRetire">28 yrs</div><div class="rb-lbl">Years to Retire</div></div>
            <div class="rb-box"><div class="rb-val" id="retRetireDuration">25 yrs</div><div class="rb-lbl">Retirement Span</div></div>
          </div>
          <div style="background:var(--gray-50);border:1px solid var(--gray-200);border-radius:var(--r-md);padding:16px 18px;margin-bottom:16px">
            <div style="font-size:11px;font-weight:700;letter-spacing:1px;text-transform:uppercase;color:var(--gray-400);margin-bottom:12px">Assumptions Used</div>
            <div style="display:flex;flex-direction:column;gap:7px" id="retAssumptions"></div>
          </div>
          <div class="result-actions">
            <button class="btn btn-outline btn-sm" onclick="window.print()"><i class="fas fa-download"></i> Save Results</button>
            <a href="contact" class="btn btn-primary btn-sm">Build Retirement Plan <i class="fas fa-arrow-right"></i></a>
          </div>
          <div class="advisor-nudge">
            <div class="an-icon"><i class="fas fa-umbrella-beach"></i></div>
            <div>
              <div class="an-title">Want an NPS + SWP retirement plan?</div>
              <div class="an-desc">Our advisors model NPS, EPF, and equity SIPs together — with tax-optimised withdrawal strategy.</div>
            </div>
            <a href="contact" class="an-link">Plan Now <i class="fas fa-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </div>

    <!-- ─── SWP CALCULATOR ─── -->
    <div class="calc-panel" id="panel-swp">
      <div class="calc-layout">
        <div class="calc-inputs">
          <div class="ci-title">SWP Calculator</div>
          <div class="ci-desc">How long will your retirement corpus last with regular monthly withdrawals?</div>

          <div class="field-group">
            <div class="field-label">Starting Corpus (₹) <span class="field-val" id="swpCorpusLbl">₹1,00,00,000</span></div>
            <input type="range" class="range-input" id="swpCorpus" min="1000000" max="50000000" step="500000" value="10000000"
                   oninput="calcSWP()">
            <div class="range-ticks"><span>₹10L</span><span>₹1Cr</span><span>₹3Cr</span><span>₹5Cr</span></div>
          </div>

          <div class="field-group">
            <div class="field-label">Monthly Withdrawal (₹) <span class="field-val" id="swpWithdrawLbl">₹50,000</span></div>
            <input type="range" class="range-input" id="swpWithdraw" min="5000" max="500000" step="5000" value="50000"
                   oninput="calcSWP()">
            <div class="range-ticks"><span>₹5K</span><span>₹1L</span><span>₹3L</span><span>₹5L</span></div>
          </div>

          <div class="field-group">
            <div class="field-label">Expected Return on Corpus (% p.a.) <span class="field-val" id="swpRetLbl">8%</span></div>
            <input type="range" class="range-input" id="swpRet" min="4" max="16" step="0.5" value="8"
                   oninput="calcSWP()">
            <div class="range-ticks"><span>4%</span><span>8%</span><span>12%</span><span>16%</span></div>
          </div>

          <div class="field-group">
            <div class="field-label">Withdrawal Inflation (% p.a.) <span class="field-val" id="swpInflLbl">6%</span></div>
            <input type="range" class="range-input" id="swpInfl" min="0" max="12" step="0.5" value="6"
                   oninput="calcSWP()">
            <div class="range-ticks"><span>0%</span><span>4%</span><span>8%</span><span>12%</span></div>
          </div>

          <button class="btn btn-calc" onclick="calcSWP()"><i class="fas fa-hand-holding-usd"></i> Calculate Duration</button>
        </div>

        <div class="calc-results">
          <div class="result-hero">
            <div class="rh-label">Corpus Lasts</div>
            <div class="rh-value" id="swpDuration">23 Years</div>
            <div class="rh-sub" id="swpSubLine">₹1Cr at ₹50K/month, 8% return, 6% withdrawal growth</div>
          </div>
          <div class="result-breakdown">
            <div class="rb-box"><div class="rb-val" id="swpTotalWithdrawn">₹1.58 Cr</div><div class="rb-lbl">Total Withdrawn</div></div>
            <div class="rb-box"><div class="rb-val" id="swpTotalReturns">₹58 L</div><div class="rb-lbl">Returns Earned</div></div>
            <div class="rb-box"><div class="rb-val" id="swpFinalMonth">₹1.92L</div><div class="rb-lbl">Final Month Withdrawal</div></div>
          </div>
          <div style="background:var(--gray-50);border:1px solid var(--gray-200);border-radius:var(--r-md);padding:16px;margin-bottom:16px">
            <div style="font-size:13px;font-weight:600;color:var(--black);margin-bottom:8px"><i class="fas fa-info-circle" style="color:var(--red);margin-right:6px"></i>How to Extend Your Corpus</div>
            <div style="font-size:12.5px;color:var(--gray-500);line-height:1.7">Start with a smaller monthly withdrawal and increase by inflation only. Keeping the corpus invested in a balanced fund (50% equity, 50% debt) vs a pure debt fund can add 6-10 years to sustainability.</div>
          </div>
          <div class="result-actions">
            <button class="btn btn-outline btn-sm" onclick="window.print()"><i class="fas fa-download"></i> Save Results</button>
            <a href="contact" class="btn btn-primary btn-sm">Plan My Withdrawals <i class="fas fa-arrow-right"></i></a>
          </div>
          <div class="advisor-nudge">
            <div class="an-icon"><i class="fas fa-user-tie"></i></div>
            <div>
              <div class="an-title">Build a bullet-proof withdrawal plan</div>
              <div class="an-desc">Our advisors model SWP with tax efficiency, NPS annuity, and rental income combined.</div>
            </div>
            <a href="contact" class="an-link">Book Call <i class="fas fa-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>


<!-- ═══ HOW TO USE ═══ -->
<section class="section ic-howto">
  <div class="container">
    <div class="sec-hdr center">
      <div class="label reveal">Getting the Most from These Tools</div>
      <h2 class="sec-title reveal d1">Four Steps to <span>Meaningful Results</span></h2>
    </div>
    <div class="howto-grid">
      <div class="howto-step reveal">
        <div class="howto-num">1</div>
        <h4>Pick Your Calculator</h4>
        <p>Choose the tool that matches your question — SIP returns, retirement corpus, tax savings, or goal planning.</p>
      </div>
      <div class="howto-step reveal d1">
        <div class="howto-num">2</div>
        <h4>Set Realistic Inputs</h4>
        <p>Use your actual monthly amount and honest return expectations. Nifty's 20-year average: 14%. Use 12% for conservative planning.</p>
      </div>
      <div class="howto-step reveal d2">
        <div class="howto-num">3</div>
        <h4>Read the Breakdown</h4>
        <p>Look beyond the headline number — invested amount, returns earned, effective tax rate, or corpus duration tell the real story.</p>
      </div>
      <div class="howto-step reveal d3">
        <div class="howto-num">4</div>
        <h4>Act on It</h4>
        <p>A calculator is a starting point, not a plan. A WealthBridge advisor turns these numbers into a real, personalised financial plan.</p>
      </div>
    </div>
  </div>
</section>


<!-- ═══ CTA STRIP ═══ -->
<div class="ic-cta-strip reveal">
  <div class="container">
    <div class="strip-inner">
      <div>
        <div class="strip-title">Numbers are a start. A plan is what changes your life.</div>
        <p class="strip-desc">Our advisors take your calculator results and build a real, personalised financial plan — with your actual tax slab, goals, and life stage. Free, no commitment.</p>
      </div>
      <a href="contact" class="btn btn-white">Book Free Advisory Call <i class="fas fa-arrow-right"></i></a>
    </div>
  </div>
</div>


<!-- ═══ CTA ═══ -->
<section class="ic-cta" id="contact">
  <div class="container">
    <div class="cta-inner">
      <div class="label reveal" style="justify-content:center">From Calculator to Action</div>
      <h2 class="cta-title reveal d1">
        Your Number is Clear.<br>
        <span>Now Build the Plan That Hits It.</span>
      </h2>
      <p class="cta-desc reveal d2">
        These calculators show you the destination. WealthBridge advisors build the route —
        choosing the right instruments, tax strategy, and protection layer for your specific situation.
      </p>
      <div class="cta-actions reveal d2">
        <a href="contact" class="btn btn-primary">Get Free Financial Plan <i class="fas fa-arrow-right"></i></a>
        <a href="events-webinar" class="btn btn-ghost"><i class="fas fa-calendar"></i> Attend a Free Webinar</a>
      </div>
      <div class="cta-trust reveal d3">
        <div class="ct-item"><i class="fas fa-check-circle"></i> SEBI Registered Advisor</div>
        <div class="ct-item"><i class="fas fa-check-circle"></i> 25,000+ Families Served</div>
        <div class="ct-item"><i class="fas fa-check-circle"></i> 6 Free Calculators</div>
        <div class="ct-item"><i class="fas fa-check-circle"></i> Zero Commission Bias</div>
      </div>
    </div>
  </div>
</section>


<!-- ═══ RELATED ═══ -->
<section class="section ic-related">
  <div class="container">
    <div class="sec-hdr reveal">
      <div class="label">Also in Resources</div>
      <h2 class="sec-title">Put These <span>Numbers to Work</span></h2>
    </div>
    <div class="related-grid">
      <a href="tax-efficient-investment" class="rel-card reveal">
        <div class="rc-icon"><i class="fas fa-file-invoice-dollar"></i></div>
        <h4>Tax-Efficient Investing</h4>
        <p>The strategy behind the Tax Savings Calculator — how to actually save ₹2L+ annually.</p>
        <span class="rc-link">Explore <i class="fas fa-arrow-right"></i></span>
      </a>
      <a href="child-wedding-plan" class="rel-card reveal d1">
        <div class="rc-icon"><i class="fas fa-graduation-cap"></i></div>
        <h4>Child &amp; Goal Planning</h4>
        <p>Education corpus, wedding fund, study abroad — see how to fund every milestone.</p>
        <span class="rc-link">Explore <i class="fas fa-arrow-right"></i></span>
      </a>
      <a href="retirement-planning" class="rel-card reveal d2">
        <div class="rc-icon"><i class="fas fa-umbrella-beach"></i></div>
        <h4>Retirement Planning</h4>
        <p>The full advisory service behind the Retirement Corpus Calculator.</p>
        <span class="rc-link">Explore <i class="fas fa-arrow-right"></i></span>
      </a>
      <a href="faq" class="rel-card reveal d3">
        <div class="rc-icon"><i class="fas fa-question-circle"></i></div>
        <h4>FAQ</h4>
        <p>Answers to the questions behind every number these calculators produce.</p>
        <span class="rc-link">Read FAQ <i class="fas fa-arrow-right"></i></span>
      </a>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════
     ALL JAVASCRIPT
═══════════════════════════════════════════════════ -->
<script>
(function () {

/* ── Utilities ── */
function fmt(n) {
  if (n >= 10000000) return '₹' + (n / 10000000).toFixed(2).replace(/\.?0+$/, '') + ' Cr';
  if (n >= 100000)   return '₹' + (n / 100000).toFixed(2).replace(/\.?0+$/, '') + ' L';
  if (n >= 1000)     return '₹' + Math.round(n).toLocaleString('en-IN');
  return '₹' + Math.round(n);
}
function fmtSIP(n) { return '₹' + Math.round(n).toLocaleString('en-IN'); }

/* ── Scroll Reveal ── */
var ro = new IntersectionObserver(function(e) {
  e.forEach(function(x) { if (x.isIntersecting) { x.target.classList.add('visible'); ro.unobserve(x.target); } });
}, { threshold: 0.12 });
document.querySelectorAll('.reveal').forEach(function(el) { ro.observe(el); });

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
var co = new IntersectionObserver(function(e) {
  e.forEach(function(x) {
    if (x.isIntersecting && !x.target.dataset.done) { x.target.dataset.done = '1'; animCounter(x.target); co.unobserve(x.target); }
  });
}, { threshold: 0.5 });
document.querySelectorAll('[data-counter]').forEach(function(el) { co.observe(el); });

/* ── Range slider fill ── */
function updateFill(el) {
  var pct = (el.value - el.min) / (el.max - el.min) * 100;
  el.style.setProperty('--fill', pct + '%');
}
document.querySelectorAll('.range-input, .mini-range').forEach(function(r) {
  updateFill(r);
  r.addEventListener('input', function() { updateFill(r); });
});

/* ── Hero mini SIP ── */
function updateMiniSIP() {
  var sip = +document.getElementById('miniSip').value;
  var yrs = +document.getElementById('miniYrs').value;
  var ret = +document.getElementById('miniRet').value / 100;
  var r = ret / 12, n = yrs * 12;
  var fv = sip * (Math.pow(1 + r, n) - 1) / r * (1 + r);
  var invested = sip * n;
  var gains = fv - invested;
  document.getElementById('miniSipVal').textContent  = '₹' + sip.toLocaleString('en-IN');
  document.getElementById('miniYrsVal').textContent  = yrs + ' years';
  document.getElementById('miniRetVal').textContent  = ret * 100 + '%';
  document.getElementById('miniTotal').textContent   = fmt(fv);
  document.getElementById('miniInvested').textContent= fmt(invested);
  document.getElementById('miniGains').textContent   = fmt(gains);
}
['miniSip','miniYrs','miniRet'].forEach(function(id) {
  document.getElementById(id).addEventListener('input', updateMiniSIP);
});
updateMiniSIP();

/* ── Tab Navigation ── */
window.openCalc = function(id, el) {
  document.querySelectorAll('.calc-panel').forEach(function(p) { p.classList.remove('active'); });
  document.querySelectorAll('.cnav-tab').forEach(function(t) { t.classList.remove('active'); });
  document.querySelectorAll('.picker-card').forEach(function(c) { c.classList.remove('active-card'); });
  document.getElementById('panel-' + id).classList.add('active');
  var navTab = document.querySelector('[data-tab="' + id + '"]');
  if (navTab) navTab.classList.add('active');
  if (el) el.classList.add('active-card');
  document.getElementById('calc-area').scrollIntoView({ behavior: 'smooth', block: 'start' });
};
document.querySelectorAll('.cnav-tab').forEach(function(tab) {
  tab.addEventListener('click', function() {
    var id = tab.dataset.tab;
    openCalc(id, null);
    tab.classList.add('active');
    var pickerCard = document.querySelector('[data-calc="' + id + '"]');
    if (pickerCard) pickerCard.classList.add('active-card');
  });
});

/* ── Donut updater ── */
function updateDonut(invId, retId, pctId, invested, total) {
  var c = 251, retPct = total > 0 ? (total - invested) / total : 0;
  var retArc = c * retPct, invArc = c * (1 - retPct);
  // donut-returns starts offset at c (empty); decrease offset = more visible
  document.getElementById(retId).style.strokeDashoffset  = (c - retArc).toString();
  document.getElementById(invId).style.strokeDashoffset  = (c - invArc).toString();
  if (pctId) document.getElementById(pctId).textContent = Math.round(retPct * 100) + '%';
}

/* ── YOY table toggle ── */
window.toggleYOY = function(prefix) {
  var tbl  = document.getElementById(prefix + 'YoyTable');
  var btn  = document.getElementById(prefix + 'YoyBtn');
  var show = tbl.style.display === 'none';
  tbl.style.display = show ? 'block' : 'none';
  btn.innerHTML = show
    ? '<i class="fas fa-table"></i> Hide Year-by-Year Breakdown'
    : '<i class="fas fa-table"></i> Show Year-by-Year Breakdown';
};

/* ────────────────────────────────
   SIP CALCULATOR
──────────────────────────────── */
window.calcSIP = function() {
  var amt  = +document.getElementById('sipAmt').value;
  var yrs  = +document.getElementById('sipYrs').value;
  var ret  = +document.getElementById('sipRet').value / 100;
  var step = +document.getElementById('sipStep').value / 100;
  document.getElementById('sipAmtLbl').textContent  = fmtSIP(amt);
  document.getElementById('sipYrsLbl').textContent  = yrs + ' yrs';
  document.getElementById('sipRetLbl').textContent  = (ret * 100) + '%';
  document.getElementById('sipStepLbl').textContent = (step * 100) + '%';
  updateFill(document.getElementById('sipAmt'));
  updateFill(document.getElementById('sipYrs'));
  updateFill(document.getElementById('sipRet'));
  updateFill(document.getElementById('sipStep'));

  var r = ret / 12, corpus = 0, invested = 0;
  var rows = '<thead><tr><th>Year</th><th>Invested (₹)</th><th>Corpus (₹)</th><th>Returns (₹)</th></tr></thead><tbody>';
  var currentSIP = amt;
  for (var y = 1; y <= yrs; y++) {
    for (var m = 0; m < 12; m++) { corpus = (corpus + currentSIP) * (1 + r); invested += currentSIP; }
    rows += '<tr><td>Year ' + y + '</td><td>' + fmt(invested) + '</td><td class="red-val">' + fmt(corpus) + '</td><td>' + fmt(corpus - invested) + '</td></tr>';
    currentSIP *= (1 + step);
  }
  rows += '</tbody>';
  var gains   = corpus - invested;
  var multiple = (corpus / invested).toFixed(1);
  var retPct  = Math.round(gains / corpus * 100);
  document.getElementById('sipCorpus').textContent  = fmt(corpus);
  document.getElementById('sipSubLine').textContent = 'After ' + yrs + ' years at ' + (ret * 100) + '% p.a.';
  document.getElementById('sipInvested').textContent= fmt(invested);
  document.getElementById('sipGains').textContent   = fmt(gains);
  document.getElementById('sipMultiple').textContent= multiple + '×';
  document.getElementById('sipDLInv').textContent   = fmt(invested);
  document.getElementById('sipDLRet').textContent   = fmt(gains);
  updateDonut('sipDonutInv', 'sipDonutRet', 'sipRetPct', invested, corpus);
  document.getElementById('sipTable').innerHTML = rows;
};
calcSIP();

/* ────────────────────────────────
   LUMP SUM CALCULATOR
──────────────────────────────── */
window.calcLS = function() {
  var amt  = +document.getElementById('lsAmt').value;
  var yrs  = +document.getElementById('lsYrs').value;
  var ret  = +document.getElementById('lsRet').value / 100;
  var infl = +document.getElementById('lsInfl').value / 100;
  document.getElementById('lsAmtLbl').textContent  = fmt(amt);
  document.getElementById('lsYrsLbl').textContent  = yrs + ' yrs';
  document.getElementById('lsRetLbl').textContent  = (ret * 100) + '%';
  document.getElementById('lsInflLbl').textContent = (infl * 100) + '%';
  ['lsAmt','lsYrs','lsRet','lsInfl'].forEach(function(id) { updateFill(document.getElementById(id)); });

  var fv   = amt * Math.pow(1 + ret, yrs);
  var real = fv / Math.pow(1 + infl, yrs);
  var gains = fv - amt;
  document.getElementById('lsCorpus').textContent  = fmt(fv);
  document.getElementById('lsSubLine').textContent = 'After ' + yrs + ' years at ' + (ret * 100) + '% p.a.';
  document.getElementById('lsInvested').textContent= fmt(amt);
  document.getElementById('lsGains').textContent   = fmt(gains);
  document.getElementById('lsRealVal').textContent = fmt(real);
  document.getElementById('lsDLInv').textContent   = fmt(amt);
  document.getElementById('lsDLRet').textContent   = fmt(gains);
  updateDonut('lsDonutInv', 'lsDonutRet', 'lsRetPct', amt, fv);
};
calcLS();

/* ────────────────────────────────
   GOAL SIP PLANNER
──────────────────────────────── */
window.calcGoal = function() {
  var target = +document.getElementById('goalTarget').value;
  var yrs    = +document.getElementById('goalYrs').value;
  var ret    = +document.getElementById('goalRet').value / 100;
  var infl   = +document.getElementById('goalInfl').value / 100;
  document.getElementById('goalTargetLbl').textContent = fmt(target);
  document.getElementById('goalYrsLbl').textContent    = yrs + ' yrs';
  document.getElementById('goalRetLbl').textContent    = (ret * 100) + '%';
  document.getElementById('goalInflLbl').textContent   = (infl * 100) + '%';
  ['goalTarget','goalYrs','goalRet','goalInfl'].forEach(function(id) { updateFill(document.getElementById(id)); });

  var inflatedTarget = target * Math.pow(1 + infl, yrs);
  var r = ret / 12, n = yrs * 12;
  var sip = inflatedTarget / ((Math.pow(1 + r, n) - 1) / r * (1 + r));
  var totalInvested = sip * n;
  document.getElementById('goalSIP').textContent           = fmtSIP(Math.round(sip));
  document.getElementById('goalSubLine').textContent       = 'To reach ' + fmt(inflatedTarget) + ' in ' + yrs + ' years';
  document.getElementById('goalInflatedTarget').textContent= fmt(inflatedTarget);
  document.getElementById('goalTotalInvested').textContent = fmt(totalInvested);
  document.getElementById('goalCorpusBuilt').textContent   = fmt(inflatedTarget);
};
calcGoal();

/* ────────────────────────────────
   TAX SAVINGS CALCULATOR
──────────────────────────────── */
var taxRegime = 'old';
window.setTaxRegime = function(regime) {
  taxRegime = regime;
  document.getElementById('taxOldBtn').classList.toggle('active', regime === 'old');
  document.getElementById('taxNewBtn').classList.toggle('active', regime === 'new');
  calcTax();
};

function calcOldTax(income) {
  var tax = 0;
  if (income <= 250000) tax = 0;
  else if (income <= 500000) tax = (income - 250000) * 0.05;
  else if (income <= 1000000) tax = 12500 + (income - 500000) * 0.20;
  else tax = 112500 + (income - 1000000) * 0.30;
  return tax * 1.04; // 4% cess
}
function calcNewTax(income) {
  var tax = 0;
  if (income <= 300000) tax = 0;
  else if (income <= 700000) tax = (income - 300000) * 0.05;
  else if (income <= 1000000) tax = 20000 + (income - 700000) * 0.10;
  else if (income <= 1200000) tax = 50000 + (income - 1000000) * 0.15;
  else if (income <= 1500000) tax = 80000 + (income - 1200000) * 0.20;
  else tax = 140000 + (income - 1500000) * 0.30;
  return tax * 1.04;
}

window.calcTax = function() {
  var inc  = +document.getElementById('taxInc').value;
  var c80c = +document.getElementById('tax80c').value;
  var c80d = +document.getElementById('tax80d').value;
  var nps  = +document.getElementById('taxNps').value;
  document.getElementById('taxIncLbl').textContent  = fmt(inc);
  document.getElementById('tax80cLbl').textContent  = fmtSIP(c80c);
  document.getElementById('tax80dLbl').textContent  = fmtSIP(c80d);
  document.getElementById('taxNpsLbl').textContent  = fmtSIP(nps);
  ['taxInc','tax80c','tax80d','taxNps'].forEach(function(id) { updateFill(document.getElementById(id)); });

  var stdDed = 75000; // FY26 standard deduction
  var taxWithout, taxWith, taxable, effectiveRate;
  if (taxRegime === 'old') {
    taxWithout = calcOldTax(inc - stdDed);
    var totalDed = c80c + c80d + nps;
    taxable = Math.max(inc - stdDed - totalDed, 0);
    taxWith = calcOldTax(taxable);
    effectiveRate = taxWith / inc * 100;
  } else {
    taxWithout = calcNewTax(Math.max(inc - stdDed, 0));
    taxWith    = calcNewTax(Math.max(inc - stdDed, 0));
    taxable    = Math.max(inc - stdDed, 0);
    effectiveRate = taxWith / inc * 100;
  }

  var saved = taxWithout - taxWith;
  document.getElementById('taxSaved').textContent  = fmtSIP(Math.max(Math.round(saved), 0));
  document.getElementById('taxSubLine').textContent = 'Under ' + (taxRegime === 'old' ? 'Old' : 'New') + ' Regime';
  document.getElementById('taxGross').textContent   = fmt(inc);
  document.getElementById('taxTaxable').textContent = fmt(taxable);
  document.getElementById('taxEffRate').textContent = effectiveRate.toFixed(1) + '%';

  var breakdown = '';
  if (taxRegime === 'old') {
    var items = [
      ['Standard Deduction', stdDed],
      ['Section 80C', c80c],
      ['Section 80D', c80d],
      ['NPS 80CCD(1B)', nps],
    ];
    items.forEach(function(item) {
      if (item[1] > 0) {
        breakdown += '<div style="display:flex;justify-content:space-between;align-items:center;font-size:13px">'
          + '<span style="color:var(--gray-600)">' + item[0] + '</span>'
          + '<span style="font-weight:700;color:var(--red)">-' + fmtSIP(item[1]) + '</span></div>';
      }
    });
    var total = stdDed + c80c + c80d + nps;
    breakdown += '<div style="display:flex;justify-content:space-between;font-size:13px;font-weight:700;border-top:1px solid var(--gray-200);padding-top:8px;margin-top:4px">'
      + '<span>Total Deductions</span><span style="color:var(--red)">-' + fmtSIP(total) + '</span></div>';
  } else {
    breakdown = '<div style="font-size:13px;color:var(--gray-500)">New regime: ₹75,000 standard deduction only. 80C, 80D, and NPS 80CCD(1B) deductions are not available.</div>';
  }
  document.getElementById('taxBreakdown').innerHTML = breakdown;
};
calcTax();

/* ────────────────────────────────
   RETIREMENT CALCULATOR
──────────────────────────────── */
window.calcRetirement = function() {
  var curAge    = +document.getElementById('retAge').value;
  var retAge    = +document.getElementById('retRetire').value;
  var expenses  = +document.getElementById('retExp').value;
  var life      = +document.getElementById('retLife').value;
  var preRet    = +document.getElementById('retPreRet').value / 100;
  var infl      = 0.06, postRet = 0.07;
  document.getElementById('retAgeLbl').textContent    = curAge + ' years';
  document.getElementById('retRetireLbl').textContent = retAge + ' years';
  document.getElementById('retExpLbl').textContent    = fmt(expenses);
  document.getElementById('retLifeLbl').textContent   = life + ' years';
  document.getElementById('retPreRetLbl').textContent = (preRet * 100) + '%';
  ['retAge','retRetire','retExp','retLife','retPreRet'].forEach(function(id) { updateFill(document.getElementById(id)); });

  var yrsToRetire     = Math.max(retAge - curAge, 1);
  var retireDuration  = Math.max(life - retAge, 1);
  // Monthly expenses at retirement (inflation-adjusted)
  var monthlyAtRetire = expenses * Math.pow(1 + infl, yrsToRetire);
  // Corpus needed (PV of annuity with inflation and post-retirement return)
  var r = (postRet - infl) / (1 + infl);
  var corpus;
  if (Math.abs(r) < 0.001) {
    corpus = monthlyAtRetire * 12 * retireDuration;
  } else {
    corpus = monthlyAtRetire * 12 * (1 - Math.pow(1 + r, -retireDuration)) / r;
  }
  // Required SIP
  var rr = preRet / 12, n = yrsToRetire * 12;
  var monthlySIP = corpus / ((Math.pow(1 + rr, n) - 1) / rr * (1 + rr));

  document.getElementById('retCorpus').textContent      = fmt(corpus);
  document.getElementById('retSubLine').textContent     = 'To retire at ' + retAge + ' with ' + fmt(expenses) + '/mo in today\'s value';
  document.getElementById('retMonthlySIP').textContent  = fmtSIP(Math.round(monthlySIP));
  document.getElementById('retYrsToRetire').textContent = yrsToRetire + ' yrs';
  document.getElementById('retRetireDuration').textContent = retireDuration + ' yrs';

  document.getElementById('retAssumptions').innerHTML =
    '<div style="display:flex;justify-content:space-between;font-size:12.5px"><span style="color:var(--gray-500)">Inflation assumed</span><span style="font-weight:600">6% p.a.</span></div>' +
    '<div style="display:flex;justify-content:space-between;font-size:12.5px"><span style="color:var(--gray-500)">Post-retirement return</span><span style="font-weight:600">7% p.a.</span></div>' +
    '<div style="display:flex;justify-content:space-between;font-size:12.5px"><span style="color:var(--gray-500)">Monthly expenses at retirement</span><span style="font-weight:600;color:var(--red)">' + fmt(monthlyAtRetire) + '</span></div>';
};
calcRetirement();

/* ────────────────────────────────
   SWP CALCULATOR
──────────────────────────────── */
window.calcSWP = function() {
  var corpus    = +document.getElementById('swpCorpus').value;
  var withdraw  = +document.getElementById('swpWithdraw').value;
  var ret       = +document.getElementById('swpRet').value / 100;
  var infl      = +document.getElementById('swpInfl').value / 100;
  document.getElementById('swpCorpusLbl').textContent   = fmt(corpus);
  document.getElementById('swpWithdrawLbl').textContent = fmtSIP(withdraw);
  document.getElementById('swpRetLbl').textContent      = (ret * 100) + '%';
  document.getElementById('swpInflLbl').textContent     = (infl * 100) + '%';
  ['swpCorpus','swpWithdraw','swpRet','swpInfl'].forEach(function(id) { updateFill(document.getElementById(id)); });

  var balance = corpus, monthlyW = withdraw, totalWithdrawn = 0, months = 0, totalReturns = 0;
  var MAX_MONTHS = 100 * 12;
  while (balance > 0 && months < MAX_MONTHS) {
    var interest = balance * (ret / 12);
    totalReturns += interest;
    balance = balance + interest - monthlyW;
    totalWithdrawn += monthlyW;
    months++;
    if (months % 12 === 0) monthlyW *= (1 + infl); // annual step up
  }
  var yrs = Math.floor(months / 12), mo = months % 12;
  var durationStr = yrs > 0 ? (mo > 0 ? yrs + ' Yrs ' + mo + ' Mo' : yrs + ' Years') : mo + ' Months';
  if (months >= MAX_MONTHS) durationStr = '100+ Years';

  document.getElementById('swpDuration').textContent     = durationStr;
  document.getElementById('swpSubLine').textContent      = fmt(corpus) + ' corpus at ' + fmtSIP(withdraw) + '/mo initial withdrawal';
  document.getElementById('swpTotalWithdrawn').textContent = fmt(totalWithdrawn);
  document.getElementById('swpTotalReturns').textContent  = fmt(totalReturns);
  document.getElementById('swpFinalMonth').textContent    = fmtSIP(Math.round(monthlyW));
};
calcSWP();

})();
</script>

<script>
// Show nav bar after scroll past picker section
window.addEventListener('scroll', function() {
  var picker = document.getElementById('calculators');
  var nav    = document.getElementById('calcNavBar');
  if (picker) {
    nav.style.display = window.scrollY > picker.offsetTop + picker.offsetHeight ? 'block' : 'none';
  }
});
</script>
<?php include_once ('elements/footer.php'); ?>