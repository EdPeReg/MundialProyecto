<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
	protected $fillable = ['Pais', 'Director', 'Entrenador', 'Goles',
		'Camiseta'];
    
    protected $guarded = ['codigo'];

    public function partidos() {
    	return $this->belongsToMany(Partido::class);
    }
}

