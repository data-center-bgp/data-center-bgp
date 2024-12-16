<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CargoTcCoaResource\Pages;
use App\Models\CargoTcCoa;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class CargoTcCoaResource extends Resource
{
    protected static ?string $model = CargoTcCoa::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('tc_coa')
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
                        'Jetty I RU V BPP' => 'Jetty I RU V BPP',
                        'Jetty II RU V BPP' => 'Jetty II RU V BPP',
                        'Jetty III RU V BPP' => 'Jetty III RU V BPP',
                        'Jetty IV RU V BPP' => 'Jetty IV RU V BPP',
                        'Jetty V RU V BPP' => 'Jetty V RU V BPP',
                        'Jetty Kotabaru' => 'Jetty Kotabaru',
                        'MT Sindang' => 'MT Sindang',
                        'MT Sengeti' => 'MT Sengeti',
                        'MT Gunung Kemala' => 'MT Gunung Kemala',
                        'MT Serang Jaya' => 'MT Serang Jaya',
                        'MT Sepinggan' => 'MT Sepinggan',
                        'MT Sanga-Sanga' => 'MT Sanga-Sanga',
                        'MT Victory' => 'MT Victory',
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
                    ->searchable()
                    ->options([
                        'Samarinda & Muara' => 'Samarinda & Muara',
                        'Berau' => 'Berau',
                        'Banjarmasin' => 'Banjarmasin',
                    ]),
                Forms\Components\TextInput::make('nomor_bl')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('jenis')
                    ->required()
                    ->searchable()
                    ->options([
                        'Ado' => 'Ado',
                        'Biosolar' => 'Biosolar',
                        'Pertalite' => 'Pertalite',
                        'Pertamax' => 'Pertamax',
                    ]),
                Forms\Components\TextInput::make('tongkang')
                    ->required()
                    ->searchable()
                    ->options([
                        'Queen Sofia' => 'Queen Sofia',
                        'Ratu Sapphire' => 'Ratu Sapphire',
                        'Ratu Zulaikha' => 'Ratu Zulaikha',
                        'PGM 1' => 'PGM 1',
                        'GP 9' => 'GP 9',
                        'Kendedes' => 'Kendedes',
                        'Kertabumi' => 'Kertabumi',
                        'Sea Royal 9' => 'Sea Royal 9',
                        'Ratu Yamani' => 'Ratu Yamani',
                        'Ratu Malika' => 'Ratu Malika',
                        'Ratu Maryam' => 'Ratu Maryam',
                        'Royal Rey' => 'Royal Rey',
                        'Royal 45' => 'Royal 45',
                        'Ratu Syahrah' => 'Ratu Syahrah',
                        'Ratu Juwita' => 'Ratu Juwita',
                        'OB Mapan 27027' => 'Ratu Mapan 27027',
                    ]),
                Forms\Components\TextInput::make('tugboat')
                    ->required()
                    ->searchable()
                    ->options([
                        'Pradipta 05' => 'Pradipta 05',
                        'TB Wira Pratama' => 'TB Wira Pratama',
                        'Merpati Nusantara' => 'Merpati Nusantara',
                        'SPOB Ratu Zulaikha' => 'SPOB Ratu Zulaikha',
                        'Cenderawasih Nusantara' => 'Cenderawasih Nusantara',
                        'Pipit Nusantara' => 'Pipit Nusantara',
                        'TB BB99' => 'TB BB99',
                        'Lembu Buana' => 'Lembu Buana',
                        'Pesut Pendingin' => 'Pesut Pendingin',
                        'SPOB Kertabumi' => 'SPOB Kertabumi',
                        'Armada Samudra 9' => 'Armada Samudra 9',
                        'SPOB Ratu Yamani' => 'SPOB Ratu Yamani',
                        'Losari' => 'Losari',
                        'Kencana Laut' => 'Kencana Laut',
                        'TB Rajawali Nusantara' => 'TB Rajawali Nusantara',
                        'Ekuator 15' => 'Ekuator 15',
                        'Pipit Nusantara' => 'Pipit Nusantara',
                        'Royal Rey' => 'Royal Rey',
                        'Yuddi 01' => 'Yuddi 01',
                    ]),
                Forms\Components\TextInput::make('rute_awal')
                    ->required()
                    ->searchable()
                    ->options([
                        'Balikpapan' => 'Balikpapan',
                        'Samarinda' => 'Samarinda',
                        'Kotabaru' => 'Kotabaru',
                        'STS Balikpapan' => 'STS Balikpapan',
                    ]),
                Forms\Components\TextInput::make('rute_akhir')
                    ->required()
                    ->searchable()
                    ->options([
                        'STS Balikpapan' => 'STS Balikpapan',
                        'Balikpapan' => 'Balikpapan',
                        'Samarinda' => 'Samarinda',
                        'Muara Kembang' => 'Muara Kembang',
                        'Banjarmasin' => 'Banjarmasin',
                        'Berau' => 'Berau',
                    ]),
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
                Forms\Components\TextInput::make('volume_capacity_100pct_observed')
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
                Tables\Columns\TextColumn::make('volume_capacity_100pct_observed')
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
        return 'Cargo COA';
    }

    public static function getPluralModelLabel(): string
    {
        return 'Cargo COA';
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCargoTcCoas::route('/'),
            'create' => Pages\CreateCargoTcCoa::route('/create'),
            'edit' => Pages\EditCargoTcCoa::route('/{record}/edit'),
        ];
    }
}
