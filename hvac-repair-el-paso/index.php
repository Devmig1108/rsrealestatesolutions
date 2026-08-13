:root {
    --hvac-ink: #0b121b;
    --hvac-navy: #0b121b;
    --hvac-navy-deep: #070c12;
    --hvac-blue: #c89b5b;
    --hvac-blue-light: #f4eadb;
    --hvac-coral: #c89b5b;
    --hvac-coral-dark: #98703d;
    --hvac-cream: #f6f7f8;
    --hvac-white: #ffffff;
    --hvac-muted: #5f6b76;
    --hvac-border: #dde2e5;
    --hvac-shadow: 0 22px 70px rgba(7, 12, 18, 0.14);
    --hvac-radius: 22px;
}

body.hvac-landing-body {
    margin: 0;
    color: var(--hvac-ink);
    background: var(--hvac-white);
}

/* Keep paid-search visitors focused while retaining the real RS site header. */
body.hvac-landing-body .site-header .main-nav,
body.hvac-landing-body .site-header .social-links,
body.hvac-landing-body .site-header .nav-toggle,
body.hvac-landing-body .site-header .nav-toggle-label {
    display: none !important;
}

body.hvac-landing-body .site-header .nav-wrap {
    justify-content: space-between;
}

body.hvac-landing-body .site-header .header-actions {
    display: flex;
    margin-left: auto;
}

.hvac-lp,
.hvac-lp * {
    box-sizing: border-box;
}

.hvac-lp {
    color: var(--hvac-ink);
    font-family: Inter, "Helvetica Neue", Arial, sans-serif;
    line-height: 1.55;
    overflow: hidden;
}

.hvac-lp .container,
.hvac-lp-header .container,
.hvac-lp-footer .container {
    width: min(1160px, calc(100% - 40px));
    margin-inline: auto;
}

.hvac-lp-skip {
    position: fixed;
    z-index: 10000;
    top: -60px;
    left: 15px;
    padding: 10px 14px;
    color: var(--hvac-white);
    background: var(--hvac-navy);
}

.hvac-lp-skip:focus {
    top: 10px;
}

.hvac-lp-header {
    padding: 14px 0;
    background: var(--hvac-white);
    border-bottom: 1px solid var(--hvac-border);
    font-family: Manrope, Arial, sans-serif;
}

.hvac-lp-header .container {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 25px;
}

.hvac-lp-brand,
.hvac-lp-header-call {
    text-decoration: none;
}

.hvac-lp-brand {
    display: flex;
    align-items: center;
    gap: 10px;
    color: var(--hvac-navy);
}

.hvac-lp-brand strong {
    display: grid;
    width: 42px;
    height: 42px;
    place-items: center;
    color: var(--hvac-white);
    background: var(--hvac-navy);
    border-radius: 50%;
}

.hvac-lp-brand span {
    font-size: 0.82rem;
    font-weight: 800;
}

.hvac-lp-header-call {
    display: flex;
    flex-direction: column;
    align-items: flex-end;
    color: var(--hvac-navy);
}

.hvac-lp-header-call span {
    color: var(--hvac-muted);
    font-size: 0.62rem;
    font-weight: 700;
    letter-spacing: 0.05em;
    text-transform: uppercase;
}

.hvac-lp-header-call strong {
    font-size: 1rem;
}

.hvac-lp h1,
.hvac-lp h2,
.hvac-lp h3,
.hvac-lp p {
    margin-top: 0;
}

.hvac-lp h1,
.hvac-lp h2,
.hvac-lp h3 {
    line-height: 1.08;
}

.hvac-lp h1,
.hvac-lp h2 {
    letter-spacing: -0.045em;
}

.hvac-lp h1 span,
.hvac-lp h2 span {
    color: var(--hvac-blue);
}

.hvac-lp a {
    color: inherit;
}

