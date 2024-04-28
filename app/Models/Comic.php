<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_comic'; // Nombre de la clave primaria
    
    protected $fillable = [
        'titulo',
        'autor',
        'precio',
        'imagen',
        'genero',
        'descripcion',
    ];

}
