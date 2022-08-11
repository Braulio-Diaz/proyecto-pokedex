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
          <h4 class="card-title" style="text-align:center">Recuperar contraseña</h4>
          <br>
          <form method="" action="{{ url('contraseñarecuperada') }}">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" name="email" required="required" placeholder="victor.jara@ciisa.cl">
            </div>
            <div style="text-align:center" class="d-grid gap-2">
            <button type="submit" class="btn btn-outline-dark">Recuperar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    </div>
</div>

@stop