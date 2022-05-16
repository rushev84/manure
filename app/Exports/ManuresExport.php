<?php

namespace App\Exports;

use App\Models\Manure;
//use Maatwebsite\Excel\Concerns\FromCollection;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ManuresExport implements FromView
{
    public function view(): View
    {
        return view('exports.manures', [
            'manures' => Manure::all()
        ]);
    }


    /**
     * @return \Illuminate\Support\Collection
     */
//    public function collection()
//    {
//        return Manure::all();
//    }
}
