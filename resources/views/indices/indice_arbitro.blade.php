@extends('layouts.layout')

@section('title','Arbitros')

@section('content')
<div class="offset-1 col-10">
    <div class="card">

        <h5 class="card-header info-color white-text text-center py-4">
            <strong>Arbitros</strong>
        </h5>

        <div class="card-body px-lg-5">
            <div class="">
                <table width="100%" class="table table-bordered table-striped" id="dataTable" cellspacing="0">
                    <thead class="thead-dark">
                        <tr>
                            <th>Nombre del Arbitro</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($arbitros as $arbitro_item)
                            <tr>
                                <th>{{ $arbitro_item->Primer_nombre." ".$arbitro_item->Apellido }}</th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection