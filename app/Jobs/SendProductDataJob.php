<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ProductImport;

class SendProductDataJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $uploadedFilePath;

    public function __construct($uploadedFilePath)
    {
        // dd($uploadedFilePath);
        $this->uploadedFilePath = $uploadedFilePath;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Excel::import(new ProductImport($this->uploadedFilePath), $this->uploadedFilePath);
        // Excel::import(new ProductImport(), storage_path('app/public/' . $this->filePath));

    }
}
