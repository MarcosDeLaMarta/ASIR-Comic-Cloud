<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic; // Asegúrate de importar el modelo Comic

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
}

