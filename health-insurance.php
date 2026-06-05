<?php include_once ('elements/header.php'); ?>

<!-- Page CSS -->
<link href="<?php echo UrlHelper::asset('css/health-insurance.css'); ?>" rel="stylesheet">


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
            <span class="current">Health Insurance</span>
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
    <div class="sh-crosshair"></div>

    <div class="container">
        <div class="sh-content">

            <!-- LEFT: Copy -->
            <div class="sh-left">

                <div class="hero__label" data-aos="fade-right" data-aos-duration="700">
                    Our Services &nbsp;·&nbsp; Health Insurance
                </div>

                <h1 class="hero__title" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                    Protect What
                    <em>Matters Most —</em>
                    Your Health & Family
                </h1>

                <p class="hero__subtitle" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                    A single medical emergency can wipe out years of savings. WealthBridge helps
                    you choose the right health insurance — right coverage, right insurer,
                    right premium — so your wealth stays intact when life gets unpredictable.
                </p>

                <div class="hero__actions" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                    <a href="#contact" class="btn btn-primary">
                        Get Free Consultation
                        <i class="fas fa-arrow-right"></i>
                    </a>
                    <a href="#plans" class="btn btn-ghost">
                        View Plans
                        <i class="fas fa-chevron-down"></i>
                    </a>
                </div>

                <!-- Stats strip -->
                <div class="hero__stats" data-aos="fade-up" data-aos-duration="800" data-aos-delay="420">
                    <div>
                        <div class="hero__stat-num" data-counter="500" data-suffix="+">500+</div>
                        <div class="hero__stat-label">Plans Compared</div>
                    </div>
                    <div>
                        <div class="hero__stat-num" data-counter="98" data-suffix="%">98%</div>
                        <div class="hero__stat-label">Claim Settlement</div>
                    </div>
                    <div>
                        <div class="hero__stat-num" data-counter="10000" data-suffix="+">10K+</div>
                        <div class="hero__stat-label">Families Covered</div>
                    </div>
                </div>

            </div><!-- /sh-left -->

            <!-- RIGHT: Card Visual -->
            <div class="hero__visual" data-aos="fade-left" data-aos-duration="900" data-aos-delay="200">

                <!-- float top-right -->
                <div class="hero__float f1">
                    <div class="hero__float-label">Claim Settled</div>
                    <div class="hero__float-val">₹8.6L <span>✓</span></div>
                    <div class="hero__float-sub">Within 4 working days</div>
                </div>

                <!-- main card -->
                <div class="hero__card-main">
                    <div class="hero__card-header">
                        <span class="hero__card-title">Coverage Overview</span>
                        <span class="hero__card-badge">
                            <span class="hero__card-badge-dot"></span>
                            Active
                        </span>
                    </div>

                    <!-- Donut + coverage breakdown -->
                    <div class="hero__coverage">
                        <!-- donut chart -->
                        <div class="hero__donut-wrap">
                            <svg viewBox="0 0 100 100" width="100" height="100">
                                <circle class="donut-track" cx="50" cy="50" r="40"/>
                                <circle class="donut-fill"  cx="50" cy="50" r="40"/>
                            </svg>
                            <div class="hero__donut-label">
                                <div class="hero__donut-pct">75%</div>
                                <div class="hero__donut-sub">covered</div>
                            </div>
                        </div>

                        <!-- breakdown rows -->
                        <div class="hero__coverage-list">
                            <div class="hcl-item">
                                <span class="hcl-name">Hospitalisation</span>
                                <div class="hcl-bar-wrap">
                                    <div class="hcl-bar" style="--w:95%"></div>
                                </div>
                                <span class="hcl-val">100%</span>
                            </div>
                            <div class="hcl-item">
                                <span class="hcl-name">Critical Illness</span>
                                <div class="hcl-bar-wrap">
                                    <div class="hcl-bar" style="--w:80%"></div>
                                </div>
                                <span class="hcl-val">80%</span>
                            </div>
                            <div class="hcl-item">
                                <span class="hcl-name">Day Care</span>
                                <div class="hcl-bar-wrap">
                                    <div class="hcl-bar" style="--w:75%"></div>
                                </div>
                                <span class="hcl-val">75%</span>
                            </div>
                            <div class="hcl-item">
                                <span class="hcl-name">OPD / Dental</span>
                                <div class="hcl-bar-wrap">
                                    <div class="hcl-bar" style="--w:40%"></div>
                                </div>
                                <span class="hcl-val">40%</span>
                            </div>
                        </div>
                    </div>

                    <!-- metrics 2×2 -->
                    <div class="hero__metrics">
                        <div class="hero__metric">
                            <div class="hero__metric-label">Sum Insured</div>
                            <div class="hero__metric-val">₹25 L <span class="up">▲</span></div>
                        </div>
                        <div class="hero__metric">
                            <div class="hero__metric-label">Network Hospitals</div>
                            <div class="hero__metric-val">10K+ <span class="neu">●</span></div>
                        </div>
                        <div class="hero__metric">
                            <div class="hero__metric-label">Annual Premium</div>
                            <div class="hero__metric-val">₹18K <span class="neu">/ yr</span></div>
                        </div>
                        <div class="hero__metric">
                            <div class="hero__metric-label">Cashless Claims</div>
                            <div class="hero__metric-val">98% <span class="up">▲</span></div>
                        </div>
                    </div>
                </div><!-- /hero__card-main -->

                <!-- float bottom-left -->
                <div class="hero__float f2">
                    <div class="hero__float-label">Tax Benefit u/s 80D</div>
                    <div class="hero__float-val">₹75K <span>saved</span></div>
                    <div class="hero__float-sub">Max deduction this FY</div>
                </div>

            </div><!-- /hero__visual -->

        </div>
    </div>
