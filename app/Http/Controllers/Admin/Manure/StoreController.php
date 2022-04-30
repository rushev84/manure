<?php

namespace App\Http\Controllers\Admin\Manure;

use App\Http\Controllers;
use App\Http\Requests\Admin\Manure\StoreRequest;
use App\Models\Manure;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        $this->service->store($data);



        return redirect()->route('admin.manure.index');
    }
}
