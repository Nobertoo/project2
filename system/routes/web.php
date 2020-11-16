<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;

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
    return view('home');
});


Route::get('/registrasi', function () {
    return view('registrasi');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/contack', function () {
    return view('contack');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('template', function(){
    return view('template.base');
});

Route::get('beranda', function(){
    return view('beranda');
});

Route::get('produk', function(){
    return view('produk');
});

Route::get('login', function () {
    return view('login');
});

Route::get('beranda', [HomeController::class, 'showBeranda']);
Route::get('kategori', [HomeController::class, 'showKategori']);
Route::get('login', [AuthController::class, 'showLogin']);
Route::get('produk', [ProdukController::class, 'index']);

