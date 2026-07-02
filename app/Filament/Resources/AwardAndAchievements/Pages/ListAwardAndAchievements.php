<?php

namespace App\Filament\Resources\AwardAndAchievements\Pages;

use App\Filament\Resources\AwardAndAchievements\AwardAndAchievementResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAwardAndAchievements extends ListRecords
{
    protected static string $resource = AwardAndAchievementResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
