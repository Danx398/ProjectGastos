<?php

namespace App\Http\Controllers;

use App\Models\Registro;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AltasBajas extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function inicio()
    {
        $titulo = 'Inicio';
        $pagos = Registro::where('tipo','Pago')->sum('cantidad');
        $gastos = Registro::where('tipo','Gasto')->sum('cantidad');
        // $sum = Model::where('status', 'paid')->sum('sum_field');
        return view('index', compact('titulo','pagos','gastos'));
    }
    public function index()
    {
        $titulo = 'Nuevo registro';
        $items = Registro::all();
        return view('registros', compact('titulo','items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $titulo = 'Crear nuevo registro';
        return view('crear', compact('titulo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $descripcion = $request->filled('descripcion') ? $request->input('descripcion') : 'Sin descripcion';
        $registro = new Registro();
        $registro->tipo = $request->registro;
        $registro->categoria = $request->categoria;
        $registro->cantidad = $request->cantidad;
        $registro->descripcion = $descripcion;
        $registro->save();
        return redirect('/registro');
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
    }
}
