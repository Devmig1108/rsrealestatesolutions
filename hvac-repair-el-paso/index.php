<?php

/*
|--------------------------------------------------------------------------
| HVAC Google Ads Landing Page
|--------------------------------------------------------------------------
|
| Recommended URL:
| https://rsrealstatesolutions.com/hvac-repair-el-paso/
|
| These variables can be used by your shared header.php file for metadata.
| The page also loads its dedicated stylesheet below in case the header
| does not currently support page-specific stylesheet variables.
|
*/

$pageTitle = 'HVAC Repair in El Paso, TX | RS Real Estate Solutions';

$metaDescription = 'Request HVAC repair, installation, replacement, or maintenance in El Paso, Texas. Call RS Real Estate Solutions or schedule service online.';

$canonicalUrl = 'https://rsrealstatesolutions.com/hvac-repair-el-paso/';

$ogTitle = 'HVAC Repair in El Paso | RS Real Estate Solutions';

$ogDescription = 'Professional HVAC repair and service for homes and commercial properties in El Paso and surrounding communities.';

$robots = 'noindex, nofollow';

/*
|--------------------------------------------------------------------------
| Why noindex?
|--------------------------------------------------------------------------
|
| This page is intended specifically for Google Ads traffic.
| Your existing HVAC service page can remain the primary organic SEO page.
|
| Change this to "index, follow" if you later decide you want this landing
| page included in organic search results.
|
*/

include '../includes/header.php';

?>

<link rel="stylesheet" href="/assets/css/hvac-landing.css">

<script>
    /*
     * This class allows the dedicated landing-page CSS to simplify
     * the shared website header and remove unnecessary distractions.
     */
    document.body.classList.add('hvac-landing-body');
</script>

