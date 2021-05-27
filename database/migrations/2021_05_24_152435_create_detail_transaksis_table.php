<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_transaksis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idTransaksi');
            $table->unsignedBigInteger('idMakanan');
            $table->string("namaBarang");
            $table->decimal("jumlahPembelian");
            $table->decimal("harga");
            $table->timestamps();
            $table->foreign('idTransaksi')->references('id')->on('transaksis');
            $table->foreign('idMakanan')->references('id')->on('makanans');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_transaksis');
    }
}
