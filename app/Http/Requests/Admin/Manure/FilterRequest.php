<?php

namespace App\Http\Requests\Admin\Manure;

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

            'norm_nitrogen_from' => '',
            'norm_nitrogen_to' => '',

            'norm_phosphorus_from' => '',
            'norm_phosphorus_to' => '',

            'norm_potassium_from' => '',
            'norm_potassium_to' => '',

            'price_from' => '',
            'price_to' => '',

            'district' => '',
            'description' => '',
            'purpose' => '',

            'cultures' => ''

        ];
    }
}
