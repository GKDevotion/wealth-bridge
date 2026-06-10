<?php include_once ('elements/header.php'); ?>

    <!-- Custom CSS -->
    <link href="<?php echo UrlHelper::asset('css/events-webinars.css'); ?>" rel="stylesheet">

    
<!-- BREADCRUMB -->
<div class="breadcrumb-bar">
  <div class="container">
    <div class="breadcrumb">
      <a href="index"><i class="fas fa-home"></i> Home</a><span>›</span>
      <a href="#">Insights</a><span>›</span>
      <span class="current">Events &amp; Webinars</span>
    </div>
  </div>
</div>

<!-- ═══ HERO ═══ -->
<section class="ev-hero">
  <div class="ev-hero-bg"></div>
  <div class="ev-grid"></div>
  <div class="ev-line l1"></div>
  <div class="ev-line l2"></div>
  <div class="ev-deco"></div>
  <div class="container">
    <div class="ev-hero-inner">
      <div>
        <div class="hero-label">Insights &nbsp;·&nbsp; Events &amp; Webinars</div>
        <h1 class="hero-title">Learn Live from<br><em>India's Sharpest</em>Finance Minds</h1>
        <p class="hero-sub">Free webinars, live workshops, and in-person conferences covering wealth creation, tax planning, real estate, and retirement — designed for serious investors who want an edge.</p>
        <div class="hero-actions">
          <a href="#upcoming" class="btn btn-primary">Browse Events <i class="fas fa-arrow-right"></i></a>
          <a href="#contact" class="btn btn-ghost">Get Notified <i class="fas fa-bell"></i></a>
        </div>
        <div class="hero-stats">
          <div class="hero-stat">
            <div class="hs-num" data-counter="120" data-suffix="+">120+</div>
            <div class="hs-lbl">Events Hosted</div>
          </div>
          <div class="hero-stat">
            <div class="hs-num" data-counter="48000" data-suffix="+">48K+</div>
            <div class="hs-lbl">Attendees</div>
          </div>
          <div class="hero-stat">
            <div class="hs-num" data-counter="96" data-suffix="%">96%</div>
            <div class="hs-lbl">Would Recommend</div>
          </div>
        </div>
      </div>

      <div class="hero-visual">
        <div class="ev-float f1">
          <div class="ef-lbl">Next Webinar</div>
          <div class="ef-val">Live <span>● Sat</span></div>
          <div class="ef-sub">Tax Planning Masterclass</div>
        </div>
        <div class="ev-card-main">
          <div class="ev-card-head">
            <span class="ev-card-eyebrow">Featured Event</span>
            <span class="ev-live-badge"><span class="ev-live-dot"></span> Registering Now</span>
          </div>
          <div class="ev-feat-img">
            <div class="ev-feat-img-bg"></div>
            <i class="fas fa-chalkboard-teacher ev-feat-img-icon"></i>
          </div>
          <div class="ev-feat-meta">
            <span class="ev-tag">Webinar</span>
            <span class="ev-tag-dark">Free Entry</span>
            <span class="ev-tag-dark">Hindi + English</span>
          </div>
          <div class="ev-feat-title">FY2025-26 Tax Masterclass:<br>Save ₹2L+ Legally</div>
          <div class="ev-feat-info">
            <div class="ev-feat-info-row"><i class="fas fa-calendar"></i> Saturday, 21 June 2025 · 11:00 AM</div>
            <div class="ev-feat-info-row"><i class="fas fa-clock"></i> 2 hours + Live Q&amp;A</div>
            <div class="ev-feat-info-row"><i class="fas fa-users"></i> 847 registered · 153 seats left</div>
          </div>
          <div class="ev-feat-actions">
            <a href="#" class="btn btn-primary btn-sm">Register Free <i class="fas fa-arrow-right"></i></a>
            <a href="#" class="btn btn-sm" style="background:rgba(255,255,255,.06);color:rgba(255,255,255,.7);border:1px solid rgba(255,255,255,.12)">Add to Calendar</a>
          </div>
        </div>
        <div class="ev-float f2">
          <div class="ef-lbl">Attendees This Month</div>
          <div class="ef-val">6,400 <span>+</span></div>
          <div class="ef-sub">Across 8 events</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ FILTER TABS ═══ -->
