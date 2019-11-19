@extends('layouts.layout')

@section('title', 'Partido - '.$partido->id)

@section('content')
    <div class="text-center">
    </div>
    <div class="text-center text-dark">
        <table width="100%">
            <thead><h1>Partido {{ $partido->id }}</h1></thead>
            <tbody>
                <tr>
                    <td><h5>Fecha del partido: {{ $partido->Fecha }}</h5></td>
                    <td><h5>Nombre de la cancha: {{ $partido->cancha->Nombre }}</h5></td>
                    <td><h5>Nombre del arbitro: {{ $partido->arbitro->Primer_nombre." ".$partido->arbitro->Apellido }}</h5></td>
                </tr>
                <tr>
                    <td><h5>Resultado del equipo 1: {{ $partido->Resultado_eq1 }}</h5></td>
                    <td><h5>Resultado del equipo 2: {{ $partido->Resultado_eq2 }}</h5></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="footer">
        <a href={{ route('PartidoEdit', $partido) }}>Editar</a>
        <form method="POST" action={{ route('PartidoDestroy', $partido) }}>
            @csrf @method('DELETE')
            <button>Eliminar</button>
        </form>
    </div>
@endsection