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
        Schema::create('directions', function (Blueprint $table) {
            $table->id();
            $table->integer("id_direction");
            $table->integer("id_user");
            $table->integer("id_kendaraan");
            $table->string("halte");
            $table->string("lokasi_awal");
            $table->string("lokasi_tujuan");
            $table->string("instruksi");
            $table->integer("jam_keberangkatan");
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
        Schema::dropIfExists('directions');
    }
};
