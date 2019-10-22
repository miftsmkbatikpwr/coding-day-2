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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'BarangController@index');
Route::get('/tambah', 'BarangController@create');
Route::post('/simpan', 'BarangController@store');
Route::get('/{id}/ubah', 'BarangController@edit');
Route::post('/perbarui', 'BarangController@update');
Route::get('/hapus/{id}', 'BarangController@destroy');
