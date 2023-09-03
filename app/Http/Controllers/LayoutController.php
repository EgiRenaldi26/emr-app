<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LayoutController extends Controller
{
    public function admin() {
        return view('layout.home')->with([
            'user' => $user = Auth::user(),
        ]);
    }
    public function operator() {
        return view('layout.operator')->with([
            'user' => $user = Auth::user(),
        ]);
    }

}
