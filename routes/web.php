<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\admin\PelangganController;
use App\Http\Controllers\admin\PemesananController;
use App\Http\Controllers\admin\ProdukController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\LoginController;
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
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
// Route::get('/admin/profile', [ProfileController::class, 'index']);
Route::resource('/admin/profile', ProfileController::class);
Route::resource('/admin/pelanggan', PelangganController::class);
Route::get('/admin/pelanggan', [PelangganController::class, 'index'])->name('admin.pelanggan');
Route::resource('/admin/pemesanan', PemesananController::class);
Route::get('/admin/pemesanan', [PemesananController::class, 'index'])->name('admin.pemesanan');
Route::resource('/admin/produk', ProdukController::class);
Route::get('/admin/produk', [ProdukController::class, 'index'])->name('admin.produk');
// Route::get('/admin/pelanggan', [PelangganController::class, 'index']);
// Route::get('/admin/pemesanan', [PemesananController::class, 'index']);
// Route::get('/admin/produk', [ProdukController::class, 'index']);
Route::get('/tes', function () {
    try {
        DB::connection()->getPdo();
        echo "Koneksi database berhasil.";
    } catch (\Exception $e) {
        die("Koneksi database gagal: " . $e->getMessage());
    }
});

// });
