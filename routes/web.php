<?php

use App\Http\Controllers\AntreansController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasiensController;
use App\Http\Controllers\DoktersController;
use App\Http\Controllers\UserController;

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


Route::get('/appointme', function () {
    return view('appointme');
})->name('appointme');

Route::get('/home', function () {
    return view('home.index');
});


Route::get('home', function () {
    return view('pasiens.home');
})->name('pasiens.home');

Route::get('polis', function () {
    return view('pasiens.poli');
})-> name('pasiens.poli');



Route::get('kontaks', function () {
    return view('pasiens.kontak');
})->name('pasiens.kontak');

Route::get('antreans', function () {
    return view('pasiens.antreans');
})->name('pasiens.antreans');

#pasien
Route::get('register', [UserController::class, 'register'])->name('register');
Route::post('register', [UserController::class, 'register_action'])->name('register.action');
Route::get('login', [UserController::class, 'login'])->name('login');
Route::post('login', [UserController::class, 'login_action'])->name('login.action');
Route::get('password', [UserController::class, 'password'])->name('password');
Route::post('password', [UserController::class, 'password_action'])->name('password.action');
Route::get('logout', [UserController::class, 'logout'])->name('logout');

# Halaman Profil
Route::get('pasiens', [PasiensController::class, 'index'])->name('pasiens.profil');

# Edit di Halaman Profil
Route::put('pasiens/{id_pasien}/update', [PasiensController::class, 'update'])->name('pasiens.update');

# Delete Akun
Route::delete('pasiens/{id_pasien}/destroy', [PasiensController::class, 'destroy'])->name('pasiens.destroy');

# Halaman data dokter
Route::get('dokters', [DoktersController::class, 'index'])->name('pasiens.doctor');

# Halaman daftar antrian
Route::get('antreans', [AntreansController::class, 'index'])->name('pasiens.antreans');

# Halaman buat janji
Route::post('/antreans', [AntreansController::class, 'store'])->name('antreans.store');
Route::get('janjis', [AntreansController::class, 'detail'])->name('pasiens.janji');


# -------------------------------------------------------------------------- Admin ---------------------------------------------------

Route::get('dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard.index');

Route::get('admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.index');
Route::post('/admin', [App\Http\Controllers\AdminController::class, 'store'])->name('admin.store');
Route::put('/admin/{id_admin}/update', [App\Http\Controllers\AdminController::class, 'update'])->name('admin.update');
Route::delete('/admin/{id_admin}', [App\Http\Controllers\AdminController::class, 'destroy'])->name('admin.destroy');

Route::get('antrean', [App\Http\Controllers\AntreanController::class, 'index'])->name('antrean.index');
Route::post('/antrean', [App\Http\Controllers\AntreanController::class, 'store'])->name('antrean.store');
Route::put('/antrean/{id_antrean}/update', [App\Http\Controllers\AntreanController::class, 'update'])->name('antrean.update');
Route::delete('/antrean/{id_antrean}', [App\Http\Controllers\AntreanController::class, 'destroy'])->name('antrean.destroy');

Route::get('pasien', [App\Http\Controllers\PasienController::class, 'index'])->name('pasien.index');
Route::post('/pasien', [App\Http\Controllers\PasienController::class, 'store'])->name('pasien.store');
Route::put('/pasien/{id_pasien}/update', [App\Http\Controllers\PasienController::class, 'update'])->name('pasien.update');
Route::delete('/pasien/{id_pasien}', [App\Http\Controllers\PasienController::class, 'destroy'])->name('pasien.destroy');
Route::get('/pasien/detail/{id_pasien}', [App\Http\Controllers\PasienController::class, 'detail'])->name('pasien.detail');

Route::get('dokter', [App\Http\Controllers\DokterController::class, 'index'])->name('dokter.index');
Route::post('/dokter', [App\Http\Controllers\DokterController::class, 'store'])->name('dokter.store');
Route::put('/dokter/{id_dokter}/update', [App\Http\Controllers\DokterController::class, 'update'])->name('dokter.update');
Route::delete('/dokter/{id_dokter}', [App\Http\Controllers\DokterController::class, 'destroy'])->name('dokter.destroy');
Route::get('/dokter/detail/{id_dokter}', [App\Http\Controllers\DokterController::class, 'detail'])->name('dokter.detail');

Route::get('poli', [App\Http\Controllers\PoliController::class, 'index'])->name('poli.index');
Route::post('/poli', [App\Http\Controllers\PoliController::class, 'store'])->name('poli.store');
Route::put('/poli/{id_poli}/update', [App\Http\Controllers\PoliController::class, 'update'])->name('poli.update');
Route::delete('/poli/{id_poli}', [App\Http\Controllers\PoliController::class, 'destroy'])->name('poli.destroy');
Route::get('/poli/detail/{id_poli}', [App\Http\Controllers\PoliController::class, 'detail'])->name('poli.detail');
