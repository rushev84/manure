<?php

namespace App\Http\Controllers\Admin\Client;

use App\Http\Controllers;
use App\Models\Culture;
use App\Models\Manure;

class CreateController extends BaseController
{
    public function __invoke()
    {
        return view('admin.client.create');
    }
}
