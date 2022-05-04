<?php

namespace App\Http\Controllers\Admin\Culture;

use App\Http\Requests\Admin\Culture\UpdateRequest;
use App\Models\Culture;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Culture $culture)
    {
        $data = $request->validated();

        $culture->update($data);

        return redirect()->route('admin.culture.index');
    }
}
