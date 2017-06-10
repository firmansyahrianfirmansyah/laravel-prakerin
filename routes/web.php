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

// Route::get('test','PrakerinController@percobaan');
// Route::get('test1','PrakerinController@perusahaan');
// Route::get('test2','PrakerinController@barang');
// Route::get('test3','PrakerinController@tempat');
// Route::get('test4','PrakerinController@kendaraan');

// Route::get('halaman/{id}','PrakerinController@param');
// Route::get('/{a}','PrakerinController@parameter');

// Route::get('test1','CobaController@test');
// Route::get('coba/{id}','CobaController@test2');
// Route::get('test7}','CobaController@rian');
// Route::get('test0','CobaController@percobian');

// Route::get('{data}','CobaController@dunia');
// Route::get('test3/{nama}{jurusan}','CobaController@test3');

Route::resource('post','PostController');