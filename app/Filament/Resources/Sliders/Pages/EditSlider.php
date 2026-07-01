<?php

namespace App\Filament\Resources\Sliders\Pages;

use App\Filament\Resources\Sliders\SliderResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditSlider extends EditRecord
{
    protected static string $resource = SliderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            \Filament\Actions\Action::make('back')->label('Back to List')->url(fn() => $this->getResource()::getUrl('index'))->color('gray')->icon('heroicon-o-arrow-left'),
            DeleteAction::make(),
        ];
    }
}
