<?php

namespace App\Http\Requests\Admin\Client;

use Illuminate\Foundation\Http\FormRequest;

class FilterRequest extends FormRequest
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

            'name' => 'nullable',

            'contract_date_from' => 'nullable|date_format:Y-m-d',
            'contract_date_to' => 'nullable|date_format:Y-m-d',

            'delivery_cost_from' => 'nullable',
            'delivery_cost_to' => 'nullable',

            'region' => 'nullable'
        ];
    }
}
