<?php

namespace App\Http\Controllers;

use App\Models\Galery;
use Illuminate\Http\Request;

class GaleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.galeri.index', [
            'active' => 'galeri',
            'data' => Galery::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.galeri.form', [
            'active' => 'galeri',
            'subtitle' => 'Insert',
            'data' => Galery::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255|unique:galeries',
            'category' => 'required|max:255',
            'photo' => 'required|file|mimes:jpeg,png,jpg,gif,svg',
            'desc' => 'max:255'
        ]);

        if (key_exists('photo', $validatedData)) {
            $image = $request->file('photo');
            $destinationPath = 'asset/img/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $validatedData['photo'] = $profileImage;
        }

        Galery::create($validatedData);

        return redirect('/dashboard/galeri')->with('success', 'Sukses menginputkan data');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('dashboard.galeri.view', [
            'active' => 'galeri',
            'subtitle' => 'View',
            'data' => Galery::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('dashboard.galeri.edit', [
            'active' => 'galeri',
            'subtitle' => 'Update',
            'data' => Galery::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rules = [
            'category' => 'required|max:255',
            'desc' => 'max:255'
        ];

        $data = Galery::find($id);

        if ($request->title != $data->title) {
            $rules['title'] = 'required|max:255|unique:galeries';
        }

        if ($request->photo != '' && $request->photo != null) {
            $rules['photo'] = 'required|min:5|max:255';
        }

        $validatedData = $request->validate($rules);

        if (key_exists('photo', $validatedData)) {
            $image = $request->file('photo');
            $destinationPath = 'asset/img/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $validatedData['photo'] = $profileImage;
        }

        Galery::where('id', $id)->update($validatedData);

        return redirect('/dashboard/galeri')->with('success', 'Sukses mengedit data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Galery::destroy($id);
        return redirect('/dashboard/galeri')->with('success', 'Sukses menghapus data');
    }
}
