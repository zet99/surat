<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('daftar', function(){
	return view('daftar');
});
Route::post('daftar', 'DaftarController@daftar');

Route::post('getpegawai', 'DaftarController@getsimpeg');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
