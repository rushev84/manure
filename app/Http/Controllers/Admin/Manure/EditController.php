<?php

namespace App\Http\Controllers\Admin\Manure;

use App\Http\Controllers;
use App\Models\Culture;
use App\Models\Manure;

class EditController extends BaseController
{
    public function __invoke(Manure $manure)
    {
        $cultures = Culture::all();
        return view('admin.manure.edit', compact('manure', 'cultures'));
    }
}
