<x-layout>
    <!-- Contenido principal de la vista -->
<div class="container-fluid">

    <!-- Sección de cómics novedosos -->
    <div class="row p-5 d-flex justify-content-around bg-primary">
        <h1 class="nav-link text-white text-center bg-secondary rounded">Los más novedosos</h1>

        @foreach ($comics as $comic)
            <div class="card col-xs-12 col-3 my-4 m-5" style="width: 19rem; height: auto;">
                <a href="{{ route('verDetalleProducto', ['id' => $comic['id_comic']]) }}">
                    <img src="{{ asset('img/' . $comic['imagen']) }}" class="card-img-top pt-2" alt="..." style="max-width: 18rem;">
                </a>
                <div class="card-body">
                    <h5 class="card-title">{{ $comic['titulo'] }}</h5>
                    <p class="card-text">
                        <button type="button" class="btn btn-primary btn-sm">Superhéroes</button>
                        <button type="button" class="btn btn-primary btn-sm">{{ $comic['genero'] }}</button>
                    </p>
                    <p class="card-text text-red">{{ $comic['precio'] }} € <span class="tachado">{{ $comic['precio'] }} €</span></p>
                    <div class="d-grid gap-2">
                        <a href="" class="btn btn-success"><i class="bi bi-cart-check"></i> Añadir a la cesta</a>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</div>

</x-layout>