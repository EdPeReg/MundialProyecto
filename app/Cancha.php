<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cancha extends Model
{
    protected $fillable = ['Ubicacion', 'Nombre'];

    protected $guarded = ['id'];

    public function partidos() {
        return $this->hasMany('App\Partido');
    }
}
