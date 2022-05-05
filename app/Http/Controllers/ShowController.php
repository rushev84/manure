<?php

namespace App\Http\Controllers;

use App\Http\Controllers;
use App\Http\Controllers\BaseController;
use App\Models\Manure;

class ShowController extends BaseController
{
    public function __invoke(Manure $manure)
    {
        return view('show', compact('manure'));
    }
}
