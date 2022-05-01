<?php

namespace App\Http\Controllers;

use App\Http\Controllers;
use App\Models\Manure;
use Illuminate\Http\Request;

class IndexController extends Controllers\Controller
{
    public function __invoke()
    {
        $manures = Manure::paginate(10);

        return view('index', compact('manures'));
    }
}