<div class="ev-filter">
  <div class="container">
    <div class="filter-inner">
      <div class="filter-tabs">
        <button class="filter-tab active" data-filter="all">All Events</button>
        <button class="filter-tab" data-filter="webinar">Webinars</button>
        <button class="filter-tab" data-filter="workshop">Workshops</button>
        <button class="filter-tab" data-filter="conference">Conferences</button>
        <button class="filter-tab" data-filter="live">Live Events</button>
      </div>
      <div class="filter-search">
        <i class="fas fa-search"></i>
        <input type="text" placeholder="Search events...">
      </div>
    </div>
  </div>
</div>

<!-- ═══ UPCOMING EVENTS ═══ -->
<section class="section ev-upcoming" id="upcoming">
  <div class="container">

    <!-- Featured Banner -->
    <div class="ev-featured-banner reveal">
      <div class="ev-fb-bg"></div>
      <div class="ev-fb-content">
        <div class="ev-fb-label">Featured · Free Webinar</div>
        <h2 class="ev-fb-title">FY2025-26 Tax Masterclass:<br>Save ₹2 Lakhs Legally This Year</h2>
        <p class="ev-fb-desc">Join WealthBridge's Chief Financial Advisor for a deep-dive into ELSS, NPS, LTCG harvesting, old vs new regime, and Section 80D — live with interactive Q&amp;A and personalised worksheet.</p>
        <div class="ev-fb-meta">
          <div class="ev-fb-meta-item"><i class="fas fa-calendar-alt"></i><span>Saturday, <strong>21 June 2025</strong></span></div>
          <div class="ev-fb-meta-item"><i class="fas fa-clock"></i><span><strong>11:00 AM – 1:00 PM IST</strong></span></div>
          <div class="ev-fb-meta-item"><i class="fas fa-video"></i><span><strong>Zoom Webinar</strong> · Free</span></div>
          <div class="ev-fb-meta-item"><i class="fas fa-language"></i><span><strong>Hindi + English</strong></span></div>
        </div>
        <div class="ev-fb-actions">
          <a href="#" class="btn btn-primary">Register Free Now <i class="fas fa-arrow-right"></i></a>
          <a href="#" class="btn btn-ghost">Share Event <i class="fas fa-share-alt"></i></a>
        </div>
      </div>
      <div class="ev-fb-visual">
        <div class="ev-fb-icon-wrap"><i class="fas fa-chalkboard-teacher"></i></div>
        <div class="ev-fb-count"><div class="ev-fb-count-num">847</div><div class="ev-fb-count-lbl">Registered so far</div></div>
        <div class="ev-fb-spots"><i class="fas fa-fire"></i> Only 153 seats left</div>
      </div>
    </div>

    <!-- Section header -->
    <div class="section-header">
      <div class="section-label reveal">Upcoming</div>
      <h2 class="section-title reveal rd1">All Upcoming <span>Events &amp; Webinars</span></h2>
    </div>

    <div class="events-grid">

      <!-- Card 1 -->
      <div class="ev-card reveal">
        <div class="ev-card-thumb">
          <div class="ev-thumb-glow"></div>
          <i class="fas fa-home ev-card-thumb-icon"></i>
          <div class="ev-card-date-badge"><div class="ev-date-day">28</div><div class="ev-date-mon">Jun</div></div>
          <span class="ev-card-type-badge badge-webinar">Webinar</span>
        </div>
        <div class="ev-card-body">
          <div class="ev-card-tags"><span class="ev-tag">Real Estate</span><span class="ev-tag-dark" style="background:var(--red-light);color:var(--white);font-size:10.5px;font-weight:700;border-radius:4px;padding:3px 9px">Free</span></div>
          <div class="ev-card-title">Mumbai Real Estate 2025: Where to Invest for 18% IRR</div>
          <div class="ev-card-desc">Micro-market deep dive into Thane, Navi Mumbai, and Panvel — price trends, absorption rates, and top developer picks.</div>
          <div class="ev-card-meta">
            <div class="ev-card-meta-row"><i class="fas fa-calendar"></i> Saturday, 28 June 2025</div>
            <div class="ev-card-meta-row"><i class="fas fa-clock"></i> 3:00 PM – 4:30 PM IST</div>
            <div class="ev-card-meta-row"><i class="fas fa-video"></i> Zoom · Free Registration</div>
          </div>
          <div class="ev-card-footer">
            <span class="ev-card-spots"><span>312</span> registered</span>
            <a href="#" class="ev-register-btn">Register <i class="fas fa-arrow-right"></i></a>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="ev-card reveal rd1">
        <div class="ev-card-thumb" style="background:linear-gradient(135deg,#0d1a0d,#1a2a1a)">
          <div class="ev-thumb-glow"></div>
          <i class="fas fa-chart-line ev-card-thumb-icon"></i>
          <div class="ev-card-date-badge"><div class="ev-date-day">05</div><div class="ev-date-mon">Jul</div></div>
          <span class="ev-card-type-badge badge-workshop">Workshop</span>
        </div>
        <div class="ev-card-body">
          <div class="ev-card-tags"><span class="ev-tag">Mutual Funds</span><span class="ev-tag-dark" style="background:var(--red-light);color:var(--white);font-size:10.5px;font-weight:700;border-radius:4px;padding:3px 9px">₹499</span></div>
          <div class="ev-card-title">SIP Mastery Workshop: Build a ₹1Cr Portfolio from ₹5K/Month</div>
          <div class="ev-card-desc">Hands-on 3-hour workshop covering fund selection, SIP step-up strategies, goal-based allocation, and LTCG harvesting.</div>
          <div class="ev-card-meta">
            <div class="ev-card-meta-row"><i class="fas fa-calendar"></i> Saturday, 5 July 2025</div>
            <div class="ev-card-meta-row"><i class="fas fa-clock"></i> 10:00 AM – 1:00 PM IST</div>
            <div class="ev-card-meta-row"><i class="fas fa-video"></i> Google Meet · Paid</div>
          </div>
          <div class="ev-card-footer">
            <span class="ev-card-spots"><span>89</span> registered · <span style="color:#d97706">42 left</span></span>
            <a href="#" class="ev-register-btn">Register <i class="fas fa-arrow-right"></i></a>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="ev-card reveal rd2">
        <div class="ev-card-thumb" style="background:linear-gradient(135deg,#0d0d1a,#1a1a2a)">
          <div class="ev-thumb-glow"></div>
          <i class="fas fa-graduation-cap ev-card-thumb-icon"></i>
          <div class="ev-card-date-badge"><div class="ev-date-day">12</div><div class="ev-date-mon">Jul</div></div>
          <span class="ev-card-type-badge badge-webinar">Webinar</span>
        </div>
        <div class="ev-card-body">
          <div class="ev-card-tags"><span class="ev-tag">Child Planning</span><span class="ev-tag-dark" style="background:var(--red-light);color:var(--white);font-size:10.5px;font-weight:700;border-radius:4px;padding:3px 9px">Free</span></div>
          <div class="ev-card-title">Education Corpus Planning: How to Fund IIT/IIM Without Loans</div>
          <div class="ev-card-desc">Real-world case studies of parents who built ₹50L+ education corpuses — and the exact SIP and instrument mix they used.</div>
          <div class="ev-card-meta">
            <div class="ev-card-meta-row"><i class="fas fa-calendar"></i> Saturday, 12 July 2025</div>
            <div class="ev-card-meta-row"><i class="fas fa-clock"></i> 11:00 AM – 12:30 PM IST</div>
            <div class="ev-card-meta-row"><i class="fas fa-video"></i> Zoom · Free Registration</div>
          </div>
          <div class="ev-card-footer">
            <span class="ev-card-spots"><span>204</span> registered</span>
            <a href="#" class="ev-register-btn">Register <i class="fas fa-arrow-right"></i></a>
          </div>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="ev-card reveal">
        <div class="ev-card-thumb" style="background:linear-gradient(135deg,#1a0d00,#2a1a00)">
          <div class="ev-thumb-glow"></div>
          <i class="fas fa-umbrella-beach ev-card-thumb-icon"></i>
          <div class="ev-card-date-badge"><div class="ev-date-day">19</div><div class="ev-date-mon">Jul</div></div>
          <span class="ev-card-type-badge badge-webinar">Webinar</span>
        </div>
        <div class="ev-card-body">
          <div class="ev-card-tags"><span class="ev-tag">Retirement</span><span class="ev-tag-dark" style="background:var(--red-light);color:var(--white);font-size:10.5px;font-weight:700;border-radius:4px;padding:3px 9px">Free</span></div>
          <div class="ev-card-title">Retire at 55: The NPS + Equity Blueprint That Actually Works</div>
          <div class="ev-card-desc">A step-by-step retirement corpus plan covering NPS, EPF, SWP withdrawal strategy, and the 4% rule adapted for India.</div>
          <div class="ev-card-meta">
            <div class="ev-card-meta-row"><i class="fas fa-calendar"></i> Saturday, 19 July 2025</div>
            <div class="ev-card-meta-row"><i class="fas fa-clock"></i> 3:00 PM – 4:30 PM IST</div>
            <div class="ev-card-meta-row"><i class="fas fa-video"></i> Zoom · Free Registration</div>
          </div>
          <div class="ev-card-footer">
            <span class="ev-card-spots"><span>178</span> registered</span>
            <a href="#" class="ev-register-btn">Register <i class="fas fa-arrow-right"></i></a>
          </div>
        </div>
      </div>

      <!-- Card 5 -->
      <div class="ev-card reveal rd1">
        <div class="ev-card-thumb" style="background:linear-gradient(135deg,#0d1818,#1a2828)">
          <div class="ev-thumb-glow"></div>
          <i class="fas fa-heartbeat ev-card-thumb-icon"></i>
          <div class="ev-card-date-badge"><div class="ev-date-day">26</div><div class="ev-date-mon">Jul</div></div>
          <span class="ev-card-type-badge badge-live">Live Event</span>
        </div>
        <div class="ev-card-body">
          <div class="ev-card-tags"><span class="ev-tag">Health Insurance</span><span class="ev-tag-dark" style="background:var(--red-light);color:var(--white);font-size:10.5px;font-weight:700;border-radius:4px;padding:3px 9px">In-Person</span></div>
          <div class="ev-card-title">Health Insurance Decoded: Which Plan is Actually Right for You</div>
          <div class="ev-card-desc">Live in-person seminar in Bengaluru — bring your policy documents for a live review session with our insurance advisors.</div>
          <div class="ev-card-meta">
            <div class="ev-card-meta-row"><i class="fas fa-calendar"></i> Saturday, 26 July 2025</div>
            <div class="ev-card-meta-row"><i class="fas fa-map-marker-alt"></i> The Lalit, Bengaluru · 2:00 PM</div>
            <div class="ev-card-meta-row"><i class="fas fa-ticket-alt"></i> ₹299 · Includes Refreshments</div>
          </div>
          <div class="ev-card-footer">
            <span class="ev-card-spots"><span style="color:#d97706">Only 28 seats</span> left</span>
            <a href="#" class="ev-register-btn">Book Seat <i class="fas fa-arrow-right"></i></a>
          </div>
        </div>
      </div>

      <!-- Card 6 -->
      <div class="ev-card reveal rd2">
        <div class="ev-card-thumb" style="background:linear-gradient(135deg,#0a0a1e,#12122e)">
          <div class="ev-thumb-glow"></div>
          <i class="fas fa-users ev-card-thumb-icon"></i>
          <div class="ev-card-date-badge"><div class="ev-date-day">02</div><div class="ev-date-mon">Aug</div></div>
          <span class="ev-card-type-badge badge-conference">Conference</span>
        </div>
        <div class="ev-card-body">
          <div class="ev-card-tags"><span class="ev-tag">WealthBridge Summit</span><span class="ev-tag-dark" style="background:var(--red-light);color:var(--white);font-size:10.5px;font-weight:700;border-radius:4px;padding:3px 9px">₹1,499</span></div>
          <div class="ev-card-title">WealthBridge Annual Investor Summit 2025 — Mumbai</div>
          <div class="ev-card-desc">Full-day conference with 8 expert sessions on markets, real estate, tax, retirement, and NRI investing. Networking lunch included.</div>
          <div class="ev-card-meta">
            <div class="ev-card-meta-row"><i class="fas fa-calendar"></i> Saturday, 2 August 2025</div>
            <div class="ev-card-meta-row"><i class="fas fa-map-marker-alt"></i> NSCI Dome, Mumbai · 9:00 AM</div>
            <div class="ev-card-meta-row"><i class="fas fa-ticket-alt"></i> ₹1,499 · Breakfast + Lunch</div>
          </div>
          <div class="ev-card-footer">
            <span class="ev-card-spots"><span>412</span> registered · <span style="color:#d97706">88 left</span></span>
            <a href="#" class="ev-register-btn">Book Seat <i class="fas fa-arrow-right"></i></a>
          </div>
        </div>
      </div>

    </div><!-- /events-grid -->

    <!-- Past events -->
    <div style="margin-top:64px">
      <div class="section-header">
        <div class="section-label reveal">On-Demand</div>
        <h2 class="section-title reveal rd1">Watch Past <span>Event Recordings</span></h2>
        <p class="section-sub reveal rd2">Missed a live session? All recordings are free for registered attendees. Key events available on-demand.</p>
      </div>
      <div class="past-grid">
        <div class="past-card reveal">
          <div class="past-card-date">May 2025</div>
          <div class="past-card-title">New Tax Regime vs Old: Which Won in FY25?</div>
          <div class="past-card-meta">1,240 views · 90 minutes</div>
          <div class="past-card-tags"><span class="ev-tag">Tax</span></div>
          <a href="#" class="past-card-link"><i class="fas fa-play-circle"></i> Watch Now</a>
        </div>
        <div class="past-card reveal rd1">
          <div class="past-card-date">Apr 2025</div>
          <div class="past-card-title">Bengaluru Real Estate: Top Micro-Markets for 2025–2030</div>
          <div class="past-card-meta">986 views · 75 minutes</div>
          <div class="past-card-tags"><span class="ev-tag">Real Estate</span></div>
          <a href="#" class="past-card-link"><i class="fas fa-play-circle"></i> Watch Now</a>
        </div>
        <div class="past-card reveal rd2">
          <div class="past-card-date">Mar 2025</div>
          <div class="past-card-title">Retire Rich: Building a ₹3Cr Corpus on a ₹1L Salary</div>
          <div class="past-card-meta">2,104 views · 2 hours</div>
          <div class="past-card-tags"><span class="ev-tag">Retirement</span></div>
          <a href="#" class="past-card-link"><i class="fas fa-play-circle"></i> Watch Now</a>
        </div>
        <div class="past-card reveal rd3">
          <div class="past-card-date">Feb 2025</div>
          <div class="past-card-title">LTCG Harvesting Masterclass: Save Tax on Your Equity Portfolio</div>
          <div class="past-card-meta">1,678 views · 60 minutes</div>
          <div class="past-card-tags"><span class="ev-tag">Investing</span></div>
          <a href="#" class="past-card-link"><i class="fas fa-play-circle"></i> Watch Now</a>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- ═══ SPEAKERS ═══ -->
