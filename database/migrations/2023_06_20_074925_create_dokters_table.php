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
        Schema::create('dokters', function (Blueprint $table) {
            $table->increments('id_dokter');
            
            $table->unsignedInteger('id_poli')->length(10);
            $table->foreign('id_poli')->references('id_poli')->on('polis');

            $table->string('nama');
            $table->string('no_hp');
            $table->string('alamat');
            $table->time('jam_buka');
            $table->time('jam_tutup');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dokters');
    }
};