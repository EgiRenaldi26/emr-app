<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\siswa;

class DatasiswaController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth'); 
    }

    public function index() {
        $user = auth()->user();
        $Siswa = siswa::all();
        return view('page.datasiswa' , compact('Siswa'), ['user' => $user]);
    }

    public function create()
    {
        $user = auth()->user(); // Mendapatkan informasi user yang sedang login
        return view('create.siswa', compact('user'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nisn' => 'required|unique:siswa,nisn',
            'nama_lengkap' => 'required',
            'nama_kelas' => 'required', 
            'sakit' => 'required',
            'tanggal' => 'required|date',
            'nama_obat' => 'required',
            'alamat' => 'required',
            'status' => 'required',
        ]);

        siswa::create($validatedData);

        return redirect()->route('siswa.index')->with('success', 'Data peserta berhasil ditambahkan.');

        
    }

    public function edit($id)
    {
        $siswa = Siswa::find($id); // Retrieve the Siswa model based on the $id
        return view('update.siswa', ['siswa' => $siswa]);
    }


    public function update(Request $request, $id)
    {
        $s = siswa::findOrFail($id);
        
        $s->update([
            'nisn' =>$request->nisn,
            'nama_lengkap' =>$request->nama_lengkap,
            'nama_kelas' =>$request->nama_kelas,
            'sakit' => $request->sakit,
            'tanggal' =>$request->tanggal,
            'nama_obat' =>$request->nama_obat,
            'alamat' =>$request->alamat,
            'status' =>$request->status,
        ]);
        return redirect()->route('siswa.index')->with('success', 'Data peserta berhasil diperbarui.');
    }
}