<section class="section ev-speakers">
  <div class="container">
    <div class="section-header center">
      <div class="section-label reveal">Who You'll Learn From</div>
      <h2 class="section-title reveal rd1">Meet Our <span>Expert Speakers</span></h2>
      <p class="section-sub reveal rd2" style="margin:0 auto">SEBI-registered advisors, chartered accountants, and domain specialists who have collectively managed ₹2,000Cr+ in client wealth.</p>
    </div>
    <div class="speakers-grid">
      <div class="speaker-card reveal">
        <div class="speaker-avatar">AK</div>
        <div class="speaker-name">Ankit Kapoor</div>
        <div class="speaker-title">Chief Financial Advisor<br>SEBI RIA · 18 yrs experience</div>
        <div class="speaker-topics"><span class="sp-tag">Tax Planning</span><span class="sp-tag">NPS</span><span class="sp-tag">ELSS</span></div>
      </div>
      <div class="speaker-card reveal rd1">
        <div class="speaker-avatar">PS</div>
        <div class="speaker-name">Priya Sharma</div>
        <div class="speaker-title">Head of Real Estate Advisory<br>RERA Certified · 14 yrs</div>
        <div class="speaker-topics"><span class="sp-tag">Real Estate</span><span class="sp-tag">REITs</span><span class="sp-tag">NRI</span></div>
      </div>
      <div class="speaker-card reveal rd2">
        <div class="speaker-avatar">RN</div>
        <div class="speaker-name">Rahul Nair</div>
        <div class="speaker-title">Senior Portfolio Manager<br>CFA, MBA (IIM-A) · 12 yrs</div>
        <div class="speaker-topics"><span class="sp-tag">Mutual Funds</span><span class="sp-tag">SIP</span><span class="sp-tag">LTCG</span></div>
      </div>
      <div class="speaker-card reveal rd3">
        <div class="speaker-avatar">SM</div>
        <div class="speaker-name">Sunita Mehta</div>
        <div class="speaker-title">Insurance &amp; Goal Planning<br>CFP, LUTCF · 16 yrs</div>
        <div class="speaker-topics"><span class="sp-tag">Health Ins.</span><span class="sp-tag">Child Plan</span><span class="sp-tag">Term</span></div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ NEWSLETTER ═══ -->
