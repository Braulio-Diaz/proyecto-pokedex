<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
        return view('login');
    }

    public function registrarse(){
        return view('registrarse');
    }

    public function usuarioCreado(){
        return view('usuarioCreado');
    }
    
    public function recuperarContraseña(){
        return view('recuperarContraseña');
    }

    public function contraseñaRecuperada(){
        return view('contraseñaRecuperada');
    }
}
