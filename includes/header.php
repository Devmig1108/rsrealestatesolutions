<?php

/*
|--------------------------------------------------------------------------
| Shared Page Metadata
|--------------------------------------------------------------------------
|
| Individual pages can define these variables BEFORE including header.php.
| If they do not, the normal homepage values below are used.
|
*/

$pageTitle = $pageTitle
    ?? 'RS Real Estate Solutions | Remodeling, Construction, HVAC & Real Estate Services in El Paso, TX';

$metaDescription = $metaDescription
    ?? 'RS Real Estate Solutions helps El Paso homeowners, investors, and property owners improve, repair, reposition, and maximize property value through remodeling, construction, HVAC, and real estate services.';

$metaKeywords = $metaKeywords
    ?? 'El Paso remodeling, construction services El Paso, HVAC services El Paso, roofing services El Paso, real estate solutions El Paso, home renovations El Paso, property investment services';

$robots = $robots
    ?? 'index, follow';

$canonicalUrl = $canonicalUrl
    ?? 'https://rsrealstatesolutions.com/';

$ogTitle = $ogTitle
    ?? "RS Real Estate Solutions | Unlock Your Property's Full Potential";

$ogDescription = $ogDescription
    ?? 'Local remodeling, construction, HVAC, roofing, and real estate solutions for El Paso homeowners and investors.';

$ogImage = $ogImage
    ?? 'https://rsrealstatesolutions.com/images/og-rs-real-estate-solutions.jpg';

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        <?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?>
    </title>

    <meta name="description" content="<?= htmlspecialchars($metaDescription, ENT_QUOTES, 'UTF-8'); ?>">

    <meta name="keywords" content="<?= htmlspecialchars($metaKeywords, ENT_QUOTES, 'UTF-8'); ?>">

    <meta name="robots" content="<?= htmlspecialchars($robots, ENT_QUOTES, 'UTF-8'); ?>">

    <link rel="canonical" href="<?= htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8'); ?>">


    <!-- =========================================================
         OPEN GRAPH
    ========================================================== -->

    <meta property="og:type" content="website">

    <meta property="og:title" content="<?= htmlspecialchars($ogTitle, ENT_QUOTES, 'UTF-8'); ?>">

    <meta property="og:description" content="<?= htmlspecialchars($ogDescription, ENT_QUOTES, 'UTF-8'); ?>">

    <meta property="og:url" content="<?= htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8'); ?>">

    <meta property="og:image" content="<?= htmlspecialchars($ogImage, ENT_QUOTES, 'UTF-8'); ?>">

    <meta name="twitter:card" content="summary_large_image">


    <!-- =========================================================
         FONTS
    ========================================================== -->

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Playfair+Display:wght@600;700&display=swap"
        rel="stylesheet">


    <!-- =========================================================
         GLOBAL STYLES
    ========================================================== -->

    <link rel="stylesheet" href="/styles.css">


    <!-- =========================================================
         PAGE LOAD / ANIMATION SETUP
    ========================================================== -->

    <script>
        document.documentElement.classList.add('js');

        window.setTimeout(function () {
            document.documentElement.classList.add('is-loaded');
        }, 2500);
    </script>

    <script src="/animations.js" defer></script>


    <!-- =========================================================
         ICONS
    ========================================================== -->

    <link rel="icon" type="image/png" sizes="32x32" href="/assets/rs-logo.png">

    <link rel="icon" type="image/x-icon" href="/assets/rs-logo.png">

    <link rel="apple-touch-icon" sizes="180x180" href="/assets/rs-logo.png">


    <!-- =========================================================
         GOOGLE ANALYTICS
    ========================================================== -->

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-XHQY4LSFF4"></script>

    <script>

        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag(
            'config',
            'G-XHQY4LSFF4'
        );

    </script>

    <script>
        gtag('config', 'AW-18355036842/ZBqzCJjtu98cEKrFrrBE', {
            'phone_conversion_number': '(915) 221-3516'
        });
    </script>



    <!-- =========================================================
         LOCAL BUSINESS STRUCTURED DATA
    ========================================================== -->

    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "LocalBusiness",
        "name": "RS Real Estate Solutions",
        "url": "https://rsrealstatesolutions.com/",
        "telephone": "+1-915-221-3516",
        "image": "https://rsrealstatesolutions.com/images/rs-logo.png",

        "description":
            "El Paso property solutions company providing remodeling, construction, HVAC, roofing, and real estate services for homeowners, investors, and property owners.",

        "areaServed": {
            "@type": "City",
            "name": "El Paso"
        },

        "address": {
            "@type": "PostalAddress",
            "addressLocality": "El Paso",
            "addressRegion": "TX",
            "addressCountry": "US"
        },

        "sameAs": [
            "https://www.instagram.com/REPLACE_ME",
            "https://www.tiktok.com/@REPLACE_ME",
            "https://www.youtube.com/@REPLACE_ME"
        ],

        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Property Services",

            "itemListElement": [

                {
                    "@type": "OfferCatalog",
                    "name": "Remodeling Services"
                },

                {
                    "@type": "OfferCatalog",
                    "name": "Construction Services"
                },

                {
                    "@type": "OfferCatalog",
                    "name": "Real Estate Solutions"
                },

                {
                    "@type": "OfferCatalog",
                    "name": "HVAC Services"
                },

                {
                    "@type": "OfferCatalog",
                    "name": "Roofing Services"
                }

            ]
        }
    }
    </script>

