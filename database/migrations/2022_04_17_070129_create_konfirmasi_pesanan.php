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
        Schema::create('konfirmasi_pesanan', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('id_pesanan');
            $table->string('nama_lengkap');
            $table->string('no_ktp');
            $table->string('alamat');
            $table->string('no_hp');
            $table->string('pilihan_paket');
            $table->string('metode_pembayaran');
            $table->string('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('konfirmasi_pesanan');
    }
};
