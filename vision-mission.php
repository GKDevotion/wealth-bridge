<?php include_once ('elements/header.php'); ?>

<!-- Page CSS -->
<link href="<?php echo UrlHelper::asset('css/vision-mission.css'); ?>" rel="stylesheet">


<!-- ══════════════════════════════════════════════════════════
     BREADCRUMB
══════════════════════════════════════════════════════════ -->
<div class="breadcrumb-bar">
    <div class="container">
        <div class="breadcrumb">
            <a href="index"><i class="fas fa-home"></i> Home</a>
            <span>›</span>
            <a href="#">Who We Are</a>
            <span>›</span>
            <span class="current">Vision &amp; Mission</span>
        </div>
    </div>
</div>


<!-- ══════════════════════════════════════════════════════════
     HERO — DARK
══════════════════════════════════════════════════════════ -->
<section class="vm-hero">
    <div class="vmh-bg"></div>
    <div class="vmh-grid"></div>
    <!-- Animated rotating rings -->
    <div class="vmh-ring r1" aria-hidden="true"></div>
    <div class="vmh-ring r2" aria-hidden="true"></div>
    <div class="vmh-ring r3" aria-hidden="true"></div>

    <div class="container">
        <div class="vmh-content">

            <div class="vmh-label" data-aos="fade-up" data-aos-duration="700">
                Who We Are &nbsp;·&nbsp; Vision &amp; Mission
            </div>

            <h1 class="vmh-title" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                The <em>North Star</em><br>
                That Guides Everything We Do
            </h1>

            <p class="vmh-subtitle" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                Every team, every decision, every client interaction at WealthBridge flows from one
                unified purpose — making world-class financial planning accessible to every Indian family.
                Here is why we exist and how we pursue it.
            </p>

            <div class="vmh-tags" data-aos="fade-up" data-aos-duration="700" data-aos-delay="320">
                <span class="vmh-tag active"><i class="fas fa-eye" style="color:var(--red);margin-right:5px"></i> Our Vision</span>
                <span class="vmh-tag"><i class="fas fa-bullseye" style="color:var(--red);margin-right:5px"></i> Our Mission</span>
                <span class="vmh-tag"><i class="fas fa-gem" style="color:var(--red);margin-right:5px"></i> Core Values</span>
                <span class="vmh-tag"><i class="fas fa-handshake" style="color:var(--red);margin-right:5px"></i> Commitments</span>
                <span class="vmh-tag"><i class="fas fa-flag" style="color:var(--red);margin-right:5px"></i> Strategic Goals</span>
            </div>

        </div>
    </div>
</section>


<!-- ══════════════════════════════════════════════════════════
     VISION — WHITE
