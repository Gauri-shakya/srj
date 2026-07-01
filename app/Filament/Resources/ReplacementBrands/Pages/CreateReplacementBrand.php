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
