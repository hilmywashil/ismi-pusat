<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('anggota', function (Blueprint $table) {
        $table->dropColumn(['agama', 'sfc_hipmi', 'referensi_hipmi', 'organisasi_lain']);
    });
}

public function down()
{
    Schema::table('anggota', function (Blueprint $table) {
        $table->string('agama')->nullable();
        $table->string('sfc_hipmi')->nullable();
        $table->string('referensi_hipmi')->nullable();
        $table->string('organisasi_lain')->nullable();
    });
}
};