.hvac-lp-kicker,
.hvac-lp-eyebrow {
    margin-bottom: 16px;
    color: var(--hvac-blue);
    font-size: 0.78rem;
    font-weight: 800;
    letter-spacing: 0.1em;
    text-transform: uppercase;
}

.hvac-lp-kicker {
    display: flex;
    align-items: center;
    gap: 9px;
}

.hvac-lp-kicker span {
    width: 9px;
    height: 9px;
    border-radius: 50%;
    background: var(--hvac-coral);
    box-shadow: 0 0 0 5px rgba(200, 155, 91, 0.16);
}

.hvac-lp-hero {
    position: relative;
    padding: 92px 0 80px;
    background:
        radial-gradient(circle at 83% 12%, rgba(200, 155, 91, 0.15), transparent 30%),
        linear-gradient(135deg, #070c12, #0b121b 55%, #14202c);
}

.hvac-lp-hero::after {
    position: absolute;
    right: -100px;
    bottom: -160px;
    width: 460px;
    height: 460px;
    border: 1px solid rgba(224, 187, 130, 0.18);
    border-radius: 50%;
    content: "";
}

.hvac-lp-hero-grid {
    position: relative;
    z-index: 1;
    display: grid;
    grid-template-columns: minmax(0, 1.08fr) minmax(360px, 0.72fr);
    gap: clamp(50px, 8vw, 105px);
    align-items: center;
}

.hvac-lp-hero h1 {
    max-width: 720px;
    margin-bottom: 26px;
    font-size: clamp(3.25rem, 6.5vw, 6.25rem);
    font-weight: 800;
    color: var(--hvac-white);
}

.hvac-lp-hero h1 span {
    display: block;
}

.hvac-lp-hero-lead {
    max-width: 650px;
    margin-bottom: 28px;
    color: rgba(255, 255, 255, 0.76);
    font-size: clamp(1.05rem, 1.5vw, 1.25rem);
}

.hvac-lp-hero-points {
    display: grid;
    gap: 11px;
    margin: 0 0 32px;
    padding: 0;
    list-style: none;
}

.hvac-lp-hero-points li {
    position: relative;
    padding-left: 31px;
    font-weight: 700;
    color: var(--hvac-white);
}

.hvac-lp-hero-points li::before {
    position: absolute;
    left: 0;
    width: 21px;
    height: 21px;
    color: var(--hvac-navy-deep);
    background: var(--hvac-blue);
    border-radius: 50%;
    content: "✓";
    font-size: 0.75rem;
    line-height: 21px;
    text-align: center;
}

.hvac-lp-actions {
    display: flex;
    flex-wrap: wrap;
    gap: 12px;
    align-items: stretch;
}

.hvac-lp-button {
    display: inline-flex;
    min-height: 58px;
    padding: 14px 22px;
    align-items: center;
    justify-content: center;
    border: 2px solid transparent;
    border-radius: 12px;
    font-weight: 800;
    line-height: 1.15;
    text-align: center;
    text-decoration: none;
    transition: transform 160ms ease, background 160ms ease;
}

.hvac-lp-button:hover {
    transform: translateY(-2px);
}

.hvac-lp-button-primary {
    flex-direction: column;
    color: var(--hvac-navy-deep);
    background: #e0bb82;
    box-shadow: 0 12px 28px rgba(200, 155, 91, 0.24);
}

.hvac-lp-button-primary:hover {
    background: var(--hvac-white);
}

.hvac-lp-button-primary .hvac-lp-button-label {
    margin-bottom: 4px;
    font-size: 0.68rem;
    letter-spacing: 0.055em;
    text-transform: uppercase;
}

.hvac-lp-button-primary strong {
    font-size: 1.08rem;
}

.hvac-lp-button-secondary {
    color: var(--hvac-navy);
    background: var(--hvac-white);
    border-color: var(--hvac-border);
}

.hvac-lp-hero .hvac-lp-button-secondary {
    color: var(--hvac-white);
    background: rgba(255, 255, 255, 0.07);
    border-color: rgba(255, 255, 255, 0.32);
}

.hvac-lp-hero .hvac-lp-button-secondary:hover {
    background: rgba(255, 255, 255, 0.14);
    border-color: rgba(255, 255, 255, 0.58);
}

.hvac-lp-response-note {
    max-width: 610px;
    margin: 16px 0 0;
    color: rgba(255, 255, 255, 0.62);
    font-size: 0.82rem;
}

.hvac-lp-hero-card {
    position: relative;
    padding: clamp(30px, 4vw, 48px);
    color: var(--hvac-white);
    background: var(--hvac-navy-deep);
    border-radius: 28px;
    box-shadow: var(--hvac-shadow);
}

.hvac-lp-hero-card::before {
    position: absolute;
    top: 0;
    left: 34px;
    width: 70px;
    height: 5px;
    background: var(--hvac-coral);
    content: "";
}

.hvac-lp-card-label {
    margin-bottom: 15px;
    color: #e0bb82;
    font-size: 0.72rem;
    font-weight: 800;
    letter-spacing: 0.1em;
    text-transform: uppercase;
}

.hvac-lp-hero-card h2 {
    margin-bottom: 18px;
    font-size: clamp(2rem, 3vw, 2.8rem);
}

.hvac-lp-hero-card > p:not(.hvac-lp-card-label, .hvac-lp-card-note) {
    color: #c8cfd4;
}

.hvac-lp-issue-list {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 8px;
    margin: 24px 0;
}

.hvac-lp-issue-list span {
    padding: 10px 12px;
    color: #edf0f2;
    background: rgba(255, 255, 255, 0.06);
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 9px;
    font-size: 0.79rem;
    font-weight: 700;
}

.hvac-lp-text-link {
    color: #e0bb82 !important;
    font-weight: 800;
    text-decoration: none;
}

.hvac-lp-card-note {
    margin: 22px 0 0;
    color: #aeb6bc;
    font-size: 0.76rem;
}

.hvac-lp-proof-strip {
    color: var(--hvac-white);
    background: var(--hvac-navy);
}

.hvac-lp-proof-strip .container {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
}

.hvac-lp-proof-strip .container > div {
    padding: 25px 20px;
    border-right: 1px solid rgba(255,255,255,0.13);
}

.hvac-lp-proof-strip .container > div:first-child {
    border-left: 1px solid rgba(255,255,255,0.13);
}

.hvac-lp-proof-strip strong,
.hvac-lp-proof-strip span {
    display: block;
}

.hvac-lp-proof-strip strong {
    font-size: 1rem;
}

.hvac-lp-proof-strip span {
    color: #c8cfd4;
    font-size: 0.76rem;
}

.hvac-lp-section {
    padding: clamp(76px, 9vw, 125px) 0;
}

.hvac-lp-section-heading {
    display: grid;
    grid-template-columns: minmax(0, 1fr) minmax(280px, 0.52fr);
    gap: 50px;
    align-items: end;
    margin-bottom: 48px;
}

.hvac-lp-section-heading h2,
.hvac-lp-service-copy h2,
.hvac-lp-contact-copy h2,
.hvac-lp-faq h2 {
    margin-bottom: 0;
    font-size: clamp(2.5rem, 5vw, 4.5rem);
}

.hvac-lp-section-heading > p,
.hvac-lp-service-copy > p,
.hvac-lp-contact-copy > p {
    margin-bottom: 0;
    color: var(--hvac-muted);
}

.hvac-lp-problems {
    background: var(--hvac-white);
}

.hvac-lp-problem-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 16px;
}

