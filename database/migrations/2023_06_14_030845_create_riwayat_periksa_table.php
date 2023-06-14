<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riwayat_periksa', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pasien_id')->constrained('pasien');
            $table->foreignId('poli_id')->constrained('ms_poli');
            $table->date('tanggal');
            $table->text('keluhan');
            $table->text('diagnosa');
            $table->text('tindakan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('riwayat_periksa');
    }
};
