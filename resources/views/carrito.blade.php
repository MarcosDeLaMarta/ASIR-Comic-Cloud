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
                    @foreach ($cart as $id => $detalle)
                    <tr>
                        <td>{{ $detalle['comic']->id_comic }}</td>
                        <td>{{ $detalle['comic']->titulo }}</td>
                        <td>{{ $detalle['comic']->precio }} €</td>
                        <td>
                            <input type="number" name="cantidad" value="{{ $detalle['cantidad'] }}" min="1" class="form-control d-inline-block actualizar-cantidad" data-id="{{ $id }}" style="width: 70px;">
                        </td>
                        <td>
                            <form action="{{ route('eliminarDelCarrito', ['idProducto' => $id]) }}" method="POST">
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
                <form action="{{ route('realizarPedido') }}" method="POST" style="display:inline-block;">
                    @csrf
                    <button type="submit" class="btn btn-success">Realizar Pedido</button>
                </form>
            </div>
        @endif
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const inputs = document.querySelectorAll('.actualizar-cantidad');
            inputs.forEach(input => {
                input.addEventListener('change', function () {
                    const idProducto = this.getAttribute('data-id');
                    const cantidad = this.value;

                    if (cantidad < 1) {
                        alert('La cantidad debe ser al menos 1.');
                        return;
                    }

                    fetch(`/cart/${idProducto}/update-quantity`, {
                        method: 'PATCH',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify({
                            cantidad: cantidad
                        })
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            alert('Cantidad actualizada correctamente.');
                        } else {
                            alert('Error al actualizar la cantidad.');
                        }
                    })
                    .catch(error => console.error('Error:', error));
                });
            });
        });
    </script>
</x-layout>


