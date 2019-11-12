<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArbitroPartidoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arbitro_partido', function (Blueprint $table) {
            $table->integer('partido_id')->unsigned();
            //$table->foreign('partido_id')->references('Id')->on('partidos');
            $table->integer('arbitro_id')->unsigned();
            //$table->foreign('arbitro_id')->references('Id')->on('arbitros');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('arbitro_partido');
    }
}
