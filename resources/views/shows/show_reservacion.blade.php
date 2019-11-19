@extends('layouts.layout')

@section('title', 'Reservacion del Hotel '.$reservacion->hotel_id)

@section('content')
    <div class="text-center">
    </div>
    <div class="text-center text-dark">
        <table width="100%">
            <thead><h1>Reservacion Hotel {{ $reservacion->hotel_id }} </h1></thead>
            <tbody>
                <tr>
                    <td><h5>Nombre del hotel: {{ $reservacion->hotel->Nombre }}</h5></td>
                    <td><h5>Equipo que Hizo la Reservacion: {{ $reservacion->equipo->Pais }}</h5></td>
                </tr>
                <tr>
                    <td><h5>Numero de Habitaciones: {{ $reservacion->Num_habitaciones }}</h5></td>
                    <td><h5>Fecha de entrada y salida: {{ $reservacion->Fecha_entrada." ".$reservacion->Fecha_salida }}</h5>
                    <h5>Duracion de estadias (dias): {{ $reservacion->Duracion }}</h5></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="footer">
        <a href={{ route('ReservacionEdit', $reservacion) }}>Editar</a>
        <form method="POST" action={{ route('ReservacionDestroy', $reservacion) }}>
            @csrf @method('DELETE')
            <button>Eliminar</button>
        </form>
    </div>
@endsection