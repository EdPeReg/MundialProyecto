<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservacion extends Model
{
    protected $fillable = ['equipo_id', 'hotel_id', 'Num_habitaciones', 'Duracion', 'Fecha_entrada', 'Fecha_salida'];

    protected $guarded = ['id'];

    public function hotel()
    {
        return $this->belongsTo('App\Hotel');
    }

    public function equipo()
    {
        return $this->belongsTo('App\Equipo');
    }
}
