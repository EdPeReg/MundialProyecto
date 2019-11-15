<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClubJugadorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('club_jugador', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('club_id')->unsigned();
            $table->integer('jugador_id')->unsigned();

            $table->foreign('club_id')->references('id')->on('clubs')->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreign('jugador_id')->references('id')->on('jugadors')->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('club_jugador');
    }
}
