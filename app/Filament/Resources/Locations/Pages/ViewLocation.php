<?php

namespace App\Filament\Resources\Locations\Pages;

use App\Filament\Resources\Locations\LocationResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewLocation extends ViewRecord
{
    protected static string $resource = LocationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            \Filament\Actions\Action::make('back')->label('Back to List')->url(fn() => $this->getResource()::getUrl('index'))->color('gray')->icon('heroicon-o-arrow-left'),
            EditAction::make(),
        ];
    }
}
