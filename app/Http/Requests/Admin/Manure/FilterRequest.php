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
            'name' => 'nullable',

            'norm_nitrogen_from' => 'nullable',
            'norm_nitrogen_to' => 'nullable',

            'norm_phosphorus_from' => 'nullable',
            'norm_phosphorus_to' => 'nullable',

            'norm_potassium_from' => 'nullable',
            'norm_potassium_to' => 'nullable',

            'price_from' => 'nullable|numeric|gt:0',
            'price_to' => 'nullable|numeric|gt:0',

            'district' => 'nullable',
            'description' => 'nullable',
            'purpose' => 'nullable',

            'cultures' => 'nullable'

        ];
    }
}
