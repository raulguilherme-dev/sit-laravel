<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Usuario;

class UsuarioController extends Controller
{
    public function create() {
        return view('events.cadastro-usuario');
    }

    public function store(Request $request) {
        $usuario = new Usuario;

        $usuario->login = $request->login;
        $usuario->senha = $request->senha;

        $usuario->save();
        return redirect('/admim-home');
    }
}
