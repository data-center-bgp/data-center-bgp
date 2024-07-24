<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::rename('cargo_tc_coas', 'data_cargo_coa');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::rename('data_cargo_coa', 'cargo_tc_coas');
    }
};