<div class="ev-newsletter reveal">
  <div class="container">
    <div class="newsletter-inner">
      <div>
        <div class="nl-title">Never Miss a WealthBridge Event</div>
        <p class="nl-desc">Get early access, seat reservations, and exclusive resources delivered to your inbox — before we announce to the general public.</p>
      </div>
      <div>
        <div class="nl-form">
          <input class="nl-input" type="email" placeholder="Your email address">
          <button class="btn btn-white">Notify Me <i class="fas fa-bell"></i></button>
        </div>
        <p style="font-size:11.5px;color:rgba(255,255,255,.5);margin-top:10px"><i class="fas fa-lock" style="margin-right:4px"></i> No spam. Unsubscribe anytime.</p>
      </div>
    </div>
  </div>
</div>
 
<!-- ═══ RELATED ═══ -->
<section class="section ev-related">
  <div class="container">
    <div class="section-header reveal">
      <div class="section-label">Also Explore</div>
      <h2 class="section-title">Related <span>Insights</span></h2>
    </div>
    <div class="related-grid">
      <a href="faq" class="rel-card reveal">
        <div class="rc-icon"><i class="fas fa-question-circle"></i></div>
        <h4>FAQ</h4>
        <p>Answers to the most common questions on wealth, tax, insurance, and investing.</p>
        <span class="rc-link">Explore <i class="fas fa-arrow-right"></i></span>
      </a>
      <a href="tax-efficient-investment" class="rel-card reveal rd1">
        <div class="rc-icon"><i class="fas fa-file-invoice-dollar"></i></div>
        <h4>Tax-Efficient Investing</h4>
        <p>Dive deeper into the strategies our advisors cover in every tax webinar.</p>
        <span class="rc-link">Explore <i class="fas fa-arrow-right"></i></span>
      </a>
      <a href="real-estate-investment" class="rel-card reveal rd2">
        <div class="rc-icon"><i class="fas fa-building"></i></div>
        <h4>Real Estate Investment</h4>
        <p>Research our real estate advisory offering — the backbone of our RE webinars.</p>
        <span class="rc-link">Explore <i class="fas fa-arrow-right"></i></span>
      </a>
      <a href="contact" class="rel-card reveal rd3">
        <div class="rc-icon"><i class="fas fa-user-tie"></i></div>
        <h4>Book a Private Advisory</h4>
        <p>Skip the group session — get a one-on-one consultation with a WealthBridge advisor.</p>
        <span class="rc-link">Book Now <i class="fas fa-arrow-right"></i></span>
      </a>
    </div>
  </div>
