<?php

namespace App\Filament\Resources\EstimationCycleTimeCoaResource\Pages;

use App\Filament\Resources\EstimationCycleTimeCoaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEstimationCycleTimeCoas extends ListRecords
{
    protected static string $resource = EstimationCycleTimeCoaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label('Tambah Data Estimasi Baru'),
        ];
    }
}
