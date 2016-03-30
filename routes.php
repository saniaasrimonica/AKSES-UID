<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('provinsi', 'ProvinsiController@index'); // route untuk menampilkan data provinsi
Route::get('provinsi/create', 'ProvinsiController@create'); // route untuk menampilkan form input provinsi
Route::post('provinsi/store', 'ProvinsiController@store'); // action untuk memproses data dari form provinsi
Route::get('provinsi/edit/{id}', 'ProvinsiController@edit'); // route untuk menampilkan form edit provinsi
Route::get('provinsi/destroy/{id}', 'ProvinsiController@destroy'); // action untuk menghapus data provinsi
Route::post('provinsi/update/{id}', 'ProvinsiController@update'); // action untuk mengubah data provinsi
