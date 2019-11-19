<?php

namespace App\Http\Controllers;

use App\Cancha;
use Illuminate\Http\Request;

class CanchaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $canchas = Cancha::all();
        return view('indices.indice_cancha')->with('canchas', $canchas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forms.form_cancha');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cancha = new Cancha;
        $cancha->Ubicacion = $request->Ubicacion;
        $cancha->Nombre = $request->Nombre;
        $cancha->save();

        return redirect()->route('Inicio');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cancha  $cancha
     * @return \Illuminate\Http\Response
     */
    public function show(Cancha $cancha)
    {
        return view('shows.show_cancha',[
            'cancha' => $cancha
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cancha  $cancha
     * @return \Illuminate\Http\Response
     */
    public function edit(Cancha $cancha)
    {
        return view('f_updates.f_up_cancha',[
            'cancha' => $cancha
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cancha  $cancha
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cancha $cancha)
    {
         $cancha->update([
            'Ubicacion' => request('Ubicacion'),
            'Nombre' => request('Nombre')
        ]);

        return redirect()->route('CanchaShow', $cancha);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cancha  $cancha
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cancha $cancha)
    {
        $cancha->delete();

        return redirect()->route('CanchaIndex');
    }
}
