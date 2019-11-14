<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jugador extends Model
{
    protected $fillable = ['Num_i', 'Primer_nombre', 'Apellido', 'Nacionalidad', 'Posicion', 'Peso', 'Altura', 'Fecha_nac', 'Goles_mun', 'Num_playera'];

    protected $guarded = ['id'];
    
    public function antidopings()
    {
        return $this->hasMany('App\Antidoping');
    }

    public function clubs()
    {
        return $this->belongsToMany('App\Club');
    }
}
