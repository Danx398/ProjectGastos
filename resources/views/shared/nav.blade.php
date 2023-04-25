<nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark" data-bs-theme="dark" >
    <div class="container-fluid">
      <a class="navbar-brand text-light" href="/inicio">Inicio</a>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          {{-- <li class="nav-item">
            <a class="nav-link active text-light" aria-current="page" href="/">Inicio</a>
          </li> --}}
          <li class="nav-item">
            <a class="nav-link active text-light" aria-current="page" href="/registro">Nuevo registro</a>
          </li>
        </ul>
        <a href="{{ route('logout') }}" class="btn btn-danger">Cerrar Sesion</a>
      </div>
    </div>
  </nav>