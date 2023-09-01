<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ObatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $obat = Obat::all();
        $user = Auth::user(); // Assuming you want to pass the logged-in user
        return view('page.dataobat', compact('obat', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = auth()->user(); 
        return view('create.obat', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_obat' => 'required',
            'stok' => 'required',
        ]);

        Obat::create($validatedData);

        return redirect()->route('obat.index')->with('success', 'Data peserta berhasil ditambahkan.');
    }

    
    public function edit($id)
    {
        $obat = Obat::find($id);
        $user = auth()->user(); 
        return view('update.obat', compact('obat', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $o = Obat::findOrFail($id);
        
        $o->update([
            'nama_obat' =>$request->nama_obat,
            'stok' =>$request->stok,
        ]);
        return redirect()->route('obat.index')->with('success', 'Data peserta berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $o = Obat::findOrFail($id);
        $o->delete();

        return redirect()->route('obat.index')->with('success', 'Data berhasil dihapus.');
    }
}
