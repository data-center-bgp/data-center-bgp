<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cycle_time_c_o_a_s', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->dateTime('waktu');
            $table->string('trip');
            $table->string('fleet');
            $table->string('tugboat_spob');
            $table->string('ob_spob');
            $table->string('rute');
            $table->integer('estimasi_fuel');
            $table->integer('actual_fuel')->nullable();
            $table->dateTime('mulai_dari_jetty_loading')->nullable();
            $table->dateTime('order_tugboat_masuk_jetty_loading')->nullable();
            $table->dateTime('mulai_naik_jangkar_jetty_loading')->nullable();
            $table->dateTime('selesai_naik_jangkar_jetty_loading')->nullable();
            $table->dateTime('proses_connect_jetty_loading')->nullable();
            $table->dateTime('berlabuh_jetty_loading')->nullable();
            $table->dateTime('loading_master_onboard_jetty_loading')->nullable();
            $table->dateTime('mulai_loading_jetty_loading')->nullable();
            $table->dateTime('selesai_loading_jetty_loading')->nullable();
            $table->dateTime('mulai_sounding_jetty_loading')->nullable();
            $table->dateTime('selesai_sounding_jetty_loading')->nullable();
            $table->dateTime('order_tugboat_keluar_jetty_loading')->nullable();
            $table->dateTime('proses_keluar_jetty_loading')->nullable();
            $table->dateTime('cast_off_jetty_loading')->nullable();
            $table->dateTime('full_away_sts')->nullable();
            $table->dateTime('tiba_di_sts')->nullable();
            $table->dateTime('order_tugboat_masuk_sts')->nullable();
            $table->dateTime('proses_masuk_sts')->nullable();
            $table->dateTime('berlabuh_sts')->nullable();
            $table->dateTime('loading_master_onboard_sts')->nullable();
            $table->dateTime('mulai_loading_sts')->nullable();
            $table->dateTime('selesai_loading_sts')->nullable();
            $table->dateTime('mulai_sounding_sts')->nullable();
            $table->dateTime('selesai_sounding_sts')->nullable();
            $table->dateTime('order_tugboat_keluar_sts')->nullable();
            $table->dateTime('proses_keluar_sts')->nullable();
            $table->dateTime('cast_off_sts')->nullable();
            $table->dateTime('full_away_jetty_discharge')->nullable();
            $table->dateTime('tiba_di_jetty_discharge')->nullable();
            $table->dateTime('order_tugboat_masuk_jetty_discharge')->nullable();
            $table->dateTime('mulai_naik_jangkar_jetty_discharge')->nullable();
            $table->dateTime('selesai_naik_jangkar_jetty_discharge')->nullable();
            $table->dateTime('proses_masuk_jetty_discharge')->nullable();
            $table->dateTime('berlabuh_jetty_discharge')->nullable();
            $table->dateTime('loading_master_onboard_jetty_discharge')->nullable();
            $table->dateTime('mulai_discharge_jetty_discharge')->nullable();
            $table->dateTime('selesai_discharge_jetty_discharge')->nullable();
            $table->dateTime('document_cargo_onboard_jetty_discharge')->nullable();
            $table->dateTime('order_tugboat_keluar_jetty_discharge')->nullable();
            $table->dateTime('proses_keluar_jetty_discharge')->nullable();
            $table->dateTime('cast_off_jetty_discharge')->nullable();
            $table->dateTime('tiba_di_pulau_atas')->nullable();
            $table->dateTime('full_away_setelah_discharge')->nullable();
            $table->dateTime('selesai_satu_cycle')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cycle_time_c_o_a_s');
    }
};
