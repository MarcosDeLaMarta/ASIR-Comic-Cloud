<x-admin-layout>
    <div class="container mt-5">
        <h2>Lista de Pedidos</h2>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if ($pedidos->isEmpty())
            <p>No hay pedidos.</p>
        @else
            <table class="table">
                <thead>
                    <tr>
                        <th>ID Pedido</th>
                        <th>Usuario</th>
                        <th>Fecha</th>
                        <th>Estado</th>
                        <th>Detalles</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pedidos as $pedido)
                        <tr>
                            <td>{{ $pedido->id_pedido }}</td>
                            <td>{{ $pedido->usuario->name }}</td>
                            <td>{{ $pedido->fecha_pedido }}</td>
                            <td>
                                <form action="{{ route('pedidos.update', $pedido->id_pedido) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <select name="estado" class="form-control" onchange="this.form.submit()">
                                        <option value="Pendiente" {{ $pedido->estado == 'Pendiente' ? 'selected' : '' }}>Pendiente</option>
                                        <option value="En Proceso" {{ $pedido->estado == 'En Proceso' ? 'selected' : '' }}>En Proceso</option>
                                        <option value="Completado" {{ $pedido->estado == 'Completado' ? 'selected' : '' }}>Completado</option>
                                        <option value="Cancelado" {{ $pedido->estado == 'Cancelado' ? 'selected' : '' }}>Cancelado</option>
                                    </select>
                                </form>
                            </td>
                            <td>
                                <ul>
                                    @foreach ($pedido->detallesPedido as $detalle)
                                        <li>{{ $detalle->comic->titulo }} - Cantidad: {{ $detalle->cantidad }}</li>
                                    @endforeach
                                </ul>
                            </td>
                            <td>
                                <form action="{{ route('pedidos.destroy', $pedido->id_pedido) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</x-admin-layout>
