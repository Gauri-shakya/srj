<?php

namespace App\Filament\Resources\ContactLeads\Schemas;

use Filament\Schemas\Schema;

class ContactLeadForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                \Filament\Forms\Components\TextInput::make('name')
                    ->disabled(),
                \Filament\Forms\Components\TextInput::make('email')
                    ->disabled(),
                \Filament\Forms\Components\TextInput::make('phone')
                    ->disabled(),
                \Filament\Forms\Components\TextInput::make('subject')
                    ->disabled(),
                \Filament\Forms\Components\Textarea::make('message')
                    ->columnSpanFull()
                    ->disabled(),
            ]);
    }
}
