@extends('layouts.layout')

@section('title','Reservaciones')

@section('content')
<div class="offset-1 col-10">
    <div class="card">

        <h5 class="card-header info-color white-text text-center py-4">
            <strong>Reservaciones</strong>
        </h5>

        <div class="card-body px-lg-5">
            <div class="">
                <table width="100%" class="table table-bordered table-striped" id="dataTable" cellspacing="0">
                    <thead class="thead-dark">
                    <tr>
                            <th>Nombre del hotel</th>
                            <th>Equipo</th>
                            <th>Habitaciones reservadas</th>
                            <th>Duracion</th>
                            <th>Fecha de entrada</th>
                            <th>Fecha de salida</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($reservacions as $reservacion_item)
                            <tr>
                                <th>{{ $reservacion_item->hotel->Nombre }}</th>
                                <th>{{ $reservacion_item->equipo->Pais }}</th>
                                <th>{{ $reservacion_item->Num_habitaciones }}</th>
                                <th>{{ $reservacion_item->Duracion }}</th>
                                <th>{{ $reservacion_item->Fecha_entrada }}</th>
                                <th>{{ $reservacion_item->Fecha_salida }}</th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection