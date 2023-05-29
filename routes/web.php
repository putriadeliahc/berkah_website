<?php

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
    return view('index');
});

Route::get('/kategori', function () {
    return view('per-kategori');
});

Route::get('/stock', function () {
    return view('stock');
});

Route::get('/tambah_barang', function () {
    return view('tambah_barang');
});

Route::get('/tranksaksi', function () {
    return view('tranksaksi');
});

Route::get('/update_barang', function () {
    return view('update_barang');
});
