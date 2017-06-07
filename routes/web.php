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
    return view('welcome');
});

Route::get('test','PrakerinController@percobaan');
Route::get('test1','PrakerinController@perusahaan');
Route::get('test2','PrakerinController@barang');
Route::get('test3','PrakerinController@tempat');
Route::get('test4','PrakerinController@kendaraan');

Route::get('halaman/{id}','PrakerinController@param');
Route::get('/{a}','PrakerinController@parameter');