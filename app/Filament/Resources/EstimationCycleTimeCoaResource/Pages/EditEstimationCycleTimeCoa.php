<?php

namespace App\Filament\Resources\EstimationCycleTimeCoaResource\Pages;

use App\Filament\Resources\EstimationCycleTimeCoaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEstimationCycleTimeCoa extends EditRecord
{
    protected static string $resource = EstimationCycleTimeCoaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
