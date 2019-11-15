@extends('layouts.layout')

@section('title','Examenes Antidopaje')

@section('content')
<div class="offset-1 col-10">
    <div class="card">

        <h5 class="card-header info-color white-text text-center py-4">
            <strong>Examenes antidopaje</strong>
        </h5>

        <div class="card-body px-lg-5">
            <table width="100%" class="table table-striped">
                <thead align="text-center" class="thead-dark">
                    <tr>
                        <th>Nombre del Jugador</th>
                        <th>Lugar de examinación</th>
                        <th>Fecha y Hora</th>
                        <th>Resultado de examen</th>
                    </tr>
                </thead>
                <tbody align="text-center">
                    @foreach ($antidoping as $antidoping_item)
                        <tr>
                            <th>{{ $antidoping_item->jugador->Primer_nombre." ".$antidoping_item->jugador->Apellido }}</th>
                            <th>{{ $antidoping_item->Lugar }}</th>
                            <th>{{ $antidoping_item->Fecha }}</th>
                            <th>{{ $antidoping_item->Resultado }}</th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection