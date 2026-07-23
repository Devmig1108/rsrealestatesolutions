<?php
// We need to load the secure environment variables here so we can access 
// the FORM_TOKEN_SECRET and TURNSTILE_SITE_KEY when rendering the form.
$envPath = __DIR__ . '/../config/secure_env.php';
if (file_exists($envPath)) {
    require_once $envPath;
}

// Generate the stateless signed form token
$tokenSecret = defined('FORM_TOKEN_SECRET') ? FORM_TOKEN_SECRET : 'missing_secret';
$issuedAt = time();
$nonce = bin2hex(random_bytes(16));
$payload = $issuedAt . '.' . $nonce;
$signature = hash_hmac('sha256', $payload, $tokenSecret);
$formToken = base64_encode($issuedAt . '.' . $nonce . '.' . $signature);

// Grab the Turnstile Site Key
$turnstileSiteKey = defined('TURNSTILE_SITE_KEY') ? TURNSTILE_SITE_KEY : '';
?>

<script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>

<form class="contact-form" action="/process-form.php" method="post">
  
  <div style="display:none;" aria-hidden="true">
    <label>Leave this field blank
      <input type="text" name="website_verification_code" tabindex="-1" autocomplete="off">
    </label>
  </div>

  <input type="hidden" name="form_token" value="<?php echo htmlspecialchars($formToken, ENT_QUOTES, 'UTF-8'); ?>">

  <div class="field-row">
    <label>Full Name<input type="text" name="name" autocomplete="name" required></label>
    <label>Phone Number<input type="tel" name="phone" autocomplete="tel" required></label>
  </div>
  
  <div class="field-row">
    <label>Email Address<input type="email" name="email" autocomplete="email" required></label>
    <label>Service Needed
      <select name="service" required>
        <option value="">Choose a service</option>
        <option>Remodeling</option>
        <option>Construction Services</option>
        <option>Real Estate Solutions</option>
        <option>HVAC Services</option>
        <option>Not Sure Yet</option>
      </select>
    </label>
  </div>
  
  <label>Property Location<input type="text" name="location" placeholder="El Paso, TX or surrounding area"></label>
  <label>Tell Us About the Property<textarea name="message" rows="6" required></textarea></label>
  
  <?php if (!empty($turnstileSiteKey)): ?>
    <div class="cf-turnstile" data-sitekey="<?php echo htmlspecialchars($turnstileSiteKey, ENT_QUOTES, 'UTF-8'); ?>" data-theme="dark" style="margin-bottom: 20px;"></div>
  <?php else: ?>
    <p style="color: #ff4444; font-size: 0.85rem; margin-bottom: 20px;">Turnstile Site Key is missing. Form submission will fail.</p>
  <?php endif; ?>

  <button class="button dark-button" type="submit">Send Consultation Request</button>
  
  <?php if (isset($_GET['status'])): ?>
    <div class="form-feedback" style="margin-top: 15px; font-weight: 600; <?php echo $_GET['status'] === 'success' ? 'color: #4CAF50;' : 'color: #ff4444;'; ?>">
      <?php 
        if ($_GET['status'] === 'success') {
            echo "Thank you! Your request has been sent successfully.";
        } elseif ($_GET['status'] === 'error') {
            echo "There was an error validating your submission. Please try again.";
        } elseif ($_GET['status'] === 'mail_error') {
            echo "There was a technical issue sending your request. Please call us directly.";
        }
      ?>
    </div>
  <?php endif; ?>
</form>