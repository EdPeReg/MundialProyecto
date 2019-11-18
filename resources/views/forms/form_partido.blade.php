@extends('layouts.layout')

@section('title','Agregar Partido')

@section('content')
<div class="offset-1 col-10">
    <div class="card">

        <h5 class="card-header info-color white-text text-center py-4">
            <strong>Registrar Partido</strong>
        </h5>

        <div class="card-body px-lg-5">
            <form class="text-left" enctype="multipart/form-data" style="color: #757575"
                action="{{ route('PartidoStore') }}" method="POST">
                @csrf
                <div class="md-form">
                    <table width="100%">
                        <tr>
                            <td width="50%">
                                <label for="materialEquipo1">Equipo 1:</label>
                                <select name="Equipo1" id="materialEquipo1" class="form-control">
                                    <option selected disabled value="">Elige el equipo:</option>
                                    @foreach ($equipos as $equipo_item)
                                    <option value="{{ $equipo_item->id }}">{{ $equipo_item->Pais }}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td width="50%">
                                <label for="materialEquipo2">Equipo 2:</label>
                                <select name="Equipo2" id="materialEquipo2" class="form-control">
                                    <option selected disabled value="">Elige el equipo:</option>
                                    @foreach ($equipos as $equipo_item)
                                    <option value="{{ $equipo_item->id }}">{{ $equipo_item->Pais }}</option>
                                    @endforeach
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td width="10%">
                                <label for="materialResultado_eq1">Goles del equipo 1:</label>
                                <input value="{{ old('Resultado_eq1') }}" type="number" name="Resultado_eq1"
                                    id="materialResultado_eq1" class="form-control">
                                {!! $errors->first('Resultado_eq1', '<small>:message</small><br>') !!}
                            </td>
                            <td width="10%">
                                <label for="materialResultado_eq2">Goles del equipo 2:</label>
                                <input value="{{ old('Resultado_eq2') }}" type="number" name="Resultado_eq2"
                                    id="materialResultado_eq2" class="form-control">
                                {!! $errors->first('Resultado_eq2', '<small>:message</small><br>') !!}
                            </td>
                        </tr>
                    </table><br>
                    <table width="100%">
                        <td width="40%">
                            <label for="materialFecha">Fecha del encuentro:</label>
                            <input value="{{ old('Fecha') }}" type="date" name="Fecha" id="materialFecha"
                                class="form-control">
                            {!! $errors->first('Fecha', '<small>:message</small><br>') !!}
                        </td>
                        <td width="30%">
                            <label for="materialArbitro">Arbitro:</label>
                            <select name="Arbitro" id="materialArbitro" class="form-control">
                                <option selected disabled value="">Elige el arbitro:</option>
                                @foreach ($arbitros as $arbitro_item)
                                <option value="{{ $arbitro_item->id }}">
                                    {{ $arbitro_item->Primer_nombre." ".$arbitro_item->Apellido }}</option>
                                @endforeach
                            </select>
                        </td>
                        <td width="30%">
                            <label for="materialCancha">Cancha:</label>
                            <select name="Cancha" id="materialCancha" class="form-control">
                                <option selected disabled value="">Elige la cancha:</option>
                                @foreach ($canchas as $cancha_item)
                                <option value="{{ $cancha_item->id }}">{{ $cancha_item->Nombre }}</option>
                                @endforeach
                            </select>
                        </td>
                    </table><br>
                </div>

                <button class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect"
                    type="submit">Agregar</button>

            </form>
        </div>
    </div>
</div>
@endsection