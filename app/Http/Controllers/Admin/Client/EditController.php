<?php

namespace App\Http\Controllers\Admin\Client;

use App\Http\Controllers;
use App\Models\Client;
use App\Models\Culture;
use App\Models\Manure;

class EditController extends BaseController
{
    public function __invoke(Client $client)
    {
        return view('admin.client.edit', compact('client'));
    }
}
