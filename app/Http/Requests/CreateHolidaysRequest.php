<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateHolidaysRequest extends FormRequest
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
            'descriptionHolidays' => 'required|alpha'            
        ];
    }

    public function messages(){
        return [
            'descriptionHolidays.required'=>'El campo solo permite letras'
        ];
    }
}
