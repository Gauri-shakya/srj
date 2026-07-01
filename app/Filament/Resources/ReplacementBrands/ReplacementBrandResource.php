<?php

namespace App\Filament\Resources\ReplacementBrands;

use App\Filament\Resources\ReplacementBrands\Pages\CreateReplacementBrand;
use App\Filament\Resources\ReplacementBrands\Pages\EditReplacementBrand;
use App\Filament\Resources\ReplacementBrands\Pages\ListReplacementBrands;
use App\Filament\Resources\ReplacementBrands\Schemas\ReplacementBrandForm;
use App\Filament\Resources\ReplacementBrands\Tables\ReplacementBrandsTable;
use App\Models\ReplacementBrand;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ReplacementBrandResource extends Resource
{
    protected static ?string $model = ReplacementBrand::class;

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-wrench-screwdriver';
    protected static ?int $navigationSort = 4;


    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return ReplacementBrandForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ReplacementBrandsTable::configure($table);
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
            'index' => ListReplacementBrands::route('/'),
            'create' => CreateReplacementBrand::route('/create'),
            'edit' => EditReplacementBrand::route('/{record}/edit'),
        ];
    }
}
