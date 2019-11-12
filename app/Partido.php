<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partido extends Model
{
     protected $fillable = ['Fecha', 'Resultado_eq1', 'Resultado_eq2'];

    protected $guarded = ['Id'];


    /**
     * Los Arbitros que pertenecen al partido.
     **/
    public function arbitros() {
        return $this->belongsToMany(Arbitro::class);
    }

    /**
     * Los Euipos que pertenecen al partido.
     */
    public function equipos() {
    	return $this->belongsToMany(Equipo::class);
    }
}
