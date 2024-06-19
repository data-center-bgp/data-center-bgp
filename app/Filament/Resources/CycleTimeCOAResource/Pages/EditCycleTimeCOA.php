<?php

namespace App\Filament\Resources\CycleTimeCOAResource\Pages;

use App\Filament\Resources\CycleTimeCOAResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCycleTimeCOA extends EditRecord
{
    protected static string $resource = CycleTimeCOAResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
