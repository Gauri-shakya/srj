<?php

namespace App\Filament\Resources\HomeFaqs;

use App\Filament\Resources\HomeFaqs\Pages\CreateHomeFaq;
use App\Filament\Resources\HomeFaqs\Pages\EditHomeFaq;
use App\Filament\Resources\HomeFaqs\Pages\ListHomeFaqs;
use App\Filament\Resources\HomeFaqs\Schemas\HomeFaqForm;
use App\Filament\Resources\HomeFaqs\Tables\HomeFaqsTable;
use App\Models\HomeFaq;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class HomeFaqResource extends Resource
{
    protected static ?string $model = HomeFaq::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedQuestionMarkCircle;
    
    protected static \UnitEnum|string|null $navigationGroup = 'Content Management';
    protected static ?string $navigationLabel = 'Home FAQs';

    protected static ?string $recordTitleAttribute = 'question';

    public static function form(Schema $schema): Schema
    {
        return HomeFaqForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return HomeFaqsTable::configure($table);
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
            'index' => ListHomeFaqs::route('/'),
            'create' => CreateHomeFaq::route('/create'),
            'edit' => EditHomeFaq::route('/{record}/edit'),
        ];
    }
}
