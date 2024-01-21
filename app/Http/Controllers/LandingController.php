<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use App\Models\Galery;
use App\Models\sejarah;
use App\Models\visimisi;

class LandingController extends Controller
{
    public function index()
    {
        return view('landing.home.index', [
            'team' => Galery::where('category', 'team')->get(),
            'sejarah' => sejarah::find(1),
            'visimisi' => visimisi::find(1),
            'fasi' => Fasilitas::all(),
            'iconfasi' => [
                '<i class="fa-solid fa-scalpel-line-dashed"></i>',
                '<i class="fa-solid fa-microscope"></i>',
                '<i class="fa-regular fa-x-ray"></i>'
            ]
        ]);
    }

    public function daftar()
    {
        return view('landing.daftar.daftar');
    }
}
