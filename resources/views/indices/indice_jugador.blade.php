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
                            <th>Numero de Identificacion Nacional</th>
                            <th>Nombre del Jugador</th>
                            <th>Nacionalidad</th>
                            <th>Numero de Playera</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($jugadors as $jugador_item)
                            <tr>
                                <th><a href={{ route('JugadorShow', $jugador_item) }}>{{ $jugador_item->Num_i }}</a></th>
                                <th>{{ $jugador_item->Primer_nombre." ".$jugador_item->Apellido }}</th>    
                                <th>{{ $jugador_item->Nacionalidad }}</th>
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