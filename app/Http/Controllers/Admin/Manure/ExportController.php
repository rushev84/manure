<?php

namespace App\Http\Controllers\Admin\Manure;

use App\Exports\ManuresExport;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;

class ExportController extends BaseController
{
    public function __invoke()
    {
        // сохранение на диск
//        Excel::store(new ManuresExport, 'manures2.xlsx');

        // загрузка из storage
//        return response(Storage::get('manures2.xlsx'))->header('Content-Type', Storage::mimeType('manures2.xlsx'));
        // скачивание в браузере
//        return Excel::download(new ManuresExport, 'manures.xlsx');
    }
}
