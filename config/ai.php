<?php

return [
    'services' => [
        'low' => [
            'name' => 'Gemini',
            'enabled' => true,
            'model' => env('GEMINI_MODEL', 'gemini-3.6-flash'),
            'api_key' => env('GEMINI_API_KEY'),
            'url' => 'https://generativelanguage.googleapis.com/v1beta/models/{model}:generateContent?key={key}',
            'accuracy' => 40,
        ],
        'medium' => [
            'name' => 'OpenAI',
            'enabled' => env('OPENAI_ENABLED', false),
            'api_key' => env('OPENAI_API_KEY', ''),
            'model' => env('OPENAI_MODEL', 'gpt-4o-mini'),
            'accuracy' => 60,
            'url' => 'https://api.openai.com/v1/chat/completions',
        ],
        'premium' => [
            'name' => 'Claude',
            'enabled' => env('CLAUDE_ENABLED', false),
            'api_key' => env('CLAUDE_API_KEY', ''),
            'model' => env('CLAUDE_MODEL', 'claude-3-5-sonnet-20241022'),
            'accuracy' => 95,
            'url' => 'https://api.anthropic.com/v1/messages',
        ],
    ],
    'translate' => [
        'enabled' => env('TRANSLATE_ENABLED', false),
        'api_key' => env('TRANSLATE_API_KEY', ''),
        'url' => env('TRANSLATE_API_URL', 'https://api.neoxr.my.id/api/ai/translate'),
        'google_enabled' => env('GOOGLE_TRANSLATE_ENABLED', false),
        'google_api_key' => env('GOOGLE_TRANSLATE_API_KEY', ''),
    ],
    'default' => [
        'free' => 'low',
        'pro' => 'medium',
        'premium' => 'premium',
    ],
    'fallback' => [
        'free' => 'low',
        'pro' => 'low',
        'premium' => 'medium',
    ],
    'languages' => [
        'id' => 'Bahasa Indonesia',
        'en' => 'English',
        'zh' => '中文',
        'ja' => '日本語',
        'ko' => '한국어',
        'ar' => 'العربية',
        'hi' => 'हिन्दी',
        'es' => 'Español',
        'fr' => 'Français',
        'de' => 'Deutsch',
        'pt' => 'Português',
        'ru' => 'Русский',
        'it' => 'Italiano',
        'nl' => 'Nederlands',
        'tr' => 'Türkçe',
        'vi' => 'Tiếng Việt',
        'th' => 'ภาษาไทย',
    ],
];

