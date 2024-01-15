<?php

namespace App\Http\Controllers;

use App\Models\Galery;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        return view('landing.home.index', [
            'active' => '',
            'team' => Galery::where('category', 'team')->get()
        ]);
    }
}
