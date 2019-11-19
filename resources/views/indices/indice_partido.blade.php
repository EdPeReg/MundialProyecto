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
                            <th>ID partido</th>
                            <th>Equipos</th>
                            <th>Fecha en la que se jugo</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($partidos as $partido_item)
                            <tr>
                                <th><a href={{ route('PartidoShow', $partido_item) }}>{{ $partido_item->id }}</a></th>
                                <th>
                                    @foreach ($partido_item->equipos as $equipo)
                                        {{ "--".$equipo->Pais }}
                                    @endforeach
                                </th>
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