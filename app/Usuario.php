<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class Usuario extends User
{
    protected $fillable=[
        'nome_completo',
        'nomedeusuario',
        'email',
        'senha'
    ];

    protected $hidden = [
        'senha'
    ];
}
