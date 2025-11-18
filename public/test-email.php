<?php

/**
 * Email Test Script
 *
 * Upload this file to your server and access it via browser to test email configuration
 * Example: https://survailpro.ca/test-email.php
 *
 * IMPORTANT: Delete this file after testing for security!
 */

// Load Laravel bootstrap
require __DIR__.'/../vendor/autoload.php';
$app = require_once __DIR__.'/../bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
$kernel->bootstrap();

echo "<!DOCTYPE html><html><head><title>Email Test - SurVail</title>";
echo "<style>body{font-family:Arial,sans-serif;max-width:800px;margin:50px auto;padding:20px;}";
echo "pre{background:#f4f4f4;padding:15px;border-radius:5px;overflow-x:auto;}";
echo ".success{color:green;font-weight:bold;}.error{color:red;font-weight:bold;}</style>";
echo "</head><body>";
echo "<h1>Email Configuration Test</h1>";
echo "<pre>";

// Display current email configuration
echo "=== EMAIL CONFIGURATION ===\n";
echo "MAIL_MAILER: " . env('MAIL_MAILER') . "\n";
echo "MAIL_HOST: " . env('MAIL_HOST') . "\n";
echo "MAIL_PORT: " . env('MAIL_PORT') . "\n";
echo "MAIL_USERNAME: " . env('MAIL_USERNAME') . "\n";
echo "MAIL_PASSWORD: " . (env('MAIL_PASSWORD') ? '****' . substr(env('MAIL_PASSWORD'), -3) : 'NOT SET') . "\n";
echo "MAIL_ENCRYPTION: " . env('MAIL_ENCRYPTION') . "\n";
echo "MAIL_FROM_ADDRESS: " . env('MAIL_FROM_ADDRESS') . "\n";
echo "ADMIN_EMAIL: " . env('ADMIN_EMAIL') . "\n";
echo "ENABLE_EMAIL_NOTIFICATIONS: " . (env('ENABLE_EMAIL_NOTIFICATIONS') ? 'true' : 'false') . "\n\n";

echo "=== CACHE CONFIGURATION ===\n";
echo "CACHE_STORE: " . env('CACHE_STORE') . "\n";
echo "QUEUE_CONNECTION: " . env('QUEUE_CONNECTION') . "\n\n";

// Test email sending
if (isset($_GET['send'])) {
    echo "=== SENDING TEST EMAIL ===\n";

    try {
        $testEmail = $_GET['email'] ?? env('ADMIN_EMAIL', 'hr@survailpro.ca');

        \Illuminate\Support\Facades\Mail::raw('This is a test email from SurVail application system. If you received this, your email configuration is working correctly!', function($message) use ($testEmail) {
            $message->to($testEmail)
                    ->subject('Test Email - SurVail System')
                    ->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME', 'SurvailPro'));
        });

        echo "<span class='success'>✓ Test email sent successfully to: {$testEmail}</span>\n";
        echo "Check your inbox (and spam/junk folder)\n";

    } catch (\Exception $e) {
        echo "<span class='error'>✗ ERROR sending email:</span>\n";
        echo $e->getMessage() . "\n";
        echo "\n<strong>Full trace:</strong>\n";
        echo $e->getTraceAsString();
    }
} else {
    echo "=== TEST OPTIONS ===\n";
    $currentUrl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
    echo "To send a test email to hr@survailpro.ca:\n";
    echo "<a href='{$currentUrl}?send=1'>{$currentUrl}?send=1</a>\n\n";
    echo "To test with a specific email:\n";
    echo "{$currentUrl}?send=1&email=your@email.com\n";
}

echo "</pre>";
echo "<hr>";
echo "<p style='color:red;'><strong>⚠️ SECURITY WARNING:</strong> Delete this file (test-email.php) after testing!</p>";
echo "</body></html>";
