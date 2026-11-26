<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\AdminController; // ✅ 1. Jangan lupa import AdminController di sini

Route::get('/', function () {
    return view('app', [
        'user' => Auth::user()
    ]);
});

Route::get('/auth/redirect/{provider}', [AuthController::class, 'redirectToProvider']);
Route::get('/auth/callback/{provider}', [AuthController::class, 'handleProviderCallback']);

// ✅ Method login dan register
Route::post('/auth/login', [AuthController::class, 'login']);
Route::post('/auth/register', [AuthController::class, 'register']);                              
Route::post('/logout', [AuthController::class, 'logout']);

Route::post('/generate-file', [ExportController::class, 'generateFile']);
Route::post('/api/chat', [ChatController::class, 'chat']);
Route::post('/api/payment/checkout', [PaymentController::class, 'checkout']);

// ✅ 2. Tambahkan Route Khusus Admin di bagian paling bawah
Route::middleware(['auth', 'admin'])->group(function () {
    Route::post('/api/admin/verify-user', [AdminController::class, 'verifyUser']);
    Route::post('/api/admin/upgrade-user', [AdminController::class, 'upgradeUserPlan']);
    Route::post('/api/admin/add-user', [AdminController::class, 'addUser']);
});

