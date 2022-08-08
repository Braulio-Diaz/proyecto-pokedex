@extends('layouts.master')

@section('header')

<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <b><a class="navbar-brand" href="">ポケットモンスター</a></b>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="/inicio"><i class='bx bxs-home-smile bx-sm'></i></a>
        <b><a class="nav-link" href="{{ route('verPokemons') }}">Ver pokémon</a></b>
      </div>
    </div>
    <div>
      <b><a class="nav-link" href="/">Cerrar sesión</a></b>
    </div>
  </div>
</nav>

@stop

@section('content')

<br>
<a href='{{ route('agregarPokemon') }}'>
    <button type="button" class="btn btn-primary" class="btn btn-outline-dark" style="background-color:#3399FF;">Agregar Pokémon</button>
</a>
<div></div>
<br>
<table class="table table-striped" bgcolor="white">
    <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Imagen</th>
          <th scope="col">Nombre</th>
          <th scope="col">Tipo 1</th>
          <th scope="col">Tipo 2</th>
          <th scope="col">Grupo huevo 1</th>
          <th scope="col">Grupo huevo 2</th>
          <th scope="col">Japonés</th>
          <th scope="col">Romanizado</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td><img src="https://assets.pokemon.com/assets/cms2/img/pokedex/full/001.png" width="50" height="50" class="img-thumbnail" alt="..."></td>
          <td>Bulbasaur</td>
          <td>Planta</td>
          <td>Veneno</td>
          <td>Monstruo</td>
          <td>Planta</td>
          <td>フシギダネ</td>
          <td>Fushigidane</td>
          <td><a href="{{ route('editarPokemon') }}">
            <button type="button" class="btn btn-success" style="background-color:#45B143;">Editar</button>
          </a></td>
          <td><a href="{{ route('eliminarPokemon') }}">
            <button type="button" class="btn btn-danger" style="background-color:#F14600;">Eliminar</button>
          </a></td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td><img src="https://assets.pokemon.com/assets/cms2/img/pokedex/full/002.png" width="50" height="50" class="img-thumbnail"></td>
          <td>Ivysaur</td>
          <td>Planta</td>
          <td>Veneno</td>
          <td>Monstruo</td>
          <td>Planta</td>
          <td>フシギソウ</td>
          <td>Fushigisō</td>
          <td><button type="button" class="btn btn-success" style="background-color:#45B143;">Editar</button></td>
          <td><button type="button" class="btn btn-danger" style="background-color:#F14600;">Eliminar</button></td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td><img src="https://assets.pokemon.com/assets/cms2/img/pokedex/full/003.png" width="50" height="50" class="img-thumbnail"></td>
          <td >Venusaur</td>
          <td>Planta</td>
          <td>Veneno</td>
          <td>Monstruo</td>
          <td>Planta</td>
          <td>フシギバナ</td>
          <td>Fushigibana</td>
          <td><button type="button" class="btn btn-success" style="background-color:#45B143;">Editar</button></td>
          <td><button type="button" class="btn btn-danger" style="background-color:#F14600;">Eliminar</button></td>
        <tr>
          <th scope="row">4</th>
          <td><img src="https://pm1.narvii.com/7833/9fe8f8a6f58dc2c643dd1e04982ffdba0bc30a88r1-927-1044v2_hq.jpg" width="50" height="50" class="img-thumbnail"></td>
          <td >Charmander</td>
          <td>Fuego</td>
          <td>Fuego</td>
          <td>Monstruo</td>
          <td>Dragón</td>
          <td>ヒトカゲ</td>
          <td>Hitokage</td>
          <td><button type="button" class="btn btn-success" style="background-color:#45B143;">Editar</button></td>
          <td><button type="button" class="btn btn-danger" style="background-color:#F14600;">Eliminar</button></td>
        </tr>
        <tr>
          <th scope="row">5</th>
          <td><img src="https://assets.pokemon.com/assets/cms2/img/pokedex/full/005.png" width="50" height="50" class="img-thumbnail"></td>
          <td >Charmeleon</td>
          <td>Fuego</td>
          <td>Fuego</td>
          <td>Monstruo</td>
          <td>Dragón</td>
          <td>リザード</td>
          <td>Rizādo</td>
          <td><button type="button" class="btn btn-success" style="background-color:#45B143;">Editar</button></td>
          <td><button type="button" class="btn btn-danger" style="background-color:#F14600;">Eliminar</button></td>
        </tr>
        <tr>
          <th scope="row">6</th>
          <td><img src="https://static.wikia.nocookie.net/35d65408-493d-4381-8dfb-1afa6816f0db" width="50" height="50" class="img-thumbnail"></td>
          <td >Charizard</td>
          <td>Fuego</td>
          <td>Volador</td>
          <td>Monstruo</td>
          <td>Dragón</td>
          <td>リザードン</td>
          <td>Rizādon</td>
          <td><button type="button" class="btn btn-success" style="background-color:#45B143;">Editar</button></td>
          <td><button type="button" class="btn btn-danger" style="background-color:#F14600;">Eliminar</button></td>
        </tr>
        <tr>
            <th scope="row">7</th>
            <td><img src="https://assets.pokemon.com/assets/cms2/img/pokedex/full/007.png" width="50" height="50" class="img-thumbnail"></td>
            <td >Squirtle</td>
            <td>Agua</td>
            <td>Agua</td>
            <td>Monstruo</td>
            <td>Agua 1</td>
            <td>ゼニガメ</td>
            <td>Zenigame</td>
            <td><button type="button" class="btn btn-success" style="background-color:#45B143;">Editar</button></td>
            <td><button type="button" class="btn btn-danger" style="background-color:#F14600;">Eliminar</button></td>
        </tr>
        <tr>
            <th scope="row">8</th>
            <td><img src="https://assets.pokemon.com/assets/cms2/img/pokedex/full/008.png" width="50" height="50" class="img-thumbnail"></td>
            <td >Wartortle</td>
            <td>Agua</td>
            <td>Agua</td>
            <td>Monstruo</td>
            <td>Agua 1</td>
            <td>カメール</td>
            <td>Kamēru</td>
            <td><button type="button" class="btn btn-success" style="background-color:#45B143;">Editar</button></td>
            <td><button type="button" class="btn btn-danger" style="background-color:#F14600;">Eliminar</button></td>
        </tr>
        <tr>
            <th scope="row">9</th>
            <td><img src="https://img.joomcdn.net/3612424ef4446c1d422f60acbbd8c4ccb21090fc_original.jpeg" width="50" height="50" class="img-thumbnail"></td>
            <td >Blastoise</td>
            <td>Agua</td>
            <td>Agua</td>
            <td>Monstruo</td>
            <td>Agua 1</td>
            <td>カメックス</td>
            <td>Kamekkusu</td>
            <td><button type="button" class="btn btn-success" style="background-color:#45B143;">Editar</button></td>
            <td><button type="button" class="btn btn-danger" style="background-color:#F14600;">Eliminar</button></td>
        </tr>
      </tbody>
  </table>

@stop