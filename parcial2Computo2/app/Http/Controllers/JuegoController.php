<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Juego;
use App\Http\Resources\Juego as JuegoResource;

class JuegoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $juegos=Juego::all(); 
       return JuegoResource::collection($juegos);
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
        $juego=$request->isMethod('put')?  Juego::findOrFail($request->id):new Juego;
        $juego->id=$request->input('id');
        $juego->title=$request->input('cetegoria');
        $juego->title=$request->input('nombre');
        $juego->title=$request->input('genero');
        $juego->descripcion=$request->input('descripcion');

        if ($juego->save()){
            return new JuegoResource($juego);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $juego=Juego::findOrFail($id);
        return new JuegoResource($juego);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $juego=Juego::findOrFail($id);

if ($juego->delete()){
    return new JuegoResource($juego);
}
    }
}
