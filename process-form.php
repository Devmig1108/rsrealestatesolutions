<?php

$formDebug = true;

function loadSecureEnvForProcessForm(): void
{
    static $loaded = false;

    if ($loaded) {
        return;
    }

    $possiblePaths = [
        __DIR__ . '/../config/secure_env.php',
        __DIR__ . '/../../config/secure_env.php',
        __DIR__ . '/config/secure_env.php',
        isset($_SERVER['DOCUMENT_ROOT'])
            ? rtrim($_SERVER['DOCUMENT_ROOT'], '/') . 'config/secure_env.php'
            : null,
    ];

    foreach ($possiblePaths as $path) {
        if ($path && file_exists($path)) {
            require_once $path;
            $loaded = true;
            return;
        }
    }

    error_log('secure_env.php not found in process-form.php. Checked paths: ' . print_r($possiblePaths, true));
    http_response_code(500);
    exit('Configuration file not found.');
}

loadSecureEnvForProcessForm();

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: index.php");
    exit;
}

// Updated Recipient for RS Real Estate
$recipient_email = "miguel@ervotechep.com";

function getClientIp(): string
{
    return $_SERVER['REMOTE_ADDR'] ?? 'unknown';
}

function getReturnUrl(): string
{
    $fallback = 'index.php';
    $referer = $_SERVER['HTTP_REFERER'] ?? '';

    if (empty($referer)) {
        return $fallback;
    }

    $refererParts = parse_url($referer);
    $currentHost = $_SERVER['HTTP_HOST'] ?? '';

    if (
        !$refererParts ||
        empty($refererParts['host']) ||
        strcasecmp($refererParts['host'], $currentHost) !== 0
    ) {
        return $fallback;
    }

    return $refererParts['path'] ?? $fallback;
}

function redirectWithStatus(string $status, ?string $reason = null): void
{
    $returnUrl = getReturnUrl();

    $query = [
        'status' => $status,
    ];

    if ($reason) {
        $query['debug_reason'] = $reason;
    }

    header("Location: " . $returnUrl . "?" . http_build_query($query));
    exit;
}

function getPostDebugSummary(): array
{
    return [
        'post_keys' => array_keys($_POST),
        'has_name' => isset($_POST['name']) && trim((string) $_POST['name']) !== '',
        'has_phone' => isset($_POST['phone']) && trim((string) $_POST['phone']) !== '',
        'has_service' => isset($_POST['service']) && trim((string) $_POST['service']) !== '',
        'has_form_token' => isset($_POST['form_token']) && trim((string) $_POST['form_token']) !== '',
        'has_turnstile_response' => isset($_POST['cf-turnstile-response']) && trim((string) $_POST['cf-turnstile-response']) !== '',
        'name_length' => isset($_POST['name']) ? strlen(trim((string) $_POST['name'])) : 0,
        'phone_length' => isset($_POST['phone']) ? strlen(trim((string) $_POST['phone'])) : 0,
        'service_value' => isset($_POST['service']) ? trim((string) $_POST['service']) : '',
    ];
}

function logSubmissionEvent(string $type, string $reason, array $extra = []): void
{
    $logFile = __DIR__ . '/form-debug-log.jsonl';

    $entry = [
        'time' => date('c'),
        'type' => $type,
        'reason' => $reason,
        'ip' => getClientIp(),
        'user_agent' => $_SERVER['HTTP_USER_AGENT'] ?? '',
        'post_debug' => getPostDebugSummary(),
        'extra' => $extra,
    ];

    $encoded = json_encode($entry, JSON_UNESCAPED_SLASHES);

    if ($encoded) {
        @file_put_contents($logFile, $encoded . PHP_EOL, FILE_APPEND | LOCK_EX);
    }
}

function blockedExit(string $reason, array $extra = []): void
{
    global $formDebug;

    logSubmissionEvent('blocked', $reason, $extra);

    if ($formDebug) {
        redirectWithStatus('error', $reason);
    }

    redirectWithStatus('success');
}

function verifySignedFormToken(string $token, int $maxAgeSeconds = 7200): bool
{
    if (empty($token)) {
        return false;
    }

    if (!defined('FORM_TOKEN_SECRET') || empty(FORM_TOKEN_SECRET)) {
        error_log('Missing FORM_TOKEN_SECRET.');
        return false;
    }

    $decoded = base64_decode($token, true);

    if ($decoded === false) {
        return false;
    }

    $parts = explode('.', $decoded);

    if (count($parts) !== 3) {
        return false;
    }

    [$issuedAt, $nonce, $signature] = $parts;

    if (!ctype_digit($issuedAt)) {
        return false;
    }

    $issuedAt = (int) $issuedAt;

    if ($issuedAt <= 0) {
        return false;
    }

    $age = time() - $issuedAt;

    if ($age < 0 || $age > $maxAgeSeconds) {
        return false;
    }

    if (!preg_match('/^[a-f0-9]{32}$/', $nonce)) {
        return false;
    }

    $payload = $issuedAt . '.' . $nonce;
    $expectedSignature = hash_hmac('sha256', $payload, FORM_TOKEN_SECRET);

    return hash_equals($expectedSignature, $signature);
}

