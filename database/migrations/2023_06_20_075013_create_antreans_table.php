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
        Schema::create('antreans', function (Blueprint $table) {
            $table->increments('id_antrean');
            $table->unsignedInteger('id_pasien')->length(10);
            $table->foreign('id_pasien')->references('id_pasien')->on('pasiens');
            $table->unsignedInteger('id_dokter')->length(10);
            $table->foreign('id_dokter')->references('id_dokter')->on('dokters');
            $table->string('status');
            $table->dateTime('jam_temu');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('antreans');
    }
};