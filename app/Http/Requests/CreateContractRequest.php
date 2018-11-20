<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateContractRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'document' => 'required|int',
            'descriptionContract' => 'required|max:50',
            'typeContract_id' => 'required',
            'dateStart' => 'required',
            'dateEnd' => 'required',
            'bonus_id' => 'required',
            'company_id' => 'required',
            'Phone' => 'required|int'
        ];
    }
}
