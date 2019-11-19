<?php

namespace App\Http\Controllers;

use App\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hotel = Hotel::all();

        return view('indices.indice_hotel')->with('hotel', $hotel);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forms.form_hotel');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hotel = new Hotel;
        $hotel->Nombre = $request->Nombre;
        $hotel->Telefono = $request->Telefono;
        $hotel->NumeroExt = $request->NumeroExt;
        $hotel->Calle = $request->Calle;
        $hotel->CP = $request->CP;
        $hotel->save();

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
        return view('shows.show_hotel', [
            'hotel' => $hotel
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function edit(Hotel $hotel)
    {
        return view('f_updates.f_up_hotel', [
            'hotel' => $hotel
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function update(Hotel $hotel, Request $request)
    {
        $hotel->update([
            'Nombre' => request('Nombre'),
            'Telefono' => request('Telefono'),
            'Calle' => request('Calle'),
            'NumeroExt' => request('NumeroExt'),
            'CP' => request('CP')
        ]);

        return redirect()->route('HotelShow', $hotel);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hotel $hotel)
    {
        $hotel->delete();

        return redirect()->route('HotelIndex');
    }
}
