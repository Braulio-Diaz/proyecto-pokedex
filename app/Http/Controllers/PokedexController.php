<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PokedexController extends Controller
{
    public function index (){
        return view('index');
    }

    public function pokemons (){
        return view('pokemons');
    }

    public function primeraGeneracion (){
        return view('primeraGeneración');
    }
}
