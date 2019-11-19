@extends('layouts.layout')

@section('title','Editar Arbitro')

@section('content')
<div class="offset-1 col-10">
    <div class="card">

        <h5 class="card-header info-color white-text text-center py-4">
            <strong>Editar Arbitro</strong>
        </h5>

        <div class="card-body px-lg-5">
            <form class="text-left" enctype="multipart/form-data" style="color: #757575" action="{{ route('ArbitroUpdate', $arbitro) }}"
                method="POST">
                @csrf @method('PATCH')
                <div class="md-form">
                    <table width="100%">
                        <td>
                            <label for="materialPrimer_nombre">Primer Nombre:</label>
                            <input value="{{ old('Primer_nombre', $arbitro->Primer_nombre) }}" type="text" name="Primer_nombre" id="materialPrimer_nombre" class="form-control">
                            {!! $errors->first('Primer_nombre', '<small>:message</small><br>') !!}
                        </td>
                        <td>
                            <label for="materialApellido">Apellido(s):</label>
                            <input value="{{ old('Apellido', $arbitro->Apellido) }}" type="text" name="Apellido" id="materialApellido" class="form-control">
                            {!! $errors->first('Apellido', '<small>:message</small><br>') !!}
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