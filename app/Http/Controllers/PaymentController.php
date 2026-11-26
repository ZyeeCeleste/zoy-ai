<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function checkout(Request $request)
    {
        // Set konfigurasi Midtrans
        \Midtrans\Config::$serverKey = env('MIDTRANS_SERVER_KEY');
        \Midtrans\Config::$isProduction = filter_var(env('MIDTRANS_IS_PRODUCTION', true), FILTER_VALIDATE_BOOLEAN);
        \Midtrans\Config::$isSanitized = true;
        \Midtrans\Config::$is3ds = true;


        $plan = $request->input('plan');
        $prices = [
            'pro' => 89000,      // Sesuaikan nominal harga
            'premium' => 299000
        ];

        if (!isset($prices[$plan])) {
            return response()->json(['status' => 'error', 'message' => 'Paket tidak valid'], 400);
        }

        $params = [
            'transaction_details' => [
                'order_id' => 'ZOY-' . time() . '-' . rand(100, 999),
                'gross_amount' => $prices[$plan],
            ],
            'customer_details' => [
                'first_name' => auth()->user()->name ?? 'User',
                'email' => auth()->user()->email ?? 'user@example.com',
            ],
        ];

        try {
            $snapToken = \Midtrans\Snap::getSnapToken($params);
            return response()->json([
                'status' => 'success',
                'snap_token' => $snapToken
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage()
            ], 500);
        }
    }
}