══════════════════════════════════════════════════════════ -->
<section class="section vm-vision" id="vision">
    <div class="container">
        <div class="vision-layout">

            <!-- LEFT: Vision text -->
            <div class="vision-left">
                <span class="section-label" data-aos="fade-right">Our Vision</span>
                <h2 class="section-title" data-aos="fade-up" data-aos-delay="80">
                    A World Where <span>Every Indian</span><br>
                    Has a Trusted Financial Co-Pilot
                </h2>
                <div style="width:48px;height:3px;background:var(--red);border-radius:2px;margin-bottom:20px"
                     data-aos="fade-left" data-aos-delay="120"></div>

                <div class="vision-statement" data-aos="fade-up" data-aos-delay="160">
                    "To be India's most trusted, most accessible, and most impactful financial advisory firm —
                    one that democratises world-class wealth planning for every Indian, regardless of their starting point."
                </div>

                <p class="vision-text" data-aos="fade-up" data-aos-delay="200">
                    For generations, sophisticated financial planning was reserved for the wealthy few. Private
                    bankers, expensive advisors, and complex products kept the average Indian family from
                    accessing the same quality of advice available to high-net-worth individuals.
                </p>
                <p class="vision-text" data-aos="fade-up" data-aos-delay="230">
                    WealthBridge was founded to change that. Our vision is a future where a teacher in Nashik,
                    a software engineer in Bengaluru, and an NRI in Dubai all have access to the same calibre
                    of personalised, unbiased, fiduciary financial guidance.
                </p>

                <div class="vision-pillars" data-aos="fade-up" data-aos-delay="260">
                    <div class="vp-item">
                        <div class="vp-icon"><i class="fas fa-users"></i></div>
                        <div>
                            <div class="vp-title">Accessible to All</div>
                            <div class="vp-desc">Financial advice that works for a ₹5,000/month SIP investor equally as a ₹5 crore portfolio client.</div>
                        </div>
                    </div>
                    <div class="vp-item">
                        <div class="vp-icon"><i class="fas fa-balance-scale"></i></div>
                        <div>
                            <div class="vp-title">Unbiased Always</div>
                            <div class="vp-desc">Fee-only advisory model removes all commission conflicts — our success is measured only by yours.</div>
                        </div>
                    </div>
                    <div class="vp-item">
                        <div class="vp-icon"><i class="fas fa-city"></i></div>
                        <div>
                            <div class="vp-title">Pan-India Reach</div>
                            <div class="vp-desc">From metros to tier-2 cities to the global diaspora — WealthBridge wherever you are.</div>
                        </div>
                    </div>
                    <div class="vp-item">
                        <div class="vp-icon"><i class="fas fa-infinity"></i></div>
                        <div>
                            <div class="vp-title">Generational Impact</div>
                            <div class="vp-desc">Building wealth that outlasts a single generation — from first investment to legacy planning.</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- RIGHT: dark vision card -->
            <div class="vision-visual" data-aos="fade-left" data-aos-delay="180">
                <div class="vision-bg-block"></div>

                <!-- float f2 -->
                <div class="vision-badge f2">
                    <div class="vb-inner">
                        <div class="vb-icon"><i class="fas fa-certificate"></i></div>
                        <div>
                            <div class="vb-num">SEBI</div>
                            <div class="vb-label">Registered RIA</div>
                        </div>
                    </div>
                </div>

                <div class="vision-dark-card">
                    <div class="vdc-eyebrow">The WealthBridge Vision Statement</div>
                    <div class="vdc-quote">
                        "A financially empowered India — where no family makes an important money
                        decision without access to honest, expert, and personalised guidance."
                    </div>
                    <div class="vdc-items">
                        <div class="vdc-item">
                            <span class="vdc-dot"></span>
                            Every Indian deserves a financial plan — not just the wealthy
                        </div>
                        <div class="vdc-item">
                            <span class="vdc-dot"></span>
                            Advice that puts the client first — always, without exception
                        </div>
                        <div class="vdc-item">
                            <span class="vdc-dot"></span>
                            Technology + human empathy, working together
                        </div>
                        <div class="vdc-item">
                            <span class="vdc-dot"></span>
                            Building wealth across generations — not just portfolios
                        </div>
                        <div class="vdc-item">
                            <span class="vdc-dot"></span>
                            Pan-India presence — from Kochi to Calgary
                        </div>
                        <div class="vdc-item">
                            <span class="vdc-dot"></span>
                            Fiduciary duty as our legal and moral foundation
                        </div>
                    </div>
                </div>

                <!-- float f1 -->
                <div class="vision-badge f1">
                    <div class="vb-inner">
                        <div class="vb-icon"><i class="fas fa-users"></i></div>
                        <div>
                            <div class="vb-num">28,000+</div>
                            <div class="vb-label">Clients Served</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>


<!-- ══════════════════════════════════════════════════════════
     MISSION — GRAY-50
