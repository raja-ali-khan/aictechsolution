<?php

namespace App\Jobs;

use App\Models\Product;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ProductImport;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class SendProductDataJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;


    use Queueable;

    public function __construct(
        public $filePath, // ✅ Change from Product to string
    ) {
        // dd($this->filePath);
    }

    public function handle(): void
    {
        $fullPath =  $this->filePath;
        // dd($fullPath);

        Excel::import(new ProductImport(), $fullPath);
    }
}
