<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fasilitas;

class FasilitasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.fasilitas.index', [
            'page' => 'Fasilitas',
            'url' => 'fasilitas',
            'data' => Fasilitas::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.fasilitas.create', [
            'page' => 'Fasilitas',
            'url' => 'fasilitas',
            'subtitle' => 'Insert',
            'data' => Fasilitas::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nm_fasilitas' => 'required|string|max:255',
            'deskripsi' => 'required|string', // Sesuaikan dengan nama kolom di model
            'nm_dokter' => 'required|string|max:255',
            's_dokter' => 'required|string|max:255',
        ]);

        Fasilitas::create($request->all());

        return redirect('/dashboard/fasilitas')->with('success_fasi', 'Data fasilitas berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param string $id
     * @return \Illuminate\Http\Response
     */
    public function show(string $id)
    {
        return view('dashboard.fasilitas.view', [
            'page' => 'Fasilitas',
            'url' => 'fasilitas',
            'subtitle' => 'View',
            'data' => Fasilitas::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param string $id
     * @return \Illuminate\Http\Response
     */
    public function edit(string $id)
    {
        return view('dashboard.fasilitas.edit', [
            'page' => 'Fasilitas',
            'url' => 'fasilitas',
            'subtitle' => 'Update',
            'data' => Fasilitas::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     * 
     * @param \Illuminate\Http\Request $request
     * @param string $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nm_fasilitas' => 'required|string|max:255',
            'deskripsi' => 'required|string', // Sesuaikan dengan nama kolom di model
            'nm_dokter' => 'required|string|max:255',
            's_dokter' => 'required|string|max:255',
        ]);

        $fasilitas = Fasilitas::find($id);
        $fasilitas->update($request->all());

        return redirect('/dashboard/fasilitas')->with('success_fasi', 'Data fasilitas berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     * 
     * @param string $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(string $id)
    {
        $fasilitas = Fasilitas::find($id);
        $fasilitas->delete();
        return redirect('/dashboard/fasilitas')->with('success_fasi', 'Data fasilitas berhasil dihapus!');
    }
}
