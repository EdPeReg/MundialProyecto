@extends('layouts.layout')

@section('title', 'Club - '.$club->id)

@section('content')
    <div class="text-center">
    </div>
    <div class="text-center text-dark">
        <table width="100%">
            <thead><h1>Club {{ $club->id }}</h1></thead>
            <tbody>
                <tr>
                    <td><h5>Nombre del club: {{ $club->Nombre }}</h5></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="footer">
        <a href={{ route('ClubEdit', $club) }}>Editar</a>
        <form method="POST" action={{ route('ClubDestroy', $club) }}>
            @csrf @method('DELETE')
            <button>Eliminar</button>
        </form>
    </div>
@endsection