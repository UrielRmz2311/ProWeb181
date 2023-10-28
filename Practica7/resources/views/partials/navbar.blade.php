<nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand fw-bold">EL RINCÓN DE URIEL</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{request()->routeIs('/principal')?'text-primary fw-bold':''}}" aria-current="page" href="{{route('principal')}}">PRINCIPAL</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{request()->routeIs('/formulario')?'text-primary fw-bold':''}}" href="{{route('formulario')}}">REGISTRO DE LIBRO</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>