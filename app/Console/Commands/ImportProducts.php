<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ProductImport;
use Illuminate\Support\Facades\Storage;

class ImportProducts extends Command
{
    /**
     * The name and signature of the console command.
     *
     
     */
    // protected $signature = 'app:import-products';
    protected $signature = 'import:products {filePath}';


    /**
     * The console command description.
     *
     
     */
    // protected $description = 'Command description';
    protected $description = 'Import products from an Excel file';


    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
        // Terminal se file path lena
        $filePath = $this->argument('filePath');
        // dd($filePath);


        // Full path create karna
        $fullPath = storage_path('app/public/' . $filePath);
        // $fullPath = Storage::disk('public')->path($filePath);
        // dd($fullPath);
        Excel::import(new ProductImport(), $fullPath);
        $this->info('✅ Product import successful!');
    }
}
