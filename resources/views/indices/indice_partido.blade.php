@extends('layouts.layout')

@section('title','Partidos')

@section('content')
<div class="offset-1 col-10">
    <div class="card">

        <h5 class="card-header info-color white-text text-center py-4">
            <strong>Partidos</strong>
        </h5>

        <div class="card-body px-lg-5">
            <div class="">
                <table width="100%" class="table table-bordered table-striped" id="dataTable" cellspacing="0">
                    <thead class="thead-dark">
                    <tr>
                            <th>Nombre de la cancha</th>
                            <th>Nombre del arbitro</th>
                            <th>Resultado del equipo 1</th>
                            <th>Resultado del equipo 2</th>
                            <th>Fecha en la que se jugo</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($partidos as $partido_item)
                            <tr>
                                <th>{{ $partido_item->cancha->Nombre }}</th>
                                <th>{{ $partido_item->arbitro->Primer_nombre." ".$partido_item->arbitro->Apellido }}</th>
                                <th>{{ $partido_item->Resultado_eq1 }}</th>
                                <th>{{ $partido_item->Resultado_eq2 }}</th>
                                <th>{{ $partido_item->Fecha }}</th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection