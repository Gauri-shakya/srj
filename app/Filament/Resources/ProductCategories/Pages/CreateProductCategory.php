<?php

namespace App\Filament\Resources\ProductCategories\Pages;

use App\Filament\Resources\ProductCategories\ProductCategoryResource;
use Filament\Resources\Pages\CreateRecord;

class CreateProductCategory extends CreateRecord
{
    protected static string $resource = ProductCategoryResource::class;

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
