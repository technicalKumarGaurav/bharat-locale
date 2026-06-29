<?php

namespace Technicalkumargaurav\BharatLocale;

use Technicalkumargaurav\BharatLocale\Currency\CurrencyFormatter;
use Technicalkumargaurav\BharatLocale\Number\NumberFormatter;

class Bharat
{
    public static function formatNumber(int|float|string $number): string
    {
        return NumberFormatter::format($number);
    }

    public static function currency(
        int|float|string $amount,
        string $symbol = '₹',
        int $decimals = 2
    ): string {
        return CurrencyFormatter::format(
            $amount,
            $symbol,
            $decimals
        );
    }
}
