<?php

namespace App\Filament\Resources\CargoSpotCharterResource\Pages;

use App\Filament\Resources\CargoSpotCharterResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCargoSpotCharter extends EditRecord
{
    protected static string $resource = CargoSpotCharterResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
