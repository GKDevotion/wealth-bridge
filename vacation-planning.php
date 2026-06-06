<?php include_once ('elements/header.php'); ?>

    <!-- Custom CSS -->
    <link href="<?php echo UrlHelper::asset('css/vacation-planning.css'); ?>" rel="stylesheet">

    <!-- ===================== BREADCRUMB ===================== -->
    <div class="breadcrumb-bar">
        <div class="container">
            <div class="breadcrumb">
                <a href="wealth-bridge.html"><i class="fas fa-home"></i> Home</a>
                <span>›</span><a href="#">Our Services</a>
                <span>›</span><span class="current">Vacation Planning</span>
            </div>
        </div>
    </div>

    <!-- ===================== HERO ===================== -->
    <section class="service-hero" id="top">
        <div class="sh-bg"></div>
        <div class="sh-grid"></div>
        <div class="sh-line"></div>
        <div class="sh-line2"></div>
        <div class="sh-dots-anim" id="dotsAnim"></div>

        <div class="container">
            <div class="sh-content">
                <div class="sh-left">
                    <div class="sh-tag"><i class="fas fa-plane"></i> Vacation Planning</div>
                    <h1 class="sh-title">
                        Travel the World.
                        <em>Debt-Free,</em>
                        Worry-Free.
                    </h1>
                    <p class="sh-desc">Your dream vacation — Europe, Maldives, Japan, or a US road trip — doesn't have
                        to wait for a miracle or destroy your finances. We build dedicated vacation funds that grow
                        while you plan, so you travel guilt-free, every single time.</p>
                    <div class="sh-actions">
                        <a href="#calculator" class="btn btn-primary">Start My Vacation Fund <i
                                class="fas fa-arrow-right"></i></a>
                        <a href="#why" class="btn btn-ghost">Why Plan It? <i class="fas fa-chevron-down"></i></a>
                    </div>
                    <div class="sh-quick-stats">
                        <div class="sh-qs">
                            <div class="sh-qs-num">4200<span>+</span></div>
                            <div class="sh-qs-label">Vacations Funded</div>
                        </div>
                        <div class="sh-qs">
                            <div class="sh-qs-num">38<span>+</span></div>
                            <div class="sh-qs-label">Destinations Covered</div>
                        </div>
                        <div class="sh-qs">
                            <div class="sh-qs-num">₹0</div>
                            <div class="sh-qs-label">Debt Used for Travel</div>
                        </div>
                        <div class="sh-qs">
                            <div class="sh-qs-num">100<span>%</span></div>
                            <div class="sh-qs-label">Client Satisfaction</div>
                        </div>
                    </div>
                </div>

                <!-- HERO RIGHT — Vacation Savings Dashboard -->
                <div class="sh-right" data-aos="fade-left" data-aos-delay="200">
                    <div class="sh-float f1">
                        <div class="sf-label">Dream Trip Fund</div>
                        <div class="sf-val">₹4.2<span>L Ready</span></div>
                        <div class="sf-sub">Sharma Family · Europe 2027 ✈️</div>
                    </div>

                    <div class="sh-card">
                        <div class="sh-card-header">
                            <div class="sh-card-label">My Vacation Fund Dashboard</div>
                            <div class="sh-card-badge"><span></span> 3 Trips Planned</div>
                        </div>

                        <div class="dest-list">
                            <div class="dest-row">
                                <div class="dest-flag">🇪🇺</div>
                                <div class="dest-info">
                                    <div class="dest-name">Europe — 15 Days</div>
                                    <div class="dest-type">Family · Dec 2027</div>
                                </div>
                                <div class="dest-bar-wrap">
                                    <div class="dest-bar-bg">
                                        <div class="dest-bar-fill"
                                            style="width:72%;background:linear-gradient(90deg,var(--red),#ff6b6b);animation-delay:.1s">
                                        </div>
                                    </div>
                                    <div class="dest-pct">72%</div>
                                </div>
                                <div class="dest-amt">₹4.2L</div>
                            </div>
                            <div class="dest-row">
                                <div class="dest-flag">🇯🇵</div>
                                <div class="dest-info">
                                    <div class="dest-name">Japan — Cherry Blossom</div>
                                    <div class="dest-type">Couple · Apr 2026</div>
                                </div>
                                <div class="dest-bar-wrap">
                                    <div class="dest-bar-bg">
                                        <div class="dest-bar-fill"
                                            style="width:95%;background:linear-gradient(90deg,#15803d,#4ade80);animation-delay:.2s">
                                        </div>
                                    </div>
                                    <div class="dest-pct">95%</div>
                                </div>
                                <div class="dest-amt">₹2.85L</div>
                            </div>
                            <div class="dest-row">
                                <div class="dest-flag">🇺🇸</div>
                                <div class="dest-info">
                                    <div class="dest-name">USA Road Trip</div>
                                    <div class="dest-type">Family · Jul 2028</div>
                                </div>
                                <div class="dest-bar-wrap">
                                    <div class="dest-bar-bg">
                                        <div class="dest-bar-fill"
                                            style="width:38%;background:linear-gradient(90deg,#2563eb,#60a5fa);animation-delay:.3s">
                                        </div>
                                    </div>
                                    <div class="dest-pct">38%</div>
                                </div>
                                <div class="dest-amt">₹2.1L</div>
                            </div>
                        </div>

                        <div class="sh-divider"></div>
                        <div class="sh-metrics">
                            <div class="sh-metric">
                                <div class="sh-metric-label">Total Saved</div>
                                <div class="sh-metric-val">₹9.15L<span class="up"> ▲ 14%</span></div>
                            </div>
                            <div class="sh-metric">
                                <div class="sh-metric-label">Monthly SIP</div>
                                <div class="sh-metric-val">₹18K<span class="tag">/mo</span></div>
                            </div>
                            <div class="sh-metric">
                                <div class="sh-metric-label">Credit Card Debt</div>
                                <div class="sh-metric-val">₹0<span class="up"> ✓ None</span></div>
                            </div>
                            <div class="sh-metric">
                                <div class="sh-metric-label">Next Trip</div>
                                <div class="sh-metric-val">Japan<span class="tag"> 3 months</span></div>
                            </div>
                        </div>
                    </div>

                    <div class="sh-float f2">
                        <div class="sf-label">Saved on Bookings</div>
                        <div class="sf-val">₹62K<span> this year</span></div>
                        <div class="sf-sub">Via early booking & forex strategy</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== WHY VACATION PLANNING ===================== -->
    <section class="section why-vac" id="why">
        <div class="container">
            <div class="wv-grid">
                <div data-aos="fade-right">
                    <span class="section-label">The Right Way to Travel</span>
                    <h2 class="section-title">Stop Funding Vacations <span>With Credit Cards</span></h2>
                    <div class="wv-body">
                        <p>76% of Indians who travel internationally use credit cards or personal loans to fund part or
                            all of their vacation. The result: <strong>your dream trip costs 40–80% more</strong> by the
                            time you finish paying off the debt — and the joy is replaced with financial anxiety.</p>
                        <div class="wv-highlight">"A ₹3 lakh Europe vacation funded on credit cards at 36% annual
                            interest, repaid over 12 months, actually costs you ₹3.9 lakh. The same ₹8,000/month
                            invested for 3 years grows to ₹3.4 lakh — debt-free, guilt-free."</div>
                        <p>Vacation planning is <strong>goal-based investing for your lifestyle</strong>. We create
                            dedicated, ring-fenced vacation funds using smart short-term investment instruments — liquid
                            mutual funds, arbitrage funds, and short-duration debt — that grow safely while you
                            countdown to your trip.</p>
                        <p>The result: you travel more often, to better destinations, spending more freely — because
                            every rupee was planned for, not borrowed.</p>
                    </div>
                    <div style="margin-top:28px"><a href="#calculator" class="btn btn-primary">Calculate My Vacation
                            Fund <i class="fas fa-arrow-right"></i></a></div>
                </div>

                <div data-aos="fade-left">
                    <p
                        style="font-size:12px;font-weight:700;letter-spacing:2px;text-transform:uppercase;color:var(--gray-500);margin-bottom:18px">
                        FUNDED ON CREDIT vs PLANNED SAVINGS</p>
                    <div class="cost-compare">
                        <div class="cc-card">
                            <div class="cc-header">
                                <div class="cc-title"><span>💳</span> Credit Card Funding</div>
                                <div class="cc-badge red">AVOID THIS</div>
                            </div>
                            <div class="cc-bar-bg">
                                <div class="cc-bar-fill"
                                    style="width:100%;background:linear-gradient(90deg,var(--red-dark),var(--red))">
                                </div>
                            </div>
                            <div class="cc-detail">₹3L trip → 12 months at 36% = <strong style="color:var(--red)">₹3.9L
                                    total cost</strong>. Plus financial stress during repayment.</div>
                        </div>
                        <div class="cc-card">
                            <div class="cc-header">
                                <div class="cc-title"><span>🏦</span> Personal Loan</div>
                                <div class="cc-badge" style="background:rgba(234,179,8,.1);color:#b45309">AVOID</div>
                            </div>
                            <div class="cc-bar-bg">
                                <div class="cc-bar-fill"
                                    style="width:80%;background:linear-gradient(90deg,#b45309,#eab308)"></div>
                            </div>
                            <div class="cc-detail">₹3L trip → 14–18% interest rate = <strong style="color:#b45309">₹3.4L
                                    total cost</strong>. Still paying more than needed.</div>
                        </div>
                        <div class="cc-card">
                            <div class="cc-header">
                                <div class="cc-title"><span>📈</span> Vacation SIP (Wealth Bridge)</div>
                                <div class="cc-badge green">BEST WAY</div>
                            </div>
                            <div class="cc-bar-bg">
                                <div class="cc-bar-fill"
                                    style="width:55%;background:linear-gradient(90deg,#15803d,#4ade80)"></div>
                            </div>
                            <div class="cc-detail">₹8,000/month × 36 months at 9% = <strong style="color:#15803d">₹3.4L
                                    corpus</strong>. Travel debt-free. Keep the interest yourself.</div>
                        </div>
                        <div class="cc-card" style="border-color:var(--red)">
                            <div class="cc-header">
                                <div class="cc-title"><span>🚀</span> Optimised Vacation Fund (WB+)</div>
                                <div class="cc-badge green">BEST CASE</div>
                            </div>
                            <div class="cc-bar-bg">
                                <div class="cc-bar-fill"
                                    style="width:45%;background:linear-gradient(90deg,#2563eb,#60a5fa)"></div>
                            </div>
                            <div class="cc-detail">₹6,500/month × 36 months + forex strategy + early booking = <strong
                                    style="color:#2563eb">same ₹3L trip, ₹18K/mo less saved</strong>.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== DESTINATION TYPES TABS ===================== -->
    <section class="section dest-types" id="destinations">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <span class="section-label">Destination Planning</span>
                <h2 class="section-title">Every Dream Destination — <span>Financially Planned</span></h2>
                <p class="section-sub">From budget backpacking to luxury international trips — we build the right
                    savings strategy for every kind of vacation.</p>
            </div>

            <div class="dt-tabs" data-aos="fade-up">
                <div class="dt-tab active" data-dtab="domestic"><span class="tab-emoji">🇮🇳</span> India</div>
                <div class="dt-tab" data-dtab="asia"><span class="tab-emoji">🌏</span> Asia</div>
                <div class="dt-tab" data-dtab="europe"><span class="tab-emoji">🇪🇺</span> Europe</div>
                <div class="dt-tab" data-dtab="americas"><span class="tab-emoji">🌎</span> Americas</div>
                <div class="dt-tab" data-dtab="luxury"><span class="tab-emoji">💎</span> Luxury</div>
            </div>

            <div class="dt-panels">
                <!-- INDIA -->
                <div class="dt-panel active" id="dtab-domestic">
                    <div class="dt-panel-visual" data-aos="fade-right">
                        <div class="dt-panel-icon">🇮🇳</div>
                    </div>
                    <div data-aos="fade-left">
                        <h3 class="section-title" style="font-size:1.6rem">India <span>Getaways</span></h3>
                        <p style="color:var(--gray-500);font-size:14px;line-height:1.8;margin-bottom:24px">From the
                            Himalayan peaks to Kerala backwaters, Rajasthan forts to Goa beaches — India's diversity
                            makes it perfect for annual family trips without passport queues.</p>
                        <div class="dt-grid">
                            <div class="dt-item">
                                <div class="dt-item-icon" style="background:rgba(200,16,46,.08);color:var(--red)"><i
                                        class="fas fa-mountain"></i></div>
                                <div>
                                    <h4>Hill Stations & Mountains</h4>
                                    <p>Manali, Leh-Ladakh, Ooty, Coorg, Darjeeling — 5–7 day trips.</p><span
                                        class="dt-cost">₹30K – ₹90K for family of 4</span>
                                </div>
                            </div>
                            <div class="dt-item">
                                <div class="dt-item-icon" style="background:rgba(59,130,246,.08);color:#2563eb"><i
                                        class="fas fa-umbrella-beach"></i></div>
                                <div>
                                    <h4>Beach Destinations</h4>
                                    <p>Goa, Andaman, Kerala, Lakshadweep — sun, sand, and seafood.</p><span
                                        class="dt-cost">₹40K – ₹1.2L for family of 4</span>
                                </div>
                            </div>
                            <div class="dt-item">
                                <div class="dt-item-icon" style="background:rgba(212,160,23,.1);color:#8a6500"><i
                                        class="fas fa-chess-rook"></i></div>
                                <div>
                                    <h4>Heritage & Culture</h4>
                                    <p>Rajasthan circuit, Varanasi, Hampi, Khajuraho — India's incredible history.</p>
                                    <span class="dt-cost">₹25K – ₹80K for family of 4</span>
                                </div>
                            </div>
                            <div class="dt-item">
                                <div class="dt-item-icon" style="background:rgba(74,222,128,.1);color:#15803d"><i
                                        class="fas fa-leaf"></i></div>
                                <div>
                                    <h4>Wildlife & Nature</h4>
                                    <p>Ranthambore, Kaziranga, Jim Corbett, Sunderbans — tiger safaris and more.</p>
                                    <span class="dt-cost">₹35K – ₹1L for family of 4</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ASIA -->
                <div class="dt-panel" id="dtab-asia">
                    <div class="dt-panel-visual" data-aos="fade-right">
                        <div class="dt-panel-icon">🌏</div>
                    </div>
                    <div data-aos="fade-left">
                        <h3 class="section-title" style="font-size:1.6rem">Asia <span>Adventures</span></h3>
                        <p style="color:var(--gray-500);font-size:14px;line-height:1.8;margin-bottom:24px">Southeast and
                            East Asia offer world-class experiences at half the cost of Western destinations —
                            visa-friendly and flight-accessible from India.</p>
                        <div class="dt-grid">
                            <div class="dt-item">
                                <div class="dt-item-icon" style="background:rgba(200,16,46,.08);color:var(--red)"><i
                                        class="fas fa-torii-gate"></i></div>
                                <div>
                                    <h4>Japan</h4>
                                    <p>Tokyo, Kyoto, Osaka — cherry blossom season is magical. Best March–April or
                                        Oct–Nov.</p><span class="dt-cost">₹1.5L – ₹3L per couple</span>
                                </div>
                            </div>
                            <div class="dt-item">
                                <div class="dt-item-icon" style="background:rgba(59,130,246,.08);color:#2563eb"><i
                                        class="fas fa-water"></i></div>
                                <div>
                                    <h4>Maldives</h4>
                                    <p>Overwater bungalows, crystal waters — India's most popular luxury short-haul.</p>
                                    <span class="dt-cost">₹1.2L – ₹3.5L per couple</span>
                                </div>
                            </div>
                            <div class="dt-item">
                                <div class="dt-item-icon" style="background:rgba(74,222,128,.1);color:#15803d"><i
                                        class="fas fa-temple"></i></div>
                                <div>
                                    <h4>Thailand & Bali</h4>
                                    <p>Budget-friendly yet luxurious — beaches, temples, food, and nightlife.</p><span
                                        class="dt-cost">₹80K – ₹1.8L per couple</span>
                                </div>
                            </div>
                            <div class="dt-item">
                                <div class="dt-item-icon" style="background:rgba(212,160,23,.1);color:#8a6500"><i
                                        class="fas fa-building"></i></div>
                                <div>
                                    <h4>Singapore & Dubai</h4>
                                    <p>Shopping, skylines, food and family fun — perfect for first international trips.
                                    </p><span class="dt-cost">₹1L – ₹2.5L for family of 4</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- EUROPE -->
                <div class="dt-panel" id="dtab-europe">
                    <div class="dt-panel-visual" data-aos="fade-right">
                        <div class="dt-panel-icon">🇪🇺</div>
                    </div>
                    <div data-aos="fade-left">
                        <h3 class="section-title" style="font-size:1.6rem">Europe <span>Dream Trips</span></h3>
                        <p style="color:var(--gray-500);font-size:14px;line-height:1.8;margin-bottom:24px">Europe is a
                            bucket-list destination for most Indians. It requires 12–24 months of advance planning and a
                            ₹3–6 lakh fund per couple — entirely achievable with our vacation SIP strategy.</p>
                        <div class="dt-grid">
                            <div class="dt-item">
                                <div class="dt-item-icon" style="background:rgba(200,16,46,.08);color:var(--red)"><i
                                        class="fas fa-eiffel-tower"></i></div>
                                <div>
                                    <h4>Western Europe</h4>
                                    <p>France, Italy, Spain, Switzerland, Germany — the classic 15-day Europe circuit.
                                    </p><span class="dt-cost">₹3.5L – ₹6L per couple</span>
                                </div>
                            </div>
                            <div class="dt-item">
                                <div class="dt-item-icon" style="background:rgba(59,130,246,.08);color:#2563eb"><i
                                        class="fas fa-snowflake"></i></div>
                                <div>
                                    <h4>Scandinavia</h4>
                                    <p>Norway, Sweden, Denmark, Finland — Northern Lights and midnight sun experiences.
                                    </p><span class="dt-cost">₹4L – ₹7L per couple</span>
                                </div>
                            </div>
                            <div class="dt-item">
                                <div class="dt-item-icon" style="background:rgba(74,222,128,.1);color:#15803d"><i
                                        class="fas fa-ship"></i></div>
                                <div>
                                    <h4>Mediterranean Cruise</h4>
                                    <p>Greece, Turkey, Croatia, Montenegro — island hopping by cruise ship.</p><span
                                        class="dt-cost">₹3L – ₹5L per couple</span>
                                </div>
                            </div>
                            <div class="dt-item">
                                <div class="dt-item-icon" style="background:rgba(212,160,23,.1);color:#8a6500"><i
                                        class="fas fa-castle"></i></div>
                                <div>
                                    <h4>Eastern Europe</h4>
                                    <p>Prague, Budapest, Vienna, Krakow — lower cost, equally beautiful, less crowded.
                                    </p><span class="dt-cost">₹2L – ₹3.5L per couple</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- AMERICAS -->
                <div class="dt-panel" id="dtab-americas">
                    <div class="dt-panel-visual" data-aos="fade-right">
                        <div class="dt-panel-icon">🌎</div>
                    </div>
                    <div data-aos="fade-left">
                        <h3 class="section-title" style="font-size:1.6rem">Americas <span>Exploration</span></h3>
                        <p style="color:var(--gray-500);font-size:14px;line-height:1.8;margin-bottom:24px">The USA,
                            Canada, and Latin America are dream destinations that require 18–36 months of planning. Our
                            long-term vacation SIP makes these possible without financial strain.</p>
                        <div class="dt-grid">
                            <div class="dt-item">
                                <div class="dt-item-icon" style="background:rgba(200,16,46,.08);color:var(--red)"><i
                                        class="fas fa-star-of-david"></i></div>
                                <div>
                                    <h4>USA West & East Coast</h4>
                                    <p>New York, LA, Vegas, Grand Canyon, Orlando — the ultimate American dream trip.
                                    </p><span class="dt-cost">₹4L – ₹8L for family of 4</span>
                                </div>
                            </div>
                            <div class="dt-item">
                                <div class="dt-item-icon" style="background:rgba(59,130,246,.08);color:#2563eb"><i
                                        class="fas fa-leaf"></i></div>
                                <div>
                                    <h4>Canada</h4>
                                    <p>Niagara, Banff, Vancouver, Toronto — natural wonders and multicultural cities.
                                    </p><span class="dt-cost">₹3.5L – ₹6L per couple</span>
                                </div>
                            </div>
                            <div class="dt-item">
                                <div class="dt-item-icon" style="background:rgba(74,222,128,.1);color:#15803d"><i
                                        class="fas fa-globe-americas"></i></div>
                                <div>
                                    <h4>Latin America</h4>
                                    <p>Machu Picchu, Amazon, Rio, Patagonia — bucket-list nature and culture.</p><span
                                        class="dt-cost">₹4L – ₹7L per couple</span>
                                </div>
                            </div>
                            <div class="dt-item">
                                <div class="dt-item-icon" style="background:rgba(212,160,23,.1);color:#8a6500"><i
                                        class="fas fa-child"></i></div>
                                <div>
                                    <h4>Disney & Theme Parks</h4>
                                    <p>Disney World Orlando, Universal, Legoland — ultimate family vacation.</p><span
                                        class="dt-cost">₹5L – ₹9L for family of 4</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- LUXURY -->
                <div class="dt-panel" id="dtab-luxury">
                    <div class="dt-panel-visual" data-aos="fade-right">
                        <div class="dt-panel-icon">💎</div>
                    </div>
                    <div data-aos="fade-left">
                        <h3 class="section-title" style="font-size:1.6rem">Luxury <span>Experiences</span></h3>
                        <p style="color:var(--gray-500);font-size:14px;line-height:1.8;margin-bottom:24px">Private
                            villas, business class flights, 5-star resorts, and exclusive experiences — luxury travel is
                            absolutely achievable with a 24–36 month dedicated savings plan.</p>
                        <div class="dt-grid">
                            <div class="dt-item">
                                <div class="dt-item-icon" style="background:rgba(212,160,23,.1);color:#8a6500"><i
                                        class="fas fa-crown"></i></div>
                                <div>
                                    <h4>Maldives Private Villa</h4>
                                    <p>7-day overwater bungalow stay at Six Senses or Four Seasons — once-in-a-lifetime.
                                    </p><span class="dt-cost">₹4L – ₹8L per couple</span>
                                </div>
                            </div>
                            <div class="dt-item">
                                <div class="dt-item-icon" style="background:rgba(200,16,46,.08);color:var(--red)"><i
                                        class="fas fa-plane"></i></div>
                                <div>
                                    <h4>Business Class Europe</h4>
                                    <p>Fly business class to Europe — comfort on long haul makes the journey itself
                                        memorable.</p><span class="dt-cost">₹5L – ₹10L per couple</span>
                                </div>
                            </div>
                            <div class="dt-item">
                                <div class="dt-item-icon" style="background:rgba(139,92,246,.1);color:#7c3aed"><i
                                        class="fas fa-ship"></i></div>
                                <div>
                                    <h4>World Cruise</h4>
                                    <p>20–30 day luxury cruise covering multiple continents — the ultimate bucket-list
                                        trip.</p><span class="dt-cost">₹8L – ₹20L per couple</span>
                                </div>
                            </div>
                            <div class="dt-item">
                                <div class="dt-item-icon" style="background:rgba(59,130,246,.08);color:#2563eb"><i
                                        class="fas fa-safari"></i></div>
                                <div>
                                    <h4>Africa Safari</h4>
                                    <p>Kenya Masai Mara, Tanzania Serengeti, South Africa — the Big Five in their
                                        natural habitat.</p><span class="dt-cost">₹5L – ₹12L per couple</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== VACATION FUND CALCULATOR ===================== -->
    <section class="section vac-calculator" id="calculator">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <span class="section-label">Vacation Fund Calculator</span>
                <h2 class="section-title">How Much Do You Need to <span>Save Every Month?</span></h2>
                <p class="section-sub">Plan any vacation — domestic or international — with our smart vacation fund
                    calculator. See exactly what you need to save to travel debt-free.</p>
            </div>
            <div class="vc-grid" data-aos="fade-up">
                <div class="vc-form">
                    <div class="vc-form-title">Vacation Savings Planner</div>
                    <div class="vc-form-sub">Enter your dream trip details and we'll calculate the optimal monthly
                        savings plan.</div>

                    <div class="vc-field">
                        <div class="vc-label">Destination Type
                            <select class="vc-select" id="vc-dest" style="margin-top:6px;display:block;font-weight:600">
                                <option value="80000">India — Weekend/Short Trip (₹30K–₹1.5L)</option>
                                <option value="200000">Asia — Thailand/Bali/Singapore (₹1–3L)</option>
                                <option value="300000">Maldives/Japan/Dubai (₹2–4L)</option>
                                <option value="500000" selected>Europe — 15 Days (₹3.5–6L)</option>
                                <option value="700000">USA/Canada (₹4–8L)</option>
                                <option value="1000000">Luxury/Business Class (₹6L+)</option>
                            </select>
                        </div>
                    </div>

                    <div class="vc-field">
                        <div class="vc-label">Number of Travellers <span id="lbl-pax">4</span> people</div>
                        <input type="range" class="range-input" id="vc-pax" min="1" max="8" value="4">
                    </div>

                    <div class="vc-field">
                        <div class="vc-label">Months Until Travel <span id="lbl-months">18</span> months</div>
                        <input type="range" class="range-input" id="vc-months" min="3" max="60" value="18">
                    </div>

                    <div class="vc-field">
                        <div class="vc-label">Expected Return on Savings <span id="lbl-ret">8</span>% p.a.</div>
                        <input type="range" class="range-input" id="vc-ret" min="4" max="14" step="0.5" value="8">
                    </div>

                    <div class="vc-field">
                        <div class="vc-label">Forex Hedging Buffer <span id="lbl-forex">10</span>%</div>
                        <input type="range" class="range-input" id="vc-forex" min="0" max="25" step="5" value="10">
                    </div>

                    <div
                        style="background:rgba(200,16,46,.06);border:1px solid rgba(200,16,46,.15);border-radius:8px;padding:14px;margin-top:8px">
                        <p style="font-size:12.5px;color:var(--gray-700);line-height:1.7"><i class="fas fa-info-circle"
                                style="color:var(--red);margin-right:6px"></i> We recommend <strong>liquid mutual funds
                                or arbitrage funds</strong> for vacation savings — higher returns than FDs, low risk,
                            and instantly accessible when you need to book.</p>
                    </div>
                </div>

                <div class="vc-result">
                    <div class="vr-label">Monthly Savings Required</div>
                    <div class="vr-big" id="vc-monthly">₹<span>18,400</span> /mo</div>
                    <div class="vr-sub" id="vc-sub">For a ₹4L Europe trip in 18 months (family of 4)</div>

                    <!-- Timeline visual -->
                    <p
                        style="font-size:11px;font-weight:700;letter-spacing:1.5px;text-transform:uppercase;color:var(--gray-500);margin-bottom:8px;margin-top:16px">
                        Your Savings Timeline</p>
                    <div class="vr-timeline" id="vc-timeline"></div>
                    <p style="font-size:11px;color:var(--gray-500);margin-bottom:20px"><span
                            style="display:inline-block;width:12px;height:12px;background:var(--red);border-radius:2px;margin-right:4px"></span>Saved
                        <span
                            style="display:inline-block;width:12px;height:12px;background:var(--black);border-radius:2px;margin:0 4px 0 10px"></span>Target
                        Month</p>

                    <div class="vr-breakdown">
                        <div class="vrb-row">
                            <div class="vrb-label">
                                <div class="vrb-dot" style="background:var(--red)"></div>Base Trip Cost
                            </div>
                            <div class="vrb-val" id="vc-base">₹3.6L</div>
                        </div>
                        <div class="vrb-row">
                            <div class="vrb-label">
                                <div class="vrb-dot" style="background:#2563eb"></div>Forex / Emergency Buffer
                            </div>
                            <div class="vrb-val" id="vc-fx">+₹36K</div>
                        </div>
                        <div class="vrb-row">
                            <div class="vrb-label">
                                <div class="vrb-dot" style="background:#15803d"></div>Returns Earned on Savings
                            </div>
                            <div class="vrb-val" id="vc-returns" style="color:#15803d">-₹24K</div>
                        </div>
                        <div class="vrb-row" style="border-color:var(--red)">
                            <div class="vrb-label">
                                <div class="vrb-dot" style="background:var(--gray-300)"></div>Total Fund Needed
                            </div>
                            <div class="vrb-val" style="color:var(--red)" id="vc-total">₹3.96L</div>
                        </div>
                    </div>

                    <a href="wealth-bridge.html#contact" class="btn btn-primary"
                        style="width:100%;justify-content:center">Start My Vacation Fund <i
                            class="fas fa-arrow-right"></i></a>
                    <p style="font-size:11.5px;color:var(--gray-500);text-align:center;margin-top:10px">We'll set up
                        your dedicated vacation SIP — takes just 15 minutes.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== SMART SAVING STRATEGIES ===================== -->
    <section class="section saving-strategies" id="strategies">
        <div class="container">
            <div class="section-header center" data-aos="fade-up">
                <span class="section-label">Smart Saving Strategies</span>
                <h2 class="section-title">How We Make Your <span>Travel Fund Work Harder</span></h2>
                <p class="section-sub">Beyond just saving — our vacation planning service optimises every rupee so you
                    reach your target faster and spend more freely when you travel.</p>
            </div>
            <div class="ss-grid">
                <div class="ss-card" data-aos="fade-up" data-aos-delay="0">
                    <div class="ss-icon" style="background:rgba(200,16,46,.10);color:var(--red)"><i
                            class="fas fa-piggy-bank"></i></div>
                    <h3>Dedicated Vacation SIP</h3>
                    <p>A ring-fenced mutual fund SIP specifically for your vacation goal — separate from retirement or
                        other savings, so you always know exactly how much travel fund you have.</p>
                    <ul class="ss-list">
                        <li><i class="fas fa-check-circle"></i> Liquid MF for trips &lt;12 months away</li>
                        <li><i class="fas fa-check-circle"></i> Arbitrage fund for 12–24 months</li>
                        <li><i class="fas fa-check-circle"></i> Short-duration debt for 24–36 months</li>
                        <li><i class="fas fa-check-circle"></i> Instant redemption when booking time comes</li>
                    </ul>
                </div>
                <div class="ss-card" data-aos="fade-up" data-aos-delay="60">
                    <div class="ss-icon" style="background:rgba(13,148,136,.10);color:var(--teal)"><i
                            class="fas fa-exchange-alt"></i></div>
                    <h3>Forex Strategy</h3>
                    <p>Timing your foreign exchange purchase correctly can save 5–10% on international trips. We advise
                        on optimal INR-to-foreign-currency conversion timing and instruments.</p>
                    <ul class="ss-list">
                        <li><i class="fas fa-check-circle"></i> Forex card vs cash vs wire — what's cheapest</li>
                        <li><i class="fas fa-check-circle"></i> Rate monitoring — buy forex when INR is strong</li>
                        <li><i class="fas fa-check-circle"></i> Multi-currency cards for lower conversion fees</li>
                        <li><i class="fas fa-check-circle"></i> Avoid airport forex counters (worst rates)</li>
                    </ul>
                </div>
                <div class="ss-card" data-aos="fade-up" data-aos-delay="120">
                    <div class="ss-icon" style="background:rgba(234,179,8,.10);color:#8a6500"><i
                            class="fas fa-calendar-alt"></i></div>
                    <h3>Early Booking Strategy</h3>
                    <p>Flights and hotels booked 3–6 months in advance cost 30–50% less. We build your fund timeline
                        around optimal booking windows so you save on both the fund and the trip itself.</p>
                    <ul class="ss-list">
                        <li><i class="fas fa-check-circle"></i> Flights: book 3–6 months ahead for best fares</li>
                        <li><i class="fas fa-check-circle"></i> Hotels: book refundable early, monitor for drops</li>
                        <li><i class="fas fa-check-circle"></i> Off-season travel: 30–40% cheaper same quality</li>
                        <li><i class="fas fa-check-circle"></i> Credit card reward points optimisation</li>
                    </ul>
                </div>
                <div class="ss-card" data-aos="fade-up" data-aos-delay="0">
                    <div class="ss-icon" style="background:rgba(139,92,246,.10);color:#7c3aed"><i
                            class="fas fa-credit-card"></i></div>
                    <h3>Travel Credit Card Hacking</h3>
                    <p>The right travel credit cards earn 5–10% back in air miles and travel credits. Used correctly,
                        they can offset 15–25% of your international trip cost.</p>
                    <ul class="ss-list">
                        <li><i class="fas fa-check-circle"></i> Best travel cards for Indian flyers</li>
                        <li><i class="fas fa-check-circle"></i> Lounge access cards — save on food & comfort</li>
                        <li><i class="fas fa-check-circle"></i> Miles vs cashback — which works when</li>
                        <li><i class="fas fa-check-circle"></i> Zero forex markup cards for overseas use</li>
                    </ul>
                </div>
                <div class="ss-card" data-aos="fade-up" data-aos-delay="60">
                    <div class="ss-icon" style="background:rgba(59,130,246,.10);color:#2563eb"><i
                            class="fas fa-shield-alt"></i></div>
                    <h3>Travel Insurance Planning</h3>
                    <p>Comprehensive travel insurance is 0.5–1% of trip cost but protects against trip cancellation,
                        medical emergencies, baggage loss, and flight delays that can cost 10× more.</p>
                    <ul class="ss-list">
                        <li><i class="fas fa-check-circle"></i> Medical cover — ₹50L+ for USA/Europe</li>
                        <li><i class="fas fa-check-circle"></i> Trip cancellation & curtailment</li>
                        <li><i class="fas fa-check-circle"></i> Baggage and passport loss</li>
                        <li><i class="fas fa-check-circle"></i> Adventure sports cover (if applicable)</li>
                    </ul>
                </div>
                <div class="ss-card" data-aos="fade-up" data-aos-delay="120">
                    <div class="ss-icon" style="background:rgba(200,16,46,.10);color:var(--red)"><i
                            class="fas fa-chart-line"></i></div>
                    <h3>Tax-Efficient Savings</h3>
                    <p>Your vacation fund can be held in instruments that minimise tax. Liquid and arbitrage funds are
                        taxed as debt funds — often more efficient than FD interest for higher earners.</p>
                    <ul class="ss-list">
                        <li><i class="fas fa-check-circle"></i> Arbitrage funds: taxed as equity (10% LTCG)</li>
                        <li><i class="fas fa-check-circle"></i> Better post-tax returns vs savings account</li>
                        <li><i class="fas fa-check-circle"></i> Hold in lower-income spouse's name for tax efficiency
                        </li>
                        <li><i class="fas fa-check-circle"></i> Annual redemption to book profit tax-free</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== DESTINATION COST GUIDE ===================== -->
    <section class="section dest-costs" id="costs">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <span class="section-label">Budget Reference Guide</span>
                <h2 class="section-title">Realistic <span>Destination Cost Guide</span> for Indian Travellers</h2>
                <p class="section-sub">Actual costs for Indian families and couples — based on real 2024–25 travel data.
                    Use this to plan your vacation fund accurately.</p>
            </div>
            <div class="cost-table-wrap" data-aos="fade-up">
                <table class="cost-table">
                    <thead>
                        <tr>
                            <th>Destination</th>
                            <th>Budget (Couple)</th>
                            <th>Comfort (Couple)</th>
                            <th>Family of 4</th>
                            <th>Best Time to Visit</th>
                            <th>Visa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="dest-cell"><span class="dest-flag-sm">🇮🇳</span><span
                                        class="dest-name-sm">Goa / Andaman</span></div>
                            </td>
                            <td class="cost-low">₹25–40K</td>
                            <td class="cost-med">₹50–80K</td>
                            <td class="cost-med">₹70K–1.2L</td>
                            <td class="best-time">Nov – Feb</td>
                            <td><span class="tip-badge tip-green">No Visa</span></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="dest-cell"><span class="dest-flag-sm">🇹🇭</span><span
                                        class="dest-name-sm">Thailand / Bali</span></div>
                            </td>
                            <td class="cost-low">₹60–90K</td>
                            <td class="cost-med">₹1–1.5L</td>
                            <td class="cost-med">₹1.5–2.5L</td>
                            <td class="best-time">Nov – Mar</td>
                            <td><span class="tip-badge tip-green">Visa on Arrival</span></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="dest-cell"><span class="dest-flag-sm">🇸🇬</span><span
                                        class="dest-name-sm">Singapore</span></div>
                            </td>
                            <td class="cost-med">₹80K–1.2L</td>
                            <td class="cost-med">₹1.2–1.8L</td>
                            <td class="cost-high">₹2–3L</td>
                            <td class="best-time">Feb – Apr</td>
                            <td><span class="tip-badge tip-green">Visa Free</span></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="dest-cell"><span class="dest-flag-sm">🇦🇪</span><span
                                        class="dest-name-sm">Dubai / UAE</span></div>
                            </td>
                            <td class="cost-med">₹1–1.5L</td>
                            <td class="cost-med">₹1.5–2.5L</td>
                            <td class="cost-high">₹2.5–4L</td>
                            <td class="best-time">Nov – Mar</td>
                            <td><span class="tip-badge tip-yellow">Visa on Arrival</span></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="dest-cell"><span class="dest-flag-sm">🇯🇵</span><span
                                        class="dest-name-sm">Japan</span></div>
                            </td>
                            <td class="cost-med">₹1.5–2.5L</td>
                            <td class="cost-high">₹2.5–4L</td>
                            <td class="cost-high">₹4–6L</td>
                            <td class="best-time">Mar–Apr / Oct–Nov</td>
                            <td><span class="tip-badge tip-yellow">Visa Required (Easy)</span></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="dest-cell"><span class="dest-flag-sm">🇲🇻</span><span
                                        class="dest-name-sm">Maldives</span></div>
                            </td>
                            <td class="cost-high">₹1.2–2L</td>
                            <td class="cost-high">₹2.5–4L</td>
                            <td class="cost-high">₹3.5–6L</td>
                            <td class="best-time">Nov – Apr</td>
                            <td><span class="tip-badge tip-green">Visa Free</span></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="dest-cell"><span class="dest-flag-sm">🇪🇺</span><span
                                        class="dest-name-sm">Europe (Western)</span></div>
                            </td>
                            <td class="cost-high">₹2.5–4L</td>
                            <td class="cost-high">₹4–6L</td>
                            <td class="cost-high">₹6–10L</td>
                            <td class="best-time">Apr–Jun / Sep–Oct</td>
                            <td><span class="tip-badge tip-red">Schengen Visa</span></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="dest-cell"><span class="dest-flag-sm">🇺🇸</span><span
                                        class="dest-name-sm">USA</span></div>
                            </td>
                            <td class="cost-high">₹3–5L</td>
                            <td class="cost-high">₹5–8L</td>
                            <td class="cost-high">₹7–12L</td>
                            <td class="best-time">May–Sep</td>
                            <td><span class="tip-badge tip-red">B1/B2 Visa Needed</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p style="font-size:12px;color:var(--gray-500);margin-top:12px"><i class="fas fa-info-circle"
                    style="color:var(--red)"></i> Costs are indicative for 7–10 day trips including flights from
                Mumbai/Delhi, accommodation, food, and local transport. Actual costs vary by season, booking time, and
                travel style. Forex fluctuations can impact costs by ±10–15%.</p>
        </div>
    </section>

    <!-- ===================== BOOKING HACKS ===================== -->
    <section class="section booking-hacks" id="hacks">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <span class="section-label">Expert Travel Tips</span>
                <h2 class="section-title">10 Booking Hacks That <span>Save ₹50,000+</span> per Trip</h2>
                <p class="section-sub">Beyond saving — here's how our travel-savvy advisors help clients spend
                    significantly less on the same dream trips.</p>
            </div>
            <div class="bh-grid">
                <div data-aos="fade-right">
                    <div class="bh-body">
                        <p>The difference between an <strong>efficiently booked trip and a haphazardly booked
                                trip</strong> can be ₹50,000–₹1,00,000 on a ₹3–5 lakh international vacation. These are
                            not secrets — they're disciplined practices that most travellers ignore.</p>
                        <div class="bh-highlight">"Our clients who follow our booking strategy consistently save 20–30%
                            compared to last-minute or impulsive bookings — that's ₹60,000–₹1.5 lakh back in their
                            pocket on every major international trip."</div>
                        <p>We share these strategies as part of your vacation planning engagement — because building the
                            fund is only half the work. Spending it efficiently is the other half.</p>
                    </div>
                </div>
                <div data-aos="fade-left">
                    <div class="hack-cards">
                        <div class="hack-card">
                            <div class="hack-num">01</div>
                            <div>
                                <h4>Book Flights on Tuesday/Wednesday</h4>
                                <p>Airlines release price drops mid-week. Tuesday and Wednesday consistently show 10–15%
                                    lower fares than weekends.</p><span class="hack-save"><i
                                        class="fas fa-rupee-sign"></i> Save: ₹5,000–₹20,000 per booking</span>
                            </div>
                        </div>
                        <div class="hack-card">
                            <div class="hack-num">02</div>
                            <div>
                                <h4>Fly Indirect on Long Haul</h4>
                                <p>Connecting through Dubai, Doha, or Singapore to Europe/USA saves 25–40% vs direct
                                    flights with minimal extra travel time.</p><span class="hack-save"><i
                                        class="fas fa-rupee-sign"></i> Save: ₹20,000–₹60,000 per couple</span>
                            </div>
                        </div>
                        <div class="hack-card">
                            <div class="hack-num">03</div>
                            <div>
                                <h4>Travel in Shoulder Season</h4>
                                <p>Avoid peak season (Dec–Jan for winter, Jun–Aug for summer). Shoulder months (Apr–May,
                                    Sep–Oct) offer 30–40% lower costs.</p><span class="hack-save"><i
                                        class="fas fa-rupee-sign"></i> Save: ₹30,000–₹80,000 per trip</span>
                            </div>
                        </div>
                        <div class="hack-card">
                            <div class="hack-num">04</div>
                            <div>
                                <h4>Use Zero Forex Markup Cards Abroad</h4>
                                <p>Most debit/credit cards charge 3–5% forex markup. Cards like Niyo, IDFC, or specific
                                    travel cards charge 0%. On a ₹2L spend abroad, that's ₹6,000–₹10,000 saved.</p><span
                                    class="hack-save"><i class="fas fa-rupee-sign"></i> Save: ₹6,000–₹10,000 per
                                    trip</span>
                            </div>
                        </div>
                        <div class="hack-card">
                            <div class="hack-num">05</div>
                            <div>
                                <h4>Book Refundable Hotels — Then Rebook</h4>
                                <p>Book refundable hotels early, then watch for price drops closer to check-in. Cancel
                                    and rebook at the lower price. Works 40% of the time in off-peak periods.</p><span
                                    class="hack-save"><i class="fas fa-rupee-sign"></i> Save: ₹5,000–₹25,000 per
                                    trip</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== BUCKET LIST DESTINATIONS ===================== -->
    <section class="section bucket-list" id="bucketlist">
        <div class="container">
            <div class="section-header center" data-aos="fade-up">
                <span class="section-label">Bucket List Destinations</span>
                <h2 class="section-title">Top Picks for <span>Indian Travellers</span></h2>
                <p class="section-sub">The most popular and most financially achievable bucket-list destinations — with
                    the right savings plan, all of these are within reach.</p>
            </div>
            <div class="bl-grid">
                <div class="bl-card" data-aos="fade-up" data-aos-delay="0">
                    <div class="bl-img" style="background:linear-gradient(135deg,#1a1040,#2d1b69)">🗼</div>
                    <div class="bl-body">
                        <div class="bl-name">Paris, France</div>
                        <div class="bl-desc">The Eiffel Tower, Louvre, and café culture — the world's most visited city.
                        </div>
                        <div class="bl-tags"><span class="bl-tag">Romantic</span><span
                                class="bl-tag">Culture</span><span class="bl-tag">18 mo SIP</span></div>
                    </div>
                </div>
                <div class="bl-card" data-aos="fade-up" data-aos-delay="60">
                    <div class="bl-img" style="background:linear-gradient(135deg,#0d2a1a,#1a4a2a)">🌸</div>
                    <div class="bl-body">
                        <div class="bl-name">Kyoto, Japan</div>
                        <div class="bl-desc">Cherry blossoms, temples, geishas, and ramen — sensory overload in the best
                            way.</div>
                        <div class="bl-tags"><span class="bl-tag">Culture</span><span class="bl-tag">Nature</span><span
                                class="bl-tag">12 mo SIP</span></div>
                    </div>
                </div>
                <div class="bl-card" data-aos="fade-up" data-aos-delay="120">
                    <div class="bl-img" style="background:linear-gradient(135deg,#001a2e,#003366)">🗽</div>
                    <div class="bl-body">
                        <div class="bl-name">New York, USA</div>
                        <div class="bl-desc">Times Square, Central Park, Broadway, and the skyline that defines a
                            generation.</div>
                        <div class="bl-tags"><span class="bl-tag">City</span><span class="bl-tag">Shopping</span><span
                                class="bl-tag">24 mo SIP</span></div>
                    </div>
                </div>
                <div class="bl-card" data-aos="fade-up" data-aos-delay="180">
                    <div class="bl-img" style="background:linear-gradient(135deg,#0d1a2e,#1a2d4a)">🏔️</div>
                    <div class="bl-body">
                        <div class="bl-name">Swiss Alps</div>
                        <div class="bl-desc">Snow-capped peaks, chocolate, and Jungfraujoch — Europe's most dramatic
                            scenery.</div>
                        <div class="bl-tags"><span class="bl-tag">Nature</span><span
                                class="bl-tag">Adventure</span><span class="bl-tag">20 mo SIP</span></div>
                    </div>
                </div>
                <div class="bl-card" data-aos="fade-up" data-aos-delay="0">
                    <div class="bl-img" style="background:linear-gradient(135deg,#1a0a00,#4a2000)">🦁</div>
                    <div class="bl-body">
                        <div class="bl-name">Kenya Safari</div>
                        <div class="bl-desc">The Great Migration, Big Five, and Maasai Mara — nature's greatest
                            spectacle.</div>
                        <div class="bl-tags"><span class="bl-tag">Wildlife</span><span class="bl-tag">Unique</span><span
                                class="bl-tag">30 mo SIP</span></div>
                    </div>
                </div>
                <div class="bl-card" data-aos="fade-up" data-aos-delay="60">
                    <div class="bl-img" style="background:linear-gradient(135deg,#001a1a,#003333)">🌊</div>
                    <div class="bl-body">
                        <div class="bl-name">Maldives Luxury</div>
                        <div class="bl-desc">Overwater bungalows, coral reefs, and crystal waters — India's favourite
                            luxury escape.</div>
                        <div class="bl-tags"><span class="bl-tag">Luxury</span><span class="bl-tag">Romantic</span><span
                                class="bl-tag">12 mo SIP</span></div>
                    </div>
                </div>
                <div class="bl-card" data-aos="fade-up" data-aos-delay="120">
                    <div class="bl-img" style="background:linear-gradient(135deg,#1a1000,#3d2600)">🏛️</div>
                    <div class="bl-body">
                        <div class="bl-name">Rome & Amalfi Coast</div>
                        <div class="bl-desc">Ancient history, pasta, gelato, and cliff-top villages — Italy at its
                            finest.</div>
                        <div class="bl-tags"><span class="bl-tag">History</span><span class="bl-tag">Food</span><span
                                class="bl-tag">18 mo SIP</span></div>
                    </div>
                </div>
                <div class="bl-card" data-aos="fade-up" data-aos-delay="180">
                    <div class="bl-img" style="background:linear-gradient(135deg,#0a001a,#1a0033)">🌌</div>
                    <div class="bl-body">
                        <div class="bl-name">Northern Lights</div>
                        <div class="bl-desc">Norway or Iceland in winter — watching the Aurora Borealis is a
                            once-in-a-lifetime moment.</div>
                        <div class="bl-tags"><span class="bl-tag">Unique</span><span class="bl-tag">Winter</span><span
                                class="bl-tag">24 mo SIP</span></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== PROCESS ===================== -->
    <section class="section vac-process" id="process">
        <div class="container">
            <div class="section-header center" data-aos="fade-up">
                <span class="section-label">How It Works</span>
                <h2 class="section-title" style="color:white">From <span>Dream to Departure</span> — 5 Steps</h2>
                <p class="section-sub" style="color:rgba(255,255,255,.45);margin:0 auto">Our simple vacation planning
                    process gets your fund set up in under a week and running on autopilot until you're ready to book.
                </p>
            </div>
            <div class="vp-steps">
                <div class="vp-step active" data-aos="fade-up" data-aos-delay="0">
                    <div class="vp-num">✈️</div>
                    <h4>Dream It</h4>
                    <p>Tell us your dream destination, travel style, timeline, and number of travellers. No dream is too
                        big.</p>
                </div>
                <div class="vp-step" data-aos="fade-up" data-aos-delay="80">
                    <div class="vp-num">💰</div>
                    <h4>Estimate It</h4>
                    <p>We calculate realistic total trip cost — flights, hotels, activities, food, forex buffer, and
                        insurance.</p>
                </div>
                <div class="vp-step" data-aos="fade-up" data-aos-delay="160">
                    <div class="vp-num">📊</div>
                    <h4>Plan It</h4>
                    <p>We build your dedicated vacation SIP — the right fund, the right amount, the right timeline to
                        reach your target.</p>
                </div>
                <div class="vp-step" data-aos="fade-up" data-aos-delay="240">
                    <div class="vp-num">🤖</div>
                    <h4>Automate It</h4>
                    <p>SIP set up on autopilot. Monthly contribution, automatic growth, and a clear "ready to book"
                        target date.</p>
                </div>
                <div class="vp-step" data-aos="fade-up" data-aos-delay="320">
                    <div class="vp-num">🌍</div>
                    <h4>Travel It</h4>
                    <p>Fund hits target → we guide optimal booking strategy → you travel debt-free, guilt-free, and
                        joyfully.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== CASE STUDY ===================== -->
    <section class="section case-study" id="casestudy">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <span class="section-label">Real Client Story</span>
                <h2 class="section-title">From Credit Card Regret to <span>Debt-Free Europe</span></h2>
                <p class="section-sub">How the Sharma family transformed their vacation approach — and now travel every
                    year without financial stress.</p>
            </div>
            <div class="cs-grid">
                <div class="cs-card" data-aos="fade-right">
                    <div class="cs-header">
                        <div class="cs-avatar">S</div>
                        <div>
                            <div class="cs-name">The Sharma Family</div>
                            <div class="cs-role">IT Couple + 2 Kids · Pune · Client Since 2022</div>
                        </div>
                    </div>
                    <div class="cs-body">
                        <div class="cs-row">
                            <div class="cs-stat">
                                <div class="cs-stat-label">Trips Before WB</div>
                                <div class="cs-stat-val">1 every 3 yrs</div>
                            </div>
                            <div class="cs-stat">
                                <div class="cs-stat-label">Trips After WB</div>
                                <div class="cs-stat-val green">1–2 per year ✈️</div>
                            </div>
                            <div class="cs-stat">
                                <div class="cs-stat-label">Debt Used for Travel</div>
                                <div class="cs-stat-val green">₹0 Now</div>
                            </div>
                            <div class="cs-stat">
                                <div class="cs-stat-label">Saved on Bookings</div>
                                <div class="cs-stat-val">₹1.4L in 3 Yrs</div>
                            </div>
                        </div>
                        <p class="cs-quote">"We used to dread coming back from vacations because of the credit card
                            bill. After Wealth Bridge set up our dedicated vacation SIPs, we took Europe last year
                            debt-free, Japan this year debt-free, and we're already 72% funded for USA next year.
                            Vacations are joyful again — not stressful."</p>
                    </div>
                </div>
                <div data-aos="fade-left">
                    <p
                        style="font-size:12px;font-weight:700;letter-spacing:2px;text-transform:uppercase;color:var(--gray-500);margin-bottom:10px">
                        Their Vacation Transformation Journey</p>
                    <div class="cs-timeline">
                        <div class="cst-item">
                            <div class="cst-dot-col">
                                <div class="cst-dot"></div>
                                <div class="cst-line"></div>
                            </div>
                            <div>
                                <div class="cst-year">2021 · Before WB</div>
                                <div class="cst-title">Bali on Credit — ₹1.8L Debt</div>
                                <div class="cst-desc">Spontaneous Bali trip funded entirely on credit card. Spent 8
                                    months repaying ₹2.2L (with interest). Trip regret overshadowed the memories.</div>
                            </div>
                        </div>
                        <div class="cst-item">
                            <div class="cst-dot-col">
                                <div class="cst-dot"></div>
                                <div class="cst-line"></div>
                            </div>
                            <div>
                                <div class="cst-year">2022 · Onboarding</div>
                                <div class="cst-title">3 Vacation SIPs Set Up</div>
                                <div class="cst-desc">Set up dedicated SIPs: ₹12K/mo for Europe (18 months), ₹8K/mo for
                                    Japan (12 months), ₹6K/mo for USA (36 months). Total: ₹26K/mo automated.</div>
                            </div>
                        </div>
                        <div class="cst-item">
                            <div class="cst-dot-col">
                                <div class="cst-dot"></div>
                                <div class="cst-line"></div>
                            </div>
                            <div>
                                <div class="cst-year">2023 · Japan Trip ✈️</div>
                                <div class="cst-title">Cherry Blossom Season — Debt-Free</div>
                                <div class="cst-desc">Japan fund hit ₹2.8L. Booked flights 4 months ahead (saved ₹32K).
                                    Zero credit card debt. First vacation ever fully pre-funded. Joyful return home.
                                </div>
                            </div>
                        </div>
                        <div class="cst-item">
                            <div class="cst-dot-col">
                                <div class="cst-dot"></div>
                                <div class="cst-line"></div>
                            </div>
                            <div>
                                <div class="cst-year">2024 · Europe Trip ✈️</div>
                                <div class="cst-title">15 Days — France, Italy, Switzerland</div>
                                <div class="cst-desc">Europe fund ₹4.2L. Used forex card (saved ₹18K on conversion).
                                    Early hotel bookings saved ₹28K. Family of 4 — complete Europe circuit, debt-free.
                                </div>
                            </div>
                        </div>
                        <div class="cst-item">
                            <div class="cst-dot-col">
                                <div class="cst-dot"
                                    style="background:#4ade80;box-shadow:0 0 0 4px rgba(74,222,128,.2)"></div>
                                <div class="cst-line"></div>
                            </div>
                            <div>
                                <div class="cst-year" style="color:#15803d">2026 · USA Fund 72% Ready 🎯</div>
                                <div class="cst-title">USA Trip on Track for 2027</div>
                                <div class="cst-desc">USA fund at ₹4.2L (target ₹5.8L). 10 months to go. Disney World +
                                    NYC + Grand Canyon all budgeted. Zero debt plan intact.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== WHO IS IT FOR ===================== -->
    <section class="section for-whom" id="who">
        <div class="container">
            <div class="section-header center" data-aos="fade-up">
                <span class="section-label">Who We Help</span>
                <h2 class="section-title">Vacation Planning for <span>Every Type of Traveller</span></h2>
            </div>
            <div class="fw-grid">
                <div class="fw-card" data-aos="fade-up" data-aos-delay="0">
                    <div class="fw-emoji">👨‍👩‍👧‍👦</div>
                    <h3>Family Travellers</h3>
                    <p>Annual family vacations don't have to break the bank. We build multi-trip vacation funds that
                        fund domestic trips yearly and international trips every 2–3 years.</p>
                    <div class="fw-tags"><span class="fw-tag">Annual Trips</span><span
                            class="fw-tag">Kid-Friendly</span><span class="fw-tag">Family Budget</span></div>
                </div>
                <div class="fw-card" data-aos="fade-up" data-aos-delay="60">
                    <div class="fw-emoji">💑</div>
                    <h3>Couples & Honeymooners</h3>
                    <p>From the honeymoon of your dreams to anniversary getaways every year — we plan romantic travel
                        that you can both enjoy without financial guilt.</p>
                    <div class="fw-tags"><span class="fw-tag">Honeymoon Fund</span><span class="fw-tag">Anniversary
                            Trip</span><span class="fw-tag">Romantic</span></div>
                </div>
                <div class="fw-card" data-aos="fade-up" data-aos-delay="120">
                    <div class="fw-emoji">✈️</div>
                    <h3>Frequent Travellers</h3>
                    <p>Travel multiple times a year? We build a perpetual vacation fund that continuously replenishes —
                        so you're always funded for your next adventure.</p>
                    <div class="fw-tags"><span class="fw-tag">Multiple Trips/Year</span><span class="fw-tag">Perpetual
                            Fund</span><span class="fw-tag">Optimised</span></div>
                </div>
                <div class="fw-card" data-aos="fade-up" data-aos-delay="0">
                    <div class="fw-emoji">🎯</div>
                    <h3>Bucket List Travellers</h3>
                    <p>That one big dream trip — Northern Lights, African Safari, or the USA road trip — that seems
                        financially out of reach. We make it achievable with a 24–36 month plan.</p>
                    <div class="fw-tags"><span class="fw-tag">Dream Trip</span><span class="fw-tag">Long-Term
                            Fund</span><span class="fw-tag">Once-in-Lifetime</span></div>
                </div>
                <div class="fw-card" data-aos="fade-up" data-aos-delay="60">
                    <div class="fw-emoji">🎓</div>
                    <h3>Young Professionals</h3>
                    <p>Just started earning and want to see the world? We build your first vacation SIP alongside your
                        emergency fund — so you can travel young without sacrificing financial security.</p>
                    <div class="fw-tags"><span class="fw-tag">First Trip Abroad</span><span class="fw-tag">Budget
                            Travel</span><span class="fw-tag">Young</span></div>
                </div>
                <div class="fw-card" data-aos="fade-up" data-aos-delay="120">
                    <div class="fw-emoji">🌟</div>
                    <h3>Luxury Travellers</h3>
                    <p>Business class flights, 5-star resorts, and private experiences — your luxury travel dreams are
                        entirely achievable with the right 2–3 year savings plan. We build it for you.</p>
                    <div class="fw-tags"><span class="fw-tag">Business Class</span><span
                            class="fw-tag">5-Star</span><span class="fw-tag">Premium Fund</span></div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== TESTIMONIALS ===================== -->
    <section class="section vac-testimonials" id="testimonials">
        <div class="container">
            <div class="section-header center" data-aos="fade-up">
                <span class="section-label">Happy Travellers</span>
                <h2 class="section-title">Real Trips, <span>Zero Debt</span></h2>
            </div>
            <div class="vt-grid">
                <div class="vt-card" data-aos="fade-up" data-aos-delay="0">
                    <div class="vt-dest">🇪🇺</div>
                    <div class="vt-stars">★★★★★</div>
                    <p class="vt-text">"We've always wanted to do Europe but kept postponing because of cost. Wealth
                        Bridge set up a ₹15,000/month SIP and we were ready in 22 months. We did 12 days — Paris,
                        Switzerland, Italy — completely debt-free. Coming home was joyful, not stressful. Game-changer."
                    </p>
                    <div class="vt-author">
                        <div class="vt-avatar">R</div>
                        <div>
                            <div class="vt-name">Rajesh & Anita Mehta</div>
                            <div class="vt-role">IT Couple · Bangalore · Europe 2025</div>
                        </div>
                    </div>
                </div>
                <div class="vt-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="vt-dest">🇯🇵</div>
                    <div class="vt-stars">★★★★★</div>
                    <p class="vt-text">"Japan during cherry blossom has been my wife's dream for 10 years. We always
                        said 'next year'. WB set up a ₹8,000/month SIP and we were ready in 14 months. We flew business
                        class (upgraded on miles!), stayed 9 days, spent freely. Best trip of our lives — and we came
                        home with ₹0 debt."</p>
                    <div class="vt-author">
                        <div class="vt-avatar">K</div>
                        <div>
                            <div class="vt-name">Kiran & Meera Joshi</div>
                            <div class="vt-role">Business Owner · Mumbai · Japan 2024</div>
                        </div>
                    </div>
                </div>
                <div class="vt-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="vt-dest">🇺🇸</div>
                    <div class="vt-stars">★★★★★</div>
                    <p class="vt-text">"USA with kids seemed impossible at ₹8–10L. But WB broke it down: ₹18K/month over
                        36 months. We just returned from Disney World, NYC, and Grand Canyon — family of 4, 18 days. The
                        kids are over the moon. And we paid every rupee upfront, no loans. That peace of mind is worth
                        everything."</p>
                    <div class="vt-author">
                        <div class="vt-avatar">P</div>
                        <div>
                            <div class="vt-name">Pradeep & Sunita Iyer</div>
                            <div class="vt-role">Doctor Couple · Chennai · USA 2025</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== FAQ ===================== -->
    <section class="section faq-section" id="faq">
        <div class="container">
            <div class="faq-grid">
                <div class="faq-intro" data-aos="fade-right">
                    <span class="section-label">Common Questions</span>
                    <h2 class="section-title">Vacation Planning <span>FAQs</span></h2>
                    <p class="section-sub" style="margin-bottom:28px">Everything you need to know about funding your
                        dream trip without debt.</p>
                    <a href="#cta" class="btn btn-primary">Start My Vacation Fund <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="faq-list" data-aos="fade-left">
                    <div class="faq-item open">
                        <div class="faq-q"><span>How is vacation planning different from just saving in a bank
                                account?</span><i class="fas fa-plus"></i></div>
                        <div class="faq-a">A regular savings account earns 3–4% interest — barely keeping up with
                            inflation. Our vacation fund strategy uses liquid mutual funds (7–8% returns), arbitrage
                            funds (7–9%), and short-duration debt funds (7–9%) — all with instant or T+1 redemption when
                            you're ready to book. You earn 2–3× more interest on the same savings, meaning you either
                            reach your target faster or need to save less each month. The fund is also ring-fenced — you
                            can see exactly how much travel money you have, separate from your main savings.</div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-q"><span>What if I need to cancel or postpone my trip?</span><i
                                class="fas fa-plus"></i></div>
                        <div class="faq-a">No problem — that's the beauty of liquid mutual funds. Unlike FDs, there's no
                            lock-in and no penalty. If your trip is postponed, your vacation fund simply continues
                            growing until you're ready. If you cancel entirely, you redeem the fund and the money goes
                            straight back to your bank account within 1 working day (T+1 redemption for liquid funds).
                            We also recommend holding refundable flight and hotel bookings until closer to travel date
                            for exactly this reason.</div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-q"><span>How much should I save each month for an international trip?</span><i
                                class="fas fa-plus"></i></div>
                        <div class="faq-a">Use our Vacation Fund Calculator above for a precise answer. As a rough
                            guide: for a couple's international trip costing ₹3L, saving ₹10,000/month for 27 months
                            (with 8% returns) gets you there. For a ₹5L trip, ₹14,000/month for 30 months. For a ₹8L
                            family trip, ₹18,000/month for 36 months. The key is starting early — the more time you give
                            the fund, the less you need to save each month because returns do more of the work.</div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-q"><span>Can I have multiple vacation funds running simultaneously?</span><i
                                class="fas fa-plus"></i></div>
                        <div class="faq-a">Absolutely — and we recommend it. Most of our travel-loving clients run 2–3
                            vacation SIPs simultaneously: one for an annual domestic trip (smaller, shorter), one for a
                            biennial international trip (medium, 18 months), and sometimes one for a bucket-list trip
                            (large, 36 months). Each fund is separate, labelled, and visible — so you always know
                            exactly how much is saved for each trip. The total monthly commitment across all funds is
                            typically ₹15,000–₹30,000/month for active travellers.</div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-q"><span>What's the best instrument for a vacation fund?</span><i
                                class="fas fa-plus"></i></div>
                        <div class="faq-a">It depends on your timeline: For trips less than 6 months away — Liquid
                            Mutual Funds (instant redemption, 7–8% returns, no exit load). For 6–18 months — Arbitrage
                            Funds (low risk, equity taxation after 12 months, 7–9% returns). For 18–36 months —
                            Short-Duration Debt Funds or Conservative Hybrid Funds (higher returns, T+1–T+3 redemption).
                            We set up the right instrument for each timeline automatically — you don't need to choose or
                            switch. As your travel date approaches, we shift to more liquid options.</div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-q"><span>Do you help with actual booking strategy and forex?</span><i
                                class="fas fa-plus"></i></div>
                        <div class="faq-a">Yes — this is part of the vacation planning service. When your fund is ready,
                            we provide a booking strategy: optimal booking windows (3–6 months for flights, 2–4 months
                            for hotels), which travel credit cards to use, forex timing guidance, travel insurance
                            recommendations, and a checklist of cost optimisations. Many clients save ₹30,000–₹80,000
                            through better booking decisions — making the entire advisory service effectively free.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== CTA BAND ===================== -->
    <section class="cta-band" id="cta">
        <div class="container">
            <div class="cta-content" data-aos="fade-up">
                <span class="section-label" style="display:block;text-align:center">Your Next Adventure Starts
                    Today</span>
                <h2 class="cta-title">Start Saving Now.<br>Travel <span>Debt-Free</span> — Forever.</h2>
                <p class="cta-desc">Set up your dedicated vacation fund today. Takes 15 minutes. Runs on autopilot. And
                    you'll travel more, spend more freely, and return home without financial guilt — every single time.
                </p>
                <div class="cta-actions">
                    <a href="wealth-bridge.html#contact" class="btn btn-primary"
                        style="padding:16px 36px;font-size:15px">Start My Vacation Fund <i
                            class="fas fa-arrow-right"></i></a>
                    <a href="tel:+918000000000" class="btn btn-ghost" style="padding:16px 28px;font-size:15px"><i
                            class="fas fa-phone"></i> +91 8000 000 000</a>
                </div>
                <div class="cta-trust">
                    <div class="cta-trust-item"><i class="fas fa-shield-alt"></i> SEBI Registered Advisor</div>
                    <div class="cta-trust-item"><i class="fas fa-plane"></i> 4,200+ Trips Funded</div>
                    <div class="cta-trust-item"><i class="fas fa-rupee-sign"></i> ₹0 Debt Used</div>
                    <div class="cta-trust-item"><i class="fas fa-lock"></i> 100% Transparent</div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== RELATED SERVICES ===================== -->
    <section class="section related">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <span class="section-label">Explore More</span>
                <h2 class="section-title">Related <span>Advisory Services</span></h2>
            </div>
            <div class="related-grid">
                <div class="rel-card" data-aos="fade-up" data-aos-delay="0">
                    <div class="rc-icon"><i class="fas fa-chart-line"></i></div>
                    <h4>Investment Planning</h4>
                    <p>Grow your wealth systematically — the foundation for all your lifestyle and life goals.</p>
                    <a href="investment-planning.html" class="rc-link">Explore <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="rel-card" data-aos="fade-up" data-aos-delay="60">
                    <div class="rc-icon"><i class="fas fa-graduation-cap"></i></div>
                    <h4>Child Education Planning</h4>
                    <p>Fund your child's education alongside your travel dreams — both are achievable together.</p>
                    <a href="#" class="rc-link">Explore <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="rel-card" data-aos="fade-up" data-aos-delay="120">
                    <div class="rc-icon"><i class="fas fa-ring"></i></div>
                    <h4>Child Wedding Planning</h4>
                    <p>Plan your child's dream wedding — separate from your travel fund, growing simultaneously.</p>
                    <a href="#" class="rc-link">Explore <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="rel-card" data-aos="fade-up" data-aos-delay="180">
                    <div class="rc-icon"><i class="fas fa-wallet"></i></div>
                    <h4>Personal Finance Planning</h4>
                    <p>Manage income, expenses, and savings goals holistically — travel as part of the big picture.</p>
                    <a href="#" class="rc-link">Explore <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

<?php include_once ('elements/footer.php'); ?>