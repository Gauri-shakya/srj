<?php

namespace App\Filament\Resources\AwardAndAchievements\Pages;

use App\Filament\Resources\AwardAndAchievements\AwardAndAchievementResource;
use Filament\Resources\Pages\CreateRecord;

class CreateAwardAndAchievement extends CreateRecord
{
    protected static string $resource = AwardAndAchievementResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