.hvac-lp-problem-grid article {
    min-height: 215px;
    padding: 28px;
    background: #f6f9fa;
    border: 1px solid #e3eaed;
    border-radius: 17px;
}

.hvac-lp-problem-grid article > span {
    color: var(--hvac-coral);
    font-size: 0.72rem;
    font-weight: 800;
}

.hvac-lp-problem-grid h3 {
    margin: 34px 0 12px;
    font-size: 1.35rem;
}

.hvac-lp-problem-grid p {
    margin-bottom: 0;
    color: var(--hvac-muted);
    font-size: 0.9rem;
}

.hvac-lp-problem-grid .hvac-lp-problem-cta {
    color: var(--hvac-white);
    background: var(--hvac-navy);
    border-color: var(--hvac-navy);
}

.hvac-lp-problem-cta > span,
.hvac-lp-problem-cta p {
    color: #c8cfd4 !important;
}

.hvac-lp-problem-cta a {
    display: inline-block;
    margin-top: 18px;
    font-weight: 800;
}

.hvac-lp-callout {
    padding: 34px 0;
    color: var(--hvac-white);
    background: var(--hvac-coral);
}

.hvac-lp-callout .container {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 30px;
}

.hvac-lp-callout p,
.hvac-lp-callout h2 {
    margin-bottom: 0;
}

