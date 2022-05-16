<?php

namespace App\Exports;

use App\Models\Manure;
use Maatwebsite\Excel\Concerns\FromCollection;

class ManuresExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Manure::all();
    }
}
