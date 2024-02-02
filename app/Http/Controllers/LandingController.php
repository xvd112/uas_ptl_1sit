<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Fasilitas;
use App\Models\Galery;
use App\Models\sejarah;
use App\Models\visimisi;
use App\Models\daftardokter;
use App\Models\Kontak;

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
            ],
            'kontak' => Kontak::find(1),
            'berita' => Berita::orderBy('created_at', 'DESC')->take(3)->get(),
            'cover' => Galery::where('category', 'cover')->orderBy('created_at', 'DESC')->take(1)->get()[0],
            'icon' => Galery::where('category', 'icon')->orderBy('created_at', 'DESC')->take(1)->get()[0]
        ]);
    }

    public function daftar()
    {
        return view('landing.daftar.daftar', [
            'kontak' => Kontak::find(1),
            'icon' => Galery::where('category', 'icon')->orderBy('created_at', 'DESC')->take(1)->get()[0]
        ]);
    }

    public function bedah()
    {
        return view('landing.fasilitas.bedah', [
            'page' => 'fasilitas',
            'url' => 'fasilitas',
            'data' => fasilitas::where('nm_fasilitas', 'bedah')->get(),
            'daftardokter' => daftardokter::where('bagian', 'bedah')->get(),
            'kontak' => Kontak::find(1),
            'icon' => Galery::where('category', 'icon')->orderBy('created_at', 'DESC')->take(1)->get()[0]
        ]);
    }
    public function endoskopi()
    {
        return view('landing.fasilitas.endoskopi', [
            'page' => 'fasilitas',
            'url' => 'fasilitas',
            'data' => fasilitas::where('nm_fasilitas', 'endoskopi')->get(),
            'daftardokter' => daftardokter::where('bagian', 'endoskopi')->get(),
            'kontak' => Kontak::find(1),
            'icon' => Galery::where('category', 'icon')->orderBy('created_at', 'DESC')->take(1)->get()[0]
        ]);
    }
    public function radiology()
    {
        return view('landing.fasilitas.radiology', [
            'page' => 'fasilitas',
            'url' => 'fasilitas',
            'data' => fasilitas::where('nm_fasilitas', 'radiology')->get(),
            'daftardokter' => daftardokter::where('bagian', 'radiologi')->get(),
            'kontak' => Kontak::find(1),
            'icon' => Galery::where('category', 'icon')->orderBy('created_at', 'DESC')->take(1)->get()[0]
        ]);
    }

    public function sejarah()
    {
        return view('landing.tentang.sejarah', [
            'page' => 'sejarah',
            'url' => 'sejarah',
            'data' => sejarah::all(),
            'kontak' => Kontak::find(1),
            'icon' => Galery::where('category', 'icon')->orderBy('created_at', 'DESC')->take(1)->get()[0]
        ]);
    }

    public function visimisi()
    {
        return view('landing.tentang.visimisi', [
            'page' => 'visimisi',
            'url' => 'visimisi',
            'data' => visimisi::all(),
            'kontak' => Kontak::find(1),
            'icon' => Galery::where('category', 'icon')->orderBy('created_at', 'DESC')->take(1)->get()[0]
        ]);
    }

    public function dokter()
    {
        return view('landing.tentang.dokter', [
            'page' => 'daftardokter',
            'url' => 'daftardokter',
            'data' => daftardokter::all(),
            'kontak' => Kontak::find(1),
            'icon' => Galery::where('category', 'icon')->orderBy('created_at', 'DESC')->take(1)->get()[0]
        ]);
    }

    public function berita()
    {
        return view('landing.berita.berita', [
            'data' => Berita::all(),
            'kontak' => Kontak::find(1),
            'icon' => Galery::where('category', 'icon')->orderBy('created_at', 'DESC')->take(1)->get()[0]
        ]);
    }

    public function detail($id)
    {
        return view('landing.berita.detail', [
            'data' => Berita::find($id),
            'kontak' => Kontak::find(1),
            'icon' => Galery::where('category', 'icon')->orderBy('created_at', 'DESC')->take(1)->get()[0]
        ]);
    }

    public function kontak()
    {
        return view('landing.kontak.kontak', [
            'data' => Kontak::all(),
            'kontak' => Kontak::find(1),
            'icon' => Galery::where('category', 'icon')->orderBy('created_at', 'DESC')->take(1)->get()[0]
        ]);
    }
}
