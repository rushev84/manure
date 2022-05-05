<?php

namespace App\Http\Controllers;

use App\Http\Controllers;
use App\Models\Manure;
use Illuminate\Http\Request;

class MainController extends Controllers\Controller
{
    public function __invoke()
    {
        return redirect()->route('manure.index');
    }
}
