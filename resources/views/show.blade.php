@extends('layouts/main')
@section('contenido')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-4">
            <h3 class="text-center mt-1 mb-2">El registro a eliminar es:</h3>

            <div class="card text-bg-light mb-3 mt-5">
                <div class="card-header">Información del producto</div>
                <div class="card-body">
                    <ul>
                        <li>Tipo: {{ $items->tipo }}</li>
                        <li>Categoria: {{ $items->categoria }}</li>
                        <li>Cantidad: ${{$items->cantidad}}</li>
                        <li>Descripcion: {{$items->descripcion}}</li>
                    </ul>
                    <row>
                        <div class="col-12">
                            <form action="{{ route('destroy',$items->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger mt-3 container-fluid">Eliminar Permanentemente</button>
                            </form>
                            <div class="col-12">
                                <a href="/registro" class="btn btn-info mt-1 container-fluid">Volver</a>
                            </div>
                        </div>
                    </row>
                    

                </div>
            </div>
        </div>
    </div>
</div>
@endsection