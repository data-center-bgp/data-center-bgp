<?php

namespace App\Imports;

use App\Models\CycleTimeCOA;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CycleTimeCOAImport implements ToModel, WithHeadingRow
{
    use Importable;

    public function model(array $row)
    {
        $user_id = isset($row['user_id']) ? $row['user_id'] : null;

        return new CycleTimeCOA([
            'user_id' => $user_id,
            'waktu' => $row['waktu'],
            'rute' => $row['rute'],
            'fleet' => $row['fleet'],
            'tugboat_spob' => $row['tugboat_spob'],
            'ob_spob' => $row['ob_spob'],
            'estimasi_fuel' => $row['estimasi_fuel'],
            'actual_fuel' => $row['actual_fuel'],
            'mulai_dari_jetty_loading' => $row['mulai_dari_jetty_loading'],
            'order_tugboat_masuk_jetty_loading' => $row['order_tugboat_masuk_jetty_loading'],
            'mulai_naik_jangkar_jetty_loading' => $row['mulai_naik_jangkar_jetty_loading'],
            'selesai_naik_jangkar_jetty_loading' => $row['selesai_naik_jangkar_jetty_loading'],
            'proses_connect_jetty_loading' => $row['proses_connect_jetty_loading'],
            'berlabuh_jetty_loading' => $row['berlabuh_jetty_loading'],
            'loading_master_onboard_jetty_loading' => $row['loading_master_onboard_jetty_loading'],
            'mulai_loading_jetty_loading' => $row['mulai_loading_jetty_loading'],
            'selesai_loading_jetty_loading' => $row['selesai_loading_jetty_loading'],
            'mulai_sounding_jetty_loading' => $row['mulai_sounding_jetty_loading'],
            'selesai_sounding_jetty_loading' => $row['selesai_sounding_jetty_loading'],
            'order_tugboat_keluar_jetty_loading' => $row['order_tugboat_keluar_jetty_loading'],
            'proses_keluar_jetty_loading' => $row['proses_keluar_jetty_loading'],
            'cast_off_jetty_loading' => $row['cast_off_jetty_loading'],
            'full_away_sts' => $row['full_away_sts'],
            'tiba_di_sts' => $row['tiba_di_sts'],
            'order_tugboat_masuk_sts' => $row['order_tugboat_masuk_sts'],
            'proses_masuk_sts' => $row['proses_masuk_sts'],
            'berlabuh_sts' => $row['berlabuh_sts'],
            'loading_master_onboard_sts' => $row['loading_master_onboard_sts'],
            'mulai_loading_sts' => $row['mulai_loading_sts'],
            'selesai_loading_sts' => $row['selesai_loading_sts'],
            'mulai_sounding_sts' => $row['mulai_sounding_sts'],
            'selesai_sounding_sts' => $row['selesai_sounding_sts'],
            'order_tugboat_keluar_sts' => $row['order_tugboat_keluar_sts'],
            'proses_keluar_sts' => $row['proses_keluar_sts'],
            'cast_off_sts' => $row['cast_off_sts'],
            'full_away_jetty_discharge' => $row['full_away_jetty_discharge'],
            'tiba_di_jetty_discharge' => $row['tiba_di_jetty_discharge'],
            'order_tugboat_masuk_jetty_discharge' => $row['order_tugboat_masuk_jetty_discharge'],
            'mulai_naik_jangkar_jetty_discharge' => $row['mulai_naik_jangkar_jetty_discharge'],
            'selesai_naik_jangkar_jetty_discharge' => $row['selesai_naik_jangkar_jetty_discharge'],
            'proses_masuk_jetty_discharge' => $row['proses_masuk_jetty_discharge'],
            'berlabuh_jetty_discharge' => $row['berlabuh_jetty_discharge'],
            'loading_master_onboard_jetty_discharge' => $row['loading_master_onboard_jetty_discharge'],
            'mulai_discharge_jetty_discharge' => $row['mulai_discharge_jetty_discharge'],
            'selesai_discharge_jetty_discharge' => $row['selesai_discharge_jetty_discharge'],
            'document_cargo_onboard_jetty_discharge' => $row['document_cargo_onboard_jetty_discharge'],
            'order_tugboat_keluar_jetty_discharge' => $row['order_tugboat_keluar_jetty_discharge'],
            'proses_keluar_jetty_discharge' => $row['proses_keluar_jetty_discharge'],
            'cast_off_jetty_discharge' => $row['cast_off_jetty_discharge'],
            'tiba_di_pulau_atas' => $row['tiba_di_pulau_atas'],
            'full_away_setelah_discharge' => $row['full_away_setelah_discharge'],
            'selesai_satu_cycle' => $row['selesai_satu_cycle'],
        ]);
    }
}
