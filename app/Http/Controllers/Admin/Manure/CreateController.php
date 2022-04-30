<?php

namespace App\Http\Controllers\Admin\Manure;

use App\Http\Controllers;
use App\Models\Culture;

class CreateController extends Controllers\Controller
{
    public function __invoke()
    {
        $cultures = Culture::all();
        return view('admin.manure.create', compact('cultures'));
    }
}
