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
    return view('Inicio_temporal');
})->name('Inicio');

Route::get('/Hoteles/Agregar', 'HotelController@create')->name('HotelCreate');

Route::post('/Hoteles/Agregar', 'HotelController@store')->name('HotelStore');