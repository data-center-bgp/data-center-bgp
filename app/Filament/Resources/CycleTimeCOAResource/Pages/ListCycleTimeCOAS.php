<?php

namespace App\Filament\Resources\CycleTimeCOAResource\Pages;

use App\Filament\Resources\CycleTimeCOAResource;
use App\Imports\CycleTimeCOAImport;
use Filament\Actions;
use Filament\Actions\Action;
use Filament\Forms\Components\FileUpload;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\ListRecords;
use Maatwebsite\Excel\Facades\Excel;

class ListCycleTimeCOAS extends ListRecords
{
    protected static string $resource = CycleTimeCOAResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Action::make('importCycleTimeCOA')
                ->label('Import Cycle Time COA')
                ->color('danger')
                ->form([
                    FileUpload::make('attachment'),
                ])
                ->action(function (array $data) {
                    $file = public_path('storage/'.$data['attachment']);

                    Excel::import(new CycleTimeCOAImport, $file);

                    Notification::make()
                        ->title('Data is imported!')
                        ->success()
                        ->send();
                }),
        ];
    }
}
