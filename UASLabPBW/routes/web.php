<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
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

Route::get('/tampildata', [BarangController::class, 'readdata']);
Route::get('/tambahdata', [BarangController::class, 'input']);
Route::post('/barang/store', [BarangController::class, 'store']);

Route::get('/barang/edit/{id}', [BarangController::class, 'edit']);
Route::post('/barang/update', [BarangController::class, 'update']);
Route::get('/barang/hapus/{id}', [BarangController::class,'hapus']);