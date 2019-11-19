@extends('layouts.layout')

@section('title', 'Hotel - '.$hotel->Nombre)

@section('content')
    <div class="text-center">
    </div>
    <div class="text-center text-dark">
        <table width="100%">
            <thead><h1>{{ $hotel->Nombre }}</h1></thead>
            <tbody>
                <tr><h5>Calle y Número: {{ $hotel->Calle." ".$hotel->NumeroExt }}</h5></tr>
                <tr><h5>Código postal: {{ $hotel->CP }}</h5></tr>
                <tr><h5>Número de contacto: {{ $hotel->Telefono }}</h5></tr>
            </tbody>
        </table>
    </div>
    <div class="footer">
        <a href={{ route('HotelEdit', $hotel) }}>Editar</a>
        <form method="POST" action={{ route('HotelDestroy', $hotel) }}>
            @csrf @method('DELETE')
            <button>Eliminar</button>
        </form>
    </div>
@endsection