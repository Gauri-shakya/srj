<?php

namespace App\Filament\Resources\SrjHeatExchangerSections\Pages;

use App\Filament\Resources\SrjHeatExchangerSections\SrjHeatExchangerSectionResource;
use Filament\Resources\Pages\CreateRecord;

class CreateSrjHeatExchangerSection extends CreateRecord
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

    protected function getCreateFormAction(): \Filament\Actions\Action
    {
        return parent::getCreateFormAction()->color('success');
    }

    protected function getCreateAnotherFormAction(): \Filament\Actions\Action
    {
        return parent::getCreateAnotherFormAction()->hidden();
    }
}
