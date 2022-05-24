<?php

namespace App\Http\Controllers\Admin\Manure;

use App\Imports\ManuresImport;
use App\Jobs\ManuresImportJob;
use App\Models\ManuresImportStatus;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ImportController extends BaseController
{
    public function ui()
    {
        return view('admin.manure.import_ui');
    }

    public function store(Request $request)
    {
        copy($request->file('manure_file'), public_path() . '/imports/manures.xlsx');

//        ManuresImportJob::dispatchNow();

//        $filePath = public_path().'/imports/manures.xlsx';
//        Excel::import(new ManuresImport(), $filePath);

        $filePath = public_path() . '/imports/manures.xlsx';

        $import = new ManuresImport;

        ManuresImportStatus::create([
            'status' => 'Ошибка импорта',
            'user_id' => auth()->user()->id
        ]);

        $import->import($filePath);

        return back()->withStatus('Данные успешно импортированы!');
    }

    public function status()
    {
        $manuresImportStatuses = ManuresImportStatus::all();

        return view('admin.manure.import_status', compact('manuresImportStatuses'));
    }
}
