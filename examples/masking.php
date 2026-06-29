<?php

require __DIR__ . '/../vendor/autoload.php';

use Technicalkumargaurav\BharatLocale\Bharat;

echo Bharat::maskAadhaar('123412341234') . PHP_EOL;
echo Bharat::maskPan('ABCDE1234F') . PHP_EOL;
echo Bharat::maskMobile('9876543210') . PHP_EOL;
echo Bharat::maskEmail('kumar@example.com') . PHP_EOL;