</section>


<!-- ══════════════════════════════════════════════════════════
     WHY HEALTH INSURANCE — WHITE
══════════════════════════════════════════════════════════ -->
<section class="section hi-why">
    <div class="container">
        <div class="hi-why-grid">

            <!-- LEFT -->
            <div class="hi-why-content">
                <span class="section-label" data-aos="fade-right">The Reality</span>
                <h2 class="section-title" data-aos="fade-up" data-aos-delay="80">
                    Why the Right Health<br>Plan <span>Changes Everything</span>
                </h2>
                <div style="width:48px;height:3px;background:var(--red);border-radius:2px;margin-bottom:20px"
                     data-aos="fade-left" data-aos-delay="120"></div>
                <p class="section-sub" data-aos="fade-up" data-aos-delay="160">
                    Medical inflation runs at 14% annually in India. A single ICU admission
                    can cost ₹5–15 lakhs. Without the right cover, one hospitalisation can
                    derail your financial plan by years. We help you stay protected — always.
                </p>

                <div class="hi-why-features" data-aos="fade-up" data-aos-delay="220">
                    <div class="hiwf-card">
                        <div class="hiwf-icon"><i class="fas fa-hospital"></i></div>
                        <div class="hiwf-title">Cashless Hospitalisation</div>
                        <div class="hiwf-desc">10,000+ network hospitals across India. Zero payment at admission — we handle the rest.</div>
                    </div>
                    <div class="hiwf-card">
                        <div class="hiwf-icon"><i class="fas fa-heartbeat"></i></div>
                        <div class="hiwf-title">Critical Illness Cover</div>
                        <div class="hiwf-desc">Lump-sum payout on diagnosis of cancer, heart attack, stroke, and 34 other conditions.</div>
                    </div>
                    <div class="hiwf-card">
                        <div class="hiwf-icon"><i class="fas fa-user-friends"></i></div>
                        <div class="hiwf-title">Family Floater Plans</div>
                        <div class="hiwf-desc">One policy, entire family. Share a higher sum insured at significantly lower premiums.</div>
                    </div>
                    <div class="hiwf-card">
                        <div class="hiwf-icon"><i class="fas fa-rupee-sign"></i></div>
                        <div class="hiwf-title">80D Tax Deduction</div>
                        <div class="hiwf-desc">Save up to ₹75,000 annually on premiums paid for self, spouse, children, and parents.</div>
                    </div>
                </div>
            </div>

            <!-- RIGHT: dark stats card -->
            <div class="hi-why-visual" data-aos="fade-left" data-aos-delay="180">
                <div class="hi-why-bg-block"></div>

                <div class="hi-badge-float f2">
                    <div class="hibf-inner">
                        <div class="hibf-icon"><i class="fas fa-award"></i></div>
                        <div>
                            <div class="hibf-num">IRDAI</div>
                            <div class="hibf-label">Approved Advisor</div>
                        </div>
                    </div>
                </div>

                <div class="hi-why-card">
                    <div class="hiwc-title">Why Adequate Cover Matters</div>

                    <div class="hiwc-row">
                        <div class="hiwc-row-top">
                            <span>Avg. ICU cost (metro)</span>
                            <span>₹8–15L / week</span>
                        </div>
                        <div class="hiwc-track"><div class="hiwc-fill" style="--w:90%"></div></div>
                    </div>
                    <div class="hiwc-row">
                        <div class="hiwc-row-top">
                            <span>Medical inflation rate</span>
                            <span>14% annually</span>
                        </div>
                        <div class="hiwc-track"><div class="hiwc-fill" style="--w:76%"></div></div>
                    </div>
                    <div class="hiwc-row">
                        <div class="hiwc-row-top">
                            <span>Families with adequate cover</span>
                            <span>Only 22%</span>
                        </div>
                        <div class="hiwc-track"><div class="hiwc-fill" style="--w:22%"></div></div>
                    </div>
                    <div class="hiwc-row">
                        <div class="hiwc-row-top">
                            <span>OOP spending post-claim</span>
                            <span>Reduced by 84%</span>
                        </div>
                        <div class="hiwc-track"><div class="hiwc-fill" style="--w:84%"></div></div>
                    </div>
                    <div class="hiwc-row">
                        <div class="hiwc-row-top">
                            <span>Claim settlement ratio</span>
                            <span>98% cashless</span>
                        </div>
                        <div class="hiwc-track"><div class="hiwc-fill" style="--w:98%"></div></div>
                    </div>

                    <div class="hiwc-footer">
                        <div>
                            <div class="hiwc-stat-num">14%</div>
                            <div class="hiwc-stat-label">Medical inflation p.a.</div>
                        </div>
                        <div>
                            <div class="hiwc-stat-num">₹75K</div>
                            <div class="hiwc-stat-label">Max 80D tax benefit</div>
                        </div>
                    </div>
                </div>

                <div class="hi-badge-float f1">
                    <div class="hibf-inner">
                        <div class="hibf-icon"><i class="fas fa-users"></i></div>
                        <div>
                            <div class="hibf-num">10,000+</div>
                            <div class="hibf-label">Families Insured</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- ══════════════════════════════════════════════════════════
     PLAN TYPES — GRAY-50
