<?php

namespace App\Filament\Resources\CargoTcCoaResource\Pages;

use App\Filament\Resources\CargoTcCoaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCargoTcCoa extends EditRecord
{
    protected static string $resource = CargoTcCoaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
