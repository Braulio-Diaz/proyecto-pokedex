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

Route::get('/', 'App\Http\Controllers\LoginController@login');
Route::get('/registrarse', 'App\Http\Controllers\LoginController@registrarse');
Route::get('/usuariocreado', 'App\Http\Controllers\LoginController@usuarioCreado');
Route::get('/recuperarcontraseña', 'App\Http\Controllers\LoginController@recuperarContraseña');
route::get('/contraseñarecuperada', 'App\Http\Controllers\LoginController@contraseñaRecuperada');

Route::get('/inicio', 'App\Http\Controllers\PokedexController@inicio');
Route::get('/pokemongeneraciones', 'App\Http\Controllers\PokedexController@pokemons')->name('pokemongeneraciones');

//---------------//
Route::resource('pokemon', 'App\Http\Controllers\PokedexController');

route::get('/pokemon', 'App\Http\Controllers\PokedexController@index');
route::post('/pokemon', 'App\Http\Controllers\PokedexController@store');
//--------------//
