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
      <h4 class="card-title" style="text-align:center">Agregar pokémon</h4>
      <br>
      <form action="/pokemon" method="POST" >
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Link imagen</label>
          <input type="text" class="form-control" id="image" name="image">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="name" name="name">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Tipo 1</label>
            <input type="text" class="form-control" id="type1" name="type1">
          </div>
          <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Tipo 2</label>
              <input type="text" class="form-control" id="type2" name="type2">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Grupo huevo 1</label>
            <input type="text" class="form-control" id="eggGroup1" name="eggGroup1">
          </div>
          <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Grupo huevo 2</label>
              <input type="text" class="form-control" id="eggGroup2" name="eggGroup2">
          </div>
          <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Japonés</label>
              <input type="textarea" class="form-control" id="japanese" name="japanese">
          </div>
          <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Romanizado</label>
              <input type="text" class="form-control" id="romanized" name="romanized">
          </div>
          <div style="text-align:center" class="d-grid gap-2">
          <button type="submit" class="btn btn-outline-dark">Agregar</button>
          </div>
      </form>
    </div>
  </div>
@stop