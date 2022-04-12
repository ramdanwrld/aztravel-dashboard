<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\paketWisataController;

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

Route::get('/login', function () {
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/tambahPaketWisata', function () {
    return view('tambahPaketWisata');
});

Auth::routes();
#Route::get('/paketWisata', function () {
    #return view('paketWisata');
#});
Route::get('/paketwisata', [paketWisataController::class, 'index']);
Route::post('/paketwisata/store', [paketWisataController::class, 'store']);
Route::post('/tambahPaketWisata/store', [paketWisataController::class, 'store']);
#Route::post('/paketwisata/store','App\Http\Controllers\paketWisataController@store');
Route::post('/paketwisata/update', [paketWisataController::class, 'update']);
Route::get('/paketwisata/edit/{id_paket_wisata}',[paketWisataController::class, 'edit']);
Route::get('/paketwisata/hapus/{id_paket_wisata}', [paketWisataController::class, 'hapus']);
#Route::get('/paketwisata/hapus/{id_paket_wisata}','paketWisataController@hapus');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


