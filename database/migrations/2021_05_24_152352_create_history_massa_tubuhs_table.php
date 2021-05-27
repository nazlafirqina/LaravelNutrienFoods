<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoryMassaTubuhsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('history_massa_tubuhs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idUser');
            $table->decimal('height');
            $table->decimal('weight');
            $table->decimal('hasil');
            $table->timestamps();

            $table->foreign('idUser')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('history_massa_tubuhs');
    }
}
