@extends('layouts.layout')

@section('title', 'Cancha - '.$cancha->id)

@section('content')
    <div class="text-center">
    </div>
    <div class="text-center text-dark">
        <table width="100%">
            <thead><h1>Cancha {{ $cancha->id }}</h1></thead>
            <tbody>
                <tr>
                    <td><h5>Nombre de la cancha: {{ $cancha->Nombre }}</h5></td>
                    <td><h5>Lugar de la cancha: {{ $cancha->Ubicacion }}</h5></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="footer">
        <a href={{ route('CanchaEdit', $cancha) }}>Editar</a>
        <form method="POST" action={{ route('CanchaDestroy', $cancha) }}>
            @csrf @method('DELETE')
            <button>Eliminar</button>
        </form>
    </div>
@endsection