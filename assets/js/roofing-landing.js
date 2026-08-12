/* ==========================================================================
   RS REAL ESTATE SOLUTIONS
   ROOFING GOOGLE ADS LANDING PAGE

   File:
   /assets/js/roofing-landing.js

   Handles:
   - Smooth internal CTA scrolling
   - Form focus after CTA click
   - Phone click tracking
   - Form-scroll CTA tracking
   - FAQ accordion behavior
   - Google Analytics event hooks
   ========================================================================== */

document.addEventListener('DOMContentLoaded', function () {

    'use strict';


    /* ======================================================================
       HELPERS
       ====================================================================== */

    /**
     * Send an event to Google Analytics if gtag is available.
     *
     * This does NOT replace your Google Ads conversion action.
     * It simply gives us useful GA4 events that can later be imported
     * or paired with a Google Ads conversion event.
     */
    function trackEvent(eventName, parameters = {}) {

        if (typeof window.gtag !== 'function') {
            return;
        }

        window.gtag(
            'event',
            eventName,
            parameters
        );

    }


    /**
     * Determine the height of the fixed website header.
     */
    function getHeaderHeight() {

        const header =
            document.querySelector('.site-header');

        if (!header) {
            return 0;
        }

        return header.offsetHeight;

    }


    /**
     * Smoothly scroll to an element while accounting for
     * the fixed RS navigation.
     */
    function scrollToElement(element) {

        if (!element) {
            return;
        }

        const headerOffset =
            getHeaderHeight();

        const extraSpacing = 20;

        const elementPosition =
            element.getBoundingClientRect().top +
            window.scrollY;

        const scrollPosition =
            elementPosition -
            headerOffset -
            extraSpacing;

        window.scrollTo({
            top: scrollPosition,
            behavior: 'smooth'
        });

    }


    /* ======================================================================
       INTERNAL LANDING-PAGE CTA LINKS
       ====================================================================== */

    const internalLinks =
        document.querySelectorAll(
            '.roof-lp a[href^="#"]'
        );


    internalLinks.forEach(function (link) {

        link.addEventListener(
            'click',
            function (event) {

                const targetId =
                    link.getAttribute('href');

                /*
                 * Ignore empty hashes.
                 */
                if (
                    !targetId ||
                    targetId === '#'
                ) {
                    return;
                }


                const target =
                    document.querySelector(targetId);


                if (!target) {
                    return;
                }


                event.preventDefault();


                scrollToElement(target);


                /*
                 * If this CTA sends the visitor to the
                 * roofing request form, record the action.
                 */
                if (targetId === '#roof-request') {

                    trackEvent(
                        'roofing_request_cta_click',
                        {
                            service: 'roofing',
                            page_type: 'google_ads_landing_page',
                            destination: 'roof_request_form'
                        }
                    );


                    /*
                     * Once scrolling has mostly finished,
                     * put keyboard focus into the first
                     * usable form field.
                     */
                    window.setTimeout(
                        function () {

                            const firstField =
                                target.querySelector(
                                    'input:not([type="hidden"]):not([type="submit"]), select, textarea'
                                );

                            if (firstField) {

                                firstField.focus({
                                    preventScroll: true
                                });

                            }

                        },
                        700
                    );

                }

            }
        );

    });


    /* ======================================================================
       PHONE CALL TRACKING
       ====================================================================== */

    const phoneLinks =
        document.querySelectorAll(
            '.roof-lp a[href^="tel:"]'
        );


    phoneLinks.forEach(function (link) {

        link.addEventListener(
            'click',
            function () {

                trackEvent(
                    'roofing_phone_click',
                    {
                        service: 'roofing',
                        page_type: 'google_ads_landing_page',
                        phone_number: '915-221-3516',
                        link_location:
                            getPhoneLinkLocation(link)
                    }
                );

            }
        );

    });


    /**
     * Helps us identify which phone CTA produced the click.
     */
    function getPhoneLinkLocation(link) {

        if (
            link.closest('.roof-lp-hero')
        ) {
            return 'hero';
        }


        if (
            link.closest('.roof-lp-phone-band')
        ) {
            return 'mid_page_phone_band';
        }


        if (
            link.closest('.roof-lp-contact')
        ) {
            return 'contact_section';
        }


        if (
            link.closest('.roof-lp-final')
        ) {
            return 'final_cta';
        }


        if (
            link.closest('.roof-lp-mobile-bar')
        ) {
            return 'mobile_sticky_bar';
        }


        return 'other';

    }


    /* ======================================================================
       DATA-CONVERSION-ACTION TRACKING
       ====================================================================== */

    const conversionLinks =
        document.querySelectorAll(
            '.roof-lp [data-conversion-action]'
        );


    conversionLinks.forEach(function (element) {

        element.addEventListener(
            'click',
            function () {

                const action =
                    element.dataset.conversionAction;


                /*
                 * Phone links are already tracked through
                 * roofing_phone_click above.
                 */
                if (
                    action === 'roof-phone-call'
                ) {
                    return;
                }


                trackEvent(
                    'roofing_conversion_action',
                    {
                        service: 'roofing',
                        page_type: 'google_ads_landing_page',
                        conversion_action: action
                    }
                );

            }
        );

    });


    /* ======================================================================
       FAQ ACCORDION
       ====================================================================== */

    const faqItems =
        document.querySelectorAll(
            '.roof-lp-faq-list details'
        );


    faqItems.forEach(function (item) {

        item.addEventListener(
            'toggle',
            function () {

                /*
                 * Do nothing when this FAQ is closing.
                 */
                if (!item.open) {
                    return;
                }


                /*
                 * Close the other FAQ items.
                 *
                 * This keeps the section visually compact,
                 * especially on mobile.
                 */
                faqItems.forEach(
                    function (otherItem) {

                        if (
                            otherItem !== item &&
                            otherItem.open
                        ) {
                            otherItem.open = false;
                        }

                    }
                );


                const question =
                    item.querySelector('summary');


                if (question) {

                    trackEvent(
                        'roofing_faq_open',
                        {
                            service: 'roofing',
                            question:
                                question.textContent
                                    .replace(/\s+/g, ' ')
                                    .trim()
                        }
                    );

                }

            }
        );

    });


    /* ======================================================================
       FORM INTERACTION TRACKING
       ====================================================================== */

    const forms =
        document.querySelectorAll(
            '.roof-lp form'
        );


    forms.forEach(function (form) {

        let formStarted = false;


        /*
         * Track the first meaningful interaction with the form.
         *
         * We only fire this once per form.
         */
        form.addEventListener(
            'focusin',
            function () {

                if (formStarted) {
                    return;
                }


                formStarted = true;


                trackEvent(
                    'roofing_form_start',
                    {
                        service: 'roofing',
                        page_type: 'google_ads_landing_page'
                    }
                );

            }
        );


        /*
         * Track submission attempt.
         *
         * Your server-side form processing determines whether
         * the submission actually succeeds.
         */
        form.addEventListener(
            'submit',
            function () {

                trackEvent(
                    'roofing_form_submit_attempt',
                    {
                        service: 'roofing',
                        page_type: 'google_ads_landing_page'
                    }
                );

            }
        );

    });


    /* ======================================================================
       MOBILE STICKY CTA VISIBILITY
       ====================================================================== */

    const mobileBar =
        document.querySelector(
            '.roof-lp-mobile-bar'
        );

    const contactSection =
        document.querySelector(
            '#roof-request'
        );


    /*
     * The CSS already hides the mobile bar on desktop.
     *
     * On mobile, we reduce its prominence once the user reaches
     * the actual form so it doesn't cover form controls.
     */
    if (
        mobileBar &&
        contactSection &&
        'IntersectionObserver' in window
    ) {

        const contactObserver =
            new IntersectionObserver(

                function (entries) {

                    entries.forEach(
                        function (entry) {

                            if (entry.isIntersecting) {

                                mobileBar.classList.add(
                                    'is-contact-visible'
                                );

                            } else {

                                mobileBar.classList.remove(
                                    'is-contact-visible'
                                );

                            }

                        }
                    );

                },

                {
                    threshold: 0.15
                }

            );


        contactObserver.observe(
            contactSection
        );

    }


});