<?php

namespace App\Filament\Resources\ProductResource\Pages;

use App\Filament\Resources\ProductResource;
use App\Imports\ProductImport;
use App\Models\Product;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Forms\Components\FileUpload;
use Maatwebsite\Excel\Facades\Excel;
use Filament\Notifications\Notification;

class ListProducts extends ListRecords
{
    protected static string $resource = ProductResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),

            Actions\Action::make('uploadFile')
                ->label('Upload Excel File')
                ->form([
                    FileUpload::make('file')
                        ->disk('public')
                        ->directory('uploads')
                        ->required(),
                ])
                ->action(function (array $data) {
                    // dd($data);
                    if (!isset($data['file'])) {
                        Notification::make()
                            ->title('File not found!')
                            ->danger()
                            ->send();
                        return;
                    }

                    $filePath = 'uploads/' . $data['file']; // Public folder ka path

                    Excel::import(new ProductImport($filePath), storage_path('app/public/' . $data['file']));

                    Notification::make()
                        ->title('Excel Imported Successfully')
                        ->success()
                        ->send();
                }),

        ];
    }
}
