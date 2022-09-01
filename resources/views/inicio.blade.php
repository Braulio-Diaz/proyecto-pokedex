@extends('layouts.master')
@section('title','Inicio')

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
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://www.redrum-verlag.de/images/categories/banner-1_pokemon.jpg" class="d-block w-100" alt="..." width="100" height="450">
      </div>
      <div class="carousel-item">
        <img src="https://img.elo7.com.br/product/original/1E2320A/kit-especial-pokemon-go-personalizados-pokemon.jpg" class="d-block w-100" alt="..." width="100" height="450">
      </div>
      <div class="carousel-item">
        <img src="https://www.ansaldo.cl/wp-content/uploads/2022/05/banner-pokemon-web-24-1-scaled.jpg" class="d-block w-100" alt="..." width="100" height="450">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <br>

<div class="container">

    <div class="alert alert-secondary" role="alert">
        <h4 class="card-title" style="text-align:center" >¡Pokémons destacados de la semana!</h4>
      </div>
  <div class="card-group" >
    <div class="card" >
      <img src="https://i.pinimg.com/originals/ff/ba/e0/ffbae06e278676d2e8550452cd41cb0c.png
      " class="card-img-top" alt="...">
        <br>
        <br>
        <div class="card-footer">
        <h5 class="card-title" style="text-align:center">🔥Charmander🔥</h5>
        <p class="card-text">Charmander es un pequeño lagarto bípedo. Sus características de fuego son resaltadas por su color de piel anaranjado y su cola con la punta envuelta en llamas. Charmander, como sus evoluciones Charmeleon y Charizard, tiene una pequeña llama en la punta de su cola.</p>
      </div>
    </div>
    <div class="card">
      <img src="https://juguetespokemon.com/wp-content/uploads/2021/05/Bulbasaur.png" class="card-img-top" alt="...">
        <br>
        <br>
        <br>
        <div class="card-footer">
        <h5 class="card-title" style="text-align:center">🍃Bulbasaur🍃</h5>
        <p class="card-text">Bulbasaur es un Pokémon de tipo planta/veneno introducido en la primera generación. Es uno de los Pokémon iniciales que pueden elegir los entrenadores que empiezan su aventura en la región Kanto, junto a Squirtle y Charmander (excepto en Pokémon Amarillo).</p>
      </div>
    </div>
    <div class="card">
      <img src="https://www.ecured.cu/images/0/08/Squirtle1.png" class="card-img-top" alt="...">
      <div class="card-footer">
        <h5 class="card-title" style="text-align:center">💧Squirtle💧</h5>
        <p class="card-text">Squirtle es un Pokémon de tipo agua introducido en la primera generación. Es uno de los Pokémon iniciales que pueden elegir los entrenadores que empiezan su aventura en la región Kanto.</p>
      </div>
    </div>
  </div>
</div>
@stop
