<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Obat;
use App\Models\siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PetugasC extends Controller
{
    public function index() {
        $totalSiswa = siswa::count();
        $totalKelas = Kelas::count();
        $totalObat = Obat::count();
        return view('layout.operator', compact('totalSiswa','totalKelas','totalObat'))->with([
            'user' => $user = Auth::user(),
        ]);
    }
}
