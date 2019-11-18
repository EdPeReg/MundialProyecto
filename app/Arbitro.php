<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Arbitro extends Model
{
    protected $fillable = ['Primer_nombre', 'Apellido'];

    protected $guarded = ['id'];

    public function partidos()
    {
        return $this->hasMany('App\Partido');
    }
}
