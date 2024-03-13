<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('hello', function () {
    return 'ini laravel saya';
});

Route::get('/hadir/{name}/{class}', function($name, $class) {
    if (!$name || $class) "cek lagi routenya";
    return "Nama $name, Saya hadir di kelas $class";
});

Route::get('angka/{angka1}/{angka2}', function ($angka1, $angka2) {
    return 'penjumlahan : '. $angka1 + $angka2;
});

Route::get('template', function () {
    return view('template');
});




Route::resource('siswa', SiswaController::class);

Route::resource('post', PostController::class);

Route::resource('kategori', KategoriController::class);

Route::resource('produk', ProdukController::class);