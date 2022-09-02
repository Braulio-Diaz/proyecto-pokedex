@extends('layouts.master')
@section('title','Agregar')

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
    <div>
      <b><a class="nav-link" href="/">Cerrar sesión</a></b>
    </div>
  </div>
</nav>

@stop

@section('content')

<br>

<div class="card">
    <div class="card-body">
      <h4 class="card-title" style="text-align:center">⚡Editar pokémon⚡</h4>
      <br>
      <form action="/pokemon" method="POST" enctype="multipart/form-data">
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">Número</span>
          </div>
          <input type="hidden" class="form-control" id="id" name="id" value="{{ $pokemonsg1[0]->id }}" aria-label="Nombre" aria-describedby="basic-addon1">
          <input type="number" class="form-control" id="number" name="number" min="1" max="151" value="{{ $pokemonsg1[0]->number }}" aria-label="Nombre" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
          <input type="file" class="form-control" accept=".jpg, .png, .jpeg" id="image" name="image" aria-label="Username" aria-describedby="basic-addon1">
        </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Nombre</span>
            </div>
            <input type="text" class="form-control" id="name" name="name" value="{{ $pokemonsg1[0]->name }}" aria-label="Nombre" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">Tipo 1</span>
          </div>
          <input type="text" class="form-control" id="type1" name="type1" value="{{ $pokemonsg1[0]->type1 }}" aria-label="Nombre" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">Tipo 2</span>
          </div>
          <input type="text" class="form-control" id="type2" name="type2" value="{{ $pokemonsg1[0]->type2 }}" aria-label="Nombre" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">Grupo huevo 1</span>
          </div>
          <input type="text" class="form-control" id="eggGroup1" name="eggGroup1" value="{{ $pokemonsg1[0]->eggGroup1 }}"  aria-label="Nombre" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">Grupo huevo 2</span>
          </div>
          <input type="text" class="form-control" id="eggGroup2" name="eggGroup2" value="{{ $pokemonsg1[0]->eggGroup2 }}" aria-label="Nombre" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">Japonés</span>
          </div>
          <input type="text" class="form-control" id="japanese" name="japanese" value="{{ $pokemonsg1[0]->japanese }}" aria-label="Nombre" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">Romanizado</span>
          </div>
          <input type="text" class="form-control" id="romanized" name="romanized" value="{{ $pokemonsg1[0]->romanized }}" aria-label="Nombre" aria-describedby="basic-addon1">
        </div>
          <div style="text-align:center" class="d-grid gap-2">
          <button type="submit" class="btn btn-outline-dark">Editar</button>
          </div>
      </form>
    </div>
  </div>
@stop