<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KlienController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\ProdukController;
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

Route::get('login', [AuthController::class, 'login']);
Route::post('login', [AuthController::class, 'LoginProses']);
Route::get('logout', [AuthController::class, 'logout']);
Route::get('landing', [HomeController::class, 'showLanding']);

Route::prefix('admin')->group(function(){

    Route::get('beranda', [HomeController::class, 'index']);

    Route::get('AboutUs', [AboutController::class, 'index']);
    Route::get('EditAboutUs/{id}', [AboutController::class, 'EditAboutUs']);
    Route::get('ShowAboutUs/{id}', [AboutController::class, 'ShowAboutUs']);
    Route::post('StoreAboutUs', [AboutController::class, 'StoreAboutUs']);
    Route::put('UpdateAboutUs/{id}', [AboutController::class, 'UpdateAboutUs']);

    Route::get('produk', [ProdukController::class, 'index']);
    Route::get('editproduk/{id}', [ProdukController::class, 'editproduk']);
    Route::get('showproduk/{id}', [ProdukController::class, 'showproduk']);
    Route::post('storeproduk', [ProdukController::class, 'storeproduk']);
    Route::put('updateproduk/{id}', [ProdukController::class, 'updateproduk']);
    
    Route::get('galeri', [GaleriController::class, 'index']);
    Route::get('editgaleri/{id}', [GaleriController::class, 'editgaleri']);
    Route::get('showgaleri/{id}', [GaleriController::class, 'showgaleri']);
    Route::post('storegaleri', [GaleriController::class, 'storegaleri']);
    Route::put('updategaleri/{id}', [GaleriController::class, 'updategaleri']);

    Route::get('klien', [KlienController::class, 'index']);
    Route::get('editklien/{id}', [KlienController::class, 'editklien']);
    Route::get('showklien/{id}', [KlienController::class, 'showklien']);
    Route::post('storeklien', [KlienController::class, 'storeklien']);
    Route::put('updateklien/{id}', [KlienController::class, 'updateklien']);

    Route::get('kontak', [KontakController::class, 'index']);
    Route::get('editkontak/{id}', [KontakController::class, 'editkontak']);
    Route::get('showkontak/{id}', [KontakController::class, 'showkontak']);
    Route::post('storekontak', [KontakController::class, 'storekontak']);
    Route::put('updatekontak/{id}', [KontakController::class, 'updatekontak']);

    
    Route::get('admin', [AdminController::class, 'index']);
    Route::post('storeadmin', [AdminController::class, 'storeadmin']);




});
