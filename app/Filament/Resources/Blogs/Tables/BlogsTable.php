<?php

namespace App\Filament\Resources\Blogs\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;

class BlogsTable
{
    public static function configure($table)
    {
        return $table
            ->columns([
                ImageColumn::make('image')
                    ->defaultImageUrl('https://ui-avatars.com/api/?name=Blog&color=7F9CF5&background=EBF4FF'),
                TextColumn::make('title')
                    ->searchable()
                    ->sortable()
                    ->wrap(),
                IconColumn::make('is_active')
                    ->label('Published')
                    ->boolean(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make()->iconButton()->iconButton(),
                DeleteAction::make()->iconButton()->iconButton(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
