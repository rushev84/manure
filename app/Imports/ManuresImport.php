<?php

namespace App\Imports;

use App\Models\Manure;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class ManuresImport implements ToCollection
{
    public function collection(Collection $collection)
    {
        foreach ($collection as $row) {
            if ($row->filter()->isNotEmpty()) {
                Manure::firstOrCreate([
                    'name' => $row[0],
                    'norm_nitrogen' => $row[1],
                    'norm_phosphorus' => $row[2],
                    'norm_potassium' => $row[3],
                    'culture_id' => $row[4],
                    'district' => $row[5],
                    'price' => $row[6],
                    'description' => $row[7],
                    'purpose' => $row[8]
                ]);
            }
        }
    }
}
