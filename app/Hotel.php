<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $fillable = ['Nombre', 'Telefono', 'NumeroExt', 'Calle', 'CP'];

    protected $guarded = ['id'];

    public function reservacions()
    {
        return $this->hasMany('App\Reservacion');
    }
}
