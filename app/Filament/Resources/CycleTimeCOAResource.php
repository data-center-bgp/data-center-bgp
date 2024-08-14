<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CycleTimeCOAResource\Pages;
use App\Models\CycleTimeCOA;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class CycleTimeCOAResource extends Resource
{
    protected static ?string $model = CycleTimeCOA::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Hidden::make('user_id')
                    ->default(auth()->id())
                    ->required(),
                Forms\Components\DatePicker::make('waktu')
                    ->label('Waktu Keberangkatan')
                    ->required(),
                Forms\Components\TextInput::make('tahun')
                    ->required()
                    ->label('Tahun Keberangkatan'),
                Forms\Components\Select::make('bulan')
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
                    ->required()
                    ->label('Bulan Keberangkatan'),
                Forms\Components\TextInput::make('trip')
                    ->required()
                    ->maxLength(200),
                Forms\Components\Select::make('fleet')
                    ->options([
                        'I' => 'I',
                        'II' => 'II',
                        'III' => 'III',
                        'IV' => 'IV',
                    ])
                    ->required(),
                Forms\Components\Select::make('tugboat_spob')
                    ->options([
                        'TB-Merpati Nusantara' => 'TB-Merpati Nusantara',
                        'TB-BB 9' => 'TB-BB 9',
                        'TB-Galaxy Gemilang 9' => 'TB-Galaxy Gemilang 9',
                        'TB-Lembu Buana II' => 'TB-Lembu Buana II',
                        'TB-Jalesveva' => 'TB-Jalesveva',
                        'TB-Losari' => 'TB-Losari',
                        'TB-Pipit Nusantara' => 'TB-Pipit Nusantara',
                        'TB-Cenderawasih Nusantara' => 'TB-Cenderawasih Nusantara',
                        'TB-Pradipta 05' => 'TB-Pradipta 05',
                        'AHT-Shine' => 'AHT-Shine',
                        'UB-Ken Arok 9' => 'UB-Ken Arok 9',
                        'TB-Armada Samudra 9' => 'TB-Armada Samudra 9',
                        'UV-Setia Satria' => 'UV-Setia Satria',
                        'TB-Wira Pratama' => 'TB-Wira Pratama',
                        'TB-Elang Nusantara' => 'TB-Elang Nusantara',
                        'TB-Yuddy 01' => 'TB-Yuddy 01',
                        'TB-Pardipta 05' => 'TB-Pardipta 05',
                        'TB-Kencana Laut' => 'TB-Kencana Laut',
                    ])
                    ->label('Tugboat/SPOB')
                    ->required(),
                Forms\Components\Select::make('ob_spob')
                    ->options([
                        'OB-Ratu Saphire' => 'OB-Ratu Saphire',
                        'OB-PGM 1' => 'OB-PGM 1',
                        'OB-Kendedes' => 'OB-Kendedes',
                        'OB-Gemilang Perkasa 99' => 'OB-Gemilang Perkasa 99',
                        'SPOB-Ratu Zulaikha' => 'SPOB-Ratu Zulaikha',
                        'SPOB-Ratu Yamani' => 'SPOB-Ratu Yamani',
                        'OB-Ratu Malika' => 'OB-Ratu Malika',
                        'OB-Royal 45' => 'OB-Royal 45',
                        'OB-Ratu Syahrah' => 'OB-Ratu Syahrah',
                        'OB-Sea Royal 36' => 'OB-Sea Royal 36',
                        'OB-Gemilang Perkasa 9' => 'OB-Gemilang Perkasa 9',
                        'OB-Queen Sofia' => 'OB-Queen Sofia',
                        'OB-Ratu Maryam' => 'OB-Ratu Maryam',
                        'OB-Sea Royal 9' => 'OB-Sea Royal 9',
                        'OB-BB SAS 9' => 'OB-BB SAS 9',
                        'SPOB-Kertabumi' => 'SPOB-Kertabumi',
                    ])
                    ->label('OB/SPOB')
                    ->required(),
                Forms\Components\Select::make('rute')
                    ->options([
                        'Kotabaru-Samarinda' => 'Kotabaru-Samarinda',
                        'Balikpapan-Samarinda' => 'Balikpapan-Samarinda',
                        'Balikpapan-Berau' => 'Balikpapan-Berau',
                        'Kotabaru-Berau' => 'Kotabaru-Berau',
                        'EP Sanga-Sanga' => 'EP Sanga-Sanga',
                        'Sembakung-Bunyu' => 'Sembakung-Bunyu',
                        'Kotabaru-Banjarmasin' => 'Kotabaru-Banjarmasin',
                        'Balikpapan-Muara Kembang' => 'Balikpapan-Muara Kembang',
                        'Balikpapan-Banjarmasin' => 'Balikpapan-Banjarmasin',
                        'Anggana-Balikpapan' => 'Anggana-Balikpapan',
                        'Banjarmasin-Kotabaru' => 'Banjarmasin-Kotabaru',
                        'Banjarmasin-Balikpapan' => 'Banjarmasin-Balikpapan',
                    ])
                    ->required(),
                Forms\Components\TextInput::make('estimasi_fuel')
                    ->label('Estimasi Fuel')
                    ->required()
                    ->maxLength(200),
                Forms\Components\TextInput::make('actual_fuel')
                    ->label('Actual Fuel')
                    ->maxLength(200),
                Forms\Components\Select::make('fuel_status')
                    ->nullable()
                    ->options([
                        'Normal' => 'Normal',
                        'Over' => 'Over',
                    ]),
                Forms\Components\DateTimePicker::make('mulai_dari_jetty_loading')
                    ->label('Mulai dari Jetty Loading')
                    ->nullable(),
                Forms\Components\DateTimePicker::make('order_tugboat_masuk_jetty_loading')
                    ->label('Order Tugboat Masuk - Jetty Loading')
                    ->nullable(),
                Forms\Components\DateTimePicker::make('mulai_naik_jangkar_jetty_loading')
                    ->label('Mulai Naik Jangkar - Jetty Loading')
                    ->nullable(),
                Forms\Components\DateTimePicker::make('selesai_naik_jangkar_jetty_loading')
                    ->label('Selesai Naik Jangkar - Jetty Loading')
                    ->nullable(),
                Forms\Components\DateTimePicker::make('proses_connect_jetty_loading')
                    ->label('Proses Connect Masuk - Jetty Loading')
                    ->nullable(),
                Forms\Components\DateTimePicker::make('berlabuh_jetty_loading')
                    ->label('Berlabuh - Jetty Loading')
                    ->nullable(),
                Forms\Components\DateTimePicker::make('loading_master_onboard_jetty_loading')
                    ->label('Loading Master Onboard - Jetty Loading')
                    ->nullable(),
                Forms\Components\DateTimePicker::make('mulai_loading_jetty_loading')
                    ->label('Mulai Loading - Jetty Loading')
                    ->nullable(),
                Forms\Components\DateTimePicker::make('selesai_loading_jetty_loading')
                    ->label('Selesai Loading - Jetty Loading')
                    ->nullable(),
                Forms\Components\DateTimePicker::make('mulai_sounding_jetty_loading')
                    ->label('Mulai Sounding - Jetty Loading')
                    ->nullable(),
                Forms\Components\DateTimePicker::make('selesai_sounding_jetty_loading')
                    ->label('Selesai Sounding - Jetty Loading')
                    ->nullable(),
                Forms\Components\DateTimePicker::make('order_tugboat_keluar_jetty_loading')
                    ->label('Order Tugboat Keluar - Jetty Loading')
                    ->nullable(),
                Forms\Components\DateTimePicker::make('proses_keluar_jetty_loading')
                    ->label('Proses Keluar - Jetty Loading')
                    ->nullable(),
                Forms\Components\DateTimePicker::make('cast_off_jetty_loading')
                    ->label('Cast Off - Jetty Loading')
                    ->nullable(),
                Forms\Components\DateTimePicker::make('full_away_sts')
                    ->label('Full Away - STS')
                    ->nullable(),
                Forms\Components\DateTimePicker::make('tiba_di_sts')
                    ->label('Tiba di STS')
                    ->nullable(),
                Forms\Components\DateTimePicker::make('order_tugboat_masuk_sts')
                    ->label('Order Tugboat Masuk - STS')
                    ->nullable(),
                Forms\Components\DateTimePicker::make('proses_masuk_sts')
                    ->label('Proses Masuk - STS')
                    ->nullable(),
                Forms\Components\DateTimePicker::make('berlabuh_sts')
                    ->label('Berlabuh - STS')
                    ->nullable(),
                Forms\Components\DateTimePicker::make('loading_master_onboard_sts')
                    ->label('Loading Master Onboard - STS')
                    ->nullable(),
                Forms\Components\DateTimePicker::make('mulai_loading_sts')
                    ->label('Mulai Loading - STS')
                    ->nullable(),
                Forms\Components\DateTimePicker::make('selesai_loading_sts')
                    ->label('Selesai Loading - STS')
                    ->nullable(),
                Forms\Components\DateTimePicker::make('mulai_sounding_sts')
                    ->label('Mulai Sounding - STS')
                    ->nullable(),
                Forms\Components\DateTimePicker::make('selesai_sounding_sts')
                    ->label('Selesai Sounding - STS')
                    ->nullable(),
                Forms\Components\DateTimePicker::make('order_tugboat_keluar_sts')
                    ->label('Order Tugboat Keluar - STS')
                    ->nullable(),
                Forms\Components\DateTimePicker::make('proses_keluar_sts')
                    ->label('Proses Keluar - STS')
                    ->nullable(),
                Forms\Components\DateTimePicker::make('cast_off_sts')
                    ->label('Cast Off - STS')
                    ->nullable(),
                Forms\Components\DateTimePicker::make('full_away_jetty_discharge')
                    ->label('Full Away - Jetty Discharge')
                    ->nullable(),
                Forms\Components\DateTimePicker::make('tiba_di_jetty_discharge')
                    ->label('Tiba di Jetty Discharge')
                    ->nullable(),
                Forms\Components\DateTimePicker::make('order_tugboat_masuk_jetty_discharge')
                    ->label('Order Tugboat Masuk - Jetty Discharge')
                    ->nullable(),
                Forms\Components\DateTimePicker::make('mulai_naik_jangkar_jetty_discharge')
                    ->label('Mulai Naik Jangkar - Jetty Discharge')
                    ->nullable(),
                Forms\Components\DateTimePicker::make('selesai_naik_jangkar_jetty_discharge')
                    ->label('Selesai Naik Jangkar - Jetty Discharge')
                    ->nullable(),
                Forms\Components\DateTimePicker::make('proses_masuk_jetty_discharge')
                    ->label('Proses Masuk - Jetty Discharge')
                    ->nullable(),
                Forms\Components\DateTimePicker::make('loading_master_onboard_jetty_discharge')
                    ->label('Loading Master Onboard - Jetty Discharge')
                    ->nullable(),
                Forms\Components\DateTimePicker::make('mulai_discharge_jetty_discharge')
                    ->label('Mulai Discharge - Jetty Discharge')
                    ->nullable(),
                Forms\Components\DateTimePicker::make('selesai_discharge_jetty_discharge')
                    ->label('Selesai Discharge - Jetty Discharge')
                    ->nullable(),
                Forms\Components\DateTimePicker::make('document_cargo_onboard_jetty_discharge')
                    ->label('Document Cargo Onboard - Jetty Discharge')
                    ->nullable(),
                Forms\Components\DateTimePicker::make('order_tugboat_keluar_jetty_discharge')
                    ->label('Order Tugboat Keluar - Jetty Discharge')
                    ->nullable(),
                Forms\Components\DateTimePicker::make('proses_keluar_jetty_discharge')
                    ->label('Proses Keluar - Jetty Discharge')
                    ->nullable(),
                Forms\Components\DateTimePicker::make('cast_off_jetty_discharge')
                    ->label('Cast Off - Jetty Discharge')
                    ->nullable(),
                Forms\Components\DateTimePicker::make('tiba_di_pulau_atas')
                    ->label('Tiba di Pulau Atas')
                    ->nullable(),
                Forms\Components\DateTimePicker::make('full_away_setelah_discharge')
                    ->label('Full Away Setelah Discharge')
                    ->nullable(),
                Forms\Components\DateTimePicker::make('selesai_satu_cycle')
                    ->label('Kembali ke Posisi Awal (Satu Cycle)')
                    ->nullable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('waktu')
                    ->date()
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('tahun')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('bulan')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('trip')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('fleet')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('tugboat_spob')
                    ->sortable()
                    ->label('Tugboat/SPOB')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ob_spob')
                    ->sortable()
                    ->label('OB/SPOB')
                    ->searchable(),
                Tables\Columns\TextColumn::make('rute')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('estimasi_fuel')
                    ->label('Estimasi Fuel'),
                Tables\Columns\TextColumn::make('actual_fuel')
                    ->label('Actual Fuel'),
                Tables\Columns\TextColumn::make('fuel_status')
                    ->searchable()
                    ->sortable()
                    ->label('Fuel Status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'Normal' => 'success',
                        'Over' => 'danger',
                    }),
                Tables\Columns\TextColumn::make('mulai_dari_jetty_loading')
                    ->dateTime()
                    ->label('Mulai dari Jetty Loading'),
                Tables\Columns\TextColumn::make('order_tugboat_masuk_jetty_loading')
                    ->dateTime()
                    ->label('Order Tugboat Masuk Jetty Loading'),
                Tables\Columns\TextColumn::make('mulai_naik_jangkar_jetty_loading')
                    ->dateTime()
                    ->label('Mulai Naik Jangkar Jetty Loading'),
                Tables\Columns\TextColumn::make('selesai_naik_jangkar_jetty_loading')
                    ->dateTime()
                    ->label('Selesai Naik Jangkar Jetty Loading'),
                Tables\Columns\TextColumn::make('proses_connect_jetty_loading')
                    ->label('Proses Connect Jetty Loading')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('berlabuh_jetty_loading')
                    ->label('Berlabuh Jetty Loading')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('loading_master_onboard_jetty_loading')
                    ->label('Loading Master Onboard Jetty Loading')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('mulai_loading_jetty_loading')
                    ->label('Mulai Loading Jetty Loading')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('selesai_loading_jetty_loading')
                    ->label('Selesai Loading Jetty Loading')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('mulai_sounding_jetty_loading')
                    ->label('Mulai Sounding Jetty Loading')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('selesai_sounding_jetty_loading')
                    ->label('Selesai Sounding Jetty Loading')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('order_tugboat_keluar_jetty_loading')
                    ->label('Order Tugboat Keluar Jetty Loading')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('proses_keluar_jetty_loading')
                    ->label('Proses Keluar Jetty Loading')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('cast_off_jetty_loading')
                    ->label('Cast Off Jetty Loading')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('full_away_sts')
                    ->label('Full Away STS')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('tiba_di_sts')
                    ->label('Tiba di STS')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('order_tugboat_masuk_sts')
                    ->label('Order Tugboat Masuk STS')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('proses_masuk_sts')
                    ->label('Proses Masuk STS')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('berlabuh_sts')
                    ->label('Berlabuh STS')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('loading_master_onboard_sts')
                    ->label('Loading Master Onboard STS')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('mulai_loading_sts')
                    ->label('Mulai Loading STS')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('selesai_loading_sts')
                    ->label('Selesai Loading STS')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('mulai_sounding_sts')
                    ->label('Mulai Sounding STS')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('selesai_sounding_sts')
                    ->label('Selesai Sounding STS')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('order_tugboat_keluar_sts')
                    ->label('Order Tugboat Keluar STS')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('proses_keluar_sts')
                    ->label('Proses Keluar STS')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('cast_off_sts')
                    ->label('Cast Off STS')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('full_away_jetty_discharge')
                    ->label('Full Away Jetty Discharge')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('tiba_di_jetty_discharge')
                    ->label('Tiba di Jetty Discharge')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('order_tugboat_masuk_jetty_discharge')
                    ->label('Order Tugboat Masuk Jetty Discharge')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('mulai_naik_jangkar_jetty_discharge')
                    ->label('Mulai Naik Jangkar Jetty Discharge')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('selesai_naik_jangkar_jetty_discharge')
                    ->label('Selesai Naik Jangkar Jetty Discharge')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('proses_masuk_jetty_discharge')
                    ->label('Proses Masuk Jetty Discharge')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('berlabuh_jetty_discharge')
                    ->label('Berlabuh Jetty Discharge')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('loading_master_onboard_jetty_discharge')
                    ->label('Loading Master Onboard Jetty Discharge')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('mulai_discharge_jetty_discharge')
                    ->label('Mulai Discharge Jetty Discharge')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('selesai_discharge_jetty_discharge')
                    ->label('Selesai Discharge Jetty Discharge')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('document_cargo_onboard_jetty_discharge')
                    ->label('Document Cargo Onboard Jetty Discharge')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('order_tugboat_keluar_jetty_discharge')
                    ->label('Order Tugboat Keluar Jetty Discharge')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('proses_keluar_jetty_discharge')
                    ->label('Proses Keluar Jetty Discharge')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('cast_off_jetty_discharge')
                    ->label('Cast Off Jetty Discharge')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('tiba_di_pulau_atas')
                    ->label('Tiba di Pulau Atas')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('full_away_setelah_discharge')
                    ->label('Full Away Setelah Discharge')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('selesai_satu_cycle')
                    ->label('Selesai Satu Cycle')
                    ->dateTime(),
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
        return 'Cycle Time COA';
    }

    public static function getPluralModelLabel(): string
    {
        return 'Cycle Time COA';
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCycleTimeCOAS::route('/'),
            'create' => Pages\CreateCycleTimeCOA::route('/create'),
            'edit' => Pages\EditCycleTimeCOA::route('/{record}/edit'),
        ];
    }
}
