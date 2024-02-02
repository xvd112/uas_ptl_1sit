<?php

namespace App\Http\Controllers;

use App\Models\Syarat;
use Illuminate\Http\Request;

class SyaratController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.syarat.index', [
            'page' => 'Persyaratan',
            'url' => 'syarat',
            'data' => Syarat::latest()->filter(request(['search']))->paginate(5)->withQueryString()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.syarat.create', [
            'page' => 'Persyaratan',
            'url' => 'syarat',
            'subtitle' => 'Insert',
            'data' => Syarat::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'fasilitas' => 'required|unique:syarats',
            'persyaratan' => 'required|max:1000'
        ]);

        Syarat::create($validatedData);
        return redirect('/dashboard/syarat')->with('success_syarat', 'Sukses menginputkan data');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('dashboard.syarat.view', [
            'page' => 'Persyaratan',
            'url' => 'syarat',
            'subtitle' => 'View',
            'data' => Syarat::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('dashboard.syarat.edit', [
            'page' => 'Persyaratan',
            'url' => 'syarat',
            'subtitle' => 'Update',
            'data' => Syarat::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rules['persyaratan'] = 'required|max:1000';

        $data = Syarat::find($id);

        if ($request->fasilitas != $data->fasilitas) {
            $rules['fasilitas'] = 'unique:syarats';
        }

        $validatedData = $request->validate($rules);
        Syarat::where('id', $id)->update($validatedData);

        return redirect('/dashboard/syarat')->with('success_syarat', 'Sukses mengedit data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Syarat::destroy($id);
        return redirect('/dashboard/syarat')->with('success_syarat', 'Sukses menghapus data');
    }
}
