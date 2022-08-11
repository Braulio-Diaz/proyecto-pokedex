<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pokemong1;
use Illuminate\Support\Facades\DB;

class PokedexController extends Controller
{
    public function inicio (){
        return view('inicio');
    }

    public function pokemons (){
        return view('pokemons');
    }

    public function index(Request $request){

        $pokemonabuscar = $request->pokemonabuscar;

        //CON ESTO ME TRAE LA DATA DE LA BASE DE DATOS Y LA MUESTRA EN EL INDEX
        $pokemonsg1 = Pokemong1::where('name','LIKE','%'.$pokemonabuscar.'%')
        ->orWhere('type1','LIKE','%'.$pokemonabuscar.'%')
        ->orWhere('type2','LIKE','%'.$pokemonabuscar.'%')
        ->orWhere('eggGroup1','LIKE','%'.$pokemonabuscar.'%')
        ->orWhere('eggGroup2','LIKE','%'.$pokemonabuscar.'%')
        ->orderBy('id', 'ASC')
        ->get();

        return view('pokemon.primeraGeneración', [
            'pokemonsg1'=>$pokemonsg1
        ]);
    }

    public function create(){

        return view('pokemon.agregar');
    }

    public function store(Request $request){
        
        $this->validate($request, [
            'image'=>'required',
            'name'=>'required',
            'type1'=>'required',
            'type2'=>'required',
            'eggGroup1'=>'required',
            'eggGroup2'=>'required',
            'japanese'=>'required',
            'romanized'=>'required'
        ]);

        //GUARDAMOS LOS DATOS EN LA BASE DE DATOS
        $pokemong1 = new Pokemong1();
        $pokemong1->image = $request->image;
        $pokemong1->name = $request->name;
        $pokemong1->type1 = $request->type1;
        $pokemong1->type2 = $request->type2;
        $pokemong1->eggGroup1 = $request->eggGroup1;
        $pokemong1->eggGroup2 = $request->eggGroup2;
        $pokemong1->japanese = $request->japanese;
        $pokemong1->romanized = $request->romanized; 
        $pokemong1->save();

        //OBTIENE LOS DATOS Y RETORNA A LA VISTA DE POKEMONS G1
        $pokemonsg1 = Pokemong1::get();
        
        return view('pokemon.primeraGeneración', [
            'pokemonsg1'=> $pokemonsg1
        ]);
    }
}
