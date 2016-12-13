<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bycycle;

class BycyclesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return "Hello from controller...";
        $bycycle = Bycycle::all();
        return response()->json($bycycle);
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
        $bycycles = Bycycle::create($request->all());
        // $bycycles = Bycycle::all();
        // $bycycles->name = $request->input('name');
        // $bycycles->series = $request->input('series');
        // $bycycles->save();
        return response()->json($bycycles);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bycycles = Bycycle::find($id);
        return response()->json($bycycles);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bycycles = Bycycle::find($id);
        return response()->json($bycycles);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $bycycles = Bycycle::find($id);
        $bycycles->name = $request->input('name');
        $bycycles->series = $request->input('series');
        $bycycles->save();
        return response()->json($bycycles);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bycycles = Bycycle::find($id);
        $bycycles->delete();
        return response()->json($bycycles);
    }
}
