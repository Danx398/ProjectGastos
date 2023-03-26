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
                <form action="{{ route('update',$items->id) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <select class="form-select mb-3" aria-label="Default select example" name="registro" required="" disabled="disabled">
                        <option selected value="{{$items->tipo}}">{{$items->tipo}}</option>
                        <option value="">Tipo de Registro</option>
                        <option value="Pago">Pago</option>
                        <option value="Gasto">Gasto</option>
                    </select>
                    <select class="form-select mb-3" aria-label="Default select example" name="categoria" required="">
                        <option value="" selected>Seleccione una Categoria</option>
                        @foreach ($categoria as $item)
                        <option value="{{$item->tipo_categoria}}" @if ($item->tipo_categoria == $items->categoria) selected @endif>{{$item->tipo_categoria}}</option>
                        @endforeach
                    </select>
                    {{-- <select class="form-select mb-3" aria-label="Default select example" name="categoria" required="">
                        
                        <option value="">Categoria</option>
                        <option value="Soporte Tecnico"  @if ($items->categoria == 'Soporte Tecnico') selected @endif>Soporte Técnico</option>
                        <option value="Desarrollo de Aplicaciones"  @if ($items->categoria == '') selected @endif>Desarrollo de aplicaciones</option>
                        <option value="Cine"  @if ($items->categoria == 'Cine') selected @endif>Cine</option>
                        <option value="Netflix"  @if ($items->categoria == 'Netflix') selected @endif>Netflix</option>
                        <option value="Spotify" @if ($items->categoria == 'Spotify') selected @endif>Spotify</option>
                        <option value="Servicios Medicos" @if ($items->categoria == 'Servicios Medicos') selected @endif>Servicios Medicos</option>
                        <option value="Servicios Domesticos" @if ($items->categoria == 'Servicios Domesticos') selected @endif>Servicios Domesticos</option>
                        <option value="Transporte" @if ($items->categoria == 'Transporte') selected @endif>Transporte</option>
                        <option value="Vestimenta" @if ($items->categoria == 'Vestimenta') selected @endif>Vestimenta</option>
                        <option value="Calzado" @if ($items->categoria == 'Calzado') selected @endif>Calzado</option>
                        <option value="Desarrollo Web" @if ($items->categoria == 'Desarrollo Web') selected @endif>Desarrollo de paginas web</option>
                        <option value="Comida" @if ($items->categoria == 'Comida') selected @endif>Comida</option>
                        <option value="Bebidas Alcoholicas" @if ($items->categoria == 'Bebidas Alcoholicas') selected @endif>Bebidas alcoholicas</option>
                        <option value="Electrodomesticos" @if ($items->categoria == 'Electrodomesticos') selected @endif>Electrodomesticos</option>
                        <option value="Papeleria" @if ($items->categoria == 'Papeleria') selected @endif>Papeleria</option>
                    </select> --}}
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" id="floatingInput" placeholder="name@example.com"
                            name="cantidad" required="" value="{{ $items->cantidad }}">
                        <label for="floatingInput">Cantidad</label>
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="descripcion">{{$items->descripcion}}</textarea>
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
