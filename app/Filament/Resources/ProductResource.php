<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ProductImport;


class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(100),
                Forms\Components\TextInput::make('quantity')
                    ->numeric()
                    ->required(),
                Forms\Components\TextInput::make('type')
                    ->required(),
                Forms\Components\TextInput::make('price')
                    ->numeric()
                    ->required(),
                Forms\Components\TextInput::make('discount')
                    ->numeric(),
                // FileUpload::make('file')
                //     ->disk('public') // ✅ Save in storage/app/public/
                //     ->visibility('public') // ✅ Ensure file is publicly accessible
                //     ->getUploadedFileNameForStorageUsing(fn($file) => 'uploads/' . $file->getClientOriginalName())              


            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                Tables\Columns\TextColumn::make('name')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('quantity')->sortable(),
                Tables\Columns\TextColumn::make('type'),
                Tables\Columns\TextColumn::make('price')->sortable(),
                Tables\Columns\TextColumn::make('discount')->sortable(),
                Tables\Columns\TextColumn::make('file')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(), // 👀 View Button
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
            'view' => Pages\CustomProductView::route('/{record}'),

        ];
    }
}
