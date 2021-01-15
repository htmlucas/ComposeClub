<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = [
            'nomedeusuario' => $request->nomedeusuario,
            'password' => $request->password

        ];
        if(Auth::attempt($credentials))
        {
            return redirect()->route('perfil.index');
        }

        return redirect()->route('usuario.index')->with('msg_error','Autenticação Falhou');


    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login.index');
    }
}
