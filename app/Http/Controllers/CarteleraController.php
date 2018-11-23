<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cartelera;
use App\Pelicula;

class CarteleraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carteleras = Cartelera::all();
        return view('cartelera.show', compact('carteleras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $peliculas = Pelicula::all();
        return view('cartelera.create', compact('peliculas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $carteleras = new Cartelera();
       $carteleras->pelicula = $request->input('pelicula');
       $carteleras->fecha = $request->input('fecha');

        $carteleras->save();
        $carteleras = Cartelera::all();
        return view('cartelera.show', compact('carteleras'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $carteleras = Cartelera::find($id);
        return view('cartelera.edit', compact('carteleras'));
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
        $carteleras = Cartelera::find($id);
        $carteleras -> pelicula=$request->input('pelicula');
        $carteleras -> fecha=$request->input('fecha');

        $carteleras ->save();
        $carteleras = Cartelera::all();
        return view('cartelera.show', compact('carteleras'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $carteleras = Cartelera::find($id);
        $carteleras -> delete();
        $carteleras = Cartelera::all();
        return view('cartelera.show', compact('carteleras'));
    }
}
