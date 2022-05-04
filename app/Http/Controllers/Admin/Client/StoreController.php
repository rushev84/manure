<?php

namespace App\Http\Controllers\Admin\Client;

use App\Http\Controllers;
use App\Http\Requests\Admin\Client\StoreRequest;
use App\Models\Client;
use App\Models\Manure;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        Client::create($data);

        return redirect()->route('admin.client.index');
    }
}
