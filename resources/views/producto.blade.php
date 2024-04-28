<x-layout>
    <div class="container-fluid">
        <div class="container my-4 bg-grey">
            <div class="btn-group m-2">
                <a href="{{ route('comics') }}" class="btn btn-outline-success">Inicio</a>
                <a href="#" class="btn btn-outline-success">{{ $comic['genero'] }}</a>
            </div>
            <div class="row">
                <div class="imgdiv col-12 col-sm-auto pb-2">
                    <img src="{{ asset('img/' . $comic['imagen']) }}" class="img-fluid" alt="">
                </div>
                <div class="col-8 m-2">
                    <h1 class="mb-3">{{ $comic['titulo'] }}</h1>
                    <small><u>{{ $comic['autor'] }}</u></small><br>
                    <small><u>ECC EDICIONES</u></small>
                    <p class="mt-3 mb-1 font-weight-bold">Descripción :</p>
                    <p>{{ $comic['descripcion'] }}</p>
                    <small><span class="font-weight-bold">Ancho:</span> 168 mm</small><br>
                    <small><span class="font-weight-bold">Largo:</span> 257 mm</small><br>
                    <small><span class="font-weight-bold">Peso:</span> 250 gr</small><br>
                    <button class="btn btn-success btn-sm my-2">DISPONIBLE</button>
                    <p class="text-rojo"><span class="tachados">{{ $comic['precio'] }} €</span> {{ $comic['precio'] }} €</p>
                    <div class="d-grid gap-2 ">
                        <a href="#" class="btn btn-outline-success"><i class="bi bi-cart-check"></i> Añadir a la cesta</a>
                    </div>
                    <br>
                </div>
            </div>
        </div>
        <div class="container my-4 bg-grey">
            <table class="table">
                <tbody>
                    <tr>
                        <th>ISBN :</th>
                        <td>978-84-19186-70-6</td>
                    </tr>
                    <tr>
                        <th>Fecha de edición :</th>
                        <td>08/03/2022</td>
                    </tr>
                    <tr>
                        <th>Idioma :</th>
                        <td>Español, Castellano</td>
                    </tr>
                    <tr>
                        <th>Colección :</th>
                        <td>BATMAN RENACIMIENTO</td>
                    </tr>
                    <tr>
                        <th>Nº de páginas :</th>
                        <td>72</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-layout>
