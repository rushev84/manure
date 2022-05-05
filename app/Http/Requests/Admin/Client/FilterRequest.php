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

            'name' => '',

//            'contract_date_from' => '',
//            'contract_date_to' => '',

            'delivery_cost_from' => '',
            'delivery_cost_to' => '',

            'region' => ''
        ];
    }
}
