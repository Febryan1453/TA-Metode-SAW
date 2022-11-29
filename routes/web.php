<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/nilai', [App\Http\Controllers\HomeController::class, 'nilaiMahasiswa'])->name('nilai.mhs');
Route::get('/input-peminatan', [App\Http\Controllers\HomeController::class, 'inputPeminatan'])->name('input.minat');
Route::post('/input-peminatan/simpan-data', [App\Http\Controllers\HomeController::class, 'simpanPeminatan'])->name('simpan.minat');
Route::get('/data-peminatan', [App\Http\Controllers\HomeController::class, 'dataPeminatanMahasiswa'])->name('data.minat');
