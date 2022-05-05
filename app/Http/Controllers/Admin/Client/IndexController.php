<?php

namespace App\Http\Controllers\Admin\Client;

use App\Http\Filters\ClientFilter;
use App\Http\Requests\Admin\Client\FilterRequest;
use App\Models\Client;

class IndexController extends BaseController
{
    public function __invoke(FilterRequest $request)
    {

        $data = $request->validated();

//        dd($data);

        $filter = app()->make(ClientFilter::class, ['queryParams' => array_filter($data)]);

        $clients = Client::filter($filter)->paginate(10);

        return view('admin.client.index', compact('clients',  'data'));
//        return view('admin.client.index', compact('clients'));
    }
}
