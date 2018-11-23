<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sala;
use App\Http\Requests\SalaRequest;

class SalaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $salas = Sala::all();
        return view('sala.show', compact('salas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('sala.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $salas = new Sala();

        $salas ->pelicula = $request->input('pelicula');
        $salas ->numero_sala = $request->input('sala');
        $salas ->total_asiento = $request->input('asiento');

        $salas->save();
        $salas = Sala::all();
        return view('sala.show', compact('salas'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $salas = Sala::find($id);
        return view('sala.edit', compact('salas'));
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
        $salas = Sala::find($id);
        $salas ->pelicula = $request->input('pelicula');
        $salas ->numero_sala = $request->input('sala');
        $salas ->total_asiento = $request->input('asiento');

        $salas->save();
        $salas = Sala::all();
        return view('sala.show', compact('salas'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $salas = Sala::find($id);
        $salas -> delete();
        $salas = Sala::all();
        return view('sala.show', compact('salas'));
    }
}
