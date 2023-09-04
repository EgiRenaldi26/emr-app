<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Obat;
use App\Models\siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LayoutController extends Controller
{
    // public function admin() {
    //     return view('layout.home')->with([
    
    //     $totalSiswa = siswa::count();
    //     $totalKelas = Kelas::count();
    //     $totalObat = Obat::count();
    //     return view('layout.home', compact('totalSiswa','totalKelas','totalObat'))->with([
    //         'user' => $user = Auth::user(),
    //     ]);
    // }
    // public function operator() {
    //     return view('layout.operator')->with([
    //         'user' => $user = Auth::user(),
    //     ]);
    // }

}
