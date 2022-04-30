<?php

namespace App\Http\Controllers\Admin\Manure;

use App\Http\Controllers;
use App\Models\Manure;

class DestroyController extends BaseController
{
    public function __invoke(Manure $manure)
    {
        $manure->delete();
        return redirect()->route('admin.manure.index');
    }
}
