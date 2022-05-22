<?php

namespace App\Imports;

use App\Models\Manure;
use App\Models\ManuresImportStatus;
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

class ManuresImport implements ToCollection, WithHeadingRow, WithValidation
{
    use Importable;

    public function collection(Collection $collection)
    {

//dd($collection);

        foreach ($collection as $row) {
            if ($row->filter()->isNotEmpty()) {
                Manure::firstOrCreate([
                    'name' => $row['nazvanie'],
                    'norm_nitrogen' => $row['norma_azota'],
                    'norm_phosphorus' => $row['norma_fosfora'],
                    'norm_potassium' => $row['norma_kaliya'],
                    'culture_id' => $row['id_kultury'],
                    'district' => $row['raion'],
                    'price' => $row['cena'],
                    'description' => $row['opisanie'],
                    'purpose' => $row['naznacenie']
                ]);
            }
        }
    }
//        dd('final');


//    public function onFailure(Failure ...$failures)
//    {
////        dd($failures);
////
////        return redirect()->route('admin.manures_import_errors');
//
//    }

    public function rules(): array
    {
        return [
            'nazvanie' => 'required|string',
            'norma_azota' => 'required|numeric|gt:0',
            'norma_fosfora' => 'required|numeric|gt:0',
            'norma_kaliya' => 'required|numeric|gt:0',
            'id_kultury' => 'required',
            'raion' => 'required|string',
            'cena' => 'required|numeric|gt:0',
            'opisanie' => 'required|string',
            'naznacenie' => 'required|string',
        ];
    }

    public function customValidationMessages()
    {
        return [
            'nazvanie.required' => 'Отсутствует название',
        ];
    }
}
