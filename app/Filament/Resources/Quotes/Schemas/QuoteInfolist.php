<?php

namespace App\Filament\Resources\Quotes\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class QuoteInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                \Filament\Schemas\Components\Section::make('Client Information')
                    ->description('Contact details of the lead')
                    ->icon('heroicon-m-user-circle')
                    ->schema([
                        \Filament\Schemas\Components\Grid::make(3)
                            ->schema([
                                TextEntry::make('name')
                                    ->icon('heroicon-m-user')
                                    ->weight('bold'),
                                TextEntry::make('email')
                                    ->icon('heroicon-m-envelope')
                                    ->color('primary')
                                    ->copyable(),
                                TextEntry::make('phone')
                                    ->icon('heroicon-m-phone')
                                    ->color('success')
                                    ->copyable(),
                            ])
                    ]),
                \Filament\Schemas\Components\Section::make('Enquiry Details')
                    ->description('What the client is looking for')
                    ->icon('heroicon-m-document-magnifying-glass')
                    ->schema([
                        TextEntry::make('product_name')
                            ->label('Interested Product')
                            ->icon('heroicon-m-cube')
                            ->badge()
                            ->color('warning'),
                        TextEntry::make('requirement')
                            ->label('Message / Requirement')
                            ->icon('heroicon-m-chat-bubble-left-ellipsis')
                            ->columnSpanFull(),
                    ]),
                \Filament\Schemas\Components\Section::make('System Info')
                    ->schema([
                        TextEntry::make('created_at')
                            ->label('Received On')
                            ->dateTime('d M, Y H:i A')
                            ->icon('heroicon-m-calendar'),
                    ])->collapsible()->collapsed(),
            ]);
    }
}
