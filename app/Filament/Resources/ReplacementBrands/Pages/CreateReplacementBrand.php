<?php

namespace App\Filament\Resources\ReplacementBrands\Pages;

use App\Filament\Resources\ReplacementBrands\ReplacementBrandResource;
use Filament\Resources\Pages\CreateRecord;

class CreateReplacementBrand extends CreateRecord
{
    protected static string $resource = ReplacementBrandResource::class;

    protected function getFormActions(): array
    {
        return [
            $this->getCreateFormAction(),
            $this->getCancelFormAction(),
        ];
    }
}