══════════════════════════════════════════════════════════ -->
<section class="section hi-plans" id="plans">
    <div class="container">
        <div class="section-header center">
            <span class="section-label" data-aos="fade-up">Choose Your Shield</span>
            <h2 class="section-title" data-aos="fade-up" data-aos-delay="80">
                Health Insurance <span>Plans for Every Need</span>
            </h2>
            <p class="section-sub" style="margin:0 auto" data-aos="fade-up" data-aos-delay="140">
                From individual covers to comprehensive super top-ups — we map the right plan
                to your health history, family size, and budget.
            </p>
        </div>

        <div class="plans-grid">

            <!-- Individual -->
            <div class="plan-card" data-aos="fade-up" data-aos-delay="0">
                <div class="plan-icon"><i class="fas fa-user-shield"></i></div>
                <div class="plan-title">Individual Health Plan</div>
                <div class="plan-subtitle">Personal cover tailored to your age, health profile, and lifestyle risk.</div>
                <div class="plan-items">
                    <div class="plan-item"><i class="fas fa-check"></i> Hospitalisation up to ₹1 Cr</div>
                    <div class="plan-item"><i class="fas fa-check"></i> Pre &amp; post hospitalisation</div>
                    <div class="plan-item"><i class="fas fa-check"></i> Day care procedures</div>
                    <div class="plan-item"><i class="fas fa-check"></i> Ambulance cover included</div>
                    <div class="plan-item"><i class="fas fa-check"></i> No-claim bonus up to 100%</div>
                </div>
                <a href="contact" class="plan-cta">Get This Plan <i class="fas fa-arrow-right"></i></a>
            </div>

            <!-- Family Floater — featured -->
            <div class="plan-card featured" data-aos="fade-up" data-aos-delay="100">
                <div class="plan-badge">Most Popular</div>
                <div class="plan-icon"><i class="fas fa-users"></i></div>
                <div class="plan-title">Family Floater Plan</div>
                <div class="plan-subtitle">Entire family under one sum insured — better value, simpler management.</div>
                <div class="plan-items">
                    <div class="plan-item"><i class="fas fa-check"></i> Cover for 2 adults + 2 children</div>
                    <div class="plan-item"><i class="fas fa-check"></i> Sum insured ₹5L – ₹1 Cr</div>
                    <div class="plan-item"><i class="fas fa-check"></i> Maternity &amp; newborn cover</div>
                    <div class="plan-item"><i class="fas fa-check"></i> Critical illness add-on</div>
                    <div class="plan-item"><i class="fas fa-check"></i> Restore benefit (auto recharge)</div>
                </div>
                <a href="contact" class="plan-cta">Get This Plan <i class="fas fa-arrow-right"></i></a>
            </div>

            <!-- Super Top-Up -->
            <div class="plan-card" data-aos="fade-up" data-aos-delay="200">
                <div class="plan-icon"><i class="fas fa-layer-group"></i></div>
                <div class="plan-title">Super Top-Up Plan</div>
                <div class="plan-subtitle">Enhance existing employer cover or base policy at minimal additional premium.</div>
                <div class="plan-items">
                    <div class="plan-item"><i class="fas fa-check"></i> Kicks in after deductible</div>
                    <div class="plan-item"><i class="fas fa-check"></i> Up to ₹1 Cr additional cover</div>
                    <div class="plan-item"><i class="fas fa-check"></i> Works with any base policy</div>
                    <div class="plan-item"><i class="fas fa-check"></i> All hospitalisation types</div>
                    <div class="plan-item"><i class="fas fa-check"></i> Very low annual premium</div>
                </div>
                <a href="contact" class="plan-cta">Get This Plan <i class="fas fa-arrow-right"></i></a>
            </div>

            <!-- Senior Citizen -->
            <div class="plan-card" data-aos="fade-up" data-aos-delay="0">
                <div class="plan-icon"><i class="fas fa-user-clock"></i></div>
                <div class="plan-title">Senior Citizen Plan</div>
                <div class="plan-subtitle">Dedicated plans for parents aged 60+ with higher base cover and OPD benefits.</div>
                <div class="plan-items">
                    <div class="plan-item"><i class="fas fa-check"></i> Entry up to age 80</div>
                    <div class="plan-item"><i class="fas fa-check"></i> Pre-existing conditions covered</div>
                    <div class="plan-item"><i class="fas fa-check"></i> OPD doctor visits included</div>
                    <div class="plan-item"><i class="fas fa-check"></i> Domiciliary hospitalisation</div>
                    <div class="plan-item"><i class="fas fa-check"></i> ₹50K 80D benefit for parents</div>
                </div>
                <a href="contact" class="plan-cta">Get This Plan <i class="fas fa-arrow-right"></i></a>
            </div>

            <!-- Critical Illness -->
            <div class="plan-card" data-aos="fade-up" data-aos-delay="100">
                <div class="plan-icon"><i class="fas fa-heart-broken"></i></div>
                <div class="plan-title">Critical Illness Cover</div>
                <div class="plan-subtitle">Lump-sum benefit on diagnosis of 36 life-threatening illnesses.</div>
                <div class="plan-items">
                    <div class="plan-item"><i class="fas fa-check"></i> Cancer, heart attack, stroke</div>
                    <div class="plan-item"><i class="fas fa-check"></i> 36 critical illnesses covered</div>
                    <div class="plan-item"><i class="fas fa-check"></i> One-time lump sum payout</div>
                    <div class="plan-item"><i class="fas fa-check"></i> Use for any expense</div>
                    <div class="plan-item"><i class="fas fa-check"></i> Up to ₹50L sum insured</div>
                </div>
                <a href="contact" class="plan-cta">Get This Plan <i class="fas fa-arrow-right"></i></a>
            </div>

            <!-- Group / Corporate -->
            <div class="plan-card" data-aos="fade-up" data-aos-delay="200">
                <div class="plan-icon"><i class="fas fa-building"></i></div>
                <div class="plan-title">Group / Corporate Plan</div>
                <div class="plan-subtitle">Designed for business owners and employers who want to cover their team.</div>
                <div class="plan-items">
                    <div class="plan-item"><i class="fas fa-check"></i> Minimum 7 employees</div>
                    <div class="plan-item"><i class="fas fa-check"></i> No medical underwriting</div>
                    <div class="plan-item"><i class="fas fa-check"></i> Dependent cover optional</div>
                    <div class="plan-item"><i class="fas fa-check"></i> Tax deductible premium</div>
                    <div class="plan-item"><i class="fas fa-check"></i> Dedicated claims manager</div>
                </div>
                <a href="contact" class="plan-cta">Get This Plan <i class="fas fa-arrow-right"></i></a>
            </div>

        </div>
    </div>
