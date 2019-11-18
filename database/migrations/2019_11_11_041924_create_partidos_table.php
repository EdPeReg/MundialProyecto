<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partidos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cancha_id')->unsigned()->notnullable();
            $table->integer('arbitro_id')->unsigned()->notnullable();
            $table->timestamp('Fecha')->notnullable();
            $table->integer('Resultado_eq1')->unsigned()->nullable();
            $table->integer('Resultado_eq2')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('cancha_id')->references('id')->on('canchas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('arbitro_id')->references('id')->on('arbitros')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('partidos');
    }
}
