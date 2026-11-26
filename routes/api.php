<?php

use App\Http\Controllers\RabController;
use App\Http\Controllers\ExportController;
use Illuminate\Support\Facades\Route;

// Tambahkan middleware 'web' agar auth()->user() terbaca
Route::middleware(['web'])->group(function () {
    Route::post('/chat', [RabController::class, 'prosesChat']);
    Route::post('/translate', [RabController::class, 'prosesTranslate']);
    Route::post('/generate-file', [ExportController::class, 'generateFile']);
});

Route::get('/translate/languages', [RabController::class, 'getLanguages']);
Route::get('/rab/history', [RabController::class, 'getHistory']);
Route::get('/rab/{id}', [RabController::class, 'getRabDetail']);
Route::delete('/rab/{id}', [RabController::class, 'deleteRab']);
Route::get('/rab/{id}/export', [RabController::class, 'exportPdf']);

