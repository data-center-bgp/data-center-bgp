<?php

namespace App\Filament\Resources\CycleTimeCOAResource\Pages;

use App\Filament\Resources\CycleTimeCOAResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCycleTimeCOAS extends ListRecords
{
    protected static string $resource = CycleTimeCOAResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
