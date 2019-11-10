@extends('layouts.layout')

@section('title', 'Inicio')

@section('content')
    <h1>Secciones desarrolladas:</h1><br>
    <a href={{ route('HotelCreate') }}>Formulario de Hoteles</a><br>
    <a href={{ route('EquipoCreate') }}>Formulario de Equipos</a><br>
    <a href={{ route('PartidoCreate') }}>Formulario de Partido</a><br>
    <a href={{ route('ArbitroCreate') }}>Formulario del Arbitro</a><br>
@endsection