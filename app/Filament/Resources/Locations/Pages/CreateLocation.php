<?php

namespace App\Filament\Resources\Locations\Pages;

use App\Filament\Resources\Locations\LocationResource;
use Filament\Resources\Pages\CreateRecord;

class CreateLocation extends CreateRecord
{
    protected static string $resource = LocationResource::class;

    protected function getHeaderActions(): array
    {
        $actions = parent::getHeaderActions() ?? [];
        array_unshift($actions, \Filament\Actions\Action::make('back')
            ->label('Back to List')
            ->url(fn() => $this->getResource()::getUrl('index'))
            ->color('gray')
            ->icon('heroicon-o-arrow-left'));
        return $actions;
    }
}
