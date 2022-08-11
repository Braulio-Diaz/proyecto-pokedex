<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
        return view('login.login');
    }

    public function registrarse(){
        return view('login.registrarse');
    }

    public function usuarioCreado(){
        return view('login.usuarioCreado');
    }
    
    public function recuperarContraseña(){
        return view('login.recuperarContraseña');
    }

    public function contraseñaRecuperada(){
        return view('login.contraseñaRecuperada');
    }
}
