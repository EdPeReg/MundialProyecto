@extends('layouts.layout')

@section('title', 'Jugador - '.$jugador->id)

@section('content')
    <div class="text-center">
    </div>
    <div class="text-center text-dark">
        <table width="100%">
            <thead><h1>Jugador con playera {{ $jugador->Num_playera }}</h1></thead>
            <tbody>
                <tr>
                    <td><h5>Nombre del jugador: {{ $jugador->Primer_nombre." ".$jugador->Apellido }}</h5></td>
                    <td><h5>Numero de Identificacion Nacional: {{ $jugador->Num_i }}</h5></td>
                    <td><h5>Equipo del jugador: {{ $jugador->equipo->Pais }}</h5></td>
                    <td><h5>Nacionalidad: {{ $jugador->Nacionalidad }}</h5></td>
                    <td><h5>Posicion: {{ $jugador->Posicion }}</h5></td>
                </tr>
                <tr>
                     <td><h5>Peso: {{ $jugador->Peso }}</h5></td>
                    <td><h5>Altura: {{ $jugador->Altura }}</h5></td>
                    <td><h5>Fecha de nacimiento: {{ $jugador->Fecha_nac }}</h5></td>
                    <td><h5>Goles en el mundial: {{ $jugador->Goles_mun }}</h5></td>
                    <td><h5>Numero de playera: {{ $jugador->Num_playera }}</h5></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="footer">
        <a href={{ route('JugadorEdit', $jugador) }}>Editar</a>
        <form method="POST" action={{ route('JugadorDestroy', $jugador) }}>
            @csrf @method('DELETE')
            <button>Eliminar</button>
        </form>
    </div>
@endsection