</section>


<!-- ══════════════════════════════════════════════════════════
     COVERAGE COMPARISON TABLE — WHITE
══════════════════════════════════════════════════════════ -->
<section class="section hi-coverage">
    <div class="container">
        <div class="section-header center">
            <span class="section-label" data-aos="fade-up">Compare &amp; Decide</span>
            <h2 class="section-title" data-aos="fade-up" data-aos-delay="80">
                What's <span>Covered</span> at a Glance
            </h2>
            <p class="section-sub" style="margin:0 auto" data-aos="fade-up" data-aos-delay="140">
                Not all policies are equal. Here's how the major coverage categories stack up
                across our recommended plan tiers.
            </p>
        </div>

        <div class="coverage-table-wrap" data-aos="fade-up" data-aos-delay="180">
            <table class="coverage-table">
                <thead>
                    <tr>
                        <th>Coverage Feature</th>
                        <th>Individual</th>
                        <th class="th-red">Family Floater</th>
                        <th>Super Top-Up</th>
                        <th>Senior Citizen</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Inpatient Hospitalisation</td>
                        <td><i class="fas fa-check ct-yes"></i></td>
                        <td><i class="fas fa-check ct-yes"></i></td>
                        <td><i class="fas fa-check ct-yes"></i></td>
                        <td><i class="fas fa-check ct-yes"></i></td>
                    </tr>
                    <tr>
                        <td>Pre-Hospitalisation (60 days)</td>
                        <td><i class="fas fa-check ct-yes"></i></td>
                        <td><i class="fas fa-check ct-yes"></i></td>
                        <td><i class="fas fa-check ct-yes"></i></td>
                        <td><i class="fas fa-check ct-yes"></i></td>
                    </tr>
                    <tr>
                        <td>Post-Hospitalisation (90 days)</td>
                        <td><i class="fas fa-check ct-yes"></i></td>
                        <td><i class="fas fa-check ct-yes"></i></td>
                        <td><i class="fas fa-check ct-yes"></i></td>
                        <td><i class="fas fa-check ct-yes"></i></td>
                    </tr>
                    <tr>
                        <td>Day Care Procedures</td>
                        <td><i class="fas fa-check ct-yes"></i></td>
                        <td><i class="fas fa-check ct-yes"></i></td>
                        <td><span class="ct-partial"><i class="fas fa-exclamation-triangle"></i> Partial</span></td>
                        <td><i class="fas fa-check ct-yes"></i></td>
                    </tr>
                    <tr>
                        <td>Pre-Existing Diseases</td>
                        <td><span class="ct-tag">After 3 yrs</span></td>
                        <td><span class="ct-tag">After 3 yrs</span></td>
                        <td><span class="ct-tag">After 2 yrs</span></td>
                        <td><span class="ct-tag">After 1 yr</span></td>
                    </tr>
                    <tr>
                        <td>Maternity &amp; Newborn</td>
                        <td><i class="fas fa-times ct-no"></i></td>
                        <td><i class="fas fa-check ct-yes"></i></td>
                        <td><i class="fas fa-times ct-no"></i></td>
                        <td><i class="fas fa-times ct-no"></i></td>
                    </tr>
                    <tr>
                        <td>OPD / Outpatient Visits</td>
                        <td><span class="ct-partial"><i class="fas fa-exclamation-triangle"></i> Add-on</span></td>
                        <td><span class="ct-partial"><i class="fas fa-exclamation-triangle"></i> Add-on</span></td>
                        <td><i class="fas fa-times ct-no"></i></td>
                        <td><i class="fas fa-check ct-yes"></i></td>
                    </tr>
                    <tr>
                        <td>Mental Health Coverage</td>
                        <td><i class="fas fa-check ct-yes"></i></td>
                        <td><i class="fas fa-check ct-yes"></i></td>
                        <td><span class="ct-partial"><i class="fas fa-exclamation-triangle"></i> Partial</span></td>
                        <td><i class="fas fa-check ct-yes"></i></td>
                    </tr>
                    <tr>
                        <td>Sum Insured Restore Benefit</td>
                        <td><span class="ct-partial"><i class="fas fa-exclamation-triangle"></i> Optional</span></td>
                        <td><i class="fas fa-check ct-yes"></i></td>
                        <td><i class="fas fa-check ct-yes"></i></td>
                        <td><span class="ct-partial"><i class="fas fa-exclamation-triangle"></i> Optional</span></td>
                    </tr>
                    <tr>
                        <td>No-Claim Bonus</td>
                        <td><span class="ct-tag">Up to 100%</span></td>
                        <td><span class="ct-tag">Up to 100%</span></td>
                        <td><span class="ct-tag">Up to 50%</span></td>
                        <td><span class="ct-tag">Up to 50%</span></td>
                    </tr>
                    <tr>
                        <td>Section 80D Tax Benefit</td>
                        <td><i class="fas fa-check ct-yes"></i></td>
                        <td><i class="fas fa-check ct-yes"></i></td>
                        <td><i class="fas fa-check ct-yes"></i></td>
                        <td><i class="fas fa-check ct-yes"></i></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>


