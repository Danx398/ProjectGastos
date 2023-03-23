<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>{{$titulo}}</title>
    <link rel="stylesheet" href="{{asset('css/datatable.css')}}">
</head>
<body>
    @include('sweetalert::alert')
    @include('../shared/nav')
    @yield('contenido')
    <script src="{{mix('js/app.js')}}"></script>
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/datatable.js')}}"></script>
</body>
</html>