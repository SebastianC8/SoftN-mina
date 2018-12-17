<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CretateloginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => 'required|email|max:25|unique:users',
            'password' => 'required|confirmed|min:5'
        ];
    }

    public function messages(){
        return[
            'email.required' => 'Este campo es obligatorio.',
            'email.email' => 'Este campo debe tener formato correo electrónico.',
            'email.max'=> 'Esta campo permite hasta máximo 25 caracteres.',
        ];
    }
}
