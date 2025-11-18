<?php

/**
 * File Upload Diagnostic Tool
 * Tests if file uploads are working on the server
 */

require __DIR__.'/../vendor/autoload.php';
$app = require_once __DIR__.'/../bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
$kernel->bootstrap();

?>
<!DOCTYPE html>
<html>
<head>
    <title>Upload Diagnostic - SurVail</title>
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
    </style>
</head>
<body>

<h1>📋 File Upload Diagnostic</h1>

<!-- Test 1: PHP Upload Settings -->
<div class="section">
    <h2>1. PHP Upload Settings</h2>
    <?php
    echo "<table>";
    echo "<tr><td>upload_max_filesize:</td><td>" . ini_get('upload_max_filesize') . "</td></tr>";
    echo "<tr><td>post_max_size:</td><td>" . ini_get('post_max_size') . "</td></tr>";
    echo "<tr><td>max_file_uploads:</td><td>" . ini_get('max_file_uploads') . "</td></tr>";
    echo "<tr><td>file_uploads enabled:</td><td>" . (ini_get('file_uploads') ? '✓ YES' : '✗ NO') . "</td></tr>";
    echo "<tr><td>Temp directory:</td><td>" . sys_get_temp_dir() . "</td></tr>";
    echo "<tr><td>Temp dir writable:</td><td>" . (is_writable(sys_get_temp_dir()) ? '✓ YES' : '✗ NO') . "</td></tr>";
    echo "</table>";

    if (!ini_get('file_uploads')) {
        echo "<div class='error'>❌ File uploads are DISABLED in PHP!</div>";
    } else {
        echo "<div class='success'>✓ File uploads are enabled</div>";
    }
    ?>
</div>

<!-- Test 2: Storage Directories -->
<div class="section">
    <h2>2. Storage Directories</h2>
    <?php
    $dirs = [
        'storage/app/public' => storage_path('app/public'),
        'storage/app/public/resumes' => storage_path('app/public/resumes'),
        'public/storage' => public_path('storage'),
    ];

    echo "<table>";
    foreach ($dirs as $name => $path) {
        $exists = is_dir($path);
        $writable = $exists ? is_writable($path) : false;
        $isLink = is_link($path);

        echo "<tr>";
        echo "<td>$name</td>";
        echo "<td>";
        echo "Path: <code>$path</code><br>";
        echo "Exists: " . ($exists ? '✓ YES' : '✗ NO') . "<br>";
        echo "Writable: " . ($writable ? '✓ YES' : '✗ NO') . "<br>";
        if ($isLink) {
            echo "Symlink: ✓ YES → " . readlink($path) . "<br>";
        }
        echo "</td>";
        echo "</tr>";
    }
    echo "</table>";

    // Check if storage link exists
    if (!is_link(public_path('storage'))) {
        echo "<div class='error'>❌ Storage symlink does not exist! Run: <code>php artisan storage:link</code></div>";
    } else {
        echo "<div class='success'>✓ Storage symlink exists</div>";
    }

    // Check if resumes directory exists
    if (!is_dir(storage_path('app/public/resumes'))) {
        echo "<div class='error'>❌ Resumes directory does not exist!</div>";
        echo "<div class='info'>Creating directory...</div>";
        try {
            mkdir(storage_path('app/public/resumes'), 0775, true);
            echo "<div class='success'>✓ Directory created</div>";
        } catch (Exception $e) {
            echo "<div class='error'>Failed: " . $e->getMessage() . "</div>";
        }
    } else if (!is_writable(storage_path('app/public/resumes'))) {
        echo "<div class='error'>❌ Resumes directory is NOT writable!</div>";
    } else {
        echo "<div class='success'>✓ Resumes directory exists and is writable</div>";
    }
    ?>
</div>

