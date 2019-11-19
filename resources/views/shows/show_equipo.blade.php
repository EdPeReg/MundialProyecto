@extends('layouts.layout')

@section('title', 'Equipo - '.$equipo->Pais)

@section('content')
    <div class="text-center">
    </div>
    <div class="text-center text-dark">
        <table width="100%">
            <thead><h1>Equipo de {{ $equipo->Pais }}</h1></thead>
            <tbody>
                <tr>
                    <td><h5>Camiseta del equipo: {{ $equipo->Camiseta }}</h5></td>
                    <td><h5>Entrenador del equipo: {{ $equipo->Entrenador }}</h5></td>
                    <td><h5>D.T. del equipo: {{ $equipo->Director }}</h5></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="footer">
        <a href={{ route('EquipoEdit', $equipo) }}>Editar</a>
        <form method="POST" action={{ route('EquipoDestroy', $equipo) }}>
            @csrf @method('DELETE')
            <button>Eliminar</button>
        </form>
    </div>
@endsection