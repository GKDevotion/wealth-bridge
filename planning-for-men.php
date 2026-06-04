<?php include_once ('elements/header.php'); ?>

<!-- Page CSS -->
<link href="<?php echo UrlHelper::asset('css/planning-for-men.css'); ?>" rel="stylesheet">

<!-- ══════════════════════════════════════
     BREADCRUMB
══════════════════════════════════════ -->
<div class="breadcrumb-bar">
    <div class="container">
        <div class="breadcrumb">
            <a href="index"><i class="fas fa-home"></i> Home</a>
            <span>›</span>
            <a href="#">Our Services</a>
            <span>›</span>
            <span class="current">Financial Planning for Men</span>
        </div>
    </div>
</div>


<!-- ══════════════════════════════════════
     HERO — DARK
══════════════════════════════════════ -->
<section class="service-hero">
    <div class="sh-bg"></div>
    <div class="sh-grid"></div>
    <div class="sh-line"></div>
    <div class="sh-line2"></div>

    <div class="container">
        <div class="sh-content">

            <!-- LEFT: Copy -->
            <div class="sh-left">
                <div class="hero__label" data-aos="fade-right" data-aos-duration="700">
                    Our Services &nbsp;·&nbsp; Financial Planning
                </div>

                <h1 class="hero__title" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                    Built for the
                    <em>Modern Man's</em>
                    Financial Journey
                </h1>

                <p class="hero__subtitle" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                    From your first paycheck to your legacy — WealthBridge designs
                    personalised financial strategies that match your ambitions,
                    protect your family, and build generational wealth.
                </p>

                <div class="hero__actions" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                    <a href="#contact" class="btn btn-primary">
                        Book a Free Session
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
                        <div class="hero__stat-num" data-counter="3.2" data-suffix="Cr+">₹3.2Cr+</div>
                        <div class="hero__stat-label">Avg. Wealth Built</div>
                    </div>
                    <div>
                        <div class="hero__stat-num" data-counter="5000" data-suffix="+">5,000+</div>
                        <div class="hero__stat-label">Men Advised</div>
                    </div>
                    <div>
                        <div class="hero__stat-num" data-counter="17" data-suffix=" Yrs">17 Yrs</div>
                        <div class="hero__stat-label">of Expertise</div>
                    </div>
                </div>
            </div><!-- /sh-left -->

            <!-- RIGHT: Card Visual -->
            <div class="hero__visual" data-aos="fade-left" data-aos-duration="900" data-aos-delay="200">

                <!-- float top-right -->
                <div class="hero__float f1">
                    <div class="hero__float-label">Active Clients</div>
                    <div class="hero__float-val">5,000 <span>+</span></div>
                    <div class="hero__float-avatars">
                        <div class="hf-av">RK</div>
                        <div class="hf-av">AM</div>
                        <div class="hf-av">VP</div>
                        <div class="hf-av hf-av-more">99+</div>
                    </div>
                </div>

                <!-- main card -->
                <div class="hero__card-main">
                    <div class="hero__card-header">
                        <span class="hero__card-title">Wealth Performance</span>
                        <span class="hero__card-badge">
                            <span class="hero__card-badge-dot"></span>
                            Live
                        </span>
                    </div>

                    <!-- mini bar chart -->
                    <div class="hero__mini-chart">
                        <div class="hmc-bar" style="height:35%"></div>
                        <div class="hmc-bar" style="height:50%"></div>
                        <div class="hmc-bar" style="height:42%"></div>
                        <div class="hmc-bar" style="height:60%"></div>
                        <div class="hmc-bar" style="height:48%"></div>
                        <div class="hmc-bar" style="height:70%"></div>
                        <div class="hmc-bar hi" style="height:55%"></div>
                        <div class="hmc-bar hi" style="height:80%"></div>
                        <div class="hmc-bar hi" style="height:68%"></div>
                        <div class="hmc-bar hi" style="height:90%"></div>
                        <div class="hmc-bar hi" style="height:75%"></div>
                        <div class="hmc-bar hi" style="height:100%"></div>
                    </div>

                    <!-- metrics 2x2 -->
                    <div class="hero__metrics">
                        <div class="hero__metric">
                            <div class="hero__metric-label">Portfolio Growth</div>
                            <div class="hero__metric-val">+18.4% <span class="up">▲</span></div>
                        </div>
                        <div class="hero__metric">
                            <div class="hero__metric-label">Retirement Fund</div>
                            <div class="hero__metric-val">₹1.8Cr <span class="up">▲4.2%</span></div>
                        </div>
                        <div class="hero__metric">
                            <div class="hero__metric-label">Tax Saved</div>
                            <div class="hero__metric-val">₹2.4L <span class="up">▲ FY</span></div>
                        </div>
                        <div class="hero__metric">
                            <div class="hero__metric-label">Risk Index</div>
                            <div class="hero__metric-val">Mod. <span class="neu">●●●○○</span></div>
                        </div>
                    </div>
                </div><!-- /hero__card-main -->

                <!-- float bottom-left -->
                <div class="hero__float f2">
                    <div class="hero__float-label">Avg. Annual Return</div>
                    <div class="hero__float-val">+18.4% <span>▲</span></div>
                    <div class="hero__float-sub">Last 5-year CAGR</div>
                </div>

            </div><!-- /hero__visual -->

        </div><!-- /sh-content -->
    </div>