.hvac-lp-callout p {
    font-size: 0.75rem;
    font-weight: 800;
    letter-spacing: 0.08em;
    text-transform: uppercase;
}

.hvac-lp-callout h2 {
    font-size: clamp(1.7rem, 3vw, 2.6rem);
}

.hvac-lp-callout a {
    display: flex;
    min-width: 280px;
    padding: 13px 19px;
    flex-direction: column;
    background: rgba(7, 19, 27, 0.12);
    border: 1px solid rgba(255, 255, 255, 0.32);
    border-radius: 12px;
    text-decoration: none;
}

.hvac-lp-callout a span {
    font-size: 0.72rem;
    text-transform: uppercase;
}

.hvac-lp-callout a strong {
    font-size: 1.35rem;
}

.hvac-lp-service {
    background: var(--hvac-cream);
}

.hvac-lp-service-grid {
    display: grid;
    grid-template-columns: minmax(320px, 0.8fr) minmax(0, 1fr);
    gap: clamp(45px, 8vw, 95px);
    align-items: center;
}

.hvac-lp-service-image {
    position: relative;
    min-height: 420px;
    overflow: hidden;
    background:
        linear-gradient(rgba(7, 12, 18, 0.16), rgba(7, 12, 18, 0.38)),
        url("/assets/hvac.png") center / cover no-repeat,
        var(--hvac-navy);
    border-radius: 24px;
    box-shadow: var(--hvac-shadow);
}

.hvac-lp-service-image.is-image-missing::before {
    position: absolute;
    z-index: 1;
    right: 24px;
    bottom: 22px;
    padding: 8px 11px;
    color: var(--hvac-white);
    background: rgba(7, 12, 18, 0.78);
    border-left: 3px solid var(--hvac-coral);
    content: "Residential AC service";
    font-size: 0.72rem;
    font-weight: 800;
    letter-spacing: 0.06em;
    text-transform: uppercase;
}

.hvac-lp-service-image::after {
    position: absolute;
    right: -18px;
    bottom: -18px;
    width: 45%;
    height: 45%;
    border-right: 5px solid var(--hvac-coral);
    border-bottom: 5px solid var(--hvac-coral);
    content: "";
}

.hvac-lp-service-image img {
    position: relative;
    z-index: 1;
    display: block;
    width: 100%;
    aspect-ratio: 1 / 1;
    object-fit: cover;
    border-radius: 24px;
}

.hvac-lp-service-copy > p {
    margin: 24px 0 30px;
    font-size: 1.04rem;
}

.hvac-lp-service-options {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 12px;
    margin-bottom: 28px;
}

.hvac-lp-service-options article {
    padding: 20px;
    background: var(--hvac-white);
    border-radius: 14px;
}

.hvac-lp-service-options strong,
.hvac-lp-service-options span {
    display: block;
}

.hvac-lp-service-options span {
    margin-top: 7px;
    color: var(--hvac-muted);
    font-size: 0.82rem;
}

