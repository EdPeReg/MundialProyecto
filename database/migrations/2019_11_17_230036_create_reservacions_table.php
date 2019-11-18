<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservacions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('equipo_id')->unsigned()->notnullable();
            $table->integer('hotel_id')->unsigned()->notnullable();
            $table->integer('Num_habitaciones')->unsigned()->notnullable();
            $table->integer('Duracion')->unsigned()->notnullable();
            $table->date('Fecha_entrada')->notnullable();
            $table->date('Fecha_salida')->notnullable();
            $table->timestamps();

            $table->foreign('equipo_id')->references('id')->on('equipos')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('hotel_id')->references('id')->on('hotels')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservacions');
    }
}
