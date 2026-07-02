<?php

namespace App\Filament\Resources\SrjHeatExchangerSections\Pages;

use App\Filament\Resources\SrjHeatExchangerSections\SrjHeatExchangerSectionResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditSrjHeatExchangerSection extends EditRecord
{
    protected static string $resource = SrjHeatExchangerSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
