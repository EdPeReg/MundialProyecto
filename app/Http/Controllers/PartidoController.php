<?php

namespace App\Http\Controllers;

use App\Partido;
use App\Equipo;
use App\Cancha;
use App\Arbitro;
use Illuminate\Http\Request;

class PartidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partidos = Partido::all();

        return view('indices.indice_partido')->with('partidos', $partidos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $equipos = Equipo::all();
        $arbitros = Arbitro::all();
        $canchas = Cancha::all();

        return view('forms.form_partido')->with('arbitros', $arbitros)->with('canchas', $canchas)->with('equipos', $equipos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $partido = new Partido;
        $partido->cancha_id = $request->Cancha;
        $partido->arbitro_id = $request->Arbitro;
        $partido->Resultado_eq1 = $request->Resultado_eq1;
        $partido->Resultado_eq2 = $request->Resultado_eq2;
        $partido->Fecha = $request->Fecha;
        $partido->save();

        $partido->equipos()->attach([$request->Equipo1, $request->Equipo2]);

        return redirect()->route('Inicio');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function show(Partido $partido)
    {
        return view('shows.show_partido',[
            'partido' => $partido
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function edit(Partido $partido)
    {
        $partidos = Partido::all();
        $canchas = Cancha::all();
        $equipos = Equipo::all();
        $arbitros = Arbitro::all();

        return view('f_updates.f_up_partido',[
            'partido' => $partido
        ])->with('partidos', $partidos)->with('canchas', $canchas)->with('equipos', $equipos)->
        with('arbitros', $arbitros);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Partido $partido)
    {
        $partido->update([
            'Resultado_eq1' => request('Resultado_eq1'),
            'Resultado_eq2' => request('Resultado_eq2'),
            'Fecha' => request('Fecha'),
            'arbitro_id' => request('Arbitro'),
            'cancha_id' => request('Cancha'),
        ]);

        return redirect()->route('PartidoShow', $partido);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Partido $partido)
    {
        $partido->delete();

        return redirect()->route('PartidoIndex');
    }
}
