<?php

require __DIR__ . '/../vendor/autoload.php';

use Technicalkumargaurav\BharatLocale\Bharat;

echo Bharat::currency(1234567) . PHP_EOL;
echo Bharat::currency(1234.5) . PHP_EOL;
echo Bharat::currency(-5000) . PHP_EOL;
echo Bharat::currency(1234567, '$') . PHP_EOL;
echo Bharat::currency(1234567.891) . PHP_EOL;
echo Bharat::currency(0) . PHP_EOL;