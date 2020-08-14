<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supermercado;

class SupermercadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $supermercados = Supermercado::all();
        return $supermercados;

        //return Supermercado::all();
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
        $super = new Supermercado;
        $super->name = $request->name;
        $super->direccion = $request->direccion;
        $super->abierto = $request->abierto;
        $super->save(); //importante
        return Supermercado::all();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $super = Supermercado::findOrFail($id); //Supermercado::find($id);
        return $super;

        //return Supermercado::findOrFail($id);
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
        $supermercado = Supermercado::findOrFail($id);
        $supermercado->name = $request->name;
        $supermercado->direccion = $request->direccion;
        $supermercado->abierto = $request->abierto;
        $supermercado->save();
        return Supermercado::findOrFail($id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $super = Supermercado::findOrFail($id);
        $super->delete();
        return Supermercado::all();
    }
}
