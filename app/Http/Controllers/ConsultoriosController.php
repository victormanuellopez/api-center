<?php

namespace App\Http\Controllers;

use App\Consultorios;
use Illuminate\Http\Request;

class ConsultoriosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consultorios = Consultorios::all();
        return $consultorios;
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
     * @param  \App\Consultorios  $consultorios
     * @return \Illuminate\Http\Response
     */
    public function show(Consultorios $consultorios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Consultorios  $consultorios
     * @return \Illuminate\Http\Response
     */
    public function edit(Consultorios $consultorios)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Consultorios  $consultorios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Consultorios $consultorios)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Consultorios  $consultorios
     * @return \Illuminate\Http\Response
     */
    public function destroy(Consultorios $consultorios)
    {
        //
    }
}
