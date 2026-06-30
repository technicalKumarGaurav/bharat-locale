<?php

require __DIR__ . '/../vendor/autoload.php';

use Technicalkumargaurav\BharatLocale\Words\HindiWords;

echo HindiWords::convert(1) . PHP_EOL;
echo HindiWords::convert(15) . PHP_EOL;
echo HindiWords::convert(123) . PHP_EOL;
echo HindiWords::convert(1234) . PHP_EOL;
echo HindiWords::convert(1250000) . PHP_EOL;
echo HindiWords::convert(10000000) . PHP_EOL;
echo HindiWords::convert(123456789) . PHP_EOL;