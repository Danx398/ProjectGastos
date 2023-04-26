@extends('layouts/main')
@section('contenido')
<div class="container">
    <h1 class="text-center mt-2 mb-5">{{$titulo}} de Gastos y Ganancias</h1>
    <div class="row justify-content-center">
        <div class="col-4">
            <form action="/registrar" class="form-control" method="POST">
                @method('POST')
                @csrf
                <div class="form-floating">
                    <input required='' name="name" type="text" class="form-control mt-2" autofocus id="floatingInputValue" placeholder="name@example.com">
                    <label for="floatingInputValue">Usuario</label>
                </div>
                <div class="form-floating">
                    <input required='' name="password" type="password" class="form-control mt-2" id="floatingInputValue" placeholder="name@example.com">
                    <label for="floatingInputValue">Password</label>
                </div>

                <div class="row justify-content-center">
                    <div class="col-6 mt-4">
                        <a class="btn btn-outline-dark container-fluid" href="/">Volver</a>
                    </div>
                    <div class="col-6 mt-4">
                        <button class="btn btn-outline-dark container-fluid">Registrar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection