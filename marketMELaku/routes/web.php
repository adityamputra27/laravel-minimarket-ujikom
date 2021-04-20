<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PemasokController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PembelianController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\LaporanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// }); 
Route::middleware(['auth'])->group(function () {
    Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::resource('barangs', BarangController::class);
    Route::resource('produks', ProdukController::class);
    Route::resource('pemasoks', PemasokController::class);
    Route::resource('pelanggans', PelangganController::class);
    Route::resource('pembelians', PembelianController::class);
    Route::resource('penjualans', PenjualanController::class);
    Route::get('/report/pembelians/', [LaporanController::class, 'pembelianHome'])->name('reportPembelian.index');
    Route::get('/report/penjualans/', [LaporanController::class, 'penjualanHome'])->name('reportPenjualan.index');
    Route::get('/report/pembelians/filter', [LaporanController::class, 'filterLaporanPembelian'])->name('filter.laporan.pembelian');
    Route::get('/get-laporan-pembelian/{tanggal_mulai}/{tanggal_sampai}', [LaporanController::class, 'getLaporanPembelian']);
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});
Route::get('/login', [AuthController::class, 'loginForm'])->name('login');
Route::post('/post-login', [AuthController::class, 'postLogin']);
