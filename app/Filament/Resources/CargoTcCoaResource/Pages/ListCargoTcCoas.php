<?php

namespace App\Filament\Resources\CargoTcCoaResource\Pages;

use App\Filament\Resources\CargoTcCoaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCargoTcCoas extends ListRecords
{
    protected static string $resource = CargoTcCoaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
