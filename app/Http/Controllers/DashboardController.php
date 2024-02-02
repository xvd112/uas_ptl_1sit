<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Daftar;
use App\Models\daftardokter;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $dataDok = daftardokter::select('bagian', DB::raw('count(*) as jml'))->groupby('bagian');
        $dataDaftar = Daftar::select(DB::raw('month(tgl_book) as bln'), DB::raw('count(*) as jml'))
            ->where(DB::raw('year(tgl_book)'), DB::raw('year(curdate())'))->groupby(DB::raw('month(tgl_book)'));

        return view('dashboard.beranda.index', [
            'page' => '',
            'url' => '',
            'user' => User::count(),
            'daftar' => Daftar::count(),
            'dokter' => daftardokter::count(),
            'berita' => Berita::count(),
            'dataDok' => [
                'labels' => $dataDok->pluck('bagian'),
                'data' => $dataDok->pluck('jml')
            ],
            'dataDaftar' => [
                'labels' => $dataDaftar->pluck('bln'),
                'data' => $dataDaftar->pluck('jml')
            ]
        ]);
    }
}
