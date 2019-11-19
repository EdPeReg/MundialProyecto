@extends('layouts.layout')

@section('title','Examenes Antidopaje')

@section('content')
<div class="offset-1 col-10">
    <div class="card">

        <h5 class="card-header info-color white-text text-center py-4">
            <strong>Examenes antidopaje</strong>
        </h5>

        <div class="card-body px-lg-5">
            <div class="">
                <table width="100%" class="table table-bordered table-striped" id="dataTable" cellspacing="0">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID examen</th>
                            <th>Nombre del Jugador</th>
                            <th>Resultado de examen</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($antidoping as $antidoping_item)
                            <tr>
                                <th><a href={{ route('AntidopingShow', $antidoping_item) }}>{{ $antidoping_item->id }}</a></th>
                                <th>{{ $antidoping_item->jugador->Primer_nombre." ".$antidoping_item->jugador->Apellido }}</th>
                                <th>{{ $antidoping_item->Resultado }}</th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection