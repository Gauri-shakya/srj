<?php

namespace App\Filament\Resources\HomeFaqs\Pages;

use App\Filament\Resources\HomeFaqs\HomeFaqResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditHomeFaq extends EditRecord
{
    protected static string $resource = HomeFaqResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
