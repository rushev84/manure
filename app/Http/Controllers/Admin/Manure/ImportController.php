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

        $filePath = public_path() . '/imports/manures.xlsx';

        $import = new ManuresImport;

        // или тут ставить сообщение "данные импортируются"?
        ManuresImportStatus::create([
            'status' => 'Ошибка импорта',
            'user_id' => auth()->user()->id
        ]);

        $import->import($filePath);

//        dd('import done');

        ManuresImportStatus::latest()->first()->update([
            'status' => 'Данные успешно импортированы',
        ]);

        return back()->withStatus('Готово!');
    }

    public function status()
    {
        $manuresImportStatuses = ManuresImportStatus::all();

        return view('admin.manure.import_status', compact('manuresImportStatuses'));
    }
}