</section>


<!-- ══════════════════════════════════════
     WHY MEN NEED A PLAN — WHITE
══════════════════════════════════════ -->
<section class="section why-men">
    <div class="container">
        <div class="why-men-grid">

            <!-- LEFT: content -->
            <div class="why-men-content">
                <span class="section-label" data-aos="fade-right">The Reality</span>
                <h2 class="section-title" data-aos="fade-up" data-aos-delay="80">
                    Why Men Need a <span>Dedicated</span><br>Financial Strategy
                </h2>
                <div style="width:48px;height:3px;background:var(--red);border-radius:2px;margin-bottom:20px"
                     data-aos="fade-left" data-aos-delay="120"></div>
                <p class="section-sub" data-aos="fade-up" data-aos-delay="160">
                    Men face distinct financial pressures — from being the primary breadwinner
                    to managing business equity, EMIs, and building retirement security —
                    without ever having been taught the right way.
                </p>

                <div class="why-men-features" data-aos="fade-up" data-aos-delay="220">
                    <div class="wmf-card">
                        <div class="wmf-icon"><i class="fas fa-crosshairs"></i></div>
                        <div class="wmf-title">Goal-Mapped Strategy</div>
                        <div class="wmf-desc">Every rupee directed toward your specific milestones — home, car, retirement, legacy.</div>
                    </div>
                    <div class="wmf-card">
                        <div class="wmf-icon"><i class="fas fa-shield-alt"></i></div>
                        <div class="wmf-title">Risk Protection</div>
                        <div class="wmf-desc">Life insurance, health cover, and emergency buffers sized for your income stage.</div>
                    </div>
                    <div class="wmf-card">
                        <div class="wmf-icon"><i class="fas fa-chart-line"></i></div>
                        <div class="wmf-title">Growth Optimisation</div>
                        <div class="wmf-desc">Equity, debt, and real estate balanced for your age and risk appetite.</div>
                    </div>
                    <div class="wmf-card">
                        <div class="wmf-icon"><i class="fas fa-landmark"></i></div>
                        <div class="wmf-title">Tax-Smart Structure</div>
                        <div class="wmf-desc">Maximise 80C, 80D, ELSS, and NPS benefits systematically every year.</div>
                    </div>
                </div>
            </div>

            <!-- RIGHT: dark stats card -->
            <div class="why-men-visual" data-aos="fade-left" data-aos-delay="180">
                <div class="why-bg-block"></div>

                <!-- float top-right -->
                <div class="why-badge-float f2">
                    <div class="wbf-inner">
                        <div class="wbf-icon"><i class="fas fa-award"></i></div>
                        <div>
                            <div class="wbf-num">SEBI</div>
                            <div class="wbf-label">Registered RIA</div>
                        </div>
                    </div>
                </div>

                <div class="why-chart-card">
                    <div class="wcc-title">Men with a plan vs without</div>

                    <div class="wcc-bar-group">
                        <div class="wcc-bar-labels">
                            <span>Retirement corpus at 60</span>
                            <span>3.1× more</span>
                        </div>
                        <div class="wcc-bar-track">
                            <div class="wcc-bar-fill" style="--w:88%"></div>
                        </div>
                    </div>
                    <div class="wcc-bar-group">
                        <div class="wcc-bar-labels">
                            <span>Emergency preparedness</span>
                            <span>+64%</span>
                        </div>
                        <div class="wcc-bar-track">
                            <div class="wcc-bar-fill" style="--w:74%"></div>
                        </div>
                    </div>
                    <div class="wcc-bar-group">
                        <div class="wcc-bar-labels">
                            <span>Annual tax savings</span>
                            <span>₹1.8L avg</span>
                        </div>
                        <div class="wcc-bar-track">
                            <div class="wcc-bar-fill" style="--w:60%"></div>
                        </div>
                    </div>
                    <div class="wcc-bar-group">
                        <div class="wcc-bar-labels">
                            <span>Debt-free before 50</span>
                            <span>2× faster</span>
                        </div>
                        <div class="wcc-bar-track">
                            <div class="wcc-bar-fill" style="--w:52%"></div>
                        </div>
                    </div>
                    <div class="wcc-bar-group">
                        <div class="wcc-bar-labels">
                            <span>Child education funded</span>
                            <span>92% on track</span>
                        </div>
                        <div class="wcc-bar-track">
                            <div class="wcc-bar-fill" style="--w:92%"></div>
                        </div>
                    </div>

                    <div class="wcc-footer">
                        <div>
                            <div class="wcc-stat-num">78%</div>
                            <div class="wcc-stat-label">More likely to retire early</div>
                        </div>
                        <div>
                            <div class="wcc-stat-num">₹42L</div>
                            <div class="wcc-stat-label">Average wealth gap (10yr)</div>
                        </div>
                    </div>
                </div>

                <!-- float bottom-right -->
                <div class="why-badge-float f1">
                    <div class="wbf-inner">
                        <div class="wbf-icon"><i class="fas fa-users"></i></div>
                        <div>
                            <div class="wbf-num">5,000+</div>
                            <div class="wbf-label">Men Advised</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- ══════════════════════════════════════
     LIFE STAGES — GRAY-50
