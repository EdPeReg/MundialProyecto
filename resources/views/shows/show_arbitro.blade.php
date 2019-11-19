@extends('layouts.layout')

@section('title', 'Arbitro - '.$arbitro->id)

@section('content')
    <div class="text-center">
    </div>
    <div class="text-center text-dark">
        <table width="100%">
            <thead><h1>Arbitro {{ $arbitro->id }}</h1></thead>
            <tbody>
                <tr>
                    <td><h5>Nombre del arbitro: {{ $arbitro->Primer_nombre." ".$arbitro->Apellido }}</h5></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="footer">
        <a href={{ route('ArbitroEdit', $arbitro) }}>Editar</a>
        <form method="POST" action={{ route('ArbitroDestroy', $arbitro) }}>
            @csrf @method('DELETE')
            <button>Eliminar</button>
        </form>
    </div>
@endsection