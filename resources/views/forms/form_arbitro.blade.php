@extends('layouts.layout')

@section('title','Agregar Arbitro')

@section('content')
<div class="offset-1 col-10">
    <div class="card">

        <h5 class="card-header info-color white-text text-center py-4">
            <strong>Registrar Arbitro</strong>
        </h5>

        <div class="card-body px-lg-5">
            <form class="text-left" enctype="multipart/form-data" style="color: #757575" action="{{ route('ArbitroStore') }}"
                method="POST">
                @csrf
                <div class="md-form">
                    <label for="materialPrimer_nombre">Primer Nombre:</label>
                    <input value="{{ old('Primer_nombre') }}" type="text" name="Primer_nombre" id="materialPrimer_nombre" class="form-control">
                    {!! $errors->first('Primer_nombre', '<small>:message</small><br>') !!} <br>
                </div>

                <div class="md-form">
                    <label for="materialApellido">Apellido:</label>
                    <input value="{{ old('Apellido') }}" type="text" name="Apellido" id="materialApellido" class="form-control">
                    {!! $errors->first('Apellido', '<small>:message</small><br>') !!} <br>
                </div>

                <!--<div class="md-form">
                    <label for="materialPosicion">Posicion:</label>
                    <input value="{{ old('Posicion') }}" type="text" name="Posicion" id="materialPosicion" class="form-control">
                    {!! $errors->first('Posicion', '<small>:message</small><br>') !!} <br>
                </div>-->

                <button class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect"
                    type="submit">Agregar</button>
            </form>
        </div>
    </div>
</div>
@endsection