<!-- Test 3: Test File Upload -->
<div class="section">
    <h2>3. Test File Upload</h2>

    <?php if (isset($_FILES['test_file']) && $_FILES['test_file']['error'] === UPLOAD_ERR_OK): ?>
        <div class="info">
            <strong>Testing file upload...</strong><br><br>
            <?php
            try {
                $uploadedFile = $_FILES['test_file'];

                echo "<strong>Upload Info:</strong><br>";
                echo "Original name: " . htmlspecialchars($uploadedFile['name']) . "<br>";
                echo "Size: " . number_format($uploadedFile['size'] / 1024, 2) . " KB<br>";
                echo "MIME type: " . $uploadedFile['type'] . "<br>";
                echo "Temp path: " . $uploadedFile['tmp_name'] . "<br>";
                echo "Temp file exists: " . (file_exists($uploadedFile['tmp_name']) ? '✓ YES' : '✗ NO') . "<br><br>";

                // Try to save file
                $filename = 'TEST_' . time() . '_' . $uploadedFile['name'];
                $destination = storage_path('app/public/resumes/' . $filename);

                echo "<strong>Attempting to save...</strong><br>";
                echo "Destination: <code>$destination</code><br><br>";

                if (move_uploaded_file($uploadedFile['tmp_name'], $destination)) {
                    echo "<div class='success'>✓ File saved successfully!</div>";

                    $publicUrl = asset('storage/resumes/' . $filename);
                    echo "<div class='success'>";
                    echo "<strong>Public URL:</strong><br>";
                    echo "<a href='$publicUrl' target='_blank'>$publicUrl</a><br>";
                    echo "Click the link above to test if file is accessible.";
                    echo "</div>";

                    echo "<div class='info'>";
                    echo "File exists: " . (file_exists($destination) ? '✓ YES' : '✗ NO') . "<br>";
                    echo "File size: " . number_format(filesize($destination) / 1024, 2) . " KB";
                    echo "</div>";
                } else {
                    echo "<div class='error'>❌ Failed to save file!</div>";
                    echo "<div class='error'>Possible reasons:</div>";
                    echo "<ul>";
                    echo "<li>Directory not writable</li>";
                    echo "<li>Insufficient disk space</li>";
                    echo "<li>PHP open_basedir restriction</li>";
                    echo "</ul>";
                }

            } catch (Exception $e) {
                echo "<div class='error'>✗ ERROR: " . htmlspecialchars($e->getMessage()) . "</div>";
                echo "<pre>" . htmlspecialchars($e->getTraceAsString()) . "</pre>";
            }
            ?>
        </div>
    <?php elseif (isset($_FILES['test_file'])): ?>
        <div class="error">
            <strong>Upload Error:</strong><br>
            <?php
            $errors = [
                UPLOAD_ERR_INI_SIZE => 'File exceeds upload_max_filesize',
                UPLOAD_ERR_FORM_SIZE => 'File exceeds MAX_FILE_SIZE',
                UPLOAD_ERR_PARTIAL => 'File was only partially uploaded',
                UPLOAD_ERR_NO_FILE => 'No file was uploaded',
                UPLOAD_ERR_NO_TMP_DIR => 'Missing temporary folder',
                UPLOAD_ERR_CANT_WRITE => 'Failed to write file to disk',
                UPLOAD_ERR_EXTENSION => 'PHP extension stopped the upload',
            ];
            echo $errors[$_FILES['test_file']['error']] ?? 'Unknown error';
            ?>
        </div>
    <?php else: ?>
        <form method="POST" enctype="multipart/form-data">
            <p>Upload a test file (any file type, max 10MB):</p>
            <input type="file" name="test_file" required>
            <button type="submit" style="background: #0026c0; color: white; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer;">
                Upload Test File
            </button>
        </form>
    <?php endif; ?>
</div>

<!-- Test 4: List Uploaded Files -->
<div class="section">
    <h2>4. Files in Resumes Directory</h2>
    <?php
    $resumesDir = storage_path('app/public/resumes');

    if (is_dir($resumesDir)) {
        $files = glob($resumesDir . '/*');

        if (empty($files)) {
            echo "<div class='warning'>⚠ No files found in resumes directory</div>";
        } else {
            echo "<div class='success'>✓ Found " . count($files) . " file(s)</div>";
            echo "<table>";
            echo "<tr><th>File</th><th>Size</th><th>Modified</th><th>Public URL</th></tr>";

            foreach ($files as $file) {
                if (basename($file) === '.gitignore') continue;

                $filename = basename($file);
                $size = filesize($file);
                $modified = date('Y-m-d H:i:s', filemtime($file));
                $url = asset('storage/resumes/' . $filename);

                echo "<tr>";
                echo "<td style='font-family: monospace; font-size: 11px;'>$filename</td>";
                echo "<td>" . number_format($size / 1024, 2) . " KB</td>";
                echo "<td>$modified</td>";
                echo "<td><a href='$url' target='_blank'>View</a></td>";
                echo "</tr>";
            }
            echo "</table>";
        }
    } else {
        echo "<div class='error'>❌ Resumes directory does not exist!</div>";
    }
    ?>
</div>

<!-- Test 5: Laravel Storage Test -->
<div class="section">
    <h2>5. Laravel Storage Test</h2>
    <?php
    try {
        $testContent = "Test file created at " . date('Y-m-d H:i:s');
        $testPath = 'resumes/LARAVEL_TEST_' . time() . '.txt';

        // Try Laravel's Storage facade
        \Illuminate\Support\Facades\Storage::disk('public')->put($testPath, $testContent);

        $fullPath = storage_path('app/public/' . $testPath);

        if (file_exists($fullPath)) {
            echo "<div class='success'>✓ Laravel Storage::disk('public')->put() works!</div>";
            echo "<div class='info'>";
            echo "Created: <code>$testPath</code><br>";
            echo "Full path: <code>$fullPath</code><br>";
            echo "Public URL: <a href='" . asset('storage/' . $testPath) . "' target='_blank'>" . asset('storage/' . $testPath) . "</a>";
            echo "</div>";
        } else {
            echo "<div class='error'>❌ Laravel Storage created file but it doesn't exist!</div>";
        }

    } catch (Exception $e) {
        echo "<div class='error'>❌ Laravel Storage test failed!</div>";
        echo "<div class='error'>" . htmlspecialchars($e->getMessage()) . "</div>";
    }
    ?>
</div>

<hr>
<div style="background: #fff3cd; padding: 15px; border-radius: 4px; margin: 20px 0;">
    <strong>⚠️ SECURITY WARNING:</strong> Delete this file (test-upload.php) after testing!
</div>

<p style="text-align: center; color: #666;">
    Last checked: <?php echo date('Y-m-d H:i:s'); ?>
</p>

</body>
</html>
