<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreatePokemonController extends Controller
{
    
    public function agregarPokemon(){
        return view('agregarPokemon');
    }

    public function resultadoAgregar(Request $request){
        return "Nombre: ". $request->input("nombre")."<br> Tipo 1: ". $request->input("Tipo_1").
                "<br> Tipo 2: ". $request->input("Tipo_2"). "<br> Grupo huevo 1: ". $request->input("Grupo_huevo_1").
                "<br> Grupo huevo 2: ". $request->input("Grupo_huevo_2"). "<br> Japonés: ". $request->input("Japones").
                "<br> Romanizado: ". $request->input("Romanizado");
    }
}
