<x-layout>   
    <div class="container mt-5 pb-5">
        <h2>Tu Cesta</h2>

        @if ($cart->isEmpty())
            <p>No hay productos en tu cesta.</p>
        @else
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Título</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cart as $detalle)
                        <tr>
                            <td>{{ $detalle['comic']->id_comic }}</td>
                            <td>{{ $detalle['comic']->titulo }}</td>
                            <td>{{ $detalle['comic']->precio }} €</td>
                            <td>{{ $detalle['cantidad'] }}</td>
                            <td>
                                <form action="{{ route('eliminarDelCarrito', ['idProducto' => $detalle['comic']->id_comic]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                </form>                           
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <br>
            <div class="text-center">
                <a href="{{ route('comics') }}" class="btn btn-primary">Continuar Comprando</a>
                <a href="#" class="btn btn-success">Realizar Pedido</a>
            </div>
        @endif
    </div>
</x-layout>