══════════════════════════════════════════════════════════ -->
<section class="section vm-mission" id="mission">
    <div class="container">
        <div class="section-header center">
            <span class="section-label" data-aos="fade-up">Our Mission</span>
            <h2 class="section-title" data-aos="fade-up" data-aos-delay="80">
                How We <span>Pursue the Vision</span> — Every Single Day
            </h2>
        </div>

        <div class="mission-statement" data-aos="fade-up" data-aos-delay="140">
            To provide every client with honest, personalised, and actionable financial guidance — through a fee-only,
            fiduciary model that eliminates conflicts of interest — empowering them to build wealth, protect their
            families, and achieve financial freedom on their own terms.
        </div>

        <div class="mission-cards">
            <div class="mc-card" data-aos="fade-up" data-aos-delay="0">
                <div class="mc-icon"><i class="fas fa-hand-holding-heart"></i></div>
                <div class="mc-title">Serve with Integrity</div>
                <div class="mc-desc">
                    Our mission starts with doing right by every client, every time. We hold ourselves to a
                    fiduciary standard — legally and morally bound to prioritise our client's interests above
                    all else, including our own commercial interests. No commission, no bias, no compromise.
                </div>
            </div>
            <div class="mc-card" data-aos="fade-up" data-aos-delay="100">
                <div class="mc-icon"><i class="fas fa-graduation-cap"></i></div>
                <div class="mc-title">Educate &amp; Empower</div>
                <div class="mc-desc">
                    A truly empowered client is one who understands their own financial plan. Our mission
                    includes investing in client education — so every recommendation comes with a clear
                    explanation of the "why", not just the "what". Knowledge builds confidence and better outcomes.
                </div>
            </div>
            <div class="mc-card" data-aos="fade-up" data-aos-delay="200">
                <div class="mc-icon"><i class="fas fa-expand-arrows-alt"></i></div>
                <div class="mc-title">Broaden Access</div>
                <div class="mc-desc">
                    We are relentlessly expanding our reach — to tier-2 and tier-3 cities, to NRI communities
                    across 14 countries, to young professionals starting their financial journey, and to senior
                    citizens planning their legacy. Quality financial advice should know no geography.
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ══════════════════════════════════════════════════════════
     CORE VALUES — DARK
══════════════════════════════════════════════════════════ -->
<section class="section vm-values" id="values">
    <div class="container">
        <div class="section-header center">
            <span class="section-label" data-aos="fade-up">Our DNA</span>
            <h2 class="section-title" data-aos="fade-up" data-aos-delay="80">
                Six Core Values That <span>Have Never Changed</span>
            </h2>
            <p class="section-sub" style="margin:0 auto" data-aos="fade-up" data-aos-delay="140">
                In 17 years, our team has grown from 2 to 180+, our cities from 1 to 28.
                These six values have been our constant compass throughout.
            </p>
        </div>

        <div class="values-grid">
            <div class="val-card" data-aos="fade-up" data-aos-delay="0">
                <div class="val-num">01</div>
                <div class="val-icon"><i class="fas fa-balance-scale"></i></div>
                <div class="val-title">Client-First Fiduciary</div>
                <div class="val-desc">
                    Our legal obligation to act in your best interest is not a marketing claim — it is the
                    foundation of our SEBI registration and every recommendation we make. We earn fees for
                    advice, never commissions for products. Your win is our only win.
                </div>
            </div>

            <div class="val-card" data-aos="fade-up" data-aos-delay="80">
                <div class="val-num">02</div>
                <div class="val-icon"><i class="fas fa-eye"></i></div>
                <div class="val-title">Radical Transparency</div>
                <div class="val-desc">
                    No hidden fees. No undisclosed conflicts. No jargon that obscures intent. We show you
                    exactly what we charge, why we recommend it, and what the alternatives are — always.
                    Transparency is not a feature; it is our operating model.
                </div>
            </div>

            <div class="val-card" data-aos="fade-up" data-aos-delay="160">
                <div class="val-num">03</div>
                <div class="val-icon"><i class="fas fa-graduation-cap"></i></div>
                <div class="val-title">Continuous Learning</div>
                <div class="val-desc">
                    Markets, regulations, and financial instruments evolve constantly. Every WealthBridge
                    advisor completes 80+ hours of structured professional development annually. We hold
                    CFP, CFA, and CA designations across the team — and we raise the bar every year.
                </div>
            </div>

            <div class="val-card" data-aos="fade-up" data-aos-delay="0">
                <div class="val-num">04</div>
                <div class="val-icon"><i class="fas fa-handshake"></i></div>
                <div class="val-title">Long-Term Partnership</div>
                <div class="val-desc">
                    Our 96% client retention rate is the proof of this value in practice. We are not
                    interested in transactions — we build 10–20 year relationships. Your advisor knows your
                    family's goals, not just your portfolio balance.
                </div>
            </div>

            <div class="val-card" data-aos="fade-up" data-aos-delay="80">
                <div class="val-num">05</div>
                <div class="val-icon"><i class="fas fa-users"></i></div>
                <div class="val-title">Inclusivity of Wealth</div>
                <div class="val-desc">
                    The quality of your financial advice should not depend on the size of your portfolio.
                    A ₹5,000/month SIP client deserves the same rigour, the same technology, and the same
                    responsiveness as a ₹5 crore portfolio client. We built WealthBridge to make that true.
                </div>
            </div>

            <div class="val-card" data-aos="fade-up" data-aos-delay="160">
                <div class="val-num">06</div>
                <div class="val-icon"><i class="fas fa-seedling"></i></div>
                <div class="val-title">Generational Thinking</div>
                <div class="val-desc">
                    We don't optimise for this quarter's returns — we optimise for generational wealth.
                    Our average client engagement length is 9.4 years because we think in decades, not
                    months. The best financial plan is one your children and grandchildren benefit from too.
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ══════════════════════════════════════════════════════════
     OUR COMMITMENTS — WHITE
