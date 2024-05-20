<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetallesPedido extends Model
{
    use HasFactory;

    protected $table = 'detalles_pedido'; 

    protected $primaryKey = 'id_detalle';

    protected $fillable = [
        'id_pedido',
        'id_comic',
        'cantidad',
    ];

    public function pedido()
    {
        return $this->belongsTo(Pedido::class, 'id_pedido');
    }

    public function comic()
    {
        return $this->belongsTo(Comic::class, 'id_comic');
    }
}
