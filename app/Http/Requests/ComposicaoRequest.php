<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComposicaoRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

    
    public function rules()
    {
        return [
            'titulo'=>'required',
            'categoria'=>'required',
            'texto'=>'required',
            'participacao'=>'nullable',
            'produzido'=>'required',
            'escrito'=>'required',
            'soundcloud'=>'nullable',
            'youtube'=>'nullable'
        ];
    }

    public function messages()
    {
        return[
            'required'=>'O campo :attribute é obrigatório. !'

        ];
    }
}
