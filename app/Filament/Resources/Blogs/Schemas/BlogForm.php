<?php

namespace App\Filament\Resources\Blogs\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Set;
use Illuminate\Support\Str;

class BlogForm
{
    public static function configure($schema)
    {
        return $schema
            ->schema([
                Section::make('Blog Details')
                    ->schema([
                        TextInput::make('title')
                            ->required()
                            ->maxLength(255)
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn ($set, ?string $state) => $set('slug', Str::slug($state))),
                        
                        TextInput::make('slug')
                            ->required()
                            ->maxLength(255)
                            ->unique(ignoreRecord: true),
                        
                        FileUpload::make('image')
                            ->image()
                            ->directory('blogs')
                            ->columnSpanFull(),
                        
                        Textarea::make('short_description')
                            ->columnSpanFull()
                            ->maxLength(1000),
                        
                        RichEditor::make('long_description')
                            ->columnSpanFull(),
                    ])->columns(2),

                Section::make('SEO & Status')
                    ->schema([
                        TextInput::make('meta_title')
                            ->maxLength(255),
                        Textarea::make('meta_description')
                            ->maxLength(1000)
                            ->columnSpanFull(),
                        Toggle::make('is_active')
                            ->label('Published')
                            ->default(true),
                    ])->columns(2),
            ]);
    }
}
