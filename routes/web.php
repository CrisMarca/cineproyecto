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

Route::resource('/pelicula', 'PeliculaController');

Route::resource('/cartelera', 'CarteleraController');

Route::resource('/funcion', 'FuncionController');

Route::resource('/cine', 'CineController');

Route::resource('/sala', 'SalaController');