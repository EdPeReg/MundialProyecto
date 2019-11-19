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

//Ruta pagina principal
Route::get('/', function () {return view('Inicio_temporal');})->name('Inicio');

//Rutas de Indices
Route::get('/Antidoping', 'AntidopingController@index')->name('AntidopingIndex');
Route::get('/Reservacion', 'ReservacionController@index')->name('ReservacionIndex');
Route::get('/Hotel', 'HotelController@index')->name('HotelIndex');
Route::get('/Equipo', 'EquipoController@index')->name('EquipoIndex');
Route::get('/Cancha', 'CanchaController@index')->name('CanchaIndex');
Route::get('/Partido', 'PartidoController@index')->name('PartidoIndex');
Route::get('/Jugador', 'JugadorController@index')->name('JugadorIndex');
Route::get('/Club', 'ClubController@index')->name('ClubIndex');
Route::get('/Arbitro', 'ArbitroController@index')->name('ArbitroIndex');

//Rutas de Creacion
Route::get('/Hoteles/Agregar', 'HotelController@create')->name('HotelCreate');
Route::get('/Equipo/Agregar', 'EquipoController@create')->name('EquipoCreate');
Route::get('/Partido/Agregar', 'PartidoController@create')->name('PartidoCreate');
Route::get('/Arbitro/Agregar', 'ArbitroController@create')->name('ArbitroCreate');
Route::get('/Cancha/Agregar', 'CanchaController@create')->name('CanchaCreate');
Route::get('/Jugador/Agregar', 'JugadorController@create')->name('JugadorCreate');
Route::get('/Antidoping/Agregar', 'AntidopingController@create')->name('AntidopingCreate');
Route::get('/Club/Agregar', 'ClubController@create')->name('ClubCreate');
Route::get('/Reservacion/Agregar', 'ReservacionController@create')->name('ReservacionCreate');

//Rutas de Guardar en BD
Route::post('/Hoteles/Agregar', 'HotelController@store')->name('HotelStore');
Route::post('/Equipo/Agregar', 'EquipoController@store')->name('EquipoStore');
Route::post('/Partido/Agregar', 'PartidoController@store')->name('PartidoStore');
Route::post('/Arbitro/Agregar', 'ArbitroController@store')->name('ArbitroStore');
Route::post('/Cancha/Agregar', 'CanchaController@store')->name('CanchaStore');
Route::post('/Jugador/Agregar', 'JugadorController@store')->name('JugadorStore');
Route::post('/Antidoping/Agregar', 'AntidopingController@store')->name('AntidopingStore');
Route::post('/Club/Agregar', 'ClubController@store')->name('ClubStore');
Route::post('/Reservacion/Agregar', 'ReservacionController@store')->name('ReservacionStore');

//Rutas de Mostrar
Route::get('/Hotel/{hotel}', 'HotelController@show')->name('HotelShow');
Route::get('/Antidoping/{antidoping}', 'AntidopingController@show')->name('AntidopingShow');
Route::get('/Equipo/{equipo}', 'EquipoController@show')->name('EquipoShow');
Route::get('/Partido/{partido}', 'PartidoController@show')->name('PartidoShow');
Route::get('/Reservacion/{reservacion}', 'ReservacionController@show')->name('ReservacionShow');
Route::get('/Cancha/{cancha}', 'CanchaController@show')->name('CanchaShow');
Route::get('/Jugador/{jugador}', 'JugadorController@show')->name('JugadorShow');
Route::get('/Club/{club}', 'ClubController@show')->name('ClubShow');
Route::get('/Arbitro/{arbitro}', 'ArbitroController@show')->name('ArbitroShow');

//Rutas de Editar
Route::get('Hotel/{hotel}/Editar', 'HotelController@edit')->name('HotelEdit');
Route::get('/Antidoping/{antidoping}/Editar', 'AntidopingController@edit')->name('AntidopingEdit');
Route::get('/Equipo/{equipo}/Editar', 'EquipoController@edit')->name('EquipoEdit');
Route::get('/Reservacion/{reservacion}/Editar', 'ReservacionController@edit')->name('ReservacionEdit');
Route::get('/Jugador/{jugador}/Editar', 'JugadorController@edit')->name('JugadorEdit');
Route::get('/Club/{club}/Editar', 'ClubController@edit')->name('ClubEdit');
Route::get('/Partido/{partido}/Editar', 'PartidoController@edit')->name('PartidoEdit');
Route::get('/Arbitro/{arbitro}/Editar', 'ArbitroController@edit')->name('ArbitroEdit');
Route::get('/Cancha/{cancha}/Editar', 'CanchaController@edit')->name('CanchaEdit');

//Rutas de Actualizar en BD
Route::patch('/Hotel/{hotel}', 'HotelController@update')->name('HotelUpdate');
Route::patch('/Antidoping/{antidoping}', 'AntidopingController@update')->name('AntidopingUpdate');
Route::patch('/Equipo/{equipo}', 'EquipoController@update')->name('EquipoUpdate');
Route::patch('/Reservacion/{reservacion}', 'ReservacionController@update')->name('ReservacionUpdate');
Route::patch('/Jugador/{jugador}', 'JugadorController@update')->name('JugadorUpdate');
Route::patch('/Club/{club}', 'ClubController@update')->name('ClubUpdate');
Route::patch('/Partido/{partido}', 'PartidoController@update')->name('PartidoUpdate');
Route::patch('/Arbitro/{arbitro}', 'ArbitroController@update')->name('ArbitroUpdate');
Route::patch('/Cancha/{cancha}', 'CanchaController@update')->name('CanchaUpdate');

//Rutas de Borrar de BD
Route::delete('/Hotel/{hotel}', 'HotelController@destroy')->name('HotelDestroy');
Route::delete('/Antidoping/{antidoping}', 'AntidopingController@destroy')->name('AntidopingDestroy');
Route::delete('/Equipo/{equipo}', 'EquipoController@destroy')->name('EquipoDestroy');
Route::delete('/Reservacion/{reservacion}', 'ReservacionController@destroy')->name('ReservacionDestroy');
Route::delete('/Jugador/{jugador}', 'JugadorController@destroy')->name('JugadorDestroy');
Route::delete('/Club/{club}', 'ClubController@destroy')->name('ClubDestroy');
Route::delete('/Partido/{partido}', 'PartidoController@destroy')->name('PartidoDestroy');
Route::delete('/Arbitro/{arbitro}', 'ArbitroController@destroy')->name('ArbitroDestroy');
Route::delete('/Cancha/{cancha}', 'CanchaController@destroy')->name('CanchaDestroy');
