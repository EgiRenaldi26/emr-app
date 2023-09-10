<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index() {
        return view('login.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            if ($user->role === 'admin') {
                return redirect()->route('dashboard.admin'); // Gantilah 'admin.dashboard' sesuai dengan rute dashboard admin Anda
            } elseif ($user->role === 'petugas') {
                return redirect()->route('dashboard.operator'); // Gantilah 'petugas.dashboard' sesuai dengan rute dashboard petugas Anda
            }
        }

        // Jika login gagal, kembalikan ke halaman login dengan pesan error
        return redirect()->route('login')->withErrors(['username' => 'Invalid credentials']);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerate();

        return redirect('/login');
    }
}
