<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class KelasController extends Controller
{
    public function index(){
        $kelas = Kelas::all();
        $user = Auth::user(); // Assuming you want to pass the logged-in user
        return view('page.datakelas', compact('kelas', 'user'));
    }

    public function create()
    {
        $user = auth()->user(); 
        return view('create.kelas', compact('user'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'namakelas' => 'required',
        ]);

        Kelas::create($validatedData);

        return redirect()->route('kelas.index')->with('success', 'Data peserta berhasil ditambahkan.');

        
    }

    public function edit($id)
    {
        $kelas = Kelas::find($id);
        $user = auth()->user(); 
        return view('update.kelas', compact('kelas', 'user'));
    }

    public function update(Request $request, $id)
    {
        $k = Kelas::findOrFail($id);
        
        $k->update([
            'namakelas' =>$request->namakelas,
        ]);
        return redirect()->route('kelas.index')->with('success', 'Data peserta berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $k = Kelas::findOrFail($id);
        $k->delete();

        return redirect()->route('kelas.index')->with('success', 'Data berhasil dihapus.');
    }

}
