<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    // 1. Fungsi untuk Verifikasi / Cari User berdasarkan ID atau Email/Nama
    public function verifyUser(Request $request)
    {
        $search = $request->input('search'); // Bisa ID, Email, atau Nama
        
        $targetUser = User::where('id', $search)
            ->orWhere('email', $search)
            ->orWhere('name', 'LIKE', "%{$search}%")
            ->first();

        if (!$targetUser) {
            return response()->json([
                'status' => 'error', 
                'message' => 'User tidak ditemukan!'
            ]);
        }

        return response()->json([
            'status' => 'success',
            'user' => [
                'id' => $targetUser->id,
                'name' => $targetUser->name,
                'email' => $targetUser->email,
                'current_plan' => $targetUser->plan ?? 'free'
            ]
        ]);
    }

    // 2. Fungsi untuk Eksekusi Upgrade Plan User
    public function upgradeUserPlan(Request $request)
    {
        $userId = $request->input('user_id');
        $newPlan = $request->input('plan'); // 'free', 'pro', atau 'premium'

        $targetUser = User::find($userId);
        if (!$targetUser) {
            return response()->json([
                'status' => 'error', 
                'message' => 'User tidak ditemukan!'
            ]);
        }

        // Update plan user di database
        $targetUser->plan = $newPlan;
        $targetUser->save();

        return response()->json([
            'status' => 'success',
            'message' => "Berhasil mengubah status {$targetUser->name} menjadi " . strtoupper($newPlan) . "!"
        ]);
    }

    // 3. Fungsi untuk Tambah User Baru secara Manual oleh Admin
    public function addUser(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'plan' => 'nullable|string'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'plan' => $request->input('plan', 'free'),
            'is_admin' => false,
        ]);

        return response()->json([
            'status' => 'success',
            'message' => "User {$user->name} berhasil ditambahkan!"
        ]);
    }
}

