@extends('layouts.layout')

@section('title','Hoteles')

@section('content')
<div class="offset-1 col-10">
    <div class="card">

        <h5 class="card-header info-color white-text text-center py-4">
            <strong>Lista de hoteles</strong>
        </h5>

        <div class="card-body px-lg-5">
            <div class="">
                <table width="100%" class="table table-bordered table-striped" id="dataTable" cellspacing="0">
                    <thead class="thead-dark">
                        <tr>
                            <th>Nombre del hotel</th>
                            <th>Número de contacto</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($hotel as $hotel_item)
                            <tr>
                                <th><a href={{ route('HotelShow', $hotel_item) }}>{{ $hotel_item->Nombre }}</a></th>
                                <th>{{ $hotel_item->Telefono }}</th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection