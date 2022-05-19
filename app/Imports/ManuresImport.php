<?php

namespace App\Imports;

use App\Models\Manure;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsErrors;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Validators\Failure;
use Throwable;

class ManuresImport implements ToCollection, WithHeadingRow, SkipsOnError, WithValidation, SkipsOnFailure
{
    use Importable, SkipsErrors;

    public function collection(Collection $collection)
    {

        foreach ($collection as $row) {
            if ($row->filter()->isNotEmpty()) {
                Manure::firstOrCreate([
                    'name' => $row['name'],
                    'norm_nitrogen' => $row['norm_nitrogen'],
                    'norm_phosphorus' => $row['norm_phosphorus'],
                    'norm_potassium' => $row['norm_potassium'],
                    'culture_id' => $row['culture_id'],
                    'district' => $row['district'],
                    'price' => $row['price'],
                    'description' => $row['description'],
                    'purpose' => $row['purpose']
                ]);
            }
        }

//        foreach ($collection as $row) {
//            if ($row[0] == 'Название') {
//                continue;
//            };
//            if ($row->filter()->isNotEmpty()) {
//                Manure::firstOrCreate([
//                    'name' => $row[0],
//                    'norm_nitrogen' => $row[1],
//                    'norm_phosphorus' => $row[2],
//                    'norm_potassium' => $row[3],
//                    'culture_id' => $row[4],
//                    'district' => $row[5],
//                    'price' => $row[6],
//                    'description' => $row[7],
//                    'purpose' => $row[8]
//                ]);
//            }
//        }
//    }

    }


    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'norm_nitrogen' => 'required|numeric|gt:0',
            'norm_phosphorus' => 'required|numeric|gt:0',
            'norm_potassium' => 'required|numeric|gt:0',
            'district' => 'required|string',
            'price' => 'required|numeric|gt:0',
            'description' => 'required|string',
            'purpose' => 'required|string',
            'culture_id' => 'required'
        ];
    }

//    public function onError(Throwable $error)
//    {
//        dd($error);
//    }

    public function onFailure(Failure ...$failures)
    {
        foreach ($failures as $failure) {
            dd($failure);
        }

    }
}
