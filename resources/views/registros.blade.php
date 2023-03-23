@extends('./layouts/main')
@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">{{$titulo}} | Altas y bajas</h1>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12">
                <a class="btn btn-outline-dark" href="/crear">Crear Nuevo registro</a>
                <hr>
                <table class="table table-responsive table-hover" id="tableRegistros">
                    <thead>
                        <tr class="table-dark text-center">
                            <th>Tipo</th>
                            <th>Categoria</th>
                            <th>Cantidad</th>
                            <th>Descripción</th>
                            <th>Fecha</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)
                        <tr class="text-center">
                            <td>{{$item->tipo}}</td>
                            <td>{{$item->categoria}}</td>
                            <td>${{$item->cantidad}}</td>
                            <td>{{$item->descripcion}}</td>
                            <td>{{$item->created_at}}</td>
                            <td></td>
                            <td></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
   
    <script type="text/javascript">
        /* $(function () {
          var table = $('#tableRegistros').DataTable();
        }); */
        let table = $('#tableRegistros').Datatable();
      </script>
    
@endsection