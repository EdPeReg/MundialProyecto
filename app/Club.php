<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    protected $fillable = ['Nombre'];

    protected $guarded = ['id'];

    public function jugadors()
    {
        return $this->belongsToMany('App\Club');
    }
}
