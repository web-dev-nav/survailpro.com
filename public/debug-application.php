<?php

/**
 * Application Form Complete Debugging Script
 *
 * This will help identify exactly where the form submission is failing
 * DELETE AFTER DEBUGGING!
 */

// Load Laravel
require __DIR__.'/../vendor/autoload.php';
$app = require_once __DIR__.'/../bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
$kernel->bootstrap();

?>
<!DOCTYPE html>
<html>
<head>
    <title>Application Form Debug - SurVail</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 1000px; margin: 20px auto; padding: 20px; background: #f5f5f5; }
        .section { background: white; padding: 20px; margin: 20px 0; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        .success { color: #155724; background: #d4edda; padding: 10px; border-radius: 4px; margin: 5px 0; }
        .error { color: #721c24; background: #f8d7da; padding: 10px; border-radius: 4px; margin: 5px 0; }
        .warning { color: #856404; background: #fff3cd; padding: 10px; border-radius: 4px; margin: 5px 0; }
        .info { color: #004085; background: #cce5ff; padding: 10px; border-radius: 4px; margin: 5px 0; }
        pre { background: #f4f4f4; padding: 10px; border-radius: 4px; overflow-x: auto; font-size: 12px; }
        h1 { color: #333; }
        h2 { color: #0026c0; margin-top: 0; }
        table { width: 100%; border-collapse: collapse; }
        table td { padding: 8px; border-bottom: 1px solid #ddd; }
        table td:first-child { font-weight: bold; width: 30%; }
        .test-btn { background: #0026c0; color: white; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer; }
        .test-btn:hover { background: #001a80; }
    </style>
</head>
<body>

<h1>🔍 Application Form Complete Diagnostic</h1>

<!-- Test 1: Environment & Configuration -->
<div class="section">
    <h2>1. Environment & Configuration</h2>
    <?php
    echo "<table>";
    echo "<tr><td>APP_ENV</td><td>" . env('APP_ENV') . "</td></tr>";
    echo "<tr><td>APP_DEBUG</td><td>" . (env('APP_DEBUG') ? 'true' : 'false') . "</td></tr>";
    echo "<tr><td>APP_URL</td><td>" . env('APP_URL') . "</td></tr>";
    echo "<tr><td>CACHE_STORE</td><td>" . config('cache.default') . "</td></tr>";
    echo "<tr><td>QUEUE_CONNECTION</td><td>" . config('queue.default') . "</td></tr>";
    echo "<tr><td>SESSION_DRIVER</td><td>" . config('session.driver') . "</td></tr>";
    echo "</table>";

    if (config('cache.default') === 'database') {
        echo "<div class='error'>❌ ERROR: CACHE_STORE is still 'database'. Run clear-cache.php!</div>";
    } else {
        echo "<div class='success'>✓ Cache configuration is correct (file-based)</div>";
    }
    ?>
</div>

<!-- Test 2: Email Configuration -->
<div class="section">
    <h2>2. Email Configuration</h2>
    <?php
    echo "<table>";
    echo "<tr><td>MAIL_MAILER</td><td>" . config('mail.default') . "</td></tr>";
    echo "<tr><td>MAIL_HOST</td><td>" . config('mail.mailers.smtp.host') . "</td></tr>";
    echo "<tr><td>MAIL_PORT</td><td>" . config('mail.mailers.smtp.port') . "</td></tr>";
    echo "<tr><td>MAIL_USERNAME</td><td>" . config('mail.mailers.smtp.username') . "</td></tr>";
    echo "<tr><td>MAIL_ENCRYPTION</td><td>" . config('mail.mailers.smtp.encryption') . "</td></tr>";
    echo "<tr><td>MAIL_FROM_ADDRESS</td><td>" . config('mail.from.address') . "</td></tr>";
    echo "<tr><td>ADMIN_EMAIL</td><td>" . env('ADMIN_EMAIL') . "</td></tr>";
    echo "<tr><td>ENABLE_EMAIL_NOTIFICATIONS</td><td>" . (env('ENABLE_EMAIL_NOTIFICATIONS') ? 'true' : 'false') . "</td></tr>";
    echo "</table>";

    if (config('mail.default') === 'smtp') {
        echo "<div class='success'>✓ SMTP mail is configured</div>";
    } else {
        echo "<div class='error'>❌ Mail is not configured for SMTP</div>";
    }
    ?>

    <?php if (isset($_GET['test_email'])): ?>
        <div class="info">
            <strong>Testing Email...</strong><br>
            <?php
            try {
                $testEmail = env('ADMIN_EMAIL', 'hr@survailpro.ca');
                \Illuminate\Support\Facades\Mail::raw('Test from debug script at ' . date('Y-m-d H:i:s'), function($msg) use ($testEmail) {
                    $msg->to($testEmail)->subject('Debug Test Email - SurVail');
                });
                echo "<div class='success'>✓ Test email sent to {$testEmail}</div>";
            } catch (\Exception $e) {
                echo "<div class='error'>❌ Failed to send: " . htmlspecialchars($e->getMessage()) . "</div>";
            }
            ?>
        </div>
    <?php else: ?>
        <a href="?test_email=1" class="test-btn">Send Test Email</a>
    <?php endif; ?>
</div>

<!-- Test 3: Routes -->
<div class="section">
    <h2>3. Routes Check</h2>
    <?php
    $routes = \Illuminate\Support\Facades\Route::getRoutes();
    $foundGet = false;
    $foundPost = false;

    foreach ($routes as $route) {
        if ($route->uri() === 'application') {
            if (in_array('GET', $route->methods())) {
                $foundGet = true;
                echo "<div class='success'>✓ GET /application route exists</div>";
            }
            if (in_array('POST', $route->methods())) {
                $foundPost = true;
                echo "<div class='success'>✓ POST /application route exists</div>";
                echo "<div class='info'>Route name: " . $route->getName() . "</div>";
                echo "<div class='info'>Controller: " . $route->getActionName() . "</div>";
            }
        }
    }

    if (!$foundGet) echo "<div class='error'>❌ GET route missing</div>";
    if (!$foundPost) echo "<div class='error'>❌ POST route missing</div>";
    ?>
</div>

<!-- Test 4: Storage & Permissions -->
<div class="section">
    <h2>4. Storage & Permissions</h2>
    <?php
    $storageDir = storage_path('app/applications/resumes');
    $logsDir = storage_path('logs');
    $cacheDir = storage_path('framework/cache');

    echo "<table>";
    echo "<tr><td>Storage Path</td><td>" . storage_path() . "</td></tr>";
    echo "<tr><td>Resume Directory</td><td>" . $storageDir . "</td></tr>";
    echo "<tr><td>Logs Directory</td><td>" . $logsDir . "</td></tr>";
    echo "<tr><td>Cache Directory</td><td>" . $cacheDir . "</td></tr>";
    echo "</table>";

    // Check if directories exist and are writable
    if (!is_dir($storageDir)) {
        echo "<div class='warning'>⚠ Resume directory doesn't exist. Creating...</div>";
        try {
            mkdir($storageDir, 0755, true);
            echo "<div class='success'>✓ Resume directory created</div>";
        } catch (\Exception $e) {
            echo "<div class='error'>❌ Failed to create: " . $e->getMessage() . "</div>";
        }
    } else {
        echo "<div class='success'>✓ Resume directory exists</div>";
    }

    if (!is_writable($storageDir)) {
        echo "<div class='error'>❌ Resume directory is NOT writable</div>";
    } else {
        echo "<div class='success'>✓ Resume directory is writable</div>";
    }

    if (!is_writable($logsDir)) {
        echo "<div class='error'>❌ Logs directory is NOT writable</div>";
    } else {
        echo "<div class='success'>✓ Logs directory is writable</div>";
    }
    ?>
</div>

<!-- Test 5: Recent Application Logs -->
<div class="section">
    <h2>5. Recent Application Submissions (Last 10)</h2>
    <?php
    $logFile = storage_path('logs/laravel.log');
    if (file_exists($logFile)) {
        $content = file_get_contents($logFile);
        $lines = explode("\n", $content);

        $submissions = [];
        foreach ($lines as $line) {
            if (strpos($line, 'APPLICATION FORM SUBMISSION STARTED') !== false) {
                $submissions[] = $line;
            }
        }

        $submissions = array_slice($submissions, -10);

        if (empty($submissions)) {
            echo "<div class='warning'>⚠ No application submissions found in logs</div>";
        } else {
            echo "<div class='success'>✓ Found " . count($submissions) . " recent submissions</div>";
            echo "<pre>";
            foreach ($submissions as $sub) {
                echo htmlspecialchars($sub) . "\n";
            }
            echo "</pre>";
        }

        // Check for email errors
        $emailErrors = [];
        foreach ($lines as $line) {
            if (stripos($line, 'Failed to send application notification') !== false ||
                stripos($line, 'APPLICATION SUBMITTED BUT EMAILS FAILED') !== false) {
                $emailErrors[] = $line;
            }
        }

        if (!empty($emailErrors)) {
            echo "<div class='error'>❌ Found email errors:</div>";
            echo "<pre>";
            foreach (array_slice($emailErrors, -5) as $error) {
                echo htmlspecialchars($error) . "\n";
            }
            echo "</pre>";
        }
    } else {
        echo "<div class='error'>❌ Log file not found</div>";
    }
    ?>
</div>

<!-- Test 6: Session Check -->
<div class="section">
    <h2>6. Session System</h2>
    <?php
    echo "<table>";
    echo "<tr><td>Session Driver</td><td>" . config('session.driver') . "</td></tr>";
    echo "<tr><td>Session Path</td><td>" . config('session.files') . "</td></tr>";
    echo "<tr><td>Session Lifetime</td><td>" . config('session.lifetime') . " minutes</td></tr>";
    echo "</table>";

    $sessionPath = config('session.files');
    if (is_dir($sessionPath) && is_writable($sessionPath)) {
        echo "<div class='success'>✓ Session directory is writable</div>";
    } else {
        echo "<div class='error'>❌ Session directory issue</div>";
    }
    ?>
</div>

<!-- Test 7: Mailable Classes -->
<div class="section">
    <h2>7. Email Classes Check</h2>
    <?php
    $hrMailClass = app_path('Mail/ApplicationSubmitted.php');
    $thankYouMailClass = app_path('Mail/ApplicationThankYou.php');

    if (file_exists($hrMailClass)) {
        echo "<div class='success'>✓ ApplicationSubmitted.php exists</div>";
    } else {
        echo "<div class='error'>❌ ApplicationSubmitted.php NOT found</div>";
    }

    if (file_exists($thankYouMailClass)) {
        echo "<div class='success'>✓ ApplicationThankYou.php exists</div>";
    } else {
        echo "<div class='error'>❌ ApplicationThankYou.php NOT found</div>";
    }

    $hrTemplate = resource_path('views/emails/application-submitted.blade.php');
    $thankYouTemplate = resource_path('views/emails/application-thankyou.blade.php');

    if (file_exists($hrTemplate)) {
        echo "<div class='success'>✓ HR email template exists</div>";
    } else {
        echo "<div class='error'>❌ HR email template NOT found</div>";
    }

    if (file_exists($thankYouTemplate)) {
        echo "<div class='success'>✓ Thank you email template exists</div>";
    } else {
        echo "<div class='error'>❌ Thank you email template NOT found</div>";
    }
    ?>
</div>

<!-- Test 8: Form Submission Simulation -->
<div class="section">
    <h2>8. Simulate Form Submission</h2>
    <p>This will create a test submission to trace the entire flow.</p>

    <?php if (isset($_GET['simulate'])): ?>
        <div class="info">
            <strong>Running Simulation...</strong><br><br>
            <?php
            try {
                // Create test data
                $testData = [
                    'first_name' => 'Test',
                    'last_name' => 'User',
                    'email' => 'test@example.com',
                    'phone' => '5197706634',
                    'address' => '123 Test St',
                    'city' => 'Brantford',
                    'gender' => 'male',
                    'date_of_birth' => '1990-01-01',
                    'security_license' => 'TEST123',
                    'license_expiry' => date('Y-m-d', strtotime('+1 year')),
                    'has_vehicle' => 'yes',
                    'certifications' => ['first_aid'],
                    'work_preference' => ['Full time'],
                    'expected_wages' => 'Test Wages',
                    'work_history' => 'Test work history',
                    'criminal_record' => 'no',
                    'best_time_to_contact' => 'Anytime'
                ];

                echo "<pre>";
                echo "Test Data:\n";
                print_r($testData);
                echo "</pre>";

                // Try to send emails
                echo "<strong>Attempting to send HR email...</strong><br>";
                \Illuminate\Support\Facades\Mail::to(env('ADMIN_EMAIL', 'hr@survailpro.ca'))
                    ->send(new \App\Mail\ApplicationSubmitted($testData, null));
                echo "<div class='success'>✓ HR email sent successfully</div>";

                echo "<strong>Attempting to send thank you email...</strong><br>";
                \Illuminate\Support\Facades\Mail::to($testData['email'])
                    ->send(new \App\Mail\ApplicationThankYou($testData['first_name'], $testData['last_name']));
                echo "<div class='success'>✓ Thank you email sent successfully</div>";

                echo "<div class='success'><strong>✓ Simulation completed successfully!</strong></div>";
                echo "<p>Check hr@survailpro.ca inbox for the test email.</p>";

            } catch (\Exception $e) {
                echo "<div class='error'>❌ Simulation failed:</div>";
                echo "<pre>" . htmlspecialchars($e->getMessage()) . "</pre>";
                echo "<pre>" . htmlspecialchars($e->getTraceAsString()) . "</pre>";
            }
            ?>
        </div>
    <?php else: ?>
        <a href="?simulate=1" class="test-btn">Run Simulation</a>
    <?php endif; ?>
</div>

<hr>
<div style="background: #fff3cd; padding: 15px; border-radius: 4px; margin: 20px 0;">
    <strong>⚠️ SECURITY WARNING:</strong> Delete this file (debug-application.php) immediately after debugging!
</div>

<p style="text-align: center; color: #666;">
    Last updated: <?php echo date('Y-m-d H:i:s'); ?>
</p>

</body>
</html>