</section>

<!-- ═══ CTA ═══ -->
<section class="ev-cta" id="contact">
  <div class="container">
    <div class="cta-inner">
      <div class="section-label reveal" style="justify-content:center">Your Seat is Waiting</div>
      <h2 class="cta-title reveal rd1">Every WealthBridge Event is a<br><span>Step Closer to Financial Clarity.</span></h2>
      <p class="cta-desc reveal rd2">Register for a free upcoming webinar or subscribe to get notified when we announce new events. Knowledge is the highest-returning investment you can make.</p>
      <div class="cta-actions reveal rd2">
        <a href="#upcoming" class="btn btn-primary">Browse All Events <i class="fas fa-arrow-right"></i></a>
        <a href="contact" class="btn btn-ghost"><i class="fas fa-calendar-check"></i> Book Private Advisory</a>
      </div>
      <div class="cta-trust reveal rd3">
        <div class="ct-item"><i class="fas fa-check-circle"></i> 120+ Events Hosted</div>
        <div class="ct-item"><i class="fas fa-check-circle"></i> 48,000+ Attendees</div>
        <div class="ct-item"><i class="fas fa-check-circle"></i> 96% Would Recommend</div>
        <div class="ct-item"><i class="fas fa-check-circle"></i> Most Events Free</div>
      </div>
    </div>
  </div>
