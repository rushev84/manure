<?php

namespace App\Http\Controllers\Admin\Manure;

use App\Http\Filters\ManureFilter;
use App\Models\Manure;

class SoftDeletedController extends BaseController
{
    public function __invoke()
    {
        $manuresOnlyTrashed = Manure::onlyTrashed()->get();

        return view('admin.manure.soft_deleted', compact('manuresOnlyTrashed' ));
    }
}