.hvac-lp-button-dark {
    color: var(--hvac-white);
    background: var(--hvac-navy);
}

.hvac-lp-process {
    background: var(--hvac-white);
}

.hvac-lp-process ol {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 12px;
    margin: 0;
    padding: 0;
    list-style: none;
}

.hvac-lp-process li {
    padding: 25px;
    border-top: 3px solid var(--hvac-blue);
    background: #f7fafb;
}

.hvac-lp-process li > span {
    display: inline-grid;
    width: 34px;
    height: 34px;
    margin-bottom: 28px;
    place-items: center;
    color: var(--hvac-navy-deep);
    background: var(--hvac-blue);
    border-radius: 50%;
    font-weight: 800;
}

.hvac-lp-process h3 {
    font-size: 1.13rem;
}

.hvac-lp-process li p {
    margin-bottom: 0;
    color: var(--hvac-muted);
    font-size: 0.83rem;
}

.hvac-lp-contact {
    color: var(--hvac-white);
    background: var(--hvac-navy-deep);
}

.hvac-lp-contact-grid {
    display: grid;
    grid-template-columns: minmax(0, 0.8fr) minmax(420px, 0.72fr);
    gap: clamp(45px, 8vw, 95px);
    align-items: start;
}

.hvac-lp-contact-copy h2 span {
    color: #e0bb82;
}

.hvac-lp-contact-copy > p {
    margin: 24px 0;
    color: #c8cfd4;
}

.hvac-lp-contact-phone {
    display: flex;
    padding: 18px;
    flex-direction: column;
    color: var(--hvac-white);
    background: rgba(255,255,255,0.06);
    border: 1px solid rgba(255,255,255,0.14);
    border-radius: 14px;
    text-decoration: none;
}

.hvac-lp-contact-phone span {
    color: #c8cfd4;
    font-size: 0.72rem;
    text-transform: uppercase;
}

.hvac-lp-contact-phone strong {
    font-size: 1.55rem;
}

.hvac-lp-fee-note {
    margin-top: 20px;
    padding: 18px;
    color: #edf0f2;
    background: rgba(200, 155, 91, 0.09);
    border-left: 3px solid #c89b5b;
}

.hvac-lp-fee-note p {
    margin: 6px 0 0;
    font-size: 0.8rem;
}

.hvac-lp-form-shell {
    padding: clamp(25px, 4vw, 42px);
    color: var(--hvac-ink);
    background: var(--hvac-white);
    border-radius: 23px;
    box-shadow: var(--hvac-shadow);
}

.hvac-lp-form-heading {
    margin-bottom: 25px;
}

.hvac-lp-form-heading p {
    margin-bottom: 7px;
    color: var(--hvac-blue);
    font-size: 0.7rem;
    font-weight: 800;
    letter-spacing: 0.08em;
    text-transform: uppercase;
}

.hvac-lp-form-heading h3 {
    margin-bottom: 7px;
    font-size: 2rem;
}

.hvac-lp-form-heading span {
    color: var(--hvac-muted);
    font-size: 0.78rem;
}

.contact-form {
    display: grid;
    gap: 15px;
}

/* Override the global interactive-surface treatment inside this light card. */
.hvac-lp-form-shell .contact-form {
    position: relative;
    padding: 0 !important;
    color: var(--hvac-ink) !important;
    background: transparent !important;
    border: 0 !important;
    border-radius: 0 !important;
    box-shadow: none !important;
}

.hvac-lp-form-shell .contact-form::before,
.hvac-lp-form-shell .contact-form::after {
    display: none !important;
    content: none !important;
}

.contact-form .form-honeypot {
    position: absolute !important;
    left: -10000px !important;
    width: 1px !important;
    height: 1px !important;
    overflow: hidden !important;
}

.contact-form .field-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 12px;
}

.hvac-lp-form-shell .contact-form label {
    display: grid;
    gap: 7px;
    color: #2e414b;
    font-size: 0.78rem;
    font-weight: 800;
}

