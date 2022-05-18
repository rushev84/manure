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

//        ManuresImportJob::dispatchNow();

        $filePath = public_path().'/imports/manures.xlsx';
        Excel::import(new ManuresImport(), $filePath);

        return back()->withStatus('Данные успешно импортированы!');

        return redirect('/admin/manures');
    }
}
