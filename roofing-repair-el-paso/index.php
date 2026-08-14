<?php

/*
|--------------------------------------------------------------------------
| Roofing Google Ads Landing Page
|--------------------------------------------------------------------------
|
| Purpose:
| Paid Google Search traffic.
|
| Primary conversions:
| 1. Phone call
| 2. Service request form
|
*/

$pageTitle = 'Roof Repair in El Paso, TX | RS Real Estate Solutions';

$metaDescription = 'Need residential roof repair in El Paso? Request help with leaks, missing materials, storm damage, or an aging roof from RS Real Estate Solutions.';

$canonicalUrl = 'https://rsrealestatesolutionsep.com/roof-repair-el-paso/';

$ogTitle = 'Roof Repair in El Paso | RS Real Estate Solutions';

$ogDescription = 'Request roofing service for leaks, damage, aging roofs, replacement needs, and other roofing concerns in El Paso.';

$ogImage = 'https://rsrealestatesolutionsep.com/assets/roofing-landing-hero.jpg';
$robots = 'noindex, follow';

include '../includes/header.php';

?>

<link
    rel="stylesheet"
    href="/assets/css/roofing-landing.css"
>

<script>
    document.body.classList.add('roof-landing-body');
    document.addEventListener('DOMContentLoaded', function () {
        const headerCall = document.querySelector('.site-header .header-actions .button');
        if (headerCall) {
            headerCall.href = 'tel:+19152213516';
            headerCall.textContent = 'Call (915) 221-3516';
            headerCall.setAttribute('aria-label', 'Call RS Real Estate Solutions at 915-221-3516');
        }
    });
</script>


