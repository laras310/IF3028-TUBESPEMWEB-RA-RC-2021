<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\laporancontroller;

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
Route::get('/utama',[laporancontroller::class,'index']);

Route::get('/detail', function () {
    return view('detail');
});

Route::get('/buat', function () {
    return view('buat');
});
