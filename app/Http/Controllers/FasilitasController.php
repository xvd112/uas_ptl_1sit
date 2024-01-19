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
        $fasilitas = Fasilitas::all();
        return view('dashboard.fasilitas.index', compact('fasilitas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.fasilitas.create');
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

        return redirect('/fasilitas')->with('success', 'Data fasilitas berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param string $id
     * @return \Illuminate\Http\Response
     */
    public function show(string $id)
    {
        $fasilitas = Fasilitas::findOrFail($id);
        return view('dashboard.fasilitas.show', compact('fasilitas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param string $id
     * @return \Illuminate\Http\Response
     */
    public function edit(string $id)
    {
        $fasilitas = Fasilitas::find($id);
        return view('dashboard.fasilitas.edit', compact('fasilitas'));
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

        return redirect('/fasilitas')->with('success', 'Data fasilitas berhasil diperbarui!');
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
        return redirect('/fasilitas')->with('success', 'Data fasilitas berhasil dihapus!');
    }

    public function view($id)
    {
        // Ambil data fasilitas berdasarkan ID
        $fasilitas = Fasilitas::find($id);
        if (!$fasilitas) {
            abort(404); // Atau berikan respons atau tindakan yang sesuai jika data tidak ditemukan
        }
        // Tampilkan view detail fasilitas
        return view('dashboard.fasilitas.view', compact('fasilitas'));
    }
}
