<?php

namespace App\Filament\Resources\CargoTcResource\Pages;

use App\Filament\Resources\CargoTcResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCargoTcs extends ListRecords
{
    protected static string $resource = CargoTcResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label('Tambah Data Cargo TC Baru'),
        ];
    }
}
