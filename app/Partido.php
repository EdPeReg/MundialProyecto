<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partido extends Model
{
     protected $fillable = ['Fecha', 'Equipo1', 'Equipo2', 'Resultado_eq1',
 		'Resultado_eq2'];

    protected $guarded = ['Id'];
}
