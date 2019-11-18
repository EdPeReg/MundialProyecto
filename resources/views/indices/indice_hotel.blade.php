@extends('layouts.layout')

@section('title','Hoteles')

@section('content')
<div class="offset-1 col-10">
    <div class="card">

        <h5 class="card-header info-color white-text text-center py-4">
            <strong>Hoteles</strong>
        </h5>

        <div class="card-body px-lg-5">
            <div class="">
                <table width="100%" class="table table-bordered table-striped" id="dataTable" cellspacing="0">
                    <thead class="thead-dark">
                    <tr>
                            <th>Nombre del hotel</th>
                            <th>Telefono</th>
                            <th>Calle</th>
                            <th>Numero exterior</th>
                            <th>CP</th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach ($hoteles as $hotel_item)
                            <tr>
                                <th>{{ $hotel_item->Nombre }}</th>
                                <th>{{ $hotel_item->Telefono }}</th>
                                <th>{{ $hotel_item->Calle }}</th>
                                <th>{{ $hotel_item->NumeroExt }}</th>
                                <th>{{ $hotel_item->CP }}</th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection