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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?></title>
    <meta name="description" content="<?= htmlspecialchars($metaDescription, ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="robots" content="<?= htmlspecialchars($robots, ENT_QUOTES, 'UTF-8'); ?>">
    <link rel="canonical" href="<?= htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?= htmlspecialchars($ogTitle, ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:description" content="<?= htmlspecialchars($ogDescription, ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:url" content="<?= htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:image" content="<?= htmlspecialchars($ogImage, ENT_QUOTES, 'UTF-8'); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/hvac-landing.css">
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-XHQY4LSFF4"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-XHQY4LSFF4');
        gtag('config', 'AW-18355036842');
    </script>
</head>
<body class="hvac-landing-body">

<header class="hvac-lp-header">
    <div class="container">
        <a class="hvac-lp-brand" href="/" aria-label="RS Real Estate Solutions home"><strong>RS</strong><span>Real Estate Solutions</span></a>
        <a class="hvac-lp-header-call" href="tel:+19152213516"><span>Weekday business hours</span><strong>(915) 221-3516</strong></a>
    </div>
</header>

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

</body>
</html>
