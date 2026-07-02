<?php

namespace App\Filament\Resources\SrjHeatExchangerSections\Pages;

use App\Filament\Resources\SrjHeatExchangerSections\SrjHeatExchangerSectionResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSrjHeatExchangerSections extends ListRecords
{
    protected static string $resource = SrjHeatExchangerSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
