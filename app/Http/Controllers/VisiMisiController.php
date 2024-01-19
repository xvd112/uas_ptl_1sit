<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VisiMisi;

class VisiMisiController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $visimisis = visimisi::all();
        // panggil file index.blade.php di folder dashboard.kelompok
        return view('dashboard.visimisi.visimisi', compact('visimisis'), [
            'active' => 'info',

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.visimisi.create
        ', [
            'active' => 'info',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'visi' => 'required',
            'misi' => 'required',
        ]);
        visimisi::create($request->all());
        return redirect('/visimisi')->with('success', 'Data VisiMisi berhasil 
        ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $vsisimisi = visimisi::findOrFail($id);
        return view('visimisi.show', compact('visimisi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $visimisi = visimisi::find($id);
        return view('dashboard.visimisi.edit', compact('visimisi'), [
            'active' => 'info',

        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'visi' => 'required',
            'misi' => 'required',
        ]);
        $visimisi = visimisi::find($id);
        $visimisi->update($request->all());
        return redirect('/visimisi')->with('success', 'Data VisiMisi berhasil 
            diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $visimisi = visimisi::find($id);
        $visimisi->delete();
        return redirect('/visimisi')->with('success', 'Data VisiMisi berhasil 
        dihapus!');
    }
}
