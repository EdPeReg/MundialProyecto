@extends('layouts.layout')

@section('title', 'Inicio')

@section('content')
    <h1>Secciones desarrolladas:</h1><br>
    <a href={{ route('HotelCreate') }}>Formulario de Hoteles</a>
@endsection