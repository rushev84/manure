<?php

namespace App\Http\Controllers\Admin\Client;

use App\Http\Filters\ManureFilter;
use App\Models\Client;
use App\Models\Culture;

class SoftDeletedController extends BaseController
{
    public function __invoke()
    {
        $clientsOnlyTrashed = Client::onlyTrashed()->get();

        return view('admin.client.soft_deleted', compact('clientsOnlyTrashed' ));
    }
}
