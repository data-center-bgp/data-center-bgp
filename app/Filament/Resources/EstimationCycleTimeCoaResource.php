<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EstimationCycleTimeCoaResource\Pages;
use App\Models\EstimationCycleTimeCoa;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Auth;

class EstimationCycleTimeCoaResource extends Resource
{
    protected static ?string $model = EstimationCycleTimeCoa::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Hidden::make('user_id')
                    ->default(Auth::id())
                    ->required(),
                Forms\Components\TextInput::make('rute')
                    ->label('Rute')
                    ->required(),
                Forms\Components\TextInput::make('tahun')
                    ->label('Tahun')
                    ->required()
                    ->numeric(),
                Forms\Components\Select::make('bulan')
                    ->label('Bulan')
                    ->options([
                        'Januari' => 'Januari',
                        'Februari' => 'Februari',
                        'Maret' => 'Maret',
                        'April' => 'April',
                        'Mei' => 'Mei',
                        'Juni' => 'Juni',
                        'Juli' => 'Juli',
                        'Agustus' => 'Agustus',
                        'September' => 'September',
                        'Oktober' => 'Oktober',
                        'November' => 'November',
                        'Desember' => 'Desember',
                    ])
                    ->required(),
                Forms\Components\Select::make('tipe_kapal')
                    ->label('Tipe Kapal')
                    ->options([
                        'SPOB' => 'SPOB',
                        'Satgas' => 'Satgas',
                    ])
                    ->required(),
                Forms\Components\Select::make('kegiatan')
                    ->label('Kegiatan')
                    ->options([
                        'Info Berthing Jetty Load' => 'Info Berthing Jetty Load',
                        'Angkat Jangkar Jetty Load' => 'Angkat Jangkar Jetty Load',
                        'Tunggu Kapal Pandu Jetty Load' => 'Tunggu Kapal Pandu Jetty Load',
                        'Manuvering Jetty Load' => 'Manuvering Jetty Load',
                        'Tunggu Loading Master at Jetty Load' => 'Tunggu Loading Master at Jetty Load',
                        'Opening Loading' => 'Opening Loading',
                        'Loading' => 'Loading',
                        'Waiting Sounding at Jetty Load' => 'Waiting Sounding at Jetty Load',
                        'Sounding Cargo at Jetty Load' => 'Sounding Cargo at Jetty Load',
                        'Waiting Doc BL at Jetty Load' => 'Waiting Doc BL at Jetty Load',
                        'Kapal Pandu Keluar Jetty Load' => 'Kapal Pandu Keluar Jetty Load',
                        'Manuvering Keluar Jetty Load' => 'Manuvering Keluar Jetty Load',
                        'Cast Off Full Away' => 'Cast Off Full Away',
                        'Berlayar ke STS' => 'Berlayar ke STS',
                        'Waiting Info Berthing at STS' => 'Waiting Info Berthing at STS',
                        'Tunggu Kapal Pandu at STS' => 'Tunggu Kapal Pandu at STS',
                        'Manuvering STS' => 'Manuvering STS',
                        'Tunggu Loading Master at STS' => 'Tunggu Loading Master at STS',
                        'Perhitungan R2 New BL' => 'Perhitungan R2 New BL',
                        'Loading Fame' => 'Loading Fame',
                        'Waiting Sounding at STS' => 'Waiting Sounding at STS',
                        'Sounding Cargo at STS' => 'Sounding Cargo at STS',
                        'Waiting Doc BL at STS' => 'Waiting Doc BL at STS',
                        'Kapal Pandu Keluar STS' => 'Kapal Pandu Keluar STS',
                        'Manuvering Keluar STS' => 'Manuvering Keluar STS',
                        'Running Cargo' => 'Running Cargo',
                        'Waiting Info Berthing at Jetty Discharge' => 'Waiting Info Berthing at Jetty Discharge',
                        'Angkat Jangkar Jetty Discharge' => 'Angkat Jangkar Jetty Discharge',
                        'Tunggu Kapal Pandu at Jetty Discharge' => 'Tunggu Kapal Pandu at Jetty Discharge',
                        'Manuvering Masuk Jetty Discharge' => 'Manuvering Masuk Jetty Discharge',
                        'Tunggu Loading Master at Jetty Discharge' => 'Tunggu Loading Master at Jetty Discharge',
                        'Opening Discharge' => 'Opening Discharge',
                        'Discharge' => 'Discharge',
                        'Waiting Document Discharge' => 'Waiting Document Discharge',
                        'Tunggu Kapal Pandu Keluar Jetty Discharge' => 'Tunggu Kapal Pandu Keluar Jetty Discharge',
                        'Manuvering Keluar Jetty Discharge' => 'Manuvering Keluar Jetty Discharge',
                        'Running Empty' => 'Running Empty',
                        'Full Away After Discharge' => 'Full Away After Discharge',
                        'Perjalanan ke Pulau Atas' => 'Perjalanan ke Pulau Atas',
                        'Total Cycle Time' => 'Total Cycle Time',
                    ])
                    ->required(),
                self::makeTimeInput('estimasi')
                    ->label('Estimasi Waktu')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('rute')
                    ->label('Rute')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tahun')
                    ->label('Tahun')
                    ->formatStateUsing(fn ($state) => (string) $state)
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('bulan')
                    ->label('Bulan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tipe_kapal')
                    ->label('Tipe Kapal')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('kegiatan')
                    ->label('Kegiatan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('estimasi')
                    ->label('Estimasi Waktu')
                    ->formatStateUsing(function ($record) {
                        $state = $record->getRawOriginal('estimasi');
                        if (is_numeric($state)) {
                            $hours = floor($state / 60);
                            $minutes = $state % 60;

                            return sprintf('%02d:%02d', $hours, $minutes);
                        }

                        return '00:00';
                    })
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListEstimationCycleTimeCoas::route('/'),
            'create' => Pages\CreateEstimationCycleTimeCoa::route('/create'),
            'edit' => Pages\EditEstimationCycleTimeCoa::route('/{record}/edit'),
        ];
    }

    protected static function makeTimeInput(string $name): TextInput
    {
        return TextInput::make($name)
            ->rule('regex:/^\d{1,2}:\d{2}$/') // Validation rule for time input
            ->dehydrateStateUsing(function ($state) {
                // Convert "HH:MM" to total minutes
                if (is_string($state) && strpos($state, ':') !== false) {
                    [$hours, $minutes] = explode(':', $state);

                    return ((int) $hours) * 60 + (int) $minutes;
                }

                return $state;
            })
            ->mutateDehydratedStateUsing(function ($state) {
                // Revert total minutes to "HH:MM" for display
                $hours = floor($state / 60);
                $minutes = $state % 60;

                return sprintf('%02d:%02d', $hours, $minutes);
            });
    }

    public static function getNavigationLabel(): string
    {
        return 'Cycle Time COA Estimation';
    }

    public static function getPluralModelLabel(): string
    {
        return 'Cycle Time COA Estimation';
    }
}
