<?php

namespace App\Filament\Resources\AwardAndAchievements\Pages;

use App\Filament\Resources\AwardAndAchievements\AwardAndAchievementResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditAwardAndAchievement extends EditRecord
{
    protected static string $resource = AwardAndAchievementResource::class;

    protected function getHeaderActions(): array
    {
        return [
            \Filament\Actions\Action::make('back')
                ->label('Back')
                ->url(fn () => static::getResource()::getUrl('index'))
                ->color('gray')
                ->icon('heroicon-o-arrow-left'),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
