<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sejarah;

class SejarahController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.sejarah.index', [
            'page' => 'sejarah',
            'url' => 'sejarah',
            'data' => sejarah::all()
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
     * 
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show(string $id)
    {
        return view('dashboard.sejarah.view', [
            'page' => 'sejarah',
            'url' => 'sejarah',
            'subtitle' => 'View',
            'data' => sejarah::find($id)
        ]);
    }
    /**
     * Show the form for editing the specified resource.
     * 
     *  @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(string $id)
    {
        return view('dashboard.sejarah.edit', [
            'page' => 'sejarah',
            'url' => 'sejarah',
            'subtitle' => 'Update',
            'data' => sejarah::find($id)
        ]);
    }
    /**
     * Update the specified resource in storage.
     * 
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, string $id)
    {
        $rules = [
            
            'sejarah' => 'required'
        ];
        $data = sejarah::find($id);
        $validatedData = $request->validate($rules);
        sejarah::where('id', $id)->update($validatedData);

        return redirect('/dashboard/sejarah')->with('success', 'Sukses mengedit data');
    }
    /**
     * Remove the specified resource from storage.
     * 
     * @param int $id
     * @return \Illuminate\Http\Respons
     */
    public function destroy(string $id)
    {
       sejarah::destroy($id);
        return redirect('/dashboard/sejarah')->with('success', 'Sukses menghapus data');
    }
}
