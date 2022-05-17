<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
Use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\KonsumenController;
use App\Http\Controllers\JenisPaketController;
use App\Http\Controllers\IdentitasController;
use App\Http\Controllers\TipeBayarController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\CetakController;

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

Route::group(['middleware'=> ['guest']], function(){
    Route::get('/', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'login'])->name('authLogin');
});

Route::group(['middleware'=> ['auth']], function(){
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('karyawan', KaryawanController::class)->middleware(['ceklevel:Admin']);
    Route::resource('konsumen', KonsumenController::class);
    Route::resource('refpaket', JenisPaketController::class);
    Route::resource('refjenis', TipeBayarController::class);
    Route::resource('refstatus', StatusController::class);
    Route::resource('transaksi', TransaksiController::class);
    Route::resource('entryidentitas', IdentitasController::class);
    Route::get('getkonsumen/{konsumen:id}', [DataController::class, 'konsumen']);
    Route::get('getpaket/{jenispaket:no_paket}', [DataController::class, 'paket']);
    Route::get('laporan-transaksi', [CetakController::class, 'laporantransaksi']);
    Route::get('laporan-keuangan', [CetakController::class, 'laporankeuangan']);
    Route::post('cetaktransaksi', [CetakController::class, 'Transaksi'])->name('cetaktransaksi');
});