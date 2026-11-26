<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

            public function handleProviderCallback($provider)
    {
        try {
            $socialUser = Socialite::driver($provider)->user();
            $email = $socialUser->getEmail();
            $isAdmin = strtolower($email) === 'zoyaideveloper@gmail.com';

            $user = User::updateOrCreate([
                'email' => $email,
            ], [
                'name' => $socialUser->getName() ?? $socialUser->getNickname() ?? 'User',
                'provider_id' => (string) $socialUser->getId(),
                'provider_name' => $provider,
                'password' => bcrypt(Str::random(16)),
                'role' => $isAdmin ? 'admin' : 'student',
                'current_plan' => $isAdmin ? 'premium' : 'free',
                // ✅ Ubah boolean true/false menjadi angka 1/0 untuk SQLite
                'is_admin' => $isAdmin ? 1 : 0,
                'avatar' => $socialUser->getAvatar(),
            ]);

            if ($isAdmin && ($user->role !== 'admin' || $user->current_plan !== 'premium' || !$user->is_admin)) {
                $user->is_admin = 1;
                $user->role = 'admin';
                $user->current_plan = 'premium';
                $user->save();
            }

            Auth::login($user, true);
            request()->session()->regenerate();

            return redirect('/');
        } catch (\Exception $e) {
            // Hapus atau kembalikan return redirect jika sudah normal
            return redirect('/')->with('error', 'Gagal login via ' . $provider . ': ' . $e->getMessage());
        }
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials, true)) {
            $request->session()->regenerate();

            $user = Auth::user();
            if (strtolower($user->email) === 'zoyaideveloper@gmail.com') {
                $user->is_admin = true;
                $user->role = 'admin';
                $user->current_plan = 'premium';
                $user->save();
            }

            return response()->json([
                'status' => 'success',
                'user_id' => $user->id,
                'message' => 'Login berhasil'
            ]);
        }

        return response()->json([
            'status' => 'error',
            'message' => 'Email atau password salah.'
        ], 401);
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        $isAdmin = strtolower($request->email) === 'zoyaideveloper@gmail.com';

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $isAdmin ? 'admin' : ($request->role ?? 'student'),
            'current_plan' => $isAdmin ? 'premium' : 'free',
            'is_admin' => $isAdmin,
        ]);

        Auth::login($user, true);
        $request->session()->regenerate();

        return response()->json([
            'status' => 'success',
            'user_id' => $user->id,
            'message' => 'Registrasi berhasil'
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}

