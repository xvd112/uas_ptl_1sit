<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.berita.index', [
            'page' => 'Berita',
            'url' => 'berita',
            'data' => Berita::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.berita.form', [
            'page' => 'Berita',
            'url' => 'berita',
            'subtitle' => 'Insert',
            'data' => Berita::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255|unique:beritas',
            'date' => 'required|date',
            'photo' => 'required|file|mimes:jpeg,png,jpg,gif,svg',
            'isi' => 'max:255'
        ]);

        if (key_exists('photo', $validatedData)) {
            $image = $request->file('photo');
            $destinationPath = 'asset/img/berita/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $validatedData['photo'] = $profileImage;
        }

        Berita::create($validatedData);

        return redirect('/dashboard/berita')->with('success_berita', 'Sukses menginputkan data');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('dashboard.berita.view', [
            'page' => 'Berita',
            'url' => 'berita',
            'subtitle' => 'View',
            'data' => Berita::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('dashboard.berita.edit', [
            'page' => 'Berita',
            'url' => 'berita',
            'subtitle' => 'Update',
            'data' => Berita::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rules = [
            'date' => 'required|date',
            'isi' => 'max:255'
        ];

        $data = Berita::find($id);

        if ($request->title != $data->title) {
            $rules['title'] = 'required|max:255|unique:beritas';
        }

        if ($request->photo != '' && $request->photo != null) {
            $rules['photo'] = 'required|min:5|max:255';
        }

        $validatedData = $request->validate($rules);

        if (key_exists('photo', $validatedData)) {
            $image = $request->file('photo');
            $destinationPath = 'asset/img/berita/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $validatedData['photo'] = $profileImage;
        }

        Berita::where('id', $id)->update($validatedData);

        return redirect('/dashboard/berita')->with('success_berita', 'Sukses mengedit data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Berita::destroy($id);
        return redirect('/dashboard/berita')->with('success_berita', 'Sukses menghapus data');
    }
}
