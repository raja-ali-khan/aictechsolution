<?php

namespace App\Imports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\Importable;


class ProductImport implements ToModel, WithHeadingRow
{
    protected $uploadedFilePath;

    public function __construct($uploadedFilePath)
    {
        // dd($uploadedFilePath);
        $this->uploadedFilePath = $uploadedFilePath;
    }

    public function model(array $row)
    {
        // Debugging

        return new Product([
            //

            'name' => $row['name'],
            'quantity' => $row['quantity'],
            'type' => $row['type'],
            'price' => $row['price'],
            'discount' => $row['discount'],
            'file' => $this->uploadedFilePath, // Upload ka path yahan set ho raha hai  
        ]);
    }
}
