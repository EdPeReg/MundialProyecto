@extends('layouts.layout')

@section('title', 'Inicio')

@section('content')
    <h1>Secciones desarrolladas:</h1><br>
    <h2>Indices:</h2><br>
    <a href={{ route('AntidopingIndex') }}>Menu de Antidoping</a><br>
    <a href={{ route('ReservacionIndex') }}>Menu de Reservacion</a><br>
    <br><h2>Crear:</h2><br>
    <a href={{ route('HotelCreate') }}>Formulario de Hotel</a><br>
    <a href={{ route('EquipoCreate') }}>Formulario de Equipo</a><br>
    <a href={{ route('PartidoCreate') }}>Formulario de Partido</a><br>
    <a href={{ route('ArbitroCreate') }}>Formulario de Arbitro</a><br>
    <a href={{ route('CanchaCreate') }}>Formulario de Cancha</a><br>
    <a href={{ route('JugadorCreate') }}>Formulario de Jugador</a><br>
    <a href={{ route('AntidopingCreate') }}>Formulario de Antidoping</a><br>
    <a href={{ route('ClubCreate') }}>Formulario de Club</a><br>
    <a href={{ route('ReservacionCreate') }}>Formulario de Reservacion</a><br>
@endsection