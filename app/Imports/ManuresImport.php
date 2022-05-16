<?php

namespace App\Imports;

use App\Models\Manure;
use Maatwebsite\Excel\Concerns\ToModel;

class ManuresImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Manure([
            'name' => $row[0],
            'norm_nitrogen' => $row[1],
            'norm_phosphorus' => $row[2],
            'norm_potassium' => $row[3],
//            // !!! сделать так, чтобы юзер мог писать название культуры, а не её айдишник
            'culture_id' => $row[4],
            'district' => $row[5],
            'price' => $row[6],
            'description' => $row[7],
            'purpose' => $row[8]
        ]);
    }
}
