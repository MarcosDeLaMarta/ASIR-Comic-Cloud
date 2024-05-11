<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetallesPedido extends Model
{
    protected $table = 'detalles_pedido';

    public function comic()
    {
        return $this->belongsTo(Comic::class, 'id_comic');
    }
}
