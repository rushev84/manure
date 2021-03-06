<?php

namespace App\Http\Controllers\Admin\Manure;

use App\Http\Controllers;
use App\Models\Manure;

class ShowController extends BaseController
{
    public function __invoke(Manure $manure)
    {
        return view('admin.manure.show', compact('manure'));
    }
}
