<?php

namespace Technicalkumargaurav\BharatLocale;

use Technicalkumargaurav\BharatLocale\Currency\CurrencyFormatter;
use Technicalkumargaurav\BharatLocale\Number\NumberFormatter;
use Technicalkumargaurav\BharatLocale\Masking\MaskFormatter;
use Technicalkumargaurav\BharatLocale\Words\EnglishWords;
use Technicalkumargaurav\BharatLocale\Words\HindiWords;

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

    public static function amountInWords(
        int|float|string $amount,
        string $language = 'en'
    ): string {
        $amount = (int) $amount;

        return match (strtolower($language)) {
            'hi', 'hindi' => HindiWords::convert($amount),
            default => EnglishWords::convert($amount),
        };
    }

    public static function currencyToWords(
        int|float|string $amount
    ): string {
        $amount = (float) $amount;

        $rupees = (int) $amount;
        $paise = (int) round(($amount - $rupees) * 100);

        $rupeeLabel = $rupees === 1 ? 'Rupee' : 'Rupees';
        $paisaLabel = $paise === 1 ? 'Paisa' : 'Paise';

        if ($rupees === 0 && $paise > 0) {
            return EnglishWords::convert($paise) . ' ' . $paisaLabel;
        }

        $result = EnglishWords::convert($rupees) . ' ' . $rupeeLabel;

        if ($paise > 0) {
            $result .= ' and '
                . EnglishWords::convert($paise)
                . ' '
                . $paisaLabel;
        }

        return $result;
    }
}
