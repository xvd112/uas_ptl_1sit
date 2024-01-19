<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\daftardokter;

class DaftarDokterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $daftardokters = daftardokter::all();
        // panggil file index.blade.php di folder dashboard.kelompok
        return view('dashboard.daftardokter.daftardokter', compact('daftardokters'), [
            'active' => 'dokter',

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.daftardokter.create
        ', [
            'active' => 'dokter',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kd_dok' => 'required',
            'nama' => 'required',
            'department' => 'required',
            'specialty' => 'required',

        ]);
        daftardokter::create($request->all());
        return redirect('/daftardokter')->with('success', 'Data Dokter berhasil 
        ditambahkan!');
    }




    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $daftardokter = daftardokter::findOrFail($id);
        return view('daftardokter.show', compact('daftardokter'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $daftardokter = daftardokter::find($id);
        return view('dashboard.daftardokter.edit', compact('daftardokter'), [
            'active' => 'dokter',

        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'kd_dok' => 'required',
            'nama' => 'required',
            'department' => 'required',
            'specialty' => 'required',
        ]);
        $daftardokter = daftardokter::find($id);
        $daftardokter->update($request->all());
        return redirect('/daftardokter')->with('success', 'Data Dokter berhasil 
            diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $daftardokter = daftardokter::find($id);
        $daftardokter->delete();
        return redirect('/daftardokter')->with('success', 'Data Dokter berhasil 
        dihapus!');
    }
}
