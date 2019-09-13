<?php

namespace App\Http\Controllers;

use App\Ingreso;
use Illuminate\Http\Request;

class IngresoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ingresos= Ingreso::All();
        return view('ingresos.ingresos', compact('ingresos'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('ingresos.CreateIngreso');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre_ingreso'=>'required',
            'monto_ingreso'=>'required|int'
            ]);
       $ingreso = new Ingreso(); 
        
        $ingresos->nombre_ingreso = $request->input('nombre_ingreso');
        $ingresos->descripcion_ingreso = $request->input('descripcion_ingreso');
        $ingresos->monto_ingreso = $request->input('monto_ingreso');
        $ingresos->fecha_ingreso = $request->input('fecha_ingreso');
        $ingresos->save();

        $ingresos = Ingreso::All();
        return view('ingresos.ingresos', compact('ingresos'));
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ingreso  $ingreso
     * @return \Illuminate\Http\Response
     */
    public function show(Ingreso $ingreso)
    {
        $ingresos = Ingreso::All();
        return view('ingresos.ingresos', compact('ingresos'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ingreso  $ingreso
     * @return \Illuminate\Http\Response
     */
    public function edit(Ingreso $ingreso)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ingreso  $ingreso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ingreso $ingreso)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ingreso  $ingreso
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ingreso $ingreso)
    {
        //
    }
}
