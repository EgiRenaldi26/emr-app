<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index() {
        return view('login.login');
    }

    public function proses(Request $request) {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            // Login berhasil
            $user = Auth::user();
            $role = $user->role;

            if ($role == 'admin') {
                return redirect()->route('dashboard.admin');
            } elseif ($role == 'petugas') {
                return redirect()->route('dashboard.operator');
            } else {
            }
        }
    //Belum selesai 
        // Login gagal
        return redirect()->route('login')->with('error', 'Login gagal. Periksa kembali username dan password Anda.');
    
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerate();

        return redirect('/login');
    }
}
