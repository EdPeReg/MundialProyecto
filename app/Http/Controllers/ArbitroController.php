<?php

namespace App\Http\Controllers;

use App\Arbitro;
use Illuminate\Http\Request;

class ArbitroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $arbitros = Arbitro::all();

        return view('indices.indice_arbitro')->with('arbitros', $arbitros);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return view('forms.form_arbitro');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $arbitro = new Arbitro;
        $arbitro->Primer_nombre = $request->Primer_nombre;
        $arbitro->Apellido = $request->Apellido;
        $arbitro->save();

        return redirect()->route('Inicio');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Arbitro $arbitro)
    {
        return view('shows.show_arbitro',[
            'arbitro' => $arbitro
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Arbitro $arbitro)
    {
        return view('f_updates.f_up_arbitro',[
            'arbitro' => $arbitro
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Arbitro $arbitro)
    {
        $arbitro->update([
            'Primer_nombre' => request('Primer_nombre'),
            'Apellido' => request('Apellido'),
        ]);

        return redirect()->route('ArbitroShow', $arbitro);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Arbitro $arbitro)
    {
         $arbitro->delete();

        return redirect()->route('ArbitroIndex');
    }
}
