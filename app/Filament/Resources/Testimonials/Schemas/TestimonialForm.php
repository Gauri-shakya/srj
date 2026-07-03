<?php

namespace App\Filament\Resources\Testimonials\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class TestimonialForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Reviewer Name')
                    ->required(),
                \Filament\Forms\Components\FileUpload::make('image')
                    ->label('Profile Image (Optional)')
                    ->image()
                    ->directory('testimonials')
                    ->maxSize(2048),
                TextInput::make('company')
                    ->label('Company Name / Subtitle (Optional)')
                    ->placeholder('e.g. Google Review')
                    ->default(null),
                TextInput::make('time_ago')
                    ->label('Time Ago (e.g., "5 months ago")')
                    ->placeholder('e.g. 5 months ago')
                    ->default(null),
                TextInput::make('rating')
                    ->label('Star Rating')
                    ->required()
                    ->numeric()
                    ->minValue(1)
                    ->maxValue(5)
                    ->default(5),
                Toggle::make('is_active')
                    ->label('Show on Website')
                    ->default(true)
                    ->required(),
                Textarea::make('review')
                    ->label('Review Text')
                    ->required()
                    ->rows(4)
                    ->columnSpanFull(),
            ]);
    }
}