══════════════════════════════════════ -->
<section class="section life-stages">
    <div class="container">
        <div class="section-header center">
            <span class="section-label" data-aos="fade-up">Lifecycle Approach</span>
            <h2 class="section-title" data-aos="fade-up" data-aos-delay="80">
                A Plan for Every <span>Stage</span> of Your Life
            </h2>
            <p class="section-sub" data-aos="fade-up" data-aos-delay="140">
                Financial needs evolve as you grow. Our advisors meet you exactly where you are —
                whether you just landed your first job or are planning to pass wealth to the next generation.
            </p>
        </div>

        <div class="stages-grid">
            <div class="stage-card" data-aos="fade-up" data-aos-delay="0">
                <div class="stage-num">01</div>
                <div class="stage-age">20s · Foundation</div>
                <div class="stage-title">Early Career Builder</div>
                <div class="stage-desc">Lay strong financial foundations — savings habits, first investments, eliminating student debt.</div>
                <div class="stage-items">
                    <div class="stage-item">Build emergency fund (6 months)</div>
                    <div class="stage-item">Start SIP with ₹5,000/month</div>
                    <div class="stage-item">Term insurance — early & affordable</div>
                    <div class="stage-item">Open NPS / PPF accounts</div>
                </div>
            </div>

            <div class="stage-card" data-aos="fade-up" data-aos-delay="100">
                <div class="stage-num">02</div>
                <div class="stage-age">30s · Accumulation</div>
                <div class="stage-title">Family & Growth Phase</div>
                <div class="stage-desc">Balancing EMIs, child expenses, and accelerating wealth while your career is peaking.</div>
                <div class="stage-items">
                    <div class="stage-item">Home loan optimisation</div>
                    <div class="stage-item">Child education corpus</div>
                    <div class="stage-item">Family health cover</div>
                    <div class="stage-item">Equity-heavy growth portfolio</div>
                </div>
            </div>

            <div class="stage-card" data-aos="fade-up" data-aos-delay="200">
                <div class="stage-num">03</div>
                <div class="stage-age">40s · Consolidation</div>
                <div class="stage-title">Peak Earnings Protector</div>
                <div class="stage-desc">Maximise high-earning years; shift gradually to capital preservation with growth.</div>
                <div class="stage-items">
                    <div class="stage-item">Reduce high-interest debt fast</div>
                    <div class="stage-item">Ramp up NPS &amp; ELSS</div>
                    <div class="stage-item">Business succession planning</div>
                    <div class="stage-item">Real estate diversification</div>
                </div>
            </div>

            <div class="stage-card" data-aos="fade-up" data-aos-delay="300">
                <div class="stage-num">04</div>
                <div class="stage-age">50s+ · Legacy</div>
                <div class="stage-title">Wealth Preservationist</div>
                <div class="stage-desc">Retirement readiness, estate planning, and building a legacy worth inheriting.</div>
                <div class="stage-items">
                    <div class="stage-item">Retirement corpus review</div>
                    <div class="stage-item">Will &amp; estate planning</div>
                    <div class="stage-item">Senior health insurance</div>
                    <div class="stage-item">Systematic withdrawal plan</div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ══════════════════════════════════════
     SERVICES FOR MEN — WHITE
