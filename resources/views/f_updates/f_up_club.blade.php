@extends('layouts.layout')

@section('title','Editar Club')

@section('content')
<div class="offset-1 col-10">
    <div class="card">

        <h5 class="card-header info-color white-text text-center py-4">
            <strong>Editar Club</strong>
        </h5>

        <div class="card-body px-lg-5">
            <form class="text-left" enctype="multipart/form-data" style="color: #757575" action="{{ route('ClubUpdate', $club) }}"
                method="POST">
                @csrf @method('PATCH')
                <div class="md-form">
                    <label for="materialNombre">Nombre del club:</label>
                    <input value="{{ old('Nombre', $club->Nombre) }}" type="text" name="Nombre" id="materialNombre" class="form-control">
                    {!! $errors->first('Nombre', '<small>:message</small><br>') !!} <br>        
                </div>

                <button class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect"
                    type="submit">Agregar</button>
            </form>
        </div>
    </div>
</div>
@endsection