══════════════════════════════════════════════════════════ -->
<section class="section vm-commitments" id="commitments">
    <div class="container">
        <div class="section-header center">
            <span class="section-label" data-aos="fade-up">Our Promises</span>
            <h2 class="section-title" data-aos="fade-up" data-aos-delay="80">
                Eight Commitments We Make <span>to Every Client</span>
            </h2>
            <p class="section-sub" style="margin:0 auto" data-aos="fade-up" data-aos-delay="140">
                These are not aspirational promises. They are operational standards we hold ourselves
                accountable to — measurable, verifiable, and consistently delivered.
            </p>
        </div>

        <div class="commit-grid">
            <div class="commit-card" data-aos="fade-up" data-aos-delay="0">
                <div class="commit-icon"><i class="fas fa-certificate"></i></div>
                <div>
                    <div class="commit-title">SEBI-Registered, Always</div>
                    <div class="commit-desc">
                        WealthBridge operates exclusively as a SEBI Registered Investment Adviser (RIA).
                        Every recommendation is backed by our fiduciary licence and full regulatory compliance.
                        We will never operate in a grey zone.
                    </div>
                </div>
            </div>

            <div class="commit-card" data-aos="fade-up" data-aos-delay="80">
                <div class="commit-icon"><i class="fas fa-rupee-sign"></i></div>
                <div>
                    <div class="commit-title">Zero Commission, Always</div>
                    <div class="commit-desc">
                        We charge a flat advisory fee and earn zero rupee in product commissions.
                        This is not a policy that changes when circumstances change — it is our
                        permanent operating model, enshrined in our SEBI registration.
                    </div>
                </div>
            </div>

            <div class="commit-card" data-aos="fade-up" data-aos-delay="0">
                <div class="commit-icon"><i class="fas fa-user-tie"></i></div>
                <div>
                    <div class="commit-title">Dedicated Advisor, Always</div>
                    <div class="commit-desc">
                        Every client gets a named, dedicated financial advisor — not a rotating call
                        centre. Your advisor learns your family's goals, risk profile, and life stage,
                        and stays your single point of contact year after year.
                    </div>
                </div>
            </div>

            <div class="commit-card" data-aos="fade-up" data-aos-delay="80">
                <div class="commit-icon"><i class="fas fa-sync-alt"></i></div>
                <div>
                    <div class="commit-title">Quarterly Reviews, Minimum</div>
                    <div class="commit-desc">
                        Your financial plan is a living document. We commit to at minimum one
                        structured review per quarter — and ad-hoc reviews whenever life changes:
                        job switch, new child, inheritance, business exit.
                    </div>
                </div>
            </div>

            <div class="commit-card" data-aos="fade-up" data-aos-delay="0">
                <div class="commit-icon"><i class="fas fa-file-alt"></i></div>
                <div>
                    <div class="commit-title">Written Plans, Always</div>
                    <div class="commit-desc">
                        Every recommendation is documented in a written financial plan — with rationale,
                        alternatives considered, and expected outcomes. Verbal advice that can't be
                        traced or verified has no place at WealthBridge.
                    </div>
                </div>
            </div>

            <div class="commit-card" data-aos="fade-up" data-aos-delay="80">
                <div class="commit-icon"><i class="fas fa-clock"></i></div>
                <div>
                    <div class="commit-title">24-Hour Response Commitment</div>
                    <div class="commit-desc">
                        Every client query — email, call, or portal message — receives a substantive
                        response within one business day. Not an auto-reply. A real answer from
                        your dedicated advisor.
                    </div>
                </div>
            </div>

            <div class="commit-card" data-aos="fade-up" data-aos-delay="0">
                <div class="commit-icon"><i class="fas fa-lock"></i></div>
                <div>
                    <div class="commit-title">Absolute Confidentiality</div>
                    <div class="commit-desc">
                        Your financial information is never shared, sold, or referenced outside our
                        advisory relationship — without your explicit written consent. We are ISO
                        27001-compliant and maintain the strictest data protection standards.
                    </div>
                </div>
            </div>

            <div class="commit-card" data-aos="fade-up" data-aos-delay="80">
                <div class="commit-icon"><i class="fas fa-thumbs-up"></i></div>
                <div>
                    <div class="commit-title">Right Advice Even When Uncomfortable</div>
                    <div class="commit-desc">
                        We will tell you when your plan needs significant changes — even if it means
                        recommending you sell investments you're emotionally attached to, or delay a
                        goal you're excited about. Honest advice sometimes requires courage.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ══════════════════════════════════════════════════════════
     IMPACT METRICS — GRAY-50