══════════════════════════════════════ -->
<section class="section men-services" id="services">
    <div class="container">
        <div class="section-header">
            <span class="section-label" data-aos="fade-right">What We Offer</span>
            <h2 class="section-title" data-aos="fade-up" data-aos-delay="80">
                Specialised Services <span>for Men</span>
            </h2>
            <p class="section-sub" data-aos="fade-up" data-aos-delay="140">
                Each solution is crafted around the real financial realities men face —
                income peaks, family obligations, business exposure, and legacy aspirations.
            </p>
        </div>

        <div class="svc-grid" data-aos="fade-up" data-aos-delay="180">
            <div class="svc-card">
                <div class="svc-icon"><i class="fas fa-briefcase"></i></div>
                <div class="svc-title">Investment Planning</div>
                <div class="svc-desc">Equity, debt, gold, and REITs — crafted into a single portfolio aligned with your income, age, and ambitions.</div>
                <a href="investment-planning" class="svc-link">Learn More <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="svc-card">
                <div class="svc-icon"><i class="fas fa-home"></i></div>
                <div class="svc-title">Retirement Planning</div>
                <div class="svc-desc">Define your ideal retirement lifestyle and build the exact corpus you need — systematically, without guessing.</div>
                <a href="retirement-planning" class="svc-link">Learn More <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="svc-card">
                <div class="svc-icon"><i class="fas fa-file-invoice-dollar"></i></div>
                <div class="svc-title">Tax-Efficient Investing</div>
                <div class="svc-desc">Section 80C, 80D, NPS, ELSS — structured so you save maximum tax while your money grows hard.</div>
                <a href="tax-efficient-investment" class="svc-link">Learn More <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="svc-card">
                <div class="svc-icon"><i class="fas fa-shield-alt"></i></div>
                <div class="svc-title">Life &amp; Health Insurance</div>
                <div class="svc-desc">Right cover at the right cost. We audit your existing policies and fill the critical gaps most men don't see.</div>
                <a href="life-insurance" class="svc-link">Learn More <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="svc-card">
                <div class="svc-icon"><i class="fas fa-graduation-cap"></i></div>
                <div class="svc-title">Child Education Planning</div>
                <div class="svc-desc">From nursery fees today to IIT/IIM tomorrow — an inflation-beating education corpus mapped to your child's calendar.</div>
                <a href="child-education-planning" class="svc-link">Learn More <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="svc-card">
                <div class="svc-icon"><i class="fas fa-building"></i></div>
                <div class="svc-title">Business &amp; Wealth Planning</div>
                <div class="svc-desc">Separate business risk from personal wealth. Succession planning, buyout strategies, and founder liquidity events.</div>
                <a href="business-planning" class="svc-link">Learn More <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
