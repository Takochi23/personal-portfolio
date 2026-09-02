<?php

// Create required temporary directories for Laravel serverless execution
$tmpDirectories = [
    '/tmp/views',
    '/tmp/cache',
    '/tmp/sessions',
    '/tmp/bootstrap/cache'
];

foreach ($tmpDirectories as $dir) {
    if (!is_dir($dir)) {
        @mkdir($dir, 0755, true);
    }
}

require __DIR__ . '/../public/index.php';
