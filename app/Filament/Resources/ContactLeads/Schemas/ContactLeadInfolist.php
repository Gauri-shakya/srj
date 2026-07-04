<?php

namespace App\Filament\Resources\ContactLeads\Schemas;

use Filament\Schemas\Schema;

class ContactLeadInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                \Filament\Infolists\Components\Section::make('Lead Details')
                    ->schema([
                        \Filament\Infolists\Components\TextEntry::make('name'),
                        \Filament\Infolists\Components\TextEntry::make('email'),
                        \Filament\Infolists\Components\TextEntry::make('phone'),
                        \Filament\Infolists\Components\TextEntry::make('subject'),
                        \Filament\Infolists\Components\TextEntry::make('message')
                            ->columnSpanFull(),
                    ])->columns(2),
            ]);
    }
}
