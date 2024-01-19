<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\DaftarDokterController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\GaleryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\SejarahController;
use App\Http\Controllers\SyaratController;
use App\Http\Controllers\TentangController;
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

// Fasilitas - Bedah
Route::get('/bedah', function () {
    return view('landing.fasilitas.bedah', ['active' => '']);
});

// Fasilitas - Endoskopi
Route::get('/endoskopi', function () {
    return view('landing.fasilitas.endoskopi', ['active' => '']);
});

// Fasilitas - Radiology
Route::get('/radiology', function () {
    return view('landing.fasilitas.radiology', ['active' => '']);
});
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
        return view('dashboard.dashboard', ['page' => '']);
    });

    // Modul User -> CRUD
    Route::resource('user', UserController::class);

    // Modul Galery -> CRUD
    Route::resource('galeri', GaleryController::class);

    // Modul Pendaftaran -> CRUD
    Route::resource('daftar', DaftarController::class);

    // Modul Pesyaratan -> CRUD
    Route::resource('syarat', SyaratController::class);
});
// Modul User -> CRUD
// Route::resource('dashboard/user', UserController::class)->middleware('admin');
/* End Dashboard */

Route::get('/dashboard/fasilitas', [FasilitasController::class, 'index']);
Route::get('/dashboard/fasilitas/create', [FasilitasController::class, 'create'])->name('fasilitas.create');
Route::post('/dashboard/fasilitas', [FasilitasController::class, 'store'])->name('fasilitas.store');
Route::get('/dashboard/fasilitas/{id}/edit', [FasilitasController::class, 'edit'])->name('fasilitas.edit');
Route::put('/dashboard/fasilitas/{id}', [FasilitasController::class, 'update'])->name('fasilitas.update');
Route::delete('/dashboard/fasilitas/{id}', [FasilitasController::class, 'destroy'])->name('fasilitas.destroy');
Route::get('/dashboard/fasilitas/{id}', [FasilitasController::class, 'view'])->name('fasilitas.view');

Route::get('/tentang', [TentangController::class, 'index']);
Route::get('/tentang/create', [TentangController::class, 'tentang.visimisi']);

//-- Kelola Tabel sejarah
Route::get('/sejarah', [SejarahController::class, 'index']);
Route::get('/sejarah/create', [SejarahController::class, 'create'])->name('sejarah.create');
Route::post('/sejarah', [SejarahController::class, 'store'])->name('sejarah.store');
Route::get('/sejarah/{id}/edit', [SejarahController::class, 'edit'])->name('sejarah.edit');
Route::put('/sejarah/{id}', [SejarahController::class, 'update'])->name('sejarah.update');
Route::delete('/sejarah/{id}', [SejarahController::class, 'destroy'])->name('sejarah.destroy');

//-- Kelola Tabel daftardokter
Route::get('/daftardokter', [DaftarDokterController::class, 'index']);
Route::get('/daftardokter/create', [DaftarDokterController::class, 'create'])->name('daftardokter.create');
Route::post('/daftardokter', [DaftarDokterController::class, 'store'])->name('daftardokter.store');
Route::get('/daftardokter/{id}/edit', [DaftarDokterController::class, 'edit'])->name('daftardokter.edit');
Route::put('/daftardokter/{id}', [DaftarDokterController::class, 'update'])->name('daftardokter.update');
Route::delete('/daftardokter/{id}', [DaftarDokterController::class, 'destroy'])->name('daftardokter.destroy');

//-- Kelola Tabel visimisi

Route::get('/visimisi', [VisiMisiController::class, 'index']);
Route::get('/visimisi/create', [VisiMisiController::class, 'create'])->name('visimisi.create');
Route::post('/visimisi', [VisiMisiController::class, 'store'])->name('visimisi.store');
Route::get('/visimisi/{id}/edit', [VisiMisiController::class, 'edit'])->name('visimisi.edit');
Route::put('/visimisi/{id}', [VisiMisiController::class, 'update'])->name('visimisi.update');
Route::delete('/visimisi/{id}', [VisiMisiController::class, 'destroy'])->name('visimisi.destroy');
