<?php

/**
 * Cache Clearing Script
 *
 * Access this via browser to clear all Laravel caches
 * DELETE THIS FILE after use for security!
 */

// Load Laravel
require __DIR__.'/../vendor/autoload.php';
$app = require_once __DIR__.'/../bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
$kernel->bootstrap();

echo "<!DOCTYPE html><html><head><title>Clear Cache - SurVail</title>";
echo "<style>body{font-family:Arial,sans-serif;max-width:800px;margin:50px auto;padding:20px;background:#f5f5f5;}";
echo ".success{background:#d4edda;border:1px solid #c3e6cb;color:#155724;padding:15px;border-radius:5px;margin:10px 0;}";
echo ".error{background:#f8d7da;border:1px solid #f5c6cb;color:#721c24;padding:15px;border-radius:5px;margin:10px 0;}";
echo ".info{background:#d1ecf1;border:1px solid #bee5eb;color:#0c5460;padding:15px;border-radius:5px;margin:10px 0;}";
echo "h1{color:#333;}</style></head><body>";
echo "<h1>Laravel Cache Clearing</h1>";

$results = [];

try {
    // Clear config cache
    echo "<div class='info'>Clearing configuration cache...</div>";
    Artisan::call('config:clear');
    $results[] = "<div class='success'>✓ Config cache cleared</div>";

    // Clear application cache
    echo "<div class='info'>Clearing application cache...</div>";
    Artisan::call('cache:clear');
    $results[] = "<div class='success'>✓ Application cache cleared</div>";

    // Clear route cache
    echo "<div class='info'>Clearing route cache...</div>";
    Artisan::call('route:clear');
    $results[] = "<div class='success'>✓ Route cache cleared</div>";

    // Clear view cache
    echo "<div class='info'>Clearing view cache...</div>";
    Artisan::call('view:clear');
    $results[] = "<div class='success'>✓ View cache cleared</div>";

    // Clear compiled
    echo "<div class='info'>Clearing compiled files...</div>";
    Artisan::call('clear-compiled');
    $results[] = "<div class='success'>✓ Compiled files cleared</div>";

    // Optimize clear
    echo "<div class='info'>Running optimize:clear...</div>";
    Artisan::call('optimize:clear');
    $results[] = "<div class='success'>✓ Optimizations cleared</div>";

} catch (\Exception $e) {
    $results[] = "<div class='error'>✗ Error: " . htmlspecialchars($e->getMessage()) . "</div>";
}

echo "<hr>";
echo "<h2>Results:</h2>";
foreach ($results as $result) {
    echo $result;
}

// Show current config
echo "<hr>";
echo "<h2>Current Configuration (after clearing cache):</h2>";
echo "<pre>";
echo "CACHE_STORE: " . config('cache.default') . "\n";
echo "QUEUE_CONNECTION: " . config('queue.default') . "\n";
echo "MAIL_MAILER: " . config('mail.default') . "\n";
echo "MAIL_HOST: " . config('mail.mailers.smtp.host') . "\n";
echo "MAIL_PORT: " . config('mail.mailers.smtp.port') . "\n";
echo "MAIL_ENCRYPTION: " . config('mail.mailers.smtp.encryption') . "\n";
echo "</pre>";

echo "<hr>";
echo "<div class='success'>";
echo "<h3>✓ All caches cleared successfully!</h3>";
echo "<p>You can now test the application form again.</p>";
echo "</div>";

echo "<hr>";
echo "<p style='color:red;'><strong>⚠️ SECURITY WARNING:</strong> Delete this file (clear-cache.php) immediately after use!</p>";
echo "</body></html>";
