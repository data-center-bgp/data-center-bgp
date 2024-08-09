<?php

namespace App\Filament\Resources\CargoTcResource\Pages;

use App\Filament\Resources\CargoTcResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCargoTc extends EditRecord
{
    protected static string $resource = CargoTcResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
