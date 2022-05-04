<?php

namespace App\Http\Controllers\Admin\Client;

use App\Http\Requests\Admin\Client\UpdateRequest;
use App\Models\Client;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Client $client)
    {
        $data = $request->validated();

        $client->update($data);

        return redirect()->route('admin.client.index');
    }
}
