<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAntidopingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('antidopings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('jugador_id')->unsigned();
            $table->text('Resultado')->notnullable();
            $table->text('Lugar')->notnullable();
            $table->timestamp('Fecha')->notnullable();
            $table->timestamps();

            $table->foreign('jugador_id')->references('id')->on('jugadors')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('antidopings');
    }
}
