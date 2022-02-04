<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mahasiswa', [\App\Http\Controllers\MahasiswaController::class, 'index'])->name('mahasiswa.index');
Route::get('/mahasiswa/create', [\App\Http\Controllers\MahasiswaController::class, 'create'])->name('mahasiswa.create');
Route::get('/mahasiswa/{id}/show', [\App\Http\Controllers\MahasiswaController::class, 'show'])->name('mahasiswa.show');
Route::get('/mahasiswa/{id}/edit', [\App\Http\Controllers\MahasiswaController::class, 'edit'])->name('mahasiswa.edit');
Route::post('/mahasiswa/store', [\App\Http\Controllers\MahasiswaController::class, 'store'])->name('mahasiswa.store');
Route::post('/mahasiswa/{id}/update', [\App\Http\Controllers\MahasiswaController::class, 'update'])->name('mahasiswa.update');
Route::get('/mahasiswa/{id}/delete', [\App\Http\Controllers\MahasiswaController::class, 'destroy'])->name('mahasiswa.destroy');

Route::get('/pembayaran', [\App\Http\Controllers\PembayaranController::class, 'index'])->name('pembayaran.index');
Route::post('/pembayaran/pay', [\App\Http\Controllers\PembayaranController::class, 'pay'])->name('pembayaran.pay');

Route::get('/pembayaran_item', [\App\Http\Controllers\PembayaranItemController::class, 'index'])->name('pembayaran_item.index');
Route::get('/pembayaran_item/create', [\App\Http\Controllers\PembayaranItemController::class, 'create'])->name('pembayaran_item.create');
Route::post('/pembayaran_item/store', [\App\Http\Controllers\PembayaranItemController::class, 'store'])->name('pembayaran_item.store');
Route::get('/pembayaran_item/{id}/edit', [\App\Http\Controllers\PembayaranItemController::class, 'edit'])->name('pembayaran_item.edit');
Route::post('/pembayaran_item/{id}/update', [\App\Http\Controllers\PembayaranItemController::class, 'update'])->name('pembayaran_item.update');

Route::get('/laporan', [\App\Http\Controllers\LaporanController::class, 'index'])->name('laporan.index');
Route::post('/laporan/result', [\App\Http\Controllers\LaporanController::class, 'result'])->name('laporan.result');