function postFirst(array $keys, int $maxLength = 1000): string
{
    foreach ($keys as $key) {
        if (isset($_POST[$key]) && !is_array($_POST[$key]) && trim((string) $_POST[$key]) !== '') {
            $value = trim((string) $_POST[$key]);
            $value = strip_tags($value);

            if (function_exists('mb_substr')) {
                return mb_substr($value, 0, $maxLength);
            }

            return substr($value, 0, $maxLength);
        }
    }

    return '';
}

function rateLimit(int $limit = 15, int $windowSeconds = 600): bool
{
    $ip = getClientIp();
    $key = hash('sha256', $ip);
    // Updated temp file name for RS Real Estate
    $file = sys_get_temp_dir() . "/rsrealestate_contact_rate_{$key}.json";

    $now = time();
    $data = [
        'count' => 0,
        'start' => $now,
    ];

    if (file_exists($file)) {
        $existing = json_decode((string) file_get_contents($file), true);

        if (is_array($existing) && isset($existing['count'], $existing['start'])) {
            $data = $existing;
        }
    }

    if (($now - (int) $data['start']) > $windowSeconds) {
        $data = [
            'count' => 0,
            'start' => $now,
        ];
    }

    $data['count']++;

    @file_put_contents($file, json_encode($data), LOCK_EX);

    return $data['count'] <= $limit;
}

function verifyTurnstile(string $token): bool
{
    if (empty($token)) {
        error_log("Turnstile failed: missing cf-turnstile-response token.");
        return false;
    }

    if (!defined('TURNSTILE_SECRET_KEY') || empty(TURNSTILE_SECRET_KEY)) {
        error_log("Turnstile failed: missing TURNSTILE_SECRET_KEY.");
        return false;
    }

    $ch = curl_init('https://challenges.cloudflare.com/turnstile/v0/siteverify');

    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => http_build_query([
            'secret' => TURNSTILE_SECRET_KEY,
            'response' => $token,
            'remoteip' => getClientIp(),
        ]),
        CURLOPT_HTTPHEADER => [
            'Content-Type: application/x-www-form-urlencoded',
        ],
        CURLOPT_TIMEOUT => 8,
    ]);

    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $curlError = curl_error($ch);

    curl_close($ch);

    if ($response === false || !empty($curlError)) {
        error_log("Turnstile cURL Error: " . $curlError);
        return false;
    }

    $result = json_decode($response, true);

    if ($httpCode !== 200 || !is_array($result)) {
        error_log("Turnstile Verify Error: HTTP {$httpCode}. Response: " . $response);
        return false;
    }

    if (empty($result['success'])) {
        error_log("Turnstile validation failed. Response: " . $response);
        return false;
    }

    return true;
}

function getSpamReasons(string $name, string $phone, string $location, string $email, string $service, string $message): array
{
    $combined = strtolower($name . ' ' . $phone . ' ' . $location . ' ' . $email . ' ' . $service . ' ' . $message);
    $reasons = [];

    $urlCount = substr_count($combined, 'http://') + substr_count($combined, 'https://') + substr_count($combined, 'www.');

    if ($urlCount >= 1) {
        $reasons[] = 'contains_url';
    }

    if (preg_match('/\b(casino|viagra|cialis|levitra|crypto|bitcoin|forex|loan|payday|backlink|backlinks|guest post|seo services|rank on google|telegram|whatsapp marketing)\b/i', $combined)) {
        $reasons[] = 'spam_keywords';
    }

    if (preg_match('/\[url=|\<a\s+href/i', $combined)) {
        $reasons[] = 'link_markup';
    }

    return $reasons;
}

/**
 * 1. Honeypot
 */
if (!empty($_POST['website_verification_code'] ?? '')) {
    blockedExit('honeypot_filled');
}

/**
 * 2. Stateless signed form token
 */
$formToken = $_POST['form_token'] ?? '';

if (!verifySignedFormToken($formToken)) {
    blockedExit('invalid_form_token');
}

/**
 * 3. Rate limit
 */
if (!rateLimit(15, 600)) {
    blockedExit('rate_limited');
}

/**
 * 4. Grab fields (Mapped to RS Real Estate HTML Form)
 */
$name = postFirst(['name', 'fullName', 'fullname'], 100);
$phone = postFirst(['phone', 'phoneNumber', 'telephone', 'tel'], 30);
$location = postFirst(['location', 'propertyLocation', 'property_location'], 200);
$email = filter_var(trim((string) ($_POST['email'] ?? $_POST['emailAddress'] ?? '')), FILTER_SANITIZE_EMAIL);
$service = postFirst(['service', 'serviceNeeded', 'service_type'], 100);
$message = postFirst(['message', 'comments', 'details'], 1500);

