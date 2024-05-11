<x-layout>
    <!-- Contenido principal de la vista -->
<div class="container-fluid">
    @include('partials.msg')
        <!-- Sección de cómics novedosos -->
        <div class="row p-5 d-flex justify-content-around bg-primary">
            <h1 class="nav-link text-white text-center bg-secondary rounded">Los más novedosos</h1>

            @foreach ($comics as $comic)
                <div class="card col-xs-12 col-3 my-4 m-5" style="width: 19rem; height: auto;">
                    <a href="{{ route('producto', ['id' => $comic['id_comic']]) }}">
                        <img src="{{ asset('img/' . $comic['imagen']) }}" class="card-img-top pt-2" alt="..." style="max-width: 18rem;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">{{ $comic['titulo'] }}</h5>
                        <p class="card-text">
                            <button type="button" class="btn btn-primary btn-sm">Superhéroes</button>
                            <button type="button" class="btn btn-primary btn-sm">{{ $comic['genero'] }}</button>
                        </p>
                        <p class="card-text text-red">{{ $comic['precio'] }} € <span class="tachado">{{ $comic['precio'] }} €</span></p>
                        <form action="{{ route('addToCart', ['id' => $comic->id_comic]) }}" method="POST">
                            @csrf
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-success">
                                    <i class="bi bi-cart-plus"></i> Añadir a la cesta
                                </button>
                            </div>
                        </form>                                     
                    </div>
                </div>
            @endforeach

        </div>
</div>

</x-layout>