<?php

require __DIR__ . '/../vendor/autoload.php';

use Technicalkumargaurav\BharatLocale\Bharat;

// echo Bharat::amountInWords(1) . PHP_EOL;
// echo Bharat::amountInWords(15) . PHP_EOL;
// echo Bharat::amountInWords(100) . PHP_EOL;
// echo Bharat::amountInWords(123) . PHP_EOL;
// echo Bharat::amountInWords(1234) . PHP_EOL;
// echo Bharat::amountInWords(1250000) . PHP_EOL;
// echo Bharat::amountInWords(10000000) . PHP_EOL;
// echo Bharat::amountInWords(123456789) . PHP_EOL;

echo Bharat::amountInWords(1250000) . PHP_EOL;
echo Bharat::amountInWords(1250000, 'hi') . PHP_EOL;
echo Bharat::amountInWords(123456789, 'hi') . PHP_EOL;