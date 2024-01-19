<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sejarah;
use App\Models\visimisi;
use App\Models\daftardokter;
class TentangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $sejarahs = sejarah::all();
        $visimisis = visimisi::all();
        $daftardokters = daftardokter::all();
        // panggil file index.blade.php di folder dashboard.kelompok
        return view('landing.tentang.tentang', compact('sejarahs','visimisis','daftardokters'), [
            'active' => '',
           
        ]);
       
        
        }

    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
      
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
