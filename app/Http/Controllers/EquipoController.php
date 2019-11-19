<?php

namespace App\Http\Controllers;

use App\Equipo;
use App\Jugador;
use Illuminate\Http\Request;

class EquipoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipos = Equipo::all();

        return view('indices.indice_equipo')->with('equipos', $equipos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forms.form_equipo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $equipo = new Equipo;
        $equipo->Pais = $request->Pais;
        $equipo->Director = $request->Director;
        $equipo->Entrenador = $request->Entrenador;
        $equipo->Camiseta = $request->Camiseta;
        $equipo->save();

        return redirect()->route('Inicio');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Equipo $equipo)
    {
        return view('shows.show_equipo',[
            'equipo' => $equipo
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Equipo $equipo)
    {
        return view('f_updates.f_up_equipo',[
            'equipo' => $equipo
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Equipo $equipo)
    {
        $equipo->update([
            'Pais' => request('Pais'),
            'Director' => request('Director'),
            'Entrenador' => request('Entrenador'),
            'Camiseta' => request('Camiseta')
        ]);

        return redirect()->route('EquipoShow', $equipo);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Equipo $equipo)
    {
        $equipo->delete();

        return redirect()->route('EquipoIndex');
    }
}
