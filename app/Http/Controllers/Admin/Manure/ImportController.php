<?php

namespace App\Http\Controllers\Admin\Manure;

use App\Imports\ManuresImport;
use App\Jobs\ManuresImportJob;
use App\Models\ManuresImportStatus;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ImportController extends BaseController
{
    public function __invoke(Request $request)
    {
        copy($request->file('manure_file'), public_path() . '/imports/manures.xlsx');
//        dd('success');

//        ManuresImportJob::dispatchNow();

//        $filePath = public_path().'/imports/manures.xlsx';
//        Excel::import(new ManuresImport(), $filePath);

        $filePath = public_path().'/imports/manures.xlsx';

        $import = new ManuresImport;
        $import->import($filePath);

        // Возможно, этот метод не работает потому, что сначала ошибки отрабатываются на уровне валидации, и только если их нет, заходит сюда
//        dd($import->errors());

        return back()->withStatus('Данные успешно импортированы!');

        return redirect('/admin/manures');
    }
}
