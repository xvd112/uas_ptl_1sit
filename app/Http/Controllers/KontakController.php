<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.kontak.index', [
            'kontaks' => Kontak::all(),
            'url' => 'kontak',
            'page' => 'Kontak'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
    //     //
    // }

    /**
     * Display the specified resource.
     */
    // public function show(string $id)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('dashboard.kontak.edit', [
            'page' => 'Kontak',
            'url' => 'kontak',
            'subtitle' => 'Update',
            'data' => Kontak::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rules['alamat'] = 'required|max:255';

        $data = Kontak::find($id);

        if ($request->alamat != $data->alamat) {
            $rules['alamat'] = 'required|unique:kontaks';
        }

        $validatedData = $request->validate($rules);
        Kontak::where('id', $id)->update($validatedData);

        return redirect('/dashboard/kontak')->with('success_kontak', 'Sukses mengedit data');
    }

    /**
     * Remove the specified resource from storage.
     */
    // public function destroy(string $id)
    // {
    //     //
    // }
}
