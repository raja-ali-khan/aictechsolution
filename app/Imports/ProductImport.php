<?php

namespace App\Imports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\Importable;
use Illuminate\Support\Facades\Log;

class ProductImport implements ToModel, WithHeadingRow
{
    use Importable;

    // protected $uploadedFilePath;

    // public function __construct($uploadedFilePath)
    // {
    //     $this->uploadedFilePath = $uploadedFilePath;
    // }

    public function model(array $row)
    {

        return new Product([
            'name' => $row['name'],
            'quantity' => $row['quantity'],
            'type' => $row['type'],
            'price' => $row['price'],
            'discount' => $row['discount'],
            // 'file' => $this->uploadedFilePath,
        ]);
    }
}
