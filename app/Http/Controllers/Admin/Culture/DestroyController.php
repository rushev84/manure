<?php

namespace App\Http\Controllers\Admin\Culture;

use App\Models\Culture;

class DestroyController extends BaseController
{
    public function __invoke(Culture $culture)
    {
        $culture->delete();
        return redirect()->route('admin.culture.index');
    }
}
