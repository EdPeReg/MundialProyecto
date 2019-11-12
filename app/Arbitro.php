<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Arbitro extends Model
{
    protected $fillable = ['Primer_nombre', 'Apellido', 'Posicion'];

    protected $guarded = ['Id'];

    /**
     * Los partidos que pertenecen al arbitro.
     **/
    public function partidos() {
        return $this->belongsToMany('App\Partido');
    }
}
