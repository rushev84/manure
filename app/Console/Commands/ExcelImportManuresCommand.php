<?php

namespace App\Console\Commands;

use App\Imports\ManuresImport;
use Illuminate\Console\Command;
use Maatwebsite\Excel\Facades\Excel;

class ExcelImportManuresCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'excel:import:manures';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Imports list of manures from excel-file';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $filePath = public_path().'/imports/manures.xlsx';
        Excel::import(new ManuresImport(), $filePath);
    }
}
