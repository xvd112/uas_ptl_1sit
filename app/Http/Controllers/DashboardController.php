<?php

namespace App\Http\Controllers;

use App\Models\Daftar;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.beranda.index', [
            'page' => '',
            'url' => '',
            'user' => User::count(),
            'daftar' => Daftar::count(),
            'dokter' => User::count(),
            'berita' => User::count(),
        ]);
    }
}
