<?php

namespace App\Filament\Resources\AwardAndAchievements;

use App\Filament\Resources\AwardAndAchievements\Pages\CreateAwardAndAchievement;
use App\Filament\Resources\AwardAndAchievements\Pages\EditAwardAndAchievement;
use App\Filament\Resources\AwardAndAchievements\Pages\ListAwardAndAchievements;
use App\Filament\Resources\AwardAndAchievements\Schemas\AwardAndAchievementForm;
use App\Filament\Resources\AwardAndAchievements\Tables\AwardAndAchievementsTable;
use App\Models\AwardAndAchievement;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class AwardAndAchievementResource extends Resource
{
    protected static ?string $model = AwardAndAchievement::class;

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-academic-cap';
    protected static ?int $navigationSort = 6;
    protected static ?string $navigationLabel = 'Awards & Achievements';
    protected static ?string $modelLabel = 'Award / Achievement';

    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Schema $schema): Schema
    {
        return AwardAndAchievementForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AwardAndAchievementsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListAwardAndAchievements::route('/'),
            'create' => CreateAwardAndAchievement::route('/create'),
            'edit' => EditAwardAndAchievement::route('/{record}/edit'),
        ];
    }
}
