<?php

namespace App\Http\Controllers\Admin\Client;

use App\Http\Controllers;
use App\Models\Client;
use App\Models\Manure;

class DestroyController extends BaseController
{
    public function __invoke(Client $client)
    {
        $client->delete();
        return redirect()->route('admin.client.index');
    }
}
