<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\DaftarDokterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\GaleryController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\SejarahController;
use App\Http\Controllers\SyaratController;
use App\Http\Controllers\VisiMisiController;

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

// Pendaftaran
Route::get('/daftar', [LandingController::class, 'daftar']);
Route::post('/daftar', [DaftarController::class, 'store'])->name('daftar');

// Berita
Route::get('/berita', [LandingController::class, 'berita']);
Route::get('/berita/{id}', [LandingController::class, 'detail']);

// Kontak
Route::get('/kontak', [LandingController::class, 'kontak']);


// Fasilitas
Route::get('/bedah', [LandingController::class, 'bedah']);
Route::get('/endoskopi', [LandingController::class, 'endoskopi']);
Route::get('/radiology', [LandingController::class, 'radiology']);

// Tentang Kami
Route::get('/sejarah', [LandingController::class, 'sejarah']);
Route::get('/visimisi', [LandingController::class, 'visimisi']);

// Dokter
Route::get('/dokter', [LandingController::class, 'dokter']);

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
    Route::get('/', [DashboardController::class, 'index']);

    // Modul User -> CRUD
    Route::resource('user', UserController::class);

    // Modul Galery -> CRUD
    Route::resource('galeri', GaleryController::class);

    // Modul Sejarah -> CRUD
    Route::resource('sejarah', SejarahController::class);

    // Modul VisiMisi -> CRUD
    Route::resource('visimisi', VisiMisiController::class);

    //    Modul VisiMisi -> CRUD
    Route::resource('daftardokter', DaftarDokterController::class);

    // Modul Pendaftaran -> CRUD
    Route::resource('daftar', DaftarController::class);
    Route::delete('/daftar/hapusbanyak', [DaftarController::class, 'destroyMultiple']);

    // Modul Pesyaratan -> CRUD
    Route::resource('syarat', SyaratController::class);

    // Modul Fasilitas -> CRUD
    Route::resource('fasilitas', FasilitasController::class);

    // Modul Kontak -> CRUD
    Route::resource('kontak', KontakController::class);

    // Modul Berita -> CRUD
    Route::resource('berita', BeritaController::class);
});
/* End Dashboard */