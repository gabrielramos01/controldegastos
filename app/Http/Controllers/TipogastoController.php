<?php

namespace App\Http\Controllers;

use App\Tipogasto;
use Illuminate\Http\Request;

class TipogastoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tipogastos.tipogastos');
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('tipogastos.CreateTipogasto');
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
            'nombre_tipogasto'=>'required',
            'monto_gasto'=>'required|int'
            ]);
       $tipogastos = new Tipogasto(); 
        
        $tipogastos->nombre_tipogasto = $request->input('nombre_tipogasto');
        $tipogastos->descripcion = $request->input('descripcion');
        $tipogastos->monto_gasto = $request->input('monto_gasto');
        $tipogastos->fecha_tipogasto = $request->input('fecha_tipogasto');
        $tipogastos->save();

        $tipogastos = Tipogasto::All();
        return view('tipogastos.tipogastos', compact('tipogastos'));
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tipogasto  $tipogasto
     * @return \Illuminate\Http\Response
     */
    public function show(Tipogasto $tipogasto)
    {
        $tipogastos = Tipogasto::All();
        return view('tipogastos.tipogastos', compact('tipogastos'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tipogasto  $tipogasto
     * @return \Illuminate\Http\Response
     */
    public function edit(Tipogasto $tipogasto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tipogasto  $tipogasto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tipogasto $tipogasto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tipogasto  $tipogasto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tipogasto $tipogasto)
    {
        //
    }
}
