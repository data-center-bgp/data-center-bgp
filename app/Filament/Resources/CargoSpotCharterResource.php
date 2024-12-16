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
                    ->options([
                        'TC' => 'TC',
                        'COA' => 'COA',
                        'Spot Charter' => 'Spot Charter',
                    ]),
                Forms\Components\TextInput::make('periode')
                    ->required()
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
                    ]),
                Forms\Components\TextInput::make('jetty_loading')
                    ->required()
                    ->searchable()
                    ->options([
                        'Kotabaru' => 'Kotabaru',
                        'MT Gunung Kumala' => 'MT Gunung Kumala',
                        'Tanjung Priok' => 'Tanjung Priok',
                        'Pendingin' => 'Pendingin',
                        'Jetty I RU V Balikpapan' => 'Jetty I RU V Balikpapan',
                        'Jetty 5A RU V Balikpapan' => 'Jetty 5A RU V Balikpapan',
                        'MT Serang Jaya' => 'MT Serang Jaya',
                        'MT Cenderawasih' => 'MT Cenderawasih',
                        'AKR Palaran' => 'AKR Palaran',
                        'MT Sindang' => 'MT Sindang',
                        'MT Griya Cirebon' => 'MT Griya Cirebon',
                        'MT Gunung Kemala' => 'MT Gunung Kemala',
                        'Jetty Interport' => 'Jetty Interport',
                    ]),
                Forms\Components\DatePicker::make('tanggal_loading')
                    ->date()
                    ->required(),
                Forms\Components\DatePicker::make('tanggal_unloading')
                    ->date()
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
                    ->options([
                        'Biosolar' => 'Biosolar',
                        'LSFO 180' => 'LSFO 180',
                        'MFO 180' => 'MFO 180',
                        'ADO' => 'ADO',
                    ]),
                Forms\Components\TextInput::make('tongkang')
                    ->required()
                    ->options([
                        'SPOB Golden Puma' => 'SPOB Golden Puma',
                        'SPOB Kencana Kumala' => 'SPOB Kencana Kumala',
                        'Sultan Sulaiman' => 'Sultan Sulaiman',
                        'SPOB Cheetah' => 'SPOB Cheetah',
                        'SPOB Alvina 03' => 'SPOB Alvina 03',
                        'Royal 45' => 'Royal 45',
                        'SPOB Kertabumi' => 'SPOB Kertabumi',
                        'Borneo Perkasa' => 'Borneo Perkasa',
                        'Ratu Juwita' => 'Ratu Juwita',
                        'Queen Sofia' => 'Queen Sofia',
                        'SPOB BBSS 27' => 'SPOB BBSS 27',
                        'SKK 9' => 'SKK 9',
                        'Ratu Zainab' => 'Ratu Zainab',
                    ]),
                Forms\Components\TextInput::make('tugboat')
                    ->required()
                    ->options([
                        'SPOB Golden Puma' => 'SPOB Golden Puma',
                        'SPOB Kencana Kumala' => 'SPOB Kencana Kumala',
                        'Sultan Sulaiman' => 'Sultan Sulaiman',
                        'SPOB Cheetah' => 'SPOB Cheetah',
                        'SPOB Alvina 03' => 'SPOB Alvina 03',
                        'Pradipta 05' => 'Pradipta 05',
                        'SPOB Kertabumi' => 'SPOB Kertabumi',
                        'Borneo Perkasa' => 'Borneo Perkasa',
                        'Pipit Nusantara' => 'Pipit Nusantara',
                        'Lembu Buana' => 'Lembu Buana',
                        'SPOB BBSS 27' => 'SPOB BBSS 27',
                        'SKK 9' => 'SKK 9',
                        'Ratu Zainab' => 'Ratu Zainab',
                    ]),
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
