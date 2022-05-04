<?php

namespace App\Http\Controllers\Admin\Culture;

use App\Http\Filters\ManureFilter;
use App\Models\Culture;

class SoftDeletedController extends BaseController
{
    public function __invoke()
    {
        $culturesOnlyTrashed = Culture::onlyTrashed()->get();

        return view('admin.culture.soft_deleted', compact('culturesOnlyTrashed' ));
    }
}