<!-- ══════════════════════════════════════════════════════════
     HOW IT WORKS — DARK
══════════════════════════════════════════════════════════ -->
<section class="section hi-process">
    <div class="container">
        <div class="section-header center">
            <span class="section-label" data-aos="fade-up">Our Process</span>
            <h2 class="section-title" data-aos="fade-up" data-aos-delay="80">
                Get Covered in <span>5 Simple Steps</span>
            </h2>
            <p class="section-sub" style="margin:0 auto" data-aos="fade-up" data-aos-delay="140">
                From a quick call to an active policy — we handle everything, end to end.
            </p>
        </div>

        <div class="process-steps">
            <div class="process-step" data-aos="fade-up" data-aos-delay="0">
                <div class="process-num">1</div>
                <h4>Health Assessment</h4>
                <p>Free consultation to understand your health history, family size, and risk exposure.</p>
            </div>
            <div class="process-step" data-aos="fade-up" data-aos-delay="100">
                <div class="process-num">2</div>
                <h4>Plan Comparison</h4>
                <p>We compare 30+ insurers across 500+ plans — filtering by premium, coverage, and claim ratio.</p>
            </div>
            <div class="process-step" data-aos="fade-up" data-aos-delay="200">
                <div class="process-num">3</div>
                <h4>Tailored Recommendation</h4>
                <p>You receive 2–3 curated options with a clear explanation of trade-offs and costs.</p>
            </div>
            <div class="process-step" data-aos="fade-up" data-aos-delay="300">
                <div class="process-num">4</div>
                <h4>Hassle-Free Issuance</h4>
                <p>We handle paperwork, forms, and medicals. Policy issued digitally in 48 hours.</p>
            </div>
            <div class="process-step" data-aos="fade-up" data-aos-delay="400">
                <div class="process-num">5</div>
                <h4>Claim Support</h4>
                <p>Dedicated claim desk assists you at every stage — from intimation to settlement.</p>
            </div>
        </div>
    </div>
