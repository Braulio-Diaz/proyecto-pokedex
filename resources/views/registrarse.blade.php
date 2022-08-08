@extends('layouts.master')

@section('header')

<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <b><a class="navbar-brand" href="">ポケットモンスター</a></b>
  </div>
</nav>

@stop

@section('content')

<div class="container mt-3">

    <div class="row">
        <div class="col-2"></div>
    <div class="col-8">
    
    <p></p>
    
    <div class="card" style="width: 40rem;">
        <div class="card-body">
          <h4 class="card-title" style="text-align:center">Registrarse</h4>
          <br>
          <form method="" action="{{ url('usuariocreado') }}">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre y Apellido</label>
                <input type="tetxt" class="form-control" id="nombre" name="nombre" required="required" placeholder="Ash Ketchup">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">RUT</label>
                <input type="text" class="form-control" id="rut" name="rut" required="required" placeholder="14356401-9">
              </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" name="email" required="required" placeholder="ash.ketchup@gmail.com">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Contraseña</label>
              <input type="password" class="form-control" id="contraseña" name="contraseña" required="required">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Confirmar contraseña</label>
                <input type="password" class="form-control" id="Rcontraseña" name="Rcontraseña" required="required">
              </div>
              <div style="text-align:center" class="d-grid gap-2">
                <button type="submit" class="btn btn-outline-dark">Registrarse</button>
              </div>
          </form>
        </div>
      </div>
    </div>
    </div>
</div>

@stop