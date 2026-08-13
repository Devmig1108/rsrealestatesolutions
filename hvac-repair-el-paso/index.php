<?php

$pageTitle = 'AC Repair in El Paso, TX | RS Real Estate Solutions';
$metaDescription = 'Need residential AC repair in El Paso? Call RS Real Estate Solutions or request a weekday callback for an AC that is not cooling, will not start, leaks, or makes unusual noises.';
$canonicalUrl = 'https://rsrealestatesolutionsep.com/hvac-repair-el-paso/';
$ogTitle = 'Residential AC Repair in El Paso | RS Real Estate Solutions';
$ogDescription = 'Request residential AC repair in El Paso. Call during weekday business hours or request a same-day callback.';
$ogImage = 'https://rsrealestatesolutionsep.com/assets/images/hvac/hvac-service-el-paso.webp';
$robots = 'noindex, nofollow';

include '../includes/header.php';
?>

<link rel="stylesheet" href="/assets/css/hvac-landing.css">
<script>
    document.body.classList.add('hvac-landing-body');

    document.addEventListener('DOMContentLoaded', function () {
        const headerCall = document.querySelector('.site-header .header-actions .button');
        const serviceImage = document.querySelector('.hvac-lp-service-image img');

        if (headerCall) {
            headerCall.href = 'tel:+19152213516';
            headerCall.textContent = 'Call (915) 221-3516';
            headerCall.setAttribute('aria-label', 'Call RS Real Estate Solutions at 915-221-3516');
        }

        if (serviceImage) {
            const showFallback = function () {
                serviceImage.hidden = true;
                serviceImage.parentElement.classList.add('is-image-missing');
            };

            if (serviceImage.complete && serviceImage.naturalWidth === 0) {
                showFallback();
            } else {
                serviceImage.addEventListener('error', showFallback, { once: true });
            }
        }
    });
</script>

