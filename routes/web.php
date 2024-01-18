<?php

use App\Http\Controllers\ItemController;
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
Route::get('/latihan', function () {
    return view('latihan');
});
Route::get('/app', function () {
    return view('layout.app');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/item', [ItemController::class,'index']);//halaman barang

Route::get('/item/create',[ItemController::class,'create']);//tambah barang
Route::post('/item/store',[ItemController::class,'store']);//simpan barang yang ditambah

Route::get('/item/{item}/edit', [ItemController::class,'edit']);//mengambil data barang
Route::put('/item/{item}',[ItemController::class,'update']);//menyimpan data barang

Route::delete('/item/{item}', [ItemController::class,'destroy']);