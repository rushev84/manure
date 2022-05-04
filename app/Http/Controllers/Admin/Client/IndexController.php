<?php

namespace App\Http\Controllers\Admin\Client;

use App\Http\Controllers;
use App\Http\Filters\ManureFilter;
use App\Http\Requests\Admin\Manure\FilterRequest;
use App\Models\Culture;
use App\Models\Manure;
use App\Models\Client;

class IndexController extends BaseController
{
//    public function __invoke(FilterRequest $request)
    public function __invoke()
    {

//        $data = $request->validated();

//        $filter = app()->make(ManureFilter::class, ['queryParams' => array_filter($data)]);
//
//        $manures = Manure::filter($filter)->paginate(10);

//        return view('admin.manure.index', compact('manures',  'data'));

        $clients = Client::paginate(10);
        return view('admin.client.index', compact('clients'));
    }
}
