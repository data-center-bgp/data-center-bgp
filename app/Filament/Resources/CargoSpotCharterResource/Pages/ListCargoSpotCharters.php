<?php

namespace App\Filament\Resources\CargoSpotCharterResource\Pages;

use App\Filament\Resources\CargoSpotCharterResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCargoSpotCharters extends ListRecords
{
    protected static string $resource = CargoSpotCharterResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label('Tambah Data Cargo Spot Charter Baru'),
        ];
    }
}
