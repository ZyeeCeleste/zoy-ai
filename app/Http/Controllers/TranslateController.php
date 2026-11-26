<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\App;

class TranslateController extends Controller
{
    public function translate(Request $request)
    {
        // 1. Validasi Input
        $request->validate([
            'text' => 'nullable|string',
            'target_language' => 'required|string',
        ]);

        $targetLang = $request->input('target_language', 'en');
        $text = $request->input('text');

        // 2. Simpan Bahasa Pilihan ke Session Laravel
        session(['locale' => $targetLang]);
        App::setLocale($targetLang);

        // 3. Jika request hanya untuk ubah bahasa halaman (Scope: full_website)
        if ($request->input('scope') === 'full_website' && empty($text)) {
            return response()->json([
                'status' => 'success',
                'message' => 'Language updated',
                'reload' => true // Memicu window.location.reload() di frontend
            ]);
        }

        // 4. Jika ada teks yang ingin diterjemahkan (misal teks RAB/Modal)
        try {
            // Contoh pemanggilan API Gemini / LLM untuk menerjemahkan teks
            $translatedText = $this->callTranslationApi($text, $targetLang);

            return response()->json([
                'status' => 'success',
                'translated_text' => $translatedText,
                'target_language' => $targetLang,
                'reload' => false
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Gagal menerjemahkan: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Helper function untuk panggil API penterjemah (Contoh panggil Gemini)
     */
    private function callTranslationApi($text, $targetLang)
    {
        $apiKey = env('GEMINI_API_KEY'); // Pastikan kunci API ada di .env
        
        $prompt = "Terjemahkan teks konstruksi/RAB berikut ke bahasa '{$targetLang}'. Pertahankan format angka dan struktur tabel jika ada. Hanya berikan hasil terjemahannya saja:\n\n" . $text;

        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
        ])->post("https://generativelanguage.googleapis.com/v1beta/models/gemini-2.5-flash:generateContent?key={$apiKey}", [
            'contents' => [
                [
                    'parts' => [
                        ['text' => $prompt]
                    ]
                ]
            ]
        ]);

        if ($response->successful()) {
            return $response->json('candidates.0.content.parts.0.text') ?? $text;
        }

        return $text; // Fallback jika API gagal
    }
}

