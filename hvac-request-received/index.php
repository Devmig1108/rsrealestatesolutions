<?php

$pageTitle = 'AC Service Request Received | RS Real Estate Solutions';
$metaDescription = 'Your residential AC service request has been received.';
$canonicalUrl = 'https://rsrealestatesolutionsep.com/hvac-request-received/';
$ogTitle = $pageTitle;
$ogDescription = $metaDescription;
$ogImage = 'https://rsrealestatesolutionsep.com/assets/images/hvac/hvac-service-el-paso.webp';
$robots = 'noindex, nofollow';

$envPath = __DIR__ . '/../config/secure_env.php';

if (file_exists($envPath)) {
    require_once $envPath;
}

$conversionLabel = defined('GOOGLE_ADS_FORM_CONVERSION_LABEL')
    ? GOOGLE_ADS_FORM_CONVERSION_LABEL
    : '';

include '../includes/header.php';
?>

<link rel="stylesheet" href="/assets/css/hvac-landing.css">
<script>
    document.body.classList.add('hvac-landing-body');

    document.addEventListener('DOMContentLoaded', function () {
        const headerCall = document.querySelector('.site-header .header-actions .button');

        if (headerCall) {
            headerCall.href = 'tel:+19152213516';
            headerCall.textContent = 'Call (915) 221-3516';
            headerCall.setAttribute('aria-label', 'Call RS Real Estate Solutions at 915-221-3516');
        }
    });
</script>

<main id="main-content" class="hvac-lp hvac-thanks">
    <section>
        <div class="hvac-thanks-card">
            <p class="hvac-lp-kicker"><span></span> Request received</p>
            <h1>Thank you. <span>We received your AC service request.</span></h1>
            <p>
                The team will review your information and call to discuss availability.
                Requests received during weekday business hours are eligible for a same-day callback.
            </p>
            <div class="hvac-lp-actions">
                <a class="hvac-lp-button hvac-lp-button-primary" href="tel:+19152213516">Call (915) 221-3516</a>
                <a class="hvac-lp-button hvac-lp-button-secondary" href="/hvac-repair-el-paso/">Return to AC repair</a>
            </div>
            <p class="hvac-lp-card-note">No appointment has been booked and no payment has been collected yet.</p>
        </div>
    </section>
</main>

<?php if ($conversionLabel !== ''): ?>
<script>
    gtag('event', 'conversion', {
        'send_to': 'AW-18355036842/<?= htmlspecialchars($conversionLabel, ENT_QUOTES, 'UTF-8'); ?>'
    });
</script>
<?php endif; ?>

<?php include '../includes/footer.php'; ?>