</head>


<body>

    <a class="skip-link" href="#main-content">
        Skip to content
    </a>


    <!-- =========================================================
         SITE HEADER
    ========================================================== -->

    <header class="site-header">

        <div class="container nav-wrap">


            <!-- BRAND -->

            <a class="brand" href="/" aria-label="RS Real Estate Solutions home">

                <img src="/assets/rs-logo.png" alt="RS Real Estate Solutions logo">

            </a>


            <!-- MOBILE NAVIGATION TOGGLE -->

            <input class="nav-toggle" type="checkbox" id="nav-toggle" aria-label="Open navigation">

            <label class="nav-toggle-label" for="nav-toggle" aria-hidden="true">
                <span></span>
            </label>


            <!-- =================================================
                 PRIMARY NAVIGATION
            ================================================== -->

            <nav class="main-nav" aria-label="Primary navigation">


                <!-- =============================================
                     SERVICES DROPDOWN
                ============================================== -->

                <div class="services-nav">

                    <button class="services-nav-toggle" type="button" aria-expanded="false"
                        aria-controls="services-nav-menu">

                        <span>
                            Services
                        </span>

                        <svg viewBox="0 0 20 20" aria-hidden="true" focusable="false">
                            <path d="M5 7.5L10 12.5L15 7.5" />
                        </svg>

                    </button>


                    <div class="services-dropdown" id="services-nav-menu">

                        <div class="services-dropdown-header">

                            <span>
                                Property Services
                            </span>

                            <p>
                                Explore specialized services from RS.
                            </p>

                        </div>


                        <a class="services-dropdown-item" href="/hvac-services-el-paso/">

                            <span class="services-dropdown-number">
                                01
                            </span>

                            <span class="services-dropdown-copy">

                                <strong>
                                    HVAC Services
                                </strong>

                                <small>
                                    Heating, cooling, repair,
                                    installation & maintenance
                                </small>

                            </span>

                            <span class="services-dropdown-arrow" aria-hidden="true">
                                →
                            </span>

                        </a>


                        <a class="services-dropdown-item" href="/roofing-services-el-paso/">

                            <span class="services-dropdown-number">
                                02
                            </span>

                            <span class="services-dropdown-copy">

                                <strong>
                                    Roofing Services
                                </strong>

                                <small>
                                    Roof repair, replacement,
                                    inspections & maintenance
                                </small>

                            </span>

                            <span class="services-dropdown-arrow" aria-hidden="true">
                                →
                            </span>

                        </a>

                    </div>

                </div>


                <!-- EXISTING NAV ITEMS -->

                <a href="/#about">
                    About
                </a>

                <a href="/#process">
                    Process
                </a>

                <a href="/#nebula">
                    Nebula
                </a>

                <a href="/#contact">
                    Contact
                </a>

            </nav>


            <!-- =================================================
                 HEADER ACTIONS
            ================================================== -->

            <div class="header-actions">

                <div class="social-links" aria-label="Social media links">

                    <a href="https://www.tiktok.com/@REPLACE_ME" aria-label="TikTok">
                        TT
                    </a>

                    <a href="https://www.youtube.com/@REPLACE_ME" aria-label="YouTube">
                        YT
                    </a>

                    <a href="https://www.instagram.com/REPLACE_ME" aria-label="Instagram">
                        IG
                    </a>

                </div>


                <a class="button button-small" href="/#contact">
                    Request a Consultation
                </a>

            </div>

        </div>

    </header>


    <!-- =========================================================
         SERVICES DROPDOWN CONTROLLER
    ========================================================== -->

    <script>

        document.addEventListener(
            'DOMContentLoaded',
            function () {

                const servicesNav =
                    document.querySelector('.services-nav');

                const servicesToggle =
                    document.querySelector('.services-nav-toggle');


                if (!servicesNav || !servicesToggle) {
                    return;
                }


                /*
                 * Toggle from click/touch.
                 */

                servicesToggle.addEventListener(
                    'click',
                    function (event) {

                        event.stopPropagation();

                        const isOpen =
                            servicesNav.classList.toggle(
                                'is-open'
                            );

                        servicesToggle.setAttribute(
                            'aria-expanded',
                            isOpen ? 'true' : 'false'
                        );

                    }
                );


                /*
                 * Close when clicking outside.
                 */

                document.addEventListener(
                    'click',
                    function (event) {

                        if (
                            !servicesNav.contains(
                                event.target
                            )
                        ) {

                            servicesNav.classList.remove(
                                'is-open'
                            );

                            servicesToggle.setAttribute(
                                'aria-expanded',
                                'false'
                            );

                        }

                    }
                );


                /*
                 * Escape key support.
                 */

                document.addEventListener(
                    'keydown',
                    function (event) {

                        if (event.key !== 'Escape') {
                            return;
                        }

                        servicesNav.classList.remove(
                            'is-open'
                        );

                        servicesToggle.setAttribute(
                            'aria-expanded',
                            'false'
                        );

                        servicesToggle.focus();

                    }
                );

            }
        );

    </script>