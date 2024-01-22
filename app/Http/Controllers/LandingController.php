<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use App\Models\Galery;
use App\Models\sejarah;
use App\Models\visimisi;
use App\Models\daftardokter;
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

    public function bedah()
    {
        return view('landing.fasilitas.bedah');
    }

    public function endoskopi()
    {
        return view('landing.fasilitas.endoskopi');
    }

    public function radiology()
    {
        return view('landing.fasilitas.radiology');
    }

    public function sejarah()
    {
    return view('landing.tentang.sejarah', [
        'page' => 'sejarah',
        'url' => 'sejarah',
        'data' => sejarah::all()
    ]);
}

public function visimisi()
{
    return view('landing.tentang.visimisi', [
        'page' => 'visimisi',
        'url' => 'visimisi',
        'data' => visimisi::all()
    ]);
}

public function dokter()
    {
        return view('landing.tentang.dokter', [
            'page' => 'daftardokter',
            'url' => 'daftardokter',
            'data' => daftardokter::all()
        ]);
    }
}
