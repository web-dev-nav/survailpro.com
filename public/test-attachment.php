<?php

/**
 * Resume Attachment Diagnostic Script
 *
 * This tests if resume files are being stored and can be attached to emails
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
    <title>Resume Attachment Test - SurVail</title>
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
        .test-btn { background: #0026c0; color: white; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer; text-decoration: none; display: inline-block; }
        .test-btn:hover { background: #001a80; }
    </style>
</head>
<body>

<h1>📎 Resume Attachment Diagnostic</h1>

<!-- Test 1: Storage Directory Check -->
<div class="section">
    <h2>1. Storage Directory Check</h2>
    <?php
    $resumeDir = storage_path('app/applications/resumes');
    echo "<table>";
    echo "<tr><td>Resume Directory:</td><td>$resumeDir</td></tr>";
    echo "<tr><td>Directory Exists:</td><td>" . (is_dir($resumeDir) ? '✓ YES' : '✗ NO') . "</td></tr>";
    echo "<tr><td>Directory Writable:</td><td>" . (is_writable($resumeDir) ? '✓ YES' : '✗ NO') . "</td></tr>";
    echo "</table>";

    if (!is_dir($resumeDir)) {
        echo "<div class='error'>❌ Resume directory does not exist!</div>";
        echo "<div class='info'>Creating directory...</div>";
        try {
            mkdir($resumeDir, 0755, true);
            echo "<div class='success'>✓ Directory created</div>";
        } catch (\Exception $e) {
            echo "<div class='error'>Failed to create directory: " . $e->getMessage() . "</div>";
        }
    } else {
        echo "<div class='success'>✓ Resume directory exists and is ready</div>";
    }
    ?>
</div>

<!-- Test 2: List Recent Resume Files -->
<div class="section">
    <h2>2. Recent Resume Files</h2>
    <?php
    if (is_dir($resumeDir)) {
        $files = glob($resumeDir . '/*');
        if (empty($files)) {
            echo "<div class='warning'>⚠ No resume files found in storage</div>";
        } else {
            echo "<div class='success'>✓ Found " . count($files) . " resume file(s)</div>";
            echo "<table>";
            echo "<tr><th>File</th><th>Size</th><th>Modified</th><th>Exists</th></tr>";

            // Sort by modification time, newest first
            usort($files, function($a, $b) {
                return filemtime($b) - filemtime($a);
            });

            // Show last 10 files
            foreach (array_slice($files, 0, 10) as $file) {
                $filename = basename($file);
                $size = filesize($file);
                $modified = date('Y-m-d H:i:s', filemtime($file));
                $exists = file_exists($file) ? '✓' : '✗';
                echo "<tr>";
                echo "<td style='font-family: monospace; font-size: 11px;'>$filename</td>";
                echo "<td>" . number_format($size / 1024, 2) . " KB</td>";
                echo "<td>$modified</td>";
                echo "<td>$exists</td>";
                echo "</tr>";
            }
            echo "</table>";
        }
    }
    ?>
</div>

<!-- Test 3: Test Email Attachment -->
<div class="section">
    <h2>3. Test Email Attachment</h2>

    <?php if (isset($_GET['send_test'])): ?>
        <div class="info">
            <strong>Testing email attachment...</strong><br><br>
            <?php
            try {
                // Create a test file
                $testContent = "This is a test resume file.\n\nCreated at: " . date('Y-m-d H:i:s');
                $testFilename = 'TEST_Resume_' . time() . '.txt';
                $testPath = storage_path('app/applications/resumes/' . $testFilename);

                file_put_contents($testPath, $testContent);
                echo "<div class='success'>✓ Created test file: $testFilename</div>";

                // Prepare test data
                $testData = [
                    'first_name' => 'Test',
                    'last_name' => 'User',
                    'email' => 'test@example.com',
                    'phone' => '+1 (555) 555-5555',
                    'address' => '123 Test St',
                    'city' => 'Test City',
                    'gender' => 'male',
                    'date_of_birth' => '1990-01-01',
                    'security_license' => 'TEST123',
                    'license_expiry' => date('Y-m-d', strtotime('+1 year')),
                    'has_vehicle' => 'yes',
                    'certifications' => ['first_aid'],
                    'work_preference' => ['Full time'],
                    'expected_wages' => '$20/hour',
                    'work_history' => 'Test work history',
                    'criminal_record' => 'no',
                    'best_time_to_contact' => 'Anytime',
                    'ip_address' => '127.0.0.1',
                    'user_agent' => 'Test Browser',
                    'submitted_at' => now()
                ];

                $resumePath = 'applications/resumes/' . $testFilename;

                echo "<div class='info'>Attempting to send email with attachment to: " . env('ADMIN_EMAIL', 'hr@survailpro.ca') . "</div>";

                // Send email
                \Illuminate\Support\Facades\Mail::to(env('ADMIN_EMAIL', 'hr@survailpro.ca'))
                    ->send(new \App\Mail\ApplicationSubmitted($testData, $resumePath));

                echo "<div class='success'>✓ Test email sent successfully!</div>";
                echo "<div class='info'>Check " . env('ADMIN_EMAIL', 'hr@survailpro.ca') . " inbox (and spam folder) for the test email with attachment.</div>";
                echo "<div class='info'>The attachment should be named: Resume_Test_User.txt</div>";

                // Show what was logged
                echo "<h3>Check Logs:</h3>";
                echo "<p>Look for these log entries in storage/logs/laravel.log:</p>";
                echo "<ul>";
                echo "<li>Attempting to attach resume</li>";
                echo "<li>Resume attached successfully (or error if failed)</li>";
                echo "</ul>";

            } catch (\Exception $e) {
                echo "<div class='error'>✗ ERROR: " . htmlspecialchars($e->getMessage()) . "</div>";
                echo "<pre>" . htmlspecialchars($e->getTraceAsString()) . "</pre>";
            }
            ?>
        </div>
    <?php else: ?>
        <p>This will send a test email with a text file attachment to test the attachment functionality.</p>
        <a href="?send_test=1" class="test-btn">Send Test Email with Attachment</a>
    <?php endif; ?>
</div>

<!-- Test 4: Check Last Application Logs -->
<div class="section">
    <h2>4. Recent Application Logs (Related to Attachments)</h2>
    <?php
    $logFile = storage_path('logs/laravel.log');
    if (file_exists($logFile)) {
        $content = file_get_contents($logFile);
        $lines = explode("\n", $content);

        $attachmentLogs = [];
        foreach ($lines as $line) {
            if (stripos($line, 'attach') !== false ||
                stripos($line, 'resume') !== false ||
                stripos($line, 'Resume uploaded') !== false) {
                $attachmentLogs[] = $line;
            }
        }

        if (empty($attachmentLogs)) {
            echo "<div class='warning'>⚠ No attachment-related logs found</div>";
        } else {
            echo "<div class='success'>✓ Found " . count($attachmentLogs) . " attachment-related log entries (showing last 20)</div>";
            echo "<pre>";
            foreach (array_slice($attachmentLogs, -20) as $log) {
                echo htmlspecialchars($log) . "\n";
            }
            echo "</pre>";
        }
    } else {
        echo "<div class='error'>❌ Log file not found</div>";
    }
    ?>
</div>

<hr>
<div style="background: #fff3cd; padding: 15px; border-radius: 4px; margin: 20px 0;">
    <strong>⚠️ SECURITY WARNING:</strong> Delete this file (test-attachment.php) immediately after testing!
</div>

<p style="text-align: center; color: #666;">
    Last updated: <?php echo date('Y-m-d H:i:s'); ?>
</p>

</body>
</html>