══════════════════════════════════════════════════════════ -->
<section class="section vm-impact">
    <div class="container">
        <div class="section-header center">
            <span class="section-label" data-aos="fade-up">Vision in Numbers</span>
            <h2 class="section-title" data-aos="fade-up" data-aos-delay="80">
                Our Vision is <span>Measurable</span> — Here's the Evidence
            </h2>
            <p class="section-sub" style="margin:0 auto" data-aos="fade-up" data-aos-delay="140">
                Behind every vision statement is a set of outcomes. Here is how our impact translates
                into real numbers that matter.
            </p>
        </div>

        <div class="impact-grid">
            <div class="impact-card" data-aos="fade-up" data-aos-delay="0">
                <div class="impact-icon"><i class="fas fa-users"></i></div>
                <div class="impact-val" data-counter="28000" data-suffix="+">28,000<span>+</span></div>
                <div class="impact-label">Families Served</div>
                <div class="impact-sub">Across India &amp; 14 countries</div>
            </div>
            <div class="impact-card" data-aos="fade-up" data-aos-delay="60">
                <div class="impact-icon"><i class="fas fa-rupee-sign"></i></div>
                <div class="impact-val" data-counter="4200" data-suffix="Cr+">₹4,200<span>Cr+</span></div>
                <div class="impact-label">Wealth Under Advisory</div>
                <div class="impact-sub">Growing 30%+ year on year</div>
            </div>
            <div class="impact-card" data-aos="fade-up" data-aos-delay="120">
                <div class="impact-icon"><i class="fas fa-handshake"></i></div>
                <div class="impact-val" data-counter="96" data-suffix="%">96<span>%</span></div>
                <div class="impact-label">Client Retention Rate</div>
                <div class="impact-sub">Industry average: 74%</div>
            </div>
            <div class="impact-card" data-aos="fade-up" data-aos-delay="180">
                <div class="impact-icon"><i class="fas fa-city"></i></div>
                <div class="impact-val" data-counter="28" data-suffix="+">28<span>+</span></div>
                <div class="impact-label">Cities Covered</div>
                <div class="impact-sub">Metro to tier-2 &amp; tier-3</div>
            </div>
            <div class="impact-card" data-aos="fade-up" data-aos-delay="0">
                <div class="impact-icon"><i class="fas fa-chart-line"></i></div>
                <div class="impact-val" data-counter="19" data-suffix="%">19<span>%</span></div>
                <div class="impact-label">Avg. Portfolio CAGR</div>
                <div class="impact-sub">5-year client average</div>
            </div>
            <div class="impact-card" data-aos="fade-up" data-aos-delay="60">
                <div class="impact-icon"><i class="fas fa-award"></i></div>
                <div class="impact-val" data-counter="34" data-suffix="+">34<span>+</span></div>
                <div class="impact-label">Industry Awards</div>
                <div class="impact-sub">15 years of recognition</div>
            </div>
            <div class="impact-card" data-aos="fade-up" data-aos-delay="120">
                <div class="impact-icon"><i class="fas fa-user-tie"></i></div>
                <div class="impact-val" data-counter="180" data-suffix="+">180<span>+</span></div>
                <div class="impact-label">Expert Advisors</div>
                <div class="impact-sub">CFPs, CAs &amp; specialists</div>
            </div>
            <div class="impact-card" data-aos="fade-up" data-aos-delay="180">
                <div class="impact-icon"><i class="fas fa-star"></i></div>
                <div class="impact-val" data-counter="4" data-suffix=".8/5">4<span>.8/5</span></div>
                <div class="impact-label">Client Satisfaction Score</div>
                <div class="impact-sub">Based on 12,400+ reviews</div>
            </div>
        </div>
    </div>
