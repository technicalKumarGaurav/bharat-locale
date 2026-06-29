<?php

namespace Technicalkumargaurav\BharatLocale;

use Technicalkumargaurav\BharatLocale\Number\NumberFormatter;

class Bharat
{
    public static function formatNumber(int|float|string $number): string
    {
        return NumberFormatter::format($number);
    }
}