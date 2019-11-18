@extends('layouts.layout')

@section('title','Jugadores')

@section('content')
<div class="offset-1 col-10">
    <div class="card">

        <h5 class="card-header info-color white-text text-center py-4">
            <strong>Jugadores</strong>
        </h5>

        <div class="card-body px-lg-5">
            <div class="">
                <table width="100%" class="table table-bordered table-striped" id="dataTable" cellspacing="0">
                    <thead class="thead-dark">
                        <tr>
                            <th>Nombre del Jugador</th>
                            <th>Fecha de Nacimiento</th>
                            <th>Nacionalidad</th>
                            <th>Posicion</th>
                            <th>Peso</th>
                            <th>Altura</th>
                            <th>Goles en el Mundial</th>
                            <th>Numero de Playera</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($jugadors as $jugador_item)
                            <tr>
                                <th>{{ $jugador_item->Primer_nombre." ".$jugador_item->Apellido }}</th>
                                <th>{{ $jugador_item->Fecha_nac }}</th>
                                <th>{{ $jugador_item->Nacionalidad }}</th>
                                <th>{{ $jugador_item->Posicion }}</th>
                                <th>{{ $jugador_item->Peso }}</th>
                                <th>{{ $jugador_item->Altura }}</th>
                                <th>{{ $jugador_item->Goles_mun }}</th>
                                <th>{{ $jugador_item->Num_playera }}</th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection