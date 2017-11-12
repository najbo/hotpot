<?php

namespace App\Http\Controllers;

use App\Sensordata;
use Illuminate\Http\Request;

class SensordataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

         $name = $request->input('name');
         dd($name);
        return view('sensordata.store');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sensordata  $sensordata
     * @return \Illuminate\Http\Response
     */
    public function show(Sensordata $sensordata)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sensordata  $sensordata
     * @return \Illuminate\Http\Response
     */
    public function edit(Sensordata $sensordata)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sensordata  $sensordata
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sensordata $sensordata)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sensordata  $sensordata
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sensordata $sensordata)
    {
        //
    }
}
