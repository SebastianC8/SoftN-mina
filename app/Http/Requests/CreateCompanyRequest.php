<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCompanyRequest extends FormRequest
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
            'documentType_id' => 'required',
            'codeCompany' => 'required',
            'companyName' => 'required',
            'imgCompany' => 'image',
            'numberEmployees' => 'required'
        ];
    }

    public function messages(){
        return [
            'codeCompany.required' => 'El código de la compañía es obligatorio.',
            'companyName.required' => 'El nombre de la compañía es obligatorio.',
            'imgCompany.image' => 'Únicamente puede cargar imágenes a este campo.',
            'numberEmployees.required' => 'El campo número de empleados es obligatorio',
        ];
    }
}
