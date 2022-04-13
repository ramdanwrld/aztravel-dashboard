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
        Schema::create('lihat_pesanan', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('id_pesanan');
            $table->string('nama_lengkap');
            $table->string('pilihan_paket');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lihat_pesanan');
    }
};
