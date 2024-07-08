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
        Schema::create('cargo_tc_coas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('tc_coa');
            $table->string('periode');
            $table->string('jetty_loading');
            $table->date('tanggal_loading');
            $table->date('tanggal_unloading');
            $table->integer('trip');
            $table->string('jenis_kontrak');
            $table->string('nomor_bl');
            $table->string('jenis');
            $table->string('tongkang');
            $table->string('tugboat');
            $table->string('rute_awal');
            $table->string('rute_akhir');
            $table->bigInteger('liters_at_15c');
            $table->bigInteger('net_liters_of_product');
            $table->bigInteger('barrels_60f_bill_of_lading');
            $table->bigInteger('barrels_60f_after_loading');
            $table->bigInteger('barrels_60f_before_discharge');
            $table->bigInteger('barrels_60f_after_receipt');
            $table->bigInteger('r1_60f');
            $table->bigInteger('r2_60f');
            $table->bigInteger('r3_60f');
            $table->bigInteger('r4_60f');
            $table->bigInteger('liters_at_15c_bill_of_lading');
            $table->bigInteger('liters_at_15c_after_loading');
            $table->bigInteger('liters_at_15c_before_discharge');
            $table->bigInteger('liters_at_15c_after_receipt');
            $table->bigInteger('diff_r1_2');
            $table->bigInteger('r1_2');
            $table->bigInteger('diff_r2_2');
            $table->bigInteger('r2_2');
            $table->bigInteger('diff_r3_2');
            $table->bigInteger('r3_2');
            $table->bigInteger('diff_r4_2');
            $table->bigInteger('r4_2');
            $table->bigInteger('losses');
            $table->bigInteger('volume_capacity_100pct_observed');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cargo_tc_coas');
    }
};
