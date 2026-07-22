<?php 
// Because this file lives in a subdirectory, we point the header include up one level
include '../includes/header.php'; 
?>

  <main id="main-content">
    <section class="hero hvac-page-hero">
      <div class="hero-media" aria-hidden="true"></div>
      <div class="hero-overlay"></div>
      <span class="hero-outline-word" aria-hidden="true">COMFORT</span>
      <svg class="architectural-linework hero-linework" viewBox="0 0 900 420" aria-hidden="true" focusable="false">
        <path d="M18 354H184L260 278L342 354H500L585 244L690 354H882" />
        <path d="M386 292V155L445 112V292M470 292V82L536 56V292" />
      </svg>
      <div class="container hero-grid">
        <div class="hero-copy">
          <p class="eyebrow">Local Heating & Cooling Services</p>
          <h1>HVAC Services for El Paso <em>Properties.</em></h1>
          <p class="hero-lead">Professional HVAC installation, replacement, repair, and maintenance designed to keep homes and businesses comfortable and efficient.</p>
          <div class="hero-buttons">
            <a class="button" href="tel:+19152213516">Call (915) 221-3516</a>
            <a class="button button-ghost" href="#contact">Request Service</a>
          </div>
          <div class="hero-trust"><span>El Paso, Texas</span><span>Residential & Commercial</span><span>Installation, Repair & Maintenance</span></div>
        </div>
        <aside class="hero-card hero-card-offset">
          <div class="hero-card-index" aria-hidden="true">HVAC / 01</div>
          <p class="card-kicker">Need HVAC help?</p>
          <h2>Tell us what is happening.</h2>
          <p>Share the property type, system issue, and preferred contact time. Our team will follow up to discuss the next step.</p>
          <a href="#contact">Start an HVAC request <span>↗</span></a>
        </aside>
      </div>
    </section>

    <section class="section services" id="hvac-services">
      <div class="container">
        <div class="section-heading centered">
          <p class="eyebrow">HVAC Services in El Paso</p>
          <h2>Practical Solutions for Comfort, Reliability, and Efficiency</h2>
          <p>We help property owners address immediate heating and cooling needs while planning for dependable long-term system performance.</p>
        </div>
        <div class="process-grid hvac-service-grid">
          <article><span>01</span><h3>Installation & Replacement</h3><p>New HVAC systems and equipment upgrades selected around the property’s size, use, and comfort needs.</p></article>
          <article><span>02</span><h3>Repairs</h3><p>Diagnosis and repair for common heating and cooling issues affecting performance or comfort.</p></article>
          <article><span>03</span><h3>Preventive Maintenance</h3><p>Routine service intended to reduce unexpected problems and help extend equipment life.</p></article>
          <article><span>04</span><h3>Efficiency Guidance</h3><p>Practical recommendations for improving energy use and maintaining more consistent indoor temperatures.</p></article>
        </div>
      </div>
    </section>

    <section class="section about">
      <div class="container about-grid">
        <div class="about-copy">
          <p class="eyebrow">Why Property Owners Choose RS</p>
          <h2>HVAC Support Connected to Broader Property Experience</h2>
          <p>Because RS also works across remodeling, construction, and real estate solutions, our team understands how heating and cooling needs connect to the larger condition and goals of a property.</p>
          <div class="benefit-list">
            <div><span>✓</span><p>Residential and commercial service</p></div>
            <div><span>✓</span><p>Local service for El Paso and surrounding communities</p></div>
            <div><span>✓</span><p>Clear recommendations based on the property’s needs</p></div>
            <div><span>✓</span><p>Support for homeowners, investors, and property managers</p></div>
          </div>
        </div>
        <div class="hvac-feature-visual"><div class="hvac-feature-image" role="img" aria-label="HVAC equipment service in El Paso"></div><div class="hvac-image-frame" aria-hidden="true"></div><span class="hvac-vertical-label" aria-hidden="true">Service / Comfort / Efficiency</span></div>
      </div>
    </section>

    <section class="section process">
      <div class="container">
        <div class="section-heading centered light"><p class="eyebrow">What to Expect</p><h2>A Simple HVAC Service Process</h2></div>
        <div class="process-grid">
          <article><span>01</span><h3>Request Service</h3><p>Tell us about the property and the heating or cooling issue.</p></article>
          <article><span>02</span><h3>Review the Need</h3><p>We gather the details needed to recommend the appropriate next step.</p></article>
          <article><span>03</span><h3>Complete the Work</h3><p>Installation, repair, replacement, or maintenance is coordinated efficiently.</p></article>
          <article><span>04</span><h3>Confirm Performance</h3><p>We review the completed work and answer questions about continued system care.</p></article>
        </div>
      </div>
    </section>

    <section class="section contact" id="contact">
      <div class="container contact-grid">
        <div class="contact-copy">
          <p class="eyebrow dark">Request HVAC Service</p>
          <h2>Tell Us What Your Property Needs</h2>
          <p>Provide a few details and the team can follow up about availability and the appropriate next step.</p>
          <div class="contact-details"><a href="tel:+19152213516"><span>Call</span>(915) 221-3516</a><p><span>Service Area</span>El Paso, Texas and surrounding communities</p></div>
        </div>
        
        <?php 
        // This pulls in your fully secured shared contact form component 
        // complete with Cloudflare Turnstile and the token engine.
        include '../includes/contact-form.php'; 
        ?>

      </div>
    </section>
  </main>

<?php 
// Pulls the shared footer component 
include '../includes/footer.php'; 
?>