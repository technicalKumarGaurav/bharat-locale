<?php

namespace Technicalkumargaurav\BharatLocale\Words;

class EnglishWords
{
    private static array $ones = [
        '', 'One', 'Two', 'Three', 'Four', 'Five',
        'Six', 'Seven', 'Eight', 'Nine', 'Ten',
        'Eleven', 'Twelve', 'Thirteen', 'Fourteen', 'Fifteen',
        'Sixteen', 'Seventeen', 'Eighteen', 'Nineteen'
    ];

    private static array $tens = [
        '', '', 'Twenty', 'Thirty', 'Forty',
        'Fifty', 'Sixty', 'Seventy', 'Eighty', 'Ninety'
    ];

    public static function convert(int $number): string
    {
        if ($number === 0) {
            return 'Zero';
        }

        return trim(self::convertIndian($number));
    }

    private static function convertIndian(int $number): string
    {
        $parts = [];

        $units = [
            1000000000000 => 'Kharab',
            10000000000   => 'Arab',
            10000000      => 'Crore',
            100000        => 'Lakh',
            1000          => 'Thousand',
            100           => 'Hundred',
        ];

        foreach ($units as $value => $name) {
            if ($number >= $value) {
                $count = intdiv($number, $value);

                if ($value >= 100) {
                    $parts[] = self::convertIndian($count) . ' ' . $name;
                }

                $number %= $value;
            }
        }

        if ($number >= 20) {
            $parts[] = self::$tens[intdiv($number, 10)];

            $number %= 10;
        }

        if ($number > 0) {
            $parts[] = self::$ones[$number];
        }

        return implode(' ', array_filter($parts));
    }
}