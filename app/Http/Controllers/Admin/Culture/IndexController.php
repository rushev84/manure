<?php

namespace App\Http\Controllers\Admin\Culture;

use App\Http\Controllers;
use App\Http\Requests\Admin\Manure\FilterRequest;
use App\Models\Culture;
use App\Models\Manure;

class IndexController extends BaseController
{
    public function __invoke()
    {
        $cultures = Culture::paginate(10);

        return view('admin.culture.index', compact( 'cultures'));
    }
}
