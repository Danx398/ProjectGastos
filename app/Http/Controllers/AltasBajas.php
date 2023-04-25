<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Registro;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AltasBajas extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth'])->only(['inicio','index']);
    }
    public function inicio()
    {
        $titulo = 'Inicio';
        $pagos = Registro::where('tipo','Pago')->sum('cantidad');
        $gastos = Registro::where('tipo','Gasto')->sum('cantidad');
        $total = Registro::sum('cantidad');
        // $sum = Model::where('status', 'paid')->sum('sum_field');
        return view('index', compact('titulo','pagos','gastos','total'));
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
        $items = Categoria::all();
        return view('crear', compact('titulo','items'));
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
        if($registro->save()){
            Alert::success('Registro agregado con exito', ':D');
        }else{
            Alert::error('Registro no agregado con exito', ':C');
        }
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
        $titulo = 'Eliminar Registro';
        $items = Registro::find($id);
        return view("show",compact('titulo','items'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $titulo='Actualizar Registro';
        $items = Registro::find($id);
        $categoria = Categoria::all();
        return view ('editar',compact('titulo','items','categoria'));
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
        $descripcion = $request->filled('descripcion') ? $request->input('descripcion') : 'Sin descripcion';
        $registro = Registro::find($id);
        $registro->cantidad = $request->cantidad;
        $registro->descripcion = $descripcion;
        if($registro->save()){
            Alert::success('Registro actualizado con exito', ':D');
        }else{
            Alert::error('Registro no actualizado con exito', ':C');
        }
        return redirect('/registro');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Registro::find($id);
        $item->delete() ? Alert::success('Eliminado con exito', ':D'):Alert::error('Registro no actualizado con exito', ':C');
        

        return redirect('/registro');

    }
}
