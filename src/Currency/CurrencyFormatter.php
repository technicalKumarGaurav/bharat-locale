<?php

namespace Technicalkumargaurav\BharatLocale\Currency;

use Technicalkumargaurav\BharatLocale\Number\NumberFormatter;

class CurrencyFormatter
{
    public static function format(
        int|float|string $amount,
        string $symbol = '₹',
        int $decimals = 2
    ): string {
        $amount = (float) $amount;

        $isNegative = $amount < 0;

        $amount = abs($amount);

        $amount = number_format($amount, $decimals, '.', '');

        $formatted = NumberFormatter::format($amount);

        return ($isNegative ? '-' : '') . $symbol . $formatted;
    }
}