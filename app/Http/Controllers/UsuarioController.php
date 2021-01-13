<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

class UsuarioController extends Controller
{
    public function index(){
        return view ('index');
    }

    public function create()
    {
        return(' porra');
    }

    public function store(Request $request)
    {
        $usuario = new Usuario;

        $usuario->nome_completo = $request->nome_completo;
        $usuario->nomedeusuario = $request->nomedeusuario;
        $usuario->email = $request->email;
        $usuario->senha = $request->senha;

        $usuario->save();

        return redirect()->route('usuario.index');
    }
}