</section>


<!-- ══════════════════════════════════════════════════════════
     STRATEGIC GOALS 2030 — DARK
══════════════════════════════════════════════════════════ -->
<section class="section vm-goals" id="goals">
    <div class="container">
        <div class="section-header center">
            <span class="section-label" data-aos="fade-up">WealthBridge 2030</span>
            <h2 class="section-title" data-aos="fade-up" data-aos-delay="80">
                Our <span>Strategic Goals</span> for the Decade Ahead
            </h2>
            <p class="section-sub" style="margin:0 auto" data-aos="fade-up" data-aos-delay="140">
                Vision without milestones is just words. Here are the measurable targets that define
                what WealthBridge will look like by 2030.
            </p>
        </div>

        <div class="goals-grid">

            <div class="goal-card" data-aos="fade-up" data-aos-delay="0">
                <div class="goal-year">Target 2026</div>
                <div class="goal-icon"><i class="fas fa-users"></i></div>
                <div class="goal-title">50,000 Families</div>
                <div class="goal-items">
                    <div class="goal-item"><span>Double client base to 50,000+</span></div>
                    <div class="goal-item"><span>Expand to 40 Indian cities</span></div>
                    <div class="goal-item"><span>20+ country NRI reach</span></div>
                </div>
            </div>

            <div class="goal-card" data-aos="fade-up" data-aos-delay="80">
                <div class="goal-year">Target 2027</div>
                <div class="goal-icon"><i class="fas fa-mobile-alt"></i></div>
                <div class="goal-title">WealthBridge 2.0</div>
                <div class="goal-items">
                    <div class="goal-item"><span>AI-assisted advisory platform</span></div>
                    <div class="goal-item"><span>Real-time goal tracking</span></div>
                    <div class="goal-item"><span>Robo + human hybrid model</span></div>
                </div>
            </div>

            <div class="goal-card" data-aos="fade-up" data-aos-delay="160">
                <div class="goal-year">Target 2028</div>
                <div class="goal-icon"><i class="fas fa-rupee-sign"></i></div>
                <div class="goal-title">₹10,000 Cr AUM</div>
                <div class="goal-items">
                    <div class="goal-item"><span>₹10,000 Cr under advisory</span></div>
                    <div class="goal-item"><span>300+ certified advisors</span></div>
                    <div class="goal-item"><span>Category I RIA status</span></div>
                </div>
            </div>

            <div class="goal-card" data-aos="fade-up" data-aos-delay="240">
                <div class="goal-year">Target 2030</div>
                <div class="goal-icon"><i class="fas fa-flag-checkered"></i></div>
                <div class="goal-title">India's #1 IFA</div>
                <div class="goal-items">
                    <div class="goal-item"><span>India's largest independent advisory firm</span></div>
                    <div class="goal-item"><span>1L+ families empowered</span></div>
                    <div class="goal-item"><span>Financial literacy programmes</span></div>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- ══════════════════════════════════════════════════════════
     CTA BAND — DARK
