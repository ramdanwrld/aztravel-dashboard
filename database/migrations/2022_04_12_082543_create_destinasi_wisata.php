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
        Schema::create('destinasi_wisata', function (Blueprint $table) {
            $table->increments('id_destinasi_wisata')->start_from(1);
            $table->string('nama_destinasi_wisata');
            $table->string('lokasi_destinasi_wisata');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('destinasi_wisata');
    }
};
