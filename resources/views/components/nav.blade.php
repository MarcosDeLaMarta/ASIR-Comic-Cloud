
    @if(session('usuario'))
        <header class="navbar navbar-expand-lg bg-secondary text-uppercase " id="mainNav">
            <div class="container-fluid px-4">
                <a class="navbar-brand ms-5" href="{{ url('/') }}"><img src="{{ asset('img/logo.png') }}" class="img-fluid logo" alt="..."></a>
                <p class="navbar-brand text-white m-lg-2 ms-5 nombretitulo">Comic Cloud</p>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mt-2"><input class="form-control " type="search" placeholder="Buscar" aria-label="Search"></li>    
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#"><i class="bi bi-person-circle"></i> Perfil</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ route('comics') }}"><i class="bi bi-list-nested"></i> Productos</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ route('verCarrito') }}"><i class="bi bi-bag"></i> Cesta</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ route('cerrarSesion') }}"><i class="bi bi-box-arrow-left"></i> Cerrar Sesión </a></li>
                    </ul>
                </div>
            </div>
        </header>
    @else
        <header class="navbar navbar-expand-lg bg-secondary text-uppercase " id="mainNav">
            <div class="container-fluid px-4">
                <a class="navbar-brand ms-5" href="{{ url('/') }}"><img src="{{ asset('img/logo.png') }}" class="img-fluid logo" alt="..."></a>
                <p class="navbar-brand text-white m-lg-2 ms-5 nombretitulo">Comic Cloud</p>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ route('login') }}"><i class="bi bi-person-circle"></i> Iniciar sesión</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ route('comics') }}"><i class="bi bi-list-nested"></i> Productos</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ route('verCarrito') }}"><i class="bi bi-bag"></i> Cesta</a></li>
                    </ul>
                </div>
            </div>
        </header>
    @endif