<main id="main-content" class="roof-lp">

    <!-- =========================================================
         HERO
    ========================================================== -->

    <section class="roof-lp-hero">

        <div class="roof-lp-hero-media" aria-hidden="true"></div>
        <div class="roof-lp-hero-overlay" aria-hidden="true"></div>

        <div class="roof-lp-roofline" aria-hidden="true">
            <svg viewBox="0 0 1200 430">
                <path d="M0 370L260 145L515 370L720 195L1035 370H1200"/>
            </svg>
        </div>

        <div class="container roof-lp-hero-grid">

            <div class="roof-lp-hero-copy">

                <p class="roof-lp-location">
                    Residential Roof Repair · El Paso, TX
                </p>

                <h1>
                    Roof Leak or Damage?
                    <span>Request Help in El Paso.</span>
                </h1>

                <p class="roof-lp-hero-lead">
                    Tell us what you are seeing. RS Real Estate Solutions can
                    review your residential roofing concern and discuss repair,
                    inspection, or replacement options with you.
                </p>

                <div class="roof-lp-signals">

                    <div>
                        <span>✓</span>
                        Roof leak concerns
                    </div>

                    <div>
                        <span>✓</span>
                        Damaged roofing materials
                    </div>

                    <div>
                        <span>✓</span>
                        Repair first, replacement if needed
                    </div>

                    <div>
                        <span>✓</span>
                        Residential properties
                    </div>

                </div>

                <div class="roof-lp-actions">

                    <a
                        class="roof-lp-button roof-lp-button-primary js-phone-cta"
                        href="tel:+19152213516"
                        data-conversion-action="roof-phone-call"
                    >
                        <span class="roof-lp-call-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24">
                                <path d="M6.62 10.79a15.46 15.46 0 0 0 6.59 6.59l2.2-2.2a1 1 0 0 1 1.01-.24c1.12.37 2.33.57 3.58.57a1 1 0 0 1 1 1V20a1 1 0 0 1-1 1C10.61 21 3 13.39 3 4a1 1 0 0 1 1-1h3.5a1 1 0 0 1 1 1c0 1.25.2 2.46.57 3.58a1 1 0 0 1-.25 1.01l-2.2 2.2Z"/>
                            </svg>
                        </span>

                        <span>
                            <small>Talk to RS</small>
                            Call (915) 221-3516
                        </span>
                    </a>

                    <a
                        class="roof-lp-button roof-lp-button-outline"
                        href="#roof-request"
                    >
                        Request a Roofing Callback
                    </a>

                </div>

                <p class="roof-lp-call-note">
                    No payment is collected through this request form.
                </p>

            </div>


            <!-- HERO FORM -->

            <aside class="roof-lp-hero-form">

                <div class="roof-lp-form-heading">

                    <p>Residential Roofing Request</p>

                    <h2>
                        Tell Us What’s Happening.
                    </h2>

                    <span>
                        Give us a few details about the property and the
                        roofing issue.
                    </span>

                </div>

                <?php
                include '../includes/contact-form-roofing.php';
                ?>

                <p class="roof-lp-form-note">
                    By submitting this form, you are requesting contact from
                    RS Real Estate Solutions regarding roofing services.
                </p>

            </aside>

        </div>

    </section>


    <!-- =========================================================
         FAST TRUST STRIP
    ========================================================== -->

    <section class="roof-lp-trust">

        <div class="container roof-lp-trust-grid">

            <div>
                <strong>LOCAL</strong>
                <span>El Paso service</span>
            </div>

            <div>
                <strong>PROPERTY</strong>
                <span>Residential roofing</span>
            </div>

            <div>
                <strong>SERVICE</strong>
                <span>Repair & replacement</span>
            </div>

            <div>
                <strong>ACCESS</strong>
                <span>Call or request online</span>
            </div>

        </div>

    </section>


    <!-- =========================================================
         DAMAGE RECOGNITION
    ========================================================== -->

    <section class="roof-lp-section roof-lp-damage" id="common-roof-problems">

        <div class="container">

            <header class="roof-lp-heading">

                <p class="roof-lp-eyebrow">
                    Roofing Warning Signs
                </p>

                <h2>
                    If You’re Seeing This,
                    <span>It’s Time to Take a Closer Look.</span>
                </h2>

                <p>
                    Some roofing problems begin quietly. Catching them before
                    additional property damage develops can make a significant
                    difference.
                </p>

            </header>

            <div class="roof-lp-damage-grid">

                <article>

                    <span class="roof-lp-number">
                        01
                    </span>

                    <h3>Water Stains</h3>

                    <p>
                        Discoloration on ceilings or walls can be an early
                        indication of moisture entering the property.
                    </p>

                </article>

                <article>

                    <span class="roof-lp-number">
                        02
                    </span>

                    <h3>Active Roof Leaks</h3>

                    <p>
                        Visible water intrusion should be evaluated before
                        moisture reaches additional areas of the structure.
                    </p>

                </article>

                <article>

                    <span class="roof-lp-number">
                        03
                    </span>

                    <h3>Missing or Damaged Material</h3>

                    <p>
                        Loose, missing, cracked, or deteriorating roofing
                        components can leave vulnerable areas exposed.
                    </p>

                </article>

                <article>

                    <span class="roof-lp-number">
                        04
                    </span>

                    <h3>Recent Storm Damage</h3>

                    <p>
                        Wind and severe weather may affect portions of a roof
                        that are difficult to assess from ground level.
                    </p>

                </article>

                <article>

                    <span class="roof-lp-number">
                        05
                    </span>

                    <h3>Sagging or Uneven Areas</h3>

                    <p>
                        Visible changes to the roofline should be investigated
                        to better understand what is occurring.
                    </p>

                </article>

                <article class="roof-lp-damage-cta">

                    <p class="roof-lp-damage-label">
                        Something Else?
                    </p>

                    <h3>
                        You don’t need to diagnose the problem yourself.
                    </h3>

                    <a href="#roof-request">
                        Tell Us What You’re Seeing
                        <span>→</span>
                    </a>

                </article>

            </div>

        </div>

    </section>


    <!-- =========================================================
         REPAIR VS REPLACEMENT
    ========================================================== -->

    <section class="roof-lp-section roof-lp-options" id="repair-options">

        <div class="container">

            <div class="roof-lp-options-intro">

                <p class="roof-lp-eyebrow">
                    Repair or Replacement?
                </p>

                <h2>
                    Start With the Problem.
                    <span>Then Discuss the Right Scope.</span>
                </h2>

            </div>

            <div class="roof-lp-options-grid">

                <article class="roof-lp-option roof-lp-option-repair">

                    <div class="roof-lp-option-top">
                        <span>01</span>
                        <p>Repair</p>
                    </div>

                    <h3>
                        When the Problem Is Localized
                    </h3>

                    <p>
                        If the overall roofing system remains serviceable,
                        targeted repair may be the appropriate way to address
                        a specific leak or damaged area.
                    </p>

                    <a href="#roof-request">
                        Request Roof Repair →
                    </a>

                </article>

                <article class="roof-lp-option roof-lp-option-replacement">

                    <div class="roof-lp-option-top">
                        <span>02</span>
                        <p>Replacement</p>
                    </div>

                    <h3>
                        When the Roof Needs a Larger Solution
                    </h3>

                    <p>
                        Extensive deterioration, repeated repair needs, or
                        broader roofing concerns may make complete replacement
                        a more practical long-term direction.
                    </p>

                    <a href="#roof-request">
                        Discuss Roof Replacement →
                    </a>

                </article>

            </div>

        </div>

    </section>


    <!-- =========================================================
         MID-PAGE PHONE CTA
    ========================================================== -->

    <section class="roof-lp-phone-band">

        <div class="container roof-lp-phone-band-grid">

            <div>

                <span>
                    Concerned About Your Roof?
                </span>

                <h2>
                    Talk directly with RS.
                </h2>

            </div>

            <a
                href="tel:+19152213516"
                class="js-phone-cta"
                data-conversion-action="roof-phone-call"
            >
                <small>Call Now</small>
                (915) 221-3516
            </a>

        </div>

    </section>


    <!-- =========================================================
         WHY RS
    ========================================================== -->

    <section class="roof-lp-section roof-lp-why" id="why-rs">

        <div class="container roof-lp-why-grid">

            <div class="roof-lp-why-copy">

                <p class="roof-lp-eyebrow">
                    Why RS
                </p>

                <h2>
                    A Property-Focused
                    <span>Roofing Conversation.</span>
                </h2>

                <p class="roof-lp-why-lead">
                    RS approaches a roof concern in the context of the home,
                    the visible damage, and the owner’s next step. Start with
                    the condition—not a predetermined sale.
                </p>

                <div class="roof-lp-why-list">

                    <article>
                        <span>01</span>
                        <div>
                            <h3>Property-Focused Approach</h3>
                            <p>
                                Roofing decisions can be considered alongside
                                the overall condition and goals of the property.
                            </p>
                        </div>
                    </article>

                    <article>
                        <span>02</span>
                        <div>
                            <h3>Residential Roofing</h3>
                            <p>
                                Request help for an owner-occupied home,
                                rental house, or residential investment.
                            </p>
                        </div>
                    </article>

                    <article>
                        <span>03</span>
                        <div>
                            <h3>Repair Through Replacement</h3>
                            <p>
                                Start with the problem and determine which
                                level of roofing service makes sense.
                            </p>
                        </div>
                    </article>

                    <article>
                        <span>04</span>
                        <div>
                            <h3>Local El Paso Service</h3>
                            <p>
                                Roofing support for El Paso and surrounding
                                communities.
                            </p>
                        </div>
                    </article>

                </div>

            </div>

            <div class="roof-lp-why-visual">

                <div
                    class="roof-lp-why-image"
                    role="img"
                    aria-label="Roofing work on an El Paso property"
                ></div>

                <div class="roof-lp-visual-card">

                    <span>
                        PROPERTY / ROOF / PROTECTION
                    </span>

                    <strong>
                        Start with the roof.
                    </strong>

                </div>

            </div>

        </div>

    </section>


    <!-- =========================================================
         PROCESS
    ========================================================== -->

    <section class="roof-lp-section roof-lp-process" id="how-it-works">

        <div class="container">

            <header class="roof-lp-heading roof-lp-heading-center">

                <p class="roof-lp-eyebrow">
                    What Happens Next
                </p>

                <h2>
                    A Simple Way to
                    <span>Start the Conversation.</span>
                </h2>

            </header>

            <div class="roof-lp-process-grid">

                <article>

                    <span>01</span>

                    <h3>Call or Submit the Form</h3>

                    <p>
                        Tell us what you are seeing and provide the property
                        information.
                    </p>

                </article>

                <article>

                    <span>02</span>

                    <h3>Review the Roofing Concern</h3>

                    <p>
                        The details of the roofing issue can be discussed and
                        the appropriate next step determined.
                    </p>

                </article>

                <article>

                    <span>03</span>

                    <h3>Evaluate the Roof</h3>

                    <p>
                        The relevant roofing areas and reported concerns can
                        be reviewed.
                    </p>

                </article>

                <article>

                    <span>04</span>

                    <h3>Discuss the Solution</h3>

                    <p>
                        Repair, replacement, or another appropriate direction
                        can then be discussed.
                    </p>

                </article>

            </div>

        </div>

    </section>


    <!-- =========================================================
         FAQ
    ========================================================== -->

    <section class="roof-lp-section roof-lp-faq">

        <div class="container roof-lp-faq-grid">

            <div class="roof-lp-faq-intro">

                <p class="roof-lp-eyebrow">
                    Roofing Questions
                </p>

                <h2>
                    Before You
                    <span>Request Service.</span>
                </h2>

                <p>
                    A few answers to common questions from El Paso property
                    owners looking for roofing help.
                </p>

                <a href="tel:+19152213516">
                    Have another question? Call us →
                </a>

            </div>

            <div class="roof-lp-faq-list">

                <details open>

                    <summary>
                        Do you provide roof repair?
                        <span></span>
                    </summary>

                    <div>
                        <p>
                            Yes. Roofing requests can include localized damage,
                            leaks, damaged materials, and other repair concerns.
                        </p>
                    </div>

                </details>

                <details>

                    <summary>
                        Can I request a complete roof replacement?
                        <span></span>
                    </summary>

                    <div>
                        <p>
                            Yes. If the roofing system has extensive damage,
                            significant deterioration, or ongoing repair needs,
                            replacement can be discussed as an option.
                        </p>
                    </div>

                </details>

                <details>

                    <summary>
                        Do you work on residential properties?
                        <span></span>
                    </summary>

                    <div>
                        <p>
                            Yes. This page is for residential roofing requests,
                            including owner-occupied homes and rental houses.
                        </p>
                    </div>

                </details>

                <details>

                    <summary>
                        What should I tell you when I call?
                        <span></span>
                    </summary>

                    <div>
                        <p>
                            Explain what you are seeing, when you first noticed
                            it, whether there has been recent severe weather,
                            and where the problem appears to be located.
                        </p>
                    </div>

                </details>

                <details>

                    <summary>
                        What areas do you serve?
                        <span></span>
                    </summary>

                    <div>
                        <p>
                            RS Real Estate Solutions serves properties in
                            El Paso and surrounding communities. Contact the
                            team to confirm service availability for your
                            location.
                        </p>
                    </div>

                </details>

            </div>

        </div>

    </section>


    <!-- =========================================================
         FINAL CONVERSION SECTION
    ========================================================== -->

    <section
        class="roof-lp-section roof-lp-contact"
        id="roof-request"
    >

        <div class="container roof-lp-contact-grid">

            <div class="roof-lp-contact-copy">

                <p class="roof-lp-eyebrow">
                    Request Roofing Service
                </p>

                <h2>
                    Don’t Ignore a
                    <span>Roofing Problem.</span>
                </h2>

                <p>
                    Tell us what is happening with the roof. RS can follow up
                    to discuss the property, the roofing concern, and the
                    appropriate next step.
                </p>

                <a
                    class="roof-lp-contact-phone js-phone-cta"
                    href="tel:+19152213516"
                    data-conversion-action="roof-phone-call"
                >
                    <small>Prefer to Call?</small>
                    <strong>(915) 221-3516</strong>
                </a>

                <div class="roof-lp-contact-meta">

                    <div>
                        <span>Service Area</span>
                        <p>El Paso and surrounding communities</p>
                    </div>

                    <div>
                        <span>Property Types</span>
                        <p>Residential homes and rental houses</p>
                    </div>

                </div>

            </div>

            <div class="roof-lp-form-shell">

                <header>

                    <p>
                        Residential Roofing Request
                    </p>

                    <h3>
                        Tell Us About Your Roof
                    </h3>

                    <span>
                        Submit the form and the team can follow up using the
                        contact information provided.
                    </span>

                </header>

                <?php
                include '../includes/contact-form-roofing.php';
                ?>

                <p class="roof-lp-form-disclaimer">
                    By submitting this form, you are requesting contact from
                    RS Real Estate Solutions regarding roofing services.
                </p>

            </div>

        </div>

    </section>


    <!-- =========================================================
         FINAL CTA
    ========================================================== -->

    <section class="roof-lp-final">

        <div class="container roof-lp-final-grid">

            <div>

                <span>
                    Residential Roof Repair · El Paso
                </span>

                <h2>
                    Start With a Conversation.
                </h2>

            </div>

            <div class="roof-lp-final-actions">

                <a
                    href="tel:+19152213516"
                    class="roof-lp-button roof-lp-button-light js-phone-cta"
                    data-conversion-action="roof-phone-call"
                >
                    Call (915) 221-3516
                </a>

                <a
                    href="#roof-request"
                    class="roof-lp-button roof-lp-button-outline-light"
                >
                    Request Service
                </a>

            </div>

        </div>

    </section>


    <!-- =========================================================
         MOBILE CONVERSION BAR
    ========================================================== -->

    <div class="roof-lp-mobile-bar">

        <a
            href="tel:+19152213516"
            class="roof-lp-mobile-call js-phone-cta"
            data-conversion-action="roof-phone-call"
        >
            <svg viewBox="0 0 24 24" aria-hidden="true">
                <path d="M6.62 10.79a15.46 15.46 0 0 0 6.59 6.59l2.2-2.2a1 1 0 0 1 1.01-.24c1.12.37 2.33.57 3.58.57a1 1 0 0 1 1 1V20a1 1 0 0 1-1 1C10.61 21 3 13.39 3 4a1 1 0 0 1 1-1h3.5a1 1 0 0 1 1 1c0 1.25.2 2.46.57 3.58a1 1 0 0 1-.25 1.01l-2.2 2.2Z"/>
            </svg>

            Call Now
        </a>

        <a
            href="#roof-request"
            class="roof-lp-mobile-request"
        >
            Request a Callback
        </a>

    </div>

</main>


<?php
include '../includes/footer.php';
?>
