<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic; 

class ComicController extends Controller
{
    public function index()
    {
        $comics = Comic::get(); // Obtenemos todos los cómics

        return view('comics', ['comics' => $comics]); // Pasamos los cómics a la vista
    }
    public function show($id)
    {
        $comic = Comic::find($id);

        return view('producto', ['comic' => $comic]);
    }

    public function admin()
    {
        $comics = Comic::get(); // O cualquier consulta que necesites para obtener los cómics
        return view('admin', ['comics' => $comics]);
    }

    public function eliminar($id)
    {
        // Buscar el cómic por su ID
        $comic = Comic::find($id);

        // Verificar si el cómic existe
        if (!$comic) {
            return redirect()->back()->with('error', 'El cómic no existe.');
        }

        // Eliminar el cómic
        $comic->delete();

        // Redirigir de vuelta con un mensaje de éxito
        return redirect()->back()->with('success', 'El cómic ha sido eliminado correctamente.');
    }
    public function crear(Request $request)
    {
        // Validación de los datos del formulario
        $validatedData = $request->validate([
            'titulo' => 'required|string',
            'precio' => 'required|numeric',
            'imagen' => 'required|string',
            'genero' => 'required|string',
            'descripcion' => 'required|string',
            'autor' => 'nullable|string', 
        ]);
    
        // Crear una nueva instancia de Comic y asignar los valores
        $comic = new Comic();
        $comic->titulo = $validatedData['titulo'];
        $comic->precio = $validatedData['precio'];
        $comic->imagen = $validatedData['imagen'];
        $comic->genero = $validatedData['genero'];
        $comic->descripcion = $validatedData['descripcion'];
        $comic->autor = $validatedData['autor'];
    
        // Guardar el nuevo cómic en la base de datos
        $comic->save();
    
        // Redirigir a la página de administración con un mensaje de éxito
        return redirect()->route('admin')->with('success', 'El cómic ha sido creado correctamente.');
    }
    
}

