<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
	protected $fillable = ['Pais', 'Director', 'Entrenador', 'Camiseta'];
    
    protected $guarded = ['id'];

    public function partidos() {
    	return $this->belongsToMany('App\Partido');
    }

    public function jugadors()
    {
        return $this->hasMany('App\Jugador');
    }

    public function reservacions()
    {
        return $this->hasMany('App\Reservacion');
    }
}

