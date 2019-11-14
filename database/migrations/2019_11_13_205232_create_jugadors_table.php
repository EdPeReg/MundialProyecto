<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJugadorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jugadors', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('Num_i')->unique()->unsigned()->notnullable();
            $table->text('Primer_nombre')->notnullable();
            $table->text('Apellido')->notnullable();
            $table->text('Nacionalidad')->notnullable();
            $table->text('Posicion')->notnullable();
            $table->float('Peso')->unsigned()->notnullable()->default(0.00);
            $table->float('Altura')->unsigned()->notnullable()->default(0.00);
            $table->date('Fecha_nac')->notnullable();
            $table->integer('Goles_mun')->unsigned()->nullable()->default(0);
            $table->integer('Num_playera')->unsigned()->notnullable()->default(0);
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
        Schema::dropIfExists('jugadors');
    }
}
