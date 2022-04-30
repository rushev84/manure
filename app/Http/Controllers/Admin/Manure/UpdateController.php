<?php

namespace App\Http\Controllers\Admin\Manure;

use App\Http\Controllers;
use App\Http\Requests\Admin\Manure\UpdateRequest;
use App\Models\Manure;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Manure $manure)
    {
        $data = $request->validated();

        $this->service->update($manure, $data);


        return redirect()->route('admin.manure.show', $manure->id);
    }
}
