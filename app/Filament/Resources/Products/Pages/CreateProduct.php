<?php

namespace App\Filament\Resources\Products\Pages;

use App\Filament\Resources\Products\ProductResource;
use Filament\Resources\Pages\CreateRecord;

class CreateProduct extends CreateRecord
{
    protected static string $resource = ProductResource::class;

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
