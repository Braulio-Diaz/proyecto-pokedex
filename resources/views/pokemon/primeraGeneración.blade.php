@extends('layouts.master')
@section('title','Primera generación')

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
        <b><a class="nav-link" href="{{ route('pokemongeneraciones') }}">Ver pokémon</a></b>
      </div>
    </div>
    <nav class="navbar bg-light">
      <div class="container-fluid">
        <a class="navbar-brand"></a>
        <form class="d-flex" role="search" action="{{ url('pokemon') }}" method="get">
          <input class="form-control me-2" value="" id="pokemonabuscar" name="pokemonabuscar" type="search" placeholder="Buscar pokémon" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Buscar</button>
        </form>
      </div>
    </nav>
    <div>
      <b><a class="nav-link" href="/">Cerrar sesión</a></b>
    </div>
  </div>
</nav>

@stop

@section('content')

<br>
<a href='/pokemon/create ' type="button" class="btn btn-primary" class="btn btn-outline-dark" style="background-color:#3399FF;">
    Agregar Pokémon
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
          <th scope="col">Creado</th>
          <th scope="col">Actualizado</th>
        </tr>
      </thead>
      <tbody>
        @foreach($pokemonsg1 as $pokemong1)
        <tr>
          <th scope="row">{{ $pokemong1->number }}</th>
          <td>
            @if(Storage::disk('images')->has($pokemong1->image))
            <img src="{{ url('miniatura/'.$pokemong1->image) }}" width="50" height="50" class="img-thumbnail">
            @else 
            <img src="{{ $pokemong1->image }}" width="50" height="50" class="img-thumbnail">
            @endif
          </td>
          <td >{{ $pokemong1->name }}</td>
          <td>{{ $pokemong1->type1 }}</td>
          <td>{{ $pokemong1->type2 }}</td>
          <td>{{ $pokemong1->eggGroup1 }}</td>
          <td>{{ $pokemong1->eggGroup2 }}</td>
          <td>{{ $pokemong1->japanese }}</td>
          <td>{{ $pokemong1->romanized }}</td>
          <td>{{ FormatTime::LongTimeFilterCreated($pokemong1->created_at) }}</td>
          <td>{{ FormatTime::LongTimeFilterUpdated($pokemong1->updated_at) }}</td>
          <td><a href="#" type="button" class="btn btn-success" style="background-color:#45B143;">Editar</a></td>
          <td>
            <form action="pokemon/{{ $pokemong1->id }}" method="POST">
              {{ method_field('delete') }}
            <button type="submit" class="btn btn-danger" style="background-color:#F14600;">Eliminar</button>
            </form>
          </td>
      </tr>
      @endforeach
      </tbody>
  </table>

@stop