<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateAreaRequest extends FormRequest
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
            'nameArea'=>'required',
            'bossArea'=>'required'
        ];
    }

    public function messages(){
        return[
            
            'nameArea.required'=>'El campo nombre del áres es obligatorio',
            'bossArea.required'=>'El campo jefe de área es obligatorio'
        ];
    }
}
