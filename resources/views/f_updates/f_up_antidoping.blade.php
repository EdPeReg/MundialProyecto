@extends('layouts.layout')

@section('title','Editar Resultado Antidoping')

@section('content')
<div class="offset-1 col-10">
    <div class="card">

        <h5 class="card-header info-color white-text text-center py-4">
            <strong>Editar Resultado Antidoping</strong>
        </h5>

        <div class="card-body px-lg-5">
            <form class="text-left" enctype="multipart/form-data" style="color: #757575" action="{{ route('AntidopingUpdate', $antidoping) }}"
                method="POST">
                @csrf @method('PATCH')
                <div class="md-form">
                    <table width="100%">
                        <tr>
                            <td>
                                <label for="materialLugar">Lugar de examinación:</label>
                                <input value="{{ old('Lugar', $antidoping->Lugar) }}" type="text" name="Lugar" id="materialLugar" class="form-control">
                                {!! $errors->first('Lugar', '<small>:message</small><br>') !!} <br>
                            </td>
                            <td>
                                <label for="materialFecha">Fecha y hora:</label>
                                <input type="datetime-local" name="Fecha" id="materialFecha" class="form-control">
                                {!! $errors->first('Fecha', '<small>:message</small><br>') !!} <br>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="materialJugador">Jugador:</label>
                                <select name="Jugador" id="materialJugador" class="form-control">
                                    <option disabled selected value="">{{ $antidoping->jugador->Primer_nombre." ".$antidoping->jugador->Apellido }}</option>
                                    @foreach ($jugadores as $jugador_item)
                                        <option value="{{ $jugador_item->id }}">{{ $jugador_item->Primer_nombre." ".$jugador_item->Apellido }}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td>
                                <br><label for="materialResultado">Resultado:</label>
                                <select name="Resultado" id="materialResultado" class="form-control">
                                    <option selected disabled value="">{{ $antidoping->Resultado }}</option>
                                    <option value="Positivo">Positivo</option>
                                    <option value="Negativo">Negativo</option>
                                </select>
                                {!! $errors->first('Resultado', '<small>:message</small><br>') !!} <br>
                            </td>
                        </tr>
                    </table>
                </div>

                <button class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect"
                    type="submit">Guardar cambios</button>

            </form>
        </div>
    </div>
</div>
@endsection