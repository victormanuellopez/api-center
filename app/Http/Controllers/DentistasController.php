<?php

namespace App\Http\Controllers;

use App\Dentistas;
use Illuminate\Http\Request;

class DentistasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dentistas = Dentistas::all();
        return $dentistas;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
     * @param  \App\Dentistas  $dentistas
     * @return \Illuminate\Http\Response
     */
    public function show(Dentistas $dentistas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dentistas  $dentistas
     * @return \Illuminate\Http\Response
     */
    public function edit(Dentistas $dentistas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dentistas  $dentistas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dentistas $dentistas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dentistas  $dentistas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dentistas $dentistas)
    {
        //
    }
}
