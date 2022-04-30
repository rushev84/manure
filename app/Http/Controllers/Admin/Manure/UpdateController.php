<?php

namespace App\Http\Controllers\Admin\Manure;

use App\Http\Controllers;
use App\Models\Manure;

class UpdateController extends Controllers\Controller
{
    public function __invoke(Manure $manure)
    {
        $data = request()->validate([
            'name' => 'string',
            'norm_nitrogen' => 'numeric|between:0,99.99',
            'norm_phosphorus' => 'numeric|between:0,99.99',
            'norm_potassium' => 'numeric|between:0,99.99',
            'district' => '',
            'price' => '',
            'description' => '',
            'purpose' => '',
            'culture_id' => ''
        ]);
        $manure->update($data);
        return redirect()->route('admin.manure.show', $manure->id);
    }
}
