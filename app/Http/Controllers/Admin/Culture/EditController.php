<?php

namespace App\Http\Controllers\Admin\Culture;

use App\Models\Culture;

class EditController extends BaseController
{
    public function __invoke(Culture $culture)
    {
        return view('admin.culture.edit', compact('culture'));
    }
}
