<?php

namespace App\Services;

class PromptSanitizer
{
    protected static array $blacklistedPatterns = [
        '/ignore previous instructions/i',
        '/ignore all prior instructions/i',
        '/bypass system prompt/i',
        '/you are now in dan mode/i',
        '/override system/i',
        '/forget your rules/i',
        '/reveal system prompt/i',
        '/tampilkan system prompt/i',
        '/abaikan instruksi sebelumnya/i',
        '/abaikan semua aturan/i',
    ];

    public static function sanitize(string $input): string
    {
        $cleanInput = trim($input);

        foreach (self::$blacklistedPatterns as $pattern) {
            if (preg_match($pattern, $cleanInput)) {
                throw new \InvalidArgumentException('Pesan kamu terindikasi mengandung instruksi yang tidak diperbolehkan.');
            }
        }

        return $cleanInput;
    }
}