</section>


<!-- ══════════════════════════════════════
     PROCESS — DARK BG
══════════════════════════════════════ -->
<section class="section men-process">
    <div class="container">
        <div class="section-header center">
            <span class="section-label" data-aos="fade-up">Our Process</span>
            <h2 class="section-title" data-aos="fade-up" data-aos-delay="80">
                Your Journey to Financial <span>Clarity</span>
            </h2>
            <p class="section-sub" style="margin:0 auto" data-aos="fade-up" data-aos-delay="140">
                Five structured steps — from understanding your life to building a plan you can actually follow.
            </p>
        </div>

        <div class="process-steps">
            <div class="process-step" data-aos="fade-up" data-aos-delay="0">
                <div class="process-num">1</div>
                <h4>Discovery Call</h4>
                <p>Free 30-min session to understand your life stage, goals, and current financial picture.</p>
            </div>
            <div class="process-step" data-aos="fade-up" data-aos-delay="100">
                <div class="process-num">2</div>
                <h4>Financial Audit</h4>
                <p>Deep review of income, assets, liabilities, insurance, and existing investments.</p>
            </div>
            <div class="process-step" data-aos="fade-up" data-aos-delay="200">
                <div class="process-num">3</div>
                <h4>Bespoke Plan</h4>
                <p>Written plan with exact allocation recommendations, timelines, and corpus targets.</p>
            </div>
            <div class="process-step" data-aos="fade-up" data-aos-delay="300">
                <div class="process-num">4</div>
                <h4>Implementation</h4>
                <p>We handle paperwork and set up accounts, SIPs, and insurance with zero friction.</p>
            </div>
            <div class="process-step" data-aos="fade-up" data-aos-delay="400">
                <div class="process-num">5</div>
                <h4>Review &amp; Evolve</h4>
                <p>Quarterly check-ins that adapt your plan to life changes, market shifts, and new goals.</p>
            </div>
        </div>
    </div>
</section>


<!-- ══════════════════════════════════════
     CALCULATOR STRIP — RED
══════════════════════════════════════ -->
<div class="calc-strip" data-aos="fade-up">
    <div class="container">
        <div class="calc-strip-inner">
            <div>
                <div class="calc-strip__title">How Much Do You Need to Retire Comfortably?</div>
                <p class="calc-strip__desc">
                    Use WealthBridge's free retirement calculator — find your exact corpus goal based on
                    your current lifestyle, inflation, and expected returns.
                </p>
            </div>
            <a href="retirement-calculator" class="btn btn-white">
                Try Retirement Calculator
                <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </div>
</div>


<!-- ══════════════════════════════════════
     TESTIMONIALS — GRAY-50
