<?php

namespace Technicalkumargaurav\BharatLocale\Number;

class NumberFormatter
{
    public static function format(int|float|string $number): string
    {
        $number = (string) $number;

        $isNegative = false;

        if (str_starts_with($number, '-')) {
            $isNegative = true;
            $number = substr($number, 1);
        }

        // Separate decimal part
        $parts = explode('.', $number);

        $integer = ltrim($parts[0], '0');
        $integer = $integer === '' ? '0' : $integer;

        $decimal = $parts[1] ?? '';

        // Numbers with 3 or fewer digits
        if (strlen($integer) <= 3) {
            $formatted = $integer;

            if ($isNegative && $formatted !== '0') {
                $formatted = '-' . $formatted;
            }

            return $decimal !== ''
                ? $formatted . '.' . $decimal
                : $formatted;
        }

        $lastThree = substr($integer, -3);
        $remaining = substr($integer, 0, -3);

        $groups = [];

        while (strlen($remaining) > 2) {
            $groups[] = substr($remaining, -2);
            $remaining = substr($remaining, 0, -2);
        }

        if ($remaining !== '') {
            $groups[] = $remaining;
        }

        $groups = array_reverse($groups);

        $formatted = implode(',', $groups) . ',' . $lastThree;

        if ($isNegative && $formatted !== '0') {
            $formatted = '-' . $formatted;
        }

        return $decimal !== ''
            ? $formatted . '.' . $decimal
            : $formatted;
    }
}