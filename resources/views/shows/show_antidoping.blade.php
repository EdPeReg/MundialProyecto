@extends('layouts.layout')

@section('title', 'Examen Antidopaje - '.$antidoping->id)

@section('content')
    <div class="text-center">
    </div>
    <div class="text-center text-dark">
        <table width="100%">
            <thead><h1>Examen Antidopaje {{ $antidoping->id }}</h1></thead>
            <tbody>
                <tr>
                    <td><h5>Jugador Examinado: {{ $antidoping->jugador->Primer_nombre." ".$antidoping->jugador->Apellido }}</h5></td>
                    <td><h5>Resultado de examen: {{ $antidoping->Resultado }}</h5></td>
                </tr>
                <tr>
                    <td><h5>Lugar del examen: {{ $antidoping->Lugar }}</h5></td>
                    <td><h5>Fecha y hora de examen: {{ $antidoping->Fecha }}</h5></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="footer">
        <a href={{ route('AntidopingEdit', $antidoping) }}>Editar</a>
        <form method="POST" action={{ route('AntidopingDestroy', $antidoping) }}>
            @csrf @method('DELETE')
            <button>Eliminar</button>
        </form>
    </div>
@endsection