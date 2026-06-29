<?php

require __DIR__ . '/../vendor/autoload.php';

use Technicalkumargaurav\BharatLocale\Bharat;

echo Bharat::formatNumber(123) . PHP_EOL;               // 123
echo Bharat::formatNumber(1234) . PHP_EOL;             // 1,234
echo Bharat::formatNumber(1234567) . PHP_EOL;          // 12,34,567
echo Bharat::formatNumber(123456789) . PHP_EOL;        // 12,34,56,789
echo Bharat::formatNumber('001234567') . PHP_EOL;      // 12,34,567
echo Bharat::formatNumber('000123.45') . PHP_EOL;      // 123.45
echo Bharat::formatNumber('-123.45') . PHP_EOL;        // -123.45
echo Bharat::formatNumber('-000123.45') . PHP_EOL;     // -123.45
echo Bharat::formatNumber('-0000') . PHP_EOL;          // 0
echo Bharat::formatNumber('1234567890.75') . PHP_EOL;  // 1,23,45,67,890.75