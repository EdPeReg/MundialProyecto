<?php

namespace App\Http\Controllers;

use App\Partido;
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
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forms.form_partido');
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
        $partido->Fecha = $request->Fecha;
        $partido->Resultado_eq1 = $request->Resultado_eq1;
        $partido->Resultado_eq2 = $request->Resultado_eq2;
        $partido->save();

        $partido = \App\Partido::latest()->first();
        $arbitro = \App\Arbitro::orderBy('created_at', 'desc')->first();

        $partido->arbitros()->attach($arbitro);

        $partido = \App\Partido::latest()->first();
        $equipo = \App\Equipo::orderBy('created_at', 'desc')->first();

        $partido->equipos()->attach($equipo);

        return redirect()->route('Inicio');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function show(Hotel $hotel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function edit(Hotel $hotel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hotel $hotel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hotel $hotel)
    {
        //
    }
}
$arbitro = Partido::find(1);
        echo $arbitro;