<?php

namespace App\Http\Controllers\Admin\Manure;

use App\Http\Controllers;
use App\Http\Requests\Admin\Manure\FilterRequest;
use App\Models\Manure;

class IndexController extends BaseController
{
    public function __invoke()
    {
//        $data = $request->validated();
//        dd($data);

        $manures = Manure::paginate(10);

        return view('admin.manure.index', compact('manures'));
    }
}
