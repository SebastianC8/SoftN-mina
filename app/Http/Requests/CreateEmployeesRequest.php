<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateEmployeesRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'documentType_id' => 'required',
            'document' => 'required',
            'nameEmployee' => 'required',
            'lastName' => 'max:20',
            'birthDate' => 'required',
            'address' => 'required',
            'email' => 'required',
            'Phone' => 'required',
            'numberSons' => 'required|integer',
            'entryDate' => 'required',
            'levelEducative' => 'required',
            'layoffs_id' => 'required',
            'pensions_id' => 'required',
            'EPS_id' => 'required',
            'holidays_id' => 'required',
            'compenstionFound_id' => 'required',
            'areas_id' => 'required',
            'maritalStatus_id' => 'required',
            'ARL_id' => 'required',
            'bonus_idBonus' => 'required'
        ];
    }

    public function messages(){
        return [
            'document.required' => 'El número de documento es obligatorio.',
            'nameEmployee.required' => 'El nombre del empleado es obligatorio',
            'lastName.max' => 'El campo apellido no debe tener más de 20 caracteres',
            'birthDate.required' => 'El campo fecha de nacimiento es obligatorio',
            'address.required' => 'La dirección del empleado es obligatoria',
            'email.required' => 'El campo email es obligatorio',
            'Phone.required' => 'El teléfono del empleado es obligatorio',
            'numberSons.required' => 'El número de hijos del empleado es obligatorio',
            'numberSons.integer' => 'Este campo solamente permite valores numéricos',
            'entryDate.required' => 'La fecha de entrada del empleado es obligatoria',
            'levelEducative.required' => 'El nivel educativo del empleado es obligatorio'
        ];
    }
}
