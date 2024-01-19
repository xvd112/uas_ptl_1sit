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
        $sejarahs = sejarah::all();
        // panggil file index.blade.php di folder dashboard.kelompok
        return view('dashboard.sejarah.sejarah', compact('sejarahs'), [
            'active' => 'info',

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.sejarah.create
        ', [
            'active' => 'info',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'sejarah' => 'required',
        ]);
        sejarah::create($request->all());
        return redirect('/sejarah')->with('success', 'Data sejarah berhasil 
        ditambahkan!');
    }

    /**
     * Display the specified resource.
     * 
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show(string $id)
    {
        $sejarah = sejarah::findOrFail($id);
        return view('sejarah.show', compact('sejarah'));
    }

    /**
     * Show the form for editing the specified resource.
     * 
     *  @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(string $id)
    {
        $sejarah = sejarah::find($id);
        return view('dashboard.sejarah.edit', compact('sejarah'), [
            'active' => 'info',

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
        $request->validate([
            'sejarah' => 'required',
        ]);
        $sejarah = sejarah::find($id);
        $sejarah->update($request->all());
        return redirect('/sejarah')->with('success', 'Data sejarah berhasil 
            diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     * 
     * @param int $id
     * @return \Illuminate\Http\Respons
     */
    public function destroy(string $id)
    {
        $sejarah = sejarah::find($id);
        $sejarah->delete();
        return redirect('/sejarah')->with('success', 'Data Sejarah berhasil 
        dihapus!');
    }
}
