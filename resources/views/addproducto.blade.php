<x-admin-layout>    
    <div class="container mt-5">
        <div class="position-relative">
            <a href="{{ route('admin') }}" class="nav-link py-3 px-0 px-lg-3 rounded"><i class="bi bi-arrow-return-left fs-4"></i></a>
        </div>
        <div class="text-center m-5">
            <h2>Añadir Nuevo Cómic</h2>
        </div>
        
        <form action="{{ route('crearComic') }}" method="post">
            @csrf
            
            <!-- Mostrar errores de validación -->
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            
            <div class="mb-3">
                <label for="titulo" class="form-label">Título:</label>
                <input type="text" class="form-control" id="titulo" name="titulo" required>
            </div>
            <div class="mb-3">
                <label for="autor" class="form-label">Autor:</label>
                <input type="text" class="form-control" id="autor" name="autor" required>
            </div>
            <div class="mb-3">
                <label for="precio" class="form-label">Precio:</label>
                <input type="number" class="form-control" id="precio" name="precio" required>
            </div>
            <div class="mb-3">
                <label for="imagen" class="form-label">URL de la Imagen:</label>
                <input type="text" class="form-control" id="imagen" name="imagen" required>
            </div>
            <div class="mb-3">
                <label for="genero" class="form-label">Género:</label>
                <input type="text" class="form-control" id="genero" name="genero" required>
            </div>
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción:</label>
                <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required></textarea>
            </div>
            <div class="text-center m-5">
                <button type="submit" class="btn btn-primary">Añadir Cómic</button>
            </div>
        </form>
    </div>
</x-admin-layout>
