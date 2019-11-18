@extends('layouts.layout')

@section('title','Agregar Hotel')

@section('content')
<div class="offset-1 col-10">
    <div class="card">

        <h5 class="card-header info-color white-text text-center py-4">
            <strong>Registrar Hotel</strong>
        </h5>

        <div class="card-body px-lg-5">
            <form class="text-left" enctype="multipart/form-data" style="color: #757575"
                action="{{ route('HotelStore') }}" method="POST">
                @csrf
                <div class="md-form">
                    <table width="100%">
                        <td width="75%">
                            <label for="materialNameHotel">Nombre:</label>
                            <input value="{{ old('Nombre') }}" type="text" name="Nombre" id="materialNameHotel"
                                class="form-control">
                            {!! $errors->first('Nombre', '<small>:message</small><br>') !!}
                        </td>
                        <td width="25%">
                            <label for="materialTeléfono">Teléfono:</label>
                            <input value="{{ old('Teléfono') }}" type="tel" name="Telefono" id="materialTeléfono"
                                class="form-control">
                            {!! $errors->first('Teléfono', '<small>:message</small><br>') !!}
                        </td>
                    </table>

                    <table width="100%">
                        <td width="60%">
                            <label for="materialCalle">Nombre de la calle:</label>
                            <input value="{{ old('Calle') }}" type="text" name="Calle" id="materialCalle"
                                class="form-control">
                            {!! $errors->first('Calle', '<small>:message</small><br>') !!}
                        </td>
                        <td width="20%">
                            <label for="materialNumEd">Número exterior:</label>
                            <input value="{{ old('NúmeroExt') }}" type="number" name="NumeroExt" id="materialNumed"
                                class="form-control">
                            {!! $errors->first('NúmeroExt', '<small>:message</small><br>') !!}
                        </td>
                        <td width="20%">
                            <label for="materialCP">Código Postal:</label>
                            <input value="{{ old('CP') }}" type="number" name="CP" id="materialCP" class="form-control">
                            {!! $errors->first('CP', '<small>:message</small><br>') !!}
                        </td>
                    </table>
                </div>

                <button class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect"
                    type="submit">Agregar</button>

            </form>
        </div>
    </div>
</div>
@endsection