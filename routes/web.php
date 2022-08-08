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

Route::get('/inicio', 'App\Http\Controllers\PokedexController@index');
Route::get('/inicio/pokemons', 'App\Http\Controllers\PokedexController@pokemons')->name('verPokemons');
Route::get('/inicio/pokemons/primerageneracion', 'App\Http\Controllers\PokedexController@primeraGeneracion')->name('generacionUno');

Route::get('/inicio/pokemons/primerageneracion/agregarpokemon', 'App\Http\Controllers\CreatePokemonController@agregarPokemon')->name('agregarPokemon');
Route::post('/inicio/pokemons/primerageneracion/agregarpokemon/resultado', 'App\Http\Controllers\CreatePokemonController@resultadoAgregar')->name('resultadoAgregar');

