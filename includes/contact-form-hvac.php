<?php

$envPath = __DIR__ . '/../config/secure_env.php';

if (file_exists($envPath)) {
    require_once $envPath;
}

$tokenSecret = defined('FORM_TOKEN_SECRET') ? FORM_TOKEN_SECRET : '';
$issuedAt = time();
$nonce = bin2hex(random_bytes(16));
$payload = $issuedAt . '.' . $nonce;
$signature = $tokenSecret !== '' ? hash_hmac('sha256', $payload, $tokenSecret) : '';
$formToken = base64_encode($issuedAt . '.' . $nonce . '.' . $signature);
$turnstileSiteKey = defined('TURNSTILE_SITE_KEY') ? TURNSTILE_SITE_KEY : '';
$formIsConfigured = $tokenSecret !== '' && $turnstileSiteKey !== '';

?>

<script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>

<form class="contact-form" action="/process-form.php" method="post">
    <div class="form-honeypot" aria-hidden="true">
        <label>Leave this field blank
            <input type="text" name="website_verification_code" tabindex="-1" autocomplete="off">
        </label>
    </div>

    <input type="hidden" name="form_token" value="<?= htmlspecialchars($formToken, ENT_QUOTES, 'UTF-8'); ?>">
    <input type="hidden" name="service" value="HVAC Services">
    <input type="hidden" name="form_context" value="Residential AC Repair Google Ads">

    <div class="field-row">
        <label>Full name *
            <input type="text" name="name" autocomplete="name" maxlength="100" required>
        </label>
        <label>Phone number *
            <input type="tel" name="phone" autocomplete="tel" inputmode="tel" maxlength="30" required>
        </label>
    </div>

    <label>What is the AC doing? *
        <select name="problem" required>
            <option value="">Choose the closest option</option>
            <option>Blowing warm air</option>
            <option>Will not turn on</option>
            <option>Weak or uneven airflow</option>
            <option>Leaking or showing moisture</option>
            <option>Making unusual noises</option>
            <option>Interested in replacement</option>
            <option>Not sure</option>
        </select>
    </label>

    <label>ZIP code or neighborhood
        <input type="text" name="location" autocomplete="postal-code" maxlength="100" placeholder="Example: 79912 or West El Paso">
    </label>

    <label>Anything else we should know?
        <textarea name="message" rows="4" maxlength="1500" placeholder="Optional: when the issue started, system age, or other symptoms"></textarea>
    </label>

    <label>Email address <span>(optional)</span>
        <input type="email" name="email" autocomplete="email" maxlength="200">
    </label>

    <?php if ($formIsConfigured): ?>
        <div class="cf-turnstile" data-sitekey="<?= htmlspecialchars($turnstileSiteKey, ENT_QUOTES, 'UTF-8'); ?>" data-theme="light"></div>
    <?php else: ?>
        <p class="form-config-error">Form verification is not configured. Please call (915) 221-3516.</p>
    <?php endif; ?>

    <button type="submit"<?= $formIsConfigured ? '' : ' disabled'; ?>>Request my callback</button>

    <p class="form-privacy">By submitting, you agree that RS Real Estate Solutions may contact you about this service request. No payment is collected through this form.</p>

    <?php if (isset($_GET['status']) && $_GET['status'] !== 'success'): ?>
        <div class="form-feedback form-feedback-error" role="alert">
            We could not send your request. Please check the form and try again, or call (915) 221-3516.
        </div>
    <?php endif; ?>
</form>
