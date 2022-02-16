<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ApotekerController;
use App\Http\Controllers\ObatdatangController;
use App\Http\Controllers\ObatkeluarController;
use App\Http\Controllers\ReportController;

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


Route::get('/home', [HomeController::class, 'index'])->name('home');

//Apoteker
Route::get('/apoteker', [ApotekerController::class, 'index'])->name('apoteker');
Route::post('/apoteker/input', [ApotekerController::class, 'store'])->name('input.apoteker');
Route::get('/apoteker/edit/{id}', [ApotekerController::class, 'edit']);
Route::post('/apoteker/update', [ApotekerController::class, 'update'])->name('update.apoteker');
Route::get('/apoteker/delete/{id}', [ApotekerController::class, 'delete']);

//Obat datang
Route::get('/obat-datang', [ObatdatangController::class, 'index'])->name('datang');
Route::post('/obat-datang/input', [ObatdatangController::class, 'store'])->name('input.obat');
Route::get('/obat-datang/edit/{id}', [ObatdatangController::class, 'edit']);
Route::post('/obat-datang/update', [ObatdatangController::class, 'update'])->name('update.obat');
Route::get('/obat-datang/delete/{id}', [ObatdatangController::class, 'delete']);

//Obat keluar
Route::get('/obat-keluar', [ObatkeluarController::class, 'index'])->name('keluar');
Route::post('/obat-keluar/input', [ObatkeluarController::class, 'store'])->name('store.obatkeluar');
Route::get('/obat-keluar/edit/{id}', [ObatkeluarController::class, 'edit']);
Route::post('/obat-keluar/update', [ObatkeluarController::class, 'update'])->name('update.obatkeluar');
Route::get('/obat-keluar/delete/{id}', [ObatkeluarController::class, 'delete']);


Route::get('/report', [ReportController::class, 'index'])->name('report');



