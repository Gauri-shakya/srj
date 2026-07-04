<?php

namespace App\Filament\Resources\SrjHeatExchangerSections\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class SrjHeatExchangerSectionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                \Filament\Forms\Components\RichEditor::make('content')
                    ->required()
                    ->columnSpanFull()
                    ->toolbarButtons([
                        'bold', 'italic', 'underline', 'strike',
                        'bulletList', 'orderedList', 'h2', 'h3',
                        'link', 'redo', 'undo'
                    ]),
                FileUpload::make('image')
                    ->image()
                    ->directory('srj-sections')
                    ->imageEditor()
                    ->columnSpanFull(),
                \Filament\Forms\Components\TextInput::make('alt_text')
                    ->label('Image Alt Text')
                    ->columnSpanFull(),
                TextInput::make('sort_order')
                    ->numeric()
                    ->default(0)
                    ->required(),
                Toggle::make('is_active')
                    ->label('Active')
                    ->default(true),
            ]);
    }
}
