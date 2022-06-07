<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\TransaksiController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/',[HomeController::class,'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/kontak', [HomeController::class, 'kontak']);
Route::get('/kategori', [HomeController::class, 'kategori']);
// Route::get('/kategori/{slug}', 'HomepageController@produkperkategori');
// Route::get('/produk', 'HomepageController@produk');
// Route::get('/produk/{slug}', 'HomepageController@produkdetail');

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', [DashboardController::class, 'index']);
    Route::resource('kategori', KategoriController::class);
    Route::resource('produk', ProdukController::class);
    Route::resource('customer', CustomerController::class);
    Route::resource('transaksi', TransaksiController::class);
});


