@extends('layouts.layout')

@section('title','Canchas')

@section('content')
<div class="offset-1 col-10">
    <div class="card">

        <h5 class="card-header info-color white-text text-center py-4">
            <strong>Canchas</strong>
        </h5>

        <div class="card-body px-lg-5">
            <div class="">
                <table width="100%" class="table table-bordered table-striped" id="dataTable" cellspacing="0">
                    <thead class="thead-dark">
                        <tr>
                            <th>Nombre de la cancha</th>
                            <th>Ubicacion</th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach ($canchas as $cancha_item)
                            <tr>
                                <th>{{ $cancha_item->Nombre }}</th>
                                <th>{{ $cancha_item->Ubicacion }}</th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection