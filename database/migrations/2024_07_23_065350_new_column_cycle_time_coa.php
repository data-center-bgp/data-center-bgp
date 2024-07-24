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
        Schema::table('cycle_time_c_o_a_s', function (Blueprint $table) {
            $table->text('bulan');
            $table->text('tahun');
            $table->text('fuel_status')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cycle_time_c_o_a_s', function (Blueprint $table) {
            $table->dropColumn('bulan');
            $table->dropColumn('tahun');
            $table->dropColumn('fuel_status');
        });
    }
};
