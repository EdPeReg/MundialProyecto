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



Route::get('/', function () {return view('Inicio_temporal');})->name('Inicio');

Route::get('/Antidoping', 'AntidopingController@index')->name('AntidopingIndex');
Route::get('/Reservacion', 'ReservacionController@index')->name('ReservacionIndex');
Route::get('/Hotel', 'HotelController@index')->name('HotelIndex');
Route::get('/Equipo', 'EquipoController@index')->name('EquipoIndex');
Route::get('/Cancha', 'CanchaController@index')->name('CanchaIndex');
Route::get('/Partido', 'PartidoController@index')->name('PartidoIndex');
Route::get('/Jugador', 'JugadorController@index')->name('JugadorIndex');
Route::get('/Club', 'ClubController@index')->name('ClubIndex');
Route::get('/Arbitro', 'ArbitroController@index')->name('ArbitroIndex');

Route::get('/Hoteles/Agregar', 'HotelController@create')->name('HotelCreate');
Route::get('/Equipo/Agregar', 'EquipoController@create')->name('EquipoCreate');
Route::get('/Partido/Agregar', 'PartidoController@create')->name('PartidoCreate');
Route::get('/Arbitro/Agregar', 'ArbitroController@create')->name('ArbitroCreate');
Route::get('/Cancha/Agregar', 'CanchaController@create')->name('CanchaCreate');
Route::get('/Jugador/Agregar', 'JugadorController@create')->name('JugadorCreate');
Route::get('/Antidoping/Agregar', 'AntidopingController@create')->name('AntidopingCreate');
Route::get('/Club/Agregar', 'ClubController@create')->name('ClubCreate');
Route::get('/Reservacion/Agregar', 'ReservacionController@create')->name('ReservacionCreate');

Route::post('/Hoteles/Agregar', 'HotelController@store')->name('HotelStore');
Route::post('/Equipo/Agregar', 'EquipoController@store')->name('EquipoStore');
Route::post('/Partido/Agregar', 'PartidoController@store')->name('PartidoStore');
Route::post('/Arbitro/Agregar', 'ArbitroController@store')->name('ArbitroStore');
Route::post('/Cancha/Agregar', 'CanchaController@store')->name('CanchaStore');
Route::post('/Jugador/Agregar', 'JugadorController@store')->name('JugadorStore');
Route::post('/Antidoping/Agregar', 'AntidopingController@store')->name('AntidopingStore');
Route::post('/Club/Agregar', 'ClubController@store')->name('ClubStore');
Route::post('/Reservacion/Agregar', 'ReservacionController@store')->name('ReservacionStore');