if (empty($message)) {
    $message = "No additional message provided.";
}

/**
 * 5. Validate required fields
 */
if (empty($name) || empty($phone) || empty($service)) {
    logSubmissionEvent('validation_error', 'missing_required_fields', [
        'name_empty' => empty($name),
        'phone_empty' => empty($phone),
        'service_empty' => empty($service),
    ]);

    redirectWithStatus('error', 'missing_required_fields');
}

$phoneDigits = preg_replace('/\D+/', '', $phone);

if (strlen($phoneDigits) < 10) {
    logSubmissionEvent('validation_error', 'invalid_phone', [
        'phone_digits_count' => strlen($phoneDigits),
    ]);

    redirectWithStatus('error', 'invalid_phone');
}

if (!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    logSubmissionEvent('validation_error', 'invalid_email');
    redirectWithStatus('error', 'invalid_email');
}

/**
 * 6. Service value check for RS Real Estate
 * Log only.
 */
$allowedServices = [
    'Remodeling',
    'Construction Services',
    'Real Estate Solutions',
    'HVAC Services',
    'Not Sure Yet',
];

if (!in_array($service, $allowedServices, true)) {
    logSubmissionEvent('warning', 'unexpected_service_value', [
        'service' => $service,
    ]);
}

/**
 * 7. Content spam filter
 * Log only.
 */
$spamReasons = getSpamReasons($name, $phone, $location, $email, $service, $message);

if (!empty($spamReasons)) {
    logSubmissionEvent('warning', 'content_filter_' . implode('_', $spamReasons));
}

/**
 * 8. Turnstile verification
 */
$turnstileToken = $_POST['cf-turnstile-response'] ?? '';

if (!verifyTurnstile($turnstileToken)) {
    blockedExit('turnstile_failed');
}

/**
 * 9. ZeptoMail
 */
if (!defined('ZEPTO_API_KEY') || empty(ZEPTO_API_KEY)) {
    error_log("Missing ZEPTO_API_KEY");
    redirectWithStatus('mail_error', 'missing_zepto_api_key');
}

$apiKey = ZEPTO_API_KEY;
$url = "https://api.zeptomail.com/v1.1/email";

$safeName = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
$safePhone = htmlspecialchars($phone, ENT_QUOTES, 'UTF-8');
$safeLocation = htmlspecialchars($location, ENT_QUOTES, 'UTF-8');
$safeEmail = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
$safeService = htmlspecialchars($service, ENT_QUOTES, 'UTF-8');
$safeMessage = nl2br(htmlspecialchars($message, ENT_QUOTES, 'UTF-8'));
$safeIp = htmlspecialchars(getClientIp(), ENT_QUOTES, 'UTF-8');

$subject = "New Property Consultation: {$service} - {$name}";

$htmlBody = "
    <h2>New Property Consultation Request</h2>
    <p><strong>Name:</strong> {$safeName}</p>
    <p><strong>Phone:</strong> {$safePhone}</p>
    <p><strong>Email:</strong> {$safeEmail}</p>
    <p><strong>Property Location:</strong> {$safeLocation}</p>
    <p><strong>Service Requested:</strong> {$safeService}</p>
    <p><strong>Property Details/Message:</strong><br>{$safeMessage}</p>
    <hr>
    <p style=\"font-size:12px;color:#666;\"><strong>Submitted IP:</strong> {$safeIp}</p>
";

$payload = json_encode([
    "from" => [
        "address" => "services@rsrealestatesolutions.com", // Ensure this domain is verified in ZeptoMail
        "name" => "RS Real Estate Website"
    ],
    "to" => [
        [
            "email_address" => [
                "address" => $recipient_email,
                "name" => "RS Real Estate Team"
            ]
        ]
    ],
    "subject" => $subject,
    "htmlbody" => $htmlBody,
    "bounce_address" => "bounce@bounce-zem.rsrealestatesolutions.com" // Ensure this bounce domain is configured
]);

if (!$payload) {
    error_log("ZeptoMail Payload JSON Error");
    redirectWithStatus('mail_error', 'payload_json_error');
}

$ch = curl_init($url);

curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $payload,
    CURLOPT_HTTPHEADER => [
        "Content-Type: application/json",
        "Authorization: {$apiKey}",
        "Accept: application/json"
    ],
    CURLOPT_TIMEOUT => 10,
]);

$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$curlError = curl_error($ch);

curl_close($ch);

if ($response === false || !empty($curlError)) {
    error_log("ZeptoMail cURL Error: " . $curlError);
    redirectWithStatus('mail_error', 'zepto_curl_error');
}

if ($httpCode == 201) {
    logSubmissionEvent('sent', 'email_sent_successfully');
    redirectWithStatus('success');
}

error_log("ZeptoMail API Error. HTTP {$httpCode}. Response: " . $response);
redirectWithStatus('mail_error', 'zepto_http_' . $httpCode);