<?php

/**
 * Log Viewer for Application Form
 *
 * This helps debug the application form submission
 * IMPORTANT: Delete this file after debugging!
 */

$logFile = __DIR__ . '/../storage/logs/laravel.log';

echo "<!DOCTYPE html><html><head><title>Application Form Logs</title>";
echo "<style>body{font-family:monospace;max-width:1200px;margin:20px auto;padding:20px;}";
echo "pre{background:#f4f4f4;padding:15px;border-radius:5px;overflow-x:auto;font-size:12px;}";
echo ".error{background:#ffe6e6;}.success{background:#e6ffe6;}.warning{background:#fff9e6;}";
echo "h1{color:#333;}</style>";
echo "</head><body>";
echo "<h1>Application Form Debug Logs</h1>";
echo "<p><strong>Log file:</strong> $logFile</p>";

if (!file_exists($logFile)) {
    echo "<p style='color:red;'>Log file does not exist!</p>";
    echo "</body></html>";
    exit;
}

// Get the last 200 lines
$lines = [];
$file = new SplFileObject($logFile, 'r');
$file->seek(PHP_INT_MAX);
$totalLines = $file->key();
$startLine = max(0, $totalLines - 200);

$file->seek($startLine);
while (!$file->eof()) {
    $lines[] = $file->fgets();
}

echo "<h2>Last 200 Lines</h2>";
echo "<p>Showing entries related to APPLICATION FORM</p>";

// Filter for application-related logs
$applicationLogs = [];
foreach ($lines as $line) {
    if (stripos($line, 'APPLICATION') !== false ||
        stripos($line, 'application notification') !== false ||
        stripos($line, 'MAIL') !== false ||
        stripos($line, 'email') !== false) {

        $class = '';
        if (stripos($line, 'ERROR') !== false || stripos($line, 'CRITICAL') !== false) {
            $class = 'error';
        } elseif (stripos($line, 'SUCCESS') !== false || stripos($line, 'COMPLETED') !== false) {
            $class = 'success';
        } elseif (stripos($line, 'WARNING') !== false) {
            $class = 'warning';
        }

        $applicationLogs[] = "<pre class='$class'>" . htmlspecialchars($line) . "</pre>";
    }
}

if (empty($applicationLogs)) {
    echo "<p style='color:orange;'>No application-related logs found in the last 200 lines.</p>";
    echo "<p>This might mean:</p>";
    echo "<ul>";
    echo "<li>The form hasn't been submitted recently</li>";
    echo "<li>The form submission is failing before reaching the controller</li>";
    echo "<li>Logging is disabled</li>";
    echo "</ul>";
} else {
    echo "<p>Found " . count($applicationLogs) . " application-related log entries:</p>";
    echo implode("\n", $applicationLogs);
}

echo "<hr>";
echo "<h2>All Recent Logs (Last 50 Lines)</h2>";
$recentLines = array_slice($lines, -50);
echo "<pre style='max-height:400px;overflow-y:auto;'>";
foreach ($recentLines as $line) {
    echo htmlspecialchars($line);
}
echo "</pre>";

echo "<hr>";
echo "<p style='color:red;'><strong>⚠️ SECURITY WARNING:</strong> Delete this file (check-logs.php) after debugging!</p>";
echo "<p>Last updated: " . date('Y-m-d H:i:s') . "</p>";
echo "</body></html>";
