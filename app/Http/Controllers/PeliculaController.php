<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelicula;
use App\Http\Requests\PeliculaRequest;

class PeliculaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peliculas = Pelicula::all();
        return view('pelicula.menu', compact('peliculas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pelicula.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PeliculaRequest $request)
    {
        if($request->hasFile('archivo')){
            $file = $request->file('archivo');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/images', $name);
        }
        $peliculas = new Pelicula();        
        $peliculas->avatar = $name;
        $peliculas->clasificacion = $request->input('clasificacion');
        $peliculas->nombre = $request->input('pelicula');  
        $peliculas->año= $request->input('año');           
        $peliculas->genero = $request->input('genero');
        $peliculas->director = $request->input('director');
        $peliculas->descripcion = $request->input('descripcion');
        
        $peliculas->save();
        
        $peliculas = Pelicula::all();
        return view('pelicula.menu', compact('peliculas'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $peliculas = Pelicula::find($id);
        return view('pelicula.show', compact('peliculas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)    
    {
        $peliculas = Pelicula::find($id);
        return view('pelicula.edit', compact('peliculas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $peliculas =Pelicula::find($id);
        if($request->hasFile('archivo')){
            $file = $request->file('archivo');
            $name = time().$file->getClientOriginalName();
            $peliculas->avatar =$name;
            $file->move(public_path().'/images', $name);
        }

        $peliculas -> nombre=$request->input('pelicula');
        $peliculas -> descripcion=$request->input('descripcion');
        $peliculas -> clasificacion=$request->input('clasificacion');
        $peliculas -> año=$request->input('año');
        $peliculas -> director=$request->input('director');
        
        
        $peliculas -> save();

        $peliculas = Pelicula::all();
        return view('pelicula.menu', compact('peliculas'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $peliculas = Pelicula::find($id);
        $peliculas -> delete();
        $file_path = public_path().'/images/'.$peliculas->avatar;
        \File::delete($file_path);        
        $peliculas = Pelicula::all();
        return view('pelicula.menu', compact('peliculas'));
    }
}
