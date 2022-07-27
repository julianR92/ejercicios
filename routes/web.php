<?php

use Illuminate\Support\Facades\Route;


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

Route::get('/','EjerciciosController@index')->name('ejercicios.index');
Route::get('/skandia','EjerciciosController@ejercicio1')->name('ejercicios.skandia');
Route::get('/skandia-2','EjerciciosController@ejercicio2')->name('ejercicios.skandia.2');
Route::get('/skandia-3','EjerciciosController@ejercicio3')->name('ejercicios.skandia.3');