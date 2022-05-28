<?php

namespace App\Http\Controllers\Admin\Client;

use App\Models\Client;
use PhpOffice\PhpWord\TemplateProcessor;

use Carbon\Carbon;

class WordExportController extends BaseController
{
    public function __invoke(Client $client)
    {
        $templateProcessor = new TemplateProcessor('exports/word/client_template.docx');

        $templateProcessor->setValues([
            'name' => $client->name,
            'contract_date' => Carbon::parse($client->contract_date)->format('d.m.Y'),
            'delivery_cost' => $client->delivery_cost,
            'current_date' => now()->format('d.m.Y')
        ]);

        $fileName = storage_path() . '/app/public/exports/word/' . $client->id . '.docx';

        $templateProcessor->saveAs($fileName);
        return response()->download($fileName);
    }
}
