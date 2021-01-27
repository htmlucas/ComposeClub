<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;

class Usuario extends Authenticatable
{
    protected $fillable=[
        'id',
        'nome_completo',
        'nomedeusuario',
        'email',
        'password'
    ];

    protected $hidden = [
        'password'
    ];

    //Mutator 

    public function setpasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }

    public function composicoes()
    {
        return $this->hasMany('App\Composicao');
    }
    
   
}
