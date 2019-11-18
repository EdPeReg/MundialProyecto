<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partido extends Model
{
     protected $fillable = ['arbitro_id', 'cancha_id','Fecha', 'Resultado_eq1', 'Resultado_eq2'];

    protected $guarded = ['id'];

    public function equipos() {
    	return $this->belongsToMany('App\Equipo');
    }

    public function arbitro()
    {
        return $this->belongsTo('App\Arbitro');
    }

    public function cancha()
    {
        return $this->belongsTo('App\Cancha');
    }
}
