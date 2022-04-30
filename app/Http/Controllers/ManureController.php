<?php

namespace App\Http\Controllers;

use App\Models\Manure;
use Illuminate\Http\Request;

class ManureController extends Controller
{
    public function index()
    {
        $manures = Manure::all();

        return view('manures', compact('manures'));
    }

    public function create()
    {
        $manureArr = [
            ['name' => 'Плант',
                'norm_nitrogen' => 1.2,
                'norm_phosphorus' => 2.2,
                'norm_potassium' => 2.2,
                'culture_id' => 3,
                'district' => 'Дзержинск',
                'price' => 300,
                'description' => 'Описание',
                'purpose' => 'Различные цели'
            ],
            ['name' => 'Плант 2',
                'norm_nitrogen' => 1.2,
                'norm_phosphorus' => 2.2,
                'norm_potassium' => 2.2,
                'culture_id' => 3,
                'district' => 'Дзержинск 2',
                'price' => 300,
                'description' => 'Описание 2',
                'purpose' => 'Различные цели 2'
            ],
        ];

        foreach ($manureArr as $manure){
            Manure::create($manure);
        }
    }
}
