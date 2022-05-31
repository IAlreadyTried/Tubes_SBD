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
        Schema::create('haltes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kendaraan_id');
            $table->string("nama");
            $table->string("namajalan");
            $table->string("lokasi");
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
        Schema::dropIfExists('haltes');
    }
};
