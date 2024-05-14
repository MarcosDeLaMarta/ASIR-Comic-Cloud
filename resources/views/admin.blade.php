<x-admin-layout>
    <div class="container mt-5">
        @include('partials.msg')
        <h1 class="mb-4 text-center">Listado de Productos</h1>
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Título</th>
                        <th>Autor</th>
                        <th>Descripción</th>
                        <th>Precio</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($comics as $comic)
                        <tr>
                            <td>{{ $comic->id_comic }}</td>
                            <td>{{ $comic->titulo }}</td>
                            <td>{{ $comic->autor }}</td>
                            <td>{{ $comic->descripcion }}</td>
                            <td>{{ $comic->precio }}€</td>
                            <td>
                                <form action="{{ route('eliminarComic', ['id' => $comic->id_comic]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center">No hay productos disponibles</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    
        <div class="text-center mb-5">
            <a href="{{ route('addproducto') }}" class="btn btn-primary">Añadir Producto</a>
        </div>
    </div>
</x-admin-layout>
