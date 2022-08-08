<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeletePokemonController extends Controller
{
    public function eliminarPokemon(){
        return view('eliminarPokemon');
    }
}
