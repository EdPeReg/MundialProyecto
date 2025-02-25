<?php

namespace App\Http\Controllers;

use App\Reservacion;
use App\Equipo;
use App\Hotel;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReservacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservacions = Reservacion::all();

        return view('indices.indice_reservacion')->with('reservacions', $reservacions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $equipos = Equipo::all();
        $hotels = Hotel::all();

        return view('forms.form_reservacion')->with('equipos', $equipos)->with('hotels', $hotels);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reservacion = new Reservacion;
        $reservacion->Num_habitaciones = $request->Num_habitaciones;
        $reservacion->Duracion = $request->Duracion;
        $reservacion->Fecha_entrada = $request->Fecha_entrada;
        $Fecha = Carbon::create($request->Fecha_entrada);
        $Fecha->addDays($request->Duracion);
        $reservacion->Fecha_salida = $Fecha;
        $reservacion->equipo_id = $request->Equipo;
        $reservacion->hotel_id = $request->Hotel;
        $reservacion->save();

        return redirect()->route('Inicio');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Reservacion  $reservacion
     * @return \Illuminate\Http\Response
     */
    public function show(Reservacion $reservacion)
    {
        return view('shows.show_reservacion',[
            'reservacion' => $reservacion
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reservacion  $reservacion
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservacion $reservacion)
    {
         $hoteles = Hotel::all();
         $equipos = Equipo::all();

        return view('f_updates.f_up_reservacion',[
            'reservacion' => $reservacion
        ])->with('hoteles', $hoteles)->with('equipos', $equipos);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reservacion  $reservacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservacion $reservacion)
    {
        $Fecha = Carbon::create($request->Fecha_entrada);
        $Fecha->addDays($request->Duracion);

         $reservacion->update([
            'hotel_id' => request('Hotel'),
            'equipo_id' => request('Equipo'),
            'Num_habitaciones' => request('Num_habitaciones'),
            'Duracion' => request('Duracion'),
            'Fecha_entrada' => request('Fecha_entrada'),
            'equipo_id' => request('Equipo'),
            'hotel_id' => request('Hotel')
        ]);

        return redirect()->route('ReservacionShow', $reservacion);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reservacion  $reservacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservacion $reservacion)
    {
        $reservacion->delete();

        return redirect()->route('ReservacionIndex');
    }
}
