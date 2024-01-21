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
        return view('dashboard.daftardokter.index', [
            'page' => 'daftardokter',
            'url' => 'daftardokter',
            'data' => daftardokter::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.daftardokter.form', [
            'page' => 'daftardokter',
            'url' => 'daftardokter',
            'subtitle' => 'Insert',
            'data' => daftardokter::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kd_dok' => 'required|max:255|unique:daftardokters',
            'nama' => 'required|max:255',
            'tempat' => 'required|max:255',
            'tgl_lahir' => 'required|date',
            'alamat' => 'required|max:255',
            'department' => 'required|max:255',
            'specialty' => 'required|max:255',
            'photo' => 'required|file|mimes:jpeg,png,jpg,gif,svg',
            
        ]);

        if (key_exists('photo', $validatedData)) {
            $image = $request->file('photo');
            $destinationPath = 'asset/img/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $validatedData['photo'] = $profileImage;
        }

       daftardokter::create($validatedData);

        return redirect('/dashboard/daftardokter')->with('success', 'Sukses menginputkan data');
    }




    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('dashboard.daftardokter.view', [
            'page' => 'daftardokter',
            'url' => 'daftardokter',
            'subtitle' => 'View',
            'data' => daftardokter::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('dashboard.daftardokter.edit', [
            'page' => 'daftardokter',
            'url' => 'daftardokter',
            'subtitle' => 'Update',
            'data' => daftardokter::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rules = [
            'nama' => 'required|max:255',
            'tempat' => 'required|max:255',
            'tgl_lahir' => 'required',
            'alamat' => 'required|max:255',
            'department' => 'required|max:255',
            'specialty' => 'required|max:255'
        ];

        $data = daftardokter::find($id);

        if ($request->title != $data->title) {
            $rules['kd_dok'] = 'required|max:255|unique:daftardokters';
        }

        if ($request->photo != '' && $request->photo != null) {
            $rules['photo'] = 'required|file|mimes:jpeg,png,jpg,gif,svg';
        }

        $validatedData = $request->validate($rules);

        if (key_exists('photo', $validatedData)) {
            $image = $request->file('photo');
            $destinationPath = 'asset/img/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $validatedData['photo'] = $profileImage;
        }

        daftardokter::where('id', $id)->update($validatedData);

        return redirect('/dashboard/daftardokter')->with('success', 'Sukses mengedit data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        daftardokter::destroy($id);
        return redirect('/dashboard/daftardokter')->with('success', 'Sukses menghapus data');
    }
}
