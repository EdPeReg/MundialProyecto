@extends('layouts.layout')

@section('title','Editar Cancha')

@section('content')
<div class="offset-1 col-10">
    <div class="card">

        <h5 class="card-header info-color white-text text-center py-4">
            <strong>Editar Cancha</strong>
        </h5>

        <div class="card-body px-lg-5">
            <form class="text-left" enctype="multipart/form-data" style="color: #757575" action="{{ route('CanchaUpdate', $cancha) }}"
                method="POST">
                @csrf @method('PATCH')
                <div class="md-form">
                    <table width="100%">
                        <td>
                            <label for="materialNombre">Nombre de la cancha:</label>
                            <input value="{{ old('Nombre', $cancha->Nombre) }}" type="text" name="Nombre" id="materialNombre" class="form-control">
                            {!! $errors->first('Nombre', '<small>:message</small><br>') !!}
                        </td>
                        <td>
                            <label for="materialUbicacion">Ubicacion:</label>
                            <input value="{{ old('Ubicacion', $cancha->Ubicacion) }}" type="text" name="Ubicacion" id="materialUbicacion" class="form-control">
                            {!! $errors->first('Ubicacion', '<small>:message</small><br>') !!}
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