.hvac-lp-form-shell .contact-form label span {
    color: var(--hvac-muted);
    font-weight: 500;
}

.contact-form input,
.contact-form select,
.contact-form textarea {
    width: 100%;
    min-height: 51px;
    padding: 12px 13px;
    color: var(--hvac-ink);
    background: #fbfcfc;
    border: 1px solid #ccd8dd;
    border-radius: 9px;
    font: inherit;
    font-weight: 500;
}

.contact-form textarea {
    min-height: 95px;
    resize: vertical;
}

.contact-form input:focus,
.contact-form select:focus,
.contact-form textarea:focus {
    outline: 3px solid rgba(200, 155, 91, 0.18);
    border-color: var(--hvac-blue);
}

.contact-form button {
    min-height: 58px;
    color: var(--hvac-white);
    background: var(--hvac-coral);
    border: 0;
    border-radius: 10px;
    cursor: pointer;
    font: inherit;
    font-weight: 800;
}

.contact-form button:hover {
    background: var(--hvac-coral-dark);
}

.contact-form .form-privacy {
    margin: 0;
    color: var(--hvac-muted);
    font-size: 0.68rem;
}

.contact-form .form-config-error,
.contact-form .form-feedback {
    margin: 0;
    padding: 11px 13px;
    border-radius: 8px;
    font-size: 0.78rem;
}

.contact-form .form-config-error,
.contact-form .form-feedback-error {
    color: #842d21;
    background: #fff0ec;
}

.hvac-lp-faq {
    background: var(--hvac-cream);
}

.hvac-lp-faq-grid {
    display: grid;
    grid-template-columns: minmax(260px, 0.5fr) minmax(0, 1fr);
    gap: clamp(45px, 9vw, 110px);
}

.hvac-lp-faq details {
    padding: 20px 0;
    border-bottom: 1px solid #d6ddd9;
}

.hvac-lp-faq summary {
    cursor: pointer;
    font-size: 1.02rem;
    font-weight: 800;
}

.hvac-lp-faq details p {
    margin: 13px 0 0;
    color: var(--hvac-muted);
}

.hvac-lp-final-cta {
    padding: 58px 0;
    color: var(--hvac-white);
    background: var(--hvac-navy-deep);
    border-top: 4px solid var(--hvac-coral);
}

.hvac-lp-final-cta .container {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 35px;
}

.hvac-lp-final-cta p {
    margin-bottom: 8px;
    color: #e0bb82;
    font-size: 0.72rem;
    font-weight: 800;
    letter-spacing: 0.08em;
    text-transform: uppercase;
}

.hvac-lp-final-cta h2 {
    margin-bottom: 0;
    font-size: clamp(2rem, 4vw, 3.6rem);
}

.hvac-lp-button-light {
    color: var(--hvac-navy);
    background: var(--hvac-white);
}

.hvac-lp-final-cta .hvac-lp-button-light {
    color: var(--hvac-navy-deep) !important;
    background: #e0bb82 !important;
    border-color: #e0bb82 !important;
}

.hvac-lp-final-cta .hvac-lp-button-light:hover {
    color: var(--hvac-navy-deep) !important;
    background: var(--hvac-white) !important;
    border-color: var(--hvac-white) !important;
}

.hvac-lp-button-outline {
    color: var(--hvac-white);
    border-color: rgba(255,255,255,0.55);
}

.hvac-lp-mobile-bar {
    display: none;
}

.hvac-lp-footer {
    padding: 25px 0;
    color: #adbdc5;
    background: #050d12;
    font-family: Manrope, Arial, sans-serif;
}

.hvac-lp-footer .container {
    display: flex;
    flex-wrap: wrap;
    gap: 18px 35px;
    align-items: center;
}

.hvac-lp-footer a {
    color: var(--hvac-white);
}

