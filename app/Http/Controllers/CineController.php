<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cine;

class CineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cines = Cine::all();
        return view('cine.show', compact('cines'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view ('cine.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cines = new Cine();
        $cines->nombre = $request->input('nombre');
        $cines->telefono= $request->input('telefono');
        $cines->direccion= $request->input('direccion');

        $cines->save();
        $cines = Cine::all();
        return view('cine.show', compact('cines'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cines = Cine::find($id);
        return view('cine.edit', compact('cines'));
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $cines = Cine::find($id);
        $cines ->nombre=$request->input('nombre');
        $cines ->telefono=$request->input('telefono');
        $cines ->direccion=$request->input('direccion');

        $cines ->save();
        $cines = Cine::all();
        return view('cine.show', compact('cines'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $cines = Cine::find($id);
        $cines -> delete();
        $cines = Cine::all();
        return view('cine.show', compact('cines'));
    }
}
