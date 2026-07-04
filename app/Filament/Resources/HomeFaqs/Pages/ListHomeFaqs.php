<?php

namespace App\Filament\Resources\HomeFaqs\Pages;

use App\Filament\Resources\HomeFaqs\HomeFaqResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListHomeFaqs extends ListRecords
{
    protected static string $resource = HomeFaqResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
