<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Daftar;
use App\Models\Syarat;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class DaftarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.daftar.index', [
            'daftars' => Daftar::latest()->filter(request(['search']))->paginate(5)->withQueryString(),
            'url' => 'daftar',
            'page' => 'Pendaftaran'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.daftar.create', [
            'page' => 'Pendaftaran',
            'url' => 'daftar',
            'subtitle' => 'Insert'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'nik' => 'numeric',
            'jk' => 'required',
            'tgl_book' => 'required|date',
            'email' => 'email:dns',
            'telpon' => 'required|numeric',
            'layanan' => 'required',
            'alamat' => 'max:255'
        ]);

        Daftar::create($validatedData);

        if (Str::contains(url()->current(), 'dashboard')) {
            return redirect('/dashboard/daftar')->with('success_daftar', 'Data Berhasil Ditambahkan!');
        } else {
            Session::flash('success_dftr', 'Pendaftaran Berhasil!');
            return view('landing.daftar.syarat', ['page' => 'Pendaftaran', 'data' => Syarat::where('fasilitas', $validatedData['layanan'])->first()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('dashboard.daftar.view', [
            'page' => 'Pendaftaran',
            'url' => 'daftar',
            'subtitle' => 'View',
            'data' => Daftar::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('dashboard.daftar.edit', [
            'page' => 'Pendaftaran',
            'url' => 'daftar',
            'subtitle' => 'Update',
            'data' => Daftar::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'nik' => 'numeric',
            'jk' => 'required',
            'tgl_book' => 'required|date',
            'email' => 'email:dns',
            'telpon' => 'required|numeric',
            'layanan' => 'required',
            'alamat' => 'max:255'
        ]);

        Daftar::where('id', $id)->update($validatedData);

        return redirect('/dashboard/daftar')->with('success_daftar', 'Sukses mengedit data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Daftar::destroy($id);
        return redirect('/dashboard/daftar')->with('success_daftar', 'Sukses menghapus data');
    }
}
