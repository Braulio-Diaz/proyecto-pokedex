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
<div class="card mb-3">
    <a href="{{ route('generacionUno') }}">
        <img src="https://media.vandal.net/i/1200x630/10-2021/2021105724573_1.jpg
        " width="100" height="450"  class="card-img-top" alt="...">
    </a>
    <div class="card-body" style="background-color:#3d4abe;">
      <h5 class="card-title" style="text-align:center"><FONT COLOR="white">Pokémon Primera Generación</FONT></h5>
    </div>
  </div>


  <br>
  <div class="card mb-3">
      <a href="{{ route('generacionUno') }}">
          <img src="https://img.elo7.com.br/product/original/1BACF66/painel-1-50x1-pokemon-pokemon-go.jpg" width="100" height="450" class="card-img-top" alt="...">
      </a>
      <div class="card-body" style="background-color:#c92424;">
        <h5 class="card-title" style="text-align:center"><font color="white">Pokémon Segunda Generación</font></h5>
      </div>
    </div>


    <br>
    <div class="card mb-3">
        <a href="{{ route('generacionUno') }}">
            <img src="https://www.ansaldo.cl/wp-content/uploads/2022/05/banner-pokemon-web-24-1-scaled.jpg
            " width="100" height="450" class="card-img-top" alt="...">
        </a>
        <div class="card-body" style="background-color:#3d4abe;">
          <h5 class="card-title" style="text-align:center"><font color="white">Pokémon Tercera Generación</font></h5>
        </div>
      </div>

@stop