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
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{route('profile.edit')}}"><i class="bi bi-person-fill"></i> {{ Auth::user()->name }}</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ route('comics') }}"><i class="bi bi-list-nested"></i> Productos</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ route('verCarrito') }}"><i class="bi bi-bag"></i></a></li>
                <li class="nav-item mx-0 mx-lg-1">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="nav-link py-3 px-0 px-lg-3 rounded" title="Cerrar Sesión">
                            <i class="bi bi-box-arrow-left"></i>
                        </button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</header>