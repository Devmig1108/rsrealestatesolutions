<?php
// /config/secure_env.php

// 1. Cloudflare Turnstile (Anti-Spam)
define('TURNSTILE_SITE_KEY', '0x4AAAAAAD7eBk33ha0ElhS4');
define('TURNSTILE_SECRET_KEY', '0x4AAAAAAD7eBjx3TlV5FSuook3gOccKzUE');

// 2. Zoho ZeptoMail (Transactional Email API)
define('ZEPTO_API_KEY', 'Zoho-enczapikey wSsVR613/kX4Bqp4zmeqJ7swmQkDDlr2RER/0QGiv376TKzK8cc7kUzLDQ6uT/UWQmFuHTRBoOh/y0wE1DIJjdQuz1oDDiiF9mqRe1U4J3x17qnvhDzMX2VZlxuIKIgNxgRrnGJjE88n+g==');

// 3. Form Token Secret (Prevents cross-site request forgery)
// Generate a random 32-character string for this (e.g., using a password generator)
define('FORM_TOKEN_SECRET', '2164LUMEN525849768TVC65YTB685Om4');