══════════════════════════════════════ -->
<section class="section men-testimonials">
    <div class="container">
        <div class="section-header center">
            <span class="section-label" data-aos="fade-up">Client Stories</span>
            <h2 class="section-title" data-aos="fade-up" data-aos-delay="80">
                Men Who Took <span>Control</span>
            </h2>
            <p class="section-sub" style="margin:0 auto" data-aos="fade-up" data-aos-delay="140">
                Real clients. Real results. Real financial confidence.
            </p>
        </div>

        <div class="testimonials-grid">
            <div class="testi-card" data-aos="fade-up" data-aos-delay="0">
                <div class="testi-stars">★★★★★</div>
                <div class="testi-quote">"</div>
                <p class="testi-text">
                    At 34, I had no retirement plan and a messy portfolio of random stocks.
                    WealthBridge cleaned it all up, set up a proper SIP structure, and I've
                    grown 22% in just 18 months.
                </p>
                <div class="testi-author">
                    <div class="testi-avatar">RK</div>
                    <div>
                        <div class="testi-name">Rahul Kapoor</div>
                        <div class="testi-role">IT Manager, Bengaluru · Age 34</div>
                    </div>
                </div>
            </div>

            <div class="testi-card" data-aos="fade-up" data-aos-delay="100">
                <div class="testi-stars">★★★★★</div>
                <div class="testi-quote">"</div>
                <p class="testi-text">
                    At 42 with a business, my personal and professional finances were completely
                    mixed. They separated everything, saved me ₹3.2L in taxes last year alone,
                    and created a buy-out plan I never thought about.
                </p>
                <div class="testi-author">
                    <div class="testi-avatar">AM</div>
                    <div>
                        <div class="testi-name">Arjun Mehta</div>
                        <div class="testi-role">Entrepreneur, Mumbai · Age 42</div>
                    </div>
                </div>
            </div>

            <div class="testi-card" data-aos="fade-up" data-aos-delay="200">
                <div class="testi-stars">★★★★★</div>
                <div class="testi-quote">"</div>
                <p class="testi-text">
                    Retiring at 55 was always a dream. WealthBridge showed me it's realistic with
                    a clear roadmap. Five years in, I'm on track and sleeping better than ever.
                </p>
                <div class="testi-author">
                    <div class="testi-avatar">VP</div>
                    <div>
                        <div class="testi-name">Vikram Patel</div>
                        <div class="testi-role">Senior Engineer, Pune · Age 48</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ══════════════════════════════════════
     FAQ — WHITE, TWO-COLUMN
══════════════════════════════════════ -->
<section class="section faq-section" id="faq">
    <div class="container">
        <div class="faq-grid">
            <div class="faq-intro" data-aos="fade-right">
                <span class="section-label">FAQ</span>
                <h2 class="section-title">Financial Planning <span>Questions</span></h2>
                <p class="section-sub" style="margin-bottom:28px">Everything you want to know before getting started — answered honestly.</p>
                <a href="#contact" class="btn btn-primary">Ask an Advisor <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="faq-list" data-aos="fade-left" data-aos-delay="120">
                <div class="faq-item open">
                    <div class="faq-q"><span>How is this different from general financial planning?</span><i class="fas fa-plus"></i></div>
                    <div class="faq-a">
                        Financial Planning for Men is designed around the specific financial journeys, pressures,
                        and opportunities men typically face — primary income responsibility, business ownership risk,
                        early retirement goals, and family protection. We use life-stage segmentation rather than a
                        one-size-fits-all approach.
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-q"><span>I already have an LIC policy and some mutual funds. Do I need this?</span><i class="fas fa-plus"></i></div>
                    <div class="faq-a">
                        Yes — and especially so. Most people accumulate financial products over years without a coherent
                        strategy. We audit everything you have, identify gaps and overlaps, and restructure your holdings
                        into a goal-linked plan that actually works together.
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-q"><span>What is the minimum investable amount to work with WealthBridge?</span><i class="fas fa-plus"></i></div>
                    <div class="faq-a">
                        We work with clients across income levels. You can start with as little as ₹5,000/month in SIPs.
                        Our fee structure is transparent and SEBI-compliant — we charge a flat advisory fee, not commission,
                        so our advice is always in your interest.
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-q"><span>How often will I meet my advisor?</span><i class="fas fa-plus"></i></div>
                    <div class="faq-a">
                        Every client gets a dedicated advisor and quarterly review meetings. You'll also get ad-hoc access
                        via call or chat whenever life changes — a job switch, a bonus, a new child — require plan adjustments.
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-q"><span>Are you SEBI registered?</span><i class="fas fa-plus"></i></div>
                    <div class="faq-a">
                        Yes. WealthBridge is a SEBI Registered Investment Adviser (RIA). All our advisors are certified CFPs
                        and operate under full fiduciary duty to you — our only loyalty is to your financial wellbeing,
                        not product commissions.
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-q"><span>Can I switch to WealthBridge from another advisor?</span><i class="fas fa-plus"></i></div>
                    <div class="faq-a">
                        Absolutely. We handle the transition smoothly — portfolio review, documentation, and onboarding —
                        without disrupting your existing investments. Most clients switch within 2 weeks with zero downtime.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ══════════════════════════════════════
     CTA BAND — DARK
