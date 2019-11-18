<?php

namespace App\Http\Controllers;

use App\Jugador;
use App\Club;
use App\Equipo;
use Illuminate\Http\Request;

class JugadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jugadors = Jugador::all();

        return view('indices.indice_jugador')->with('jugadors', $jugadors);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clubs = Club::all();
        $equipos = Equipo::all();

        return view('forms.form_jugador')->with('clubs', $clubs)->with('equipos', $equipos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jugador = new Jugador;
        $jugador->Num_i = $request->Num_i;
        $jugador->Primer_nombre = $request->Nombre;
        $jugador->Apellido = $request->Apellido;
        $jugador->Nacionalidad = $request->Nacionalidad;
        $jugador->Posicion = $request->Posicion;
        $jugador->Peso = $request->Peso;
        $jugador->Altura = $request->Altura;
        $jugador->Fecha_nac = $request->Fecha_nac;
        $jugador->Goles_mun = $request->Goles_mun;
        $jugador->Num_playera = $request->Num_playera;
        $jugador->equipo_id = $request->Equipo;
        $jugador->save();

        foreach ($request->Club as $key => $value) {
            $jugador->clubs()->attach($value);
        }

        return redirect()->route('Inicio');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Jugador  $jugador
     * @return \Illuminate\Http\Response
     */
    public function show(Jugador $jugador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Jugador  $jugador
     * @return \Illuminate\Http\Response
     */
    public function edit(Jugador $jugador)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Jugador  $jugador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jugador $jugador)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Jugador  $jugador
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jugador $jugador)
    {
        //
    }
}
