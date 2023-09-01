<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Obat;
use App\Models\siswa;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
    public function index(){
        $user = auth()->user();
        $jumlahSiswa = siswa::count();
        $jumlahKelas = Kelas::count();
        $jumlahObat = Obat::count();
        return view('page.datasiswa', compact('user', 'jumlahSiswa', 'jumlahKelas', 'jumlahObat'));

    }
}
