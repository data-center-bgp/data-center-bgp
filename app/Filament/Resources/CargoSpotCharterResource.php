<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CargoSpotCharterResource\Pages;
use App\Models\CargoSpotCharter;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class CargoSpotCharterResource extends Resource
{
    protected static ?string $model = CargoSpotCharter::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('user_id')
                    ->relationship('user', 'name')
                    ->required(),
                Forms\Components\TextInput::make('tc_coa')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('periode')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('jetty_loading')
                    ->required()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('tanggal_loading')
                    ->required(),
                Forms\Components\DatePicker::make('tanggal_unloading')
                    ->required(),
                Forms\Components\TextInput::make('trip')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('jenis_kontrak')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('nomor_bl')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('jenis')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('tongkang')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('tugboat')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('rute_awal')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('rute_akhir')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('liters_at_15c')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('net_liters_of_product')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('barrels_60f_bill_of_lading')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('barrels_60f_after_loading')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('barrels_60f_before_discharge')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('barrels_60f_after_receipt')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('r1_60f')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('r2_60f')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('r3_60f')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('r4_60f')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('liters_at_15c_bill_of_lading')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('liters_at_15c_after_loading')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('liters_at_15c_before_discharge')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('liters_at_15c_after_receipt')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('diff_r1_2')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('r1_2')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('diff_r2_2')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('r2_2')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('diff_r3_2')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('r3_2')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('diff_r4_2')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('r4_2')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('losses')
                    ->required()
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('user.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tc_coa')
                    ->searchable(),
                Tables\Columns\TextColumn::make('periode')
                    ->searchable(),
                Tables\Columns\TextColumn::make('jetty_loading')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tanggal_loading')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tanggal_unloading')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('trip')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jenis_kontrak')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nomor_bl')
                    ->searchable(),
                Tables\Columns\TextColumn::make('jenis')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tongkang')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tugboat')
                    ->searchable(),
                Tables\Columns\TextColumn::make('rute_awal')
                    ->searchable(),
                Tables\Columns\TextColumn::make('rute_akhir')
                    ->searchable(),
                Tables\Columns\TextColumn::make('liters_at_15c')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('net_liters_of_product')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('barrels_60f_bill_of_lading')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('barrels_60f_after_loading')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('barrels_60f_before_discharge')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('barrels_60f_after_receipt')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('r1_60f')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('r2_60f')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('r3_60f')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('r4_60f')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('liters_at_15c_bill_of_lading')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('liters_at_15c_after_loading')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('liters_at_15c_before_discharge')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('liters_at_15c_after_receipt')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('diff_r1_2')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('r1_2')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('diff_r2_2')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('r2_2')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('diff_r3_2')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('r3_2')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('diff_r4_2')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('r4_2')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('losses')
                    ->numeric()
                    ->sortable(),
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

    public static function getNavigationLabel(): string
    {
        return 'Cargo Spot Charter';
    }

    public static function getPluralModelLabel(): string
    {
        return 'Cargo Spot Charter';
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCargoSpotCharters::route('/'),
            'create' => Pages\CreateCargoSpotCharter::route('/create'),
            'edit' => Pages\EditCargoSpotCharter::route('/{record}/edit'),
        ];
    }
}
