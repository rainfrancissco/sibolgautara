<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::group(['middlewareGroups'=>['web']], function(){

	Route::get('/', 'KepalaKeluargaController@index');

	//Route::get('dashboard', 'HomeController@dashboard');
	Route::get('dashboard', 'DashboardController@index');
	
	$this->get('login', 'Auth\AuthController@showLoginForm');
	$this->post('login', 'Auth\AuthController@login');
	$this->get('logout', 'Auth\AuthController@logout');
	
	Route::get('kelurahan', 'KelurahanController@index');
// Kelurahan

	Route::post('kelurahan', 'KelurahanController@simpan');
	Route::patch('kelurahan/{kelurahan}', 'KelurahanController@update');
	Route::get('kelurahan/{kelurahan}/edit', 'KelurahanController@edit');

	// User
	Route::resource('user', 'UserController');

	// Warga
	// Route::resource('warga', 'WargaController');
	Route::get('warga', 'KepalaKeluargaController@index');
	Route::post('warga', 'KepalaKeluargaController@store');
	Route::get('warga/createkk', 'KepalaKeluargaController@createkk');
	Route::get('warga/{warga}/editkk', 'KepalaKeluargaController@editkk');
	Route::patch('warga/{warga}', 'KepalaKeluargaController@updatekk');

	Route::get('warga/{warga}/anggotakeluarga', 'WargaController@index');
	Route::get('warga/{warga}/createwarga', 'WargaController@createwarga');
	Route::get('warga/{warga}/editwarga', 'WargaController@editwarga');
	Route::patch('warga/{warga}', 'WargaController@updatewarga');
	Route::post('simpanwarga', 'WargaController@store');
	Route::delete('warga/{warga}/anggotakeluarga', 'WargaController@deletewarga');
	
	// Belum di fungsikan
	// Route::post('warga', 'WargaController@store');
	// Route::get('warga', 'WargaController@index');
	// Route::get('warga/createkk', 'WargaController@createkk');


	//Route::resource('pengaturan', 'PengaturanController');
	
	// Route::get('dashboard', function(){
	// 	return view('dashboard/index');
	// });

});