<?php

namespace App\Http\Controllers\Admin\Manure;

use App\Http\Controllers;
use App\Http\Filters\ManureFilter;
use App\Http\Requests\Admin\Manure\FilterRequest;
use App\Models\Culture;
use App\Models\Manure;
use App\Models\ManuresImportStatus;

class IndexController extends BaseController
{
    public function __invoke(FilterRequest $request)
    {
        $data = $request->validated();

        $filter = app()->make(ManureFilter::class, ['queryParams' => array_filter($data)]);

        $manures = Manure::filter($filter)->paginate(10);
        $cultures = Culture::all();

//        dd($data);

        return view('admin.manure.index', compact('manures', 'cultures', 'data'));
    }
}
