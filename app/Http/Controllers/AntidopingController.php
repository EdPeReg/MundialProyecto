<?php

namespace App\Http\Controllers;

use App\Antidoping;
use App\Jugador;
use Illuminate\Http\Request;

class AntidopingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $antidoping = Antidoping::all();

        return view('indices.indice_antidoping')->with('antidoping', $antidoping);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jugadores = Jugador::all();

        return view('forms.form_antidoping')->with('jugadores', $jugadores);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $antidoping = new Antidoping;
        $antidoping->Resultado = $request->Resultado;
        $antidoping->Lugar = $request->Lugar;
        $antidoping->Fecha = $request->Fecha;
        $antidoping->jugador_id = $request->Jugador;
        $antidoping->save();

        return redirect()->route('Inicio');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Antidoping  $antidoping
     * @return \Illuminate\Http\Response
     */
    public function show(Antidoping $antidoping)
    {
        return view('shows.show_antidoping',[
            'antidoping' => $antidoping
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Antidoping  $antidoping
     * @return \Illuminate\Http\Response
     */
    public function edit(Antidoping $antidoping)
    {
        $jugadores = Jugador::all();

        return view('f_updates.f_up_antidoping',[
            'antidoping' => $antidoping
        ])->with('jugadores', $jugadores);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Antidoping  $antidoping
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Antidoping $antidoping)
    {
        $antidoping->update([
            'Resultado' => request('Resultado'),
            'Lugar' => request('Lugar'),
            'Fecha' => request('Fecha')
        ]);

        return redirect()->route('AntidopingShow', $antidoping);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Antidoping  $antidoping
     * @return \Illuminate\Http\Response
     */
    public function destroy(Antidoping $antidoping)
    {
        $antidoping->delete();

        return redirect()->route('AntidopingIndex');
    }
}