<main id="main-content" class="hvac-lp">

    <!-- =========================================================
         HERO
    ========================================================== -->

    <section class="hvac-lp-hero" aria-labelledby="hvac-hero-title">

        <div class="hvac-lp-hero-media" aria-hidden="true"></div>
        <div class="hvac-lp-hero-overlay" aria-hidden="true"></div>
        <div class="hvac-lp-hero-glow" aria-hidden="true"></div>

        <div class="container hvac-lp-hero-grid">

            <div class="hvac-lp-hero-copy">

                <div class="hvac-lp-location-label">
                    <span class="hvac-lp-location-dot" aria-hidden="true"></span>
                    HVAC Service in El Paso, Texas
                </div>

                <h1 id="hvac-hero-title">
                    Get Your Property
                    <span>Comfortable Again.</span>
                </h1>

                <p class="hvac-lp-hero-lead">
                    Is your air conditioner blowing warm air, making unusual
                    noises, or not turning on? Request professional HVAC repair,
                    installation, replacement, or maintenance from a local
                    El Paso service team.
                </p>

                <div class="hvac-lp-hero-benefits" aria-label="Service highlights">

                    <div class="hvac-lp-benefit">
                        <span class="hvac-lp-check" aria-hidden="true">✓</span>
                        <span>Residential and commercial service</span>
                    </div>

                    <div class="hvac-lp-benefit">
                        <span class="hvac-lp-check" aria-hidden="true">✓</span>
                        <span>Repair, replacement and installation</span>
                    </div>

                    <div class="hvac-lp-benefit">
                        <span class="hvac-lp-check" aria-hidden="true">✓</span>
                        <span>El Paso and surrounding communities</span>
                    </div>

                    <div class="hvac-lp-benefit">
                        <span class="hvac-lp-check" aria-hidden="true">✓</span>
                        <span>Clear next-step recommendations</span>
                    </div>

                </div>

                <div class="hvac-lp-hero-actions">

                    <a class="hvac-lp-button hvac-lp-button-primary js-phone-cta" href="tel:+19152213516"
                        data-conversion-action="phone-call" aria-label="Call RS Real Estate Solutions at 915-221-3516">
                        <span class="hvac-lp-button-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" focusable="false">
                                <path
                                    d="M6.62 10.79a15.46 15.46 0 0 0 6.59 6.59l2.2-2.2a1 1 0 0 1 1.01-.24c1.12.37 2.33.57 3.58.57a1 1 0 0 1 1 1V20a1 1 0 0 1-1 1C10.61 21 3 13.39 3 4a1 1 0 0 1 1-1h3.5a1 1 0 0 1 1 1c0 1.25.2 2.46.57 3.58a1 1 0 0 1-.25 1.01l-2.2 2.2Z" />
                            </svg>
                        </span>

                        <span>
                            <small>Call for HVAC Service</small>
                            (915) 221-3516
                        </span>
                    </a>

                    <a class="hvac-lp-button hvac-lp-button-secondary" href="#schedule-service"
                        data-conversion-action="form-scroll">
                        Request Service
                        <span aria-hidden="true">↓</span>
                    </a>

                </div>

                <p class="hvac-lp-response-note">
                    Calling is the fastest way to ask about current availability.
                </p>

            </div>

            <aside class="hvac-lp-booking-card" aria-labelledby="hvac-booking-card-title">

                <div class="hvac-lp-card-topline">
                    <span>HVAC Appointment</span>
                    <span>El Paso</span>
                </div>

                <div class="hvac-lp-fee-badge">
                    <span class="hvac-lp-fee-currency">$</span>
                    <strong>50</strong>
                    <span class="hvac-lp-fee-label">
                        Scheduling<br>Fee
                    </span>
                </div>

                <p class="hvac-lp-card-eyebrow">
                    Reserve an appointment
                </p>

                <h2 id="hvac-booking-card-title">
                    Schedule Your HVAC Service
                </h2>

                <p>
                    Tell us what is happening with your system and how we can
                    contact you. The team will follow up to discuss scheduling
                    and the appropriate next step.
                </p>

                <ul class="hvac-lp-card-list">
                    <li>
                        <span aria-hidden="true">✓</span>
                        Reserve a service appointment
                    </li>

                    <li>
                        <span aria-hidden="true">✓</span>
                        Share the system issue in advance
                    </li>

                    <li>
                        <span aria-hidden="true">✓</span>
                        Request residential or commercial service
                    </li>
                </ul>

                <a class="hvac-lp-button hvac-lp-button-card" href="#schedule-service"
                    data-conversion-action="form-scroll">
                    Start My Service Request
                    <span aria-hidden="true">→</span>
                </a>

                <p class="hvac-lp-card-disclaimer">
                    The $50 scheduling fee reserves the appointment.
                    Diagnostic services are a separate charge and are not
                    included in the scheduling fee.
                </p>

            </aside>

        </div>

        <div class="container hvac-lp-hero-trust">

            <div>
                <strong>Local</strong>
                <span>El Paso service</span>
            </div>

            <div>
                <strong>Flexible</strong>
                <span>Residential and commercial</span>
            </div>

            <div>
                <strong>Complete</strong>
                <span>Repair through replacement</span>
            </div>

            <div>
                <strong>Direct</strong>
                <span>Call or request online</span>
            </div>

        </div>

    </section>


    <!-- =========================================================
         PROBLEM RECOGNITION
    ========================================================== -->

    <section class="hvac-lp-section hvac-lp-problems" id="hvac-problems">

        <div class="container">

            <header class="hvac-lp-section-heading">

                <div>
                    <p class="hvac-lp-eyebrow">
                        Common HVAC Problems
                    </p>

                    <h2>
                        Is Your System Showing
                        <span>Any of These Signs?</span>
                    </h2>
                </div>

                <p>
                    HVAC problems rarely improve on their own. Request service
                    when something sounds, feels, or performs differently than
                    it should.
                </p>

            </header>

            <div class="hvac-lp-problem-grid">

                <article class="hvac-lp-problem-card">

                    <span class="hvac-lp-problem-number">01</span>

                    <div class="hvac-lp-problem-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" focusable="false">
                            <path d="M12 2v20M4.93 4.93l14.14 14.14M2 12h20M4.93 19.07 19.07 4.93" />
                        </svg>
                    </div>

                    <h3>AC Blowing Warm Air</h3>

                    <p>
                        Your system runs, but the air coming from the vents
                        never becomes properly cool.
                    </p>

                </article>

                <article class="hvac-lp-problem-card">

                    <span class="hvac-lp-problem-number">02</span>

                    <div class="hvac-lp-problem-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" focusable="false">
                            <path d="M13 2 5 14h6l-1 8 8-12h-6l1-8Z" />
                        </svg>
                    </div>

                    <h3>System Will Not Turn On</h3>

                    <p>
                        The thermostat is set, but the heating or cooling
                        equipment does not respond.
                    </p>

                </article>

                <article class="hvac-lp-problem-card">

                    <span class="hvac-lp-problem-number">03</span>

                    <div class="hvac-lp-problem-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" focusable="false">
                            <path d="M4 12h13M13 8l4 4-4 4M4 7h5M4 17h5" />
                        </svg>
                    </div>

                    <h3>Weak or Uneven Airflow</h3>

                    <p>
                        Some rooms feel comfortable while others remain hot,
                        cold, or difficult to regulate.
                    </p>

                </article>

                <article class="hvac-lp-problem-card">

                    <span class="hvac-lp-problem-number">04</span>

                    <div class="hvac-lp-problem-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" focusable="false">
                            <path d="M12 3s5 5.2 5 10a5 5 0 0 1-10 0c0-4.8 5-10 5-10Z" />
                        </svg>
                    </div>

                    <h3>Water Around the Unit</h3>

                    <p>
                        Moisture, dripping, or pooling water appears near the
                        indoor or outdoor HVAC equipment.
                    </p>

                </article>

                <article class="hvac-lp-problem-card">

                    <span class="hvac-lp-problem-number">05</span>

                    <div class="hvac-lp-problem-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" focusable="false">
                            <path d="M5 9v6M9 6v12M13 4v16M17 7v10M21 10v4" />
                        </svg>
                    </div>

                    <h3>Unusual HVAC Noises</h3>

                    <p>
                        Grinding, rattling, banging, or squealing sounds can
                        signal a system problem that needs attention.
                    </p>

                </article>

                <article class="hvac-lp-problem-card">

                    <span class="hvac-lp-problem-number">06</span>

                    <div class="hvac-lp-problem-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" focusable="false">
                            <path
                                d="M12 2v3M12 19v3M4.93 4.93l2.12 2.12M16.95 16.95l2.12 2.12M2 12h3M19 12h3M4.93 19.07l2.12-2.12M16.95 7.05l2.12-2.12" />
                            <circle cx="12" cy="12" r="4" />
                        </svg>
                    </div>

                    <h3>System Runs Constantly</h3>

                    <p>
                        Equipment that rarely cycles off may be struggling to
                        maintain the selected indoor temperature.
                    </p>

                </article>

                <article class="hvac-lp-problem-card">

                    <span class="hvac-lp-problem-number">07</span>

                    <div class="hvac-lp-problem-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" focusable="false">
                            <path d="M4 19V9M10 19V5M16 19v-7M22 19V2" />
                        </svg>
                    </div>

                    <h3>Increasing Energy Use</h3>

                    <p>
                        A sudden change in energy costs may indicate that the
                        system is working harder than expected.
                    </p>

                </article>

                <article class="hvac-lp-problem-card hvac-lp-problem-card-cta">

                    <span class="hvac-lp-problem-number">08</span>

                    <p class="hvac-lp-problem-cta-label">
                        Not sure what is wrong?
                    </p>

                    <h3>
                        Describe the issue and let us review it.
                    </h3>

                    <a href="#schedule-service">
                        Request HVAC Service
                        <span aria-hidden="true">→</span>
                    </a>

                </article>

            </div>

        </div>

    </section>


    <!-- =========================================================
         PRIMARY CALL TO ACTION
    ========================================================== -->

    <section class="hvac-lp-callout">

        <div class="container hvac-lp-callout-grid">

            <div>
                <p class="hvac-lp-eyebrow">
                    Need Help With Your HVAC System?
                </p>

                <h2>
                    Call now for the fastest response.
                </h2>
            </div>

            <a class="hvac-lp-callout-phone js-phone-cta" href="tel:+19152213516" data-conversion-action="phone-call">
                <span>Call RS Real Estate Solutions</span>
                <strong>(915) 221-3516</strong>
            </a>

        </div>

    </section>


    <!-- =========================================================
         HVAC SERVICES
    ========================================================== -->

    <section class="hvac-lp-section hvac-lp-services" id="services">

        <div class="container">

            <header class="hvac-lp-section-heading hvac-lp-section-heading-centered">

                <div>
                    <p class="hvac-lp-eyebrow">
                        Heating and Cooling Services
                    </p>

                    <h2>
                        HVAC Solutions Built Around
                        <span>Your Property.</span>
                    </h2>
                </div>

                <p>
                    Request help with an immediate system issue, ongoing
                    maintenance, equipment replacement, or a new installation.
                </p>

            </header>

            <div class="hvac-lp-service-grid">

                <article class="hvac-lp-service-card">

                    <div class="hvac-lp-service-top">
                        <span>01</span>
                        <p>Repair</p>
                    </div>

                    <h3>Air Conditioning Repair</h3>

                    <p>
                        Service for cooling systems that are not starting,
                        cooling properly, circulating air, or operating as
                        expected.
                    </p>

                    <ul>
                        <li>Cooling performance issues</li>
                        <li>Airflow problems</li>
                        <li>Unusual sounds or operation</li>
                    </ul>

                    <a href="#schedule-service">
                        Request AC Repair
                        <span aria-hidden="true">→</span>
                    </a>

                </article>

                <article class="hvac-lp-service-card">

                    <div class="hvac-lp-service-top">
                        <span>02</span>
                        <p>Heating</p>
                    </div>

                    <h3>Heating System Service</h3>

                    <p>
                        Troubleshooting and service for heating equipment that
                        is not turning on, maintaining temperature, or
                        performing consistently.
                    </p>

                    <ul>
                        <li>No-heat conditions</li>
                        <li>Inconsistent temperatures</li>
                        <li>Heating performance concerns</li>
                    </ul>

                    <a href="#schedule-service">
                        Request Heating Service
                        <span aria-hidden="true">→</span>
                    </a>

                </article>

                <article class="hvac-lp-service-card">

                    <div class="hvac-lp-service-top">
                        <span>03</span>
                        <p>Replacement</p>
                    </div>

                    <h3>HVAC Installation and Replacement</h3>

                    <p>
                        Equipment replacement and new HVAC installation planned
                        around the size, use, and comfort needs of the property.
                    </p>

                    <ul>
                        <li>System replacement</li>
                        <li>New equipment installation</li>
                        <li>Property-specific recommendations</li>
                    </ul>

                    <a href="#schedule-service">
                        Discuss a New System
                        <span aria-hidden="true">→</span>
                    </a>

                </article>

                <article class="hvac-lp-service-card">

                    <div class="hvac-lp-service-top">
                        <span>04</span>
                        <p>Maintenance</p>
                    </div>

                    <h3>Preventive HVAC Maintenance</h3>

                    <p>
                        Routine HVAC service intended to support dependable
                        operation and identify concerns before they become
                        larger system problems.
                    </p>

                    <ul>
                        <li>System performance review</li>
                        <li>Routine equipment care</li>
                        <li>Preventive recommendations</li>
                    </ul>

                    <a href="#schedule-service">
                        Schedule Maintenance
                        <span aria-hidden="true">→</span>
                    </a>

                </article>

            </div>

        </div>

    </section>


    <!-- =========================================================
         WHY RS
    ========================================================== -->

    <section class="hvac-lp-section hvac-lp-why">

        <div class="container hvac-lp-why-grid">

            <div class="hvac-lp-why-visual">

                <div class="hvac-lp-why-image" role="img" aria-label="HVAC service for an El Paso property"></div>

                <div class="hvac-lp-why-stat">
                    <strong>One Call</strong>
                    <span>Repair, replacement, installation or maintenance</span>
                </div>

                <span class="hvac-lp-why-vertical" aria-hidden="true">
                    Property / Comfort / Service
                </span>

            </div>

            <div class="hvac-lp-why-copy">

                <p class="hvac-lp-eyebrow">
                    Why Choose RS
                </p>

                <h2>
                    HVAC Service Backed by
                    <span>Broader Property Experience.</span>
                </h2>

                <p class="hvac-lp-why-lead">
                    RS Real Estate Solutions works across HVAC, remodeling,
                    construction, and real estate services. That broader
                    property perspective helps the team consider how heating
                    and cooling needs connect to the condition, use, and goals
                    of the property.
                </p>

                <div class="hvac-lp-why-list">

                    <article>
                        <span>01</span>

                        <div>
                            <h3>Local Service</h3>
                            <p>
                                Request HVAC service for properties in El Paso
                                and surrounding communities.
                            </p>
                        </div>
                    </article>

                    <article>
                        <span>02</span>

                        <div>
                            <h3>Residential and Commercial</h3>
                            <p>
                                Support for homeowners, businesses, investors,
                                property managers, and commercial properties.
                            </p>
                        </div>
                    </article>

                    <article>
                        <span>03</span>

                        <div>
                            <h3>Multiple Service Options</h3>
                            <p>
                                Repair, maintenance, replacement, and
                                installation can be reviewed through one team.
                            </p>
                        </div>
                    </article>

                    <article>
                        <span>04</span>

                        <div>
                            <h3>Clear Next Steps</h3>
                            <p>
                                Start by explaining the issue so the team can
                                discuss scheduling and the appropriate service.
                            </p>
                        </div>
                    </article>

                </div>

                <div class="hvac-lp-why-actions">

                    <a class="hvac-lp-button hvac-lp-button-primary js-phone-cta" href="tel:+19152213516"
                        data-conversion-action="phone-call">
                        Call (915) 221-3516
                    </a>

                    <a class="hvac-lp-text-link" href="#schedule-service">
                        Request service online
                        <span aria-hidden="true">→</span>
                    </a>

                </div>

            </div>

        </div>

    </section>


    <!-- =========================================================
         PROCESS
    ========================================================== -->

    <section class="hvac-lp-section hvac-lp-process">

        <div class="container">

            <header class="hvac-lp-section-heading hvac-lp-section-heading-centered">

                <div>
                    <p class="hvac-lp-eyebrow">
                        What to Expect
                    </p>

                    <h2>
                        A Clear HVAC
                        <span>Service Process.</span>
                    </h2>
                </div>

                <p>
                    Start with a call or online request. From there, the team
                    can gather details and help determine the next step.
                </p>

            </header>

            <div class="hvac-lp-process-grid">

                <article>

                    <span class="hvac-lp-process-number">01</span>

                    <div class="hvac-lp-process-line" aria-hidden="true"></div>

                    <h3>Request Service</h3>

                    <p>
                        Call or submit the form with your contact information,
                        property type, and a brief description of the issue.
                    </p>

                </article>

                <article>

                    <span class="hvac-lp-process-number">02</span>

                    <div class="hvac-lp-process-line" aria-hidden="true"></div>

                    <h3>Confirm Scheduling</h3>

                    <p>
                        The team follows up to review availability and confirm
                        the details of the requested appointment.
                    </p>

                </article>

                <article>

                    <span class="hvac-lp-process-number">03</span>

                    <div class="hvac-lp-process-line" aria-hidden="true"></div>

                    <h3>Evaluate the System</h3>

                    <p>
                        The HVAC system and reported issue are reviewed so the
                        appropriate recommendation can be discussed.
                    </p>

                </article>

                <article>

                    <span class="hvac-lp-process-number">04</span>

                    <h3>Review the Next Step</h3>

                    <p>
                        The team explains the next recommended action based on
                        the system, issue, and needs of the property.
                    </p>

                </article>

            </div>

        </div>

    </section>


    <!-- =========================================================
         SCHEDULING FEE
    ========================================================== -->

    <section class="hvac-lp-section hvac-lp-fee">

        <div class="container hvac-lp-fee-grid">

            <div class="hvac-lp-fee-copy">

                <p class="hvac-lp-eyebrow">
                    Appointment Information
                </p>

                <h2>
                    Reserve Your HVAC Appointment
                    <span>for $50.</span>
                </h2>

                <p>
                    A $50 scheduling fee is collected to reserve a service
                    appointment for your property.
                </p>

                <div class="hvac-lp-fee-includes">

                    <div>
                        <span aria-hidden="true">✓</span>
                        <p>Reserves the selected appointment time</p>
                    </div>

                    <div>
                        <span aria-hidden="true">✓</span>
                        <p>Connects the request to your property and issue</p>
                    </div>

                    <div>
                        <span aria-hidden="true">✓</span>
                        <p>Allows the team to prepare for the service request</p>
                    </div>

                </div>

            </div>

            <aside class="hvac-lp-fee-card">

                <p class="hvac-lp-fee-card-label">
                    Scheduling Fee
                </p>

                <div class="hvac-lp-fee-price">
                    <sup>$</sup>
                    <strong>50</strong>
                </div>

                <p class="hvac-lp-fee-card-title">
                    Reserve an HVAC appointment
                </p>

                <a class="hvac-lp-button hvac-lp-button-card" href="#schedule-service">
                    Request My Appointment
                    <span aria-hidden="true">→</span>
                </a>

                <div class="hvac-lp-fee-disclaimer">

                    <strong>Important:</strong>

                    <p>
                        The $50 fee is a scheduling fee only. Diagnostic
                        services are billed separately and are not included
                        in the scheduling fee.
                    </p>

                </div>

            </aside>

        </div>

    </section>


    <!-- =========================================================
         FAQ
    ========================================================== -->

    <section class="hvac-lp-section hvac-lp-faq" id="faq">

        <div class="container hvac-lp-faq-grid">

            <div class="hvac-lp-faq-intro">

                <p class="hvac-lp-eyebrow">
                    HVAC Service Questions
                </p>

                <h2>
                    Before You
                    <span>Schedule Service.</span>
                </h2>

                <p>
                    Review common questions about HVAC appointments, service
                    requests, and the $50 scheduling fee.
                </p>

                <a class="hvac-lp-text-link" href="tel:+19152213516">
                    Have another question? Call us
                    <span aria-hidden="true">→</span>
                </a>

            </div>

            <div class="hvac-lp-faq-list">

                <details open>

                    <summary>
                        What HVAC services can I request?
                        <span aria-hidden="true"></span>
                    </summary>

                    <div>
                        <p>
                            You can request HVAC repair, installation,
                            replacement, preventive maintenance, and service
                            for residential or commercial properties.
                        </p>
                    </div>

                </details>

                <details>

                    <summary>
                        What areas do you serve?
                        <span aria-hidden="true"></span>
                    </summary>

                    <div>
                        <p>
                            RS Real Estate Solutions provides service in
                            El Paso, Texas, and surrounding communities.
                            Contact the team to confirm availability for your
                            specific property.
                        </p>
                    </div>

                </details>

                <details>

                    <summary>
                        What does the $50 scheduling fee include?
                        <span aria-hidden="true"></span>
                    </summary>

                    <div>
                        <p>
                            The $50 scheduling fee reserves your HVAC service
                            appointment. It is not the diagnostic charge and
                            does not include repair, replacement, equipment,
                            or installation costs.
                        </p>
                    </div>

                </details>

                <details>

                    <summary>
                        Is the diagnostic included in the scheduling fee?
                        <span aria-hidden="true"></span>
                    </summary>

                    <div>
                        <p>
                            No. Diagnostic services are a separate charge and
                            are not included in the $50 scheduling fee.
                        </p>
                    </div>

                </details>

                <details>

                    <summary>
                        Can I request commercial HVAC service?
                        <span aria-hidden="true"></span>
                    </summary>

                    <div>
                        <p>
                            Yes. The service request form can be used for both
                            residential and commercial properties. Include the
                            property type and relevant system details when
                            submitting your request.
                        </p>
                    </div>

                </details>

                <details>

                    <summary>
                        What information should I include?
                        <span aria-hidden="true"></span>
                    </summary>

                    <div>
                        <p>
                            Include your name, phone number, property type,
                            service address or area, and a brief description of
                            what the system is doing. Mention any unusual
                            sounds, airflow problems, leaks, or temperature
                            issues.
                        </p>
                    </div>

                </details>

            </div>

        </div>

    </section>


    <!-- =========================================================
         CONTACT / FORM
    ========================================================== -->

    <section class="hvac-lp-section hvac-lp-contact" id="schedule-service" aria-labelledby="hvac-contact-title">

        <div class="hvac-lp-contact-background" aria-hidden="true"></div>

        <div class="container hvac-lp-contact-grid">

            <div class="hvac-lp-contact-copy">

                <p class="hvac-lp-eyebrow">
                    Request HVAC Service
                </p>

                <h2 id="hvac-contact-title">
                    Tell Us What Is
                    <span>Happening With Your System.</span>
                </h2>

                <p class="hvac-lp-contact-lead">
                    Submit the form with a few details about your property and
                    HVAC issue. The team can follow up to discuss availability,
                    scheduling, and the appropriate next step.
                </p>

                <div class="hvac-lp-contact-options">

                    <a class="hvac-lp-contact-option js-phone-cta" href="tel:+19152213516"
                        data-conversion-action="phone-call">
                        <span class="hvac-lp-contact-option-label">
                            Call for Service
                        </span>

                        <strong>(915) 221-3516</strong>

                        <span class="hvac-lp-contact-arrow" aria-hidden="true">
                            ↗
                        </span>
                    </a>

                    <div class="hvac-lp-contact-option">

                        <span class="hvac-lp-contact-option-label">
                            Service Area
                        </span>

                        <strong>
                            El Paso and surrounding communities
                        </strong>

                    </div>

                    <div class="hvac-lp-contact-option">

                        <span class="hvac-lp-contact-option-label">
                            Property Types
                        </span>

                        <strong>
                            Residential and commercial
                        </strong>

                    </div>

                </div>

                <div class="hvac-lp-contact-reminder">

                    <span>$50</span>

                    <p>
                        Scheduling fee required to reserve the appointment.
                        Diagnostic services are billed separately.
                    </p>

                </div>

            </div>

            <div class="hvac-lp-form-shell" data-form-context="HVAC Google Ads Landing Page">

                <div class="hvac-lp-form-heading">

                    <p>HVAC Service Request</p>

                    <h3>Request an Appointment</h3>

                    <span>
                        Complete the form and the team will follow up using
                        the contact information provided.
                    </span>

                </div>

                <?php

                /*
                |--------------------------------------------------------------------------
                | Shared Secured Contact Form
                |--------------------------------------------------------------------------
                |
                | This uses your existing contact form with Cloudflare Turnstile,
                | session-token protection, and your current form processing.
                |
                */

                include '../includes/contact-form.php';

                ?>

                <p class="hvac-lp-form-disclaimer">
                    By submitting this form, you are requesting contact from
                    RS Real Estate Solutions regarding HVAC service. The
                    $50 scheduling fee reserves an appointment. Diagnostic
                    services are billed separately.
                </p>

            </div>

        </div>

    </section>


    <!-- =========================================================
         FINAL CTA
    ========================================================== -->

    <section class="hvac-lp-final-cta">

        <div class="container hvac-lp-final-cta-grid">

            <div>

                <p class="hvac-lp-eyebrow">
                    Heating and Cooling Service
                </p>

                <h2>
                    Ready to Request HVAC Service?
                </h2>

                <p>
                    Call RS Real Estate Solutions or submit the online service
                    request form.
                </p>

            </div>

            <div class="hvac-lp-final-actions">

                <a class="hvac-lp-button hvac-lp-button-light js-phone-cta" href="tel:+19152213516"
                    data-conversion-action="phone-call">
                    Call (915) 221-3516
                </a>

                <a class="hvac-lp-button hvac-lp-button-outline-light" href="#schedule-service">
                    Request Service
                </a>

            </div>

        </div>

    </section>


    <!-- =========================================================
         MOBILE STICKY CONVERSION BAR
    ========================================================== -->

    <div class="hvac-lp-mobile-bar" aria-label="HVAC contact options">

        <a class="hvac-lp-mobile-call js-phone-cta" href="tel:+19152213516" data-conversion-action="phone-call">
            <span aria-hidden="true">
                <svg viewBox="0 0 24 24" focusable="false">
                    <path
                        d="M6.62 10.79a15.46 15.46 0 0 0 6.59 6.59l2.2-2.2a1 1 0 0 1 1.01-.24c1.12.37 2.33.57 3.58.57a1 1 0 0 1 1 1V20a1 1 0 0 1-1 1C10.61 21 3 13.39 3 4a1 1 0 0 1 1-1h3.5a1 1 0 0 1 1 1c0 1.25.2 2.46.57 3.58a1 1 0 0 1-.25 1.01l-2.2 2.2Z" />
                </svg>
            </span>

            Call Now
        </a>

        <a class="hvac-lp-mobile-form" href="#schedule-service" data-conversion-action="form-scroll">
            Request Service
        </a>

    </div>

</main>


<!-- =============================================================
     LOCAL BUSINESS STRUCTURED DATA
============================================================== -->

<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "HVACBusiness",
    "name": "RS Real Estate Solutions",
    "url": "https://rsrealstatesolutions.com/hvac-repair-el-paso/",
    "telephone": "+1-915-221-3516",
    "areaServed": [
        {
            "@type": "City",
            "name": "El Paso"
        },
        {
            "@type": "AdministrativeArea",
            "name": "El Paso County"
        }
    ],
    "serviceType": [
        "HVAC Repair",
        "Air Conditioning Repair",
        "Heating Service",
        "HVAC Installation",
        "HVAC Replacement",
        "HVAC Maintenance",
        "Residential HVAC Service",
        "Commercial HVAC Service"
    ]
}
</script>

<script src="/assets/js/hvac-landing.js" defer></script>

<?php

include '../includes/footer.php';

?>