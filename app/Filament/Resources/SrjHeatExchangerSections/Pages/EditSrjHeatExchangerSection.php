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
            \Filament\Actions\Action::make('back')
                ->label('Back to List')
                ->url(fn() => $this->getResource()::getUrl('index'))
                ->color('gray')
                ->icon('heroicon-o-arrow-left'),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
