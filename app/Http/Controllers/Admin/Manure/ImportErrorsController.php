<?php

namespace App\Http\Controllers\Admin\Manure;

use App\Imports\ManuresImport;
use App\Jobs\ManuresImportJob;
use App\Models\ManuresImportStatus;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ImportErrorsController extends BaseController
{
    public function __invoke(Request $request)
    {
       dd('import_Errors');
    }
}