══════════════════════════════════════════════════════════ -->
<section class="vm-cta" id="contact">
    <div class="container">
        <div class="vmcta-inner">
            <span class="section-label" style="justify-content:center;display:flex" data-aos="fade-up">
                Live the Vision With Us
            </span>
            <h2 class="cta-title" data-aos="fade-up" data-aos-delay="80">
                Our Vision Becomes Real<br>
                <span>One Client at a Time — Starting With You.</span>
            </h2>
            <p class="cta-desc" data-aos="fade-up" data-aos-delay="140">
                Every client we serve, every financial plan we build, and every goal we help someone achieve
                is a step toward the world we set out to create in 2007. Be part of that journey.
            </p>
            <div class="cta-actions" data-aos="fade-up" data-aos-delay="200">
                <a href="contact" class="btn btn-primary">
                    Book Free Consultation
                    <i class="fas fa-arrow-right"></i>
                </a>
                <a href="our-history" class="btn btn-ghost">
                    <i class="fas fa-history"></i>
                    Read Our Story
                </a>
            </div>

            <div class="cta-trust" data-aos="fade-up" data-aos-delay="280">
                <div class="ct-item"><i class="fas fa-check-circle"></i> SEBI Registered RIA</div>
                <div class="ct-item"><i class="fas fa-check-circle"></i> Founded 2007 — 17 Years</div>
                <div class="ct-item"><i class="fas fa-check-circle"></i> Zero Commission</div>
                <div class="ct-item"><i class="fas fa-check-circle"></i> First Session Free</div>
            </div>
        </div>
    </div>
</section>


<!-- ══════════════════════════════════════════════════════════
     RELATED — WHITE
══════════════════════════════════════════════════════════ -->
<section class="section vm-related">
    <div class="container">
        <div class="section-header">
            <span class="section-label" data-aos="fade-right">Also Explore</span>
            <h2 class="section-title" data-aos="fade-up" data-aos-delay="80">
                More About <span>WealthBridge</span>
            </h2>
        </div>

        <div class="related-grid">
            <a href="our-history" class="rel-card" data-aos="fade-up" data-aos-delay="0">
                <div class="rc-icon"><i class="fas fa-history"></i></div>
                <h4>Our History</h4>
                <p>17 years of building India's most trusted independent financial advisory firm.</p>
                <span class="rc-link">Explore <i class="fas fa-arrow-right"></i></span>
            </a>
            <a href="our-approach" class="rel-card" data-aos="fade-up" data-aos-delay="80">
                <div class="rc-icon"><i class="fas fa-route"></i></div>
                <h4>Our Approach</h4>
                <p>The philosophy, frameworks, and 6-step process behind every WealthBridge plan.</p>
                <span class="rc-link">Explore <i class="fas fa-arrow-right"></i></span>
            </a>
            <a href="leadership-team" class="rel-card" data-aos="fade-up" data-aos-delay="160">
                <div class="rc-icon"><i class="fas fa-user-tie"></i></div>
                <h4>Leadership Team</h4>
                <p>Meet the founders, CXOs, and 180+ advisors who live this vision daily.</p>
                <span class="rc-link">Explore <i class="fas fa-arrow-right"></i></span>
            </a>
            <a href="client-testimonials" class="rel-card" data-aos="fade-up" data-aos-delay="240">
                <div class="rc-icon"><i class="fas fa-star"></i></div>
                <h4>Client Testimonials</h4>
                <p>Hear from 28,000+ clients whose financial lives have been transformed.</p>
                <span class="rc-link">Explore <i class="fas fa-arrow-right"></i></span>
            </a>
        </div>
    </div>
</section>


<!-- Page JS -->
<script>
(function () {

    /* Counter animation */
    function animateCounter(el) {
        var raw    = parseFloat(el.dataset.counter);
        var suffix = el.dataset.suffix || '';
        var dur    = 1800;
        var start  = null;
        var prefix = (suffix === 'Cr+') ? '₹' : '';

        function step(ts) {
            if (!start) start = ts;
            var p = Math.min((ts - start) / dur, 1);
            var e = 1 - Math.pow(1 - p, 3);
            var v = (raw < 10) ? (raw * e).toFixed(0) : Math.round(raw * e);
            var d = raw >= 1000 ? Number(v).toLocaleString('en-IN') : v;
            el.textContent = prefix + d + suffix;
            if (p < 1) requestAnimationFrame(step);
        }
        requestAnimationFrame(step);
    }

    var els = document.querySelectorAll('[data-counter]');
    if (els.length) {
        var obs = new IntersectionObserver(function (entries) {
            entries.forEach(function (e) {
                if (e.isIntersecting && !e.target.dataset.done) {
                    e.target.dataset.done = '1';
                    animateCounter(e.target);
                    obs.unobserve(e.target);
                }
            });
        }, { threshold: 0.4 });
        els.forEach(function (el) { obs.observe(el); });
    }

})();
</script>

<?php include_once ('elements/footer.php'); ?>