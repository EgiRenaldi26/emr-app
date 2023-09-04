<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Obat;
use Illuminate\Http\Request;
use App\Models\siswa;

class DatasiswaController extends Controller
{
    
    
    public function __construct()
    {
        $this->middleware('auth'); 
    }

    public function index(Request $request) {
        $user = auth()->user();
        $keyword = $request->keyword;
        
        $Siswa = siswa::where('nama_lengkap', 'LIKE', '%' . $keyword . '%')
            ->orWhere('nisn', $keyword)
            ->paginate(15);
    
        return view('page.datasiswa', compact('Siswa', 'user'));
    }
 
    public function create()
    {
        $obatList = Obat::all();
        $kelasList = Kelas::all();
        $user = auth()->user(); 
        return view('create.siswa', compact('user', 'kelasList', 'obatList'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nisn' => 'required|unique:siswa,nisn',
            'nama_lengkap' => 'required',
            'kelas_id' => 'required', 
            'sakit' => 'required',
            'tanggal' => 'required|date',
            'obat_id' => 'required',
            'alamat' => 'required',
            'status' => 'required',
        ]);

        siswa::create($validatedData);

        return redirect()->route('siswa.index')->with('success', 'Datasiswa Berhasil ditambahkan.');

        
    }

    public function edit($id)
    {
        $obatList = Obat::all();
        $kelasList = Kelas::all();
        $siswa = Siswa::find($id);
        $user = auth()->user(); 
        return view('update.siswa', compact('siswa', 'user','kelasList', 'obatList'));
    }

    public function update(Request $request, $id)
    {
        $s = siswa::findOrFail($id);
        
        $s->update([
            'nisn' =>$request->nisn,
            'nama_lengkap' =>$request->nama_lengkap,
            'kelas_id' =>$request->kelas_id,
            'sakit' => $request->sakit,
            'tanggal' =>$request->tanggal,
            'obat_id' =>$request->obat_id,
            'alamat' =>$request->alamat,
            'status' =>$request->status,
        ]);
        return redirect()->route('siswa.index')->with('success', 'Data peserta berhasil diperbarui.');
        
    }

    public function destroy($id)
    {
        $s = siswa::findOrFail($id);
        $s->delete();

        return redirect()->route('siswa.index')->with('success', 'Data berhasil dihapus.');
    }
}
