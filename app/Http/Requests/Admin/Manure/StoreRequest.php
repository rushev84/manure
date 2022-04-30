<?php

namespace App\Http\Requests\Admin\Manure;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name' => 'required|string',
            'norm_nitrogen' => 'required|numeric',
            'norm_phosphorus' => 'required|numeric',
            'norm_potassium' => 'required|numeric',
            'district' => 'required|string',
            'price' => 'required|string',
            'description' => 'required|string',
            'purpose' => 'required|string',
            'culture_id' => ''
        ];
    }
}
