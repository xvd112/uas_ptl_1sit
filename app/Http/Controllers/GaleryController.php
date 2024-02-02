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
            'page' => 'Galeri',
            'url' => 'galeri',
            'data' => Galery::latest()->filter(request(['search']))->paginate(5)->withQueryString()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.galeri.form', [
            'page' => 'Galeri',
            'url' => 'galeri',
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
            'desc' => 'max:1000'
        ]);

        if (key_exists('photo', $validatedData)) {
            $image = $request->file('photo');
            $destinationPath = 'asset/img/galeri/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $validatedData['photo'] = $profileImage;
        }

        Galery::create($validatedData);

        return redirect('/dashboard/galeri')->with('success_gal', 'Sukses menginputkan data');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('dashboard.galeri.view', [
            'page' => 'Galeri',
            'url' => 'galeri',
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
            'page' => 'Galeri',
            'url' => 'galeri',
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
            'desc' => 'max:1000'
        ];

        $data = Galery::find($id);

        if ($request->title != $data->title) {
            $rules['title'] = 'required|max:255|unique:galeries';
        }

        if ($request->photo != '' && $request->photo != null) {
            $rules['photo'] = 'required|file|mimes:jpeg,png,jpg,gif,svg';
        }

        $validatedData = $request->validate($rules);

        if (key_exists('photo', $validatedData)) {
            $destinationPath = 'asset/img/galeri/';

            if ($request->oldfoto && $request->oldfoto != 'user.png') {
                unlink($destinationPath . $request->oldfoto);
            }

            $image = $request->file('photo');
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $validatedData['photo'] = $profileImage;
        }

        Galery::where('id', $id)->update($validatedData);

        return redirect('/dashboard/galeri')->with('success_gal', 'Sukses mengedit data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $image = Galery::find($id)->photo;
        if (Galery::find($id)->photo) {
            $destinationPath = 'asset/img/galeri/';

            if ($image) {
                unlink($destinationPath . $image);
            }
        }

        Galery::destroy($id);
        return redirect('/dashboard/galeri')->with('success_gal', 'Sukses menghapus data');
    }
}
