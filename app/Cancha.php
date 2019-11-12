<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cancha extends Model
{
    protected $fillable = ['Ubicacion', 'Nombre'];

    protected $guarded = ['Id'];

    /**
     * Los partidos que pertenecen al arbitro.
     **/
    public function partidos() {
        return $this->hasMany('App\Cancha');
    }
}
