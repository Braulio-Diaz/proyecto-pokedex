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

Route::get('/pokemon', 'App\Http\Controllers\PokedexController@index');
Route::get('/pokemon/create', 'App\Http\Controllers\PokedexController@create');
Route::post('/pokemon', 'App\Http\Controllers\PokedexController@store');
Route::delete('/pokemon/{id}', 'App\Http\Controllers\PokedexController@destroy');
Route::get('/pokemon-edit/{id}', 'App\Http\Controllers\PokedexController@update');
Route::post('/pokemon', 'App\Http\Controllers\PokedexController@updateSave');

Route::get('/miniatura/{filename}', 'App\Http\Controllers\PokedexController@getImagen');
//--------------//