</section>


<!-- ══════════════════════════════════════════════════════════
     CALCULATOR STRIP — RED
══════════════════════════════════════════════════════════ -->
<div class="calc-strip" data-aos="fade-up">
    <div class="container">
        <div class="calc-strip-inner">
            <div>
                <div class="calc-strip__title">How Much Health Cover Do You Actually Need?</div>
                <p class="calc-strip__desc">
                    Use our free calculator — factor in your city, age, family size, and existing employer cover
                    to get the ideal sum insured recommendation in under 2 minutes.
                </p>
            </div>
            <a href="health-insurance-calculator" class="btn btn-white">
                Try Health Calculator
                <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </div>
</div>


<!-- ══════════════════════════════════════════════════════════
     CLAIM PROCESS — GRAY-50
══════════════════════════════════════════════════════════ -->
<section class="section hi-claims">
    <div class="container">
        <div class="section-header center">
            <span class="section-label" data-aos="fade-up">When You Need Us Most</span>
            <h2 class="section-title" data-aos="fade-up" data-aos-delay="80">
                Filing a Claim is <span>Stress-Free</span> with WealthBridge
            </h2>
            <p class="section-sub" style="margin:0 auto" data-aos="fade-up" data-aos-delay="140">
                A medical emergency is stressful enough. Our dedicated claims team ensures you
                never have to fight an insurer alone.
            </p>
        </div>

        <div class="claims-grid">
            <div class="claim-card" data-aos="fade-up" data-aos-delay="0">
                <div class="claim-step-num">01</div>
                <div class="claim-icon"><i class="fas fa-phone-alt"></i></div>
                <div class="claim-title">Intimate the Claim</div>
                <div class="claim-desc">Call our 24/7 claims helpline or raise a ticket on our portal — within 24 hours of hospitalisation.</div>
            </div>
            <div class="claim-card" data-aos="fade-up" data-aos-delay="100">
                <div class="claim-step-num">02</div>
                <div class="claim-icon"><i class="fas fa-hospital-alt"></i></div>
                <div class="claim-title">Cashless Authorisation</div>
                <div class="claim-desc">We coordinate with the network hospital's TPA desk to pre-authorise your cashless admission in real-time.</div>
            </div>
            <div class="claim-card" data-aos="fade-up" data-aos-delay="200">
                <div class="claim-step-num">03</div>
                <div class="claim-icon"><i class="fas fa-file-medical"></i></div>
                <div class="claim-title">Document Handling</div>
                <div class="claim-desc">Our team collects all discharge summaries, bills, and reports on your behalf — zero paperwork stress.</div>
            </div>
            <div class="claim-card" data-aos="fade-up" data-aos-delay="300">
                <div class="claim-step-num">04</div>
                <div class="claim-icon"><i class="fas fa-check-double"></i></div>
                <div class="claim-title">Fast Settlement</div>
                <div class="claim-desc">98% of cashless claims settled within 4 working days. Reimbursement claims within 15 days.</div>
            </div>
        </div>
    </div>
</section>


<!-- ══════════════════════════════════════════════════════════
     TESTIMONIALS — WHITE
