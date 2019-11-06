<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $fillable = ['Nombre', 'Teléfono', 'NúmeroExt', 'Calle', 'CP'];

    protected $guarded = ['codigo'];
}
