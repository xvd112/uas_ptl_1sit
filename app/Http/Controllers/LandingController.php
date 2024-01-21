<?php

namespace App\Http\Controllers;

use App\Models\Galery;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        return view('landing.home.index', [
            'team' => Galery::where('category', 'team')->get()
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
}