══════════════════════════════════════════════════════════ -->
<section class="section hi-testimonials">
    <div class="container">
        <div class="section-header center">
            <span class="section-label" data-aos="fade-up">Real Experiences</span>
            <h2 class="section-title" data-aos="fade-up" data-aos-delay="80">
                Families Who Were <span>Glad They Were Covered</span>
            </h2>
        </div>

        <div class="testimonials-grid">
            <div class="testi-card" data-aos="fade-up" data-aos-delay="0">
                <div class="testi-stars">★★★★★</div>
                <div class="testi-quote">"</div>
                <p class="testi-text">
                    My father was hospitalised for a cardiac procedure. The cashless claim of
                    ₹6.2L was settled in 3 days — not a single rupee out of pocket.
                    WealthBridge guided us every step of the way.
                </p>
                <div class="testi-author">
                    <div class="testi-avatar">PD</div>
                    <div>
                        <div class="testi-name">Priya Desai</div>
                        <div class="testi-role">Software Architect, Hyderabad · Family Floater</div>
                    </div>
                </div>
            </div>

            <div class="testi-card" data-aos="fade-up" data-aos-delay="100">
                <div class="testi-stars">★★★★★</div>
                <div class="testi-quote">"</div>
                <p class="testi-text">
                    I was paying ₹22,000/year for a policy with gaps in critical illness cover.
                    WealthBridge switched me to a better plan at ₹16,500 — and saved me ₹48K
                    in taxes under 80D at the same time.
                </p>
                <div class="testi-author">
                    <div class="testi-avatar">SK</div>
                    <div>
                        <div class="testi-name">Siddharth Kumar</div>
                        <div class="testi-role">Business Owner, Delhi · Age 44</div>
                    </div>
                </div>
            </div>

            <div class="testi-card" data-aos="fade-up" data-aos-delay="200">
                <div class="testi-stars">★★★★★</div>
                <div class="testi-quote">"</div>
                <p class="testi-text">
                    Getting health insurance for my parents (aged 68 &amp; 71) felt impossible.
                    WealthBridge found us a senior citizen plan that covers pre-existing
                    conditions with a 1-year waiting period. Incredible service.
                </p>
                <div class="testi-author">
                    <div class="testi-avatar">NR</div>
                    <div>
                        <div class="testi-name">Neha Rao</div>
                        <div class="testi-role">CA, Bengaluru · Senior Citizen Plan</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ══════════════════════════════════════════════════════════
     FAQ — GRAY-50, TWO-COLUMN
══════════════════════════════════════════════════════════ -->
<section class="section hi-faq">
    <div class="container">
        <div class="faq-layout">

            <!-- sticky intro -->
            <div class="faq-intro" data-aos="fade-right">
                <span class="section-label">FAQ</span>
                <h2 class="section-title">
                    Health Insurance <span>Questions</span>
                </h2>
                <p class="section-sub">
                    Everything you want to know before buying — answered honestly and without jargon.
                </p>
                <div class="faq-intro-cta">
                    <a href="#contact" class="btn btn-primary btn-sm">
                        Ask an Advisor <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- accordion -->
            <div class="faq-list" data-aos="fade-left" data-aos-delay="120">

                <div class="faq-item">
                    <button class="faq-q">
                        <span class="faq-q-text">What is the right sum insured amount for my family?</span>
                        <span class="faq-icon"><i class="fas fa-plus"></i></span>
                    </button>
                    <div class="faq-a">
                        As a rule of thumb, the minimum adequate sum insured in a metro city is ₹10–15 lakhs per
                        person, or ₹25–50 lakhs for a family floater, given current hospitalisation costs and 14%
                        medical inflation. Our advisors use your city, family size, and existing employer cover
                        to recommend the exact figure.
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-q">
                        <span class="faq-q-text">Is employer-provided health insurance enough?</span>
                        <span class="faq-icon"><i class="fas fa-plus"></i></span>
                    </button>
                    <div class="faq-a">
                        Typically no. Employer group policies average ₹3–5 lakhs sum insured, cover ceases
                        on job change, and don't include parents or critical illness. A personal policy works
                        alongside your employer cover to fill these gaps — and you keep it regardless of
                        where you work.
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-q">
                        <span class="faq-q-text">What is a waiting period and how does it affect me?</span>
                        <span class="faq-icon"><i class="fas fa-plus"></i></span>
                    </button>
                    <div class="faq-a">
                        Most policies have: (a) 30-day initial waiting period for all claims except accidents,
                        (b) 2–4 year waiting period for pre-existing conditions, and (c) 1–2 year waiting for
                        specific illnesses like hernia or cataracts. Buying young means shorter waits.
                        We help you choose policies with the most favourable waiting terms.
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-q">
                        <span class="faq-q-text">How much tax can I save on health insurance premiums?</span>
                        <span class="faq-icon"><i class="fas fa-plus"></i></span>
                    </button>
                    <div class="faq-a">
                        Under Section 80D: ₹25,000 for self/spouse/children + ₹25,000 for parents below 60
                        (total ₹50,000). If parents are senior citizens, the deduction for them rises to
                        ₹50,000 — giving you a total deduction of ₹75,000 per year.
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-q">
                        <span class="faq-q-text">What is the difference between cashless and reimbursement claims?</span>
                        <span class="faq-icon"><i class="fas fa-plus"></i></span>
                    </button>
                    <div class="faq-a">
                        Cashless: you get treated at a network hospital; the insurer pays the hospital directly —
                        zero out-of-pocket payment. Reimbursement: you pay first at a non-network hospital,
                        then submit bills for refund within 30 days. We always recommend choosing network
                        hospitals for seamless cashless claims.
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-q">
                        <span class="faq-q-text">Can I port my existing health insurance to a better policy?</span>
                        <span class="faq-icon"><i class="fas fa-plus"></i></span>
                    </button>
                    <div class="faq-a">
                        Yes — IRDAI allows portability between insurers without losing accrued no-claim bonus
                        or waiting period credits. Applications must be submitted 45 days before renewal.
                        WealthBridge handles the entire porting process and ensures no coverage gap.
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>


