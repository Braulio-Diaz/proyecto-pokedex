<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Pokemong1;
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
        ->orWhere('number','LIKE','%'.$pokemonabuscar.'%')
        ->orderBy('number', 'ASC')
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
            'number'=>'required',
            'image'=>'required',
            'name'=>'required',
            'type1'=>'required',
            'type2'=>'required',
            'eggGroup1'=>'required',
            'eggGroup2'=>'required',
            'japanese'=>'required',
            'romanized'=>'required'
        ]);

        $image = $request->file('image');
        
        if($image){
            $imagen_path = time()."-".$image->getClientOriginalName();
            \Storage::disk('images')->put($imagen_path, \File::get($image));
        }

        //GUARDAMOS LOS DATOS EN LA BASE DE DATOS
        $pokemong1 = new Pokemong1();
        $pokemong1->number = $request->number;
        $pokemong1->image = $imagen_path;
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

    public function destroy($id){

        $pokemong1 = Pokemong1::find($id);
        $pokemong1->delete();

        $pokemonsg1 = Pokemong1::get();

        return view('pokemons', [
            'pokemonsg1'=> $pokemonsg1
        ]);
    }

    public function getImagen($filename){
        
        $file = \Storage::disk('images')->get($filename);
        
        return new Response($file, 200);
    }

    public function update($id){

        $pokemonsg1 = Pokemong1::where('id', $id)->get();

        return view('pokemon.editar', [

            'pokemonsg1' => $pokemonsg1
        ]);
    }

    public function updateSave(Request $request){

        $this->validate($request, [
            'number'=>'required',
            'name'=>'required',
            'type1'=>'required',
            'type2'=>'required',
            'eggGroup1'=>'required',
            'eggGroup2'=>'required',
            'japanese'=>'required',
            'romanized'=>'required'
        ]);

        $imagen = $request->file('image');

        if ($imagen) {
            
            $imagen_path = time()."-".$imagen->getClientOriginalName();
            \Storage::disk('images')->put($imagen_path, \File::get($imagen));

            Pokemong1::where('id', $request->id)->update([

            'number'=> $request->number,
            'image'=> $imagen_path,
            'name'=> $request->name,
            'type1'=> $request->type1,
            'type2'=> $request->type2,
            'eggGroup1'=> $request->eggGroup1,
            'eggGroup2'=> $request->eggGroup2,
            'japanese'=> $request->japanese,
            'romanized'=> $request->romanized
            ]);

        } else {

            Pokemong1::where('id', $request->id)->update([

                'number'=> $request->number,
                'name'=> $request->name,
                'type1'=> $request->type1,
                'type2'=> $request->type2,
                'eggGroup1'=> $request->eggGroup1,
                'eggGroup2'=> $request->eggGroup2,
                'japanese'=> $request->japanese,
                'romanized'=> $request->romanized
            ]);
        }

        $pokemonsg1 = Pokemong1::get();

        return view ('pokemons', [

            'pokemonsg1' => $pokemonsg1
        ]);
    }
}
