<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateBonusRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'descriptionBonus' => 'required',
            'valueBonus' => 'required|numeric'
        ];
    }

    public function messages(){
        return [
            'descriptionBonus.required' => 'El campo descripción es obligatorio.',
            'valueBonus.required' => 'El campo valor de la prima es obligatorio.',
            'valueBonus.numeric' => 'El campo valor de la prima acepta solo valores numéricos'
        ];
    }
}
