<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GaleryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LandingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/* Landing */
// -----------------------------------------------
// Home
Route::get('/', [LandingController::class, 'index']);
// -----------------------------------------------
/* End Landing */

/* Auth */
// -----------------------------------------------
// Register
Route::get('/register', [AuthController::class, 'showRegister'])->middleware('guest'); // Buka Form Register
Route::post('/register', [AuthController::class, 'register']); // Fungsi Register

// Login
Route::get('/login', [AuthController::class, 'showLogin'])->name('login')->middleware('guest'); // Buka Form Login
Route::post('/login', [AuthController::class, 'login']); // Fungsi Login

// Logout
Route::post('/logout', [AuthController::class, 'logout']);
// -----------------------------------------------
/* End Auth */

/* Dashboard */
Route::prefix('dashboard')->middleware('auth')->group(function () {
    // Beranda
    Route::get('/', function () {
        return view('dashboard.dashboard', ['active' => '']);
    });

    // Modul User -> CRUD
    Route::resource('user', UserController::class);

    // Modul Galery -> CRUD
    Route::resource('galeri', GaleryController::class);
});
/* End Dashboard */