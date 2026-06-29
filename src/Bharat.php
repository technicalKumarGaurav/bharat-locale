<?php

namespace Technicalkumargaurav\BharatLocale;

use Technicalkumargaurav\BharatLocale\Currency\CurrencyFormatter;
use Technicalkumargaurav\BharatLocale\Number\NumberFormatter;
use Technicalkumargaurav\BharatLocale\Masking\MaskFormatter;

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

    public static function maskAadhaar(string $aadhaar): string
    {
        return MaskFormatter::aadhaar($aadhaar);
    }

    public static function maskPan(string $pan): string
    {
        return MaskFormatter::pan($pan);
    }

    public static function maskMobile(string $mobile): string
    {
        return MaskFormatter::mobile($mobile);
    }

    public static function maskEmail(string $email): string
    {
        return MaskFormatter::email($email);
    }
}
