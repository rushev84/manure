<?php

namespace App\Http\Controllers\Admin\Manure;

use App\Imports\ManuresImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ImportController extends BaseController
{
    public function __invoke(Request $request)
    {
        Excel::import(new ManuresImport(), $request->file('files'));
        return redirect('/admin/manures')->with('success', 'All good!');
    }
}
