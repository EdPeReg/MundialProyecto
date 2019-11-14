<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Antidoping extends Model
{
    protected $fillable = ['Resultado', 'Lugar', 'Fecha', 'jugador_id'];

    protected $guarded = ['id'];

    public function jugador()
    {
        return $this->belongsTo('App\Jugador');
    }
}