══════════════════════════════════════ -->
<section class="men-cta" id="contact">
    <div class="container">
        <div class="men-cta-inner">
            <span class="section-label" style="justify-content:center;display:flex" data-aos="fade-up">
                Take the First Step
            </span>
            <h2 class="cta-title" data-aos="fade-up" data-aos-delay="80">
                Your Wealth Journey Starts<br>with a <span>Single Conversation</span>
            </h2>
            <p class="cta-desc" data-aos="fade-up" data-aos-delay="140">
                Join 5,000+ men who've replaced financial anxiety with a clear, confident, growing wealth plan.
                Your first session is free — no commitment, no jargon.
            </p>
            <div class="cta-actions" data-aos="fade-up" data-aos-delay="200">
                <a href="contact" class="btn btn-primary">
                    Book Free Discovery Call
                    <i class="fas fa-arrow-right"></i>
                </a>
                <a href="tel:+911800000000" class="btn btn-ghost">
                    <i class="fas fa-phone"></i>
                    Call 1800-000-000
                </a>
            </div>

            <div class="cta-trust" data-aos="fade-up" data-aos-delay="280">
                <div class="ct-item"><i class="fas fa-check-circle"></i> SEBI Registered Adviser</div>
                <div class="ct-item"><i class="fas fa-check-circle"></i> Fee-Only · No Commission</div>
                <div class="ct-item"><i class="fas fa-check-circle"></i> Fiduciary Duty to You</div>
                <div class="ct-item"><i class="fas fa-check-circle"></i> First Session Free</div>
            </div>
        </div>
    </div>
</section>


<!-- ══════════════════════════════════════
     RELATED SERVICES — WHITE
══════════════════════════════════════ -->
<section class="section men-related">
    <div class="container">
        <div class="section-header">
            <span class="section-label" data-aos="fade-right">Also Explore</span>
            <h2 class="section-title" data-aos="fade-up" data-aos-delay="80">
                Related <span>Advisory Services</span>
            </h2>
        </div>

        <div class="related-grid">
            <a href="planning-for-women" class="rel-card" data-aos="fade-up" data-aos-delay="0">
                <div class="rc-icon"><i class="fas fa-venus"></i></div>
                <h4>Financial Planning for Women</h4>
                <p>Tailored strategies addressing career gaps, longevity, and wealth independence.</p>
                <span class="rc-link">Explore <i class="fas fa-arrow-right"></i></span>
            </a>
            <a href="planning-for-couples" class="rel-card" data-aos="fade-up" data-aos-delay="80">
                <div class="rc-icon"><i class="fas fa-heart"></i></div>
                <h4>Financial Planning for Couples</h4>
                <p>Align your joint goals — home, family, retirement — with a unified plan.</p>
                <span class="rc-link">Explore <i class="fas fa-arrow-right"></i></span>
            </a>
            <a href="wealth-management" class="rel-card" data-aos="fade-up" data-aos-delay="160">
                <div class="rc-icon"><i class="fas fa-gem"></i></div>
                <h4>Wealth Management</h4>
                <p>Comprehensive portfolio management for high-net-worth individuals and families.</p>
                <span class="rc-link">Explore <i class="fas fa-arrow-right"></i></span>
            </a>
            <a href="retirement-planning" class="rel-card" data-aos="fade-up" data-aos-delay="240">
                <div class="rc-icon"><i class="fas fa-umbrella-beach"></i></div>
                <h4>Retirement Planning</h4>
                <p>Define your ideal retirement number and build toward it with precision.</p>
                <span class="rc-link">Explore <i class="fas fa-arrow-right"></i></span>
            </a>
        </div>
    </div>
</section>

 

<?php include_once ('elements/footer.php'); ?>