<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\admin\PelangganController;
use App\Http\Controllers\admin\PemesananController;
use App\Http\Controllers\admin\ProdukController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\User\PemesananController as UserPemesananController;
use App\Http\Controllers\User\ProfileController as UserProfileController;
use App\Models\PemesananModel;
use App\Models\ProdukModel;
use Illuminate\Support\Facades\DB;

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

// Route::get('/', function () {
//     return view('welcome');
   
Route::get('/', [BerandaController::class, 'index']);
Route::get('/tentang', [TentangController::class, 'index']);
Route::get('/kontak', [KontakController::class, 'index']);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::resource('/admin/profile', ProfileController::class)->middleware('auth');
Route::resource('/admin/pelanggan', PelangganController::class)->middleware('auth');
Route::get('/admin/pelanggan', [PelangganController::class, 'index'])->name('admin.pelanggan')->middleware('auth');
Route::resource('/admin/pemesanan', PemesananController::class)->middleware('auth');
Route::get('/admin/pemesanan', [PemesananController::class, 'index'])->name('admin.pemesanan')->middleware('auth');
Route::resource('/admin/produk', ProdukController::class)->middleware('auth');
Route::get('/admin/produk', [ProdukController::class, 'index'])->name('admin.produk')->middleware('auth');
Route::get('/user/dashboard', [UserProfileController::class, 'index'])->name('user.dashboard')->middleware('auth');
Route::get('/detail', [DetailController::class, 'index'])->name('detail')->middleware('auth');
Route::post('/tambah-produk', [BerandaController::class, 'tambahProduk'])->name('tambah-produk')->middleware('auth');
Route::resource('/user/pemesanan', UserPemesananController::class)->middleware('auth');
Route::get('/user/pemesanan', [UserPemesananController::class, 'index'])->name('user.pemesanan')->middleware('auth');
Route::get('/registrasi', [RegistrasiController::class, 'index'])->name('registrasi');
Route::post('/registrasi', [RegistrasiController::class, 'registrasi'])->name('registrasi.submit');




Route::get('/tes', function () {
    try {
        DB::connection()->getPdo();
        echo "Koneksi database berhasil.";
    } catch (\Exception $e) {
        die("Koneksi database gagal: " . $e->getMessage());
    }
});

// });