<!-- ══════════════════════════════════════════════════════════
     CTA BAND — DARK
══════════════════════════════════════════════════════════ -->
<section class="hi-cta" id="contact">
    <div class="container">
        <div class="hi-cta-inner">
            <span class="section-label" style="justify-content:center;display:flex" data-aos="fade-up">
                Your Health. Our Priority.
            </span>
            <h2 class="cta-title" data-aos="fade-up" data-aos-delay="80">
                The Best Day to Get Covered<br>Was Yesterday. <span>Next Best is Now.</span>
            </h2>
            <p class="cta-desc" data-aos="fade-up" data-aos-delay="140">
                Medical emergencies don't wait for a convenient moment. Talk to a WealthBridge
                health insurance advisor today — free, no commitment, no pressure.
            </p>
            <div class="cta-actions" data-aos="fade-up" data-aos-delay="200">
                <a href="contact" class="btn btn-primary">
                    Get Free Consultation
                    <i class="fas fa-arrow-right"></i>
                </a>
                <a href="tel:+911800000000" class="btn btn-ghost">
                    <i class="fas fa-phone"></i>
                    Call 1800-000-000
                </a>
            </div>

            <div class="cta-trust" data-aos="fade-up" data-aos-delay="280">
                <div class="ct-item"><i class="fas fa-check-circle"></i> IRDAI Approved Advisor</div>
                <div class="ct-item"><i class="fas fa-check-circle"></i> 500+ Plans Compared</div>
                <div class="ct-item"><i class="fas fa-check-circle"></i> 98% Claim Settlement</div>
                <div class="ct-item"><i class="fas fa-check-circle"></i> Zero Commission Bias</div>
            </div>
        </div>
    </div>
</section>


<!-- ══════════════════════════════════════════════════════════
     RELATED SERVICES — WHITE
══════════════════════════════════════════════════════════ -->
<section class="section hi-related">
    <div class="container">
        <div class="section-header">
            <span class="section-label" data-aos="fade-right">Also Explore</span>
            <h2 class="section-title" data-aos="fade-up" data-aos-delay="80">
                Related <span>Advisory Services</span>
            </h2>
        </div>

        <div class="related-grid">
            <a href="life-insurance" class="rel-card" data-aos="fade-up" data-aos-delay="0">
                <div class="rc-icon"><i class="fas fa-shield-alt"></i></div>
                <h4>Life Insurance</h4>
                <p>Term plans, ULIPs, and whole-life covers to secure your family's financial future.</p>
                <span class="rc-link">Explore <i class="fas fa-arrow-right"></i></span>
            </a>
            <a href="financial-planning-for-men" class="rel-card" data-aos="fade-up" data-aos-delay="80">
                <div class="rc-icon"><i class="fas fa-male"></i></div>
                <h4>Financial Planning for Men</h4>
                <p>Comprehensive wealth strategy covering insurance, investment, and retirement.</p>
                <span class="rc-link">Explore <i class="fas fa-arrow-right"></i></span>
            </a>
            <a href="tax-efficient-investment" class="rel-card" data-aos="fade-up" data-aos-delay="160">
                <div class="rc-icon"><i class="fas fa-file-invoice-dollar"></i></div>
                <h4>Tax-Efficient Investing</h4>
                <p>Maximise your 80C, 80D, and NPS benefits within a structured plan.</p>
                <span class="rc-link">Explore <i class="fas fa-arrow-right"></i></span>
            </a>
            <a href="retirement-planning" class="rel-card" data-aos="fade-up" data-aos-delay="240">
                <div class="rc-icon"><i class="fas fa-umbrella-beach"></i></div>
                <h4>Retirement Planning</h4>
                <p>Build the retirement corpus you need — with the right insurance and investment mix.</p>
                <span class="rc-link">Explore <i class="fas fa-arrow-right"></i></span>
            </a>
        </div>
    </div>
</section>

 
<?php include_once ('elements/footer.php'); ?>