.hvac-thanks {
    min-height: 76vh;
    display: grid;
    place-items: center;
    padding: 70px 20px;
    background: linear-gradient(135deg, #edf0f2, #ffffff 50%, #f4eadb);
}

.hvac-thanks-card {
    width: min(720px, 100%);
    padding: clamp(35px, 6vw, 70px);
    background: var(--hvac-white);
    border-top: 5px solid var(--hvac-coral);
    border-radius: 22px;
    box-shadow: var(--hvac-shadow);
}

.hvac-thanks-card h1 {
    font-size: clamp(2.6rem, 6vw, 4.8rem);
}

.hvac-thanks-card h1 span {
    display: block;
}

@media (max-width: 920px) {
    .hvac-lp-hero-grid,
    .hvac-lp-service-grid,
    .hvac-lp-contact-grid {
        grid-template-columns: 1fr;
    }

    .hvac-lp-hero-card,
    .hvac-lp-form-shell {
        max-width: 680px;
    }

    .hvac-lp-section-heading,
    .hvac-lp-faq-grid {
        grid-template-columns: 1fr;
        gap: 22px;
    }

    .hvac-lp-problem-grid {
        grid-template-columns: repeat(2, 1fr);
    }

    .hvac-lp-process ol {
        grid-template-columns: 1fr 1fr;
    }
}

@media (max-width: 680px) {
    body.hvac-landing-body {
        padding-bottom: 66px;
    }

    .hvac-lp .container,
    .hvac-lp-header .container,
    .hvac-lp-footer .container {
        width: min(100% - 28px, 1160px);
    }

    .hvac-lp-brand span {
        display: none;
    }

    .hvac-lp-hero {
        padding: 65px 0 55px;
    }

    body.hvac-landing-body .site-header .header-actions .button {
        min-height: 44px;
        padding-inline: 14px;
        font-size: 0.72rem;
    }

    .hvac-lp-service-image {
        min-height: 320px;
    }

    .hvac-lp-hero h1 {
        font-size: clamp(3rem, 14vw, 4.25rem);
    }

    .hvac-lp-actions,
    .hvac-lp-callout .container,
    .hvac-lp-final-cta .container {
        align-items: stretch;
        flex-direction: column;
    }

    .hvac-lp-button {
        width: 100%;
    }

    .hvac-lp-proof-strip .container {
        grid-template-columns: 1fr 1fr;
    }

    .hvac-lp-proof-strip .container > div {
        border-bottom: 1px solid rgba(255,255,255,0.13);
    }

    .hvac-lp-problem-grid,
    .hvac-lp-process ol,
    .hvac-lp-service-options,
    .contact-form .field-row {
        grid-template-columns: 1fr;
    }

    .hvac-lp-problem-grid article {
        min-height: 0;
    }

    .hvac-lp-problem-grid h3 {
        margin-top: 22px;
    }

    .hvac-lp-callout a {
        min-width: 0;
    }

    .hvac-lp-mobile-bar {
        position: fixed;
        z-index: 9999;
        right: 0;
        bottom: 0;
        left: 0;
        display: grid;
        grid-template-columns: 1fr 1fr;
        min-height: 66px;
        background: var(--hvac-white);
        border-top: 1px solid var(--hvac-border);
        box-shadow: 0 -10px 30px rgba(7, 19, 27, 0.12);
    }

    .hvac-lp-mobile-bar a {
        display: grid;
        place-items: center;
        font-size: 0.78rem;
        font-weight: 800;
        text-decoration: none;
    }

    .hvac-lp-mobile-bar a:first-child {
        color: var(--hvac-white);
        background: var(--hvac-coral);
    }

    .hvac-lp-mobile-bar a:last-child {
        color: var(--hvac-navy);
    }
}

@media (prefers-reduced-motion: reduce) {
    .hvac-lp *,
    .hvac-lp *::before,
    .hvac-lp *::after {
        scroll-behavior: auto !important;
        transition: none !important;
    }
}
