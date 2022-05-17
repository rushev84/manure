<?php

namespace App\Http\Controllers\Admin\Manure;

use App\Imports\ManuresImport;
use App\Jobs\ManuresImportJob;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ImportController extends BaseController
{
    public function __invoke(Request $request)
    {
        copy($request->file('files'), public_path() . '/imports/manures.xlsx');
//        dd('success');

        ManuresImportJob::dispatchNow();


        return redirect('/admin/manures');
    }
}
