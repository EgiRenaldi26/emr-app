<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index() {
        if($user = Auth::user()){
            // if($user->role == '1'){
            //     return redirect()->intended('admin');
            // } elseif($user->role == '2'){
            //     return redirect()->intended('operator');
            // }
            return redirect()->intended('dashboard');
        }

        return view('login.login');
    }

    public function proses(Request $request) {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ],
            [
                'username.required' => 'Username Tidak Boleh Kosong'
            ]
        );

        $kredensial = $request->only('username','password');

        if(Auth::attempt($kredensial)) {
            $request->session()->regenerate();
            $user = Auth::user();
            // if($user->role == '1'){
            //     return redirect()->intended('admin');
            // } elseif($user->role == '2'){
            //     return redirect()->intended('operator');
            // }

            if($user) {
                return redirect()->intended('dashboard');
            }

            return redirect()->intended('/');
        }

        return back()->withErrors([
            'username' => 'Maaf username atau password salah'
        ])->onlyInput('username');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerate();

        return redirect('/login');
    }
}
