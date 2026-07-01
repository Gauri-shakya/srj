<?php

namespace App\Filament\Resources\ReplacementBrands\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class ReplacementBrandForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('slug')
                    ->required(),
                Textarea::make('description')
                    ->columnSpanFull(),
                \Filament\Forms\Components\RichEditor::make('content')
                    ->label('Long Description')
                    ->columnSpanFull(),
                FileUpload::make('image')
                    ->image(),
                TextInput::make('order')
                    ->required()
                    ->numeric()
                    ->default(0),
                Toggle::make('is_active')
                    ->default(true)
                    ->required(),
                \Filament\Schemas\Components\Section::make('Frequently Asked Questions')
                    ->description('Add unique FAQs for this replacement brand. These will be displayed as an interactive accordion on the frontend.')
                    ->icon('heroicon-o-question-mark-circle')
                    ->schema([
                        \Filament\Forms\Components\Repeater::make('faqs')
                            ->hiddenLabel()
                            ->schema([
                                TextInput::make('question')->required(),
                                Textarea::make('answer')->required(),
                            ])
                            ->columnSpanFull()
                            ->itemLabel(fn (array $state): ?string => $state['question'] ?? null),
                    ])
                    ->collapsible()
                    ->collapsed(false)
                    ->columnSpanFull(),
            ]);
    }
}
