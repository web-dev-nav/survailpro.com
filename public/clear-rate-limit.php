<?php

/**
 * Clear Rate Limit Script
 *
 * Clears the application form rate limiting for testing
 * DELETE THIS FILE AFTER TESTING!
 */

require __DIR__.'/../vendor/autoload.php';
$app = require_once __DIR__.'/../bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
$kernel->bootstrap();

?>
<!DOCTYPE html>
<html>
<head>
    <title>Clear Rate Limit - SurVail</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 800px; margin: 50px auto; padding: 20px; background: #f5f5f5; }
        .section { background: white; padding: 20px; margin: 20px 0; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        .success { color: #155724; background: #d4edda; padding: 15px; border-radius: 4px; margin: 10px 0; }
        .error { color: #721c24; background: #f8d7da; padding: 15px; border-radius: 4px; margin: 10px 0; }
        .warning { color: #856404; background: #fff3cd; padding: 15px; border-radius: 4px; margin: 10px 0; }
        .info { color: #004085; background: #cce5ff; padding: 15px; border-radius: 4px; margin: 10px 0; }
        h1 { color: #333; }
        .btn { background: #0026c0; color: white; padding: 12px 24px; border: none; border-radius: 4px; cursor: pointer; text-decoration: none; display: inline-block; font-size: 16px; }
        .btn:hover { background: #001a80; }
        .btn-danger { background: #dc2626; }
        .btn-danger:hover { background: #991b1b; }
        table { width: 100%; border-collapse: collapse; margin: 15px 0; }
        table td { padding: 8px; border-bottom: 1px solid #ddd; }
        table td:first-child { font-weight: bold; width: 40%; }
    </style>
</head>
<body>

<h1>🔓 Clear Rate Limit</h1>

<div class="section">
    <h2>Current Rate Limit Status</h2>
    <?php
    $yourIp = $_SERVER['REMOTE_ADDR'];
    $key = 'application-submit-' . $yourIp;

    echo "<table>";
    echo "<tr><td>Your IP Address:</td><td><code>$yourIp</code></td></tr>";
    echo "<tr><td>Rate Limit Key:</td><td><code>$key</code></td></tr>";

    $attempts = \Illuminate\Support\Facades\RateLimiter::attempts($key);
    echo "<tr><td>Current Attempts:</td><td><strong>$attempts / 3</strong></td></tr>";

    if (\Illuminate\Support\Facades\RateLimiter::tooManyAttempts($key, 3)) {
        $seconds = \Illuminate\Support\Facades\RateLimiter::availableIn($key);
        $minutes = ceil($seconds / 60);
        echo "<tr><td>Status:</td><td><span style='color: red; font-weight: bold;'>🔒 RATE LIMITED</span></td></tr>";
        echo "<tr><td>Wait Time:</td><td><strong>$minutes minutes ($seconds seconds)</strong></td></tr>";
    } else {
        $remaining = 3 - $attempts;
        echo "<tr><td>Status:</td><td><span style='color: green; font-weight: bold;'>✓ OK</span></td></tr>";
        echo "<tr><td>Remaining Attempts:</td><td><strong>$remaining</strong></td></tr>";
    }
    echo "</table>";
    ?>
</div>

<?php if (isset($_GET['clear'])): ?>
<div class="section">
    <h2>Clearing Rate Limit...</h2>
    <?php
    try {
        \Illuminate\Support\Facades\RateLimiter::clear($key);
        echo "<div class='success'>";
        echo "<strong>✓ Rate limit cleared successfully!</strong><br>";
        echo "You can now submit the application form again.";
        echo "</div>";
        echo "<div class='info'>";
        echo "Refresh this page to see updated status, or <a href='".str_replace('?clear=1', '', $_SERVER['REQUEST_URI'])."'>click here</a>.";
        echo "</div>";
    } catch (\Exception $e) {
        echo "<div class='error'>";
        echo "<strong>✗ Error clearing rate limit:</strong><br>";
        echo htmlspecialchars($e->getMessage());
        echo "</div>";
    }
    ?>
</div>
<?php else: ?>
<div class="section">
    <h2>Clear Rate Limit</h2>
    <p>Click the button below to clear the rate limit for your IP address:</p>
    <a href="?clear=1" class="btn">Clear My Rate Limit</a>
</div>
<?php endif; ?>

<div class="section">
    <h2>ℹ️ About Rate Limiting</h2>
    <div class="info">
        <p><strong>What is this?</strong></p>
        <p>The application form is protected by rate limiting to prevent spam and abuse. Currently set to:</p>
        <ul>
            <li><strong>Maximum:</strong> 3 submissions per hour</li>
            <li><strong>Per:</strong> IP address</li>
            <li><strong>Purpose:</strong> Prevent spam and duplicate submissions</li>
        </ul>
    </div>
</div>

<div class="section">
    <h2>🛠️ Options</h2>
    <div class="warning">
        <p><strong>For Testing/Development:</strong></p>
        <p>If you need to test the form multiple times, you can:</p>
        <ul>
            <li>Use this page to clear the rate limit when needed</li>
            <li>Or ask to increase the limit to 10 or 20 submissions per hour</li>
            <li>Or temporarily disable rate limiting (not recommended for production)</li>
        </ul>
    </div>
</div>

<hr>
<div style="background: #fff3cd; padding: 15px; border-radius: 4px; margin: 20px 0;">
    <strong>⚠️ SECURITY WARNING:</strong> Delete this file (clear-rate-limit.php) after testing!
</div>

<p style="text-align: center; color: #666;">
    Last checked: <?php echo date('Y-m-d H:i:s'); ?>
</p>

</body>
</html>
