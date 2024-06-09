<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function login(Request $request)
    {
        // Validáció
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:8',
        ]);

        // Adatok lekérése
        $credentials = $request->only('email', 'password');

        // Bejelentkezési kísérlet
        if (Auth::attempt($credentials)) {
            // Bejelentkezés sikeres
            return response()->json([
                'message' => 'Login successful',
                'user' => Auth::user()
            ], 200);
        } else {
            // Bejelentkezés sikertelen
            return response()->json([
                'message' => 'Invalid credentials'
            ], 401);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return response()->json([
            'message' => 'Logged out successfully'
        ], 200);
    }
    // if (Auth::attempt(['email' => $email, 'password' => $password])) {
    //     // Bejelentkezés sikeres
    // }

}
