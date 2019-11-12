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
	

	//dd($partido);
	//echo $arbitro;
	//echo $partido;

	//$partido->arbitros()->attach($arbitro);
	//$arbitro->partidos()->attach($partido);

    return view('Inicio_temporal');
})->name('Inicio');

Route::get('/Hoteles/Agregar', 'HotelController@create')->name('HotelCreate');
Route::get('/Equipo/Agregar', 'EquipoController@create')->name('EquipoCreate');
Route::get('/Partido/Agregar', 'PartidoController@create')->name('PartidoCreate');
Route::get('/Arbitro/Agregar', 'ArbitroController@create')->name('ArbitroCreate');
Route::get('/Cancha/Agregar', 'CanchaController@create')->name('CanchaCreate');

Route::post('/Hoteles/Agregar', 'HotelController@store')->name('HotelStore');
Route::post('/Equipo/Agregar', 'EquipoController@store')->name('EquipoStore');
Route::post('/Partido/Agregar', 'PartidoController@store')->name('PartidoStore');
Route::post('/Arbitro/Agregar', 'ArbitroController@store')->name('ArbitroStore');
Route::post('/Cancha/Agregar', 'CanchaController@store')->name('CanchaStore');