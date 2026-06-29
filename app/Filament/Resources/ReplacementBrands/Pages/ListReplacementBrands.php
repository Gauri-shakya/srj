<?php

namespace App\Filament\Resources\ReplacementBrands\Pages;

use App\Filament\Resources\ReplacementBrands\ReplacementBrandResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListReplacementBrands extends ListRecords
{
    protected static string $resource = ReplacementBrandResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
