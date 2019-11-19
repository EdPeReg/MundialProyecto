@extends('layouts.layout')

@section('title','Equipos')

@section('content')
<div class="offset-1 col-10">
    <div class="card">

        <h5 class="card-header info-color white-text text-center py-4">
            <strong>Equipos</strong>
        </h5>

        <div class="card-body px-lg-5">
            <div class="">
                <table width="100%" class="table table-bordered table-striped" id="dataTable" cellspacing="0">
                    <thead class="thead-dark">
                    <tr>
                            <th>Pais</th>
                            <th>Director</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($equipos as $equipo_item)
                            <tr>
                                <th><a href={{ route('EquipoShow', $equipo_item) }}>{{ $equipo_item->Pais }}</a></th>
                                <th>{{ $equipo_item->Director }}</th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection