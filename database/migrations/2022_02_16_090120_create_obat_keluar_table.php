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
        Schema::create('obat_keluar', function (Blueprint $table) {
            $table->id();
            $table->string('id_transaksi');
            $table->string('kode_obat');
            $table->integer('jumlah_jual');
            $table->integer('kode_apoteker');
            $table->date('tgl_beli');
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
        Schema::dropIfExists('obat_keluar');
    }
};