<main id="main-content" class="hvac-lp">
    <section class="hvac-lp-hero" aria-labelledby="hvac-hero-title">
        <div class="container hvac-lp-hero-grid">
            <div class="hvac-lp-hero-copy">
                <p class="hvac-lp-kicker"><span></span> Residential AC repair in El Paso</p>
                <h1 id="hvac-hero-title">AC not cooling? <span>Let’s get help on the way.</span></h1>
                <p class="hvac-lp-hero-lead">
                    If your home’s air conditioner is blowing warm air, will not start,
                    is leaking, or sounds unusual, call our El Paso team or request a callback.
                </p>

                <ul class="hvac-lp-hero-points" aria-label="Service highlights">
                    <li>Residential AC troubleshooting and repair</li>
                    <li>Replacement options when repair is not practical</li>
                    <li>El Paso and nearby service areas</li>
                </ul>

                <div class="hvac-lp-actions">
                    <a class="hvac-lp-button hvac-lp-button-primary js-phone-cta"
                       href="tel:+19152213516"
                       aria-label="Call RS Real Estate Solutions at 915-221-3516">
                        <span class="hvac-lp-button-label">Call during business hours</span>
                        <strong>(915) 221-3516</strong>
                    </a>
                    <a class="hvac-lp-button hvac-lp-button-secondary" href="#request-service">
                        Request a callback
                    </a>
                </div>

                <p class="hvac-lp-response-note">
                    Calls are answered during weekday business hours. Requests received during
                    business hours are eligible for a same-day callback.
                </p>
            </div>

            <aside class="hvac-lp-hero-card" aria-labelledby="hvac-hero-card-title">
                <p class="hvac-lp-card-label">Request AC help</p>
                <h2 id="hvac-hero-card-title">Tell us what your system is doing.</h2>
                <p>We’ll review your request and call to discuss availability and the next step.</p>
                <div class="hvac-lp-issue-list">
                    <span>Warm air</span>
                    <span>Won’t start</span>
                    <span>Weak airflow</span>
                    <span>Leaks or noises</span>
                </div>
                <a class="hvac-lp-text-link" href="#request-service">Start my AC repair request →</a>
                <p class="hvac-lp-card-note">No payment is required to submit a request.</p>
            </aside>
        </div>
    </section>

    <section class="hvac-lp-proof-strip" aria-label="Service information">
        <div class="container">
            <div><strong>Residential</strong><span>Home AC service</span></div>
            <div><strong>Local</strong><span>El Paso area</span></div>
            <div><strong>Direct</strong><span>Call or request online</span></div>
            <div><strong>Practical</strong><span>Repair or replacement options</span></div>
        </div>
    </section>

    <section class="hvac-lp-section hvac-lp-problems" id="common-ac-problems" aria-labelledby="problems-title">
        <div class="container">
            <div class="hvac-lp-section-heading">
                <div>
                    <p class="hvac-lp-eyebrow">Common AC problems</p>
                    <h2 id="problems-title">Get help when your system <span>isn’t keeping up.</span></h2>
                </div>
                <p>Describe the symptoms you are seeing. The service team will use that information to prepare for the callback.</p>
            </div>

            <div class="hvac-lp-problem-grid">
                <article><span>01</span><h3>Blowing warm air</h3><p>The system runs, but the air from the vents never becomes properly cool.</p></article>
                <article><span>02</span><h3>Will not turn on</h3><p>The thermostat is set, but the cooling equipment does not respond.</p></article>
                <article><span>03</span><h3>Weak airflow</h3><p>Airflow is low or some rooms stay noticeably warmer than others.</p></article>
                <article><span>04</span><h3>Leaks or moisture</h3><p>Water, dripping, or moisture appears around indoor or outdoor equipment.</p></article>
                <article><span>05</span><h3>Unusual noises</h3><p>Rattling, grinding, banging, or squealing starts during operation.</p></article>
                <article class="hvac-lp-problem-cta"><span>06</span><h3>Not sure what is wrong?</h3><p>That is okay. Tell us what changed and request a callback.</p><a href="#request-service">Describe the problem →</a></article>
            </div>
        </div>
    </section>

    <section class="hvac-lp-callout" aria-label="Call for AC repair">
        <div class="container">
            <div><p>Need to speak with someone?</p><h2>Call during weekday business hours.</h2></div>
            <a class="js-phone-cta" href="tel:+19152213516"><span>Call now</span><strong>(915) 221-3516</strong></a>
        </div>
    </section>

    <section class="hvac-lp-section hvac-lp-service" id="repair-options" aria-labelledby="service-title">
        <div class="container hvac-lp-service-grid">
            <div class="hvac-lp-service-image">
                <img src="/assets/hvac-service-el-paso.webp"
                     alt="Residential HVAC equipment being inspected"
                     width="1080" height="1080" loading="lazy">
            </div>
            <div class="hvac-lp-service-copy">
                <p class="hvac-lp-eyebrow">Repair first</p>
                <h2 id="service-title">Start with the problem. <span>Then review the options.</span></h2>
                <p>
                    The goal of the first conversation is to understand what the system is doing
                    and determine the appropriate service step. If replacement makes more sense
                    than repair, the team can discuss installation options separately.
                </p>
                <div class="hvac-lp-service-options">
                    <article><strong>AC repair</strong><span>For systems that are not cooling or operating correctly.</span></article>
                    <article><strong>Replacement</strong><span>For systems where a new unit is the practical next step.</span></article>
                </div>
                <a class="hvac-lp-button hvac-lp-button-dark" href="#request-service">Request residential AC service</a>
            </div>
        </div>
    </section>

    <section class="hvac-lp-section hvac-lp-process" id="how-it-works" aria-labelledby="process-title">
        <div class="container">
            <div class="hvac-lp-section-heading">
                <div><p class="hvac-lp-eyebrow">What happens next</p><h2 id="process-title">A simple request process.</h2></div>
                <p>Submitting the form does not book or charge you for an appointment.</p>
            </div>
            <ol>
                <li><span>1</span><div><h3>Call or submit the form</h3><p>Share your contact information and the AC symptoms.</p></div></li>
                <li><span>2</span><div><h3>Receive a callback</h3><p>Requests received during weekday business hours are eligible for a same-day callback.</p></div></li>
                <li><span>3</span><div><h3>Review availability</h3><p>The team discusses the issue, service area, and available appointment times.</p></div></li>
                <li><span>4</span><div><h3>Confirm the appointment</h3><p>A $50 reservation fee is collected only after you choose and confirm an appointment. Diagnostic and repair charges are separate.</p></div></li>
            </ol>
        </div>
    </section>

    <section class="hvac-lp-section hvac-lp-contact" id="request-service" aria-labelledby="contact-title">
        <div class="container hvac-lp-contact-grid">
            <div class="hvac-lp-contact-copy">
                <p class="hvac-lp-eyebrow">Request a callback</p>
                <h2 id="contact-title">Tell us what is happening with your AC.</h2>
                <p>Submit your request and the team will call to discuss availability and the appropriate next step.</p>
                <a class="hvac-lp-contact-phone js-phone-cta" href="tel:+19152213516"><span>Prefer to call?</span><strong>(915) 221-3516</strong></a>
                <div class="hvac-lp-fee-note">
                    <strong>No payment to request help</strong>
                    <p>The $50 reservation fee is discussed and collected only after an appointment time is confirmed. Diagnostic and repair charges are separate.</p>
                </div>
            </div>

            <div class="hvac-lp-form-shell">
                <div class="hvac-lp-form-heading">
                    <p>Residential AC request</p>
                    <h3>Request my callback</h3>
                    <span>Required fields are marked with an asterisk.</span>
                </div>
                <?php include '../includes/contact-form-hvac.php'; ?>
            </div>
        </div>
    </section>

    <section class="hvac-lp-section hvac-lp-faq" aria-labelledby="faq-title">
        <div class="container hvac-lp-faq-grid">
            <div><p class="hvac-lp-eyebrow">Before you request service</p><h2 id="faq-title">Common questions.</h2></div>
            <div>
                <details open><summary>Does submitting the form book an appointment?</summary><p>No. It requests a callback. The team confirms service availability and appointment options with you first.</p></details>
                <details><summary>When is the $50 reservation fee charged?</summary><p>Only after you select and confirm an appointment time. There is no charge for submitting the form.</p></details>
                <details><summary>Is the diagnostic included in the reservation fee?</summary><p>No. The reservation fee, diagnostic service, repair work, equipment, and installation are separate charges.</p></details>
                <details><summary>Do you provide commercial HVAC service?</summary><p>This campaign and request form are for residential AC repair and residential replacement inquiries.</p></details>
            </div>
        </div>
    </section>

    <section class="hvac-lp-final-cta">
        <div class="container">
            <div><p>Residential AC repair in El Paso</p><h2>Ready to request help?</h2></div>
            <div class="hvac-lp-actions">
                <a class="hvac-lp-button hvac-lp-button-light js-phone-cta" href="tel:+19152213516">Call (915) 221-3516</a>
                <a class="hvac-lp-button hvac-lp-button-outline" href="#request-service">Request a callback</a>
            </div>
        </div>
    </section>

    <div class="hvac-lp-mobile-bar" aria-label="AC repair contact options">
        <a class="js-phone-cta" href="tel:+19152213516">Call now</a>
        <a href="#request-service">Request callback</a>
    </div>
</main>

<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "HVACBusiness",
    "name": "RS Real Estate Solutions",
    "url": "https://rsrealestatesolutionsep.com/hvac-repair-el-paso/",
    "telephone": "+1-915-221-3516",
    "areaServed": {"@type": "City", "name": "El Paso"},
    "serviceType": ["Residential AC Repair", "Residential HVAC Replacement", "Residential HVAC Installation"]
}
</script>

<?php include '../includes/footer.php'; ?>
