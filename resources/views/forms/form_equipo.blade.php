@extends('layouts.layout')

@section('title','Agregar Equipo')

@section('content')
<div class="offset-1 col-10">
    <div class="card">

        <h5 class="card-header info-color white-text text-center py-4">
            <strong>Registrar Equipo</strong>
        </h5>

        <div class="card-body px-lg-5">
            <form class="text-left" enctype="multipart/form-data" style="color: #757575" action="{{ route('EquipoStore') }}"
                method="POST">
                @csrf
                <div class="md-form">
                    <label for="materialPaisEquipo">Pais:</label>
                    <input value="{{ old('Pais') }}" type="text" name="Pais" id="materialPaisEquipo" class="form-control">
                    {!! $errors->first('Pais', '<small>:message</small><br>') !!} <br>
                </div>

                <div class="md-form">
                    <label for="materialDirector">Director:</label>
                    <input value="{{ old('Director') }}" type="text" name="Director" id="materialDirector" class="form-control">
                    {!! $errors->first('Director', '<small>:message</small><br>') !!} <br>
                </div>

                <div class="md-form">
                    <label for="materialEntrenador">Entrenador:</label>
                    <input value="{{ old('Entrenador') }}" type="text" name="Entrenador" id="materialEntrenador" class="form-control">
                    {!! $errors->first('Entrenador', '<small>:message</small><br>') !!} <br>
                </div>

                <div class="md-form">
                    <label for="materialGoles">Goles:</label>
                    <input value="{{ old('Goles') }}" type="text" name="Goles" id="materialGoles" class="form-control">
                    {!! $errors->first('Goles', '<small>:message</small><br>') !!} <br>
                </div>

                <div class="md-form">
                    <label for="materialCamiseta">Camiseta:</label>
                    <input value="{{ old('Camiseta') }}" type="text" name="Camiseta" id="materialCamiseta" class="form-control">
                    {!! $errors->first('Camiseta', '<small>:message</small><br>') !!} <br>
                </div>

                <button class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect"
                    type="submit">Agregar</button>

            </form>
        </div>
    </div>
</div>
@endsection