<?php include_once ('elements/header.php'); ?>

    <!-- Custom CSS -->
    <link href="<?php echo UrlHelper::asset('css/child-wedding-planning.css'); ?>" rel="stylesheet">

    <!-- ════════════════════════════════════════════
    HERO
    ════════════════════════════════════════════ -->
    <section class="hero" id="heroTop">
        <div class="hero-damask"></div>
        <div class="hero-frame"></div>

        <!-- Corner ornaments -->
        <div class="corner tl">
            <svg viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                <path d="M2 38 V2 H38" />
                <circle cx="8" cy="8" r="2" />
                <circle cx="2" cy="2" r="1.5" fill="rgba(201,168,76,.5)" stroke="none" />
            </svg>
        </div>
        <div class="corner tr">
            <svg viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                <path d="M2 38 V2 H38" />
                <circle cx="8" cy="8" r="2" />
            </svg>
        </div>
        <div class="corner bl">
            <svg viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                <path d="M2 38 V2 H38" />
                <circle cx="8" cy="8" r="2" />
            </svg>
        </div>
        <div class="corner br">
            <svg viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                <path d="M2 38 V2 H38" />
                <circle cx="8" cy="8" r="2" />
            </svg>
        </div>

        <!-- Mandala -->
        <svg class="hero-mandala" viewBox="0 0 700 700" xmlns="http://www.w3.org/2000/svg">
            <g class="mandala-ring-1" opacity=".5">
                <circle cx="350" cy="350" r="320" fill="none" stroke="rgba(201,168,76,.08)" stroke-width="1" />
                <circle cx="350" cy="350" r="300" fill="none" stroke="rgba(201,168,76,.05)" stroke-width="1"
                    stroke-dasharray="8 16" />
            </g>
            <g class="mandala-ring-2" opacity=".7">
                <circle cx="350" cy="350" r="240" fill="none" stroke="rgba(201,168,76,.1)" stroke-width="1" />
                <circle cx="350" cy="350" r="220" fill="none" stroke="rgba(201,168,76,.06)" stroke-width="1"
                    stroke-dasharray="4 12" />
                <!-- 12 petal shapes -->
                <g stroke="rgba(201,168,76,.08)" stroke-width="1" fill="none">
                    <ellipse cx="350" cy="200" rx="12" ry="30" transform="rotate(0,350,350)" />
                    <ellipse cx="350" cy="200" rx="12" ry="30" transform="rotate(30,350,350)" />
                    <ellipse cx="350" cy="200" rx="12" ry="30" transform="rotate(60,350,350)" />
                    <ellipse cx="350" cy="200" rx="12" ry="30" transform="rotate(90,350,350)" />
                    <ellipse cx="350" cy="200" rx="12" ry="30" transform="rotate(120,350,350)" />
                    <ellipse cx="350" cy="200" rx="12" ry="30" transform="rotate(150,350,350)" />
                    <ellipse cx="350" cy="200" rx="12" ry="30" transform="rotate(180,350,350)" />
                    <ellipse cx="350" cy="200" rx="12" ry="30" transform="rotate(210,350,350)" />
                    <ellipse cx="350" cy="200" rx="12" ry="30" transform="rotate(240,350,350)" />
                    <ellipse cx="350" cy="200" rx="12" ry="30" transform="rotate(270,350,350)" />
                    <ellipse cx="350" cy="200" rx="12" ry="30" transform="rotate(300,350,350)" />
                    <ellipse cx="350" cy="200" rx="12" ry="30" transform="rotate(330,350,350)" />
                </g>
            </g>
            <g class="mandala-ring-3">
                <circle cx="350" cy="350" r="140" fill="none" stroke="rgba(201,168,76,.12)" stroke-width="1" />
                <circle cx="350" cy="350" r="80" fill="none" stroke="rgba(201,168,76,.08)" stroke-width="1.5" />
                <circle cx="350" cy="350" r="10" fill="rgba(201,168,76,.15)" />
                <!-- 8-point star -->
                <polygon points="350,280 358,342 350,420 342,342" fill="rgba(201,168,76,.06)"
                    stroke="rgba(201,168,76,.15)" stroke-width=".5" />
                <polygon points="280,350 342,358 420,350 342,342" fill="rgba(201,168,76,.06)"
                    stroke="rgba(201,168,76,.15)" stroke-width=".5" />
                <polygon points="350,280 358,342 350,420 342,342" fill="rgba(201,168,76,.04)"
                    stroke="rgba(201,168,76,.1)" stroke-width=".5" transform="rotate(45,350,350)" />
            </g>
        </svg>

        <div class="hero-divider"></div>

        <div class="hero-inner">
            <div class="hero-left">
                <div class="hero-crumb">
                    <a href="index.html">Home</a><span class="sep">◆</span>
                    <a href="services.html">Our Services</a><span class="sep">◆</span>
                    <span class="cur">Wedding Planning</span>
                </div>

                <span class="hero-script" id="heroScript">A promise for life</span>

                <h1 class="hero-title">
                    <span class="line"><span class="line-inner">Begin the</span></span>
                    <span class="line"><span class="line-inner"><strong class="gold">Golden</strong>
                            chapter</span></span>
                    <span class="line"><span class="line-inner">with <strong>certainty.</strong></span></span>
                </h1>

                <div class="hero-rule">
                    <div class="rule-line"></div>
                    <div class="rule-diamond"></div>
                    <div class="rule-line"></div>
                </div>

                <p class="hero-desc">
                    A child wedding plan that turns small monthly savings into a <em>magnificent celebration</em> —
                    fully funded, fully dignified, completely stress-free on the most important day of your child's
                    life.
                </p>

                <div class="hero-cta">
                    <a href="#plans" class="btn-gold">
                        <span>Explore Plans</span>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2.5">
                            <path d="M5 12h14M12 5l7 7-7 7" />
                        </svg>
                    </a>
                    <a href="#calculator" class="btn-ghost-white">
                        Calculate Wedding Fund
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2.5">
                            <path d="M5 12h14M12 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>

                <div class="hero-trust-row">
                    <div class="hero-trust-item">
                        <div class="hti-num">₹1Cr+</div>
                        <div class="hti-label">Max Wedding Fund</div>
                    </div>
                    <div class="hero-trust-item">
                        <div class="hti-num">₹499</div>
                        <div class="hti-label">Starting / Month</div>
                    </div>
                    <div class="hero-trust-item">
                        <div class="hti-num">25Yr</div>
                        <div class="hti-label">Max Plan Duration</div>
                    </div>
                    <div class="hero-trust-item">
                        <div class="hti-num">100%</div>
                        <div class="hti-label">Tax Free Corpus</div>
                    </div>
                </div>
            </div>

            <!-- Invitation Card -->
            <div class="hero-right">
                <div class="invite-card anim-scale">
                    <div class="invite-band"></div>
                    <div class="invite-body">
                        <div class="invite-ornament">💍</div>
                        <div class="invite-serif-label">Wedding Fund Status</div>
                        <div class="invite-script-title">Priya &amp; Arjun</div>
                        <div class="invite-sub-script">Wedding in 2034</div>
                        <div class="invite-divider"></div>
                        <div class="invite-fund-meter">
                            <div class="fund-meter-label">
                                <span>Fund Progress</span>
                                <span id="fundPct">₹14.2L saved</span>
                            </div>
                            <div class="fund-bar">
                                <div class="fund-bar-fill" id="fundBarFill"></div>
                            </div>
                        </div>
                        <div class="invite-milestones">
                            <div class="inv-milestone done">
                                <div class="im-icon">✅</div>
                                <div class="im-text">
                                    <h6>Engagement Ceremony</h6>
                                    <p>Milestone payout • Age 20</p>
                                </div>
                                <div class="im-amt">₹5L</div>
                            </div>
                            <div class="inv-milestone done">
                                <div class="im-icon">✅</div>
                                <div class="im-text">
                                    <h6>Pre-Wedding Events</h6>
                                    <p>Mehendi · Sangeet · Haldi</p>
                                </div>
                                <div class="im-amt">₹8L</div>
                            </div>
                            <div class="inv-milestone">
                                <div class="im-icon">💍</div>
                                <div class="im-text">
                                    <h6>Wedding Ceremony</h6>
                                    <p>Main event + reception</p>
                                </div>
                                <div class="im-amt">₹32L</div>
                            </div>
                            <div class="inv-milestone">
                                <div class="im-icon">🏠</div>
                                <div class="im-text">
                                    <h6>New Home Setup</h6>
                                    <p>Honeymoon + household</p>
                                </div>
                                <div class="im-amt">₹12L</div>
                            </div>
                        </div>
                        <div class="invite-divider"></div>
                        <div style="display:flex;justify-content:space-between;align-items:center;">
                            <div style="font-size:11px;color:var(--ink-faint);letter-spacing:.5px;">Total Projected Fund
                            </div>
                            <div style="font-family:'Cormorant Garamond';font-size:24px;font-weight:600;color:var(--wine);letter-spacing:-1px;"
                                id="totalFundDisp">₹57L</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ════ MARQUEE ════ -->
    <div class="marquee-wrap">
        <div class="marquee-track" id="marqTrack">
            <span class="marq-item"><strong>Tax-Free Corpus</strong><span class="marq-sep">✦</span><em>100% exempt under
                    Sec 10(10D)</em><span class="marq-sep">✦</span></span>
            <span class="marq-item"><strong>Premium Waiver</strong><span class="marq-sep">✦</span><em>Plan continues
                    even if parent is no more</em><span class="marq-sep">✦</span></span>
            <span class="marq-item"><strong>Up to ₹1 Crore</strong><span class="marq-sep">✦</span><em>Wedding fund —
                    fully dignified, debt-free</em><span class="marq-sep">✦</span></span>
            <span class="marq-item"><strong>Start at ₹499/month</strong><span class="marq-sep">✦</span><em>Build the
                    dream wedding with small steps</em><span class="marq-sep">✦</span></span>
            <span class="marq-item"><strong>25-Year Plans</strong><span class="marq-sep">✦</span><em>Lock in low
                    premiums starting at birth</em><span class="marq-sep">✦</span></span>
            <span class="marq-item"><strong>Tax-Free Corpus</strong><span class="marq-sep">✦</span><em>100% exempt under
                    Sec 10(10D)</em><span class="marq-sep">✦</span></span>
            <span class="marq-item"><strong>Premium Waiver</strong><span class="marq-sep">✦</span><em>Plan continues
                    even if parent is no more</em><span class="marq-sep">✦</span></span>
            <span class="marq-item"><strong>Up to ₹1 Crore</strong><span class="marq-sep">✦</span><em>Wedding fund —
                    fully dignified, debt-free</em><span class="marq-sep">✦</span></span>
            <span class="marq-item"><strong>Start at ₹499/month</strong><span class="marq-sep">✦</span><em>Build the
                    dream wedding with small steps</em><span class="marq-sep">✦</span></span>
            <span class="marq-item"><strong>25-Year Plans</strong><span class="marq-sep">✦</span><em>Lock in low
                    premiums starting at birth</em><span class="marq-sep">✦</span></span>
        </div>
    </div>

    <!-- ════ WHY PLAN ════ -->
    <section class="why-plan">
        <div class="container">
            <div class="why-split">
                <div class="why-left-content anim-left">
                    <div class="sec-label">Why Plan Today</div>
                    <h2 class="sec-title">A wedding is <em>priceless.</em><br>But it has a <strong>price.</strong></h2>
                    <div class="why-big-quote">
                        "The average Indian wedding now costs <em>₹30–50 Lakhs</em>. Most families finance this through
                        loans, jewelry sales, or property mortgages. There is a better way."
                    </div>
                    <div class="why-cost-cards">
                        <div class="wcost-card">
                            <div class="wcost-emoji">🏙️</div>
                            <div class="wcost-city">Mumbai / Delhi</div>
                            <div class="wcost-amount">₹45–90L</div>
                            <div class="wcost-label">Average wedding cost 2024</div>
                        </div>
                        <div class="wcost-card">
                            <div class="wcost-emoji">🌆</div>
                            <div class="wcost-city">Ahmedabad / Surat</div>
                            <div class="wcost-amount">₹25–55L</div>
                            <div class="wcost-label">Average wedding cost 2024</div>
                        </div>
                        <div class="wcost-card">
                            <div class="wcost-emoji">🏘️</div>
                            <div class="wcost-city">Tier-2 Cities</div>
                            <div class="wcost-amount">₹12–30L</div>
                            <div class="wcost-label">Average wedding cost 2024</div>
                        </div>
                        <div class="wcost-card">
                            <div class="wcost-emoji">📈</div>
                            <div class="wcost-city">Inflation Rate</div>
                            <div class="wcost-amount">+9.5%</div>
                            <div class="wcost-label">Wedding cost rise per year</div>
                        </div>
                    </div>
                </div>
                <div class="why-right-visual anim-right">
                    <div class="why-points">
                        <div class="why-pt">
                            <div class="wpt-num">01</div>
                            <div class="wpt-icon">💸</div>
                            <div class="wpt-body">
                                <h4>Beat Wedding Inflation</h4>
                                <p>Wedding costs rise ~10% annually. A ₹30L wedding today will cost ₹78L in 10 years.
                                    Your plan compounds faster than inflation — your fund grows while costs rise.</p>
                            </div>
                        </div>
                        <div class="why-pt">
                            <div class="wpt-num">02</div>
                            <div class="wpt-icon">🛡️</div>
                            <div class="wpt-body">
                                <h4>No Loans. No Jewelry Sales. No Regret.</h4>
                                <p>90% of Indian families take personal loans or sell gold for weddings. Our plan
                                    ensures you never compromise your retirement savings or assets for your child's
                                    wedding.</p>
                            </div>
                        </div>
                        <div class="why-pt">
                            <div class="wpt-num">03</div>
                            <div class="wpt-icon">👰</div>
                            <div class="wpt-body">
                                <h4>Start at Birth. Pay Least.</h4>
                                <p>A ₹1,000/month plan started at a daughter's birth builds ₹1.1 Crore by her 25th
                                    birthday at 14% CAGR. The same plan started at age 15 builds only ₹8.5L.</p>
                            </div>
                        </div>
                        <div class="why-pt">
                            <div class="wpt-num">04</div>
                            <div class="wpt-icon">📋</div>
                            <div class="wpt-body">
                                <h4>Premium Waiver — Your Child's Safety Net</h4>
                                <p>If the parent passes away, all future premiums are waived by the insurer. The wedding
                                    fund plan continues and the full corpus is paid at the appointed date — guaranteed.
                                </p>
                            </div>
                        </div>
                        <div class="why-pt">
                            <div class="wpt-num">05</div>
                            <div class="wpt-icon">🏛️</div>
                            <div class="wpt-body">
                                <h4>Milestone Payouts — Not Just Maturity</h4>
                                <p>Receive payouts at engagement, mehendi/sangeet, main wedding, and reception stages.
                                    Never scramble for event-by-event expenses. Each ceremony is pre-funded.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ════ BUDGET BREAKDOWN ════ -->
    <section class="budget-sec">
        <div class="container">
            <div class="budget-inner">
                <div class="budget-left">
                    <div class="sec-label" style="color:var(--gold)">Wedding Budget</div>
                    <h2 class="sec-title" style="color:white">Where does a<br><em>₹50L wedding</em><br>go?</h2>
                    <p class="sec-sub">Understanding how the budget splits across a typical Indian wedding. Adjust the
                        total to see your scenario.</p>
                    <div class="budget-control">
                        <label>Total Wedding Budget — <strong id="budgetTotalLabel" style="color:var(--gold)">₹50
                                Lakh</strong></label>
                        <input type="range" class="budget-slider" id="budgetRange" min="10" max="200" value="50"
                            step="5" oninput="updateBudget()">
                    </div>
                    <div class="donut-legend" id="donutLegend" style="margin-top:32px"></div>
                </div>
                <div>
                    <div class="donut-wrap anim-scale">
                        <svg class="donut-svg" viewBox="0 0 200 200" id="donutSvg"></svg>
                        <div class="donut-center">
                            <div class="dc-amt" id="donutCenter">₹50L</div>
                            <div class="dc-label">Total Fund</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ════ PLANS ════ -->
    <section class="plans-sec" id="plans">
        <div class="container">
            <div class="plans-header anim-up">
                <div class="sec-label">Our Plans</div>
                <h2 class="sec-title">Choose your<br><em>golden path.</em></h2>
                <p class="sec-sub" style="max-width:500px;margin:0 auto">All plans include Premium Waiver Benefit. Lock
                    in low premiums today — every year of delay increases your monthly burden significantly.</p>
            </div>
            <div class="plans-grid">

                <!-- Blossom -->
                <div class="plan-card anim-up">
                    <div class="plan-foil"></div>
                    <div class="plan-body">
                        <div class="plan-tier">Starter</div>
                        <span class="plan-icon">🌸</span>
                        <div class="plan-name">Blossom</div>
                        <div class="plan-desc">Begin small, celebrate beautifully. Perfect for families starting early
                            with a modest but meaningful wedding goal.</div>
                        <div class="plan-price-area">
                            <div class="plan-price"><sup>₹</sup>499</div>
                            <div class="plan-period">per month<br>20-year plan</div>
                        </div>
                        <div class="plan-divider"></div>
                        <div class="plan-feats">
                            <div class="plan-feat"><span class="plan-feat-tick"><svg width="13" height="13"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                                        <path d="M20 6L9 17l-5-5" />
                                    </svg></span>Wedding corpus: up to ₹22L</div>
                            <div class="plan-feat"><span class="plan-feat-tick"><svg width="13" height="13"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                                        <path d="M20 6L9 17l-5-5" />
                                    </svg></span>3 milestone payouts</div>
                            <div class="plan-feat"><span class="plan-feat-tick"><svg width="13" height="13"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                                        <path d="M20 6L9 17l-5-5" />
                                    </svg></span>Premium waiver benefit</div>
                            <div class="plan-feat"><span class="plan-feat-tick"><svg width="13" height="13"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                                        <path d="M20 6L9 17l-5-5" />
                                    </svg></span>80C tax deduction</div>
                            <div class="plan-feat dim">Gold corpus booster</div>
                            <div class="plan-feat dim">Honeymoon fund add-on</div>
                        </div>
                        <a href="contact.html" class="btn-plan-card">Begin Blossom Plan →</a>
                    </div>
                </div>

                <!-- Marigold (Featured) -->
                <div class="plan-card featured anim-up" style="--delay:0.12s">
                    <div class="plan-foil"></div>
                    <div class="plan-body">
                        <div class="plan-tier">Most Chosen</div>
                        <span class="plan-icon">🌼</span>
                        <div class="plan-name">Marigold</div>
                        <div class="plan-desc">The complete wedding plan. Market-linked growth, guaranteed milestone
                            payouts, and a life cover for peace of mind.</div>
                        <div class="plan-price-area">
                            <div class="plan-price"><sup>₹</sup>1,499</div>
                            <div class="plan-period">per month<br>20-year plan</div>
                        </div>
                        <div class="plan-divider"></div>
                        <div class="plan-feats">
                            <div class="plan-feat"><span class="plan-feat-tick"><svg width="13" height="13"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                                        <path d="M20 6L9 17l-5-5" />
                                    </svg></span>Wedding corpus: up to ₹65L</div>
                            <div class="plan-feat"><span class="plan-feat-tick"><svg width="13" height="13"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                                        <path d="M20 6L9 17l-5-5" />
                                    </svg></span>5 milestone payouts</div>
                            <div class="plan-feat"><span class="plan-feat-tick"><svg width="13" height="13"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                                        <path d="M20 6L9 17l-5-5" />
                                    </svg></span>Premium waiver + Life cover ₹30L</div>
                            <div class="plan-feat"><span class="plan-feat-tick"><svg width="13" height="13"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                                        <path d="M20 6L9 17l-5-5" />
                                    </svg></span>Equity growth booster</div>
                            <div class="plan-feat"><span class="plan-feat-tick"><svg width="13" height="13"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                                        <path d="M20 6L9 17l-5-5" />
                                    </svg></span>80C + 10(10D) tax-free corpus</div>
                            <div class="plan-feat dim">Honeymoon fund add-on</div>
                        </div>
                        <a href="contact.html" class="btn-plan-card gold"><span>Start Marigold Plan →</span></a>
                    </div>
                </div>

                <!-- Lotus -->
                <div class="plan-card anim-up" style="--delay:0.24s">
                    <div class="plan-foil"></div>
                    <div class="plan-body">
                        <div class="plan-tier">Premium</div>
                        <span class="plan-icon">🪷</span>
                        <div class="plan-name">Lotus</div>
                        <div class="plan-desc">A grand celebration deserves a grand plan. Up to ₹1 Crore corpus for the
                            wedding your child deserves — including honeymoon fund.</div>
                        <div class="plan-price-area">
                            <div class="plan-price"><sup>₹</sup>3,499</div>
                            <div class="plan-period">per month<br>25-year plan</div>
                        </div>
                        <div class="plan-divider"></div>
                        <div class="plan-feats">
                            <div class="plan-feat"><span class="plan-feat-tick"><svg width="13" height="13"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                                        <path d="M20 6L9 17l-5-5" />
                                    </svg></span>Wedding corpus: up to ₹1.2 Crore</div>
                            <div class="plan-feat"><span class="plan-feat-tick"><svg width="13" height="13"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                                        <path d="M20 6L9 17l-5-5" />
                                    </svg></span>7 milestone payouts</div>
                            <div class="plan-feat"><span class="plan-feat-tick"><svg width="13" height="13"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                                        <path d="M20 6L9 17l-5-5" />
                                    </svg></span>Premium waiver + Life cover ₹75L</div>
                            <div class="plan-feat"><span class="plan-feat-tick"><svg width="13" height="13"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                                        <path d="M20 6L9 17l-5-5" />
                                    </svg></span>Honeymoon fund ₹8L included</div>
                            <div class="plan-feat"><span class="plan-feat-tick"><svg width="13" height="13"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                                        <path d="M20 6L9 17l-5-5" />
                                    </svg></span>Dedicated relationship manager</div>
                            <div class="plan-feat"><span class="plan-feat-tick"><svg width="13" height="13"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                                        <path d="M20 6L9 17l-5-5" />
                                    </svg></span>Annual portfolio + goal reviews</div>
                        </div>
                        <a href="contact.html" class="btn-plan-card">Begin Lotus Plan →</a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ════ CALCULATOR ════ -->
    <section class="calc-sec" id="calculator">
        <div class="container">
            <div class="calc-grid">
                <div class="calc-left anim-left">
                    <div class="sec-label">Wedding Fund Planner</div>
                    <h2 class="sec-title">How much will<br>your child's <em>big day</em><br>cost?</h2>
                    <p class="sec-sub">A ₹30L wedding today will cost ₹75L in 10 years at 9.5% wedding inflation. See
                        exactly what you need to save — and what VaultShield builds for you.</p>
                    <div class="calc-benefit-list">
                        <div class="calc-ben">
                            <div class="cb-tick">✦</div>Live inflation-adjusted wedding cost
                        </div>
                        <div class="calc-ben">
                            <div class="cb-tick">✦</div>Milestone-by-milestone fund view
                        </div>
                        <div class="calc-ben">
                            <div class="cb-tick">✦</div>Instant plan recommendation
                        </div>
                        <div class="calc-ben">
                            <div class="cb-tick">✦</div>No personal data required to estimate
                        </div>
                    </div>
                </div>
                <div class="anim-right">
                    <div class="calc-card">
                        <div class="calc-card-header">
                            <div class="calc-header-icon">💍</div>
                            <h3>Wedding Fund Calculator</h3>
                        </div>
                        <div class="calc-card-body">
                            <div class="calc-field">
                                <label>Child's Current Age <span id="wcAge">2 years</span></label>
                                <input type="range" class="calc-range-gold" id="wc_age" min="0" max="20" value="2"
                                    oninput="calcWedding()">
                            </div>
                            <div class="calc-field">
                                <label>Target Wedding Age <span id="wcWedAge">25 years</span></label>
                                <input type="range" class="calc-range-gold" id="wc_wedAge" min="18" max="30" value="25"
                                    oninput="calcWedding()">
                            </div>
                            <div class="calc-field">
                                <label>Monthly Investment <span id="wcSip">₹1,499</span></label>
                                <input type="range" class="calc-range-gold" id="wc_sip" min="499" max="15000" step="100"
                                    value="1499" oninput="calcWedding()">
                            </div>
                            <div class="calc-field">
                                <label>Expected Return (% p.a.) <span id="wcReturn">14%</span></label>
                                <input type="range" class="calc-range-gold" id="wc_ret" min="8" max="22" step="0.5"
                                    value="14" oninput="calcWedding()">
                            </div>
                            <div class="calc-result">
                                <div class="calc-result-main">
                                    <div class="cr-main-label">Total Wedding Fund at Target Age</div>
                                    <div class="cr-main-amount" id="wc_total">₹1.04Cr</div>
                                </div>
                                <div class="cr-rows">
                                    <div class="cr-row"><span>Total Invested</span><strong
                                            id="wc_invested">₹34.8L</strong></div>
                                    <div class="cr-row"><span>Wealth Gained</span><strong id="wc_gain"
                                            style="color:var(--wine)">₹69.2L</strong></div>
                                    <div class="cr-row"><span>Years to Wedding</span><strong id="wc_years">23
                                            years</strong></div>
                                    <div class="cr-row"><span>Inflation-Adj. Wedding Cost</span><strong
                                            id="wc_infl">₹88L</strong></div>
                                </div>
                            </div>
                            <button class="btn-calc-gold" onclick="submitCalc(this)">Build My Child's Wedding Fund
                                →</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ════ TIMELINE ════ -->
    <section class="timeline-sec">
        <div class="container">
            <div class="tl-header anim-up">
                <div class="sec-label">Wedding Journey</div>
                <h2 class="sec-title">Every ceremony,<br><em>pre-funded.</em></h2>
                <p class="sec-sub">Our milestone-based payout system means every stage of the wedding journey is funded
                    exactly when needed — automatically, without you scrambling.</p>
            </div>
            <div class="tl-grid">
                <div class="tl-card anim-scale">
                    <div class="tl-card-num">1</div>
                    <span class="tl-card-icon">💑</span>
                    <div class="tl-card-age">Age 20–22</div>
                    <h3>Engagement</h3>
                    <p>Ring ceremony, immediate family function. First milestone payout covers rings, function costs,
                        and photographer.</p>
                    <div class="tl-tag">₹3–8L payout</div>
                </div>
                <div class="tl-card anim-scale" style="--delay:0.08s">
                    <div class="tl-card-num">2</div>
                    <span class="tl-card-icon">🌿</span>
                    <div class="tl-card-age">1–2 months before</div>
                    <h3>Mehendi & Sangeet</h3>
                    <p>Pre-wedding celebrations. Second payout covers venue, decoration, mehendi artists, music,
                        outfits, and catering.</p>
                    <div class="tl-tag">₹5–12L payout</div>
                </div>
                <div class="tl-card anim-scale" style="--delay:0.16s">
                    <div class="tl-card-num">3</div>
                    <span class="tl-card-icon">🪔</span>
                    <div class="tl-card-age">Wedding Eve</div>
                    <h3>Haldi & Baraat</h3>
                    <p>The day-before ceremonies. Third payout covers haldi function, baraat arrangements, band baja,
                        and welcome.</p>
                    <div class="tl-tag">₹4–10L payout</div>
                </div>
                <div class="tl-card wine-card anim-scale" style="--delay:0.24s">
                    <div class="tl-card-num">4</div>
                    <span class="tl-card-icon">💍</span>
                    <div class="tl-card-age">Wedding Day</div>
                    <h3>The Main Ceremony</h3>
                    <p>The big day — venue, priest, catering, photography, videography, bridal makeup, groom outfit, and
                        all key expenses.</p>
                    <div class="tl-tag">₹15–40L payout</div>
                </div>
                <div class="tl-card wine-card anim-scale" style="--delay:0.32s">
                    <div class="tl-card-num">5</div>
                    <span class="tl-card-icon">🥂</span>
                    <div class="tl-card-age">Day After</div>
                    <h3>Reception & Vidaai</h3>
                    <p>Post-wedding reception for the groom's family. Fifth payout covers reception venue, catering,
                        gifts, and vidaai ceremony.</p>
                    <div class="tl-tag">₹8–20L payout</div>
                </div>
                <div class="tl-card anim-scale" style="--delay:0.40s">
                    <div class="tl-card-num">6</div>
                    <span class="tl-card-icon">✈️</span>
                    <div class="tl-card-age">Post-Wedding</div>
                    <h3>Honeymoon & New Home</h3>
                    <p>Final payout covers the honeymoon trip, new home deposit or setup, and initial household
                        expenses. A complete beginning.</p>
                    <div class="tl-tag">₹8–15L payout</div>
                </div>
            </div>
        </div>
    </section>

    <!-- ════ TESTIMONIALS ════ -->
    <section class="testi-sec">
        <div class="container">
            <div class="testi-header anim-up">
                <div class="sec-label">Family Stories</div>
                <h2 class="sec-title">Weddings planned<br>with <em>dignity.</em></h2>
            </div>
            <div class="testi-grid">
                <div class="testi-card featured-t anim-up">
                    <div class="testi-stars">★★★★★</div>
                    <div class="testi-text">"We started the Lotus plan when our daughter was 3. She got married last
                        year at 24. The ₹78L corpus was ready well in advance — we threw a beautiful 500-guest wedding
                        without a single rupee of loan. My wife and I kept our savings intact. This plan gave us one of
                        the proudest moments of our lives."</div>
                    <div class="testi-author">
                        <div class="testi-av">RP</div>
                        <div>
                            <div class="testi-name">Ramesh Patel</div>
                            <div class="testi-loc">Lotus Plan · 21 Years · Surat</div>
                        </div>
                    </div>
                </div>
                <div class="testi-card anim-up" style="--delay:0.1s">
                    <div class="testi-stars">★★★★★</div>
                    <div class="testi-text">"After my husband passed away 7 years into the plan, VaultShield waived all
                        premiums immediately. My daughter had no idea the plan was on. The full corpus was paid on her
                        wedding day. He kept his promise from beyond."</div>
                    <div class="testi-author">
                        <div class="testi-av">SM</div>
                        <div>
                            <div class="testi-name">Sunita Mehta</div>
                            <div class="testi-loc">Marigold Plan · 18 Years · Ahmedabad</div>
                        </div>
                    </div>
                </div>
                <div class="testi-card anim-up" style="--delay:0.2s">
                    <div class="testi-stars">★★★★★</div>
                    <div class="testi-text">"Started at ₹499/month when my son was 2. The plan matured at ₹24L —
                        perfectly timed for his sister's wedding setup contribution. Small monthly commitment,
                        life-changing result."</div>
                    <div class="testi-author">
                        <div class="testi-av">VK</div>
                        <div>
                            <div class="testi-name">Vijay Kumar</div>
                            <div class="testi-loc">Blossom Plan · 20 Years · Baroda</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ════ FAQ ════ -->
    <section class="faq-sec">
        <div class="container">
            <div class="faq-grid">
                <div class="faq-left anim-left">
                    <div class="sec-label">FAQ</div>
                    <h2 class="sec-title">Your <em>questions,</em><br>answered.</h2>
                    <p class="sec-sub">Planning a child's wedding is one of the most significant financial decisions a
                        parent makes. Here's what families ask us most.</p>
                    <div class="faq-visual">
                        <div class="faq-visual-ornament">💍</div>
                        <p>"Every parent deserves to see their child married without the shadow of debt."</p>
                        <div class="faq-contact-opts">
                            <a href="tel:18000001234" class="faq-copt"><span>📞</span>Call 1800-000-1234</a>
                            <a href="#" class="faq-copt"><span>💬</span>WhatsApp an Advisor</a>
                            <a href="contact.html" class="faq-copt"><span>📧</span>Book Free Consultation</a>
                        </div>
                    </div>
                </div>
                <div class="faq-items anim-right">
                    <div class="faq-item">
                        <div class="faq-q" onclick="toggleFaq(this)">How is a child wedding plan different from a
                            regular savings plan?<div class="faq-arrow"><svg width="12" height="12" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2.5">
                                    <path d="M12 5v14M5 12l7 7-7 7" />
                                </svg></div>
                        </div>
                        <div class="faq-a">
                            <p>A child wedding plan is a purpose-built insurance product that combines life cover,
                                premium waiver benefit, and milestone-based payouts specifically structured around
                                wedding events. Unlike a mutual fund or savings account, it guarantees the corpus is
                                paid out even if the parent is no longer alive — and payouts are structured to match
                                wedding event timelines, not a single lumpsum at maturity.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-q" onclick="toggleFaq(this)">Can I take this plan for both a son and a daughter?
                            <div class="faq-arrow"><svg width="12" height="12" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2.5">
                                    <path d="M12 5v14M5 12l7 7-7 7" />
                                </svg></div>
                        </div>
                        <div class="faq-a">
                            <p>Absolutely. The plan is gender-neutral and can be taken for any child. Wedding expenses
                                are significant whether it's a son's or daughter's marriage — venue, catering, outfits,
                                gifts, and ceremonies require planning for both. Many families take separate plans for
                                each child to ensure both are equally provided for.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-q" onclick="toggleFaq(this)">What if my child marries later than the planned
                            age?<div class="faq-arrow"><svg width="12" height="12" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2.5">
                                    <path d="M12 5v14M5 12l7 7-7 7" />
                                </svg></div>
                        </div>
                        <div class="faq-a">
                            <p>The plan matures at the chosen policy term, regardless of when the wedding happens. If
                                your child's wedding is delayed, the maturity corpus continues earning interest in a
                                sweep account (paid at declared bonus rates) until you claim it. The money doesn't
                                disappear — it simply waits and continues growing. You can also extend the plan term by
                                one cycle in select variants.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-q" onclick="toggleFaq(this)">How is the wedding corpus paid — lumpsum or in
                            parts?<div class="faq-arrow"><svg width="12" height="12" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2.5">
                                    <path d="M12 5v14M5 12l7 7-7 7" />
                                </svg></div>
                        </div>
                        <div class="faq-a">
                            <p>Our plans offer milestone-based payouts — not a single lumpsum. Payouts are released at
                                pre-defined intervals: at engagement, pre-wedding ceremonies, and main wedding. This
                                ensures you have cash available for each event without having to manage the entire
                                corpus at once. The final payout at maturity covers the post-wedding setup and
                                honeymoon. You can also opt for a single-stage lumpsum payout if preferred.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-q" onclick="toggleFaq(this)">Is the entire corpus tax-free?<div
                                class="faq-arrow"><svg width="12" height="12" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2.5">
                                    <path d="M12 5v14M5 12l7 7-7 7" />
                                </svg></div>
                        </div>
                        <div class="faq-a">
                            <p>Yes. All maturity proceeds and milestone payouts from a VaultShield child wedding plan
                                are fully tax-exempt under Section 10(10D) of the Income Tax Act, provided the annual
                                premium does not exceed 10% of the sum assured. Our plans are structured to comply with
                                this limit automatically. Additionally, premiums paid are deductible under Section 80C
                                up to ₹1.5 Lakh per year.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ════ FINAL CTA ════ -->
    <div class="cta-final">
        <div class="cta-top-band"></div>
        <div class="cta-grid">
            <div class="cta-l anim-left">
                <div class="cta-l-bg-script">Shaadi</div>
                <div class="sec-label">Start Today</div>
                <h2>Their most beautiful<br>day deserves your<br><em>most careful</em> plan.</h2>
                <p>Every month you start early is money you don't need to borrow. Begin with ₹499 today and build the
                    wedding your child deserves — without a single rupee of debt on that day.</p>
                <a href="contact.html" class="btn-cta-gold">
                    <span>Begin Free Consultation →</span>
                </a>
            </div>
            <div class="cta-sep-line"></div>
            <div class="cta-r anim-right">
                <div class="sec-label">Quick Quote</div>
                <h3>Get your child's<br>wedding fund plan.</h3>
                <p>Takes 60 seconds. No calls unless you request one. Fully confidential.</p>
                <div class="quick-form">
                    <div class="form-row-2">
                        <input type="text" class="form-input" placeholder="Parent's Name">
                        <input type="number" class="form-input" placeholder="Child's Age">
                    </div>
                    <input type="tel" class="form-input" placeholder="Your Mobile Number">
                    <select class="form-input" style="appearance:none;-webkit-appearance:none">
                        <option value="" disabled selected>Select Plan</option>
                        <option>🌸 Blossom — ₹499/mo</option>
                        <option>🌼 Marigold — ₹1,499/mo</option>
                        <option>🪷 Lotus — ₹3,499/mo</option>
                        <option>Not sure — advise me</option>
                    </select>
                    <button class="btn-form-gold" onclick="submitForm(this)">Get My Child's Wedding Plan →</button>
                </div>
            </div>
        </div>
    </div>

<?php include_once ('elements/footer.php'); ?>