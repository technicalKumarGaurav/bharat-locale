<?php

namespace Technicalkumargaurav\BharatLocale\Masking;

class MaskFormatter
{
    public static function aadhaar(string $aadhaar): string
    {
        $aadhaar = preg_replace('/\D/', '', $aadhaar);

        if (strlen($aadhaar) !== 12) {
            return $aadhaar;
        }

        return 'XXXX-XXXX-' . substr($aadhaar, -4);
    }

    public static function pan(string $pan): string
    {
        $pan = strtoupper(trim($pan));

        if (strlen($pan) !== 10) {
            return $pan;
        }

        return substr($pan, 0, 3)
            . '****'
            . substr($pan, -3);
    }

    public static function mobile(string $mobile): string
    {
        $mobile = preg_replace('/\D/', '', $mobile);

        if (strlen($mobile) < 4) {
            return $mobile;
        }

        return str_repeat('X', strlen($mobile) - 4)
            . substr($mobile, -4);
    }

    public static function email(string $email): string
    {
        if (!str_contains($email, '@')) {
            return $email;
        }

        [$name, $domain] = explode('@', $email, 2);

        if (strlen($name) <= 2) {
            return $email;
        }

        return substr($name, 0, 2)
            . '***@'
            . $domain;
    }
}