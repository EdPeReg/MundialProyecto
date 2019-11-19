@extends('layouts.layout')

@section('title','Editar Reservacion')

@section('content')
<div class="offset-1 col-10">
    <div class="card">

        <h5 class="card-header info-color white-text text-center py-4">
            <strong>Editar Reservacion</strong>
        </h5>

        <div class="card-body px-lg-5">
            <form class="text-left" enctype="multipart/form-data" style="color: #757575" action="{{ route('ReservacionUpdate', $reservacion) }}" method="POST">
                @csrf @method('PATCH')
                <div class="md-form">
                    <table width="100%">
                        <tr>
                            <td width="35%">
                                <label for="materialHotel">Hotel:</label>
                                <select name="Hotel" id="materialHotel" class="form-control">
                                <option selected disabled value="">Elige el hotel:</option>
                                @foreach ($hoteles as $hotel_item)
                                    <option value="{{ $hotel_item->id }}">{{ $hotel_item->Nombre }}</option>
                                @endforeach
                            </select>
                            </td>
                            <td width="35%">
                                <label for="materialFecha">Equipo:</label>
                                <select name="Equipo" id="materialEquipo" class="form-control">
                                <option selected disabled value="">Elige el equipo:</option>
                                @foreach ($equipos as $equipo_item)
                                    <option value="{{ $equipo_item->id }}">{{ $equipo_item->Pais }}</option>
                                @endforeach
                            </select>
                            </td>
                        
                            <td width="30%">
                                <label for="materialNumHab">Número de habitaciones:</label>
                                <input value="{{ old('Num_habitaciones', $reservacion->Num_habitaciones) }}" type="number" name="Num_habitaciones" id="materialNumHab" class="form-control">
                                {!! $errors->first('Num_habitaciones', '<small>:message</small><br>') !!}
                            </td>
                        </tr>
                    </table><br>

                    <table width="100%">
                        <td width="60%">
                            <label for="materialFechaE">Fecha de entrada:</label>
                            <input value="{{ old('Fecha_entrada') }}" type="date" name="Fecha_entrada" id="materialFechaE"
                                class="form-control">
                            {!! $errors->first('Fecha_entrada', '<small>:message</small><br>') !!}
                        </td>
                        <td width="40%">
                            <label for="materialDuracion">Duración de estadia (Días):</label>
                            <input value="{{ old('Duracion', $reservacion->Duracion) }}" type="number" name="Duracion" id="materialDuracion"
                                class="form-control">
                            {!! $errors->first('Duracion', '<small>:message</small><br>') !!}
                        </td>
                    </table>
                </div>

                <button class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect"
                    type="submit">Guardar cambios</button>

            </form>
        </div>
    </div>
</div>
@endsection