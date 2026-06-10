<!-- ============ FOOTER ============ -->
<footer class="footer">
    <div class="footer-top">
      <div class="container">
        <div class="footer-grid">
          <div class="footer-brand">
            <div class="footer-logo">
              <div class="logo-icon">
                <img src="<?php echo UrlHelper::asset('img/wealth-bridge-white-logo.png?v=0.001'); ?>" alt="WealthBridge">
              </div>
            </div>
            <p class="footer-desc">Your trusted SEBI-registered financial advisory partner. Building wealth, securing
              futures, bridging dreams — since 2006.</p>
            <div class="footer-socials">
              <a href="#" class="footer-social" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
              <a href="#" class="footer-social" aria-label="Twitter"><i class="fab fa-x-twitter"></i></a>
              <a href="#" class="footer-social" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
              <a href="#" class="footer-social" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
              <a href="#" class="footer-social" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
            </div>
          </div>
          <div class="footer-col">
            <h4>Who We Are</h4>
            <ul>
              <li><a href="our-history">Our History</a></li>
              <li><a href="who-we-serve">Who We Serve</a></li>
              <li><a href="leadership-team">Leadership Team</a></li>
              <li><a href="client-testimonials">Client Testimonials</a></li>
              <li><a href="our-approach">Our Approach</a></li>
              <li><a href="vision-mission">Vision & Mission</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>Our Services</h4>
            <ul>
              <li><a href="investment-planning">Investment Planning</a></li>
              <li><a href="retirement-planning">Retirement Planning</a></li>
              <li><a href="nri-financial-advisory">NRI Financial Advisory</a></li>
              <li><a href="financial-planning-couples">Planning for Couples</a></li>
              <li><a href="financial-planning-women">Planning for Women</a></li>
              <li><a href="planning-for-men">Planning for Men</a></li>
              <li><a href="wealth-management">Wealth Management</a></li>
              <li><a href="life-insurance">Life Insurance</a></li>
              <li><a href="tax-planning">Tax Planning</a></li>
              <li><a href="real-estate">Real Estate</a></li>
              <li><a href="business-planning">Business Planning</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>Resources</h4>
            <ul>
              <li><a href="investment-calculator">Investment Calculator</a></li>
              <li><a href="retirement-calculator">Retirement Calc.</a></li>
              <li><a href="tax-calculator">Tax Calculator</a></li>
              <li><a href="loan-calculator">Loan Calculator</a></li>
              <li><a href="blog">Blog</a></li>
              <li><a href="market-updates">Market Updates</a></li>
              <li><a href="events-webinars">Events & Webinars</a></li>
              <li><a href="faqs">FAQs</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>Legal</h4>
            <ul>
              <li><a href="sebi-disclosure">SEBI Disclosure</a></li>
              <li><a href="beware-of-imposters">Beware of Imposters</a></li>
              <li><a href="privacy-policy">Privacy Policy</a></li>
              <li><a href="terms-of-service">Terms of Service</a></li>
              <li><a href="disclaimer">Disclaimer</a></li>
              <li><a href="grievance-redressal">Grievance Redressal</a></li>
              <li><a href="pricing">Pricing</a></li>
              <li><a href="contact">Contact</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-mid">
      <div class="container">
        <div class="footer-sebi">
          <p><strong>SEBI Registration:</strong> Wealth Bridge Financial Advisory | SEBI Registered Investment Adviser |
            Registration No.: INA000XXXXXX | Validity: Perpetual | Type: Individual / Non-Individual | Registered
            Office: 302, Wealth Tower, Ring Road, Surat, Gujarat — 395002 | CIN: UXXXXXXGJ2006PTCXXXXXX | BASL
            Membership No.: BXXXXXXX</p>
          <br>
          <p><strong>Disclaimer:</strong> Investments in securities market are subject to market risks. Read all the
            related documents carefully before investing. Registration granted by SEBI and certification from NISM in no
            way guarantee performance of the intermediary or provide any assurance of returns to investors. Past
            performance is not indicative of future results.</p>
        </div>
      </div>
    </div>
    <div class="footer-bottom container">
      <p class="footer-copy">© 2026 Wealth Bridge Financial Advisory. All rights reserved.</p>
      <div class="footer-links">
        <a href="#">Privacy Policy</a>
        <a href="#">Terms of Use</a>
        <a href="#">Disclaimer</a>
        <a href="#">Sitemap</a>
      </div>
    </div>
  </footer>

  <!-- BACK TO TOP -->
  <button class="back-to-top" id="backToTop" aria-label="Back to top">
    <i class="fas fa-arrow-up"></i>
  </button>

  <script>
      document.getElementById('sebiNavLink').addEventListener('click', function(e) {
          e.preventDefault();

          Swal.fire({
            html: `
              <div style="display:flex; align-items:flex-start; gap:16px; text-align:left; padding:8px 0;">
                <div style="font-size:40px; color:var(--red); flex-shrink:0;">
                  <i class="fas fa-shield-alt"></i>
                </div>
                <div>
                  <h3 style="margin:0 0 8px; font-size:18px; color:var(--red);">
                    SEBI Registered Investment Advisor
                  </h3>
                  <p style="margin:0 0 16px; font-size:14px; color:#555; line-height:1.6;">
                    Wealth Bridge Financial Advisory is registered with the Securities and Exchange Board of India (SEBI) as an Investment Adviser under the SEBI (Investment Advisers) Regulations, 2013.
                  </p>
                  <div style="background:#f0f4f8; border-radius:8px; padding:12px 16px; display:inline-block;">
                    <div style="font-size:11px; color:#888; text-transform:uppercase; letter-spacing:1px; margin-bottom:4px;">
                      Registration Number
                    </div>
                    <div style="font-size:20px; font-weight:700; color:var(--red); letter-spacing:2px;">
                      INA000XXXXXX
                    </div>
                  </div>
                </div>
              </div>
            `,
            showConfirmButton: true,
            confirmButtonText: 'View Certificate',
            confirmButtonColor: 'var(--red)',
            showCancelButton: true,
            cancelButtonText: 'Close',
            width: 520,
            customClass: {
              popup: 'sebi-popup'
            }
          }).then((result) => {
            if (result.isConfirmed) {
              // Replace '#' with your actual certificate URL
              window.open('#', '_blank');
            }
          });
      });
  </script>

  <script>
    document.getElementById('imposterNavLink').addEventListener('click', function(e) {
        e.preventDefault();

        Swal.fire({
          html: `
            <div style="text-align:left; padding:4px 0;">

              <!-- Header -->
              <div style="display:flex; align-items:center; gap:12px; margin-bottom:16px;">
                <div style="font-size:36px; line-height:1;">⚠️</div>
                <h3 style="margin:0; font-size:20px; color:var(--red);">Beware of Imposters!</h3>
              </div>

              <!-- Warning box -->
              <div style="background:#fffbeb; border-left:4px solid var(--red); border-radius:6px; padding:14px 16px; margin-bottom:16px; font-size:14px; color:#555; line-height:1.7;">
                We have noticed fraudulent entities falsely claiming to represent
                <strong style="color:#1a1a1a;">Wealth Bridge Financial Advisory</strong>.
                These imposters may contact you via <strong style="color:#1a1a1a;">WhatsApp, Telegram, or calls</strong>
                promising guaranteed returns.
              </div>

              <!-- Key rule -->
              <div style="background:#fef2f2; border-left:4px solid var(--red); border-radius:6px; padding:12px 16px; margin-bottom:16px; font-size:14px; color:var(--red); font-weight:600;">
                🚫 Wealth Bridge never guarantees returns or asks for money via personal accounts.
              </div>

              <!-- Channels -->
              <p style="font-size:13px; color:#777; margin:0 0 12px;">
                Always verify through our <strong style="color:#1a1a1a;">official channels only</strong> and report suspicious activity immediately.
              </p>

              <!-- Fraud contact methods -->
              <div style="display:flex; gap:10px; flex-wrap:wrap; margin-bottom:4px;">
                <span style="background:#fff7ed; color:var(--red); font-size:12px; padding:4px 10px; border-radius:20px; border:1px solid #fed7aa;">
                  <i class="fab fa-whatsapp"></i> WhatsApp Fraud
                </span>
                <span style="background:#fff7ed; color:var(--red); font-size:12px; padding:4px 10px; border-radius:20px; border:1px solid #fed7aa;">
                  <i class="fab fa-telegram"></i> Telegram Fraud
                </span>
                <span style="background:#fff7ed; color:var(--red); font-size:12px; padding:4px 10px; border-radius:20px; border:1px solid #fed7aa;">
                  <i class="fas fa-phone"></i> Call Fraud
                </span>
              </div>

            </div>
          `,
          showConfirmButton: true,
          confirmButtonText: '🚨 Report Fraud',
          confirmButtonColor: 'var(--red)',
          showCancelButton: true,
          cancelButtonText: 'Close',
          width: 540,
          iconColor: 'red',
          customClass: {
            popup: 'imposter-popup'
          }
        }).then((result) => {
          if (result.isConfirmed) {
            // Scrolls to your #contact section and closes popup
            document.querySelector('#contact').scrollIntoView({ behavior: 'smooth' });
          }
        });
    });
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- ===== AOS + JS ===== -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
  <script src="assets/js/scripts.js"></script>

</body>

</html>