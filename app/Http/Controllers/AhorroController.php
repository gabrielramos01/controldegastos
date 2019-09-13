<?php

namespace App\Http\Controllers;

use App\Ahorro;
use Illuminate\Http\Request;

class AhorroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('ahorros.ahorros');
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('ahorros.CreateAhorro');
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
     * @param  \App\Ahorro  $ahorro
     * @return \Illuminate\Http\Response
     */
    public function show(Ahorro $ahorro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ahorro  $ahorro
     * @return \Illuminate\Http\Response
     */
    public function edit(Ahorro $ahorro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ahorro  $ahorro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ahorro $ahorro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ahorro  $ahorro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ahorro $ahorro)
    {
        //
    }
}
