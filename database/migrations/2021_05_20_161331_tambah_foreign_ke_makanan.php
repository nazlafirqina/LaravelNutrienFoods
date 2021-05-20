<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TambahForeignKeMakanan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('makanans', function (Blueprint $table) {
            $table->unsignedBigInteger('idTypeMakanan');
            $table->foreign('idTypeMakanan')->references('id')->on('tipe_makanans');
            $table->string('image')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('makanans', function (Blueprint $table) {
            $table->dropColumn('image');
            $table->dropForeign('idTypeMakanan');
            $table->dropColumn('idTypeMakanan');
        });
    }
}
