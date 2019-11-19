@extends('layouts.layout')

@section('title','Editar Jugador')

@section('content')
<div class="offset-1 col-10">
    <div class="card">

        <h5 class="card-header info-color white-text text-center py-4">
            <strong>Editar Jugador</strong>
        </h5>

        <div class="card-body px-lg-5">
            <form class="text-left" enctype="multipart/form-data" style="color: #757575"
                action="{{ route('JugadorUpdate', $jugador) }}" method="POST">
                @csrf @method('PATCH')
                <div class="md-form">
                    <table width="100%">
                        <td>
                            <label for="materialNameJugador">Primer Nombre:</label>
                            <input value="{{ old('Nombre', $jugador->Primer_nombre) }}" type="text" name="Nombre" id="materialNameJugador"
                                class="form-control">
                            {!! $errors->first('Nombre', '<small>:message</small><br>') !!} <br>
                        </td>
                        <td>
                            <label for="materialApellido">Apellido(s):</label>
                            <input value="{{ old('Apellido', $jugador->Apellido) }}" type="text" name="Apellido" id="materialApellido"
                                class="form-control">
                            {!! $errors->first('Apellido', '<small>:message</small><br>') !!} <br>
                        </td>
                        <td>
                            <label for="materialNum_i">Número de identificación:</label>
                            <input value="{{ old('Num_i', $jugador->Num_i) }}" type="number" min="0" pattern="\d+" step="1" name="Num_i"
                                id="materialNum_i" class="form-control">
                            {!! $errors->first('Num_i', '<small>:message</small><br>') !!} <br>
                        </td>
                    </table>

                    <table width="100%">
                        <td>
                            <label for="materialNacionalidad">Nacionalidad:</label>
                            <input value="{{ old('Nacionalidad', $jugador->Nacionalidad) }}" type="text" name="Nacionalidad"
                                id="materialNacionalidad" class="form-control">
                            {!! $errors->first('Nacionalidad', '<small>:message</small><br>') !!} <br>
                        </td>
                        <td>
                            <label for="materialFecha_nac">Fecha de nacimiento:</label>
                            <input type="date" name="Fecha_nac" id="materialFecha_nac" class="form-control">
                            {!! $errors->first('Fecha_nac', '<small>:message</small><br>') !!} <br>
                        </td>
                    </table>

                    <table width="100%">
                        <td>
                            <label for="materialPeso">Peso (kg):</label>
                            <input value="{{ old('Peso', $jugador->Peso) }}" type="number" min="30" pattern="\d+" step="0.01"
                                name="Peso" id="materialPeso" class="form-control">
                            {!! $errors->first('Peso', '<small>:message</small><br>') !!} <br>
                        </td>
                        <td>
                            <label for="materialAltura">Altura (cm):</label>
                            <input value="{{ old('Altura', $jugador->Altura) }}" type="number" min="100" pattern="\d+" step="0.1"
                                name="Altura" id="materialAltura" class="form-control">
                            {!! $errors->first('Altura', '<small>:message</small><br>') !!} <br>
                        </td>
                    </table>

                    <table width="100%">
                        <td width="35%">
                            <label for="materialEquipo">Equipo:</label>
                            <select name="Equipo" id="materialEquipo" class="form-control">
                                <option selected disabled value="">Elige el equipo:</option>
                                @foreach ($equipos as $equipo_item)
                                <option value="{{ $equipo_item->id }}">{{ $equipo_item->Pais }}</option>
                                @endforeach
                            </select>
                        </td>
                        <td width="35%">
                            <label for="materialPosicion">Posicion:</label>
                            <select name="Posicion" id="MaterialPosicion" class="form-control">
                                <option selected disabled value="">Elige una opción:</option>
                                <option value="Portero">Portero</option>
                                <option value="Defensor">Defensor</option>
                                <option value="Mediocampista">Mediocampista</option>
                                <option value="Delantero">Delantero</option>
                            </select>
                        </td>
                        <td width="15%">
                            <label for="materialNum_playera">Número de camiseta:</label>
                            <input value="{{ old('Num_playera', $jugador->Num_playera) }}" type="number" min="0" pattern="\d+" step="1"
                                name="Num_playera" id="materialNum_playera" class="form-control">
                            {!! $errors->first('Num_playera', '<small>:message</small><br>') !!} <br>
                        </td>
                        <td width="15%">
                            <label for="materialGoles_mun">Goles (Mundial):</label>
                            <input value="{{ old('Goles_mun', $jugador->Goles_mun) }}" type="number" min="0" pattern="\d+" step="1"
                                name="Goles_mun" id="materialGoles_mun" class="form-control">
                            {!! $errors->first('Goles_mun', '<small>:message</small><br>') !!} <br>
                        </td>
                    </table>

                    <table width="30%">
                        <td>
                            <label for="materialClub">Clubes:</label>
                            <select multiple="multiple" name="Club[]" id="materialClub" class="form-control">
                                <option selected disabled value="">Elige los clubes:</option>
                                @foreach ($clubs as $club_item)
                                <option value="{{ $club_item->id }}">{{ $club_item->Nombre }}</option>
                                @endforeach
                            </select>
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