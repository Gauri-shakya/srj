<?php

namespace App\Filament\Resources\SrjHeatExchangerSections;

use App\Filament\Resources\SrjHeatExchangerSections\Pages\CreateSrjHeatExchangerSection;
use App\Filament\Resources\SrjHeatExchangerSections\Pages\EditSrjHeatExchangerSection;
use App\Filament\Resources\SrjHeatExchangerSections\Pages\ListSrjHeatExchangerSections;
use App\Filament\Resources\SrjHeatExchangerSections\Schemas\SrjHeatExchangerSectionForm;
use App\Filament\Resources\SrjHeatExchangerSections\Tables\SrjHeatExchangerSectionsTable;
use App\Models\SrjHeatExchangerSection;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class SrjHeatExchangerSectionResource extends Resource
{
    protected static ?string $model = SrjHeatExchangerSection::class;

    protected static string|\BackedEnum|null $navigationIcon = Heroicon::OutlinedDocumentDuplicate;
    protected static string|\UnitEnum|null $navigationGroup = 'Catalog Management';
    protected static ?int $navigationSort = 3;
    protected static ?string $navigationLabel = 'SRJ Heat Exchangers';
    protected static ?string $modelLabel = 'SRJ Heat Exchanger Section';

    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Schema $schema): Schema
    {
        return SrjHeatExchangerSectionForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SrjHeatExchangerSectionsTable::configure($table);
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
            'index' => ListSrjHeatExchangerSections::route('/'),
            'create' => CreateSrjHeatExchangerSection::route('/create'),
            'edit' => EditSrjHeatExchangerSection::route('/{record}/edit'),
        ];
    }
}
