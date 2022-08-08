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

<div class="card">
    <div class="card-body">
      <h4 class="card-title" style="text-align:center">Agregar pokémon</h4>
      <br>
      <form method="POST" action="{{ route('resultadoAgregar') }}">
        <div class="mb-3">
          <input type="file" class="form-control-file" id="exampleFormControlFile1">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Tipo 1</label>
            <input type="text" class="form-control" id="Tipo_1" name="Tipo_1">
          </div>
          <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Tipo 2</label>
              <input type="text" class="form-control" id="Tipo_2" name="Tipo_2">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Grupo huevo 1</label>
            <input type="text" class="form-control" id="Grupo_huevo_1" name="Grupo_huevo_1">
          </div>
          <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Grupo huevo 2</label>
              <input type="text" class="form-control" id="Grupo_huevo_2" name="Grupo_huevo_2">
          </div>
          <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Japonés</label>
              <input type="text" class="form-control" id="Japones" name="Japones">
          </div>
          <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Romanizado</label>
              <input type="text" class="form-control" id="Romanizado" name="Romanizado">
          </div>
          <div style="text-align:center" class="d-grid gap-2">
          <button type="submit" class="btn btn-outline-dark">Agregar</button>
          </div>
      </form>
    </div>
  </div>

@stop