</section>

<script>
(function(){
  /* Scroll reveal */
  var obs=new IntersectionObserver(function(entries){entries.forEach(function(e){if(e.isIntersecting){e.target.classList.add('visible');obs.unobserve(e.target)}})},{threshold:.12});
  document.querySelectorAll('.reveal').forEach(function(el){obs.observe(el)});

  /* Counter */
  function animCounter(el){
    var raw=parseFloat(el.dataset.counter),suffix=el.dataset.suffix||'',start=null,dur=1800;
    function step(ts){if(!start)start=ts;var p=Math.min((ts-start)/dur,1),e=1-Math.pow(1-p,3),cur=Math.round(raw*e);
      el.textContent=(cur>=1000?cur.toLocaleString('en-IN'):cur)+suffix;if(p<1)requestAnimationFrame(step)}
    requestAnimationFrame(step);
  }
  var co=new IntersectionObserver(function(entries){entries.forEach(function(e){if(e.isIntersecting&&!e.target.dataset.done){e.target.dataset.done='1';animCounter(e.target);co.unobserve(e.target)}})},{threshold:.5});
  document.querySelectorAll('[data-counter]').forEach(function(el){co.observe(el)});

  /* Filter tabs */
  document.querySelectorAll('.filter-tab').forEach(function(tab){
    tab.addEventListener('click',function(){
      document.querySelectorAll('.filter-tab').forEach(function(t){t.classList.remove('active')});
      tab.classList.add('active');
    });
  });
})();
</script>

<?php include_once ('elements/footer.php'); ?>