@extends('./layouts/main')
@section('contenido')
@include('../shared/nav')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">{{ $titulo }} | Altas y bajas</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <div class="card mt-5" style="width: 50rem;">
                    <div class="card-body">
                        <h3 class="card-title mb-4">Ganancias y Gastos</h3>
                        <h5 class="card-subtitle mb-2 text-center">Total de ganancias <span
                                class="px-2 text-white text-center bg-success">${{ $pagos }}</span></h5>
                        <h5 class="card-subtitle mb-2 text-center">Total de gastos <span
                                class="px-2 text-white text-center bg-danger">${{ $gastos }}</span></h5>
                        <h5 class="card-subtitle mb-2 text-center">Total: <span
                                class="px-2 text-white text-center bg-info">${{ $pagos - $gastos }}</span></h5>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
