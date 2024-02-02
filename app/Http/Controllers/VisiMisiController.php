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
        return view('dashboard.visimisi.index', [
            'page' => 'visimisi',
            'url' => 'visimisi',
            'data' => visimisi::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('dashboard.visimisi.view', [
            'page' => 'visimisi',
            'url' => 'visimisi',
            'subtitle' => 'View',
            'data' => visimisi::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('dashboard.visimisi.edit', [
            'page' => 'visimisi',
            'url' => 'visimisi',
            'subtitle' => 'Update',
            'data' => visimisi::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rules = [

            'visi' => 'required',
            'misi' => 'required'
        ];
        $data = visimisi::find($id);
        $validatedData = $request->validate($rules);
        visimisi::where('id', $id)->update($validatedData);
        return redirect('/dashboard/visimisi')->with('success_visi', 'Sukses mengedit data');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
