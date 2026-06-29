<?php

namespace App\Filament\Resources\ReplacementBrands\Pages;

use App\Filament\Resources\ReplacementBrands\ReplacementBrandResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditReplacementBrand extends EditRecord
{
    protected static string $resource = ReplacementBrandResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
