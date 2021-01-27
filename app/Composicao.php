<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Composicao extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'id',
        'titulo',
        'categoria',
        'texto',
        'participacao',
        'produzido',
        'escrito',
        'soundcloud',
        'youtube',
        'usuario_id'
    ];

    public function usuario(){

        return $this->belongsTo('App\Usuario');
    }

    
}
