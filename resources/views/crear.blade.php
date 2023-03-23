@extends('./layouts/main')
@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">{{ $titulo }} | Altas y bajas</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-5 mt-4">
                <form action="/store" method="POST">
                    @method('POST')
                    @csrf
                    <select class="form-select mb-3" aria-label="Default select example" name="registro" required="">
                        <option selected value="">Tipo de Registro</option>
                        <option value="Pago">Pago</option>
                        <option value="Gasto">Gasto</option>
                    </select>
                    <select class="form-select mb-3" aria-label="Default select example" name="categoria" required="">
                        <option selected value="">Categoria</option>
                        <option value="Soporte Tecnico">Soporte Técnico</option>
                        <option value="desarrollo de Aplicaciones">Desarrollo de aplicaciones</option>
                        <option value="Cine">Cine</option>
                        <option value="Netflix">Netflix</option>
                        <option value="Spotify">Spotify</option>
                        <option value="Servicios Medicos">Servicios Medicos</option>
                        <option value="Servicios Domesticos">Servicios Domesticos</option>
                        <option value="Transporte">Transporte</option>
                        <option value="Vestimenta">Vestimenta</option>
                        <option value="Calzado">Calzado</option>
                        <option value="Desarrollo Web">Desarrollo de paginas web</option>
                        <option value="Comida">Comida</option>
                        <option value="Bebidas Alcoholicas">Bebidas alcoholicas</option>
                        <option value="Electrodomesticos">Electrodomesticos</option>
                        <option value="Papeleria">Papeleria</option>
                    </select>
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" id="floatingInput" placeholder="name@example.com"
                            name="cantidad" required="">
                        <label for="floatingInput">Cantidad</label>
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="descripcion"></textarea>
                        <label for="floatingTextarea">Descripción</label>
                    </div>
                    <div class="row justify-content-center mt-4">
                        <div class="col-4"><button class="btn btn-outline-dark">Aceptar</button></div>
                        <div class="col-4"><a href="/registro" class="btn btn-outline-info">Regresar</a></div>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
