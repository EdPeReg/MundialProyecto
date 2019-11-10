@extends('layouts.layout')

@section('title','Agregar Partido')

@section('content')
<div class="offset-1 col-10">
    <div class="card">

        <h5 class="card-header info-color white-text text-center py-4">
            <strong>Registrar Partido</strong>
        </h5>

        <div class="card-body px-lg-5">
            <form class="text-left" enctype="multipart/form-data" style="color: #757575" action="{{ route('PartidoStore') }}"
                method="POST">
                @csrf
                <div class="md-form">
                    <label for="materialFecha">Fecha:</label>
                    <input value="{{ old('Fecha') }}" type="text" name="Fecha" id="materialFecha" class="form-control">
                    {!! $errors->first('Fecha', '<small>:message</small><br>') !!} <br>
                </div>

                <div class="md-form">
                    <label for="materialEquipo1">Primer Equipo:</label>
                    <input value="{{ old('Equipo1') }}" type="text" name="Equipo1" id="materialEquipo1" class="form-control">
                    {!! $errors->first('Equipo1', '<small>:message</small><br>') !!} <br>
                </div>

                <div class="md-form">
                    <label for="materialEquipo2">Segundo Equipo:</label>
                    <input value="{{ old('Equipo2') }}" type="text" name="Equipo2" id="materialEquipo2" class="form-control">
                    {!! $errors->first('Equipo2', '<small>:message</small><br>') !!} <br>
                </div>

                <div class="md-form">
                    <label for="materialResultado_eq1">Resultado del primer equipo:</label>
                    <input value="{{ old('Resultado_eq1') }}" type="text" name="Resultado_eq1" id="materialResultado_eq1" class="form-control">
                    {!! $errors->first('Resultado_eq1', '<small>:message</small><br>') !!} <br>
                </div>

                <div class="md-form">
                    <label for="materialResultado_eq2">Resultado del segundo equipo:</label>
                    <input value="{{ old('Resultado_eq2') }}" type="text" name="Resultado_eq2" id="materialResultado_eq2" class="form-control">
                    {!! $errors->first('Resultado_eq2', '<small>:message</small><br>') !!} <br>
                </div>

                <button class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect"
                    type="submit">Agregar</button>

            </form>
        </div>
    </div>
</div>
@endsection