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
