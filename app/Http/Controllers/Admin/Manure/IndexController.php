<?php

namespace App\Http\Controllers\Admin\Manure;

use App\Http\Controllers;
use App\Http\Filters\ManureFilter;
use App\Http\Requests\Admin\Manure\FilterRequest;
use App\Models\Manure;

class IndexController extends BaseController
{
    public function __invoke(FilterRequest $request)
    {
        $data = $request->validated();

        $filter = app()->make(ManureFilter::class, ['queryParams' => array_filter($data)]);

        $manures = Manure::filter($filter)->paginate(10);

        return view('admin.manure.index', compact('manures'));
    }
}
