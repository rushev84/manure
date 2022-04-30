<?php

namespace App\Http\Controllers\Admin\Manure;

use App\Http\Controllers;
use App\Models\Manure;

class StoreController extends Controllers\Controller
{
    public function __invoke()
    {
        $data = request()->validate([
            'name' => 'required|string',
            'norm_nitrogen' => 'required|numeric',
            'norm_phosphorus' => 'required|numeric',
            'norm_potassium' => 'required|numeric',
            'district' => 'required|string',
            'price' => 'required|string',
            'description' => 'required|string',
            'purpose' => 'required|string',
            'culture_id' => ''
        ]);
        Manure::create($data);
        return redirect()->route('admin.manure.index');
    }
}
