<?php

namespace App\Http\Controllers\Admin\Manure;

use App\Http\Controllers;
use App\Models\Manure;

class IndexController extends BaseController
{
    public function __invoke()
    {
        $manures = Manure::all();

        return view('admin.manure.index', compact('manures'));
    }
}
