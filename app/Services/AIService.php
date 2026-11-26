<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class AIService
{
    protected string $plan;
    protected array $config;
    protected string $serviceType;
    protected array $serviceConfig;

    public function __construct(string $plan = 'free')
    {
        $this->plan = $plan;
        $this->config = config('ai');
        $this->serviceType = $this->getServiceType($plan);
        $this->serviceConfig = $this->config['services'][$this->serviceType] ?? [];
    }

    protected function getServiceType(string $plan): string
    {
        $default = $this->config['default'][$plan] ?? 'low';

        if (!isset($this->config['services'][$default]['enabled']) || !$this->config['services'][$default]['enabled']) {
            $fallback = $this->config['fallback'][$plan] ?? 'low';
            return $fallback;
        }

        return $default;
    }

    public function chat(string $message, array $history = [], ?string $systemInstruction = null): array
    {
        $service = $this->serviceType;
        $config = $this->serviceConfig;

        // Jika Gemini enabled dan API Key terisi
        if ($service === 'low' && !empty($config['api_key']) && $config['enabled']) {
            try {
                // Parameter $systemInstruction diteruskan ke callGemini
                $response = $this->callGemini($message, $history, $config, $systemInstruction);
                if ($response['success']) {
                    return [
                        'success' => true,
                        'message' => $response['message'],
                        'service' => $config['name'],
                        'accuracy' => $config['accuracy'],
                    ];
                }
            } catch (\Exception $e) {
                Log::error('Gemini Error: ' . $e->getMessage());
            }
        }

        // Fallback local jika Gemini tidak merespon/API Key kosong/error
        return $this->getFallbackResponse($message);
    }

        protected function callGemini(string $message, array $history, array $config, ?string $systemInstruction = null): array
    {
        $url = str_replace(
            ['{model}', '{key}'],
            [$config['model'], $config['api_key']],
            $config['url']
        );

        $contents = [];

        // Masukkan history percakapan jika ada
        foreach ($history as $chat) {
            if (isset($chat['role']) && isset($chat['content'])) {
                $role = $chat['role'] === 'assistant' ? 'model' : 'user';
                $contents[] = [
                    'role' => $role,
                    'parts' => [['text' => $chat['content']]]
                ];
            }
        }

        // Masukkan pesan terbaru
        $contents[] = [
            'role' => 'user',
            'parts' => [['text' => $message]]
        ];

        // Gunakan $systemInstruction dinamis jika ada, jika tidak pakai instruksi default
        $defaultInstruction = "Kamu adalah Zoy AI, asisten spesialis konstruksi dan teknik sipil.";
        $instructionToUse = $systemInstruction ?? $defaultInstruction;

        $payload = [
            'systemInstruction' => [
                'parts' => [
                    ['text' => $instructionToUse]
                ]
            ],
            'contents' => $contents,
            'generationConfig' => [
                'temperature' => 0.7,
                'maxOutputTokens' => 2048,
            ]
        ];

        $response = Http::timeout(30)->post($url, $payload);

        if ($response->successful()) {
            $data = $response->json();
            $text = $data['candidates'][0]['content']['parts'][0]['text'] ?? '';
            return ['success' => true, 'message' => $text];
        }

        Log::error('Gemini API Error: ' . $response->body());
        return ['success' => false, 'message' => 'Gemini API error'];
    }

            protected function getFallbackResponse(string $message): array
    {
        $lower = strtolower($message);

        // 1. Cek kalkulasi volume otomatis
        $volumeResult = $this->parseVolumeCalculation($message);
        if ($volumeResult !== null) {
            return [
                'success' => true,
                'message' => $volumeResult,
                'is_local' => true
            ];
        }

        // 2. Respon untuk RAB / Anggaran
        if (str_contains($lower, 'rab') || str_contains($lower, 'anggaran') || str_contains($lower, 'estimasi')) {
            return [
                'success' => true,
                'message' => "Bisa banget! Infoin aja tipe proyeknya (rumah/kantor/gudang), luas bangunannya (m²), sama kualitas bahan yang mau dipakai (ekonomis/standar/premium) ya.",
                'is_local' => true
            ];
        }

        // 3. Respon petunjuk volume jika dimensi belum lengkap
        if (str_contains($lower, 'volume') || str_contains($lower, 'beton') || str_contains($lower, 'semen')) {
            return [
                'success' => true,
                'message' => "Siap! Kirimkan ukuran panjang, lebar, sama tinggi/tebalnya ya. Contoh: 'volume beton 10x5m tebal 15cm'.",
                'is_local' => true
            ];
        }

        // 4. Default Bantuan (Sapaan / Chat Umum)
        return [
            'success' => true,
            'message' => "Halo! Ada yang bisa Zoy bantu seputar proyek, hitungan volume, atau RAB kamu hari ini?",
            'is_local' => true
        ];
    }


    protected function parseVolumeCalculation(string $message): ?string
    {
        // Normalisasi simbol perkalian '×', '*', koma ',', dan spasi
        $clean = str_replace(['×', '*', ','], ['x', 'x', '.'], strtolower($message));

        // Pattern Regex untuk mendeteksi: [Panjang] x [Lebar] ... [Tebal/Tinggi]
        $pattern = '/(\d+(?:\.\d+)?)\s*x\s*(\d+(?:\.\d+)?)(?:(?:\s*x\s*|\s*t(?:ebal)?\s*|\s*tinggi\s*)(\d+(?:\.\d+)?)\s*(cm|m)?)?/i';

        if (preg_match($pattern, $clean, $matches)) {
            $p = floatval($matches[1]);
            $l = floatval($matches[2]);
            $t = isset($matches[3]) && $matches[3] !== '' ? floatval($matches[3]) : 0;
            $unit = $matches[4] ?? '';

            if ($p > 0 && $l > 0 && $t > 0) {
                // Jika unit cm atau tebal > 2 (dianggap cm), konversi ke meter
                $tInMeter = ($unit === 'cm' || ($unit === '' && $t > 2)) ? $t / 100 : $t;
                $tInCm = $tInMeter * 100;

                $volume = $p * $l * $tInMeter;

                return "Perhitungan Volume Beton:\n" .
                       "• Panjang: {$p} m\n" .
                       "• Lebar: {$l} m\n" .
                       "• Tebal: {$tInCm} cm ({$tInMeter} m)\n\n" .
                       "Total Volume: " . number_format($volume, 2, ',', '.') . " m³";
            }
        }

        return null;
    }

    public function getServiceInfo(): array
    {
        return [
            'service' => $this->serviceConfig['name'] ?? 'Local AI',
            'accuracy' => $this->serviceConfig['accuracy'] ?? 40,
            'plan' => $this->plan,
        ];
    }
}

